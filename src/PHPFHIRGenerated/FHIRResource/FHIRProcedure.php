<?php namespace PHPFHIRGenerated\FHIRResource;

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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use PHPFHIRGenerated\FHIRResource\FHIRResource;
use PHPFHIRGenerated\JsonSerializable;

/**
 * An action that is performed on a patient. This can be a physical 'thing' like an operation, or less invasive like counseling or hypnotherapy.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRProcedure extends FHIRResource implements JsonSerializable
{
    /**
     * This records identifiers associated with this procedure that are defined by business processed and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The person on whom the procedure was performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $subject = null;

    /**
     * The specific procedure that is performed. Use text if the exact nature of the procedure can't be coded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Detailed and structured anatomical location information. Multiple locations are allowed - e.g. multiple punch biopsies of a lesion.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $bodySite = array();

    /**
     * The reason why the procedure was performed. This may be due to a Condition, may be coded entity of some type, or may simply be present as text.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $indication = array();

    /**
     * Limited to 'real' people rather than equipment.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProcedure\FHIRProcedurePerformer[]
     */
    public $performer = array();

    /**
     * The dates over which the procedure was performed. Allows a period to support complex procedures that span more that one date, and also allows for the length of the procedure to be captured.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $date = null;

    /**
     * The encounter during which the procedure was performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $encounter = null;

    /**
     * What was the outcome of the procedure - did it resolve reasons why the procedure was performed?.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $outcome = null;

    /**
     * This could be a histology result. There could potentially be multiple reports - e.g. if this was a procedure that made multiple biopsies.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public $report = array();

    /**
     * Any complications that occurred during the procedure, or in the immediate post-operative period. These are generally tracked separately from the notes, which typically will describe the procedure itself rather than any 'post procedure' issues.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $complication = array();

    /**
     * If the procedure required specific follow up - e.g. removal of sutures. The followup may be represented as a simple note, or potentially could be more complex in which case the CarePlan resource can be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $followUp = null;

    /**
     * Procedures may be related to other items such as procedures or medications. For example treating wound dehiscence following a previous procedure.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProcedure\FHIRProcedureRelatedItem[]
     */
    public $relatedItem = array();

    /**
     * Any other notes about the procedure - e.g. the operative notes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $notes = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Procedure';

    /**
     * This records identifiers associated with this procedure that are defined by business processed and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * This records identifiers associated with this procedure that are defined by business processed and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The person on whom the procedure was performed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The person on whom the procedure was performed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The specific procedure that is performed. Use text if the exact nature of the procedure can't be coded.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The specific procedure that is performed. Use text if the exact nature of the procedure can't be coded.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
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
     * The reason why the procedure was performed. This may be due to a Condition, may be coded entity of some type, or may simply be present as text.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getIndication()
    {
        return $this->indication;
    }

    /**
     * The reason why the procedure was performed. This may be due to a Condition, may be coded entity of some type, or may simply be present as text.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $indication
     * @return $this
     */
    public function addIndication($indication)
    {
        $this->indication[] = $indication;
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
     * The dates over which the procedure was performed. Allows a period to support complex procedures that span more that one date, and also allows for the length of the procedure to be captured.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The dates over which the procedure was performed. Allows a period to support complex procedures that span more that one date, and also allows for the length of the procedure to be captured.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * The encounter during which the procedure was performed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * The encounter during which the procedure was performed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $encounter
     * @return $this
     */
    public function setEncounter($encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * What was the outcome of the procedure - did it resolve reasons why the procedure was performed?.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * What was the outcome of the procedure - did it resolve reasons why the procedure was performed?.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $outcome
     * @return $this
     */
    public function setOutcome($outcome)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * This could be a histology result. There could potentially be multiple reports - e.g. if this was a procedure that made multiple biopsies.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public function getReport()
    {
        return $this->report;
    }

    /**
     * This could be a histology result. There could potentially be multiple reports - e.g. if this was a procedure that made multiple biopsies.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[] $report
     * @return $this
     */
    public function addReport($report)
    {
        $this->report[] = $report;
        return $this;
    }

    /**
     * Any complications that occurred during the procedure, or in the immediate post-operative period. These are generally tracked separately from the notes, which typically will describe the procedure itself rather than any 'post procedure' issues.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getComplication()
    {
        return $this->complication;
    }

    /**
     * Any complications that occurred during the procedure, or in the immediate post-operative period. These are generally tracked separately from the notes, which typically will describe the procedure itself rather than any 'post procedure' issues.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $complication
     * @return $this
     */
    public function addComplication($complication)
    {
        $this->complication[] = $complication;
        return $this;
    }

    /**
     * If the procedure required specific follow up - e.g. removal of sutures. The followup may be represented as a simple note, or potentially could be more complex in which case the CarePlan resource can be used.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getFollowUp()
    {
        return $this->followUp;
    }

    /**
     * If the procedure required specific follow up - e.g. removal of sutures. The followup may be represented as a simple note, or potentially could be more complex in which case the CarePlan resource can be used.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $followUp
     * @return $this
     */
    public function setFollowUp($followUp)
    {
        $this->followUp = $followUp;
        return $this;
    }

    /**
     * Procedures may be related to other items such as procedures or medications. For example treating wound dehiscence following a previous procedure.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProcedure\FHIRProcedureRelatedItem[]
     */
    public function getRelatedItem()
    {
        return $this->relatedItem;
    }

    /**
     * Procedures may be related to other items such as procedures or medications. For example treating wound dehiscence following a previous procedure.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProcedure\FHIRProcedureRelatedItem[] $relatedItem
     * @return $this
     */
    public function addRelatedItem($relatedItem)
    {
        $this->relatedItem[] = $relatedItem;
        return $this;
    }

    /**
     * Any other notes about the procedure - e.g. the operative notes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Any other notes about the procedure - e.g. the operative notes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $notes
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
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
        if (null !== $this->type) $json['type'] = $this->type->jsonSerialize();
        if (0 < count($this->bodySite)) {
            $json['bodySite'] = array();
            foreach($this->bodySite as $bodySite) {
                $json['bodySite'][] = $bodySite->jsonSerialize();
            }
        }
        if (0 < count($this->indication)) {
            $json['indication'] = array();
            foreach($this->indication as $indication) {
                $json['indication'][] = $indication->jsonSerialize();
            }
        }
        if (0 < count($this->performer)) {
            $json['performer'] = array();
            foreach($this->performer as $performer) {
                $json['performer'][] = $performer->jsonSerialize();
            }
        }
        if (null !== $this->date) $json['date'] = $this->date->jsonSerialize();
        if (null !== $this->encounter) $json['encounter'] = $this->encounter->jsonSerialize();
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
        if (null !== $this->followUp) $json['followUp'] = $this->followUp->jsonSerialize();
        if (0 < count($this->relatedItem)) {
            $json['relatedItem'] = array();
            foreach($this->relatedItem as $relatedItem) {
                $json['relatedItem'][] = $relatedItem->jsonSerialize();
            }
        }
        if (null !== $this->notes) $json['notes'] = $this->notes->jsonSerialize();
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
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (0 < count($this->bodySite)) {
            foreach($this->bodySite as $bodySite) {
                $bodySite->xmlSerialize(true, $sxe->addChild('bodySite'));
            }
        }
        if (0 < count($this->indication)) {
            foreach($this->indication as $indication) {
                $indication->xmlSerialize(true, $sxe->addChild('indication'));
            }
        }
        if (0 < count($this->performer)) {
            foreach($this->performer as $performer) {
                $performer->xmlSerialize(true, $sxe->addChild('performer'));
            }
        }
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->encounter) $this->encounter->xmlSerialize(true, $sxe->addChild('encounter'));
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
        if (null !== $this->followUp) $this->followUp->xmlSerialize(true, $sxe->addChild('followUp'));
        if (0 < count($this->relatedItem)) {
            foreach($this->relatedItem as $relatedItem) {
                $relatedItem->xmlSerialize(true, $sxe->addChild('relatedItem'));
            }
        }
        if (null !== $this->notes) $this->notes->xmlSerialize(true, $sxe->addChild('notes'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}