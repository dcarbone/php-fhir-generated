<?php namespace PHPFHIRGenerated\FHIRResource;

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

/**
 * Use to record detailed information about conditions, problems or diagnoses recognized by a clinician. There are many uses including: recording a Diagnosis during an Encounter; populating a problem List or a Summary Statement, such as a Discharge Summary.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRCondition extends FHIRResource implements \JsonSerializable
{
    /**
     * This records identifiers associated with this condition that are defined by business processed and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Indicates the patient who the condition record is associated with.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $subject = null;

    /**
     * Encounter during which the condition was first asserted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $encounter = null;

    /**
     * Person who takes responsibility for asserting the existence of the condition as part of the electronic record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $asserter = null;

    /**
     * Estimated or actual date the condition/problem/diagnosis was first detected/suspected.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $dateAsserted = null;

    /**
     * Identification of the condition, problem or diagnosis.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * A category assigned to the condition. E.g. complaint | symptom | finding | diagnosis.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * The clinical status of the condition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRConditionStatus
     */
    public $status = null;

    /**
     * The degree of confidence that this condition is correct.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $certainty = null;

    /**
     * A subjective assessment of the severity of the condition as evaluated by the clinician.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $severity = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $onsetDate = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $onsetAge = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $abatementDate = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $abatementAge = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $abatementBoolean = null;

    /**
     * Clinical stage or grade of a condition. May include formal severity assessments.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRCondition\FHIRConditionStage
     */
    public $stage = null;

    /**
     * Supporting Evidence / manifestations that are the basis on which this condition is suspected or confirmed.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRCondition\FHIRConditionEvidence[]
     */
    public $evidence = array();

    /**
     * The anatomical location where this condition manifests itself.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRCondition\FHIRConditionLocation[]
     */
    public $location = array();

    /**
     * Further conditions, problems, diagnoses, procedures or events that are related in some way to this condition, or the substance that caused/triggered this Condition.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRCondition\FHIRConditionRelatedItem[]
     */
    public $relatedItem = array();

    /**
     * Additional information about the Condition. This is a general notes/comments entry  for description of the Condition, its diagnosis and prognosis.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $notes = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Condition';

    /**
     * This records identifiers associated with this condition that are defined by business processed and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * This records identifiers associated with this condition that are defined by business processed and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Indicates the patient who the condition record is associated with.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Indicates the patient who the condition record is associated with.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Encounter during which the condition was first asserted.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Encounter during which the condition was first asserted.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $encounter
     * @return $this
     */
    public function setEncounter($encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Person who takes responsibility for asserting the existence of the condition as part of the electronic record.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getAsserter()
    {
        return $this->asserter;
    }

    /**
     * Person who takes responsibility for asserting the existence of the condition as part of the electronic record.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $asserter
     * @return $this
     */
    public function setAsserter($asserter)
    {
        $this->asserter = $asserter;
        return $this;
    }

    /**
     * Estimated or actual date the condition/problem/diagnosis was first detected/suspected.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getDateAsserted()
    {
        return $this->dateAsserted;
    }

    /**
     * Estimated or actual date the condition/problem/diagnosis was first detected/suspected.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $dateAsserted
     * @return $this
     */
    public function setDateAsserted($dateAsserted)
    {
        $this->dateAsserted = $dateAsserted;
        return $this;
    }

    /**
     * Identification of the condition, problem or diagnosis.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Identification of the condition, problem or diagnosis.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * A category assigned to the condition. E.g. complaint | symptom | finding | diagnosis.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * A category assigned to the condition. E.g. complaint | symptom | finding | diagnosis.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * The clinical status of the condition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRConditionStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The clinical status of the condition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRConditionStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The degree of confidence that this condition is correct.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCertainty()
    {
        return $this->certainty;
    }

    /**
     * The degree of confidence that this condition is correct.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $certainty
     * @return $this
     */
    public function setCertainty($certainty)
    {
        $this->certainty = $certainty;
        return $this;
    }

    /**
     * A subjective assessment of the severity of the condition as evaluated by the clinician.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * A subjective assessment of the severity of the condition as evaluated by the clinician.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $severity
     * @return $this
     */
    public function setSeverity($severity)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getOnsetDate()
    {
        return $this->onsetDate;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $onsetDate
     * @return $this
     */
    public function setOnsetDate($onsetDate)
    {
        $this->onsetDate = $onsetDate;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getOnsetAge()
    {
        return $this->onsetAge;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge $onsetAge
     * @return $this
     */
    public function setOnsetAge($onsetAge)
    {
        $this->onsetAge = $onsetAge;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getAbatementDate()
    {
        return $this->abatementDate;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $abatementDate
     * @return $this
     */
    public function setAbatementDate($abatementDate)
    {
        $this->abatementDate = $abatementDate;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getAbatementAge()
    {
        return $this->abatementAge;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge $abatementAge
     * @return $this
     */
    public function setAbatementAge($abatementAge)
    {
        $this->abatementAge = $abatementAge;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAbatementBoolean()
    {
        return $this->abatementBoolean;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $abatementBoolean
     * @return $this
     */
    public function setAbatementBoolean($abatementBoolean)
    {
        $this->abatementBoolean = $abatementBoolean;
        return $this;
    }

    /**
     * Clinical stage or grade of a condition. May include formal severity assessments.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRCondition\FHIRConditionStage
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * Clinical stage or grade of a condition. May include formal severity assessments.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRCondition\FHIRConditionStage $stage
     * @return $this
     */
    public function setStage($stage)
    {
        $this->stage = $stage;
        return $this;
    }

    /**
     * Supporting Evidence / manifestations that are the basis on which this condition is suspected or confirmed.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRCondition\FHIRConditionEvidence[]
     */
    public function getEvidence()
    {
        return $this->evidence;
    }

    /**
     * Supporting Evidence / manifestations that are the basis on which this condition is suspected or confirmed.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRCondition\FHIRConditionEvidence $evidence
     * @return $this
     */
    public function addEvidence($evidence)
    {
        $this->evidence[] = $evidence;
        return $this;
    }

    /**
     * The anatomical location where this condition manifests itself.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRCondition\FHIRConditionLocation[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The anatomical location where this condition manifests itself.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRCondition\FHIRConditionLocation $location
     * @return $this
     */
    public function addLocation($location)
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * Further conditions, problems, diagnoses, procedures or events that are related in some way to this condition, or the substance that caused/triggered this Condition.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRCondition\FHIRConditionRelatedItem[]
     */
    public function getRelatedItem()
    {
        return $this->relatedItem;
    }

    /**
     * Further conditions, problems, diagnoses, procedures or events that are related in some way to this condition, or the substance that caused/triggered this Condition.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRCondition\FHIRConditionRelatedItem $relatedItem
     * @return $this
     */
    public function addRelatedItem($relatedItem)
    {
        $this->relatedItem[] = $relatedItem;
        return $this;
    }

    /**
     * Additional information about the Condition. This is a general notes/comments entry  for description of the Condition, its diagnosis and prognosis.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Additional information about the Condition. This is a general notes/comments entry  for description of the Condition, its diagnosis and prognosis.
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
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = json_encode($identifier);
            }
        }
        if (null !== $this->subject) $json['subject'] = json_encode($this->subject);
        if (null !== $this->encounter) $json['encounter'] = json_encode($this->encounter);
        if (null !== $this->asserter) $json['asserter'] = json_encode($this->asserter);
        if (null !== $this->dateAsserted) $json['dateAsserted'] = json_encode($this->dateAsserted);
        if (null !== $this->code) $json['code'] = json_encode($this->code);
        if (null !== $this->category) $json['category'] = json_encode($this->category);
        if (null !== $this->status) $json['status'] = json_encode($this->status);
        if (null !== $this->certainty) $json['certainty'] = json_encode($this->certainty);
        if (null !== $this->severity) $json['severity'] = json_encode($this->severity);
        if (null !== $this->onsetDate) $json['onsetDate'] = json_encode($this->onsetDate);
        if (null !== $this->onsetAge) $json['onsetAge'] = json_encode($this->onsetAge);
        if (null !== $this->abatementDate) $json['abatementDate'] = json_encode($this->abatementDate);
        if (null !== $this->abatementAge) $json['abatementAge'] = json_encode($this->abatementAge);
        if (null !== $this->abatementBoolean) $json['abatementBoolean'] = json_encode($this->abatementBoolean);
        if (null !== $this->stage) $json['stage'] = json_encode($this->stage);
        if (0 < count($this->evidence)) {
            $json['evidence'] = [];
            foreach($this->evidence as $evidence) {
                $json['evidence'][] = json_encode($evidence);
            }
        }
        if (0 < count($this->location)) {
            $json['location'] = [];
            foreach($this->location as $location) {
                $json['location'][] = json_encode($location);
            }
        }
        if (0 < count($this->relatedItem)) {
            $json['relatedItem'] = [];
            foreach($this->relatedItem as $relatedItem) {
                $json['relatedItem'][] = json_encode($relatedItem);
            }
        }
        if (null !== $this->notes) $json['notes'] = json_encode($this->notes);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Condition xmlns="http://hl7.org/fhir"></Condition>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->encounter) $this->encounter->xmlSerialize(true, $sxe->addChild('encounter'));
        if (null !== $this->asserter) $this->asserter->xmlSerialize(true, $sxe->addChild('asserter'));
        if (null !== $this->dateAsserted) $this->dateAsserted->xmlSerialize(true, $sxe->addChild('dateAsserted'));
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->category) $this->category->xmlSerialize(true, $sxe->addChild('category'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->certainty) $this->certainty->xmlSerialize(true, $sxe->addChild('certainty'));
        if (null !== $this->severity) $this->severity->xmlSerialize(true, $sxe->addChild('severity'));
        if (null !== $this->onsetDate) $this->onsetDate->xmlSerialize(true, $sxe->addChild('onsetDate'));
        if (null !== $this->onsetAge) $this->onsetAge->xmlSerialize(true, $sxe->addChild('onsetAge'));
        if (null !== $this->abatementDate) $this->abatementDate->xmlSerialize(true, $sxe->addChild('abatementDate'));
        if (null !== $this->abatementAge) $this->abatementAge->xmlSerialize(true, $sxe->addChild('abatementAge'));
        if (null !== $this->abatementBoolean) $this->abatementBoolean->xmlSerialize(true, $sxe->addChild('abatementBoolean'));
        if (null !== $this->stage) $this->stage->xmlSerialize(true, $sxe->addChild('stage'));
        if (0 < count($this->evidence)) {
            foreach($this->evidence as $evidence) {
                $evidence->xmlSerialize(true, $sxe->addChild('evidence'));
            }
        }
        if (0 < count($this->location)) {
            foreach($this->location as $location) {
                $location->xmlSerialize(true, $sxe->addChild('location'));
            }
        }
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