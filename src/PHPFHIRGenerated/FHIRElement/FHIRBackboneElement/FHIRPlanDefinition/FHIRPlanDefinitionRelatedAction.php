<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition;

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

use PHPFHIRGenerated\FHIRElement\FHIRActionRelationshipType;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRId;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration;
use PHPFHIRGenerated\FHIRElement\FHIRRange;

/**
 * This resource allows for the definition of various types of plans as a sharable, consumable, and executable artifact. The resource is general enough to support the description of a broad range of clinical artifacts such as clinical decision support rules, order sets and protocols.
 *
 * Class FHIRPlanDefinitionRelatedAction
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition
 */
class FHIRPlanDefinitionRelatedAction extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'PlanDefinition.RelatedAction';

    /**
     * The element id of the related action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    private $actionId = null;

    /**
     * A duration or range of durations to apply to the relationship. For example, 30-60 minutes before. (choose any one of offset*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    private $offsetDuration = null;

    /**
     * A duration or range of durations to apply to the relationship. For example, 30-60 minutes before. (choose any one of offset*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    private $offsetRange = null;

    /**
     * The relationship of this action to the related action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRActionRelationshipType
     */
    private $relationship = null;

    /**
     * FHIRPlanDefinitionRelatedAction Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['actionId'])) {
                $value = $data['actionId'];
                if (is_array($value)) {
                    $value = new FHIRId($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRId($value);
                }
                if (!($value instanceof FHIRId)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction::__construct - Property \"actionId\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or data to construct type, saw ".gettype($value)); 
                }
                $this->setActionId($value);
            }
            if (isset($data['offsetDuration'])) {
                $value = $data['offsetDuration'];
                if (is_array($value)) {
                    $value = new FHIRDuration($value);
                } 
                if (!($value instanceof FHIRDuration)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction::__construct - Property \"offsetDuration\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration or data to construct type, saw ".gettype($value)); 
                }
                $this->setOffsetDuration($value);
            }
            if (isset($data['offsetRange'])) {
                $value = $data['offsetRange'];
                if (is_array($value)) {
                    $value = new FHIRRange($value);
                } 
                if (!($value instanceof FHIRRange)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction::__construct - Property \"offsetRange\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRRange or data to construct type, saw ".gettype($value)); 
                }
                $this->setOffsetRange($value);
            }
            if (isset($data['relationship'])) {
                $value = $data['relationship'];
                if (is_array($value)) {
                    $value = new FHIRActionRelationshipType($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRActionRelationshipType($value);
                }
                if (!($value instanceof FHIRActionRelationshipType)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction::__construct - Property \"relationship\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRActionRelationshipType or data to construct type, saw ".gettype($value)); 
                }
                $this->setRelationship($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * The element id of the related action.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function setActionId($actionId)
    {
        if (null === $actionId) {
            return $this; 
        }
        if (is_scalar($actionId)) {
            $actionId = new FHIRId($actionId);
        }
        if (!($actionId instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPlanDefinitionRelatedAction::setActionId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($actionId)
            ));
        }
        $this->actionId = $actionId;
        return $this;
    }

    /**
     * The element id of the related action.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getActionId()
    {
        return $this->actionId;
    }

    /**
     * A duration or range of durations to apply to the relationship. For example, 30-60 minutes before. (choose any one of offset*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     * @return $this
     */
    public function setOffsetDuration(FHIRDuration $offsetDuration = null)
    {
        if (null === $offsetDuration) {
            return $this; 
        }
        $this->offsetDuration = $offsetDuration;
        return $this;
    }

    /**
     * A duration or range of durations to apply to the relationship. For example, 30-60 minutes before. (choose any one of offset*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getOffsetDuration()
    {
        return $this->offsetDuration;
    }

    /**
     * A duration or range of durations to apply to the relationship. For example, 30-60 minutes before. (choose any one of offset*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setOffsetRange(FHIRRange $offsetRange = null)
    {
        if (null === $offsetRange) {
            return $this; 
        }
        $this->offsetRange = $offsetRange;
        return $this;
    }

    /**
     * A duration or range of durations to apply to the relationship. For example, 30-60 minutes before. (choose any one of offset*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getOffsetRange()
    {
        return $this->offsetRange;
    }

    /**
     * The relationship of this action to the related action.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRActionRelationshipType
     * @return $this
     */
    public function setRelationship($relationship)
    {
        if (null === $relationship) {
            return $this; 
        }
        if (is_scalar($relationship)) {
            $relationship = new FHIRActionRelationshipType($relationship);
        }
        if (!($relationship instanceof FHIRActionRelationshipType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPlanDefinitionRelatedAction::setRelationship - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRActionRelationshipType or appropriate scalar value, %s seen.',
                gettype($relationship)
            ));
        }
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * The relationship of this action to the related action.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRActionRelationshipType
     */
    public function getRelationship()
    {
        return $this->relationship;
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
        if (null !== ($v = $this->getActionId())) {
            $a['actionId'] = $v;
        }
        if (null !== ($v = $this->getOffsetDuration())) {
            $a['offsetDuration'] = $v;
        }
        if (null !== ($v = $this->getOffsetRange())) {
            $a['offsetRange'] = $v;
        }
        if (null !== ($v = $this->getRelationship())) {
            $a['relationship'] = $v;
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
            $sxe = new \SimpleXMLElement('<PlanDefinitionRelatedAction xmlns="http://hl7.org/fhir"></PlanDefinitionRelatedAction>');
        }
        if (null !== ($v = $this->getActionId())) {
            $v->xmlSerialize(true, $sxe->addChild('actionId'));
        }
        if (null !== ($v = $this->getOffsetDuration())) {
            $v->xmlSerialize(true, $sxe->addChild('offsetDuration'));
        }
        if (null !== ($v = $this->getOffsetRange())) {
            $v->xmlSerialize(true, $sxe->addChild('offsetRange'));
        }
        if (null !== ($v = $this->getRelationship())) {
            $v->xmlSerialize(true, $sxe->addChild('relationship'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}