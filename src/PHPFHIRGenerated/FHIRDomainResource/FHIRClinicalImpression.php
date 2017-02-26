<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 26th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
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
     * The patient being assessed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The clinician performing the assessment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $assessor = null;

    /**
     * Identifies the workflow status of the assessment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRClinicalImpressionStatus
     */
    public $status = null;

    /**
     * The point in time at which the assessment was concluded (not when it was recorded).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * A summary of the context and/or cause of the assessment - why / where was it peformed, and what patient events/sstatus prompted it.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * A reference to the last assesment that was conducted bon this patient. Assessments are often/usually ongoing in nature; a care provider (practitioner or team) will make new assessments on an ongoing basis as new data arises or the patient's conditions changes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $previous = null;

    /**
     * This a list of the general problems/conditions for a patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $problem = array();

    /**
     * The request or event that necessitated this assessment. This may be a diagnosis, a Care Plan, a Request Referral, or some other resource. (choose any one of trigger*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $triggerCodeableConcept = null;

    /**
     * The request or event that necessitated this assessment. This may be a diagnosis, a Care Plan, a Request Referral, or some other resource. (choose any one of trigger*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $triggerReference = null;

    /**
     * One or more sets of investigations (signs, symptions, etc.). The actual grouping of investigations vary greatly depending on the type and context of the assessment. These investigations may include data generated during the assessment process, or data previously generated and recorded that is pertinent to the outcomes.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionInvestigations[]
     */
    public $investigations = array();

    /**
     * Reference to a specific published clinical protocol that was followed during this assessment, and/or that provides evidence in support of the diagnosis.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $protocol = null;

    /**
     * A text summary of the investigations and the diagnosis.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $summary = null;

    /**
     * Specific findings or diagnoses that was considered likely or relevant to ongoing treatment.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionFinding[]
     */
    public $finding = array();

    /**
     * Diagnoses/conditions resolved since the last assessment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $resolved = array();

    /**
     * Diagnosis considered not possible.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionRuledOut[]
     */
    public $ruledOut = array();

    /**
     * Estimate of likely outcome.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $prognosis = null;

    /**
     * Plan of action after assessment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $plan = array();

    /**
     * Actions taken during assessment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $action = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ClinicalImpression';

    /**
     * The patient being assessed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * The patient being assessed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * The clinician performing the assessment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAssessor()
    {
        return $this->assessor;
    }

    /**
     * The clinician performing the assessment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $assessor
     * @return $this
     */
    public function setAssessor($assessor)
    {
        $this->assessor = $assessor;
        return $this;
    }

    /**
     * Identifies the workflow status of the assessment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRClinicalImpressionStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Identifies the workflow status of the assessment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRClinicalImpressionStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The point in time at which the assessment was concluded (not when it was recorded).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The point in time at which the assessment was concluded (not when it was recorded).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * A summary of the context and/or cause of the assessment - why / where was it peformed, and what patient events/sstatus prompted it.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A summary of the context and/or cause of the assessment - why / where was it peformed, and what patient events/sstatus prompted it.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * A reference to the last assesment that was conducted bon this patient. Assessments are often/usually ongoing in nature; a care provider (practitioner or team) will make new assessments on an ongoing basis as new data arises or the patient's conditions changes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPrevious()
    {
        return $this->previous;
    }

    /**
     * A reference to the last assesment that was conducted bon this patient. Assessments are often/usually ongoing in nature; a care provider (practitioner or team) will make new assessments on an ongoing basis as new data arises or the patient's conditions changes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $previous
     * @return $this
     */
    public function setPrevious($previous)
    {
        $this->previous = $previous;
        return $this;
    }

    /**
     * This a list of the general problems/conditions for a patient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getProblem()
    {
        return $this->problem;
    }

    /**
     * This a list of the general problems/conditions for a patient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $problem
     * @return $this
     */
    public function addProblem($problem)
    {
        $this->problem[] = $problem;
        return $this;
    }

    /**
     * The request or event that necessitated this assessment. This may be a diagnosis, a Care Plan, a Request Referral, or some other resource. (choose any one of trigger*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getTriggerCodeableConcept()
    {
        return $this->triggerCodeableConcept;
    }

    /**
     * The request or event that necessitated this assessment. This may be a diagnosis, a Care Plan, a Request Referral, or some other resource. (choose any one of trigger*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $triggerCodeableConcept
     * @return $this
     */
    public function setTriggerCodeableConcept($triggerCodeableConcept)
    {
        $this->triggerCodeableConcept = $triggerCodeableConcept;
        return $this;
    }

    /**
     * The request or event that necessitated this assessment. This may be a diagnosis, a Care Plan, a Request Referral, or some other resource. (choose any one of trigger*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getTriggerReference()
    {
        return $this->triggerReference;
    }

    /**
     * The request or event that necessitated this assessment. This may be a diagnosis, a Care Plan, a Request Referral, or some other resource. (choose any one of trigger*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $triggerReference
     * @return $this
     */
    public function setTriggerReference($triggerReference)
    {
        $this->triggerReference = $triggerReference;
        return $this;
    }

    /**
     * One or more sets of investigations (signs, symptions, etc.). The actual grouping of investigations vary greatly depending on the type and context of the assessment. These investigations may include data generated during the assessment process, or data previously generated and recorded that is pertinent to the outcomes.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionInvestigations[]
     */
    public function getInvestigations()
    {
        return $this->investigations;
    }

    /**
     * One or more sets of investigations (signs, symptions, etc.). The actual grouping of investigations vary greatly depending on the type and context of the assessment. These investigations may include data generated during the assessment process, or data previously generated and recorded that is pertinent to the outcomes.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionInvestigations $investigations
     * @return $this
     */
    public function addInvestigations($investigations)
    {
        $this->investigations[] = $investigations;
        return $this;
    }

    /**
     * Reference to a specific published clinical protocol that was followed during this assessment, and/or that provides evidence in support of the diagnosis.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Reference to a specific published clinical protocol that was followed during this assessment, and/or that provides evidence in support of the diagnosis.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $protocol
     * @return $this
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
        return $this;
    }

    /**
     * A text summary of the investigations and the diagnosis.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * A text summary of the investigations and the diagnosis.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $summary
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * Specific findings or diagnoses that was considered likely or relevant to ongoing treatment.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionFinding[]
     */
    public function getFinding()
    {
        return $this->finding;
    }

    /**
     * Specific findings or diagnoses that was considered likely or relevant to ongoing treatment.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionFinding $finding
     * @return $this
     */
    public function addFinding($finding)
    {
        $this->finding[] = $finding;
        return $this;
    }

    /**
     * Diagnoses/conditions resolved since the last assessment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getResolved()
    {
        return $this->resolved;
    }

    /**
     * Diagnoses/conditions resolved since the last assessment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $resolved
     * @return $this
     */
    public function addResolved($resolved)
    {
        $this->resolved[] = $resolved;
        return $this;
    }

    /**
     * Diagnosis considered not possible.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionRuledOut[]
     */
    public function getRuledOut()
    {
        return $this->ruledOut;
    }

    /**
     * Diagnosis considered not possible.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionRuledOut $ruledOut
     * @return $this
     */
    public function addRuledOut($ruledOut)
    {
        $this->ruledOut[] = $ruledOut;
        return $this;
    }

    /**
     * Estimate of likely outcome.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPrognosis()
    {
        return $this->prognosis;
    }

    /**
     * Estimate of likely outcome.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $prognosis
     * @return $this
     */
    public function setPrognosis($prognosis)
    {
        $this->prognosis = $prognosis;
        return $this;
    }

    /**
     * Plan of action after assessment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Plan of action after assessment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $plan
     * @return $this
     */
    public function addPlan($plan)
    {
        $this->plan[] = $plan;
        return $this;
    }

    /**
     * Actions taken during assessment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Actions taken during assessment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $action
     * @return $this
     */
    public function addAction($action)
    {
        $this->action[] = $action;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (null !== $this->patient) $json['patient'] = json_encode($this->patient);
        if (null !== $this->assessor) $json['assessor'] = json_encode($this->assessor);
        if (null !== $this->status) $json['status'] = json_encode($this->status);
        if (null !== $this->date) $json['date'] = json_encode($this->date);
        if (null !== $this->description) $json['description'] = json_encode($this->description);
        if (null !== $this->previous) $json['previous'] = json_encode($this->previous);
        if (0 < count($this->problem)) {
            $json['problem'] = [];
            foreach($this->problem as $problem) {
                $json['problem'][] = json_encode($problem);
            }
        }
        if (null !== $this->triggerCodeableConcept) $json['triggerCodeableConcept'] = json_encode($this->triggerCodeableConcept);
        if (null !== $this->triggerReference) $json['triggerReference'] = json_encode($this->triggerReference);
        if (0 < count($this->investigations)) {
            $json['investigations'] = [];
            foreach($this->investigations as $investigations) {
                $json['investigations'][] = json_encode($investigations);
            }
        }
        if (null !== $this->protocol) $json['protocol'] = json_encode($this->protocol);
        if (null !== $this->summary) $json['summary'] = json_encode($this->summary);
        if (0 < count($this->finding)) {
            $json['finding'] = [];
            foreach($this->finding as $finding) {
                $json['finding'][] = json_encode($finding);
            }
        }
        if (0 < count($this->resolved)) {
            $json['resolved'] = [];
            foreach($this->resolved as $resolved) {
                $json['resolved'][] = json_encode($resolved);
            }
        }
        if (0 < count($this->ruledOut)) {
            $json['ruledOut'] = [];
            foreach($this->ruledOut as $ruledOut) {
                $json['ruledOut'][] = json_encode($ruledOut);
            }
        }
        if (null !== $this->prognosis) $json['prognosis'] = json_encode($this->prognosis);
        if (0 < count($this->plan)) {
            $json['plan'] = [];
            foreach($this->plan as $plan) {
                $json['plan'][] = json_encode($plan);
            }
        }
        if (0 < count($this->action)) {
            $json['action'] = [];
            foreach($this->action as $action) {
                $json['action'][] = json_encode($action);
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ClinicalImpression xmlns="http://hl7.org/fhir"></ClinicalImpression>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->patient) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (null !== $this->assessor) $this->assessor->xmlSerialize(true, $sxe->addChild('assessor'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->previous) $this->previous->xmlSerialize(true, $sxe->addChild('previous'));
        if (0 < count($this->problem)) {
            foreach($this->problem as $problem) {
                $problem->xmlSerialize(true, $sxe->addChild('problem'));
            }
        }
        if (null !== $this->triggerCodeableConcept) $this->triggerCodeableConcept->xmlSerialize(true, $sxe->addChild('triggerCodeableConcept'));
        if (null !== $this->triggerReference) $this->triggerReference->xmlSerialize(true, $sxe->addChild('triggerReference'));
        if (0 < count($this->investigations)) {
            foreach($this->investigations as $investigations) {
                $investigations->xmlSerialize(true, $sxe->addChild('investigations'));
            }
        }
        if (null !== $this->protocol) $this->protocol->xmlSerialize(true, $sxe->addChild('protocol'));
        if (null !== $this->summary) $this->summary->xmlSerialize(true, $sxe->addChild('summary'));
        if (0 < count($this->finding)) {
            foreach($this->finding as $finding) {
                $finding->xmlSerialize(true, $sxe->addChild('finding'));
            }
        }
        if (0 < count($this->resolved)) {
            foreach($this->resolved as $resolved) {
                $resolved->xmlSerialize(true, $sxe->addChild('resolved'));
            }
        }
        if (0 < count($this->ruledOut)) {
            foreach($this->ruledOut as $ruledOut) {
                $ruledOut->xmlSerialize(true, $sxe->addChild('ruledOut'));
            }
        }
        if (null !== $this->prognosis) $this->prognosis->xmlSerialize(true, $sxe->addChild('prognosis'));
        if (0 < count($this->plan)) {
            foreach($this->plan as $plan) {
                $plan->xmlSerialize(true, $sxe->addChild('plan'));
            }
        }
        if (0 < count($this->action)) {
            foreach($this->action as $action) {
                $action->xmlSerialize(true, $sxe->addChild('action'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}