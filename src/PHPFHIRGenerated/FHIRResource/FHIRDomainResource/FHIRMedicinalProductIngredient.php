<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientSpecifiedSubstance;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientSubstance;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * An ingredient of a manufactured item or pharmaceutical product.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRMedicinalProductIngredient
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRMedicinalProductIngredient extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'MedicinalProductIngredient';

    /**
     * If the ingredient is a known or suspected allergen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $allergenicIndicator = null;

    /**
     * The identifier(s) of this Ingredient that are assigned by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Manufacturer of this Ingredient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $manufacturer = null;

    /**
     * Ingredient role e.g. Active ingredient, excipient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $role = null;

    /**
     * A specified substance that comprises this ingredient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientSpecifiedSubstance
     */
    public $specifiedSubstance = null;

    /**
     * The ingredient substance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientSubstance
     */
    public $substance = null;

    /**
     * FHIRMedicinalProductIngredient Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['allergenicIndicator'])) {
                $this->setAllergenicIndicator($data['allergenicIndicator']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['manufacturer'])) {
                $this->setManufacturer($data['manufacturer']);
            }
            if (isset($data['role'])) {
                $this->setRole($data['role']);
            }
            if (isset($data['specifiedSubstance'])) {
                $this->setSpecifiedSubstance($data['specifiedSubstance']);
            }
            if (isset($data['substance'])) {
                $this->setSubstance($data['substance']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductIngredient::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * If the ingredient is a known or suspected allergen.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setAllergenicIndicator($allergenicIndicator)
    {
        if (null === $allergenicIndicator) {
            return $this; 
        }
        if (is_scalar($allergenicIndicator)) {
            $allergenicIndicator = new FHIRBoolean($allergenicIndicator);
        }
        if (!($allergenicIndicator instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductIngredient::setAllergenicIndicator - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($allergenicIndicator)
            ));
        }
        $this->allergenicIndicator = $allergenicIndicator;
        return $this;
    }

    /**
     * If the ingredient is a known or suspected allergen.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAllergenicIndicator()
    {
        return $this->allergenicIndicator;
    }


    /**
     * The identifier(s) of this Ingredient that are assigned by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate.
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
     * The identifier(s) of this Ingredient that are assigned by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Manufacturer of this Ingredient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setManufacturer(FHIRReference $manufacturer = null)
    {
        if (null === $manufacturer) {
            return $this; 
        }
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Manufacturer of this Ingredient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }


    /**
     * Ingredient role e.g. Active ingredient, excipient.
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
     * Ingredient role e.g. Active ingredient, excipient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRole()
    {
        return $this->role;
    }


    /**
     * A specified substance that comprises this ingredient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientSpecifiedSubstance
     * @return $this
     */
    public function setSpecifiedSubstance(FHIRMedicinalProductIngredientSpecifiedSubstance $specifiedSubstance = null)
    {
        if (null === $specifiedSubstance) {
            return $this; 
        }
        $this->specifiedSubstance = $specifiedSubstance;
        return $this;
    }

    /**
     * A specified substance that comprises this ingredient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientSpecifiedSubstance
     */
    public function getSpecifiedSubstance()
    {
        return $this->specifiedSubstance;
    }


    /**
     * The ingredient substance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientSubstance
     * @return $this
     */
    public function setSubstance(FHIRMedicinalProductIngredientSubstance $substance = null)
    {
        if (null === $substance) {
            return $this; 
        }
        $this->substance = $substance;
        return $this;
    }

    /**
     * The ingredient substance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientSubstance
     */
    public function getSubstance()
    {
        return $this->substance;
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
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getAllergenicIndicator())) {
            $a['allergenicIndicator'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getManufacturer())) {
            $a['manufacturer'] = $v;
        }
        if (null !== ($v = $this->getRole())) {
            $a['role'] = $v;
        }
        if (null !== ($v = $this->getSpecifiedSubstance())) {
            $a['specifiedSubstance'] = $v;
        }
        if (null !== ($v = $this->getSubstance())) {
            $a['substance'] = $v;
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
            $sxe = new \SimpleXMLElement('<MedicinalProductIngredient xmlns="http://hl7.org/fhir"></MedicinalProductIngredient>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}