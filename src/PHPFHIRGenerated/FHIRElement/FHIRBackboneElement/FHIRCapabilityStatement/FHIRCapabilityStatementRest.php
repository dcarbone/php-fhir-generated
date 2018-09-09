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
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRMarkdown;
use PHPFHIRGenerated\FHIRElement\FHIRRestfulCapabilityMode;

/**
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 *
 * Class FHIRCapabilityStatementRest
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement
 */
class FHIRCapabilityStatementRest extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'CapabilityStatement.Rest';

    /**
     * An absolute URI which is a reference to the definition of a compartment that the system supports. The reference is to a CompartmentDefinition resource by its canonical URL .
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $compartment = null;

    /**
     * Information about the system's restful capabilities that apply across all applications, such as security.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $documentation = null;

    /**
     * A specification of restful operations supported by the system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction1
     */
    public $interaction = null;

    /**
     * Identifies whether this portion of the statement is describing the ability to initiate or receive restful operations.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRestfulCapabilityMode
     */
    public $mode = null;

    /**
     * Definition of an operation or a named query together with its parameters and their meaning and type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementOperation
     */
    public $operation = null;

    /**
     * A specification of the restful capabilities of the solution for a specific resource type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
     */
    public $resource = null;

    /**
     * Search parameters that are supported for searching all resources for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam
     */
    public $searchParam = null;

    /**
     * Information about security implementation from an interface perspective - what a client needs to know.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSecurity
     */
    public $security = null;

    /**
     * FHIRCapabilityStatementRest Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['compartment'])) {
                $this->setCompartment($data['compartment']);
            }
            if (isset($data['documentation'])) {
                $this->setDocumentation($data['documentation']);
            }
            if (isset($data['interaction'])) {
                $this->setInteraction($data['interaction']);
            }
            if (isset($data['mode'])) {
                $this->setMode($data['mode']);
            }
            if (isset($data['operation'])) {
                $this->setOperation($data['operation']);
            }
            if (isset($data['resource'])) {
                $this->setResource($data['resource']);
            }
            if (isset($data['searchParam'])) {
                $this->setSearchParam($data['searchParam']);
            }
            if (isset($data['security'])) {
                $this->setSecurity($data['security']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementRest::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * An absolute URI which is a reference to the definition of a compartment that the system supports. The reference is to a CompartmentDefinition resource by its canonical URL .
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setCompartment($compartment)
    {
        if (null === $compartment) {
            return $this; 
        }
        if (is_scalar($compartment)) {
            $compartment = new FHIRCanonical($compartment);
        }
        if (!($compartment instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatementRest::setCompartment - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($compartment)
            ));
        }
        $this->compartment = $compartment;
        return $this;
    }

    /**
     * An absolute URI which is a reference to the definition of a compartment that the system supports. The reference is to a CompartmentDefinition resource by its canonical URL .
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getCompartment()
    {
        return $this->compartment;
    }


    /**
     * Information about the system's restful capabilities that apply across all applications, such as security.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setDocumentation($documentation)
    {
        if (null === $documentation) {
            return $this; 
        }
        if (is_scalar($documentation)) {
            $documentation = new FHIRMarkdown($documentation);
        }
        if (!($documentation instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatementRest::setDocumentation - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($documentation)
            ));
        }
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Information about the system's restful capabilities that apply across all applications, such as security.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }


    /**
     * A specification of restful operations supported by the system.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction1
     * @return $this
     */
    public function setInteraction(FHIRCapabilityStatementInteraction1 $interaction = null)
    {
        if (null === $interaction) {
            return $this; 
        }
        $this->interaction = $interaction;
        return $this;
    }

    /**
     * A specification of restful operations supported by the system.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction1
     */
    public function getInteraction()
    {
        return $this->interaction;
    }


    /**
     * Identifies whether this portion of the statement is describing the ability to initiate or receive restful operations.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRestfulCapabilityMode
     * @return $this
     */
    public function setMode($mode)
    {
        if (null === $mode) {
            return $this; 
        }
        if (is_scalar($mode)) {
            $mode = new FHIRRestfulCapabilityMode($mode);
        }
        if (!($mode instanceof FHIRRestfulCapabilityMode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatementRest::setMode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRRestfulCapabilityMode or appropriate scalar value, %s seen.',
                gettype($mode)
            ));
        }
        $this->mode = $mode;
        return $this;
    }

    /**
     * Identifies whether this portion of the statement is describing the ability to initiate or receive restful operations.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRestfulCapabilityMode
     */
    public function getMode()
    {
        return $this->mode;
    }


    /**
     * Definition of an operation or a named query together with its parameters and their meaning and type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementOperation
     * @return $this
     */
    public function setOperation(FHIRCapabilityStatementOperation $operation = null)
    {
        if (null === $operation) {
            return $this; 
        }
        $this->operation = $operation;
        return $this;
    }

    /**
     * Definition of an operation or a named query together with its parameters and their meaning and type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementOperation
     */
    public function getOperation()
    {
        return $this->operation;
    }


    /**
     * A specification of the restful capabilities of the solution for a specific resource type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
     * @return $this
     */
    public function setResource(FHIRCapabilityStatementResource $resource = null)
    {
        if (null === $resource) {
            return $this; 
        }
        $this->resource = $resource;
        return $this;
    }

    /**
     * A specification of the restful capabilities of the solution for a specific resource type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource
     */
    public function getResource()
    {
        return $this->resource;
    }


    /**
     * Search parameters that are supported for searching all resources for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam
     * @return $this
     */
    public function setSearchParam(FHIRCapabilityStatementSearchParam $searchParam = null)
    {
        if (null === $searchParam) {
            return $this; 
        }
        $this->searchParam = $searchParam;
        return $this;
    }

    /**
     * Search parameters that are supported for searching all resources for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam
     */
    public function getSearchParam()
    {
        return $this->searchParam;
    }


    /**
     * Information about security implementation from an interface perspective - what a client needs to know.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSecurity
     * @return $this
     */
    public function setSecurity(FHIRCapabilityStatementSecurity $security = null)
    {
        if (null === $security) {
            return $this; 
        }
        $this->security = $security;
        return $this;
    }

    /**
     * Information about security implementation from an interface perspective - what a client needs to know.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSecurity
     */
    public function getSecurity()
    {
        return $this->security;
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
        if (null !== ($v = $this->getCompartment())) {
            $a['compartment'] = $v;
        }
        if (null !== ($v = $this->getDocumentation())) {
            $a['documentation'] = $v;
        }
        if (null !== ($v = $this->getInteraction())) {
            $a['interaction'] = $v;
        }
        if (null !== ($v = $this->getMode())) {
            $a['mode'] = $v;
        }
        if (null !== ($v = $this->getOperation())) {
            $a['operation'] = $v;
        }
        if (null !== ($v = $this->getResource())) {
            $a['resource'] = $v;
        }
        if (null !== ($v = $this->getSearchParam())) {
            $a['searchParam'] = $v;
        }
        if (null !== ($v = $this->getSecurity())) {
            $a['security'] = $v;
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
            $sxe = new \SimpleXMLElement('<CapabilityStatementRest xmlns="http://hl7.org/fhir"></CapabilityStatementRest>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}