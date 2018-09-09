<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition;

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
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration;
use PHPFHIRGenerated\FHIRElement\FHIRRange;

/**
 * This resource allows for the definition of various types of plans as a sharable, consumable, and executable artifact. The resource is general enough to support the description of a broad range of clinical artifacts such as clinical decision support rules, order sets and protocols.
 *
 * Class FHIRPlanDefinitionTarget
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition
 */
class FHIRPlanDefinitionTarget extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'PlanDefinition.Target';

    /**
     * The target value of the measure to be achieved to signify fulfillment of the goal, e.g. 150 pounds or 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any value at or above the low value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $detailCodeableConcept = null;

    /**
     * The target value of the measure to be achieved to signify fulfillment of the goal, e.g. 150 pounds or 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any value at or above the low value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $detailQuantity = null;

    /**
     * The target value of the measure to be achieved to signify fulfillment of the goal, e.g. 150 pounds or 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any value at or above the low value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $detailRange = null;

    /**
     * Indicates the timeframe after the start of the goal in which the goal should be met.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $due = null;

    /**
     * The parameter whose value is to be tracked, e.g. body weight, blood pressure, or hemoglobin A1c level.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $measure = null;

    /**
     * FHIRPlanDefinitionTarget Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['detailCodeableConcept'])) {
                $this->setDetailCodeableConcept($data['detailCodeableConcept']);
            }
            if (isset($data['detailQuantity'])) {
                $this->setDetailQuantity($data['detailQuantity']);
            }
            if (isset($data['detailRange'])) {
                $this->setDetailRange($data['detailRange']);
            }
            if (isset($data['due'])) {
                $this->setDue($data['due']);
            }
            if (isset($data['measure'])) {
                $this->setMeasure($data['measure']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionTarget::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The target value of the measure to be achieved to signify fulfillment of the goal, e.g. 150 pounds or 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any value at or above the low value.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setDetailCodeableConcept(FHIRCodeableConcept $detailCodeableConcept = null)
    {
        if (null === $detailCodeableConcept) {
            return $this; 
        }
        $this->detailCodeableConcept = $detailCodeableConcept;
        return $this;
    }

    /**
     * The target value of the measure to be achieved to signify fulfillment of the goal, e.g. 150 pounds or 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any value at or above the low value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDetailCodeableConcept()
    {
        return $this->detailCodeableConcept;
    }


    /**
     * The target value of the measure to be achieved to signify fulfillment of the goal, e.g. 150 pounds or 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any value at or above the low value.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setDetailQuantity(FHIRQuantity $detailQuantity = null)
    {
        if (null === $detailQuantity) {
            return $this; 
        }
        $this->detailQuantity = $detailQuantity;
        return $this;
    }

    /**
     * The target value of the measure to be achieved to signify fulfillment of the goal, e.g. 150 pounds or 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any value at or above the low value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getDetailQuantity()
    {
        return $this->detailQuantity;
    }


    /**
     * The target value of the measure to be achieved to signify fulfillment of the goal, e.g. 150 pounds or 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any value at or above the low value.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setDetailRange(FHIRRange $detailRange = null)
    {
        if (null === $detailRange) {
            return $this; 
        }
        $this->detailRange = $detailRange;
        return $this;
    }

    /**
     * The target value of the measure to be achieved to signify fulfillment of the goal, e.g. 150 pounds or 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any value at or above the low value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getDetailRange()
    {
        return $this->detailRange;
    }


    /**
     * Indicates the timeframe after the start of the goal in which the goal should be met.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     * @return $this
     */
    public function setDue(FHIRDuration $due = null)
    {
        if (null === $due) {
            return $this; 
        }
        $this->due = $due;
        return $this;
    }

    /**
     * Indicates the timeframe after the start of the goal in which the goal should be met.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getDue()
    {
        return $this->due;
    }


    /**
     * The parameter whose value is to be tracked, e.g. body weight, blood pressure, or hemoglobin A1c level.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setMeasure(FHIRCodeableConcept $measure = null)
    {
        if (null === $measure) {
            return $this; 
        }
        $this->measure = $measure;
        return $this;
    }

    /**
     * The parameter whose value is to be tracked, e.g. body weight, blood pressure, or hemoglobin A1c level.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMeasure()
    {
        return $this->measure;
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
        if (null !== ($v = $this->getDetailCodeableConcept())) {
            $a['detailCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getDetailQuantity())) {
            $a['detailQuantity'] = $v;
        }
        if (null !== ($v = $this->getDetailRange())) {
            $a['detailRange'] = $v;
        }
        if (null !== ($v = $this->getDue())) {
            $a['due'] = $v;
        }
        if (null !== ($v = $this->getMeasure())) {
            $a['measure'] = $v;
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
            $sxe = new \SimpleXMLElement('<PlanDefinitionTarget xmlns="http://hl7.org/fhir"></PlanDefinitionTarget>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}