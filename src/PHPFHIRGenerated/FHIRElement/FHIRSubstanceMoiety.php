<?php namespace PHPFHIRGenerated\FHIRElement;

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

use PHPFHIRGenerated\FHIRElement;

/**
 * Chemical substances are a single substance type whose primary defining element is the molecular structure. Chemical substances shall be defined on the basis of their complete covalent molecular structure; the presence of a salt (counter-ion) and/or solvates (water, alcohols) is also captured. Purity, grade, physical form or particle size are not taken into account in the definition of a chemical substance or in the assignment of a Substance ID.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRSubstanceMoiety extends FHIRElement implements \JsonSerializable
{
    /**
     * The role of the moiety should be specified if there is a specific role the moiety is playing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $role = null;

    /**
     * The unique identifier assigned to the substance representing the moiety based on the ISO 11238 substance controlled vocabulary.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The name of the moiety shall be provided.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Stereochemistry shall be captured as described in 4.7.1.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $stereochemistry = null;

    /**
     * Optical activity shall be captured as described in 4.7.2.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $opticalActivity = null;

    /**
     * Molecular formula shall be captured as described in 4.7.3.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $molecularFormula = null;

    /**
     * Used to capture quantitative values for a variety of elements. If only limits are given, the arithmetic mean would be the average. If only a single definite value for a given element is given, it would be captured in this field.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSubstanceAmount
     */
    public $amount = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'SubstanceMoiety';

    /**
     * The role of the moiety should be specified if there is a specific role the moiety is playing.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRole() {
        return $this->role;
    }

    /**
     * The role of the moiety should be specified if there is a specific role the moiety is playing.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $role
     * @return $this
     */
    public function setRole($role) {
        $this->role = $role;
        return $this;
    }

    /**
     * The unique identifier assigned to the substance representing the moiety based on the ISO 11238 substance controlled vocabulary.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * The unique identifier assigned to the substance representing the moiety based on the ISO 11238 substance controlled vocabulary.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier) {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The name of the moiety shall be provided.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName() {
        return $this->name;
    }

    /**
     * The name of the moiety shall be provided.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Stereochemistry shall be captured as described in 4.7.1.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getStereochemistry() {
        return $this->stereochemistry;
    }

    /**
     * Stereochemistry shall be captured as described in 4.7.1.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $stereochemistry
     * @return $this
     */
    public function setStereochemistry($stereochemistry) {
        $this->stereochemistry = $stereochemistry;
        return $this;
    }

    /**
     * Optical activity shall be captured as described in 4.7.2.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getOpticalActivity() {
        return $this->opticalActivity;
    }

    /**
     * Optical activity shall be captured as described in 4.7.2.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $opticalActivity
     * @return $this
     */
    public function setOpticalActivity($opticalActivity) {
        $this->opticalActivity = $opticalActivity;
        return $this;
    }

    /**
     * Molecular formula shall be captured as described in 4.7.3.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getMolecularFormula() {
        return $this->molecularFormula;
    }

    /**
     * Molecular formula shall be captured as described in 4.7.3.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $molecularFormula
     * @return $this
     */
    public function setMolecularFormula($molecularFormula) {
        $this->molecularFormula = $molecularFormula;
        return $this;
    }

    /**
     * Used to capture quantitative values for a variety of elements. If only limits are given, the arithmetic mean would be the average. If only a single definite value for a given element is given, it would be captured in this field.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSubstanceAmount
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * Used to capture quantitative values for a variety of elements. If only limits are given, the arithmetic mean would be the average. If only a single definite value for a given element is given, it would be captured in this field.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSubstanceAmount $amount
     * @return $this
     */
    public function setAmount($amount) {
        $this->amount = $amount;
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
            if (isset($data['role'])) {
                $this->setRole($data['role']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['stereochemistry'])) {
                $this->setStereochemistry($data['stereochemistry']);
            }
            if (isset($data['opticalActivity'])) {
                $this->setOpticalActivity($data['opticalActivity']);
            }
            if (isset($data['molecularFormula'])) {
                $this->setMolecularFormula($data['molecularFormula']);
            }
            if (isset($data['amount'])) {
                $this->setAmount($data['amount']);
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
        if (isset($this->role)) $json['role'] = $this->role;
        if (isset($this->identifier)) $json['identifier'] = $this->identifier;
        if (isset($this->name)) $json['name'] = $this->name;
        if (isset($this->stereochemistry)) $json['stereochemistry'] = $this->stereochemistry;
        if (isset($this->opticalActivity)) $json['opticalActivity'] = $this->opticalActivity;
        if (isset($this->molecularFormula)) $json['molecularFormula'] = $this->molecularFormula;
        if (isset($this->amount)) $json['amount'] = $this->amount;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<SubstanceMoiety xmlns="http://hl7.org/fhir"></SubstanceMoiety>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->role)) $this->role->xmlSerialize(true, $sxe->addChild('role'));
        if (isset($this->identifier)) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (isset($this->name)) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (isset($this->stereochemistry)) $this->stereochemistry->xmlSerialize(true, $sxe->addChild('stereochemistry'));
        if (isset($this->opticalActivity)) $this->opticalActivity->xmlSerialize(true, $sxe->addChild('opticalActivity'));
        if (isset($this->molecularFormula)) $this->molecularFormula->xmlSerialize(true, $sxe->addChild('molecularFormula'));
        if (isset($this->amount)) $this->amount->xmlSerialize(true, $sxe->addChild('amount'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}