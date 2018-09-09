<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge;

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
use PHPFHIRGenerated\FHIRElement\FHIRReference;

/**
 * Information about a medication that is used to support knowledge.
 *
 * Class FHIRMedicationKnowledgeAdministrationGuidelines
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge
 */
class FHIRMedicationKnowledgeAdministrationGuidelines extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'MedicationKnowledge.AdministrationGuidelines';

    /**
     * Dosage for the medication for the specific guidelines.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage
     */
    public $dosage = null;

    /**
     * Indication for use that apply to the specific administration guidelines.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $indicationCodeableConcept = null;

    /**
     * Indication for use that apply to the specific administration guidelines.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $indicationReference = null;

    /**
     * Characteristics of the patient that are relevant to the administration guidelines (for example, height, weight,gender,  etc).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristics
     */
    public $patientCharacteristics = null;

    /**
     * FHIRMedicationKnowledgeAdministrationGuidelines Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['dosage'])) {
                $this->setDosage($data['dosage']);
            }
            if (isset($data['indicationCodeableConcept'])) {
                $this->setIndicationCodeableConcept($data['indicationCodeableConcept']);
            }
            if (isset($data['indicationReference'])) {
                $this->setIndicationReference($data['indicationReference']);
            }
            if (isset($data['patientCharacteristics'])) {
                $this->setPatientCharacteristics($data['patientCharacteristics']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeAdministrationGuidelines::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Dosage for the medication for the specific guidelines.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage
     * @return $this
     */
    public function setDosage(FHIRMedicationKnowledgeDosage $dosage = null)
    {
        if (null === $dosage) {
            return $this; 
        }
        $this->dosage = $dosage;
        return $this;
    }

    /**
     * Dosage for the medication for the specific guidelines.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage
     */
    public function getDosage()
    {
        return $this->dosage;
    }


    /**
     * Indication for use that apply to the specific administration guidelines.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setIndicationCodeableConcept(FHIRCodeableConcept $indicationCodeableConcept = null)
    {
        if (null === $indicationCodeableConcept) {
            return $this; 
        }
        $this->indicationCodeableConcept = $indicationCodeableConcept;
        return $this;
    }

    /**
     * Indication for use that apply to the specific administration guidelines.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getIndicationCodeableConcept()
    {
        return $this->indicationCodeableConcept;
    }


    /**
     * Indication for use that apply to the specific administration guidelines.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setIndicationReference(FHIRReference $indicationReference = null)
    {
        if (null === $indicationReference) {
            return $this; 
        }
        $this->indicationReference = $indicationReference;
        return $this;
    }

    /**
     * Indication for use that apply to the specific administration guidelines.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getIndicationReference()
    {
        return $this->indicationReference;
    }


    /**
     * Characteristics of the patient that are relevant to the administration guidelines (for example, height, weight,gender,  etc).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristics
     * @return $this
     */
    public function setPatientCharacteristics(FHIRMedicationKnowledgePatientCharacteristics $patientCharacteristics = null)
    {
        if (null === $patientCharacteristics) {
            return $this; 
        }
        $this->patientCharacteristics = $patientCharacteristics;
        return $this;
    }

    /**
     * Characteristics of the patient that are relevant to the administration guidelines (for example, height, weight,gender,  etc).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristics
     */
    public function getPatientCharacteristics()
    {
        return $this->patientCharacteristics;
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
        if (null !== ($v = $this->getDosage())) {
            $a['dosage'] = $v;
        }
        if (null !== ($v = $this->getIndicationCodeableConcept())) {
            $a['indicationCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getIndicationReference())) {
            $a['indicationReference'] = $v;
        }
        if (null !== ($v = $this->getPatientCharacteristics())) {
            $a['patientCharacteristics'] = $v;
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
            $sxe = new \SimpleXMLElement('<MedicationKnowledgeAdministrationGuidelines xmlns="http://hl7.org/fhir"></MedicationKnowledgeAdministrationGuidelines>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}