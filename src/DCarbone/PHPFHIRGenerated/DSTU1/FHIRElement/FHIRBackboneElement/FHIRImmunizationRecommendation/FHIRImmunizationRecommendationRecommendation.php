<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 23:43+0000
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

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_DATE_CRITERION = 'dateCriterion';
    const FIELD_DATE_CRITERION_EXT = '_dateCriterion';
    const FIELD_DOSE_NUMBER = 'doseNumber';
    const FIELD_DOSE_NUMBER_EXT = '_doseNumber';
    const FIELD_FORECAST_STATUS = 'forecastStatus';
    const FIELD_PROTOCOL = 'protocol';
    const FIELD_SUPPORTING_IMMUNIZATION = 'supportingImmunization';
    const FIELD_SUPPORTING_PATIENT_INFORMATION = 'supportingPatientInformation';
    const FIELD_VACCINE_TYPE = 'vaccineType';

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date the immunization recommendation was created.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    private $date = null;
    /**
     * A patient's point-of-time immunization status and recommendation with optional
     * supporting justification.
     *
     * Vaccine date recommendations - e.g. earliest date to administer, latest date to
     * administer, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[]
     */
    private $dateCriterion = [];
    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * This indicates the next recommended dose number (e.g. dose 2 is the next
     * recommended dose).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    private $doseNumber = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Vaccine administration status.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    private $forecastStatus = null;
    /**
     * A patient's point-of-time immunization status and recommendation with optional
     * supporting justification.
     *
     * Contains information about the protocol under which the vaccine was
     * administered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol
     */
    private $protocol = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Immunization event history that supports the status and recommendation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    private $supportingImmunization = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Patient Information that supports the status and recommendation. This includes
     * patient observations, adverse reactions and allergy/intolerance information.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    private $supportingPatientInformation = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Vaccine that pertains to the recommendation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    private $vaccineType = null;

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
        if (isset($data[self::FIELD_DATE])) {
            $ext = (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT]))
                ? $data[self::FIELD_DATE_EXT]
                : null;
            if ($data[self::FIELD_DATE] instanceof FHIRDateTime) {
                $this->setDate($data[self::FIELD_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_DATE])) {
                $this->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_DATE]] + $ext));
            } else {
                $this->setDate(new FHIRDateTime($data[self::FIELD_DATE]));
            }
        }
        if (isset($data[self::FIELD_DATE_CRITERION])) {
            $ext = (isset($data[self::FIELD_DATE_CRITERION_EXT]) && is_array($data[self::FIELD_DATE_CRITERION_EXT]))
                ? $data[self::FIELD_DATE_CRITERION_EXT]
                : null;
            if (is_array($data[self::FIELD_DATE_CRITERION])) {
                foreach($data[self::FIELD_DATE_CRITERION] as $i => $v) {
                    if ($v instanceof FHIRImmunizationRecommendationDateCriterion) {
                        $this->addDateCriterion($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addDateCriterion(new FHIRImmunizationRecommendationDateCriterion([FHIRImmunizationRecommendationDateCriterion::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addDateCriterion(new FHIRImmunizationRecommendationDateCriterion($v));
                    }
                }
            } elseif ($data[self::FIELD_DATE_CRITERION] instanceof FHIRImmunizationRecommendationDateCriterion) {
                $this->addDateCriterion($data[self::FIELD_DATE_CRITERION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DATE_CRITERION])) {
                $this->addDateCriterion(new FHIRImmunizationRecommendationDateCriterion([FHIRImmunizationRecommendationDateCriterion::FIELD_VALUE => $data[self::FIELD_DATE_CRITERION]] + $ext));
            } else {
                $this->addDateCriterion(new FHIRImmunizationRecommendationDateCriterion($data[self::FIELD_DATE_CRITERION]));
            }
        }
        if (isset($data[self::FIELD_DOSE_NUMBER])) {
            $ext = (isset($data[self::FIELD_DOSE_NUMBER_EXT]) && is_array($data[self::FIELD_DOSE_NUMBER_EXT]))
                ? $data[self::FIELD_DOSE_NUMBER_EXT]
                : null;
            if ($data[self::FIELD_DOSE_NUMBER] instanceof FHIRInteger) {
                $this->setDoseNumber($data[self::FIELD_DOSE_NUMBER]);
            } elseif ($ext && is_scalar($data[self::FIELD_DOSE_NUMBER])) {
                $this->setDoseNumber(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_DOSE_NUMBER]] + $ext));
            } else {
                $this->setDoseNumber(new FHIRInteger($data[self::FIELD_DOSE_NUMBER]));
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
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
        return "<ImmunizationRecommendationRecommendation{$xmlns}></ImmunizationRecommendationRecommendation>";
    }


    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date the immunization recommendation was created.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $date
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
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
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
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
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
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
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * This indicates the next recommended dose number (e.g. dose 2 is the next
     * recommended dose).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $doseNumber
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
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
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Vaccine administration status.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $forecastStatus
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
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
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     */
    public function setProtocol(FHIRImmunizationRecommendationProtocol $protocol = null)
    {
        $this->protocol = $protocol;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Immunization event history that supports the status and recommendation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $supportingImmunization
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     */
    public function addSupportingImmunization(FHIRResourceReference $supportingImmunization = null)
    {
        $this->supportingImmunization[] = $supportingImmunization;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Immunization event history that supports the status and recommendation.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[] $supportingImmunization
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
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
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Patient Information that supports the status and recommendation. This includes
     * patient observations, adverse reactions and allergy/intolerance information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $supportingPatientInformation
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     */
    public function addSupportingPatientInformation(FHIRResourceReference $supportingPatientInformation = null)
    {
        $this->supportingPatientInformation[] = $supportingPatientInformation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Patient Information that supports the status and recommendation. This includes
     * patient observations, adverse reactions and allergy/intolerance information.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[] $supportingPatientInformation
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
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
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Vaccine that pertains to the recommendation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $vaccineType
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     */
    public function setVaccineType(FHIRCodeableConcept $vaccineType = null)
    {
        $this->vaccineType = $vaccineType;
        return $this;
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
        if (isset($attributes->date)) {
            $type->setDate((string)$attributes->date);
        }
        if (isset($children->date)) {
            $type->setDate(FHIRDateTime::xmlUnserialize($children->date));
        }
        if (isset($children->dateCriterion)) {
            foreach($children->dateCriterion as $child) {
                $type->addDateCriterion(FHIRImmunizationRecommendationDateCriterion::xmlUnserialize($child));
            }
        }
        if (isset($attributes->doseNumber)) {
            $type->setDoseNumber((string)$attributes->doseNumber);
        }
        if (isset($children->doseNumber)) {
            $type->setDoseNumber(FHIRInteger::xmlUnserialize($children->doseNumber));
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
            $a[self::FIELD_DATE_EXT] = $v;
        }
        if ([] !== ($vs = $this->getDateCriterion())) {
            $a[self::FIELD_DATE_CRITERION] = $vs;
        }
        if (null !== ($v = $this->getDoseNumber())) {
            $a[self::FIELD_DOSE_NUMBER] = $v->getValue();
            $a[self::FIELD_DOSE_NUMBER_EXT] = $v;
        }
        if (null !== ($v = $this->getForecastStatus())) {
            $a[self::FIELD_FORECAST_STATUS] = $v;
        }
        if (null !== ($v = $this->getProtocol())) {
            $a[self::FIELD_PROTOCOL] = $v;
        }
        if ([] !== ($vs = $this->getSupportingImmunization())) {
            $a[self::FIELD_SUPPORTING_IMMUNIZATION] = $vs;
        }
        if ([] !== ($vs = $this->getSupportingPatientInformation())) {
            $a[self::FIELD_SUPPORTING_PATIENT_INFORMATION] = $vs;
        }
        if (null !== ($v = $this->getVaccineType())) {
            $a[self::FIELD_VACCINE_TYPE] = $v;
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