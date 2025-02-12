<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 12th, 2025 19:32+0000
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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * The MeasureReport resource contains the results of the calculation of a measure;
 * and optionally a reference to the resources involved in that calculation.
 */
class FHIRMeasureReportStratum extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEASURE_REPORT_DOT_STRATUM;

    /* class_default.php:55 */
    public const FIELD_VALUE_CODEABLE_CONCEPT = 'valueCodeableConcept';
    public const FIELD_VALUE_BOOLEAN = 'valueBoolean';
    public const FIELD_VALUE_BOOLEAN_EXT = '_valueBoolean';
    public const FIELD_VALUE_QUANTITY = 'valueQuantity';
    public const FIELD_VALUE_RANGE = 'valueRange';
    public const FIELD_VALUE_REFERENCE = 'valueReference';
    public const FIELD_COMPONENT = 'component';
    public const FIELD_POPULATION = 'population';
    public const FIELD_MEASURE_SCORE_QUANTITY = 'measureScoreQuantity';
    public const FIELD_MEASURE_SCORE_DATE_TIME = 'measureScoreDateTime';
    public const FIELD_MEASURE_SCORE_DATE_TIME_EXT = '_measureScoreDateTime';
    public const FIELD_MEASURE_SCORE_CODEABLE_CONCEPT = 'measureScoreCodeableConcept';
    public const FIELD_MEASURE_SCORE_PERIOD = 'measureScorePeriod';
    public const FIELD_MEASURE_SCORE_RANGE = 'measureScoreRange';
    public const FIELD_MEASURE_SCORE_DURATION = 'measureScoreDuration';

    /* class_default.php:74 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_VALUE_BOOLEAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MEASURE_SCORE_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value for this stratum, expressed as a CodeableConcept. When defining
     * stratifiers on complex values, the value must be rendered such that the value
     * for each stratum within the stratifier is unique. (choose any one of value*, but
     * only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $valueCodeableConcept;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value for this stratum, expressed as a CodeableConcept. When defining
     * stratifiers on complex values, the value must be rendered such that the value
     * for each stratum within the stratifier is unique. (choose any one of value*, but
     * only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $valueBoolean;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value for this stratum, expressed as a CodeableConcept. When defining
     * stratifiers on complex values, the value must be rendered such that the value
     * for each stratum within the stratifier is unique. (choose any one of value*, but
     * only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity 
     */
    protected FHIRQuantity $valueQuantity;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value for this stratum, expressed as a CodeableConcept. When defining
     * stratifiers on complex values, the value must be rendered such that the value
     * for each stratum within the stratifier is unique. (choose any one of value*, but
     * only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange 
     */
    protected FHIRRange $valueRange;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value for this stratum, expressed as a CodeableConcept. When defining
     * stratifiers on complex values, the value must be rendered such that the value
     * for each stratum within the stratifier is unique. (choose any one of value*, but
     * only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $valueReference;
    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * A stratifier component value.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportComponent[] 
     */
    protected array $component;
    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * The populations that make up the stratum, one for each type of population
     * appropriate to the measure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation1[] 
     */
    protected array $population;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this stratum, calculated as appropriate for the measure
     * type and scoring method, and based on only the members of this stratum. (choose
     * any one of measureScore*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity 
     */
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
     * The measure score for this stratum, calculated as appropriate for the measure
     * type and scoring method, and based on only the members of this stratum. (choose
     * any one of measureScore*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $measureScoreDateTime;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this stratum, calculated as appropriate for the measure
     * type and scoring method, and based on only the members of this stratum. (choose
     * any one of measureScore*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $measureScoreCodeableConcept;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this stratum, calculated as appropriate for the measure
     * type and scoring method, and based on only the members of this stratum. (choose
     * any one of measureScore*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod 
     */
    protected FHIRPeriod $measureScorePeriod;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this stratum, calculated as appropriate for the measure
     * type and scoring method, and based on only the members of this stratum. (choose
     * any one of measureScore*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange 
     */
    protected FHIRRange $measureScoreRange;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The measure score for this stratum, calculated as appropriate for the measure
     * type and scoring method, and based on only the members of this stratum. (choose
     * any one of measureScore*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration 
     */
    protected FHIRDuration $measureScoreDuration;

    /* constructor.php:61 */
    /**
     * FHIRMeasureReportStratum Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $valueCodeableConcept
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $valueBoolean
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $valueQuantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $valueRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $valueReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportComponent[] $component
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation1[] $population
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $measureScoreQuantity
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $measureScoreDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $measureScoreCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $measureScorePeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $measureScoreRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity\FHIRDuration $measureScoreDuration
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $valueCodeableConcept = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $valueBoolean = null,
                                null|FHIRQuantity $valueQuantity = null,
                                null|FHIRRange $valueRange = null,
                                null|FHIRReference $valueReference = null,
                                null|iterable $component = null,
                                null|iterable $population = null,
                                null|FHIRQuantity $measureScoreQuantity = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $measureScoreDateTime = null,
                                null|FHIRCodeableConcept $measureScoreCodeableConcept = null,
                                null|FHIRPeriod $measureScorePeriod = null,
                                null|FHIRRange $measureScoreRange = null,
                                null|FHIRDuration $measureScoreDuration = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $valueCodeableConcept) {
            $this->setValueCodeableConcept($valueCodeableConcept);
        }
        if (null !== $valueBoolean) {
            $this->setValueBoolean($valueBoolean);
        }
        if (null !== $valueQuantity) {
            $this->setValueQuantity($valueQuantity);
        }
        if (null !== $valueRange) {
            $this->setValueRange($valueRange);
        }
        if (null !== $valueReference) {
            $this->setValueReference($valueReference);
        }
        if (null !== $component) {
            $this->setComponent(...$component);
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
    }

    /* class_default.php:144 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:182 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value for this stratum, expressed as a CodeableConcept. When defining
     * stratifiers on complex values, the value must be rendered such that the value
     * for each stratum within the stratifier is unique. (choose any one of value*, but
     * only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getValueCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->valueCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value for this stratum, expressed as a CodeableConcept. When defining
     * stratifiers on complex values, the value must be rendered such that the value
     * for each stratum within the stratifier is unique. (choose any one of value*, but
     * only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $valueCodeableConcept
     * @return static
     */
    public function setValueCodeableConcept(null|FHIRCodeableConcept $valueCodeableConcept): self
    {
        if (null === $valueCodeableConcept) {
            unset($this->valueCodeableConcept);
            return $this;
        }
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value for this stratum, expressed as a CodeableConcept. When defining
     * stratifiers on complex values, the value must be rendered such that the value
     * for each stratum within the stratifier is unique. (choose any one of value*, but
     * only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean(): null|FHIRBoolean
    {
        return $this->valueBoolean ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value for this stratum, expressed as a CodeableConcept. When defining
     * stratifiers on complex values, the value must be rendered such that the value
     * for each stratum within the stratifier is unique. (choose any one of value*, but
     * only one)
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $valueBoolean
     * @return static
     */
    public function setValueBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $valueBoolean): self
    {
        if (null === $valueBoolean) {
            unset($this->valueBoolean);
            return $this;
        }
        if (!($valueBoolean instanceof FHIRBoolean)) {
            $valueBoolean = new FHIRBoolean(value: $valueBoolean);
        }
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value for this stratum, expressed as a CodeableConcept. When defining
     * stratifiers on complex values, the value must be rendered such that the value
     * for each stratum within the stratifier is unique. (choose any one of value*, but
     * only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getValueQuantity(): null|FHIRQuantity
    {
        return $this->valueQuantity ?? null;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value for this stratum, expressed as a CodeableConcept. When defining
     * stratifiers on complex values, the value must be rendered such that the value
     * for each stratum within the stratifier is unique. (choose any one of value*, but
     * only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $valueQuantity
     * @return static
     */
    public function setValueQuantity(null|FHIRQuantity $valueQuantity): self
    {
        if (null === $valueQuantity) {
            unset($this->valueQuantity);
            return $this;
        }
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value for this stratum, expressed as a CodeableConcept. When defining
     * stratifiers on complex values, the value must be rendered such that the value
     * for each stratum within the stratifier is unique. (choose any one of value*, but
     * only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    public function getValueRange(): null|FHIRRange
    {
        return $this->valueRange ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value for this stratum, expressed as a CodeableConcept. When defining
     * stratifiers on complex values, the value must be rendered such that the value
     * for each stratum within the stratifier is unique. (choose any one of value*, but
     * only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $valueRange
     * @return static
     */
    public function setValueRange(null|FHIRRange $valueRange): self
    {
        if (null === $valueRange) {
            unset($this->valueRange);
            return $this;
        }
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value for this stratum, expressed as a CodeableConcept. When defining
     * stratifiers on complex values, the value must be rendered such that the value
     * for each stratum within the stratifier is unique. (choose any one of value*, but
     * only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getValueReference(): null|FHIRReference
    {
        return $this->valueReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value for this stratum, expressed as a CodeableConcept. When defining
     * stratifiers on complex values, the value must be rendered such that the value
     * for each stratum within the stratifier is unique. (choose any one of value*, but
     * only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $valueReference
     * @return static
     */
    public function setValueReference(null|FHIRReference $valueReference): self
    {
        if (null === $valueReference) {
            unset($this->valueReference);
            return $this;
        }
        $this->valueReference = $valueReference;
        return $this;
    }

    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * A stratifier component value.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportComponent[]
     */
    public function getComponent(): array
    {
        return $this->component ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportComponent>
     */
    public function getComponentIterator(): iterable
    {
        if (!isset($this->component)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->component);
    }

    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * A stratifier component value.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportComponent $component
     * @return static
     */
    public function addComponent(FHIRMeasureReportComponent $component): self
    {
        if (!isset($this->component)) {
            $this->component = [];
        }
        $this->component[] = $component;
        return $this;
    }

    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * A stratifier component value.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportComponent ...$component
     * @return static
     */
    public function setComponent(FHIRMeasureReportComponent ...$component): self
    {
        if ([] === $component) {
            unset($this->component);
            return $this;
        }
        $this->component = $component;
        return $this;
    }

    /**
     * The MeasureReport resource contains the results of the calculation of a measure;
     * and optionally a reference to the resources involved in that calculation.
     *
     * The populations that make up the stratum, one for each type of population
     * appropriate to the measure.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation1[]
     */
    public function getPopulation(): array
    {
        return $this->population ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation1>
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
     * The populations that make up the stratum, one for each type of population
     * appropriate to the measure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation1 $population
     * @return static
     */
    public function addPopulation(FHIRMeasureReportPopulation1 $population): self
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
     * The populations that make up the stratum, one for each type of population
     * appropriate to the measure.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation1 ...$population
     * @return static
     */
    public function setPopulation(FHIRMeasureReportPopulation1 ...$population): self
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
     * The measure score for this stratum, calculated as appropriate for the measure
     * type and scoring method, and based on only the members of this stratum. (choose
     * any one of measureScore*, but only one)
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
     * The measure score for this stratum, calculated as appropriate for the measure
     * type and scoring method, and based on only the members of this stratum. (choose
     * any one of measureScore*, but only one)
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
     * The measure score for this stratum, calculated as appropriate for the measure
     * type and scoring method, and based on only the members of this stratum. (choose
     * any one of measureScore*, but only one)
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
     * The measure score for this stratum, calculated as appropriate for the measure
     * type and scoring method, and based on only the members of this stratum. (choose
     * any one of measureScore*, but only one)
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
     * The measure score for this stratum, calculated as appropriate for the measure
     * type and scoring method, and based on only the members of this stratum. (choose
     * any one of measureScore*, but only one)
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
     * The measure score for this stratum, calculated as appropriate for the measure
     * type and scoring method, and based on only the members of this stratum. (choose
     * any one of measureScore*, but only one)
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
     * The measure score for this stratum, calculated as appropriate for the measure
     * type and scoring method, and based on only the members of this stratum. (choose
     * any one of measureScore*, but only one)
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
     * The measure score for this stratum, calculated as appropriate for the measure
     * type and scoring method, and based on only the members of this stratum. (choose
     * any one of measureScore*, but only one)
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
     * The measure score for this stratum, calculated as appropriate for the measure
     * type and scoring method, and based on only the members of this stratum. (choose
     * any one of measureScore*, but only one)
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
     * The measure score for this stratum, calculated as appropriate for the measure
     * type and scoring method, and based on only the members of this stratum. (choose
     * any one of measureScore*, but only one)
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
     * The measure score for this stratum, calculated as appropriate for the measure
     * type and scoring method, and based on only the members of this stratum. (choose
     * any one of measureScore*, but only one)
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
     * The measure score for this stratum, calculated as appropriate for the measure
     * type and scoring method, and based on only the members of this stratum. (choose
     * any one of measureScore*, but only one)
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

    /* class_default.php:209 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratum $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratum
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMeasureReportStratum)) {
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
            } else if (self::FIELD_VALUE_CODEABLE_CONCEPT === $cen) {
                $type->setValueCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_BOOLEAN === $cen) {
                $type->setValueBoolean(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_QUANTITY === $cen) {
                $type->setValueQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_RANGE === $cen) {
                $type->setValueRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_REFERENCE === $cen) {
                $type->setValueReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COMPONENT === $cen) {
                $type->addComponent(FHIRMeasureReportComponent::xmlUnserialize($ce, $config));
            } else if (self::FIELD_POPULATION === $cen) {
                $type->addPopulation(FHIRMeasureReportPopulation1::xmlUnserialize($ce, $config));
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
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VALUE_BOOLEAN])) {
            if (isset($type->valueBoolean)) {
                $type->valueBoolean->setValue((string)$attributes[self::FIELD_VALUE_BOOLEAN]);
            } else {
                $type->setValueBoolean((string)$attributes[self::FIELD_VALUE_BOOLEAN]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_VALUE_BOOLEAN, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->valueBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_VALUE_BOOLEAN, $this->valueBoolean->_getValueAsString());
        }
        if (isset($this->measureScoreDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MEASURE_SCORE_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_MEASURE_SCORE_DATE_TIME, $this->measureScoreDateTime->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->valueCodeableConcept)) {
            $xw->startElement(self::FIELD_VALUE_CODEABLE_CONCEPT);
            $this->valueCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueBoolean)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_BOOLEAN]
                || $this->valueBoolean->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_BOOLEAN);
            $this->valueBoolean->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_BOOLEAN]);
            $xw->endElement();
        }
        if (isset($this->valueQuantity)) {
            $xw->startElement(self::FIELD_VALUE_QUANTITY);
            $this->valueQuantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueRange)) {
            $xw->startElement(self::FIELD_VALUE_RANGE);
            $this->valueRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueReference)) {
            $xw->startElement(self::FIELD_VALUE_REFERENCE);
            $this->valueReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->component)) {
            foreach ($this->component as $v) {
                $xw->startElement(self::FIELD_COMPONENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratum $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratum
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMeasureReportStratum)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->valueCodeableConcept) || property_exists($json, self::FIELD_VALUE_CODEABLE_CONCEPT)) {
            if (is_array($json->valueCodeableConcept)) {
                $type->setValueCodeableConcept(FHIRCodeableConcept::jsonUnserialize(reset($json->valueCodeableConcept), $config));
            } else {
                $type->setValueCodeableConcept(FHIRCodeableConcept::jsonUnserialize($json->valueCodeableConcept, $config));
            }
        }
        if (isset($json->valueBoolean)
            || isset($json->_valueBoolean)
            || property_exists($json, self::FIELD_VALUE_BOOLEAN)
            || property_exists($json, self::FIELD_VALUE_BOOLEAN_EXT)) {
            $v = $json->_valueBoolean ?? new \stdClass();
            $v->value = $json->valueBoolean ?? null;
            $type->setValueBoolean(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($json->valueQuantity) || property_exists($json, self::FIELD_VALUE_QUANTITY)) {
            if (is_array($json->valueQuantity)) {
                $type->setValueQuantity(FHIRQuantity::jsonUnserialize(reset($json->valueQuantity), $config));
            } else {
                $type->setValueQuantity(FHIRQuantity::jsonUnserialize($json->valueQuantity, $config));
            }
        }
        if (isset($json->valueRange) || property_exists($json, self::FIELD_VALUE_RANGE)) {
            if (is_array($json->valueRange)) {
                $type->setValueRange(FHIRRange::jsonUnserialize(reset($json->valueRange), $config));
            } else {
                $type->setValueRange(FHIRRange::jsonUnserialize($json->valueRange, $config));
            }
        }
        if (isset($json->valueReference) || property_exists($json, self::FIELD_VALUE_REFERENCE)) {
            if (is_array($json->valueReference)) {
                $type->setValueReference(FHIRReference::jsonUnserialize(reset($json->valueReference), $config));
            } else {
                $type->setValueReference(FHIRReference::jsonUnserialize($json->valueReference, $config));
            }
        }
        if (isset($json->component) || property_exists($json, self::FIELD_COMPONENT)) {
            if (is_object($json->component)) {
                $vals = [$json->component];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_COMPONENT, true);
            } else {
                $vals = $json->component;
            }
            foreach($vals as $v) {
                $type->addComponent(FHIRMeasureReportComponent::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->population) || property_exists($json, self::FIELD_POPULATION)) {
            if (is_object($json->population)) {
                $vals = [$json->population];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_POPULATION, true);
            } else {
                $vals = $json->population;
            }
            foreach($vals as $v) {
                $type->addPopulation(FHIRMeasureReportPopulation1::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->measureScoreQuantity) || property_exists($json, self::FIELD_MEASURE_SCORE_QUANTITY)) {
            if (is_array($json->measureScoreQuantity)) {
                $type->setMeasureScoreQuantity(FHIRQuantity::jsonUnserialize(reset($json->measureScoreQuantity), $config));
            } else {
                $type->setMeasureScoreQuantity(FHIRQuantity::jsonUnserialize($json->measureScoreQuantity, $config));
            }
        }
        if (isset($json->measureScoreDateTime)
            || isset($json->_measureScoreDateTime)
            || property_exists($json, self::FIELD_MEASURE_SCORE_DATE_TIME)
            || property_exists($json, self::FIELD_MEASURE_SCORE_DATE_TIME_EXT)) {
            $v = $json->_measureScoreDateTime ?? new \stdClass();
            $v->value = $json->measureScoreDateTime ?? null;
            $type->setMeasureScoreDateTime(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($json->measureScoreCodeableConcept) || property_exists($json, self::FIELD_MEASURE_SCORE_CODEABLE_CONCEPT)) {
            if (is_array($json->measureScoreCodeableConcept)) {
                $type->setMeasureScoreCodeableConcept(FHIRCodeableConcept::jsonUnserialize(reset($json->measureScoreCodeableConcept), $config));
            } else {
                $type->setMeasureScoreCodeableConcept(FHIRCodeableConcept::jsonUnserialize($json->measureScoreCodeableConcept, $config));
            }
        }
        if (isset($json->measureScorePeriod) || property_exists($json, self::FIELD_MEASURE_SCORE_PERIOD)) {
            if (is_array($json->measureScorePeriod)) {
                $type->setMeasureScorePeriod(FHIRPeriod::jsonUnserialize(reset($json->measureScorePeriod), $config));
            } else {
                $type->setMeasureScorePeriod(FHIRPeriod::jsonUnserialize($json->measureScorePeriod, $config));
            }
        }
        if (isset($json->measureScoreRange) || property_exists($json, self::FIELD_MEASURE_SCORE_RANGE)) {
            if (is_array($json->measureScoreRange)) {
                $type->setMeasureScoreRange(FHIRRange::jsonUnserialize(reset($json->measureScoreRange), $config));
            } else {
                $type->setMeasureScoreRange(FHIRRange::jsonUnserialize($json->measureScoreRange, $config));
            }
        }
        if (isset($json->measureScoreDuration) || property_exists($json, self::FIELD_MEASURE_SCORE_DURATION)) {
            if (is_array($json->measureScoreDuration)) {
                $type->setMeasureScoreDuration(FHIRDuration::jsonUnserialize(reset($json->measureScoreDuration), $config));
            } else {
                $type->setMeasureScoreDuration(FHIRDuration::jsonUnserialize($json->measureScoreDuration, $config));
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
        if (isset($this->valueCodeableConcept)) {
            $out->valueCodeableConcept = $this->valueCodeableConcept;
        }
        if (isset($this->valueBoolean)) {
            if (null !== ($val = $this->valueBoolean->getValue())) {
                $out->valueBoolean = $val;
            }
            if ($this->valueBoolean->_nonValueFieldDefined()) {
                $ext = $this->valueBoolean->jsonSerialize();
                unset($ext->value);
                $out->_valueBoolean = $ext;
            }
        }
        if (isset($this->valueQuantity)) {
            $out->valueQuantity = $this->valueQuantity;
        }
        if (isset($this->valueRange)) {
            $out->valueRange = $this->valueRange;
        }
        if (isset($this->valueReference)) {
            $out->valueReference = $this->valueReference;
        }
        if (isset($this->component) && [] !== $this->component) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_COMPONENT) && 1 === count($this->component)) {
                $out->component = $this->component[0];
            } else {
                $out->component = $this->component;
            }
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
        return $out;
    }
}