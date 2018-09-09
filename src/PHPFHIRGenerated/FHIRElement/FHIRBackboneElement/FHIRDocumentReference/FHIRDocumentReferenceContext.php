<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRReference;

/**
 * A reference to a document.
 *
 * Class FHIRDocumentReferenceContext
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference
 */
class FHIRDocumentReferenceContext extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'DocumentReference.Context';

    /**
     * Describes the clinical encounter or type of care that the document content is associated with.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * This list of codes represents the main clinical acts, such as a colonoscopy or an appendectomy, being documented. In some cases, the event is inherent in the type code, such as a "History and Physical Report" in which the procedure being documented is necessarily a "History and Physical" act.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $event = null;

    /**
     * The kind of facility where the patient was seen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $facilityType = null;

    /**
     * The time period over which the service that is described by the document was provided.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * This property may convey specifics about the practice setting where the content was created, often reflecting the clinical specialty.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $practiceSetting = null;

    /**
     * Related identifiers or resources associated with the DocumentReference.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $related = null;

    /**
     * The Patient Information as known when the document was published. May be a reference to a version specific, or contained.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $sourcePatientInfo = null;

    /**
     * FHIRDocumentReferenceContext Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['encounter'])) {
                $this->setEncounter($data['encounter']);
            }
            if (isset($data['event'])) {
                $this->setEvent($data['event']);
            }
            if (isset($data['facilityType'])) {
                $this->setFacilityType($data['facilityType']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['practiceSetting'])) {
                $this->setPracticeSetting($data['practiceSetting']);
            }
            if (isset($data['related'])) {
                $this->setRelated($data['related']);
            }
            if (isset($data['sourcePatientInfo'])) {
                $this->setSourcePatientInfo($data['sourcePatientInfo']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Describes the clinical encounter or type of care that the document content is associated with.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setEncounter(FHIRReference $encounter = null)
    {
        if (null === $encounter) {
            return $this; 
        }
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Describes the clinical encounter or type of care that the document content is associated with.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }


    /**
     * This list of codes represents the main clinical acts, such as a colonoscopy or an appendectomy, being documented. In some cases, the event is inherent in the type code, such as a "History and Physical Report" in which the procedure being documented is necessarily a "History and Physical" act.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setEvent(FHIRCodeableConcept $event = null)
    {
        if (null === $event) {
            return $this; 
        }
        $this->event = $event;
        return $this;
    }

    /**
     * This list of codes represents the main clinical acts, such as a colonoscopy or an appendectomy, being documented. In some cases, the event is inherent in the type code, such as a "History and Physical Report" in which the procedure being documented is necessarily a "History and Physical" act.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getEvent()
    {
        return $this->event;
    }


    /**
     * The kind of facility where the patient was seen.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setFacilityType(FHIRCodeableConcept $facilityType = null)
    {
        if (null === $facilityType) {
            return $this; 
        }
        $this->facilityType = $facilityType;
        return $this;
    }

    /**
     * The kind of facility where the patient was seen.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getFacilityType()
    {
        return $this->facilityType;
    }


    /**
     * The time period over which the service that is described by the document was provided.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        if (null === $period) {
            return $this; 
        }
        $this->period = $period;
        return $this;
    }

    /**
     * The time period over which the service that is described by the document was provided.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }


    /**
     * This property may convey specifics about the practice setting where the content was created, often reflecting the clinical specialty.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setPracticeSetting(FHIRCodeableConcept $practiceSetting = null)
    {
        if (null === $practiceSetting) {
            return $this; 
        }
        $this->practiceSetting = $practiceSetting;
        return $this;
    }

    /**
     * This property may convey specifics about the practice setting where the content was created, often reflecting the clinical specialty.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPracticeSetting()
    {
        return $this->practiceSetting;
    }


    /**
     * Related identifiers or resources associated with the DocumentReference.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setRelated(FHIRReference $related = null)
    {
        if (null === $related) {
            return $this; 
        }
        $this->related = $related;
        return $this;
    }

    /**
     * Related identifiers or resources associated with the DocumentReference.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRelated()
    {
        return $this->related;
    }


    /**
     * The Patient Information as known when the document was published. May be a reference to a version specific, or contained.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSourcePatientInfo(FHIRReference $sourcePatientInfo = null)
    {
        if (null === $sourcePatientInfo) {
            return $this; 
        }
        $this->sourcePatientInfo = $sourcePatientInfo;
        return $this;
    }

    /**
     * The Patient Information as known when the document was published. May be a reference to a version specific, or contained.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSourcePatientInfo()
    {
        return $this->sourcePatientInfo;
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
        if (null !== ($v = $this->getEncounter())) {
            $a['encounter'] = $v;
        }
        if (null !== ($v = $this->getEvent())) {
            $a['event'] = $v;
        }
        if (null !== ($v = $this->getFacilityType())) {
            $a['facilityType'] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a['period'] = $v;
        }
        if (null !== ($v = $this->getPracticeSetting())) {
            $a['practiceSetting'] = $v;
        }
        if (null !== ($v = $this->getRelated())) {
            $a['related'] = $v;
        }
        if (null !== ($v = $this->getSourcePatientInfo())) {
            $a['sourcePatientInfo'] = $v;
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
            $sxe = new \SimpleXMLElement('<DocumentReferenceContext xmlns="http://hl7.org/fhir"></DocumentReferenceContext>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}