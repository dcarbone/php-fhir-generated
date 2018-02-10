<?php namespace PHPFHIRGenerated\FHIRResource\FHIROperationDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A formal computable definition of an operation (on the RESTful interface) or a named query (using the search interaction).
 */
class FHIROperationDefinitionParameter extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The name of used to identify the parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $name = null;

    /**
     * Whether this is an input or an output parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIROperationParameterUse
     */
    public $use = null;

    /**
     * The minimum number of times this parameter SHALL appear in the request or response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $min = null;

    /**
     * The maximum number of times this element is permitted to appear in the request or response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $max = null;

    /**
     * Describes the meaning or use of this parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $documentation = null;

    /**
     * The type for this parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRFHIRAllTypes
     */
    public $type = null;

    /**
     * If the type is "Reference", then targetProfile lists a one or more profiles that the Reference can refer to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public $targetProfile = [];

    /**
     * How the parameter is understood as a search parameter. This is only used if the parameter type is 'string'.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSearchParamType
     */
    public $searchType = null;

    /**
     * Binds to a value set if this parameter is coded (code, Coding, CodeableConcept).
     * @var \PHPFHIRGenerated\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionBinding
     */
    public $binding = null;

    /**
     * The parts of a nested Parameter.
     * @var \PHPFHIRGenerated\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionParameter[]
     */
    public $part = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'OperationDefinition.Parameter';

    /**
     * The name of used to identify the parameter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getName() {
        return $this->name;
    }

    /**
     * The name of used to identify the parameter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $name
     * @return $this
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Whether this is an input or an output parameter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIROperationParameterUse
     */
    public function getUse() {
        return $this->use;
    }

    /**
     * Whether this is an input or an output parameter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIROperationParameterUse $use
     * @return $this
     */
    public function setUse($use) {
        $this->use = $use;
        return $this;
    }

    /**
     * The minimum number of times this parameter SHALL appear in the request or response.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getMin() {
        return $this->min;
    }

    /**
     * The minimum number of times this parameter SHALL appear in the request or response.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $min
     * @return $this
     */
    public function setMin($min) {
        $this->min = $min;
        return $this;
    }

    /**
     * The maximum number of times this element is permitted to appear in the request or response.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getMax() {
        return $this->max;
    }

    /**
     * The maximum number of times this element is permitted to appear in the request or response.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $max
     * @return $this
     */
    public function setMax($max) {
        $this->max = $max;
        return $this;
    }

    /**
     * Describes the meaning or use of this parameter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDocumentation() {
        return $this->documentation;
    }

    /**
     * Describes the meaning or use of this parameter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $documentation
     * @return $this
     */
    public function setDocumentation($documentation) {
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * The type for this parameter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRFHIRAllTypes
     */
    public function getType() {
        return $this->type;
    }

    /**
     * The type for this parameter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRFHIRAllTypes $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * If the type is "Reference", then targetProfile lists a one or more profiles that the Reference can refer to.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public function getTargetProfile() {
        return $this->targetProfile;
    }

    /**
     * If the type is "Reference", then targetProfile lists a one or more profiles that the Reference can refer to.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $targetProfile
     * @return $this
     */
    public function addTargetProfile($targetProfile) {
        $this->targetProfile[] = $targetProfile;
        return $this;
    }

    /**
     * How the parameter is understood as a search parameter. This is only used if the parameter type is 'string'.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSearchParamType
     */
    public function getSearchType() {
        return $this->searchType;
    }

    /**
     * How the parameter is understood as a search parameter. This is only used if the parameter type is 'string'.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSearchParamType $searchType
     * @return $this
     */
    public function setSearchType($searchType) {
        $this->searchType = $searchType;
        return $this;
    }

    /**
     * Binds to a value set if this parameter is coded (code, Coding, CodeableConcept).
     * @return \PHPFHIRGenerated\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionBinding
     */
    public function getBinding() {
        return $this->binding;
    }

    /**
     * Binds to a value set if this parameter is coded (code, Coding, CodeableConcept).
     * @param \PHPFHIRGenerated\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionBinding $binding
     * @return $this
     */
    public function setBinding($binding) {
        $this->binding = $binding;
        return $this;
    }

    /**
     * The parts of a nested Parameter.
     * @return \PHPFHIRGenerated\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionParameter[]
     */
    public function getPart() {
        return $this->part;
    }

    /**
     * The parts of a nested Parameter.
     * @param \PHPFHIRGenerated\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionParameter $part
     * @return $this
     */
    public function addPart($part) {
        $this->part[] = $part;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['use'])) {
                $this->setUse($data['use']);
            }
            if (isset($data['min'])) {
                $this->setMin($data['min']);
            }
            if (isset($data['max'])) {
                $this->setMax($data['max']);
            }
            if (isset($data['documentation'])) {
                $this->setDocumentation($data['documentation']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['targetProfile'])) {
                if (is_array($data['targetProfile'])) {
                    foreach($data['targetProfile'] as $d) {
                        $this->addTargetProfile($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"targetProfile" must be array of objects or null, '.gettype($data['targetProfile']).' seen.');
                }
            }
            if (isset($data['searchType'])) {
                $this->setSearchType($data['searchType']);
            }
            if (isset($data['binding'])) {
                $this->setBinding($data['binding']);
            }
            if (isset($data['part'])) {
                if (is_array($data['part'])) {
                    foreach($data['part'] as $d) {
                        $this->addPart($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"part" must be array of objects or null, '.gettype($data['part']).' seen.');
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        if (isset($this->name)) $json['name'] = $this->name;
        if (isset($this->use)) $json['use'] = $this->use;
        if (isset($this->min)) $json['min'] = $this->min;
        if (isset($this->max)) $json['max'] = $this->max;
        if (isset($this->documentation)) $json['documentation'] = $this->documentation;
        if (isset($this->type)) $json['type'] = $this->type;
        if (0 < count($this->targetProfile)) {
            $json['targetProfile'] = [];
            foreach($this->targetProfile as $targetProfile) {
                if (null !== $targetProfile) $json['targetProfile'][] = $targetProfile;
            }
        }
        if (isset($this->searchType)) $json['searchType'] = $this->searchType;
        if (isset($this->binding)) $json['binding'] = $this->binding;
        if (0 < count($this->part)) {
            $json['part'] = [];
            foreach($this->part as $part) {
                if (null !== $part) $json['part'][] = $part;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<OperationDefinitionParameter xmlns="http://hl7.org/fhir"></OperationDefinitionParameter>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->name)) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (isset($this->use)) $this->use->xmlSerialize(true, $sxe->addChild('use'));
        if (isset($this->min)) $this->min->xmlSerialize(true, $sxe->addChild('min'));
        if (isset($this->max)) $this->max->xmlSerialize(true, $sxe->addChild('max'));
        if (isset($this->documentation)) $this->documentation->xmlSerialize(true, $sxe->addChild('documentation'));
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (0 < count($this->targetProfile)) {
            foreach($this->targetProfile as $targetProfile) {
                $targetProfile->xmlSerialize(true, $sxe->addChild('targetProfile'));
            }
        }
        if (isset($this->searchType)) $this->searchType->xmlSerialize(true, $sxe->addChild('searchType'));
        if (isset($this->binding)) $this->binding->xmlSerialize(true, $sxe->addChild('binding'));
        if (0 < count($this->part)) {
            foreach($this->part as $part) {
                $part->xmlSerialize(true, $sxe->addChild('part'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}