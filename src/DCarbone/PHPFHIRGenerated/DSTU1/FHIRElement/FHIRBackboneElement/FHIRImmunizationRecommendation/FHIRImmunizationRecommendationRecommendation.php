<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

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
    const FIELD_DATE_CRITERION = 'dateCriterion';
    const FIELD_DOSE_NUMBER = 'doseNumber';
    const FIELD_DOSE_NUMBER_EXT = '_doseNumber';
    const FIELD_FORECAST_STATUS = 'forecastStatus';
    const FIELD_PROTOCOL = 'protocol';
    const FIELD_SUPPORTING_IMMUNIZATION = 'supportingImmunization';
    const FIELD_SUPPORTING_PATIENT_INFORMATION = 'supportingPatientInformation';
    const FIELD_VACCINE_TYPE = 'vaccineType';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the immunization recommendation was created.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    protected $date = null;

    /**
     * A patient's point-of-time immunization status and recommendation with optional
     * supporting justification.
     *
     * Vaccine date recommendations - e.g. earliest date to administer, latest date to
     * administer, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[]
     */
    protected $dateCriterion = [];

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This indicates the next recommended dose number (e.g. dose 2 is the next
     * recommended dose).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    protected $doseNumber = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine administration status.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected $forecastStatus = null;

    /**
     * A patient's point-of-time immunization status and recommendation with optional
     * supporting justification.
     *
     * Contains information about the protocol under which the vaccine was
     * administered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol
     */
    protected $protocol = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Immunization event history that supports the status and recommendation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    protected $supportingImmunization = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient Information that supports the status and recommendation. This includes
     * patient observations, adverse reactions and allergy/intolerance information.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    protected $supportingPatientInformation = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine that pertains to the recommendation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected $vaccineType = null;

    /**
     * Validation map for fields in type ImmunizationRecommendation.Recommendation
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRImmunizationRecommendationRecommendation Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunizationRecommendationRecommendation::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DATE]) || isset($data[self::FIELD_DATE_EXT])) {
            if (isset($data[self::FIELD_DATE])) {
                $value = $data[self::FIELD_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT])) {
                $ext = $data[self::FIELD_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDate($value);
                } else if (is_array($value)) {
                    $this->setDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_DATE_CRITERION])) {
            if (is_array($data[self::FIELD_DATE_CRITERION])) {
                foreach($data[self::FIELD_DATE_CRITERION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRImmunizationRecommendationDateCriterion) {
                        $this->addDateCriterion($v);
                    } else {
                        $this->addDateCriterion(new FHIRImmunizationRecommendationDateCriterion($v));
                    }
                }
            } else if ($data[self::FIELD_DATE_CRITERION] instanceof FHIRImmunizationRecommendationDateCriterion) {
                $this->addDateCriterion($data[self::FIELD_DATE_CRITERION]);
            } else {
                $this->addDateCriterion(new FHIRImmunizationRecommendationDateCriterion($data[self::FIELD_DATE_CRITERION]));
            }
        }
        if (isset($data[self::FIELD_DOSE_NUMBER]) || isset($data[self::FIELD_DOSE_NUMBER_EXT])) {
            if (isset($data[self::FIELD_DOSE_NUMBER])) {
                $value = $data[self::FIELD_DOSE_NUMBER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DOSE_NUMBER_EXT]) && is_array($data[self::FIELD_DOSE_NUMBER_EXT])) {
                $ext = $data[self::FIELD_DOSE_NUMBER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setDoseNumber($value);
                } else if (is_array($value)) {
                    $this->setDoseNumber(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setDoseNumber(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDoseNumber(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_FORECAST_STATUS])) {
            if ($data[self::FIELD_FORECAST_STATUS] instanceof FHIRCodeableConcept) {
                $this->setForecastStatus($data[self::FIELD_FORECAST_STATUS]);
            } else {
                $this->setForecastStatus(new FHIRCodeableConcept($data[self::FIELD_FORECAST_STATUS]));
            }
        }
        if (isset($data[self::FIELD_PROTOCOL])) {
            if ($data[self::FIELD_PROTOCOL] instanceof FHIRImmunizationRecommendationProtocol) {
                $this->setProtocol($data[self::FIELD_PROTOCOL]);
            } else {
                $this->setProtocol(new FHIRImmunizationRecommendationProtocol($data[self::FIELD_PROTOCOL]));
            }
        }
        if (isset($data[self::FIELD_SUPPORTING_IMMUNIZATION])) {
            if (is_array($data[self::FIELD_SUPPORTING_IMMUNIZATION])) {
                foreach($data[self::FIELD_SUPPORTING_IMMUNIZATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRResourceReference) {
                        $this->addSupportingImmunization($v);
                    } else {
                        $this->addSupportingImmunization(new FHIRResourceReference($v));
                    }
                }
            } else if ($data[self::FIELD_SUPPORTING_IMMUNIZATION] instanceof FHIRResourceReference) {
                $this->addSupportingImmunization($data[self::FIELD_SUPPORTING_IMMUNIZATION]);
            } else {
                $this->addSupportingImmunization(new FHIRResourceReference($data[self::FIELD_SUPPORTING_IMMUNIZATION]));
            }
        }
        if (isset($data[self::FIELD_SUPPORTING_PATIENT_INFORMATION])) {
            if (is_array($data[self::FIELD_SUPPORTING_PATIENT_INFORMATION])) {
                foreach($data[self::FIELD_SUPPORTING_PATIENT_INFORMATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRResourceReference) {
                        $this->addSupportingPatientInformation($v);
                    } else {
                        $this->addSupportingPatientInformation(new FHIRResourceReference($v));
                    }
                }
            } else if ($data[self::FIELD_SUPPORTING_PATIENT_INFORMATION] instanceof FHIRResourceReference) {
                $this->addSupportingPatientInformation($data[self::FIELD_SUPPORTING_PATIENT_INFORMATION]);
            } else {
                $this->addSupportingPatientInformation(new FHIRResourceReference($data[self::FIELD_SUPPORTING_PATIENT_INFORMATION]));
            }
        }
        if (isset($data[self::FIELD_VACCINE_TYPE])) {
            if ($data[self::FIELD_VACCINE_TYPE] instanceof FHIRCodeableConcept) {
                $this->setVaccineType($data[self::FIELD_VACCINE_TYPE]);
            } else {
                $this->setVaccineType(new FHIRCodeableConcept($data[self::FIELD_VACCINE_TYPE]));
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
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<ImmunizationRecommendationRecommendation{$xmlns}></ImmunizationRecommendationRecommendation>";
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
    public function getDate()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $date
     * @return static
     */
    public function setDate($date = null)
    {
        if (null === $date) {
            $this->date = null;
            return $this;
        }
        if ($date instanceof FHIRDateTime) {
            $this->date = $date;
            return $this;
        }
        $this->date = new FHIRDateTime($date);
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
    public function getDateCriterion()
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
    public function addDateCriterion(FHIRImmunizationRecommendationDateCriterion $dateCriterion = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[] $dateCriterion
     * @return static
     */
    public function setDateCriterion(array $dateCriterion = [])
    {
        $this->dateCriterion = [];
        if ([] === $dateCriterion) {
            return $this;
        }
        foreach($dateCriterion as $v) {
            if ($v instanceof FHIRImmunizationRecommendationDateCriterion) {
                $this->addDateCriterion($v);
            } else {
                $this->addDateCriterion(new FHIRImmunizationRecommendationDateCriterion($v));
            }
        }
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
    public function getDoseNumber()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $doseNumber
     * @return static
     */
    public function setDoseNumber($doseNumber = null)
    {
        if (null === $doseNumber) {
            $this->doseNumber = null;
            return $this;
        }
        if ($doseNumber instanceof FHIRInteger) {
            $this->doseNumber = $doseNumber;
            return $this;
        }
        $this->doseNumber = new FHIRInteger($doseNumber);
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
    public function getForecastStatus()
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
    public function setForecastStatus(FHIRCodeableConcept $forecastStatus = null)
    {
        $this->forecastStatus = $forecastStatus;
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
    public function getProtocol()
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
    public function setProtocol(FHIRImmunizationRecommendationProtocol $protocol = null)
    {
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
    public function getSupportingImmunization()
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
    public function addSupportingImmunization(FHIRResourceReference $supportingImmunization = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[] $supportingImmunization
     * @return static
     */
    public function setSupportingImmunization(array $supportingImmunization = [])
    {
        $this->supportingImmunization = [];
        if ([] === $supportingImmunization) {
            return $this;
        }
        foreach($supportingImmunization as $v) {
            if ($v instanceof FHIRResourceReference) {
                $this->addSupportingImmunization($v);
            } else {
                $this->addSupportingImmunization(new FHIRResourceReference($v));
            }
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
    public function getSupportingPatientInformation()
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
    public function addSupportingPatientInformation(FHIRResourceReference $supportingPatientInformation = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[] $supportingPatientInformation
     * @return static
     */
    public function setSupportingPatientInformation(array $supportingPatientInformation = [])
    {
        $this->supportingPatientInformation = [];
        if ([] === $supportingPatientInformation) {
            return $this;
        }
        foreach($supportingPatientInformation as $v) {
            if ($v instanceof FHIRResourceReference) {
                $this->addSupportingPatientInformation($v);
            } else {
                $this->addSupportingPatientInformation(new FHIRResourceReference($v));
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
     * Vaccine that pertains to the recommendation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getVaccineType()
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
    public function setVaccineType(FHIRCodeableConcept $vaccineType = null)
    {
        $this->vaccineType = $vaccineType;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDateCriterion())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DATE_CRITERION, $i)] = $fieldErrs;
                }
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
        if (null !== ($v = $this->getVaccineType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VACCINE_TYPE] = $fieldErrs;
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
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
                throw new \DomainException(sprintf('FHIRImmunizationRecommendationRecommendation::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRImmunizationRecommendationRecommendation::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRImmunizationRecommendationRecommendation;
        } elseif (!is_object($type) || !($type instanceof FHIRImmunizationRecommendationRecommendation)) {
            throw new \RuntimeException(sprintf(
                'FHIRImmunizationRecommendationRecommendation::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation or null, %s seen.',
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
        if (isset($children->date)) {
            $type->setDate(FHIRDateTime::xmlUnserialize($children->date));
        }
        if (isset($attributes->date)) {
            $pt = $type->getDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->date);
            } else {
                $type->setDate((string)$attributes->date);
            }
        }
        if (isset($children->dateCriterion)) {
            foreach($children->dateCriterion as $child) {
                $type->addDateCriterion(FHIRImmunizationRecommendationDateCriterion::xmlUnserialize($child));
            }
        }
        if (isset($children->doseNumber)) {
            $type->setDoseNumber(FHIRInteger::xmlUnserialize($children->doseNumber));
        }
        if (isset($attributes->doseNumber)) {
            $pt = $type->getDoseNumber();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->doseNumber);
            } else {
                $type->setDoseNumber((string)$attributes->doseNumber);
            }
        }
        if (isset($children->forecastStatus)) {
            $type->setForecastStatus(FHIRCodeableConcept::xmlUnserialize($children->forecastStatus));
        }
        if (isset($children->protocol)) {
            $type->setProtocol(FHIRImmunizationRecommendationProtocol::xmlUnserialize($children->protocol));
        }
        if (isset($children->supportingImmunization)) {
            foreach($children->supportingImmunization as $child) {
                $type->addSupportingImmunization(FHIRResourceReference::xmlUnserialize($child));
            }
        }
        if (isset($children->supportingPatientInformation)) {
            foreach($children->supportingPatientInformation as $child) {
                $type->addSupportingPatientInformation(FHIRResourceReference::xmlUnserialize($child));
            }
        }
        if (isset($children->vaccineType)) {
            $type->setVaccineType(FHIRCodeableConcept::xmlUnserialize($children->vaccineType));
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
        if (null !== ($v = $this->getDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getDateCriterion())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DATE_CRITERION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDoseNumber())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DOSE_NUMBER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getForecastStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FORECAST_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getProtocol())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PROTOCOL, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getSupportingImmunization())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUPPORTING_IMMUNIZATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getSupportingPatientInformation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUPPORTING_PATIENT_INFORMATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getVaccineType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VACCINE_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getDate())) {
            $a[self::FIELD_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_DATE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getDateCriterion())) {
            $a[self::FIELD_DATE_CRITERION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DATE_CRITERION][] = $v;
            }
        }
        if (null !== ($v = $this->getDoseNumber())) {
            $a[self::FIELD_DOSE_NUMBER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_DOSE_NUMBER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getForecastStatus())) {
            $a[self::FIELD_FORECAST_STATUS] = $v;
        }
        if (null !== ($v = $this->getProtocol())) {
            $a[self::FIELD_PROTOCOL] = $v;
        }
        if ([] !== ($vs = $this->getSupportingImmunization())) {
            $a[self::FIELD_SUPPORTING_IMMUNIZATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SUPPORTING_IMMUNIZATION][] = $v;
            }
        }
        if ([] !== ($vs = $this->getSupportingPatientInformation())) {
            $a[self::FIELD_SUPPORTING_PATIENT_INFORMATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SUPPORTING_PATIENT_INFORMATION][] = $v;
            }
        }
        if (null !== ($v = $this->getVaccineType())) {
            $a[self::FIELD_VACCINE_TYPE] = $v;
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
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