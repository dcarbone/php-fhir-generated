<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient;

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
use PHPFHIRGenerated\FHIRElement\FHIRRatio;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * An ingredient of a manufactured item or pharmaceutical product.
 *
 * Class FHIRMedicinalProductIngredientStrength
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient
 */
class FHIRMedicinalProductIngredientStrength extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'MedicinalProductIngredient.Strength';

    /**
     * The strength per unitary volume (or mass).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $concentration = null;

    /**
     * A lower limit for the strength per unitary volume (or mass), for when there is a range. The concentration attribute then becomes the upper limit.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $concentrationLowLimit = null;

    /**
     * The country or countries for which the strength range applies.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $country = null;

    /**
     * For when strength is measured at a particular point or distance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $measurementPoint = null;

    /**
     * The quantity of substance in the unit of presentation, or in the volume (or mass) of the single pharmaceutical product or manufactured item.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $presentation = null;

    /**
     * A lower limit for the quantity of substance in the unit of presentation. For use when there is a range of strengths, this is the lower limit, with the presentation attribute becoming the upper limit.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $presentationLowLimit = null;

    /**
     * Strength expressed in terms of a reference substance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientReferenceStrength
     */
    public $referenceStrength = null;

    /**
     * FHIRMedicinalProductIngredientStrength Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['concentration'])) {
                $this->setConcentration($data['concentration']);
            }
            if (isset($data['concentrationLowLimit'])) {
                $this->setConcentrationLowLimit($data['concentrationLowLimit']);
            }
            if (isset($data['country'])) {
                $this->setCountry($data['country']);
            }
            if (isset($data['measurementPoint'])) {
                $this->setMeasurementPoint($data['measurementPoint']);
            }
            if (isset($data['presentation'])) {
                $this->setPresentation($data['presentation']);
            }
            if (isset($data['presentationLowLimit'])) {
                $this->setPresentationLowLimit($data['presentationLowLimit']);
            }
            if (isset($data['referenceStrength'])) {
                $this->setReferenceStrength($data['referenceStrength']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientStrength::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The strength per unitary volume (or mass).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     * @return $this
     */
    public function setConcentration(FHIRRatio $concentration = null)
    {
        if (null === $concentration) {
            return $this; 
        }
        $this->concentration = $concentration;
        return $this;
    }

    /**
     * The strength per unitary volume (or mass).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getConcentration()
    {
        return $this->concentration;
    }


    /**
     * A lower limit for the strength per unitary volume (or mass), for when there is a range. The concentration attribute then becomes the upper limit.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     * @return $this
     */
    public function setConcentrationLowLimit(FHIRRatio $concentrationLowLimit = null)
    {
        if (null === $concentrationLowLimit) {
            return $this; 
        }
        $this->concentrationLowLimit = $concentrationLowLimit;
        return $this;
    }

    /**
     * A lower limit for the strength per unitary volume (or mass), for when there is a range. The concentration attribute then becomes the upper limit.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getConcentrationLowLimit()
    {
        return $this->concentrationLowLimit;
    }


    /**
     * The country or countries for which the strength range applies.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCountry(FHIRCodeableConcept $country = null)
    {
        if (null === $country) {
            return $this; 
        }
        $this->country = $country;
        return $this;
    }

    /**
     * The country or countries for which the strength range applies.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCountry()
    {
        return $this->country;
    }


    /**
     * For when strength is measured at a particular point or distance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setMeasurementPoint($measurementPoint)
    {
        if (null === $measurementPoint) {
            return $this; 
        }
        if (is_scalar($measurementPoint)) {
            $measurementPoint = new FHIRString($measurementPoint);
        }
        if (!($measurementPoint instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductIngredientStrength::setMeasurementPoint - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($measurementPoint)
            ));
        }
        $this->measurementPoint = $measurementPoint;
        return $this;
    }

    /**
     * For when strength is measured at a particular point or distance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getMeasurementPoint()
    {
        return $this->measurementPoint;
    }


    /**
     * The quantity of substance in the unit of presentation, or in the volume (or mass) of the single pharmaceutical product or manufactured item.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     * @return $this
     */
    public function setPresentation(FHIRRatio $presentation = null)
    {
        if (null === $presentation) {
            return $this; 
        }
        $this->presentation = $presentation;
        return $this;
    }

    /**
     * The quantity of substance in the unit of presentation, or in the volume (or mass) of the single pharmaceutical product or manufactured item.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getPresentation()
    {
        return $this->presentation;
    }


    /**
     * A lower limit for the quantity of substance in the unit of presentation. For use when there is a range of strengths, this is the lower limit, with the presentation attribute becoming the upper limit.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     * @return $this
     */
    public function setPresentationLowLimit(FHIRRatio $presentationLowLimit = null)
    {
        if (null === $presentationLowLimit) {
            return $this; 
        }
        $this->presentationLowLimit = $presentationLowLimit;
        return $this;
    }

    /**
     * A lower limit for the quantity of substance in the unit of presentation. For use when there is a range of strengths, this is the lower limit, with the presentation attribute becoming the upper limit.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getPresentationLowLimit()
    {
        return $this->presentationLowLimit;
    }


    /**
     * Strength expressed in terms of a reference substance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientReferenceStrength
     * @return $this
     */
    public function setReferenceStrength(FHIRMedicinalProductIngredientReferenceStrength $referenceStrength = null)
    {
        if (null === $referenceStrength) {
            return $this; 
        }
        $this->referenceStrength = $referenceStrength;
        return $this;
    }

    /**
     * Strength expressed in terms of a reference substance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientReferenceStrength
     */
    public function getReferenceStrength()
    {
        return $this->referenceStrength;
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
        if (null !== ($v = $this->getConcentration())) {
            $a['concentration'] = $v;
        }
        if (null !== ($v = $this->getConcentrationLowLimit())) {
            $a['concentrationLowLimit'] = $v;
        }
        if (null !== ($v = $this->getCountry())) {
            $a['country'] = $v;
        }
        if (null !== ($v = $this->getMeasurementPoint())) {
            $a['measurementPoint'] = $v;
        }
        if (null !== ($v = $this->getPresentation())) {
            $a['presentation'] = $v;
        }
        if (null !== ($v = $this->getPresentationLowLimit())) {
            $a['presentationLowLimit'] = $v;
        }
        if (null !== ($v = $this->getReferenceStrength())) {
            $a['referenceStrength'] = $v;
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
            $sxe = new \SimpleXMLElement('<MedicinalProductIngredientStrength xmlns="http://hl7.org/fhir"></MedicinalProductIngredientStrength>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}