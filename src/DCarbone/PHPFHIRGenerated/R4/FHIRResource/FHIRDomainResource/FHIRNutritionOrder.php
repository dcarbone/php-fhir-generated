<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 17th, 2019 04:21+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderOralDiet;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderSupplement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestIntent;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A request to supply a diet, formula feeding (enteral) or oral nutritional
 * supplement to a patient/resident.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRNutritionOrder
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
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
    const FIELD_INSTANTIATES = 'instantiates';
    const FIELD_INSTANTIATES_EXT = '_instantiates';
    const FIELD_INSTANTIATES_CANONICAL = 'instantiatesCanonical';
    const FIELD_INSTANTIATES_CANONICAL_EXT = '_instantiatesCanonical';
    const FIELD_INSTANTIATES_URI = 'instantiatesUri';
    const FIELD_INSTANTIATES_URI_EXT = '_instantiatesUri';
    const FIELD_INTENT = 'intent';
    const FIELD_INTENT_EXT = '_intent';
    const FIELD_NOTE = 'note';
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $encounter = null;

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Feeding provided through the gastrointestinal tract via a tube, catheter, or
     * stoma that delivers nutrition distal to the oral cavity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula
     */
    protected $enteralFormula = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This modifier is used to convey Order-specific modifier about the type of oral
     * food or oral fluids that should not be given. These can be derived from patient
     * allergies, intolerances, or preferences such as No Red Meat, No Soy or No Wheat
     * or Gluten-Free. While it should not be necessary to repeat allergy or
     * intolerance information captured in the referenced AllergyIntolerance resource
     * in the excludeFoodModifier, this element may be used to convey additional
     * specificity related to foods that should be eliminated from the patient’s diet
     * for any reason. This modifier applies to the entire nutrition order inclusive of
     * the oral diet, nutritional supplements and enteral formula feedings.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $foodPreferenceModifier = [];

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order by the order sender or by the order receiver.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to a protocol, guideline, orderset or other definition that is
     * adhered to in whole or in part by this NutritionOrder.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri[]
     */
    protected $instantiates = [];

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other
     * definition that is adhered to in whole or in part by this NutritionOrder.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    protected $instantiatesCanonical = [];

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or
     * other definition that is adhered to in whole or in part by this NutritionOrder.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri[]
     */
    protected $instantiatesUri = [];

    /**
     * Codes indicating the degree of authority/intentionality associated with a
     * request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the level of authority/intentionality associated with the NutrionOrder
     * and where the request fits into the workflow chain.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestIntent
     */
    protected $intent = null;

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the {{title}} by the requester, performer, subject or other
     * participants.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    protected $note = [];

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Diet given orally in contrast to enteral (tube) feeding.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderOralDiet
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $patient = null;

    /**
     * Indicates whether the plan is currently being acted upon, represents future
     * intentions or is now a historical record.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The workflow status of the nutrition order/request.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestStatus
     */
    protected $status = null;

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Oral nutritional products given in order to add further nutritional value to the
     * patient's diet.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderSupplement[]
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
        if (isset($data[self::FIELD_INSTANTIATES])) {
            $ext = (isset($data[self::FIELD_INSTANTIATES_EXT]) && is_array($data[self::FIELD_INSTANTIATES_EXT]))
                ? $data[self::FIELD_INSTANTIATES_EXT]
                : null;
            if (is_array($data[self::FIELD_INSTANTIATES])) {
                foreach($data[self::FIELD_INSTANTIATES] as $i => $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRUri) {
                        $this->addInstantiates($v);
                    } elseif (null !== $ext && isset($ext[$i]) && is_array($ext[$i])) {
                        if (is_scalar($v)) {
                            $this->addInstantiates(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $ext[$i]));
                        } elseif (is_array($v)) {
                            $this->addInstantiates(new FHIRUri(array_merge($v, $ext[$i])));
                        }
                    } else {
                        $this->addInstantiates(new FHIRUri($v));
                    }
                }
            } elseif ($data[self::FIELD_INSTANTIATES] instanceof FHIRUri) {
                $this->addInstantiates($data[self::FIELD_INSTANTIATES]);
            } elseif (null !== $ext && is_scalar($data[self::FIELD_INSTANTIATES])) {
                $this->addInstantiates(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_INSTANTIATES]] + $ext));
            } else {
                $this->addInstantiates(new FHIRUri($data[self::FIELD_INSTANTIATES]));
            }
        }
        if (isset($data[self::FIELD_INSTANTIATES_CANONICAL])) {
            $ext = (isset($data[self::FIELD_INSTANTIATES_CANONICAL_EXT]) && is_array($data[self::FIELD_INSTANTIATES_CANONICAL_EXT]))
                ? $data[self::FIELD_INSTANTIATES_CANONICAL_EXT]
                : null;
            if (is_array($data[self::FIELD_INSTANTIATES_CANONICAL])) {
                foreach($data[self::FIELD_INSTANTIATES_CANONICAL] as $i => $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCanonical) {
                        $this->addInstantiatesCanonical($v);
                    } elseif (null !== $ext && isset($ext[$i]) && is_array($ext[$i])) {
                        if (is_scalar($v)) {
                            $this->addInstantiatesCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $v] + $ext[$i]));
                        } elseif (is_array($v)) {
                            $this->addInstantiatesCanonical(new FHIRCanonical(array_merge($v, $ext[$i])));
                        }
                    } else {
                        $this->addInstantiatesCanonical(new FHIRCanonical($v));
                    }
                }
            } elseif ($data[self::FIELD_INSTANTIATES_CANONICAL] instanceof FHIRCanonical) {
                $this->addInstantiatesCanonical($data[self::FIELD_INSTANTIATES_CANONICAL]);
            } elseif (null !== $ext && is_scalar($data[self::FIELD_INSTANTIATES_CANONICAL])) {
                $this->addInstantiatesCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $data[self::FIELD_INSTANTIATES_CANONICAL]] + $ext));
            } else {
                $this->addInstantiatesCanonical(new FHIRCanonical($data[self::FIELD_INSTANTIATES_CANONICAL]));
            }
        }
        if (isset($data[self::FIELD_INSTANTIATES_URI])) {
            $ext = (isset($data[self::FIELD_INSTANTIATES_URI_EXT]) && is_array($data[self::FIELD_INSTANTIATES_URI_EXT]))
                ? $data[self::FIELD_INSTANTIATES_URI_EXT]
                : null;
            if (is_array($data[self::FIELD_INSTANTIATES_URI])) {
                foreach($data[self::FIELD_INSTANTIATES_URI] as $i => $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRUri) {
                        $this->addInstantiatesUri($v);
                    } elseif (null !== $ext && isset($ext[$i]) && is_array($ext[$i])) {
                        if (is_scalar($v)) {
                            $this->addInstantiatesUri(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $ext[$i]));
                        } elseif (is_array($v)) {
                            $this->addInstantiatesUri(new FHIRUri(array_merge($v, $ext[$i])));
                        }
                    } else {
                        $this->addInstantiatesUri(new FHIRUri($v));
                    }
                }
            } elseif ($data[self::FIELD_INSTANTIATES_URI] instanceof FHIRUri) {
                $this->addInstantiatesUri($data[self::FIELD_INSTANTIATES_URI]);
            } elseif (null !== $ext && is_scalar($data[self::FIELD_INSTANTIATES_URI])) {
                $this->addInstantiatesUri(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_INSTANTIATES_URI]] + $ext));
            } else {
                $this->addInstantiatesUri(new FHIRUri($data[self::FIELD_INSTANTIATES_URI]));
            }
        }
        if (isset($data[self::FIELD_INTENT])) {
            $ext = (isset($data[self::FIELD_INTENT_EXT]) && is_array($data[self::FIELD_INTENT_EXT]))
                ? $data[self::FIELD_INTENT_EXT]
                : null;
            if ($data[self::FIELD_INTENT] instanceof FHIRRequestIntent) {
                $this->setIntent($data[self::FIELD_INTENT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_INTENT])) {
                    $this->setIntent(new FHIRRequestIntent([FHIRRequestIntent::FIELD_VALUE => $data[self::FIELD_INTENT]] + $ext));
                } else if (is_array($data[self::FIELD_INTENT])) {
                    $this->setIntent(new FHIRRequestIntent(array_merge($ext, $data[self::FIELD_INTENT])));
                }
            } else {
                $this->setIntent(new FHIRRequestIntent($data[self::FIELD_INTENT]));
            }
        }
        if (isset($data[self::FIELD_NOTE])) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } else if ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
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
            if ($data[self::FIELD_STATUS] instanceof FHIRRequestStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_STATUS])) {
                    $this->setStatus(new FHIRRequestStatus([FHIRRequestStatus::FIELD_VALUE => $data[self::FIELD_STATUS]] + $ext));
                } else if (is_array($data[self::FIELD_STATUS])) {
                    $this->setStatus(new FHIRRequestStatus(array_merge($ext, $data[self::FIELD_STATUS])));
                }
            } else {
                $this->setStatus(new FHIRRequestStatus($data[self::FIELD_STATUS]));
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $allergyIntolerance
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $allergyIntolerance
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $dateTime
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $encounter
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula $enteralFormula
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
     * This modifier is used to convey Order-specific modifier about the type of oral
     * food or oral fluids that should not be given. These can be derived from patient
     * allergies, intolerances, or preferences such as No Red Meat, No Soy or No Wheat
     * or Gluten-Free. While it should not be necessary to repeat allergy or
     * intolerance information captured in the referenced AllergyIntolerance resource
     * in the excludeFoodModifier, this element may be used to convey additional
     * specificity related to foods that should be eliminated from the patient’s diet
     * for any reason. This modifier applies to the entire nutrition order inclusive of
     * the oral diet, nutritional supplements and enteral formula feedings.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
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
     * This modifier is used to convey Order-specific modifier about the type of oral
     * food or oral fluids that should not be given. These can be derived from patient
     * allergies, intolerances, or preferences such as No Red Meat, No Soy or No Wheat
     * or Gluten-Free. While it should not be necessary to repeat allergy or
     * intolerance information captured in the referenced AllergyIntolerance resource
     * in the excludeFoodModifier, this element may be used to convey additional
     * specificity related to foods that should be eliminated from the patient’s diet
     * for any reason. This modifier applies to the entire nutrition order inclusive of
     * the oral diet, nutritional supplements and enteral formula feedings.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $excludeFoodModifier
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
     * This modifier is used to convey Order-specific modifier about the type of oral
     * food or oral fluids that should not be given. These can be derived from patient
     * allergies, intolerances, or preferences such as No Red Meat, No Soy or No Wheat
     * or Gluten-Free. While it should not be necessary to repeat allergy or
     * intolerance information captured in the referenced AllergyIntolerance resource
     * in the excludeFoodModifier, this element may be used to convey additional
     * specificity related to foods that should be eliminated from the patient’s diet
     * for any reason. This modifier applies to the entire nutrition order inclusive of
     * the oral diet, nutritional supplements and enteral formula feedings.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $excludeFoodModifier
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $foodPreferenceModifier
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $foodPreferenceModifier
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order by the order sender or by the order receiver.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order by the order sender or by the order receiver.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order by the order sender or by the order receiver.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
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
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to a protocol, guideline, orderset or other definition that is
     * adhered to in whole or in part by this NutritionOrder.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri[]
     */
    public function getInstantiates()
    {
        return $this->instantiates;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to a protocol, guideline, orderset or other definition that is
     * adhered to in whole or in part by this NutritionOrder.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $instantiates
     * @return static
     */
    public function addInstantiates($instantiates = null)
    {
        if (null === $instantiates) {
            $this->instantiates = [];
            return $this;
        }
        if ($instantiates instanceof FHIRUri) {
            $this->instantiates[] = $instantiates;
            return $this;
        }
        $this->instantiates[] = new FHIRUri($instantiates);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to a protocol, guideline, orderset or other definition that is
     * adhered to in whole or in part by this NutritionOrder.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri[] $instantiates
     * @return static
     */
    public function setInstantiates(array $instantiates = [])
    {
        $this->instantiates = [];
        if ([] === $instantiates) {
            return $this;
        }
        foreach($instantiates as $v) {
            if ($v instanceof FHIRUri) {
                $this->addInstantiates($v);
            } else {
                $this->addInstantiates(new FHIRUri($v));
            }
        }
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other
     * definition that is adhered to in whole or in part by this NutritionOrder.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    public function getInstantiatesCanonical()
    {
        return $this->instantiatesCanonical;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other
     * definition that is adhered to in whole or in part by this NutritionOrder.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $instantiatesCanonical
     * @return static
     */
    public function addInstantiatesCanonical($instantiatesCanonical = null)
    {
        if (null === $instantiatesCanonical) {
            $this->instantiatesCanonical = [];
            return $this;
        }
        if ($instantiatesCanonical instanceof FHIRCanonical) {
            $this->instantiatesCanonical[] = $instantiatesCanonical;
            return $this;
        }
        $this->instantiatesCanonical[] = new FHIRCanonical($instantiatesCanonical);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other
     * definition that is adhered to in whole or in part by this NutritionOrder.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[] $instantiatesCanonical
     * @return static
     */
    public function setInstantiatesCanonical(array $instantiatesCanonical = [])
    {
        $this->instantiatesCanonical = [];
        if ([] === $instantiatesCanonical) {
            return $this;
        }
        foreach($instantiatesCanonical as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->addInstantiatesCanonical($v);
            } else {
                $this->addInstantiatesCanonical(new FHIRCanonical($v));
            }
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or
     * other definition that is adhered to in whole or in part by this NutritionOrder.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri[]
     */
    public function getInstantiatesUri()
    {
        return $this->instantiatesUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or
     * other definition that is adhered to in whole or in part by this NutritionOrder.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $instantiatesUri
     * @return static
     */
    public function addInstantiatesUri($instantiatesUri = null)
    {
        if (null === $instantiatesUri) {
            $this->instantiatesUri = [];
            return $this;
        }
        if ($instantiatesUri instanceof FHIRUri) {
            $this->instantiatesUri[] = $instantiatesUri;
            return $this;
        }
        $this->instantiatesUri[] = new FHIRUri($instantiatesUri);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or
     * other definition that is adhered to in whole or in part by this NutritionOrder.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri[] $instantiatesUri
     * @return static
     */
    public function setInstantiatesUri(array $instantiatesUri = [])
    {
        $this->instantiatesUri = [];
        if ([] === $instantiatesUri) {
            return $this;
        }
        foreach($instantiatesUri as $v) {
            if ($v instanceof FHIRUri) {
                $this->addInstantiatesUri($v);
            } else {
                $this->addInstantiatesUri(new FHIRUri($v));
            }
        }
        return $this;
    }

    /**
     * Codes indicating the degree of authority/intentionality associated with a
     * request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the level of authority/intentionality associated with the NutrionOrder
     * and where the request fits into the workflow chain.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestIntent
     */
    public function getIntent()
    {
        return $this->intent;
    }

    /**
     * Codes indicating the degree of authority/intentionality associated with a
     * request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the level of authority/intentionality associated with the NutrionOrder
     * and where the request fits into the workflow chain.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestIntent $intent
     * @return static
     */
    public function setIntent(FHIRRequestIntent $intent = null)
    {
        $this->intent = $intent;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the {{title}} by the requester, performer, subject or other
     * participants.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the {{title}} by the requester, performer, subject or other
     * participants.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation $note
     * @return static
     */
    public function addNote(FHIRAnnotation $note = null)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comments made about the {{title}} by the requester, performer, subject or other
     * participants.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[] $note
     * @return static
     */
    public function setNote(array $note = [])
    {
        $this->note = [];
        if ([] === $note) {
            return $this;
        }
        foreach($note as $v) {
            if ($v instanceof FHIRAnnotation) {
                $this->addNote($v);
            } else {
                $this->addNote(new FHIRAnnotation($v));
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderOralDiet
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderOralDiet $oralDiet
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $orderer
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(FHIRReference $patient = null)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Indicates whether the plan is currently being acted upon, represents future
     * intentions or is now a historical record.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The workflow status of the nutrition order/request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Indicates whether the plan is currently being acted upon, represents future
     * intentions or is now a historical record.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The workflow status of the nutrition order/request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestStatus $status
     * @return static
     */
    public function setStatus(FHIRRequestStatus $status = null)
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderSupplement[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderSupplement $supplement
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderSupplement[] $supplement
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRNutritionOrder $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRNutritionOrder
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
                'FHIRNutritionOrder::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRNutritionOrder or null, %s seen.',
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
        if (isset($attributes->instantiates)) {
            $type->addInstantiates((string)$attributes->instantiates);
        }
        if (isset($children->instantiates)) {
            foreach($children->instantiates as $child) {
                $type->addInstantiates(FHIRUri::xmlUnserialize($child));
            }
        }
        if (isset($attributes->instantiatesCanonical)) {
            $type->addInstantiatesCanonical((string)$attributes->instantiatesCanonical);
        }
        if (isset($children->instantiatesCanonical)) {
            foreach($children->instantiatesCanonical as $child) {
                $type->addInstantiatesCanonical(FHIRCanonical::xmlUnserialize($child));
            }
        }
        if (isset($attributes->instantiatesUri)) {
            $type->addInstantiatesUri((string)$attributes->instantiatesUri);
        }
        if (isset($children->instantiatesUri)) {
            foreach($children->instantiatesUri as $child) {
                $type->addInstantiatesUri(FHIRUri::xmlUnserialize($child));
            }
        }
        if (isset($children->intent)) {
            $type->setIntent(FHIRRequestIntent::xmlUnserialize($children->intent));
        }
        if (isset($children->note)) {
            foreach($children->note as $child) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($child));
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
            $type->setStatus(FHIRRequestStatus::xmlUnserialize($children->status));
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

        if ([] !== ($vs = $this->getInstantiates())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INSTANTIATES, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getInstantiatesCanonical())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INSTANTIATES_CANONICAL, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getInstantiatesUri())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INSTANTIATES_URI, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getIntent())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INTENT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NOTE, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getInstantiates())) {
            $a[self::FIELD_INSTANTIATES] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if (null !== ($val = $v->getValue())) {
                    $a[self::FIELD_INSTANTIATES][] = $val;
                    if (1 < count($enc = $v->jsonSerialize())) {
                        unset($enc[$v::FIELD_VALUE]);
                        $a[self::FIELD_INSTANTIATES_EXT][] = $enc;
                    } else {
                        $a[self::FIELD_INSTANTIATES_EXT][] = null;
                    }
                } else {
                    $a[self::FIELD_INSTANTIATES][] = $v;
                }
            }
        }
        if ([] !== ($vs = $this->getInstantiatesCanonical())) {
            $a[self::FIELD_INSTANTIATES_CANONICAL] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if (null !== ($val = $v->getValue())) {
                    $a[self::FIELD_INSTANTIATES_CANONICAL][] = $val;
                    if (1 < count($enc = $v->jsonSerialize())) {
                        unset($enc[$v::FIELD_VALUE]);
                        $a[self::FIELD_INSTANTIATES_CANONICAL_EXT][] = $enc;
                    } else {
                        $a[self::FIELD_INSTANTIATES_CANONICAL_EXT][] = null;
                    }
                } else {
                    $a[self::FIELD_INSTANTIATES_CANONICAL][] = $v;
                }
            }
        }
        if ([] !== ($vs = $this->getInstantiatesUri())) {
            $a[self::FIELD_INSTANTIATES_URI] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if (null !== ($val = $v->getValue())) {
                    $a[self::FIELD_INSTANTIATES_URI][] = $val;
                    if (1 < count($enc = $v->jsonSerialize())) {
                        unset($enc[$v::FIELD_VALUE]);
                        $a[self::FIELD_INSTANTIATES_URI_EXT][] = $enc;
                    } else {
                        $a[self::FIELD_INSTANTIATES_URI_EXT][] = null;
                    }
                } else {
                    $a[self::FIELD_INSTANTIATES_URI][] = $v;
                }
            }
        }
        if (null !== ($v = $this->getIntent())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_INTENT] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_INTENT_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_INTENT] = $v;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            $a[self::FIELD_NOTE] = $vs;
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