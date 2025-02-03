<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 3rd, 2025 17:37+0000
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;

/**
 * A patient's point-of-time immunization status and recommendation with optional
 * supporting justification.
 */
class FHIRImmunizationRecommendationRecommendation extends FHIRBackboneElement
{
    use TypeValidationsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION;

    /* class_default.php:47 */
    public const FIELD_DATE = 'date';
    public const FIELD_DATE_EXT = '_date';
    public const FIELD_VACCINE_TYPE = 'vaccineType';
    public const FIELD_DOSE_NUMBER = 'doseNumber';
    public const FIELD_DOSE_NUMBER_EXT = '_doseNumber';
    public const FIELD_FORECAST_STATUS = 'forecastStatus';
    public const FIELD_DATE_CRITERION = 'dateCriterion';
    public const FIELD_PROTOCOL = 'protocol';
    public const FIELD_SUPPORTING_IMMUNIZATION = 'supportingImmunization';
    public const FIELD_SUPPORTING_PATIENT_INFORMATION = 'supportingPatientInformation';

    /* class_default.php:66 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_DATE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_VACCINE_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_FORECAST_STATUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:95 */
    private array $_valueXMLLocations = [
        self::FIELD_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DOSE_NUMBER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:111 */
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the immunization recommendation was created.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $date;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine that pertains to the recommendation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $vaccineType;
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This indicates the next recommended dose number (e.g. dose 2 is the next
     * recommended dose).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $doseNumber;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine administration status.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $forecastStatus;
    /**
     * A patient's point-of-time immunization status and recommendation with optional
     * supporting justification.
     *
     * Vaccine date recommendations - e.g. earliest date to administer, latest date to
     * administer, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[] 
     */
    protected array $dateCriterion;
    /**
     * A patient's point-of-time immunization status and recommendation with optional
     * supporting justification.
     *
     * Contains information about the protocol under which the vaccine was
     * administered.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol 
     */
    protected FHIRImmunizationRecommendationProtocol $protocol;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Immunization event history that supports the status and recommendation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[] 
     */
    protected array $supportingImmunization;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient Information that supports the status and recommendation. This includes
     * patient observations, adverse reactions and allergy/intolerance information.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[] 
     */
    protected array $supportingPatientInformation;

    /* constructor.php:62 */
    /**
     * FHIRImmunizationRecommendationRecommendation Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $date
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $vaccineType
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $doseNumber
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $forecastStatus
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[] $dateCriterion
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol $protocol
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[] $supportingImmunization
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[] $supportingPatientInformation
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date = null,
                                null|FHIRCodeableConcept $vaccineType = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $doseNumber = null,
                                null|FHIRCodeableConcept $forecastStatus = null,
                                null|iterable $dateCriterion = null,
                                null|FHIRImmunizationRecommendationProtocol $protocol = null,
                                null|iterable $supportingImmunization = null,
                                null|iterable $supportingPatientInformation = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $date) {
            $this->setDate($date);
        }
        if (null !== $vaccineType) {
            $this->setVaccineType($vaccineType);
        }
        if (null !== $doseNumber) {
            $this->setDoseNumber($doseNumber);
        }
        if (null !== $forecastStatus) {
            $this->setForecastStatus($forecastStatus);
        }
        if (null !== $dateCriterion) {
            $this->setDateCriterion(...$dateCriterion);
        }
        if (null !== $protocol) {
            $this->setProtocol($protocol);
        }
        if (null !== $supportingImmunization) {
            $this->setSupportingImmunization(...$supportingImmunization);
        }
        if (null !== $supportingPatientInformation) {
            $this->setSupportingPatientInformation(...$supportingPatientInformation);
        }
    }

    /* class_default.php:143 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:169 */
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the immunization recommendation was created.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime
     */
    public function getDate(): null|FHIRDateTime
    {
        return $this->date ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the immunization recommendation was created.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $date
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $date) {
            unset($this->date);
            return $this;
        }
        if (!($date instanceof FHIRDateTime)) {
            $date = new FHIRDateTime(value: $date);
        }
        $this->date = $date;
        if ($this->_valueXMLLocations[self::FIELD_DATE] !== $valueXMLLocation) {
            $this->_setDateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the date element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DATE];
    }

    /**
     * Set the location the "value" field of the date element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DATE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine that pertains to the recommendation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getVaccineType(): null|FHIRCodeableConcept
    {
        return $this->vaccineType ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine that pertains to the recommendation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $vaccineType
     * @return static
     */
    public function setVaccineType(null|FHIRCodeableConcept $vaccineType): self
    {
        if (null === $vaccineType) {
            unset($this->vaccineType);
            return $this;
        }
        $this->vaccineType = $vaccineType;
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This indicates the next recommended dose number (e.g. dose 2 is the next
     * recommended dose).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger
     */
    public function getDoseNumber(): null|FHIRInteger
    {
        return $this->doseNumber ?? null;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This indicates the next recommended dose number (e.g. dose 2 is the next
     * recommended dose).
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $doseNumber
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDoseNumber(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $doseNumber,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $doseNumber) {
            unset($this->doseNumber);
            return $this;
        }
        if (!($doseNumber instanceof FHIRInteger)) {
            $doseNumber = new FHIRInteger(value: $doseNumber);
        }
        $this->doseNumber = $doseNumber;
        if ($this->_valueXMLLocations[self::FIELD_DOSE_NUMBER] !== $valueXMLLocation) {
            $this->_setDoseNumberValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the doseNumber element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDoseNumberValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DOSE_NUMBER];
    }

    /**
     * Set the location the "value" field of the doseNumber element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDoseNumberValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DOSE_NUMBER] = $valueXMLLocation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine administration status.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getForecastStatus(): null|FHIRCodeableConcept
    {
        return $this->forecastStatus ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine administration status.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $forecastStatus
     * @return static
     */
    public function setForecastStatus(null|FHIRCodeableConcept $forecastStatus): self
    {
        if (null === $forecastStatus) {
            unset($this->forecastStatus);
            return $this;
        }
        $this->forecastStatus = $forecastStatus;
        return $this;
    }

    /**
     * A patient's point-of-time immunization status and recommendation with optional
     * supporting justification.
     *
     * Vaccine date recommendations - e.g. earliest date to administer, latest date to
     * administer, etc.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[]
     */
    public function getDateCriterion(): array
    {
        return $this->dateCriterion ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion>
     */
    public function getDateCriterionIterator(): iterable
    {
        if (!isset($this->dateCriterion)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->dateCriterion);
    }

    /**
     * A patient's point-of-time immunization status and recommendation with optional
     * supporting justification.
     *
     * Vaccine date recommendations - e.g. earliest date to administer, latest date to
     * administer, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion $dateCriterion
     * @return static
     */
    public function addDateCriterion(FHIRImmunizationRecommendationDateCriterion $dateCriterion): self
    {
        if (!isset($this->dateCriterion)) {
            $this->dateCriterion = [];
        }
        $this->dateCriterion[] = $dateCriterion;
        return $this;
    }

    /**
     * A patient's point-of-time immunization status and recommendation with optional
     * supporting justification.
     *
     * Vaccine date recommendations - e.g. earliest date to administer, latest date to
     * administer, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion ...$dateCriterion
     * @return static
     */
    public function setDateCriterion(FHIRImmunizationRecommendationDateCriterion ...$dateCriterion): self
    {
        if ([] === $dateCriterion) {
            unset($this->dateCriterion);
            return $this;
        }
        $this->dateCriterion = $dateCriterion;
        return $this;
    }

    /**
     * A patient's point-of-time immunization status and recommendation with optional
     * supporting justification.
     *
     * Contains information about the protocol under which the vaccine was
     * administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol
     */
    public function getProtocol(): null|FHIRImmunizationRecommendationProtocol
    {
        return $this->protocol ?? null;
    }

    /**
     * A patient's point-of-time immunization status and recommendation with optional
     * supporting justification.
     *
     * Contains information about the protocol under which the vaccine was
     * administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol $protocol
     * @return static
     */
    public function setProtocol(null|FHIRImmunizationRecommendationProtocol $protocol): self
    {
        if (null === $protocol) {
            unset($this->protocol);
            return $this;
        }
        $this->protocol = $protocol;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Immunization event history that supports the status and recommendation.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[]
     */
    public function getSupportingImmunization(): array
    {
        return $this->supportingImmunization ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference>
     */
    public function getSupportingImmunizationIterator(): iterable
    {
        if (!isset($this->supportingImmunization)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->supportingImmunization);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Immunization event history that supports the status and recommendation.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $supportingImmunization
     * @return static
     */
    public function addSupportingImmunization(FHIRResourceReference $supportingImmunization): self
    {
        if (!isset($this->supportingImmunization)) {
            $this->supportingImmunization = [];
        }
        $this->supportingImmunization[] = $supportingImmunization;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Immunization event history that supports the status and recommendation.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference ...$supportingImmunization
     * @return static
     */
    public function setSupportingImmunization(FHIRResourceReference ...$supportingImmunization): self
    {
        if ([] === $supportingImmunization) {
            unset($this->supportingImmunization);
            return $this;
        }
        $this->supportingImmunization = $supportingImmunization;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient Information that supports the status and recommendation. This includes
     * patient observations, adverse reactions and allergy/intolerance information.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[]
     */
    public function getSupportingPatientInformation(): array
    {
        return $this->supportingPatientInformation ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference>
     */
    public function getSupportingPatientInformationIterator(): iterable
    {
        if (!isset($this->supportingPatientInformation)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->supportingPatientInformation);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient Information that supports the status and recommendation. This includes
     * patient observations, adverse reactions and allergy/intolerance information.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $supportingPatientInformation
     * @return static
     */
    public function addSupportingPatientInformation(FHIRResourceReference $supportingPatientInformation): self
    {
        if (!isset($this->supportingPatientInformation)) {
            $this->supportingPatientInformation = [];
        }
        $this->supportingPatientInformation[] = $supportingPatientInformation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient Information that supports the status and recommendation. This includes
     * patient observations, adverse reactions and allergy/intolerance information.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference ...$supportingPatientInformation
     * @return static
     */
    public function setSupportingPatientInformation(FHIRResourceReference ...$supportingPatientInformation): self
    {
        if ([] === $supportingPatientInformation) {
            unset($this->supportingPatientInformation);
            return $this;
        }
        $this->supportingPatientInformation = $supportingPatientInformation;
        return $this;
    }

    /* class_default.php:208 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRImmunizationRecommendationRecommendation)) {
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
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATE === $cen) {
                $type->setDate(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VACCINE_TYPE === $cen) {
                $type->setVaccineType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DOSE_NUMBER === $cen) {
                $type->setDoseNumber(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FORECAST_STATUS === $cen) {
                $type->setForecastStatus(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATE_CRITERION === $cen) {
                $type->addDateCriterion(FHIRImmunizationRecommendationDateCriterion::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROTOCOL === $cen) {
                $type->setProtocol(FHIRImmunizationRecommendationProtocol::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUPPORTING_IMMUNIZATION === $cen) {
                $type->addSupportingImmunization(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUPPORTING_PATIENT_INFORMATION === $cen) {
                $type->addSupportingPatientInformation(FHIRResourceReference::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DATE])) {
            if (isset($type->date)) {
                $type->date->setValue((string)$attributes[self::FIELD_DATE]);
                $type->_setDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDate((string)$attributes[self::FIELD_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DOSE_NUMBER])) {
            if (isset($type->doseNumber)) {
                $type->doseNumber->setValue((string)$attributes[self::FIELD_DOSE_NUMBER]);
                $type->_setDoseNumberValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDoseNumber((string)$attributes[self::FIELD_DOSE_NUMBER], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
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
            $xw->openRootNode('ImmunizationRecommendationRecommendation', $this->_getSourceXMLNS());
        }
        if (isset($this->date) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATE]) {
            $xw->writeAttribute(self::FIELD_DATE, $this->date->_getFormattedValue());
        }
        if (isset($this->doseNumber) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DOSE_NUMBER]) {
            $xw->writeAttribute(self::FIELD_DOSE_NUMBER, $this->doseNumber->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->date)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATE]
                || $this->date->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATE);
            $this->date->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATE]);
            $xw->endElement();
        }
        if (isset($this->vaccineType)) {
            $xw->startElement(self::FIELD_VACCINE_TYPE);
            $this->vaccineType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->doseNumber)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DOSE_NUMBER]
                || $this->doseNumber->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DOSE_NUMBER);
            $this->doseNumber->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DOSE_NUMBER]);
            $xw->endElement();
        }
        if (isset($this->forecastStatus)) {
            $xw->startElement(self::FIELD_FORECAST_STATUS);
            $this->forecastStatus->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dateCriterion)) {
            foreach ($this->dateCriterion as $v) {
                $xw->startElement(self::FIELD_DATE_CRITERION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->protocol)) {
            $xw->startElement(self::FIELD_PROTOCOL);
            $this->protocol->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->supportingImmunization)) {
            foreach ($this->supportingImmunization as $v) {
                $xw->startElement(self::FIELD_SUPPORTING_IMMUNIZATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->supportingPatientInformation)) {
            foreach ($this->supportingPatientInformation as $v) {
                $xw->startElement(self::FIELD_SUPPORTING_PATIENT_INFORMATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
     * @param string|\stdClass|array $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRImmunizationRecommendationRecommendation)) {
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_DATE])
            || isset($json[self::FIELD_DATE_EXT])
            || array_key_exists(self::FIELD_DATE, $json)
            || array_key_exists(self::FIELD_DATE_EXT, $json)) {
            $value = $json[self::FIELD_DATE] ?? null;
            $type->setDate(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_DATE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VACCINE_TYPE]) || array_key_exists(self::FIELD_VACCINE_TYPE, $json)) {
            $type->setVaccineType(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_VACCINE_TYPE], $config));
        }
        if (isset($json[self::FIELD_DOSE_NUMBER])
            || isset($json[self::FIELD_DOSE_NUMBER_EXT])
            || array_key_exists(self::FIELD_DOSE_NUMBER, $json)
            || array_key_exists(self::FIELD_DOSE_NUMBER_EXT, $json)) {
            $value = $json[self::FIELD_DOSE_NUMBER] ?? null;
            $type->setDoseNumber(FHIRInteger::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInteger::FIELD_VALUE => $value]) + ($json[self::FIELD_DOSE_NUMBER_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_FORECAST_STATUS]) || array_key_exists(self::FIELD_FORECAST_STATUS, $json)) {
            $type->setForecastStatus(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_FORECAST_STATUS], $config));
        }
        if (isset($json[self::FIELD_DATE_CRITERION]) || array_key_exists(self::FIELD_DATE_CRITERION, $json)) {
            $vs = $json[self::FIELD_DATE_CRITERION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addDateCriterion(FHIRImmunizationRecommendationDateCriterion::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_PROTOCOL]) || array_key_exists(self::FIELD_PROTOCOL, $json)) {
            $type->setProtocol(FHIRImmunizationRecommendationProtocol::jsonUnserialize($json[self::FIELD_PROTOCOL], $config));
        }
        if (isset($json[self::FIELD_SUPPORTING_IMMUNIZATION]) || array_key_exists(self::FIELD_SUPPORTING_IMMUNIZATION, $json)) {
            $vs = $json[self::FIELD_SUPPORTING_IMMUNIZATION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addSupportingImmunization(FHIRResourceReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_SUPPORTING_PATIENT_INFORMATION]) || array_key_exists(self::FIELD_SUPPORTING_PATIENT_INFORMATION, $json)) {
            $vs = $json[self::FIELD_SUPPORTING_PATIENT_INFORMATION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addSupportingPatientInformation(FHIRResourceReference::jsonUnserialize($v, $config));
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
        if (isset($this->date)) {
            if (null !== ($val = $this->date->getValue())) {
                $out->date = $val;
            }
            if ($this->date->_nonValueFieldDefined()) {
                $ext = $this->date->jsonSerialize();
                unset($ext->value);
                $out->_date = $ext;
            }
        }
        if (isset($this->vaccineType)) {
            $out->vaccineType = $this->vaccineType;
        }
        if (isset($this->doseNumber)) {
            if (null !== ($val = $this->doseNumber->getValue())) {
                $out->doseNumber = $val;
            }
            if ($this->doseNumber->_nonValueFieldDefined()) {
                $ext = $this->doseNumber->jsonSerialize();
                unset($ext->value);
                $out->_doseNumber = $ext;
            }
        }
        if (isset($this->forecastStatus)) {
            $out->forecastStatus = $this->forecastStatus;
        }
        if (isset($this->dateCriterion) && [] !== $this->dateCriterion) {
            $out->dateCriterion = $this->dateCriterion;
        }
        if (isset($this->protocol)) {
            $out->protocol = $this->protocol;
        }
        if (isset($this->supportingImmunization) && [] !== $this->supportingImmunization) {
            $out->supportingImmunization = $this->supportingImmunization;
        }
        if (isset($this->supportingPatientInformation) && [] !== $this->supportingPatientInformation) {
            $out->supportingPatientInformation = $this->supportingPatientInformation;
        }
        return $out;
    }
}