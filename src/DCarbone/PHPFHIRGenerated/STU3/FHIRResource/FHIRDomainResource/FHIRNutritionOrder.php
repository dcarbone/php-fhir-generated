<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 17th, 2019 04:38+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderOralDiet;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderSupplement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRNutritionOrderStatus;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A request to supply a diet, formula feeding (enteral) or oral nutritional
 * supplement to a patient/resident.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRNutritionOrder
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRNutritionOrder extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER;
    const FIELD_ALLERGY_INTOLERANCE = 'allergyIntolerance';
    const FIELD_DATE_TIME = 'dateTime';
    const FIELD_DATE_TIME_EXT = '_dateTime';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_ENTERAL_FORMULA = 'enteralFormula';
    const FIELD_EXCLUDE_FOOD_MODIFIER = 'excludeFoodModifier';
    const FIELD_FOOD_PREFERENCE_MODIFIER = 'foodPreferenceModifier';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_ORAL_DIET = 'oralDiet';
    const FIELD_ORDERER = 'orderer';
    const FIELD_PATIENT = 'patient';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_SUPPLEMENT = 'supplement';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a record of allergies or intolerances which should be included in the
     * nutrition order.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $allergyIntolerance = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time that this nutrition order was requested.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected $dateTime = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An encounter that provides additional information about the healthcare context
     * in which this request is made.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $encounter = null;

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Feeding provided through the gastrointestinal tract via a tube, catheter, or
     * stoma that delivers nutrition distal to the oral cavity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula
     */
    protected $enteralFormula = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This modifier is used to convey order-specific modifiers about the type of food
     * that should NOT be given. These can be derived from patient allergies,
     * intolerances, or preferences such as No Red Meat, No Soy or No Wheat or
     * Gluten-Free. While it should not be necessary to repeat allergy or intolerance
     * information captured in the referenced AllergyIntolerance resource in the
     * excludeFoodModifier, this element may be used to convey additional specificity
     * related to foods that should be eliminated from the patient’s diet for any
     * reason. This modifier applies to the entire nutrition order inclusive of the
     * oral diet, nutritional supplements and enteral formula feedings.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected $excludeFoodModifier = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This modifier is used to convey order-specific modifiers about the type of food
     * that should be given. These can be derived from patient allergies, intolerances,
     * or preferences such as Halal, Vegan or Kosher. This modifier applies to the
     * entire nutrition order inclusive of the oral diet, nutritional supplements and
     * enteral formula feedings.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected $foodPreferenceModifier = [];

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order by the order sender or by the order receiver.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Diet given orally in contrast to enteral (tube) feeding.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderOralDiet
     */
    protected $oralDiet = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner that holds legal responsibility for ordering the diet,
     * nutritional supplement, or formula feedings.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $orderer = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person (patient) who needs the nutrition order for an oral diet, nutritional
     * supplement and/or enteral or formula feeding.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $patient = null;

    /**
     * Codes specifying the state of the request. Describes the lifecycle of the
     * nutrition order.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The workflow status of the nutrition order/request.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRNutritionOrderStatus
     */
    protected $status = null;

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Oral nutritional products given in order to add further nutritional value to the
     * patient's diet.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderSupplement[]
     */
    protected $supplement = [];

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    /**
     * FHIRNutritionOrder Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRNutritionOrder::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ALLERGY_INTOLERANCE])) {
            if (is_array($data[self::FIELD_ALLERGY_INTOLERANCE])) {
                foreach($data[self::FIELD_ALLERGY_INTOLERANCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addAllergyIntolerance($v);
                    } else {
                        $this->addAllergyIntolerance(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_ALLERGY_INTOLERANCE] instanceof FHIRReference) {
                $this->addAllergyIntolerance($data[self::FIELD_ALLERGY_INTOLERANCE]);
            } else {
                $this->addAllergyIntolerance(new FHIRReference($data[self::FIELD_ALLERGY_INTOLERANCE]));
            }
        }
        if (isset($data[self::FIELD_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_DATE_TIME_EXT]) && is_array($data[self::FIELD_DATE_TIME_EXT]))
                ? $data[self::FIELD_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_DATE_TIME] instanceof FHIRDateTime) {
                $this->setDateTime($data[self::FIELD_DATE_TIME]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DATE_TIME])) {
                    $this->setDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_DATE_TIME]] + $ext));
                } else if (is_array($data[self::FIELD_DATE_TIME])) {
                    $this->setDateTime(new FHIRDateTime(array_merge($ext, $data[self::FIELD_DATE_TIME])));
                }
            } else {
                $this->setDateTime(new FHIRDateTime($data[self::FIELD_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_ENCOUNTER])) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIRReference($data[self::FIELD_ENCOUNTER]));
            }
        }
        if (isset($data[self::FIELD_ENTERAL_FORMULA])) {
            if ($data[self::FIELD_ENTERAL_FORMULA] instanceof FHIRNutritionOrderEnteralFormula) {
                $this->setEnteralFormula($data[self::FIELD_ENTERAL_FORMULA]);
            } else {
                $this->setEnteralFormula(new FHIRNutritionOrderEnteralFormula($data[self::FIELD_ENTERAL_FORMULA]));
            }
        }
        if (isset($data[self::FIELD_EXCLUDE_FOOD_MODIFIER])) {
            if (is_array($data[self::FIELD_EXCLUDE_FOOD_MODIFIER])) {
                foreach($data[self::FIELD_EXCLUDE_FOOD_MODIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addExcludeFoodModifier($v);
                    } else {
                        $this->addExcludeFoodModifier(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_EXCLUDE_FOOD_MODIFIER] instanceof FHIRCodeableConcept) {
                $this->addExcludeFoodModifier($data[self::FIELD_EXCLUDE_FOOD_MODIFIER]);
            } else {
                $this->addExcludeFoodModifier(new FHIRCodeableConcept($data[self::FIELD_EXCLUDE_FOOD_MODIFIER]));
            }
        }
        if (isset($data[self::FIELD_FOOD_PREFERENCE_MODIFIER])) {
            if (is_array($data[self::FIELD_FOOD_PREFERENCE_MODIFIER])) {
                foreach($data[self::FIELD_FOOD_PREFERENCE_MODIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addFoodPreferenceModifier($v);
                    } else {
                        $this->addFoodPreferenceModifier(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_FOOD_PREFERENCE_MODIFIER] instanceof FHIRCodeableConcept) {
                $this->addFoodPreferenceModifier($data[self::FIELD_FOOD_PREFERENCE_MODIFIER]);
            } else {
                $this->addFoodPreferenceModifier(new FHIRCodeableConcept($data[self::FIELD_FOOD_PREFERENCE_MODIFIER]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT]))
                ? $data[self::FIELD_IDENTIFIER_EXT]
                : null;
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $i => $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } elseif (null !== $ext && isset($ext[$i]) && is_array($ext[$i])) {
                        if (is_scalar($v)) {
                            $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $v] + $ext[$i]));
                        } elseif (is_array($v)) {
                            $this->addIdentifier(new FHIRIdentifier(array_merge($v, $ext[$i])));
                        }
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } elseif (null !== $ext && is_scalar($data[self::FIELD_IDENTIFIER])) {
                $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_IDENTIFIER]] + $ext));
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_ORAL_DIET])) {
            if ($data[self::FIELD_ORAL_DIET] instanceof FHIRNutritionOrderOralDiet) {
                $this->setOralDiet($data[self::FIELD_ORAL_DIET]);
            } else {
                $this->setOralDiet(new FHIRNutritionOrderOralDiet($data[self::FIELD_ORAL_DIET]));
            }
        }
        if (isset($data[self::FIELD_ORDERER])) {
            if ($data[self::FIELD_ORDERER] instanceof FHIRReference) {
                $this->setOrderer($data[self::FIELD_ORDERER]);
            } else {
                $this->setOrderer(new FHIRReference($data[self::FIELD_ORDERER]));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT]))
                ? $data[self::FIELD_STATUS_EXT]
                : null;
            if ($data[self::FIELD_STATUS] instanceof FHIRNutritionOrderStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_STATUS])) {
                    $this->setStatus(new FHIRNutritionOrderStatus([FHIRNutritionOrderStatus::FIELD_VALUE => $data[self::FIELD_STATUS]] + $ext));
                } else if (is_array($data[self::FIELD_STATUS])) {
                    $this->setStatus(new FHIRNutritionOrderStatus(array_merge($ext, $data[self::FIELD_STATUS])));
                }
            } else {
                $this->setStatus(new FHIRNutritionOrderStatus($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_SUPPLEMENT])) {
            if (is_array($data[self::FIELD_SUPPLEMENT])) {
                foreach($data[self::FIELD_SUPPLEMENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRNutritionOrderSupplement) {
                        $this->addSupplement($v);
                    } else {
                        $this->addSupplement(new FHIRNutritionOrderSupplement($v));
                    }
                }
            } else if ($data[self::FIELD_SUPPLEMENT] instanceof FHIRNutritionOrderSupplement) {
                $this->addSupplement($data[self::FIELD_SUPPLEMENT]);
            } else {
                $this->addSupplement(new FHIRNutritionOrderSupplement($data[self::FIELD_SUPPLEMENT]));
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
     * @return static
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
        return "<NutritionOrder{$xmlns}></NutritionOrder>";
    }

    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a record of allergies or intolerances which should be included in the
     * nutrition order.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getAllergyIntolerance()
    {
        return $this->allergyIntolerance;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a record of allergies or intolerances which should be included in the
     * nutrition order.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $allergyIntolerance
     * @return static
     */
    public function addAllergyIntolerance(FHIRReference $allergyIntolerance = null)
    {
        $this->allergyIntolerance[] = $allergyIntolerance;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a record of allergies or intolerances which should be included in the
     * nutrition order.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $allergyIntolerance
     * @return static
     */
    public function setAllergyIntolerance(array $allergyIntolerance = [])
    {
        $this->allergyIntolerance = [];
        if ([] === $allergyIntolerance) {
            return $this;
        }
        foreach($allergyIntolerance as $v) {
            if ($v instanceof FHIRReference) {
                $this->addAllergyIntolerance($v);
            } else {
                $this->addAllergyIntolerance(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time that this nutrition order was requested.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time that this nutrition order was requested.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $dateTime
     * @return static
     */
    public function setDateTime($dateTime = null)
    {
        if (null === $dateTime) {
            $this->dateTime = null;
            return $this;
        }
        if ($dateTime instanceof FHIRDateTime) {
            $this->dateTime = $dateTime;
            return $this;
        }
        $this->dateTime = new FHIRDateTime($dateTime);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An encounter that provides additional information about the healthcare context
     * in which this request is made.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An encounter that provides additional information about the healthcare context
     * in which this request is made.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $encounter
     * @return static
     */
    public function setEncounter(FHIRReference $encounter = null)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Feeding provided through the gastrointestinal tract via a tube, catheter, or
     * stoma that delivers nutrition distal to the oral cavity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula
     */
    public function getEnteralFormula()
    {
        return $this->enteralFormula;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Feeding provided through the gastrointestinal tract via a tube, catheter, or
     * stoma that delivers nutrition distal to the oral cavity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula $enteralFormula
     * @return static
     */
    public function setEnteralFormula(FHIRNutritionOrderEnteralFormula $enteralFormula = null)
    {
        $this->enteralFormula = $enteralFormula;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This modifier is used to convey order-specific modifiers about the type of food
     * that should NOT be given. These can be derived from patient allergies,
     * intolerances, or preferences such as No Red Meat, No Soy or No Wheat or
     * Gluten-Free. While it should not be necessary to repeat allergy or intolerance
     * information captured in the referenced AllergyIntolerance resource in the
     * excludeFoodModifier, this element may be used to convey additional specificity
     * related to foods that should be eliminated from the patient’s diet for any
     * reason. This modifier applies to the entire nutrition order inclusive of the
     * oral diet, nutritional supplements and enteral formula feedings.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getExcludeFoodModifier()
    {
        return $this->excludeFoodModifier;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This modifier is used to convey order-specific modifiers about the type of food
     * that should NOT be given. These can be derived from patient allergies,
     * intolerances, or preferences such as No Red Meat, No Soy or No Wheat or
     * Gluten-Free. While it should not be necessary to repeat allergy or intolerance
     * information captured in the referenced AllergyIntolerance resource in the
     * excludeFoodModifier, this element may be used to convey additional specificity
     * related to foods that should be eliminated from the patient’s diet for any
     * reason. This modifier applies to the entire nutrition order inclusive of the
     * oral diet, nutritional supplements and enteral formula feedings.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $excludeFoodModifier
     * @return static
     */
    public function addExcludeFoodModifier(FHIRCodeableConcept $excludeFoodModifier = null)
    {
        $this->excludeFoodModifier[] = $excludeFoodModifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This modifier is used to convey order-specific modifiers about the type of food
     * that should NOT be given. These can be derived from patient allergies,
     * intolerances, or preferences such as No Red Meat, No Soy or No Wheat or
     * Gluten-Free. While it should not be necessary to repeat allergy or intolerance
     * information captured in the referenced AllergyIntolerance resource in the
     * excludeFoodModifier, this element may be used to convey additional specificity
     * related to foods that should be eliminated from the patient’s diet for any
     * reason. This modifier applies to the entire nutrition order inclusive of the
     * oral diet, nutritional supplements and enteral formula feedings.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $excludeFoodModifier
     * @return static
     */
    public function setExcludeFoodModifier(array $excludeFoodModifier = [])
    {
        $this->excludeFoodModifier = [];
        if ([] === $excludeFoodModifier) {
            return $this;
        }
        foreach($excludeFoodModifier as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addExcludeFoodModifier($v);
            } else {
                $this->addExcludeFoodModifier(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This modifier is used to convey order-specific modifiers about the type of food
     * that should be given. These can be derived from patient allergies, intolerances,
     * or preferences such as Halal, Vegan or Kosher. This modifier applies to the
     * entire nutrition order inclusive of the oral diet, nutritional supplements and
     * enteral formula feedings.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getFoodPreferenceModifier()
    {
        return $this->foodPreferenceModifier;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This modifier is used to convey order-specific modifiers about the type of food
     * that should be given. These can be derived from patient allergies, intolerances,
     * or preferences such as Halal, Vegan or Kosher. This modifier applies to the
     * entire nutrition order inclusive of the oral diet, nutritional supplements and
     * enteral formula feedings.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $foodPreferenceModifier
     * @return static
     */
    public function addFoodPreferenceModifier(FHIRCodeableConcept $foodPreferenceModifier = null)
    {
        $this->foodPreferenceModifier[] = $foodPreferenceModifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This modifier is used to convey order-specific modifiers about the type of food
     * that should be given. These can be derived from patient allergies, intolerances,
     * or preferences such as Halal, Vegan or Kosher. This modifier applies to the
     * entire nutrition order inclusive of the oral diet, nutritional supplements and
     * enteral formula feedings.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $foodPreferenceModifier
     * @return static
     */
    public function setFoodPreferenceModifier(array $foodPreferenceModifier = [])
    {
        $this->foodPreferenceModifier = [];
        if ([] === $foodPreferenceModifier) {
            return $this;
        }
        foreach($foodPreferenceModifier as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addFoodPreferenceModifier($v);
            } else {
                $this->addFoodPreferenceModifier(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order by the order sender or by the order receiver.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order by the order sender or by the order receiver.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order by the order sender or by the order receiver.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
     */
    public function setIdentifier(array $identifier = [])
    {
        $this->identifier = [];
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Diet given orally in contrast to enteral (tube) feeding.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderOralDiet
     */
    public function getOralDiet()
    {
        return $this->oralDiet;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Diet given orally in contrast to enteral (tube) feeding.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderOralDiet $oralDiet
     * @return static
     */
    public function setOralDiet(FHIRNutritionOrderOralDiet $oralDiet = null)
    {
        $this->oralDiet = $oralDiet;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner that holds legal responsibility for ordering the diet,
     * nutritional supplement, or formula feedings.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getOrderer()
    {
        return $this->orderer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner that holds legal responsibility for ordering the diet,
     * nutritional supplement, or formula feedings.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $orderer
     * @return static
     */
    public function setOrderer(FHIRReference $orderer = null)
    {
        $this->orderer = $orderer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person (patient) who needs the nutrition order for an oral diet, nutritional
     * supplement and/or enteral or formula feeding.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person (patient) who needs the nutrition order for an oral diet, nutritional
     * supplement and/or enteral or formula feeding.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(FHIRReference $patient = null)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Codes specifying the state of the request. Describes the lifecycle of the
     * nutrition order.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The workflow status of the nutrition order/request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRNutritionOrderStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Codes specifying the state of the request. Describes the lifecycle of the
     * nutrition order.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The workflow status of the nutrition order/request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRNutritionOrderStatus $status
     * @return static
     */
    public function setStatus(FHIRNutritionOrderStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Oral nutritional products given in order to add further nutritional value to the
     * patient's diet.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderSupplement[]
     */
    public function getSupplement()
    {
        return $this->supplement;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Oral nutritional products given in order to add further nutritional value to the
     * patient's diet.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderSupplement $supplement
     * @return static
     */
    public function addSupplement(FHIRNutritionOrderSupplement $supplement = null)
    {
        $this->supplement[] = $supplement;
        return $this;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Oral nutritional products given in order to add further nutritional value to the
     * patient's diet.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderSupplement[] $supplement
     * @return static
     */
    public function setSupplement(array $supplement = [])
    {
        $this->supplement = [];
        if ([] === $supplement) {
            return $this;
        }
        foreach($supplement as $v) {
            if ($v instanceof FHIRNutritionOrderSupplement) {
                $this->addSupplement($v);
            } else {
                $this->addSupplement(new FHIRNutritionOrderSupplement($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRNutritionOrder $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRNutritionOrder
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
                throw new \DomainException(sprintf('FHIRNutritionOrder::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRNutritionOrder::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRNutritionOrder;
        } elseif (!is_object($type) || !($type instanceof FHIRNutritionOrder)) {
            throw new \RuntimeException(sprintf(
                'FHIRNutritionOrder::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRNutritionOrder or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->allergyIntolerance)) {
            foreach($children->allergyIntolerance as $child) {
                $type->addAllergyIntolerance(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($attributes->dateTime)) {
            $type->setDateTime((string)$attributes->dateTime);
        }
        if (isset($children->dateTime)) {
            $type->setDateTime(FHIRDateTime::xmlUnserialize($children->dateTime));
        }
        if (isset($children->encounter)) {
            $type->setEncounter(FHIRReference::xmlUnserialize($children->encounter));
        }
        if (isset($children->enteralFormula)) {
            $type->setEnteralFormula(FHIRNutritionOrderEnteralFormula::xmlUnserialize($children->enteralFormula));
        }
        if (isset($children->excludeFoodModifier)) {
            foreach($children->excludeFoodModifier as $child) {
                $type->addExcludeFoodModifier(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->foodPreferenceModifier)) {
            foreach($children->foodPreferenceModifier as $child) {
                $type->addFoodPreferenceModifier(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->oralDiet)) {
            $type->setOralDiet(FHIRNutritionOrderOralDiet::xmlUnserialize($children->oralDiet));
        }
        if (isset($children->orderer)) {
            $type->setOrderer(FHIRReference::xmlUnserialize($children->orderer));
        }
        if (isset($children->patient)) {
            $type->setPatient(FHIRReference::xmlUnserialize($children->patient));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRNutritionOrderStatus::xmlUnserialize($children->status));
        }
        if (isset($children->supplement)) {
            foreach($children->supplement as $child) {
                $type->addSupplement(FHIRNutritionOrderSupplement::xmlUnserialize($child));
            }
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

        if ([] !== ($vs = $this->getAllergyIntolerance())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ALLERGY_INTOLERANCE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getEncounter())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENCOUNTER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getEnteralFormula())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENTERAL_FORMULA, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getExcludeFoodModifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXCLUDE_FOOD_MODIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getFoodPreferenceModifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_FOOD_PREFERENCE_MODIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getOralDiet())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORAL_DIET, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOrderer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORDERER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getSupplement())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUPPLEMENT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getAllergyIntolerance())) {
            $a[self::FIELD_ALLERGY_INTOLERANCE] = $vs;
        }
        if (null !== ($v = $this->getDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DATE_TIME] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DATE_TIME_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DATE_TIME] = $v;
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            $a[self::FIELD_ENCOUNTER] = $v;
        }
        if (null !== ($v = $this->getEnteralFormula())) {
            $a[self::FIELD_ENTERAL_FORMULA] = $v;
        }
        if ([] !== ($vs = $this->getExcludeFoodModifier())) {
            $a[self::FIELD_EXCLUDE_FOOD_MODIFIER] = $vs;
        }
        if ([] !== ($vs = $this->getFoodPreferenceModifier())) {
            $a[self::FIELD_FOOD_PREFERENCE_MODIFIER] = $vs;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if (null !== ($val = $v->getValue())) {
                    $a[self::FIELD_IDENTIFIER][] = $val;
                    if (1 < count($enc = $v->jsonSerialize())) {
                        unset($enc[$v::FIELD_VALUE]);
                        $a[self::FIELD_IDENTIFIER_EXT][] = $enc;
                    } else {
                        $a[self::FIELD_IDENTIFIER_EXT][] = null;
                    }
                } else {
                    $a[self::FIELD_IDENTIFIER][] = $v;
                }
            }
        }
        if (null !== ($v = $this->getOralDiet())) {
            $a[self::FIELD_ORAL_DIET] = $v;
        }
        if (null !== ($v = $this->getOrderer())) {
            $a[self::FIELD_ORDERER] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_STATUS] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_STATUS_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_STATUS] = $v;
            }
        }
        if ([] !== ($vs = $this->getSupplement())) {
            $a[self::FIELD_SUPPLEMENT] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}