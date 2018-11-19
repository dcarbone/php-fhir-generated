<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap;

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
use PHPFHIRGenerated\FHIRElement\FHIRId;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRStructureMapContextType;
use PHPFHIRGenerated\FHIRElement\FHIRStructureMapTargetListMode;
use PHPFHIRGenerated\FHIRElement\FHIRStructureMapTransform;

/**
 * A Map of relationships between 2 structures that can be used to transform data.
 *
 * Class FHIRStructureMapTarget
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap
 */
class FHIRStructureMapTarget extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'StructureMap.Target';

    /**
     * Type or variable this rule applies to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    private $context = null;

    /**
     * How to interpret the context.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRStructureMapContextType
     */
    private $contextType = null;

    /**
     * Field to create in the context.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $element = null;

    /**
     * If field is a list, how to manage the list.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRStructureMapTargetListMode[]
     */
    private $listMode = [];

    /**
     * Internal rule reference for shared list items.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    private $listRuleId = null;

    /**
     * Parameters to the transform.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter[]
     */
    private $parameter = [];

    /**
     * How the data is copied / created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRStructureMapTransform
     */
    private $transform = null;

    /**
     * Named context for field, if desired, and a field is specified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    private $variable = null;

    /**
     * FHIRStructureMapTarget Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['context'])) {
                $value = $data['context'];
                if (is_array($value)) {
                    $value = new FHIRId($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRId($value);
                }
                if (!($value instanceof FHIRId)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget::__construct - Property \"context\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or data to construct type, saw ".gettype($value)); 
                }
                $this->setContext($value);
            }
            if (isset($data['contextType'])) {
                $value = $data['contextType'];
                if (is_array($value)) {
                    $value = new FHIRStructureMapContextType($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRStructureMapContextType($value);
                }
                if (!($value instanceof FHIRStructureMapContextType)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget::__construct - Property \"contextType\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRStructureMapContextType or data to construct type, saw ".gettype($value)); 
                }
                $this->setContextType($value);
            }
            if (isset($data['element'])) {
                $value = $data['element'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget::__construct - Property \"element\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setElement($value);
            }
            if (isset($data['listMode'])) {
                $value = $data['listMode'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRStructureMapTargetListMode($v);
                        }  elseif (is_scalar($v)) {
                            $v = new FHIRStructureMapTargetListMode($v);
                        }
                        if (!($v instanceof FHIRStructureMapTargetListMode)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget::__construct - Collection field \"listMode\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRStructureMapTargetListMode or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addListMode($v);
                    }
                }
            }
            if (isset($data['listRuleId'])) {
                $value = $data['listRuleId'];
                if (is_array($value)) {
                    $value = new FHIRId($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRId($value);
                }
                if (!($value instanceof FHIRId)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget::__construct - Property \"listRuleId\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or data to construct type, saw ".gettype($value)); 
                }
                $this->setListRuleId($value);
            }
            if (isset($data['parameter'])) {
                $value = $data['parameter'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRStructureMapParameter($v);
                        } 
                        if (!($v instanceof FHIRStructureMapParameter)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget::__construct - Collection field \"parameter\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addParameter($v);
                    }
                }
            }
            if (isset($data['transform'])) {
                $value = $data['transform'];
                if (is_array($value)) {
                    $value = new FHIRStructureMapTransform($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRStructureMapTransform($value);
                }
                if (!($value instanceof FHIRStructureMapTransform)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget::__construct - Property \"transform\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRStructureMapTransform or data to construct type, saw ".gettype($value)); 
                }
                $this->setTransform($value);
            }
            if (isset($data['variable'])) {
                $value = $data['variable'];
                if (is_array($value)) {
                    $value = new FHIRId($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRId($value);
                }
                if (!($value instanceof FHIRId)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget::__construct - Property \"variable\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or data to construct type, saw ".gettype($value)); 
                }
                $this->setVariable($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Type or variable this rule applies to.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function setContext($context)
    {
        if (null === $context) {
            return $this; 
        }
        if (is_scalar($context)) {
            $context = new FHIRId($context);
        }
        if (!($context instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapTarget::setContext - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($context)
            ));
        }
        $this->context = $context;
        return $this;
    }

    /**
     * Type or variable this rule applies to.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * How to interpret the context.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRStructureMapContextType
     * @return $this
     */
    public function setContextType($contextType)
    {
        if (null === $contextType) {
            return $this; 
        }
        if (is_scalar($contextType)) {
            $contextType = new FHIRStructureMapContextType($contextType);
        }
        if (!($contextType instanceof FHIRStructureMapContextType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapTarget::setContextType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRStructureMapContextType or appropriate scalar value, %s seen.',
                gettype($contextType)
            ));
        }
        $this->contextType = $contextType;
        return $this;
    }

    /**
     * How to interpret the context.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRStructureMapContextType
     */
    public function getContextType()
    {
        return $this->contextType;
    }

    /**
     * Field to create in the context.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setElement($element)
    {
        if (null === $element) {
            return $this; 
        }
        if (is_scalar($element)) {
            $element = new FHIRString($element);
        }
        if (!($element instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapTarget::setElement - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($element)
            ));
        }
        $this->element = $element;
        return $this;
    }

    /**
     * Field to create in the context.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * If field is a list, how to manage the list.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRStructureMapTargetListMode
     * @return $this
     */
    public function addListMode($listMode)
    {
        if (null === $listMode) {
            return $this; 
        }
        if (is_scalar($listMode)) {
            $listMode = new FHIRStructureMapTargetListMode($listMode);
        }
        if (!($listMode instanceof FHIRStructureMapTargetListMode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapTarget::addListMode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRStructureMapTargetListMode or appropriate scalar value, %s seen.',
                gettype($listMode)
            ));
        }
        $this->listMode[] = $listMode;
        return $this;
    }

    /**
     * If field is a list, how to manage the list.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRStructureMapTargetListMode[]
     */
    public function getListMode()
    {
        return $this->listMode;
    }

    /**
     * Internal rule reference for shared list items.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function setListRuleId($listRuleId)
    {
        if (null === $listRuleId) {
            return $this; 
        }
        if (is_scalar($listRuleId)) {
            $listRuleId = new FHIRId($listRuleId);
        }
        if (!($listRuleId instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapTarget::setListRuleId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($listRuleId)
            ));
        }
        $this->listRuleId = $listRuleId;
        return $this;
    }

    /**
     * Internal rule reference for shared list items.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getListRuleId()
    {
        return $this->listRuleId;
    }

    /**
     * Parameters to the transform.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter
     * @return $this
     */
    public function addParameter(FHIRStructureMapParameter $parameter = null)
    {
        if (null === $parameter) {
            return $this; 
        }
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * Parameters to the transform.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * How the data is copied / created.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRStructureMapTransform
     * @return $this
     */
    public function setTransform($transform)
    {
        if (null === $transform) {
            return $this; 
        }
        if (is_scalar($transform)) {
            $transform = new FHIRStructureMapTransform($transform);
        }
        if (!($transform instanceof FHIRStructureMapTransform)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapTarget::setTransform - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRStructureMapTransform or appropriate scalar value, %s seen.',
                gettype($transform)
            ));
        }
        $this->transform = $transform;
        return $this;
    }

    /**
     * How the data is copied / created.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRStructureMapTransform
     */
    public function getTransform()
    {
        return $this->transform;
    }

    /**
     * Named context for field, if desired, and a field is specified.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function setVariable($variable)
    {
        if (null === $variable) {
            return $this; 
        }
        if (is_scalar($variable)) {
            $variable = new FHIRId($variable);
        }
        if (!($variable instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapTarget::setVariable - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($variable)
            ));
        }
        $this->variable = $variable;
        return $this;
    }

    /**
     * Named context for field, if desired, and a field is specified.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getVariable()
    {
        return $this->variable;
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
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
        }
        if (null !== ($v = $this->getContextType())) {
            $a['contextType'] = $v;
        }
        if (null !== ($v = $this->getElement())) {
            $a['element'] = $v;
        }
        if (0 < count($values = $this->getListMode())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['listMode'] = $vs;
            }
        }
        if (null !== ($v = $this->getListRuleId())) {
            $a['listRuleId'] = $v;
        }
        if (0 < count($values = $this->getParameter())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['parameter'] = $vs;
            }
        }
        if (null !== ($v = $this->getTransform())) {
            $a['transform'] = $v;
        }
        if (null !== ($v = $this->getVariable())) {
            $a['variable'] = $v;
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
            $sxe = new \SimpleXMLElement('<StructureMapTarget xmlns="http://hl7.org/fhir"></StructureMapTarget>');
        }
        if (null !== ($v = $this->getContext())) {
            $v->xmlSerialize(true, $sxe->addChild('context'));
        }
        if (null !== ($v = $this->getContextType())) {
            $v->xmlSerialize(true, $sxe->addChild('contextType'));
        }
        if (null !== ($v = $this->getElement())) {
            $v->xmlSerialize(true, $sxe->addChild('element'));
        }
        if (0 < count($values = $this->getListMode())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('listMode'));
                }
            }
        }
        if (null !== ($v = $this->getListRuleId())) {
            $v->xmlSerialize(true, $sxe->addChild('listRuleId'));
        }
        if (0 < count($values = $this->getParameter())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('parameter'));
                }
            }
        }
        if (null !== ($v = $this->getTransform())) {
            $v->xmlSerialize(true, $sxe->addChild('transform'));
        }
        if (null !== ($v = $this->getVariable())) {
            $v->xmlSerialize(true, $sxe->addChild('variable'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}