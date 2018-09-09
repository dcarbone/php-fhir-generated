<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition;

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
use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIROperationParameterUse;
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
    public $binding = null;

    /**
     * Describes the meaning or use of this parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $documentation = null;

    /**
     * The maximum number of times this element is permitted to appear in the request or response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $max = null;

    /**
     * The minimum number of times this parameter SHALL appear in the request or response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $min = null;

    /**
     * The name of used to identify the parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $name = null;

    /**
     * The parts of a nested Parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter
     */
    public $part = null;

    /**
     * Identifies other resource parameters within the operation invocation that are expected to resolve to this resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionReferencedFrom
     */
    public $referencedFrom = null;

    /**
     * How the parameter is understood as a search parameter. This is only used if the parameter type is 'string'.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSearchParamType
     */
    public $searchType = null;

    /**
     * Used when the type is "Reference" or "canonical", and identifies a profile structure or implementation Guide that applies to the target of the reference this parameter refers to. If any profiles are specified, then the content must conform to at least one of them. The URL can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the target resource SHALL conform to at least one profile defined in the implementation guide.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $targetProfile = null;

    /**
     * The type for this parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $type = null;

    /**
     * Whether this is an input or an output parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIROperationParameterUse
     */
    public $use = null;

    /**
     * FHIROperationDefinitionParameter Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['binding'])) {
                $this->setBinding($data['binding']);
            }
            if (isset($data['documentation'])) {
                $this->setDocumentation($data['documentation']);
            }
            if (isset($data['max'])) {
                $this->setMax($data['max']);
            }
            if (isset($data['min'])) {
                $this->setMin($data['min']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['part'])) {
                $this->setPart($data['part']);
            }
            if (isset($data['referencedFrom'])) {
                $this->setReferencedFrom($data['referencedFrom']);
            }
            if (isset($data['searchType'])) {
                $this->setSearchType($data['searchType']);
            }
            if (isset($data['targetProfile'])) {
                $this->setTargetProfile($data['targetProfile']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['use'])) {
                $this->setUse($data['use']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
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
    public function setPart(FHIROperationDefinitionParameter $part = null)
    {
        if (null === $part) {
            return $this; 
        }
        $this->part = $part;
        return $this;
    }

    /**
     * The parts of a nested Parameter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter
     */
    public function getPart()
    {
        return $this->part;
    }


    /**
     * Identifies other resource parameters within the operation invocation that are expected to resolve to this resource.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionReferencedFrom
     * @return $this
     */
    public function setReferencedFrom(FHIROperationDefinitionReferencedFrom $referencedFrom = null)
    {
        if (null === $referencedFrom) {
            return $this; 
        }
        $this->referencedFrom = $referencedFrom;
        return $this;
    }

    /**
     * Identifies other resource parameters within the operation invocation that are expected to resolve to this resource.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionReferencedFrom
     */
    public function getReferencedFrom()
    {
        return $this->referencedFrom;
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
     * Used when the type is "Reference" or "canonical", and identifies a profile structure or implementation Guide that applies to the target of the reference this parameter refers to. If any profiles are specified, then the content must conform to at least one of them. The URL can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the target resource SHALL conform to at least one profile defined in the implementation guide.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setTargetProfile($targetProfile)
    {
        if (null === $targetProfile) {
            return $this; 
        }
        if (is_scalar($targetProfile)) {
            $targetProfile = new FHIRCanonical($targetProfile);
        }
        if (!($targetProfile instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationDefinitionParameter::setTargetProfile - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($targetProfile)
            ));
        }
        $this->targetProfile = $targetProfile;
        return $this;
    }

    /**
     * Used when the type is "Reference" or "canonical", and identifies a profile structure or implementation Guide that applies to the target of the reference this parameter refers to. If any profiles are specified, then the content must conform to at least one of them. The URL can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the target resource SHALL conform to at least one profile defined in the implementation guide.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getTargetProfile()
    {
        return $this->targetProfile;
    }


    /**
     * The type for this parameter.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setType($type)
    {
        if (null === $type) {
            return $this; 
        }
        if (is_scalar($type)) {
            $type = new FHIRCode($type);
        }
        if (!($type instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationDefinitionParameter::setType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($type)
            ));
        }
        $this->type = $type;
        return $this;
    }

    /**
     * The type for this parameter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
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
        if (null !== ($v = $this->getPart())) {
            $a['part'] = $v;
        }
        if (null !== ($v = $this->getReferencedFrom())) {
            $a['referencedFrom'] = $v;
        }
        if (null !== ($v = $this->getSearchType())) {
            $a['searchType'] = $v;
        }
        if (null !== ($v = $this->getTargetProfile())) {
            $a['targetProfile'] = $v;
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
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}