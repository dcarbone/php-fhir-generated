<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder;

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
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * A request to supply a diet, formula feeding (enteral) or oral nutritional supplement to a patient/resident.
 *
 * Class FHIRNutritionOrderEnteralFormula
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder
 */
class FHIRNutritionOrderEnteralFormula extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'NutritionOrder.EnteralFormula';

    /**
     * The product or brand name of the type of modular component to be added to the formula.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $additiveProductName = null;

    /**
     * Indicates the type of modular component such as protein, carbohydrate, fat or fiber to be provided in addition to or mixed with the base formula.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $additiveType = null;

    /**
     * Formula administration instructions as structured data.  This repeating structure allows for changing the administration rate or volume over time for both bolus and continuous feeding.  An example of this would be an instruction to increase the rate of continuous feeding every 2 hours.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration
     */
    public $administration = null;

    /**
     * Free text formula administration, feeding instructions or additional instructions or information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $administrationInstruction = null;

    /**
     * The product or brand name of the enteral or infant formula product such as "ACME Adult Standard Formula".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $baseFormulaProductName = null;

    /**
     * The type of enteral or infant formula such as an adult standard formula with fiber or a soy-based infant formula.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $baseFormulaType = null;

    /**
     * The amount of energy (calories) that the formula should provide per specified volume, typically per mL or fluid oz.  For example, an infant may require a formula that provides 24 calories per fluid ounce or an adult may require an enteral formula that provides 1.5 calorie/mL.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $caloricDensity = null;

    /**
     * The maximum total quantity of formula that may be administered to a subject over the period of time, e.g. 1440 mL over 24 hours.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $maxVolumeToDeliver = null;

    /**
     * The route or physiological path of administration into the patient's gastrointestinal  tract for purposes of providing the formula feeding, e.g. nasogastric tube.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $routeofAdministration = null;

    /**
     * FHIRNutritionOrderEnteralFormula Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['additiveProductName'])) {
                $this->setAdditiveProductName($data['additiveProductName']);
            }
            if (isset($data['additiveType'])) {
                $this->setAdditiveType($data['additiveType']);
            }
            if (isset($data['administration'])) {
                $this->setAdministration($data['administration']);
            }
            if (isset($data['administrationInstruction'])) {
                $this->setAdministrationInstruction($data['administrationInstruction']);
            }
            if (isset($data['baseFormulaProductName'])) {
                $this->setBaseFormulaProductName($data['baseFormulaProductName']);
            }
            if (isset($data['baseFormulaType'])) {
                $this->setBaseFormulaType($data['baseFormulaType']);
            }
            if (isset($data['caloricDensity'])) {
                $this->setCaloricDensity($data['caloricDensity']);
            }
            if (isset($data['maxVolumeToDeliver'])) {
                $this->setMaxVolumeToDeliver($data['maxVolumeToDeliver']);
            }
            if (isset($data['routeofAdministration'])) {
                $this->setRouteofAdministration($data['routeofAdministration']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The product or brand name of the type of modular component to be added to the formula.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setAdditiveProductName($additiveProductName)
    {
        if (null === $additiveProductName) {
            return $this; 
        }
        if (is_scalar($additiveProductName)) {
            $additiveProductName = new FHIRString($additiveProductName);
        }
        if (!($additiveProductName instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRNutritionOrderEnteralFormula::setAdditiveProductName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($additiveProductName)
            ));
        }
        $this->additiveProductName = $additiveProductName;
        return $this;
    }

    /**
     * The product or brand name of the type of modular component to be added to the formula.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAdditiveProductName()
    {
        return $this->additiveProductName;
    }


    /**
     * Indicates the type of modular component such as protein, carbohydrate, fat or fiber to be provided in addition to or mixed with the base formula.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setAdditiveType(FHIRCodeableConcept $additiveType = null)
    {
        if (null === $additiveType) {
            return $this; 
        }
        $this->additiveType = $additiveType;
        return $this;
    }

    /**
     * Indicates the type of modular component such as protein, carbohydrate, fat or fiber to be provided in addition to or mixed with the base formula.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAdditiveType()
    {
        return $this->additiveType;
    }


    /**
     * Formula administration instructions as structured data.  This repeating structure allows for changing the administration rate or volume over time for both bolus and continuous feeding.  An example of this would be an instruction to increase the rate of continuous feeding every 2 hours.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration
     * @return $this
     */
    public function setAdministration(FHIRNutritionOrderAdministration $administration = null)
    {
        if (null === $administration) {
            return $this; 
        }
        $this->administration = $administration;
        return $this;
    }

    /**
     * Formula administration instructions as structured data.  This repeating structure allows for changing the administration rate or volume over time for both bolus and continuous feeding.  An example of this would be an instruction to increase the rate of continuous feeding every 2 hours.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration
     */
    public function getAdministration()
    {
        return $this->administration;
    }


    /**
     * Free text formula administration, feeding instructions or additional instructions or information.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setAdministrationInstruction($administrationInstruction)
    {
        if (null === $administrationInstruction) {
            return $this; 
        }
        if (is_scalar($administrationInstruction)) {
            $administrationInstruction = new FHIRString($administrationInstruction);
        }
        if (!($administrationInstruction instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRNutritionOrderEnteralFormula::setAdministrationInstruction - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($administrationInstruction)
            ));
        }
        $this->administrationInstruction = $administrationInstruction;
        return $this;
    }

    /**
     * Free text formula administration, feeding instructions or additional instructions or information.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAdministrationInstruction()
    {
        return $this->administrationInstruction;
    }


    /**
     * The product or brand name of the enteral or infant formula product such as "ACME Adult Standard Formula".
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setBaseFormulaProductName($baseFormulaProductName)
    {
        if (null === $baseFormulaProductName) {
            return $this; 
        }
        if (is_scalar($baseFormulaProductName)) {
            $baseFormulaProductName = new FHIRString($baseFormulaProductName);
        }
        if (!($baseFormulaProductName instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRNutritionOrderEnteralFormula::setBaseFormulaProductName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($baseFormulaProductName)
            ));
        }
        $this->baseFormulaProductName = $baseFormulaProductName;
        return $this;
    }

    /**
     * The product or brand name of the enteral or infant formula product such as "ACME Adult Standard Formula".
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getBaseFormulaProductName()
    {
        return $this->baseFormulaProductName;
    }


    /**
     * The type of enteral or infant formula such as an adult standard formula with fiber or a soy-based infant formula.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setBaseFormulaType(FHIRCodeableConcept $baseFormulaType = null)
    {
        if (null === $baseFormulaType) {
            return $this; 
        }
        $this->baseFormulaType = $baseFormulaType;
        return $this;
    }

    /**
     * The type of enteral or infant formula such as an adult standard formula with fiber or a soy-based infant formula.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getBaseFormulaType()
    {
        return $this->baseFormulaType;
    }


    /**
     * The amount of energy (calories) that the formula should provide per specified volume, typically per mL or fluid oz.  For example, an infant may require a formula that provides 24 calories per fluid ounce or an adult may require an enteral formula that provides 1.5 calorie/mL.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setCaloricDensity(FHIRQuantity $caloricDensity = null)
    {
        if (null === $caloricDensity) {
            return $this; 
        }
        $this->caloricDensity = $caloricDensity;
        return $this;
    }

    /**
     * The amount of energy (calories) that the formula should provide per specified volume, typically per mL or fluid oz.  For example, an infant may require a formula that provides 24 calories per fluid ounce or an adult may require an enteral formula that provides 1.5 calorie/mL.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getCaloricDensity()
    {
        return $this->caloricDensity;
    }


    /**
     * The maximum total quantity of formula that may be administered to a subject over the period of time, e.g. 1440 mL over 24 hours.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setMaxVolumeToDeliver(FHIRQuantity $maxVolumeToDeliver = null)
    {
        if (null === $maxVolumeToDeliver) {
            return $this; 
        }
        $this->maxVolumeToDeliver = $maxVolumeToDeliver;
        return $this;
    }

    /**
     * The maximum total quantity of formula that may be administered to a subject over the period of time, e.g. 1440 mL over 24 hours.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getMaxVolumeToDeliver()
    {
        return $this->maxVolumeToDeliver;
    }


    /**
     * The route or physiological path of administration into the patient's gastrointestinal  tract for purposes of providing the formula feeding, e.g. nasogastric tube.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setRouteofAdministration(FHIRCodeableConcept $routeofAdministration = null)
    {
        if (null === $routeofAdministration) {
            return $this; 
        }
        $this->routeofAdministration = $routeofAdministration;
        return $this;
    }

    /**
     * The route or physiological path of administration into the patient's gastrointestinal  tract for purposes of providing the formula feeding, e.g. nasogastric tube.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRouteofAdministration()
    {
        return $this->routeofAdministration;
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
        if (null !== ($v = $this->getAdditiveProductName())) {
            $a['additiveProductName'] = $v;
        }
        if (null !== ($v = $this->getAdditiveType())) {
            $a['additiveType'] = $v;
        }
        if (null !== ($v = $this->getAdministration())) {
            $a['administration'] = $v;
        }
        if (null !== ($v = $this->getAdministrationInstruction())) {
            $a['administrationInstruction'] = $v;
        }
        if (null !== ($v = $this->getBaseFormulaProductName())) {
            $a['baseFormulaProductName'] = $v;
        }
        if (null !== ($v = $this->getBaseFormulaType())) {
            $a['baseFormulaType'] = $v;
        }
        if (null !== ($v = $this->getCaloricDensity())) {
            $a['caloricDensity'] = $v;
        }
        if (null !== ($v = $this->getMaxVolumeToDeliver())) {
            $a['maxVolumeToDeliver'] = $v;
        }
        if (null !== ($v = $this->getRouteofAdministration())) {
            $a['routeofAdministration'] = $v;
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
            $sxe = new \SimpleXMLElement('<NutritionOrderEnteralFormula xmlns="http://hl7.org/fhir"></NutritionOrderEnteralFormula>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}