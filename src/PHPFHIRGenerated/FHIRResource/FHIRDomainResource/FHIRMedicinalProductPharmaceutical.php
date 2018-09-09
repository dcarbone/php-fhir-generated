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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalCharacteristics;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalRouteOfAdministration;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A pharmaceutical product described in terms of its composition and dose form.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRMedicinalProductPharmaceutical
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRMedicinalProductPharmaceutical extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'MedicinalProductPharmaceutical';

    /**
     * The administrable dose form, after necessary reconstitution.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $administrableDoseForm = null;

    /**
     * Characteristics e.g. a products onset of action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalCharacteristics
     */
    public $characteristics = null;

    /**
     * Accompanying device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $device = null;

    /**
     * An identifier for the pharmaceutical medicinal product.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Ingredient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $ingredient = null;

    /**
     * The path by which the pharmaceutical product is taken into or makes contact with the body.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalRouteOfAdministration
     */
    public $routeOfAdministration = null;

    /**
     * Todo.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $unitOfPresentation = null;

    /**
     * FHIRMedicinalProductPharmaceutical Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['administrableDoseForm'])) {
                $this->setAdministrableDoseForm($data['administrableDoseForm']);
            }
            if (isset($data['characteristics'])) {
                $this->setCharacteristics($data['characteristics']);
            }
            if (isset($data['device'])) {
                $this->setDevice($data['device']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['ingredient'])) {
                $this->setIngredient($data['ingredient']);
            }
            if (isset($data['routeOfAdministration'])) {
                $this->setRouteOfAdministration($data['routeOfAdministration']);
            }
            if (isset($data['unitOfPresentation'])) {
                $this->setUnitOfPresentation($data['unitOfPresentation']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductPharmaceutical::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The administrable dose form, after necessary reconstitution.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setAdministrableDoseForm(FHIRCodeableConcept $administrableDoseForm = null)
    {
        if (null === $administrableDoseForm) {
            return $this; 
        }
        $this->administrableDoseForm = $administrableDoseForm;
        return $this;
    }

    /**
     * The administrable dose form, after necessary reconstitution.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAdministrableDoseForm()
    {
        return $this->administrableDoseForm;
    }


    /**
     * Characteristics e.g. a products onset of action.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalCharacteristics
     * @return $this
     */
    public function setCharacteristics(FHIRMedicinalProductPharmaceuticalCharacteristics $characteristics = null)
    {
        if (null === $characteristics) {
            return $this; 
        }
        $this->characteristics = $characteristics;
        return $this;
    }

    /**
     * Characteristics e.g. a products onset of action.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalCharacteristics
     */
    public function getCharacteristics()
    {
        return $this->characteristics;
    }


    /**
     * Accompanying device.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setDevice(FHIRReference $device = null)
    {
        if (null === $device) {
            return $this; 
        }
        $this->device = $device;
        return $this;
    }

    /**
     * Accompanying device.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDevice()
    {
        return $this->device;
    }


    /**
     * An identifier for the pharmaceutical medicinal product.
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
     * An identifier for the pharmaceutical medicinal product.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Ingredient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setIngredient(FHIRReference $ingredient = null)
    {
        if (null === $ingredient) {
            return $this; 
        }
        $this->ingredient = $ingredient;
        return $this;
    }

    /**
     * Ingredient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }


    /**
     * The path by which the pharmaceutical product is taken into or makes contact with the body.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalRouteOfAdministration
     * @return $this
     */
    public function setRouteOfAdministration(FHIRMedicinalProductPharmaceuticalRouteOfAdministration $routeOfAdministration = null)
    {
        if (null === $routeOfAdministration) {
            return $this; 
        }
        $this->routeOfAdministration = $routeOfAdministration;
        return $this;
    }

    /**
     * The path by which the pharmaceutical product is taken into or makes contact with the body.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalRouteOfAdministration
     */
    public function getRouteOfAdministration()
    {
        return $this->routeOfAdministration;
    }


    /**
     * Todo.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setUnitOfPresentation(FHIRCodeableConcept $unitOfPresentation = null)
    {
        if (null === $unitOfPresentation) {
            return $this; 
        }
        $this->unitOfPresentation = $unitOfPresentation;
        return $this;
    }

    /**
     * Todo.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getUnitOfPresentation()
    {
        return $this->unitOfPresentation;
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
        if (null !== ($v = $this->getAdministrableDoseForm())) {
            $a['administrableDoseForm'] = $v;
        }
        if (null !== ($v = $this->getCharacteristics())) {
            $a['characteristics'] = $v;
        }
        if (null !== ($v = $this->getDevice())) {
            $a['device'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getIngredient())) {
            $a['ingredient'] = $v;
        }
        if (null !== ($v = $this->getRouteOfAdministration())) {
            $a['routeOfAdministration'] = $v;
        }
        if (null !== ($v = $this->getUnitOfPresentation())) {
            $a['unitOfPresentation'] = $v;
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
            $sxe = new \SimpleXMLElement('<MedicinalProductPharmaceutical xmlns="http://hl7.org/fhir"></MedicinalProductPharmaceutical>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}