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
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;

/**
 * A structured set of tests against a FHIR server or client implementation to determine compliance against the FHIR specification.
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
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $capabilities = null;

    /**
     * Description of the capabilities that this test script is requiring the server to support.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Which server these requirements apply to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $destination = null;

    /**
     * Links to the FHIR specification that describes this interaction and the resources involved in more detail.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $link = null;

    /**
     * Which origin server these requirements apply to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $origin = null;

    /**
     * Whether or not the test execution will require the given capabilities of the server in order for this test script to execute.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $required = null;

    /**
     * Whether or not the test execution will validate the given capabilities of the server in order for this test script to execute.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $validated = null;

    /**
     * FHIRTestScriptCapability Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['capabilities'])) {
                $this->setCapabilities($data['capabilities']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['destination'])) {
                $this->setDestination($data['destination']);
            }
            if (isset($data['link'])) {
                $this->setLink($data['link']);
            }
            if (isset($data['origin'])) {
                $this->setOrigin($data['origin']);
            }
            if (isset($data['required'])) {
                $this->setRequired($data['required']);
            }
            if (isset($data['validated'])) {
                $this->setValidated($data['validated']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Minimum capabilities required of server for test script to execute successfully.   If server does not meet at a minimum the referenced capability statement, then all tests in this script are skipped.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setCapabilities($capabilities)
    {
        if (null === $capabilities) {
            return $this; 
        }
        if (is_scalar($capabilities)) {
            $capabilities = new FHIRCanonical($capabilities);
        }
        if (!($capabilities instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptCapability::setCapabilities - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($capabilities)
            ));
        }
        $this->capabilities = $capabilities;
        return $this;
    }

    /**
     * Minimum capabilities required of server for test script to execute successfully.   If server does not meet at a minimum the referenced capability statement, then all tests in this script are skipped.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
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
    public function setLink($link)
    {
        if (null === $link) {
            return $this; 
        }
        if (is_scalar($link)) {
            $link = new FHIRUri($link);
        }
        if (!($link instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptCapability::setLink - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($link)
            ));
        }
        $this->link = $link;
        return $this;
    }

    /**
     * Links to the FHIR specification that describes this interaction and the resources involved in more detail.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
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
    public function setOrigin($origin)
    {
        if (null === $origin) {
            return $this; 
        }
        if (is_scalar($origin)) {
            $origin = new FHIRInteger($origin);
        }
        if (!($origin instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptCapability::setOrigin - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($origin)
            ));
        }
        $this->origin = $origin;
        return $this;
    }

    /**
     * Which origin server these requirements apply to.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
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
        if (null !== ($v = $this->getLink())) {
            $a['link'] = $v;
        }
        if (null !== ($v = $this->getOrigin())) {
            $a['origin'] = $v;
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
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}