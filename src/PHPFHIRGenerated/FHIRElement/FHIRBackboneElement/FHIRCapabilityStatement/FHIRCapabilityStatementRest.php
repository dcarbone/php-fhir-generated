<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement;

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
use PHPFHIRGenerated\FHIRElement\FHIRRestfulCapabilityMode;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;

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
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    private $compartment = [];

    /**
     * Information about the system's restful capabilities that apply across all applications, such as security.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $documentation = null;

    /**
     * A specification of restful operations supported by the system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction1[]
     */
    private $interaction = [];

    /**
     * Identifies whether this portion of the statement is describing the ability to initiate or receive restful operations.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRestfulCapabilityMode
     */
    private $mode = null;

    /**
     * Definition of an operation or a named query together with its parameters and their meaning and type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementOperation[]
     */
    private $operation = [];

    /**
     * A specification of the restful capabilities of the solution for a specific resource type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource[]
     */
    private $resource = [];

    /**
     * Search parameters that are supported for searching all resources for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam[]
     */
    private $searchParam = [];

    /**
     * Information about security implementation from an interface perspective - what a client needs to know.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSecurity
     */
    private $security = null;

    /**
     * FHIRCapabilityStatementRest Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['compartment'])) {
                $value = $data['compartment'];
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
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementRest::__construct - Collection field \"compartment\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or data to construct type, saw ".gettype($v));
                        }
                        $this->addCompartment($v);
                    }
                }
            }
            if (isset($data['documentation'])) {
                $value = $data['documentation'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementRest::__construct - Property \"documentation\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setDocumentation($value);
            }
            if (isset($data['interaction'])) {
                $value = $data['interaction'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCapabilityStatementInteraction1($v);
                        } 
                        if (!($v instanceof FHIRCapabilityStatementInteraction1)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementRest::__construct - Collection field \"interaction\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction1 or data to construct type, saw ".gettype($v));
                        }
                        $this->addInteraction($v);
                    }
                }
            }
            if (isset($data['mode'])) {
                $value = $data['mode'];
                if (is_array($value)) {
                    $value = new FHIRRestfulCapabilityMode($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRRestfulCapabilityMode($value);
                }
                if (!($value instanceof FHIRRestfulCapabilityMode)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementRest::__construct - Property \"mode\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRRestfulCapabilityMode or data to construct type, saw ".gettype($value));
                }
                $this->setMode($value);
            }
            if (isset($data['operation'])) {
                $value = $data['operation'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCapabilityStatementOperation($v);
                        } 
                        if (!($v instanceof FHIRCapabilityStatementOperation)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementRest::__construct - Collection field \"operation\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementOperation or data to construct type, saw ".gettype($v));
                        }
                        $this->addOperation($v);
                    }
                }
            }
            if (isset($data['resource'])) {
                $value = $data['resource'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCapabilityStatementResource($v);
                        } 
                        if (!($v instanceof FHIRCapabilityStatementResource)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementRest::__construct - Collection field \"resource\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource or data to construct type, saw ".gettype($v));
                        }
                        $this->addResource($v);
                    }
                }
            }
            if (isset($data['searchParam'])) {
                $value = $data['searchParam'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCapabilityStatementSearchParam($v);
                        } 
                        if (!($v instanceof FHIRCapabilityStatementSearchParam)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementRest::__construct - Collection field \"searchParam\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam or data to construct type, saw ".gettype($v));
                        }
                        $this->addSearchParam($v);
                    }
                }
            }
            if (isset($data['security'])) {
                $value = $data['security'];
                if (is_array($value)) {
                    $value = new FHIRCapabilityStatementSecurity($value);
                } 
                if (!($value instanceof FHIRCapabilityStatementSecurity)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementRest::__construct - Property \"security\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSecurity or data to construct type, saw ".gettype($value));
                }
                $this->setSecurity($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementRest::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * An absolute URI which is a reference to the definition of a compartment that the system supports. The reference is to a CompartmentDefinition resource by its canonical URL .
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function addCompartment($compartment)
    {
        if (null === $compartment) {
            return $this; 
        }
        if (is_scalar($compartment)) {
            $compartment = new FHIRUri($compartment);
        }
        if (!($compartment instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatementRest::addCompartment - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($compartment)
            ));
        }
        $this->compartment[] = $compartment;
        return $this;
    }

    /**
     * An absolute URI which is a reference to the definition of a compartment that the system supports. The reference is to a CompartmentDefinition resource by its canonical URL .
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public function getCompartment()
    {
        return $this->compartment;
    }

    /**
     * Information about the system's restful capabilities that apply across all applications, such as security.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDocumentation($documentation)
    {
        if (null === $documentation) {
            return $this; 
        }
        if (is_scalar($documentation)) {
            $documentation = new FHIRString($documentation);
        }
        if (!($documentation instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatementRest::setDocumentation - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($documentation)
            ));
        }
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Information about the system's restful capabilities that apply across all applications, such as security.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
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
    public function addInteraction(FHIRCapabilityStatementInteraction1 $interaction = null)
    {
        if (null === $interaction) {
            return $this; 
        }
        $this->interaction[] = $interaction;
        return $this;
    }

    /**
     * A specification of restful operations supported by the system.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction1[]
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
    public function addOperation(FHIRCapabilityStatementOperation $operation = null)
    {
        if (null === $operation) {
            return $this; 
        }
        $this->operation[] = $operation;
        return $this;
    }

    /**
     * Definition of an operation or a named query together with its parameters and their meaning and type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementOperation[]
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
    public function addResource(FHIRCapabilityStatementResource $resource = null)
    {
        if (null === $resource) {
            return $this; 
        }
        $this->resource[] = $resource;
        return $this;
    }

    /**
     * A specification of the restful capabilities of the solution for a specific resource type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource[]
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
    public function addSearchParam(FHIRCapabilityStatementSearchParam $searchParam = null)
    {
        if (null === $searchParam) {
            return $this; 
        }
        $this->searchParam[] = $searchParam;
        return $this;
    }

    /**
     * Search parameters that are supported for searching all resources for implementations to support and/or make use of - either references to ones defined in the specification, or additional ones defined for/by the implementation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam[]
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
        if (0 < count($values = $this->getCompartment())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['compartment'] = $vs;
            }
        }
        if (null !== ($v = $this->getDocumentation())) {
            $a['documentation'] = $v;
        }
        if (0 < count($values = $this->getInteraction())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['interaction'] = $vs;
            }
        }
        if (null !== ($v = $this->getMode())) {
            $a['mode'] = $v;
        }
        if (0 < count($values = $this->getOperation())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['operation'] = $vs;
            }
        }
        if (0 < count($values = $this->getResource())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['resource'] = $vs;
            }
        }
        if (0 < count($values = $this->getSearchParam())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['searchParam'] = $vs;
            }
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
        if (0 < count($values = $this->getCompartment())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('compartment'));
                }
            }
        }
        if (null !== ($v = $this->getDocumentation())) {
            $v->xmlSerialize(true, $sxe->addChild('documentation'));
        }
        if (0 < count($values = $this->getInteraction())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('interaction'));
                }
            }
        }
        if (null !== ($v = $this->getMode())) {
            $v->xmlSerialize(true, $sxe->addChild('mode'));
        }
        if (0 < count($values = $this->getOperation())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('operation'));
                }
            }
        }
        if (0 < count($values = $this->getResource())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('resource'));
                }
            }
        }
        if (0 < count($values = $this->getSearchParam())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('searchParam'));
                }
            }
        }
        if (null !== ($v = $this->getSecurity())) {
            $v->xmlSerialize(true, $sxe->addChild('security'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}