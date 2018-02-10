<?php namespace PHPFHIRGenerated\FHIRResource\FHIRSubstanceSpecification;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * The detailed description of a substance, typically at a level beyond what is used for prescribing.
 */
class FHIRSubstanceSpecificationIsotope extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Substance identifier for each non-natural or radioisotope.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $nuclideId = null;

    /**
     * Substance name for each non-natural or radioisotope.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $nuclideName = null;

    /**
     * The type of isotopic substitution present in a single substance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $substitutionType = null;

    /**
     * Half life - for a non-natural nuclide.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $nuclideHalfLife = null;

    /**
     * Quantitative values for this isotope.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $amount = null;

    /**
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     * @var \PHPFHIRGenerated\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMolecularWeight
     */
    public $molecularWeight = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'SubstanceSpecification.Isotope';

    /**
     * Substance identifier for each non-natural or radioisotope.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getNuclideId() {
        return $this->nuclideId;
    }

    /**
     * Substance identifier for each non-natural or radioisotope.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $nuclideId
     * @return $this
     */
    public function setNuclideId($nuclideId) {
        $this->nuclideId = $nuclideId;
        return $this;
    }

    /**
     * Substance name for each non-natural or radioisotope.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getNuclideName() {
        return $this->nuclideName;
    }

    /**
     * Substance name for each non-natural or radioisotope.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $nuclideName
     * @return $this
     */
    public function setNuclideName($nuclideName) {
        $this->nuclideName = $nuclideName;
        return $this;
    }

    /**
     * The type of isotopic substitution present in a single substance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSubstitutionType() {
        return $this->substitutionType;
    }

    /**
     * The type of isotopic substitution present in a single substance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $substitutionType
     * @return $this
     */
    public function setSubstitutionType($substitutionType) {
        $this->substitutionType = $substitutionType;
        return $this;
    }

    /**
     * Half life - for a non-natural nuclide.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getNuclideHalfLife() {
        return $this->nuclideHalfLife;
    }

    /**
     * Half life - for a non-natural nuclide.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $nuclideHalfLife
     * @return $this
     */
    public function setNuclideHalfLife($nuclideHalfLife) {
        $this->nuclideHalfLife = $nuclideHalfLife;
        return $this;
    }

    /**
     * Quantitative values for this isotope.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * Quantitative values for this isotope.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $amount
     * @return $this
     */
    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }

    /**
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     * @return \PHPFHIRGenerated\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMolecularWeight
     */
    public function getMolecularWeight() {
        return $this->molecularWeight;
    }

    /**
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     * @param \PHPFHIRGenerated\FHIRResource\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMolecularWeight $molecularWeight
     * @return $this
     */
    public function setMolecularWeight($molecularWeight) {
        $this->molecularWeight = $molecularWeight;
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
            if (isset($data['nuclideId'])) {
                $this->setNuclideId($data['nuclideId']);
            }
            if (isset($data['nuclideName'])) {
                $this->setNuclideName($data['nuclideName']);
            }
            if (isset($data['substitutionType'])) {
                $this->setSubstitutionType($data['substitutionType']);
            }
            if (isset($data['nuclideHalfLife'])) {
                $this->setNuclideHalfLife($data['nuclideHalfLife']);
            }
            if (isset($data['amount'])) {
                $this->setAmount($data['amount']);
            }
            if (isset($data['molecularWeight'])) {
                $this->setMolecularWeight($data['molecularWeight']);
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
        if (isset($this->nuclideId)) $json['nuclideId'] = $this->nuclideId;
        if (isset($this->nuclideName)) $json['nuclideName'] = $this->nuclideName;
        if (isset($this->substitutionType)) $json['substitutionType'] = $this->substitutionType;
        if (isset($this->nuclideHalfLife)) $json['nuclideHalfLife'] = $this->nuclideHalfLife;
        if (isset($this->amount)) $json['amount'] = $this->amount;
        if (isset($this->molecularWeight)) $json['molecularWeight'] = $this->molecularWeight;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<SubstanceSpecificationIsotope xmlns="http://hl7.org/fhir"></SubstanceSpecificationIsotope>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->nuclideId)) $this->nuclideId->xmlSerialize(true, $sxe->addChild('nuclideId'));
        if (isset($this->nuclideName)) $this->nuclideName->xmlSerialize(true, $sxe->addChild('nuclideName'));
        if (isset($this->substitutionType)) $this->substitutionType->xmlSerialize(true, $sxe->addChild('substitutionType'));
        if (isset($this->nuclideHalfLife)) $this->nuclideHalfLife->xmlSerialize(true, $sxe->addChild('nuclideHalfLife'));
        if (isset($this->amount)) $this->amount->xmlSerialize(true, $sxe->addChild('amount'));
        if (isset($this->molecularWeight)) $this->molecularWeight->xmlSerialize(true, $sxe->addChild('molecularWeight'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}