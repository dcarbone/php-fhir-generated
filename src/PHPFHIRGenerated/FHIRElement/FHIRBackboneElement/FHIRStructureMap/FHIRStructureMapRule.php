<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap;

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
use PHPFHIRGenerated\FHIRElement\FHIRId;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * A Map of relationships between 2 structures that can be used to transform data.
 *
 * Class FHIRStructureMapRule
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap
 */
class FHIRStructureMapRule extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'StructureMap.Rule';

    /**
     * Which other rules to apply in the context of this rule.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapDependent
     */
    public $dependent = null;

    /**
     * Documentation for this instance of data.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $documentation = null;

    /**
     * Name of the rule for internal references.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $name = null;

    /**
     * Rules contained in this rule.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapRule
     */
    public $rule = null;

    /**
     * Source inputs to the mapping.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public $source = null;

    /**
     * Content to create because of this mapping rule.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget
     */
    public $target = null;

    /**
     * FHIRStructureMapRule Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['dependent'])) {
                $this->setDependent($data['dependent']);
            }
            if (isset($data['documentation'])) {
                $this->setDocumentation($data['documentation']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['rule'])) {
                $this->setRule($data['rule']);
            }
            if (isset($data['source'])) {
                $this->setSource($data['source']);
            }
            if (isset($data['target'])) {
                $this->setTarget($data['target']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapRule::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Which other rules to apply in the context of this rule.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapDependent
     * @return $this
     */
    public function setDependent(FHIRStructureMapDependent $dependent = null)
    {
        if (null === $dependent) {
            return $this; 
        }
        $this->dependent = $dependent;
        return $this;
    }

    /**
     * Which other rules to apply in the context of this rule.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapDependent
     */
    public function getDependent()
    {
        return $this->dependent;
    }


    /**
     * Documentation for this instance of data.
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
                'FHIRStructureMapRule::setDocumentation - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($documentation)
            ));
        }
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Documentation for this instance of data.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }


    /**
     * Name of the rule for internal references.
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
                'FHIRStructureMapRule::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * Name of the rule for internal references.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Rules contained in this rule.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapRule
     * @return $this
     */
    public function setRule(FHIRStructureMapRule $rule = null)
    {
        if (null === $rule) {
            return $this; 
        }
        $this->rule = $rule;
        return $this;
    }

    /**
     * Rules contained in this rule.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapRule
     */
    public function getRule()
    {
        return $this->rule;
    }


    /**
     * Source inputs to the mapping.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     * @return $this
     */
    public function setSource(FHIRStructureMapSource $source = null)
    {
        if (null === $source) {
            return $this; 
        }
        $this->source = $source;
        return $this;
    }

    /**
     * Source inputs to the mapping.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource
     */
    public function getSource()
    {
        return $this->source;
    }


    /**
     * Content to create because of this mapping rule.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget
     * @return $this
     */
    public function setTarget(FHIRStructureMapTarget $target = null)
    {
        if (null === $target) {
            return $this; 
        }
        $this->target = $target;
        return $this;
    }

    /**
     * Content to create because of this mapping rule.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget
     */
    public function getTarget()
    {
        return $this->target;
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
        if (null !== ($v = $this->getDependent())) {
            $a['dependent'] = $v;
        }
        if (null !== ($v = $this->getDocumentation())) {
            $a['documentation'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getRule())) {
            $a['rule'] = $v;
        }
        if (null !== ($v = $this->getSource())) {
            $a['source'] = $v;
        }
        if (null !== ($v = $this->getTarget())) {
            $a['target'] = $v;
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
            $sxe = new \SimpleXMLElement('<StructureMapRule xmlns="http://hl7.org/fhir"></StructureMapRule>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}