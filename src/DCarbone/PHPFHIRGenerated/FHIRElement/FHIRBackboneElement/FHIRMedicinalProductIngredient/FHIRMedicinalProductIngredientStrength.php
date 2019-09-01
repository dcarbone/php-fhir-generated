<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 1st, 2019 15:45+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRatio;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * An ingredient of a manufactured item or pharmaceutical product.
 *
 * Class FHIRMedicinalProductIngredientStrength
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient
 */
class FHIRMedicinalProductIngredientStrength extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INGREDIENT_DOT_STRENGTH;

    const FIELD_CONCENTRATION = 'concentration';
    const FIELD_CONCENTRATION_LOW_LIMIT = 'concentrationLowLimit';
    const FIELD_COUNTRY = 'country';
    const FIELD_MEASUREMENT_POINT = 'measurementPoint';
    const FIELD_MEASUREMENT_POINT_EXT = '_measurementPoint';
    const FIELD_PRESENTATION = 'presentation';
    const FIELD_PRESENTATION_LOW_LIMIT = 'presentationLowLimit';
    const FIELD_REFERENCE_STRENGTH = 'referenceStrength';

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    private $concentration = null;

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A lower limit for the strength per unitary volume (or mass), for when there is a
     * range. The concentration attribute then becomes the upper limit.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    private $concentrationLowLimit = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The country or countries for which the strength range applies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $country = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * For when strength is measured at a particular point or distance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $measurementPoint = null;

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The quantity of substance in the unit of presentation, or in the volume (or
     * mass) of the single pharmaceutical product or manufactured item.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    private $presentation = null;

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A lower limit for the quantity of substance in the unit of presentation. For use
     * when there is a range of strengths, this is the lower limit, with the
     * presentation attribute becoming the upper limit.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    private $presentationLowLimit = null;

    /**
     * An ingredient of a manufactured item or pharmaceutical product.
     *
     * Strength expressed in terms of a reference substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientReferenceStrength[]
     */
    private $referenceStrength = [];

    /**
     * FHIRMedicinalProductIngredientStrength Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductIngredientStrength::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CONCENTRATION])) {
            if ($data[self::FIELD_CONCENTRATION] instanceof FHIRRatio) {
                $this->setConcentration($data[self::FIELD_CONCENTRATION]);
            } else {
                $this->setConcentration(new FHIRRatio($data[self::FIELD_CONCENTRATION]));
            }
        }
        if (isset($data[self::FIELD_CONCENTRATION_LOW_LIMIT])) {
            if ($data[self::FIELD_CONCENTRATION_LOW_LIMIT] instanceof FHIRRatio) {
                $this->setConcentrationLowLimit($data[self::FIELD_CONCENTRATION_LOW_LIMIT]);
            } else {
                $this->setConcentrationLowLimit(new FHIRRatio($data[self::FIELD_CONCENTRATION_LOW_LIMIT]));
            }
        }
        if (isset($data[self::FIELD_COUNTRY])) {
            if (is_array($data[self::FIELD_COUNTRY])) {
                foreach($data[self::FIELD_COUNTRY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCountry($v);
                    } else {
                        $this->addCountry(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_COUNTRY] instanceof FHIRCodeableConcept) {
                $this->addCountry($data[self::FIELD_COUNTRY]);
            } else {
                $this->addCountry(new FHIRCodeableConcept($data[self::FIELD_COUNTRY]));
            }
        }
        if (isset($data[self::FIELD_MEASUREMENT_POINT])) {
            $ext = (isset($data[self::FIELD_MEASUREMENT_POINT_EXT]) && is_array($data[self::FIELD_MEASUREMENT_POINT_EXT]))
                ? $data[self::FIELD_MEASUREMENT_POINT_EXT]
                : null;
            if ($data[self::FIELD_MEASUREMENT_POINT] instanceof FHIRString) {
                $this->setMeasurementPoint($data[self::FIELD_MEASUREMENT_POINT]);
            } elseif ($ext && is_scalar($data[self::FIELD_MEASUREMENT_POINT])) {
                $this->setMeasurementPoint(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_MEASUREMENT_POINT]] + $ext));
            } else {
                $this->setMeasurementPoint(new FHIRString($data[self::FIELD_MEASUREMENT_POINT]));
            }
        }
        if (isset($data[self::FIELD_PRESENTATION])) {
            if ($data[self::FIELD_PRESENTATION] instanceof FHIRRatio) {
                $this->setPresentation($data[self::FIELD_PRESENTATION]);
            } else {
                $this->setPresentation(new FHIRRatio($data[self::FIELD_PRESENTATION]));
            }
        }
        if (isset($data[self::FIELD_PRESENTATION_LOW_LIMIT])) {
            if ($data[self::FIELD_PRESENTATION_LOW_LIMIT] instanceof FHIRRatio) {
                $this->setPresentationLowLimit($data[self::FIELD_PRESENTATION_LOW_LIMIT]);
            } else {
                $this->setPresentationLowLimit(new FHIRRatio($data[self::FIELD_PRESENTATION_LOW_LIMIT]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE_STRENGTH])) {
            if (is_array($data[self::FIELD_REFERENCE_STRENGTH])) {
                foreach($data[self::FIELD_REFERENCE_STRENGTH] as $v) {
                    if ($v instanceof FHIRMedicinalProductIngredientReferenceStrength) {
                        $this->addReferenceStrength($v);
                    } else {
                        $this->addReferenceStrength(new FHIRMedicinalProductIngredientReferenceStrength($v));
                    }
                }
            } else if ($data[self::FIELD_REFERENCE_STRENGTH] instanceof FHIRMedicinalProductIngredientReferenceStrength) {
                $this->addReferenceStrength($data[self::FIELD_REFERENCE_STRENGTH]);
            } else {
                $this->addReferenceStrength(new FHIRMedicinalProductIngredientReferenceStrength($data[self::FIELD_REFERENCE_STRENGTH]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getConcentration()
    {
        return $this->concentration;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRatio $concentration
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientStrength
     */
    public function setConcentration(FHIRRatio $concentration = null)
    {
        $this->concentration = $concentration;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A lower limit for the strength per unitary volume (or mass), for when there is a
     * range. The concentration attribute then becomes the upper limit.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getConcentrationLowLimit()
    {
        return $this->concentrationLowLimit;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A lower limit for the strength per unitary volume (or mass), for when there is a
     * range. The concentration attribute then becomes the upper limit.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRatio $concentrationLowLimit
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientStrength
     */
    public function setConcentrationLowLimit(FHIRRatio $concentrationLowLimit = null)
    {
        $this->concentrationLowLimit = $concentrationLowLimit;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The country or countries for which the strength range applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The country or countries for which the strength range applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $country
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientStrength
     */
    public function addCountry(FHIRCodeableConcept $country = null)
    {
        $this->country[] = $country;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The country or countries for which the strength range applies.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $country
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientStrength
     */
    public function setCountry(array $country = [])
    {
        $this->country = [];
        if ([] === $country) {
            return $this;
        }
        foreach($country as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCountry($v);
            } else {
                $this->addCountry(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * For when strength is measured at a particular point or distance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getMeasurementPoint()
    {
        return $this->measurementPoint;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * For when strength is measured at a particular point or distance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $measurementPoint
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientStrength
     */
    public function setMeasurementPoint($measurementPoint = null)
    {
        if (null === $measurementPoint) {
            $this->measurementPoint = null;
            return $this;
        }
        if ($measurementPoint instanceof FHIRString) {
            $this->measurementPoint = $measurementPoint;
            return $this;
        }
        $this->measurementPoint = new FHIRString($measurementPoint);
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The quantity of substance in the unit of presentation, or in the volume (or
     * mass) of the single pharmaceutical product or manufactured item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The quantity of substance in the unit of presentation, or in the volume (or
     * mass) of the single pharmaceutical product or manufactured item.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRatio $presentation
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientStrength
     */
    public function setPresentation(FHIRRatio $presentation = null)
    {
        $this->presentation = $presentation;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A lower limit for the quantity of substance in the unit of presentation. For use
     * when there is a range of strengths, this is the lower limit, with the
     * presentation attribute becoming the upper limit.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getPresentationLowLimit()
    {
        return $this->presentationLowLimit;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A lower limit for the quantity of substance in the unit of presentation. For use
     * when there is a range of strengths, this is the lower limit, with the
     * presentation attribute becoming the upper limit.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRatio $presentationLowLimit
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientStrength
     */
    public function setPresentationLowLimit(FHIRRatio $presentationLowLimit = null)
    {
        $this->presentationLowLimit = $presentationLowLimit;
        return $this;
    }

    /**
     * An ingredient of a manufactured item or pharmaceutical product.
     *
     * Strength expressed in terms of a reference substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientReferenceStrength[]
     */
    public function getReferenceStrength()
    {
        return $this->referenceStrength;
    }

    /**
     * An ingredient of a manufactured item or pharmaceutical product.
     *
     * Strength expressed in terms of a reference substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientReferenceStrength $referenceStrength
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientStrength
     */
    public function addReferenceStrength(FHIRMedicinalProductIngredientReferenceStrength $referenceStrength = null)
    {
        $this->referenceStrength[] = $referenceStrength;
        return $this;
    }

    /**
     * An ingredient of a manufactured item or pharmaceutical product.
     *
     * Strength expressed in terms of a reference substance.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientReferenceStrength[] $referenceStrength
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientStrength
     */
    public function setReferenceStrength(array $referenceStrength = [])
    {
        $this->referenceStrength = [];
        if ([] === $referenceStrength) {
            return $this;
        }
        foreach($referenceStrength as $v) {
            if ($v instanceof FHIRMedicinalProductIngredientReferenceStrength) {
                $this->addReferenceStrength($v);
            } else {
                $this->addReferenceStrength(new FHIRMedicinalProductIngredientReferenceStrength($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientStrength $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientStrength
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRMedicinalProductIngredientStrength::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicinalProductIngredientStrength::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRMedicinalProductIngredientStrength);
        } elseif (!is_object($type) || !($type instanceof FHIRMedicinalProductIngredientStrength)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicinalProductIngredientStrength::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientStrength or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->concentration)) {
            $type->setConcentration(FHIRRatio::xmlUnserialize($children->concentration));
        }
        if (isset($children->concentrationLowLimit)) {
            $type->setConcentrationLowLimit(FHIRRatio::xmlUnserialize($children->concentrationLowLimit));
        }
        if (isset($children->country)) {
            foreach($children->country as $child) {
                $type->addCountry(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($attributes->measurementPoint)) {
            $type->setMeasurementPoint((string)$attributes->measurementPoint);
        }
        if (isset($children->measurementPoint)) {
            $type->setMeasurementPoint(FHIRString::xmlUnserialize($children->measurementPoint));
        }
        if (isset($children->presentation)) {
            $type->setPresentation(FHIRRatio::xmlUnserialize($children->presentation));
        }
        if (isset($children->presentationLowLimit)) {
            $type->setPresentationLowLimit(FHIRRatio::xmlUnserialize($children->presentationLowLimit));
        }
        if (isset($children->referenceStrength)) {
            foreach($children->referenceStrength as $child) {
                $type->addReferenceStrength(FHIRMedicinalProductIngredientReferenceStrength::xmlUnserialize($child));
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<MedicinalProductIngredientStrength xmlns="http://hl7.org/fhir"></MedicinalProductIngredientStrength>');
        }
        if (null !== ($v = $this->getConcentration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONCENTRATION));
        }
        if (null !== ($v = $this->getConcentrationLowLimit())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONCENTRATION_LOW_LIMIT));
        }
        if ([] !== ($vs = $this->getCountry())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COUNTRY));
            }
        }
        if (null !== ($v = $this->getMeasurementPoint())) {
            $sxe->addAttribute(self::FIELD_MEASUREMENT_POINT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_MEASUREMENT_POINT));
            }
        }
        if (null !== ($v = $this->getPresentation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRESENTATION));
        }
        if (null !== ($v = $this->getPresentationLowLimit())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRESENTATION_LOW_LIMIT));
        }
        if ([] !== ($vs = $this->getReferenceStrength())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE_STRENGTH));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getConcentration())) {
            $a[self::FIELD_CONCENTRATION] = $v;
        }
        if (null !== ($v = $this->getConcentrationLowLimit())) {
            $a[self::FIELD_CONCENTRATION_LOW_LIMIT] = $v;
        }
        if ([] !== ($vs = $this->getCountry())) {
            $a[self::FIELD_COUNTRY] = $vs;
        }
        if (null !== ($v = $this->getMeasurementPoint())) {
            $a[self::FIELD_MEASUREMENT_POINT] = (string)$v;
            $a[self::FIELD_MEASUREMENT_POINT_EXT] = $v;
        }
        if (null !== ($v = $this->getPresentation())) {
            $a[self::FIELD_PRESENTATION] = $v;
        }
        if (null !== ($v = $this->getPresentationLowLimit())) {
            $a[self::FIELD_PRESENTATION_LOW_LIMIT] = $v;
        }
        if ([] !== ($vs = $this->getReferenceStrength())) {
            $a[self::FIELD_REFERENCE_STRENGTH] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}