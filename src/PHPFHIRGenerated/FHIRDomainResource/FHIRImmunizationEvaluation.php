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
 * Describes a comparison of an immunization event against published recommendations to determine if the administration is "valid" in relation to those  recommendations.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRImmunizationEvaluation extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A unique identifier assigned to this immunization evaluation record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * Indicates the current status of the evaluation of the vaccination administration event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRImmunizationEvaluationStatusCodes
     */
    public $status = null;

    /**
     * The individual for whom the evaluation is being done.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The date the evaluation of the vaccine administration event was performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Indicates the authority who published the protocol (e.g. ACIP).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $authority = null;

    /**
     * The vaccine preventable disease the dose is being evaluated against.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $targetDisease = [];

    /**
     * The vaccine administration event being evaluated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $immunizationEvent = null;

    /**
     * Indicates if the dose is valid or not valid with respect to the published recommendations.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $doseStatus = null;

    /**
     * Provides an explanation as to why the vaccine administration event is valid or not relative to the published recommendations.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $doseStatusReason = [];

    /**
     * Additional information about the evaluation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $series = null;

    /**
     * Nominal position in a series.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $doseNumber = null;

    /**
     * The recommended number of doses to achieve immunity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $seriesDoses = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ImmunizationEvaluation';

    /**
     * A unique identifier assigned to this immunization evaluation record.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * A unique identifier assigned to this immunization evaluation record.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Indicates the current status of the evaluation of the vaccination administration event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRImmunizationEvaluationStatusCodes
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Indicates the current status of the evaluation of the vaccination administration event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRImmunizationEvaluationStatusCodes $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * The individual for whom the evaluation is being done.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient() {
        return $this->patient;
    }

    /**
     * The individual for whom the evaluation is being done.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient) {
        $this->patient = $patient;
        return $this;
    }

    /**
     * The date the evaluation of the vaccine administration event was performed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * The date the evaluation of the vaccine administration event was performed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date) {
        $this->date = $date;
        return $this;
    }

    /**
     * Indicates the authority who published the protocol (e.g. ACIP).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAuthority() {
        return $this->authority;
    }

    /**
     * Indicates the authority who published the protocol (e.g. ACIP).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $authority
     * @return $this
     */
    public function setAuthority($authority) {
        $this->authority = $authority;
        return $this;
    }

    /**
     * The vaccine preventable disease the dose is being evaluated against.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getTargetDisease() {
        return $this->targetDisease;
    }

    /**
     * The vaccine preventable disease the dose is being evaluated against.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $targetDisease
     * @return $this
     */
    public function addTargetDisease($targetDisease) {
        $this->targetDisease[] = $targetDisease;
        return $this;
    }

    /**
     * The vaccine administration event being evaluated.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getImmunizationEvent() {
        return $this->immunizationEvent;
    }

    /**
     * The vaccine administration event being evaluated.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $immunizationEvent
     * @return $this
     */
    public function setImmunizationEvent($immunizationEvent) {
        $this->immunizationEvent = $immunizationEvent;
        return $this;
    }

    /**
     * Indicates if the dose is valid or not valid with respect to the published recommendations.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDoseStatus() {
        return $this->doseStatus;
    }

    /**
     * Indicates if the dose is valid or not valid with respect to the published recommendations.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $doseStatus
     * @return $this
     */
    public function setDoseStatus($doseStatus) {
        $this->doseStatus = $doseStatus;
        return $this;
    }

    /**
     * Provides an explanation as to why the vaccine administration event is valid or not relative to the published recommendations.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getDoseStatusReason() {
        return $this->doseStatusReason;
    }

    /**
     * Provides an explanation as to why the vaccine administration event is valid or not relative to the published recommendations.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $doseStatusReason
     * @return $this
     */
    public function addDoseStatusReason($doseStatusReason) {
        $this->doseStatusReason[] = $doseStatusReason;
        return $this;
    }

    /**
     * Additional information about the evaluation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Additional information about the evaluation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSeries() {
        return $this->series;
    }

    /**
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $series
     * @return $this
     */
    public function setSeries($series) {
        $this->series = $series;
        return $this;
    }

    /**
     * Nominal position in a series.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getDoseNumber() {
        return $this->doseNumber;
    }

    /**
     * Nominal position in a series.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $doseNumber
     * @return $this
     */
    public function setDoseNumber($doseNumber) {
        $this->doseNumber = $doseNumber;
        return $this;
    }

    /**
     * The recommended number of doses to achieve immunity.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getSeriesDoses() {
        return $this->seriesDoses;
    }

    /**
     * The recommended number of doses to achieve immunity.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $seriesDoses
     * @return $this
     */
    public function setSeriesDoses($seriesDoses) {
        $this->seriesDoses = $seriesDoses;
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
            if (isset($data['patient'])) {
                $this->setPatient($data['patient']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['authority'])) {
                $this->setAuthority($data['authority']);
            }
            if (isset($data['targetDisease'])) {
                if (is_array($data['targetDisease'])) {
                    foreach($data['targetDisease'] as $d) {
                        $this->addTargetDisease($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"targetDisease" must be array of objects or null, '.gettype($data['targetDisease']).' seen.');
                }
            }
            if (isset($data['immunizationEvent'])) {
                $this->setImmunizationEvent($data['immunizationEvent']);
            }
            if (isset($data['doseStatus'])) {
                $this->setDoseStatus($data['doseStatus']);
            }
            if (isset($data['doseStatusReason'])) {
                if (is_array($data['doseStatusReason'])) {
                    foreach($data['doseStatusReason'] as $d) {
                        $this->addDoseStatusReason($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"doseStatusReason" must be array of objects or null, '.gettype($data['doseStatusReason']).' seen.');
                }
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['series'])) {
                $this->setSeries($data['series']);
            }
            if (isset($data['doseNumber'])) {
                $this->setDoseNumber($data['doseNumber']);
            }
            if (isset($data['seriesDoses'])) {
                $this->setSeriesDoses($data['seriesDoses']);
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
        if (isset($this->patient)) $json['patient'] = $this->patient;
        if (isset($this->date)) $json['date'] = $this->date;
        if (isset($this->authority)) $json['authority'] = $this->authority;
        if (0 < count($this->targetDisease)) {
            $json['targetDisease'] = [];
            foreach($this->targetDisease as $targetDisease) {
                if (null !== $targetDisease) $json['targetDisease'][] = $targetDisease;
            }
        }
        if (isset($this->immunizationEvent)) $json['immunizationEvent'] = $this->immunizationEvent;
        if (isset($this->doseStatus)) $json['doseStatus'] = $this->doseStatus;
        if (0 < count($this->doseStatusReason)) {
            $json['doseStatusReason'] = [];
            foreach($this->doseStatusReason as $doseStatusReason) {
                if (null !== $doseStatusReason) $json['doseStatusReason'][] = $doseStatusReason;
            }
        }
        if (isset($this->description)) $json['description'] = $this->description;
        if (isset($this->series)) $json['series'] = $this->series;
        if (isset($this->doseNumber)) $json['doseNumber'] = $this->doseNumber;
        if (isset($this->seriesDoses)) $json['seriesDoses'] = $this->seriesDoses;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ImmunizationEvaluation xmlns="http://hl7.org/fhir"></ImmunizationEvaluation>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->patient)) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (isset($this->date)) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (isset($this->authority)) $this->authority->xmlSerialize(true, $sxe->addChild('authority'));
        if (0 < count($this->targetDisease)) {
            foreach($this->targetDisease as $targetDisease) {
                $targetDisease->xmlSerialize(true, $sxe->addChild('targetDisease'));
            }
        }
        if (isset($this->immunizationEvent)) $this->immunizationEvent->xmlSerialize(true, $sxe->addChild('immunizationEvent'));
        if (isset($this->doseStatus)) $this->doseStatus->xmlSerialize(true, $sxe->addChild('doseStatus'));
        if (0 < count($this->doseStatusReason)) {
            foreach($this->doseStatusReason as $doseStatusReason) {
                $doseStatusReason->xmlSerialize(true, $sxe->addChild('doseStatusReason'));
            }
        }
        if (isset($this->description)) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (isset($this->series)) $this->series->xmlSerialize(true, $sxe->addChild('series'));
        if (isset($this->doseNumber)) $this->doseNumber->xmlSerialize(true, $sxe->addChild('doseNumber'));
        if (isset($this->seriesDoses)) $this->seriesDoses->xmlSerialize(true, $sxe->addChild('seriesDoses'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}