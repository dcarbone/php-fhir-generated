<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

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
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge;
use PHPFHIRGenerated\FHIRElement\FHIRRange;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A clinical condition, problem, diagnosis, or other event, situation, issue, or clinical concept that has risen to a level of concern.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRCondition
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRCondition extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Condition';

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $abatementAge = null;

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $abatementDateTime = null;

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $abatementPeriod = null;

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $abatementRange = null;

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $abatementString = null;

    /**
     * Individual who is making the condition statement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $asserter = null;

    /**
     * The anatomical location where this condition manifests itself.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $bodySite = null;

    /**
     * A category assigned to the condition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * The clinical status of the condition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $clinicalStatus = null;

    /**
     * Identification of the condition, problem or diagnosis.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * Encounter during which the condition was first asserted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * Supporting evidence / manifestations that are the basis of the Condition's verification status, such as evidence that confirmed or refuted the condition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence
     */
    public $evidence = null;

    /**
     * Business identifiers assigned to this condition by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Additional information about the Condition. This is a general notes/comments entry  for description of the Condition, its diagnosis and prognosis.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $onsetAge = null;

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $onsetDateTime = null;

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $onsetPeriod = null;

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $onsetRange = null;

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $onsetString = null;

    /**
     * The recordedDate represents when this particular Condition record was created in the system, which is often a system-generated date.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $recordedDate = null;

    /**
     * Individual who recorded the record and takes responsibility for its content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $recorder = null;

    /**
     * A subjective assessment of the severity of the condition as evaluated by the clinician.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $severity = null;

    /**
     * Clinical stage or grade of a condition. May include formal severity assessments.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage
     */
    public $stage = null;

    /**
     * Indicates the patient or group who the condition record is associated with.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The verification status to support the clinical status of the condition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $verificationStatus = null;

    /**
     * FHIRCondition Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['abatementAge'])) {
                $this->setAbatementAge($data['abatementAge']);
            }
            if (isset($data['abatementDateTime'])) {
                $this->setAbatementDateTime($data['abatementDateTime']);
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
            if (isset($data['asserter'])) {
                $this->setAsserter($data['asserter']);
            }
            if (isset($data['bodySite'])) {
                $this->setBodySite($data['bodySite']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['clinicalStatus'])) {
                $this->setClinicalStatus($data['clinicalStatus']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['evidence'])) {
                $this->setEvidence($data['evidence']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['note'])) {
                $this->setNote($data['note']);
            }
            if (isset($data['onsetAge'])) {
                $this->setOnsetAge($data['onsetAge']);
            }
            if (isset($data['onsetDateTime'])) {
                $this->setOnsetDateTime($data['onsetDateTime']);
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
            if (isset($data['recordedDate'])) {
                $this->setRecordedDate($data['recordedDate']);
            }
            if (isset($data['recorder'])) {
                $this->setRecorder($data['recorder']);
            }
            if (isset($data['severity'])) {
                $this->setSeverity($data['severity']);
            }
            if (isset($data['stage'])) {
                $this->setStage($data['stage']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['verificationStatus'])) {
                $this->setVerificationStatus($data['verificationStatus']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCondition::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     * @return $this
     */
    public function setAbatementAge(FHIRAge $abatementAge = null)
    {
        if (null === $abatementAge) {
            return $this; 
        }
        $this->abatementAge = $abatementAge;
        return $this;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getAbatementAge()
    {
        return $this->abatementAge;
    }


    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setAbatementDateTime($abatementDateTime)
    {
        if (null === $abatementDateTime) {
            return $this; 
        }
        if (is_scalar($abatementDateTime)) {
            $abatementDateTime = new FHIRDateTime($abatementDateTime);
        }
        if (!($abatementDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCondition::setAbatementDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($abatementDateTime)
            ));
        }
        $this->abatementDateTime = $abatementDateTime;
        return $this;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getAbatementDateTime()
    {
        return $this->abatementDateTime;
    }


    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setAbatementPeriod(FHIRPeriod $abatementPeriod = null)
    {
        if (null === $abatementPeriod) {
            return $this; 
        }
        $this->abatementPeriod = $abatementPeriod;
        return $this;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getAbatementPeriod()
    {
        return $this->abatementPeriod;
    }


    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setAbatementRange(FHIRRange $abatementRange = null)
    {
        if (null === $abatementRange) {
            return $this; 
        }
        $this->abatementRange = $abatementRange;
        return $this;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getAbatementRange()
    {
        return $this->abatementRange;
    }


    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setAbatementString($abatementString)
    {
        if (null === $abatementString) {
            return $this; 
        }
        if (is_scalar($abatementString)) {
            $abatementString = new FHIRString($abatementString);
        }
        if (!($abatementString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCondition::setAbatementString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($abatementString)
            ));
        }
        $this->abatementString = $abatementString;
        return $this;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAbatementString()
    {
        return $this->abatementString;
    }


    /**
     * Individual who is making the condition statement.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setAsserter(FHIRReference $asserter = null)
    {
        if (null === $asserter) {
            return $this; 
        }
        $this->asserter = $asserter;
        return $this;
    }

    /**
     * Individual who is making the condition statement.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAsserter()
    {
        return $this->asserter;
    }


    /**
     * The anatomical location where this condition manifests itself.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setBodySite(FHIRCodeableConcept $bodySite = null)
    {
        if (null === $bodySite) {
            return $this; 
        }
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * The anatomical location where this condition manifests itself.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }


    /**
     * A category assigned to the condition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCategory(FHIRCodeableConcept $category = null)
    {
        if (null === $category) {
            return $this; 
        }
        $this->category = $category;
        return $this;
    }

    /**
     * A category assigned to the condition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * The clinical status of the condition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setClinicalStatus(FHIRCodeableConcept $clinicalStatus = null)
    {
        if (null === $clinicalStatus) {
            return $this; 
        }
        $this->clinicalStatus = $clinicalStatus;
        return $this;
    }

    /**
     * The clinical status of the condition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getClinicalStatus()
    {
        return $this->clinicalStatus;
    }


    /**
     * Identification of the condition, problem or diagnosis.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        if (null === $code) {
            return $this; 
        }
        $this->code = $code;
        return $this;
    }

    /**
     * Identification of the condition, problem or diagnosis.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * Encounter during which the condition was first asserted.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setContext(FHIRReference $context = null)
    {
        if (null === $context) {
            return $this; 
        }
        $this->context = $context;
        return $this;
    }

    /**
     * Encounter during which the condition was first asserted.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }


    /**
     * Supporting evidence / manifestations that are the basis of the Condition's verification status, such as evidence that confirmed or refuted the condition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence
     * @return $this
     */
    public function setEvidence(FHIRConditionEvidence $evidence = null)
    {
        if (null === $evidence) {
            return $this; 
        }
        $this->evidence = $evidence;
        return $this;
    }

    /**
     * Supporting evidence / manifestations that are the basis of the Condition's verification status, such as evidence that confirmed or refuted the condition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence
     */
    public function getEvidence()
    {
        return $this->evidence;
    }


    /**
     * Business identifiers assigned to this condition by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Business identifiers assigned to this condition by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Additional information about the Condition. This is a general notes/comments entry  for description of the Condition, its diagnosis and prognosis.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     * @return $this
     */
    public function setNote(FHIRAnnotation $note = null)
    {
        if (null === $note) {
            return $this; 
        }
        $this->note = $note;
        return $this;
    }

    /**
     * Additional information about the Condition. This is a general notes/comments entry  for description of the Condition, its diagnosis and prognosis.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }


    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     * @return $this
     */
    public function setOnsetAge(FHIRAge $onsetAge = null)
    {
        if (null === $onsetAge) {
            return $this; 
        }
        $this->onsetAge = $onsetAge;
        return $this;
    }

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getOnsetAge()
    {
        return $this->onsetAge;
    }


    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setOnsetDateTime($onsetDateTime)
    {
        if (null === $onsetDateTime) {
            return $this; 
        }
        if (is_scalar($onsetDateTime)) {
            $onsetDateTime = new FHIRDateTime($onsetDateTime);
        }
        if (!($onsetDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCondition::setOnsetDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($onsetDateTime)
            ));
        }
        $this->onsetDateTime = $onsetDateTime;
        return $this;
    }

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getOnsetDateTime()
    {
        return $this->onsetDateTime;
    }


    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setOnsetPeriod(FHIRPeriod $onsetPeriod = null)
    {
        if (null === $onsetPeriod) {
            return $this; 
        }
        $this->onsetPeriod = $onsetPeriod;
        return $this;
    }

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getOnsetPeriod()
    {
        return $this->onsetPeriod;
    }


    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setOnsetRange(FHIRRange $onsetRange = null)
    {
        if (null === $onsetRange) {
            return $this; 
        }
        $this->onsetRange = $onsetRange;
        return $this;
    }

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getOnsetRange()
    {
        return $this->onsetRange;
    }


    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setOnsetString($onsetString)
    {
        if (null === $onsetString) {
            return $this; 
        }
        if (is_scalar($onsetString)) {
            $onsetString = new FHIRString($onsetString);
        }
        if (!($onsetString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCondition::setOnsetString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($onsetString)
            ));
        }
        $this->onsetString = $onsetString;
        return $this;
    }

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getOnsetString()
    {
        return $this->onsetString;
    }


    /**
     * The recordedDate represents when this particular Condition record was created in the system, which is often a system-generated date.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setRecordedDate($recordedDate)
    {
        if (null === $recordedDate) {
            return $this; 
        }
        if (is_scalar($recordedDate)) {
            $recordedDate = new FHIRDateTime($recordedDate);
        }
        if (!($recordedDate instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCondition::setRecordedDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($recordedDate)
            ));
        }
        $this->recordedDate = $recordedDate;
        return $this;
    }

    /**
     * The recordedDate represents when this particular Condition record was created in the system, which is often a system-generated date.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getRecordedDate()
    {
        return $this->recordedDate;
    }


    /**
     * Individual who recorded the record and takes responsibility for its content.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setRecorder(FHIRReference $recorder = null)
    {
        if (null === $recorder) {
            return $this; 
        }
        $this->recorder = $recorder;
        return $this;
    }

    /**
     * Individual who recorded the record and takes responsibility for its content.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRecorder()
    {
        return $this->recorder;
    }


    /**
     * A subjective assessment of the severity of the condition as evaluated by the clinician.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setSeverity(FHIRCodeableConcept $severity = null)
    {
        if (null === $severity) {
            return $this; 
        }
        $this->severity = $severity;
        return $this;
    }

    /**
     * A subjective assessment of the severity of the condition as evaluated by the clinician.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSeverity()
    {
        return $this->severity;
    }


    /**
     * Clinical stage or grade of a condition. May include formal severity assessments.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage
     * @return $this
     */
    public function setStage(FHIRConditionStage $stage = null)
    {
        if (null === $stage) {
            return $this; 
        }
        $this->stage = $stage;
        return $this;
    }

    /**
     * Clinical stage or grade of a condition. May include formal severity assessments.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage
     */
    public function getStage()
    {
        return $this->stage;
    }


    /**
     * Indicates the patient or group who the condition record is associated with.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSubject(FHIRReference $subject = null)
    {
        if (null === $subject) {
            return $this; 
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * Indicates the patient or group who the condition record is associated with.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }


    /**
     * The verification status to support the clinical status of the condition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setVerificationStatus(FHIRCodeableConcept $verificationStatus = null)
    {
        if (null === $verificationStatus) {
            return $this; 
        }
        $this->verificationStatus = $verificationStatus;
        return $this;
    }

    /**
     * The verification status to support the clinical status of the condition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getVerificationStatus()
    {
        return $this->verificationStatus;
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
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getAbatementAge())) {
            $a['abatementAge'] = $v;
        }
        if (null !== ($v = $this->getAbatementDateTime())) {
            $a['abatementDateTime'] = $v;
        }
        if (null !== ($v = $this->getAbatementPeriod())) {
            $a['abatementPeriod'] = $v;
        }
        if (null !== ($v = $this->getAbatementRange())) {
            $a['abatementRange'] = $v;
        }
        if (null !== ($v = $this->getAbatementString())) {
            $a['abatementString'] = $v;
        }
        if (null !== ($v = $this->getAsserter())) {
            $a['asserter'] = $v;
        }
        if (null !== ($v = $this->getBodySite())) {
            $a['bodySite'] = $v;
        }
        if (null !== ($v = $this->getCategory())) {
            $a['category'] = $v;
        }
        if (null !== ($v = $this->getClinicalStatus())) {
            $a['clinicalStatus'] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
        }
        if (null !== ($v = $this->getEvidence())) {
            $a['evidence'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a['note'] = $v;
        }
        if (null !== ($v = $this->getOnsetAge())) {
            $a['onsetAge'] = $v;
        }
        if (null !== ($v = $this->getOnsetDateTime())) {
            $a['onsetDateTime'] = $v;
        }
        if (null !== ($v = $this->getOnsetPeriod())) {
            $a['onsetPeriod'] = $v;
        }
        if (null !== ($v = $this->getOnsetRange())) {
            $a['onsetRange'] = $v;
        }
        if (null !== ($v = $this->getOnsetString())) {
            $a['onsetString'] = $v;
        }
        if (null !== ($v = $this->getRecordedDate())) {
            $a['recordedDate'] = $v;
        }
        if (null !== ($v = $this->getRecorder())) {
            $a['recorder'] = $v;
        }
        if (null !== ($v = $this->getSeverity())) {
            $a['severity'] = $v;
        }
        if (null !== ($v = $this->getStage())) {
            $a['stage'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
        }
        if (null !== ($v = $this->getVerificationStatus())) {
            $a['verificationStatus'] = $v;
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
            $sxe = new \SimpleXMLElement('<Condition xmlns="http://hl7.org/fhir"></Condition>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}