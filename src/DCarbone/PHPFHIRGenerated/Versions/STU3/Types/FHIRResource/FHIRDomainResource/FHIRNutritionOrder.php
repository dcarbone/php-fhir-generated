<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderOralDiet;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderSupplement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNutritionOrderStatus;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionTypeMap;

/**
 * A request to supply a diet, formula feeding (enteral) or oral nutritional
 * supplement to a patient/resident.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRNutritionOrder extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_NUTRITION_ORDER;


    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_PATIENT = 'patient';
    public const FIELD_ENCOUNTER = 'encounter';
    public const FIELD_DATE_TIME = 'dateTime';
    public const FIELD_DATE_TIME_EXT = '_dateTime';
    public const FIELD_ORDERER = 'orderer';
    public const FIELD_ALLERGY_INTOLERANCE = 'allergyIntolerance';
    public const FIELD_FOOD_PREFERENCE_MODIFIER = 'foodPreferenceModifier';
    public const FIELD_EXCLUDE_FOOD_MODIFIER = 'excludeFoodModifier';
    public const FIELD_ORAL_DIET = 'oralDiet';
    public const FIELD_SUPPLEMENT = 'supplement';
    public const FIELD_ENTERAL_FORMULA = 'enteralFormula';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order by the order sender or by the order receiver.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * Codes specifying the state of the request. Describes the lifecycle of the
     * nutrition order.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The workflow status of the nutrition order/request.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNutritionOrderStatus 
     */
    protected FHIRNutritionOrderStatus $status;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person (patient) who needs the nutrition order for an oral diet, nutritional
     * supplement and/or enteral or formula feeding.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $patient;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An encounter that provides additional information about the healthcare context
     * in which this request is made.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $encounter;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $dateTime;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner that holds legal responsibility for ordering the diet,
     * nutritional supplement, or formula feedings.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $orderer;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a record of allergies or intolerances which should be included in the
     * nutrition order.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[] 
     */
    protected array $allergyIntolerance;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $foodPreferenceModifier;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $excludeFoodModifier;
    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Diet given orally in contrast to enteral (tube) feeding.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderOralDiet 
     */
    protected FHIRNutritionOrderOralDiet $oralDiet;
    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Oral nutritional products given in order to add further nutritional value to the
     * patient's diet.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderSupplement[] 
     */
    protected array $supplement;
    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Feeding provided through the gastrointestinal tract via a tube, catheter, or
     * stoma that delivers nutrition distal to the oral cavity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula 
     */
    protected FHIRNutritionOrderEnteralFormula $enteralFormula;

    /** Default validation map for fields in type NutritionOrder */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_PATIENT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_DATE_TIME => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRNutritionOrder Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNutritionOrderStatus $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $patient
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $encounter
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $dateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $orderer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[] $allergyIntolerance
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] $foodPreferenceModifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] $excludeFoodModifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderOralDiet $oralDiet
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderSupplement[] $supplement
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula $enteralFormula
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRIdPrimitive|FHIRId $id = null,
                                null|FHIRMeta $meta = null,
                                null|string|FHIRUriPrimitive|FHIRUri $implicitRules = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $extension = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $identifier = null,
                                null|FHIRNutritionOrderStatus $status = null,
                                null|FHIRReference $patient = null,
                                null|FHIRReference $encounter = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $dateTime = null,
                                null|FHIRReference $orderer = null,
                                null|iterable $allergyIntolerance = null,
                                null|iterable $foodPreferenceModifier = null,
                                null|iterable $excludeFoodModifier = null,
                                null|FHIRNutritionOrderOralDiet $oralDiet = null,
                                null|iterable $supplement = null,
                                null|FHIRNutritionOrderEnteralFormula $enteralFormula = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(id: $id,
                            meta: $meta,
                            implicitRules: $implicitRules,
                            language: $language,
                            text: $text,
                            contained: $contained,
                            extension: $extension,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $identifier) {
            $this->setIdentifier(...$identifier);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $patient) {
            $this->setPatient($patient);
        }
        if (null !== $encounter) {
            $this->setEncounter($encounter);
        }
        if (null !== $dateTime) {
            $this->setDateTime($dateTime);
        }
        if (null !== $orderer) {
            $this->setOrderer($orderer);
        }
        if (null !== $allergyIntolerance) {
            $this->setAllergyIntolerance(...$allergyIntolerance);
        }
        if (null !== $foodPreferenceModifier) {
            $this->setFoodPreferenceModifier(...$foodPreferenceModifier);
        }
        if (null !== $excludeFoodModifier) {
            $this->setExcludeFoodModifier(...$excludeFoodModifier);
        }
        if (null !== $oralDiet) {
            $this->setOralDiet($oralDiet);
        }
        if (null !== $supplement) {
            $this->setSupplement(...$supplement);
        }
        if (null !== $enteralFormula) {
            $this->setEnteralFormula($enteralFormula);
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
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order by the order sender or by the order receiver.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier>
     */
    public function getIdentifierIterator(): iterable
    {
        if (!isset($this->identifier) || [] === $this->identifier) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order by the order sender or by the order receiver.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier): self
    {
        if (!isset($this->identifier)) {
            $this->identifier = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Codes specifying the state of the request. Describes the lifecycle of the
     * nutrition order.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The workflow status of the nutrition order/request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNutritionOrderStatus
     */
    public function getStatus(): null|FHIRNutritionOrderStatus
    {
        return $this->status ?? null;
    }

    /**
     * Codes specifying the state of the request. Describes the lifecycle of the
     * nutrition order.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The workflow status of the nutrition order/request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNutritionOrderStatus $status
     * @return static
     */
    public function setStatus(null|FHIRNutritionOrderStatus $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        $this->status = $status;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getPatient(): null|FHIRReference
    {
        return $this->patient ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person (patient) who needs the nutrition order for an oral diet, nutritional
     * supplement and/or enteral or formula feeding.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(null|FHIRReference $patient): self
    {
        if (null === $patient) {
            unset($this->patient);
            return $this;
        }
        $this->patient = $patient;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getEncounter(): null|FHIRReference
    {
        return $this->encounter ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An encounter that provides additional information about the healthcare context
     * in which this request is made.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $encounter
     * @return static
     */
    public function setEncounter(null|FHIRReference $encounter): self
    {
        if (null === $encounter) {
            unset($this->encounter);
            return $this;
        }
        $this->encounter = $encounter;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime
     */
    public function getDateTime(): null|FHIRDateTime
    {
        return $this->dateTime ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $dateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $dateTime,
                                null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $dateTime) {
            unset($this->dateTime);
            return $this;
        }
        if (!($dateTime instanceof FHIRDateTime)) {
            $dateTime = new FHIRDateTime(value: $dateTime);
        }
        if (null !== $valueXMLLocation) {
            $dateTime->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $dateTime->_getValueXMLLocation()) {
            $dateTime->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->dateTime = $dateTime;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getOrderer(): null|FHIRReference
    {
        return $this->orderer ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner that holds legal responsibility for ordering the diet,
     * nutritional supplement, or formula feedings.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $orderer
     * @return static
     */
    public function setOrderer(null|FHIRReference $orderer): self
    {
        if (null === $orderer) {
            unset($this->orderer);
            return $this;
        }
        $this->orderer = $orderer;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference[]
     */
    public function getAllergyIntolerance(): array
    {
        return $this->allergyIntolerance ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference>
     */
    public function getAllergyIntoleranceIterator(): iterable
    {
        if (!isset($this->allergyIntolerance) || [] === $this->allergyIntolerance) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->allergyIntolerance);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a record of allergies or intolerances which should be included in the
     * nutrition order.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $allergyIntolerance
     * @return static
     */
    public function addAllergyIntolerance(FHIRReference $allergyIntolerance): self
    {
        if (!isset($this->allergyIntolerance)) {
            $this->allergyIntolerance = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference ...$allergyIntolerance
     * @return static
     */
    public function setAllergyIntolerance(FHIRReference ...$allergyIntolerance): self
    {
        $this->allergyIntolerance = $allergyIntolerance;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getFoodPreferenceModifier(): array
    {
        return $this->foodPreferenceModifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getFoodPreferenceModifierIterator(): iterable
    {
        if (!isset($this->foodPreferenceModifier) || [] === $this->foodPreferenceModifier) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->foodPreferenceModifier);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $foodPreferenceModifier
     * @return static
     */
    public function addFoodPreferenceModifier(FHIRCodeableConcept $foodPreferenceModifier): self
    {
        if (!isset($this->foodPreferenceModifier)) {
            $this->foodPreferenceModifier = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept ...$foodPreferenceModifier
     * @return static
     */
    public function setFoodPreferenceModifier(FHIRCodeableConcept ...$foodPreferenceModifier): self
    {
        $this->foodPreferenceModifier = $foodPreferenceModifier;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getExcludeFoodModifier(): array
    {
        return $this->excludeFoodModifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getExcludeFoodModifierIterator(): iterable
    {
        if (!isset($this->excludeFoodModifier) || [] === $this->excludeFoodModifier) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->excludeFoodModifier);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $excludeFoodModifier
     * @return static
     */
    public function addExcludeFoodModifier(FHIRCodeableConcept $excludeFoodModifier): self
    {
        if (!isset($this->excludeFoodModifier)) {
            $this->excludeFoodModifier = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept ...$excludeFoodModifier
     * @return static
     */
    public function setExcludeFoodModifier(FHIRCodeableConcept ...$excludeFoodModifier): self
    {
        $this->excludeFoodModifier = $excludeFoodModifier;
        return $this;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Diet given orally in contrast to enteral (tube) feeding.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderOralDiet
     */
    public function getOralDiet(): null|FHIRNutritionOrderOralDiet
    {
        return $this->oralDiet ?? null;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Diet given orally in contrast to enteral (tube) feeding.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderOralDiet $oralDiet
     * @return static
     */
    public function setOralDiet(null|FHIRNutritionOrderOralDiet $oralDiet): self
    {
        if (null === $oralDiet) {
            unset($this->oralDiet);
            return $this;
        }
        $this->oralDiet = $oralDiet;
        return $this;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Oral nutritional products given in order to add further nutritional value to the
     * patient's diet.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderSupplement[]
     */
    public function getSupplement(): array
    {
        return $this->supplement ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderSupplement>
     */
    public function getSupplementIterator(): iterable
    {
        if (!isset($this->supplement) || [] === $this->supplement) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->supplement);
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Oral nutritional products given in order to add further nutritional value to the
     * patient's diet.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderSupplement $supplement
     * @return static
     */
    public function addSupplement(FHIRNutritionOrderSupplement $supplement): self
    {
        if (!isset($this->supplement)) {
            $this->supplement = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderSupplement ...$supplement
     * @return static
     */
    public function setSupplement(FHIRNutritionOrderSupplement ...$supplement): self
    {
        $this->supplement = $supplement;
        return $this;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Feeding provided through the gastrointestinal tract via a tube, catheter, or
     * stoma that delivers nutrition distal to the oral cavity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula
     */
    public function getEnteralFormula(): null|FHIRNutritionOrderEnteralFormula
    {
        return $this->enteralFormula ?? null;
    }

    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Feeding provided through the gastrointestinal tract via a tube, catheter, or
     * stoma that delivers nutrition distal to the oral cavity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula $enteralFormula
     * @return static
     */
    public function setEnteralFormula(null|FHIRNutritionOrderEnteralFormula $enteralFormula): self
    {
        if (null === $enteralFormula) {
            unset($this->enteralFormula);
            return $this;
        }
        $this->enteralFormula = $enteralFormula;
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
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE_TIME] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT])) {
            $v = $this->getPatient();
            foreach($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT])) {
                        $errs[self::FIELD_PATIENT] = [];
                    }
                    $errs[self::FIELD_PATIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENCOUNTER])) {
            $v = $this->getEncounter();
            foreach($validationRules[self::FIELD_ENCOUNTER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENCOUNTER])) {
                        $errs[self::FIELD_ENCOUNTER] = [];
                    }
                    $errs[self::FIELD_ENCOUNTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE_TIME])) {
            $v = $this->getDateTime();
            foreach($validationRules[self::FIELD_DATE_TIME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE_TIME])) {
                        $errs[self::FIELD_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORDERER])) {
            $v = $this->getOrderer();
            foreach($validationRules[self::FIELD_ORDERER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ORDERER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORDERER])) {
                        $errs[self::FIELD_ORDERER] = [];
                    }
                    $errs[self::FIELD_ORDERER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ALLERGY_INTOLERANCE])) {
            $v = $this->getAllergyIntolerance();
            foreach($validationRules[self::FIELD_ALLERGY_INTOLERANCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ALLERGY_INTOLERANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALLERGY_INTOLERANCE])) {
                        $errs[self::FIELD_ALLERGY_INTOLERANCE] = [];
                    }
                    $errs[self::FIELD_ALLERGY_INTOLERANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FOOD_PREFERENCE_MODIFIER])) {
            $v = $this->getFoodPreferenceModifier();
            foreach($validationRules[self::FIELD_FOOD_PREFERENCE_MODIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FOOD_PREFERENCE_MODIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FOOD_PREFERENCE_MODIFIER])) {
                        $errs[self::FIELD_FOOD_PREFERENCE_MODIFIER] = [];
                    }
                    $errs[self::FIELD_FOOD_PREFERENCE_MODIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXCLUDE_FOOD_MODIFIER])) {
            $v = $this->getExcludeFoodModifier();
            foreach($validationRules[self::FIELD_EXCLUDE_FOOD_MODIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXCLUDE_FOOD_MODIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXCLUDE_FOOD_MODIFIER])) {
                        $errs[self::FIELD_EXCLUDE_FOOD_MODIFIER] = [];
                    }
                    $errs[self::FIELD_EXCLUDE_FOOD_MODIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORAL_DIET])) {
            $v = $this->getOralDiet();
            foreach($validationRules[self::FIELD_ORAL_DIET] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ORAL_DIET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORAL_DIET])) {
                        $errs[self::FIELD_ORAL_DIET] = [];
                    }
                    $errs[self::FIELD_ORAL_DIET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUPPLEMENT])) {
            $v = $this->getSupplement();
            foreach($validationRules[self::FIELD_SUPPLEMENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUPPLEMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUPPLEMENT])) {
                        $errs[self::FIELD_SUPPLEMENT] = [];
                    }
                    $errs[self::FIELD_SUPPLEMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENTERAL_FORMULA])) {
            $v = $this->getEnteralFormula();
            foreach($validationRules[self::FIELD_ENTERAL_FORMULA] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ENTERAL_FORMULA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENTERAL_FORMULA])) {
                        $errs[self::FIELD_ENTERAL_FORMULA] = [];
                    }
                    $errs[self::FIELD_ENTERAL_FORMULA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRNutritionOrder $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRNutritionOrder
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRNutritionOrder)) {
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
            if (self::FIELD_ID === $childName) {
                $v = new FHIRId(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setId(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_META === $childName) {
                $v = new FHIRMeta();
                $type->setMeta(FHIRMeta::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $childName) {
                $v = new FHIRUri(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LANGUAGE === $childName) {
                $v = new FHIRCode(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setLanguage(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TEXT === $childName) {
                $v = new FHIRNarrative();
                $type->setText(FHIRNarrative::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($nn);
                    $type->addContained($cn::xmlUnserialize($nn, null, $config));
                }
            } else if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STATUS === $childName) {
                $v = new FHIRNutritionOrderStatus(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setStatus(FHIRNutritionOrderStatus::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATIENT === $childName) {
                $v = new FHIRReference();
                $type->setPatient(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ENCOUNTER === $childName) {
                $v = new FHIRReference();
                $type->setEncounter(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATE_TIME === $childName) {
                $v = new FHIRDateTime(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDateTime(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ORDERER === $childName) {
                $v = new FHIRReference();
                $type->setOrderer(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ALLERGY_INTOLERANCE === $childName) {
                $v = new FHIRReference();
                $type->addAllergyIntolerance(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FOOD_PREFERENCE_MODIFIER === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addFoodPreferenceModifier(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXCLUDE_FOOD_MODIFIER === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addExcludeFoodModifier(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ORAL_DIET === $childName) {
                $v = new FHIRNutritionOrderOralDiet();
                $type->setOralDiet(FHIRNutritionOrderOralDiet::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUPPLEMENT === $childName) {
                $v = new FHIRNutritionOrderSupplement();
                $type->addSupplement(FHIRNutritionOrderSupplement::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ENTERAL_FORMULA === $childName) {
                $v = new FHIRNutritionOrderEnteralFormula();
                $type->setEnteralFormula(FHIRNutritionOrderEnteralFormula::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRId(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules(new FHIRUri(
                    value: (string)$attributes[self::FIELD_IMPLICIT_RULES],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_LANGUAGE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage(new FHIRCode(
                    value: (string)$attributes[self::FIELD_LANGUAGE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DATE_TIME])) {
            $pt = $type->getDateTime();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DATE_TIME]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDateTime(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_DATE_TIME],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
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
            $xw->openRootNode('NutritionOrder', $this->_getSourceXMLNS());
        }
        if (isset($this->dateTime) && $this->dateTime->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATE_TIME, $this->dateTime->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->status)) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patient)) {
            $xw->startElement(self::FIELD_PATIENT);
            $this->patient->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->encounter)) {
            $xw->startElement(self::FIELD_ENCOUNTER);
            $this->encounter->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dateTime) && $this->dateTime->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DATE_TIME);
            $this->dateTime->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->orderer)) {
            $xw->startElement(self::FIELD_ORDERER);
            $this->orderer->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->allergyIntolerance)) {
            foreach ($this->allergyIntolerance as $v) {
                $xw->startElement(self::FIELD_ALLERGY_INTOLERANCE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->foodPreferenceModifier)) {
            foreach ($this->foodPreferenceModifier as $v) {
                $xw->startElement(self::FIELD_FOOD_PREFERENCE_MODIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->excludeFoodModifier)) {
            foreach ($this->excludeFoodModifier as $v) {
                $xw->startElement(self::FIELD_EXCLUDE_FOOD_MODIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->oralDiet)) {
            $xw->startElement(self::FIELD_ORAL_DIET);
            $this->oralDiet->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->supplement)) {
            foreach ($this->supplement as $v) {
                $xw->startElement(self::FIELD_SUPPLEMENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->enteralFormula)) {
            $xw->startElement(self::FIELD_ENTERAL_FORMULA);
            $this->enteralFormula->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRNutritionOrder $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRNutritionOrder
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRNutritionOrder)) {
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
        if (isset($json[self::FIELD_IDENTIFIER]) || array_key_exists(self::FIELD_IDENTIFIER, $json)) {
            if (is_array($json[self::FIELD_IDENTIFIER])) {
                foreach($json[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $type->addIdentifier($v);
                    } else {
                        $type->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($json[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $type->addIdentifier($json[self::FIELD_IDENTIFIER]);
            } else {
                $type->addIdentifier(new FHIRIdentifier($json[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($json[self::FIELD_STATUS]) || isset($json[self::FIELD_STATUS_EXT]) || array_key_exists(self::FIELD_STATUS, $json) || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $ext = (isset($json[self::FIELD_STATUS_EXT]) && is_array($json[self::FIELD_STATUS_EXT])) ? $json[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRNutritionOrderStatus) {
                    $type->setStatus($value);
                } else if (is_array($value)) {
                    $type->setStatus(new FHIRNutritionOrderStatus(array_merge($ext, $value)));
                } else {
                    $type->setStatus(new FHIRNutritionOrderStatus([FHIRNutritionOrderStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setStatus(new FHIRNutritionOrderStatus($ext));
            } else {
                $type->setStatus(new FHIRNutritionOrderStatus(null));
            }
        }
        if (isset($json[self::FIELD_PATIENT]) || array_key_exists(self::FIELD_PATIENT, $json)) {
            if ($json[self::FIELD_PATIENT] instanceof FHIRReference) {
                $type->setPatient($json[self::FIELD_PATIENT]);
            } else {
                $type->setPatient(new FHIRReference($json[self::FIELD_PATIENT]));
            }
        }
        if (isset($json[self::FIELD_ENCOUNTER]) || array_key_exists(self::FIELD_ENCOUNTER, $json)) {
            if ($json[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $type->setEncounter($json[self::FIELD_ENCOUNTER]);
            } else {
                $type->setEncounter(new FHIRReference($json[self::FIELD_ENCOUNTER]));
            }
        }
        if (isset($json[self::FIELD_DATE_TIME]) || isset($json[self::FIELD_DATE_TIME_EXT]) || array_key_exists(self::FIELD_DATE_TIME, $json) || array_key_exists(self::FIELD_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_DATE_TIME] ?? null;
            $ext = (isset($json[self::FIELD_DATE_TIME_EXT]) && is_array($json[self::FIELD_DATE_TIME_EXT])) ? $json[self::FIELD_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $type->setDateTime($value);
                } else if (is_array($value)) {
                    $type->setDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $type->setDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDateTime(new FHIRDateTime($ext));
            } else {
                $type->setDateTime(new FHIRDateTime(null));
            }
        }
        if (isset($json[self::FIELD_ORDERER]) || array_key_exists(self::FIELD_ORDERER, $json)) {
            if ($json[self::FIELD_ORDERER] instanceof FHIRReference) {
                $type->setOrderer($json[self::FIELD_ORDERER]);
            } else {
                $type->setOrderer(new FHIRReference($json[self::FIELD_ORDERER]));
            }
        }
        if (isset($json[self::FIELD_ALLERGY_INTOLERANCE]) || array_key_exists(self::FIELD_ALLERGY_INTOLERANCE, $json)) {
            if (is_array($json[self::FIELD_ALLERGY_INTOLERANCE])) {
                foreach($json[self::FIELD_ALLERGY_INTOLERANCE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addAllergyIntolerance($v);
                    } else {
                        $type->addAllergyIntolerance(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_ALLERGY_INTOLERANCE] instanceof FHIRReference) {
                $type->addAllergyIntolerance($json[self::FIELD_ALLERGY_INTOLERANCE]);
            } else {
                $type->addAllergyIntolerance(new FHIRReference($json[self::FIELD_ALLERGY_INTOLERANCE]));
            }
        }
        if (isset($json[self::FIELD_FOOD_PREFERENCE_MODIFIER]) || array_key_exists(self::FIELD_FOOD_PREFERENCE_MODIFIER, $json)) {
            if (is_array($json[self::FIELD_FOOD_PREFERENCE_MODIFIER])) {
                foreach($json[self::FIELD_FOOD_PREFERENCE_MODIFIER] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addFoodPreferenceModifier($v);
                    } else {
                        $type->addFoodPreferenceModifier(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_FOOD_PREFERENCE_MODIFIER] instanceof FHIRCodeableConcept) {
                $type->addFoodPreferenceModifier($json[self::FIELD_FOOD_PREFERENCE_MODIFIER]);
            } else {
                $type->addFoodPreferenceModifier(new FHIRCodeableConcept($json[self::FIELD_FOOD_PREFERENCE_MODIFIER]));
            }
        }
        if (isset($json[self::FIELD_EXCLUDE_FOOD_MODIFIER]) || array_key_exists(self::FIELD_EXCLUDE_FOOD_MODIFIER, $json)) {
            if (is_array($json[self::FIELD_EXCLUDE_FOOD_MODIFIER])) {
                foreach($json[self::FIELD_EXCLUDE_FOOD_MODIFIER] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addExcludeFoodModifier($v);
                    } else {
                        $type->addExcludeFoodModifier(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_EXCLUDE_FOOD_MODIFIER] instanceof FHIRCodeableConcept) {
                $type->addExcludeFoodModifier($json[self::FIELD_EXCLUDE_FOOD_MODIFIER]);
            } else {
                $type->addExcludeFoodModifier(new FHIRCodeableConcept($json[self::FIELD_EXCLUDE_FOOD_MODIFIER]));
            }
        }
        if (isset($json[self::FIELD_ORAL_DIET]) || array_key_exists(self::FIELD_ORAL_DIET, $json)) {
            if ($json[self::FIELD_ORAL_DIET] instanceof FHIRNutritionOrderOralDiet) {
                $type->setOralDiet($json[self::FIELD_ORAL_DIET]);
            } else {
                $type->setOralDiet(new FHIRNutritionOrderOralDiet($json[self::FIELD_ORAL_DIET]));
            }
        }
        if (isset($json[self::FIELD_SUPPLEMENT]) || array_key_exists(self::FIELD_SUPPLEMENT, $json)) {
            if (is_array($json[self::FIELD_SUPPLEMENT])) {
                foreach($json[self::FIELD_SUPPLEMENT] as $v) {
                    if ($v instanceof FHIRNutritionOrderSupplement) {
                        $type->addSupplement($v);
                    } else {
                        $type->addSupplement(new FHIRNutritionOrderSupplement($v));
                    }
                }
            } elseif ($json[self::FIELD_SUPPLEMENT] instanceof FHIRNutritionOrderSupplement) {
                $type->addSupplement($json[self::FIELD_SUPPLEMENT]);
            } else {
                $type->addSupplement(new FHIRNutritionOrderSupplement($json[self::FIELD_SUPPLEMENT]));
            }
        }
        if (isset($json[self::FIELD_ENTERAL_FORMULA]) || array_key_exists(self::FIELD_ENTERAL_FORMULA, $json)) {
            if ($json[self::FIELD_ENTERAL_FORMULA] instanceof FHIRNutritionOrderEnteralFormula) {
                $type->setEnteralFormula($json[self::FIELD_ENTERAL_FORMULA]);
            } else {
                $type->setEnteralFormula(new FHIRNutritionOrderEnteralFormula($json[self::FIELD_ENTERAL_FORMULA]));
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
        if (isset($this->identifier) && [] !== $this->identifier) {
            $out->identifier = $this->identifier;
        }
        if (isset($this->status)) {
            if (null !== ($val = $this->status->getValue())) {
                $out->status = $val;
            }
            $ext = $this->status->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_status = $ext;
            }
        }
        if (isset($this->patient)) {
            $out->patient = $this->patient;
        }
        if (isset($this->encounter)) {
            $out->encounter = $this->encounter;
        }
        if (isset($this->dateTime)) {
            if (null !== ($val = $this->dateTime->getValue())) {
                $out->dateTime = $val;
            }
            $ext = $this->dateTime->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_dateTime = $ext;
            }
        }
        if (isset($this->orderer)) {
            $out->orderer = $this->orderer;
        }
        if (isset($this->allergyIntolerance) && [] !== $this->allergyIntolerance) {
            $out->allergyIntolerance = $this->allergyIntolerance;
        }
        if (isset($this->foodPreferenceModifier) && [] !== $this->foodPreferenceModifier) {
            $out->foodPreferenceModifier = $this->foodPreferenceModifier;
        }
        if (isset($this->excludeFoodModifier) && [] !== $this->excludeFoodModifier) {
            $out->excludeFoodModifier = $this->excludeFoodModifier;
        }
        if (isset($this->oralDiet)) {
            $out->oralDiet = $this->oralDiet;
        }
        if (isset($this->supplement) && [] !== $this->supplement) {
            $out->supplement = $this->supplement;
        }
        if (isset($this->enteralFormula)) {
            $out->enteralFormula = $this->enteralFormula;
        }
        $out->resourceType = $this->_getResourceType();
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