<?php namespace PHPFHIRGenerated\FHIRResource\FHIRDocumentReference;

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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A reference to a document .
 */
class FHIRDocumentReferenceContext extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Describes the clinical encounter or type of care that the document content is associated with.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * This list of codes represents the main clinical acts, such as a colonoscopy or an appendectomy, being documented. In some cases, the event is inherent in the typeCode, such as a "History and Physical Report" in which the procedure being documented is necessarily a "History and Physical" act.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $event = array();

    /**
     * The time period over which the service that is described by the document was provided.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * The kind of facility where the patient was seen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $facilityType = null;

    /**
     * This property may convey specifics about the practice setting where the content was created, often reflecting the clinical specialty.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $practiceSetting = null;

    /**
     * The Patient Information as known when the document was published. May be a reference to a version specific, or contained.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $sourcePatientInfo = null;

    /**
     * Related identifiers or resources associated with the DocumentReference.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceRelated[]
     */
    public $related = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'DocumentReference.Context';

    /**
     * Describes the clinical encounter or type of care that the document content is associated with.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Describes the clinical encounter or type of care that the document content is associated with.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $encounter
     * @return $this
     */
    public function setEncounter($encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * This list of codes represents the main clinical acts, such as a colonoscopy or an appendectomy, being documented. In some cases, the event is inherent in the typeCode, such as a "History and Physical Report" in which the procedure being documented is necessarily a "History and Physical" act.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * This list of codes represents the main clinical acts, such as a colonoscopy or an appendectomy, being documented. In some cases, the event is inherent in the typeCode, such as a "History and Physical Report" in which the procedure being documented is necessarily a "History and Physical" act.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $event
     * @return $this
     */
    public function addEvent($event)
    {
        $this->event[] = $event;
        return $this;
    }

    /**
     * The time period over which the service that is described by the document was provided.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * The time period over which the service that is described by the document was provided.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * The kind of facility where the patient was seen.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getFacilityType()
    {
        return $this->facilityType;
    }

    /**
     * The kind of facility where the patient was seen.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $facilityType
     * @return $this
     */
    public function setFacilityType($facilityType)
    {
        $this->facilityType = $facilityType;
        return $this;
    }

    /**
     * This property may convey specifics about the practice setting where the content was created, often reflecting the clinical specialty.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPracticeSetting()
    {
        return $this->practiceSetting;
    }

    /**
     * This property may convey specifics about the practice setting where the content was created, often reflecting the clinical specialty.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $practiceSetting
     * @return $this
     */
    public function setPracticeSetting($practiceSetting)
    {
        $this->practiceSetting = $practiceSetting;
        return $this;
    }

    /**
     * The Patient Information as known when the document was published. May be a reference to a version specific, or contained.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSourcePatientInfo()
    {
        return $this->sourcePatientInfo;
    }

    /**
     * The Patient Information as known when the document was published. May be a reference to a version specific, or contained.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $sourcePatientInfo
     * @return $this
     */
    public function setSourcePatientInfo($sourcePatientInfo)
    {
        $this->sourcePatientInfo = $sourcePatientInfo;
        return $this;
    }

    /**
     * Related identifiers or resources associated with the DocumentReference.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceRelated[]
     */
    public function getRelated()
    {
        return $this->related;
    }

    /**
     * Related identifiers or resources associated with the DocumentReference.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceRelated $related
     * @return $this
     */
    public function addRelated($related)
    {
        $this->related[] = $related;
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
        if (null !== $this->encounter) $json['encounter'] = $this->encounter;
        if (0 < count($this->event)) {
            $json['event'] = [];
            foreach($this->event as $event) {
                $json['event'][] = $event;
            }
        }
        if (null !== $this->period) $json['period'] = $this->period;
        if (null !== $this->facilityType) $json['facilityType'] = $this->facilityType;
        if (null !== $this->practiceSetting) $json['practiceSetting'] = $this->practiceSetting;
        if (null !== $this->sourcePatientInfo) $json['sourcePatientInfo'] = $this->sourcePatientInfo;
        if (0 < count($this->related)) {
            $json['related'] = [];
            foreach($this->related as $related) {
                $json['related'][] = $related;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<DocumentReferenceContext xmlns="http://hl7.org/fhir"></DocumentReferenceContext>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->encounter) $this->encounter->xmlSerialize(true, $sxe->addChild('encounter'));
        if (0 < count($this->event)) {
            foreach($this->event as $event) {
                $event->xmlSerialize(true, $sxe->addChild('event'));
            }
        }
        if (null !== $this->period) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (null !== $this->facilityType) $this->facilityType->xmlSerialize(true, $sxe->addChild('facilityType'));
        if (null !== $this->practiceSetting) $this->practiceSetting->xmlSerialize(true, $sxe->addChild('practiceSetting'));
        if (null !== $this->sourcePatientInfo) $this->sourcePatientInfo->xmlSerialize(true, $sxe->addChild('sourcePatientInfo'));
        if (0 < count($this->related)) {
            foreach($this->related as $related) {
                $related->xmlSerialize(true, $sxe->addChild('related'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}