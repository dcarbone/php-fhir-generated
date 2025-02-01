<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;

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

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount\FHIRSubstanceAmountReferenceRange;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * Chemical substances are a single substance type whose primary defining element
 * is the molecular structure. Chemical substances shall be defined on the basis of
 * their complete covalent molecular structure; the presence of a salt
 * (counter-ion) and/or solvates (water, alcohols) is also captured. Purity, grade,
 * physical form or particle size are not taken into account in the definition of a
 * chemical substance or in the assignment of a Substance ID.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
class FHIRSubstanceAmount extends FHIRBackboneElement
{    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SUBSTANCE_AMOUNT;

    /* class_default.php:47 */
    public const FIELD_AMOUNT_QUANTITY = 'amountQuantity';
    public const FIELD_AMOUNT_RANGE = 'amountRange';
    public const FIELD_AMOUNT_STRING = 'amountString';
    public const FIELD_AMOUNT_STRING_EXT = '_amountString';
    public const FIELD_AMOUNT_TYPE = 'amountType';
    public const FIELD_AMOUNT_TEXT = 'amountText';
    public const FIELD_AMOUNT_TEXT_EXT = '_amountText';
    public const FIELD_REFERENCE_RANGE = 'referenceRange';

    /* class_default.php:66 */
    private static array $_validationRules = [];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_AMOUNT_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_AMOUNT_TEXT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used to capture quantitative values for a variety of elements. If only limits
     * are given, the arithmetic mean would be the average. If only a single definite
     * value for a given element is given, it would be captured in this field.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $amountQuantity;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used to capture quantitative values for a variety of elements. If only limits
     * are given, the arithmetic mean would be the average. If only a single definite
     * value for a given element is given, it would be captured in this field.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $amountRange;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used to capture quantitative values for a variety of elements. If only limits
     * are given, the arithmetic mean would be the average. If only a single definite
     * value for a given element is given, it would be captured in this field.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $amountString;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Most elements that require a quantitative value will also have a field called
     * amount type. Amount type should always be specified because the actual value of
     * the amount is often dependent on it. EXAMPLE: In capturing the actual relative
     * amounts of substances or molecular fragments it is essential to indicate whether
     * the amount refers to a mole ratio or weight ratio. For any given element an
     * effort should be made to use same the amount type for all related definitional
     * elements.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $amountType;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual comment on a numeric value.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $amountText;
    /**
     * Chemical substances are a single substance type whose primary defining element
     * is the molecular structure. Chemical substances shall be defined on the basis of
     * their complete covalent molecular structure; the presence of a salt
     * (counter-ion) and/or solvates (water, alcohols) is also captured. Purity, grade,
     * physical form or particle size are not taken into account in the definition of a
     * chemical substance or in the assignment of a Substance ID.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference range of possible or expected values.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount\FHIRSubstanceAmountReferenceRange 
     */
    protected FHIRSubstanceAmountReferenceRange $referenceRange;

    /* constructor.php:63 */
    /**
     * FHIRSubstanceAmount Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $amountQuantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRange $amountRange
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $amountString
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $amountType
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $amountText
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount\FHIRSubstanceAmountReferenceRange $referenceRange
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRQuantity $amountQuantity = null,
                                null|FHIRRange $amountRange = null,
                                null|string|FHIRStringPrimitive|FHIRString $amountString = null,
                                null|FHIRCodeableConcept $amountType = null,
                                null|string|FHIRStringPrimitive|FHIRString $amountText = null,
                                null|FHIRSubstanceAmountReferenceRange $referenceRange = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $amountQuantity) {
            $this->setAmountQuantity($amountQuantity);
        }
        if (null !== $amountRange) {
            $this->setAmountRange($amountRange);
        }
        if (null !== $amountString) {
            $this->setAmountString($amountString);
        }
        if (null !== $amountType) {
            $this->setAmountType($amountType);
        }
        if (null !== $amountText) {
            $this->setAmountText($amountText);
        }
        if (null !== $referenceRange) {
            $this->setReferenceRange($referenceRange);
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
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used to capture quantitative values for a variety of elements. If only limits
     * are given, the arithmetic mean would be the average. If only a single definite
     * value for a given element is given, it would be captured in this field.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity
     */
    public function getAmountQuantity(): null|FHIRQuantity
    {
        return $this->amountQuantity ?? null;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used to capture quantitative values for a variety of elements. If only limits
     * are given, the arithmetic mean would be the average. If only a single definite
     * value for a given element is given, it would be captured in this field.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $amountQuantity
     * @return static
     */
    public function setAmountQuantity(null|FHIRQuantity $amountQuantity): self
    {
        if (null === $amountQuantity) {
            unset($this->amountQuantity);
            return $this;
        }
        $this->amountQuantity = $amountQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used to capture quantitative values for a variety of elements. If only limits
     * are given, the arithmetic mean would be the average. If only a single definite
     * value for a given element is given, it would be captured in this field.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRange
     */
    public function getAmountRange(): null|FHIRRange
    {
        return $this->amountRange ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Used to capture quantitative values for a variety of elements. If only limits
     * are given, the arithmetic mean would be the average. If only a single definite
     * value for a given element is given, it would be captured in this field.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRange $amountRange
     * @return static
     */
    public function setAmountRange(null|FHIRRange $amountRange): self
    {
        if (null === $amountRange) {
            unset($this->amountRange);
            return $this;
        }
        $this->amountRange = $amountRange;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used to capture quantitative values for a variety of elements. If only limits
     * are given, the arithmetic mean would be the average. If only a single definite
     * value for a given element is given, it would be captured in this field.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getAmountString(): null|FHIRString
    {
        return $this->amountString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used to capture quantitative values for a variety of elements. If only limits
     * are given, the arithmetic mean would be the average. If only a single definite
     * value for a given element is given, it would be captured in this field.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $amountString
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAmountString(null|string|FHIRStringPrimitive|FHIRString $amountString,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $amountString) {
            unset($this->amountString);
            return $this;
        }
        if (!($amountString instanceof FHIRString)) {
            $amountString = new FHIRString(value: $amountString);
        }
        $this->amountString = $amountString;
        if ($this->_valueXMLLocations[self::FIELD_AMOUNT_STRING] !== $valueXMLLocation) {
            $this->_setAmountStringValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the amountString element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAmountStringValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_AMOUNT_STRING];
    }

    /**
     * Set the location the "value" field of the amountString element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAmountStringValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_AMOUNT_STRING] = $valueXMLLocation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Most elements that require a quantitative value will also have a field called
     * amount type. Amount type should always be specified because the actual value of
     * the amount is often dependent on it. EXAMPLE: In capturing the actual relative
     * amounts of substances or molecular fragments it is essential to indicate whether
     * the amount refers to a mole ratio or weight ratio. For any given element an
     * effort should be made to use same the amount type for all related definitional
     * elements.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getAmountType(): null|FHIRCodeableConcept
    {
        return $this->amountType ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Most elements that require a quantitative value will also have a field called
     * amount type. Amount type should always be specified because the actual value of
     * the amount is often dependent on it. EXAMPLE: In capturing the actual relative
     * amounts of substances or molecular fragments it is essential to indicate whether
     * the amount refers to a mole ratio or weight ratio. For any given element an
     * effort should be made to use same the amount type for all related definitional
     * elements.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $amountType
     * @return static
     */
    public function setAmountType(null|FHIRCodeableConcept $amountType): self
    {
        if (null === $amountType) {
            unset($this->amountType);
            return $this;
        }
        $this->amountType = $amountType;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual comment on a numeric value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getAmountText(): null|FHIRString
    {
        return $this->amountText ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual comment on a numeric value.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $amountText
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAmountText(null|string|FHIRStringPrimitive|FHIRString $amountText,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $amountText) {
            unset($this->amountText);
            return $this;
        }
        if (!($amountText instanceof FHIRString)) {
            $amountText = new FHIRString(value: $amountText);
        }
        $this->amountText = $amountText;
        if ($this->_valueXMLLocations[self::FIELD_AMOUNT_TEXT] !== $valueXMLLocation) {
            $this->_setAmountTextValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the amountText element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAmountTextValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_AMOUNT_TEXT];
    }

    /**
     * Set the location the "value" field of the amountText element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAmountTextValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_AMOUNT_TEXT] = $valueXMLLocation;
        return $this;
    }

    /**
     * Chemical substances are a single substance type whose primary defining element
     * is the molecular structure. Chemical substances shall be defined on the basis of
     * their complete covalent molecular structure; the presence of a salt
     * (counter-ion) and/or solvates (water, alcohols) is also captured. Purity, grade,
     * physical form or particle size are not taken into account in the definition of a
     * chemical substance or in the assignment of a Substance ID.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference range of possible or expected values.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount\FHIRSubstanceAmountReferenceRange
     */
    public function getReferenceRange(): null|FHIRSubstanceAmountReferenceRange
    {
        return $this->referenceRange ?? null;
    }

    /**
     * Chemical substances are a single substance type whose primary defining element
     * is the molecular structure. Chemical substances shall be defined on the basis of
     * their complete covalent molecular structure; the presence of a salt
     * (counter-ion) and/or solvates (water, alcohols) is also captured. Purity, grade,
     * physical form or particle size are not taken into account in the definition of a
     * chemical substance or in the assignment of a Substance ID.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference range of possible or expected values.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount\FHIRSubstanceAmountReferenceRange $referenceRange
     * @return static
     */
    public function setReferenceRange(null|FHIRSubstanceAmountReferenceRange $referenceRange): self
    {
        if (null === $referenceRange) {
            unset($this->referenceRange);
            return $this;
        }
        $this->referenceRange = $referenceRange;
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
        if (isset($validationRules[self::FIELD_AMOUNT_QUANTITY])) {
            $v = $this->getAmountQuantity();
            foreach($validationRules[self::FIELD_AMOUNT_QUANTITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AMOUNT_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT_QUANTITY])) {
                        $errs[self::FIELD_AMOUNT_QUANTITY] = [];
                    }
                    $errs[self::FIELD_AMOUNT_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AMOUNT_RANGE])) {
            $v = $this->getAmountRange();
            foreach($validationRules[self::FIELD_AMOUNT_RANGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AMOUNT_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT_RANGE])) {
                        $errs[self::FIELD_AMOUNT_RANGE] = [];
                    }
                    $errs[self::FIELD_AMOUNT_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AMOUNT_STRING])) {
            $v = $this->getAmountString();
            foreach($validationRules[self::FIELD_AMOUNT_STRING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AMOUNT_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT_STRING])) {
                        $errs[self::FIELD_AMOUNT_STRING] = [];
                    }
                    $errs[self::FIELD_AMOUNT_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AMOUNT_TYPE])) {
            $v = $this->getAmountType();
            foreach($validationRules[self::FIELD_AMOUNT_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AMOUNT_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT_TYPE])) {
                        $errs[self::FIELD_AMOUNT_TYPE] = [];
                    }
                    $errs[self::FIELD_AMOUNT_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AMOUNT_TEXT])) {
            $v = $this->getAmountText();
            foreach($validationRules[self::FIELD_AMOUNT_TEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AMOUNT_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT_TEXT])) {
                        $errs[self::FIELD_AMOUNT_TEXT] = [];
                    }
                    $errs[self::FIELD_AMOUNT_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE_RANGE])) {
            $v = $this->getReferenceRange();
            foreach($validationRules[self::FIELD_REFERENCE_RANGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REFERENCE_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE_RANGE])) {
                        $errs[self::FIELD_REFERENCE_RANGE] = [];
                    }
                    $errs[self::FIELD_REFERENCE_RANGE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubstanceAmount)) {
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
            } else if (self::FIELD_AMOUNT_QUANTITY === $cen) {
                $type->setAmountQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AMOUNT_RANGE === $cen) {
                $type->setAmountRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AMOUNT_STRING === $cen) {
                $type->setAmountString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AMOUNT_TYPE === $cen) {
                $type->setAmountType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AMOUNT_TEXT === $cen) {
                $type->setAmountText(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REFERENCE_RANGE === $cen) {
                $type->setReferenceRange(FHIRSubstanceAmountReferenceRange::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_AMOUNT_STRING])) {
            if (isset($type->amountString)) {
                $type->amountString->setValue((string)$attributes[self::FIELD_AMOUNT_STRING]);
                $type->_setAmountStringValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAmountString((string)$attributes[self::FIELD_AMOUNT_STRING], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_AMOUNT_TEXT])) {
            if (isset($type->amountText)) {
                $type->amountText->setValue((string)$attributes[self::FIELD_AMOUNT_TEXT]);
                $type->_setAmountTextValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAmountText((string)$attributes[self::FIELD_AMOUNT_TEXT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->amountString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_AMOUNT_STRING]) {
            $xw->writeAttribute(self::FIELD_AMOUNT_STRING, $this->amountString->_getFormattedValue());
        }
        if (isset($this->amountText) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_AMOUNT_TEXT]) {
            $xw->writeAttribute(self::FIELD_AMOUNT_TEXT, $this->amountText->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->amountQuantity)) {
            $xw->startElement(self::FIELD_AMOUNT_QUANTITY);
            $this->amountQuantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->amountRange)) {
            $xw->startElement(self::FIELD_AMOUNT_RANGE);
            $this->amountRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->amountString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_AMOUNT_STRING]
                || $this->amountString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_AMOUNT_STRING);
            $this->amountString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_AMOUNT_STRING]);
            $xw->endElement();
        }
        if (isset($this->amountType)) {
            $xw->startElement(self::FIELD_AMOUNT_TYPE);
            $this->amountType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->amountText)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_AMOUNT_TEXT]
                || $this->amountText->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_AMOUNT_TEXT);
            $this->amountText->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_AMOUNT_TEXT]);
            $xw->endElement();
        }
        if (isset($this->referenceRange)) {
            $xw->startElement(self::FIELD_REFERENCE_RANGE);
            $this->referenceRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubstanceAmount)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_AMOUNT_QUANTITY]) || array_key_exists(self::FIELD_AMOUNT_QUANTITY, $json)) {
            $type->setAmountQuantity(FHIRQuantity::jsonUnserialize($json[self::FIELD_AMOUNT_QUANTITY], $config));
        }
        if (isset($json[self::FIELD_AMOUNT_RANGE]) || array_key_exists(self::FIELD_AMOUNT_RANGE, $json)) {
            $type->setAmountRange(FHIRRange::jsonUnserialize($json[self::FIELD_AMOUNT_RANGE], $config));
        }
        if (isset($json[self::FIELD_AMOUNT_STRING])
            || isset($json[self::FIELD_AMOUNT_STRING_EXT])
            || array_key_exists(self::FIELD_AMOUNT_STRING, $json)
            || array_key_exists(self::FIELD_AMOUNT_STRING_EXT, $json)) {
            $value = $json[self::FIELD_AMOUNT_STRING] ?? null;
            $type->setAmountString(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_AMOUNT_STRING_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_AMOUNT_TYPE]) || array_key_exists(self::FIELD_AMOUNT_TYPE, $json)) {
            $type->setAmountType(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_AMOUNT_TYPE], $config));
        }
        if (isset($json[self::FIELD_AMOUNT_TEXT])
            || isset($json[self::FIELD_AMOUNT_TEXT_EXT])
            || array_key_exists(self::FIELD_AMOUNT_TEXT, $json)
            || array_key_exists(self::FIELD_AMOUNT_TEXT_EXT, $json)) {
            $value = $json[self::FIELD_AMOUNT_TEXT] ?? null;
            $type->setAmountText(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_AMOUNT_TEXT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_REFERENCE_RANGE]) || array_key_exists(self::FIELD_REFERENCE_RANGE, $json)) {
            $type->setReferenceRange(FHIRSubstanceAmountReferenceRange::jsonUnserialize($json[self::FIELD_REFERENCE_RANGE], $config));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->amountQuantity)) {
            $out->amountQuantity = $this->amountQuantity;
        }
        if (isset($this->amountRange)) {
            $out->amountRange = $this->amountRange;
        }
        if (isset($this->amountString)) {
            if (null !== ($val = $this->amountString->getValue())) {
                $out->amountString = $val;
            }
            if ($this->amountString->_nonValueFieldDefined()) {
                $ext = $this->amountString->jsonSerialize();
                unset($ext->value);
                $out->_amountString = $ext;
            }
        }
        if (isset($this->amountType)) {
            $out->amountType = $this->amountType;
        }
        if (isset($this->amountText)) {
            if (null !== ($val = $this->amountText->getValue())) {
                $out->amountText = $val;
            }
            if ($this->amountText->_nonValueFieldDefined()) {
                $ext = $this->amountText->jsonSerialize();
                unset($ext->value);
                $out->_amountText = $ext;
            }
        }
        if (isset($this->referenceRange)) {
            $out->referenceRange = $this->referenceRange;
        }
        return $out;
    }
}