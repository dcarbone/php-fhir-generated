<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition;

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
use PHPFHIRGenerated\FHIRElement\FHIRFHIRAllTypes;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIROperationParameterUse;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRSearchParamType;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * A formal computable definition of an operation (on the RESTful interface) or a named query (using the search interaction).
 *
 * Class FHIROperationDefinitionParameter
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition
 */
class FHIROperationDefinitionParameter extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'OperationDefinition.Parameter';

    /**
     * Binds to a value set if this parameter is coded (code, Coding, CodeableConcept).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding
     */
    private $binding = null;

    /**
     * Describes the meaning or use of this parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $documentation = null;

    /**
     * The maximum number of times this element is permitted to appear in the request or response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $max = null;

    /**
     * The minimum number of times this parameter SHALL appear in the request or response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    private $min = null;

    /**
     * The name of used to identify the parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    private $name = null;

    /**
     * The parts of a nested Parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter[]
     */
    private $part = [];

    /**
     * A profile the specifies the rules that this parameter must conform to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $profile = null;

    /**
     * How the parameter is understood as a search parameter. This is only used if the parameter type is 'string'.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSearchParamType
     */
    private $searchType = null;

    /**
     * The type for this parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRFHIRAllTypes
     */
    private $type = null;

    /**
     * Whether this is an input or an output parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIROperationParameterUse
     */
    private $use = null;

    /**
     * FHIROperationDefinitionParameter Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['binding'])) {
                $value = $data['binding'];
                if (is_array($value)) {
                    $value = new FHIROperationDefinitionBinding($value);
                } 
                if (!($value instanceof FHIROperationDefinitionBinding)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter::__construct - Property \"binding\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding or data to construct type, saw ".gettype($value)); 
                }
                $this->setBinding($value);
            }
            if (isset($data['documentation'])) {
                $value = $data['documentation'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter::__construct - Property \"documentation\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setDocumentation($value);
            }
            if (isset($data['max'])) {
                $value = $data['max'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter::__construct - Property \"max\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setMax($value);
            }
            if (isset($data['min'])) {
                $value = $data['min'];
                if (is_array($value)) {
                    $value = new FHIRInteger($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRInteger($value);
                }
                if (!($value instanceof FHIRInteger)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter::__construct - Property \"min\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or data to construct type, saw ".gettype($value)); 
                }
                $this->setMin($value);
            }
            if (isset($data['name'])) {
                $value = $data['name'];
                if (is_array($value)) {
                    $value = new FHIRCode($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRCode($value);
                }
                if (!($value instanceof FHIRCode)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter::__construct - Property \"name\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or data to construct type, saw ".gettype($value)); 
                }
                $this->setName($value);
            }
            if (isset($data['part'])) {
                $value = $data['part'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIROperationDefinitionParameter($v);
                        } 
                        if (!($v instanceof FHIROperationDefinitionParameter)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter::__construct - Collection field \"part\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addPart($v);
                    }
                }
            }
            if (isset($data['profile'])) {
                $value = $data['profile'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter::__construct - Property \"profile\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setProfile($value);
            }
            if (isset($data['searchType'])) {
                $value = $data['searchType'];
                if (is_array($value)) {
                    $value = new FHIRSearchParamType($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRSearchParamType($value);
                }
                if (!($value instanceof FHIRSearchParamType)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter::__construct - Property \"searchType\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRSearchParamType or data to construct type, saw ".gettype($value)); 
                }
                $this->setSearchType($value);
            }
            if (isset($data['type'])) {
                $value = $data['type'];
                if (is_array($value)) {
                    $value = new FHIRFHIRAllTypes($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRFHIRAllTypes($value);
                }
                if (!($value instanceof FHIRFHIRAllTypes)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter::__construct - Property \"type\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRFHIRAllTypes or data to construct type, saw ".gettype($value)); 
                }
                $this->setType($value);
            }
            if (isset($data['use'])) {
                $value = $data['use'];
                if (is_array($value)) {
                    $value = new FHIROperationParameterUse($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIROperationParameterUse($value);
                }
                if (!($value instanceof FHIROperationParameterUse)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter::__construct - Property \"use\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIROperationParameterUse or data to construct type, saw ".gettype($value)); 
                }
                $this->setUse($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Binds to a value set if this parameter is coded (code, Coding, CodeableConcept).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding
     * @return $this
     */
    public function setBinding(FHIROperationDefinitionBinding $binding = null)
    {
        if (null === $binding) {
            return $this; 
        }
        $this->binding = $binding;
        return $this;
    }

    /**
     * Binds to a value set if this parameter is coded (code, Coding, CodeableConcept).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding
     */
    public function getBinding()
    {
        return $this->binding;
    }

    /**
     * Describes the meaning or use of this parameter.
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
                'FHIROperationDefinitionParameter::setDocumentation - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($documentation)
            ));
        }
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Describes the meaning or use of this parameter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * The maximum number of times this element is permitted to appear in the request or response.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setMax($max)
    {
        if (null === $max) {
            return $this; 
        }
        if (is_scalar($max)) {
            $max = new FHIRString($max);
        }
        if (!($max instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationDefinitionParameter::setMax - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($max)
            ));
        }
        $this->max = $max;
        return $this;
    }

    /**
     * The maximum number of times this element is permitted to appear in the request or response.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * The minimum number of times this parameter SHALL appear in the request or response.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setMin($min)
    {
        if (null === $min) {
            return $this; 
        }
        if (is_scalar($min)) {
            $min = new FHIRInteger($min);
        }
        if (!($min instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationDefinitionParameter::setMin - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($min)
            ));
        }
        $this->min = $min;
        return $this;
    }

    /**
     * The minimum number of times this parameter SHALL appear in the request or response.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * The name of used to identify the parameter.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setName($name)
    {
        if (null === $name) {
            return $this; 
        }
        if (is_scalar($name)) {
            $name = new FHIRCode($name);
        }
        if (!($name instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationDefinitionParameter::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * The name of used to identify the parameter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The parts of a nested Parameter.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter
     * @return $this
     */
    public function addPart(FHIROperationDefinitionParameter $part = null)
    {
        if (null === $part) {
            return $this; 
        }
        $this->part[] = $part;
        return $this;
    }

    /**
     * The parts of a nested Parameter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter[]
     */
    public function getPart()
    {
        return $this->part;
    }

    /**
     * A profile the specifies the rules that this parameter must conform to.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setProfile(FHIRReference $profile = null)
    {
        if (null === $profile) {
            return $this; 
        }
        $this->profile = $profile;
        return $this;
    }

    /**
     * A profile the specifies the rules that this parameter must conform to.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * How the parameter is understood as a search parameter. This is only used if the parameter type is 'string'.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSearchParamType
     * @return $this
     */
    public function setSearchType($searchType)
    {
        if (null === $searchType) {
            return $this; 
        }
        if (is_scalar($searchType)) {
            $searchType = new FHIRSearchParamType($searchType);
        }
        if (!($searchType instanceof FHIRSearchParamType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationDefinitionParameter::setSearchType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRSearchParamType or appropriate scalar value, %s seen.',
                gettype($searchType)
            ));
        }
        $this->searchType = $searchType;
        return $this;
    }

    /**
     * How the parameter is understood as a search parameter. This is only used if the parameter type is 'string'.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSearchParamType
     */
    public function getSearchType()
    {
        return $this->searchType;
    }

    /**
     * The type for this parameter.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRFHIRAllTypes
     * @return $this
     */
    public function setType($type)
    {
        if (null === $type) {
            return $this; 
        }
        if (is_scalar($type)) {
            $type = new FHIRFHIRAllTypes($type);
        }
        if (!($type instanceof FHIRFHIRAllTypes)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationDefinitionParameter::setType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRFHIRAllTypes or appropriate scalar value, %s seen.',
                gettype($type)
            ));
        }
        $this->type = $type;
        return $this;
    }

    /**
     * The type for this parameter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRFHIRAllTypes
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Whether this is an input or an output parameter.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIROperationParameterUse
     * @return $this
     */
    public function setUse($use)
    {
        if (null === $use) {
            return $this; 
        }
        if (is_scalar($use)) {
            $use = new FHIROperationParameterUse($use);
        }
        if (!($use instanceof FHIROperationParameterUse)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationDefinitionParameter::setUse - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIROperationParameterUse or appropriate scalar value, %s seen.',
                gettype($use)
            ));
        }
        $this->use = $use;
        return $this;
    }

    /**
     * Whether this is an input or an output parameter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIROperationParameterUse
     */
    public function getUse()
    {
        return $this->use;
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
        if (null !== ($v = $this->getBinding())) {
            $a['binding'] = $v;
        }
        if (null !== ($v = $this->getDocumentation())) {
            $a['documentation'] = $v;
        }
        if (null !== ($v = $this->getMax())) {
            $a['max'] = $v;
        }
        if (null !== ($v = $this->getMin())) {
            $a['min'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (0 < count($values = $this->getPart())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['part'] = $vs;
            }
        }
        if (null !== ($v = $this->getProfile())) {
            $a['profile'] = $v;
        }
        if (null !== ($v = $this->getSearchType())) {
            $a['searchType'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getUse())) {
            $a['use'] = $v;
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
            $sxe = new \SimpleXMLElement('<OperationDefinitionParameter xmlns="http://hl7.org/fhir"></OperationDefinitionParameter>');
        }
        if (null !== ($v = $this->getBinding())) {
            $v->xmlSerialize(true, $sxe->addChild('binding'));
        }
        if (null !== ($v = $this->getDocumentation())) {
            $v->xmlSerialize(true, $sxe->addChild('documentation'));
        }
        if (null !== ($v = $this->getMax())) {
            $v->xmlSerialize(true, $sxe->addChild('max'));
        }
        if (null !== ($v = $this->getMin())) {
            $v->xmlSerialize(true, $sxe->addChild('min'));
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize(true, $sxe->addChild('name'));
        }
        if (0 < count($values = $this->getPart())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('part'));
                }
            }
        }
        if (null !== ($v = $this->getProfile())) {
            $v->xmlSerialize(true, $sxe->addChild('profile'));
        }
        if (null !== ($v = $this->getSearchType())) {
            $v->xmlSerialize(true, $sxe->addChild('searchType'));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize(true, $sxe->addChild('type'));
        }
        if (null !== ($v = $this->getUse())) {
            $v->xmlSerialize(true, $sxe->addChild('use'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}