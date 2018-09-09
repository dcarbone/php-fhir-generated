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
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionInvestigation;
use PHPFHIRGenerated\FHIRElement\FHIRClinicalImpressionStatus;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A record of a clinical assessment performed to determine what problem(s) may affect the patient and before planning the treatments or management strategies that are best to manage a patient's condition. Assessments are often 1:1 with a clinical consultation / encounter,  but this varies greatly depending on the clinical workflow. This resource is called "ClinicalImpression" rather than "ClinicalAssessment" to avoid confusion with the recording of assessment tools such as Apgar score.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRClinicalImpression
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRClinicalImpression extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ClinicalImpression';

    /**
     * The clinician performing the assessment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $assessor = null;

    /**
     * Categorizes the type of clinical assessment performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * The encounter or episode of care this impression was created as part of.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * Indicates when the documentation of the assessment was complete.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * A summary of the context and/or cause of the assessment - why / where was it performed, and what patient events/status prompted it.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The point in time or period over which the subject was assessed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $effectiveDateTime = null;

    /**
     * The point in time or period over which the subject was assessed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $effectivePeriod = null;

    /**
     * Specific findings or diagnoses that was considered likely or relevant to ongoing treatment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding
     */
    public $finding = null;

    /**
     * Business identifiers assigned to this clinical impression by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * One or more sets of investigations (signs, symptoms, etc.). The actual grouping of investigations varies greatly depending on the type and context of the assessment. These investigations may include data generated during the assessment process, or data previously generated and recorded that is pertinent to the outcomes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionInvestigation
     */
    public $investigation = null;

    /**
     * Commentary about the impression, typically recorded after the impression itself was made, though supplemental notes by the original author could also appear.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * A reference to the last assessment that was conducted on this patient. Assessments are often/usually ongoing in nature; a care provider (practitioner or team) will make new assessments on an ongoing basis as new data arises or the patient's conditions changes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $previous = null;

    /**
     * This a list of the relevant problems/conditions for a patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $problem = null;

    /**
     * Estimate of likely outcome.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $prognosisCodeableConcept = null;

    /**
     * RiskAssessment expressing likely outcome.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $prognosisReference = null;

    /**
     * Reference to a specific published clinical protocol that was followed during this assessment, and/or that provides evidence in support of the diagnosis.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $protocol = null;

    /**
     * Identifies the workflow status of the assessment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRClinicalImpressionStatus
     */
    public $status = null;

    /**
     * Captures the reason for the current state of the ClinicalImpression.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $statusReason = null;

    /**
     * The patient or group of individuals assessed as part of this record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * A text summary of the investigations and the diagnosis.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $summary = null;

    /**
     * Information supporting the clinical impression.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $supportingInfo = null;

    /**
     * FHIRClinicalImpression Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['assessor'])) {
                $this->setAssessor($data['assessor']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['effectiveDateTime'])) {
                $this->setEffectiveDateTime($data['effectiveDateTime']);
            }
            if (isset($data['effectivePeriod'])) {
                $this->setEffectivePeriod($data['effectivePeriod']);
            }
            if (isset($data['finding'])) {
                $this->setFinding($data['finding']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['investigation'])) {
                $this->setInvestigation($data['investigation']);
            }
            if (isset($data['note'])) {
                $this->setNote($data['note']);
            }
            if (isset($data['previous'])) {
                $this->setPrevious($data['previous']);
            }
            if (isset($data['problem'])) {
                $this->setProblem($data['problem']);
            }
            if (isset($data['prognosisCodeableConcept'])) {
                $this->setPrognosisCodeableConcept($data['prognosisCodeableConcept']);
            }
            if (isset($data['prognosisReference'])) {
                $this->setPrognosisReference($data['prognosisReference']);
            }
            if (isset($data['protocol'])) {
                $this->setProtocol($data['protocol']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['statusReason'])) {
                $this->setStatusReason($data['statusReason']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['summary'])) {
                $this->setSummary($data['summary']);
            }
            if (isset($data['supportingInfo'])) {
                $this->setSupportingInfo($data['supportingInfo']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRClinicalImpression::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The clinician performing the assessment.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setAssessor(FHIRReference $assessor = null)
    {
        if (null === $assessor) {
            return $this; 
        }
        $this->assessor = $assessor;
        return $this;
    }

    /**
     * The clinician performing the assessment.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAssessor()
    {
        return $this->assessor;
    }


    /**
     * Categorizes the type of clinical assessment performed.
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
     * Categorizes the type of clinical assessment performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * The encounter or episode of care this impression was created as part of.
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
     * The encounter or episode of care this impression was created as part of.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }


    /**
     * Indicates when the documentation of the assessment was complete.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setDate($date)
    {
        if (null === $date) {
            return $this; 
        }
        if (is_scalar($date)) {
            $date = new FHIRDateTime($date);
        }
        if (!($date instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClinicalImpression::setDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($date)
            ));
        }
        $this->date = $date;
        return $this;
    }

    /**
     * Indicates when the documentation of the assessment was complete.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * A summary of the context and/or cause of the assessment - why / where was it performed, and what patient events/status prompted it.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDescription($description)
    {
        if (null === $description) {
            return $this; 
        }
        if (is_scalar($description)) {
            $description = new FHIRString($description);
        }
        if (!($description instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClinicalImpression::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A summary of the context and/or cause of the assessment - why / where was it performed, and what patient events/status prompted it.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * The point in time or period over which the subject was assessed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setEffectiveDateTime($effectiveDateTime)
    {
        if (null === $effectiveDateTime) {
            return $this; 
        }
        if (is_scalar($effectiveDateTime)) {
            $effectiveDateTime = new FHIRDateTime($effectiveDateTime);
        }
        if (!($effectiveDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClinicalImpression::setEffectiveDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($effectiveDateTime)
            ));
        }
        $this->effectiveDateTime = $effectiveDateTime;
        return $this;
    }

    /**
     * The point in time or period over which the subject was assessed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getEffectiveDateTime()
    {
        return $this->effectiveDateTime;
    }


    /**
     * The point in time or period over which the subject was assessed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setEffectivePeriod(FHIRPeriod $effectivePeriod = null)
    {
        if (null === $effectivePeriod) {
            return $this; 
        }
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * The point in time or period over which the subject was assessed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }


    /**
     * Specific findings or diagnoses that was considered likely or relevant to ongoing treatment.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding
     * @return $this
     */
    public function setFinding(FHIRClinicalImpressionFinding $finding = null)
    {
        if (null === $finding) {
            return $this; 
        }
        $this->finding = $finding;
        return $this;
    }

    /**
     * Specific findings or diagnoses that was considered likely or relevant to ongoing treatment.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding
     */
    public function getFinding()
    {
        return $this->finding;
    }


    /**
     * Business identifiers assigned to this clinical impression by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this clinical impression by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * One or more sets of investigations (signs, symptoms, etc.). The actual grouping of investigations varies greatly depending on the type and context of the assessment. These investigations may include data generated during the assessment process, or data previously generated and recorded that is pertinent to the outcomes.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionInvestigation
     * @return $this
     */
    public function setInvestigation(FHIRClinicalImpressionInvestigation $investigation = null)
    {
        if (null === $investigation) {
            return $this; 
        }
        $this->investigation = $investigation;
        return $this;
    }

    /**
     * One or more sets of investigations (signs, symptoms, etc.). The actual grouping of investigations varies greatly depending on the type and context of the assessment. These investigations may include data generated during the assessment process, or data previously generated and recorded that is pertinent to the outcomes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionInvestigation
     */
    public function getInvestigation()
    {
        return $this->investigation;
    }


    /**
     * Commentary about the impression, typically recorded after the impression itself was made, though supplemental notes by the original author could also appear.
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
     * Commentary about the impression, typically recorded after the impression itself was made, though supplemental notes by the original author could also appear.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }


    /**
     * A reference to the last assessment that was conducted on this patient. Assessments are often/usually ongoing in nature; a care provider (practitioner or team) will make new assessments on an ongoing basis as new data arises or the patient's conditions changes.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPrevious(FHIRReference $previous = null)
    {
        if (null === $previous) {
            return $this; 
        }
        $this->previous = $previous;
        return $this;
    }

    /**
     * A reference to the last assessment that was conducted on this patient. Assessments are often/usually ongoing in nature; a care provider (practitioner or team) will make new assessments on an ongoing basis as new data arises or the patient's conditions changes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPrevious()
    {
        return $this->previous;
    }


    /**
     * This a list of the relevant problems/conditions for a patient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setProblem(FHIRReference $problem = null)
    {
        if (null === $problem) {
            return $this; 
        }
        $this->problem = $problem;
        return $this;
    }

    /**
     * This a list of the relevant problems/conditions for a patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProblem()
    {
        return $this->problem;
    }


    /**
     * Estimate of likely outcome.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setPrognosisCodeableConcept(FHIRCodeableConcept $prognosisCodeableConcept = null)
    {
        if (null === $prognosisCodeableConcept) {
            return $this; 
        }
        $this->prognosisCodeableConcept = $prognosisCodeableConcept;
        return $this;
    }

    /**
     * Estimate of likely outcome.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPrognosisCodeableConcept()
    {
        return $this->prognosisCodeableConcept;
    }


    /**
     * RiskAssessment expressing likely outcome.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPrognosisReference(FHIRReference $prognosisReference = null)
    {
        if (null === $prognosisReference) {
            return $this; 
        }
        $this->prognosisReference = $prognosisReference;
        return $this;
    }

    /**
     * RiskAssessment expressing likely outcome.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPrognosisReference()
    {
        return $this->prognosisReference;
    }


    /**
     * Reference to a specific published clinical protocol that was followed during this assessment, and/or that provides evidence in support of the diagnosis.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setProtocol($protocol)
    {
        if (null === $protocol) {
            return $this; 
        }
        if (is_scalar($protocol)) {
            $protocol = new FHIRUri($protocol);
        }
        if (!($protocol instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClinicalImpression::setProtocol - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($protocol)
            ));
        }
        $this->protocol = $protocol;
        return $this;
    }

    /**
     * Reference to a specific published clinical protocol that was followed during this assessment, and/or that provides evidence in support of the diagnosis.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getProtocol()
    {
        return $this->protocol;
    }


    /**
     * Identifies the workflow status of the assessment.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRClinicalImpressionStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRClinicalImpressionStatus($status);
        }
        if (!($status instanceof FHIRClinicalImpressionStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClinicalImpression::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRClinicalImpressionStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * Identifies the workflow status of the assessment.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRClinicalImpressionStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Captures the reason for the current state of the ClinicalImpression.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setStatusReason(FHIRCodeableConcept $statusReason = null)
    {
        if (null === $statusReason) {
            return $this; 
        }
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Captures the reason for the current state of the ClinicalImpression.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }


    /**
     * The patient or group of individuals assessed as part of this record.
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
     * The patient or group of individuals assessed as part of this record.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }


    /**
     * A text summary of the investigations and the diagnosis.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setSummary($summary)
    {
        if (null === $summary) {
            return $this; 
        }
        if (is_scalar($summary)) {
            $summary = new FHIRString($summary);
        }
        if (!($summary instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClinicalImpression::setSummary - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($summary)
            ));
        }
        $this->summary = $summary;
        return $this;
    }

    /**
     * A text summary of the investigations and the diagnosis.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSummary()
    {
        return $this->summary;
    }


    /**
     * Information supporting the clinical impression.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSupportingInfo(FHIRReference $supportingInfo = null)
    {
        if (null === $supportingInfo) {
            return $this; 
        }
        $this->supportingInfo = $supportingInfo;
        return $this;
    }

    /**
     * Information supporting the clinical impression.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSupportingInfo()
    {
        return $this->supportingInfo;
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
        if (null !== ($v = $this->getAssessor())) {
            $a['assessor'] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
        }
        if (null !== ($v = $this->getDate())) {
            $a['date'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getEffectiveDateTime())) {
            $a['effectiveDateTime'] = $v;
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            $a['effectivePeriod'] = $v;
        }
        if (null !== ($v = $this->getFinding())) {
            $a['finding'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getInvestigation())) {
            $a['investigation'] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a['note'] = $v;
        }
        if (null !== ($v = $this->getPrevious())) {
            $a['previous'] = $v;
        }
        if (null !== ($v = $this->getProblem())) {
            $a['problem'] = $v;
        }
        if (null !== ($v = $this->getPrognosisCodeableConcept())) {
            $a['prognosisCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getPrognosisReference())) {
            $a['prognosisReference'] = $v;
        }
        if (null !== ($v = $this->getProtocol())) {
            $a['protocol'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getStatusReason())) {
            $a['statusReason'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
        }
        if (null !== ($v = $this->getSummary())) {
            $a['summary'] = $v;
        }
        if (null !== ($v = $this->getSupportingInfo())) {
            $a['supportingInfo'] = $v;
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
            $sxe = new \SimpleXMLElement('<ClinicalImpression xmlns="http://hl7.org/fhir"></ClinicalImpression>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}