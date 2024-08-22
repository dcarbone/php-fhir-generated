<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 22nd, 2024 02:47+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlWriter;

/**
 * A request to supply a diet, formula feeding (enteral) or oral nutritional
 * supplement to a patient/resident.
 *
 * Class FHIRNutritionOrderEnteralFormula
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder
 */
class FHIRNutritionOrderEnteralFormula extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ENTERAL_FORMULA;

    const FIELD_BASE_FORMULA_TYPE = 'baseFormulaType';
    const FIELD_BASE_FORMULA_PRODUCT_NAME = 'baseFormulaProductName';
    const FIELD_BASE_FORMULA_PRODUCT_NAME_EXT = '_baseFormulaProductName';
    const FIELD_ADDITIVE_TYPE = 'additiveType';
    const FIELD_ADDITIVE_PRODUCT_NAME = 'additiveProductName';
    const FIELD_ADDITIVE_PRODUCT_NAME_EXT = '_additiveProductName';
    const FIELD_CALORIC_DENSITY = 'caloricDensity';
    const FIELD_ROUTEOF_ADMINISTRATION = 'routeofAdministration';
    const FIELD_ADMINISTRATION = 'administration';
    const FIELD_MAX_VOLUME_TO_DELIVER = 'maxVolumeToDeliver';
    const FIELD_ADMINISTRATION_INSTRUCTION = 'administrationInstruction';
    const FIELD_ADMINISTRATION_INSTRUCTION_EXT = '_administrationInstruction';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of enteral or infant formula such as an adult standard formula with
     * fiber or a soy-based infant formula.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $baseFormulaType = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The product or brand name of the enteral or infant formula product such as "ACME
     * Adult Standard Formula".
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected null|FHIRString $baseFormulaProductName = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the type of modular component such as protein, carbohydrate, fat or
     * fiber to be provided in addition to or mixed with the base formula.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $additiveType = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The product or brand name of the type of modular component to be added to the
     * formula.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected null|FHIRString $additiveProductName = null;
    /**
     * The amount of energy (Calories) that the formula should provide per specified
     * volume, typically per mL or fluid oz. For example, an infant may require a
     * formula that provides 24 Calories per fluid ounce or an adult may require an
     * enteral formula that provides 1.5 Calorie/mL.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    protected null|FHIRSimpleQuantity $caloricDensity = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The route or physiological path of administration into the patient's
     * gastrointestinal tract for purposes of providing the formula feeding, e.g.
     * nasogastric tube.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $routeofAdministration = null;
    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Formula administration instructions as structured data. This repeating structure
     * allows for changing the administration rate or volume over time for both bolus
     * and continuous feeding. An example of this would be an instruction to increase
     * the rate of continuous feeding every 2 hours.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration[]
     */
    protected null|array $administration = [];
    /**
     * The maximum total quantity of formula that may be administered to a subject over
     * the period of time, e.g. 1440 mL over 24 hours.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    protected null|FHIRSimpleQuantity $maxVolumeToDeliver = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text formula administration, feeding instructions or additional
     * instructions or information.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected null|FHIRString $administrationInstruction = null;

    /**
     * Validation map for fields in type NutritionOrder.EnteralFormula
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRNutritionOrderEnteralFormula Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_BASE_FORMULA_TYPE, $data)) {
            if ($data[self::FIELD_BASE_FORMULA_TYPE] instanceof FHIRCodeableConcept) {
                $this->setBaseFormulaType($data[self::FIELD_BASE_FORMULA_TYPE]);
            } else {
                $this->setBaseFormulaType(new FHIRCodeableConcept($data[self::FIELD_BASE_FORMULA_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_BASE_FORMULA_PRODUCT_NAME, $data) || array_key_exists(self::FIELD_BASE_FORMULA_PRODUCT_NAME_EXT, $data)) {
            $value = $data[self::FIELD_BASE_FORMULA_PRODUCT_NAME] ?? null;
            $ext = (isset($data[self::FIELD_BASE_FORMULA_PRODUCT_NAME_EXT]) && is_array($data[self::FIELD_BASE_FORMULA_PRODUCT_NAME_EXT])) ? $data[self::FIELD_BASE_FORMULA_PRODUCT_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setBaseFormulaProductName($value);
                } else if (is_array($value)) {
                    $this->setBaseFormulaProductName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setBaseFormulaProductName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setBaseFormulaProductName(new FHIRString($ext));
            } else {
                $this->setBaseFormulaProductName(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_ADDITIVE_TYPE, $data)) {
            if ($data[self::FIELD_ADDITIVE_TYPE] instanceof FHIRCodeableConcept) {
                $this->setAdditiveType($data[self::FIELD_ADDITIVE_TYPE]);
            } else {
                $this->setAdditiveType(new FHIRCodeableConcept($data[self::FIELD_ADDITIVE_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_ADDITIVE_PRODUCT_NAME, $data) || array_key_exists(self::FIELD_ADDITIVE_PRODUCT_NAME_EXT, $data)) {
            $value = $data[self::FIELD_ADDITIVE_PRODUCT_NAME] ?? null;
            $ext = (isset($data[self::FIELD_ADDITIVE_PRODUCT_NAME_EXT]) && is_array($data[self::FIELD_ADDITIVE_PRODUCT_NAME_EXT])) ? $data[self::FIELD_ADDITIVE_PRODUCT_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setAdditiveProductName($value);
                } else if (is_array($value)) {
                    $this->setAdditiveProductName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setAdditiveProductName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAdditiveProductName(new FHIRString($ext));
            } else {
                $this->setAdditiveProductName(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_CALORIC_DENSITY, $data)) {
            if ($data[self::FIELD_CALORIC_DENSITY] instanceof FHIRSimpleQuantity) {
                $this->setCaloricDensity($data[self::FIELD_CALORIC_DENSITY]);
            } else {
                $this->setCaloricDensity(new FHIRSimpleQuantity($data[self::FIELD_CALORIC_DENSITY]));
            }
        }
        if (array_key_exists(self::FIELD_ROUTEOF_ADMINISTRATION, $data)) {
            if ($data[self::FIELD_ROUTEOF_ADMINISTRATION] instanceof FHIRCodeableConcept) {
                $this->setRouteofAdministration($data[self::FIELD_ROUTEOF_ADMINISTRATION]);
            } else {
                $this->setRouteofAdministration(new FHIRCodeableConcept($data[self::FIELD_ROUTEOF_ADMINISTRATION]));
            }
        }
        if (array_key_exists(self::FIELD_ADMINISTRATION, $data)) {
            if (is_array($data[self::FIELD_ADMINISTRATION])) {
                foreach($data[self::FIELD_ADMINISTRATION] as $v) {
                    if ($v instanceof FHIRNutritionOrderAdministration) {
                        $this->addAdministration($v);
                    } else {
                        $this->addAdministration(new FHIRNutritionOrderAdministration($v));
                    }
                }
            } elseif ($data[self::FIELD_ADMINISTRATION] instanceof FHIRNutritionOrderAdministration) {
                $this->addAdministration($data[self::FIELD_ADMINISTRATION]);
            } else {
                $this->addAdministration(new FHIRNutritionOrderAdministration($data[self::FIELD_ADMINISTRATION]));
            }
        }
        if (array_key_exists(self::FIELD_MAX_VOLUME_TO_DELIVER, $data)) {
            if ($data[self::FIELD_MAX_VOLUME_TO_DELIVER] instanceof FHIRSimpleQuantity) {
                $this->setMaxVolumeToDeliver($data[self::FIELD_MAX_VOLUME_TO_DELIVER]);
            } else {
                $this->setMaxVolumeToDeliver(new FHIRSimpleQuantity($data[self::FIELD_MAX_VOLUME_TO_DELIVER]));
            }
        }
        if (array_key_exists(self::FIELD_ADMINISTRATION_INSTRUCTION, $data) || array_key_exists(self::FIELD_ADMINISTRATION_INSTRUCTION_EXT, $data)) {
            $value = $data[self::FIELD_ADMINISTRATION_INSTRUCTION] ?? null;
            $ext = (isset($data[self::FIELD_ADMINISTRATION_INSTRUCTION_EXT]) && is_array($data[self::FIELD_ADMINISTRATION_INSTRUCTION_EXT])) ? $data[self::FIELD_ADMINISTRATION_INSTRUCTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setAdministrationInstruction($value);
                } else if (is_array($value)) {
                    $this->setAdministrationInstruction(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setAdministrationInstruction(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAdministrationInstruction(new FHIRString($ext));
            } else {
                $this->setAdministrationInstruction(new FHIRString(null));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getBaseFormulaType(): null|FHIRCodeableConcept
    {
        return $this->baseFormulaType;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $baseFormulaType
     * @return static
     */
    public function setBaseFormulaType(null|FHIRCodeableConcept $baseFormulaType = null): self
    {
        if (null === $baseFormulaType) {
            $baseFormulaType = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->baseFormulaType, $baseFormulaType);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getBaseFormulaProductName(): null|FHIRString
    {
        return $this->baseFormulaProductName;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The product or brand name of the enteral or infant formula product such as "ACME
     * Adult Standard Formula".
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $baseFormulaProductName
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setBaseFormulaProductName(null|string|FHIRStringPrimitive|FHIRString $baseFormulaProductName = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $baseFormulaProductName && !($baseFormulaProductName instanceof FHIRString)) {
            $baseFormulaProductName = new FHIRString($baseFormulaProductName);
        }
        $this->_trackValueSet($this->baseFormulaProductName, $baseFormulaProductName);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_BASE_FORMULA_PRODUCT_NAME])) {
            $this->_primitiveXmlLocations[self::FIELD_BASE_FORMULA_PRODUCT_NAME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_BASE_FORMULA_PRODUCT_NAME][0] = $xmlLocation;
        $this->baseFormulaProductName = $baseFormulaProductName;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getAdditiveType(): null|FHIRCodeableConcept
    {
        return $this->additiveType;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $additiveType
     * @return static
     */
    public function setAdditiveType(null|FHIRCodeableConcept $additiveType = null): self
    {
        if (null === $additiveType) {
            $additiveType = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->additiveType, $additiveType);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getAdditiveProductName(): null|FHIRString
    {
        return $this->additiveProductName;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The product or brand name of the type of modular component to be added to the
     * formula.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $additiveProductName
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setAdditiveProductName(null|string|FHIRStringPrimitive|FHIRString $additiveProductName = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $additiveProductName && !($additiveProductName instanceof FHIRString)) {
            $additiveProductName = new FHIRString($additiveProductName);
        }
        $this->_trackValueSet($this->additiveProductName, $additiveProductName);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_ADDITIVE_PRODUCT_NAME])) {
            $this->_primitiveXmlLocations[self::FIELD_ADDITIVE_PRODUCT_NAME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_ADDITIVE_PRODUCT_NAME][0] = $xmlLocation;
        $this->additiveProductName = $additiveProductName;
        return $this;
    }

    /**
     * The amount of energy (Calories) that the formula should provide per specified
     * volume, typically per mL or fluid oz. For example, an infant may require a
     * formula that provides 24 Calories per fluid ounce or an adult may require an
     * enteral formula that provides 1.5 Calorie/mL.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getCaloricDensity(): null|FHIRSimpleQuantity
    {
        return $this->caloricDensity;
    }

    /**
     * The amount of energy (Calories) that the formula should provide per specified
     * volume, typically per mL or fluid oz. For example, an infant may require a
     * formula that provides 24 Calories per fluid ounce or an adult may require an
     * enteral formula that provides 1.5 Calorie/mL.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $caloricDensity
     * @return static
     */
    public function setCaloricDensity(null|FHIRSimpleQuantity $caloricDensity = null): self
    {
        if (null === $caloricDensity) {
            $caloricDensity = new FHIRSimpleQuantity();
        }
        $this->_trackValueSet($this->caloricDensity, $caloricDensity);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getRouteofAdministration(): null|FHIRCodeableConcept
    {
        return $this->routeofAdministration;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $routeofAdministration
     * @return static
     */
    public function setRouteofAdministration(null|FHIRCodeableConcept $routeofAdministration = null): self
    {
        if (null === $routeofAdministration) {
            $routeofAdministration = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->routeofAdministration, $routeofAdministration);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration[]
     */
    public function getAdministration(): null|array
    {
        return $this->administration;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration $administration
     * @return static
     */
    public function addAdministration(null|FHIRNutritionOrderAdministration $administration = null): self
    {
        if (null === $administration) {
            $administration = new FHIRNutritionOrderAdministration();
        }
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration ...$administration
     * @return static
     */
    public function setAdministration(FHIRNutritionOrderAdministration ...$administration): self
    {
        if ([] !== $this->administration) {
            $this->_trackValuesRemoved(count($this->administration));
            $this->administration = [];
        }
        if ([] === $administration) {
            return $this;
        }
        foreach($administration as $v) {
            $this->addAdministration($v);
        }
        return $this;
    }

    /**
     * The maximum total quantity of formula that may be administered to a subject over
     * the period of time, e.g. 1440 mL over 24 hours.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getMaxVolumeToDeliver(): null|FHIRSimpleQuantity
    {
        return $this->maxVolumeToDeliver;
    }

    /**
     * The maximum total quantity of formula that may be administered to a subject over
     * the period of time, e.g. 1440 mL over 24 hours.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $maxVolumeToDeliver
     * @return static
     */
    public function setMaxVolumeToDeliver(null|FHIRSimpleQuantity $maxVolumeToDeliver = null): self
    {
        if (null === $maxVolumeToDeliver) {
            $maxVolumeToDeliver = new FHIRSimpleQuantity();
        }
        $this->_trackValueSet($this->maxVolumeToDeliver, $maxVolumeToDeliver);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getAdministrationInstruction(): null|FHIRString
    {
        return $this->administrationInstruction;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text formula administration, feeding instructions or additional
     * instructions or information.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $administrationInstruction
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setAdministrationInstruction(null|string|FHIRStringPrimitive|FHIRString $administrationInstruction = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $administrationInstruction && !($administrationInstruction instanceof FHIRString)) {
            $administrationInstruction = new FHIRString($administrationInstruction);
        }
        $this->_trackValueSet($this->administrationInstruction, $administrationInstruction);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_ADMINISTRATION_INSTRUCTION])) {
            $this->_primitiveXmlLocations[self::FIELD_ADMINISTRATION_INSTRUCTION] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_ADMINISTRATION_INSTRUCTION][0] = $xmlLocation;
        $this->administrationInstruction = $administrationInstruction;
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
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getBaseFormulaType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BASE_FORMULA_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBaseFormulaProductName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BASE_FORMULA_PRODUCT_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAdditiveType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADDITIVE_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAdditiveProductName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADDITIVE_PRODUCT_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCaloricDensity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CALORIC_DENSITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRouteofAdministration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ROUTEOF_ADMINISTRATION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAdministration())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ADMINISTRATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getMaxVolumeToDeliver())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_VOLUME_TO_DELIVER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAdministrationInstruction())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADMINISTRATION_INSTRUCTION] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_BASE_FORMULA_TYPE])) {
            $v = $this->getBaseFormulaType();
            foreach($validationRules[self::FIELD_BASE_FORMULA_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ENTERAL_FORMULA, self::FIELD_BASE_FORMULA_TYPE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ENTERAL_FORMULA, self::FIELD_BASE_FORMULA_PRODUCT_NAME, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ENTERAL_FORMULA, self::FIELD_ADDITIVE_TYPE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ENTERAL_FORMULA, self::FIELD_ADDITIVE_PRODUCT_NAME, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ENTERAL_FORMULA, self::FIELD_CALORIC_DENSITY, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ENTERAL_FORMULA, self::FIELD_ROUTEOF_ADMINISTRATION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ENTERAL_FORMULA, self::FIELD_ADMINISTRATION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ENTERAL_FORMULA, self::FIELD_MAX_VOLUME_TO_DELIVER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ENTERAL_FORMULA, self::FIELD_ADMINISTRATION_INSTRUCTION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRNutritionOrderEnteralFormula)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_BASE_FORMULA_TYPE === $childName) {
                $type->setBaseFormulaType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_BASE_FORMULA_PRODUCT_NAME === $childName) {
                $type->setBaseFormulaProductName(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ADDITIVE_TYPE === $childName) {
                $type->setAdditiveType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ADDITIVE_PRODUCT_NAME === $childName) {
                $type->setAdditiveProductName(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CALORIC_DENSITY === $childName) {
                $type->setCaloricDensity(FHIRSimpleQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ROUTEOF_ADMINISTRATION === $childName) {
                $type->setRouteofAdministration(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ADMINISTRATION === $childName) {
                $type->addAdministration(FHIRNutritionOrderAdministration::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MAX_VOLUME_TO_DELIVER === $childName) {
                $type->setMaxVolumeToDeliver(FHIRSimpleQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ADMINISTRATION_INSTRUCTION === $childName) {
                $type->setAdministrationInstruction(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_BASE_FORMULA_PRODUCT_NAME])) {
            $pt = $type->getBaseFormulaProductName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_BASE_FORMULA_PRODUCT_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setBaseFormulaProductName((string)$attributes[self::FIELD_BASE_FORMULA_PRODUCT_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ADDITIVE_PRODUCT_NAME])) {
            $pt = $type->getAdditiveProductName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ADDITIVE_PRODUCT_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setAdditiveProductName((string)$attributes[self::FIELD_ADDITIVE_PRODUCT_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ADMINISTRATION_INSTRUCTION])) {
            $pt = $type->getAdministrationInstruction();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ADMINISTRATION_INSTRUCTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setAdministrationInstruction((string)$attributes[self::FIELD_ADMINISTRATION_INSTRUCTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'NutritionOrderEnteralFormula', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_BASE_FORMULA_PRODUCT_NAME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getBaseFormulaProductName())) {
            $xw->writeAttribute(self::FIELD_BASE_FORMULA_PRODUCT_NAME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ADDITIVE_PRODUCT_NAME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getAdditiveProductName())) {
            $xw->writeAttribute(self::FIELD_ADDITIVE_PRODUCT_NAME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ADMINISTRATION_INSTRUCTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getAdministrationInstruction())) {
            $xw->writeAttribute(self::FIELD_ADMINISTRATION_INSTRUCTION, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getBaseFormulaType())) {
            $xw->startElement(self::FIELD_BASE_FORMULA_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_BASE_FORMULA_PRODUCT_NAME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getBaseFormulaProductName())) {
            $xw->startElement(self::FIELD_BASE_FORMULA_PRODUCT_NAME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getAdditiveType())) {
            $xw->startElement(self::FIELD_ADDITIVE_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ADDITIVE_PRODUCT_NAME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getAdditiveProductName())) {
            $xw->startElement(self::FIELD_ADDITIVE_PRODUCT_NAME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getCaloricDensity())) {
            $xw->startElement(self::FIELD_CALORIC_DENSITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getRouteofAdministration())) {
            $xw->startElement(self::FIELD_ROUTEOF_ADMINISTRATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getAdministration() as $v) {
            $xw->startElement(self::FIELD_ADMINISTRATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getMaxVolumeToDeliver())) {
            $xw->startElement(self::FIELD_MAX_VOLUME_TO_DELIVER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ADMINISTRATION_INSTRUCTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getAdministrationInstruction())) {
            $xw->startElement(self::FIELD_ADMINISTRATION_INSTRUCTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getBaseFormulaType())) {
            $out->{self::FIELD_BASE_FORMULA_TYPE} = $v;
        }
        if (null !== ($v = $this->getBaseFormulaProductName())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_BASE_FORMULA_PRODUCT_NAME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_BASE_FORMULA_PRODUCT_NAME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAdditiveType())) {
            $out->{self::FIELD_ADDITIVE_TYPE} = $v;
        }
        if (null !== ($v = $this->getAdditiveProductName())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ADDITIVE_PRODUCT_NAME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ADDITIVE_PRODUCT_NAME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCaloricDensity())) {
            $out->{self::FIELD_CALORIC_DENSITY} = $v;
        }
        if (null !== ($v = $this->getRouteofAdministration())) {
            $out->{self::FIELD_ROUTEOF_ADMINISTRATION} = $v;
        }
        if ([] !== ($vs = $this->getAdministration())) {
            $out->{self::FIELD_ADMINISTRATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_ADMINISTRATION}[] = $v;
            }
        }
        if (null !== ($v = $this->getMaxVolumeToDeliver())) {
            $out->{self::FIELD_MAX_VOLUME_TO_DELIVER} = $v;
        }
        if (null !== ($v = $this->getAdministrationInstruction())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ADMINISTRATION_INSTRUCTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ADMINISTRATION_INSTRUCTION_EXT} = $ext;
            }
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