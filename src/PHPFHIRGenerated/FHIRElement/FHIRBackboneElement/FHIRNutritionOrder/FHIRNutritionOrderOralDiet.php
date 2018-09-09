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
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * A request to supply a diet, formula feeding (enteral) or oral nutritional supplement to a patient/resident.
 *
 * Class FHIRNutritionOrderOralDiet
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder
 */
class FHIRNutritionOrderOralDiet extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'NutritionOrder.OralDiet';

    /**
     * The required consistency (e.g. honey-thick, nectar-thick, thin, thickened.) of liquids or fluids served to the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $fluidConsistencyType = null;

    /**
     * Free text or additional instructions or information pertaining to the oral diet.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $instruction = null;

    /**
     * Class that defines the quantity and type of nutrient modifications (for example carbohydrate, fiber or sodium) required for the oral diet.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderNutrient
     */
    public $nutrient = null;

    /**
     * The time period and frequency at which the diet should be given.  The diet should be given for the combination of all schedules if more than one schedule is present.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public $schedule = null;

    /**
     * Class that describes any texture modifications required for the patient to safely consume various types of solid foods.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderTexture
     */
    public $texture = null;

    /**
     * The kind of diet or dietary restriction such as fiber restricted diet or diabetic diet.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * FHIRNutritionOrderOralDiet Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['fluidConsistencyType'])) {
                $this->setFluidConsistencyType($data['fluidConsistencyType']);
            }
            if (isset($data['instruction'])) {
                $this->setInstruction($data['instruction']);
            }
            if (isset($data['nutrient'])) {
                $this->setNutrient($data['nutrient']);
            }
            if (isset($data['schedule'])) {
                $this->setSchedule($data['schedule']);
            }
            if (isset($data['texture'])) {
                $this->setTexture($data['texture']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderOralDiet::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The required consistency (e.g. honey-thick, nectar-thick, thin, thickened.) of liquids or fluids served to the patient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setFluidConsistencyType(FHIRCodeableConcept $fluidConsistencyType = null)
    {
        if (null === $fluidConsistencyType) {
            return $this; 
        }
        $this->fluidConsistencyType = $fluidConsistencyType;
        return $this;
    }

    /**
     * The required consistency (e.g. honey-thick, nectar-thick, thin, thickened.) of liquids or fluids served to the patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getFluidConsistencyType()
    {
        return $this->fluidConsistencyType;
    }


    /**
     * Free text or additional instructions or information pertaining to the oral diet.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setInstruction($instruction)
    {
        if (null === $instruction) {
            return $this; 
        }
        if (is_scalar($instruction)) {
            $instruction = new FHIRString($instruction);
        }
        if (!($instruction instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRNutritionOrderOralDiet::setInstruction - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($instruction)
            ));
        }
        $this->instruction = $instruction;
        return $this;
    }

    /**
     * Free text or additional instructions or information pertaining to the oral diet.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getInstruction()
    {
        return $this->instruction;
    }


    /**
     * Class that defines the quantity and type of nutrient modifications (for example carbohydrate, fiber or sodium) required for the oral diet.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderNutrient
     * @return $this
     */
    public function setNutrient(FHIRNutritionOrderNutrient $nutrient = null)
    {
        if (null === $nutrient) {
            return $this; 
        }
        $this->nutrient = $nutrient;
        return $this;
    }

    /**
     * Class that defines the quantity and type of nutrient modifications (for example carbohydrate, fiber or sodium) required for the oral diet.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderNutrient
     */
    public function getNutrient()
    {
        return $this->nutrient;
    }


    /**
     * The time period and frequency at which the diet should be given.  The diet should be given for the combination of all schedules if more than one schedule is present.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     * @return $this
     */
    public function setSchedule(FHIRTiming $schedule = null)
    {
        if (null === $schedule) {
            return $this; 
        }
        $this->schedule = $schedule;
        return $this;
    }

    /**
     * The time period and frequency at which the diet should be given.  The diet should be given for the combination of all schedules if more than one schedule is present.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getSchedule()
    {
        return $this->schedule;
    }


    /**
     * Class that describes any texture modifications required for the patient to safely consume various types of solid foods.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderTexture
     * @return $this
     */
    public function setTexture(FHIRNutritionOrderTexture $texture = null)
    {
        if (null === $texture) {
            return $this; 
        }
        $this->texture = $texture;
        return $this;
    }

    /**
     * Class that describes any texture modifications required for the patient to safely consume various types of solid foods.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderTexture
     */
    public function getTexture()
    {
        return $this->texture;
    }


    /**
     * The kind of diet or dietary restriction such as fiber restricted diet or diabetic diet.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type = $type;
        return $this;
    }

    /**
     * The kind of diet or dietary restriction such as fiber restricted diet or diabetic diet.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
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
        if (null !== ($v = $this->getFluidConsistencyType())) {
            $a['fluidConsistencyType'] = $v;
        }
        if (null !== ($v = $this->getInstruction())) {
            $a['instruction'] = $v;
        }
        if (null !== ($v = $this->getNutrient())) {
            $a['nutrient'] = $v;
        }
        if (null !== ($v = $this->getSchedule())) {
            $a['schedule'] = $v;
        }
        if (null !== ($v = $this->getTexture())) {
            $a['texture'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
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
            $sxe = new \SimpleXMLElement('<NutritionOrderOralDiet xmlns="http://hl7.org/fhir"></NutritionOrderOralDiet>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}