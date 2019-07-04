<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 4th, 2019 22:05+0000
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
 * Class FHIRMedicinalProductIngredientReferenceStrength
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient
 */
class FHIRMedicinalProductIngredientReferenceStrength extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INGREDIENT_DOT_REFERENCE_STRENGTH;

    const FIELD_COUNTRY = 'country';
    const FIELD_MEASUREMENT_POINT = 'measurementPoint';
    const FIELD_MEASUREMENT_POINT_EXT = '_measurementPoint';
    const FIELD_STRENGTH = 'strength';
    const FIELD_STRENGTH_LOW_LIMIT = 'strengthLowLimit';
    const FIELD_SUBSTANCE = 'substance';

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
     * Strength expressed in terms of a reference substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    private $strength = null;

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Strength expressed in terms of a reference substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    private $strengthLowLimit = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Relevant reference substance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $substance = null;

    /**
     * FHIRMedicinalProductIngredientReferenceStrength Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductIngredientReferenceStrength::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
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
        if (isset($data[self::FIELD_STRENGTH])) {
            if ($data[self::FIELD_STRENGTH] instanceof FHIRRatio) {
                $this->setStrength($data[self::FIELD_STRENGTH]);
            } else {
                $this->setStrength(new FHIRRatio($data[self::FIELD_STRENGTH]));
            }
        }
        if (isset($data[self::FIELD_STRENGTH_LOW_LIMIT])) {
            if ($data[self::FIELD_STRENGTH_LOW_LIMIT] instanceof FHIRRatio) {
                $this->setStrengthLowLimit($data[self::FIELD_STRENGTH_LOW_LIMIT]);
            } else {
                $this->setStrengthLowLimit(new FHIRRatio($data[self::FIELD_STRENGTH_LOW_LIMIT]));
            }
        }
        if (isset($data[self::FIELD_SUBSTANCE])) {
            if ($data[self::FIELD_SUBSTANCE] instanceof FHIRCodeableConcept) {
                $this->setSubstance($data[self::FIELD_SUBSTANCE]);
            } else {
                $this->setSubstance(new FHIRCodeableConcept($data[self::FIELD_SUBSTANCE]));
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
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientReferenceStrength
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
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientReferenceStrength
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
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientReferenceStrength
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
     * Strength expressed in terms of a reference substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Strength expressed in terms of a reference substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRatio $strength
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientReferenceStrength
     */
    public function setStrength(FHIRRatio $strength = null)
    {
        $this->strength = $strength;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Strength expressed in terms of a reference substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getStrengthLowLimit()
    {
        return $this->strengthLowLimit;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Strength expressed in terms of a reference substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRRatio $strengthLowLimit
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientReferenceStrength
     */
    public function setStrengthLowLimit(FHIRRatio $strengthLowLimit = null)
    {
        $this->strengthLowLimit = $strengthLowLimit;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Relevant reference substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSubstance()
    {
        return $this->substance;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Relevant reference substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $substance
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientReferenceStrength
     */
    public function setSubstance(FHIRCodeableConcept $substance = null)
    {
        $this->substance = $substance;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientReferenceStrength $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientReferenceStrength
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
                throw new \DomainException(sprintf('FHIRMedicinalProductIngredientReferenceStrength::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicinalProductIngredientReferenceStrength::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRMedicinalProductIngredientReferenceStrength);
        } elseif (!is_object($type) || !($type instanceof FHIRMedicinalProductIngredientReferenceStrength)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicinalProductIngredientReferenceStrength::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientReferenceStrength or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
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
        if (isset($children->strength)) {
            $type->setStrength(FHIRRatio::xmlUnserialize($children->strength));
        }
        if (isset($children->strengthLowLimit)) {
            $type->setStrengthLowLimit(FHIRRatio::xmlUnserialize($children->strengthLowLimit));
        }
        if (isset($children->substance)) {
            $type->setSubstance(FHIRCodeableConcept::xmlUnserialize($children->substance));
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
            $sxe = new \SimpleXMLElement('<MedicinalProductIngredientReferenceStrength xmlns="http://hl7.org/fhir"></MedicinalProductIngredientReferenceStrength>');
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
        if (null !== ($v = $this->getStrength())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STRENGTH));
        }
        if (null !== ($v = $this->getStrengthLowLimit())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STRENGTH_LOW_LIMIT));
        }
        if (null !== ($v = $this->getSubstance())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBSTANCE));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getCountry())) {
            $a[self::FIELD_COUNTRY] = $vs;
        }
        if (null !== ($v = $this->getMeasurementPoint())) {
            $a[self::FIELD_MEASUREMENT_POINT] = (string)$v;
            $a[self::FIELD_MEASUREMENT_POINT_EXT] = $v;
        }
        if (null !== ($v = $this->getStrength())) {
            $a[self::FIELD_STRENGTH] = $v;
        }
        if (null !== ($v = $this->getStrengthLowLimit())) {
            $a[self::FIELD_STRENGTH_LOW_LIMIT] = $v;
        }
        if (null !== ($v = $this->getSubstance())) {
            $a[self::FIELD_SUBSTANCE] = $v;
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