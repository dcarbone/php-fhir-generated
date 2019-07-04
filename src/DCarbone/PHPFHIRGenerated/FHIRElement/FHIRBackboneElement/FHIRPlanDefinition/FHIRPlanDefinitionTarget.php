<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 4th, 2019 21:57+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * This resource allows for the definition of various types of plans as a sharable,
 * consumable, and executable artifact. The resource is general enough to support
 * the description of a broad range of clinical artifacts such as clinical decision
 * support rules, order sets and protocols.
 *
 * Class FHIRPlanDefinitionTarget
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition
 */
class FHIRPlanDefinitionTarget extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_TARGET;

    const FIELD_DETAIL_CODEABLE_CONCEPT = 'detailCodeableConcept';
    const FIELD_DETAIL_QUANTITY = 'detailQuantity';
    const FIELD_DETAIL_RANGE = 'detailRange';
    const FIELD_DUE = 'due';
    const FIELD_MEASURE = 'measure';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%. Either the high or low or both values of the
     * range can be specified. When a low value is missing, it indicates that the goal
     * is achieved at any value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any value at or
     * above the low value. (choose any one of detail*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $detailCodeableConcept = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%. Either the high or low or both values of the
     * range can be specified. When a low value is missing, it indicates that the goal
     * is achieved at any value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any value at or
     * above the low value. (choose any one of detail*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    private $detailQuantity = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%. Either the high or low or both values of the
     * range can be specified. When a low value is missing, it indicates that the goal
     * is achieved at any value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any value at or
     * above the low value. (choose any one of detail*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    private $detailRange = null;

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the timeframe after the start of the goal in which the goal should be
     * met.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    private $due = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The parameter whose value is to be tracked, e.g. body weight, blood pressure, or
     * hemoglobin A1c level.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $measure = null;

    /**
     * FHIRPlanDefinitionTarget Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPlanDefinitionTarget::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DETAIL_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_DETAIL_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setDetailCodeableConcept($data[self::FIELD_DETAIL_CODEABLE_CONCEPT]);
            } else {
                $this->setDetailCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_DETAIL_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_DETAIL_QUANTITY])) {
            if ($data[self::FIELD_DETAIL_QUANTITY] instanceof FHIRQuantity) {
                $this->setDetailQuantity($data[self::FIELD_DETAIL_QUANTITY]);
            } else {
                $this->setDetailQuantity(new FHIRQuantity($data[self::FIELD_DETAIL_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_DETAIL_RANGE])) {
            if ($data[self::FIELD_DETAIL_RANGE] instanceof FHIRRange) {
                $this->setDetailRange($data[self::FIELD_DETAIL_RANGE]);
            } else {
                $this->setDetailRange(new FHIRRange($data[self::FIELD_DETAIL_RANGE]));
            }
        }
        if (isset($data[self::FIELD_DUE])) {
            if ($data[self::FIELD_DUE] instanceof FHIRDuration) {
                $this->setDue($data[self::FIELD_DUE]);
            } else {
                $this->setDue(new FHIRDuration($data[self::FIELD_DUE]));
            }
        }
        if (isset($data[self::FIELD_MEASURE])) {
            if ($data[self::FIELD_MEASURE] instanceof FHIRCodeableConcept) {
                $this->setMeasure($data[self::FIELD_MEASURE]);
            } else {
                $this->setMeasure(new FHIRCodeableConcept($data[self::FIELD_MEASURE]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%. Either the high or low or both values of the
     * range can be specified. When a low value is missing, it indicates that the goal
     * is achieved at any value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any value at or
     * above the low value. (choose any one of detail*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDetailCodeableConcept()
    {
        return $this->detailCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%. Either the high or low or both values of the
     * range can be specified. When a low value is missing, it indicates that the goal
     * is achieved at any value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any value at or
     * above the low value. (choose any one of detail*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $detailCodeableConcept
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionTarget
     */
    public function setDetailCodeableConcept(FHIRCodeableConcept $detailCodeableConcept = null)
    {
        $this->detailCodeableConcept = $detailCodeableConcept;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%. Either the high or low or both values of the
     * range can be specified. When a low value is missing, it indicates that the goal
     * is achieved at any value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any value at or
     * above the low value. (choose any one of detail*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getDetailQuantity()
    {
        return $this->detailQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%. Either the high or low or both values of the
     * range can be specified. When a low value is missing, it indicates that the goal
     * is achieved at any value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any value at or
     * above the low value. (choose any one of detail*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity $detailQuantity
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionTarget
     */
    public function setDetailQuantity(FHIRQuantity $detailQuantity = null)
    {
        $this->detailQuantity = $detailQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%. Either the high or low or both values of the
     * range can be specified. When a low value is missing, it indicates that the goal
     * is achieved at any value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any value at or
     * above the low value. (choose any one of detail*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getDetailRange()
    {
        return $this->detailRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The target value of the measure to be achieved to signify fulfillment of the
     * goal, e.g. 150 pounds or 7.0%. Either the high or low or both values of the
     * range can be specified. When a low value is missing, it indicates that the goal
     * is achieved at any value at or below the high value. Similarly, if the high
     * value is missing, it indicates that the goal is achieved at any value at or
     * above the low value. (choose any one of detail*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRange $detailRange
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionTarget
     */
    public function setDetailRange(FHIRRange $detailRange = null)
    {
        $this->detailRange = $detailRange;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the timeframe after the start of the goal in which the goal should be
     * met.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getDue()
    {
        return $this->due;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the timeframe after the start of the goal in which the goal should be
     * met.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration $due
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionTarget
     */
    public function setDue(FHIRDuration $due = null)
    {
        $this->due = $due;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The parameter whose value is to be tracked, e.g. body weight, blood pressure, or
     * hemoglobin A1c level.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMeasure()
    {
        return $this->measure;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The parameter whose value is to be tracked, e.g. body weight, blood pressure, or
     * hemoglobin A1c level.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $measure
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionTarget
     */
    public function setMeasure(FHIRCodeableConcept $measure = null)
    {
        $this->measure = $measure;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionTarget $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionTarget
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRPlanDefinitionTarget::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRPlanDefinitionTarget::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRPlanDefinitionTarget);
        } elseif (!is_object($type) || !($type instanceof FHIRPlanDefinitionTarget)) {
            throw new \RuntimeException(sprintf(
                'FHIRPlanDefinitionTarget::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionTarget or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->detailCodeableConcept)) {
            $type->setDetailCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->detailCodeableConcept));
        }
        if (isset($children->detailQuantity)) {
            $type->setDetailQuantity(FHIRQuantity::xmlUnserialize($children->detailQuantity));
        }
        if (isset($children->detailRange)) {
            $type->setDetailRange(FHIRRange::xmlUnserialize($children->detailRange));
        }
        if (isset($children->due)) {
            $type->setDue(FHIRDuration::xmlUnserialize($children->due));
        }
        if (isset($children->measure)) {
            $type->setMeasure(FHIRCodeableConcept::xmlUnserialize($children->measure));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<PlanDefinitionTarget xmlns="http://hl7.org/fhir"></PlanDefinitionTarget>');
        }
        if (null !== ($v = $this->getDetailCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DETAIL_CODEABLE_CONCEPT));
        }
        if (null !== ($v = $this->getDetailQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DETAIL_QUANTITY));
        }
        if (null !== ($v = $this->getDetailRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DETAIL_RANGE));
        }
        if (null !== ($v = $this->getDue())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DUE));
        }
        if (null !== ($v = $this->getMeasure())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MEASURE));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getDetailCodeableConcept())) {
            $a[self::FIELD_DETAIL_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getDetailQuantity())) {
            $a[self::FIELD_DETAIL_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getDetailRange())) {
            $a[self::FIELD_DETAIL_RANGE] = $v;
        }
        if (null !== ($v = $this->getDue())) {
            $a[self::FIELD_DUE] = $v;
        }
        if (null !== ($v = $this->getMeasure())) {
            $a[self::FIELD_MEASURE] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}