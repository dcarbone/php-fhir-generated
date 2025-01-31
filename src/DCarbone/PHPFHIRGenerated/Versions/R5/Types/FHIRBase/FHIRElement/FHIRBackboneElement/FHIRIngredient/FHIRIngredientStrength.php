<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 23:45+0000
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * An ingredient of a manufactured item or pharmaceutical product.
 */
class FHIRIngredientStrength extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_INGREDIENT_DOT_STRENGTH;

    /* class_default.php:47 */
    public const FIELD_PRESENTATION_RATIO = 'presentationRatio';
    public const FIELD_PRESENTATION_RATIO_RANGE = 'presentationRatioRange';
    public const FIELD_PRESENTATION_CODEABLE_CONCEPT = 'presentationCodeableConcept';
    public const FIELD_PRESENTATION_QUANTITY = 'presentationQuantity';
    public const FIELD_TEXT_PRESENTATION = 'textPresentation';
    public const FIELD_TEXT_PRESENTATION_EXT = '_textPresentation';
    public const FIELD_CONCENTRATION_RATIO = 'concentrationRatio';
    public const FIELD_CONCENTRATION_RATIO_RANGE = 'concentrationRatioRange';
    public const FIELD_CONCENTRATION_CODEABLE_CONCEPT = 'concentrationCodeableConcept';
    public const FIELD_CONCENTRATION_QUANTITY = 'concentrationQuantity';
    public const FIELD_TEXT_CONCENTRATION = 'textConcentration';
    public const FIELD_TEXT_CONCENTRATION_EXT = '_textConcentration';
    public const FIELD_BASIS = 'basis';
    public const FIELD_MEASUREMENT_POINT = 'measurementPoint';
    public const FIELD_MEASUREMENT_POINT_EXT = '_measurementPoint';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_REFERENCE_STRENGTH = 'referenceStrength';

    /* class_default.php:66 */
    private static array $_validationRules = [];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_TEXT_PRESENTATION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TEXT_CONCENTRATION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MEASUREMENT_POINT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio 
     */
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange 
     */
    protected FHIRRatioRange $presentationRatioRange;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $presentationCodeableConcept;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity 
     */
    protected FHIRQuantity $presentationQuantity;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual represention of either the whole of the presentation strength or a
     * part of it - with the rest being in Strength.presentation as a ratio.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $textPresentation;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio 
     */
    protected FHIRRatio $concentrationRatio;
    /**
     * A range of ratios expressed as a low and high numerator and a denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange 
     */
    protected FHIRRatioRange $concentrationRatioRange;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $concentrationCodeableConcept;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity 
     */
    protected FHIRQuantity $concentrationQuantity;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual represention of either the whole of the concentration strength or a
     * part of it - with the rest being in Strength.concentration as a ratio.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $textConcentration;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that indicates if the strength is, for example, based on the ingredient
     * substance as stated or on the substance base (when the ingredient is a salt).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $basis;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $measurementPoint;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country or countries for which the strength range applies.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientReferenceStrength[] 
     */
    protected array $referenceStrength;

    /* constructor.php:63 */
    /**
     * FHIRIngredientStrength Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio $presentationRatio
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange $presentationRatioRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $presentationCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $presentationQuantity
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $textPresentation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio $concentrationRatio
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange $concentrationRatioRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $concentrationCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $concentrationQuantity
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $textConcentration
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $basis
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $measurementPoint
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $country
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientReferenceStrength[] $referenceStrength
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRRatio $presentationRatio = null,
                                null|FHIRRatioRange $presentationRatioRange = null,
                                null|FHIRCodeableConcept $presentationCodeableConcept = null,
                                null|FHIRDecimal|FHIRQuantity $presentationQuantity = null,
                                null|string|FHIRStringPrimitive|FHIRString $textPresentation = null,
                                null|FHIRRatio $concentrationRatio = null,
                                null|FHIRRatioRange $concentrationRatioRange = null,
                                null|FHIRCodeableConcept $concentrationCodeableConcept = null,
                                null|FHIRDecimal|FHIRQuantity $concentrationQuantity = null,
                                null|string|FHIRStringPrimitive|FHIRString $textConcentration = null,
                                null|FHIRCodeableConcept $basis = null,
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
        if (null !== $presentationCodeableConcept) {
            $this->setPresentationCodeableConcept($presentationCodeableConcept);
        }
        if (null !== $presentationQuantity) {
            $this->setPresentationQuantity($presentationQuantity);
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
        if (null !== $concentrationCodeableConcept) {
            $this->setConcentrationCodeableConcept($concentrationCodeableConcept);
        }
        if (null !== $concentrationQuantity) {
            $this->setConcentrationQuantity($concentrationQuantity);
        }
        if (null !== $textConcentration) {
            $this->setTextConcentration($textConcentration);
        }
        if (null !== $basis) {
            $this->setBasis($basis);
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

    /* class_default.php:136 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:162 */
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio $presentationRatio
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange $presentationRatioRange
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getPresentationCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->presentationCodeableConcept ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $presentationCodeableConcept
     * @return static
     */
    public function setPresentationCodeableConcept(null|FHIRCodeableConcept $presentationCodeableConcept): self
    {
        if (null === $presentationCodeableConcept) {
            unset($this->presentationCodeableConcept);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getPresentationQuantity(): null|FHIRQuantity
    {
        return $this->presentationQuantity ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $presentationQuantity
     * @return static
     */
    public function setPresentationQuantity(null|FHIRDecimal|FHIRQuantity $presentationQuantity): self
    {
        if (null === $presentationQuantity) {
            unset($this->presentationQuantity);
            return $this;
        }
        if (!($presentationQuantity instanceof FHIRQuantity)) {
            $presentationQuantity = new FHIRQuantity(value: $presentationQuantity);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getTextPresentation(): null|FHIRString
    {
        return $this->textPresentation ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual represention of either the whole of the presentation strength or a
     * part of it - with the rest being in Strength.presentation as a ratio.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $textPresentation
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTextPresentation(null|string|FHIRStringPrimitive|FHIRString $textPresentation,
                                        ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $textPresentation) {
            unset($this->textPresentation);
            return $this;
        }
        if (!($textPresentation instanceof FHIRString)) {
            $textPresentation = new FHIRString(value: $textPresentation);
        }
        $this->textPresentation = $textPresentation;
        if ($this->_valueXMLLocations[self::FIELD_TEXT_PRESENTATION] !== $valueXMLLocation) {
            $this->_setTextPresentationValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the textPresentation element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getTextPresentationValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_TEXT_PRESENTATION];
    }

    /**
     * Set the location the "value" field of the textPresentation element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setTextPresentationValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_TEXT_PRESENTATION] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio $concentrationRatio
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange $concentrationRatioRange
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getConcentrationCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->concentrationCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $concentrationCodeableConcept
     * @return static
     */
    public function setConcentrationCodeableConcept(null|FHIRCodeableConcept $concentrationCodeableConcept): self
    {
        if (null === $concentrationCodeableConcept) {
            unset($this->concentrationCodeableConcept);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getConcentrationQuantity(): null|FHIRQuantity
    {
        return $this->concentrationQuantity ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $concentrationQuantity
     * @return static
     */
    public function setConcentrationQuantity(null|FHIRDecimal|FHIRQuantity $concentrationQuantity): self
    {
        if (null === $concentrationQuantity) {
            unset($this->concentrationQuantity);
            return $this;
        }
        if (!($concentrationQuantity instanceof FHIRQuantity)) {
            $concentrationQuantity = new FHIRQuantity(value: $concentrationQuantity);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getTextConcentration(): null|FHIRString
    {
        return $this->textConcentration ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual represention of either the whole of the concentration strength or a
     * part of it - with the rest being in Strength.concentration as a ratio.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $textConcentration
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTextConcentration(null|string|FHIRStringPrimitive|FHIRString $textConcentration,
                                         ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $textConcentration) {
            unset($this->textConcentration);
            return $this;
        }
        if (!($textConcentration instanceof FHIRString)) {
            $textConcentration = new FHIRString(value: $textConcentration);
        }
        $this->textConcentration = $textConcentration;
        if ($this->_valueXMLLocations[self::FIELD_TEXT_CONCENTRATION] !== $valueXMLLocation) {
            $this->_setTextConcentrationValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the textConcentration element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getTextConcentrationValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_TEXT_CONCENTRATION];
    }

    /**
     * Set the location the "value" field of the textConcentration element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setTextConcentrationValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_TEXT_CONCENTRATION] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getBasis(): null|FHIRCodeableConcept
    {
        return $this->basis ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $basis
     * @return static
     */
    public function setBasis(null|FHIRCodeableConcept $basis): self
    {
        if (null === $basis) {
            unset($this->basis);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getMeasurementPoint(): null|FHIRString
    {
        return $this->measurementPoint ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $measurementPoint
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setMeasurementPoint(null|string|FHIRStringPrimitive|FHIRString $measurementPoint,
                                        ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $measurementPoint) {
            unset($this->measurementPoint);
            return $this;
        }
        if (!($measurementPoint instanceof FHIRString)) {
            $measurementPoint = new FHIRString(value: $measurementPoint);
        }
        $this->measurementPoint = $measurementPoint;
        if ($this->_valueXMLLocations[self::FIELD_MEASUREMENT_POINT] !== $valueXMLLocation) {
            $this->_setMeasurementPointValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the measurementPoint element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getMeasurementPointValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_MEASUREMENT_POINT];
    }

    /**
     * Set the location the "value" field of the measurementPoint element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setMeasurementPointValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_MEASUREMENT_POINT] = $valueXMLLocation;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getCountry(): array
    {
        return $this->country ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $country
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$country
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientReferenceStrength[]
     */
    public function getReferenceStrength(): array
    {
        return $this->referenceStrength ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientReferenceStrength>
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientReferenceStrength $referenceStrength
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientReferenceStrength ...$referenceStrength
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

    /* class_default.php:188 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (isset($validationRules[self::FIELD_PRESENTATION_RATIO])) {
            $v = $this->getPresentationRatio();
            foreach($validationRules[self::FIELD_PRESENTATION_RATIO] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRESENTATION_RATIO, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRESENTATION_RATIO_RANGE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRESENTATION_CODEABLE_CONCEPT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRESENTATION_QUANTITY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TEXT_PRESENTATION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONCENTRATION_RATIO, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONCENTRATION_RATIO_RANGE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONCENTRATION_CODEABLE_CONCEPT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONCENTRATION_QUANTITY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TEXT_CONCENTRATION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BASIS, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MEASUREMENT_POINT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COUNTRY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REFERENCE_STRENGTH, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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

    /* class_default.php:212 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientStrength $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientStrength
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
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRESENTATION_RATIO === $cen) {
                $type->setPresentationRatio(FHIRRatio::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRESENTATION_RATIO_RANGE === $cen) {
                $type->setPresentationRatioRange(FHIRRatioRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRESENTATION_CODEABLE_CONCEPT === $cen) {
                $type->setPresentationCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRESENTATION_QUANTITY === $cen) {
                $type->setPresentationQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT_PRESENTATION === $cen) {
                $type->setTextPresentation(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONCENTRATION_RATIO === $cen) {
                $type->setConcentrationRatio(FHIRRatio::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONCENTRATION_RATIO_RANGE === $cen) {
                $type->setConcentrationRatioRange(FHIRRatioRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONCENTRATION_CODEABLE_CONCEPT === $cen) {
                $type->setConcentrationCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONCENTRATION_QUANTITY === $cen) {
                $type->setConcentrationQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT_CONCENTRATION === $cen) {
                $type->setTextConcentration(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BASIS === $cen) {
                $type->setBasis(FHIRCodeableConcept::xmlUnserialize($ce, $config));
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
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TEXT_PRESENTATION])) {
            if (isset($type->textPresentation)) {
                $type->textPresentation->setValue((string)$attributes[self::FIELD_TEXT_PRESENTATION]);
                $type->_setTextPresentationValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setTextPresentation((string)$attributes[self::FIELD_TEXT_PRESENTATION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TEXT_CONCENTRATION])) {
            if (isset($type->textConcentration)) {
                $type->textConcentration->setValue((string)$attributes[self::FIELD_TEXT_CONCENTRATION]);
                $type->_setTextConcentrationValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setTextConcentration((string)$attributes[self::FIELD_TEXT_CONCENTRATION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MEASUREMENT_POINT])) {
            if (isset($type->measurementPoint)) {
                $type->measurementPoint->setValue((string)$attributes[self::FIELD_MEASUREMENT_POINT]);
                $type->_setMeasurementPointValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setMeasurementPoint((string)$attributes[self::FIELD_MEASUREMENT_POINT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
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
            $xw->writeAttribute(self::FIELD_TEXT_PRESENTATION, $this->textPresentation->_getFormattedValue());
        }
        if (isset($this->textConcentration) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TEXT_CONCENTRATION]) {
            $xw->writeAttribute(self::FIELD_TEXT_CONCENTRATION, $this->textConcentration->_getFormattedValue());
        }
        if (isset($this->measurementPoint) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MEASUREMENT_POINT]) {
            $xw->writeAttribute(self::FIELD_MEASUREMENT_POINT, $this->measurementPoint->_getFormattedValue());
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
        if (isset($this->presentationCodeableConcept)) {
            $xw->startElement(self::FIELD_PRESENTATION_CODEABLE_CONCEPT);
            $this->presentationCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->presentationQuantity)) {
            $xw->startElement(self::FIELD_PRESENTATION_QUANTITY);
            $this->presentationQuantity->xmlSerialize($xw, $config);
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
        if (isset($this->concentrationCodeableConcept)) {
            $xw->startElement(self::FIELD_CONCENTRATION_CODEABLE_CONCEPT);
            $this->concentrationCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->concentrationQuantity)) {
            $xw->startElement(self::FIELD_CONCENTRATION_QUANTITY);
            $this->concentrationQuantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->textConcentration)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TEXT_CONCENTRATION]
                || $this->textConcentration->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TEXT_CONCENTRATION);
            $this->textConcentration->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TEXT_CONCENTRATION]);
            $xw->endElement();
        }
        if (isset($this->basis)) {
            $xw->startElement(self::FIELD_BASIS);
            $this->basis->xmlSerialize($xw, $config);
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
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientStrength $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientStrength
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_PRESENTATION_RATIO]) || array_key_exists(self::FIELD_PRESENTATION_RATIO, $json)) {
            $type->setPresentationRatio(FHIRRatio::jsonUnserialize($json[self::FIELD_PRESENTATION_RATIO], $config));
        }
        if (isset($json[self::FIELD_PRESENTATION_RATIO_RANGE]) || array_key_exists(self::FIELD_PRESENTATION_RATIO_RANGE, $json)) {
            $type->setPresentationRatioRange(FHIRRatioRange::jsonUnserialize($json[self::FIELD_PRESENTATION_RATIO_RANGE], $config));
        }
        if (isset($json[self::FIELD_PRESENTATION_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_PRESENTATION_CODEABLE_CONCEPT, $json)) {
            $type->setPresentationCodeableConcept(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_PRESENTATION_CODEABLE_CONCEPT], $config));
        }
        if (isset($json[self::FIELD_PRESENTATION_QUANTITY]) || array_key_exists(self::FIELD_PRESENTATION_QUANTITY, $json)) {
            $type->setPresentationQuantity(FHIRQuantity::jsonUnserialize($json[self::FIELD_PRESENTATION_QUANTITY], $config));
        }
        if (isset($json[self::FIELD_TEXT_PRESENTATION])
            || isset($json[self::FIELD_TEXT_PRESENTATION_EXT])
            || array_key_exists(self::FIELD_TEXT_PRESENTATION, $json)
            || array_key_exists(self::FIELD_TEXT_PRESENTATION_EXT, $json)) {
            $value = $json[self::FIELD_TEXT_PRESENTATION] ?? null;
            $type->setTextPresentation(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_TEXT_PRESENTATION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CONCENTRATION_RATIO]) || array_key_exists(self::FIELD_CONCENTRATION_RATIO, $json)) {
            $type->setConcentrationRatio(FHIRRatio::jsonUnserialize($json[self::FIELD_CONCENTRATION_RATIO], $config));
        }
        if (isset($json[self::FIELD_CONCENTRATION_RATIO_RANGE]) || array_key_exists(self::FIELD_CONCENTRATION_RATIO_RANGE, $json)) {
            $type->setConcentrationRatioRange(FHIRRatioRange::jsonUnserialize($json[self::FIELD_CONCENTRATION_RATIO_RANGE], $config));
        }
        if (isset($json[self::FIELD_CONCENTRATION_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_CONCENTRATION_CODEABLE_CONCEPT, $json)) {
            $type->setConcentrationCodeableConcept(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_CONCENTRATION_CODEABLE_CONCEPT], $config));
        }
        if (isset($json[self::FIELD_CONCENTRATION_QUANTITY]) || array_key_exists(self::FIELD_CONCENTRATION_QUANTITY, $json)) {
            $type->setConcentrationQuantity(FHIRQuantity::jsonUnserialize($json[self::FIELD_CONCENTRATION_QUANTITY], $config));
        }
        if (isset($json[self::FIELD_TEXT_CONCENTRATION])
            || isset($json[self::FIELD_TEXT_CONCENTRATION_EXT])
            || array_key_exists(self::FIELD_TEXT_CONCENTRATION, $json)
            || array_key_exists(self::FIELD_TEXT_CONCENTRATION_EXT, $json)) {
            $value = $json[self::FIELD_TEXT_CONCENTRATION] ?? null;
            $type->setTextConcentration(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_TEXT_CONCENTRATION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_BASIS]) || array_key_exists(self::FIELD_BASIS, $json)) {
            $type->setBasis(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_BASIS], $config));
        }
        if (isset($json[self::FIELD_MEASUREMENT_POINT])
            || isset($json[self::FIELD_MEASUREMENT_POINT_EXT])
            || array_key_exists(self::FIELD_MEASUREMENT_POINT, $json)
            || array_key_exists(self::FIELD_MEASUREMENT_POINT_EXT, $json)) {
            $value = $json[self::FIELD_MEASUREMENT_POINT] ?? null;
            $type->setMeasurementPoint(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_MEASUREMENT_POINT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_COUNTRY]) || array_key_exists(self::FIELD_COUNTRY, $json)) {
            $vs = $json[self::FIELD_COUNTRY];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addCountry(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_REFERENCE_STRENGTH]) || array_key_exists(self::FIELD_REFERENCE_STRENGTH, $json)) {
            $vs = $json[self::FIELD_REFERENCE_STRENGTH];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
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
        if (isset($this->presentationCodeableConcept)) {
            $out->presentationCodeableConcept = $this->presentationCodeableConcept;
        }
        if (isset($this->presentationQuantity)) {
            $out->presentationQuantity = $this->presentationQuantity;
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
        if (isset($this->concentrationCodeableConcept)) {
            $out->concentrationCodeableConcept = $this->concentrationCodeableConcept;
        }
        if (isset($this->concentrationQuantity)) {
            $out->concentrationQuantity = $this->concentrationQuantity;
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
        if (isset($this->basis)) {
            $out->basis = $this->basis;
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
            $out->country = $this->country;
        }
        if (isset($this->referenceStrength) && [] !== $this->referenceStrength) {
            $out->referenceStrength = $this->referenceStrength;
        }
        return $out;
    }
    /* class_default.php:236 */
    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}