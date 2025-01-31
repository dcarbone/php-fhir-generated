<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder;

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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
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
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * A request to supply a diet, formula feeding (enteral) or oral nutritional
 * supplement to a patient/resident.
 */
class FHIRNutritionOrderEnteralFormula extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ENTERAL_FORMULA;

    /* class_default.php:47 */
    public const FIELD_BASE_FORMULA_TYPE = 'baseFormulaType';
    public const FIELD_BASE_FORMULA_PRODUCT_NAME = 'baseFormulaProductName';
    public const FIELD_BASE_FORMULA_PRODUCT_NAME_EXT = '_baseFormulaProductName';
    public const FIELD_ADDITIVE_TYPE = 'additiveType';
    public const FIELD_ADDITIVE_PRODUCT_NAME = 'additiveProductName';
    public const FIELD_ADDITIVE_PRODUCT_NAME_EXT = '_additiveProductName';
    public const FIELD_CALORIC_DENSITY = 'caloricDensity';
    public const FIELD_ROUTEOF_ADMINISTRATION = 'routeofAdministration';
    public const FIELD_ADMINISTRATION = 'administration';
    public const FIELD_MAX_VOLUME_TO_DELIVER = 'maxVolumeToDeliver';
    public const FIELD_ADMINISTRATION_INSTRUCTION = 'administrationInstruction';
    public const FIELD_ADMINISTRATION_INSTRUCTION_EXT = '_administrationInstruction';

    /* class_default.php:66 */
    private static array $_validationRules = [];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_BASE_FORMULA_PRODUCT_NAME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ADDITIVE_PRODUCT_NAME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ADMINISTRATION_INSTRUCTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of enteral or infant formula such as an adult standard formula with
     * fiber or a soy-based infant formula.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $baseFormulaType;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The product or brand name of the enteral or infant formula product such as "ACME
     * Adult Standard Formula".
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $baseFormulaProductName;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the type of modular component such as protein, carbohydrate, fat or
     * fiber to be provided in addition to or mixed with the base formula.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $additiveType;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The product or brand name of the type of modular component to be added to the
     * formula.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $additiveProductName;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $routeofAdministration;
    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Formula administration instructions as structured data. This repeating structure
     * allows for changing the administration rate or volume over time for both bolus
     * and continuous feeding. An example of this would be an instruction to increase
     * the rate of continuous feeding every 2 hours.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration[] 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $maxVolumeToDeliver;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text formula administration, feeding instructions or additional
     * instructions or information.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $administrationInstruction;

    /* constructor.php:63 */
    /**
     * FHIRNutritionOrderEnteralFormula Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $baseFormulaType
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $baseFormulaProductName
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $additiveType
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $additiveProductName
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $caloricDensity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $routeofAdministration
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration[] $administration
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $maxVolumeToDeliver
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $administrationInstruction
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $baseFormulaType = null,
                                null|string|FHIRStringPrimitive|FHIRString $baseFormulaProductName = null,
                                null|FHIRCodeableConcept $additiveType = null,
                                null|string|FHIRStringPrimitive|FHIRString $additiveProductName = null,
                                null|FHIRDecimal|FHIRQuantity $caloricDensity = null,
                                null|FHIRCodeableConcept $routeofAdministration = null,
                                null|iterable $administration = null,
                                null|FHIRDecimal|FHIRQuantity $maxVolumeToDeliver = null,
                                null|string|FHIRStringPrimitive|FHIRString $administrationInstruction = null,
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
        if (null !== $additiveType) {
            $this->setAdditiveType($additiveType);
        }
        if (null !== $additiveProductName) {
            $this->setAdditiveProductName($additiveProductName);
        }
        if (null !== $caloricDensity) {
            $this->setCaloricDensity($caloricDensity);
        }
        if (null !== $routeofAdministration) {
            $this->setRouteofAdministration($routeofAdministration);
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of enteral or infant formula such as an adult standard formula with
     * fiber or a soy-based infant formula.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getBaseFormulaType(): null|FHIRCodeableConcept
    {
        return $this->baseFormulaType ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of enteral or infant formula such as an adult standard formula with
     * fiber or a soy-based infant formula.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $baseFormulaType
     * @return static
     */
    public function setBaseFormulaType(null|FHIRCodeableConcept $baseFormulaType): self
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
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The product or brand name of the enteral or infant formula product such as "ACME
     * Adult Standard Formula".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getBaseFormulaProductName(): null|FHIRString
    {
        return $this->baseFormulaProductName ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The product or brand name of the enteral or infant formula product such as "ACME
     * Adult Standard Formula".
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $baseFormulaProductName
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setBaseFormulaProductName(null|string|FHIRStringPrimitive|FHIRString $baseFormulaProductName,
                                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $baseFormulaProductName) {
            unset($this->baseFormulaProductName);
            return $this;
        }
        if (!($baseFormulaProductName instanceof FHIRString)) {
            $baseFormulaProductName = new FHIRString(value: $baseFormulaProductName);
        }
        $this->baseFormulaProductName = $baseFormulaProductName;
        if ($this->_valueXMLLocations[self::FIELD_BASE_FORMULA_PRODUCT_NAME] !== $valueXMLLocation) {
            $this->_setBaseFormulaProductNameValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the baseFormulaProductName element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getBaseFormulaProductNameValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_BASE_FORMULA_PRODUCT_NAME];
    }

    /**
     * Set the location the "value" field of the baseFormulaProductName element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setBaseFormulaProductNameValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_BASE_FORMULA_PRODUCT_NAME] = $valueXMLLocation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the type of modular component such as protein, carbohydrate, fat or
     * fiber to be provided in addition to or mixed with the base formula.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getAdditiveType(): null|FHIRCodeableConcept
    {
        return $this->additiveType ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the type of modular component such as protein, carbohydrate, fat or
     * fiber to be provided in addition to or mixed with the base formula.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $additiveType
     * @return static
     */
    public function setAdditiveType(null|FHIRCodeableConcept $additiveType): self
    {
        if (null === $additiveType) {
            unset($this->additiveType);
            return $this;
        }
        $this->additiveType = $additiveType;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The product or brand name of the type of modular component to be added to the
     * formula.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getAdditiveProductName(): null|FHIRString
    {
        return $this->additiveProductName ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The product or brand name of the type of modular component to be added to the
     * formula.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $additiveProductName
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAdditiveProductName(null|string|FHIRStringPrimitive|FHIRString $additiveProductName,
                                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $additiveProductName) {
            unset($this->additiveProductName);
            return $this;
        }
        if (!($additiveProductName instanceof FHIRString)) {
            $additiveProductName = new FHIRString(value: $additiveProductName);
        }
        $this->additiveProductName = $additiveProductName;
        if ($this->_valueXMLLocations[self::FIELD_ADDITIVE_PRODUCT_NAME] !== $valueXMLLocation) {
            $this->_setAdditiveProductNameValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the additiveProductName element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAdditiveProductNameValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ADDITIVE_PRODUCT_NAME];
    }

    /**
     * Set the location the "value" field of the additiveProductName element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAdditiveProductNameValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ADDITIVE_PRODUCT_NAME] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $caloricDensity
     * @return static
     */
    public function setCaloricDensity(null|FHIRDecimal|FHIRQuantity $caloricDensity): self
    {
        if (null === $caloricDensity) {
            unset($this->caloricDensity);
            return $this;
        }
        if (!($caloricDensity instanceof FHIRQuantity)) {
            $caloricDensity = new FHIRQuantity(value: $caloricDensity);
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getRouteofAdministration(): null|FHIRCodeableConcept
    {
        return $this->routeofAdministration ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $routeofAdministration
     * @return static
     */
    public function setRouteofAdministration(null|FHIRCodeableConcept $routeofAdministration): self
    {
        if (null === $routeofAdministration) {
            unset($this->routeofAdministration);
            return $this;
        }
        $this->routeofAdministration = $routeofAdministration;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration[]
     */
    public function getAdministration(): array
    {
        return $this->administration ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration>
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration $administration
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration ...$administration
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $maxVolumeToDeliver
     * @return static
     */
    public function setMaxVolumeToDeliver(null|FHIRDecimal|FHIRQuantity $maxVolumeToDeliver): self
    {
        if (null === $maxVolumeToDeliver) {
            unset($this->maxVolumeToDeliver);
            return $this;
        }
        if (!($maxVolumeToDeliver instanceof FHIRQuantity)) {
            $maxVolumeToDeliver = new FHIRQuantity(value: $maxVolumeToDeliver);
        }
        $this->maxVolumeToDeliver = $maxVolumeToDeliver;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text formula administration, feeding instructions or additional
     * instructions or information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getAdministrationInstruction(): null|FHIRString
    {
        return $this->administrationInstruction ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text formula administration, feeding instructions or additional
     * instructions or information.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $administrationInstruction
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAdministrationInstruction(null|string|FHIRStringPrimitive|FHIRString $administrationInstruction,
                                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $administrationInstruction) {
            unset($this->administrationInstruction);
            return $this;
        }
        if (!($administrationInstruction instanceof FHIRString)) {
            $administrationInstruction = new FHIRString(value: $administrationInstruction);
        }
        $this->administrationInstruction = $administrationInstruction;
        if ($this->_valueXMLLocations[self::FIELD_ADMINISTRATION_INSTRUCTION] !== $valueXMLLocation) {
            $this->_setAdministrationInstructionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the administrationInstruction element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAdministrationInstructionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ADMINISTRATION_INSTRUCTION];
    }

    /**
     * Set the location the "value" field of the administrationInstruction element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAdministrationInstructionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ADMINISTRATION_INSTRUCTION] = $valueXMLLocation;
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
        if (isset($validationRules[self::FIELD_BASE_FORMULA_TYPE])) {
            $v = $this->getBaseFormulaType();
            foreach($validationRules[self::FIELD_BASE_FORMULA_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BASE_FORMULA_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASE_FORMULA_TYPE])) {
                        $errs[self::FIELD_BASE_FORMULA_TYPE] = [];
                    }
                    $errs[self::FIELD_BASE_FORMULA_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BASE_FORMULA_PRODUCT_NAME])) {
            $v = $this->getBaseFormulaProductName();
            foreach($validationRules[self::FIELD_BASE_FORMULA_PRODUCT_NAME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BASE_FORMULA_PRODUCT_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASE_FORMULA_PRODUCT_NAME])) {
                        $errs[self::FIELD_BASE_FORMULA_PRODUCT_NAME] = [];
                    }
                    $errs[self::FIELD_BASE_FORMULA_PRODUCT_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADDITIVE_TYPE])) {
            $v = $this->getAdditiveType();
            foreach($validationRules[self::FIELD_ADDITIVE_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ADDITIVE_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDITIVE_TYPE])) {
                        $errs[self::FIELD_ADDITIVE_TYPE] = [];
                    }
                    $errs[self::FIELD_ADDITIVE_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADDITIVE_PRODUCT_NAME])) {
            $v = $this->getAdditiveProductName();
            foreach($validationRules[self::FIELD_ADDITIVE_PRODUCT_NAME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ADDITIVE_PRODUCT_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDITIVE_PRODUCT_NAME])) {
                        $errs[self::FIELD_ADDITIVE_PRODUCT_NAME] = [];
                    }
                    $errs[self::FIELD_ADDITIVE_PRODUCT_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CALORIC_DENSITY])) {
            $v = $this->getCaloricDensity();
            foreach($validationRules[self::FIELD_CALORIC_DENSITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CALORIC_DENSITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CALORIC_DENSITY])) {
                        $errs[self::FIELD_CALORIC_DENSITY] = [];
                    }
                    $errs[self::FIELD_CALORIC_DENSITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ROUTEOF_ADMINISTRATION])) {
            $v = $this->getRouteofAdministration();
            foreach($validationRules[self::FIELD_ROUTEOF_ADMINISTRATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ROUTEOF_ADMINISTRATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ROUTEOF_ADMINISTRATION])) {
                        $errs[self::FIELD_ROUTEOF_ADMINISTRATION] = [];
                    }
                    $errs[self::FIELD_ROUTEOF_ADMINISTRATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADMINISTRATION])) {
            $v = $this->getAdministration();
            foreach($validationRules[self::FIELD_ADMINISTRATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ADMINISTRATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADMINISTRATION])) {
                        $errs[self::FIELD_ADMINISTRATION] = [];
                    }
                    $errs[self::FIELD_ADMINISTRATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_VOLUME_TO_DELIVER])) {
            $v = $this->getMaxVolumeToDeliver();
            foreach($validationRules[self::FIELD_MAX_VOLUME_TO_DELIVER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MAX_VOLUME_TO_DELIVER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_VOLUME_TO_DELIVER])) {
                        $errs[self::FIELD_MAX_VOLUME_TO_DELIVER] = [];
                    }
                    $errs[self::FIELD_MAX_VOLUME_TO_DELIVER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADMINISTRATION_INSTRUCTION])) {
            $v = $this->getAdministrationInstruction();
            foreach($validationRules[self::FIELD_ADMINISTRATION_INSTRUCTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ADMINISTRATION_INSTRUCTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADMINISTRATION_INSTRUCTION])) {
                        $errs[self::FIELD_ADMINISTRATION_INSTRUCTION] = [];
                    }
                    $errs[self::FIELD_ADMINISTRATION_INSTRUCTION][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula
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
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BASE_FORMULA_TYPE === $cen) {
                $type->setBaseFormulaType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BASE_FORMULA_PRODUCT_NAME === $cen) {
                $type->setBaseFormulaProductName(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADDITIVE_TYPE === $cen) {
                $type->setAdditiveType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADDITIVE_PRODUCT_NAME === $cen) {
                $type->setAdditiveProductName(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CALORIC_DENSITY === $cen) {
                $type->setCaloricDensity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ROUTEOF_ADMINISTRATION === $cen) {
                $type->setRouteofAdministration(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADMINISTRATION === $cen) {
                $type->addAdministration(FHIRNutritionOrderAdministration::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAX_VOLUME_TO_DELIVER === $cen) {
                $type->setMaxVolumeToDeliver(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADMINISTRATION_INSTRUCTION === $cen) {
                $type->setAdministrationInstruction(FHIRString::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_BASE_FORMULA_PRODUCT_NAME])) {
            if (isset($type->baseFormulaProductName)) {
                $type->baseFormulaProductName->setValue((string)$attributes[self::FIELD_BASE_FORMULA_PRODUCT_NAME]);
                $type->_setBaseFormulaProductNameValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setBaseFormulaProductName((string)$attributes[self::FIELD_BASE_FORMULA_PRODUCT_NAME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ADDITIVE_PRODUCT_NAME])) {
            if (isset($type->additiveProductName)) {
                $type->additiveProductName->setValue((string)$attributes[self::FIELD_ADDITIVE_PRODUCT_NAME]);
                $type->_setAdditiveProductNameValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAdditiveProductName((string)$attributes[self::FIELD_ADDITIVE_PRODUCT_NAME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ADMINISTRATION_INSTRUCTION])) {
            if (isset($type->administrationInstruction)) {
                $type->administrationInstruction->setValue((string)$attributes[self::FIELD_ADMINISTRATION_INSTRUCTION]);
                $type->_setAdministrationInstructionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAdministrationInstruction((string)$attributes[self::FIELD_ADMINISTRATION_INSTRUCTION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->baseFormulaProductName) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_BASE_FORMULA_PRODUCT_NAME]) {
            $xw->writeAttribute(self::FIELD_BASE_FORMULA_PRODUCT_NAME, $this->baseFormulaProductName->_getFormattedValue());
        }
        if (isset($this->additiveProductName) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ADDITIVE_PRODUCT_NAME]) {
            $xw->writeAttribute(self::FIELD_ADDITIVE_PRODUCT_NAME, $this->additiveProductName->_getFormattedValue());
        }
        if (isset($this->administrationInstruction) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ADMINISTRATION_INSTRUCTION]) {
            $xw->writeAttribute(self::FIELD_ADMINISTRATION_INSTRUCTION, $this->administrationInstruction->_getFormattedValue());
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
        if (isset($this->additiveType)) {
            $xw->startElement(self::FIELD_ADDITIVE_TYPE);
            $this->additiveType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->additiveProductName)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ADDITIVE_PRODUCT_NAME]
                || $this->additiveProductName->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ADDITIVE_PRODUCT_NAME);
            $this->additiveProductName->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ADDITIVE_PRODUCT_NAME]);
            $xw->endElement();
        }
        if (isset($this->caloricDensity)) {
            $xw->startElement(self::FIELD_CALORIC_DENSITY);
            $this->caloricDensity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->routeofAdministration)) {
            $xw->startElement(self::FIELD_ROUTEOF_ADMINISTRATION);
            $this->routeofAdministration->xmlSerialize($xw, $config);
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
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
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
        if (isset($json[self::FIELD_BASE_FORMULA_TYPE]) || array_key_exists(self::FIELD_BASE_FORMULA_TYPE, $json)) {
            $type->setBaseFormulaType(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_BASE_FORMULA_TYPE], $config));
        }
        if (isset($json[self::FIELD_BASE_FORMULA_PRODUCT_NAME])
            || isset($json[self::FIELD_BASE_FORMULA_PRODUCT_NAME_EXT])
            || array_key_exists(self::FIELD_BASE_FORMULA_PRODUCT_NAME, $json)
            || array_key_exists(self::FIELD_BASE_FORMULA_PRODUCT_NAME_EXT, $json)) {
            $value = $json[self::FIELD_BASE_FORMULA_PRODUCT_NAME] ?? null;
            $type->setBaseFormulaProductName(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_BASE_FORMULA_PRODUCT_NAME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ADDITIVE_TYPE]) || array_key_exists(self::FIELD_ADDITIVE_TYPE, $json)) {
            $type->setAdditiveType(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_ADDITIVE_TYPE], $config));
        }
        if (isset($json[self::FIELD_ADDITIVE_PRODUCT_NAME])
            || isset($json[self::FIELD_ADDITIVE_PRODUCT_NAME_EXT])
            || array_key_exists(self::FIELD_ADDITIVE_PRODUCT_NAME, $json)
            || array_key_exists(self::FIELD_ADDITIVE_PRODUCT_NAME_EXT, $json)) {
            $value = $json[self::FIELD_ADDITIVE_PRODUCT_NAME] ?? null;
            $type->setAdditiveProductName(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_ADDITIVE_PRODUCT_NAME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CALORIC_DENSITY]) || array_key_exists(self::FIELD_CALORIC_DENSITY, $json)) {
            $type->setCaloricDensity(FHIRQuantity::jsonUnserialize($json[self::FIELD_CALORIC_DENSITY], $config));
        }
        if (isset($json[self::FIELD_ROUTEOF_ADMINISTRATION]) || array_key_exists(self::FIELD_ROUTEOF_ADMINISTRATION, $json)) {
            $type->setRouteofAdministration(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_ROUTEOF_ADMINISTRATION], $config));
        }
        if (isset($json[self::FIELD_ADMINISTRATION]) || array_key_exists(self::FIELD_ADMINISTRATION, $json)) {
            $vs = $json[self::FIELD_ADMINISTRATION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addAdministration(FHIRNutritionOrderAdministration::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_MAX_VOLUME_TO_DELIVER]) || array_key_exists(self::FIELD_MAX_VOLUME_TO_DELIVER, $json)) {
            $type->setMaxVolumeToDeliver(FHIRQuantity::jsonUnserialize($json[self::FIELD_MAX_VOLUME_TO_DELIVER], $config));
        }
        if (isset($json[self::FIELD_ADMINISTRATION_INSTRUCTION])
            || isset($json[self::FIELD_ADMINISTRATION_INSTRUCTION_EXT])
            || array_key_exists(self::FIELD_ADMINISTRATION_INSTRUCTION, $json)
            || array_key_exists(self::FIELD_ADMINISTRATION_INSTRUCTION_EXT, $json)) {
            $value = $json[self::FIELD_ADMINISTRATION_INSTRUCTION] ?? null;
            $type->setAdministrationInstruction(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_ADMINISTRATION_INSTRUCTION_EXT] ?? []),
                $config,
            ));
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
        if (isset($this->additiveType)) {
            $out->additiveType = $this->additiveType;
        }
        if (isset($this->additiveProductName)) {
            if (null !== ($val = $this->additiveProductName->getValue())) {
                $out->additiveProductName = $val;
            }
            if ($this->additiveProductName->_nonValueFieldDefined()) {
                $ext = $this->additiveProductName->jsonSerialize();
                unset($ext->value);
                $out->_additiveProductName = $ext;
            }
        }
        if (isset($this->caloricDensity)) {
            $out->caloricDensity = $this->caloricDensity;
        }
        if (isset($this->routeofAdministration)) {
            $out->routeofAdministration = $this->routeofAdministration;
        }
        if (isset($this->administration) && [] !== $this->administration) {
            $out->administration = $this->administration;
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
    /* class_default.php:236 */
    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}