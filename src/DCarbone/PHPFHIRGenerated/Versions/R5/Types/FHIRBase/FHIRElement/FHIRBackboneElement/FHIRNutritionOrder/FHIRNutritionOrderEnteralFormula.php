<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 01:55+0000
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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A request to supply a diet, formula feeding (enteral) or oral nutritional
 * supplement to a patient/resident.
 */
class FHIRNutritionOrderEnteralFormula extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ENTERAL_FORMULA;

    /* class_default.php:50 */
    public const FIELD_BASE_FORMULA_TYPE = 'baseFormulaType';
    public const FIELD_BASE_FORMULA_PRODUCT_NAME = 'baseFormulaProductName';
    public const FIELD_BASE_FORMULA_PRODUCT_NAME_EXT = '_baseFormulaProductName';
    public const FIELD_DELIVERY_DEVICE = 'deliveryDevice';
    public const FIELD_ADDITIVE = 'additive';
    public const FIELD_CALORIC_DENSITY = 'caloricDensity';
    public const FIELD_ROUTE_OF_ADMINISTRATION = 'routeOfAdministration';
    public const FIELD_ADMINISTRATION = 'administration';
    public const FIELD_MAX_VOLUME_TO_DELIVER = 'maxVolumeToDeliver';
    public const FIELD_ADMINISTRATION_INSTRUCTION = 'administrationInstruction';
    public const FIELD_ADMINISTRATION_INSTRUCTION_EXT = '_administrationInstruction';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_BASE_FORMULA_PRODUCT_NAME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ADMINISTRATION_INSTRUCTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of enteral or infant formula such as an adult standard formula with
     * fiber or a soy-based infant formula.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference 
     */
    protected FHIRCodeableReference $baseFormulaType;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The product or brand name of the enteral or infant formula product such as "ACME
     * Adult Standard Formula".
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $baseFormulaProductName;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended type of device that is to be used for the administration of the
     * enteral formula.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[] 
     */
    protected array $deliveryDevice;
    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Indicates modular components to be provided in addition or mixed with the base
     * formula.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdditive[] 
     */
    protected array $additive;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount of energy (calories) that the formula should provide per specified
     * volume, typically per mL or fluid oz. For example, an infant may require a
     * formula that provides 24 calories per fluid ounce or an adult may require an
     * enteral formula that provides 1.5 calorie/mL.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity 
     */
    protected FHIRQuantity $caloricDensity;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The route or physiological path of administration into the patient's
     * gastrointestinal tract for purposes of providing the formula feeding, e.g.
     * nasogastric tube.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $routeOfAdministration;
    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Formula administration instructions as structured data. This repeating structure
     * allows for changing the administration rate or volume over time for both bolus
     * and continuous feeding. An example of this would be an instruction to increase
     * the rate of continuous feeding every 2 hours.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration[] 
     */
    protected array $administration;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum total quantity of formula that may be administered to a subject over
     * the period of time, e.g. 1440 mL over 24 hours.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity 
     */
    protected FHIRQuantity $maxVolumeToDeliver;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Free text formula administration, feeding instructions or additional
     * instructions or information.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $administrationInstruction;

    /* constructor.php:61 */
    /**
     * FHIRNutritionOrderEnteralFormula Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $baseFormulaType
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $baseFormulaProductName
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[] $deliveryDevice
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdditive[] $additive
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $caloricDensity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $routeOfAdministration
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration[] $administration
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $maxVolumeToDeliver
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $administrationInstruction
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableReference $baseFormulaType = null,
                                null|string|FHIRStringPrimitive|FHIRString $baseFormulaProductName = null,
                                null|iterable $deliveryDevice = null,
                                null|iterable $additive = null,
                                null|FHIRQuantity $caloricDensity = null,
                                null|FHIRCodeableConcept $routeOfAdministration = null,
                                null|iterable $administration = null,
                                null|FHIRQuantity $maxVolumeToDeliver = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $administrationInstruction = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $baseFormulaType) {
            $this->setBaseFormulaType($baseFormulaType);
        }
        if (null !== $baseFormulaProductName) {
            $this->setBaseFormulaProductName($baseFormulaProductName);
        }
        if (null !== $deliveryDevice) {
            $this->setDeliveryDevice(...$deliveryDevice);
        }
        if (null !== $additive) {
            $this->setAdditive(...$additive);
        }
        if (null !== $caloricDensity) {
            $this->setCaloricDensity($caloricDensity);
        }
        if (null !== $routeOfAdministration) {
            $this->setRouteOfAdministration($routeOfAdministration);
        }
        if (null !== $administration) {
            $this->setAdministration(...$administration);
        }
        if (null !== $maxVolumeToDeliver) {
            $this->setMaxVolumeToDeliver($maxVolumeToDeliver);
        }
        if (null !== $administrationInstruction) {
            $this->setAdministrationInstruction($administrationInstruction);
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
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of enteral or infant formula such as an adult standard formula with
     * fiber or a soy-based infant formula.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    public function getBaseFormulaType(): null|FHIRCodeableReference
    {
        return $this->baseFormulaType ?? null;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of enteral or infant formula such as an adult standard formula with
     * fiber or a soy-based infant formula.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $baseFormulaType
     * @return static
     */
    public function setBaseFormulaType(null|FHIRCodeableReference $baseFormulaType): self
    {
        if (null === $baseFormulaType) {
            unset($this->baseFormulaType);
            return $this;
        }
        $this->baseFormulaType = $baseFormulaType;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The product or brand name of the enteral or infant formula product such as "ACME
     * Adult Standard Formula".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getBaseFormulaProductName(): null|FHIRString
    {
        return $this->baseFormulaProductName ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The product or brand name of the enteral or infant formula product such as "ACME
     * Adult Standard Formula".
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $baseFormulaProductName
     * @return static
     */
    public function setBaseFormulaProductName(null|string|FHIRStringPrimitive|FHIRString $baseFormulaProductName): self
    {
        if (null === $baseFormulaProductName) {
            unset($this->baseFormulaProductName);
            return $this;
        }
        if (!($baseFormulaProductName instanceof FHIRString)) {
            $baseFormulaProductName = new FHIRString(value: $baseFormulaProductName);
        }
        $this->baseFormulaProductName = $baseFormulaProductName;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended type of device that is to be used for the administration of the
     * enteral formula.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[]
     */
    public function getDeliveryDevice(): array
    {
        return $this->deliveryDevice ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference>
     */
    public function getDeliveryDeviceIterator(): iterable
    {
        if (!isset($this->deliveryDevice)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->deliveryDevice);
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended type of device that is to be used for the administration of the
     * enteral formula.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $deliveryDevice
     * @return static
     */
    public function addDeliveryDevice(FHIRCodeableReference $deliveryDevice): self
    {
        if (!isset($this->deliveryDevice)) {
            $this->deliveryDevice = [];
        }
        $this->deliveryDevice[] = $deliveryDevice;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended type of device that is to be used for the administration of the
     * enteral formula.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference ...$deliveryDevice
     * @return static
     */
    public function setDeliveryDevice(FHIRCodeableReference ...$deliveryDevice): self
    {
        if ([] === $deliveryDevice) {
            unset($this->deliveryDevice);
            return $this;
        }
        $this->deliveryDevice = $deliveryDevice;
        return $this;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Indicates modular components to be provided in addition or mixed with the base
     * formula.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdditive[]
     */
    public function getAdditive(): array
    {
        return $this->additive ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdditive>
     */
    public function getAdditiveIterator(): iterable
    {
        if (!isset($this->additive)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->additive);
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Indicates modular components to be provided in addition or mixed with the base
     * formula.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdditive $additive
     * @return static
     */
    public function addAdditive(FHIRNutritionOrderAdditive $additive): self
    {
        if (!isset($this->additive)) {
            $this->additive = [];
        }
        $this->additive[] = $additive;
        return $this;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Indicates modular components to be provided in addition or mixed with the base
     * formula.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdditive ...$additive
     * @return static
     */
    public function setAdditive(FHIRNutritionOrderAdditive ...$additive): self
    {
        if ([] === $additive) {
            unset($this->additive);
            return $this;
        }
        $this->additive = $additive;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount of energy (calories) that the formula should provide per specified
     * volume, typically per mL or fluid oz. For example, an infant may require a
     * formula that provides 24 calories per fluid ounce or an adult may require an
     * enteral formula that provides 1.5 calorie/mL.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getCaloricDensity(): null|FHIRQuantity
    {
        return $this->caloricDensity ?? null;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount of energy (calories) that the formula should provide per specified
     * volume, typically per mL or fluid oz. For example, an infant may require a
     * formula that provides 24 calories per fluid ounce or an adult may require an
     * enteral formula that provides 1.5 calorie/mL.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $caloricDensity
     * @return static
     */
    public function setCaloricDensity(null|FHIRQuantity $caloricDensity): self
    {
        if (null === $caloricDensity) {
            unset($this->caloricDensity);
            return $this;
        }
        $this->caloricDensity = $caloricDensity;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The route or physiological path of administration into the patient's
     * gastrointestinal tract for purposes of providing the formula feeding, e.g.
     * nasogastric tube.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getRouteOfAdministration(): null|FHIRCodeableConcept
    {
        return $this->routeOfAdministration ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The route or physiological path of administration into the patient's
     * gastrointestinal tract for purposes of providing the formula feeding, e.g.
     * nasogastric tube.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $routeOfAdministration
     * @return static
     */
    public function setRouteOfAdministration(null|FHIRCodeableConcept $routeOfAdministration): self
    {
        if (null === $routeOfAdministration) {
            unset($this->routeOfAdministration);
            return $this;
        }
        $this->routeOfAdministration = $routeOfAdministration;
        return $this;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Formula administration instructions as structured data. This repeating structure
     * allows for changing the administration rate or volume over time for both bolus
     * and continuous feeding. An example of this would be an instruction to increase
     * the rate of continuous feeding every 2 hours.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration[]
     */
    public function getAdministration(): array
    {
        return $this->administration ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration>
     */
    public function getAdministrationIterator(): iterable
    {
        if (!isset($this->administration)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->administration);
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Formula administration instructions as structured data. This repeating structure
     * allows for changing the administration rate or volume over time for both bolus
     * and continuous feeding. An example of this would be an instruction to increase
     * the rate of continuous feeding every 2 hours.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration $administration
     * @return static
     */
    public function addAdministration(FHIRNutritionOrderAdministration $administration): self
    {
        if (!isset($this->administration)) {
            $this->administration = [];
        }
        $this->administration[] = $administration;
        return $this;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Formula administration instructions as structured data. This repeating structure
     * allows for changing the administration rate or volume over time for both bolus
     * and continuous feeding. An example of this would be an instruction to increase
     * the rate of continuous feeding every 2 hours.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration ...$administration
     * @return static
     */
    public function setAdministration(FHIRNutritionOrderAdministration ...$administration): self
    {
        if ([] === $administration) {
            unset($this->administration);
            return $this;
        }
        $this->administration = $administration;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum total quantity of formula that may be administered to a subject over
     * the period of time, e.g. 1440 mL over 24 hours.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getMaxVolumeToDeliver(): null|FHIRQuantity
    {
        return $this->maxVolumeToDeliver ?? null;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum total quantity of formula that may be administered to a subject over
     * the period of time, e.g. 1440 mL over 24 hours.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $maxVolumeToDeliver
     * @return static
     */
    public function setMaxVolumeToDeliver(null|FHIRQuantity $maxVolumeToDeliver): self
    {
        if (null === $maxVolumeToDeliver) {
            unset($this->maxVolumeToDeliver);
            return $this;
        }
        $this->maxVolumeToDeliver = $maxVolumeToDeliver;
        return $this;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Free text formula administration, feeding instructions or additional
     * instructions or information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getAdministrationInstruction(): null|FHIRMarkdown
    {
        return $this->administrationInstruction ?? null;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Free text formula administration, feeding instructions or additional
     * instructions or information.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $administrationInstruction
     * @return static
     */
    public function setAdministrationInstruction(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $administrationInstruction): self
    {
        if (null === $administrationInstruction) {
            unset($this->administrationInstruction);
            return $this;
        }
        if (!($administrationInstruction instanceof FHIRMarkdown)) {
            $administrationInstruction = new FHIRMarkdown(value: $administrationInstruction);
        }
        $this->administrationInstruction = $administrationInstruction;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRNutritionOrderEnteralFormula)) {
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
            } else if (self::FIELD_BASE_FORMULA_TYPE === $cen) {
                $type->setBaseFormulaType(FHIRCodeableReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BASE_FORMULA_PRODUCT_NAME === $cen) {
                $type->setBaseFormulaProductName(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DELIVERY_DEVICE === $cen) {
                $type->addDeliveryDevice(FHIRCodeableReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADDITIVE === $cen) {
                $type->addAdditive(FHIRNutritionOrderAdditive::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CALORIC_DENSITY === $cen) {
                $type->setCaloricDensity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ROUTE_OF_ADMINISTRATION === $cen) {
                $type->setRouteOfAdministration(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADMINISTRATION === $cen) {
                $type->addAdministration(FHIRNutritionOrderAdministration::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAX_VOLUME_TO_DELIVER === $cen) {
                $type->setMaxVolumeToDeliver(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADMINISTRATION_INSTRUCTION === $cen) {
                $type->setAdministrationInstruction(FHIRMarkdown::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_BASE_FORMULA_PRODUCT_NAME])) {
            if (isset($type->baseFormulaProductName)) {
                $type->baseFormulaProductName->setValue((string)$attributes[self::FIELD_BASE_FORMULA_PRODUCT_NAME]);
            } else {
                $type->setBaseFormulaProductName((string)$attributes[self::FIELD_BASE_FORMULA_PRODUCT_NAME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_BASE_FORMULA_PRODUCT_NAME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ADMINISTRATION_INSTRUCTION])) {
            if (isset($type->administrationInstruction)) {
                $type->administrationInstruction->setValue((string)$attributes[self::FIELD_ADMINISTRATION_INSTRUCTION]);
            } else {
                $type->setAdministrationInstruction((string)$attributes[self::FIELD_ADMINISTRATION_INSTRUCTION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ADMINISTRATION_INSTRUCTION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->baseFormulaProductName) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_BASE_FORMULA_PRODUCT_NAME]) {
            $xw->writeAttribute(self::FIELD_BASE_FORMULA_PRODUCT_NAME, $this->baseFormulaProductName->_getValueAsString());
        }
        if (isset($this->administrationInstruction) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ADMINISTRATION_INSTRUCTION]) {
            $xw->writeAttribute(self::FIELD_ADMINISTRATION_INSTRUCTION, $this->administrationInstruction->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->baseFormulaType)) {
            $xw->startElement(self::FIELD_BASE_FORMULA_TYPE);
            $this->baseFormulaType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->baseFormulaProductName)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_BASE_FORMULA_PRODUCT_NAME]
                || $this->baseFormulaProductName->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_BASE_FORMULA_PRODUCT_NAME);
            $this->baseFormulaProductName->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_BASE_FORMULA_PRODUCT_NAME]);
            $xw->endElement();
        }
        if (isset($this->deliveryDevice)) {
            foreach ($this->deliveryDevice as $v) {
                $xw->startElement(self::FIELD_DELIVERY_DEVICE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->additive)) {
            foreach ($this->additive as $v) {
                $xw->startElement(self::FIELD_ADDITIVE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->caloricDensity)) {
            $xw->startElement(self::FIELD_CALORIC_DENSITY);
            $this->caloricDensity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->routeOfAdministration)) {
            $xw->startElement(self::FIELD_ROUTE_OF_ADMINISTRATION);
            $this->routeOfAdministration->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->administration)) {
            foreach ($this->administration as $v) {
                $xw->startElement(self::FIELD_ADMINISTRATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->maxVolumeToDeliver)) {
            $xw->startElement(self::FIELD_MAX_VOLUME_TO_DELIVER);
            $this->maxVolumeToDeliver->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->administrationInstruction)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ADMINISTRATION_INSTRUCTION]
                || $this->administrationInstruction->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ADMINISTRATION_INSTRUCTION);
            $this->administrationInstruction->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ADMINISTRATION_INSTRUCTION]);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRNutritionOrderEnteralFormula)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->baseFormulaType) || property_exists($json, self::FIELD_BASE_FORMULA_TYPE)) {
            if (is_array($json->baseFormulaType)) {
                $type->setBaseFormulaType(FHIRCodeableReference::jsonUnserialize(reset($json->baseFormulaType), $config));
            } else {
                $type->setBaseFormulaType(FHIRCodeableReference::jsonUnserialize($json->baseFormulaType, $config));
            }
        }
        if (isset($json->baseFormulaProductName)
            || isset($json->_baseFormulaProductName)
            || property_exists($json, self::FIELD_BASE_FORMULA_PRODUCT_NAME)
            || property_exists($json, self::FIELD_BASE_FORMULA_PRODUCT_NAME_EXT)) {
            $v = $json->_baseFormulaProductName ?? new \stdClass();
            $v->value = $json->baseFormulaProductName ?? null;
            $type->setBaseFormulaProductName(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->deliveryDevice) || property_exists($json, self::FIELD_DELIVERY_DEVICE)) {
            if (is_object($json->deliveryDevice)) {
                $vals = [$json->deliveryDevice];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DELIVERY_DEVICE, true);
            } else {
                $vals = $json->deliveryDevice;
            }
            foreach($vals as $v) {
                $type->addDeliveryDevice(FHIRCodeableReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->additive) || property_exists($json, self::FIELD_ADDITIVE)) {
            if (is_object($json->additive)) {
                $vals = [$json->additive];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ADDITIVE, true);
            } else {
                $vals = $json->additive;
            }
            foreach($vals as $v) {
                $type->addAdditive(FHIRNutritionOrderAdditive::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->caloricDensity) || property_exists($json, self::FIELD_CALORIC_DENSITY)) {
            if (is_array($json->caloricDensity)) {
                $type->setCaloricDensity(FHIRQuantity::jsonUnserialize(reset($json->caloricDensity), $config));
            } else {
                $type->setCaloricDensity(FHIRQuantity::jsonUnserialize($json->caloricDensity, $config));
            }
        }
        if (isset($json->routeOfAdministration) || property_exists($json, self::FIELD_ROUTE_OF_ADMINISTRATION)) {
            if (is_array($json->routeOfAdministration)) {
                $type->setRouteOfAdministration(FHIRCodeableConcept::jsonUnserialize(reset($json->routeOfAdministration), $config));
            } else {
                $type->setRouteOfAdministration(FHIRCodeableConcept::jsonUnserialize($json->routeOfAdministration, $config));
            }
        }
        if (isset($json->administration) || property_exists($json, self::FIELD_ADMINISTRATION)) {
            if (is_object($json->administration)) {
                $vals = [$json->administration];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ADMINISTRATION, true);
            } else {
                $vals = $json->administration;
            }
            foreach($vals as $v) {
                $type->addAdministration(FHIRNutritionOrderAdministration::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->maxVolumeToDeliver) || property_exists($json, self::FIELD_MAX_VOLUME_TO_DELIVER)) {
            if (is_array($json->maxVolumeToDeliver)) {
                $type->setMaxVolumeToDeliver(FHIRQuantity::jsonUnserialize(reset($json->maxVolumeToDeliver), $config));
            } else {
                $type->setMaxVolumeToDeliver(FHIRQuantity::jsonUnserialize($json->maxVolumeToDeliver, $config));
            }
        }
        if (isset($json->administrationInstruction)
            || isset($json->_administrationInstruction)
            || property_exists($json, self::FIELD_ADMINISTRATION_INSTRUCTION)
            || property_exists($json, self::FIELD_ADMINISTRATION_INSTRUCTION_EXT)) {
            $v = $json->_administrationInstruction ?? new \stdClass();
            $v->value = $json->administrationInstruction ?? null;
            $type->setAdministrationInstruction(FHIRMarkdown::jsonUnserialize($v, $config));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->baseFormulaType)) {
            $out->baseFormulaType = $this->baseFormulaType;
        }
        if (isset($this->baseFormulaProductName)) {
            if (null !== ($val = $this->baseFormulaProductName->getValue())) {
                $out->baseFormulaProductName = $val;
            }
            if ($this->baseFormulaProductName->_nonValueFieldDefined()) {
                $ext = $this->baseFormulaProductName->jsonSerialize();
                unset($ext->value);
                $out->_baseFormulaProductName = $ext;
            }
        }
        if (isset($this->deliveryDevice) && [] !== $this->deliveryDevice) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_DELIVERY_DEVICE) && 1 === count($this->deliveryDevice)) {
                $out->deliveryDevice = $this->deliveryDevice[0];
            } else {
                $out->deliveryDevice = $this->deliveryDevice;
            }
        }
        if (isset($this->additive) && [] !== $this->additive) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ADDITIVE) && 1 === count($this->additive)) {
                $out->additive = $this->additive[0];
            } else {
                $out->additive = $this->additive;
            }
        }
        if (isset($this->caloricDensity)) {
            $out->caloricDensity = $this->caloricDensity;
        }
        if (isset($this->routeOfAdministration)) {
            $out->routeOfAdministration = $this->routeOfAdministration;
        }
        if (isset($this->administration) && [] !== $this->administration) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ADMINISTRATION) && 1 === count($this->administration)) {
                $out->administration = $this->administration[0];
            } else {
                $out->administration = $this->administration;
            }
        }
        if (isset($this->maxVolumeToDeliver)) {
            $out->maxVolumeToDeliver = $this->maxVolumeToDeliver;
        }
        if (isset($this->administrationInstruction)) {
            if (null !== ($val = $this->administrationInstruction->getValue())) {
                $out->administrationInstruction = $val;
            }
            if ($this->administrationInstruction->_nonValueFieldDefined()) {
                $ext = $this->administrationInstruction->jsonSerialize();
                unset($ext->value);
                $out->_administrationInstruction = $ext;
            }
        }
        return $out;
    }
}