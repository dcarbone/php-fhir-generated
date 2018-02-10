<?php namespace PHPFHIRGenerated\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * An assessment of the likely outcome(s) for a patient or other subject as well as the likelihood of each outcome.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRRiskAssessment extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Business identifier assigned to the risk assessment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * A reference to the request that is fulfilled by this risk assessment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $basedOn = null;

    /**
     * A reference to a resource that this risk assessment is part of, such as a Procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $parent = null;

    /**
     * The status of the RiskAssessment, using the same statuses as an Observation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRObservationStatus
     */
    public $status = null;

    /**
     * The algorithm, process or mechanism used to evaluate the risk.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $method = null;

    /**
     * The type of the risk assessment performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * The patient or group the risk assessment applies to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The encounter where the assessment was performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $occurrenceDateTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $occurrencePeriod = null;

    /**
     * For assessments or prognosis specific to a particular condition, indicates the condition being assessed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $condition = null;

    /**
     * The provider or software application that performed the assessment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $performer = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCodeableConcept = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reasonReference = null;

    /**
     * Indicates the source data considered as part of the assessment (FamilyHistory, Observations, Procedures, Conditions, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $basis = [];

    /**
     * Describes the expected outcome for the subject.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRRiskAssessment\FHIRRiskAssessmentPrediction[]
     */
    public $prediction = [];

    /**
     * A description of the steps that might be taken to reduce the identified risk(s).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $mitigation = null;

    /**
     * Additional comments about the risk assessment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $comment = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'RiskAssessment';

    /**
     * Business identifier assigned to the risk assessment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Business identifier assigned to the risk assessment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier) {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A reference to the request that is fulfilled by this risk assessment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getBasedOn() {
        return $this->basedOn;
    }

    /**
     * A reference to the request that is fulfilled by this risk assessment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $basedOn
     * @return $this
     */
    public function setBasedOn($basedOn) {
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * A reference to a resource that this risk assessment is part of, such as a Procedure.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getParent() {
        return $this->parent;
    }

    /**
     * A reference to a resource that this risk assessment is part of, such as a Procedure.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $parent
     * @return $this
     */
    public function setParent($parent) {
        $this->parent = $parent;
        return $this;
    }

    /**
     * The status of the RiskAssessment, using the same statuses as an Observation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRObservationStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * The status of the RiskAssessment, using the same statuses as an Observation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRObservationStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * The algorithm, process or mechanism used to evaluate the risk.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod() {
        return $this->method;
    }

    /**
     * The algorithm, process or mechanism used to evaluate the risk.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $method
     * @return $this
     */
    public function setMethod($method) {
        $this->method = $method;
        return $this;
    }

    /**
     * The type of the risk assessment performed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * The type of the risk assessment performed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * The patient or group the risk assessment applies to.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * The patient or group the risk assessment applies to.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject) {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The encounter where the assessment was performed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext() {
        return $this->context;
    }

    /**
     * The encounter where the assessment was performed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $context
     * @return $this
     */
    public function setContext($context) {
        $this->context = $context;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getOccurrenceDateTime() {
        return $this->occurrenceDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $occurrenceDateTime
     * @return $this
     */
    public function setOccurrenceDateTime($occurrenceDateTime) {
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getOccurrencePeriod() {
        return $this->occurrencePeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $occurrencePeriod
     * @return $this
     */
    public function setOccurrencePeriod($occurrencePeriod) {
        $this->occurrencePeriod = $occurrencePeriod;
        return $this;
    }

    /**
     * For assessments or prognosis specific to a particular condition, indicates the condition being assessed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCondition() {
        return $this->condition;
    }

    /**
     * For assessments or prognosis specific to a particular condition, indicates the condition being assessed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $condition
     * @return $this
     */
    public function setCondition($condition) {
        $this->condition = $condition;
        return $this;
    }

    /**
     * The provider or software application that performed the assessment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPerformer() {
        return $this->performer;
    }

    /**
     * The provider or software application that performed the assessment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $performer
     * @return $this
     */
    public function setPerformer($performer) {
        $this->performer = $performer;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCodeableConcept() {
        return $this->reasonCodeableConcept;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reasonCodeableConcept
     * @return $this
     */
    public function setReasonCodeableConcept($reasonCodeableConcept) {
        $this->reasonCodeableConcept = $reasonCodeableConcept;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReasonReference() {
        return $this->reasonReference;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $reasonReference
     * @return $this
     */
    public function setReasonReference($reasonReference) {
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * Indicates the source data considered as part of the assessment (FamilyHistory, Observations, Procedures, Conditions, etc.).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getBasis() {
        return $this->basis;
    }

    /**
     * Indicates the source data considered as part of the assessment (FamilyHistory, Observations, Procedures, Conditions, etc.).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $basis
     * @return $this
     */
    public function addBasis($basis) {
        $this->basis[] = $basis;
        return $this;
    }

    /**
     * Describes the expected outcome for the subject.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRRiskAssessment\FHIRRiskAssessmentPrediction[]
     */
    public function getPrediction() {
        return $this->prediction;
    }

    /**
     * Describes the expected outcome for the subject.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRRiskAssessment\FHIRRiskAssessmentPrediction $prediction
     * @return $this
     */
    public function addPrediction($prediction) {
        $this->prediction[] = $prediction;
        return $this;
    }

    /**
     * A description of the steps that might be taken to reduce the identified risk(s).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getMitigation() {
        return $this->mitigation;
    }

    /**
     * A description of the steps that might be taken to reduce the identified risk(s).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $mitigation
     * @return $this
     */
    public function setMitigation($mitigation) {
        $this->mitigation = $mitigation;
        return $this;
    }

    /**
     * Additional comments about the risk assessment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getComment() {
        return $this->comment;
    }

    /**
     * Additional comments about the risk assessment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $comment
     * @return $this
     */
    public function setComment($comment) {
        $this->comment = $comment;
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
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['basedOn'])) {
                $this->setBasedOn($data['basedOn']);
            }
            if (isset($data['parent'])) {
                $this->setParent($data['parent']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['method'])) {
                $this->setMethod($data['method']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['occurrenceDateTime'])) {
                $this->setOccurrenceDateTime($data['occurrenceDateTime']);
            }
            if (isset($data['occurrencePeriod'])) {
                $this->setOccurrencePeriod($data['occurrencePeriod']);
            }
            if (isset($data['condition'])) {
                $this->setCondition($data['condition']);
            }
            if (isset($data['performer'])) {
                $this->setPerformer($data['performer']);
            }
            if (isset($data['reasonCodeableConcept'])) {
                $this->setReasonCodeableConcept($data['reasonCodeableConcept']);
            }
            if (isset($data['reasonReference'])) {
                $this->setReasonReference($data['reasonReference']);
            }
            if (isset($data['basis'])) {
                if (is_array($data['basis'])) {
                    foreach($data['basis'] as $d) {
                        $this->addBasis($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"basis" must be array of objects or null, '.gettype($data['basis']).' seen.');
                }
            }
            if (isset($data['prediction'])) {
                if (is_array($data['prediction'])) {
                    foreach($data['prediction'] as $d) {
                        $this->addPrediction($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"prediction" must be array of objects or null, '.gettype($data['prediction']).' seen.');
                }
            }
            if (isset($data['mitigation'])) {
                $this->setMitigation($data['mitigation']);
            }
            if (isset($data['comment'])) {
                $this->setComment($data['comment']);
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
        $json['resourceType'] = $this->_fhirElementName;
        if (isset($this->identifier)) $json['identifier'] = $this->identifier;
        if (isset($this->basedOn)) $json['basedOn'] = $this->basedOn;
        if (isset($this->parent)) $json['parent'] = $this->parent;
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->method)) $json['method'] = $this->method;
        if (isset($this->code)) $json['code'] = $this->code;
        if (isset($this->subject)) $json['subject'] = $this->subject;
        if (isset($this->context)) $json['context'] = $this->context;
        if (isset($this->occurrenceDateTime)) $json['occurrenceDateTime'] = $this->occurrenceDateTime;
        if (isset($this->occurrencePeriod)) $json['occurrencePeriod'] = $this->occurrencePeriod;
        if (isset($this->condition)) $json['condition'] = $this->condition;
        if (isset($this->performer)) $json['performer'] = $this->performer;
        if (isset($this->reasonCodeableConcept)) $json['reasonCodeableConcept'] = $this->reasonCodeableConcept;
        if (isset($this->reasonReference)) $json['reasonReference'] = $this->reasonReference;
        if (0 < count($this->basis)) {
            $json['basis'] = [];
            foreach($this->basis as $basis) {
                if (null !== $basis) $json['basis'][] = $basis;
            }
        }
        if (0 < count($this->prediction)) {
            $json['prediction'] = [];
            foreach($this->prediction as $prediction) {
                if (null !== $prediction) $json['prediction'][] = $prediction;
            }
        }
        if (isset($this->mitigation)) $json['mitigation'] = $this->mitigation;
        if (isset($this->comment)) $json['comment'] = $this->comment;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<RiskAssessment xmlns="http://hl7.org/fhir"></RiskAssessment>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->identifier)) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (isset($this->basedOn)) $this->basedOn->xmlSerialize(true, $sxe->addChild('basedOn'));
        if (isset($this->parent)) $this->parent->xmlSerialize(true, $sxe->addChild('parent'));
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->method)) $this->method->xmlSerialize(true, $sxe->addChild('method'));
        if (isset($this->code)) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (isset($this->subject)) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (isset($this->context)) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if (isset($this->occurrenceDateTime)) $this->occurrenceDateTime->xmlSerialize(true, $sxe->addChild('occurrenceDateTime'));
        if (isset($this->occurrencePeriod)) $this->occurrencePeriod->xmlSerialize(true, $sxe->addChild('occurrencePeriod'));
        if (isset($this->condition)) $this->condition->xmlSerialize(true, $sxe->addChild('condition'));
        if (isset($this->performer)) $this->performer->xmlSerialize(true, $sxe->addChild('performer'));
        if (isset($this->reasonCodeableConcept)) $this->reasonCodeableConcept->xmlSerialize(true, $sxe->addChild('reasonCodeableConcept'));
        if (isset($this->reasonReference)) $this->reasonReference->xmlSerialize(true, $sxe->addChild('reasonReference'));
        if (0 < count($this->basis)) {
            foreach($this->basis as $basis) {
                $basis->xmlSerialize(true, $sxe->addChild('basis'));
            }
        }
        if (0 < count($this->prediction)) {
            foreach($this->prediction as $prediction) {
                $prediction->xmlSerialize(true, $sxe->addChild('prediction'));
            }
        }
        if (isset($this->mitigation)) $this->mitigation->xmlSerialize(true, $sxe->addChild('mitigation'));
        if (isset($this->comment)) $this->comment->xmlSerialize(true, $sxe->addChild('comment'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}