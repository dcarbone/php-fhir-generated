<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 28th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
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
use PHPFHIRGenerated\JsonSerializable;

/**
 * An action that is or was performed on a patient. This can be a physical intervention like an operation, or less invasive like counseling or hypnotherapy.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRProcedure extends FHIRDomainResource implements JsonSerializable
{
    /**
     * This records identifiers associated with this procedure that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The person, animal or group on which the procedure was performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * A code specifying the state of the procedure. Generally this will be in-progress or completed state.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRProcedureStatus
     */
    public $status = null;

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
     * Set this to true if the record is saying that the procedure was NOT performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $notPerformed = null;

    /**
     * A code indicating why the procedure was not performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $reasonNotPerformed = array();

    /**
     * Detailed and structured anatomical location information. Multiple locations are allowed - e.g. multiple punch biopsies of a lesion.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $bodySite = array();

    /**
     * The reason why the procedure was performed. This may be due to a Condition, may be coded entity of some type, or may simply be present as text. (choose any one of reason*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCodeableConcept = null;

    /**
     * The reason why the procedure was performed. This may be due to a Condition, may be coded entity of some type, or may simply be present as text. (choose any one of reason*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reasonReference = null;

    /**
     * Limited to 'real' people rather than equipment.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProcedure\FHIRProcedurePerformer[]
     */
    public $performer = array();

    /**
     * The date(time)/period over which the procedure was performed. Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured. (choose any one of performed*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $performedDateTime = null;

    /**
     * The date(time)/period over which the procedure was performed. Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured. (choose any one of performed*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $performedPeriod = null;

    /**
     * The encounter during which the procedure was performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * The location where the procedure actually happened.  E.g. a newborn at home, a tracheostomy at a restaurant.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $location = null;

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
     * If the procedure required specific follow up - e.g. removal of sutures. The followup may be represented as a simple note, or could potentially be more complex in which case the CarePlan resource can be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $followUp = array();

    /**
     * A reference to a resource that contains details of the request for this procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $request = null;

    /**
     * Any other notes about the procedure.  E.g. the operative notes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public $notes = array();

    /**
     * A device that is implanted, removed or otherwise manipulated (calibration, battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a focal portion of the Procedure.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProcedure\FHIRProcedureFocalDevice[]
     */
    public $focalDevice = array();

    /**
     * Identifies medications, devices and any other substance used as part of the procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $used = array();

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
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
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
     * A code specifying the state of the procedure. Generally this will be in-progress or completed state.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRProcedureStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A code specifying the state of the procedure. Generally this will be in-progress or completed state.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRProcedureStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
     * Set this to true if the record is saying that the procedure was NOT performed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getNotPerformed()
    {
        return $this->notPerformed;
    }

    /**
     * Set this to true if the record is saying that the procedure was NOT performed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $notPerformed
     * @return $this
     */
    public function setNotPerformed($notPerformed)
    {
        $this->notPerformed = $notPerformed;
        return $this;
    }

    /**
     * A code indicating why the procedure was not performed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonNotPerformed()
    {
        return $this->reasonNotPerformed;
    }

    /**
     * A code indicating why the procedure was not performed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $reasonNotPerformed
     * @return $this
     */
    public function addReasonNotPerformed($reasonNotPerformed)
    {
        $this->reasonNotPerformed[] = $reasonNotPerformed;
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
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $bodySite
     * @return $this
     */
    public function addBodySite($bodySite)
    {
        $this->bodySite[] = $bodySite;
        return $this;
    }

    /**
     * The reason why the procedure was performed. This may be due to a Condition, may be coded entity of some type, or may simply be present as text. (choose any one of reason*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCodeableConcept()
    {
        return $this->reasonCodeableConcept;
    }

    /**
     * The reason why the procedure was performed. This may be due to a Condition, may be coded entity of some type, or may simply be present as text. (choose any one of reason*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reasonCodeableConcept
     * @return $this
     */
    public function setReasonCodeableConcept($reasonCodeableConcept)
    {
        $this->reasonCodeableConcept = $reasonCodeableConcept;
        return $this;
    }

    /**
     * The reason why the procedure was performed. This may be due to a Condition, may be coded entity of some type, or may simply be present as text. (choose any one of reason*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * The reason why the procedure was performed. This may be due to a Condition, may be coded entity of some type, or may simply be present as text. (choose any one of reason*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $reasonReference
     * @return $this
     */
    public function setReasonReference($reasonReference)
    {
        $this->reasonReference = $reasonReference;
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
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProcedure\FHIRProcedurePerformer[] $performer
     * @return $this
     */
    public function addPerformer($performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * The date(time)/period over which the procedure was performed. Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured. (choose any one of performed*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getPerformedDateTime()
    {
        return $this->performedDateTime;
    }

    /**
     * The date(time)/period over which the procedure was performed. Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured. (choose any one of performed*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $performedDateTime
     * @return $this
     */
    public function setPerformedDateTime($performedDateTime)
    {
        $this->performedDateTime = $performedDateTime;
        return $this;
    }

    /**
     * The date(time)/period over which the procedure was performed. Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured. (choose any one of performed*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPerformedPeriod()
    {
        return $this->performedPeriod;
    }

    /**
     * The date(time)/period over which the procedure was performed. Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured. (choose any one of performed*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $performedPeriod
     * @return $this
     */
    public function setPerformedPeriod($performedPeriod)
    {
        $this->performedPeriod = $performedPeriod;
        return $this;
    }

    /**
     * The encounter during which the procedure was performed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * The encounter during which the procedure was performed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $encounter
     * @return $this
     */
    public function setEncounter($encounter)
    {
        $this->encounter = $encounter;
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
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $report
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
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $complication
     * @return $this
     */
    public function addComplication($complication)
    {
        $this->complication[] = $complication;
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
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $followUp
     * @return $this
     */
    public function addFollowUp($followUp)
    {
        $this->followUp[] = $followUp;
        return $this;
    }

    /**
     * A reference to a resource that contains details of the request for this procedure.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * A reference to a resource that contains details of the request for this procedure.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $request
     * @return $this
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Any other notes about the procedure.  E.g. the operative notes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Any other notes about the procedure.  E.g. the operative notes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[] $notes
     * @return $this
     */
    public function addNotes($notes)
    {
        $this->notes[] = $notes;
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
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProcedure\FHIRProcedureFocalDevice[] $focalDevice
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
    public function getUsed()
    {
        return $this->used;
    }

    /**
     * Identifies medications, devices and any other substance used as part of the procedure.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $used
     * @return $this
     */
    public function addUsed($used)
    {
        $this->used[] = $used;
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
            $json['identifier'] = array();
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier->jsonSerialize();
            }
        }
        if (null !== $this->subject) $json['subject'] = $this->subject->jsonSerialize();
        if (null !== $this->status) $json['status'] = $this->status->jsonSerialize();
        if (null !== $this->category) $json['category'] = $this->category->jsonSerialize();
        if (null !== $this->code) $json['code'] = $this->code->jsonSerialize();
        if (null !== $this->notPerformed) $json['notPerformed'] = $this->notPerformed->jsonSerialize();
        if (0 < count($this->reasonNotPerformed)) {
            $json['reasonNotPerformed'] = array();
            foreach($this->reasonNotPerformed as $reasonNotPerformed) {
                $json['reasonNotPerformed'][] = $reasonNotPerformed->jsonSerialize();
            }
        }
        if (0 < count($this->bodySite)) {
            $json['bodySite'] = array();
            foreach($this->bodySite as $bodySite) {
                $json['bodySite'][] = $bodySite->jsonSerialize();
            }
        }
        if (null !== $this->reasonCodeableConcept) $json['reasonCodeableConcept'] = $this->reasonCodeableConcept->jsonSerialize();
        if (null !== $this->reasonReference) $json['reasonReference'] = $this->reasonReference->jsonSerialize();
        if (0 < count($this->performer)) {
            $json['performer'] = array();
            foreach($this->performer as $performer) {
                $json['performer'][] = $performer->jsonSerialize();
            }
        }
        if (null !== $this->performedDateTime) $json['performedDateTime'] = $this->performedDateTime->jsonSerialize();
        if (null !== $this->performedPeriod) $json['performedPeriod'] = $this->performedPeriod->jsonSerialize();
        if (null !== $this->encounter) $json['encounter'] = $this->encounter->jsonSerialize();
        if (null !== $this->location) $json['location'] = $this->location->jsonSerialize();
        if (null !== $this->outcome) $json['outcome'] = $this->outcome->jsonSerialize();
        if (0 < count($this->report)) {
            $json['report'] = array();
            foreach($this->report as $report) {
                $json['report'][] = $report->jsonSerialize();
            }
        }
        if (0 < count($this->complication)) {
            $json['complication'] = array();
            foreach($this->complication as $complication) {
                $json['complication'][] = $complication->jsonSerialize();
            }
        }
        if (0 < count($this->followUp)) {
            $json['followUp'] = array();
            foreach($this->followUp as $followUp) {
                $json['followUp'][] = $followUp->jsonSerialize();
            }
        }
        if (null !== $this->request) $json['request'] = $this->request->jsonSerialize();
        if (0 < count($this->notes)) {
            $json['notes'] = array();
            foreach($this->notes as $notes) {
                $json['notes'][] = $notes->jsonSerialize();
            }
        }
        if (0 < count($this->focalDevice)) {
            $json['focalDevice'] = array();
            foreach($this->focalDevice as $focalDevice) {
                $json['focalDevice'][] = $focalDevice->jsonSerialize();
            }
        }
        if (0 < count($this->used)) {
            $json['used'] = array();
            foreach($this->used as $used) {
                $json['used'][] = $used->jsonSerialize();
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
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->category) $this->category->xmlSerialize(true, $sxe->addChild('category'));
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->notPerformed) $this->notPerformed->xmlSerialize(true, $sxe->addChild('notPerformed'));
        if (0 < count($this->reasonNotPerformed)) {
            foreach($this->reasonNotPerformed as $reasonNotPerformed) {
                $reasonNotPerformed->xmlSerialize(true, $sxe->addChild('reasonNotPerformed'));
            }
        }
        if (0 < count($this->bodySite)) {
            foreach($this->bodySite as $bodySite) {
                $bodySite->xmlSerialize(true, $sxe->addChild('bodySite'));
            }
        }
        if (null !== $this->reasonCodeableConcept) $this->reasonCodeableConcept->xmlSerialize(true, $sxe->addChild('reasonCodeableConcept'));
        if (null !== $this->reasonReference) $this->reasonReference->xmlSerialize(true, $sxe->addChild('reasonReference'));
        if (0 < count($this->performer)) {
            foreach($this->performer as $performer) {
                $performer->xmlSerialize(true, $sxe->addChild('performer'));
            }
        }
        if (null !== $this->performedDateTime) $this->performedDateTime->xmlSerialize(true, $sxe->addChild('performedDateTime'));
        if (null !== $this->performedPeriod) $this->performedPeriod->xmlSerialize(true, $sxe->addChild('performedPeriod'));
        if (null !== $this->encounter) $this->encounter->xmlSerialize(true, $sxe->addChild('encounter'));
        if (null !== $this->location) $this->location->xmlSerialize(true, $sxe->addChild('location'));
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
        if (0 < count($this->followUp)) {
            foreach($this->followUp as $followUp) {
                $followUp->xmlSerialize(true, $sxe->addChild('followUp'));
            }
        }
        if (null !== $this->request) $this->request->xmlSerialize(true, $sxe->addChild('request'));
        if (0 < count($this->notes)) {
            foreach($this->notes as $notes) {
                $notes->xmlSerialize(true, $sxe->addChild('notes'));
            }
        }
        if (0 < count($this->focalDevice)) {
            foreach($this->focalDevice as $focalDevice) {
                $focalDevice->xmlSerialize(true, $sxe->addChild('focalDevice'));
            }
        }
        if (0 < count($this->used)) {
            foreach($this->used as $used) {
                $used->xmlSerialize(true, $sxe->addChild('used'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}