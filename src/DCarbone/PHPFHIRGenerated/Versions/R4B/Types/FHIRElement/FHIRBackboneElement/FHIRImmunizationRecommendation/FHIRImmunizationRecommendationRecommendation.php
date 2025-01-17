<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation;

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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
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
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * A patient's point-in-time set of recommendations (i.e. forecasting) according to
 * a published schedule with optional supporting justification.
 */
class FHIRImmunizationRecommendationRecommendation extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION;


    public const FIELD_VACCINE_CODE = 'vaccineCode';
    public const FIELD_TARGET_DISEASE = 'targetDisease';
    public const FIELD_CONTRAINDICATED_VACCINE_CODE = 'contraindicatedVaccineCode';
    public const FIELD_FORECAST_STATUS = 'forecastStatus';
    public const FIELD_FORECAST_REASON = 'forecastReason';
    public const FIELD_DATE_CRITERION = 'dateCriterion';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_SERIES = 'series';
    public const FIELD_SERIES_EXT = '_series';
    public const FIELD_DOSE_NUMBER_POSITIVE_INT = 'doseNumberPositiveInt';
    public const FIELD_DOSE_NUMBER_POSITIVE_INT_EXT = '_doseNumberPositiveInt';
    public const FIELD_DOSE_NUMBER_STRING = 'doseNumberString';
    public const FIELD_DOSE_NUMBER_STRING_EXT = '_doseNumberString';
    public const FIELD_SERIES_DOSES_POSITIVE_INT = 'seriesDosesPositiveInt';
    public const FIELD_SERIES_DOSES_POSITIVE_INT_EXT = '_seriesDosesPositiveInt';
    public const FIELD_SERIES_DOSES_STRING = 'seriesDosesString';
    public const FIELD_SERIES_DOSES_STRING_EXT = '_seriesDosesString';
    public const FIELD_SUPPORTING_IMMUNIZATION = 'supportingImmunization';
    public const FIELD_SUPPORTING_PATIENT_INFORMATION = 'supportingPatientInformation';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine(s) or vaccine group that pertain to the recommendation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $vaccineCode;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The targeted disease for the recommendation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $targetDisease;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine(s) which should not be used to fulfill the recommendation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $contraindicatedVaccineCode;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the patient status with respect to the path to immunity for the target
     * disease.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $forecastStatus;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason for the assigned forecast status.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $forecastReason;
    /**
     * A patient's point-in-time set of recommendations (i.e. forecasting) according to
     * a published schedule with optional supporting justification.
     *
     * Vaccine date recommendations. For example, earliest date to administer, latest
     * date to administer, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[] 
     */
    protected array $dateCriterion;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $description;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $series;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next
     * recommended dose).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $doseNumberPositiveInt;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next
     * recommended dose).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $doseNumberString;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The recommended number of doses to achieve immunity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $seriesDosesPositiveInt;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The recommended number of doses to achieve immunity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $seriesDosesString;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Immunization event history and/or evaluation that supports the status and
     * recommendation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] 
     */
    protected array $supportingPatientInformation;

    /** Default validation map for fields in type ImmunizationRecommendation.Recommendation */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_FORECAST_STATUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRImmunizationRecommendationRecommendation Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] $vaccineCode
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $targetDisease
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] $contraindicatedVaccineCode
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $forecastStatus
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] $forecastReason
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[] $dateCriterion
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $description
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $series
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPositiveInt $doseNumberPositiveInt
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $doseNumberString
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPositiveInt $seriesDosesPositiveInt
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $seriesDosesString
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] $supportingImmunization
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] $supportingPatientInformation
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $vaccineCode = null,
                                null|FHIRCodeableConcept $targetDisease = null,
                                null|iterable $contraindicatedVaccineCode = null,
                                null|FHIRCodeableConcept $forecastStatus = null,
                                null|iterable $forecastReason = null,
                                null|iterable $dateCriterion = null,
                                null|string|FHIRStringPrimitive|FHIRString $description = null,
                                null|string|FHIRStringPrimitive|FHIRString $series = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $doseNumberPositiveInt = null,
                                null|string|FHIRStringPrimitive|FHIRString $doseNumberString = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $seriesDosesPositiveInt = null,
                                null|string|FHIRStringPrimitive|FHIRString $seriesDosesString = null,
                                null|iterable $supportingImmunization = null,
                                null|iterable $supportingPatientInformation = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $vaccineCode) {
            $this->setVaccineCode(...$vaccineCode);
        }
        if (null !== $targetDisease) {
            $this->setTargetDisease($targetDisease);
        }
        if (null !== $contraindicatedVaccineCode) {
            $this->setContraindicatedVaccineCode(...$contraindicatedVaccineCode);
        }
        if (null !== $forecastStatus) {
            $this->setForecastStatus($forecastStatus);
        }
        if (null !== $forecastReason) {
            $this->setForecastReason(...$forecastReason);
        }
        if (null !== $dateCriterion) {
            $this->setDateCriterion(...$dateCriterion);
        }
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $series) {
            $this->setSeries($series);
        }
        if (null !== $doseNumberPositiveInt) {
            $this->setDoseNumberPositiveInt($doseNumberPositiveInt);
        }
        if (null !== $doseNumberString) {
            $this->setDoseNumberString($doseNumberString);
        }
        if (null !== $seriesDosesPositiveInt) {
            $this->setSeriesDosesPositiveInt($seriesDosesPositiveInt);
        }
        if (null !== $seriesDosesString) {
            $this->setSeriesDosesString($seriesDosesString);
        }
        if (null !== $supportingImmunization) {
            $this->setSupportingImmunization(...$supportingImmunization);
        }
        if (null !== $supportingPatientInformation) {
            $this->setSupportingPatientInformation(...$supportingPatientInformation);
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine(s) or vaccine group that pertain to the recommendation.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getVaccineCode(): array
    {
        return $this->vaccineCode ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getVaccineCodeIterator(): iterable
    {
        if (!isset($this->vaccineCode) || [] === $this->vaccineCode) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->vaccineCode);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine(s) or vaccine group that pertain to the recommendation.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $vaccineCode
     * @return static
     */
    public function addVaccineCode(FHIRCodeableConcept $vaccineCode): self
    {
        if (!isset($this->vaccineCode)) {
            $this->vaccineCode = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept ...$vaccineCode
     * @return static
     */
    public function setVaccineCode(FHIRCodeableConcept ...$vaccineCode): self
    {
        $this->vaccineCode = $vaccineCode;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getTargetDisease(): null|FHIRCodeableConcept
    {
        return $this->targetDisease ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The targeted disease for the recommendation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $targetDisease
     * @return static
     */
    public function setTargetDisease(null|FHIRCodeableConcept $targetDisease): self
    {
        if (null === $targetDisease) {
            unset($this->targetDisease);
            return $this;
        }
        $this->targetDisease = $targetDisease;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getContraindicatedVaccineCode(): array
    {
        return $this->contraindicatedVaccineCode ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getContraindicatedVaccineCodeIterator(): iterable
    {
        if (!isset($this->contraindicatedVaccineCode) || [] === $this->contraindicatedVaccineCode) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->contraindicatedVaccineCode);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine(s) which should not be used to fulfill the recommendation.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $contraindicatedVaccineCode
     * @return static
     */
    public function addContraindicatedVaccineCode(FHIRCodeableConcept $contraindicatedVaccineCode): self
    {
        if (!isset($this->contraindicatedVaccineCode)) {
            $this->contraindicatedVaccineCode = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept ...$contraindicatedVaccineCode
     * @return static
     */
    public function setContraindicatedVaccineCode(FHIRCodeableConcept ...$contraindicatedVaccineCode): self
    {
        $this->contraindicatedVaccineCode = $contraindicatedVaccineCode;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
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
     * Indicates the patient status with respect to the path to immunity for the target
     * disease.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $forecastStatus
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason for the assigned forecast status.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getForecastReason(): array
    {
        return $this->forecastReason ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getForecastReasonIterator(): iterable
    {
        if (!isset($this->forecastReason) || [] === $this->forecastReason) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->forecastReason);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason for the assigned forecast status.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $forecastReason
     * @return static
     */
    public function addForecastReason(FHIRCodeableConcept $forecastReason): self
    {
        if (!isset($this->forecastReason)) {
            $this->forecastReason = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept ...$forecastReason
     * @return static
     */
    public function setForecastReason(FHIRCodeableConcept ...$forecastReason): self
    {
        $this->forecastReason = $forecastReason;
        return $this;
    }

    /**
     * A patient's point-in-time set of recommendations (i.e. forecasting) according to
     * a published schedule with optional supporting justification.
     *
     * Vaccine date recommendations. For example, earliest date to administer, latest
     * date to administer, etc.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[]
     */
    public function getDateCriterion(): array
    {
        return $this->dateCriterion ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion>
     */
    public function getDateCriterionIterator(): iterable
    {
        if (!isset($this->dateCriterion) || [] === $this->dateCriterion) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->dateCriterion);
    }

    /**
     * A patient's point-in-time set of recommendations (i.e. forecasting) according to
     * a published schedule with optional supporting justification.
     *
     * Vaccine date recommendations. For example, earliest date to administer, latest
     * date to administer, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion $dateCriterion
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
     * A patient's point-in-time set of recommendations (i.e. forecasting) according to
     * a published schedule with optional supporting justification.
     *
     * Vaccine date recommendations. For example, earliest date to administer, latest
     * date to administer, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion ...$dateCriterion
     * @return static
     */
    public function setDateCriterion(FHIRImmunizationRecommendationDateCriterion ...$dateCriterion): self
    {
        $this->dateCriterion = $dateCriterion;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $description
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRString)) {
            $description = new FHIRString(value: $description);
        }
        if (null !== $valueXMLLocation) {
            $description->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $description->_getValueXMLLocation()) {
            $description->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->description = $description;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getSeries(): null|FHIRString
    {
        return $this->series ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $series
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSeries(null|string|FHIRStringPrimitive|FHIRString $series,
                              null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $series) {
            unset($this->series);
            return $this;
        }
        if (!($series instanceof FHIRString)) {
            $series = new FHIRString(value: $series);
        }
        if (null !== $valueXMLLocation) {
            $series->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $series->_getValueXMLLocation()) {
            $series->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->series = $series;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next
     * recommended dose).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPositiveInt
     */
    public function getDoseNumberPositiveInt(): null|FHIRPositiveInt
    {
        return $this->doseNumberPositiveInt ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next
     * recommended dose).
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPositiveInt $doseNumberPositiveInt
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDoseNumberPositiveInt(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $doseNumberPositiveInt,
                                             null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $doseNumberPositiveInt) {
            unset($this->doseNumberPositiveInt);
            return $this;
        }
        if (!($doseNumberPositiveInt instanceof FHIRPositiveInt)) {
            $doseNumberPositiveInt = new FHIRPositiveInt(value: $doseNumberPositiveInt);
        }
        if (null !== $valueXMLLocation) {
            $doseNumberPositiveInt->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $doseNumberPositiveInt->_getValueXMLLocation()) {
            $doseNumberPositiveInt->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->doseNumberPositiveInt = $doseNumberPositiveInt;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next
     * recommended dose).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getDoseNumberString(): null|FHIRString
    {
        return $this->doseNumberString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next
     * recommended dose).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $doseNumberString
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDoseNumberString(null|string|FHIRStringPrimitive|FHIRString $doseNumberString,
                                        null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $doseNumberString) {
            unset($this->doseNumberString);
            return $this;
        }
        if (!($doseNumberString instanceof FHIRString)) {
            $doseNumberString = new FHIRString(value: $doseNumberString);
        }
        if (null !== $valueXMLLocation) {
            $doseNumberString->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $doseNumberString->_getValueXMLLocation()) {
            $doseNumberString->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->doseNumberString = $doseNumberString;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The recommended number of doses to achieve immunity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPositiveInt
     */
    public function getSeriesDosesPositiveInt(): null|FHIRPositiveInt
    {
        return $this->seriesDosesPositiveInt ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The recommended number of doses to achieve immunity.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPositiveInt $seriesDosesPositiveInt
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSeriesDosesPositiveInt(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $seriesDosesPositiveInt,
                                              null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $seriesDosesPositiveInt) {
            unset($this->seriesDosesPositiveInt);
            return $this;
        }
        if (!($seriesDosesPositiveInt instanceof FHIRPositiveInt)) {
            $seriesDosesPositiveInt = new FHIRPositiveInt(value: $seriesDosesPositiveInt);
        }
        if (null !== $valueXMLLocation) {
            $seriesDosesPositiveInt->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $seriesDosesPositiveInt->_getValueXMLLocation()) {
            $seriesDosesPositiveInt->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->seriesDosesPositiveInt = $seriesDosesPositiveInt;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The recommended number of doses to achieve immunity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getSeriesDosesString(): null|FHIRString
    {
        return $this->seriesDosesString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The recommended number of doses to achieve immunity.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $seriesDosesString
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSeriesDosesString(null|string|FHIRStringPrimitive|FHIRString $seriesDosesString,
                                         null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $seriesDosesString) {
            unset($this->seriesDosesString);
            return $this;
        }
        if (!($seriesDosesString instanceof FHIRString)) {
            $seriesDosesString = new FHIRString(value: $seriesDosesString);
        }
        if (null !== $valueXMLLocation) {
            $seriesDosesString->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $seriesDosesString->_getValueXMLLocation()) {
            $seriesDosesString->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->seriesDosesString = $seriesDosesString;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[]
     */
    public function getSupportingImmunization(): array
    {
        return $this->supportingImmunization ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference>
     */
    public function getSupportingImmunizationIterator(): iterable
    {
        if (!isset($this->supportingImmunization) || [] === $this->supportingImmunization) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->supportingImmunization);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Immunization event history and/or evaluation that supports the status and
     * recommendation.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $supportingImmunization
     * @return static
     */
    public function addSupportingImmunization(FHIRReference $supportingImmunization): self
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
     * Immunization event history and/or evaluation that supports the status and
     * recommendation.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference ...$supportingImmunization
     * @return static
     */
    public function setSupportingImmunization(FHIRReference ...$supportingImmunization): self
    {
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[]
     */
    public function getSupportingPatientInformation(): array
    {
        return $this->supportingPatientInformation ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference>
     */
    public function getSupportingPatientInformationIterator(): iterable
    {
        if (!isset($this->supportingPatientInformation) || [] === $this->supportingPatientInformation) {
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $supportingPatientInformation
     * @return static
     */
    public function addSupportingPatientInformation(FHIRReference $supportingPatientInformation): self
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference ...$supportingPatientInformation
     * @return static
     */
    public function setSupportingPatientInformation(FHIRReference ...$supportingPatientInformation): self
    {
        $this->supportingPatientInformation = $supportingPatientInformation;
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
        if (null !== ($v = $this->getForecastStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FORECAST_STATUS] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_VACCINE_CODE])) {
            $v = $this->getVaccineCode();
            foreach($validationRules[self::FIELD_VACCINE_CODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VACCINE_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VACCINE_CODE])) {
                        $errs[self::FIELD_VACCINE_CODE] = [];
                    }
                    $errs[self::FIELD_VACCINE_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_DISEASE])) {
            $v = $this->getTargetDisease();
            foreach($validationRules[self::FIELD_TARGET_DISEASE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TARGET_DISEASE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_DISEASE])) {
                        $errs[self::FIELD_TARGET_DISEASE] = [];
                    }
                    $errs[self::FIELD_TARGET_DISEASE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTRAINDICATED_VACCINE_CODE])) {
            $v = $this->getContraindicatedVaccineCode();
            foreach($validationRules[self::FIELD_CONTRAINDICATED_VACCINE_CODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTRAINDICATED_VACCINE_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTRAINDICATED_VACCINE_CODE])) {
                        $errs[self::FIELD_CONTRAINDICATED_VACCINE_CODE] = [];
                    }
                    $errs[self::FIELD_CONTRAINDICATED_VACCINE_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FORECAST_STATUS])) {
            $v = $this->getForecastStatus();
            foreach($validationRules[self::FIELD_FORECAST_STATUS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FORECAST_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FORECAST_STATUS])) {
                        $errs[self::FIELD_FORECAST_STATUS] = [];
                    }
                    $errs[self::FIELD_FORECAST_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FORECAST_REASON])) {
            $v = $this->getForecastReason();
            foreach($validationRules[self::FIELD_FORECAST_REASON] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FORECAST_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FORECAST_REASON])) {
                        $errs[self::FIELD_FORECAST_REASON] = [];
                    }
                    $errs[self::FIELD_FORECAST_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE_CRITERION])) {
            $v = $this->getDateCriterion();
            foreach($validationRules[self::FIELD_DATE_CRITERION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATE_CRITERION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERIES])) {
            $v = $this->getSeries();
            foreach($validationRules[self::FIELD_SERIES] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SERIES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERIES])) {
                        $errs[self::FIELD_SERIES] = [];
                    }
                    $errs[self::FIELD_SERIES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_NUMBER_POSITIVE_INT])) {
            $v = $this->getDoseNumberPositiveInt();
            foreach($validationRules[self::FIELD_DOSE_NUMBER_POSITIVE_INT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DOSE_NUMBER_POSITIVE_INT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DOSE_NUMBER_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_NUMBER_STRING])) {
                        $errs[self::FIELD_DOSE_NUMBER_STRING] = [];
                    }
                    $errs[self::FIELD_DOSE_NUMBER_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERIES_DOSES_POSITIVE_INT])) {
            $v = $this->getSeriesDosesPositiveInt();
            foreach($validationRules[self::FIELD_SERIES_DOSES_POSITIVE_INT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SERIES_DOSES_POSITIVE_INT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SERIES_DOSES_STRING, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUPPORTING_IMMUNIZATION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUPPORTING_PATIENT_INFORMATION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
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
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VACCINE_CODE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addVaccineCode(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TARGET_DISEASE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setTargetDisease(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTRAINDICATED_VACCINE_CODE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addContraindicatedVaccineCode(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FORECAST_STATUS === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setForecastStatus(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FORECAST_REASON === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addForecastReason(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATE_CRITERION === $childName) {
                $v = new FHIRImmunizationRecommendationDateCriterion();
                $type->addDateCriterion(FHIRImmunizationRecommendationDateCriterion::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DESCRIPTION === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDescription(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SERIES === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setSeries(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DOSE_NUMBER_POSITIVE_INT === $childName) {
                $v = new FHIRPositiveInt(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDoseNumberPositiveInt(FHIRPositiveInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DOSE_NUMBER_STRING === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDoseNumberString(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SERIES_DOSES_POSITIVE_INT === $childName) {
                $v = new FHIRPositiveInt(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setSeriesDosesPositiveInt(FHIRPositiveInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SERIES_DOSES_STRING === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setSeriesDosesString(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUPPORTING_IMMUNIZATION === $childName) {
                $v = new FHIRReference();
                $type->addSupportingImmunization(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUPPORTING_PATIENT_INFORMATION === $childName) {
                $v = new FHIRReference();
                $type->addSupportingPatientInformation(FHIRReference::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DESCRIPTION]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription(new FHIRString(
                    value: (string)$attributes[self::FIELD_DESCRIPTION],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SERIES])) {
            $pt = $type->getSeries();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_SERIES]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSeries(new FHIRString(
                    value: (string)$attributes[self::FIELD_SERIES],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DOSE_NUMBER_POSITIVE_INT])) {
            $pt = $type->getDoseNumberPositiveInt();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DOSE_NUMBER_POSITIVE_INT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDoseNumberPositiveInt(new FHIRPositiveInt(
                    value: (string)$attributes[self::FIELD_DOSE_NUMBER_POSITIVE_INT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DOSE_NUMBER_STRING])) {
            $pt = $type->getDoseNumberString();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DOSE_NUMBER_STRING]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDoseNumberString(new FHIRString(
                    value: (string)$attributes[self::FIELD_DOSE_NUMBER_STRING],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SERIES_DOSES_POSITIVE_INT])) {
            $pt = $type->getSeriesDosesPositiveInt();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_SERIES_DOSES_POSITIVE_INT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSeriesDosesPositiveInt(new FHIRPositiveInt(
                    value: (string)$attributes[self::FIELD_SERIES_DOSES_POSITIVE_INT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SERIES_DOSES_STRING])) {
            $pt = $type->getSeriesDosesString();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_SERIES_DOSES_STRING]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSeriesDosesString(new FHIRString(
                    value: (string)$attributes[self::FIELD_SERIES_DOSES_STRING],
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
            $xw->openRootNode('ImmunizationRecommendationRecommendation', $this->_getSourceXMLNS());
        }
        if (isset($this->description) && $this->description->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->getValue()?->_getFormattedValue());
        }
        if (isset($this->series) && $this->series->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SERIES, $this->series->getValue()?->_getFormattedValue());
        }
        if (isset($this->doseNumberPositiveInt) && $this->doseNumberPositiveInt->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DOSE_NUMBER_POSITIVE_INT, $this->doseNumberPositiveInt->getValue()?->_getFormattedValue());
        }
        if (isset($this->doseNumberString) && $this->doseNumberString->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DOSE_NUMBER_STRING, $this->doseNumberString->getValue()?->_getFormattedValue());
        }
        if (isset($this->seriesDosesPositiveInt) && $this->seriesDosesPositiveInt->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SERIES_DOSES_POSITIVE_INT, $this->seriesDosesPositiveInt->getValue()?->_getFormattedValue());
        }
        if (isset($this->seriesDosesString) && $this->seriesDosesString->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SERIES_DOSES_STRING, $this->seriesDosesString->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->vaccineCode)) {
            foreach ($this->vaccineCode as $v) {
                $xw->startElement(self::FIELD_VACCINE_CODE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->targetDisease)) {
            $xw->startElement(self::FIELD_TARGET_DISEASE);
            $this->targetDisease->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->contraindicatedVaccineCode)) {
            foreach ($this->contraindicatedVaccineCode as $v) {
                $xw->startElement(self::FIELD_CONTRAINDICATED_VACCINE_CODE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->forecastStatus)) {
            $xw->startElement(self::FIELD_FORECAST_STATUS);
            $this->forecastStatus->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->forecastReason)) {
            foreach ($this->forecastReason as $v) {
                $xw->startElement(self::FIELD_FORECAST_REASON);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->dateCriterion)) {
            foreach ($this->dateCriterion as $v) {
                $xw->startElement(self::FIELD_DATE_CRITERION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->description) && $this->description->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->series) && $this->series->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SERIES);
            $this->series->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->doseNumberPositiveInt) && $this->doseNumberPositiveInt->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DOSE_NUMBER_POSITIVE_INT);
            $this->doseNumberPositiveInt->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->doseNumberString) && $this->doseNumberString->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DOSE_NUMBER_STRING);
            $this->doseNumberString->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->seriesDosesPositiveInt) && $this->seriesDosesPositiveInt->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SERIES_DOSES_POSITIVE_INT);
            $this->seriesDosesPositiveInt->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->seriesDosesString) && $this->seriesDosesString->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SERIES_DOSES_STRING);
            $this->seriesDosesString->xmlSerialize($xw, $config);
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
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
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
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_VACCINE_CODE]) || array_key_exists(self::FIELD_VACCINE_CODE, $json)) {
            if (is_array($json[self::FIELD_VACCINE_CODE])) {
                foreach($json[self::FIELD_VACCINE_CODE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addVaccineCode($v);
                    } else {
                        $type->addVaccineCode(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_VACCINE_CODE] instanceof FHIRCodeableConcept) {
                $type->addVaccineCode($json[self::FIELD_VACCINE_CODE]);
            } else {
                $type->addVaccineCode(new FHIRCodeableConcept($json[self::FIELD_VACCINE_CODE]));
            }
        }
        if (isset($json[self::FIELD_TARGET_DISEASE]) || array_key_exists(self::FIELD_TARGET_DISEASE, $json)) {
            if ($json[self::FIELD_TARGET_DISEASE] instanceof FHIRCodeableConcept) {
                $type->setTargetDisease($json[self::FIELD_TARGET_DISEASE]);
            } else {
                $type->setTargetDisease(new FHIRCodeableConcept($json[self::FIELD_TARGET_DISEASE]));
            }
        }
        if (isset($json[self::FIELD_CONTRAINDICATED_VACCINE_CODE]) || array_key_exists(self::FIELD_CONTRAINDICATED_VACCINE_CODE, $json)) {
            if (is_array($json[self::FIELD_CONTRAINDICATED_VACCINE_CODE])) {
                foreach($json[self::FIELD_CONTRAINDICATED_VACCINE_CODE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addContraindicatedVaccineCode($v);
                    } else {
                        $type->addContraindicatedVaccineCode(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_CONTRAINDICATED_VACCINE_CODE] instanceof FHIRCodeableConcept) {
                $type->addContraindicatedVaccineCode($json[self::FIELD_CONTRAINDICATED_VACCINE_CODE]);
            } else {
                $type->addContraindicatedVaccineCode(new FHIRCodeableConcept($json[self::FIELD_CONTRAINDICATED_VACCINE_CODE]));
            }
        }
        if (isset($json[self::FIELD_FORECAST_STATUS]) || array_key_exists(self::FIELD_FORECAST_STATUS, $json)) {
            if ($json[self::FIELD_FORECAST_STATUS] instanceof FHIRCodeableConcept) {
                $type->setForecastStatus($json[self::FIELD_FORECAST_STATUS]);
            } else {
                $type->setForecastStatus(new FHIRCodeableConcept($json[self::FIELD_FORECAST_STATUS]));
            }
        }
        if (isset($json[self::FIELD_FORECAST_REASON]) || array_key_exists(self::FIELD_FORECAST_REASON, $json)) {
            if (is_array($json[self::FIELD_FORECAST_REASON])) {
                foreach($json[self::FIELD_FORECAST_REASON] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addForecastReason($v);
                    } else {
                        $type->addForecastReason(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_FORECAST_REASON] instanceof FHIRCodeableConcept) {
                $type->addForecastReason($json[self::FIELD_FORECAST_REASON]);
            } else {
                $type->addForecastReason(new FHIRCodeableConcept($json[self::FIELD_FORECAST_REASON]));
            }
        }
        if (isset($json[self::FIELD_DATE_CRITERION]) || array_key_exists(self::FIELD_DATE_CRITERION, $json)) {
            if (is_array($json[self::FIELD_DATE_CRITERION])) {
                foreach($json[self::FIELD_DATE_CRITERION] as $v) {
                    if ($v instanceof FHIRImmunizationRecommendationDateCriterion) {
                        $type->addDateCriterion($v);
                    } else {
                        $type->addDateCriterion(new FHIRImmunizationRecommendationDateCriterion($v));
                    }
                }
            } elseif ($json[self::FIELD_DATE_CRITERION] instanceof FHIRImmunizationRecommendationDateCriterion) {
                $type->addDateCriterion($json[self::FIELD_DATE_CRITERION]);
            } else {
                $type->addDateCriterion(new FHIRImmunizationRecommendationDateCriterion($json[self::FIELD_DATE_CRITERION]));
            }
        }
        if (isset($json[self::FIELD_DESCRIPTION]) || isset($json[self::FIELD_DESCRIPTION_EXT]) || array_key_exists(self::FIELD_DESCRIPTION, $json) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $json)) {
            $value = $json[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($json[self::FIELD_DESCRIPTION_EXT]) && is_array($json[self::FIELD_DESCRIPTION_EXT])) ? $json[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setDescription($value);
                } else if (is_array($value)) {
                    $type->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDescription(new FHIRString($ext));
            } else {
                $type->setDescription(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_SERIES]) || isset($json[self::FIELD_SERIES_EXT]) || array_key_exists(self::FIELD_SERIES, $json) || array_key_exists(self::FIELD_SERIES_EXT, $json)) {
            $value = $json[self::FIELD_SERIES] ?? null;
            $ext = (isset($json[self::FIELD_SERIES_EXT]) && is_array($json[self::FIELD_SERIES_EXT])) ? $json[self::FIELD_SERIES_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setSeries($value);
                } else if (is_array($value)) {
                    $type->setSeries(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setSeries(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSeries(new FHIRString($ext));
            } else {
                $type->setSeries(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_DOSE_NUMBER_POSITIVE_INT]) || isset($json[self::FIELD_DOSE_NUMBER_POSITIVE_INT_EXT]) || array_key_exists(self::FIELD_DOSE_NUMBER_POSITIVE_INT, $json) || array_key_exists(self::FIELD_DOSE_NUMBER_POSITIVE_INT_EXT, $json)) {
            $value = $json[self::FIELD_DOSE_NUMBER_POSITIVE_INT] ?? null;
            $ext = (isset($json[self::FIELD_DOSE_NUMBER_POSITIVE_INT_EXT]) && is_array($json[self::FIELD_DOSE_NUMBER_POSITIVE_INT_EXT])) ? $json[self::FIELD_DOSE_NUMBER_POSITIVE_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $type->setDoseNumberPositiveInt($value);
                } else if (is_array($value)) {
                    $type->setDoseNumberPositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $type->setDoseNumberPositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDoseNumberPositiveInt(new FHIRPositiveInt($ext));
            } else {
                $type->setDoseNumberPositiveInt(new FHIRPositiveInt(null));
            }
        }
        if (isset($json[self::FIELD_DOSE_NUMBER_STRING]) || isset($json[self::FIELD_DOSE_NUMBER_STRING_EXT]) || array_key_exists(self::FIELD_DOSE_NUMBER_STRING, $json) || array_key_exists(self::FIELD_DOSE_NUMBER_STRING_EXT, $json)) {
            $value = $json[self::FIELD_DOSE_NUMBER_STRING] ?? null;
            $ext = (isset($json[self::FIELD_DOSE_NUMBER_STRING_EXT]) && is_array($json[self::FIELD_DOSE_NUMBER_STRING_EXT])) ? $json[self::FIELD_DOSE_NUMBER_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setDoseNumberString($value);
                } else if (is_array($value)) {
                    $type->setDoseNumberString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setDoseNumberString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDoseNumberString(new FHIRString($ext));
            } else {
                $type->setDoseNumberString(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_SERIES_DOSES_POSITIVE_INT]) || isset($json[self::FIELD_SERIES_DOSES_POSITIVE_INT_EXT]) || array_key_exists(self::FIELD_SERIES_DOSES_POSITIVE_INT, $json) || array_key_exists(self::FIELD_SERIES_DOSES_POSITIVE_INT_EXT, $json)) {
            $value = $json[self::FIELD_SERIES_DOSES_POSITIVE_INT] ?? null;
            $ext = (isset($json[self::FIELD_SERIES_DOSES_POSITIVE_INT_EXT]) && is_array($json[self::FIELD_SERIES_DOSES_POSITIVE_INT_EXT])) ? $json[self::FIELD_SERIES_DOSES_POSITIVE_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $type->setSeriesDosesPositiveInt($value);
                } else if (is_array($value)) {
                    $type->setSeriesDosesPositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $type->setSeriesDosesPositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSeriesDosesPositiveInt(new FHIRPositiveInt($ext));
            } else {
                $type->setSeriesDosesPositiveInt(new FHIRPositiveInt(null));
            }
        }
        if (isset($json[self::FIELD_SERIES_DOSES_STRING]) || isset($json[self::FIELD_SERIES_DOSES_STRING_EXT]) || array_key_exists(self::FIELD_SERIES_DOSES_STRING, $json) || array_key_exists(self::FIELD_SERIES_DOSES_STRING_EXT, $json)) {
            $value = $json[self::FIELD_SERIES_DOSES_STRING] ?? null;
            $ext = (isset($json[self::FIELD_SERIES_DOSES_STRING_EXT]) && is_array($json[self::FIELD_SERIES_DOSES_STRING_EXT])) ? $json[self::FIELD_SERIES_DOSES_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setSeriesDosesString($value);
                } else if (is_array($value)) {
                    $type->setSeriesDosesString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setSeriesDosesString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSeriesDosesString(new FHIRString($ext));
            } else {
                $type->setSeriesDosesString(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_SUPPORTING_IMMUNIZATION]) || array_key_exists(self::FIELD_SUPPORTING_IMMUNIZATION, $json)) {
            if (is_array($json[self::FIELD_SUPPORTING_IMMUNIZATION])) {
                foreach($json[self::FIELD_SUPPORTING_IMMUNIZATION] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addSupportingImmunization($v);
                    } else {
                        $type->addSupportingImmunization(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_SUPPORTING_IMMUNIZATION] instanceof FHIRReference) {
                $type->addSupportingImmunization($json[self::FIELD_SUPPORTING_IMMUNIZATION]);
            } else {
                $type->addSupportingImmunization(new FHIRReference($json[self::FIELD_SUPPORTING_IMMUNIZATION]));
            }
        }
        if (isset($json[self::FIELD_SUPPORTING_PATIENT_INFORMATION]) || array_key_exists(self::FIELD_SUPPORTING_PATIENT_INFORMATION, $json)) {
            if (is_array($json[self::FIELD_SUPPORTING_PATIENT_INFORMATION])) {
                foreach($json[self::FIELD_SUPPORTING_PATIENT_INFORMATION] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addSupportingPatientInformation($v);
                    } else {
                        $type->addSupportingPatientInformation(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_SUPPORTING_PATIENT_INFORMATION] instanceof FHIRReference) {
                $type->addSupportingPatientInformation($json[self::FIELD_SUPPORTING_PATIENT_INFORMATION]);
            } else {
                $type->addSupportingPatientInformation(new FHIRReference($json[self::FIELD_SUPPORTING_PATIENT_INFORMATION]));
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
        if (isset($this->vaccineCode) && [] !== $this->vaccineCode) {
            $out->vaccineCode = $this->vaccineCode;
        }
        if (isset($this->targetDisease)) {
            $out->targetDisease = $this->targetDisease;
        }
        if (isset($this->contraindicatedVaccineCode) && [] !== $this->contraindicatedVaccineCode) {
            $out->contraindicatedVaccineCode = $this->contraindicatedVaccineCode;
        }
        if (isset($this->forecastStatus)) {
            $out->forecastStatus = $this->forecastStatus;
        }
        if (isset($this->forecastReason) && [] !== $this->forecastReason) {
            $out->forecastReason = $this->forecastReason;
        }
        if (isset($this->dateCriterion) && [] !== $this->dateCriterion) {
            $out->dateCriterion = $this->dateCriterion;
        }
        if (isset($this->description)) {
            if (null !== ($val = $this->description->getValue())) {
                $out->description = $val;
            }
            $ext = $this->description->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_description = $ext;
            }
        }
        if (isset($this->series)) {
            if (null !== ($val = $this->series->getValue())) {
                $out->series = $val;
            }
            $ext = $this->series->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_series = $ext;
            }
        }
        if (isset($this->doseNumberPositiveInt)) {
            if (null !== ($val = $this->doseNumberPositiveInt->getValue())) {
                $out->doseNumberPositiveInt = $val;
            }
            $ext = $this->doseNumberPositiveInt->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_doseNumberPositiveInt = $ext;
            }
        }
        if (isset($this->doseNumberString)) {
            if (null !== ($val = $this->doseNumberString->getValue())) {
                $out->doseNumberString = $val;
            }
            $ext = $this->doseNumberString->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_doseNumberString = $ext;
            }
        }
        if (isset($this->seriesDosesPositiveInt)) {
            if (null !== ($val = $this->seriesDosesPositiveInt->getValue())) {
                $out->seriesDosesPositiveInt = $val;
            }
            $ext = $this->seriesDosesPositiveInt->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_seriesDosesPositiveInt = $ext;
            }
        }
        if (isset($this->seriesDosesString)) {
            if (null !== ($val = $this->seriesDosesString->getValue())) {
                $out->seriesDosesString = $val;
            }
            $ext = $this->seriesDosesString->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_seriesDosesString = $ext;
            }
        }
        if (isset($this->supportingImmunization) && [] !== $this->supportingImmunization) {
            $out->supportingImmunization = $this->supportingImmunization;
        }
        if (isset($this->supportingPatientInformation) && [] !== $this->supportingPatientInformation) {
            $out->supportingPatientInformation = $this->supportingPatientInformation;
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