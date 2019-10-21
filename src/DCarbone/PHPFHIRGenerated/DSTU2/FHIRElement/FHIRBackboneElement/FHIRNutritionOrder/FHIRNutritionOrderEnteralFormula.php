<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:04+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

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

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ADDITIVE_PRODUCT_NAME = 'additiveProductName';
    const FIELD_ADDITIVE_PRODUCT_NAME_EXT = '_additiveProductName';
    const FIELD_ADDITIVE_TYPE = 'additiveType';
    const FIELD_ADMINISTRATION = 'administration';
    const FIELD_ADMINISTRATION_INSTRUCTION = 'administrationInstruction';
    const FIELD_ADMINISTRATION_INSTRUCTION_EXT = '_administrationInstruction';
    const FIELD_BASE_FORMULA_PRODUCT_NAME = 'baseFormulaProductName';
    const FIELD_BASE_FORMULA_PRODUCT_NAME_EXT = '_baseFormulaProductName';
    const FIELD_BASE_FORMULA_TYPE = 'baseFormulaType';
    const FIELD_CALORIC_DENSITY = 'caloricDensity';
    const FIELD_MAX_VOLUME_TO_DELIVER = 'maxVolumeToDeliver';
    const FIELD_ROUTEOF_ADMINISTRATION = 'routeofAdministration';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The product or brand name of the type of modular component to be added to the
     * formula.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    private $additiveProductName = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the type of modular component such as protein, carbohydrate, fat or
     * fiber to be provided in addition to or mixed with the base formula.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    private $additiveType = null;
    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Formula administration instructions as structured data. This repeating structure
     * allows for changing the administration rate or volume over time for both bolus
     * and continuous feeding. An example of this would be an instruction to increase
     * the rate of continuous feeding every 2 hours.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration[]
     */
    private $administration = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Free text formula administration, feeding instructions or additional
     * instructions or information.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    private $administrationInstruction = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The product or brand name of the enteral or infant formula product such as "ACME
     * Adult Standard Formula".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    private $baseFormulaProductName = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of enteral or infant formula such as an adult standard formula with
     * fiber or a soy-based infant formula.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    private $baseFormulaType = null;
    /**
     * The amount of energy (Calories) that the formula should provide per specified
     * volume, typically per mL or fluid oz. For example, an infant may require a
     * formula that provides 24 Calories per fluid ounce or an adult may require an
     * enteral formula that provides 1.5 Calorie/mL.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    private $caloricDensity = null;
    /**
     * The maximum total quantity of formula that may be administered to a subject over
     * the period of time, e.g. 1440 mL over 24 hours.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    private $maxVolumeToDeliver = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The route or physiological path of administration into the patient's
     * gastrointestinal tract for purposes of providing the formula feeding, e.g.
     * nasogastric tube.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    private $routeofAdministration = null;

    /**
     * FHIRNutritionOrderEnteralFormula Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRNutritionOrderEnteralFormula::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ADDITIVE_PRODUCT_NAME])) {
            $ext = (isset($data[self::FIELD_ADDITIVE_PRODUCT_NAME_EXT]) && is_array($data[self::FIELD_ADDITIVE_PRODUCT_NAME_EXT]))
                ? $data[self::FIELD_ADDITIVE_PRODUCT_NAME_EXT]
                : null;
            if ($data[self::FIELD_ADDITIVE_PRODUCT_NAME] instanceof FHIRString) {
                $this->setAdditiveProductName($data[self::FIELD_ADDITIVE_PRODUCT_NAME]);
            } elseif ($ext && is_scalar($data[self::FIELD_ADDITIVE_PRODUCT_NAME])) {
                $this->setAdditiveProductName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_ADDITIVE_PRODUCT_NAME]] + $ext));
            } else {
                $this->setAdditiveProductName(new FHIRString($data[self::FIELD_ADDITIVE_PRODUCT_NAME]));
            }
        }
        if (isset($data[self::FIELD_ADDITIVE_TYPE])) {
            if ($data[self::FIELD_ADDITIVE_TYPE] instanceof FHIRCodeableConcept) {
                $this->setAdditiveType($data[self::FIELD_ADDITIVE_TYPE]);
            } else {
                $this->setAdditiveType(new FHIRCodeableConcept($data[self::FIELD_ADDITIVE_TYPE]));
            }
        }
        if (isset($data[self::FIELD_ADMINISTRATION])) {
            if (is_array($data[self::FIELD_ADMINISTRATION])) {
                foreach($data[self::FIELD_ADMINISTRATION] as $v) {
                    if ($v instanceof FHIRNutritionOrderAdministration) {
                        $this->addAdministration($v);
                    } else {
                        $this->addAdministration(new FHIRNutritionOrderAdministration($v));
                    }
                }
            } else if ($data[self::FIELD_ADMINISTRATION] instanceof FHIRNutritionOrderAdministration) {
                $this->addAdministration($data[self::FIELD_ADMINISTRATION]);
            } else {
                $this->addAdministration(new FHIRNutritionOrderAdministration($data[self::FIELD_ADMINISTRATION]));
            }
        }
        if (isset($data[self::FIELD_ADMINISTRATION_INSTRUCTION])) {
            $ext = (isset($data[self::FIELD_ADMINISTRATION_INSTRUCTION_EXT]) && is_array($data[self::FIELD_ADMINISTRATION_INSTRUCTION_EXT]))
                ? $data[self::FIELD_ADMINISTRATION_INSTRUCTION_EXT]
                : null;
            if ($data[self::FIELD_ADMINISTRATION_INSTRUCTION] instanceof FHIRString) {
                $this->setAdministrationInstruction($data[self::FIELD_ADMINISTRATION_INSTRUCTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_ADMINISTRATION_INSTRUCTION])) {
                $this->setAdministrationInstruction(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_ADMINISTRATION_INSTRUCTION]] + $ext));
            } else {
                $this->setAdministrationInstruction(new FHIRString($data[self::FIELD_ADMINISTRATION_INSTRUCTION]));
            }
        }
        if (isset($data[self::FIELD_BASE_FORMULA_PRODUCT_NAME])) {
            $ext = (isset($data[self::FIELD_BASE_FORMULA_PRODUCT_NAME_EXT]) && is_array($data[self::FIELD_BASE_FORMULA_PRODUCT_NAME_EXT]))
                ? $data[self::FIELD_BASE_FORMULA_PRODUCT_NAME_EXT]
                : null;
            if ($data[self::FIELD_BASE_FORMULA_PRODUCT_NAME] instanceof FHIRString) {
                $this->setBaseFormulaProductName($data[self::FIELD_BASE_FORMULA_PRODUCT_NAME]);
            } elseif ($ext && is_scalar($data[self::FIELD_BASE_FORMULA_PRODUCT_NAME])) {
                $this->setBaseFormulaProductName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_BASE_FORMULA_PRODUCT_NAME]] + $ext));
            } else {
                $this->setBaseFormulaProductName(new FHIRString($data[self::FIELD_BASE_FORMULA_PRODUCT_NAME]));
            }
        }
        if (isset($data[self::FIELD_BASE_FORMULA_TYPE])) {
            if ($data[self::FIELD_BASE_FORMULA_TYPE] instanceof FHIRCodeableConcept) {
                $this->setBaseFormulaType($data[self::FIELD_BASE_FORMULA_TYPE]);
            } else {
                $this->setBaseFormulaType(new FHIRCodeableConcept($data[self::FIELD_BASE_FORMULA_TYPE]));
            }
        }
        if (isset($data[self::FIELD_CALORIC_DENSITY])) {
            if ($data[self::FIELD_CALORIC_DENSITY] instanceof FHIRSimpleQuantity) {
                $this->setCaloricDensity($data[self::FIELD_CALORIC_DENSITY]);
            } else {
                $this->setCaloricDensity(new FHIRSimpleQuantity($data[self::FIELD_CALORIC_DENSITY]));
            }
        }
        if (isset($data[self::FIELD_MAX_VOLUME_TO_DELIVER])) {
            if ($data[self::FIELD_MAX_VOLUME_TO_DELIVER] instanceof FHIRSimpleQuantity) {
                $this->setMaxVolumeToDeliver($data[self::FIELD_MAX_VOLUME_TO_DELIVER]);
            } else {
                $this->setMaxVolumeToDeliver(new FHIRSimpleQuantity($data[self::FIELD_MAX_VOLUME_TO_DELIVER]));
            }
        }
        if (isset($data[self::FIELD_ROUTEOF_ADMINISTRATION])) {
            if ($data[self::FIELD_ROUTEOF_ADMINISTRATION] instanceof FHIRCodeableConcept) {
                $this->setRouteofAdministration($data[self::FIELD_ROUTEOF_ADMINISTRATION]);
            } else {
                $this->setRouteofAdministration(new FHIRCodeableConcept($data[self::FIELD_ROUTEOF_ADMINISTRATION]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<NutritionOrderEnteralFormula{$xmlns}></NutritionOrderEnteralFormula>";
    }


    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The product or brand name of the type of modular component to be added to the
     * formula.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getAdditiveProductName()
    {
        return $this->additiveProductName;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The product or brand name of the type of modular component to be added to the
     * formula.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $additiveProductName
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula
     */
    public function setAdditiveProductName($additiveProductName = null)
    {
        if (null === $additiveProductName) {
            $this->additiveProductName = null;
            return $this;
        }
        if ($additiveProductName instanceof FHIRString) {
            $this->additiveProductName = $additiveProductName;
            return $this;
        }
        $this->additiveProductName = new FHIRString($additiveProductName);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the type of modular component such as protein, carbohydrate, fat or
     * fiber to be provided in addition to or mixed with the base formula.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getAdditiveType()
    {
        return $this->additiveType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the type of modular component such as protein, carbohydrate, fat or
     * fiber to be provided in addition to or mixed with the base formula.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $additiveType
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula
     */
    public function setAdditiveType(FHIRCodeableConcept $additiveType = null)
    {
        $this->additiveType = $additiveType;
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
    public function getAdministration()
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
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula
     */
    public function addAdministration(FHIRNutritionOrderAdministration $administration = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration[] $administration
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula
     */
    public function setAdministration(array $administration = [])
    {
        $this->administration = [];
        if ([] === $administration) {
            return $this;
        }
        foreach($administration as $v) {
            if ($v instanceof FHIRNutritionOrderAdministration) {
                $this->addAdministration($v);
            } else {
                $this->addAdministration(new FHIRNutritionOrderAdministration($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Free text formula administration, feeding instructions or additional
     * instructions or information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getAdministrationInstruction()
    {
        return $this->administrationInstruction;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Free text formula administration, feeding instructions or additional
     * instructions or information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $administrationInstruction
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula
     */
    public function setAdministrationInstruction($administrationInstruction = null)
    {
        if (null === $administrationInstruction) {
            $this->administrationInstruction = null;
            return $this;
        }
        if ($administrationInstruction instanceof FHIRString) {
            $this->administrationInstruction = $administrationInstruction;
            return $this;
        }
        $this->administrationInstruction = new FHIRString($administrationInstruction);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The product or brand name of the enteral or infant formula product such as "ACME
     * Adult Standard Formula".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getBaseFormulaProductName()
    {
        return $this->baseFormulaProductName;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The product or brand name of the enteral or infant formula product such as "ACME
     * Adult Standard Formula".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $baseFormulaProductName
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula
     */
    public function setBaseFormulaProductName($baseFormulaProductName = null)
    {
        if (null === $baseFormulaProductName) {
            $this->baseFormulaProductName = null;
            return $this;
        }
        if ($baseFormulaProductName instanceof FHIRString) {
            $this->baseFormulaProductName = $baseFormulaProductName;
            return $this;
        }
        $this->baseFormulaProductName = new FHIRString($baseFormulaProductName);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of enteral or infant formula such as an adult standard formula with
     * fiber or a soy-based infant formula.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getBaseFormulaType()
    {
        return $this->baseFormulaType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of enteral or infant formula such as an adult standard formula with
     * fiber or a soy-based infant formula.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $baseFormulaType
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula
     */
    public function setBaseFormulaType(FHIRCodeableConcept $baseFormulaType = null)
    {
        $this->baseFormulaType = $baseFormulaType;
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
    public function getCaloricDensity()
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
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula
     */
    public function setCaloricDensity(FHIRSimpleQuantity $caloricDensity = null)
    {
        $this->caloricDensity = $caloricDensity;
        return $this;
    }

    /**
     * The maximum total quantity of formula that may be administered to a subject over
     * the period of time, e.g. 1440 mL over 24 hours.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getMaxVolumeToDeliver()
    {
        return $this->maxVolumeToDeliver;
    }

    /**
     * The maximum total quantity of formula that may be administered to a subject over
     * the period of time, e.g. 1440 mL over 24 hours.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $maxVolumeToDeliver
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula
     */
    public function setMaxVolumeToDeliver(FHIRSimpleQuantity $maxVolumeToDeliver = null)
    {
        $this->maxVolumeToDeliver = $maxVolumeToDeliver;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The route or physiological path of administration into the patient's
     * gastrointestinal tract for purposes of providing the formula feeding, e.g.
     * nasogastric tube.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getRouteofAdministration()
    {
        return $this->routeofAdministration;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The route or physiological path of administration into the patient's
     * gastrointestinal tract for purposes of providing the formula feeding, e.g.
     * nasogastric tube.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $routeofAdministration
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula
     */
    public function setRouteofAdministration(FHIRCodeableConcept $routeofAdministration = null)
    {
        $this->routeofAdministration = $routeofAdministration;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRNutritionOrderEnteralFormula::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRNutritionOrderEnteralFormula::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRNutritionOrderEnteralFormula;
        } elseif (!is_object($type) || !($type instanceof FHIRNutritionOrderEnteralFormula)) {
            throw new \RuntimeException(sprintf(
                'FHIRNutritionOrderEnteralFormula::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->additiveProductName)) {
            $type->setAdditiveProductName((string)$attributes->additiveProductName);
        }
        if (isset($children->additiveProductName)) {
            $type->setAdditiveProductName(FHIRString::xmlUnserialize($children->additiveProductName));
        }
        if (isset($children->additiveType)) {
            $type->setAdditiveType(FHIRCodeableConcept::xmlUnserialize($children->additiveType));
        }
        if (isset($children->administration)) {
            foreach($children->administration as $child) {
                $type->addAdministration(FHIRNutritionOrderAdministration::xmlUnserialize($child));
            }
        }
        if (isset($attributes->administrationInstruction)) {
            $type->setAdministrationInstruction((string)$attributes->administrationInstruction);
        }
        if (isset($children->administrationInstruction)) {
            $type->setAdministrationInstruction(FHIRString::xmlUnserialize($children->administrationInstruction));
        }
        if (isset($attributes->baseFormulaProductName)) {
            $type->setBaseFormulaProductName((string)$attributes->baseFormulaProductName);
        }
        if (isset($children->baseFormulaProductName)) {
            $type->setBaseFormulaProductName(FHIRString::xmlUnserialize($children->baseFormulaProductName));
        }
        if (isset($children->baseFormulaType)) {
            $type->setBaseFormulaType(FHIRCodeableConcept::xmlUnserialize($children->baseFormulaType));
        }
        if (isset($children->caloricDensity)) {
            $type->setCaloricDensity(FHIRSimpleQuantity::xmlUnserialize($children->caloricDensity));
        }
        if (isset($children->maxVolumeToDeliver)) {
            $type->setMaxVolumeToDeliver(FHIRSimpleQuantity::xmlUnserialize($children->maxVolumeToDeliver));
        }
        if (isset($children->routeofAdministration)) {
            $type->setRouteofAdministration(FHIRCodeableConcept::xmlUnserialize($children->routeofAdministration));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getAdditiveProductName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ADDITIVE_PRODUCT_NAME, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getAdditiveType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ADDITIVE_TYPE, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getAdministration())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ADMINISTRATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getAdministrationInstruction())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ADMINISTRATION_INSTRUCTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getBaseFormulaProductName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BASE_FORMULA_PRODUCT_NAME, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getBaseFormulaType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BASE_FORMULA_TYPE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getCaloricDensity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CALORIC_DENSITY, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getMaxVolumeToDeliver())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MAX_VOLUME_TO_DELIVER, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getRouteofAdministration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ROUTEOF_ADMINISTRATION, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAdditiveProductName())) {
            $a[self::FIELD_ADDITIVE_PRODUCT_NAME] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_ADDITIVE_PRODUCT_NAME_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getAdditiveType())) {
            $a[self::FIELD_ADDITIVE_TYPE] = $v;
        }
        if ([] !== ($vs = $this->getAdministration())) {
            $a[self::FIELD_ADMINISTRATION] = $vs;
        }
        if (null !== ($v = $this->getAdministrationInstruction())) {
            $a[self::FIELD_ADMINISTRATION_INSTRUCTION] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_ADMINISTRATION_INSTRUCTION_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getBaseFormulaProductName())) {
            $a[self::FIELD_BASE_FORMULA_PRODUCT_NAME] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_BASE_FORMULA_PRODUCT_NAME_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getBaseFormulaType())) {
            $a[self::FIELD_BASE_FORMULA_TYPE] = $v;
        }
        if (null !== ($v = $this->getCaloricDensity())) {
            $a[self::FIELD_CALORIC_DENSITY] = $v;
        }
        if (null !== ($v = $this->getMaxVolumeToDeliver())) {
            $a[self::FIELD_MAX_VOLUME_TO_DELIVER] = $v;
        }
        if (null !== ($v = $this->getRouteofAdministration())) {
            $a[self::FIELD_ROUTEOF_ADMINISTRATION] = $v;
        }
        return $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}