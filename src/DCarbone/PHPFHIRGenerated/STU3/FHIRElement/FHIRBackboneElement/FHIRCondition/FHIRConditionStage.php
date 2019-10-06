<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCondition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:04+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A clinical condition, problem, diagnosis, or other event, situation, issue, or
 * clinical concept that has risen to a level of concern.
 *
 * Class FHIRConditionStage
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCondition
 */
class FHIRConditionStage extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONDITION_DOT_STAGE;

    const FIELD_ASSESSMENT = 'assessment';
    const FIELD_SUMMARY = 'summary';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to a formal record of the evidence on which the staging assessment is
     * based.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    private $assessment = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A simple summary of the stage such as "Stage 3". The determination of the stage
     * is disease-specific.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    private $summary = null;

    /**
     * FHIRConditionStage Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConditionStage::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ASSESSMENT])) {
            if (is_array($data[self::FIELD_ASSESSMENT])) {
                foreach($data[self::FIELD_ASSESSMENT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addAssessment($v);
                    } else {
                        $this->addAssessment(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_ASSESSMENT] instanceof FHIRReference) {
                $this->addAssessment($data[self::FIELD_ASSESSMENT]);
            } else {
                $this->addAssessment(new FHIRReference($data[self::FIELD_ASSESSMENT]));
            }
        }
        if (isset($data[self::FIELD_SUMMARY])) {
            if ($data[self::FIELD_SUMMARY] instanceof FHIRCodeableConcept) {
                $this->setSummary($data[self::FIELD_SUMMARY]);
            } else {
                $this->setSummary(new FHIRCodeableConcept($data[self::FIELD_SUMMARY]));
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to a formal record of the evidence on which the staging assessment is
     * based.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getAssessment()
    {
        return $this->assessment;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to a formal record of the evidence on which the staging assessment is
     * based.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $assessment
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage
     */
    public function addAssessment(FHIRReference $assessment = null)
    {
        $this->assessment[] = $assessment;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to a formal record of the evidence on which the staging assessment is
     * based.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $assessment
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage
     */
    public function setAssessment(array $assessment = [])
    {
        $this->assessment = [];
        if ([] === $assessment) {
            return $this;
        }
        foreach($assessment as $v) {
            if ($v instanceof FHIRReference) {
                $this->addAssessment($v);
            } else {
                $this->addAssessment(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A simple summary of the stage such as "Stage 3". The determination of the stage
     * is disease-specific.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A simple summary of the stage such as "Stage 3". The determination of the stage
     * is disease-specific.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $summary
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage
     */
    public function setSummary(FHIRCodeableConcept $summary = null)
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage $type
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage
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
                throw new \DomainException(sprintf('FHIRConditionStage::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRConditionStage::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRConditionStage);
        } elseif (!is_object($type) || !($type instanceof FHIRConditionStage)) {
            throw new \RuntimeException(sprintf(
                'FHIRConditionStage::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->assessment)) {
            foreach($children->assessment as $child) {
                $type->addAssessment(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->summary)) {
            $type->setSummary(FHIRCodeableConcept::xmlUnserialize($children->summary));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ConditionStage xmlns="http://hl7.org/fhir"></ConditionStage>');
        }
        parent::xmlSerialize($sxe);

        if ([] !== ($vs = $this->getAssessment())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ASSESSMENT));
            }
        }

        if (null !== ($v = $this->getSummary())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUMMARY));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getAssessment())) {
            $a[self::FIELD_ASSESSMENT] = $vs;
        }
        if (null !== ($v = $this->getSummary())) {
            $a[self::FIELD_SUMMARY] = $v;
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