<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 18th, 2025 00:31+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Information about a medication that is used to support knowledge.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRMedicationKnowledgeDefinitional extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_DEFINITIONAL;

    /* class_default.php:56 */
    public const FIELD_DEFINITION = 'definition';
    public const FIELD_DOSE_FORM = 'doseForm';
    public const FIELD_INTENDED_ROUTE = 'intendedRoute';
    public const FIELD_INGREDIENT = 'ingredient';
    public const FIELD_DRUG_CHARACTERISTIC = 'drugCharacteristic';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
    ];

    /* class_default.php:112 */
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Associated definitions for this medication.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> 
     */
    #[FHIRReference]
    protected array $definition;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the form of the item. Powder; tablets; capsule.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $doseForm;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended or approved route of administration.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $intendedRoute;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Identifies a particular constituent of interest in the product.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient> 
     */
    #[FHIRMedicationKnowledgeIngredient]
    protected array $ingredient;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Specifies descriptive properties of the medicine, such as color, shape,
     * imprints, etc.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDrugCharacteristic> 
     */
    #[FHIRMedicationKnowledgeDrugCharacteristic]
    protected array $drugCharacteristic;

    /* constructor.php:61 */
    /**
     * FHIRMedicationKnowledgeDefinitional Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> $definition
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $doseForm
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> $intendedRoute
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient> $ingredient
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDrugCharacteristic> $drugCharacteristic
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $definition = null,
                                null|FHIRCodeableConcept $doseForm = null,
                                null|iterable $intendedRoute = null,
                                null|iterable $ingredient = null,
                                null|iterable $drugCharacteristic = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $definition) {
            $this->setDefinition(...$definition);
        }
        if (null !== $doseForm) {
            $this->setDoseForm($doseForm);
        }
        if (null !== $intendedRoute) {
            $this->setIntendedRoute(...$intendedRoute);
        }
        if (null !== $ingredient) {
            $this->setIngredient(...$ingredient);
        }
        if (null !== $drugCharacteristic) {
            $this->setDrugCharacteristic(...$drugCharacteristic);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Associated definitions for this medication.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getDefinition(): array
    {
        return $this->definition ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getDefinitionIterator(): iterable
    {
        if (!isset($this->definition)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->definition);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Associated definitions for this medication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $definition
     * @return static
     */
    public function addDefinition(FHIRReference $definition): self
    {
        if (!isset($this->definition)) {
            $this->definition = [];
        }
        $this->definition[] = $definition;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Associated definitions for this medication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$definition
     * @return static
     */
    public function setDefinition(FHIRReference ...$definition): self
    {
        if ([] === $definition) {
            unset($this->definition);
            return $this;
        }
        $this->definition = $definition;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the form of the item. Powder; tablets; capsule.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getDoseForm(): null|FHIRCodeableConcept
    {
        return $this->doseForm ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the form of the item. Powder; tablets; capsule.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $doseForm
     * @return static
     */
    public function setDoseForm(null|FHIRCodeableConcept $doseForm): self
    {
        if (null === $doseForm) {
            unset($this->doseForm);
            return $this;
        }
        $this->doseForm = $doseForm;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended or approved route of administration.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getIntendedRoute(): array
    {
        return $this->intendedRoute ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getIntendedRouteIterator(): iterable
    {
        if (!isset($this->intendedRoute)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->intendedRoute);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended or approved route of administration.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $intendedRoute
     * @return static
     */
    public function addIntendedRoute(FHIRCodeableConcept $intendedRoute): self
    {
        if (!isset($this->intendedRoute)) {
            $this->intendedRoute = [];
        }
        $this->intendedRoute[] = $intendedRoute;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended or approved route of administration.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$intendedRoute
     * @return static
     */
    public function setIntendedRoute(FHIRCodeableConcept ...$intendedRoute): self
    {
        if ([] === $intendedRoute) {
            unset($this->intendedRoute);
            return $this;
        }
        $this->intendedRoute = $intendedRoute;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Identifies a particular constituent of interest in the product.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient>
     */
    public function getIngredient(): array
    {
        return $this->ingredient ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient>
     */
    public function getIngredientIterator(): iterable
    {
        if (!isset($this->ingredient)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->ingredient);
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Identifies a particular constituent of interest in the product.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient $ingredient
     * @return static
     */
    public function addIngredient(FHIRMedicationKnowledgeIngredient $ingredient): self
    {
        if (!isset($this->ingredient)) {
            $this->ingredient = [];
        }
        $this->ingredient[] = $ingredient;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Identifies a particular constituent of interest in the product.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient ...$ingredient
     * @return static
     */
    public function setIngredient(FHIRMedicationKnowledgeIngredient ...$ingredient): self
    {
        if ([] === $ingredient) {
            unset($this->ingredient);
            return $this;
        }
        $this->ingredient = $ingredient;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Specifies descriptive properties of the medicine, such as color, shape,
     * imprints, etc.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDrugCharacteristic>
     */
    public function getDrugCharacteristic(): array
    {
        return $this->drugCharacteristic ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDrugCharacteristic>
     */
    public function getDrugCharacteristicIterator(): iterable
    {
        if (!isset($this->drugCharacteristic)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->drugCharacteristic);
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Specifies descriptive properties of the medicine, such as color, shape,
     * imprints, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDrugCharacteristic $drugCharacteristic
     * @return static
     */
    public function addDrugCharacteristic(FHIRMedicationKnowledgeDrugCharacteristic $drugCharacteristic): self
    {
        if (!isset($this->drugCharacteristic)) {
            $this->drugCharacteristic = [];
        }
        $this->drugCharacteristic[] = $drugCharacteristic;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Specifies descriptive properties of the medicine, such as color, shape,
     * imprints, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDrugCharacteristic ...$drugCharacteristic
     * @return static
     */
    public function setDrugCharacteristic(FHIRMedicationKnowledgeDrugCharacteristic ...$drugCharacteristic): self
    {
        if ([] === $drugCharacteristic) {
            unset($this->drugCharacteristic);
            return $this;
        }
        $this->drugCharacteristic = $drugCharacteristic;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDefinitional $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDefinitional
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationKnowledgeDefinitional)) {
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
            } else if (self::FIELD_DEFINITION === $cen) {
                $type->addDefinition(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DOSE_FORM === $cen) {
                $type->setDoseForm(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INTENDED_ROUTE === $cen) {
                $type->addIntendedRoute(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INGREDIENT === $cen) {
                $type->addIngredient(FHIRMedicationKnowledgeIngredient::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DRUG_CHARACTERISTIC === $cen) {
                $type->addDrugCharacteristic(FHIRMedicationKnowledgeDrugCharacteristic::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        parent::xmlSerialize($xw, $config);
        if (isset($this->definition)) {
            foreach ($this->definition as $v) {
                $xw->startElement(self::FIELD_DEFINITION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->doseForm)) {
            $xw->startElement(self::FIELD_DOSE_FORM);
            $this->doseForm->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->intendedRoute)) {
            foreach ($this->intendedRoute as $v) {
                $xw->startElement(self::FIELD_INTENDED_ROUTE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->ingredient)) {
            foreach ($this->ingredient as $v) {
                $xw->startElement(self::FIELD_INGREDIENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->drugCharacteristic)) {
            foreach ($this->drugCharacteristic as $v) {
                $xw->startElement(self::FIELD_DRUG_CHARACTERISTIC);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDefinitional $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDefinitional
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationKnowledgeDefinitional)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->definition) || property_exists($decoded, self::FIELD_DEFINITION)) {
            if (is_object($decoded->definition)) {
                $vals = [$decoded->definition];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DEFINITION, true);
            } else {
                $vals = $decoded->definition;
            }
            foreach($vals as $v) {
                $type->addDefinition(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->doseForm) || property_exists($decoded, self::FIELD_DOSE_FORM)) {
            if (is_array($decoded->doseForm)) {
                $type->setDoseForm(FHIRCodeableConcept::jsonUnserialize(reset($decoded->doseForm), $config));
            } else {
                $type->setDoseForm(FHIRCodeableConcept::jsonUnserialize($decoded->doseForm, $config));
            }
        }
        if (isset($decoded->intendedRoute) || property_exists($decoded, self::FIELD_INTENDED_ROUTE)) {
            if (is_object($decoded->intendedRoute)) {
                $vals = [$decoded->intendedRoute];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_INTENDED_ROUTE, true);
            } else {
                $vals = $decoded->intendedRoute;
            }
            foreach($vals as $v) {
                $type->addIntendedRoute(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->ingredient) || property_exists($decoded, self::FIELD_INGREDIENT)) {
            if (is_object($decoded->ingredient)) {
                $vals = [$decoded->ingredient];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_INGREDIENT, true);
            } else {
                $vals = $decoded->ingredient;
            }
            foreach($vals as $v) {
                $type->addIngredient(FHIRMedicationKnowledgeIngredient::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->drugCharacteristic) || property_exists($decoded, self::FIELD_DRUG_CHARACTERISTIC)) {
            if (is_object($decoded->drugCharacteristic)) {
                $vals = [$decoded->drugCharacteristic];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DRUG_CHARACTERISTIC, true);
            } else {
                $vals = $decoded->drugCharacteristic;
            }
            foreach($vals as $v) {
                $type->addDrugCharacteristic(FHIRMedicationKnowledgeDrugCharacteristic::jsonUnserialize($v, $config));
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
        if (isset($this->definition) && [] !== $this->definition) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_DEFINITION) && 1 === count($this->definition)) {
                $out->definition = $this->definition[0];
            } else {
                $out->definition = $this->definition;
            }
        }
        if (isset($this->doseForm)) {
            $out->doseForm = $this->doseForm;
        }
        if (isset($this->intendedRoute) && [] !== $this->intendedRoute) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_INTENDED_ROUTE) && 1 === count($this->intendedRoute)) {
                $out->intendedRoute = $this->intendedRoute[0];
            } else {
                $out->intendedRoute = $this->intendedRoute;
            }
        }
        if (isset($this->ingredient) && [] !== $this->ingredient) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_INGREDIENT) && 1 === count($this->ingredient)) {
                $out->ingredient = $this->ingredient[0];
            } else {
                $out->ingredient = $this->ingredient;
            }
        }
        if (isset($this->drugCharacteristic) && [] !== $this->drugCharacteristic) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_DRUG_CHARACTERISTIC) && 1 === count($this->drugCharacteristic)) {
                $out->drugCharacteristic = $this->drugCharacteristic[0];
            } else {
                $out->drugCharacteristic = $this->drugCharacteristic;
            }
        }
        return $out;
    }
}