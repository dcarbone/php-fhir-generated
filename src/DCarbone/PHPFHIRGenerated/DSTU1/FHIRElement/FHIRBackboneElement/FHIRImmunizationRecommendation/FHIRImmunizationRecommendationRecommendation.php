<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 30th, 2024 22:23+0000
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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter;

/**
 * A patient's point-of-time immunization status and recommendation with optional
 * supporting justification.
 *
 * Class FHIRImmunizationRecommendationRecommendation
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation
 */
class FHIRImmunizationRecommendationRecommendation extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION;

    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_VACCINE_TYPE = 'vaccineType';
    const FIELD_DOSE_NUMBER = 'doseNumber';
    const FIELD_DOSE_NUMBER_EXT = '_doseNumber';
    const FIELD_FORECAST_STATUS = 'forecastStatus';
    const FIELD_DATE_CRITERION = 'dateCriterion';
    const FIELD_PROTOCOL = 'protocol';
    const FIELD_SUPPORTING_IMMUNIZATION = 'supportingImmunization';
    const FIELD_SUPPORTING_PATIENT_INFORMATION = 'supportingPatientInformation';

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the immunization recommendation was created.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $date = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine that pertains to the recommendation.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $vaccineType = null;
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This indicates the next recommended dose number (e.g. dose 2 is the next
     * recommended dose).
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $doseNumber = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine administration status.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $forecastStatus = null;
    /**
     * A patient's point-of-time immunization status and recommendation with optional
     * supporting justification.
     *
     * Vaccine date recommendations - e.g. earliest date to administer, latest date to
     * administer, etc.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[]
     */
    protected null|array $dateCriterion = [];
    /**
     * A patient's point-of-time immunization status and recommendation with optional
     * supporting justification.
     *
     * Contains information about the protocol under which the vaccine was
     * administered.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol
     */
    protected null|FHIRImmunizationRecommendationProtocol $protocol = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Immunization event history that supports the status and recommendation.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    protected null|array $supportingImmunization = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient Information that supports the status and recommendation. This includes
     * patient observations, adverse reactions and allergy/intolerance information.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    protected null|array $supportingPatientInformation = [];

    /**
     * Validation map for fields in type ImmunizationRecommendation.Recommendation
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_DATE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_FORECAST_STATUS => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_VACCINE_TYPE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRImmunizationRecommendationRecommendation Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_DATE, $data) || array_key_exists(self::FIELD_DATE_EXT, $data)) {
            $value = $data[self::FIELD_DATE] ?? null;
            $ext = (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT])) ? $data[self::FIELD_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDate($value);
                } else if (is_array($value)) {
                    $this->setDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDate(new FHIRDateTime($ext));
            } else {
                $this->setDate(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_VACCINE_TYPE, $data)) {
            if ($data[self::FIELD_VACCINE_TYPE] instanceof FHIRCodeableConcept) {
                $this->setVaccineType($data[self::FIELD_VACCINE_TYPE]);
            } else {
                $this->setVaccineType(new FHIRCodeableConcept($data[self::FIELD_VACCINE_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_DOSE_NUMBER, $data) || array_key_exists(self::FIELD_DOSE_NUMBER_EXT, $data)) {
            $value = $data[self::FIELD_DOSE_NUMBER] ?? null;
            $ext = (isset($data[self::FIELD_DOSE_NUMBER_EXT]) && is_array($data[self::FIELD_DOSE_NUMBER_EXT])) ? $data[self::FIELD_DOSE_NUMBER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setDoseNumber($value);
                } else if (is_array($value)) {
                    $this->setDoseNumber(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setDoseNumber(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDoseNumber(new FHIRInteger($ext));
            } else {
                $this->setDoseNumber(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_FORECAST_STATUS, $data)) {
            if ($data[self::FIELD_FORECAST_STATUS] instanceof FHIRCodeableConcept) {
                $this->setForecastStatus($data[self::FIELD_FORECAST_STATUS]);
            } else {
                $this->setForecastStatus(new FHIRCodeableConcept($data[self::FIELD_FORECAST_STATUS]));
            }
        }
        if (array_key_exists(self::FIELD_DATE_CRITERION, $data)) {
            if (is_array($data[self::FIELD_DATE_CRITERION])) {
                foreach($data[self::FIELD_DATE_CRITERION] as $v) {
                    if ($v instanceof FHIRImmunizationRecommendationDateCriterion) {
                        $this->addDateCriterion($v);
                    } else {
                        $this->addDateCriterion(new FHIRImmunizationRecommendationDateCriterion($v));
                    }
                }
            } elseif ($data[self::FIELD_DATE_CRITERION] instanceof FHIRImmunizationRecommendationDateCriterion) {
                $this->addDateCriterion($data[self::FIELD_DATE_CRITERION]);
            } else {
                $this->addDateCriterion(new FHIRImmunizationRecommendationDateCriterion($data[self::FIELD_DATE_CRITERION]));
            }
        }
        if (array_key_exists(self::FIELD_PROTOCOL, $data)) {
            if ($data[self::FIELD_PROTOCOL] instanceof FHIRImmunizationRecommendationProtocol) {
                $this->setProtocol($data[self::FIELD_PROTOCOL]);
            } else {
                $this->setProtocol(new FHIRImmunizationRecommendationProtocol($data[self::FIELD_PROTOCOL]));
            }
        }
        if (array_key_exists(self::FIELD_SUPPORTING_IMMUNIZATION, $data)) {
            if (is_array($data[self::FIELD_SUPPORTING_IMMUNIZATION])) {
                foreach($data[self::FIELD_SUPPORTING_IMMUNIZATION] as $v) {
                    if ($v instanceof FHIRResourceReference) {
                        $this->addSupportingImmunization($v);
                    } else {
                        $this->addSupportingImmunization(new FHIRResourceReference($v));
                    }
                }
            } elseif ($data[self::FIELD_SUPPORTING_IMMUNIZATION] instanceof FHIRResourceReference) {
                $this->addSupportingImmunization($data[self::FIELD_SUPPORTING_IMMUNIZATION]);
            } else {
                $this->addSupportingImmunization(new FHIRResourceReference($data[self::FIELD_SUPPORTING_IMMUNIZATION]));
            }
        }
        if (array_key_exists(self::FIELD_SUPPORTING_PATIENT_INFORMATION, $data)) {
            if (is_array($data[self::FIELD_SUPPORTING_PATIENT_INFORMATION])) {
                foreach($data[self::FIELD_SUPPORTING_PATIENT_INFORMATION] as $v) {
                    if ($v instanceof FHIRResourceReference) {
                        $this->addSupportingPatientInformation($v);
                    } else {
                        $this->addSupportingPatientInformation(new FHIRResourceReference($v));
                    }
                }
            } elseif ($data[self::FIELD_SUPPORTING_PATIENT_INFORMATION] instanceof FHIRResourceReference) {
                $this->addSupportingPatientInformation($data[self::FIELD_SUPPORTING_PATIENT_INFORMATION]);
            } else {
                $this->addSupportingPatientInformation(new FHIRResourceReference($data[self::FIELD_SUPPORTING_PATIENT_INFORMATION]));
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the immunization recommendation was created.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    public function getDate(): null|FHIRDateTime
    {
        return $this->date;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $date
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $date && !($date instanceof FHIRDateTime)) {
            $date = new FHIRDateTime($date);
        }
        $this->_trackValueSet($this->date, $date);
        if (!isset($this->_xmlLocations[self::FIELD_DATE])) {
            $this->_xmlLocations[self::FIELD_DATE] = [];
        }
        $this->_xmlLocations[self::FIELD_DATE][0] = $xmlLocation;
        $this->date = $date;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getVaccineType(): null|FHIRCodeableConcept
    {
        return $this->vaccineType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine that pertains to the recommendation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $vaccineType
     * @return static
     */
    public function setVaccineType(null|FHIRCodeableConcept $vaccineType = null): self
    {
        if (null === $vaccineType) {
            $vaccineType = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->vaccineType, $vaccineType);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    public function getDoseNumber(): null|FHIRInteger
    {
        return $this->doseNumber;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This indicates the next recommended dose number (e.g. dose 2 is the next
     * recommended dose).
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $doseNumber
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDoseNumber(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $doseNumber = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $doseNumber && !($doseNumber instanceof FHIRInteger)) {
            $doseNumber = new FHIRInteger($doseNumber);
        }
        $this->_trackValueSet($this->doseNumber, $doseNumber);
        if (!isset($this->_xmlLocations[self::FIELD_DOSE_NUMBER])) {
            $this->_xmlLocations[self::FIELD_DOSE_NUMBER] = [];
        }
        $this->_xmlLocations[self::FIELD_DOSE_NUMBER][0] = $xmlLocation;
        $this->doseNumber = $doseNumber;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getForecastStatus(): null|FHIRCodeableConcept
    {
        return $this->forecastStatus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine administration status.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $forecastStatus
     * @return static
     */
    public function setForecastStatus(null|FHIRCodeableConcept $forecastStatus = null): self
    {
        if (null === $forecastStatus) {
            $forecastStatus = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->forecastStatus, $forecastStatus);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[]
     */
    public function getDateCriterion(): null|array
    {
        return $this->dateCriterion;
    }

    /**
     * A patient's point-of-time immunization status and recommendation with optional
     * supporting justification.
     *
     * Vaccine date recommendations - e.g. earliest date to administer, latest date to
     * administer, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion $dateCriterion
     * @return static
     */
    public function addDateCriterion(null|FHIRImmunizationRecommendationDateCriterion $dateCriterion = null): self
    {
        if (null === $dateCriterion) {
            $dateCriterion = new FHIRImmunizationRecommendationDateCriterion();
        }
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion ...$dateCriterion
     * @return static
     */
    public function setDateCriterion(FHIRImmunizationRecommendationDateCriterion ...$dateCriterion): self
    {
        if ([] !== $this->dateCriterion) {
            $this->_trackValuesRemoved(count($this->dateCriterion));
            $this->dateCriterion = [];
        }
        if ([] === $dateCriterion) {
            return $this;
        }
        foreach($dateCriterion as $v) {
            $this->addDateCriterion($v);
        }
        return $this;
    }

    /**
     * A patient's point-of-time immunization status and recommendation with optional
     * supporting justification.
     *
     * Contains information about the protocol under which the vaccine was
     * administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol
     */
    public function getProtocol(): null|FHIRImmunizationRecommendationProtocol
    {
        return $this->protocol;
    }

    /**
     * A patient's point-of-time immunization status and recommendation with optional
     * supporting justification.
     *
     * Contains information about the protocol under which the vaccine was
     * administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol $protocol
     * @return static
     */
    public function setProtocol(null|FHIRImmunizationRecommendationProtocol $protocol = null): self
    {
        if (null === $protocol) {
            $protocol = new FHIRImmunizationRecommendationProtocol();
        }
        $this->_trackValueSet($this->protocol, $protocol);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    public function getSupportingImmunization(): null|array
    {
        return $this->supportingImmunization;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Immunization event history that supports the status and recommendation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $supportingImmunization
     * @return static
     */
    public function addSupportingImmunization(null|FHIRResourceReference $supportingImmunization = null): self
    {
        if (null === $supportingImmunization) {
            $supportingImmunization = new FHIRResourceReference();
        }
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference ...$supportingImmunization
     * @return static
     */
    public function setSupportingImmunization(FHIRResourceReference ...$supportingImmunization): self
    {
        if ([] !== $this->supportingImmunization) {
            $this->_trackValuesRemoved(count($this->supportingImmunization));
            $this->supportingImmunization = [];
        }
        if ([] === $supportingImmunization) {
            return $this;
        }
        foreach($supportingImmunization as $v) {
            $this->addSupportingImmunization($v);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    public function getSupportingPatientInformation(): null|array
    {
        return $this->supportingPatientInformation;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient Information that supports the status and recommendation. This includes
     * patient observations, adverse reactions and allergy/intolerance information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $supportingPatientInformation
     * @return static
     */
    public function addSupportingPatientInformation(null|FHIRResourceReference $supportingPatientInformation = null): self
    {
        if (null === $supportingPatientInformation) {
            $supportingPatientInformation = new FHIRResourceReference();
        }
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference ...$supportingPatientInformation
     * @return static
     */
    public function setSupportingPatientInformation(FHIRResourceReference ...$supportingPatientInformation): self
    {
        if ([] !== $this->supportingPatientInformation) {
            $this->_trackValuesRemoved(count($this->supportingPatientInformation));
            $this->supportingPatientInformation = [];
        }
        if ([] === $supportingPatientInformation) {
            return $this;
        }
        foreach($supportingPatientInformation as $v) {
            $this->addSupportingPatientInformation($v);
        }
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
        if (null !== ($v = $this->getDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVaccineType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VACCINE_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDoseNumber())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOSE_NUMBER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getForecastStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FORECAST_STATUS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDateCriterion())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DATE_CRITERION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getProtocol())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROTOCOL] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSupportingImmunization())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUPPORTING_IMMUNIZATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSupportingPatientInformation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUPPORTING_PATIENT_INFORMATION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE])) {
            $v = $this->getDate();
            foreach($validationRules[self::FIELD_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE])) {
                        $errs[self::FIELD_DATE] = [];
                    }
                    $errs[self::FIELD_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VACCINE_TYPE])) {
            $v = $this->getVaccineType();
            foreach($validationRules[self::FIELD_VACCINE_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_VACCINE_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VACCINE_TYPE])) {
                        $errs[self::FIELD_VACCINE_TYPE] = [];
                    }
                    $errs[self::FIELD_VACCINE_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_NUMBER])) {
            $v = $this->getDoseNumber();
            foreach($validationRules[self::FIELD_DOSE_NUMBER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_DOSE_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_NUMBER])) {
                        $errs[self::FIELD_DOSE_NUMBER] = [];
                    }
                    $errs[self::FIELD_DOSE_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FORECAST_STATUS])) {
            $v = $this->getForecastStatus();
            foreach($validationRules[self::FIELD_FORECAST_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_FORECAST_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FORECAST_STATUS])) {
                        $errs[self::FIELD_FORECAST_STATUS] = [];
                    }
                    $errs[self::FIELD_FORECAST_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE_CRITERION])) {
            $v = $this->getDateCriterion();
            foreach($validationRules[self::FIELD_DATE_CRITERION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_DATE_CRITERION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE_CRITERION])) {
                        $errs[self::FIELD_DATE_CRITERION] = [];
                    }
                    $errs[self::FIELD_DATE_CRITERION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROTOCOL])) {
            $v = $this->getProtocol();
            foreach($validationRules[self::FIELD_PROTOCOL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_PROTOCOL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROTOCOL])) {
                        $errs[self::FIELD_PROTOCOL] = [];
                    }
                    $errs[self::FIELD_PROTOCOL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUPPORTING_IMMUNIZATION])) {
            $v = $this->getSupportingImmunization();
            foreach($validationRules[self::FIELD_SUPPORTING_IMMUNIZATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_SUPPORTING_IMMUNIZATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUPPORTING_IMMUNIZATION])) {
                        $errs[self::FIELD_SUPPORTING_IMMUNIZATION] = [];
                    }
                    $errs[self::FIELD_SUPPORTING_IMMUNIZATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUPPORTING_PATIENT_INFORMATION])) {
            $v = $this->getSupportingPatientInformation();
            foreach($validationRules[self::FIELD_SUPPORTING_PATIENT_INFORMATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_SUPPORTING_PATIENT_INFORMATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUPPORTING_PATIENT_INFORMATION])) {
                        $errs[self::FIELD_SUPPORTING_PATIENT_INFORMATION] = [];
                    }
                    $errs[self::FIELD_SUPPORTING_PATIENT_INFORMATION][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
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
        } else if (!($type instanceof FHIRImmunizationRecommendationRecommendation)) {
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
            if (self::FIELD_DATE === $childName) {
                $type->setDate(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VACCINE_TYPE === $childName) {
                $type->setVaccineType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DOSE_NUMBER === $childName) {
                $type->setDoseNumber(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_FORECAST_STATUS === $childName) {
                $type->setForecastStatus(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATE_CRITERION === $childName) {
                $type->addDateCriterion(FHIRImmunizationRecommendationDateCriterion::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PROTOCOL === $childName) {
                $type->setProtocol(FHIRImmunizationRecommendationProtocol::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUPPORTING_IMMUNIZATION === $childName) {
                $type->addSupportingImmunization(FHIRResourceReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUPPORTING_PATIENT_INFORMATION === $childName) {
                $type->addSupportingPatientInformation(FHIRResourceReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_DATE])) {
            $pt = $type->getDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDate((string)$attributes[self::FIELD_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DOSE_NUMBER])) {
            $pt = $type->getDoseNumber();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DOSE_NUMBER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDoseNumber((string)$attributes[self::FIELD_DOSE_NUMBER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'ImmunizationRecommendationRecommendation', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDate())) {
            $xw->writeAttribute(self::FIELD_DATE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DOSE_NUMBER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDoseNumber())) {
            $xw->writeAttribute(self::FIELD_DOSE_NUMBER, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_xmlLocations[self::FIELD_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDate())) {
            $xw->startElement(self::FIELD_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getVaccineType())) {
            $xw->startElement(self::FIELD_VACCINE_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DOSE_NUMBER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDoseNumber())) {
            $xw->startElement(self::FIELD_DOSE_NUMBER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getForecastStatus())) {
            $xw->startElement(self::FIELD_FORECAST_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getDateCriterion() as $v) {
            $xw->startElement(self::FIELD_DATE_CRITERION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getProtocol())) {
            $xw->startElement(self::FIELD_PROTOCOL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getSupportingImmunization() as $v) {
            $xw->startElement(self::FIELD_SUPPORTING_IMMUNIZATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getSupportingPatientInformation() as $v) {
            $xw->startElement(self::FIELD_SUPPORTING_PATIENT_INFORMATION);
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
        if (null !== ($v = $this->getDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getVaccineType())) {
            $out->{self::FIELD_VACCINE_TYPE} = $v;
        }
        if (null !== ($v = $this->getDoseNumber())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DOSE_NUMBER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DOSE_NUMBER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getForecastStatus())) {
            $out->{self::FIELD_FORECAST_STATUS} = $v;
        }
        if ([] !== ($vs = $this->getDateCriterion())) {
            $out->{self::FIELD_DATE_CRITERION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_DATE_CRITERION}[] = $v;
            }
        }
        if (null !== ($v = $this->getProtocol())) {
            $out->{self::FIELD_PROTOCOL} = $v;
        }
        if ([] !== ($vs = $this->getSupportingImmunization())) {
            $out->{self::FIELD_SUPPORTING_IMMUNIZATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SUPPORTING_IMMUNIZATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getSupportingPatientInformation())) {
            $out->{self::FIELD_SUPPORTING_PATIENT_INFORMATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SUPPORTING_PATIENT_INFORMATION}[] = $v;
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