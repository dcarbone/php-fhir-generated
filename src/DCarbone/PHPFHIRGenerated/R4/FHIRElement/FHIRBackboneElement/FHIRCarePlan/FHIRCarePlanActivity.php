<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCarePlan;

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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Describes the intention of how one or more practitioners intend to deliver care
 * for a particular patient, group or community for a period of time, possibly
 * limited to care for a specific condition or set of conditions.
 *
 * Class FHIRCarePlanActivity
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCarePlan
 */
class FHIRCarePlanActivity extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_ACTIVITY;

    const FIELD_DETAIL = 'detail';
    const FIELD_OUTCOME_CODEABLE_CONCEPT = 'outcomeCodeableConcept';
    const FIELD_OUTCOME_REFERENCE = 'outcomeReference';
    const FIELD_PROGRESS = 'progress';
    const FIELD_REFERENCE = 'reference';

    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient, group or community for a period of time, possibly
     * limited to care for a specific condition or set of conditions.
     *
     * A simple summary of a planned activity suitable for a general care plan system
     * (e.g. form driven) that doesn't know about specific resources such as procedure
     * etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    private $detail = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the outcome at the point when the status of the activity is assessed.
     * For example, the outcome of an education activity could be patient understands
     * (or not).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $outcomeCodeableConcept = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Details of the outcome or action resulting from the activity. The reference to
     * an "event" resource, such as Procedure or Encounter or Observation, is the
     * result/outcome of the activity itself. The activity can be conveyed using
     * CarePlan.activity.detail OR using the CarePlan.activity.reference (a reference
     * to a “request” resource).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $outcomeReference = [];
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Notes about the adherence/status/progress of the activity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    private $progress = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The details of the proposed activity represented in a specific resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $reference = null;

    /**
     * FHIRCarePlanActivity Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCarePlanActivity::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DETAIL])) {
            if ($data[self::FIELD_DETAIL] instanceof FHIRCarePlanDetail) {
                $this->setDetail($data[self::FIELD_DETAIL]);
            } else {
                $this->setDetail(new FHIRCarePlanDetail($data[self::FIELD_DETAIL]));
            }
        }
        if (isset($data[self::FIELD_OUTCOME_CODEABLE_CONCEPT])) {
            if (is_array($data[self::FIELD_OUTCOME_CODEABLE_CONCEPT])) {
                foreach($data[self::FIELD_OUTCOME_CODEABLE_CONCEPT] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addOutcomeCodeableConcept($v);
                    } else {
                        $this->addOutcomeCodeableConcept(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_OUTCOME_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->addOutcomeCodeableConcept($data[self::FIELD_OUTCOME_CODEABLE_CONCEPT]);
            } else {
                $this->addOutcomeCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_OUTCOME_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_OUTCOME_REFERENCE])) {
            if (is_array($data[self::FIELD_OUTCOME_REFERENCE])) {
                foreach($data[self::FIELD_OUTCOME_REFERENCE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addOutcomeReference($v);
                    } else {
                        $this->addOutcomeReference(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_OUTCOME_REFERENCE] instanceof FHIRReference) {
                $this->addOutcomeReference($data[self::FIELD_OUTCOME_REFERENCE]);
            } else {
                $this->addOutcomeReference(new FHIRReference($data[self::FIELD_OUTCOME_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_PROGRESS])) {
            if (is_array($data[self::FIELD_PROGRESS])) {
                foreach($data[self::FIELD_PROGRESS] as $v) {
                    if ($v instanceof FHIRAnnotation) {
                        $this->addProgress($v);
                    } else {
                        $this->addProgress(new FHIRAnnotation($v));
                    }
                }
            } else if ($data[self::FIELD_PROGRESS] instanceof FHIRAnnotation) {
                $this->addProgress($data[self::FIELD_PROGRESS]);
            } else {
                $this->addProgress(new FHIRAnnotation($data[self::FIELD_PROGRESS]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE])) {
            if ($data[self::FIELD_REFERENCE] instanceof FHIRReference) {
                $this->setReference($data[self::FIELD_REFERENCE]);
            } else {
                $this->setReference(new FHIRReference($data[self::FIELD_REFERENCE]));
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
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient, group or community for a period of time, possibly
     * limited to care for a specific condition or set of conditions.
     *
     * A simple summary of a planned activity suitable for a general care plan system
     * (e.g. form driven) that doesn't know about specific resources such as procedure
     * etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient, group or community for a period of time, possibly
     * limited to care for a specific condition or set of conditions.
     *
     * A simple summary of a planned activity suitable for a general care plan system
     * (e.g. form driven) that doesn't know about specific resources such as procedure
     * etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail $detail
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity
     */
    public function setDetail(FHIRCarePlanDetail $detail = null)
    {
        $this->detail = $detail;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the outcome at the point when the status of the activity is assessed.
     * For example, the outcome of an education activity could be patient understands
     * (or not).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getOutcomeCodeableConcept()
    {
        return $this->outcomeCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the outcome at the point when the status of the activity is assessed.
     * For example, the outcome of an education activity could be patient understands
     * (or not).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $outcomeCodeableConcept
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity
     */
    public function addOutcomeCodeableConcept(FHIRCodeableConcept $outcomeCodeableConcept = null)
    {
        $this->outcomeCodeableConcept[] = $outcomeCodeableConcept;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the outcome at the point when the status of the activity is assessed.
     * For example, the outcome of an education activity could be patient understands
     * (or not).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $outcomeCodeableConcept
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity
     */
    public function setOutcomeCodeableConcept(array $outcomeCodeableConcept = [])
    {
        $this->outcomeCodeableConcept = [];
        if ([] === $outcomeCodeableConcept) {
            return $this;
        }
        foreach($outcomeCodeableConcept as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addOutcomeCodeableConcept($v);
            } else {
                $this->addOutcomeCodeableConcept(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Details of the outcome or action resulting from the activity. The reference to
     * an "event" resource, such as Procedure or Encounter or Observation, is the
     * result/outcome of the activity itself. The activity can be conveyed using
     * CarePlan.activity.detail OR using the CarePlan.activity.reference (a reference
     * to a “request” resource).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getOutcomeReference()
    {
        return $this->outcomeReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Details of the outcome or action resulting from the activity. The reference to
     * an "event" resource, such as Procedure or Encounter or Observation, is the
     * result/outcome of the activity itself. The activity can be conveyed using
     * CarePlan.activity.detail OR using the CarePlan.activity.reference (a reference
     * to a “request” resource).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $outcomeReference
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity
     */
    public function addOutcomeReference(FHIRReference $outcomeReference = null)
    {
        $this->outcomeReference[] = $outcomeReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Details of the outcome or action resulting from the activity. The reference to
     * an "event" resource, such as Procedure or Encounter or Observation, is the
     * result/outcome of the activity itself. The activity can be conveyed using
     * CarePlan.activity.detail OR using the CarePlan.activity.reference (a reference
     * to a “request” resource).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $outcomeReference
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity
     */
    public function setOutcomeReference(array $outcomeReference = [])
    {
        $this->outcomeReference = [];
        if ([] === $outcomeReference) {
            return $this;
        }
        foreach($outcomeReference as $v) {
            if ($v instanceof FHIRReference) {
                $this->addOutcomeReference($v);
            } else {
                $this->addOutcomeReference(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Notes about the adherence/status/progress of the activity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Notes about the adherence/status/progress of the activity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation $progress
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity
     */
    public function addProgress(FHIRAnnotation $progress = null)
    {
        $this->progress[] = $progress;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Notes about the adherence/status/progress of the activity.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[] $progress
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity
     */
    public function setProgress(array $progress = [])
    {
        $this->progress = [];
        if ([] === $progress) {
            return $this;
        }
        foreach($progress as $v) {
            if ($v instanceof FHIRAnnotation) {
                $this->addProgress($v);
            } else {
                $this->addProgress(new FHIRAnnotation($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The details of the proposed activity represented in a specific resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The details of the proposed activity represented in a specific resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $reference
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity
     */
    public function setReference(FHIRReference $reference = null)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity $type
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity
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
                throw new \DomainException(sprintf('FHIRCarePlanActivity::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCarePlanActivity::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRCarePlanActivity);
        } elseif (!is_object($type) || !($type instanceof FHIRCarePlanActivity)) {
            throw new \RuntimeException(sprintf(
                'FHIRCarePlanActivity::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->detail)) {
            $type->setDetail(FHIRCarePlanDetail::xmlUnserialize($children->detail));
        }
        if (isset($children->outcomeCodeableConcept)) {
            foreach($children->outcomeCodeableConcept as $child) {
                $type->addOutcomeCodeableConcept(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->outcomeReference)) {
            foreach($children->outcomeReference as $child) {
                $type->addOutcomeReference(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->progress)) {
            foreach($children->progress as $child) {
                $type->addProgress(FHIRAnnotation::xmlUnserialize($child));
            }
        }
        if (isset($children->reference)) {
            $type->setReference(FHIRReference::xmlUnserialize($children->reference));
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
            $sxe = new \SimpleXMLElement('<CarePlanActivity xmlns="http://hl7.org/fhir"></CarePlanActivity>');
        }
        parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getDetail())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DETAIL));
        }

        if ([] !== ($vs = $this->getOutcomeCodeableConcept())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_OUTCOME_CODEABLE_CONCEPT));
            }
        }

        if ([] !== ($vs = $this->getOutcomeReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_OUTCOME_REFERENCE));
            }
        }

        if ([] !== ($vs = $this->getProgress())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROGRESS));
            }
        }

        if (null !== ($v = $this->getReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getDetail())) {
            $a[self::FIELD_DETAIL] = $v;
        }
        if ([] !== ($vs = $this->getOutcomeCodeableConcept())) {
            $a[self::FIELD_OUTCOME_CODEABLE_CONCEPT] = $vs;
        }
        if ([] !== ($vs = $this->getOutcomeReference())) {
            $a[self::FIELD_OUTCOME_REFERENCE] = $vs;
        }
        if ([] !== ($vs = $this->getProgress())) {
            $a[self::FIELD_PROGRESS] = $vs;
        }
        if (null !== ($v = $this->getReference())) {
            $a[self::FIELD_REFERENCE] = $v;
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