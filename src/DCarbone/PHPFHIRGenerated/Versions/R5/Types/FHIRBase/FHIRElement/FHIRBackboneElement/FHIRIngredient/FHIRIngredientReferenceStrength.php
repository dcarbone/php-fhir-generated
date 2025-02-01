<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 22:01+0000
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * An ingredient of a manufactured item or pharmaceutical product.
 */
class FHIRIngredientReferenceStrength extends FHIRBackboneElement
{    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_INGREDIENT_DOT_REFERENCE_STRENGTH;

    /* class_default.php:47 */
    public const FIELD_SUBSTANCE = 'substance';
    public const FIELD_STRENGTH_RATIO = 'strengthRatio';
    public const FIELD_STRENGTH_RATIO_RANGE = 'strengthRatioRange';
    public const FIELD_STRENGTH_QUANTITY = 'strengthQuantity';
    public const FIELD_MEASUREMENT_POINT = 'measurementPoint';
    public const FIELD_MEASUREMENT_POINT_EXT = '_measurementPoint';
    public const FIELD_COUNTRY = 'country';

    /* class_default.php:66 */
    private static array $_validationRules = [
        self::FIELD_SUBSTANCE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_STRENGTH_RATIO => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_STRENGTH_RATIO_RANGE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_STRENGTH_QUANTITY => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_MEASUREMENT_POINT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Relevant reference substance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference 
     */
    protected FHIRCodeableReference $substance;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Strength expressed in terms of a reference substance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio 
     */
    protected FHIRRatio $strengthRatio;
    /**
     * A range of ratios expressed as a low and high numerator and a denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Strength expressed in terms of a reference substance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange 
     */
    protected FHIRRatioRange $strengthRatioRange;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Strength expressed in terms of a reference substance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity 
     */
    protected FHIRQuantity $strengthQuantity;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For when strength is measured at a particular point or distance.
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

    /* constructor.php:63 */
    /**
     * FHIRIngredientReferenceStrength Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $substance
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio $strengthRatio
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange $strengthRatioRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $strengthQuantity
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $measurementPoint
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $country
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableReference $substance = null,
                                null|FHIRRatio $strengthRatio = null,
                                null|FHIRRatioRange $strengthRatioRange = null,
                                null|FHIRQuantity $strengthQuantity = null,
                                null|string|FHIRStringPrimitive|FHIRString $measurementPoint = null,
                                null|iterable $country = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $substance) {
            $this->setSubstance($substance);
        }
        if (null !== $strengthRatio) {
            $this->setStrengthRatio($strengthRatio);
        }
        if (null !== $strengthRatioRange) {
            $this->setStrengthRatioRange($strengthRatioRange);
        }
        if (null !== $strengthQuantity) {
            $this->setStrengthQuantity($strengthQuantity);
        }
        if (null !== $measurementPoint) {
            $this->setMeasurementPoint($measurementPoint);
        }
        if (null !== $country) {
            $this->setCountry(...$country);
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
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Relevant reference substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    public function getSubstance(): null|FHIRCodeableReference
    {
        return $this->substance ?? null;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Relevant reference substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $substance
     * @return static
     */
    public function setSubstance(null|FHIRCodeableReference $substance): self
    {
        if (null === $substance) {
            unset($this->substance);
            return $this;
        }
        $this->substance = $substance;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Strength expressed in terms of a reference substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio
     */
    public function getStrengthRatio(): null|FHIRRatio
    {
        return $this->strengthRatio ?? null;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Strength expressed in terms of a reference substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio $strengthRatio
     * @return static
     */
    public function setStrengthRatio(null|FHIRRatio $strengthRatio): self
    {
        if (null === $strengthRatio) {
            unset($this->strengthRatio);
            return $this;
        }
        $this->strengthRatio = $strengthRatio;
        return $this;
    }

    /**
     * A range of ratios expressed as a low and high numerator and a denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Strength expressed in terms of a reference substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange
     */
    public function getStrengthRatioRange(): null|FHIRRatioRange
    {
        return $this->strengthRatioRange ?? null;
    }

    /**
     * A range of ratios expressed as a low and high numerator and a denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Strength expressed in terms of a reference substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatioRange $strengthRatioRange
     * @return static
     */
    public function setStrengthRatioRange(null|FHIRRatioRange $strengthRatioRange): self
    {
        if (null === $strengthRatioRange) {
            unset($this->strengthRatioRange);
            return $this;
        }
        $this->strengthRatioRange = $strengthRatioRange;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Strength expressed in terms of a reference substance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getStrengthQuantity(): null|FHIRQuantity
    {
        return $this->strengthQuantity ?? null;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Strength expressed in terms of a reference substance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $strengthQuantity
     * @return static
     */
    public function setStrengthQuantity(null|FHIRQuantity $strengthQuantity): self
    {
        if (null === $strengthQuantity) {
            unset($this->strengthQuantity);
            return $this;
        }
        $this->strengthQuantity = $strengthQuantity;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For when strength is measured at a particular point or distance.
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
     * For when strength is measured at a particular point or distance.
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
        if (null !== ($v = $this->getSubstance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSTANCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStrengthRatio())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STRENGTH_RATIO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStrengthRatioRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STRENGTH_RATIO_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStrengthQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STRENGTH_QUANTITY] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_SUBSTANCE])) {
            $v = $this->getSubstance();
            foreach($validationRules[self::FIELD_SUBSTANCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUBSTANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBSTANCE])) {
                        $errs[self::FIELD_SUBSTANCE] = [];
                    }
                    $errs[self::FIELD_SUBSTANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STRENGTH_RATIO])) {
            $v = $this->getStrengthRatio();
            foreach($validationRules[self::FIELD_STRENGTH_RATIO] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STRENGTH_RATIO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STRENGTH_RATIO])) {
                        $errs[self::FIELD_STRENGTH_RATIO] = [];
                    }
                    $errs[self::FIELD_STRENGTH_RATIO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STRENGTH_RATIO_RANGE])) {
            $v = $this->getStrengthRatioRange();
            foreach($validationRules[self::FIELD_STRENGTH_RATIO_RANGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STRENGTH_RATIO_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STRENGTH_RATIO_RANGE])) {
                        $errs[self::FIELD_STRENGTH_RATIO_RANGE] = [];
                    }
                    $errs[self::FIELD_STRENGTH_RATIO_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STRENGTH_QUANTITY])) {
            $v = $this->getStrengthQuantity();
            foreach($validationRules[self::FIELD_STRENGTH_QUANTITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STRENGTH_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STRENGTH_QUANTITY])) {
                        $errs[self::FIELD_STRENGTH_QUANTITY] = [];
                    }
                    $errs[self::FIELD_STRENGTH_QUANTITY][$rule] = $err;
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

    /* class_default.php:211 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientReferenceStrength $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientReferenceStrength
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRIngredientReferenceStrength)) {
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
            } else if (self::FIELD_SUBSTANCE === $cen) {
                $type->setSubstance(FHIRCodeableReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STRENGTH_RATIO === $cen) {
                $type->setStrengthRatio(FHIRRatio::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STRENGTH_RATIO_RANGE === $cen) {
                $type->setStrengthRatioRange(FHIRRatioRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STRENGTH_QUANTITY === $cen) {
                $type->setStrengthQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MEASUREMENT_POINT === $cen) {
                $type->setMeasurementPoint(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COUNTRY === $cen) {
                $type->addCountry(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->measurementPoint) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MEASUREMENT_POINT]) {
            $xw->writeAttribute(self::FIELD_MEASUREMENT_POINT, $this->measurementPoint->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->substance)) {
            $xw->startElement(self::FIELD_SUBSTANCE);
            $this->substance->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->strengthRatio)) {
            $xw->startElement(self::FIELD_STRENGTH_RATIO);
            $this->strengthRatio->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->strengthRatioRange)) {
            $xw->startElement(self::FIELD_STRENGTH_RATIO_RANGE);
            $this->strengthRatioRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->strengthQuantity)) {
            $xw->startElement(self::FIELD_STRENGTH_QUANTITY);
            $this->strengthQuantity->xmlSerialize($xw, $config);
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
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientReferenceStrength $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientReferenceStrength
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRIngredientReferenceStrength)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_SUBSTANCE]) || array_key_exists(self::FIELD_SUBSTANCE, $json)) {
            $type->setSubstance(FHIRCodeableReference::jsonUnserialize($json[self::FIELD_SUBSTANCE], $config));
        }
        if (isset($json[self::FIELD_STRENGTH_RATIO]) || array_key_exists(self::FIELD_STRENGTH_RATIO, $json)) {
            $type->setStrengthRatio(FHIRRatio::jsonUnserialize($json[self::FIELD_STRENGTH_RATIO], $config));
        }
        if (isset($json[self::FIELD_STRENGTH_RATIO_RANGE]) || array_key_exists(self::FIELD_STRENGTH_RATIO_RANGE, $json)) {
            $type->setStrengthRatioRange(FHIRRatioRange::jsonUnserialize($json[self::FIELD_STRENGTH_RATIO_RANGE], $config));
        }
        if (isset($json[self::FIELD_STRENGTH_QUANTITY]) || array_key_exists(self::FIELD_STRENGTH_QUANTITY, $json)) {
            $type->setStrengthQuantity(FHIRQuantity::jsonUnserialize($json[self::FIELD_STRENGTH_QUANTITY], $config));
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
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->substance)) {
            $out->substance = $this->substance;
        }
        if (isset($this->strengthRatio)) {
            $out->strengthRatio = $this->strengthRatio;
        }
        if (isset($this->strengthRatioRange)) {
            $out->strengthRatioRange = $this->strengthRatioRange;
        }
        if (isset($this->strengthQuantity)) {
            $out->strengthQuantity = $this->strengthQuantity;
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
        return $out;
    }
}