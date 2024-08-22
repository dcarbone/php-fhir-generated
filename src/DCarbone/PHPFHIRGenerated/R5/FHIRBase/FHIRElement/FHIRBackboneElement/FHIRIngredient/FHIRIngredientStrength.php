<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 22nd, 2024 02:47+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * An ingredient of a manufactured item or pharmaceutical product.
 *
 * Class FHIRIngredientStrength
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient
 */
class FHIRIngredientStrength extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_STRENGTH;

    const FIELD_PRESENTATION_RATIO = 'presentationRatio';
    const FIELD_PRESENTATION_RATIO_RANGE = 'presentationRatioRange';
    const FIELD_PRESENTATION_CODEABLE_CONCEPT = 'presentationCodeableConcept';
    const FIELD_PRESENTATION_QUANTITY = 'presentationQuantity';
    const FIELD_TEXT_PRESENTATION = 'textPresentation';
    const FIELD_TEXT_PRESENTATION_EXT = '_textPresentation';
    const FIELD_CONCENTRATION_RATIO = 'concentrationRatio';
    const FIELD_CONCENTRATION_RATIO_RANGE = 'concentrationRatioRange';
    const FIELD_CONCENTRATION_CODEABLE_CONCEPT = 'concentrationCodeableConcept';
    const FIELD_CONCENTRATION_QUANTITY = 'concentrationQuantity';
    const FIELD_TEXT_CONCENTRATION = 'textConcentration';
    const FIELD_TEXT_CONCENTRATION_EXT = '_textConcentration';
    const FIELD_BASIS = 'basis';
    const FIELD_MEASUREMENT_POINT = 'measurementPoint';
    const FIELD_MEASUREMENT_POINT_EXT = '_measurementPoint';
    const FIELD_COUNTRY = 'country';
    const FIELD_REFERENCE_STRENGTH = 'referenceStrength';

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of substance in the unit of presentation, or in the volume (or
     * mass) of the single pharmaceutical product or manufactured item. Unit of
     * presentation refers to the quantity that the item occurs in e.g. a strength per
     * tablet size, perhaps 'per 20mg' (the size of the tablet). It is not generally
     * normalized as a unitary unit, which would be 'per mg').
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio
     */
    protected null|FHIRRatio $presentationRatio = null;
    /**
     * A range of ratios expressed as a low and high numerator and a denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of substance in the unit of presentation, or in the volume (or
     * mass) of the single pharmaceutical product or manufactured item. Unit of
     * presentation refers to the quantity that the item occurs in e.g. a strength per
     * tablet size, perhaps 'per 20mg' (the size of the tablet). It is not generally
     * normalized as a unitary unit, which would be 'per mg').
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange
     */
    protected null|FHIRRatioRange $presentationRatioRange = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of substance in the unit of presentation, or in the volume (or
     * mass) of the single pharmaceutical product or manufactured item. Unit of
     * presentation refers to the quantity that the item occurs in e.g. a strength per
     * tablet size, perhaps 'per 20mg' (the size of the tablet). It is not generally
     * normalized as a unitary unit, which would be 'per mg').
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $presentationCodeableConcept = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of substance in the unit of presentation, or in the volume (or
     * mass) of the single pharmaceutical product or manufactured item. Unit of
     * presentation refers to the quantity that the item occurs in e.g. a strength per
     * tablet size, perhaps 'per 20mg' (the size of the tablet). It is not generally
     * normalized as a unitary unit, which would be 'per mg').
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    protected null|FHIRQuantity $presentationQuantity = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual represention of either the whole of the presentation strength or a
     * part of it - with the rest being in Strength.presentation as a ratio.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $textPresentation = null;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio
     */
    protected null|FHIRRatio $concentrationRatio = null;
    /**
     * A range of ratios expressed as a low and high numerator and a denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange
     */
    protected null|FHIRRatioRange $concentrationRatioRange = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $concentrationCodeableConcept = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    protected null|FHIRQuantity $concentrationQuantity = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual represention of either the whole of the concentration strength or a
     * part of it - with the rest being in Strength.concentration as a ratio.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $textConcentration = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that indicates if the strength is, for example, based on the ingredient
     * substance as stated or on the substance base (when the ingredient is a salt).
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $basis = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For when strength is measured at a particular point or distance. There are
     * products where strength is measured at a particular point. For example, the
     * strength of the ingredient in some inhalers is measured at a particular position
     * relative to the point of aerosolization.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $measurementPoint = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country or countries for which the strength range applies.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $country = [];
    /**
     * An ingredient of a manufactured item or pharmaceutical product.
     *
     * Strength expressed in terms of a reference substance. For when the ingredient
     * strength is additionally expressed as equivalent to the strength of some other
     * closely related substance (e.g. salt vs. base). Reference strength represents
     * the strength (quantitative composition) of the active moiety of the active
     * substance. There are situations when the active substance and active moiety are
     * different, therefore both a strength and a reference strength are needed.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientReferenceStrength[]
     */
    protected null|array $referenceStrength = [];

    /**
     * Validation map for fields in type Ingredient.Strength
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRIngredientStrength Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_PRESENTATION_RATIO, $data)) {
            if ($data[self::FIELD_PRESENTATION_RATIO] instanceof FHIRRatio) {
                $this->setPresentationRatio($data[self::FIELD_PRESENTATION_RATIO]);
            } else {
                $this->setPresentationRatio(new FHIRRatio($data[self::FIELD_PRESENTATION_RATIO]));
            }
        }
        if (array_key_exists(self::FIELD_PRESENTATION_RATIO_RANGE, $data)) {
            if ($data[self::FIELD_PRESENTATION_RATIO_RANGE] instanceof FHIRRatioRange) {
                $this->setPresentationRatioRange($data[self::FIELD_PRESENTATION_RATIO_RANGE]);
            } else {
                $this->setPresentationRatioRange(new FHIRRatioRange($data[self::FIELD_PRESENTATION_RATIO_RANGE]));
            }
        }
        if (array_key_exists(self::FIELD_PRESENTATION_CODEABLE_CONCEPT, $data)) {
            if ($data[self::FIELD_PRESENTATION_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setPresentationCodeableConcept($data[self::FIELD_PRESENTATION_CODEABLE_CONCEPT]);
            } else {
                $this->setPresentationCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_PRESENTATION_CODEABLE_CONCEPT]));
            }
        }
        if (array_key_exists(self::FIELD_PRESENTATION_QUANTITY, $data)) {
            if ($data[self::FIELD_PRESENTATION_QUANTITY] instanceof FHIRQuantity) {
                $this->setPresentationQuantity($data[self::FIELD_PRESENTATION_QUANTITY]);
            } else {
                $this->setPresentationQuantity(new FHIRQuantity($data[self::FIELD_PRESENTATION_QUANTITY]));
            }
        }
        if (array_key_exists(self::FIELD_TEXT_PRESENTATION, $data) || array_key_exists(self::FIELD_TEXT_PRESENTATION_EXT, $data)) {
            $value = $data[self::FIELD_TEXT_PRESENTATION] ?? null;
            $ext = (isset($data[self::FIELD_TEXT_PRESENTATION_EXT]) && is_array($data[self::FIELD_TEXT_PRESENTATION_EXT])) ? $data[self::FIELD_TEXT_PRESENTATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setTextPresentation($value);
                } else if (is_array($value)) {
                    $this->setTextPresentation(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setTextPresentation(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTextPresentation(new FHIRString($ext));
            } else {
                $this->setTextPresentation(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_CONCENTRATION_RATIO, $data)) {
            if ($data[self::FIELD_CONCENTRATION_RATIO] instanceof FHIRRatio) {
                $this->setConcentrationRatio($data[self::FIELD_CONCENTRATION_RATIO]);
            } else {
                $this->setConcentrationRatio(new FHIRRatio($data[self::FIELD_CONCENTRATION_RATIO]));
            }
        }
        if (array_key_exists(self::FIELD_CONCENTRATION_RATIO_RANGE, $data)) {
            if ($data[self::FIELD_CONCENTRATION_RATIO_RANGE] instanceof FHIRRatioRange) {
                $this->setConcentrationRatioRange($data[self::FIELD_CONCENTRATION_RATIO_RANGE]);
            } else {
                $this->setConcentrationRatioRange(new FHIRRatioRange($data[self::FIELD_CONCENTRATION_RATIO_RANGE]));
            }
        }
        if (array_key_exists(self::FIELD_CONCENTRATION_CODEABLE_CONCEPT, $data)) {
            if ($data[self::FIELD_CONCENTRATION_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setConcentrationCodeableConcept($data[self::FIELD_CONCENTRATION_CODEABLE_CONCEPT]);
            } else {
                $this->setConcentrationCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_CONCENTRATION_CODEABLE_CONCEPT]));
            }
        }
        if (array_key_exists(self::FIELD_CONCENTRATION_QUANTITY, $data)) {
            if ($data[self::FIELD_CONCENTRATION_QUANTITY] instanceof FHIRQuantity) {
                $this->setConcentrationQuantity($data[self::FIELD_CONCENTRATION_QUANTITY]);
            } else {
                $this->setConcentrationQuantity(new FHIRQuantity($data[self::FIELD_CONCENTRATION_QUANTITY]));
            }
        }
        if (array_key_exists(self::FIELD_TEXT_CONCENTRATION, $data) || array_key_exists(self::FIELD_TEXT_CONCENTRATION_EXT, $data)) {
            $value = $data[self::FIELD_TEXT_CONCENTRATION] ?? null;
            $ext = (isset($data[self::FIELD_TEXT_CONCENTRATION_EXT]) && is_array($data[self::FIELD_TEXT_CONCENTRATION_EXT])) ? $data[self::FIELD_TEXT_CONCENTRATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setTextConcentration($value);
                } else if (is_array($value)) {
                    $this->setTextConcentration(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setTextConcentration(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTextConcentration(new FHIRString($ext));
            } else {
                $this->setTextConcentration(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_BASIS, $data)) {
            if ($data[self::FIELD_BASIS] instanceof FHIRCodeableConcept) {
                $this->setBasis($data[self::FIELD_BASIS]);
            } else {
                $this->setBasis(new FHIRCodeableConcept($data[self::FIELD_BASIS]));
            }
        }
        if (array_key_exists(self::FIELD_MEASUREMENT_POINT, $data) || array_key_exists(self::FIELD_MEASUREMENT_POINT_EXT, $data)) {
            $value = $data[self::FIELD_MEASUREMENT_POINT] ?? null;
            $ext = (isset($data[self::FIELD_MEASUREMENT_POINT_EXT]) && is_array($data[self::FIELD_MEASUREMENT_POINT_EXT])) ? $data[self::FIELD_MEASUREMENT_POINT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setMeasurementPoint($value);
                } else if (is_array($value)) {
                    $this->setMeasurementPoint(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setMeasurementPoint(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMeasurementPoint(new FHIRString($ext));
            } else {
                $this->setMeasurementPoint(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_COUNTRY, $data)) {
            if (is_array($data[self::FIELD_COUNTRY])) {
                foreach($data[self::FIELD_COUNTRY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCountry($v);
                    } else {
                        $this->addCountry(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_COUNTRY] instanceof FHIRCodeableConcept) {
                $this->addCountry($data[self::FIELD_COUNTRY]);
            } else {
                $this->addCountry(new FHIRCodeableConcept($data[self::FIELD_COUNTRY]));
            }
        }
        if (array_key_exists(self::FIELD_REFERENCE_STRENGTH, $data)) {
            if (is_array($data[self::FIELD_REFERENCE_STRENGTH])) {
                foreach($data[self::FIELD_REFERENCE_STRENGTH] as $v) {
                    if ($v instanceof FHIRIngredientReferenceStrength) {
                        $this->addReferenceStrength($v);
                    } else {
                        $this->addReferenceStrength(new FHIRIngredientReferenceStrength($v));
                    }
                }
            } elseif ($data[self::FIELD_REFERENCE_STRENGTH] instanceof FHIRIngredientReferenceStrength) {
                $this->addReferenceStrength($data[self::FIELD_REFERENCE_STRENGTH]);
            } else {
                $this->addReferenceStrength(new FHIRIngredientReferenceStrength($data[self::FIELD_REFERENCE_STRENGTH]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of substance in the unit of presentation, or in the volume (or
     * mass) of the single pharmaceutical product or manufactured item. Unit of
     * presentation refers to the quantity that the item occurs in e.g. a strength per
     * tablet size, perhaps 'per 20mg' (the size of the tablet). It is not generally
     * normalized as a unitary unit, which would be 'per mg').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio
     */
    public function getPresentationRatio(): null|FHIRRatio
    {
        return $this->presentationRatio;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of substance in the unit of presentation, or in the volume (or
     * mass) of the single pharmaceutical product or manufactured item. Unit of
     * presentation refers to the quantity that the item occurs in e.g. a strength per
     * tablet size, perhaps 'per 20mg' (the size of the tablet). It is not generally
     * normalized as a unitary unit, which would be 'per mg').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio $presentationRatio
     * @return static
     */
    public function setPresentationRatio(null|FHIRRatio $presentationRatio = null): self
    {
        if (null === $presentationRatio) {
            $presentationRatio = new FHIRRatio();
        }
        $this->_trackValueSet($this->presentationRatio, $presentationRatio);
        $this->presentationRatio = $presentationRatio;
        return $this;
    }

    /**
     * A range of ratios expressed as a low and high numerator and a denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of substance in the unit of presentation, or in the volume (or
     * mass) of the single pharmaceutical product or manufactured item. Unit of
     * presentation refers to the quantity that the item occurs in e.g. a strength per
     * tablet size, perhaps 'per 20mg' (the size of the tablet). It is not generally
     * normalized as a unitary unit, which would be 'per mg').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange
     */
    public function getPresentationRatioRange(): null|FHIRRatioRange
    {
        return $this->presentationRatioRange;
    }

    /**
     * A range of ratios expressed as a low and high numerator and a denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of substance in the unit of presentation, or in the volume (or
     * mass) of the single pharmaceutical product or manufactured item. Unit of
     * presentation refers to the quantity that the item occurs in e.g. a strength per
     * tablet size, perhaps 'per 20mg' (the size of the tablet). It is not generally
     * normalized as a unitary unit, which would be 'per mg').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange $presentationRatioRange
     * @return static
     */
    public function setPresentationRatioRange(null|FHIRRatioRange $presentationRatioRange = null): self
    {
        if (null === $presentationRatioRange) {
            $presentationRatioRange = new FHIRRatioRange();
        }
        $this->_trackValueSet($this->presentationRatioRange, $presentationRatioRange);
        $this->presentationRatioRange = $presentationRatioRange;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of substance in the unit of presentation, or in the volume (or
     * mass) of the single pharmaceutical product or manufactured item. Unit of
     * presentation refers to the quantity that the item occurs in e.g. a strength per
     * tablet size, perhaps 'per 20mg' (the size of the tablet). It is not generally
     * normalized as a unitary unit, which would be 'per mg').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getPresentationCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->presentationCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of substance in the unit of presentation, or in the volume (or
     * mass) of the single pharmaceutical product or manufactured item. Unit of
     * presentation refers to the quantity that the item occurs in e.g. a strength per
     * tablet size, perhaps 'per 20mg' (the size of the tablet). It is not generally
     * normalized as a unitary unit, which would be 'per mg').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $presentationCodeableConcept
     * @return static
     */
    public function setPresentationCodeableConcept(null|FHIRCodeableConcept $presentationCodeableConcept = null): self
    {
        if (null === $presentationCodeableConcept) {
            $presentationCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->presentationCodeableConcept, $presentationCodeableConcept);
        $this->presentationCodeableConcept = $presentationCodeableConcept;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of substance in the unit of presentation, or in the volume (or
     * mass) of the single pharmaceutical product or manufactured item. Unit of
     * presentation refers to the quantity that the item occurs in e.g. a strength per
     * tablet size, perhaps 'per 20mg' (the size of the tablet). It is not generally
     * normalized as a unitary unit, which would be 'per mg').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getPresentationQuantity(): null|FHIRQuantity
    {
        return $this->presentationQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of substance in the unit of presentation, or in the volume (or
     * mass) of the single pharmaceutical product or manufactured item. Unit of
     * presentation refers to the quantity that the item occurs in e.g. a strength per
     * tablet size, perhaps 'per 20mg' (the size of the tablet). It is not generally
     * normalized as a unitary unit, which would be 'per mg').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $presentationQuantity
     * @return static
     */
    public function setPresentationQuantity(null|FHIRQuantity $presentationQuantity = null): self
    {
        if (null === $presentationQuantity) {
            $presentationQuantity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->presentationQuantity, $presentationQuantity);
        $this->presentationQuantity = $presentationQuantity;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual represention of either the whole of the presentation strength or a
     * part of it - with the rest being in Strength.presentation as a ratio.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getTextPresentation(): null|FHIRString
    {
        return $this->textPresentation;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual represention of either the whole of the presentation strength or a
     * part of it - with the rest being in Strength.presentation as a ratio.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $textPresentation
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setTextPresentation(null|string|FHIRStringPrimitive|FHIRString $textPresentation = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $textPresentation && !($textPresentation instanceof FHIRString)) {
            $textPresentation = new FHIRString($textPresentation);
        }
        $this->_trackValueSet($this->textPresentation, $textPresentation);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_TEXT_PRESENTATION])) {
            $this->_primitiveXmlLocations[self::FIELD_TEXT_PRESENTATION] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_TEXT_PRESENTATION][0] = $xmlLocation;
        $this->textPresentation = $textPresentation;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio
     */
    public function getConcentrationRatio(): null|FHIRRatio
    {
        return $this->concentrationRatio;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio $concentrationRatio
     * @return static
     */
    public function setConcentrationRatio(null|FHIRRatio $concentrationRatio = null): self
    {
        if (null === $concentrationRatio) {
            $concentrationRatio = new FHIRRatio();
        }
        $this->_trackValueSet($this->concentrationRatio, $concentrationRatio);
        $this->concentrationRatio = $concentrationRatio;
        return $this;
    }

    /**
     * A range of ratios expressed as a low and high numerator and a denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange
     */
    public function getConcentrationRatioRange(): null|FHIRRatioRange
    {
        return $this->concentrationRatioRange;
    }

    /**
     * A range of ratios expressed as a low and high numerator and a denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange $concentrationRatioRange
     * @return static
     */
    public function setConcentrationRatioRange(null|FHIRRatioRange $concentrationRatioRange = null): self
    {
        if (null === $concentrationRatioRange) {
            $concentrationRatioRange = new FHIRRatioRange();
        }
        $this->_trackValueSet($this->concentrationRatioRange, $concentrationRatioRange);
        $this->concentrationRatioRange = $concentrationRatioRange;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getConcentrationCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->concentrationCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $concentrationCodeableConcept
     * @return static
     */
    public function setConcentrationCodeableConcept(null|FHIRCodeableConcept $concentrationCodeableConcept = null): self
    {
        if (null === $concentrationCodeableConcept) {
            $concentrationCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->concentrationCodeableConcept, $concentrationCodeableConcept);
        $this->concentrationCodeableConcept = $concentrationCodeableConcept;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getConcentrationQuantity(): null|FHIRQuantity
    {
        return $this->concentrationQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $concentrationQuantity
     * @return static
     */
    public function setConcentrationQuantity(null|FHIRQuantity $concentrationQuantity = null): self
    {
        if (null === $concentrationQuantity) {
            $concentrationQuantity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->concentrationQuantity, $concentrationQuantity);
        $this->concentrationQuantity = $concentrationQuantity;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual represention of either the whole of the concentration strength or a
     * part of it - with the rest being in Strength.concentration as a ratio.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getTextConcentration(): null|FHIRString
    {
        return $this->textConcentration;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual represention of either the whole of the concentration strength or a
     * part of it - with the rest being in Strength.concentration as a ratio.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $textConcentration
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setTextConcentration(null|string|FHIRStringPrimitive|FHIRString $textConcentration = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $textConcentration && !($textConcentration instanceof FHIRString)) {
            $textConcentration = new FHIRString($textConcentration);
        }
        $this->_trackValueSet($this->textConcentration, $textConcentration);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_TEXT_CONCENTRATION])) {
            $this->_primitiveXmlLocations[self::FIELD_TEXT_CONCENTRATION] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_TEXT_CONCENTRATION][0] = $xmlLocation;
        $this->textConcentration = $textConcentration;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that indicates if the strength is, for example, based on the ingredient
     * substance as stated or on the substance base (when the ingredient is a salt).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getBasis(): null|FHIRCodeableConcept
    {
        return $this->basis;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that indicates if the strength is, for example, based on the ingredient
     * substance as stated or on the substance base (when the ingredient is a salt).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $basis
     * @return static
     */
    public function setBasis(null|FHIRCodeableConcept $basis = null): self
    {
        if (null === $basis) {
            $basis = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->basis, $basis);
        $this->basis = $basis;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For when strength is measured at a particular point or distance. There are
     * products where strength is measured at a particular point. For example, the
     * strength of the ingredient in some inhalers is measured at a particular position
     * relative to the point of aerosolization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getMeasurementPoint(): null|FHIRString
    {
        return $this->measurementPoint;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For when strength is measured at a particular point or distance. There are
     * products where strength is measured at a particular point. For example, the
     * strength of the ingredient in some inhalers is measured at a particular position
     * relative to the point of aerosolization.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $measurementPoint
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMeasurementPoint(null|string|FHIRStringPrimitive|FHIRString $measurementPoint = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $measurementPoint && !($measurementPoint instanceof FHIRString)) {
            $measurementPoint = new FHIRString($measurementPoint);
        }
        $this->_trackValueSet($this->measurementPoint, $measurementPoint);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MEASUREMENT_POINT])) {
            $this->_primitiveXmlLocations[self::FIELD_MEASUREMENT_POINT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MEASUREMENT_POINT][0] = $xmlLocation;
        $this->measurementPoint = $measurementPoint;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country or countries for which the strength range applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getCountry(): null|array
    {
        return $this->country;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country or countries for which the strength range applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $country
     * @return static
     */
    public function addCountry(null|FHIRCodeableConcept $country = null): self
    {
        if (null === $country) {
            $country = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->country[] = $country;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country or countries for which the strength range applies.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$country
     * @return static
     */
    public function setCountry(FHIRCodeableConcept ...$country): self
    {
        if ([] !== $this->country) {
            $this->_trackValuesRemoved(count($this->country));
            $this->country = [];
        }
        if ([] === $country) {
            return $this;
        }
        foreach($country as $v) {
            $this->addCountry($v);
        }
        return $this;
    }

    /**
     * An ingredient of a manufactured item or pharmaceutical product.
     *
     * Strength expressed in terms of a reference substance. For when the ingredient
     * strength is additionally expressed as equivalent to the strength of some other
     * closely related substance (e.g. salt vs. base). Reference strength represents
     * the strength (quantitative composition) of the active moiety of the active
     * substance. There are situations when the active substance and active moiety are
     * different, therefore both a strength and a reference strength are needed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientReferenceStrength[]
     */
    public function getReferenceStrength(): null|array
    {
        return $this->referenceStrength;
    }

    /**
     * An ingredient of a manufactured item or pharmaceutical product.
     *
     * Strength expressed in terms of a reference substance. For when the ingredient
     * strength is additionally expressed as equivalent to the strength of some other
     * closely related substance (e.g. salt vs. base). Reference strength represents
     * the strength (quantitative composition) of the active moiety of the active
     * substance. There are situations when the active substance and active moiety are
     * different, therefore both a strength and a reference strength are needed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientReferenceStrength $referenceStrength
     * @return static
     */
    public function addReferenceStrength(null|FHIRIngredientReferenceStrength $referenceStrength = null): self
    {
        if (null === $referenceStrength) {
            $referenceStrength = new FHIRIngredientReferenceStrength();
        }
        $this->_trackValueAdded();
        $this->referenceStrength[] = $referenceStrength;
        return $this;
    }

    /**
     * An ingredient of a manufactured item or pharmaceutical product.
     *
     * Strength expressed in terms of a reference substance. For when the ingredient
     * strength is additionally expressed as equivalent to the strength of some other
     * closely related substance (e.g. salt vs. base). Reference strength represents
     * the strength (quantitative composition) of the active moiety of the active
     * substance. There are situations when the active substance and active moiety are
     * different, therefore both a strength and a reference strength are needed.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientReferenceStrength ...$referenceStrength
     * @return static
     */
    public function setReferenceStrength(FHIRIngredientReferenceStrength ...$referenceStrength): self
    {
        if ([] !== $this->referenceStrength) {
            $this->_trackValuesRemoved(count($this->referenceStrength));
            $this->referenceStrength = [];
        }
        if ([] === $referenceStrength) {
            return $this;
        }
        foreach($referenceStrength as $v) {
            $this->addReferenceStrength($v);
        }
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getPresentationRatio())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRESENTATION_RATIO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPresentationRatioRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRESENTATION_RATIO_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPresentationCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRESENTATION_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPresentationQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRESENTATION_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTextPresentation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEXT_PRESENTATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getConcentrationRatio())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONCENTRATION_RATIO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getConcentrationRatioRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONCENTRATION_RATIO_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getConcentrationCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONCENTRATION_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getConcentrationQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONCENTRATION_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTextConcentration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEXT_CONCENTRATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBasis())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BASIS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMeasurementPoint())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEASUREMENT_POINT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCountry())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COUNTRY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReferenceStrength())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REFERENCE_STRENGTH, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRESENTATION_RATIO])) {
            $v = $this->getPresentationRatio();
            foreach($validationRules[self::FIELD_PRESENTATION_RATIO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_STRENGTH, self::FIELD_PRESENTATION_RATIO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRESENTATION_RATIO])) {
                        $errs[self::FIELD_PRESENTATION_RATIO] = [];
                    }
                    $errs[self::FIELD_PRESENTATION_RATIO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRESENTATION_RATIO_RANGE])) {
            $v = $this->getPresentationRatioRange();
            foreach($validationRules[self::FIELD_PRESENTATION_RATIO_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_STRENGTH, self::FIELD_PRESENTATION_RATIO_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRESENTATION_RATIO_RANGE])) {
                        $errs[self::FIELD_PRESENTATION_RATIO_RANGE] = [];
                    }
                    $errs[self::FIELD_PRESENTATION_RATIO_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRESENTATION_CODEABLE_CONCEPT])) {
            $v = $this->getPresentationCodeableConcept();
            foreach($validationRules[self::FIELD_PRESENTATION_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_STRENGTH, self::FIELD_PRESENTATION_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRESENTATION_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_PRESENTATION_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_PRESENTATION_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRESENTATION_QUANTITY])) {
            $v = $this->getPresentationQuantity();
            foreach($validationRules[self::FIELD_PRESENTATION_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_STRENGTH, self::FIELD_PRESENTATION_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRESENTATION_QUANTITY])) {
                        $errs[self::FIELD_PRESENTATION_QUANTITY] = [];
                    }
                    $errs[self::FIELD_PRESENTATION_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT_PRESENTATION])) {
            $v = $this->getTextPresentation();
            foreach($validationRules[self::FIELD_TEXT_PRESENTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_STRENGTH, self::FIELD_TEXT_PRESENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT_PRESENTATION])) {
                        $errs[self::FIELD_TEXT_PRESENTATION] = [];
                    }
                    $errs[self::FIELD_TEXT_PRESENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONCENTRATION_RATIO])) {
            $v = $this->getConcentrationRatio();
            foreach($validationRules[self::FIELD_CONCENTRATION_RATIO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_STRENGTH, self::FIELD_CONCENTRATION_RATIO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONCENTRATION_RATIO])) {
                        $errs[self::FIELD_CONCENTRATION_RATIO] = [];
                    }
                    $errs[self::FIELD_CONCENTRATION_RATIO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONCENTRATION_RATIO_RANGE])) {
            $v = $this->getConcentrationRatioRange();
            foreach($validationRules[self::FIELD_CONCENTRATION_RATIO_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_STRENGTH, self::FIELD_CONCENTRATION_RATIO_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONCENTRATION_RATIO_RANGE])) {
                        $errs[self::FIELD_CONCENTRATION_RATIO_RANGE] = [];
                    }
                    $errs[self::FIELD_CONCENTRATION_RATIO_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONCENTRATION_CODEABLE_CONCEPT])) {
            $v = $this->getConcentrationCodeableConcept();
            foreach($validationRules[self::FIELD_CONCENTRATION_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_STRENGTH, self::FIELD_CONCENTRATION_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONCENTRATION_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_CONCENTRATION_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_CONCENTRATION_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONCENTRATION_QUANTITY])) {
            $v = $this->getConcentrationQuantity();
            foreach($validationRules[self::FIELD_CONCENTRATION_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_STRENGTH, self::FIELD_CONCENTRATION_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONCENTRATION_QUANTITY])) {
                        $errs[self::FIELD_CONCENTRATION_QUANTITY] = [];
                    }
                    $errs[self::FIELD_CONCENTRATION_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT_CONCENTRATION])) {
            $v = $this->getTextConcentration();
            foreach($validationRules[self::FIELD_TEXT_CONCENTRATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_STRENGTH, self::FIELD_TEXT_CONCENTRATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT_CONCENTRATION])) {
                        $errs[self::FIELD_TEXT_CONCENTRATION] = [];
                    }
                    $errs[self::FIELD_TEXT_CONCENTRATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BASIS])) {
            $v = $this->getBasis();
            foreach($validationRules[self::FIELD_BASIS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_STRENGTH, self::FIELD_BASIS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASIS])) {
                        $errs[self::FIELD_BASIS] = [];
                    }
                    $errs[self::FIELD_BASIS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEASUREMENT_POINT])) {
            $v = $this->getMeasurementPoint();
            foreach($validationRules[self::FIELD_MEASUREMENT_POINT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_STRENGTH, self::FIELD_MEASUREMENT_POINT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEASUREMENT_POINT])) {
                        $errs[self::FIELD_MEASUREMENT_POINT] = [];
                    }
                    $errs[self::FIELD_MEASUREMENT_POINT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COUNTRY])) {
            $v = $this->getCountry();
            foreach($validationRules[self::FIELD_COUNTRY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_STRENGTH, self::FIELD_COUNTRY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COUNTRY])) {
                        $errs[self::FIELD_COUNTRY] = [];
                    }
                    $errs[self::FIELD_COUNTRY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE_STRENGTH])) {
            $v = $this->getReferenceStrength();
            foreach($validationRules[self::FIELD_REFERENCE_STRENGTH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_STRENGTH, self::FIELD_REFERENCE_STRENGTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE_STRENGTH])) {
                        $errs[self::FIELD_REFERENCE_STRENGTH] = [];
                    }
                    $errs[self::FIELD_REFERENCE_STRENGTH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientStrength $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientStrength
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRIngredientStrength)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_PRESENTATION_RATIO === $childName) {
                $type->setPresentationRatio(FHIRRatio::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PRESENTATION_RATIO_RANGE === $childName) {
                $type->setPresentationRatioRange(FHIRRatioRange::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PRESENTATION_CODEABLE_CONCEPT === $childName) {
                $type->setPresentationCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PRESENTATION_QUANTITY === $childName) {
                $type->setPresentationQuantity(FHIRQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TEXT_PRESENTATION === $childName) {
                $type->setTextPresentation(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CONCENTRATION_RATIO === $childName) {
                $type->setConcentrationRatio(FHIRRatio::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONCENTRATION_RATIO_RANGE === $childName) {
                $type->setConcentrationRatioRange(FHIRRatioRange::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONCENTRATION_CODEABLE_CONCEPT === $childName) {
                $type->setConcentrationCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONCENTRATION_QUANTITY === $childName) {
                $type->setConcentrationQuantity(FHIRQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TEXT_CONCENTRATION === $childName) {
                $type->setTextConcentration(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_BASIS === $childName) {
                $type->setBasis(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEASUREMENT_POINT === $childName) {
                $type->setMeasurementPoint(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_COUNTRY === $childName) {
                $type->addCountry(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REFERENCE_STRENGTH === $childName) {
                $type->addReferenceStrength(FHIRIngredientReferenceStrength::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_TEXT_PRESENTATION])) {
            $pt = $type->getTextPresentation();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TEXT_PRESENTATION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setTextPresentation((string)$attributes[self::FIELD_TEXT_PRESENTATION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TEXT_CONCENTRATION])) {
            $pt = $type->getTextConcentration();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TEXT_CONCENTRATION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setTextConcentration((string)$attributes[self::FIELD_TEXT_CONCENTRATION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MEASUREMENT_POINT])) {
            $pt = $type->getMeasurementPoint();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MEASUREMENT_POINT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMeasurementPoint((string)$attributes[self::FIELD_MEASUREMENT_POINT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'IngredientStrength', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_TEXT_PRESENTATION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getTextPresentation())) {
            $xw->writeAttribute(self::FIELD_TEXT_PRESENTATION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_TEXT_CONCENTRATION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getTextConcentration())) {
            $xw->writeAttribute(self::FIELD_TEXT_CONCENTRATION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MEASUREMENT_POINT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMeasurementPoint())) {
            $xw->writeAttribute(self::FIELD_MEASUREMENT_POINT, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getPresentationRatio())) {
            $xw->startElement(self::FIELD_PRESENTATION_RATIO);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPresentationRatioRange())) {
            $xw->startElement(self::FIELD_PRESENTATION_RATIO_RANGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPresentationCodeableConcept())) {
            $xw->startElement(self::FIELD_PRESENTATION_CODEABLE_CONCEPT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPresentationQuantity())) {
            $xw->startElement(self::FIELD_PRESENTATION_QUANTITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_TEXT_PRESENTATION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getTextPresentation())) {
            $xw->startElement(self::FIELD_TEXT_PRESENTATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getConcentrationRatio())) {
            $xw->startElement(self::FIELD_CONCENTRATION_RATIO);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getConcentrationRatioRange())) {
            $xw->startElement(self::FIELD_CONCENTRATION_RATIO_RANGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getConcentrationCodeableConcept())) {
            $xw->startElement(self::FIELD_CONCENTRATION_CODEABLE_CONCEPT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getConcentrationQuantity())) {
            $xw->startElement(self::FIELD_CONCENTRATION_QUANTITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_TEXT_CONCENTRATION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getTextConcentration())) {
            $xw->startElement(self::FIELD_TEXT_CONCENTRATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getBasis())) {
            $xw->startElement(self::FIELD_BASIS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MEASUREMENT_POINT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMeasurementPoint())) {
            $xw->startElement(self::FIELD_MEASUREMENT_POINT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getCountry() as $v) {
            $xw->startElement(self::FIELD_COUNTRY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getReferenceStrength() as $v) {
            $xw->startElement(self::FIELD_REFERENCE_STRENGTH);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getPresentationRatio())) {
            $out->{self::FIELD_PRESENTATION_RATIO} = $v;
        }
        if (null !== ($v = $this->getPresentationRatioRange())) {
            $out->{self::FIELD_PRESENTATION_RATIO_RANGE} = $v;
        }
        if (null !== ($v = $this->getPresentationCodeableConcept())) {
            $out->{self::FIELD_PRESENTATION_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getPresentationQuantity())) {
            $out->{self::FIELD_PRESENTATION_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getTextPresentation())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TEXT_PRESENTATION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TEXT_PRESENTATION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getConcentrationRatio())) {
            $out->{self::FIELD_CONCENTRATION_RATIO} = $v;
        }
        if (null !== ($v = $this->getConcentrationRatioRange())) {
            $out->{self::FIELD_CONCENTRATION_RATIO_RANGE} = $v;
        }
        if (null !== ($v = $this->getConcentrationCodeableConcept())) {
            $out->{self::FIELD_CONCENTRATION_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getConcentrationQuantity())) {
            $out->{self::FIELD_CONCENTRATION_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getTextConcentration())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TEXT_CONCENTRATION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TEXT_CONCENTRATION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getBasis())) {
            $out->{self::FIELD_BASIS} = $v;
        }
        if (null !== ($v = $this->getMeasurementPoint())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MEASUREMENT_POINT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MEASUREMENT_POINT_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getCountry())) {
            $out->{self::FIELD_COUNTRY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_COUNTRY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getReferenceStrength())) {
            $out->{self::FIELD_REFERENCE_STRENGTH} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_REFERENCE_STRENGTH}[] = $v;
            }
        }

        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}