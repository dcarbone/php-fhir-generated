<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement;

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
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRMarkdown;

/**
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 *
 * Class FHIRCapabilityStatementSecurity
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement
 */
class FHIRCapabilityStatementSecurity extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'CapabilityStatement.Security';

    /**
     * Server adds CORS headers when responding to requests - this enables Javascript applications to use the server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $cors = null;

    /**
     * General description of how security works.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * Types of security services that are supported/required by the system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $service = null;

    /**
     * FHIRCapabilityStatementSecurity Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['cors'])) {
                $this->setCors($data['cors']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['service'])) {
                $this->setService($data['service']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSecurity::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Server adds CORS headers when responding to requests - this enables Javascript applications to use the server.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setCors($cors)
    {
        if (null === $cors) {
            return $this; 
        }
        if (is_scalar($cors)) {
            $cors = new FHIRBoolean($cors);
        }
        if (!($cors instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatementSecurity::setCors - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($cors)
            ));
        }
        $this->cors = $cors;
        return $this;
    }

    /**
     * Server adds CORS headers when responding to requests - this enables Javascript applications to use the server.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getCors()
    {
        return $this->cors;
    }


    /**
     * General description of how security works.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setDescription($description)
    {
        if (null === $description) {
            return $this; 
        }
        if (is_scalar($description)) {
            $description = new FHIRMarkdown($description);
        }
        if (!($description instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatementSecurity::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * General description of how security works.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * Types of security services that are supported/required by the system.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setService(FHIRCodeableConcept $service = null)
    {
        if (null === $service) {
            return $this; 
        }
        $this->service = $service;
        return $this;
    }

    /**
     * Types of security services that are supported/required by the system.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getService()
    {
        return $this->service;
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
        if (null !== ($v = $this->getCors())) {
            $a['cors'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getService())) {
            $a['service'] = $v;
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
            $sxe = new \SimpleXMLElement('<CapabilityStatementSecurity xmlns="http://hl7.org/fhir"></CapabilityStatementSecurity>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}