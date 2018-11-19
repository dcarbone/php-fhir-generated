<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCodeSystem;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRPropertyType;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;

/**
 * A code system resource specifies a set of codes drawn from one or more code systems.
 *
 * Class FHIRCodeSystemProperty
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCodeSystem
 */
class FHIRCodeSystemProperty extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'CodeSystem.Property';

    /**
     * A code that is used to identify the property. The code is used internally (in CodeSystem.concept.property.code) and also externally, such as in property filters.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    private $code = null;

    /**
     * A description of the property- why it is defined, and how its value might be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $description = null;

    /**
     * The type of the property value. Properties of type "code" contain a code defined by the code system (e.g. a reference to anotherr defined concept).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPropertyType
     */
    private $type = null;

    /**
     * Reference to the formal meaning of the property. One possible source of meaning is the [Concept Properties](codesystem-concept-properties.html) code system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $uri = null;

    /**
     * FHIRCodeSystemProperty Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['code'])) {
                $value = $data['code'];
                if (is_array($value)) {
                    $value = new FHIRCode($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRCode($value);
                }
                if (!($value instanceof FHIRCode)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty::__construct - Property \"code\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or data to construct type, saw ".gettype($value));
                }
                $this->setCode($value);
            }
            if (isset($data['description'])) {
                $value = $data['description'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty::__construct - Property \"description\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setDescription($value);
            }
            if (isset($data['type'])) {
                $value = $data['type'];
                if (is_array($value)) {
                    $value = new FHIRPropertyType($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRPropertyType($value);
                }
                if (!($value instanceof FHIRPropertyType)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty::__construct - Property \"type\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPropertyType or data to construct type, saw ".gettype($value));
                }
                $this->setType($value);
            }
            if (isset($data['uri'])) {
                $value = $data['uri'];
                if (is_array($value)) {
                    $value = new FHIRUri($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRUri($value);
                }
                if (!($value instanceof FHIRUri)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty::__construct - Property \"uri\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or data to construct type, saw ".gettype($value));
                }
                $this->setUri($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * A code that is used to identify the property. The code is used internally (in CodeSystem.concept.property.code) and also externally, such as in property filters.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setCode($code)
    {
        if (null === $code) {
            return $this; 
        }
        if (is_scalar($code)) {
            $code = new FHIRCode($code);
        }
        if (!($code instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCodeSystemProperty::setCode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($code)
            ));
        }
        $this->code = $code;
        return $this;
    }

    /**
     * A code that is used to identify the property. The code is used internally (in CodeSystem.concept.property.code) and also externally, such as in property filters.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A description of the property- why it is defined, and how its value might be used.
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
                'FHIRCodeSystemProperty::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A description of the property- why it is defined, and how its value might be used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The type of the property value. Properties of type "code" contain a code defined by the code system (e.g. a reference to anotherr defined concept).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPropertyType
     * @return $this
     */
    public function setType($type)
    {
        if (null === $type) {
            return $this; 
        }
        if (is_scalar($type)) {
            $type = new FHIRPropertyType($type);
        }
        if (!($type instanceof FHIRPropertyType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCodeSystemProperty::setType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPropertyType or appropriate scalar value, %s seen.',
                gettype($type)
            ));
        }
        $this->type = $type;
        return $this;
    }

    /**
     * The type of the property value. Properties of type "code" contain a code defined by the code system (e.g. a reference to anotherr defined concept).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPropertyType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Reference to the formal meaning of the property. One possible source of meaning is the [Concept Properties](codesystem-concept-properties.html) code system.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setUri($uri)
    {
        if (null === $uri) {
            return $this; 
        }
        if (is_scalar($uri)) {
            $uri = new FHIRUri($uri);
        }
        if (!($uri instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCodeSystemProperty::setUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($uri)
            ));
        }
        $this->uri = $uri;
        return $this;
    }

    /**
     * Reference to the formal meaning of the property. One possible source of meaning is the [Concept Properties](codesystem-concept-properties.html) code system.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUri()
    {
        return $this->uri;
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
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getUri())) {
            $a['uri'] = $v;
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
            $sxe = new \SimpleXMLElement('<CodeSystemProperty xmlns="http://hl7.org/fhir"></CodeSystemProperty>');
        }
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize(true, $sxe->addChild('code'));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize(true, $sxe->addChild('description'));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize(true, $sxe->addChild('type'));
        }
        if (null !== ($v = $this->getUri())) {
            $v->xmlSerialize(true, $sxe->addChild('uri'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}