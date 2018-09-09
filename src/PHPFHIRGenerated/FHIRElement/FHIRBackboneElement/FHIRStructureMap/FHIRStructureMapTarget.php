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
    public $context = null;

    /**
     * How to interpret the context.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRStructureMapContextType
     */
    public $contextType = null;

    /**
     * Field to create in the context.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $element = null;

    /**
     * If field is a list, how to manage the list.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRStructureMapTargetListMode
     */
    public $listMode = null;

    /**
     * Internal rule reference for shared list items.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $listRuleId = null;

    /**
     * Parameters to the transform.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter
     */
    public $parameter = null;

    /**
     * How the data is copied / created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRStructureMapTransform
     */
    public $transform = null;

    /**
     * Named context for field, if desired, and a field is specified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $variable = null;

    /**
     * FHIRStructureMapTarget Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['contextType'])) {
                $this->setContextType($data['contextType']);
            }
            if (isset($data['element'])) {
                $this->setElement($data['element']);
            }
            if (isset($data['listMode'])) {
                $this->setListMode($data['listMode']);
            }
            if (isset($data['listRuleId'])) {
                $this->setListRuleId($data['listRuleId']);
            }
            if (isset($data['parameter'])) {
                $this->setParameter($data['parameter']);
            }
            if (isset($data['transform'])) {
                $this->setTransform($data['transform']);
            }
            if (isset($data['variable'])) {
                $this->setVariable($data['variable']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
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
    public function setListMode($listMode)
    {
        if (null === $listMode) {
            return $this; 
        }
        if (is_scalar($listMode)) {
            $listMode = new FHIRStructureMapTargetListMode($listMode);
        }
        if (!($listMode instanceof FHIRStructureMapTargetListMode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapTarget::setListMode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRStructureMapTargetListMode or appropriate scalar value, %s seen.',
                gettype($listMode)
            ));
        }
        $this->listMode = $listMode;
        return $this;
    }

    /**
     * If field is a list, how to manage the list.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRStructureMapTargetListMode
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
    public function setParameter(FHIRStructureMapParameter $parameter = null)
    {
        if (null === $parameter) {
            return $this; 
        }
        $this->parameter = $parameter;
        return $this;
    }

    /**
     * Parameters to the transform.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter
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
        if (null !== ($v = $this->getListMode())) {
            $a['listMode'] = $v;
        }
        if (null !== ($v = $this->getListRuleId())) {
            $a['listRuleId'] = $v;
        }
        if (null !== ($v = $this->getParameter())) {
            $a['parameter'] = $v;
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
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}