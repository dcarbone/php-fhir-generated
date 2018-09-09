<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification;

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
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * The detailed description of a substance, typically at a level beyond what is used for prescribing.
 *
 * Class FHIRSubstanceSpecificationIsotope
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification
 */
class FHIRSubstanceSpecificationIsotope extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'SubstanceSpecification.Isotope';

    /**
     * Quantitative values for this isotope.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $amount = null;

    /**
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMolecularWeight
     */
    public $molecularWeight = null;

    /**
     * Half life - for a non-natural nuclide.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $nuclideHalfLife = null;

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
     * FHIRSubstanceSpecificationIsotope Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['amount'])) {
                $this->setAmount($data['amount']);
            }
            if (isset($data['molecularWeight'])) {
                $this->setMolecularWeight($data['molecularWeight']);
            }
            if (isset($data['nuclideHalfLife'])) {
                $this->setNuclideHalfLife($data['nuclideHalfLife']);
            }
            if (isset($data['nuclideId'])) {
                $this->setNuclideId($data['nuclideId']);
            }
            if (isset($data['nuclideName'])) {
                $this->setNuclideName($data['nuclideName']);
            }
            if (isset($data['substitutionType'])) {
                $this->setSubstitutionType($data['substitutionType']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationIsotope::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Quantitative values for this isotope.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setAmount($amount)
    {
        if (null === $amount) {
            return $this; 
        }
        if (is_scalar($amount)) {
            $amount = new FHIRString($amount);
        }
        if (!($amount instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstanceSpecificationIsotope::setAmount - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($amount)
            ));
        }
        $this->amount = $amount;
        return $this;
    }

    /**
     * Quantitative values for this isotope.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAmount()
    {
        return $this->amount;
    }


    /**
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMolecularWeight
     * @return $this
     */
    public function setMolecularWeight(FHIRSubstanceSpecificationMolecularWeight $molecularWeight = null)
    {
        if (null === $molecularWeight) {
            return $this; 
        }
        $this->molecularWeight = $molecularWeight;
        return $this;
    }

    /**
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMolecularWeight
     */
    public function getMolecularWeight()
    {
        return $this->molecularWeight;
    }


    /**
     * Half life - for a non-natural nuclide.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setNuclideHalfLife(FHIRQuantity $nuclideHalfLife = null)
    {
        if (null === $nuclideHalfLife) {
            return $this; 
        }
        $this->nuclideHalfLife = $nuclideHalfLife;
        return $this;
    }

    /**
     * Half life - for a non-natural nuclide.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getNuclideHalfLife()
    {
        return $this->nuclideHalfLife;
    }


    /**
     * Substance identifier for each non-natural or radioisotope.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setNuclideId(FHIRIdentifier $nuclideId = null)
    {
        if (null === $nuclideId) {
            return $this; 
        }
        $this->nuclideId = $nuclideId;
        return $this;
    }

    /**
     * Substance identifier for each non-natural or radioisotope.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getNuclideId()
    {
        return $this->nuclideId;
    }


    /**
     * Substance name for each non-natural or radioisotope.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setNuclideName(FHIRCodeableConcept $nuclideName = null)
    {
        if (null === $nuclideName) {
            return $this; 
        }
        $this->nuclideName = $nuclideName;
        return $this;
    }

    /**
     * Substance name for each non-natural or radioisotope.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getNuclideName()
    {
        return $this->nuclideName;
    }


    /**
     * The type of isotopic substitution present in a single substance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setSubstitutionType(FHIRCodeableConcept $substitutionType = null)
    {
        if (null === $substitutionType) {
            return $this; 
        }
        $this->substitutionType = $substitutionType;
        return $this;
    }

    /**
     * The type of isotopic substitution present in a single substance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSubstitutionType()
    {
        return $this->substitutionType;
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
        if (null !== ($v = $this->getAmount())) {
            $a['amount'] = $v;
        }
        if (null !== ($v = $this->getMolecularWeight())) {
            $a['molecularWeight'] = $v;
        }
        if (null !== ($v = $this->getNuclideHalfLife())) {
            $a['nuclideHalfLife'] = $v;
        }
        if (null !== ($v = $this->getNuclideId())) {
            $a['nuclideId'] = $v;
        }
        if (null !== ($v = $this->getNuclideName())) {
            $a['nuclideName'] = $v;
        }
        if (null !== ($v = $this->getSubstitutionType())) {
            $a['substitutionType'] = $v;
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
            $sxe = new \SimpleXMLElement('<SubstanceSpecificationIsotope xmlns="http://hl7.org/fhir"></SubstanceSpecificationIsotope>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}