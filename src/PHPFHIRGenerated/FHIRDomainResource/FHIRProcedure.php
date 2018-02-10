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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * An action that is or was performed on a patient. This can be a physical intervention like an operation, or less invasive like counseling or hypnotherapy.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRProcedure extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * This records identifiers associated with this procedure that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * A protocol, guideline, orderset or other definition that was adhered to in whole or in part by this procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $definition = array();

    /**
     * A reference to a resource that contains details of the request for this procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $basedOn = array();

    /**
     * A larger event of which this particular procedure is a component or step.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $partOf = array();

    /**
     * A code specifying the state of the procedure. Generally this will be in-progress or completed state.
     * @var \PHPFHIRGenerated\FHIRElement\FHIREventStatus
     */
    public $status = null;

    /**
     * Set this to true if the record is saying that the procedure was NOT performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $notDone = null;

    /**
     * A code indicating why the procedure was not performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $notDoneReason = null;

    /**
     * A code that classifies the procedure for searching, sorting and display purposes (e.g. "Surgical Procedure").
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * The specific procedure that is performed. Use text if the exact nature of the procedure cannot be coded (e.g. "Laparoscopic Appendectomy").
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * The person, animal or group on which the procedure was performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The encounter during which the procedure was performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $performedDateTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $performedPeriod = null;

    /**
     * Limited to 'real' people rather than equipment.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProcedure\FHIRProcedurePerformer[]
     */
    public $performer = array();

    /**
     * The location where the procedure actually happened.  E.g. a newborn at home, a tracheostomy at a restaurant.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * The coded reason why the procedure was performed. This may be coded entity of some type, or may simply be present as text.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $reasonCode = array();

    /**
     * The condition that is the reason why the procedure was performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $reasonReference = array();

    /**
     * Detailed and structured anatomical location information. Multiple locations are allowed - e.g. multiple punch biopsies of a lesion.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $bodySite = array();

    /**
     * The outcome of the procedure - did it resolve reasons for the procedure being performed?
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $outcome = null;

    /**
     * This could be a histology result, pathology report, surgical report, etc..
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $report = array();

    /**
     * Any complications that occurred during the procedure, or in the immediate post-performance period. These are generally tracked separately from the notes, which will typically describe the procedure itself rather than any 'post procedure' issues.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $complication = array();

    /**
     * Any complications that occurred during the procedure, or in the immediate post-performance period.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $complicationDetail = array();

    /**
     * If the procedure required specific follow up - e.g. removal of sutures. The followup may be represented as a simple note, or could potentially be more complex in which case the CarePlan resource can be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $followUp = array();

    /**
     * Any other notes about the procedure.  E.g. the operative notes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public $note = array();

    /**
     * A device that is implanted, removed or otherwise manipulated (calibration, battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a focal portion of the Procedure.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProcedure\FHIRProcedureFocalDevice[]
     */
    public $focalDevice = array();

    /**
     * Identifies medications, devices and any other substance used as part of the procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $usedReference = array();

    /**
     * Identifies coded items that were used as part of the procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $usedCode = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Procedure';

    /**
     * This records identifiers associated with this procedure that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * This records identifiers associated with this procedure that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A protocol, guideline, orderset or other definition that was adhered to in whole or in part by this procedure.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * A protocol, guideline, orderset or other definition that was adhered to in whole or in part by this procedure.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $definition
     * @return $this
     */
    public function addDefinition($definition)
    {
        $this->definition[] = $definition;
        return $this;
    }

    /**
     * A reference to a resource that contains details of the request for this procedure.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * A reference to a resource that contains details of the request for this procedure.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $basedOn
     * @return $this
     */
    public function addBasedOn($basedOn)
    {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * A larger event of which this particular procedure is a component or step.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * A larger event of which this particular procedure is a component or step.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $partOf
     * @return $this
     */
    public function addPartOf($partOf)
    {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * A code specifying the state of the procedure. Generally this will be in-progress or completed state.
     * @return \PHPFHIRGenerated\FHIRElement\FHIREventStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A code specifying the state of the procedure. Generally this will be in-progress or completed state.
     * @param \PHPFHIRGenerated\FHIRElement\FHIREventStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Set this to true if the record is saying that the procedure was NOT performed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getNotDone()
    {
        return $this->notDone;
    }

    /**
     * Set this to true if the record is saying that the procedure was NOT performed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $notDone
     * @return $this
     */
    public function setNotDone($notDone)
    {
        $this->notDone = $notDone;
        return $this;
    }

    /**
     * A code indicating why the procedure was not performed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getNotDoneReason()
    {
        return $this->notDoneReason;
    }

    /**
     * A code indicating why the procedure was not performed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $notDoneReason
     * @return $this
     */
    public function setNotDoneReason($notDoneReason)
    {
        $this->notDoneReason = $notDoneReason;
        return $this;
    }

    /**
     * A code that classifies the procedure for searching, sorting and display purposes (e.g. "Surgical Procedure").
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * A code that classifies the procedure for searching, sorting and display purposes (e.g. "Surgical Procedure").
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * The specific procedure that is performed. Use text if the exact nature of the procedure cannot be coded (e.g. "Laparoscopic Appendectomy").
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * The specific procedure that is performed. Use text if the exact nature of the procedure cannot be coded (e.g. "Laparoscopic Appendectomy").
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * The person, animal or group on which the procedure was performed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The person, animal or group on which the procedure was performed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The encounter during which the procedure was performed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * The encounter during which the procedure was performed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $context
     * @return $this
     */
    public function setContext($context)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getPerformedDateTime()
    {
        return $this->performedDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $performedDateTime
     * @return $this
     */
    public function setPerformedDateTime($performedDateTime)
    {
        $this->performedDateTime = $performedDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPerformedPeriod()
    {
        return $this->performedPeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $performedPeriod
     * @return $this
     */
    public function setPerformedPeriod($performedPeriod)
    {
        $this->performedPeriod = $performedPeriod;
        return $this;
    }

    /**
     * Limited to 'real' people rather than equipment.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProcedure\FHIRProcedurePerformer[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Limited to 'real' people rather than equipment.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProcedure\FHIRProcedurePerformer $performer
     * @return $this
     */
    public function addPerformer($performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * The location where the procedure actually happened.  E.g. a newborn at home, a tracheostomy at a restaurant.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The location where the procedure actually happened.  E.g. a newborn at home, a tracheostomy at a restaurant.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * The coded reason why the procedure was performed. This may be coded entity of some type, or may simply be present as text.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * The coded reason why the procedure was performed. This may be coded entity of some type, or may simply be present as text.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return $this
     */
    public function addReasonCode($reasonCode)
    {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * The condition that is the reason why the procedure was performed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * The condition that is the reason why the procedure was performed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $reasonReference
     * @return $this
     */
    public function addReasonReference($reasonReference)
    {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * Detailed and structured anatomical location information. Multiple locations are allowed - e.g. multiple punch biopsies of a lesion.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * Detailed and structured anatomical location information. Multiple locations are allowed - e.g. multiple punch biopsies of a lesion.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $bodySite
     * @return $this
     */
    public function addBodySite($bodySite)
    {
        $this->bodySite[] = $bodySite;
        return $this;
    }

    /**
     * The outcome of the procedure - did it resolve reasons for the procedure being performed?
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * The outcome of the procedure - did it resolve reasons for the procedure being performed?
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $outcome
     * @return $this
     */
    public function setOutcome($outcome)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * This could be a histology result, pathology report, surgical report, etc..
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getReport()
    {
        return $this->report;
    }

    /**
     * This could be a histology result, pathology report, surgical report, etc..
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $report
     * @return $this
     */
    public function addReport($report)
    {
        $this->report[] = $report;
        return $this;
    }

    /**
     * Any complications that occurred during the procedure, or in the immediate post-performance period. These are generally tracked separately from the notes, which will typically describe the procedure itself rather than any 'post procedure' issues.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getComplication()
    {
        return $this->complication;
    }

    /**
     * Any complications that occurred during the procedure, or in the immediate post-performance period. These are generally tracked separately from the notes, which will typically describe the procedure itself rather than any 'post procedure' issues.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $complication
     * @return $this
     */
    public function addComplication($complication)
    {
        $this->complication[] = $complication;
        return $this;
    }

    /**
     * Any complications that occurred during the procedure, or in the immediate post-performance period.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getComplicationDetail()
    {
        return $this->complicationDetail;
    }

    /**
     * Any complications that occurred during the procedure, or in the immediate post-performance period.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $complicationDetail
     * @return $this
     */
    public function addComplicationDetail($complicationDetail)
    {
        $this->complicationDetail[] = $complicationDetail;
        return $this;
    }

    /**
     * If the procedure required specific follow up - e.g. removal of sutures. The followup may be represented as a simple note, or could potentially be more complex in which case the CarePlan resource can be used.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getFollowUp()
    {
        return $this->followUp;
    }

    /**
     * If the procedure required specific follow up - e.g. removal of sutures. The followup may be represented as a simple note, or could potentially be more complex in which case the CarePlan resource can be used.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $followUp
     * @return $this
     */
    public function addFollowUp($followUp)
    {
        $this->followUp[] = $followUp;
        return $this;
    }

    /**
     * Any other notes about the procedure.  E.g. the operative notes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Any other notes about the procedure.  E.g. the operative notes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * A device that is implanted, removed or otherwise manipulated (calibration, battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a focal portion of the Procedure.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProcedure\FHIRProcedureFocalDevice[]
     */
    public function getFocalDevice()
    {
        return $this->focalDevice;
    }

    /**
     * A device that is implanted, removed or otherwise manipulated (calibration, battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a focal portion of the Procedure.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProcedure\FHIRProcedureFocalDevice $focalDevice
     * @return $this
     */
    public function addFocalDevice($focalDevice)
    {
        $this->focalDevice[] = $focalDevice;
        return $this;
    }

    /**
     * Identifies medications, devices and any other substance used as part of the procedure.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getUsedReference()
    {
        return $this->usedReference;
    }

    /**
     * Identifies medications, devices and any other substance used as part of the procedure.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $usedReference
     * @return $this
     */
    public function addUsedReference($usedReference)
    {
        $this->usedReference[] = $usedReference;
        return $this;
    }

    /**
     * Identifies coded items that were used as part of the procedure.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getUsedCode()
    {
        return $this->usedCode;
    }

    /**
     * Identifies coded items that were used as part of the procedure.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $usedCode
     * @return $this
     */
    public function addUsedCode($usedCode)
    {
        $this->usedCode[] = $usedCode;
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
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier;
            }
        }
        if (0 < count($this->definition)) {
            $json['definition'] = [];
            foreach($this->definition as $definition) {
                $json['definition'][] = $definition;
            }
        }
        if (0 < count($this->basedOn)) {
            $json['basedOn'] = [];
            foreach($this->basedOn as $basedOn) {
                $json['basedOn'][] = $basedOn;
            }
        }
        if (0 < count($this->partOf)) {
            $json['partOf'] = [];
            foreach($this->partOf as $partOf) {
                $json['partOf'][] = $partOf;
            }
        }
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->notDone) $json['notDone'] = $this->notDone;
        if (null !== $this->notDoneReason) $json['notDoneReason'] = $this->notDoneReason;
        if (null !== $this->category) $json['category'] = $this->category;
        if (null !== $this->code) $json['code'] = $this->code;
        if (null !== $this->subject) $json['subject'] = $this->subject;
        if (null !== $this->context) $json['context'] = $this->context;
        if (null !== $this->performedDateTime) $json['performedDateTime'] = $this->performedDateTime;
        if (null !== $this->performedPeriod) $json['performedPeriod'] = $this->performedPeriod;
        if (0 < count($this->performer)) {
            $json['performer'] = [];
            foreach($this->performer as $performer) {
                $json['performer'][] = $performer;
            }
        }
        if (null !== $this->location) $json['location'] = $this->location;
        if (0 < count($this->reasonCode)) {
            $json['reasonCode'] = [];
            foreach($this->reasonCode as $reasonCode) {
                $json['reasonCode'][] = $reasonCode;
            }
        }
        if (0 < count($this->reasonReference)) {
            $json['reasonReference'] = [];
            foreach($this->reasonReference as $reasonReference) {
                $json['reasonReference'][] = $reasonReference;
            }
        }
        if (0 < count($this->bodySite)) {
            $json['bodySite'] = [];
            foreach($this->bodySite as $bodySite) {
                $json['bodySite'][] = $bodySite;
            }
        }
        if (null !== $this->outcome) $json['outcome'] = $this->outcome;
        if (0 < count($this->report)) {
            $json['report'] = [];
            foreach($this->report as $report) {
                $json['report'][] = $report;
            }
        }
        if (0 < count($this->complication)) {
            $json['complication'] = [];
            foreach($this->complication as $complication) {
                $json['complication'][] = $complication;
            }
        }
        if (0 < count($this->complicationDetail)) {
            $json['complicationDetail'] = [];
            foreach($this->complicationDetail as $complicationDetail) {
                $json['complicationDetail'][] = $complicationDetail;
            }
        }
        if (0 < count($this->followUp)) {
            $json['followUp'] = [];
            foreach($this->followUp as $followUp) {
                $json['followUp'][] = $followUp;
            }
        }
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                $json['note'][] = $note;
            }
        }
        if (0 < count($this->focalDevice)) {
            $json['focalDevice'] = [];
            foreach($this->focalDevice as $focalDevice) {
                $json['focalDevice'][] = $focalDevice;
            }
        }
        if (0 < count($this->usedReference)) {
            $json['usedReference'] = [];
            foreach($this->usedReference as $usedReference) {
                $json['usedReference'][] = $usedReference;
            }
        }
        if (0 < count($this->usedCode)) {
            $json['usedCode'] = [];
            foreach($this->usedCode as $usedCode) {
                $json['usedCode'][] = $usedCode;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Procedure xmlns="http://hl7.org/fhir"></Procedure>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (0 < count($this->definition)) {
            foreach($this->definition as $definition) {
                $definition->xmlSerialize(true, $sxe->addChild('definition'));
            }
        }
        if (0 < count($this->basedOn)) {
            foreach($this->basedOn as $basedOn) {
                $basedOn->xmlSerialize(true, $sxe->addChild('basedOn'));
            }
        }
        if (0 < count($this->partOf)) {
            foreach($this->partOf as $partOf) {
                $partOf->xmlSerialize(true, $sxe->addChild('partOf'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->notDone) $this->notDone->xmlSerialize(true, $sxe->addChild('notDone'));
        if (null !== $this->notDoneReason) $this->notDoneReason->xmlSerialize(true, $sxe->addChild('notDoneReason'));
        if (null !== $this->category) $this->category->xmlSerialize(true, $sxe->addChild('category'));
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->context) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if (null !== $this->performedDateTime) $this->performedDateTime->xmlSerialize(true, $sxe->addChild('performedDateTime'));
        if (null !== $this->performedPeriod) $this->performedPeriod->xmlSerialize(true, $sxe->addChild('performedPeriod'));
        if (0 < count($this->performer)) {
            foreach($this->performer as $performer) {
                $performer->xmlSerialize(true, $sxe->addChild('performer'));
            }
        }
        if (null !== $this->location) $this->location->xmlSerialize(true, $sxe->addChild('location'));
        if (0 < count($this->reasonCode)) {
            foreach($this->reasonCode as $reasonCode) {
                $reasonCode->xmlSerialize(true, $sxe->addChild('reasonCode'));
            }
        }
        if (0 < count($this->reasonReference)) {
            foreach($this->reasonReference as $reasonReference) {
                $reasonReference->xmlSerialize(true, $sxe->addChild('reasonReference'));
            }
        }
        if (0 < count($this->bodySite)) {
            foreach($this->bodySite as $bodySite) {
                $bodySite->xmlSerialize(true, $sxe->addChild('bodySite'));
            }
        }
        if (null !== $this->outcome) $this->outcome->xmlSerialize(true, $sxe->addChild('outcome'));
        if (0 < count($this->report)) {
            foreach($this->report as $report) {
                $report->xmlSerialize(true, $sxe->addChild('report'));
            }
        }
        if (0 < count($this->complication)) {
            foreach($this->complication as $complication) {
                $complication->xmlSerialize(true, $sxe->addChild('complication'));
            }
        }
        if (0 < count($this->complicationDetail)) {
            foreach($this->complicationDetail as $complicationDetail) {
                $complicationDetail->xmlSerialize(true, $sxe->addChild('complicationDetail'));
            }
        }
        if (0 < count($this->followUp)) {
            foreach($this->followUp as $followUp) {
                $followUp->xmlSerialize(true, $sxe->addChild('followUp'));
            }
        }
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if (0 < count($this->focalDevice)) {
            foreach($this->focalDevice as $focalDevice) {
                $focalDevice->xmlSerialize(true, $sxe->addChild('focalDevice'));
            }
        }
        if (0 < count($this->usedReference)) {
            foreach($this->usedReference as $usedReference) {
                $usedReference->xmlSerialize(true, $sxe->addChild('usedReference'));
            }
        }
        if (0 < count($this->usedCode)) {
            foreach($this->usedCode as $usedCode) {
                $usedCode->xmlSerialize(true, $sxe->addChild('usedCode'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}