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
 * A clinical condition, problem, diagnosis, or other event, situation, issue, or clinical concept that has risen to a level of concern.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRCondition extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * This records identifiers associated with this condition that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * The clinical status of the condition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRConditionClinicalStatusCodes
     */
    public $clinicalStatus = null;

    /**
     * The verification status to support the clinical status of the condition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRConditionVerificationStatus
     */
    public $verificationStatus = null;

    /**
     * A category assigned to the condition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $category = [];

    /**
     * A subjective assessment of the severity of the condition as evaluated by the clinician.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $severity = null;

    /**
     * Identification of the condition, problem or diagnosis.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * The anatomical location where this condition manifests itself.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $bodySite = [];

    /**
     * Indicates the patient or group who the condition record is associated with.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Encounter during which the condition was first asserted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $onsetDateTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $onsetAge = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $onsetPeriod = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $onsetRange = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $onsetString = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $abatementDateTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $abatementAge = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $abatementPeriod = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $abatementRange = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $abatementString = null;

    /**
     * The date on which the existance of the Condition was first asserted or acknowledged.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $assertedDate = null;

    /**
     * Individual who recorded the record and takes responsibility for its content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $recorder = null;

    /**
     * Individual who is making the condition statement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $asserter = null;

    /**
     * Clinical stage or grade of a condition. May include formal severity assessments.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRCondition\FHIRConditionStage[]
     */
    public $stage = [];

    /**
     * Supporting Evidence / manifestations that are the basis on which this condition is suspected or confirmed.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRCondition\FHIRConditionEvidence[]
     */
    public $evidence = [];

    /**
     * Additional information about the Condition. This is a general notes/comments entry  for description of the Condition, its diagnosis and prognosis.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public $note = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'Condition';

    /**
     * This records identifiers associated with this condition that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * This records identifiers associated with this condition that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The clinical status of the condition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRConditionClinicalStatusCodes
     */
    public function getClinicalStatus() {
        return $this->clinicalStatus;
    }

    /**
     * The clinical status of the condition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRConditionClinicalStatusCodes $clinicalStatus
     * @return $this
     */
    public function setClinicalStatus($clinicalStatus) {
        $this->clinicalStatus = $clinicalStatus;
        return $this;
    }

    /**
     * The verification status to support the clinical status of the condition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRConditionVerificationStatus
     */
    public function getVerificationStatus() {
        return $this->verificationStatus;
    }

    /**
     * The verification status to support the clinical status of the condition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRConditionVerificationStatus $verificationStatus
     * @return $this
     */
    public function setVerificationStatus($verificationStatus) {
        $this->verificationStatus = $verificationStatus;
        return $this;
    }

    /**
     * A category assigned to the condition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * A category assigned to the condition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function addCategory($category) {
        $this->category[] = $category;
        return $this;
    }

    /**
     * A subjective assessment of the severity of the condition as evaluated by the clinician.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSeverity() {
        return $this->severity;
    }

    /**
     * A subjective assessment of the severity of the condition as evaluated by the clinician.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $severity
     * @return $this
     */
    public function setSeverity($severity) {
        $this->severity = $severity;
        return $this;
    }

    /**
     * Identification of the condition, problem or diagnosis.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Identification of the condition, problem or diagnosis.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * The anatomical location where this condition manifests itself.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getBodySite() {
        return $this->bodySite;
    }

    /**
     * The anatomical location where this condition manifests itself.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $bodySite
     * @return $this
     */
    public function addBodySite($bodySite) {
        $this->bodySite[] = $bodySite;
        return $this;
    }

    /**
     * Indicates the patient or group who the condition record is associated with.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * Indicates the patient or group who the condition record is associated with.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject) {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Encounter during which the condition was first asserted.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext() {
        return $this->context;
    }

    /**
     * Encounter during which the condition was first asserted.
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
    public function getOnsetDateTime() {
        return $this->onsetDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $onsetDateTime
     * @return $this
     */
    public function setOnsetDateTime($onsetDateTime) {
        $this->onsetDateTime = $onsetDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getOnsetAge() {
        return $this->onsetAge;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge $onsetAge
     * @return $this
     */
    public function setOnsetAge($onsetAge) {
        $this->onsetAge = $onsetAge;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getOnsetPeriod() {
        return $this->onsetPeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $onsetPeriod
     * @return $this
     */
    public function setOnsetPeriod($onsetPeriod) {
        $this->onsetPeriod = $onsetPeriod;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getOnsetRange() {
        return $this->onsetRange;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $onsetRange
     * @return $this
     */
    public function setOnsetRange($onsetRange) {
        $this->onsetRange = $onsetRange;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getOnsetString() {
        return $this->onsetString;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $onsetString
     * @return $this
     */
    public function setOnsetString($onsetString) {
        $this->onsetString = $onsetString;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getAbatementDateTime() {
        return $this->abatementDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $abatementDateTime
     * @return $this
     */
    public function setAbatementDateTime($abatementDateTime) {
        $this->abatementDateTime = $abatementDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getAbatementAge() {
        return $this->abatementAge;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge $abatementAge
     * @return $this
     */
    public function setAbatementAge($abatementAge) {
        $this->abatementAge = $abatementAge;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getAbatementPeriod() {
        return $this->abatementPeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $abatementPeriod
     * @return $this
     */
    public function setAbatementPeriod($abatementPeriod) {
        $this->abatementPeriod = $abatementPeriod;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getAbatementRange() {
        return $this->abatementRange;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $abatementRange
     * @return $this
     */
    public function setAbatementRange($abatementRange) {
        $this->abatementRange = $abatementRange;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAbatementString() {
        return $this->abatementString;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $abatementString
     * @return $this
     */
    public function setAbatementString($abatementString) {
        $this->abatementString = $abatementString;
        return $this;
    }

    /**
     * The date on which the existance of the Condition was first asserted or acknowledged.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getAssertedDate() {
        return $this->assertedDate;
    }

    /**
     * The date on which the existance of the Condition was first asserted or acknowledged.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $assertedDate
     * @return $this
     */
    public function setAssertedDate($assertedDate) {
        $this->assertedDate = $assertedDate;
        return $this;
    }

    /**
     * Individual who recorded the record and takes responsibility for its content.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRecorder() {
        return $this->recorder;
    }

    /**
     * Individual who recorded the record and takes responsibility for its content.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $recorder
     * @return $this
     */
    public function setRecorder($recorder) {
        $this->recorder = $recorder;
        return $this;
    }

    /**
     * Individual who is making the condition statement.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAsserter() {
        return $this->asserter;
    }

    /**
     * Individual who is making the condition statement.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $asserter
     * @return $this
     */
    public function setAsserter($asserter) {
        $this->asserter = $asserter;
        return $this;
    }

    /**
     * Clinical stage or grade of a condition. May include formal severity assessments.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRCondition\FHIRConditionStage[]
     */
    public function getStage() {
        return $this->stage;
    }

    /**
     * Clinical stage or grade of a condition. May include formal severity assessments.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRCondition\FHIRConditionStage $stage
     * @return $this
     */
    public function addStage($stage) {
        $this->stage[] = $stage;
        return $this;
    }

    /**
     * Supporting Evidence / manifestations that are the basis on which this condition is suspected or confirmed.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRCondition\FHIRConditionEvidence[]
     */
    public function getEvidence() {
        return $this->evidence;
    }

    /**
     * Supporting Evidence / manifestations that are the basis on which this condition is suspected or confirmed.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRCondition\FHIRConditionEvidence $evidence
     * @return $this
     */
    public function addEvidence($evidence) {
        $this->evidence[] = $evidence;
        return $this;
    }

    /**
     * Additional information about the Condition. This is a general notes/comments entry  for description of the Condition, its diagnosis and prognosis.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * Additional information about the Condition. This is a general notes/comments entry  for description of the Condition, its diagnosis and prognosis.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note) {
        $this->note[] = $note;
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
                if (is_array($data['identifier'])) {
                    foreach($data['identifier'] as $d) {
                        $this->addIdentifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"identifier" must be array of objects or null, '.gettype($data['identifier']).' seen.');
                }
            }
            if (isset($data['clinicalStatus'])) {
                $this->setClinicalStatus($data['clinicalStatus']);
            }
            if (isset($data['verificationStatus'])) {
                $this->setVerificationStatus($data['verificationStatus']);
            }
            if (isset($data['category'])) {
                if (is_array($data['category'])) {
                    foreach($data['category'] as $d) {
                        $this->addCategory($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"category" must be array of objects or null, '.gettype($data['category']).' seen.');
                }
            }
            if (isset($data['severity'])) {
                $this->setSeverity($data['severity']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['bodySite'])) {
                if (is_array($data['bodySite'])) {
                    foreach($data['bodySite'] as $d) {
                        $this->addBodySite($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"bodySite" must be array of objects or null, '.gettype($data['bodySite']).' seen.');
                }
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['onsetDateTime'])) {
                $this->setOnsetDateTime($data['onsetDateTime']);
            }
            if (isset($data['onsetAge'])) {
                $this->setOnsetAge($data['onsetAge']);
            }
            if (isset($data['onsetPeriod'])) {
                $this->setOnsetPeriod($data['onsetPeriod']);
            }
            if (isset($data['onsetRange'])) {
                $this->setOnsetRange($data['onsetRange']);
            }
            if (isset($data['onsetString'])) {
                $this->setOnsetString($data['onsetString']);
            }
            if (isset($data['abatementDateTime'])) {
                $this->setAbatementDateTime($data['abatementDateTime']);
            }
            if (isset($data['abatementAge'])) {
                $this->setAbatementAge($data['abatementAge']);
            }
            if (isset($data['abatementPeriod'])) {
                $this->setAbatementPeriod($data['abatementPeriod']);
            }
            if (isset($data['abatementRange'])) {
                $this->setAbatementRange($data['abatementRange']);
            }
            if (isset($data['abatementString'])) {
                $this->setAbatementString($data['abatementString']);
            }
            if (isset($data['assertedDate'])) {
                $this->setAssertedDate($data['assertedDate']);
            }
            if (isset($data['recorder'])) {
                $this->setRecorder($data['recorder']);
            }
            if (isset($data['asserter'])) {
                $this->setAsserter($data['asserter']);
            }
            if (isset($data['stage'])) {
                if (is_array($data['stage'])) {
                    foreach($data['stage'] as $d) {
                        $this->addStage($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"stage" must be array of objects or null, '.gettype($data['stage']).' seen.');
                }
            }
            if (isset($data['evidence'])) {
                if (is_array($data['evidence'])) {
                    foreach($data['evidence'] as $d) {
                        $this->addEvidence($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"evidence" must be array of objects or null, '.gettype($data['evidence']).' seen.');
                }
            }
            if (isset($data['note'])) {
                if (is_array($data['note'])) {
                    foreach($data['note'] as $d) {
                        $this->addNote($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"note" must be array of objects or null, '.gettype($data['note']).' seen.');
                }
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
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                if (null !== $identifier) $json['identifier'][] = $identifier;
            }
        }
        if (isset($this->clinicalStatus)) $json['clinicalStatus'] = $this->clinicalStatus;
        if (isset($this->verificationStatus)) $json['verificationStatus'] = $this->verificationStatus;
        if (0 < count($this->category)) {
            $json['category'] = [];
            foreach($this->category as $category) {
                if (null !== $category) $json['category'][] = $category;
            }
        }
        if (isset($this->severity)) $json['severity'] = $this->severity;
        if (isset($this->code)) $json['code'] = $this->code;
        if (0 < count($this->bodySite)) {
            $json['bodySite'] = [];
            foreach($this->bodySite as $bodySite) {
                if (null !== $bodySite) $json['bodySite'][] = $bodySite;
            }
        }
        if (isset($this->subject)) $json['subject'] = $this->subject;
        if (isset($this->context)) $json['context'] = $this->context;
        if (isset($this->onsetDateTime)) $json['onsetDateTime'] = $this->onsetDateTime;
        if (isset($this->onsetAge)) $json['onsetAge'] = $this->onsetAge;
        if (isset($this->onsetPeriod)) $json['onsetPeriod'] = $this->onsetPeriod;
        if (isset($this->onsetRange)) $json['onsetRange'] = $this->onsetRange;
        if (isset($this->onsetString)) $json['onsetString'] = $this->onsetString;
        if (isset($this->abatementDateTime)) $json['abatementDateTime'] = $this->abatementDateTime;
        if (isset($this->abatementAge)) $json['abatementAge'] = $this->abatementAge;
        if (isset($this->abatementPeriod)) $json['abatementPeriod'] = $this->abatementPeriod;
        if (isset($this->abatementRange)) $json['abatementRange'] = $this->abatementRange;
        if (isset($this->abatementString)) $json['abatementString'] = $this->abatementString;
        if (isset($this->assertedDate)) $json['assertedDate'] = $this->assertedDate;
        if (isset($this->recorder)) $json['recorder'] = $this->recorder;
        if (isset($this->asserter)) $json['asserter'] = $this->asserter;
        if (0 < count($this->stage)) {
            $json['stage'] = [];
            foreach($this->stage as $stage) {
                if (null !== $stage) $json['stage'][] = $stage;
            }
        }
        if (0 < count($this->evidence)) {
            $json['evidence'] = [];
            foreach($this->evidence as $evidence) {
                if (null !== $evidence) $json['evidence'][] = $evidence;
            }
        }
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                if (null !== $note) $json['note'][] = $note;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Condition xmlns="http://hl7.org/fhir"></Condition>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->clinicalStatus)) $this->clinicalStatus->xmlSerialize(true, $sxe->addChild('clinicalStatus'));
        if (isset($this->verificationStatus)) $this->verificationStatus->xmlSerialize(true, $sxe->addChild('verificationStatus'));
        if (0 < count($this->category)) {
            foreach($this->category as $category) {
                $category->xmlSerialize(true, $sxe->addChild('category'));
            }
        }
        if (isset($this->severity)) $this->severity->xmlSerialize(true, $sxe->addChild('severity'));
        if (isset($this->code)) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (0 < count($this->bodySite)) {
            foreach($this->bodySite as $bodySite) {
                $bodySite->xmlSerialize(true, $sxe->addChild('bodySite'));
            }
        }
        if (isset($this->subject)) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (isset($this->context)) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if (isset($this->onsetDateTime)) $this->onsetDateTime->xmlSerialize(true, $sxe->addChild('onsetDateTime'));
        if (isset($this->onsetAge)) $this->onsetAge->xmlSerialize(true, $sxe->addChild('onsetAge'));
        if (isset($this->onsetPeriod)) $this->onsetPeriod->xmlSerialize(true, $sxe->addChild('onsetPeriod'));
        if (isset($this->onsetRange)) $this->onsetRange->xmlSerialize(true, $sxe->addChild('onsetRange'));
        if (isset($this->onsetString)) $this->onsetString->xmlSerialize(true, $sxe->addChild('onsetString'));
        if (isset($this->abatementDateTime)) $this->abatementDateTime->xmlSerialize(true, $sxe->addChild('abatementDateTime'));
        if (isset($this->abatementAge)) $this->abatementAge->xmlSerialize(true, $sxe->addChild('abatementAge'));
        if (isset($this->abatementPeriod)) $this->abatementPeriod->xmlSerialize(true, $sxe->addChild('abatementPeriod'));
        if (isset($this->abatementRange)) $this->abatementRange->xmlSerialize(true, $sxe->addChild('abatementRange'));
        if (isset($this->abatementString)) $this->abatementString->xmlSerialize(true, $sxe->addChild('abatementString'));
        if (isset($this->assertedDate)) $this->assertedDate->xmlSerialize(true, $sxe->addChild('assertedDate'));
        if (isset($this->recorder)) $this->recorder->xmlSerialize(true, $sxe->addChild('recorder'));
        if (isset($this->asserter)) $this->asserter->xmlSerialize(true, $sxe->addChild('asserter'));
        if (0 < count($this->stage)) {
            foreach($this->stage as $stage) {
                $stage->xmlSerialize(true, $sxe->addChild('stage'));
            }
        }
        if (0 < count($this->evidence)) {
            foreach($this->evidence as $evidence) {
                $evidence->xmlSerialize(true, $sxe->addChild('evidence'));
            }
        }
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}