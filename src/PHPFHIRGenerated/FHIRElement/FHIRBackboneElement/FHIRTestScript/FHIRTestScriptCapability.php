<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript;

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
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;

/**
 * A structured set of tests against a FHIR server implementation to determine compliance against the FHIR specification.
 *
 * Class FHIRTestScriptCapability
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript
 */
class FHIRTestScriptCapability extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'TestScript.Capability';

    /**
     * Minimum capabilities required of server for test script to execute successfully.   If server does not meet at a minimum the referenced capability statement, then all tests in this script are skipped.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $capabilities = null;

    /**
     * Description of the capabilities that this test script is requiring the server to support.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $description = null;

    /**
     * Which server these requirements apply to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    private $destination = null;

    /**
     * Links to the FHIR specification that describes this interaction and the resources involved in more detail.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    private $link = [];

    /**
     * Which origin server these requirements apply to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger[]
     */
    private $origin = [];

    /**
     * Whether or not the test execution will require the given capabilities of the server in order for this test script to execute.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $required = null;

    /**
     * Whether or not the test execution will validate the given capabilities of the server in order for this test script to execute.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $validated = null;

    /**
     * FHIRTestScriptCapability Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['capabilities'])) {
                $value = $data['capabilities'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability::__construct - Property \"capabilities\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setCapabilities($value);
            }
            if (isset($data['description'])) {
                $value = $data['description'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability::__construct - Property \"description\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setDescription($value);
            }
            if (isset($data['destination'])) {
                $value = $data['destination'];
                if (is_array($value)) {
                    $value = new FHIRInteger($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRInteger($value);
                }
                if (!($value instanceof FHIRInteger)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability::__construct - Property \"destination\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or data to construct type, saw ".gettype($value)); 
                }
                $this->setDestination($value);
            }
            if (isset($data['link'])) {
                $value = $data['link'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRUri($v);
                        }  elseif (is_scalar($v)) {
                            $v = new FHIRUri($v);
                        }
                        if (!($v instanceof FHIRUri)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability::__construct - Collection field \"link\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addLink($v);
                    }
                }
            }
            if (isset($data['origin'])) {
                $value = $data['origin'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRInteger($v);
                        }  elseif (is_scalar($v)) {
                            $v = new FHIRInteger($v);
                        }
                        if (!($v instanceof FHIRInteger)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability::__construct - Collection field \"origin\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addOrigin($v);
                    }
                }
            }
            if (isset($data['required'])) {
                $value = $data['required'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability::__construct - Property \"required\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value)); 
                }
                $this->setRequired($value);
            }
            if (isset($data['validated'])) {
                $value = $data['validated'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability::__construct - Property \"validated\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value)); 
                }
                $this->setValidated($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Minimum capabilities required of server for test script to execute successfully.   If server does not meet at a minimum the referenced capability statement, then all tests in this script are skipped.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setCapabilities(FHIRReference $capabilities = null)
    {
        if (null === $capabilities) {
            return $this; 
        }
        $this->capabilities = $capabilities;
        return $this;
    }

    /**
     * Minimum capabilities required of server for test script to execute successfully.   If server does not meet at a minimum the referenced capability statement, then all tests in this script are skipped.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCapabilities()
    {
        return $this->capabilities;
    }

    /**
     * Description of the capabilities that this test script is requiring the server to support.
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
                'FHIRTestScriptCapability::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * Description of the capabilities that this test script is requiring the server to support.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Which server these requirements apply to.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setDestination($destination)
    {
        if (null === $destination) {
            return $this; 
        }
        if (is_scalar($destination)) {
            $destination = new FHIRInteger($destination);
        }
        if (!($destination instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptCapability::setDestination - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($destination)
            ));
        }
        $this->destination = $destination;
        return $this;
    }

    /**
     * Which server these requirements apply to.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Links to the FHIR specification that describes this interaction and the resources involved in more detail.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function addLink($link)
    {
        if (null === $link) {
            return $this; 
        }
        if (is_scalar($link)) {
            $link = new FHIRUri($link);
        }
        if (!($link instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptCapability::addLink - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($link)
            ));
        }
        $this->link[] = $link;
        return $this;
    }

    /**
     * Links to the FHIR specification that describes this interaction and the resources involved in more detail.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Which origin server these requirements apply to.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function addOrigin($origin)
    {
        if (null === $origin) {
            return $this; 
        }
        if (is_scalar($origin)) {
            $origin = new FHIRInteger($origin);
        }
        if (!($origin instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptCapability::addOrigin - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($origin)
            ));
        }
        $this->origin[] = $origin;
        return $this;
    }

    /**
     * Which origin server these requirements apply to.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger[]
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Whether or not the test execution will require the given capabilities of the server in order for this test script to execute.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setRequired($required)
    {
        if (null === $required) {
            return $this; 
        }
        if (is_scalar($required)) {
            $required = new FHIRBoolean($required);
        }
        if (!($required instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptCapability::setRequired - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($required)
            ));
        }
        $this->required = $required;
        return $this;
    }

    /**
     * Whether or not the test execution will require the given capabilities of the server in order for this test script to execute.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Whether or not the test execution will validate the given capabilities of the server in order for this test script to execute.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setValidated($validated)
    {
        if (null === $validated) {
            return $this; 
        }
        if (is_scalar($validated)) {
            $validated = new FHIRBoolean($validated);
        }
        if (!($validated instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptCapability::setValidated - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($validated)
            ));
        }
        $this->validated = $validated;
        return $this;
    }

    /**
     * Whether or not the test execution will validate the given capabilities of the server in order for this test script to execute.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getValidated()
    {
        return $this->validated;
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
        if (null !== ($v = $this->getCapabilities())) {
            $a['capabilities'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getDestination())) {
            $a['destination'] = $v;
        }
        if (0 < count($values = $this->getLink())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['link'] = $vs;
            }
        }
        if (0 < count($values = $this->getOrigin())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['origin'] = $vs;
            }
        }
        if (null !== ($v = $this->getRequired())) {
            $a['required'] = $v;
        }
        if (null !== ($v = $this->getValidated())) {
            $a['validated'] = $v;
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
            $sxe = new \SimpleXMLElement('<TestScriptCapability xmlns="http://hl7.org/fhir"></TestScriptCapability>');
        }
        if (null !== ($v = $this->getCapabilities())) {
            $v->xmlSerialize(true, $sxe->addChild('capabilities'));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize(true, $sxe->addChild('description'));
        }
        if (null !== ($v = $this->getDestination())) {
            $v->xmlSerialize(true, $sxe->addChild('destination'));
        }
        if (0 < count($values = $this->getLink())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('link'));
                }
            }
        }
        if (0 < count($values = $this->getOrigin())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('origin'));
                }
            }
        }
        if (null !== ($v = $this->getRequired())) {
            $v->xmlSerialize(true, $sxe->addChild('required'));
        }
        if (null !== ($v = $this->getValidated())) {
            $v->xmlSerialize(true, $sxe->addChild('validated'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}