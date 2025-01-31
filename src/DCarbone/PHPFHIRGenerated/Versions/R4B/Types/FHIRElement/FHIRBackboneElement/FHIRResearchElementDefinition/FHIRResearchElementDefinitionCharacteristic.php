<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 00:19+0000
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
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDataRequirement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExpression;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRGroupMeasure;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUsageContext;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * The ResearchElementDefinition resource describes a "PICO" element that knowledge
 * (evidence, assertion, recommendation) is about.
 */
class FHIRResearchElementDefinitionCharacteristic extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_RESEARCH_ELEMENT_DEFINITION_DOT_CHARACTERISTIC;

    /* class_default.php:48 */
    public const FIELD_DEFINITION_CODEABLE_CONCEPT = 'definitionCodeableConcept';
    public const FIELD_DEFINITION_CANONICAL = 'definitionCanonical';
    public const FIELD_DEFINITION_CANONICAL_EXT = '_definitionCanonical';
    public const FIELD_DEFINITION_EXPRESSION = 'definitionExpression';
    public const FIELD_DEFINITION_DATA_REQUIREMENT = 'definitionDataRequirement';
    public const FIELD_USAGE_CONTEXT = 'usageContext';
    public const FIELD_EXCLUDE = 'exclude';
    public const FIELD_EXCLUDE_EXT = '_exclude';
    public const FIELD_UNIT_OF_MEASURE = 'unitOfMeasure';
    public const FIELD_STUDY_EFFECTIVE_DESCRIPTION = 'studyEffectiveDescription';
    public const FIELD_STUDY_EFFECTIVE_DESCRIPTION_EXT = '_studyEffectiveDescription';
    public const FIELD_STUDY_EFFECTIVE_DATE_TIME = 'studyEffectiveDateTime';
    public const FIELD_STUDY_EFFECTIVE_DATE_TIME_EXT = '_studyEffectiveDateTime';
    public const FIELD_STUDY_EFFECTIVE_PERIOD = 'studyEffectivePeriod';
    public const FIELD_STUDY_EFFECTIVE_DURATION = 'studyEffectiveDuration';
    public const FIELD_STUDY_EFFECTIVE_TIMING = 'studyEffectiveTiming';
    public const FIELD_STUDY_EFFECTIVE_TIME_FROM_START = 'studyEffectiveTimeFromStart';
    public const FIELD_STUDY_EFFECTIVE_GROUP_MEASURE = 'studyEffectiveGroupMeasure';
    public const FIELD_STUDY_EFFECTIVE_GROUP_MEASURE_EXT = '_studyEffectiveGroupMeasure';
    public const FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION = 'participantEffectiveDescription';
    public const FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION_EXT = '_participantEffectiveDescription';
    public const FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME = 'participantEffectiveDateTime';
    public const FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME_EXT = '_participantEffectiveDateTime';
    public const FIELD_PARTICIPANT_EFFECTIVE_PERIOD = 'participantEffectivePeriod';
    public const FIELD_PARTICIPANT_EFFECTIVE_DURATION = 'participantEffectiveDuration';
    public const FIELD_PARTICIPANT_EFFECTIVE_TIMING = 'participantEffectiveTiming';
    public const FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START = 'participantEffectiveTimeFromStart';
    public const FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE = 'participantEffectiveGroupMeasure';
    public const FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE_EXT = '_participantEffectiveGroupMeasure';

    /* class_default.php:67 */
    private static array $_validationRules = [
        self::FIELD_DEFINITION_CODEABLE_CONCEPT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_DEFINITION_CANONICAL => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_DEFINITION_EXPRESSION => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_DEFINITION_DATA_REQUIREMENT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_DEFINITION_CANONICAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXCLUDE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_STUDY_EFFECTIVE_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_STUDY_EFFECTIVE_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $definitionCodeableConcept;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical 
     */
    protected FHIRCanonical $definitionCanonical;
    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExpression 
     */
    protected FHIRExpression $definitionExpression;
    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDataRequirement 
     */
    protected FHIRDataRequirement $definitionDataRequirement;
    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Use UsageContext to define the members of the population, such as Age Ranges,
     * Genders, Settings.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUsageContext[] 
     */
    protected array $usageContext;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When true, members with this characteristic are excluded from the element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $exclude;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the UCUM unit for the outcome.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $unitOfMeasure;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A narrative description of the time period the study covers.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $studyEffectiveDescription;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $studyEffectiveDateTime;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $studyEffectivePeriod;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration 
     */
    protected FHIRDuration $studyEffectiveDuration;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTiming 
     */
    protected FHIRTiming $studyEffectiveTiming;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates duration from the study initiation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration 
     */
    protected FHIRDuration $studyEffectiveTimeFromStart;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRGroupMeasure 
     */
    protected FHIRGroupMeasure $studyEffectiveGroupMeasure;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A narrative description of the time period the study covers.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $participantEffectiveDescription;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $participantEffectiveDateTime;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $participantEffectivePeriod;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration 
     */
    protected FHIRDuration $participantEffectiveDuration;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTiming 
     */
    protected FHIRTiming $participantEffectiveTiming;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates duration from the participant's study entry.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration 
     */
    protected FHIRDuration $participantEffectiveTimeFromStart;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRGroupMeasure 
     */
    protected FHIRGroupMeasure $participantEffectiveGroupMeasure;

    /* constructor.php:63 */
    /**
     * FHIRResearchElementDefinitionCharacteristic Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $definitionCodeableConcept
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical $definitionCanonical
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExpression $definitionExpression
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDataRequirement $definitionDataRequirement
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUsageContext[] $usageContext
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean $exclude
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $unitOfMeasure
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $studyEffectiveDescription
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $studyEffectiveDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod $studyEffectivePeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration $studyEffectiveDuration
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTiming $studyEffectiveTiming
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration $studyEffectiveTimeFromStart
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRGroupMeasure $studyEffectiveGroupMeasure
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $participantEffectiveDescription
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $participantEffectiveDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod $participantEffectivePeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration $participantEffectiveDuration
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTiming $participantEffectiveTiming
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration $participantEffectiveTimeFromStart
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRGroupMeasure $participantEffectiveGroupMeasure
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $definitionCodeableConcept = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $definitionCanonical = null,
                                null|FHIRExpression $definitionExpression = null,
                                null|FHIRDataRequirement $definitionDataRequirement = null,
                                null|iterable $usageContext = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $exclude = null,
                                null|FHIRCodeableConcept $unitOfMeasure = null,
                                null|string|FHIRStringPrimitive|FHIRString $studyEffectiveDescription = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $studyEffectiveDateTime = null,
                                null|FHIRPeriod $studyEffectivePeriod = null,
                                null|FHIRDuration $studyEffectiveDuration = null,
                                null|FHIRTiming $studyEffectiveTiming = null,
                                null|FHIRDuration $studyEffectiveTimeFromStart = null,
                                null|FHIRGroupMeasure $studyEffectiveGroupMeasure = null,
                                null|string|FHIRStringPrimitive|FHIRString $participantEffectiveDescription = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $participantEffectiveDateTime = null,
                                null|FHIRPeriod $participantEffectivePeriod = null,
                                null|FHIRDuration $participantEffectiveDuration = null,
                                null|FHIRTiming $participantEffectiveTiming = null,
                                null|FHIRDuration $participantEffectiveTimeFromStart = null,
                                null|FHIRGroupMeasure $participantEffectiveGroupMeasure = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $definitionCodeableConcept) {
            $this->setDefinitionCodeableConcept($definitionCodeableConcept);
        }
        if (null !== $definitionCanonical) {
            $this->setDefinitionCanonical($definitionCanonical);
        }
        if (null !== $definitionExpression) {
            $this->setDefinitionExpression($definitionExpression);
        }
        if (null !== $definitionDataRequirement) {
            $this->setDefinitionDataRequirement($definitionDataRequirement);
        }
        if (null !== $usageContext) {
            $this->setUsageContext(...$usageContext);
        }
        if (null !== $exclude) {
            $this->setExclude($exclude);
        }
        if (null !== $unitOfMeasure) {
            $this->setUnitOfMeasure($unitOfMeasure);
        }
        if (null !== $studyEffectiveDescription) {
            $this->setStudyEffectiveDescription($studyEffectiveDescription);
        }
        if (null !== $studyEffectiveDateTime) {
            $this->setStudyEffectiveDateTime($studyEffectiveDateTime);
        }
        if (null !== $studyEffectivePeriod) {
            $this->setStudyEffectivePeriod($studyEffectivePeriod);
        }
        if (null !== $studyEffectiveDuration) {
            $this->setStudyEffectiveDuration($studyEffectiveDuration);
        }
        if (null !== $studyEffectiveTiming) {
            $this->setStudyEffectiveTiming($studyEffectiveTiming);
        }
        if (null !== $studyEffectiveTimeFromStart) {
            $this->setStudyEffectiveTimeFromStart($studyEffectiveTimeFromStart);
        }
        if (null !== $studyEffectiveGroupMeasure) {
            $this->setStudyEffectiveGroupMeasure($studyEffectiveGroupMeasure);
        }
        if (null !== $participantEffectiveDescription) {
            $this->setParticipantEffectiveDescription($participantEffectiveDescription);
        }
        if (null !== $participantEffectiveDateTime) {
            $this->setParticipantEffectiveDateTime($participantEffectiveDateTime);
        }
        if (null !== $participantEffectivePeriod) {
            $this->setParticipantEffectivePeriod($participantEffectivePeriod);
        }
        if (null !== $participantEffectiveDuration) {
            $this->setParticipantEffectiveDuration($participantEffectiveDuration);
        }
        if (null !== $participantEffectiveTiming) {
            $this->setParticipantEffectiveTiming($participantEffectiveTiming);
        }
        if (null !== $participantEffectiveTimeFromStart) {
            $this->setParticipantEffectiveTimeFromStart($participantEffectiveTimeFromStart);
        }
        if (null !== $participantEffectiveGroupMeasure) {
            $this->setParticipantEffectiveGroupMeasure($participantEffectiveGroupMeasure);
        }
    }

    /* class_default.php:137 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getDefinitionCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->definitionCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $definitionCodeableConcept
     * @return static
     */
    public function setDefinitionCodeableConcept(null|FHIRCodeableConcept $definitionCodeableConcept): self
    {
        if (null === $definitionCodeableConcept) {
            unset($this->definitionCodeableConcept);
            return $this;
        }
        $this->definitionCodeableConcept = $definitionCodeableConcept;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical
     */
    public function getDefinitionCanonical(): null|FHIRCanonical
    {
        return $this->definitionCanonical ?? null;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical $definitionCanonical
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDefinitionCanonical(null|string|FHIRCanonicalPrimitive|FHIRCanonical $definitionCanonical,
                                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $definitionCanonical) {
            unset($this->definitionCanonical);
            return $this;
        }
        if (!($definitionCanonical instanceof FHIRCanonical)) {
            $definitionCanonical = new FHIRCanonical(value: $definitionCanonical);
        }
        $this->definitionCanonical = $definitionCanonical;
        if ($this->_valueXMLLocations[self::FIELD_DEFINITION_CANONICAL] !== $valueXMLLocation) {
            $this->_setDefinitionCanonicalValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the definitionCanonical element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDefinitionCanonicalValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DEFINITION_CANONICAL];
    }

    /**
     * Set the location the "value" field of the definitionCanonical element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDefinitionCanonicalValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DEFINITION_CANONICAL] = $valueXMLLocation;
        return $this;
    }

    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExpression
     */
    public function getDefinitionExpression(): null|FHIRExpression
    {
        return $this->definitionExpression ?? null;
    }

    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExpression $definitionExpression
     * @return static
     */
    public function setDefinitionExpression(null|FHIRExpression $definitionExpression): self
    {
        if (null === $definitionExpression) {
            unset($this->definitionExpression);
            return $this;
        }
        $this->definitionExpression = $definitionExpression;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDataRequirement
     */
    public function getDefinitionDataRequirement(): null|FHIRDataRequirement
    {
        return $this->definitionDataRequirement ?? null;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDataRequirement $definitionDataRequirement
     * @return static
     */
    public function setDefinitionDataRequirement(null|FHIRDataRequirement $definitionDataRequirement): self
    {
        if (null === $definitionDataRequirement) {
            unset($this->definitionDataRequirement);
            return $this;
        }
        $this->definitionDataRequirement = $definitionDataRequirement;
        return $this;
    }

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Use UsageContext to define the members of the population, such as Age Ranges,
     * Genders, Settings.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUsageContext[]
     */
    public function getUsageContext(): array
    {
        return $this->usageContext ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUsageContext>
     */
    public function getUsageContextIterator(): iterable
    {
        if (!isset($this->usageContext)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->usageContext);
    }

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Use UsageContext to define the members of the population, such as Age Ranges,
     * Genders, Settings.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUsageContext $usageContext
     * @return static
     */
    public function addUsageContext(FHIRUsageContext $usageContext): self
    {
        if (!isset($this->usageContext)) {
            $this->usageContext = [];
        }
        $this->usageContext[] = $usageContext;
        return $this;
    }

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Use UsageContext to define the members of the population, such as Age Ranges,
     * Genders, Settings.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUsageContext ...$usageContext
     * @return static
     */
    public function setUsageContext(FHIRUsageContext ...$usageContext): self
    {
        if ([] === $usageContext) {
            unset($this->usageContext);
            return $this;
        }
        $this->usageContext = $usageContext;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When true, members with this characteristic are excluded from the element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean
     */
    public function getExclude(): null|FHIRBoolean
    {
        return $this->exclude ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When true, members with this characteristic are excluded from the element.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean $exclude
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExclude(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $exclude,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $exclude) {
            unset($this->exclude);
            return $this;
        }
        if (!($exclude instanceof FHIRBoolean)) {
            $exclude = new FHIRBoolean(value: $exclude);
        }
        $this->exclude = $exclude;
        if ($this->_valueXMLLocations[self::FIELD_EXCLUDE] !== $valueXMLLocation) {
            $this->_setExcludeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the exclude element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getExcludeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_EXCLUDE];
    }

    /**
     * Set the location the "value" field of the exclude element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setExcludeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_EXCLUDE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the UCUM unit for the outcome.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getUnitOfMeasure(): null|FHIRCodeableConcept
    {
        return $this->unitOfMeasure ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the UCUM unit for the outcome.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $unitOfMeasure
     * @return static
     */
    public function setUnitOfMeasure(null|FHIRCodeableConcept $unitOfMeasure): self
    {
        if (null === $unitOfMeasure) {
            unset($this->unitOfMeasure);
            return $this;
        }
        $this->unitOfMeasure = $unitOfMeasure;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A narrative description of the time period the study covers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getStudyEffectiveDescription(): null|FHIRString
    {
        return $this->studyEffectiveDescription ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A narrative description of the time period the study covers.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $studyEffectiveDescription
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStudyEffectiveDescription(null|string|FHIRStringPrimitive|FHIRString $studyEffectiveDescription,
                                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $studyEffectiveDescription) {
            unset($this->studyEffectiveDescription);
            return $this;
        }
        if (!($studyEffectiveDescription instanceof FHIRString)) {
            $studyEffectiveDescription = new FHIRString(value: $studyEffectiveDescription);
        }
        $this->studyEffectiveDescription = $studyEffectiveDescription;
        if ($this->_valueXMLLocations[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION] !== $valueXMLLocation) {
            $this->_setStudyEffectiveDescriptionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the studyEffectiveDescription element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getStudyEffectiveDescriptionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION];
    }

    /**
     * Set the location the "value" field of the studyEffectiveDescription element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setStudyEffectiveDescriptionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION] = $valueXMLLocation;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime
     */
    public function getStudyEffectiveDateTime(): null|FHIRDateTime
    {
        return $this->studyEffectiveDateTime ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $studyEffectiveDateTime
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStudyEffectiveDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $studyEffectiveDateTime,
                                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $studyEffectiveDateTime) {
            unset($this->studyEffectiveDateTime);
            return $this;
        }
        if (!($studyEffectiveDateTime instanceof FHIRDateTime)) {
            $studyEffectiveDateTime = new FHIRDateTime(value: $studyEffectiveDateTime);
        }
        $this->studyEffectiveDateTime = $studyEffectiveDateTime;
        if ($this->_valueXMLLocations[self::FIELD_STUDY_EFFECTIVE_DATE_TIME] !== $valueXMLLocation) {
            $this->_setStudyEffectiveDateTimeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the studyEffectiveDateTime element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getStudyEffectiveDateTimeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_STUDY_EFFECTIVE_DATE_TIME];
    }

    /**
     * Set the location the "value" field of the studyEffectiveDateTime element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setStudyEffectiveDateTimeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_STUDY_EFFECTIVE_DATE_TIME] = $valueXMLLocation;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod
     */
    public function getStudyEffectivePeriod(): null|FHIRPeriod
    {
        return $this->studyEffectivePeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod $studyEffectivePeriod
     * @return static
     */
    public function setStudyEffectivePeriod(null|FHIRPeriod $studyEffectivePeriod): self
    {
        if (null === $studyEffectivePeriod) {
            unset($this->studyEffectivePeriod);
            return $this;
        }
        $this->studyEffectivePeriod = $studyEffectivePeriod;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getStudyEffectiveDuration(): null|FHIRDuration
    {
        return $this->studyEffectiveDuration ?? null;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration $studyEffectiveDuration
     * @return static
     */
    public function setStudyEffectiveDuration(null|FHIRDuration $studyEffectiveDuration): self
    {
        if (null === $studyEffectiveDuration) {
            unset($this->studyEffectiveDuration);
            return $this;
        }
        $this->studyEffectiveDuration = $studyEffectiveDuration;
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getStudyEffectiveTiming(): null|FHIRTiming
    {
        return $this->studyEffectiveTiming ?? null;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTiming $studyEffectiveTiming
     * @return static
     */
    public function setStudyEffectiveTiming(null|FHIRTiming $studyEffectiveTiming): self
    {
        if (null === $studyEffectiveTiming) {
            unset($this->studyEffectiveTiming);
            return $this;
        }
        $this->studyEffectiveTiming = $studyEffectiveTiming;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates duration from the study initiation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getStudyEffectiveTimeFromStart(): null|FHIRDuration
    {
        return $this->studyEffectiveTimeFromStart ?? null;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates duration from the study initiation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration $studyEffectiveTimeFromStart
     * @return static
     */
    public function setStudyEffectiveTimeFromStart(null|FHIRDuration $studyEffectiveTimeFromStart): self
    {
        if (null === $studyEffectiveTimeFromStart) {
            unset($this->studyEffectiveTimeFromStart);
            return $this;
        }
        $this->studyEffectiveTimeFromStart = $studyEffectiveTimeFromStart;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRGroupMeasure
     */
    public function getStudyEffectiveGroupMeasure(): null|FHIRGroupMeasure
    {
        return $this->studyEffectiveGroupMeasure ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRGroupMeasure $studyEffectiveGroupMeasure
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStudyEffectiveGroupMeasure(null|FHIRGroupMeasure $studyEffectiveGroupMeasure,
                                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $studyEffectiveGroupMeasure) {
            unset($this->studyEffectiveGroupMeasure);
            return $this;
        }
        $this->studyEffectiveGroupMeasure = $studyEffectiveGroupMeasure;
        if ($this->_valueXMLLocations[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE] !== $valueXMLLocation) {
            $this->_setStudyEffectiveGroupMeasureValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the studyEffectiveGroupMeasure element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getStudyEffectiveGroupMeasureValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE];
    }

    /**
     * Set the location the "value" field of the studyEffectiveGroupMeasure element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setStudyEffectiveGroupMeasureValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A narrative description of the time period the study covers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getParticipantEffectiveDescription(): null|FHIRString
    {
        return $this->participantEffectiveDescription ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A narrative description of the time period the study covers.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $participantEffectiveDescription
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setParticipantEffectiveDescription(null|string|FHIRStringPrimitive|FHIRString $participantEffectiveDescription,
                                                       ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $participantEffectiveDescription) {
            unset($this->participantEffectiveDescription);
            return $this;
        }
        if (!($participantEffectiveDescription instanceof FHIRString)) {
            $participantEffectiveDescription = new FHIRString(value: $participantEffectiveDescription);
        }
        $this->participantEffectiveDescription = $participantEffectiveDescription;
        if ($this->_valueXMLLocations[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION] !== $valueXMLLocation) {
            $this->_setParticipantEffectiveDescriptionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the participantEffectiveDescription element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getParticipantEffectiveDescriptionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION];
    }

    /**
     * Set the location the "value" field of the participantEffectiveDescription element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setParticipantEffectiveDescriptionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION] = $valueXMLLocation;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime
     */
    public function getParticipantEffectiveDateTime(): null|FHIRDateTime
    {
        return $this->participantEffectiveDateTime ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $participantEffectiveDateTime
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setParticipantEffectiveDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $participantEffectiveDateTime,
                                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $participantEffectiveDateTime) {
            unset($this->participantEffectiveDateTime);
            return $this;
        }
        if (!($participantEffectiveDateTime instanceof FHIRDateTime)) {
            $participantEffectiveDateTime = new FHIRDateTime(value: $participantEffectiveDateTime);
        }
        $this->participantEffectiveDateTime = $participantEffectiveDateTime;
        if ($this->_valueXMLLocations[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME] !== $valueXMLLocation) {
            $this->_setParticipantEffectiveDateTimeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the participantEffectiveDateTime element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getParticipantEffectiveDateTimeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME];
    }

    /**
     * Set the location the "value" field of the participantEffectiveDateTime element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setParticipantEffectiveDateTimeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME] = $valueXMLLocation;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod
     */
    public function getParticipantEffectivePeriod(): null|FHIRPeriod
    {
        return $this->participantEffectivePeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod $participantEffectivePeriod
     * @return static
     */
    public function setParticipantEffectivePeriod(null|FHIRPeriod $participantEffectivePeriod): self
    {
        if (null === $participantEffectivePeriod) {
            unset($this->participantEffectivePeriod);
            return $this;
        }
        $this->participantEffectivePeriod = $participantEffectivePeriod;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getParticipantEffectiveDuration(): null|FHIRDuration
    {
        return $this->participantEffectiveDuration ?? null;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration $participantEffectiveDuration
     * @return static
     */
    public function setParticipantEffectiveDuration(null|FHIRDuration $participantEffectiveDuration): self
    {
        if (null === $participantEffectiveDuration) {
            unset($this->participantEffectiveDuration);
            return $this;
        }
        $this->participantEffectiveDuration = $participantEffectiveDuration;
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getParticipantEffectiveTiming(): null|FHIRTiming
    {
        return $this->participantEffectiveTiming ?? null;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTiming $participantEffectiveTiming
     * @return static
     */
    public function setParticipantEffectiveTiming(null|FHIRTiming $participantEffectiveTiming): self
    {
        if (null === $participantEffectiveTiming) {
            unset($this->participantEffectiveTiming);
            return $this;
        }
        $this->participantEffectiveTiming = $participantEffectiveTiming;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates duration from the participant's study entry.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getParticipantEffectiveTimeFromStart(): null|FHIRDuration
    {
        return $this->participantEffectiveTimeFromStart ?? null;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates duration from the participant's study entry.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration $participantEffectiveTimeFromStart
     * @return static
     */
    public function setParticipantEffectiveTimeFromStart(null|FHIRDuration $participantEffectiveTimeFromStart): self
    {
        if (null === $participantEffectiveTimeFromStart) {
            unset($this->participantEffectiveTimeFromStart);
            return $this;
        }
        $this->participantEffectiveTimeFromStart = $participantEffectiveTimeFromStart;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRGroupMeasure
     */
    public function getParticipantEffectiveGroupMeasure(): null|FHIRGroupMeasure
    {
        return $this->participantEffectiveGroupMeasure ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRGroupMeasure $participantEffectiveGroupMeasure
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setParticipantEffectiveGroupMeasure(null|FHIRGroupMeasure $participantEffectiveGroupMeasure,
                                                        ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $participantEffectiveGroupMeasure) {
            unset($this->participantEffectiveGroupMeasure);
            return $this;
        }
        $this->participantEffectiveGroupMeasure = $participantEffectiveGroupMeasure;
        if ($this->_valueXMLLocations[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE] !== $valueXMLLocation) {
            $this->_setParticipantEffectiveGroupMeasureValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the participantEffectiveGroupMeasure element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getParticipantEffectiveGroupMeasureValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE];
    }

    /**
     * Set the location the "value" field of the participantEffectiveGroupMeasure element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setParticipantEffectiveGroupMeasureValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE] = $valueXMLLocation;
        return $this;
    }

    /* class_default.php:189 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
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
        if (null !== ($v = $this->getDefinitionCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefinitionCanonical())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION_CANONICAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefinitionExpression())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION_EXPRESSION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefinitionDataRequirement())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION_DATA_REQUIREMENT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION_CODEABLE_CONCEPT])) {
            $v = $this->getDefinitionCodeableConcept();
            foreach($validationRules[self::FIELD_DEFINITION_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFINITION_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_DEFINITION_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_DEFINITION_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION_CANONICAL])) {
            $v = $this->getDefinitionCanonical();
            foreach($validationRules[self::FIELD_DEFINITION_CANONICAL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFINITION_CANONICAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION_CANONICAL])) {
                        $errs[self::FIELD_DEFINITION_CANONICAL] = [];
                    }
                    $errs[self::FIELD_DEFINITION_CANONICAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION_EXPRESSION])) {
            $v = $this->getDefinitionExpression();
            foreach($validationRules[self::FIELD_DEFINITION_EXPRESSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFINITION_EXPRESSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION_EXPRESSION])) {
                        $errs[self::FIELD_DEFINITION_EXPRESSION] = [];
                    }
                    $errs[self::FIELD_DEFINITION_EXPRESSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION_DATA_REQUIREMENT])) {
            $v = $this->getDefinitionDataRequirement();
            foreach($validationRules[self::FIELD_DEFINITION_DATA_REQUIREMENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFINITION_DATA_REQUIREMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION_DATA_REQUIREMENT])) {
                        $errs[self::FIELD_DEFINITION_DATA_REQUIREMENT] = [];
                    }
                    $errs[self::FIELD_DEFINITION_DATA_REQUIREMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_USAGE_CONTEXT])) {
            $v = $this->getUsageContext();
            foreach($validationRules[self::FIELD_USAGE_CONTEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_USAGE_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USAGE_CONTEXT])) {
                        $errs[self::FIELD_USAGE_CONTEXT] = [];
                    }
                    $errs[self::FIELD_USAGE_CONTEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXCLUDE])) {
            $v = $this->getExclude();
            foreach($validationRules[self::FIELD_EXCLUDE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXCLUDE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXCLUDE])) {
                        $errs[self::FIELD_EXCLUDE] = [];
                    }
                    $errs[self::FIELD_EXCLUDE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UNIT_OF_MEASURE])) {
            $v = $this->getUnitOfMeasure();
            foreach($validationRules[self::FIELD_UNIT_OF_MEASURE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_UNIT_OF_MEASURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UNIT_OF_MEASURE])) {
                        $errs[self::FIELD_UNIT_OF_MEASURE] = [];
                    }
                    $errs[self::FIELD_UNIT_OF_MEASURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION])) {
            $v = $this->getStudyEffectiveDescription();
            foreach($validationRules[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STUDY_EFFECTIVE_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION])) {
                        $errs[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STUDY_EFFECTIVE_DATE_TIME])) {
            $v = $this->getStudyEffectiveDateTime();
            foreach($validationRules[self::FIELD_STUDY_EFFECTIVE_DATE_TIME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STUDY_EFFECTIVE_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STUDY_EFFECTIVE_DATE_TIME])) {
                        $errs[self::FIELD_STUDY_EFFECTIVE_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_STUDY_EFFECTIVE_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STUDY_EFFECTIVE_PERIOD])) {
            $v = $this->getStudyEffectivePeriod();
            foreach($validationRules[self::FIELD_STUDY_EFFECTIVE_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STUDY_EFFECTIVE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STUDY_EFFECTIVE_PERIOD])) {
                        $errs[self::FIELD_STUDY_EFFECTIVE_PERIOD] = [];
                    }
                    $errs[self::FIELD_STUDY_EFFECTIVE_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STUDY_EFFECTIVE_DURATION])) {
            $v = $this->getStudyEffectiveDuration();
            foreach($validationRules[self::FIELD_STUDY_EFFECTIVE_DURATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STUDY_EFFECTIVE_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STUDY_EFFECTIVE_DURATION])) {
                        $errs[self::FIELD_STUDY_EFFECTIVE_DURATION] = [];
                    }
                    $errs[self::FIELD_STUDY_EFFECTIVE_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STUDY_EFFECTIVE_TIMING])) {
            $v = $this->getStudyEffectiveTiming();
            foreach($validationRules[self::FIELD_STUDY_EFFECTIVE_TIMING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STUDY_EFFECTIVE_TIMING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STUDY_EFFECTIVE_TIMING])) {
                        $errs[self::FIELD_STUDY_EFFECTIVE_TIMING] = [];
                    }
                    $errs[self::FIELD_STUDY_EFFECTIVE_TIMING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STUDY_EFFECTIVE_TIME_FROM_START])) {
            $v = $this->getStudyEffectiveTimeFromStart();
            foreach($validationRules[self::FIELD_STUDY_EFFECTIVE_TIME_FROM_START] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STUDY_EFFECTIVE_TIME_FROM_START, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STUDY_EFFECTIVE_TIME_FROM_START])) {
                        $errs[self::FIELD_STUDY_EFFECTIVE_TIME_FROM_START] = [];
                    }
                    $errs[self::FIELD_STUDY_EFFECTIVE_TIME_FROM_START][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE])) {
            $v = $this->getStudyEffectiveGroupMeasure();
            foreach($validationRules[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE])) {
                        $errs[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE] = [];
                    }
                    $errs[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION])) {
            $v = $this->getParticipantEffectiveDescription();
            foreach($validationRules[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION])) {
                        $errs[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME])) {
            $v = $this->getParticipantEffectiveDateTime();
            foreach($validationRules[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME])) {
                        $errs[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD])) {
            $v = $this->getParticipantEffectivePeriod();
            foreach($validationRules[self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD])) {
                        $errs[self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD] = [];
                    }
                    $errs[self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARTICIPANT_EFFECTIVE_DURATION])) {
            $v = $this->getParticipantEffectiveDuration();
            foreach($validationRules[self::FIELD_PARTICIPANT_EFFECTIVE_DURATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PARTICIPANT_EFFECTIVE_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARTICIPANT_EFFECTIVE_DURATION])) {
                        $errs[self::FIELD_PARTICIPANT_EFFECTIVE_DURATION] = [];
                    }
                    $errs[self::FIELD_PARTICIPANT_EFFECTIVE_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARTICIPANT_EFFECTIVE_TIMING])) {
            $v = $this->getParticipantEffectiveTiming();
            foreach($validationRules[self::FIELD_PARTICIPANT_EFFECTIVE_TIMING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PARTICIPANT_EFFECTIVE_TIMING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARTICIPANT_EFFECTIVE_TIMING])) {
                        $errs[self::FIELD_PARTICIPANT_EFFECTIVE_TIMING] = [];
                    }
                    $errs[self::FIELD_PARTICIPANT_EFFECTIVE_TIMING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START])) {
            $v = $this->getParticipantEffectiveTimeFromStart();
            foreach($validationRules[self::FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START])) {
                        $errs[self::FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START] = [];
                    }
                    $errs[self::FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE])) {
            $v = $this->getParticipantEffectiveGroupMeasure();
            foreach($validationRules[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE])) {
                        $errs[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE] = [];
                    }
                    $errs[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE][$rule] = $err;
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

    /* class_default.php:213 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRResearchElementDefinitionCharacteristic)) {
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
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFINITION_CODEABLE_CONCEPT === $cen) {
                $type->setDefinitionCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFINITION_CANONICAL === $cen) {
                $type->setDefinitionCanonical(FHIRCanonical::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFINITION_EXPRESSION === $cen) {
                $type->setDefinitionExpression(FHIRExpression::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFINITION_DATA_REQUIREMENT === $cen) {
                $type->setDefinitionDataRequirement(FHIRDataRequirement::xmlUnserialize($ce, $config));
            } else if (self::FIELD_USAGE_CONTEXT === $cen) {
                $type->addUsageContext(FHIRUsageContext::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXCLUDE === $cen) {
                $type->setExclude(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_UNIT_OF_MEASURE === $cen) {
                $type->setUnitOfMeasure(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STUDY_EFFECTIVE_DESCRIPTION === $cen) {
                $type->setStudyEffectiveDescription(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STUDY_EFFECTIVE_DATE_TIME === $cen) {
                $type->setStudyEffectiveDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STUDY_EFFECTIVE_PERIOD === $cen) {
                $type->setStudyEffectivePeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STUDY_EFFECTIVE_DURATION === $cen) {
                $type->setStudyEffectiveDuration(FHIRDuration::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STUDY_EFFECTIVE_TIMING === $cen) {
                $type->setStudyEffectiveTiming(FHIRTiming::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STUDY_EFFECTIVE_TIME_FROM_START === $cen) {
                $type->setStudyEffectiveTimeFromStart(FHIRDuration::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE === $cen) {
                $type->setStudyEffectiveGroupMeasure(FHIRGroupMeasure::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION === $cen) {
                $type->setParticipantEffectiveDescription(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME === $cen) {
                $type->setParticipantEffectiveDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD === $cen) {
                $type->setParticipantEffectivePeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PARTICIPANT_EFFECTIVE_DURATION === $cen) {
                $type->setParticipantEffectiveDuration(FHIRDuration::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PARTICIPANT_EFFECTIVE_TIMING === $cen) {
                $type->setParticipantEffectiveTiming(FHIRTiming::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START === $cen) {
                $type->setParticipantEffectiveTimeFromStart(FHIRDuration::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE === $cen) {
                $type->setParticipantEffectiveGroupMeasure(FHIRGroupMeasure::xmlUnserialize($ce, $config));
            }        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DEFINITION_CANONICAL])) {
            if (isset($type->definitionCanonical)) {
                $type->definitionCanonical->setValue((string)$attributes[self::FIELD_DEFINITION_CANONICAL]);
                $type->_setDefinitionCanonicalValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDefinitionCanonical((string)$attributes[self::FIELD_DEFINITION_CANONICAL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXCLUDE])) {
            if (isset($type->exclude)) {
                $type->exclude->setValue((string)$attributes[self::FIELD_EXCLUDE]);
                $type->_setExcludeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setExclude((string)$attributes[self::FIELD_EXCLUDE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION])) {
            if (isset($type->studyEffectiveDescription)) {
                $type->studyEffectiveDescription->setValue((string)$attributes[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION]);
                $type->_setStudyEffectiveDescriptionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setStudyEffectiveDescription((string)$attributes[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_STUDY_EFFECTIVE_DATE_TIME])) {
            if (isset($type->studyEffectiveDateTime)) {
                $type->studyEffectiveDateTime->setValue((string)$attributes[self::FIELD_STUDY_EFFECTIVE_DATE_TIME]);
                $type->_setStudyEffectiveDateTimeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setStudyEffectiveDateTime((string)$attributes[self::FIELD_STUDY_EFFECTIVE_DATE_TIME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE])) {
            if (isset($type->studyEffectiveGroupMeasure)) {
                $type->studyEffectiveGroupMeasure->setValue((string)$attributes[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE]);
                $type->_setStudyEffectiveGroupMeasureValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setStudyEffectiveGroupMeasure((string)$attributes[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION])) {
            if (isset($type->participantEffectiveDescription)) {
                $type->participantEffectiveDescription->setValue((string)$attributes[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION]);
                $type->_setParticipantEffectiveDescriptionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setParticipantEffectiveDescription((string)$attributes[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME])) {
            if (isset($type->participantEffectiveDateTime)) {
                $type->participantEffectiveDateTime->setValue((string)$attributes[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME]);
                $type->_setParticipantEffectiveDateTimeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setParticipantEffectiveDateTime((string)$attributes[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE])) {
            if (isset($type->participantEffectiveGroupMeasure)) {
                $type->participantEffectiveGroupMeasure->setValue((string)$attributes[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE]);
                $type->_setParticipantEffectiveGroupMeasureValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setParticipantEffectiveGroupMeasure((string)$attributes[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
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
        if (isset($this->definitionCanonical) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFINITION_CANONICAL]) {
            $xw->writeAttribute(self::FIELD_DEFINITION_CANONICAL, $this->definitionCanonical->_getFormattedValue());
        }
        if (isset($this->exclude) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXCLUDE]) {
            $xw->writeAttribute(self::FIELD_EXCLUDE, $this->exclude->_getFormattedValue());
        }
        if (isset($this->studyEffectiveDescription) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_STUDY_EFFECTIVE_DESCRIPTION, $this->studyEffectiveDescription->_getFormattedValue());
        }
        if (isset($this->studyEffectiveDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STUDY_EFFECTIVE_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_STUDY_EFFECTIVE_DATE_TIME, $this->studyEffectiveDateTime->_getFormattedValue());
        }
        if (isset($this->studyEffectiveGroupMeasure) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE]) {
            $xw->writeAttribute(self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE, $this->studyEffectiveGroupMeasure->_getFormattedValue());
        }
        if (isset($this->participantEffectiveDescription) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION, $this->participantEffectiveDescription->_getFormattedValue());
        }
        if (isset($this->participantEffectiveDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME, $this->participantEffectiveDateTime->_getFormattedValue());
        }
        if (isset($this->participantEffectiveGroupMeasure) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE]) {
            $xw->writeAttribute(self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE, $this->participantEffectiveGroupMeasure->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->definitionCodeableConcept)) {
            $xw->startElement(self::FIELD_DEFINITION_CODEABLE_CONCEPT);
            $this->definitionCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->definitionCanonical)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEFINITION_CANONICAL]
                || $this->definitionCanonical->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEFINITION_CANONICAL);
            $this->definitionCanonical->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEFINITION_CANONICAL]);
            $xw->endElement();
        }
        if (isset($this->definitionExpression)) {
            $xw->startElement(self::FIELD_DEFINITION_EXPRESSION);
            $this->definitionExpression->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->definitionDataRequirement)) {
            $xw->startElement(self::FIELD_DEFINITION_DATA_REQUIREMENT);
            $this->definitionDataRequirement->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->usageContext)) {
            foreach ($this->usageContext as $v) {
                $xw->startElement(self::FIELD_USAGE_CONTEXT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->exclude)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXCLUDE]
                || $this->exclude->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXCLUDE);
            $this->exclude->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXCLUDE]);
            $xw->endElement();
        }
        if (isset($this->unitOfMeasure)) {
            $xw->startElement(self::FIELD_UNIT_OF_MEASURE);
            $this->unitOfMeasure->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->studyEffectiveDescription)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION]
                || $this->studyEffectiveDescription->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STUDY_EFFECTIVE_DESCRIPTION);
            $this->studyEffectiveDescription->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION]);
            $xw->endElement();
        }
        if (isset($this->studyEffectiveDateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STUDY_EFFECTIVE_DATE_TIME]
                || $this->studyEffectiveDateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STUDY_EFFECTIVE_DATE_TIME);
            $this->studyEffectiveDateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STUDY_EFFECTIVE_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->studyEffectivePeriod)) {
            $xw->startElement(self::FIELD_STUDY_EFFECTIVE_PERIOD);
            $this->studyEffectivePeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->studyEffectiveDuration)) {
            $xw->startElement(self::FIELD_STUDY_EFFECTIVE_DURATION);
            $this->studyEffectiveDuration->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->studyEffectiveTiming)) {
            $xw->startElement(self::FIELD_STUDY_EFFECTIVE_TIMING);
            $this->studyEffectiveTiming->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->studyEffectiveTimeFromStart)) {
            $xw->startElement(self::FIELD_STUDY_EFFECTIVE_TIME_FROM_START);
            $this->studyEffectiveTimeFromStart->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->studyEffectiveGroupMeasure)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE]
                || $this->studyEffectiveGroupMeasure->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE);
            $this->studyEffectiveGroupMeasure->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE]);
            $xw->endElement();
        }
        if (isset($this->participantEffectiveDescription)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION]
                || $this->participantEffectiveDescription->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION);
            $this->participantEffectiveDescription->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION]);
            $xw->endElement();
        }
        if (isset($this->participantEffectiveDateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME]
                || $this->participantEffectiveDateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME);
            $this->participantEffectiveDateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->participantEffectivePeriod)) {
            $xw->startElement(self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD);
            $this->participantEffectivePeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->participantEffectiveDuration)) {
            $xw->startElement(self::FIELD_PARTICIPANT_EFFECTIVE_DURATION);
            $this->participantEffectiveDuration->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->participantEffectiveTiming)) {
            $xw->startElement(self::FIELD_PARTICIPANT_EFFECTIVE_TIMING);
            $this->participantEffectiveTiming->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->participantEffectiveTimeFromStart)) {
            $xw->startElement(self::FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START);
            $this->participantEffectiveTimeFromStart->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->participantEffectiveGroupMeasure)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE]
                || $this->participantEffectiveGroupMeasure->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE);
            $this->participantEffectiveGroupMeasure->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE]);
            $xw->endElement();
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRResearchElementDefinitionCharacteristic)) {
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
        if (isset($json[self::FIELD_DEFINITION_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_DEFINITION_CODEABLE_CONCEPT, $json)) {
            $type->setDefinitionCodeableConcept(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_DEFINITION_CODEABLE_CONCEPT],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DEFINITION_CANONICAL]) || isset($json[self::FIELD_DEFINITION_CANONICAL_EXT]) || array_key_exists(self::FIELD_DEFINITION_CANONICAL, $json) || array_key_exists(self::FIELD_DEFINITION_CANONICAL_EXT, $json)) {
            $value = $json[self::FIELD_DEFINITION_CANONICAL] ?? null;
            $ext = (array)($json[self::FIELD_DEFINITION_CANONICAL_EXT] ?? []);
            $type->setDefinitionCanonical(FHIRCanonical::jsonUnserialize(
                json: [FHIRCanonical::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DEFINITION_EXPRESSION]) || array_key_exists(self::FIELD_DEFINITION_EXPRESSION, $json)) {
            $type->setDefinitionExpression(FHIRExpression::jsonUnserialize(
                json: $json[self::FIELD_DEFINITION_EXPRESSION],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DEFINITION_DATA_REQUIREMENT]) || array_key_exists(self::FIELD_DEFINITION_DATA_REQUIREMENT, $json)) {
            $type->setDefinitionDataRequirement(FHIRDataRequirement::jsonUnserialize(
                json: $json[self::FIELD_DEFINITION_DATA_REQUIREMENT],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_USAGE_CONTEXT]) || array_key_exists(self::FIELD_USAGE_CONTEXT, $json)) {
            $vs = $json[self::FIELD_USAGE_CONTEXT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addUsageContext(FHIRUsageContext::jsonUnserialize(
                    json: $v,
                    config: $config,
                ));
            }
        }
        if (isset($json[self::FIELD_EXCLUDE]) || isset($json[self::FIELD_EXCLUDE_EXT]) || array_key_exists(self::FIELD_EXCLUDE, $json) || array_key_exists(self::FIELD_EXCLUDE_EXT, $json)) {
            $value = $json[self::FIELD_EXCLUDE] ?? null;
            $ext = (array)($json[self::FIELD_EXCLUDE_EXT] ?? []);
            $type->setExclude(FHIRBoolean::jsonUnserialize(
                json: [FHIRBoolean::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_UNIT_OF_MEASURE]) || array_key_exists(self::FIELD_UNIT_OF_MEASURE, $json)) {
            $type->setUnitOfMeasure(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_UNIT_OF_MEASURE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION]) || isset($json[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION_EXT]) || array_key_exists(self::FIELD_STUDY_EFFECTIVE_DESCRIPTION, $json) || array_key_exists(self::FIELD_STUDY_EFFECTIVE_DESCRIPTION_EXT, $json)) {
            $value = $json[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION] ?? null;
            $ext = (array)($json[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION_EXT] ?? []);
            $type->setStudyEffectiveDescription(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_STUDY_EFFECTIVE_DATE_TIME]) || isset($json[self::FIELD_STUDY_EFFECTIVE_DATE_TIME_EXT]) || array_key_exists(self::FIELD_STUDY_EFFECTIVE_DATE_TIME, $json) || array_key_exists(self::FIELD_STUDY_EFFECTIVE_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_STUDY_EFFECTIVE_DATE_TIME] ?? null;
            $ext = (array)($json[self::FIELD_STUDY_EFFECTIVE_DATE_TIME_EXT] ?? []);
            $type->setStudyEffectiveDateTime(FHIRDateTime::jsonUnserialize(
                json: [FHIRDateTime::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_STUDY_EFFECTIVE_PERIOD]) || array_key_exists(self::FIELD_STUDY_EFFECTIVE_PERIOD, $json)) {
            $type->setStudyEffectivePeriod(FHIRPeriod::jsonUnserialize(
                json: $json[self::FIELD_STUDY_EFFECTIVE_PERIOD],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_STUDY_EFFECTIVE_DURATION]) || array_key_exists(self::FIELD_STUDY_EFFECTIVE_DURATION, $json)) {
            $type->setStudyEffectiveDuration(FHIRDuration::jsonUnserialize(
                json: $json[self::FIELD_STUDY_EFFECTIVE_DURATION],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_STUDY_EFFECTIVE_TIMING]) || array_key_exists(self::FIELD_STUDY_EFFECTIVE_TIMING, $json)) {
            $type->setStudyEffectiveTiming(FHIRTiming::jsonUnserialize(
                json: $json[self::FIELD_STUDY_EFFECTIVE_TIMING],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_STUDY_EFFECTIVE_TIME_FROM_START]) || array_key_exists(self::FIELD_STUDY_EFFECTIVE_TIME_FROM_START, $json)) {
            $type->setStudyEffectiveTimeFromStart(FHIRDuration::jsonUnserialize(
                json: $json[self::FIELD_STUDY_EFFECTIVE_TIME_FROM_START],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE]) || isset($json[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE_EXT]) || array_key_exists(self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE, $json) || array_key_exists(self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE_EXT, $json)) {
            $value = $json[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE] ?? null;
            $ext = (array)($json[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE_EXT] ?? []);
            $type->setStudyEffectiveGroupMeasure(FHIRGroupMeasure::jsonUnserialize(
                json: [FHIRGroupMeasure::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION]) || isset($json[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION_EXT]) || array_key_exists(self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION, $json) || array_key_exists(self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION_EXT, $json)) {
            $value = $json[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION] ?? null;
            $ext = (array)($json[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION_EXT] ?? []);
            $type->setParticipantEffectiveDescription(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME]) || isset($json[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME_EXT]) || array_key_exists(self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME, $json) || array_key_exists(self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME] ?? null;
            $ext = (array)($json[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME_EXT] ?? []);
            $type->setParticipantEffectiveDateTime(FHIRDateTime::jsonUnserialize(
                json: [FHIRDateTime::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD]) || array_key_exists(self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD, $json)) {
            $type->setParticipantEffectivePeriod(FHIRPeriod::jsonUnserialize(
                json: $json[self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PARTICIPANT_EFFECTIVE_DURATION]) || array_key_exists(self::FIELD_PARTICIPANT_EFFECTIVE_DURATION, $json)) {
            $type->setParticipantEffectiveDuration(FHIRDuration::jsonUnserialize(
                json: $json[self::FIELD_PARTICIPANT_EFFECTIVE_DURATION],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PARTICIPANT_EFFECTIVE_TIMING]) || array_key_exists(self::FIELD_PARTICIPANT_EFFECTIVE_TIMING, $json)) {
            $type->setParticipantEffectiveTiming(FHIRTiming::jsonUnserialize(
                json: $json[self::FIELD_PARTICIPANT_EFFECTIVE_TIMING],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START]) || array_key_exists(self::FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START, $json)) {
            $type->setParticipantEffectiveTimeFromStart(FHIRDuration::jsonUnserialize(
                json: $json[self::FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE]) || isset($json[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE_EXT]) || array_key_exists(self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE, $json) || array_key_exists(self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE_EXT, $json)) {
            $value = $json[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE] ?? null;
            $ext = (array)($json[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE_EXT] ?? []);
            $type->setParticipantEffectiveGroupMeasure(FHIRGroupMeasure::jsonUnserialize(
                json: [FHIRGroupMeasure::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->definitionCodeableConcept)) {
            $out->definitionCodeableConcept = $this->definitionCodeableConcept;
        }
        if (isset($this->definitionCanonical)) {
            if (null !== ($val = $this->definitionCanonical->getValue())) {
                $out->definitionCanonical = $val;
            }
            $ext = $this->definitionCanonical->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_definitionCanonical = $ext;
            }
        }
        if (isset($this->definitionExpression)) {
            $out->definitionExpression = $this->definitionExpression;
        }
        if (isset($this->definitionDataRequirement)) {
            $out->definitionDataRequirement = $this->definitionDataRequirement;
        }
        if (isset($this->usageContext) && [] !== $this->usageContext) {
            $out->usageContext = $this->usageContext;
        }
        if (isset($this->exclude)) {
            if (null !== ($val = $this->exclude->getValue())) {
                $out->exclude = $val;
            }
            $ext = $this->exclude->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_exclude = $ext;
            }
        }
        if (isset($this->unitOfMeasure)) {
            $out->unitOfMeasure = $this->unitOfMeasure;
        }
        if (isset($this->studyEffectiveDescription)) {
            if (null !== ($val = $this->studyEffectiveDescription->getValue())) {
                $out->studyEffectiveDescription = $val;
            }
            $ext = $this->studyEffectiveDescription->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_studyEffectiveDescription = $ext;
            }
        }
        if (isset($this->studyEffectiveDateTime)) {
            if (null !== ($val = $this->studyEffectiveDateTime->getValue())) {
                $out->studyEffectiveDateTime = $val;
            }
            $ext = $this->studyEffectiveDateTime->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_studyEffectiveDateTime = $ext;
            }
        }
        if (isset($this->studyEffectivePeriod)) {
            $out->studyEffectivePeriod = $this->studyEffectivePeriod;
        }
        if (isset($this->studyEffectiveDuration)) {
            $out->studyEffectiveDuration = $this->studyEffectiveDuration;
        }
        if (isset($this->studyEffectiveTiming)) {
            $out->studyEffectiveTiming = $this->studyEffectiveTiming;
        }
        if (isset($this->studyEffectiveTimeFromStart)) {
            $out->studyEffectiveTimeFromStart = $this->studyEffectiveTimeFromStart;
        }
        if (isset($this->studyEffectiveGroupMeasure)) {
            if (null !== ($val = $this->studyEffectiveGroupMeasure->getValue())) {
                $out->studyEffectiveGroupMeasure = $val;
            }
            $ext = $this->studyEffectiveGroupMeasure->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_studyEffectiveGroupMeasure = $ext;
            }
        }
        if (isset($this->participantEffectiveDescription)) {
            if (null !== ($val = $this->participantEffectiveDescription->getValue())) {
                $out->participantEffectiveDescription = $val;
            }
            $ext = $this->participantEffectiveDescription->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_participantEffectiveDescription = $ext;
            }
        }
        if (isset($this->participantEffectiveDateTime)) {
            if (null !== ($val = $this->participantEffectiveDateTime->getValue())) {
                $out->participantEffectiveDateTime = $val;
            }
            $ext = $this->participantEffectiveDateTime->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_participantEffectiveDateTime = $ext;
            }
        }
        if (isset($this->participantEffectivePeriod)) {
            $out->participantEffectivePeriod = $this->participantEffectivePeriod;
        }
        if (isset($this->participantEffectiveDuration)) {
            $out->participantEffectiveDuration = $this->participantEffectiveDuration;
        }
        if (isset($this->participantEffectiveTiming)) {
            $out->participantEffectiveTiming = $this->participantEffectiveTiming;
        }
        if (isset($this->participantEffectiveTimeFromStart)) {
            $out->participantEffectiveTimeFromStart = $this->participantEffectiveTimeFromStart;
        }
        if (isset($this->participantEffectiveGroupMeasure)) {
            if (null !== ($val = $this->participantEffectiveGroupMeasure->getValue())) {
                $out->participantEffectiveGroupMeasure = $val;
            }
            $ext = $this->participantEffectiveGroupMeasure->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_participantEffectiveGroupMeasure = $ext;
            }
        }
        return $out;
    }
    /* class_default.php:238 */
    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}