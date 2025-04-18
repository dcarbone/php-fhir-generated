<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource;

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
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\FHIRVersion;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRNutritionOrderStatusList;
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
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRNutritionOrder extends FHIRDomainResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_NUTRITION_ORDER;

    /* class_default.php:56 */
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

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_PATIENT => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_DATE_TIME => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order by the order sender or by the order receiver.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier> 
     */
    #[FHIRIdentifier]
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
    #[FHIRNutritionOrderStatus]
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
    #[FHIRReference]
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
    #[FHIRReference]
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
    #[FHIRDateTime]
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
    #[FHIRReference]
    protected FHIRReference $orderer;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a record of allergies or intolerances which should be included in the
     * nutrition order.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference> 
     */
    #[FHIRReference]
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
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
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
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $excludeFoodModifier;
    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Diet given orally in contrast to enteral (tube) feeding.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderOralDiet 
     */
    #[FHIRNutritionOrderOralDiet]
    protected FHIRNutritionOrderOralDiet $oralDiet;
    /**
     * A request to supply a diet, formula feeding (enteral) or oral nutritional
     * supplement to a patient/resident.
     *
     * Oral nutritional products given in order to add further nutritional value to the
     * patient's diet.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderSupplement> 
     */
    #[FHIRNutritionOrderSupplement]
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
    #[FHIRNutritionOrderEnteralFormula]
    protected FHIRNutritionOrderEnteralFormula $enteralFormula;

    /* constructor.php:61 */
    /**
     * FHIRNutritionOrder Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative $text
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResourceContainer>|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface> $contained
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension> $extension
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension> $modifierExtension
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier> $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRNutritionOrderStatusList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNutritionOrderStatus $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $patient
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $encounter
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime $dateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $orderer
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference> $allergyIntolerance
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept> $foodPreferenceModifier
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept> $excludeFoodModifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderOralDiet $oralDiet
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderSupplement> $supplement
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
                                null|string|FHIRNutritionOrderStatusList|FHIRNutritionOrderStatus $status = null,
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

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order by the order sender or by the order receiver.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier>
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
        if (!isset($this->identifier)) {
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
        if ([] === $identifier) {
            unset($this->identifier);
            return $this;
        }
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRNutritionOrderStatusList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNutritionOrderStatus $status
     * @return static
     */
    public function setStatus(null|string|FHIRNutritionOrderStatusList|FHIRNutritionOrderStatus $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIRNutritionOrderStatus)) {
            $status = new FHIRNutritionOrderStatus(value: $status);
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
     * @return static
     */
    public function setDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $dateTime): self
    {
        if (null === $dateTime) {
            unset($this->dateTime);
            return $this;
        }
        if (!($dateTime instanceof FHIRDateTime)) {
            $dateTime = new FHIRDateTime(value: $dateTime);
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference>
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
        if (!isset($this->allergyIntolerance)) {
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
        if ([] === $allergyIntolerance) {
            unset($this->allergyIntolerance);
            return $this;
        }
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept>
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
        if (!isset($this->foodPreferenceModifier)) {
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
        if ([] === $foodPreferenceModifier) {
            unset($this->foodPreferenceModifier);
            return $this;
        }
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept>
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
        if (!isset($this->excludeFoodModifier)) {
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
        if ([] === $excludeFoodModifier) {
            unset($this->excludeFoodModifier);
            return $this;
        }
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderSupplement>
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
        if (!isset($this->supplement)) {
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
        if ([] === $supplement) {
            unset($this->supplement);
            return $this;
        }
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

    /* class_default.php:201 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRNutritionOrder $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRNutritionOrder
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_ID === $cen) {
                $type->setId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_META === $cen) {
                $type->setMeta(FHIRMeta::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $cen) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LANGUAGE === $cen) {
                $type->setLanguage(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRNarrative::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED === $cen) {
                foreach ($ce->children() as $cen) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::mustGetContainedTypeClassnameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRNutritionOrderStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATIENT === $cen) {
                $type->setPatient(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ENCOUNTER === $cen) {
                $type->setEncounter(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATE_TIME === $cen) {
                $type->setDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ORDERER === $cen) {
                $type->setOrderer(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ALLERGY_INTOLERANCE === $cen) {
                $type->addAllergyIntolerance(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FOOD_PREFERENCE_MODIFIER === $cen) {
                $type->addFoodPreferenceModifier(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXCLUDE_FOOD_MODIFIER === $cen) {
                $type->addExcludeFoodModifier(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ORAL_DIET === $cen) {
                $type->setOralDiet(FHIRNutritionOrderOralDiet::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUPPLEMENT === $cen) {
                $type->addSupplement(FHIRNutritionOrderSupplement::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ENTERAL_FORMULA === $cen) {
                $type->setEnteralFormula(FHIRNutritionOrderEnteralFormula::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            if (isset($type->id)) {
                $type->id->setValue((string)$attributes[self::FIELD_ID]);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            if (isset($type->implicitRules)) {
                $type->implicitRules->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_IMPLICIT_RULES, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LANGUAGE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_STATUS])) {
            if (isset($type->status)) {
                $type->status->setValue((string)$attributes[self::FIELD_STATUS]);
            } else {
                $type->setStatus((string)$attributes[self::FIELD_STATUS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_STATUS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DATE_TIME])) {
            if (isset($type->dateTime)) {
                $type->dateTime->setValue((string)$attributes[self::FIELD_DATE_TIME]);
            } else {
                $type->setDateTime((string)$attributes[self::FIELD_DATE_TIME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DATE_TIME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null,
                                 null|SerializeConfig $config = null): XMLWriter
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
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getValueAsString());
        }
        if (isset($this->dateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_DATE_TIME, $this->dateTime->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->status)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STATUS]
                || $this->status->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STATUS]);
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
        if (isset($this->dateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATE_TIME]
                || $this->dateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATE_TIME);
            $this->dateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATE_TIME]);
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
        if ($rootOpened ?? false) {
            $xw->endElement();
        }
        if ($docStarted ?? false) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|\stdClass $decoded
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRNutritionOrder $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRNutritionOrder
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $decoded,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
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
        if (is_string($decoded)) {
            $decoded = json_decode(json: $decoded,
                                associative: false,
                                depth: $config->getJSONDecodeMaxDepth(),
                                flags: $config->getJSONDecodeOpts());
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->identifier) || property_exists($decoded, self::FIELD_IDENTIFIER)) {
            if (is_object($decoded->identifier)) {
                $vals = [$decoded->identifier];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER, true);
            } else {
                $vals = $decoded->identifier;
            }
            foreach($vals as $v) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->status)
            || isset($decoded->_status)
            || property_exists($decoded, self::FIELD_STATUS)
            || property_exists($decoded, self::FIELD_STATUS_EXT)) {
            $v = $decoded->_status ?? new \stdClass();
            $v->value = $decoded->status ?? null;
            $type->setStatus(FHIRNutritionOrderStatus::jsonUnserialize($v, $config));
        }
        if (isset($decoded->patient) || property_exists($decoded, self::FIELD_PATIENT)) {
            if (is_array($decoded->patient)) {
                $type->setPatient(FHIRReference::jsonUnserialize(reset($decoded->patient), $config));
            } else {
                $type->setPatient(FHIRReference::jsonUnserialize($decoded->patient, $config));
            }
        }
        if (isset($decoded->encounter) || property_exists($decoded, self::FIELD_ENCOUNTER)) {
            if (is_array($decoded->encounter)) {
                $type->setEncounter(FHIRReference::jsonUnserialize(reset($decoded->encounter), $config));
            } else {
                $type->setEncounter(FHIRReference::jsonUnserialize($decoded->encounter, $config));
            }
        }
        if (isset($decoded->dateTime)
            || isset($decoded->_dateTime)
            || property_exists($decoded, self::FIELD_DATE_TIME)
            || property_exists($decoded, self::FIELD_DATE_TIME_EXT)) {
            $v = $decoded->_dateTime ?? new \stdClass();
            $v->value = $decoded->dateTime ?? null;
            $type->setDateTime(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->orderer) || property_exists($decoded, self::FIELD_ORDERER)) {
            if (is_array($decoded->orderer)) {
                $type->setOrderer(FHIRReference::jsonUnserialize(reset($decoded->orderer), $config));
            } else {
                $type->setOrderer(FHIRReference::jsonUnserialize($decoded->orderer, $config));
            }
        }
        if (isset($decoded->allergyIntolerance) || property_exists($decoded, self::FIELD_ALLERGY_INTOLERANCE)) {
            if (is_object($decoded->allergyIntolerance)) {
                $vals = [$decoded->allergyIntolerance];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ALLERGY_INTOLERANCE, true);
            } else {
                $vals = $decoded->allergyIntolerance;
            }
            foreach($vals as $v) {
                $type->addAllergyIntolerance(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->foodPreferenceModifier) || property_exists($decoded, self::FIELD_FOOD_PREFERENCE_MODIFIER)) {
            if (is_object($decoded->foodPreferenceModifier)) {
                $vals = [$decoded->foodPreferenceModifier];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_FOOD_PREFERENCE_MODIFIER, true);
            } else {
                $vals = $decoded->foodPreferenceModifier;
            }
            foreach($vals as $v) {
                $type->addFoodPreferenceModifier(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->excludeFoodModifier) || property_exists($decoded, self::FIELD_EXCLUDE_FOOD_MODIFIER)) {
            if (is_object($decoded->excludeFoodModifier)) {
                $vals = [$decoded->excludeFoodModifier];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_EXCLUDE_FOOD_MODIFIER, true);
            } else {
                $vals = $decoded->excludeFoodModifier;
            }
            foreach($vals as $v) {
                $type->addExcludeFoodModifier(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->oralDiet) || property_exists($decoded, self::FIELD_ORAL_DIET)) {
            if (is_array($decoded->oralDiet)) {
                $type->setOralDiet(FHIRNutritionOrderOralDiet::jsonUnserialize(reset($decoded->oralDiet), $config));
            } else {
                $type->setOralDiet(FHIRNutritionOrderOralDiet::jsonUnserialize($decoded->oralDiet, $config));
            }
        }
        if (isset($decoded->supplement) || property_exists($decoded, self::FIELD_SUPPLEMENT)) {
            if (is_object($decoded->supplement)) {
                $vals = [$decoded->supplement];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_SUPPLEMENT, true);
            } else {
                $vals = $decoded->supplement;
            }
            foreach($vals as $v) {
                $type->addSupplement(FHIRNutritionOrderSupplement::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->enteralFormula) || property_exists($decoded, self::FIELD_ENTERAL_FORMULA)) {
            if (is_array($decoded->enteralFormula)) {
                $type->setEnteralFormula(FHIRNutritionOrderEnteralFormula::jsonUnserialize(reset($decoded->enteralFormula), $config));
            } else {
                $type->setEnteralFormula(FHIRNutritionOrderEnteralFormula::jsonUnserialize($decoded->enteralFormula, $config));
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
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER) && 1 === count($this->identifier)) {
                $out->identifier = $this->identifier[0];
            } else {
                $out->identifier = $this->identifier;
            }
        }
        if (isset($this->status)) {
            if (null !== ($val = $this->status->getValue())) {
                $out->status = $val;
            }
            if ($this->status->_nonValueFieldDefined()) {
                $ext = $this->status->jsonSerialize();
                unset($ext->value);
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
            if ($this->dateTime->_nonValueFieldDefined()) {
                $ext = $this->dateTime->jsonSerialize();
                unset($ext->value);
                $out->_dateTime = $ext;
            }
        }
        if (isset($this->orderer)) {
            $out->orderer = $this->orderer;
        }
        if (isset($this->allergyIntolerance) && [] !== $this->allergyIntolerance) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ALLERGY_INTOLERANCE) && 1 === count($this->allergyIntolerance)) {
                $out->allergyIntolerance = $this->allergyIntolerance[0];
            } else {
                $out->allergyIntolerance = $this->allergyIntolerance;
            }
        }
        if (isset($this->foodPreferenceModifier) && [] !== $this->foodPreferenceModifier) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_FOOD_PREFERENCE_MODIFIER) && 1 === count($this->foodPreferenceModifier)) {
                $out->foodPreferenceModifier = $this->foodPreferenceModifier[0];
            } else {
                $out->foodPreferenceModifier = $this->foodPreferenceModifier;
            }
        }
        if (isset($this->excludeFoodModifier) && [] !== $this->excludeFoodModifier) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_EXCLUDE_FOOD_MODIFIER) && 1 === count($this->excludeFoodModifier)) {
                $out->excludeFoodModifier = $this->excludeFoodModifier[0];
            } else {
                $out->excludeFoodModifier = $this->excludeFoodModifier;
            }
        }
        if (isset($this->oralDiet)) {
            $out->oralDiet = $this->oralDiet;
        }
        if (isset($this->supplement) && [] !== $this->supplement) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_SUPPLEMENT) && 1 === count($this->supplement)) {
                $out->supplement = $this->supplement[0];
            } else {
                $out->supplement = $this->supplement;
            }
        }
        if (isset($this->enteralFormula)) {
            $out->enteralFormula = $this->enteralFormula;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}