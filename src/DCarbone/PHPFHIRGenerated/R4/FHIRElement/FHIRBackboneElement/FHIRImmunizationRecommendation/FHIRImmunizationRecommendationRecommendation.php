<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A patient's point-in-time set of recommendations (i.e. forecasting) according to
 * a published schedule with optional supporting justification.
 *
 * Class FHIRImmunizationRecommendationRecommendation
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation
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

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine(s) which should not be used to fulfill the recommendation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $contraindicatedVaccineCode = [];

    /**
     * A patient's point-in-time set of recommendations (i.e. forecasting) according to
     * a published schedule with optional supporting justification.
     *
     * Vaccine date recommendations. For example, earliest date to administer, latest
     * date to administer, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[]
     */
    protected $dateCriterion = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $description = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next
     * recommended dose). (choose any one of doseNumber*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    protected $doseNumberPositiveInt = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next
     * recommended dose). (choose any one of doseNumber*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $doseNumberString = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason for the assigned forecast status.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $forecastReason = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the patient status with respect to the path to immunity for the target
     * disease.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $forecastStatus = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $series = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The recommended number of doses to achieve immunity. (choose any one of
     * seriesDoses*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    protected $seriesDosesPositiveInt = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The recommended number of doses to achieve immunity. (choose any one of
     * seriesDoses*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $seriesDosesString = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Immunization event history and/or evaluation that supports the status and
     * recommendation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $supportingPatientInformation = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The targeted disease for the recommendation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $targetDisease = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine(s) or vaccine group that pertain to the recommendation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $vaccineCode = [];

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
        if (isset($data[self::FIELD_CONTRAINDICATED_VACCINE_CODE])) {
            if (is_array($data[self::FIELD_CONTRAINDICATED_VACCINE_CODE])) {
                foreach($data[self::FIELD_CONTRAINDICATED_VACCINE_CODE] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_DESCRIPTION]) || isset($data[self::FIELD_DESCRIPTION_EXT])) {
            if (isset($data[self::FIELD_DESCRIPTION])) {
                $value = $data[self::FIELD_DESCRIPTION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) {
                $ext = $data[self::FIELD_DESCRIPTION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDescription(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_DOSE_NUMBER_POSITIVE_INT]) || isset($data[self::FIELD_DOSE_NUMBER_POSITIVE_INT_EXT])) {
            if (isset($data[self::FIELD_DOSE_NUMBER_POSITIVE_INT])) {
                $value = $data[self::FIELD_DOSE_NUMBER_POSITIVE_INT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DOSE_NUMBER_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_DOSE_NUMBER_POSITIVE_INT_EXT])) {
                $ext = $data[self::FIELD_DOSE_NUMBER_POSITIVE_INT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setDoseNumberPositiveInt($value);
                } else if (is_array($value)) {
                    $this->setDoseNumberPositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setDoseNumberPositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDoseNumberPositiveInt(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_DOSE_NUMBER_STRING]) || isset($data[self::FIELD_DOSE_NUMBER_STRING_EXT])) {
            if (isset($data[self::FIELD_DOSE_NUMBER_STRING])) {
                $value = $data[self::FIELD_DOSE_NUMBER_STRING];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DOSE_NUMBER_STRING_EXT]) && is_array($data[self::FIELD_DOSE_NUMBER_STRING_EXT])) {
                $ext = $data[self::FIELD_DOSE_NUMBER_STRING_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDoseNumberString($value);
                } else if (is_array($value)) {
                    $this->setDoseNumberString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDoseNumberString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDoseNumberString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_FORECAST_REASON])) {
            if (is_array($data[self::FIELD_FORECAST_REASON])) {
                foreach($data[self::FIELD_FORECAST_REASON] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_SERIES]) || isset($data[self::FIELD_SERIES_EXT])) {
            if (isset($data[self::FIELD_SERIES])) {
                $value = $data[self::FIELD_SERIES];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SERIES_EXT]) && is_array($data[self::FIELD_SERIES_EXT])) {
                $ext = $data[self::FIELD_SERIES_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSeries($value);
                } else if (is_array($value)) {
                    $this->setSeries(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSeries(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSeries(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SERIES_DOSES_POSITIVE_INT]) || isset($data[self::FIELD_SERIES_DOSES_POSITIVE_INT_EXT])) {
            if (isset($data[self::FIELD_SERIES_DOSES_POSITIVE_INT])) {
                $value = $data[self::FIELD_SERIES_DOSES_POSITIVE_INT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SERIES_DOSES_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_SERIES_DOSES_POSITIVE_INT_EXT])) {
                $ext = $data[self::FIELD_SERIES_DOSES_POSITIVE_INT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setSeriesDosesPositiveInt($value);
                } else if (is_array($value)) {
                    $this->setSeriesDosesPositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setSeriesDosesPositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSeriesDosesPositiveInt(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_SERIES_DOSES_STRING]) || isset($data[self::FIELD_SERIES_DOSES_STRING_EXT])) {
            if (isset($data[self::FIELD_SERIES_DOSES_STRING])) {
                $value = $data[self::FIELD_SERIES_DOSES_STRING];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SERIES_DOSES_STRING_EXT]) && is_array($data[self::FIELD_SERIES_DOSES_STRING_EXT])) {
                $ext = $data[self::FIELD_SERIES_DOSES_STRING_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSeriesDosesString($value);
                } else if (is_array($value)) {
                    $this->setSeriesDosesString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSeriesDosesString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSeriesDosesString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SUPPORTING_IMMUNIZATION])) {
            if (is_array($data[self::FIELD_SUPPORTING_IMMUNIZATION])) {
                foreach($data[self::FIELD_SUPPORTING_IMMUNIZATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine(s) which should not be used to fulfill the recommendation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getContraindicatedVaccineCode()
    {
        return $this->contraindicatedVaccineCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine(s) which should not be used to fulfill the recommendation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $contraindicatedVaccineCode
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine(s) which should not be used to fulfill the recommendation.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $contraindicatedVaccineCode
     * @return static
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion $dateCriterion
     * @return static
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[] $dateCriterion
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $description
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next
     * recommended dose). (choose any one of doseNumber*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    public function getDoseNumberPositiveInt()
    {
        return $this->doseNumberPositiveInt;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next
     * recommended dose). (choose any one of doseNumber*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt $doseNumberPositiveInt
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next
     * recommended dose). (choose any one of doseNumber*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDoseNumberString()
    {
        return $this->doseNumberString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next
     * recommended dose). (choose any one of doseNumber*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $doseNumberString
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason for the assigned forecast status.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getForecastReason()
    {
        return $this->forecastReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason for the assigned forecast status.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $forecastReason
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason for the assigned forecast status.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $forecastReason
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the patient status with respect to the path to immunity for the target
     * disease.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
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
     * Indicates the patient status with respect to the path to immunity for the target
     * disease.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $forecastStatus
     * @return static
     */
    public function setForecastStatus(FHIRCodeableConcept $forecastStatus = null)
    {
        $this->forecastStatus = $forecastStatus;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $series
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The recommended number of doses to achieve immunity. (choose any one of
     * seriesDoses*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    public function getSeriesDosesPositiveInt()
    {
        return $this->seriesDosesPositiveInt;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The recommended number of doses to achieve immunity. (choose any one of
     * seriesDoses*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt $seriesDosesPositiveInt
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The recommended number of doses to achieve immunity. (choose any one of
     * seriesDoses*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getSeriesDosesString()
    {
        return $this->seriesDosesString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The recommended number of doses to achieve immunity. (choose any one of
     * seriesDoses*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $seriesDosesString
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Immunization event history and/or evaluation that supports the status and
     * recommendation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
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
     * Immunization event history and/or evaluation that supports the status and
     * recommendation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $supportingImmunization
     * @return static
     */
    public function addSupportingImmunization(FHIRReference $supportingImmunization = null)
    {
        $this->supportingImmunization[] = $supportingImmunization;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Immunization event history and/or evaluation that supports the status and
     * recommendation.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $supportingImmunization
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient Information that supports the status and recommendation. This includes
     * patient observations, adverse reactions and allergy/intolerance information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $supportingPatientInformation
     * @return static
     */
    public function addSupportingPatientInformation(FHIRReference $supportingPatientInformation = null)
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $supportingPatientInformation
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The targeted disease for the recommendation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getTargetDisease()
    {
        return $this->targetDisease;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The targeted disease for the recommendation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $targetDisease
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine(s) or vaccine group that pertain to the recommendation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getVaccineCode()
    {
        return $this->vaccineCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine(s) or vaccine group that pertain to the recommendation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $vaccineCode
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine(s) or vaccine group that pertain to the recommendation.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $vaccineCode
     * @return static
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
        if ([] !== ($vs = $this->getContraindicatedVaccineCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTRAINDICATED_VACCINE_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getDateCriterion())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DATE_CRITERION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDoseNumberPositiveInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOSE_NUMBER_POSITIVE_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDoseNumberString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOSE_NUMBER_STRING] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getForecastReason())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_FORECAST_REASON, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getForecastStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FORECAST_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSeries())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERIES] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSeriesDosesPositiveInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERIES_DOSES_POSITIVE_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSeriesDosesString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERIES_DOSES_STRING] = $fieldErrs;
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
        if (null !== ($v = $this->getTargetDisease())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TARGET_DISEASE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getVaccineCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VACCINE_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTRAINDICATED_VACCINE_CODE])) {
            $v = $this->getContraindicatedVaccineCode();
            foreach($validationRules[self::FIELD_CONTRAINDICATED_VACCINE_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_CONTRAINDICATED_VACCINE_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTRAINDICATED_VACCINE_CODE])) {
                        $errs[self::FIELD_CONTRAINDICATED_VACCINE_CODE] = [];
                    }
                    $errs[self::FIELD_CONTRAINDICATED_VACCINE_CODE][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_NUMBER_POSITIVE_INT])) {
            $v = $this->getDoseNumberPositiveInt();
            foreach($validationRules[self::FIELD_DOSE_NUMBER_POSITIVE_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_DOSE_NUMBER_POSITIVE_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_NUMBER_POSITIVE_INT])) {
                        $errs[self::FIELD_DOSE_NUMBER_POSITIVE_INT] = [];
                    }
                    $errs[self::FIELD_DOSE_NUMBER_POSITIVE_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_NUMBER_STRING])) {
            $v = $this->getDoseNumberString();
            foreach($validationRules[self::FIELD_DOSE_NUMBER_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_DOSE_NUMBER_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_NUMBER_STRING])) {
                        $errs[self::FIELD_DOSE_NUMBER_STRING] = [];
                    }
                    $errs[self::FIELD_DOSE_NUMBER_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FORECAST_REASON])) {
            $v = $this->getForecastReason();
            foreach($validationRules[self::FIELD_FORECAST_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_FORECAST_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FORECAST_REASON])) {
                        $errs[self::FIELD_FORECAST_REASON] = [];
                    }
                    $errs[self::FIELD_FORECAST_REASON][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_SERIES])) {
            $v = $this->getSeries();
            foreach($validationRules[self::FIELD_SERIES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_SERIES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERIES])) {
                        $errs[self::FIELD_SERIES] = [];
                    }
                    $errs[self::FIELD_SERIES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERIES_DOSES_POSITIVE_INT])) {
            $v = $this->getSeriesDosesPositiveInt();
            foreach($validationRules[self::FIELD_SERIES_DOSES_POSITIVE_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_SERIES_DOSES_POSITIVE_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERIES_DOSES_POSITIVE_INT])) {
                        $errs[self::FIELD_SERIES_DOSES_POSITIVE_INT] = [];
                    }
                    $errs[self::FIELD_SERIES_DOSES_POSITIVE_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERIES_DOSES_STRING])) {
            $v = $this->getSeriesDosesString();
            foreach($validationRules[self::FIELD_SERIES_DOSES_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_SERIES_DOSES_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERIES_DOSES_STRING])) {
                        $errs[self::FIELD_SERIES_DOSES_STRING] = [];
                    }
                    $errs[self::FIELD_SERIES_DOSES_STRING][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_TARGET_DISEASE])) {
            $v = $this->getTargetDisease();
            foreach($validationRules[self::FIELD_TARGET_DISEASE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_TARGET_DISEASE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_DISEASE])) {
                        $errs[self::FIELD_TARGET_DISEASE] = [];
                    }
                    $errs[self::FIELD_TARGET_DISEASE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VACCINE_CODE])) {
            $v = $this->getVaccineCode();
            foreach($validationRules[self::FIELD_VACCINE_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION, self::FIELD_VACCINE_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VACCINE_CODE])) {
                        $errs[self::FIELD_VACCINE_CODE] = [];
                    }
                    $errs[self::FIELD_VACCINE_CODE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
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
                'FHIRImmunizationRecommendationRecommendation::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation or null, %s seen.',
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
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($attributes->description)) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->description);
            } else {
                $type->setDescription((string)$attributes->description);
            }
        }
        if (isset($children->doseNumberPositiveInt)) {
            $type->setDoseNumberPositiveInt(FHIRPositiveInt::xmlUnserialize($children->doseNumberPositiveInt));
        }
        if (isset($attributes->doseNumberPositiveInt)) {
            $pt = $type->getDoseNumberPositiveInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->doseNumberPositiveInt);
            } else {
                $type->setDoseNumberPositiveInt((string)$attributes->doseNumberPositiveInt);
            }
        }
        if (isset($children->doseNumberString)) {
            $type->setDoseNumberString(FHIRString::xmlUnserialize($children->doseNumberString));
        }
        if (isset($attributes->doseNumberString)) {
            $pt = $type->getDoseNumberString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->doseNumberString);
            } else {
                $type->setDoseNumberString((string)$attributes->doseNumberString);
            }
        }
        if (isset($children->forecastReason)) {
            foreach($children->forecastReason as $child) {
                $type->addForecastReason(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->forecastStatus)) {
            $type->setForecastStatus(FHIRCodeableConcept::xmlUnserialize($children->forecastStatus));
        }
        if (isset($children->series)) {
            $type->setSeries(FHIRString::xmlUnserialize($children->series));
        }
        if (isset($attributes->series)) {
            $pt = $type->getSeries();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->series);
            } else {
                $type->setSeries((string)$attributes->series);
            }
        }
        if (isset($children->seriesDosesPositiveInt)) {
            $type->setSeriesDosesPositiveInt(FHIRPositiveInt::xmlUnserialize($children->seriesDosesPositiveInt));
        }
        if (isset($attributes->seriesDosesPositiveInt)) {
            $pt = $type->getSeriesDosesPositiveInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->seriesDosesPositiveInt);
            } else {
                $type->setSeriesDosesPositiveInt((string)$attributes->seriesDosesPositiveInt);
            }
        }
        if (isset($children->seriesDosesString)) {
            $type->setSeriesDosesString(FHIRString::xmlUnserialize($children->seriesDosesString));
        }
        if (isset($attributes->seriesDosesString)) {
            $pt = $type->getSeriesDosesString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->seriesDosesString);
            } else {
                $type->setSeriesDosesString((string)$attributes->seriesDosesString);
            }
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
        if ([] !== ($vs = $this->getContraindicatedVaccineCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTRAINDICATED_VACCINE_CODE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getDateCriterion())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DATE_CRITERION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDoseNumberPositiveInt())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DOSE_NUMBER_POSITIVE_INT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDoseNumberString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DOSE_NUMBER_STRING, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getForecastReason())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_FORECAST_REASON, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getForecastStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FORECAST_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSeries())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SERIES, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSeriesDosesPositiveInt())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SERIES_DOSES_POSITIVE_INT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSeriesDosesString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SERIES_DOSES_STRING, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getTargetDisease())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TARGET_DISEASE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getVaccineCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_VACCINE_CODE, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_CONTRAINDICATED_VACCINE_CODE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CONTRAINDICATED_VACCINE_CODE][] = $v;
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
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_DESCRIPTION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDoseNumberPositiveInt())) {
            $a[self::FIELD_DOSE_NUMBER_POSITIVE_INT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRPositiveInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRPositiveInt::FIELD_VALUE]);
                $a[self::FIELD_DOSE_NUMBER_POSITIVE_INT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDoseNumberString())) {
            $a[self::FIELD_DOSE_NUMBER_STRING] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_DOSE_NUMBER_STRING_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getForecastReason())) {
            $a[self::FIELD_FORECAST_REASON] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_FORECAST_REASON][] = $v;
            }
        }
        if (null !== ($v = $this->getForecastStatus())) {
            $a[self::FIELD_FORECAST_STATUS] = $v;
        }
        if (null !== ($v = $this->getSeries())) {
            $a[self::FIELD_SERIES] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_SERIES_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSeriesDosesPositiveInt())) {
            $a[self::FIELD_SERIES_DOSES_POSITIVE_INT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRPositiveInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRPositiveInt::FIELD_VALUE]);
                $a[self::FIELD_SERIES_DOSES_POSITIVE_INT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSeriesDosesString())) {
            $a[self::FIELD_SERIES_DOSES_STRING] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_SERIES_DOSES_STRING_EXT] = $enc;
            }
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
        if (null !== ($v = $this->getTargetDisease())) {
            $a[self::FIELD_TARGET_DISEASE] = $v;
        }
        if ([] !== ($vs = $this->getVaccineCode())) {
            $a[self::FIELD_VACCINE_CODE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_VACCINE_CODE][] = $v;
            }
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