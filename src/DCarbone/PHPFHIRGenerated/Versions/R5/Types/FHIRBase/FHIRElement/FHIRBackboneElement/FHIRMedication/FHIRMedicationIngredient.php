<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedication;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * This resource is primarily used for the identification and definition of a
 * medication, including ingredients, for the purposes of prescribing, dispensing,
 * and administering a medication as well as for making statements about medication
 * use.
 */
class FHIRMedicationIngredient extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEDICATION_DOT_INGREDIENT;


    public const FIELD_ITEM = 'item';
    public const FIELD_IS_ACTIVE = 'isActive';
    public const FIELD_IS_ACTIVE_EXT = '_isActive';
    public const FIELD_STRENGTH_RATIO = 'strengthRatio';
    public const FIELD_STRENGTH_CODEABLE_CONCEPT = 'strengthCodeableConcept';
    public const FIELD_STRENGTH_QUANTITY = 'strengthQuantity';

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ingredient (substance or medication) that the ingredient.strength relates
     * to. This is represented as a concept from a code system or described in another
     * resource (Substance or Medication).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference 
     */
    protected FHIRCodeableReference $item;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indication of whether this ingredient affects the therapeutic action of the
     * drug.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $isActive;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies how many (or how much) of the items there are in this Medication. For
     * example, 250 mg per tablet. This is expressed as a ratio where the numerator is
     * 250mg and the denominator is 1 tablet but can also be expressed a quantity when
     * the denominator is assumed to be 1 tablet.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio 
     */
    protected FHIRRatio $strengthRatio;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies how many (or how much) of the items there are in this Medication. For
     * example, 250 mg per tablet. This is expressed as a ratio where the numerator is
     * 250mg and the denominator is 1 tablet but can also be expressed a quantity when
     * the denominator is assumed to be 1 tablet.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $strengthCodeableConcept;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies how many (or how much) of the items there are in this Medication. For
     * example, 250 mg per tablet. This is expressed as a ratio where the numerator is
     * 250mg and the denominator is 1 tablet but can also be expressed a quantity when
     * the denominator is assumed to be 1 tablet.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity 
     */
    protected FHIRQuantity $strengthQuantity;

    /** Default validation map for fields in type Medication.Ingredient */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_ITEM => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRMedicationIngredient Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $item
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $isActive
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio $strengthRatio
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $strengthCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $strengthQuantity
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableReference $item = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isActive = null,
                                null|FHIRRatio $strengthRatio = null,
                                null|FHIRCodeableConcept $strengthCodeableConcept = null,
                                null|FHIRQuantity $strengthQuantity = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $item) {
            $this->setItem($item);
        }
        if (null !== $isActive) {
            $this->setIsActive($isActive);
        }
        if (null !== $strengthRatio) {
            $this->setStrengthRatio($strengthRatio);
        }
        if (null !== $strengthCodeableConcept) {
            $this->setStrengthCodeableConcept($strengthCodeableConcept);
        }
        if (null !== $strengthQuantity) {
            $this->setStrengthQuantity($strengthQuantity);
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
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ingredient (substance or medication) that the ingredient.strength relates
     * to. This is represented as a concept from a code system or described in another
     * resource (Substance or Medication).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    public function getItem(): null|FHIRCodeableReference
    {
        return $this->item ?? null;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ingredient (substance or medication) that the ingredient.strength relates
     * to. This is represented as a concept from a code system or described in another
     * resource (Substance or Medication).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $item
     * @return static
     */
    public function setItem(null|FHIRCodeableReference $item): self
    {
        if (null === $item) {
            unset($this->item);
            return $this;
        }
        $this->item = $item;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indication of whether this ingredient affects the therapeutic action of the
     * drug.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getIsActive(): null|FHIRBoolean
    {
        return $this->isActive ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indication of whether this ingredient affects the therapeutic action of the
     * drug.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $isActive
     * @return static
     */
    public function setIsActive(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isActive): self
    {
        if (null === $isActive) {
            unset($this->isActive);
            return $this;
        }
        if (!($isActive instanceof FHIRBoolean)) {
            $isActive = new FHIRBoolean(value: $isActive);
        }
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies how many (or how much) of the items there are in this Medication. For
     * example, 250 mg per tablet. This is expressed as a ratio where the numerator is
     * 250mg and the denominator is 1 tablet but can also be expressed a quantity when
     * the denominator is assumed to be 1 tablet.
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
     * Specifies how many (or how much) of the items there are in this Medication. For
     * example, 250 mg per tablet. This is expressed as a ratio where the numerator is
     * 250mg and the denominator is 1 tablet but can also be expressed a quantity when
     * the denominator is assumed to be 1 tablet.
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies how many (or how much) of the items there are in this Medication. For
     * example, 250 mg per tablet. This is expressed as a ratio where the numerator is
     * 250mg and the denominator is 1 tablet but can also be expressed a quantity when
     * the denominator is assumed to be 1 tablet.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getStrengthCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->strengthCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies how many (or how much) of the items there are in this Medication. For
     * example, 250 mg per tablet. This is expressed as a ratio where the numerator is
     * 250mg and the denominator is 1 tablet but can also be expressed a quantity when
     * the denominator is assumed to be 1 tablet.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $strengthCodeableConcept
     * @return static
     */
    public function setStrengthCodeableConcept(null|FHIRCodeableConcept $strengthCodeableConcept): self
    {
        if (null === $strengthCodeableConcept) {
            unset($this->strengthCodeableConcept);
            return $this;
        }
        $this->strengthCodeableConcept = $strengthCodeableConcept;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies how many (or how much) of the items there are in this Medication. For
     * example, 250 mg per tablet. This is expressed as a ratio where the numerator is
     * 250mg and the denominator is 1 tablet but can also be expressed a quantity when
     * the denominator is assumed to be 1 tablet.
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
     * Specifies how many (or how much) of the items there are in this Medication. For
     * example, 250 mg per tablet. This is expressed as a ratio where the numerator is
     * 250mg and the denominator is 1 tablet but can also be expressed a quantity when
     * the denominator is assumed to be 1 tablet.
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
        if (null !== ($v = $this->getItem())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ITEM] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ITEM])) {
            $v = $this->getItem();
            foreach($validationRules[self::FIELD_ITEM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ITEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ITEM])) {
                        $errs[self::FIELD_ITEM] = [];
                    }
                    $errs[self::FIELD_ITEM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IS_ACTIVE])) {
            $v = $this->getIsActive();
            foreach($validationRules[self::FIELD_IS_ACTIVE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IS_ACTIVE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IS_ACTIVE])) {
                        $errs[self::FIELD_IS_ACTIVE] = [];
                    }
                    $errs[self::FIELD_IS_ACTIVE][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_STRENGTH_CODEABLE_CONCEPT])) {
            $v = $this->getStrengthCodeableConcept();
            foreach($validationRules[self::FIELD_STRENGTH_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STRENGTH_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STRENGTH_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_STRENGTH_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_STRENGTH_CODEABLE_CONCEPT][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationIngredient)) {
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
                $v = new FHIRStringPrimitive(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ITEM === $childName) {
                $v = new FHIRCodeableReference();
                $type->setItem(FHIRCodeableReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IS_ACTIVE === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setIsActive(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STRENGTH_RATIO === $childName) {
                $v = new FHIRRatio();
                $type->setStrengthRatio(FHIRRatio::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STRENGTH_CODEABLE_CONCEPT === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setStrengthCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STRENGTH_QUANTITY === $childName) {
                $v = new FHIRQuantity();
                $type->setStrengthQuantity(FHIRQuantity::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IS_ACTIVE])) {
            $pt = $type->getIsActive();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IS_ACTIVE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setIsActive(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_IS_ACTIVE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
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
            $xw->openRootNode('MedicationIngredient', $this->_getSourceXMLNS());
        }
        if (isset($this->isActive) && $this->isActive->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_IS_ACTIVE, $this->isActive->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->item)) {
            $xw->startElement(self::FIELD_ITEM);
            $this->item->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->isActive) && $this->isActive->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_IS_ACTIVE);
            $this->isActive->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->strengthRatio)) {
            $xw->startElement(self::FIELD_STRENGTH_RATIO);
            $this->strengthRatio->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->strengthCodeableConcept)) {
            $xw->startElement(self::FIELD_STRENGTH_CODEABLE_CONCEPT);
            $this->strengthCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->strengthQuantity)) {
            $xw->startElement(self::FIELD_STRENGTH_QUANTITY);
            $this->strengthQuantity->xmlSerialize($xw, $config);
            $xw->endElement();
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationIngredient)) {
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
        if (isset($json[self::FIELD_ITEM]) || array_key_exists(self::FIELD_ITEM, $json)) {
            if ($json[self::FIELD_ITEM] instanceof FHIRCodeableReference) {
                $type->setItem($json[self::FIELD_ITEM]);
            } else {
                $type->setItem(new FHIRCodeableReference($json[self::FIELD_ITEM]));
            }
        }
        if (isset($json[self::FIELD_IS_ACTIVE]) || isset($json[self::FIELD_IS_ACTIVE_EXT]) || array_key_exists(self::FIELD_IS_ACTIVE, $json) || array_key_exists(self::FIELD_IS_ACTIVE_EXT, $json)) {
            $value = $json[self::FIELD_IS_ACTIVE] ?? null;
            $ext = (isset($json[self::FIELD_IS_ACTIVE_EXT]) && is_array($json[self::FIELD_IS_ACTIVE_EXT])) ? $json[self::FIELD_IS_ACTIVE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setIsActive($value);
                } else if (is_array($value)) {
                    $type->setIsActive(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setIsActive(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setIsActive(new FHIRBoolean($ext));
            } else {
                $type->setIsActive(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_STRENGTH_RATIO]) || array_key_exists(self::FIELD_STRENGTH_RATIO, $json)) {
            if ($json[self::FIELD_STRENGTH_RATIO] instanceof FHIRRatio) {
                $type->setStrengthRatio($json[self::FIELD_STRENGTH_RATIO]);
            } else {
                $type->setStrengthRatio(new FHIRRatio($json[self::FIELD_STRENGTH_RATIO]));
            }
        }
        if (isset($json[self::FIELD_STRENGTH_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_STRENGTH_CODEABLE_CONCEPT, $json)) {
            if ($json[self::FIELD_STRENGTH_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $type->setStrengthCodeableConcept($json[self::FIELD_STRENGTH_CODEABLE_CONCEPT]);
            } else {
                $type->setStrengthCodeableConcept(new FHIRCodeableConcept($json[self::FIELD_STRENGTH_CODEABLE_CONCEPT]));
            }
        }
        if (isset($json[self::FIELD_STRENGTH_QUANTITY]) || array_key_exists(self::FIELD_STRENGTH_QUANTITY, $json)) {
            if ($json[self::FIELD_STRENGTH_QUANTITY] instanceof FHIRQuantity) {
                $type->setStrengthQuantity($json[self::FIELD_STRENGTH_QUANTITY]);
            } else {
                $type->setStrengthQuantity(new FHIRQuantity($json[self::FIELD_STRENGTH_QUANTITY]));
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
        if (isset($this->item)) {
            $out->item = $this->item;
        }
        if (isset($this->isActive)) {
            if (null !== ($val = $this->isActive->getValue())) {
                $out->isActive = $val;
            }
            $ext = $this->isActive->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_isActive = $ext;
            }
        }
        if (isset($this->strengthRatio)) {
            $out->strengthRatio = $this->strengthRatio;
        }
        if (isset($this->strengthCodeableConcept)) {
            $out->strengthCodeableConcept = $this->strengthCodeableConcept;
        }
        if (isset($this->strengthQuantity)) {
            $out->strengthQuantity = $this->strengthQuantity;
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