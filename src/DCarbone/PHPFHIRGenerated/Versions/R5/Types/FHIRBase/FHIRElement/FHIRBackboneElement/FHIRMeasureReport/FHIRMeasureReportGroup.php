<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport;

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
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * The MeasureReport resource contains the results of the calculation of a measure;
 * and optionally a reference to the resources involved in that calculation.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRMeasureReportGroup extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEASURE_REPORT_DOT_GROUP;

    /* class_default.php:56 */
    public const FIELD_LINK_ID = 'linkId';
    public const FIELD_LINK_ID_EXT = '_linkId';
    public const FIELD_CODE = 'code';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_POPULATION = 'population';
    public const FIELD_MEASURE_SCORE_QUANTITY = 'measureScoreQuantity';
    public const FIELD_MEASURE_SCORE_DATE_TIME = 'measureScoreDateTime';
    public const FIELD_MEASURE_SCORE_DATE_TIME_EXT = '_measureScoreDateTime';
    public const FIELD_MEASURE_SCORE_CODEABLE_CONCEPT = 'measureScoreCodeableConcept';
    public const FIELD_MEASURE_SCORE_PERIOD = 'measureScorePeriod';
    public const FIELD_MEASURE_SCORE_RANGE = 'measureScoreRange';
    public const FIELD_MEASURE_SCORE_DURATION = 'measureScoreDuration';
    public const FIELD_STRATIFIER = 'stratifier';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_LINK_ID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MEASURE_SCORE_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The group from the Measure that corresponds to this group in the MeasureReport
     * resource.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $linkId;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The meaning of the population group as defined in the measure definition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $code;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Optional subject identifying the individual or individuals the report is for.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    #[FHIRReference]
    protected FHIRReference $subject;
    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * The populations that make up the population group, one for each type of
     * population appropriate for the measure.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation> 
     */
    #[FHIRMeasureReportPopulation]
    protected array $population;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group. (choose any one of measureScore*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity 
     */
    #[FHIRQuantity]
    protected FHIRQuantity $measureScoreQuantity;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group. (choose any one of measureScore*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime 
     */
    #[FHIRDateTime]
    protected FHIRDateTime $measureScoreDateTime;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group. (choose any one of measureScore*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $measureScoreCodeableConcept;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group. (choose any one of measureScore*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod 
     */
    #[FHIRPeriod]
    protected FHIRPeriod $measureScorePeriod;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group. (choose any one of measureScore*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange 
     */
    #[FHIRRange]
    protected FHIRRange $measureScoreRange;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group. (choose any one of measureScore*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration 
     */
    #[FHIRDuration]
    protected FHIRDuration $measureScoreDuration;
    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * When a measure includes multiple stratifiers, there will be a stratifier group
     * for each stratifier defined by the measure.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratifier> 
     */
    #[FHIRMeasureReportStratifier]
    protected array $stratifier;

    /* constructor.php:61 */
    /**
     * FHIRMeasureReportGroup Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $linkId
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $code
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subject
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation> $population
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $measureScoreQuantity
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $measureScoreDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $measureScoreCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $measureScorePeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $measureScoreRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration $measureScoreDuration
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratifier> $stratifier
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $linkId = null,
                                null|FHIRCodeableConcept $code = null,
                                null|FHIRReference $subject = null,
                                null|iterable $population = null,
                                null|FHIRQuantity $measureScoreQuantity = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $measureScoreDateTime = null,
                                null|FHIRCodeableConcept $measureScoreCodeableConcept = null,
                                null|FHIRPeriod $measureScorePeriod = null,
                                null|FHIRRange $measureScoreRange = null,
                                null|FHIRDuration $measureScoreDuration = null,
                                null|iterable $stratifier = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $linkId) {
            $this->setLinkId($linkId);
        }
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $subject) {
            $this->setSubject($subject);
        }
        if (null !== $population) {
            $this->setPopulation(...$population);
        }
        if (null !== $measureScoreQuantity) {
            $this->setMeasureScoreQuantity($measureScoreQuantity);
        }
        if (null !== $measureScoreDateTime) {
            $this->setMeasureScoreDateTime($measureScoreDateTime);
        }
        if (null !== $measureScoreCodeableConcept) {
            $this->setMeasureScoreCodeableConcept($measureScoreCodeableConcept);
        }
        if (null !== $measureScorePeriod) {
            $this->setMeasureScorePeriod($measureScorePeriod);
        }
        if (null !== $measureScoreRange) {
            $this->setMeasureScoreRange($measureScoreRange);
        }
        if (null !== $measureScoreDuration) {
            $this->setMeasureScoreDuration($measureScoreDuration);
        }
        if (null !== $stratifier) {
            $this->setStratifier(...$stratifier);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The group from the Measure that corresponds to this group in the MeasureReport
     * resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getLinkId(): null|FHIRString
    {
        return $this->linkId ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The group from the Measure that corresponds to this group in the MeasureReport
     * resource.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $linkId
     * @return static
     */
    public function setLinkId(null|string|FHIRStringPrimitive|FHIRString $linkId): self
    {
        if (null === $linkId) {
            unset($this->linkId);
            return $this;
        }
        if (!($linkId instanceof FHIRString)) {
            $linkId = new FHIRString(value: $linkId);
        }
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The meaning of the population group as defined in the measure definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getCode(): null|FHIRCodeableConcept
    {
        return $this->code ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The meaning of the population group as defined in the measure definition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(null|FHIRCodeableConcept $code): self
    {
        if (null === $code) {
            unset($this->code);
            return $this;
        }
        $this->code = $code;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Optional subject identifying the individual or individuals the report is for.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getSubject(): null|FHIRReference
    {
        return $this->subject ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Optional subject identifying the individual or individuals the report is for.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subject
     * @return static
     */
    public function setSubject(null|FHIRReference $subject): self
    {
        if (null === $subject) {
            unset($this->subject);
            return $this;
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * The populations that make up the population group, one for each type of
     * population appropriate for the measure.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation>
     */
    public function getPopulation(): array
    {
        return $this->population ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation>
     */
    public function getPopulationIterator(): iterable
    {
        if (!isset($this->population)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->population);
    }

    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * The populations that make up the population group, one for each type of
     * population appropriate for the measure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation $population
     * @return static
     */
    public function addPopulation(FHIRMeasureReportPopulation $population): self
    {
        if (!isset($this->population)) {
            $this->population = [];
        }
        $this->population[] = $population;
        return $this;
    }

    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * The populations that make up the population group, one for each type of
     * population appropriate for the measure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation ...$population
     * @return static
     */
    public function setPopulation(FHIRMeasureReportPopulation ...$population): self
    {
        if ([] === $population) {
            unset($this->population);
            return $this;
        }
        $this->population = $population;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group. (choose any one of measureScore*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getMeasureScoreQuantity(): null|FHIRQuantity
    {
        return $this->measureScoreQuantity ?? null;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group. (choose any one of measureScore*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $measureScoreQuantity
     * @return static
     */
    public function setMeasureScoreQuantity(null|FHIRQuantity $measureScoreQuantity): self
    {
        if (null === $measureScoreQuantity) {
            unset($this->measureScoreQuantity);
            return $this;
        }
        $this->measureScoreQuantity = $measureScoreQuantity;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group. (choose any one of measureScore*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getMeasureScoreDateTime(): null|FHIRDateTime
    {
        return $this->measureScoreDateTime ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group. (choose any one of measureScore*, but only one)
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $measureScoreDateTime
     * @return static
     */
    public function setMeasureScoreDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $measureScoreDateTime): self
    {
        if (null === $measureScoreDateTime) {
            unset($this->measureScoreDateTime);
            return $this;
        }
        if (!($measureScoreDateTime instanceof FHIRDateTime)) {
            $measureScoreDateTime = new FHIRDateTime(value: $measureScoreDateTime);
        }
        $this->measureScoreDateTime = $measureScoreDateTime;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group. (choose any one of measureScore*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getMeasureScoreCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->measureScoreCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group. (choose any one of measureScore*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $measureScoreCodeableConcept
     * @return static
     */
    public function setMeasureScoreCodeableConcept(null|FHIRCodeableConcept $measureScoreCodeableConcept): self
    {
        if (null === $measureScoreCodeableConcept) {
            unset($this->measureScoreCodeableConcept);
            return $this;
        }
        $this->measureScoreCodeableConcept = $measureScoreCodeableConcept;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group. (choose any one of measureScore*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    public function getMeasureScorePeriod(): null|FHIRPeriod
    {
        return $this->measureScorePeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group. (choose any one of measureScore*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $measureScorePeriod
     * @return static
     */
    public function setMeasureScorePeriod(null|FHIRPeriod $measureScorePeriod): self
    {
        if (null === $measureScorePeriod) {
            unset($this->measureScorePeriod);
            return $this;
        }
        $this->measureScorePeriod = $measureScorePeriod;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group. (choose any one of measureScore*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    public function getMeasureScoreRange(): null|FHIRRange
    {
        return $this->measureScoreRange ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group. (choose any one of measureScore*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $measureScoreRange
     * @return static
     */
    public function setMeasureScoreRange(null|FHIRRange $measureScoreRange): self
    {
        if (null === $measureScoreRange) {
            unset($this->measureScoreRange);
            return $this;
        }
        $this->measureScoreRange = $measureScoreRange;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group. (choose any one of measureScore*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration
     */
    public function getMeasureScoreDuration(): null|FHIRDuration
    {
        return $this->measureScoreDuration ?? null;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this population group, calculated as appropriate for the
     * measure type and scoring method, and based on the contents of the populations
     * defined in the group. (choose any one of measureScore*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration $measureScoreDuration
     * @return static
     */
    public function setMeasureScoreDuration(null|FHIRDuration $measureScoreDuration): self
    {
        if (null === $measureScoreDuration) {
            unset($this->measureScoreDuration);
            return $this;
        }
        $this->measureScoreDuration = $measureScoreDuration;
        return $this;
    }

    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * When a measure includes multiple stratifiers, there will be a stratifier group
     * for each stratifier defined by the measure.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratifier>
     */
    public function getStratifier(): array
    {
        return $this->stratifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratifier>
     */
    public function getStratifierIterator(): iterable
    {
        if (!isset($this->stratifier)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->stratifier);
    }

    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * When a measure includes multiple stratifiers, there will be a stratifier group
     * for each stratifier defined by the measure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratifier $stratifier
     * @return static
     */
    public function addStratifier(FHIRMeasureReportStratifier $stratifier): self
    {
        if (!isset($this->stratifier)) {
            $this->stratifier = [];
        }
        $this->stratifier[] = $stratifier;
        return $this;
    }

    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * When a measure includes multiple stratifiers, there will be a stratifier group
     * for each stratifier defined by the measure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratifier ...$stratifier
     * @return static
     */
    public function setStratifier(FHIRMeasureReportStratifier ...$stratifier): self
    {
        if ([] === $stratifier) {
            unset($this->stratifier);
            return $this;
        }
        $this->stratifier = $stratifier;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMeasureReportGroup)) {
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
            } else if (self::FIELD_LINK_ID === $cen) {
                $type->setLinkId(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE === $cen) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBJECT === $cen) {
                $type->setSubject(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_POPULATION === $cen) {
                $type->addPopulation(FHIRMeasureReportPopulation::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MEASURE_SCORE_QUANTITY === $cen) {
                $type->setMeasureScoreQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MEASURE_SCORE_DATE_TIME === $cen) {
                $type->setMeasureScoreDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MEASURE_SCORE_CODEABLE_CONCEPT === $cen) {
                $type->setMeasureScoreCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MEASURE_SCORE_PERIOD === $cen) {
                $type->setMeasureScorePeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MEASURE_SCORE_RANGE === $cen) {
                $type->setMeasureScoreRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MEASURE_SCORE_DURATION === $cen) {
                $type->setMeasureScoreDuration(FHIRDuration::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STRATIFIER === $cen) {
                $type->addStratifier(FHIRMeasureReportStratifier::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LINK_ID])) {
            if (isset($type->linkId)) {
                $type->linkId->setValue((string)$attributes[self::FIELD_LINK_ID]);
            } else {
                $type->setLinkId((string)$attributes[self::FIELD_LINK_ID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LINK_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MEASURE_SCORE_DATE_TIME])) {
            if (isset($type->measureScoreDateTime)) {
                $type->measureScoreDateTime->setValue((string)$attributes[self::FIELD_MEASURE_SCORE_DATE_TIME]);
            } else {
                $type->setMeasureScoreDateTime((string)$attributes[self::FIELD_MEASURE_SCORE_DATE_TIME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MEASURE_SCORE_DATE_TIME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->linkId) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LINK_ID]) {
            $xw->writeAttribute(self::FIELD_LINK_ID, $this->linkId->_getValueAsString());
        }
        if (isset($this->measureScoreDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MEASURE_SCORE_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_MEASURE_SCORE_DATE_TIME, $this->measureScoreDateTime->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->linkId)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LINK_ID]
                || $this->linkId->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LINK_ID);
            $this->linkId->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LINK_ID]);
            $xw->endElement();
        }
        if (isset($this->code)) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->subject)) {
            $xw->startElement(self::FIELD_SUBJECT);
            $this->subject->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->population)) {
            foreach ($this->population as $v) {
                $xw->startElement(self::FIELD_POPULATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->measureScoreQuantity)) {
            $xw->startElement(self::FIELD_MEASURE_SCORE_QUANTITY);
            $this->measureScoreQuantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->measureScoreDateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MEASURE_SCORE_DATE_TIME]
                || $this->measureScoreDateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MEASURE_SCORE_DATE_TIME);
            $this->measureScoreDateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MEASURE_SCORE_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->measureScoreCodeableConcept)) {
            $xw->startElement(self::FIELD_MEASURE_SCORE_CODEABLE_CONCEPT);
            $this->measureScoreCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->measureScorePeriod)) {
            $xw->startElement(self::FIELD_MEASURE_SCORE_PERIOD);
            $this->measureScorePeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->measureScoreRange)) {
            $xw->startElement(self::FIELD_MEASURE_SCORE_RANGE);
            $this->measureScoreRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->measureScoreDuration)) {
            $xw->startElement(self::FIELD_MEASURE_SCORE_DURATION);
            $this->measureScoreDuration->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->stratifier)) {
            foreach ($this->stratifier as $v) {
                $xw->startElement(self::FIELD_STRATIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMeasureReportGroup)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->linkId)
            || isset($decoded->_linkId)
            || property_exists($decoded, self::FIELD_LINK_ID)
            || property_exists($decoded, self::FIELD_LINK_ID_EXT)) {
            $v = $decoded->_linkId ?? new \stdClass();
            $v->value = $decoded->linkId ?? null;
            $type->setLinkId(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->code) || property_exists($decoded, self::FIELD_CODE)) {
            if (is_array($decoded->code)) {
                $type->setCode(FHIRCodeableConcept::jsonUnserialize(reset($decoded->code), $config));
            } else {
                $type->setCode(FHIRCodeableConcept::jsonUnserialize($decoded->code, $config));
            }
        }
        if (isset($decoded->subject) || property_exists($decoded, self::FIELD_SUBJECT)) {
            if (is_array($decoded->subject)) {
                $type->setSubject(FHIRReference::jsonUnserialize(reset($decoded->subject), $config));
            } else {
                $type->setSubject(FHIRReference::jsonUnserialize($decoded->subject, $config));
            }
        }
        if (isset($decoded->population) || property_exists($decoded, self::FIELD_POPULATION)) {
            if (is_object($decoded->population)) {
                $vals = [$decoded->population];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_POPULATION, true);
            } else {
                $vals = $decoded->population;
            }
            foreach($vals as $v) {
                $type->addPopulation(FHIRMeasureReportPopulation::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->measureScoreQuantity) || property_exists($decoded, self::FIELD_MEASURE_SCORE_QUANTITY)) {
            if (is_array($decoded->measureScoreQuantity)) {
                $type->setMeasureScoreQuantity(FHIRQuantity::jsonUnserialize(reset($decoded->measureScoreQuantity), $config));
            } else {
                $type->setMeasureScoreQuantity(FHIRQuantity::jsonUnserialize($decoded->measureScoreQuantity, $config));
            }
        }
        if (isset($decoded->measureScoreDateTime)
            || isset($decoded->_measureScoreDateTime)
            || property_exists($decoded, self::FIELD_MEASURE_SCORE_DATE_TIME)
            || property_exists($decoded, self::FIELD_MEASURE_SCORE_DATE_TIME_EXT)) {
            $v = $decoded->_measureScoreDateTime ?? new \stdClass();
            $v->value = $decoded->measureScoreDateTime ?? null;
            $type->setMeasureScoreDateTime(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->measureScoreCodeableConcept) || property_exists($decoded, self::FIELD_MEASURE_SCORE_CODEABLE_CONCEPT)) {
            if (is_array($decoded->measureScoreCodeableConcept)) {
                $type->setMeasureScoreCodeableConcept(FHIRCodeableConcept::jsonUnserialize(reset($decoded->measureScoreCodeableConcept), $config));
            } else {
                $type->setMeasureScoreCodeableConcept(FHIRCodeableConcept::jsonUnserialize($decoded->measureScoreCodeableConcept, $config));
            }
        }
        if (isset($decoded->measureScorePeriod) || property_exists($decoded, self::FIELD_MEASURE_SCORE_PERIOD)) {
            if (is_array($decoded->measureScorePeriod)) {
                $type->setMeasureScorePeriod(FHIRPeriod::jsonUnserialize(reset($decoded->measureScorePeriod), $config));
            } else {
                $type->setMeasureScorePeriod(FHIRPeriod::jsonUnserialize($decoded->measureScorePeriod, $config));
            }
        }
        if (isset($decoded->measureScoreRange) || property_exists($decoded, self::FIELD_MEASURE_SCORE_RANGE)) {
            if (is_array($decoded->measureScoreRange)) {
                $type->setMeasureScoreRange(FHIRRange::jsonUnserialize(reset($decoded->measureScoreRange), $config));
            } else {
                $type->setMeasureScoreRange(FHIRRange::jsonUnserialize($decoded->measureScoreRange, $config));
            }
        }
        if (isset($decoded->measureScoreDuration) || property_exists($decoded, self::FIELD_MEASURE_SCORE_DURATION)) {
            if (is_array($decoded->measureScoreDuration)) {
                $type->setMeasureScoreDuration(FHIRDuration::jsonUnserialize(reset($decoded->measureScoreDuration), $config));
            } else {
                $type->setMeasureScoreDuration(FHIRDuration::jsonUnserialize($decoded->measureScoreDuration, $config));
            }
        }
        if (isset($decoded->stratifier) || property_exists($decoded, self::FIELD_STRATIFIER)) {
            if (is_object($decoded->stratifier)) {
                $vals = [$decoded->stratifier];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_STRATIFIER, true);
            } else {
                $vals = $decoded->stratifier;
            }
            foreach($vals as $v) {
                $type->addStratifier(FHIRMeasureReportStratifier::jsonUnserialize($v, $config));
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
        if (isset($this->linkId)) {
            if (null !== ($val = $this->linkId->getValue())) {
                $out->linkId = $val;
            }
            if ($this->linkId->_nonValueFieldDefined()) {
                $ext = $this->linkId->jsonSerialize();
                unset($ext->value);
                $out->_linkId = $ext;
            }
        }
        if (isset($this->code)) {
            $out->code = $this->code;
        }
        if (isset($this->subject)) {
            $out->subject = $this->subject;
        }
        if (isset($this->population) && [] !== $this->population) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_POPULATION) && 1 === count($this->population)) {
                $out->population = $this->population[0];
            } else {
                $out->population = $this->population;
            }
        }
        if (isset($this->measureScoreQuantity)) {
            $out->measureScoreQuantity = $this->measureScoreQuantity;
        }
        if (isset($this->measureScoreDateTime)) {
            if (null !== ($val = $this->measureScoreDateTime->getValue())) {
                $out->measureScoreDateTime = $val;
            }
            if ($this->measureScoreDateTime->_nonValueFieldDefined()) {
                $ext = $this->measureScoreDateTime->jsonSerialize();
                unset($ext->value);
                $out->_measureScoreDateTime = $ext;
            }
        }
        if (isset($this->measureScoreCodeableConcept)) {
            $out->measureScoreCodeableConcept = $this->measureScoreCodeableConcept;
        }
        if (isset($this->measureScorePeriod)) {
            $out->measureScorePeriod = $this->measureScorePeriod;
        }
        if (isset($this->measureScoreRange)) {
            $out->measureScoreRange = $this->measureScoreRange;
        }
        if (isset($this->measureScoreDuration)) {
            $out->measureScoreDuration = $this->measureScoreDuration;
        }
        if (isset($this->stratifier) && [] !== $this->stratifier) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_STRATIFIER) && 1 === count($this->stratifier)) {
                $out->stratifier = $this->stratifier[0];
            } else {
                $out->stratifier = $this->stratifier;
            }
        }
        return $out;
    }
}