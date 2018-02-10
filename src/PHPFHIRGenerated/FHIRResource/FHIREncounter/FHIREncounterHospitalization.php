<?php namespace PHPFHIRGenerated\FHIRResource\FHIREncounter;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * An interaction between a patient and healthcare provider(s) for the purpose of providing healthcare service(s) or assessing the health status of a patient.
 */
class FHIREncounterHospitalization extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Pre-admission identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $preAdmissionIdentifier = null;

    /**
     * The location from which the patient came before admission.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $origin = null;

    /**
     * From where patient was admitted (physician referral, transfer).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $admitSource = null;

    /**
     * Period during which the patient was admitted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * Where the patient stays during this encounter.
     * @var \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterAccomodation[]
     */
    public $accomodation = array();

    /**
     * Dietary restrictions for the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $diet = null;

    /**
     * Special courtesies (VIP, board member).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $specialCourtesy = array();

    /**
     * Wheelchair, translator, stretcher, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $specialArrangement = array();

    /**
     * Location to which the patient is discharged.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $destination = null;

    /**
     * Category or kind of location after discharge.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $dischargeDisposition = null;

    /**
     * The final diagnosis given a patient before release from the hospital after all testing, surgery, and workup are complete.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $dischargeDiagnosis = null;

    /**
     * Whether this hospitalization is a readmission.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $reAdmission = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Encounter.Hospitalization';

    /**
     * Pre-admission identifier.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getPreAdmissionIdentifier()
    {
        return $this->preAdmissionIdentifier;
    }

    /**
     * Pre-admission identifier.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $preAdmissionIdentifier
     * @return $this
     */
    public function setPreAdmissionIdentifier($preAdmissionIdentifier)
    {
        $this->preAdmissionIdentifier = $preAdmissionIdentifier;
        return $this;
    }

    /**
     * The location from which the patient came before admission.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * The location from which the patient came before admission.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $origin
     * @return $this
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * From where patient was admitted (physician referral, transfer).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAdmitSource()
    {
        return $this->admitSource;
    }

    /**
     * From where patient was admitted (physician referral, transfer).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $admitSource
     * @return $this
     */
    public function setAdmitSource($admitSource)
    {
        $this->admitSource = $admitSource;
        return $this;
    }

    /**
     * Period during which the patient was admitted.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Period during which the patient was admitted.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Where the patient stays during this encounter.
     * @return \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterAccomodation[]
     */
    public function getAccomodation()
    {
        return $this->accomodation;
    }

    /**
     * Where the patient stays during this encounter.
     * @param \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterAccomodation $accomodation
     * @return $this
     */
    public function addAccomodation($accomodation)
    {
        $this->accomodation[] = $accomodation;
        return $this;
    }

    /**
     * Dietary restrictions for the patient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDiet()
    {
        return $this->diet;
    }

    /**
     * Dietary restrictions for the patient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $diet
     * @return $this
     */
    public function setDiet($diet)
    {
        $this->diet = $diet;
        return $this;
    }

    /**
     * Special courtesies (VIP, board member).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSpecialCourtesy()
    {
        return $this->specialCourtesy;
    }

    /**
     * Special courtesies (VIP, board member).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $specialCourtesy
     * @return $this
     */
    public function addSpecialCourtesy($specialCourtesy)
    {
        $this->specialCourtesy[] = $specialCourtesy;
        return $this;
    }

    /**
     * Wheelchair, translator, stretcher, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSpecialArrangement()
    {
        return $this->specialArrangement;
    }

    /**
     * Wheelchair, translator, stretcher, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $specialArrangement
     * @return $this
     */
    public function addSpecialArrangement($specialArrangement)
    {
        $this->specialArrangement[] = $specialArrangement;
        return $this;
    }

    /**
     * Location to which the patient is discharged.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Location to which the patient is discharged.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $destination
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * Category or kind of location after discharge.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDischargeDisposition()
    {
        return $this->dischargeDisposition;
    }

    /**
     * Category or kind of location after discharge.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $dischargeDisposition
     * @return $this
     */
    public function setDischargeDisposition($dischargeDisposition)
    {
        $this->dischargeDisposition = $dischargeDisposition;
        return $this;
    }

    /**
     * The final diagnosis given a patient before release from the hospital after all testing, surgery, and workup are complete.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getDischargeDiagnosis()
    {
        return $this->dischargeDiagnosis;
    }

    /**
     * The final diagnosis given a patient before release from the hospital after all testing, surgery, and workup are complete.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $dischargeDiagnosis
     * @return $this
     */
    public function setDischargeDiagnosis($dischargeDiagnosis)
    {
        $this->dischargeDiagnosis = $dischargeDiagnosis;
        return $this;
    }

    /**
     * Whether this hospitalization is a readmission.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getReAdmission()
    {
        return $this->reAdmission;
    }

    /**
     * Whether this hospitalization is a readmission.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $reAdmission
     * @return $this
     */
    public function setReAdmission($reAdmission)
    {
        $this->reAdmission = $reAdmission;
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
        if (null !== $this->preAdmissionIdentifier) $json['preAdmissionIdentifier'] = $this->preAdmissionIdentifier;
        if (null !== $this->origin) $json['origin'] = $this->origin;
        if (null !== $this->admitSource) $json['admitSource'] = $this->admitSource;
        if (null !== $this->period) $json['period'] = $this->period;
        if (0 < count($this->accomodation)) {
            $json['accomodation'] = [];
            foreach($this->accomodation as $accomodation) {
                $json['accomodation'][] = $accomodation;
            }
        }
        if (null !== $this->diet) $json['diet'] = $this->diet;
        if (0 < count($this->specialCourtesy)) {
            $json['specialCourtesy'] = [];
            foreach($this->specialCourtesy as $specialCourtesy) {
                $json['specialCourtesy'][] = $specialCourtesy;
            }
        }
        if (0 < count($this->specialArrangement)) {
            $json['specialArrangement'] = [];
            foreach($this->specialArrangement as $specialArrangement) {
                $json['specialArrangement'][] = $specialArrangement;
            }
        }
        if (null !== $this->destination) $json['destination'] = $this->destination;
        if (null !== $this->dischargeDisposition) $json['dischargeDisposition'] = $this->dischargeDisposition;
        if (null !== $this->dischargeDiagnosis) $json['dischargeDiagnosis'] = $this->dischargeDiagnosis;
        if (null !== $this->reAdmission) $json['reAdmission'] = $this->reAdmission;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<EncounterHospitalization xmlns="http://hl7.org/fhir"></EncounterHospitalization>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->preAdmissionIdentifier) $this->preAdmissionIdentifier->xmlSerialize(true, $sxe->addChild('preAdmissionIdentifier'));
        if (null !== $this->origin) $this->origin->xmlSerialize(true, $sxe->addChild('origin'));
        if (null !== $this->admitSource) $this->admitSource->xmlSerialize(true, $sxe->addChild('admitSource'));
        if (null !== $this->period) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (0 < count($this->accomodation)) {
            foreach($this->accomodation as $accomodation) {
                $accomodation->xmlSerialize(true, $sxe->addChild('accomodation'));
            }
        }
        if (null !== $this->diet) $this->diet->xmlSerialize(true, $sxe->addChild('diet'));
        if (0 < count($this->specialCourtesy)) {
            foreach($this->specialCourtesy as $specialCourtesy) {
                $specialCourtesy->xmlSerialize(true, $sxe->addChild('specialCourtesy'));
            }
        }
        if (0 < count($this->specialArrangement)) {
            foreach($this->specialArrangement as $specialArrangement) {
                $specialArrangement->xmlSerialize(true, $sxe->addChild('specialArrangement'));
            }
        }
        if (null !== $this->destination) $this->destination->xmlSerialize(true, $sxe->addChild('destination'));
        if (null !== $this->dischargeDisposition) $this->dischargeDisposition->xmlSerialize(true, $sxe->addChild('dischargeDisposition'));
        if (null !== $this->dischargeDiagnosis) $this->dischargeDiagnosis->xmlSerialize(true, $sxe->addChild('dischargeDiagnosis'));
        if (null !== $this->reAdmission) $this->reAdmission->xmlSerialize(true, $sxe->addChild('reAdmission'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}