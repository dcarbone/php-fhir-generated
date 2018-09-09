<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREncounter;

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
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;

/**
 * An interaction between a patient and healthcare provider(s) for the purpose of providing healthcare service(s) or assessing the health status of a patient.
 *
 * Class FHIREncounterHospitalization
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREncounter
 */
class FHIREncounterHospitalization extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Encounter.Hospitalization';

    /**
     * From where patient was admitted (physician referral, transfer).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $admitSource = null;

    /**
     * Location/organization to which the patient is discharged.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $destination = null;

    /**
     * Diet preferences reported by the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $dietPreference = null;

    /**
     * Category or kind of location after discharge.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $dischargeDisposition = null;

    /**
     * The location/organization from which the patient came before admission.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $origin = null;

    /**
     * Pre-admission identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $preAdmissionIdentifier = null;

    /**
     * Whether this hospitalization is a readmission and why if known.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reAdmission = null;

    /**
     * Any special requests that have been made for this hospitalization encounter, such as the provision of specific equipment or other things.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $specialArrangement = null;

    /**
     * Special courtesies (VIP, board member).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $specialCourtesy = null;

    /**
     * FHIREncounterHospitalization Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['admitSource'])) {
                $this->setAdmitSource($data['admitSource']);
            }
            if (isset($data['destination'])) {
                $this->setDestination($data['destination']);
            }
            if (isset($data['dietPreference'])) {
                $this->setDietPreference($data['dietPreference']);
            }
            if (isset($data['dischargeDisposition'])) {
                $this->setDischargeDisposition($data['dischargeDisposition']);
            }
            if (isset($data['origin'])) {
                $this->setOrigin($data['origin']);
            }
            if (isset($data['preAdmissionIdentifier'])) {
                $this->setPreAdmissionIdentifier($data['preAdmissionIdentifier']);
            }
            if (isset($data['reAdmission'])) {
                $this->setReAdmission($data['reAdmission']);
            }
            if (isset($data['specialArrangement'])) {
                $this->setSpecialArrangement($data['specialArrangement']);
            }
            if (isset($data['specialCourtesy'])) {
                $this->setSpecialCourtesy($data['specialCourtesy']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * From where patient was admitted (physician referral, transfer).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setAdmitSource(FHIRCodeableConcept $admitSource = null)
    {
        if (null === $admitSource) {
            return $this; 
        }
        $this->admitSource = $admitSource;
        return $this;
    }

    /**
     * From where patient was admitted (physician referral, transfer).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAdmitSource()
    {
        return $this->admitSource;
    }


    /**
     * Location/organization to which the patient is discharged.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setDestination(FHIRReference $destination = null)
    {
        if (null === $destination) {
            return $this; 
        }
        $this->destination = $destination;
        return $this;
    }

    /**
     * Location/organization to which the patient is discharged.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDestination()
    {
        return $this->destination;
    }


    /**
     * Diet preferences reported by the patient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setDietPreference(FHIRCodeableConcept $dietPreference = null)
    {
        if (null === $dietPreference) {
            return $this; 
        }
        $this->dietPreference = $dietPreference;
        return $this;
    }

    /**
     * Diet preferences reported by the patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDietPreference()
    {
        return $this->dietPreference;
    }


    /**
     * Category or kind of location after discharge.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setDischargeDisposition(FHIRCodeableConcept $dischargeDisposition = null)
    {
        if (null === $dischargeDisposition) {
            return $this; 
        }
        $this->dischargeDisposition = $dischargeDisposition;
        return $this;
    }

    /**
     * Category or kind of location after discharge.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDischargeDisposition()
    {
        return $this->dischargeDisposition;
    }


    /**
     * The location/organization from which the patient came before admission.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setOrigin(FHIRReference $origin = null)
    {
        if (null === $origin) {
            return $this; 
        }
        $this->origin = $origin;
        return $this;
    }

    /**
     * The location/organization from which the patient came before admission.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrigin()
    {
        return $this->origin;
    }


    /**
     * Pre-admission identifier.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setPreAdmissionIdentifier(FHIRIdentifier $preAdmissionIdentifier = null)
    {
        if (null === $preAdmissionIdentifier) {
            return $this; 
        }
        $this->preAdmissionIdentifier = $preAdmissionIdentifier;
        return $this;
    }

    /**
     * Pre-admission identifier.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getPreAdmissionIdentifier()
    {
        return $this->preAdmissionIdentifier;
    }


    /**
     * Whether this hospitalization is a readmission and why if known.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setReAdmission(FHIRCodeableConcept $reAdmission = null)
    {
        if (null === $reAdmission) {
            return $this; 
        }
        $this->reAdmission = $reAdmission;
        return $this;
    }

    /**
     * Whether this hospitalization is a readmission and why if known.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReAdmission()
    {
        return $this->reAdmission;
    }


    /**
     * Any special requests that have been made for this hospitalization encounter, such as the provision of specific equipment or other things.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setSpecialArrangement(FHIRCodeableConcept $specialArrangement = null)
    {
        if (null === $specialArrangement) {
            return $this; 
        }
        $this->specialArrangement = $specialArrangement;
        return $this;
    }

    /**
     * Any special requests that have been made for this hospitalization encounter, such as the provision of specific equipment or other things.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSpecialArrangement()
    {
        return $this->specialArrangement;
    }


    /**
     * Special courtesies (VIP, board member).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setSpecialCourtesy(FHIRCodeableConcept $specialCourtesy = null)
    {
        if (null === $specialCourtesy) {
            return $this; 
        }
        $this->specialCourtesy = $specialCourtesy;
        return $this;
    }

    /**
     * Special courtesies (VIP, board member).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSpecialCourtesy()
    {
        return $this->specialCourtesy;
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
        if (null !== ($v = $this->getAdmitSource())) {
            $a['admitSource'] = $v;
        }
        if (null !== ($v = $this->getDestination())) {
            $a['destination'] = $v;
        }
        if (null !== ($v = $this->getDietPreference())) {
            $a['dietPreference'] = $v;
        }
        if (null !== ($v = $this->getDischargeDisposition())) {
            $a['dischargeDisposition'] = $v;
        }
        if (null !== ($v = $this->getOrigin())) {
            $a['origin'] = $v;
        }
        if (null !== ($v = $this->getPreAdmissionIdentifier())) {
            $a['preAdmissionIdentifier'] = $v;
        }
        if (null !== ($v = $this->getReAdmission())) {
            $a['reAdmission'] = $v;
        }
        if (null !== ($v = $this->getSpecialArrangement())) {
            $a['specialArrangement'] = $v;
        }
        if (null !== ($v = $this->getSpecialCourtesy())) {
            $a['specialCourtesy'] = $v;
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
            $sxe = new \SimpleXMLElement('<EncounterHospitalization xmlns="http://hl7.org/fhir"></EncounterHospitalization>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}