<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

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
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * Chemical substances are a single substance type whose primary defining element is the molecular structure. Chemical substances shall be defined on the basis of their complete covalent molecular structure; the presence of a salt (counter-ion) and/or solvates (water, alcohols) is also captured. Purity, grade, physical form or particle size are not taken into account in the definition of a chemical substance or in the assignment of a Substance ID.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRSubstanceMoiety
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement
 */
class FHIRSubstanceMoiety extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'SubstanceMoiety';

    /**
     * Used to capture quantitative values for a variety of elements. If only limits are given, the arithmetic mean would be the average. If only a single definite value for a given element is given, it would be captured in this field.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount
     */
    public $amount = null;

    /**
     * The unique identifier assigned to the substance representing the moiety based on the ISO 11238 substance controlled vocabulary.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Molecular formula shall be captured as described in 4.7.3.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $molecularFormula = null;

    /**
     * The name of the moiety shall be provided.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Optical activity shall be captured as described in 4.7.2.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $opticalActivity = null;

    /**
     * The role of the moiety should be specified if there is a specific role the moiety is playing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $role = null;

    /**
     * Stereochemistry shall be captured as described in 4.7.1.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $stereochemistry = null;

    /**
     * FHIRSubstanceMoiety Constructor
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
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['molecularFormula'])) {
                $this->setMolecularFormula($data['molecularFormula']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['opticalActivity'])) {
                $this->setOpticalActivity($data['opticalActivity']);
            }
            if (isset($data['role'])) {
                $this->setRole($data['role']);
            }
            if (isset($data['stereochemistry'])) {
                $this->setStereochemistry($data['stereochemistry']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceMoiety::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Used to capture quantitative values for a variety of elements. If only limits are given, the arithmetic mean would be the average. If only a single definite value for a given element is given, it would be captured in this field.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount
     * @return $this
     */
    public function setAmount(FHIRSubstanceAmount $amount = null)
    {
        if (null === $amount) {
            return $this; 
        }
        $this->amount = $amount;
        return $this;
    }

    /**
     * Used to capture quantitative values for a variety of elements. If only limits are given, the arithmetic mean would be the average. If only a single definite value for a given element is given, it would be captured in this field.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount
     */
    public function getAmount()
    {
        return $this->amount;
    }


    /**
     * The unique identifier assigned to the substance representing the moiety based on the ISO 11238 substance controlled vocabulary.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The unique identifier assigned to the substance representing the moiety based on the ISO 11238 substance controlled vocabulary.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Molecular formula shall be captured as described in 4.7.3.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setMolecularFormula($molecularFormula)
    {
        if (null === $molecularFormula) {
            return $this; 
        }
        if (is_scalar($molecularFormula)) {
            $molecularFormula = new FHIRString($molecularFormula);
        }
        if (!($molecularFormula instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstanceMoiety::setMolecularFormula - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($molecularFormula)
            ));
        }
        $this->molecularFormula = $molecularFormula;
        return $this;
    }

    /**
     * Molecular formula shall be captured as described in 4.7.3.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getMolecularFormula()
    {
        return $this->molecularFormula;
    }


    /**
     * The name of the moiety shall be provided.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setName($name)
    {
        if (null === $name) {
            return $this; 
        }
        if (is_scalar($name)) {
            $name = new FHIRString($name);
        }
        if (!($name instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstanceMoiety::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * The name of the moiety shall be provided.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Optical activity shall be captured as described in 4.7.2.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setOpticalActivity(FHIRCodeableConcept $opticalActivity = null)
    {
        if (null === $opticalActivity) {
            return $this; 
        }
        $this->opticalActivity = $opticalActivity;
        return $this;
    }

    /**
     * Optical activity shall be captured as described in 4.7.2.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getOpticalActivity()
    {
        return $this->opticalActivity;
    }


    /**
     * The role of the moiety should be specified if there is a specific role the moiety is playing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setRole(FHIRCodeableConcept $role = null)
    {
        if (null === $role) {
            return $this; 
        }
        $this->role = $role;
        return $this;
    }

    /**
     * The role of the moiety should be specified if there is a specific role the moiety is playing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRole()
    {
        return $this->role;
    }


    /**
     * Stereochemistry shall be captured as described in 4.7.1.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setStereochemistry(FHIRCodeableConcept $stereochemistry = null)
    {
        if (null === $stereochemistry) {
            return $this; 
        }
        $this->stereochemistry = $stereochemistry;
        return $this;
    }

    /**
     * Stereochemistry shall be captured as described in 4.7.1.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getStereochemistry()
    {
        return $this->stereochemistry;
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
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getMolecularFormula())) {
            $a['molecularFormula'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getOpticalActivity())) {
            $a['opticalActivity'] = $v;
        }
        if (null !== ($v = $this->getRole())) {
            $a['role'] = $v;
        }
        if (null !== ($v = $this->getStereochemistry())) {
            $a['stereochemistry'] = $v;
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
            $sxe = new \SimpleXMLElement('<SubstanceMoiety xmlns="http://hl7.org/fhir"></SubstanceMoiety>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}