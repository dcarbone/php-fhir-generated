<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 00:09+0000
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatio;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * Information about a medication that is used to support knowledge.
 */
class FHIRMedicationKnowledgeIngredient extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_INGREDIENT;

    /* class_default.php:50 */
    public const FIELD_ITEM_CODEABLE_CONCEPT = 'itemCodeableConcept';
    public const FIELD_ITEM_REFERENCE = 'itemReference';
    public const FIELD_IS_ACTIVE = 'isActive';
    public const FIELD_IS_ACTIVE_EXT = '_isActive';
    public const FIELD_STRENGTH = 'strength';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_ITEM_CODEABLE_CONCEPT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_ITEM_REFERENCE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_IS_ACTIVE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual ingredient - either a substance (simple ingredient) or another
     * medication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $itemCodeableConcept;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual ingredient - either a substance (simple ingredient) or another
     * medication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $itemReference;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indication of whether this ingredient affects the therapeutic action of the
     * drug.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean 
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
     * 250mg and the denominator is 1 tablet.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatio 
     */
    protected FHIRRatio $strength;

    /* constructor.php:61 */
    /**
     * FHIRMedicationKnowledgeIngredient Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $itemCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $itemReference
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean $isActive
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatio $strength
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $itemCodeableConcept = null,
                                null|FHIRReference $itemReference = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isActive = null,
                                null|FHIRRatio $strength = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $itemCodeableConcept) {
            $this->setItemCodeableConcept($itemCodeableConcept);
        }
        if (null !== $itemReference) {
            $this->setItemReference($itemReference);
        }
        if (null !== $isActive) {
            $this->setIsActive($isActive);
        }
        if (null !== $strength) {
            $this->setStrength($strength);
        }
    }

    /* class_default.php:146 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:172 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual ingredient - either a substance (simple ingredient) or another
     * medication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getItemCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->itemCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual ingredient - either a substance (simple ingredient) or another
     * medication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $itemCodeableConcept
     * @return static
     */
    public function setItemCodeableConcept(null|FHIRCodeableConcept $itemCodeableConcept): self
    {
        if (null === $itemCodeableConcept) {
            unset($this->itemCodeableConcept);
            return $this;
        }
        $this->itemCodeableConcept = $itemCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual ingredient - either a substance (simple ingredient) or another
     * medication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference
     */
    public function getItemReference(): null|FHIRReference
    {
        return $this->itemReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual ingredient - either a substance (simple ingredient) or another
     * medication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $itemReference
     * @return static
     */
    public function setItemReference(null|FHIRReference $itemReference): self
    {
        if (null === $itemReference) {
            unset($this->itemReference);
            return $this;
        }
        $this->itemReference = $itemReference;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indication of whether this ingredient affects the therapeutic action of the
     * drug.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean
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
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean $isActive
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
     * 250mg and the denominator is 1 tablet.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatio
     */
    public function getStrength(): null|FHIRRatio
    {
        return $this->strength ?? null;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies how many (or how much) of the items there are in this Medication. For
     * example, 250 mg per tablet. This is expressed as a ratio where the numerator is
     * 250mg and the denominator is 1 tablet.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatio $strength
     * @return static
     */
    public function setStrength(null|FHIRRatio $strength): self
    {
        if (null === $strength) {
            unset($this->strength);
            return $this;
        }
        $this->strength = $strength;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationKnowledgeIngredient)) {
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
            } else if (self::FIELD_ITEM_CODEABLE_CONCEPT === $cen) {
                $type->setItemCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ITEM_REFERENCE === $cen) {
                $type->setItemReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IS_ACTIVE === $cen) {
                $type->setIsActive(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STRENGTH === $cen) {
                $type->setStrength(FHIRRatio::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_IS_ACTIVE])) {
            if (isset($type->isActive)) {
                $type->isActive->setValue((string)$attributes[self::FIELD_IS_ACTIVE]);
            } else {
                $type->setIsActive((string)$attributes[self::FIELD_IS_ACTIVE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_IS_ACTIVE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->isActive) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_IS_ACTIVE]) {
            $xw->writeAttribute(self::FIELD_IS_ACTIVE, $this->isActive->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->itemCodeableConcept)) {
            $xw->startElement(self::FIELD_ITEM_CODEABLE_CONCEPT);
            $this->itemCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->itemReference)) {
            $xw->startElement(self::FIELD_ITEM_REFERENCE);
            $this->itemReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->isActive)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_IS_ACTIVE]
                || $this->isActive->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_IS_ACTIVE);
            $this->isActive->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_IS_ACTIVE]);
            $xw->endElement();
        }
        if (isset($this->strength)) {
            $xw->startElement(self::FIELD_STRENGTH);
            $this->strength->xmlSerialize($xw, $config);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationKnowledgeIngredient)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->itemCodeableConcept) || property_exists($json, self::FIELD_ITEM_CODEABLE_CONCEPT)) {
            if (is_array($json->itemCodeableConcept)) {
                $type->setItemCodeableConcept(FHIRCodeableConcept::jsonUnserialize(reset($json->itemCodeableConcept), $config));
            } else {
                $type->setItemCodeableConcept(FHIRCodeableConcept::jsonUnserialize($json->itemCodeableConcept, $config));
            }
        }
        if (isset($json->itemReference) || property_exists($json, self::FIELD_ITEM_REFERENCE)) {
            if (is_array($json->itemReference)) {
                $type->setItemReference(FHIRReference::jsonUnserialize(reset($json->itemReference), $config));
            } else {
                $type->setItemReference(FHIRReference::jsonUnserialize($json->itemReference, $config));
            }
        }
        if (isset($json->isActive)
            || isset($json->_isActive)
            || property_exists($json, self::FIELD_IS_ACTIVE)
            || property_exists($json, self::FIELD_IS_ACTIVE_EXT)) {
            $v = $json->_isActive ?? new \stdClass();
            $v->value = $json->isActive ?? null;
            $type->setIsActive(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($json->strength) || property_exists($json, self::FIELD_STRENGTH)) {
            if (is_array($json->strength)) {
                $type->setStrength(FHIRRatio::jsonUnserialize(reset($json->strength), $config));
            } else {
                $type->setStrength(FHIRRatio::jsonUnserialize($json->strength, $config));
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
        if (isset($this->itemCodeableConcept)) {
            $out->itemCodeableConcept = $this->itemCodeableConcept;
        }
        if (isset($this->itemReference)) {
            $out->itemReference = $this->itemReference;
        }
        if (isset($this->isActive)) {
            if (null !== ($val = $this->isActive->getValue())) {
                $out->isActive = $val;
            }
            if ($this->isActive->_nonValueFieldDefined()) {
                $ext = $this->isActive->jsonSerialize();
                unset($ext->value);
                $out->_isActive = $ext;
            }
        }
        if (isset($this->strength)) {
            $out->strength = $this->strength;
        }
        return $out;
    }
}