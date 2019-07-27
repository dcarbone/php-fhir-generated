<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 27th, 2019 15:55+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * A patient's point-in-time set of recommendations (i.e. forecasting) according to
 * a published schedule with optional supporting justification.
 *
 * Class FHIRImmunizationRecommendationRecommendation
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation
 */
class FHIRImmunizationRecommendationRecommendation extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION;

    const FIELD_CONTRAINDICATED_VACCINE_CODE = 'contraindicatedVaccineCode';
    const FIELD_DATE_CRITERION = 'dateCriterion';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_DOSE_NUMBER_POSITIVE_INT = 'doseNumberPositiveInt';
    const FIELD_DOSE_NUMBER_POSITIVE_INT_EXT = '_doseNumberPositiveInt';
    const FIELD_DOSE_NUMBER_STRING = 'doseNumberString';
    const FIELD_DOSE_NUMBER_STRING_EXT = '_doseNumberString';
    const FIELD_FORECAST_REASON = 'forecastReason';
    const FIELD_FORECAST_STATUS = 'forecastStatus';
    const FIELD_SERIES = 'series';
    const FIELD_SERIES_EXT = '_series';
    const FIELD_SERIES_DOSES_POSITIVE_INT = 'seriesDosesPositiveInt';
    const FIELD_SERIES_DOSES_POSITIVE_INT_EXT = '_seriesDosesPositiveInt';
    const FIELD_SERIES_DOSES_STRING = 'seriesDosesString';
    const FIELD_SERIES_DOSES_STRING_EXT = '_seriesDosesString';
    const FIELD_SUPPORTING_IMMUNIZATION = 'supportingImmunization';
    const FIELD_SUPPORTING_PATIENT_INFORMATION = 'supportingPatientInformation';
    const FIELD_TARGET_DISEASE = 'targetDisease';
    const FIELD_VACCINE_CODE = 'vaccineCode';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Vaccine(s) which should not be used to fulfill the recommendation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $contraindicatedVaccineCode = [];

    /**
     * A patient's point-in-time set of recommendations (i.e. forecasting) according to
     * a published schedule with optional supporting justification.
     *
     * Vaccine date recommendations. For example, earliest date to administer, latest
     * date to administer, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[]
     */
    private $dateCriterion = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $description = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next
     * recommended dose). (choose any one of doseNumber*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    private $doseNumberPositiveInt = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next
     * recommended dose). (choose any one of doseNumber*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $doseNumberString = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The reason for the assigned forecast status.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $forecastReason = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the patient status with respect to the path to immunity for the target
     * disease.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $forecastStatus = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $series = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The recommended number of doses to achieve immunity. (choose any one of
     * seriesDoses*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    private $seriesDosesPositiveInt = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The recommended number of doses to achieve immunity. (choose any one of
     * seriesDoses*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $seriesDosesString = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Immunization event history and/or evaluation that supports the status and
     * recommendation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
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
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $supportingPatientInformation = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The targeted disease for the recommendation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $targetDisease = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Vaccine(s) or vaccine group that pertain to the recommendation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $vaccineCode = [];

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
        if (isset($data[self::FIELD_CONTRAINDICATED_VACCINE_CODE])) {
            if (is_array($data[self::FIELD_CONTRAINDICATED_VACCINE_CODE])) {
                foreach($data[self::FIELD_CONTRAINDICATED_VACCINE_CODE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addContraindicatedVaccineCode($v);
                    } else {
                        $this->addContraindicatedVaccineCode(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_CONTRAINDICATED_VACCINE_CODE] instanceof FHIRCodeableConcept) {
                $this->addContraindicatedVaccineCode($data[self::FIELD_CONTRAINDICATED_VACCINE_CODE]);
            } else {
                $this->addContraindicatedVaccineCode(new FHIRCodeableConcept($data[self::FIELD_CONTRAINDICATED_VACCINE_CODE]));
            }
        }
        if (isset($data[self::FIELD_DATE_CRITERION])) {
            if (is_array($data[self::FIELD_DATE_CRITERION])) {
                foreach($data[self::FIELD_DATE_CRITERION] as $v) {
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
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRString) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DESCRIPTION])) {
                $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
            } else {
                $this->setDescription(new FHIRString($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_DOSE_NUMBER_POSITIVE_INT])) {
            $ext = (isset($data[self::FIELD_DOSE_NUMBER_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_DOSE_NUMBER_POSITIVE_INT_EXT]))
                ? $data[self::FIELD_DOSE_NUMBER_POSITIVE_INT_EXT]
                : null;
            if ($data[self::FIELD_DOSE_NUMBER_POSITIVE_INT] instanceof FHIRPositiveInt) {
                $this->setDoseNumberPositiveInt($data[self::FIELD_DOSE_NUMBER_POSITIVE_INT]);
            } elseif ($ext && is_scalar($data[self::FIELD_DOSE_NUMBER_POSITIVE_INT])) {
                $this->setDoseNumberPositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_DOSE_NUMBER_POSITIVE_INT]] + $ext));
            } else {
                $this->setDoseNumberPositiveInt(new FHIRPositiveInt($data[self::FIELD_DOSE_NUMBER_POSITIVE_INT]));
            }
        }
        if (isset($data[self::FIELD_DOSE_NUMBER_STRING])) {
            $ext = (isset($data[self::FIELD_DOSE_NUMBER_STRING_EXT]) && is_array($data[self::FIELD_DOSE_NUMBER_STRING_EXT]))
                ? $data[self::FIELD_DOSE_NUMBER_STRING_EXT]
                : null;
            if ($data[self::FIELD_DOSE_NUMBER_STRING] instanceof FHIRString) {
                $this->setDoseNumberString($data[self::FIELD_DOSE_NUMBER_STRING]);
            } elseif ($ext && is_scalar($data[self::FIELD_DOSE_NUMBER_STRING])) {
                $this->setDoseNumberString(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DOSE_NUMBER_STRING]] + $ext));
            } else {
                $this->setDoseNumberString(new FHIRString($data[self::FIELD_DOSE_NUMBER_STRING]));
            }
        }
        if (isset($data[self::FIELD_FORECAST_REASON])) {
            if (is_array($data[self::FIELD_FORECAST_REASON])) {
                foreach($data[self::FIELD_FORECAST_REASON] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addForecastReason($v);
                    } else {
                        $this->addForecastReason(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_FORECAST_REASON] instanceof FHIRCodeableConcept) {
                $this->addForecastReason($data[self::FIELD_FORECAST_REASON]);
            } else {
                $this->addForecastReason(new FHIRCodeableConcept($data[self::FIELD_FORECAST_REASON]));
            }
        }
        if (isset($data[self::FIELD_FORECAST_STATUS])) {
            if ($data[self::FIELD_FORECAST_STATUS] instanceof FHIRCodeableConcept) {
                $this->setForecastStatus($data[self::FIELD_FORECAST_STATUS]);
            } else {
                $this->setForecastStatus(new FHIRCodeableConcept($data[self::FIELD_FORECAST_STATUS]));
            }
        }
        if (isset($data[self::FIELD_SERIES])) {
            $ext = (isset($data[self::FIELD_SERIES_EXT]) && is_array($data[self::FIELD_SERIES_EXT]))
                ? $data[self::FIELD_SERIES_EXT]
                : null;
            if ($data[self::FIELD_SERIES] instanceof FHIRString) {
                $this->setSeries($data[self::FIELD_SERIES]);
            } elseif ($ext && is_scalar($data[self::FIELD_SERIES])) {
                $this->setSeries(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SERIES]] + $ext));
            } else {
                $this->setSeries(new FHIRString($data[self::FIELD_SERIES]));
            }
        }
        if (isset($data[self::FIELD_SERIES_DOSES_POSITIVE_INT])) {
            $ext = (isset($data[self::FIELD_SERIES_DOSES_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_SERIES_DOSES_POSITIVE_INT_EXT]))
                ? $data[self::FIELD_SERIES_DOSES_POSITIVE_INT_EXT]
                : null;
            if ($data[self::FIELD_SERIES_DOSES_POSITIVE_INT] instanceof FHIRPositiveInt) {
                $this->setSeriesDosesPositiveInt($data[self::FIELD_SERIES_DOSES_POSITIVE_INT]);
            } elseif ($ext && is_scalar($data[self::FIELD_SERIES_DOSES_POSITIVE_INT])) {
                $this->setSeriesDosesPositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_SERIES_DOSES_POSITIVE_INT]] + $ext));
            } else {
                $this->setSeriesDosesPositiveInt(new FHIRPositiveInt($data[self::FIELD_SERIES_DOSES_POSITIVE_INT]));
            }
        }
        if (isset($data[self::FIELD_SERIES_DOSES_STRING])) {
            $ext = (isset($data[self::FIELD_SERIES_DOSES_STRING_EXT]) && is_array($data[self::FIELD_SERIES_DOSES_STRING_EXT]))
                ? $data[self::FIELD_SERIES_DOSES_STRING_EXT]
                : null;
            if ($data[self::FIELD_SERIES_DOSES_STRING] instanceof FHIRString) {
                $this->setSeriesDosesString($data[self::FIELD_SERIES_DOSES_STRING]);
            } elseif ($ext && is_scalar($data[self::FIELD_SERIES_DOSES_STRING])) {
                $this->setSeriesDosesString(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SERIES_DOSES_STRING]] + $ext));
            } else {
                $this->setSeriesDosesString(new FHIRString($data[self::FIELD_SERIES_DOSES_STRING]));
            }
        }
        if (isset($data[self::FIELD_SUPPORTING_IMMUNIZATION])) {
            if (is_array($data[self::FIELD_SUPPORTING_IMMUNIZATION])) {
                foreach($data[self::FIELD_SUPPORTING_IMMUNIZATION] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addSupportingImmunization($v);
                    } else {
                        $this->addSupportingImmunization(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_SUPPORTING_IMMUNIZATION] instanceof FHIRReference) {
                $this->addSupportingImmunization($data[self::FIELD_SUPPORTING_IMMUNIZATION]);
            } else {
                $this->addSupportingImmunization(new FHIRReference($data[self::FIELD_SUPPORTING_IMMUNIZATION]));
            }
        }
        if (isset($data[self::FIELD_SUPPORTING_PATIENT_INFORMATION])) {
            if (is_array($data[self::FIELD_SUPPORTING_PATIENT_INFORMATION])) {
                foreach($data[self::FIELD_SUPPORTING_PATIENT_INFORMATION] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addSupportingPatientInformation($v);
                    } else {
                        $this->addSupportingPatientInformation(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_SUPPORTING_PATIENT_INFORMATION] instanceof FHIRReference) {
                $this->addSupportingPatientInformation($data[self::FIELD_SUPPORTING_PATIENT_INFORMATION]);
            } else {
                $this->addSupportingPatientInformation(new FHIRReference($data[self::FIELD_SUPPORTING_PATIENT_INFORMATION]));
            }
        }
        if (isset($data[self::FIELD_TARGET_DISEASE])) {
            if ($data[self::FIELD_TARGET_DISEASE] instanceof FHIRCodeableConcept) {
                $this->setTargetDisease($data[self::FIELD_TARGET_DISEASE]);
            } else {
                $this->setTargetDisease(new FHIRCodeableConcept($data[self::FIELD_TARGET_DISEASE]));
            }
        }
        if (isset($data[self::FIELD_VACCINE_CODE])) {
            if (is_array($data[self::FIELD_VACCINE_CODE])) {
                foreach($data[self::FIELD_VACCINE_CODE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addVaccineCode($v);
                    } else {
                        $this->addVaccineCode(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_VACCINE_CODE] instanceof FHIRCodeableConcept) {
                $this->addVaccineCode($data[self::FIELD_VACCINE_CODE]);
            } else {
                $this->addVaccineCode(new FHIRCodeableConcept($data[self::FIELD_VACCINE_CODE]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Vaccine(s) which should not be used to fulfill the recommendation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getContraindicatedVaccineCode()
    {
        return $this->contraindicatedVaccineCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Vaccine(s) which should not be used to fulfill the recommendation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $contraindicatedVaccineCode
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     */
    public function addContraindicatedVaccineCode(FHIRCodeableConcept $contraindicatedVaccineCode = null)
    {
        $this->contraindicatedVaccineCode[] = $contraindicatedVaccineCode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Vaccine(s) which should not be used to fulfill the recommendation.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $contraindicatedVaccineCode
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     */
    public function setContraindicatedVaccineCode(array $contraindicatedVaccineCode = [])
    {
        $this->contraindicatedVaccineCode = [];
        if ([] === $contraindicatedVaccineCode) {
            return $this;
        }
        foreach($contraindicatedVaccineCode as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addContraindicatedVaccineCode($v);
            } else {
                $this->addContraindicatedVaccineCode(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A patient's point-in-time set of recommendations (i.e. forecasting) according to
     * a published schedule with optional supporting justification.
     *
     * Vaccine date recommendations. For example, earliest date to administer, latest
     * date to administer, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[]
     */
    public function getDateCriterion()
    {
        return $this->dateCriterion;
    }

    /**
     * A patient's point-in-time set of recommendations (i.e. forecasting) according to
     * a published schedule with optional supporting justification.
     *
     * Vaccine date recommendations. For example, earliest date to administer, latest
     * date to administer, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion $dateCriterion
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     */
    public function addDateCriterion(FHIRImmunizationRecommendationDateCriterion $dateCriterion = null)
    {
        $this->dateCriterion[] = $dateCriterion;
        return $this;
    }

    /**
     * A patient's point-in-time set of recommendations (i.e. forecasting) according to
     * a published schedule with optional supporting justification.
     *
     * Vaccine date recommendations. For example, earliest date to administer, latest
     * date to administer, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[] $dateCriterion
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRString) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRString($description);
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next
     * recommended dose). (choose any one of doseNumber*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getDoseNumberPositiveInt()
    {
        return $this->doseNumberPositiveInt;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next
     * recommended dose). (choose any one of doseNumber*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $doseNumberPositiveInt
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     */
    public function setDoseNumberPositiveInt($doseNumberPositiveInt = null)
    {
        if (null === $doseNumberPositiveInt) {
            $this->doseNumberPositiveInt = null;
            return $this;
        }
        if ($doseNumberPositiveInt instanceof FHIRPositiveInt) {
            $this->doseNumberPositiveInt = $doseNumberPositiveInt;
            return $this;
        }
        $this->doseNumberPositiveInt = new FHIRPositiveInt($doseNumberPositiveInt);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next
     * recommended dose). (choose any one of doseNumber*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDoseNumberString()
    {
        return $this->doseNumberString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next
     * recommended dose). (choose any one of doseNumber*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $doseNumberString
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     */
    public function setDoseNumberString($doseNumberString = null)
    {
        if (null === $doseNumberString) {
            $this->doseNumberString = null;
            return $this;
        }
        if ($doseNumberString instanceof FHIRString) {
            $this->doseNumberString = $doseNumberString;
            return $this;
        }
        $this->doseNumberString = new FHIRString($doseNumberString);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The reason for the assigned forecast status.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getForecastReason()
    {
        return $this->forecastReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The reason for the assigned forecast status.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $forecastReason
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     */
    public function addForecastReason(FHIRCodeableConcept $forecastReason = null)
    {
        $this->forecastReason[] = $forecastReason;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The reason for the assigned forecast status.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $forecastReason
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     */
    public function setForecastReason(array $forecastReason = [])
    {
        $this->forecastReason = [];
        if ([] === $forecastReason) {
            return $this;
        }
        foreach($forecastReason as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addForecastReason($v);
            } else {
                $this->addForecastReason(new FHIRCodeableConcept($v));
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
     * Indicates the patient status with respect to the path to immunity for the target
     * disease.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
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
     * Indicates the patient status with respect to the path to immunity for the target
     * disease.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $forecastStatus
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     */
    public function setForecastStatus(FHIRCodeableConcept $forecastStatus = null)
    {
        $this->forecastStatus = $forecastStatus;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $series
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     */
    public function setSeries($series = null)
    {
        if (null === $series) {
            $this->series = null;
            return $this;
        }
        if ($series instanceof FHIRString) {
            $this->series = $series;
            return $this;
        }
        $this->series = new FHIRString($series);
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The recommended number of doses to achieve immunity. (choose any one of
     * seriesDoses*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getSeriesDosesPositiveInt()
    {
        return $this->seriesDosesPositiveInt;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The recommended number of doses to achieve immunity. (choose any one of
     * seriesDoses*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $seriesDosesPositiveInt
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     */
    public function setSeriesDosesPositiveInt($seriesDosesPositiveInt = null)
    {
        if (null === $seriesDosesPositiveInt) {
            $this->seriesDosesPositiveInt = null;
            return $this;
        }
        if ($seriesDosesPositiveInt instanceof FHIRPositiveInt) {
            $this->seriesDosesPositiveInt = $seriesDosesPositiveInt;
            return $this;
        }
        $this->seriesDosesPositiveInt = new FHIRPositiveInt($seriesDosesPositiveInt);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The recommended number of doses to achieve immunity. (choose any one of
     * seriesDoses*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSeriesDosesString()
    {
        return $this->seriesDosesString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The recommended number of doses to achieve immunity. (choose any one of
     * seriesDoses*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $seriesDosesString
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     */
    public function setSeriesDosesString($seriesDosesString = null)
    {
        if (null === $seriesDosesString) {
            $this->seriesDosesString = null;
            return $this;
        }
        if ($seriesDosesString instanceof FHIRString) {
            $this->seriesDosesString = $seriesDosesString;
            return $this;
        }
        $this->seriesDosesString = new FHIRString($seriesDosesString);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Immunization event history and/or evaluation that supports the status and
     * recommendation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
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
     * Immunization event history and/or evaluation that supports the status and
     * recommendation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $supportingImmunization
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     */
    public function addSupportingImmunization(FHIRReference $supportingImmunization = null)
    {
        $this->supportingImmunization[] = $supportingImmunization;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Immunization event history and/or evaluation that supports the status and
     * recommendation.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[] $supportingImmunization
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     */
    public function setSupportingImmunization(array $supportingImmunization = [])
    {
        $this->supportingImmunization = [];
        if ([] === $supportingImmunization) {
            return $this;
        }
        foreach($supportingImmunization as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSupportingImmunization($v);
            } else {
                $this->addSupportingImmunization(new FHIRReference($v));
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
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $supportingPatientInformation
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     */
    public function addSupportingPatientInformation(FHIRReference $supportingPatientInformation = null)
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
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[] $supportingPatientInformation
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     */
    public function setSupportingPatientInformation(array $supportingPatientInformation = [])
    {
        $this->supportingPatientInformation = [];
        if ([] === $supportingPatientInformation) {
            return $this;
        }
        foreach($supportingPatientInformation as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSupportingPatientInformation($v);
            } else {
                $this->addSupportingPatientInformation(new FHIRReference($v));
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
     * The targeted disease for the recommendation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getTargetDisease()
    {
        return $this->targetDisease;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The targeted disease for the recommendation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $targetDisease
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     */
    public function setTargetDisease(FHIRCodeableConcept $targetDisease = null)
    {
        $this->targetDisease = $targetDisease;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Vaccine(s) or vaccine group that pertain to the recommendation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getVaccineCode()
    {
        return $this->vaccineCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Vaccine(s) or vaccine group that pertain to the recommendation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $vaccineCode
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     */
    public function addVaccineCode(FHIRCodeableConcept $vaccineCode = null)
    {
        $this->vaccineCode[] = $vaccineCode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Vaccine(s) or vaccine group that pertain to the recommendation.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $vaccineCode
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     */
    public function setVaccineCode(array $vaccineCode = [])
    {
        $this->vaccineCode = [];
        if ([] === $vaccineCode) {
            return $this;
        }
        foreach($vaccineCode as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addVaccineCode($v);
            } else {
                $this->addVaccineCode(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRImmunizationRecommendationRecommendation::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRImmunizationRecommendationRecommendation::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRImmunizationRecommendationRecommendation);
        } elseif (!is_object($type) || !($type instanceof FHIRImmunizationRecommendationRecommendation)) {
            throw new \RuntimeException(sprintf(
                'FHIRImmunizationRecommendationRecommendation::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->contraindicatedVaccineCode)) {
            foreach($children->contraindicatedVaccineCode as $child) {
                $type->addContraindicatedVaccineCode(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->dateCriterion)) {
            foreach($children->dateCriterion as $child) {
                $type->addDateCriterion(FHIRImmunizationRecommendationDateCriterion::xmlUnserialize($child));
            }
        }
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($attributes->doseNumberPositiveInt)) {
            $type->setDoseNumberPositiveInt((string)$attributes->doseNumberPositiveInt);
        }
        if (isset($children->doseNumberPositiveInt)) {
            $type->setDoseNumberPositiveInt(FHIRPositiveInt::xmlUnserialize($children->doseNumberPositiveInt));
        }
        if (isset($attributes->doseNumberString)) {
            $type->setDoseNumberString((string)$attributes->doseNumberString);
        }
        if (isset($children->doseNumberString)) {
            $type->setDoseNumberString(FHIRString::xmlUnserialize($children->doseNumberString));
        }
        if (isset($children->forecastReason)) {
            foreach($children->forecastReason as $child) {
                $type->addForecastReason(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->forecastStatus)) {
            $type->setForecastStatus(FHIRCodeableConcept::xmlUnserialize($children->forecastStatus));
        }
        if (isset($attributes->series)) {
            $type->setSeries((string)$attributes->series);
        }
        if (isset($children->series)) {
            $type->setSeries(FHIRString::xmlUnserialize($children->series));
        }
        if (isset($attributes->seriesDosesPositiveInt)) {
            $type->setSeriesDosesPositiveInt((string)$attributes->seriesDosesPositiveInt);
        }
        if (isset($children->seriesDosesPositiveInt)) {
            $type->setSeriesDosesPositiveInt(FHIRPositiveInt::xmlUnserialize($children->seriesDosesPositiveInt));
        }
        if (isset($attributes->seriesDosesString)) {
            $type->setSeriesDosesString((string)$attributes->seriesDosesString);
        }
        if (isset($children->seriesDosesString)) {
            $type->setSeriesDosesString(FHIRString::xmlUnserialize($children->seriesDosesString));
        }
        if (isset($children->supportingImmunization)) {
            foreach($children->supportingImmunization as $child) {
                $type->addSupportingImmunization(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->supportingPatientInformation)) {
            foreach($children->supportingPatientInformation as $child) {
                $type->addSupportingPatientInformation(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->targetDisease)) {
            $type->setTargetDisease(FHIRCodeableConcept::xmlUnserialize($children->targetDisease));
        }
        if (isset($children->vaccineCode)) {
            foreach($children->vaccineCode as $child) {
                $type->addVaccineCode(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ImmunizationRecommendationRecommendation xmlns="http://hl7.org/fhir"></ImmunizationRecommendationRecommendation>');
        }
        if ([] !== ($vs = $this->getContraindicatedVaccineCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTRAINDICATED_VACCINE_CODE));
            }
        }
        if ([] !== ($vs = $this->getDateCriterion())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DATE_CRITERION));
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $sxe->addAttribute(self::FIELD_DESCRIPTION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION));
            }
        }
        if (null !== ($v = $this->getDoseNumberPositiveInt())) {
            $sxe->addAttribute(self::FIELD_DOSE_NUMBER_POSITIVE_INT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DOSE_NUMBER_POSITIVE_INT));
            }
        }
        if (null !== ($v = $this->getDoseNumberString())) {
            $sxe->addAttribute(self::FIELD_DOSE_NUMBER_STRING, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DOSE_NUMBER_STRING));
            }
        }
        if ([] !== ($vs = $this->getForecastReason())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_FORECAST_REASON));
            }
        }
        if (null !== ($v = $this->getForecastStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FORECAST_STATUS));
        }
        if (null !== ($v = $this->getSeries())) {
            $sxe->addAttribute(self::FIELD_SERIES, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_SERIES));
            }
        }
        if (null !== ($v = $this->getSeriesDosesPositiveInt())) {
            $sxe->addAttribute(self::FIELD_SERIES_DOSES_POSITIVE_INT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_SERIES_DOSES_POSITIVE_INT));
            }
        }
        if (null !== ($v = $this->getSeriesDosesString())) {
            $sxe->addAttribute(self::FIELD_SERIES_DOSES_STRING, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_SERIES_DOSES_STRING));
            }
        }
        if ([] !== ($vs = $this->getSupportingImmunization())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUPPORTING_IMMUNIZATION));
            }
        }
        if ([] !== ($vs = $this->getSupportingPatientInformation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUPPORTING_PATIENT_INFORMATION));
            }
        }
        if (null !== ($v = $this->getTargetDisease())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TARGET_DISEASE));
        }
        if ([] !== ($vs = $this->getVaccineCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_VACCINE_CODE));
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
        if ([] !== ($vs = $this->getContraindicatedVaccineCode())) {
            $a[self::FIELD_CONTRAINDICATED_VACCINE_CODE] = $vs;
        }
        if ([] !== ($vs = $this->getDateCriterion())) {
            $a[self::FIELD_DATE_CRITERION] = $vs;
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = (string)$v;
            $a[self::FIELD_DESCRIPTION_EXT] = $v;
        }
        if (null !== ($v = $this->getDoseNumberPositiveInt())) {
            $a[self::FIELD_DOSE_NUMBER_POSITIVE_INT] = (string)$v;
            $a[self::FIELD_DOSE_NUMBER_POSITIVE_INT_EXT] = $v;
        }
        if (null !== ($v = $this->getDoseNumberString())) {
            $a[self::FIELD_DOSE_NUMBER_STRING] = (string)$v;
            $a[self::FIELD_DOSE_NUMBER_STRING_EXT] = $v;
        }
        if ([] !== ($vs = $this->getForecastReason())) {
            $a[self::FIELD_FORECAST_REASON] = $vs;
        }
        if (null !== ($v = $this->getForecastStatus())) {
            $a[self::FIELD_FORECAST_STATUS] = $v;
        }
        if (null !== ($v = $this->getSeries())) {
            $a[self::FIELD_SERIES] = (string)$v;
            $a[self::FIELD_SERIES_EXT] = $v;
        }
        if (null !== ($v = $this->getSeriesDosesPositiveInt())) {
            $a[self::FIELD_SERIES_DOSES_POSITIVE_INT] = (string)$v;
            $a[self::FIELD_SERIES_DOSES_POSITIVE_INT_EXT] = $v;
        }
        if (null !== ($v = $this->getSeriesDosesString())) {
            $a[self::FIELD_SERIES_DOSES_STRING] = (string)$v;
            $a[self::FIELD_SERIES_DOSES_STRING_EXT] = $v;
        }
        if ([] !== ($vs = $this->getSupportingImmunization())) {
            $a[self::FIELD_SUPPORTING_IMMUNIZATION] = $vs;
        }
        if ([] !== ($vs = $this->getSupportingPatientInformation())) {
            $a[self::FIELD_SUPPORTING_PATIENT_INFORMATION] = $vs;
        }
        if (null !== ($v = $this->getTargetDisease())) {
            $a[self::FIELD_TARGET_DISEASE] = $v;
        }
        if ([] !== ($vs = $this->getVaccineCode())) {
            $a[self::FIELD_VACCINE_CODE] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}