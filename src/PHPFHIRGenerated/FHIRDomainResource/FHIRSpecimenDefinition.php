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
 * A kind of specimen with associated set of requirements.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRSpecimenDefinition extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A business identifier associated with the kind of specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The kind of material to be collected.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $typeCollected = null;

    /**
     * Preparation of the patient for specimen collection.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $patientPreparation = null;

    /**
     * Time aspect of specimen collection (duration or offset).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $timeAspect = null;

    /**
     * The action to be performed for collecting the specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $collection = [];

    /**
     * Specimen conditioned in a container as expected by the testing laboratory.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRSpecimenDefinition\FHIRSpecimenDefinitionSpecimenToLab[]
     */
    public $specimenToLab = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'SpecimenDefinition';

    /**
     * A business identifier associated with the kind of specimen.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * A business identifier associated with the kind of specimen.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier) {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The kind of material to be collected.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getTypeCollected() {
        return $this->typeCollected;
    }

    /**
     * The kind of material to be collected.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $typeCollected
     * @return $this
     */
    public function setTypeCollected($typeCollected) {
        $this->typeCollected = $typeCollected;
        return $this;
    }

    /**
     * Preparation of the patient for specimen collection.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPatientPreparation() {
        return $this->patientPreparation;
    }

    /**
     * Preparation of the patient for specimen collection.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $patientPreparation
     * @return $this
     */
    public function setPatientPreparation($patientPreparation) {
        $this->patientPreparation = $patientPreparation;
        return $this;
    }

    /**
     * Time aspect of specimen collection (duration or offset).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTimeAspect() {
        return $this->timeAspect;
    }

    /**
     * Time aspect of specimen collection (duration or offset).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $timeAspect
     * @return $this
     */
    public function setTimeAspect($timeAspect) {
        $this->timeAspect = $timeAspect;
        return $this;
    }

    /**
     * The action to be performed for collecting the specimen.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCollection() {
        return $this->collection;
    }

    /**
     * The action to be performed for collecting the specimen.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $collection
     * @return $this
     */
    public function addCollection($collection) {
        $this->collection[] = $collection;
        return $this;
    }

    /**
     * Specimen conditioned in a container as expected by the testing laboratory.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRSpecimenDefinition\FHIRSpecimenDefinitionSpecimenToLab[]
     */
    public function getSpecimenToLab() {
        return $this->specimenToLab;
    }

    /**
     * Specimen conditioned in a container as expected by the testing laboratory.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRSpecimenDefinition\FHIRSpecimenDefinitionSpecimenToLab $specimenToLab
     * @return $this
     */
    public function addSpecimenToLab($specimenToLab) {
        $this->specimenToLab[] = $specimenToLab;
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
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['typeCollected'])) {
                $this->setTypeCollected($data['typeCollected']);
            }
            if (isset($data['patientPreparation'])) {
                $this->setPatientPreparation($data['patientPreparation']);
            }
            if (isset($data['timeAspect'])) {
                $this->setTimeAspect($data['timeAspect']);
            }
            if (isset($data['collection'])) {
                if (is_array($data['collection'])) {
                    foreach($data['collection'] as $d) {
                        $this->addCollection($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"collection" must be array of objects or null, '.gettype($data['collection']).' seen.');
                }
            }
            if (isset($data['specimenToLab'])) {
                if (is_array($data['specimenToLab'])) {
                    foreach($data['specimenToLab'] as $d) {
                        $this->addSpecimenToLab($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"specimenToLab" must be array of objects or null, '.gettype($data['specimenToLab']).' seen.');
                }
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
        if (isset($this->identifier)) $json['identifier'] = $this->identifier;
        if (isset($this->typeCollected)) $json['typeCollected'] = $this->typeCollected;
        if (isset($this->patientPreparation)) $json['patientPreparation'] = $this->patientPreparation;
        if (isset($this->timeAspect)) $json['timeAspect'] = $this->timeAspect;
        if (0 < count($this->collection)) {
            $json['collection'] = [];
            foreach($this->collection as $collection) {
                if (null !== $collection) $json['collection'][] = $collection;
            }
        }
        if (0 < count($this->specimenToLab)) {
            $json['specimenToLab'] = [];
            foreach($this->specimenToLab as $specimenToLab) {
                if (null !== $specimenToLab) $json['specimenToLab'][] = $specimenToLab;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<SpecimenDefinition xmlns="http://hl7.org/fhir"></SpecimenDefinition>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->identifier)) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (isset($this->typeCollected)) $this->typeCollected->xmlSerialize(true, $sxe->addChild('typeCollected'));
        if (isset($this->patientPreparation)) $this->patientPreparation->xmlSerialize(true, $sxe->addChild('patientPreparation'));
        if (isset($this->timeAspect)) $this->timeAspect->xmlSerialize(true, $sxe->addChild('timeAspect'));
        if (0 < count($this->collection)) {
            foreach($this->collection as $collection) {
                $collection->xmlSerialize(true, $sxe->addChild('collection'));
            }
        }
        if (0 < count($this->specimenToLab)) {
            foreach($this->specimenToLab as $specimenToLab) {
                $specimenToLab->xmlSerialize(true, $sxe->addChild('specimenToLab'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}