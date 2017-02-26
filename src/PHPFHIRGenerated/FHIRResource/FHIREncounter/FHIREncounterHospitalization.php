<?php namespace PHPFHIRGenerated\FHIRResource\FHIREncounter;

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
 *   Generated on Tue, Dec 6, 2016 12:22+1100 for FHIR v1.8.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
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
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $origin = null;

    /**
     * From where patient was admitted (physician referral, transfer).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $admitSource = null;

    /**
     * The admitting diagnosis field is used to record the diagnosis codes as reported by admitting practitioner. This could be different or in addition to the conditions reported as reason-condition(s) for the encounter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $admittingDiagnosis = array();

    /**
     * Whether this hospitalization is a readmission and why if known.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reAdmission = null;

    /**
     * Diet preferences reported by the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $dietPreference = array();

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
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $destination = null;

    /**
     * Category or kind of location after discharge.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $dischargeDisposition = null;

    /**
     * The final diagnosis given a patient before release from the hospital after all testing, surgery, and workup are complete.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $dischargeDiagnosis = array();

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
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * The location from which the patient came before admission.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $origin
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
     * The admitting diagnosis field is used to record the diagnosis codes as reported by admitting practitioner. This could be different or in addition to the conditions reported as reason-condition(s) for the encounter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAdmittingDiagnosis()
    {
        return $this->admittingDiagnosis;
    }

    /**
     * The admitting diagnosis field is used to record the diagnosis codes as reported by admitting practitioner. This could be different or in addition to the conditions reported as reason-condition(s) for the encounter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $admittingDiagnosis
     * @return $this
     */
    public function addAdmittingDiagnosis($admittingDiagnosis)
    {
        $this->admittingDiagnosis[] = $admittingDiagnosis;
        return $this;
    }

    /**
     * Whether this hospitalization is a readmission and why if known.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReAdmission()
    {
        return $this->reAdmission;
    }

    /**
     * Whether this hospitalization is a readmission and why if known.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reAdmission
     * @return $this
     */
    public function setReAdmission($reAdmission)
    {
        $this->reAdmission = $reAdmission;
        return $this;
    }

    /**
     * Diet preferences reported by the patient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getDietPreference()
    {
        return $this->dietPreference;
    }

    /**
     * Diet preferences reported by the patient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $dietPreference
     * @return $this
     */
    public function addDietPreference($dietPreference)
    {
        $this->dietPreference[] = $dietPreference;
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
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Location to which the patient is discharged.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $destination
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
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getDischargeDiagnosis()
    {
        return $this->dischargeDiagnosis;
    }

    /**
     * The final diagnosis given a patient before release from the hospital after all testing, surgery, and workup are complete.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $dischargeDiagnosis
     * @return $this
     */
    public function addDischargeDiagnosis($dischargeDiagnosis)
    {
        $this->dischargeDiagnosis[] = $dischargeDiagnosis;
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
        if (null !== $this->preAdmissionIdentifier) $json['preAdmissionIdentifier'] = json_encode($this->preAdmissionIdentifier);
        if (null !== $this->origin) $json['origin'] = json_encode($this->origin);
        if (null !== $this->admitSource) $json['admitSource'] = json_encode($this->admitSource);
        if (0 < count($this->admittingDiagnosis)) {
            $json['admittingDiagnosis'] = [];
            foreach($this->admittingDiagnosis as $admittingDiagnosis) {
                $json['admittingDiagnosis'][] = json_encode($admittingDiagnosis);
            }
        }
        if (null !== $this->reAdmission) $json['reAdmission'] = json_encode($this->reAdmission);
        if (0 < count($this->dietPreference)) {
            $json['dietPreference'] = [];
            foreach($this->dietPreference as $dietPreference) {
                $json['dietPreference'][] = json_encode($dietPreference);
            }
        }
        if (0 < count($this->specialCourtesy)) {
            $json['specialCourtesy'] = [];
            foreach($this->specialCourtesy as $specialCourtesy) {
                $json['specialCourtesy'][] = json_encode($specialCourtesy);
            }
        }
        if (0 < count($this->specialArrangement)) {
            $json['specialArrangement'] = [];
            foreach($this->specialArrangement as $specialArrangement) {
                $json['specialArrangement'][] = json_encode($specialArrangement);
            }
        }
        if (null !== $this->destination) $json['destination'] = json_encode($this->destination);
        if (null !== $this->dischargeDisposition) $json['dischargeDisposition'] = json_encode($this->dischargeDisposition);
        if (0 < count($this->dischargeDiagnosis)) {
            $json['dischargeDiagnosis'] = [];
            foreach($this->dischargeDiagnosis as $dischargeDiagnosis) {
                $json['dischargeDiagnosis'][] = json_encode($dischargeDiagnosis);
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<EncounterHospitalization xmlns="http://hl7.org/fhir"></EncounterHospitalization>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->preAdmissionIdentifier) $this->preAdmissionIdentifier->xmlSerialize(true, $sxe->addChild('preAdmissionIdentifier'));
        if (null !== $this->origin) $this->origin->xmlSerialize(true, $sxe->addChild('origin'));
        if (null !== $this->admitSource) $this->admitSource->xmlSerialize(true, $sxe->addChild('admitSource'));
        if (0 < count($this->admittingDiagnosis)) {
            foreach($this->admittingDiagnosis as $admittingDiagnosis) {
                $admittingDiagnosis->xmlSerialize(true, $sxe->addChild('admittingDiagnosis'));
            }
        }
        if (null !== $this->reAdmission) $this->reAdmission->xmlSerialize(true, $sxe->addChild('reAdmission'));
        if (0 < count($this->dietPreference)) {
            foreach($this->dietPreference as $dietPreference) {
                $dietPreference->xmlSerialize(true, $sxe->addChild('dietPreference'));
            }
        }
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
        if (0 < count($this->dischargeDiagnosis)) {
            foreach($this->dischargeDiagnosis as $dischargeDiagnosis) {
                $dischargeDiagnosis->xmlSerialize(true, $sxe->addChild('dischargeDiagnosis'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}