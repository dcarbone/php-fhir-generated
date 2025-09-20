<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRIngredient;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 20th, 2025 13:35+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatio;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatioRange;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * An ingredient of a manufactured item or pharmaceutical product.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRIngredientStrength extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_INGREDIENT_DOT_STRENGTH;

    /* class_default.php:56 */
    public const FIELD_PRESENTATION_RATIO = 'presentationRatio';
    public const FIELD_PRESENTATION_RATIO_RANGE = 'presentationRatioRange';
    public const FIELD_TEXT_PRESENTATION = 'textPresentation';
    public const FIELD_TEXT_PRESENTATION_EXT = '_textPresentation';
    public const FIELD_CONCENTRATION_RATIO = 'concentrationRatio';
    public const FIELD_CONCENTRATION_RATIO_RANGE = 'concentrationRatioRange';
    public const FIELD_TEXT_CONCENTRATION = 'textConcentration';
    public const FIELD_TEXT_CONCENTRATION_EXT = '_textConcentration';
    public const FIELD_MEASUREMENT_POINT = 'measurementPoint';
    public const FIELD_MEASUREMENT_POINT_EXT = '_measurementPoint';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_REFERENCE_STRENGTH = 'referenceStrength';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_TEXT_PRESENTATION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TEXT_CONCENTRATION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MEASUREMENT_POINT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatio 
     */
    #[FHIRRatio]
    protected FHIRRatio $presentationRatio;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatioRange 
     */
    #[FHIRRatioRange]
    protected FHIRRatioRange $presentationRatioRange;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual represention of either the whole of the presentation strength or a
     * part of it - with the rest being in Strength.presentation as a ratio.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $textPresentation;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatio 
     */
    #[FHIRRatio]
    protected FHIRRatio $concentrationRatio;
    /**
     * A range of ratios expressed as a low and high numerator and a denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatioRange 
     */
    #[FHIRRatioRange]
    protected FHIRRatioRange $concentrationRatioRange;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual represention of either the whole of the concentration strength or a
     * part of it - with the rest being in Strength.concentration as a ratio.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $textConcentration;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For when strength is measured at a particular point or distance. There are
     * products where strength is measured at a particular point. For example, the
     * strength of the ingredient in some inhalers is measured at a particular position
     * relative to the point of aerosolization.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $measurementPoint;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country or countries for which the strength range applies.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $country;
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
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientReferenceStrength> 
     */
    #[FHIRIngredientReferenceStrength]
    protected array $referenceStrength;

    /* constructor.php:61 */
    /**
     * FHIRIngredientStrength Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension> $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatio $presentationRatio
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatioRange $presentationRatioRange
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $textPresentation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatio $concentrationRatio
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatioRange $concentrationRatioRange
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $textConcentration
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $measurementPoint
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept> $country
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientReferenceStrength> $referenceStrength
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRRatio $presentationRatio = null,
                                null|FHIRRatioRange $presentationRatioRange = null,
                                null|string|FHIRStringPrimitive|FHIRString $textPresentation = null,
                                null|FHIRRatio $concentrationRatio = null,
                                null|FHIRRatioRange $concentrationRatioRange = null,
                                null|string|FHIRStringPrimitive|FHIRString $textConcentration = null,
                                null|string|FHIRStringPrimitive|FHIRString $measurementPoint = null,
                                null|iterable $country = null,
                                null|iterable $referenceStrength = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $presentationRatio) {
            $this->setPresentationRatio($presentationRatio);
        }
        if (null !== $presentationRatioRange) {
            $this->setPresentationRatioRange($presentationRatioRange);
        }
        if (null !== $textPresentation) {
            $this->setTextPresentation($textPresentation);
        }
        if (null !== $concentrationRatio) {
            $this->setConcentrationRatio($concentrationRatio);
        }
        if (null !== $concentrationRatioRange) {
            $this->setConcentrationRatioRange($concentrationRatioRange);
        }
        if (null !== $textConcentration) {
            $this->setTextConcentration($textConcentration);
        }
        if (null !== $measurementPoint) {
            $this->setMeasurementPoint($measurementPoint);
        }
        if (null !== $country) {
            $this->setCountry(...$country);
        }
        if (null !== $referenceStrength) {
            $this->setReferenceStrength(...$referenceStrength);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatio
     */
    public function getPresentationRatio(): null|FHIRRatio
    {
        return $this->presentationRatio ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatio $presentationRatio
     * @return static
     */
    public function setPresentationRatio(null|FHIRRatio $presentationRatio): self
    {
        if (null === $presentationRatio) {
            unset($this->presentationRatio);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatioRange
     */
    public function getPresentationRatioRange(): null|FHIRRatioRange
    {
        return $this->presentationRatioRange ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatioRange $presentationRatioRange
     * @return static
     */
    public function setPresentationRatioRange(null|FHIRRatioRange $presentationRatioRange): self
    {
        if (null === $presentationRatioRange) {
            unset($this->presentationRatioRange);
            return $this;
        }
        $this->presentationRatioRange = $presentationRatioRange;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual represention of either the whole of the presentation strength or a
     * part of it - with the rest being in Strength.presentation as a ratio.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getTextPresentation(): null|FHIRString
    {
        return $this->textPresentation ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual represention of either the whole of the presentation strength or a
     * part of it - with the rest being in Strength.presentation as a ratio.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $textPresentation
     * @return static
     */
    public function setTextPresentation(null|string|FHIRStringPrimitive|FHIRString $textPresentation): self
    {
        if (null === $textPresentation) {
            unset($this->textPresentation);
            return $this;
        }
        if (!($textPresentation instanceof FHIRString)) {
            $textPresentation = new FHIRString(value: $textPresentation);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatio
     */
    public function getConcentrationRatio(): null|FHIRRatio
    {
        return $this->concentrationRatio ?? null;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatio $concentrationRatio
     * @return static
     */
    public function setConcentrationRatio(null|FHIRRatio $concentrationRatio): self
    {
        if (null === $concentrationRatio) {
            unset($this->concentrationRatio);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatioRange
     */
    public function getConcentrationRatioRange(): null|FHIRRatioRange
    {
        return $this->concentrationRatioRange ?? null;
    }

    /**
     * A range of ratios expressed as a low and high numerator and a denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatioRange $concentrationRatioRange
     * @return static
     */
    public function setConcentrationRatioRange(null|FHIRRatioRange $concentrationRatioRange): self
    {
        if (null === $concentrationRatioRange) {
            unset($this->concentrationRatioRange);
            return $this;
        }
        $this->concentrationRatioRange = $concentrationRatioRange;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual represention of either the whole of the concentration strength or a
     * part of it - with the rest being in Strength.concentration as a ratio.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getTextConcentration(): null|FHIRString
    {
        return $this->textConcentration ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual represention of either the whole of the concentration strength or a
     * part of it - with the rest being in Strength.concentration as a ratio.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $textConcentration
     * @return static
     */
    public function setTextConcentration(null|string|FHIRStringPrimitive|FHIRString $textConcentration): self
    {
        if (null === $textConcentration) {
            unset($this->textConcentration);
            return $this;
        }
        if (!($textConcentration instanceof FHIRString)) {
            $textConcentration = new FHIRString(value: $textConcentration);
        }
        $this->textConcentration = $textConcentration;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For when strength is measured at a particular point or distance. There are
     * products where strength is measured at a particular point. For example, the
     * strength of the ingredient in some inhalers is measured at a particular position
     * relative to the point of aerosolization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getMeasurementPoint(): null|FHIRString
    {
        return $this->measurementPoint ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For when strength is measured at a particular point or distance. There are
     * products where strength is measured at a particular point. For example, the
     * strength of the ingredient in some inhalers is measured at a particular position
     * relative to the point of aerosolization.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $measurementPoint
     * @return static
     */
    public function setMeasurementPoint(null|string|FHIRStringPrimitive|FHIRString $measurementPoint): self
    {
        if (null === $measurementPoint) {
            unset($this->measurementPoint);
            return $this;
        }
        if (!($measurementPoint instanceof FHIRString)) {
            $measurementPoint = new FHIRString(value: $measurementPoint);
        }
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getCountry(): array
    {
        return $this->country ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getCountryIterator(): iterable
    {
        if (!isset($this->country)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->country);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country or countries for which the strength range applies.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $country
     * @return static
     */
    public function addCountry(FHIRCodeableConcept $country): self
    {
        if (!isset($this->country)) {
            $this->country = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept ...$country
     * @return static
     */
    public function setCountry(FHIRCodeableConcept ...$country): self
    {
        if ([] === $country) {
            unset($this->country);
            return $this;
        }
        $this->country = $country;
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientReferenceStrength>
     */
    public function getReferenceStrength(): array
    {
        return $this->referenceStrength ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientReferenceStrength>
     */
    public function getReferenceStrengthIterator(): iterable
    {
        if (!isset($this->referenceStrength)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->referenceStrength);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientReferenceStrength $referenceStrength
     * @return static
     */
    public function addReferenceStrength(FHIRIngredientReferenceStrength $referenceStrength): self
    {
        if (!isset($this->referenceStrength)) {
            $this->referenceStrength = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientReferenceStrength ...$referenceStrength
     * @return static
     */
    public function setReferenceStrength(FHIRIngredientReferenceStrength ...$referenceStrength): self
    {
        if ([] === $referenceStrength) {
            unset($this->referenceStrength);
            return $this;
        }
        $this->referenceStrength = $referenceStrength;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientStrength $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientStrength
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRIngredientStrength)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRESENTATION_RATIO === $cen) {
                $type->setPresentationRatio(FHIRRatio::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRESENTATION_RATIO_RANGE === $cen) {
                $type->setPresentationRatioRange(FHIRRatioRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT_PRESENTATION === $cen) {
                $type->setTextPresentation(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONCENTRATION_RATIO === $cen) {
                $type->setConcentrationRatio(FHIRRatio::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONCENTRATION_RATIO_RANGE === $cen) {
                $type->setConcentrationRatioRange(FHIRRatioRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT_CONCENTRATION === $cen) {
                $type->setTextConcentration(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MEASUREMENT_POINT === $cen) {
                $type->setMeasurementPoint(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COUNTRY === $cen) {
                $type->addCountry(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REFERENCE_STRENGTH === $cen) {
                $type->addReferenceStrength(FHIRIngredientReferenceStrength::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TEXT_PRESENTATION])) {
            if (isset($type->textPresentation)) {
                $type->textPresentation->setValue((string)$attributes[self::FIELD_TEXT_PRESENTATION]);
            } else {
                $type->setTextPresentation((string)$attributes[self::FIELD_TEXT_PRESENTATION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TEXT_PRESENTATION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TEXT_CONCENTRATION])) {
            if (isset($type->textConcentration)) {
                $type->textConcentration->setValue((string)$attributes[self::FIELD_TEXT_CONCENTRATION]);
            } else {
                $type->setTextConcentration((string)$attributes[self::FIELD_TEXT_CONCENTRATION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TEXT_CONCENTRATION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MEASUREMENT_POINT])) {
            if (isset($type->measurementPoint)) {
                $type->measurementPoint->setValue((string)$attributes[self::FIELD_MEASUREMENT_POINT]);
            } else {
                $type->setMeasurementPoint((string)$attributes[self::FIELD_MEASUREMENT_POINT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MEASUREMENT_POINT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->textPresentation) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TEXT_PRESENTATION]) {
            $xw->writeAttribute(self::FIELD_TEXT_PRESENTATION, $this->textPresentation->_getValueAsString());
        }
        if (isset($this->textConcentration) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TEXT_CONCENTRATION]) {
            $xw->writeAttribute(self::FIELD_TEXT_CONCENTRATION, $this->textConcentration->_getValueAsString());
        }
        if (isset($this->measurementPoint) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MEASUREMENT_POINT]) {
            $xw->writeAttribute(self::FIELD_MEASUREMENT_POINT, $this->measurementPoint->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->presentationRatio)) {
            $xw->startElement(self::FIELD_PRESENTATION_RATIO);
            $this->presentationRatio->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->presentationRatioRange)) {
            $xw->startElement(self::FIELD_PRESENTATION_RATIO_RANGE);
            $this->presentationRatioRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->textPresentation)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TEXT_PRESENTATION]
                || $this->textPresentation->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TEXT_PRESENTATION);
            $this->textPresentation->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TEXT_PRESENTATION]);
            $xw->endElement();
        }
        if (isset($this->concentrationRatio)) {
            $xw->startElement(self::FIELD_CONCENTRATION_RATIO);
            $this->concentrationRatio->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->concentrationRatioRange)) {
            $xw->startElement(self::FIELD_CONCENTRATION_RATIO_RANGE);
            $this->concentrationRatioRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->textConcentration)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TEXT_CONCENTRATION]
                || $this->textConcentration->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TEXT_CONCENTRATION);
            $this->textConcentration->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TEXT_CONCENTRATION]);
            $xw->endElement();
        }
        if (isset($this->measurementPoint)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MEASUREMENT_POINT]
                || $this->measurementPoint->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MEASUREMENT_POINT);
            $this->measurementPoint->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MEASUREMENT_POINT]);
            $xw->endElement();
        }
        if (isset($this->country)) {
            foreach ($this->country as $v) {
                $xw->startElement(self::FIELD_COUNTRY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->referenceStrength)) {
            foreach ($this->referenceStrength as $v) {
                $xw->startElement(self::FIELD_REFERENCE_STRENGTH);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientStrength $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientStrength
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRIngredientStrength)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->presentationRatio) || property_exists($decoded, self::FIELD_PRESENTATION_RATIO)) {
            if (is_array($decoded->presentationRatio)) {
                $type->setPresentationRatio(FHIRRatio::jsonUnserialize(reset($decoded->presentationRatio), $config));
            } else {
                $type->setPresentationRatio(FHIRRatio::jsonUnserialize($decoded->presentationRatio, $config));
            }
        }
        if (isset($decoded->presentationRatioRange) || property_exists($decoded, self::FIELD_PRESENTATION_RATIO_RANGE)) {
            if (is_array($decoded->presentationRatioRange)) {
                $type->setPresentationRatioRange(FHIRRatioRange::jsonUnserialize(reset($decoded->presentationRatioRange), $config));
            } else {
                $type->setPresentationRatioRange(FHIRRatioRange::jsonUnserialize($decoded->presentationRatioRange, $config));
            }
        }
        if (isset($decoded->textPresentation)
            || isset($decoded->_textPresentation)
            || property_exists($decoded, self::FIELD_TEXT_PRESENTATION)
            || property_exists($decoded, self::FIELD_TEXT_PRESENTATION_EXT)) {
            $v = $decoded->_textPresentation ?? new \stdClass();
            $v->value = $decoded->textPresentation ?? null;
            $type->setTextPresentation(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->concentrationRatio) || property_exists($decoded, self::FIELD_CONCENTRATION_RATIO)) {
            if (is_array($decoded->concentrationRatio)) {
                $type->setConcentrationRatio(FHIRRatio::jsonUnserialize(reset($decoded->concentrationRatio), $config));
            } else {
                $type->setConcentrationRatio(FHIRRatio::jsonUnserialize($decoded->concentrationRatio, $config));
            }
        }
        if (isset($decoded->concentrationRatioRange) || property_exists($decoded, self::FIELD_CONCENTRATION_RATIO_RANGE)) {
            if (is_array($decoded->concentrationRatioRange)) {
                $type->setConcentrationRatioRange(FHIRRatioRange::jsonUnserialize(reset($decoded->concentrationRatioRange), $config));
            } else {
                $type->setConcentrationRatioRange(FHIRRatioRange::jsonUnserialize($decoded->concentrationRatioRange, $config));
            }
        }
        if (isset($decoded->textConcentration)
            || isset($decoded->_textConcentration)
            || property_exists($decoded, self::FIELD_TEXT_CONCENTRATION)
            || property_exists($decoded, self::FIELD_TEXT_CONCENTRATION_EXT)) {
            $v = $decoded->_textConcentration ?? new \stdClass();
            $v->value = $decoded->textConcentration ?? null;
            $type->setTextConcentration(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->measurementPoint)
            || isset($decoded->_measurementPoint)
            || property_exists($decoded, self::FIELD_MEASUREMENT_POINT)
            || property_exists($decoded, self::FIELD_MEASUREMENT_POINT_EXT)) {
            $v = $decoded->_measurementPoint ?? new \stdClass();
            $v->value = $decoded->measurementPoint ?? null;
            $type->setMeasurementPoint(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->country) || property_exists($decoded, self::FIELD_COUNTRY)) {
            if (is_object($decoded->country)) {
                $vals = [$decoded->country];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_COUNTRY, true);
            } else {
                $vals = $decoded->country;
            }
            foreach($vals as $v) {
                $type->addCountry(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->referenceStrength) || property_exists($decoded, self::FIELD_REFERENCE_STRENGTH)) {
            if (is_object($decoded->referenceStrength)) {
                $vals = [$decoded->referenceStrength];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_REFERENCE_STRENGTH, true);
            } else {
                $vals = $decoded->referenceStrength;
            }
            foreach($vals as $v) {
                $type->addReferenceStrength(FHIRIngredientReferenceStrength::jsonUnserialize($v, $config));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->presentationRatio)) {
            $out->presentationRatio = $this->presentationRatio;
        }
        if (isset($this->presentationRatioRange)) {
            $out->presentationRatioRange = $this->presentationRatioRange;
        }
        if (isset($this->textPresentation)) {
            if (null !== ($val = $this->textPresentation->getValue())) {
                $out->textPresentation = $val;
            }
            if ($this->textPresentation->_nonValueFieldDefined()) {
                $ext = $this->textPresentation->jsonSerialize();
                unset($ext->value);
                $out->_textPresentation = $ext;
            }
        }
        if (isset($this->concentrationRatio)) {
            $out->concentrationRatio = $this->concentrationRatio;
        }
        if (isset($this->concentrationRatioRange)) {
            $out->concentrationRatioRange = $this->concentrationRatioRange;
        }
        if (isset($this->textConcentration)) {
            if (null !== ($val = $this->textConcentration->getValue())) {
                $out->textConcentration = $val;
            }
            if ($this->textConcentration->_nonValueFieldDefined()) {
                $ext = $this->textConcentration->jsonSerialize();
                unset($ext->value);
                $out->_textConcentration = $ext;
            }
        }
        if (isset($this->measurementPoint)) {
            if (null !== ($val = $this->measurementPoint->getValue())) {
                $out->measurementPoint = $val;
            }
            if ($this->measurementPoint->_nonValueFieldDefined()) {
                $ext = $this->measurementPoint->jsonSerialize();
                unset($ext->value);
                $out->_measurementPoint = $ext;
            }
        }
        if (isset($this->country) && [] !== $this->country) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_COUNTRY) && 1 === count($this->country)) {
                $out->country = $this->country[0];
            } else {
                $out->country = $this->country;
            }
        }
        if (isset($this->referenceStrength) && [] !== $this->referenceStrength) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_REFERENCE_STRENGTH) && 1 === count($this->referenceStrength)) {
                $out->referenceStrength = $this->referenceStrength[0];
            } else {
                $out->referenceStrength = $this->referenceStrength;
            }
        }
        return $out;
    }
}