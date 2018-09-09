<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan;

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

use PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRReference;

/**
 * Describes the intention of how one or more practitioners intend to deliver care for a particular patient, group or community for a period of time, possibly limited to care for a specific condition or set of conditions.
 *
 * Class FHIRCarePlanActivity
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan
 */
class FHIRCarePlanActivity extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'CarePlan.Activity';

    /**
     * A simple summary of a planned activity suitable for a general care plan system (e.g. form driven) that doesn't know about specific resources such as procedure etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public $detail = null;

    /**
     * Identifies the outcome at the point when the status of the activity is assessed.  For example, the outcome of an education activity could be patient understands (or not).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $outcomeCodeableConcept = null;

    /**
     * Details of the outcome or action resulting from the activity.  The reference to an "event" resource, such as Procedure or Encounter or Observation, is the result/outcome of the activity itself.  The activity can be conveyed using CarePlan.activity.detail OR using the CarePlan.activity.reference (a reference to a “request” resource).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $outcomeReference = null;

    /**
     * Notes about the adherence/status/progress of the activity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $progress = null;

    /**
     * The details of the proposed activity represented in a specific resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reference = null;

    /**
     * FHIRCarePlanActivity Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['detail'])) {
                $this->setDetail($data['detail']);
            }
            if (isset($data['outcomeCodeableConcept'])) {
                $this->setOutcomeCodeableConcept($data['outcomeCodeableConcept']);
            }
            if (isset($data['outcomeReference'])) {
                $this->setOutcomeReference($data['outcomeReference']);
            }
            if (isset($data['progress'])) {
                $this->setProgress($data['progress']);
            }
            if (isset($data['reference'])) {
                $this->setReference($data['reference']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * A simple summary of a planned activity suitable for a general care plan system (e.g. form driven) that doesn't know about specific resources such as procedure etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     * @return $this
     */
    public function setDetail(FHIRCarePlanDetail $detail = null)
    {
        if (null === $detail) {
            return $this; 
        }
        $this->detail = $detail;
        return $this;
    }

    /**
     * A simple summary of a planned activity suitable for a general care plan system (e.g. form driven) that doesn't know about specific resources such as procedure etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
     */
    public function getDetail()
    {
        return $this->detail;
    }


    /**
     * Identifies the outcome at the point when the status of the activity is assessed.  For example, the outcome of an education activity could be patient understands (or not).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setOutcomeCodeableConcept(FHIRCodeableConcept $outcomeCodeableConcept = null)
    {
        if (null === $outcomeCodeableConcept) {
            return $this; 
        }
        $this->outcomeCodeableConcept = $outcomeCodeableConcept;
        return $this;
    }

    /**
     * Identifies the outcome at the point when the status of the activity is assessed.  For example, the outcome of an education activity could be patient understands (or not).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getOutcomeCodeableConcept()
    {
        return $this->outcomeCodeableConcept;
    }


    /**
     * Details of the outcome or action resulting from the activity.  The reference to an "event" resource, such as Procedure or Encounter or Observation, is the result/outcome of the activity itself.  The activity can be conveyed using CarePlan.activity.detail OR using the CarePlan.activity.reference (a reference to a “request” resource).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setOutcomeReference(FHIRReference $outcomeReference = null)
    {
        if (null === $outcomeReference) {
            return $this; 
        }
        $this->outcomeReference = $outcomeReference;
        return $this;
    }

    /**
     * Details of the outcome or action resulting from the activity.  The reference to an "event" resource, such as Procedure or Encounter or Observation, is the result/outcome of the activity itself.  The activity can be conveyed using CarePlan.activity.detail OR using the CarePlan.activity.reference (a reference to a “request” resource).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOutcomeReference()
    {
        return $this->outcomeReference;
    }


    /**
     * Notes about the adherence/status/progress of the activity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     * @return $this
     */
    public function setProgress(FHIRAnnotation $progress = null)
    {
        if (null === $progress) {
            return $this; 
        }
        $this->progress = $progress;
        return $this;
    }

    /**
     * Notes about the adherence/status/progress of the activity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getProgress()
    {
        return $this->progress;
    }


    /**
     * The details of the proposed activity represented in a specific resource.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setReference(FHIRReference $reference = null)
    {
        if (null === $reference) {
            return $this; 
        }
        $this->reference = $reference;
        return $this;
    }

    /**
     * The details of the proposed activity represented in a specific resource.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReference()
    {
        return $this->reference;
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
        if (null !== ($v = $this->getDetail())) {
            $a['detail'] = $v;
        }
        if (null !== ($v = $this->getOutcomeCodeableConcept())) {
            $a['outcomeCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getOutcomeReference())) {
            $a['outcomeReference'] = $v;
        }
        if (null !== ($v = $this->getProgress())) {
            $a['progress'] = $v;
        }
        if (null !== ($v = $this->getReference())) {
            $a['reference'] = $v;
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
            $sxe = new \SimpleXMLElement('<CarePlanActivity xmlns="http://hl7.org/fhir"></CarePlanActivity>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}