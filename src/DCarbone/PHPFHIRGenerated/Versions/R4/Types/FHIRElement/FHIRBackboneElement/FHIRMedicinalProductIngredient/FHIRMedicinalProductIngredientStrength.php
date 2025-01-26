<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 26th, 2025 01:06+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * An ingredient of a manufactured item or pharmaceutical product.
 */
class FHIRMedicinalProductIngredientStrength extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEDICINAL_PRODUCT_INGREDIENT_DOT_STRENGTH;


    public const FIELD_PRESENTATION = 'presentation';
    public const FIELD_PRESENTATION_LOW_LIMIT = 'presentationLowLimit';
    public const FIELD_CONCENTRATION = 'concentration';
    public const FIELD_CONCENTRATION_LOW_LIMIT = 'concentrationLowLimit';
    public const FIELD_MEASUREMENT_POINT = 'measurementPoint';
    public const FIELD_MEASUREMENT_POINT_EXT = '_measurementPoint';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_REFERENCE_STRENGTH = 'referenceStrength';

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of substance in the unit of presentation, or in the volume (or
     * mass) of the single pharmaceutical product or manufactured item.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio 
     */
    protected FHIRRatio $presentation;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A lower limit for the quantity of substance in the unit of presentation. For use
     * when there is a range of strengths, this is the lower limit, with the
     * presentation attribute becoming the upper limit.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio 
     */
    protected FHIRRatio $presentationLowLimit;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio 
     */
    protected FHIRRatio $concentration;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A lower limit for the strength per unitary volume (or mass), for when there is a
     * range. The concentration attribute then becomes the upper limit.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio 
     */
    protected FHIRRatio $concentrationLowLimit;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For when strength is measured at a particular point or distance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $country;
    /**
     * An ingredient of a manufactured item or pharmaceutical product.
     *
     * Strength expressed in terms of a reference substance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientReferenceStrength[] 
     */
    protected array $referenceStrength;

    /** Default validation map for fields in type MedicinalProductIngredient.Strength */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_PRESENTATION => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* constructor.php:66 */
    /**
     * FHIRMedicinalProductIngredientStrength Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio $presentation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio $presentationLowLimit
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio $concentration
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio $concentrationLowLimit
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $measurementPoint
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] $country
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientReferenceStrength[] $referenceStrength
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRRatio $presentation = null,
                                null|FHIRRatio $presentationLowLimit = null,
                                null|FHIRRatio $concentration = null,
                                null|FHIRRatio $concentrationLowLimit = null,
                                null|string|FHIRStringPrimitive|FHIRString $measurementPoint = null,
                                null|iterable $country = null,
                                null|iterable $referenceStrength = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $presentation) {
            $this->setPresentation($presentation);
        }
        if (null !== $presentationLowLimit) {
            $this->setPresentationLowLimit($presentationLowLimit);
        }
        if (null !== $concentration) {
            $this->setConcentration($concentration);
        }
        if (null !== $concentrationLowLimit) {
            $this->setConcentrationLowLimit($concentrationLowLimit);
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

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
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
     * mass) of the single pharmaceutical product or manufactured item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio
     */
    public function getPresentation(): null|FHIRRatio
    {
        return $this->presentation ?? null;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of substance in the unit of presentation, or in the volume (or
     * mass) of the single pharmaceutical product or manufactured item.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio $presentation
     * @return static
     */
    public function setPresentation(null|FHIRRatio $presentation): self
    {
        if (null === $presentation) {
            unset($this->presentation);
            return $this;
        }
        $this->presentation = $presentation;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A lower limit for the quantity of substance in the unit of presentation. For use
     * when there is a range of strengths, this is the lower limit, with the
     * presentation attribute becoming the upper limit.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio
     */
    public function getPresentationLowLimit(): null|FHIRRatio
    {
        return $this->presentationLowLimit ?? null;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A lower limit for the quantity of substance in the unit of presentation. For use
     * when there is a range of strengths, this is the lower limit, with the
     * presentation attribute becoming the upper limit.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio $presentationLowLimit
     * @return static
     */
    public function setPresentationLowLimit(null|FHIRRatio $presentationLowLimit): self
    {
        if (null === $presentationLowLimit) {
            unset($this->presentationLowLimit);
            return $this;
        }
        $this->presentationLowLimit = $presentationLowLimit;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio
     */
    public function getConcentration(): null|FHIRRatio
    {
        return $this->concentration ?? null;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio $concentration
     * @return static
     */
    public function setConcentration(null|FHIRRatio $concentration): self
    {
        if (null === $concentration) {
            unset($this->concentration);
            return $this;
        }
        $this->concentration = $concentration;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A lower limit for the strength per unitary volume (or mass), for when there is a
     * range. The concentration attribute then becomes the upper limit.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio
     */
    public function getConcentrationLowLimit(): null|FHIRRatio
    {
        return $this->concentrationLowLimit ?? null;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A lower limit for the strength per unitary volume (or mass), for when there is a
     * range. The concentration attribute then becomes the upper limit.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRatio $concentrationLowLimit
     * @return static
     */
    public function setConcentrationLowLimit(null|FHIRRatio $concentrationLowLimit): self
    {
        if (null === $concentrationLowLimit) {
            unset($this->concentrationLowLimit);
            return $this;
        }
        $this->concentrationLowLimit = $concentrationLowLimit;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For when strength is measured at a particular point or distance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
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
     * For when strength is measured at a particular point or distance.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $measurementPoint
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setMeasurementPoint(null|string|FHIRStringPrimitive|FHIRString $measurementPoint,
                                        null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $measurementPoint) {
            unset($this->measurementPoint);
            return $this;
        }
        if (!($measurementPoint instanceof FHIRString)) {
            $measurementPoint = new FHIRString(value: $measurementPoint);
        }
        if (null !== $valueXMLLocation) {
            $measurementPoint->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $measurementPoint->_getValueXMLLocation()) {
            $measurementPoint->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCountry(): array
    {
        return $this->country ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getCountryIterator(): iterable
    {
        if (!isset($this->country) || [] === $this->country) {
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $country
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept ...$country
     * @return static
     */
    public function setCountry(FHIRCodeableConcept ...$country): self
    {
        $this->country = $country;
        return $this;
    }

    /**
     * An ingredient of a manufactured item or pharmaceutical product.
     *
     * Strength expressed in terms of a reference substance.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientReferenceStrength[]
     */
    public function getReferenceStrength(): array
    {
        return $this->referenceStrength ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientReferenceStrength>
     */
    public function getReferenceStrengthIterator(): iterable
    {
        if (!isset($this->referenceStrength) || [] === $this->referenceStrength) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->referenceStrength);
    }

    /**
     * An ingredient of a manufactured item or pharmaceutical product.
     *
     * Strength expressed in terms of a reference substance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientReferenceStrength $referenceStrength
     * @return static
     */
    public function addReferenceStrength(FHIRMedicinalProductIngredientReferenceStrength $referenceStrength): self
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
     * Strength expressed in terms of a reference substance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientReferenceStrength ...$referenceStrength
     * @return static
     */
    public function setReferenceStrength(FHIRMedicinalProductIngredientReferenceStrength ...$referenceStrength): self
    {
        $this->referenceStrength = $referenceStrength;
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
        return self::_DEFAULT_VALIDATION_RULES;
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
        if (null !== ($v = $this->getPresentation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRESENTATION] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_PRESENTATION])) {
            $v = $this->getPresentation();
            foreach($validationRules[self::FIELD_PRESENTATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRESENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRESENTATION])) {
                        $errs[self::FIELD_PRESENTATION] = [];
                    }
                    $errs[self::FIELD_PRESENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRESENTATION_LOW_LIMIT])) {
            $v = $this->getPresentationLowLimit();
            foreach($validationRules[self::FIELD_PRESENTATION_LOW_LIMIT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRESENTATION_LOW_LIMIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRESENTATION_LOW_LIMIT])) {
                        $errs[self::FIELD_PRESENTATION_LOW_LIMIT] = [];
                    }
                    $errs[self::FIELD_PRESENTATION_LOW_LIMIT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONCENTRATION])) {
            $v = $this->getConcentration();
            foreach($validationRules[self::FIELD_CONCENTRATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONCENTRATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONCENTRATION])) {
                        $errs[self::FIELD_CONCENTRATION] = [];
                    }
                    $errs[self::FIELD_CONCENTRATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONCENTRATION_LOW_LIMIT])) {
            $v = $this->getConcentrationLowLimit();
            foreach($validationRules[self::FIELD_CONCENTRATION_LOW_LIMIT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONCENTRATION_LOW_LIMIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONCENTRATION_LOW_LIMIT])) {
                        $errs[self::FIELD_CONCENTRATION_LOW_LIMIT] = [];
                    }
                    $errs[self::FIELD_CONCENTRATION_LOW_LIMIT][$rule] = $err;
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

    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientStrength $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientStrength
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicinalProductIngredientStrength)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PRESENTATION === $childName) {
                $v = new FHIRRatio();
                $type->setPresentation(FHIRRatio::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PRESENTATION_LOW_LIMIT === $childName) {
                $v = new FHIRRatio();
                $type->setPresentationLowLimit(FHIRRatio::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONCENTRATION === $childName) {
                $v = new FHIRRatio();
                $type->setConcentration(FHIRRatio::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONCENTRATION_LOW_LIMIT === $childName) {
                $v = new FHIRRatio();
                $type->setConcentrationLowLimit(FHIRRatio::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MEASUREMENT_POINT === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setMeasurementPoint(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COUNTRY === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addCountry(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REFERENCE_STRENGTH === $childName) {
                $v = new FHIRMedicinalProductIngredientReferenceStrength();
                $type->addReferenceStrength(FHIRMedicinalProductIngredientReferenceStrength::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MEASUREMENT_POINT])) {
            $pt = $type->getMeasurementPoint();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_MEASUREMENT_POINT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMeasurementPoint(new FHIRString(
                    value: (string)$attributes[self::FIELD_MEASUREMENT_POINT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('MedicinalProductIngredientStrength', $this->_getSourceXMLNS());
        }
        if (isset($this->measurementPoint) && $this->measurementPoint->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MEASUREMENT_POINT, $this->measurementPoint->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->presentation)) {
            $xw->startElement(self::FIELD_PRESENTATION);
            $this->presentation->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->presentationLowLimit)) {
            $xw->startElement(self::FIELD_PRESENTATION_LOW_LIMIT);
            $this->presentationLowLimit->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->concentration)) {
            $xw->startElement(self::FIELD_CONCENTRATION);
            $this->concentration->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->concentrationLowLimit)) {
            $xw->startElement(self::FIELD_CONCENTRATION_LOW_LIMIT);
            $this->concentrationLowLimit->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->measurementPoint) && $this->measurementPoint->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MEASUREMENT_POINT);
            $this->measurementPoint->xmlSerialize($xw, $config);
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
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientStrength $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientStrength
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicinalProductIngredientStrength)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_PRESENTATION]) || array_key_exists(self::FIELD_PRESENTATION, $json)) {
            $type->setPresentation(FHIRRatio::jsonUnserialize(
                json: $json[self::FIELD_PRESENTATION],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PRESENTATION_LOW_LIMIT]) || array_key_exists(self::FIELD_PRESENTATION_LOW_LIMIT, $json)) {
            $type->setPresentationLowLimit(FHIRRatio::jsonUnserialize(
                json: $json[self::FIELD_PRESENTATION_LOW_LIMIT],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_CONCENTRATION]) || array_key_exists(self::FIELD_CONCENTRATION, $json)) {
            $type->setConcentration(FHIRRatio::jsonUnserialize(
                json: $json[self::FIELD_CONCENTRATION],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_CONCENTRATION_LOW_LIMIT]) || array_key_exists(self::FIELD_CONCENTRATION_LOW_LIMIT, $json)) {
            $type->setConcentrationLowLimit(FHIRRatio::jsonUnserialize(
                json: $json[self::FIELD_CONCENTRATION_LOW_LIMIT],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_MEASUREMENT_POINT]) || isset($json[self::FIELD_MEASUREMENT_POINT_EXT]) || array_key_exists(self::FIELD_MEASUREMENT_POINT, $json) || array_key_exists(self::FIELD_MEASUREMENT_POINT_EXT, $json)) {
            $value = $json[self::FIELD_MEASUREMENT_POINT] ?? null;
            $ext = (array)($json[self::FIELD_MEASUREMENT_POINT_EXT] ?? []);
            $type->setMeasurementPoint(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_COUNTRY]) || array_key_exists(self::FIELD_COUNTRY, $json)) {
            $vs = $json[self::FIELD_COUNTRY];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addCountry(FHIRCodeableConcept::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_REFERENCE_STRENGTH]) || array_key_exists(self::FIELD_REFERENCE_STRENGTH, $json)) {
            $vs = $json[self::FIELD_REFERENCE_STRENGTH];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addReferenceStrength(FHIRMedicinalProductIngredientReferenceStrength::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
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
        if (isset($this->presentation)) {
            $out->presentation = $this->presentation;
        }
        if (isset($this->presentationLowLimit)) {
            $out->presentationLowLimit = $this->presentationLowLimit;
        }
        if (isset($this->concentration)) {
            $out->concentration = $this->concentration;
        }
        if (isset($this->concentrationLowLimit)) {
            $out->concentrationLowLimit = $this->concentrationLowLimit;
        }
        if (isset($this->measurementPoint)) {
            if (null !== ($val = $this->measurementPoint->getValue())) {
                $out->measurementPoint = $val;
            }
            $ext = $this->measurementPoint->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
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

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}