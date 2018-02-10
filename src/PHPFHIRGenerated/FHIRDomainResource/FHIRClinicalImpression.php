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
 * A record of a clinical assessment performed to determine what problem(s) may affect the patient and before planning the treatments or management strategies that are best to manage a patient's condition. Assessments are often 1:1 with a clinical consultation / encounter,  but this varies greatly depending on the clinical workflow. This resource is called "ClinicalImpression" rather than "ClinicalAssessment" to avoid confusion with the recording of assessment tools such as Apgar score.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRClinicalImpression extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A unique identifier assigned to the clinical impression that remains consistent regardless of what server the impression is stored on.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * Identifies the workflow status of the assessment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRClinicalImpressionStatus
     */
    public $status = null;

    /**
     * Categorizes the type of clinical assessment performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * A summary of the context and/or cause of the assessment - why / where was it performed, and what patient events/status prompted it.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The patient or group of individuals assessed as part of this record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The encounter or episode of care this impression was created as part of.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $effectiveDateTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $effectivePeriod = null;

    /**
     * Indicates when the documentation of the assessment was complete.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * The clinician performing the assessment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $assessor = null;

    /**
     * A reference to the last assesment that was conducted bon this patient. Assessments are often/usually ongoing in nature; a care provider (practitioner or team) will make new assessments on an ongoing basis as new data arises or the patient's conditions changes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $previous = null;

    /**
     * This a list of the relevant problems/conditions for a patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $problem = [];

    /**
     * One or more sets of investigations (signs, symptions, etc.). The actual grouping of investigations vary greatly depending on the type and context of the assessment. These investigations may include data generated during the assessment process, or data previously generated and recorded that is pertinent to the outcomes.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionInvestigation[]
     */
    public $investigation = [];

    /**
     * Reference to a specific published clinical protocol that was followed during this assessment, and/or that provides evidence in support of the diagnosis.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public $protocol = [];

    /**
     * A text summary of the investigations and the diagnosis.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $summary = null;

    /**
     * Specific findings or diagnoses that was considered likely or relevant to ongoing treatment.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionFinding[]
     */
    public $finding = [];

    /**
     * Estimate of likely outcome.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $prognosisCodeableConcept = [];

    /**
     * RiskAssessment expressing likely outcome.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $prognosisReference = [];

    /**
     * Action taken as part of assessment procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $action = [];

    /**
     * Commentary about the impression, typically recorded after the impression itself was made, though supplemental notes by the original author could also appear.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public $note = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'ClinicalImpression';

    /**
     * A unique identifier assigned to the clinical impression that remains consistent regardless of what server the impression is stored on.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * A unique identifier assigned to the clinical impression that remains consistent regardless of what server the impression is stored on.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Identifies the workflow status of the assessment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRClinicalImpressionStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Identifies the workflow status of the assessment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRClinicalImpressionStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Categorizes the type of clinical assessment performed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Categorizes the type of clinical assessment performed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * A summary of the context and/or cause of the assessment - why / where was it performed, and what patient events/status prompted it.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * A summary of the context and/or cause of the assessment - why / where was it performed, and what patient events/status prompted it.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * The patient or group of individuals assessed as part of this record.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * The patient or group of individuals assessed as part of this record.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject) {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The encounter or episode of care this impression was created as part of.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext() {
        return $this->context;
    }

    /**
     * The encounter or episode of care this impression was created as part of.
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
    public function getEffectiveDateTime() {
        return $this->effectiveDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $effectiveDateTime
     * @return $this
     */
    public function setEffectiveDateTime($effectiveDateTime) {
        $this->effectiveDateTime = $effectiveDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getEffectivePeriod() {
        return $this->effectivePeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $effectivePeriod
     * @return $this
     */
    public function setEffectivePeriod($effectivePeriod) {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Indicates when the documentation of the assessment was complete.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Indicates when the documentation of the assessment was complete.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date) {
        $this->date = $date;
        return $this;
    }

    /**
     * The clinician performing the assessment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAssessor() {
        return $this->assessor;
    }

    /**
     * The clinician performing the assessment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $assessor
     * @return $this
     */
    public function setAssessor($assessor) {
        $this->assessor = $assessor;
        return $this;
    }

    /**
     * A reference to the last assesment that was conducted bon this patient. Assessments are often/usually ongoing in nature; a care provider (practitioner or team) will make new assessments on an ongoing basis as new data arises or the patient's conditions changes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPrevious() {
        return $this->previous;
    }

    /**
     * A reference to the last assesment that was conducted bon this patient. Assessments are often/usually ongoing in nature; a care provider (practitioner or team) will make new assessments on an ongoing basis as new data arises or the patient's conditions changes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $previous
     * @return $this
     */
    public function setPrevious($previous) {
        $this->previous = $previous;
        return $this;
    }

    /**
     * This a list of the relevant problems/conditions for a patient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getProblem() {
        return $this->problem;
    }

    /**
     * This a list of the relevant problems/conditions for a patient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $problem
     * @return $this
     */
    public function addProblem($problem) {
        $this->problem[] = $problem;
        return $this;
    }

    /**
     * One or more sets of investigations (signs, symptions, etc.). The actual grouping of investigations vary greatly depending on the type and context of the assessment. These investigations may include data generated during the assessment process, or data previously generated and recorded that is pertinent to the outcomes.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionInvestigation[]
     */
    public function getInvestigation() {
        return $this->investigation;
    }

    /**
     * One or more sets of investigations (signs, symptions, etc.). The actual grouping of investigations vary greatly depending on the type and context of the assessment. These investigations may include data generated during the assessment process, or data previously generated and recorded that is pertinent to the outcomes.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionInvestigation $investigation
     * @return $this
     */
    public function addInvestigation($investigation) {
        $this->investigation[] = $investigation;
        return $this;
    }

    /**
     * Reference to a specific published clinical protocol that was followed during this assessment, and/or that provides evidence in support of the diagnosis.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public function getProtocol() {
        return $this->protocol;
    }

    /**
     * Reference to a specific published clinical protocol that was followed during this assessment, and/or that provides evidence in support of the diagnosis.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $protocol
     * @return $this
     */
    public function addProtocol($protocol) {
        $this->protocol[] = $protocol;
        return $this;
    }

    /**
     * A text summary of the investigations and the diagnosis.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSummary() {
        return $this->summary;
    }

    /**
     * A text summary of the investigations and the diagnosis.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $summary
     * @return $this
     */
    public function setSummary($summary) {
        $this->summary = $summary;
        return $this;
    }

    /**
     * Specific findings or diagnoses that was considered likely or relevant to ongoing treatment.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionFinding[]
     */
    public function getFinding() {
        return $this->finding;
    }

    /**
     * Specific findings or diagnoses that was considered likely or relevant to ongoing treatment.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionFinding $finding
     * @return $this
     */
    public function addFinding($finding) {
        $this->finding[] = $finding;
        return $this;
    }

    /**
     * Estimate of likely outcome.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getPrognosisCodeableConcept() {
        return $this->prognosisCodeableConcept;
    }

    /**
     * Estimate of likely outcome.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $prognosisCodeableConcept
     * @return $this
     */
    public function addPrognosisCodeableConcept($prognosisCodeableConcept) {
        $this->prognosisCodeableConcept[] = $prognosisCodeableConcept;
        return $this;
    }

    /**
     * RiskAssessment expressing likely outcome.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getPrognosisReference() {
        return $this->prognosisReference;
    }

    /**
     * RiskAssessment expressing likely outcome.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $prognosisReference
     * @return $this
     */
    public function addPrognosisReference($prognosisReference) {
        $this->prognosisReference[] = $prognosisReference;
        return $this;
    }

    /**
     * Action taken as part of assessment procedure.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAction() {
        return $this->action;
    }

    /**
     * Action taken as part of assessment procedure.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $action
     * @return $this
     */
    public function addAction($action) {
        $this->action[] = $action;
        return $this;
    }

    /**
     * Commentary about the impression, typically recorded after the impression itself was made, though supplemental notes by the original author could also appear.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * Commentary about the impression, typically recorded after the impression itself was made, though supplemental notes by the original author could also appear.
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
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['effectiveDateTime'])) {
                $this->setEffectiveDateTime($data['effectiveDateTime']);
            }
            if (isset($data['effectivePeriod'])) {
                $this->setEffectivePeriod($data['effectivePeriod']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['assessor'])) {
                $this->setAssessor($data['assessor']);
            }
            if (isset($data['previous'])) {
                $this->setPrevious($data['previous']);
            }
            if (isset($data['problem'])) {
                if (is_array($data['problem'])) {
                    foreach($data['problem'] as $d) {
                        $this->addProblem($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"problem" must be array of objects or null, '.gettype($data['problem']).' seen.');
                }
            }
            if (isset($data['investigation'])) {
                if (is_array($data['investigation'])) {
                    foreach($data['investigation'] as $d) {
                        $this->addInvestigation($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"investigation" must be array of objects or null, '.gettype($data['investigation']).' seen.');
                }
            }
            if (isset($data['protocol'])) {
                if (is_array($data['protocol'])) {
                    foreach($data['protocol'] as $d) {
                        $this->addProtocol($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"protocol" must be array of objects or null, '.gettype($data['protocol']).' seen.');
                }
            }
            if (isset($data['summary'])) {
                $this->setSummary($data['summary']);
            }
            if (isset($data['finding'])) {
                if (is_array($data['finding'])) {
                    foreach($data['finding'] as $d) {
                        $this->addFinding($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"finding" must be array of objects or null, '.gettype($data['finding']).' seen.');
                }
            }
            if (isset($data['prognosisCodeableConcept'])) {
                if (is_array($data['prognosisCodeableConcept'])) {
                    foreach($data['prognosisCodeableConcept'] as $d) {
                        $this->addPrognosisCodeableConcept($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"prognosisCodeableConcept" must be array of objects or null, '.gettype($data['prognosisCodeableConcept']).' seen.');
                }
            }
            if (isset($data['prognosisReference'])) {
                if (is_array($data['prognosisReference'])) {
                    foreach($data['prognosisReference'] as $d) {
                        $this->addPrognosisReference($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"prognosisReference" must be array of objects or null, '.gettype($data['prognosisReference']).' seen.');
                }
            }
            if (isset($data['action'])) {
                if (is_array($data['action'])) {
                    foreach($data['action'] as $d) {
                        $this->addAction($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"action" must be array of objects or null, '.gettype($data['action']).' seen.');
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
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->code)) $json['code'] = $this->code;
        if (isset($this->description)) $json['description'] = $this->description;
        if (isset($this->subject)) $json['subject'] = $this->subject;
        if (isset($this->context)) $json['context'] = $this->context;
        if (isset($this->effectiveDateTime)) $json['effectiveDateTime'] = $this->effectiveDateTime;
        if (isset($this->effectivePeriod)) $json['effectivePeriod'] = $this->effectivePeriod;
        if (isset($this->date)) $json['date'] = $this->date;
        if (isset($this->assessor)) $json['assessor'] = $this->assessor;
        if (isset($this->previous)) $json['previous'] = $this->previous;
        if (0 < count($this->problem)) {
            $json['problem'] = [];
            foreach($this->problem as $problem) {
                if (null !== $problem) $json['problem'][] = $problem;
            }
        }
        if (0 < count($this->investigation)) {
            $json['investigation'] = [];
            foreach($this->investigation as $investigation) {
                if (null !== $investigation) $json['investigation'][] = $investigation;
            }
        }
        if (0 < count($this->protocol)) {
            $json['protocol'] = [];
            foreach($this->protocol as $protocol) {
                if (null !== $protocol) $json['protocol'][] = $protocol;
            }
        }
        if (isset($this->summary)) $json['summary'] = $this->summary;
        if (0 < count($this->finding)) {
            $json['finding'] = [];
            foreach($this->finding as $finding) {
                if (null !== $finding) $json['finding'][] = $finding;
            }
        }
        if (0 < count($this->prognosisCodeableConcept)) {
            $json['prognosisCodeableConcept'] = [];
            foreach($this->prognosisCodeableConcept as $prognosisCodeableConcept) {
                if (null !== $prognosisCodeableConcept) $json['prognosisCodeableConcept'][] = $prognosisCodeableConcept;
            }
        }
        if (0 < count($this->prognosisReference)) {
            $json['prognosisReference'] = [];
            foreach($this->prognosisReference as $prognosisReference) {
                if (null !== $prognosisReference) $json['prognosisReference'][] = $prognosisReference;
            }
        }
        if (0 < count($this->action)) {
            $json['action'] = [];
            foreach($this->action as $action) {
                if (null !== $action) $json['action'][] = $action;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ClinicalImpression xmlns="http://hl7.org/fhir"></ClinicalImpression>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->code)) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (isset($this->description)) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (isset($this->subject)) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (isset($this->context)) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if (isset($this->effectiveDateTime)) $this->effectiveDateTime->xmlSerialize(true, $sxe->addChild('effectiveDateTime'));
        if (isset($this->effectivePeriod)) $this->effectivePeriod->xmlSerialize(true, $sxe->addChild('effectivePeriod'));
        if (isset($this->date)) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (isset($this->assessor)) $this->assessor->xmlSerialize(true, $sxe->addChild('assessor'));
        if (isset($this->previous)) $this->previous->xmlSerialize(true, $sxe->addChild('previous'));
        if (0 < count($this->problem)) {
            foreach($this->problem as $problem) {
                $problem->xmlSerialize(true, $sxe->addChild('problem'));
            }
        }
        if (0 < count($this->investigation)) {
            foreach($this->investigation as $investigation) {
                $investigation->xmlSerialize(true, $sxe->addChild('investigation'));
            }
        }
        if (0 < count($this->protocol)) {
            foreach($this->protocol as $protocol) {
                $protocol->xmlSerialize(true, $sxe->addChild('protocol'));
            }
        }
        if (isset($this->summary)) $this->summary->xmlSerialize(true, $sxe->addChild('summary'));
        if (0 < count($this->finding)) {
            foreach($this->finding as $finding) {
                $finding->xmlSerialize(true, $sxe->addChild('finding'));
            }
        }
        if (0 < count($this->prognosisCodeableConcept)) {
            foreach($this->prognosisCodeableConcept as $prognosisCodeableConcept) {
                $prognosisCodeableConcept->xmlSerialize(true, $sxe->addChild('prognosisCodeableConcept'));
            }
        }
        if (0 < count($this->prognosisReference)) {
            foreach($this->prognosisReference as $prognosisReference) {
                $prognosisReference->xmlSerialize(true, $sxe->addChild('prognosisReference'));
            }
        }
        if (0 < count($this->action)) {
            foreach($this->action as $action) {
                $action->xmlSerialize(true, $sxe->addChild('action'));
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