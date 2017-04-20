<?php namespace PHPFHIRGenerated\FHIRResource\FHIRNutritionOrder;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 20th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A request to supply a diet, formula feeding (enteral) or oral nutritional supplement to a patient/resident.
 */
class FHIRNutritionOrderTexture extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Any texture modifications (for solid foods) that should be made, e.g. easy to chew, chopped, ground, and pureed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $modifier = null;

    /**
     * The food type(s) (e.g. meats, all foods)  that the texture modification applies to.  This could be all foods types.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $foodType = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'NutritionOrder.Texture';

    /**
     * Any texture modifications (for solid foods) that should be made, e.g. easy to chew, chopped, ground, and pureed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getModifier()
    {
        return $this->modifier;
    }

    /**
     * Any texture modifications (for solid foods) that should be made, e.g. easy to chew, chopped, ground, and pureed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $modifier
     * @return $this
     */
    public function setModifier($modifier)
    {
        $this->modifier = $modifier;
        return $this;
    }

    /**
     * The food type(s) (e.g. meats, all foods)  that the texture modification applies to.  This could be all foods types.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getFoodType()
    {
        return $this->foodType;
    }

    /**
     * The food type(s) (e.g. meats, all foods)  that the texture modification applies to.  This could be all foods types.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $foodType
     * @return $this
     */
    public function setFoodType($foodType)
    {
        $this->foodType = $foodType;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->modifier) $json['modifier'] = json_encode($this->modifier);
        if (null !== $this->foodType) $json['foodType'] = json_encode($this->foodType);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<NutritionOrderTexture xmlns="http://hl7.org/fhir"></NutritionOrderTexture>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->modifier) $this->modifier->xmlSerialize(true, $sxe->addChild('modifier'));
        if (null !== $this->foodType) $this->foodType->xmlSerialize(true, $sxe->addChild('foodType'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}