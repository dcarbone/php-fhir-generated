<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation;

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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
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
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A patient's point-in-time set of recommendations (i.e. forecasting) according to
 * a published schedule with optional supporting justification.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRImmunizationRecommendationRecommendation extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION;

    /* class_default.php:56 */
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
    public const FIELD_DOSE_NUMBER = 'doseNumber';
    public const FIELD_DOSE_NUMBER_EXT = '_doseNumber';
    public const FIELD_SERIES_DOSES = 'seriesDoses';
    public const FIELD_SERIES_DOSES_EXT = '_seriesDoses';
    public const FIELD_SUPPORTING_IMMUNIZATION = 'supportingImmunization';
    public const FIELD_SUPPORTING_PATIENT_INFORMATION = 'supportingPatientInformation';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_FORECAST_STATUS => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SERIES => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DOSE_NUMBER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SERIES_DOSES => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine(s) or vaccine group that pertain to the recommendation.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $vaccineCode;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The targeted disease for the recommendation.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $targetDisease;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine(s) which should not be used to fulfill the recommendation.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $forecastStatus;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason for the assigned forecast status.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $forecastReason;
    /**
     * A patient's point-in-time set of recommendations (i.e. forecasting) according to
     * a published schedule with optional supporting justification.
     *
     * Vaccine date recommendations. For example, earliest date to administer, latest
     * date to administer, etc.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion> 
     */
    #[FHIRImmunizationRecommendationDateCriterion]
    protected array $dateCriterion;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    #[FHIRMarkdown]
    protected FHIRMarkdown $description;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $series;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Nominal position of the recommended dose in a series as determined by the
     * evaluation and forecasting process (e.g. dose 2 is the next recommended dose).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $doseNumber;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The recommended number of doses to achieve immunity as determined by the
     * evaluation and forecasting process.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $seriesDoses;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Immunization event history and/or evaluation that supports the status and
     * recommendation.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> 
     */
    #[FHIRReference]
    protected array $supportingImmunization;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient Information that supports the status and recommendation. This includes
     * patient observations, adverse reactions and allergy/intolerance information.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> 
     */
    #[FHIRReference]
    protected array $supportingPatientInformation;

    /* constructor.php:61 */
    /**
     * FHIRImmunizationRecommendationRecommendation Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> $vaccineCode
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> $targetDisease
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> $contraindicatedVaccineCode
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $forecastStatus
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> $forecastReason
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion> $dateCriterion
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $series
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $doseNumber
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $seriesDoses
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> $supportingImmunization
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> $supportingPatientInformation
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $vaccineCode = null,
                                null|iterable $targetDisease = null,
                                null|iterable $contraindicatedVaccineCode = null,
                                null|FHIRCodeableConcept $forecastStatus = null,
                                null|iterable $forecastReason = null,
                                null|iterable $dateCriterion = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description = null,
                                null|string|FHIRStringPrimitive|FHIRString $series = null,
                                null|string|FHIRStringPrimitive|FHIRString $doseNumber = null,
                                null|string|FHIRStringPrimitive|FHIRString $seriesDoses = null,
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
            $this->setTargetDisease(...$targetDisease);
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
        if (null !== $doseNumber) {
            $this->setDoseNumber($doseNumber);
        }
        if (null !== $seriesDoses) {
            $this->setSeriesDoses($seriesDoses);
        }
        if (null !== $supportingImmunization) {
            $this->setSupportingImmunization(...$supportingImmunization);
        }
        if (null !== $supportingPatientInformation) {
            $this->setSupportingPatientInformation(...$supportingPatientInformation);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Vaccine(s) or vaccine group that pertain to the recommendation.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getVaccineCode(): array
    {
        return $this->vaccineCode ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getVaccineCodeIterator(): iterable
    {
        if (!isset($this->vaccineCode)) {
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $vaccineCode
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$vaccineCode
     * @return static
     */
    public function setVaccineCode(FHIRCodeableConcept ...$vaccineCode): self
    {
        if ([] === $vaccineCode) {
            unset($this->vaccineCode);
            return $this;
        }
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getTargetDisease(): array
    {
        return $this->targetDisease ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getTargetDiseaseIterator(): iterable
    {
        if (!isset($this->targetDisease)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->targetDisease);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The targeted disease for the recommendation.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $targetDisease
     * @return static
     */
    public function addTargetDisease(FHIRCodeableConcept $targetDisease): self
    {
        if (!isset($this->targetDisease)) {
            $this->targetDisease = [];
        }
        $this->targetDisease[] = $targetDisease;
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$targetDisease
     * @return static
     */
    public function setTargetDisease(FHIRCodeableConcept ...$targetDisease): self
    {
        if ([] === $targetDisease) {
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getContraindicatedVaccineCode(): array
    {
        return $this->contraindicatedVaccineCode ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getContraindicatedVaccineCodeIterator(): iterable
    {
        if (!isset($this->contraindicatedVaccineCode)) {
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $contraindicatedVaccineCode
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$contraindicatedVaccineCode
     * @return static
     */
    public function setContraindicatedVaccineCode(FHIRCodeableConcept ...$contraindicatedVaccineCode): self
    {
        if ([] === $contraindicatedVaccineCode) {
            unset($this->contraindicatedVaccineCode);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $forecastStatus
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getForecastReason(): array
    {
        return $this->forecastReason ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getForecastReasonIterator(): iterable
    {
        if (!isset($this->forecastReason)) {
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $forecastReason
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$forecastReason
     * @return static
     */
    public function setForecastReason(FHIRCodeableConcept ...$forecastReason): self
    {
        if ([] === $forecastReason) {
            unset($this->forecastReason);
            return $this;
        }
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion>
     */
    public function getDateCriterion(): array
    {
        return $this->dateCriterion ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion>
     */
    public function getDateCriterionIterator(): iterable
    {
        if (!isset($this->dateCriterion)) {
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion $dateCriterion
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion ...$dateCriterion
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
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getDescription(): null|FHIRMarkdown
    {
        return $this->description ?? null;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @return static
     */
    public function setDescription(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRMarkdown)) {
            $description = new FHIRMarkdown(value: $description);
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getSeries(): null|FHIRString
    {
        return $this->series ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $series
     * @return static
     */
    public function setSeries(null|string|FHIRStringPrimitive|FHIRString $series): self
    {
        if (null === $series) {
            unset($this->series);
            return $this;
        }
        if (!($series instanceof FHIRString)) {
            $series = new FHIRString(value: $series);
        }
        $this->series = $series;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Nominal position of the recommended dose in a series as determined by the
     * evaluation and forecasting process (e.g. dose 2 is the next recommended dose).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getDoseNumber(): null|FHIRString
    {
        return $this->doseNumber ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Nominal position of the recommended dose in a series as determined by the
     * evaluation and forecasting process (e.g. dose 2 is the next recommended dose).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $doseNumber
     * @return static
     */
    public function setDoseNumber(null|string|FHIRStringPrimitive|FHIRString $doseNumber): self
    {
        if (null === $doseNumber) {
            unset($this->doseNumber);
            return $this;
        }
        if (!($doseNumber instanceof FHIRString)) {
            $doseNumber = new FHIRString(value: $doseNumber);
        }
        $this->doseNumber = $doseNumber;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The recommended number of doses to achieve immunity as determined by the
     * evaluation and forecasting process.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getSeriesDoses(): null|FHIRString
    {
        return $this->seriesDoses ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The recommended number of doses to achieve immunity as determined by the
     * evaluation and forecasting process.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $seriesDoses
     * @return static
     */
    public function setSeriesDoses(null|string|FHIRStringPrimitive|FHIRString $seriesDoses): self
    {
        if (null === $seriesDoses) {
            unset($this->seriesDoses);
            return $this;
        }
        if (!($seriesDoses instanceof FHIRString)) {
            $seriesDoses = new FHIRString(value: $seriesDoses);
        }
        $this->seriesDoses = $seriesDoses;
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getSupportingImmunization(): array
    {
        return $this->supportingImmunization ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
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
     * Immunization event history and/or evaluation that supports the status and
     * recommendation.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $supportingImmunization
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$supportingImmunization
     * @return static
     */
    public function setSupportingImmunization(FHIRReference ...$supportingImmunization): self
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getSupportingPatientInformation(): array
    {
        return $this->supportingPatientInformation ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $supportingPatientInformation
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$supportingPatientInformation
     * @return static
     */
    public function setSupportingPatientInformation(FHIRReference ...$supportingPatientInformation): self
    {
        if ([] === $supportingPatientInformation) {
            unset($this->supportingPatientInformation);
            return $this;
        }
        $this->supportingPatientInformation = $supportingPatientInformation;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VACCINE_CODE === $cen) {
                $type->addVaccineCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TARGET_DISEASE === $cen) {
                $type->addTargetDisease(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTRAINDICATED_VACCINE_CODE === $cen) {
                $type->addContraindicatedVaccineCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FORECAST_STATUS === $cen) {
                $type->setForecastStatus(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FORECAST_REASON === $cen) {
                $type->addForecastReason(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATE_CRITERION === $cen) {
                $type->addDateCriterion(FHIRImmunizationRecommendationDateCriterion::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DESCRIPTION === $cen) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SERIES === $cen) {
                $type->setSeries(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DOSE_NUMBER === $cen) {
                $type->setDoseNumber(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SERIES_DOSES === $cen) {
                $type->setSeriesDoses(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUPPORTING_IMMUNIZATION === $cen) {
                $type->addSupportingImmunization(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUPPORTING_PATIENT_INFORMATION === $cen) {
                $type->addSupportingPatientInformation(FHIRReference::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            if (isset($type->description)) {
                $type->description->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DESCRIPTION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SERIES])) {
            if (isset($type->series)) {
                $type->series->setValue((string)$attributes[self::FIELD_SERIES]);
            } else {
                $type->setSeries((string)$attributes[self::FIELD_SERIES]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SERIES, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DOSE_NUMBER])) {
            if (isset($type->doseNumber)) {
                $type->doseNumber->setValue((string)$attributes[self::FIELD_DOSE_NUMBER]);
            } else {
                $type->setDoseNumber((string)$attributes[self::FIELD_DOSE_NUMBER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DOSE_NUMBER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SERIES_DOSES])) {
            if (isset($type->seriesDoses)) {
                $type->seriesDoses->setValue((string)$attributes[self::FIELD_SERIES_DOSES]);
            } else {
                $type->setSeriesDoses((string)$attributes[self::FIELD_SERIES_DOSES]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SERIES_DOSES, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->description) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->_getValueAsString());
        }
        if (isset($this->series) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SERIES]) {
            $xw->writeAttribute(self::FIELD_SERIES, $this->series->_getValueAsString());
        }
        if (isset($this->doseNumber) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DOSE_NUMBER]) {
            $xw->writeAttribute(self::FIELD_DOSE_NUMBER, $this->doseNumber->_getValueAsString());
        }
        if (isset($this->seriesDoses) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SERIES_DOSES]) {
            $xw->writeAttribute(self::FIELD_SERIES_DOSES, $this->seriesDoses->_getValueAsString());
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
            foreach ($this->targetDisease as $v) {
                $xw->startElement(self::FIELD_TARGET_DISEASE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
        if (isset($this->description)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DESCRIPTION]
                || $this->description->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DESCRIPTION]);
            $xw->endElement();
        }
        if (isset($this->series)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SERIES]
                || $this->series->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SERIES);
            $this->series->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SERIES]);
            $xw->endElement();
        }
        if (isset($this->doseNumber)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DOSE_NUMBER]
                || $this->doseNumber->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DOSE_NUMBER);
            $this->doseNumber->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DOSE_NUMBER]);
            $xw->endElement();
        }
        if (isset($this->seriesDoses)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SERIES_DOSES]
                || $this->seriesDoses->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SERIES_DOSES);
            $this->seriesDoses->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SERIES_DOSES]);
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
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
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
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->vaccineCode) || property_exists($decoded, self::FIELD_VACCINE_CODE)) {
            if (is_object($decoded->vaccineCode)) {
                $vals = [$decoded->vaccineCode];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_VACCINE_CODE, true);
            } else {
                $vals = $decoded->vaccineCode;
            }
            foreach($vals as $v) {
                $type->addVaccineCode(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->targetDisease) || property_exists($decoded, self::FIELD_TARGET_DISEASE)) {
            if (is_object($decoded->targetDisease)) {
                $vals = [$decoded->targetDisease];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_TARGET_DISEASE, true);
            } else {
                $vals = $decoded->targetDisease;
            }
            foreach($vals as $v) {
                $type->addTargetDisease(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->contraindicatedVaccineCode) || property_exists($decoded, self::FIELD_CONTRAINDICATED_VACCINE_CODE)) {
            if (is_object($decoded->contraindicatedVaccineCode)) {
                $vals = [$decoded->contraindicatedVaccineCode];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CONTRAINDICATED_VACCINE_CODE, true);
            } else {
                $vals = $decoded->contraindicatedVaccineCode;
            }
            foreach($vals as $v) {
                $type->addContraindicatedVaccineCode(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->forecastStatus) || property_exists($decoded, self::FIELD_FORECAST_STATUS)) {
            if (is_array($decoded->forecastStatus)) {
                $type->setForecastStatus(FHIRCodeableConcept::jsonUnserialize(reset($decoded->forecastStatus), $config));
            } else {
                $type->setForecastStatus(FHIRCodeableConcept::jsonUnserialize($decoded->forecastStatus, $config));
            }
        }
        if (isset($decoded->forecastReason) || property_exists($decoded, self::FIELD_FORECAST_REASON)) {
            if (is_object($decoded->forecastReason)) {
                $vals = [$decoded->forecastReason];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_FORECAST_REASON, true);
            } else {
                $vals = $decoded->forecastReason;
            }
            foreach($vals as $v) {
                $type->addForecastReason(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->dateCriterion) || property_exists($decoded, self::FIELD_DATE_CRITERION)) {
            if (is_object($decoded->dateCriterion)) {
                $vals = [$decoded->dateCriterion];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DATE_CRITERION, true);
            } else {
                $vals = $decoded->dateCriterion;
            }
            foreach($vals as $v) {
                $type->addDateCriterion(FHIRImmunizationRecommendationDateCriterion::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->description)
            || isset($decoded->_description)
            || property_exists($decoded, self::FIELD_DESCRIPTION)
            || property_exists($decoded, self::FIELD_DESCRIPTION_EXT)) {
            $v = $decoded->_description ?? new \stdClass();
            $v->value = $decoded->description ?? null;
            $type->setDescription(FHIRMarkdown::jsonUnserialize($v, $config));
        }
        if (isset($decoded->series)
            || isset($decoded->_series)
            || property_exists($decoded, self::FIELD_SERIES)
            || property_exists($decoded, self::FIELD_SERIES_EXT)) {
            $v = $decoded->_series ?? new \stdClass();
            $v->value = $decoded->series ?? null;
            $type->setSeries(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->doseNumber)
            || isset($decoded->_doseNumber)
            || property_exists($decoded, self::FIELD_DOSE_NUMBER)
            || property_exists($decoded, self::FIELD_DOSE_NUMBER_EXT)) {
            $v = $decoded->_doseNumber ?? new \stdClass();
            $v->value = $decoded->doseNumber ?? null;
            $type->setDoseNumber(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->seriesDoses)
            || isset($decoded->_seriesDoses)
            || property_exists($decoded, self::FIELD_SERIES_DOSES)
            || property_exists($decoded, self::FIELD_SERIES_DOSES_EXT)) {
            $v = $decoded->_seriesDoses ?? new \stdClass();
            $v->value = $decoded->seriesDoses ?? null;
            $type->setSeriesDoses(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->supportingImmunization) || property_exists($decoded, self::FIELD_SUPPORTING_IMMUNIZATION)) {
            if (is_object($decoded->supportingImmunization)) {
                $vals = [$decoded->supportingImmunization];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_SUPPORTING_IMMUNIZATION, true);
            } else {
                $vals = $decoded->supportingImmunization;
            }
            foreach($vals as $v) {
                $type->addSupportingImmunization(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->supportingPatientInformation) || property_exists($decoded, self::FIELD_SUPPORTING_PATIENT_INFORMATION)) {
            if (is_object($decoded->supportingPatientInformation)) {
                $vals = [$decoded->supportingPatientInformation];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_SUPPORTING_PATIENT_INFORMATION, true);
            } else {
                $vals = $decoded->supportingPatientInformation;
            }
            foreach($vals as $v) {
                $type->addSupportingPatientInformation(FHIRReference::jsonUnserialize($v, $config));
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
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_VACCINE_CODE) && 1 === count($this->vaccineCode)) {
                $out->vaccineCode = $this->vaccineCode[0];
            } else {
                $out->vaccineCode = $this->vaccineCode;
            }
        }
        if (isset($this->targetDisease) && [] !== $this->targetDisease) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_TARGET_DISEASE) && 1 === count($this->targetDisease)) {
                $out->targetDisease = $this->targetDisease[0];
            } else {
                $out->targetDisease = $this->targetDisease;
            }
        }
        if (isset($this->contraindicatedVaccineCode) && [] !== $this->contraindicatedVaccineCode) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CONTRAINDICATED_VACCINE_CODE) && 1 === count($this->contraindicatedVaccineCode)) {
                $out->contraindicatedVaccineCode = $this->contraindicatedVaccineCode[0];
            } else {
                $out->contraindicatedVaccineCode = $this->contraindicatedVaccineCode;
            }
        }
        if (isset($this->forecastStatus)) {
            $out->forecastStatus = $this->forecastStatus;
        }
        if (isset($this->forecastReason) && [] !== $this->forecastReason) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_FORECAST_REASON) && 1 === count($this->forecastReason)) {
                $out->forecastReason = $this->forecastReason[0];
            } else {
                $out->forecastReason = $this->forecastReason;
            }
        }
        if (isset($this->dateCriterion) && [] !== $this->dateCriterion) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_DATE_CRITERION) && 1 === count($this->dateCriterion)) {
                $out->dateCriterion = $this->dateCriterion[0];
            } else {
                $out->dateCriterion = $this->dateCriterion;
            }
        }
        if (isset($this->description)) {
            if (null !== ($val = $this->description->getValue())) {
                $out->description = $val;
            }
            if ($this->description->_nonValueFieldDefined()) {
                $ext = $this->description->jsonSerialize();
                unset($ext->value);
                $out->_description = $ext;
            }
        }
        if (isset($this->series)) {
            if (null !== ($val = $this->series->getValue())) {
                $out->series = $val;
            }
            if ($this->series->_nonValueFieldDefined()) {
                $ext = $this->series->jsonSerialize();
                unset($ext->value);
                $out->_series = $ext;
            }
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
        if (isset($this->seriesDoses)) {
            if (null !== ($val = $this->seriesDoses->getValue())) {
                $out->seriesDoses = $val;
            }
            if ($this->seriesDoses->_nonValueFieldDefined()) {
                $ext = $this->seriesDoses->jsonSerialize();
                unset($ext->value);
                $out->_seriesDoses = $ext;
            }
        }
        if (isset($this->supportingImmunization) && [] !== $this->supportingImmunization) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_SUPPORTING_IMMUNIZATION) && 1 === count($this->supportingImmunization)) {
                $out->supportingImmunization = $this->supportingImmunization[0];
            } else {
                $out->supportingImmunization = $this->supportingImmunization;
            }
        }
        if (isset($this->supportingPatientInformation) && [] !== $this->supportingPatientInformation) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_SUPPORTING_PATIENT_INFORMATION) && 1 === count($this->supportingPatientInformation)) {
                $out->supportingPatientInformation = $this->supportingPatientInformation[0];
            } else {
                $out->supportingPatientInformation = $this->supportingPatientInformation;
            }
        }
        return $out;
    }
}