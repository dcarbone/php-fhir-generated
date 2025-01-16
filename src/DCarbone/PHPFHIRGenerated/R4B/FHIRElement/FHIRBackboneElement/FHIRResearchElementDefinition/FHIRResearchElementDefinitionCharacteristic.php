<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:25+0000
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

use DCarbone\PHPFHIRGenerated\R4B\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDataRequirement;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRExpression;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRGroupMeasure;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUsageContext;
use DCarbone\PHPFHIRGenerated\R4B\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlWriter;

/**
 * The ResearchElementDefinition resource describes a "PICO" element that knowledge
 * (evidence, assertion, recommendation) is about.
 *
 * Class FHIRResearchElementDefinitionCharacteristic
 * @package \DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition
 */
class FHIRResearchElementDefinitionCharacteristic extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_RESEARCH_ELEMENT_DEFINITION_DOT_CHARACTERISTIC;

    const FIELD_DEFINITION_CODEABLE_CONCEPT = 'definitionCodeableConcept';
    const FIELD_DEFINITION_CANONICAL = 'definitionCanonical';
    const FIELD_DEFINITION_CANONICAL_EXT = '_definitionCanonical';
    const FIELD_DEFINITION_EXPRESSION = 'definitionExpression';
    const FIELD_DEFINITION_DATA_REQUIREMENT = 'definitionDataRequirement';
    const FIELD_USAGE_CONTEXT = 'usageContext';
    const FIELD_EXCLUDE = 'exclude';
    const FIELD_EXCLUDE_EXT = '_exclude';
    const FIELD_UNIT_OF_MEASURE = 'unitOfMeasure';
    const FIELD_STUDY_EFFECTIVE_DESCRIPTION = 'studyEffectiveDescription';
    const FIELD_STUDY_EFFECTIVE_DESCRIPTION_EXT = '_studyEffectiveDescription';
    const FIELD_STUDY_EFFECTIVE_DATE_TIME = 'studyEffectiveDateTime';
    const FIELD_STUDY_EFFECTIVE_DATE_TIME_EXT = '_studyEffectiveDateTime';
    const FIELD_STUDY_EFFECTIVE_PERIOD = 'studyEffectivePeriod';
    const FIELD_STUDY_EFFECTIVE_DURATION = 'studyEffectiveDuration';
    const FIELD_STUDY_EFFECTIVE_TIMING = 'studyEffectiveTiming';
    const FIELD_STUDY_EFFECTIVE_TIME_FROM_START = 'studyEffectiveTimeFromStart';
    const FIELD_STUDY_EFFECTIVE_GROUP_MEASURE = 'studyEffectiveGroupMeasure';
    const FIELD_STUDY_EFFECTIVE_GROUP_MEASURE_EXT = '_studyEffectiveGroupMeasure';
    const FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION = 'participantEffectiveDescription';
    const FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION_EXT = '_participantEffectiveDescription';
    const FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME = 'participantEffectiveDateTime';
    const FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME_EXT = '_participantEffectiveDateTime';
    const FIELD_PARTICIPANT_EFFECTIVE_PERIOD = 'participantEffectivePeriod';
    const FIELD_PARTICIPANT_EFFECTIVE_DURATION = 'participantEffectiveDuration';
    const FIELD_PARTICIPANT_EFFECTIVE_TIMING = 'participantEffectiveTiming';
    const FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START = 'participantEffectiveTimeFromStart';
    const FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE = 'participantEffectiveGroupMeasure';
    const FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE_EXT = '_participantEffectiveGroupMeasure';

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $definitionCodeableConcept = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $definitionCanonical = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRExpression
     */
    protected null|FHIRExpression $definitionExpression = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDataRequirement
     */
    protected null|FHIRDataRequirement $definitionDataRequirement = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUsageContext[]
     */
    protected null|array $usageContext = [];
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When true, members with this characteristic are excluded from the element.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $exclude = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the UCUM unit for the outcome.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $unitOfMeasure = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A narrative description of the time period the study covers.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString
     */
    protected null|FHIRString $studyEffectiveDescription = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates what effective period the study covers.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $studyEffectiveDateTime = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $studyEffectivePeriod = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected null|FHIRDuration $studyEffectiveDuration = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    protected null|FHIRTiming $studyEffectiveTiming = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates duration from the study initiation.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected null|FHIRDuration $studyEffectiveTimeFromStart = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRGroupMeasure
     */
    protected null|FHIRGroupMeasure $studyEffectiveGroupMeasure = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A narrative description of the time period the study covers.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString
     */
    protected null|FHIRString $participantEffectiveDescription = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates what effective period the study covers.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $participantEffectiveDateTime = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $participantEffectivePeriod = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected null|FHIRDuration $participantEffectiveDuration = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    protected null|FHIRTiming $participantEffectiveTiming = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates duration from the participant's study entry.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected null|FHIRDuration $participantEffectiveTimeFromStart = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRGroupMeasure
     */
    protected null|FHIRGroupMeasure $participantEffectiveGroupMeasure = null;

    /**
     * Validation map for fields in type ResearchElementDefinition.Characteristic
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_DEFINITION_CANONICAL => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_DEFINITION_CODEABLE_CONCEPT => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_DEFINITION_DATA_REQUIREMENT => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_DEFINITION_EXPRESSION => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRResearchElementDefinitionCharacteristic Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_DEFINITION_CODEABLE_CONCEPT, $data)) {
            if ($data[self::FIELD_DEFINITION_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setDefinitionCodeableConcept($data[self::FIELD_DEFINITION_CODEABLE_CONCEPT]);
            } else {
                $this->setDefinitionCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_DEFINITION_CODEABLE_CONCEPT]));
            }
        }
        if (array_key_exists(self::FIELD_DEFINITION_CANONICAL, $data) || array_key_exists(self::FIELD_DEFINITION_CANONICAL_EXT, $data)) {
            $value = $data[self::FIELD_DEFINITION_CANONICAL] ?? null;
            $ext = (isset($data[self::FIELD_DEFINITION_CANONICAL_EXT]) && is_array($data[self::FIELD_DEFINITION_CANONICAL_EXT])) ? $data[self::FIELD_DEFINITION_CANONICAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setDefinitionCanonical($value);
                } else if (is_array($value)) {
                    $this->setDefinitionCanonical(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setDefinitionCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefinitionCanonical(new FHIRCanonical($ext));
            } else {
                $this->setDefinitionCanonical(new FHIRCanonical(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFINITION_EXPRESSION, $data)) {
            if ($data[self::FIELD_DEFINITION_EXPRESSION] instanceof FHIRExpression) {
                $this->setDefinitionExpression($data[self::FIELD_DEFINITION_EXPRESSION]);
            } else {
                $this->setDefinitionExpression(new FHIRExpression($data[self::FIELD_DEFINITION_EXPRESSION]));
            }
        }
        if (array_key_exists(self::FIELD_DEFINITION_DATA_REQUIREMENT, $data)) {
            if ($data[self::FIELD_DEFINITION_DATA_REQUIREMENT] instanceof FHIRDataRequirement) {
                $this->setDefinitionDataRequirement($data[self::FIELD_DEFINITION_DATA_REQUIREMENT]);
            } else {
                $this->setDefinitionDataRequirement(new FHIRDataRequirement($data[self::FIELD_DEFINITION_DATA_REQUIREMENT]));
            }
        }
        if (array_key_exists(self::FIELD_USAGE_CONTEXT, $data)) {
            if (is_array($data[self::FIELD_USAGE_CONTEXT])) {
                foreach($data[self::FIELD_USAGE_CONTEXT] as $v) {
                    if ($v instanceof FHIRUsageContext) {
                        $this->addUsageContext($v);
                    } else {
                        $this->addUsageContext(new FHIRUsageContext($v));
                    }
                }
            } elseif ($data[self::FIELD_USAGE_CONTEXT] instanceof FHIRUsageContext) {
                $this->addUsageContext($data[self::FIELD_USAGE_CONTEXT]);
            } else {
                $this->addUsageContext(new FHIRUsageContext($data[self::FIELD_USAGE_CONTEXT]));
            }
        }
        if (array_key_exists(self::FIELD_EXCLUDE, $data) || array_key_exists(self::FIELD_EXCLUDE_EXT, $data)) {
            $value = $data[self::FIELD_EXCLUDE] ?? null;
            $ext = (isset($data[self::FIELD_EXCLUDE_EXT]) && is_array($data[self::FIELD_EXCLUDE_EXT])) ? $data[self::FIELD_EXCLUDE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setExclude($value);
                } else if (is_array($value)) {
                    $this->setExclude(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setExclude(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExclude(new FHIRBoolean($ext));
            } else {
                $this->setExclude(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_UNIT_OF_MEASURE, $data)) {
            if ($data[self::FIELD_UNIT_OF_MEASURE] instanceof FHIRCodeableConcept) {
                $this->setUnitOfMeasure($data[self::FIELD_UNIT_OF_MEASURE]);
            } else {
                $this->setUnitOfMeasure(new FHIRCodeableConcept($data[self::FIELD_UNIT_OF_MEASURE]));
            }
        }
        if (array_key_exists(self::FIELD_STUDY_EFFECTIVE_DESCRIPTION, $data) || array_key_exists(self::FIELD_STUDY_EFFECTIVE_DESCRIPTION_EXT, $data)) {
            $value = $data[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION] ?? null;
            $ext = (isset($data[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION_EXT]) && is_array($data[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION_EXT])) ? $data[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setStudyEffectiveDescription($value);
                } else if (is_array($value)) {
                    $this->setStudyEffectiveDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setStudyEffectiveDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStudyEffectiveDescription(new FHIRString($ext));
            } else {
                $this->setStudyEffectiveDescription(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_STUDY_EFFECTIVE_DATE_TIME, $data) || array_key_exists(self::FIELD_STUDY_EFFECTIVE_DATE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_STUDY_EFFECTIVE_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_STUDY_EFFECTIVE_DATE_TIME_EXT]) && is_array($data[self::FIELD_STUDY_EFFECTIVE_DATE_TIME_EXT])) ? $data[self::FIELD_STUDY_EFFECTIVE_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setStudyEffectiveDateTime($value);
                } else if (is_array($value)) {
                    $this->setStudyEffectiveDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setStudyEffectiveDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStudyEffectiveDateTime(new FHIRDateTime($ext));
            } else {
                $this->setStudyEffectiveDateTime(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_STUDY_EFFECTIVE_PERIOD, $data)) {
            if ($data[self::FIELD_STUDY_EFFECTIVE_PERIOD] instanceof FHIRPeriod) {
                $this->setStudyEffectivePeriod($data[self::FIELD_STUDY_EFFECTIVE_PERIOD]);
            } else {
                $this->setStudyEffectivePeriod(new FHIRPeriod($data[self::FIELD_STUDY_EFFECTIVE_PERIOD]));
            }
        }
        if (array_key_exists(self::FIELD_STUDY_EFFECTIVE_DURATION, $data)) {
            if ($data[self::FIELD_STUDY_EFFECTIVE_DURATION] instanceof FHIRDuration) {
                $this->setStudyEffectiveDuration($data[self::FIELD_STUDY_EFFECTIVE_DURATION]);
            } else {
                $this->setStudyEffectiveDuration(new FHIRDuration($data[self::FIELD_STUDY_EFFECTIVE_DURATION]));
            }
        }
        if (array_key_exists(self::FIELD_STUDY_EFFECTIVE_TIMING, $data)) {
            if ($data[self::FIELD_STUDY_EFFECTIVE_TIMING] instanceof FHIRTiming) {
                $this->setStudyEffectiveTiming($data[self::FIELD_STUDY_EFFECTIVE_TIMING]);
            } else {
                $this->setStudyEffectiveTiming(new FHIRTiming($data[self::FIELD_STUDY_EFFECTIVE_TIMING]));
            }
        }
        if (array_key_exists(self::FIELD_STUDY_EFFECTIVE_TIME_FROM_START, $data)) {
            if ($data[self::FIELD_STUDY_EFFECTIVE_TIME_FROM_START] instanceof FHIRDuration) {
                $this->setStudyEffectiveTimeFromStart($data[self::FIELD_STUDY_EFFECTIVE_TIME_FROM_START]);
            } else {
                $this->setStudyEffectiveTimeFromStart(new FHIRDuration($data[self::FIELD_STUDY_EFFECTIVE_TIME_FROM_START]));
            }
        }
        if (array_key_exists(self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE, $data) || array_key_exists(self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE_EXT, $data)) {
            $value = $data[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE] ?? null;
            $ext = (isset($data[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE_EXT]) && is_array($data[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE_EXT])) ? $data[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRGroupMeasure) {
                    $this->setStudyEffectiveGroupMeasure($value);
                } else if (is_array($value)) {
                    $this->setStudyEffectiveGroupMeasure(new FHIRGroupMeasure(array_merge($ext, $value)));
                } else {
                    $this->setStudyEffectiveGroupMeasure(new FHIRGroupMeasure([FHIRGroupMeasure::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStudyEffectiveGroupMeasure(new FHIRGroupMeasure($ext));
            } else {
                $this->setStudyEffectiveGroupMeasure(new FHIRGroupMeasure(null));
            }
        }
        if (array_key_exists(self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION, $data) || array_key_exists(self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION_EXT, $data)) {
            $value = $data[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION] ?? null;
            $ext = (isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION_EXT]) && is_array($data[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION_EXT])) ? $data[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setParticipantEffectiveDescription($value);
                } else if (is_array($value)) {
                    $this->setParticipantEffectiveDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setParticipantEffectiveDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setParticipantEffectiveDescription(new FHIRString($ext));
            } else {
                $this->setParticipantEffectiveDescription(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME, $data) || array_key_exists(self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME_EXT]) && is_array($data[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME_EXT])) ? $data[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setParticipantEffectiveDateTime($value);
                } else if (is_array($value)) {
                    $this->setParticipantEffectiveDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setParticipantEffectiveDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setParticipantEffectiveDateTime(new FHIRDateTime($ext));
            } else {
                $this->setParticipantEffectiveDateTime(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD, $data)) {
            if ($data[self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD] instanceof FHIRPeriod) {
                $this->setParticipantEffectivePeriod($data[self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD]);
            } else {
                $this->setParticipantEffectivePeriod(new FHIRPeriod($data[self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD]));
            }
        }
        if (array_key_exists(self::FIELD_PARTICIPANT_EFFECTIVE_DURATION, $data)) {
            if ($data[self::FIELD_PARTICIPANT_EFFECTIVE_DURATION] instanceof FHIRDuration) {
                $this->setParticipantEffectiveDuration($data[self::FIELD_PARTICIPANT_EFFECTIVE_DURATION]);
            } else {
                $this->setParticipantEffectiveDuration(new FHIRDuration($data[self::FIELD_PARTICIPANT_EFFECTIVE_DURATION]));
            }
        }
        if (array_key_exists(self::FIELD_PARTICIPANT_EFFECTIVE_TIMING, $data)) {
            if ($data[self::FIELD_PARTICIPANT_EFFECTIVE_TIMING] instanceof FHIRTiming) {
                $this->setParticipantEffectiveTiming($data[self::FIELD_PARTICIPANT_EFFECTIVE_TIMING]);
            } else {
                $this->setParticipantEffectiveTiming(new FHIRTiming($data[self::FIELD_PARTICIPANT_EFFECTIVE_TIMING]));
            }
        }
        if (array_key_exists(self::FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START, $data)) {
            if ($data[self::FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START] instanceof FHIRDuration) {
                $this->setParticipantEffectiveTimeFromStart($data[self::FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START]);
            } else {
                $this->setParticipantEffectiveTimeFromStart(new FHIRDuration($data[self::FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START]));
            }
        }
        if (array_key_exists(self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE, $data) || array_key_exists(self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE_EXT, $data)) {
            $value = $data[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE] ?? null;
            $ext = (isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE_EXT]) && is_array($data[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE_EXT])) ? $data[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRGroupMeasure) {
                    $this->setParticipantEffectiveGroupMeasure($value);
                } else if (is_array($value)) {
                    $this->setParticipantEffectiveGroupMeasure(new FHIRGroupMeasure(array_merge($ext, $value)));
                } else {
                    $this->setParticipantEffectiveGroupMeasure(new FHIRGroupMeasure([FHIRGroupMeasure::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setParticipantEffectiveGroupMeasure(new FHIRGroupMeasure($ext));
            } else {
                $this->setParticipantEffectiveGroupMeasure(new FHIRGroupMeasure(null));
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getDefinitionCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->definitionCodeableConcept;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept $definitionCodeableConcept
     * @return static
     */
    public function setDefinitionCodeableConcept(null|FHIRCodeableConcept $definitionCodeableConcept = null): self
    {
        if (null === $definitionCodeableConcept) {
            $definitionCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->definitionCodeableConcept, $definitionCodeableConcept);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCanonical
     */
    public function getDefinitionCanonical(): null|FHIRCanonical
    {
        return $this->definitionCanonical;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4B\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCanonical $definitionCanonical
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefinitionCanonical(null|string|FHIRCanonicalPrimitive|FHIRCanonical $definitionCanonical = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $definitionCanonical && !($definitionCanonical instanceof FHIRCanonical)) {
            $definitionCanonical = new FHIRCanonical($definitionCanonical);
        }
        $this->_trackValueSet($this->definitionCanonical, $definitionCanonical);
        if (!isset($this->_xmlLocations[self::FIELD_DEFINITION_CANONICAL])) {
            $this->_xmlLocations[self::FIELD_DEFINITION_CANONICAL] = [];
        }
        $this->_xmlLocations[self::FIELD_DEFINITION_CANONICAL][0] = $xmlLocation;
        $this->definitionCanonical = $definitionCanonical;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRExpression
     */
    public function getDefinitionExpression(): null|FHIRExpression
    {
        return $this->definitionExpression;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRExpression $definitionExpression
     * @return static
     */
    public function setDefinitionExpression(null|FHIRExpression $definitionExpression = null): self
    {
        if (null === $definitionExpression) {
            $definitionExpression = new FHIRExpression();
        }
        $this->_trackValueSet($this->definitionExpression, $definitionExpression);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDataRequirement
     */
    public function getDefinitionDataRequirement(): null|FHIRDataRequirement
    {
        return $this->definitionDataRequirement;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDataRequirement $definitionDataRequirement
     * @return static
     */
    public function setDefinitionDataRequirement(null|FHIRDataRequirement $definitionDataRequirement = null): self
    {
        if (null === $definitionDataRequirement) {
            $definitionDataRequirement = new FHIRDataRequirement();
        }
        $this->_trackValueSet($this->definitionDataRequirement, $definitionDataRequirement);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUsageContext[]
     */
    public function getUsageContext(): null|array
    {
        return $this->usageContext;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUsageContext $usageContext
     * @return static
     */
    public function addUsageContext(null|FHIRUsageContext $usageContext = null): self
    {
        if (null === $usageContext) {
            $usageContext = new FHIRUsageContext();
        }
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUsageContext ...$usageContext
     * @return static
     */
    public function setUsageContext(FHIRUsageContext ...$usageContext): self
    {
        if ([] !== $this->usageContext) {
            $this->_trackValuesRemoved(count($this->usageContext));
            $this->usageContext = [];
        }
        if ([] === $usageContext) {
            return $this;
        }
        foreach($usageContext as $v) {
            $this->addUsageContext($v);
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When true, members with this characteristic are excluded from the element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBoolean
     */
    public function getExclude(): null|FHIRBoolean
    {
        return $this->exclude;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When true, members with this characteristic are excluded from the element.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R4B\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBoolean $exclude
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setExclude(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $exclude = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $exclude && !($exclude instanceof FHIRBoolean)) {
            $exclude = new FHIRBoolean($exclude);
        }
        $this->_trackValueSet($this->exclude, $exclude);
        if (!isset($this->_xmlLocations[self::FIELD_EXCLUDE])) {
            $this->_xmlLocations[self::FIELD_EXCLUDE] = [];
        }
        $this->_xmlLocations[self::FIELD_EXCLUDE][0] = $xmlLocation;
        $this->exclude = $exclude;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getUnitOfMeasure(): null|FHIRCodeableConcept
    {
        return $this->unitOfMeasure;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the UCUM unit for the outcome.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept $unitOfMeasure
     * @return static
     */
    public function setUnitOfMeasure(null|FHIRCodeableConcept $unitOfMeasure = null): self
    {
        if (null === $unitOfMeasure) {
            $unitOfMeasure = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->unitOfMeasure, $unitOfMeasure);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString
     */
    public function getStudyEffectiveDescription(): null|FHIRString
    {
        return $this->studyEffectiveDescription;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A narrative description of the time period the study covers.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4B\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString $studyEffectiveDescription
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setStudyEffectiveDescription(null|string|FHIRStringPrimitive|FHIRString $studyEffectiveDescription = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $studyEffectiveDescription && !($studyEffectiveDescription instanceof FHIRString)) {
            $studyEffectiveDescription = new FHIRString($studyEffectiveDescription);
        }
        $this->_trackValueSet($this->studyEffectiveDescription, $studyEffectiveDescription);
        if (!isset($this->_xmlLocations[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION])) {
            $this->_xmlLocations[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION] = [];
        }
        $this->_xmlLocations[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION][0] = $xmlLocation;
        $this->studyEffectiveDescription = $studyEffectiveDescription;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDateTime
     */
    public function getStudyEffectiveDateTime(): null|FHIRDateTime
    {
        return $this->studyEffectiveDateTime;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R4B\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDateTime $studyEffectiveDateTime
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setStudyEffectiveDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $studyEffectiveDateTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $studyEffectiveDateTime && !($studyEffectiveDateTime instanceof FHIRDateTime)) {
            $studyEffectiveDateTime = new FHIRDateTime($studyEffectiveDateTime);
        }
        $this->_trackValueSet($this->studyEffectiveDateTime, $studyEffectiveDateTime);
        if (!isset($this->_xmlLocations[self::FIELD_STUDY_EFFECTIVE_DATE_TIME])) {
            $this->_xmlLocations[self::FIELD_STUDY_EFFECTIVE_DATE_TIME] = [];
        }
        $this->_xmlLocations[self::FIELD_STUDY_EFFECTIVE_DATE_TIME][0] = $xmlLocation;
        $this->studyEffectiveDateTime = $studyEffectiveDateTime;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRPeriod
     */
    public function getStudyEffectivePeriod(): null|FHIRPeriod
    {
        return $this->studyEffectivePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRPeriod $studyEffectivePeriod
     * @return static
     */
    public function setStudyEffectivePeriod(null|FHIRPeriod $studyEffectivePeriod = null): self
    {
        if (null === $studyEffectivePeriod) {
            $studyEffectivePeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->studyEffectivePeriod, $studyEffectivePeriod);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getStudyEffectiveDuration(): null|FHIRDuration
    {
        return $this->studyEffectiveDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRDuration $studyEffectiveDuration
     * @return static
     */
    public function setStudyEffectiveDuration(null|FHIRDuration $studyEffectiveDuration = null): self
    {
        if (null === $studyEffectiveDuration) {
            $studyEffectiveDuration = new FHIRDuration();
        }
        $this->_trackValueSet($this->studyEffectiveDuration, $studyEffectiveDuration);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getStudyEffectiveTiming(): null|FHIRTiming
    {
        return $this->studyEffectiveTiming;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRTiming $studyEffectiveTiming
     * @return static
     */
    public function setStudyEffectiveTiming(null|FHIRTiming $studyEffectiveTiming = null): self
    {
        if (null === $studyEffectiveTiming) {
            $studyEffectiveTiming = new FHIRTiming();
        }
        $this->_trackValueSet($this->studyEffectiveTiming, $studyEffectiveTiming);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getStudyEffectiveTimeFromStart(): null|FHIRDuration
    {
        return $this->studyEffectiveTimeFromStart;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates duration from the study initiation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRDuration $studyEffectiveTimeFromStart
     * @return static
     */
    public function setStudyEffectiveTimeFromStart(null|FHIRDuration $studyEffectiveTimeFromStart = null): self
    {
        if (null === $studyEffectiveTimeFromStart) {
            $studyEffectiveTimeFromStart = new FHIRDuration();
        }
        $this->_trackValueSet($this->studyEffectiveTimeFromStart, $studyEffectiveTimeFromStart);
        $this->studyEffectiveTimeFromStart = $studyEffectiveTimeFromStart;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRGroupMeasure
     */
    public function getStudyEffectiveGroupMeasure(): null|FHIRGroupMeasure
    {
        return $this->studyEffectiveGroupMeasure;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRGroupMeasure $studyEffectiveGroupMeasure
     * @return static
     */
    public function setStudyEffectiveGroupMeasure(null|FHIRGroupMeasure $studyEffectiveGroupMeasure = null): self
    {
        if (null === $studyEffectiveGroupMeasure) {
            $studyEffectiveGroupMeasure = new FHIRGroupMeasure();
        }
        $this->_trackValueSet($this->studyEffectiveGroupMeasure, $studyEffectiveGroupMeasure);
        $this->studyEffectiveGroupMeasure = $studyEffectiveGroupMeasure;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A narrative description of the time period the study covers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString
     */
    public function getParticipantEffectiveDescription(): null|FHIRString
    {
        return $this->participantEffectiveDescription;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A narrative description of the time period the study covers.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4B\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString $participantEffectiveDescription
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setParticipantEffectiveDescription(null|string|FHIRStringPrimitive|FHIRString $participantEffectiveDescription = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $participantEffectiveDescription && !($participantEffectiveDescription instanceof FHIRString)) {
            $participantEffectiveDescription = new FHIRString($participantEffectiveDescription);
        }
        $this->_trackValueSet($this->participantEffectiveDescription, $participantEffectiveDescription);
        if (!isset($this->_xmlLocations[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION])) {
            $this->_xmlLocations[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION] = [];
        }
        $this->_xmlLocations[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION][0] = $xmlLocation;
        $this->participantEffectiveDescription = $participantEffectiveDescription;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDateTime
     */
    public function getParticipantEffectiveDateTime(): null|FHIRDateTime
    {
        return $this->participantEffectiveDateTime;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R4B\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDateTime $participantEffectiveDateTime
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setParticipantEffectiveDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $participantEffectiveDateTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $participantEffectiveDateTime && !($participantEffectiveDateTime instanceof FHIRDateTime)) {
            $participantEffectiveDateTime = new FHIRDateTime($participantEffectiveDateTime);
        }
        $this->_trackValueSet($this->participantEffectiveDateTime, $participantEffectiveDateTime);
        if (!isset($this->_xmlLocations[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME])) {
            $this->_xmlLocations[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME] = [];
        }
        $this->_xmlLocations[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME][0] = $xmlLocation;
        $this->participantEffectiveDateTime = $participantEffectiveDateTime;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRPeriod
     */
    public function getParticipantEffectivePeriod(): null|FHIRPeriod
    {
        return $this->participantEffectivePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRPeriod $participantEffectivePeriod
     * @return static
     */
    public function setParticipantEffectivePeriod(null|FHIRPeriod $participantEffectivePeriod = null): self
    {
        if (null === $participantEffectivePeriod) {
            $participantEffectivePeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->participantEffectivePeriod, $participantEffectivePeriod);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getParticipantEffectiveDuration(): null|FHIRDuration
    {
        return $this->participantEffectiveDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRDuration $participantEffectiveDuration
     * @return static
     */
    public function setParticipantEffectiveDuration(null|FHIRDuration $participantEffectiveDuration = null): self
    {
        if (null === $participantEffectiveDuration) {
            $participantEffectiveDuration = new FHIRDuration();
        }
        $this->_trackValueSet($this->participantEffectiveDuration, $participantEffectiveDuration);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getParticipantEffectiveTiming(): null|FHIRTiming
    {
        return $this->participantEffectiveTiming;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRTiming $participantEffectiveTiming
     * @return static
     */
    public function setParticipantEffectiveTiming(null|FHIRTiming $participantEffectiveTiming = null): self
    {
        if (null === $participantEffectiveTiming) {
            $participantEffectiveTiming = new FHIRTiming();
        }
        $this->_trackValueSet($this->participantEffectiveTiming, $participantEffectiveTiming);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getParticipantEffectiveTimeFromStart(): null|FHIRDuration
    {
        return $this->participantEffectiveTimeFromStart;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates duration from the participant's study entry.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRQuantity\FHIRDuration $participantEffectiveTimeFromStart
     * @return static
     */
    public function setParticipantEffectiveTimeFromStart(null|FHIRDuration $participantEffectiveTimeFromStart = null): self
    {
        if (null === $participantEffectiveTimeFromStart) {
            $participantEffectiveTimeFromStart = new FHIRDuration();
        }
        $this->_trackValueSet($this->participantEffectiveTimeFromStart, $participantEffectiveTimeFromStart);
        $this->participantEffectiveTimeFromStart = $participantEffectiveTimeFromStart;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRGroupMeasure
     */
    public function getParticipantEffectiveGroupMeasure(): null|FHIRGroupMeasure
    {
        return $this->participantEffectiveGroupMeasure;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRGroupMeasure $participantEffectiveGroupMeasure
     * @return static
     */
    public function setParticipantEffectiveGroupMeasure(null|FHIRGroupMeasure $participantEffectiveGroupMeasure = null): self
    {
        if (null === $participantEffectiveGroupMeasure) {
            $participantEffectiveGroupMeasure = new FHIRGroupMeasure();
        }
        $this->_trackValueSet($this->participantEffectiveGroupMeasure, $participantEffectiveGroupMeasure);
        $this->participantEffectiveGroupMeasure = $participantEffectiveGroupMeasure;
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
        if ([] !== ($vs = $this->getUsageContext())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_USAGE_CONTEXT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getExclude())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXCLUDE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUnitOfMeasure())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UNIT_OF_MEASURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStudyEffectiveDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStudyEffectiveDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STUDY_EFFECTIVE_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStudyEffectivePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STUDY_EFFECTIVE_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStudyEffectiveDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STUDY_EFFECTIVE_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStudyEffectiveTiming())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STUDY_EFFECTIVE_TIMING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStudyEffectiveTimeFromStart())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STUDY_EFFECTIVE_TIME_FROM_START] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStudyEffectiveGroupMeasure())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getParticipantEffectiveDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getParticipantEffectiveDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getParticipantEffectivePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getParticipantEffectiveDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARTICIPANT_EFFECTIVE_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getParticipantEffectiveTiming())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARTICIPANT_EFFECTIVE_TIMING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getParticipantEffectiveTimeFromStart())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getParticipantEffectiveGroupMeasure())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION_CODEABLE_CONCEPT])) {
            $v = $this->getDefinitionCodeableConcept();
            foreach($validationRules[self::FIELD_DEFINITION_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_ELEMENT_DEFINITION_DOT_CHARACTERISTIC, self::FIELD_DEFINITION_CODEABLE_CONCEPT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_ELEMENT_DEFINITION_DOT_CHARACTERISTIC, self::FIELD_DEFINITION_CANONICAL, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_ELEMENT_DEFINITION_DOT_CHARACTERISTIC, self::FIELD_DEFINITION_EXPRESSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_ELEMENT_DEFINITION_DOT_CHARACTERISTIC, self::FIELD_DEFINITION_DATA_REQUIREMENT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_ELEMENT_DEFINITION_DOT_CHARACTERISTIC, self::FIELD_USAGE_CONTEXT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_ELEMENT_DEFINITION_DOT_CHARACTERISTIC, self::FIELD_EXCLUDE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_ELEMENT_DEFINITION_DOT_CHARACTERISTIC, self::FIELD_UNIT_OF_MEASURE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_ELEMENT_DEFINITION_DOT_CHARACTERISTIC, self::FIELD_STUDY_EFFECTIVE_DESCRIPTION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_ELEMENT_DEFINITION_DOT_CHARACTERISTIC, self::FIELD_STUDY_EFFECTIVE_DATE_TIME, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_ELEMENT_DEFINITION_DOT_CHARACTERISTIC, self::FIELD_STUDY_EFFECTIVE_PERIOD, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_ELEMENT_DEFINITION_DOT_CHARACTERISTIC, self::FIELD_STUDY_EFFECTIVE_DURATION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_ELEMENT_DEFINITION_DOT_CHARACTERISTIC, self::FIELD_STUDY_EFFECTIVE_TIMING, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_ELEMENT_DEFINITION_DOT_CHARACTERISTIC, self::FIELD_STUDY_EFFECTIVE_TIME_FROM_START, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_ELEMENT_DEFINITION_DOT_CHARACTERISTIC, self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_ELEMENT_DEFINITION_DOT_CHARACTERISTIC, self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_ELEMENT_DEFINITION_DOT_CHARACTERISTIC, self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_ELEMENT_DEFINITION_DOT_CHARACTERISTIC, self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_ELEMENT_DEFINITION_DOT_CHARACTERISTIC, self::FIELD_PARTICIPANT_EFFECTIVE_DURATION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_ELEMENT_DEFINITION_DOT_CHARACTERISTIC, self::FIELD_PARTICIPANT_EFFECTIVE_TIMING, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_ELEMENT_DEFINITION_DOT_CHARACTERISTIC, self::FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_ELEMENT_DEFINITION_DOT_CHARACTERISTIC, self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic
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
        } else if (!($type instanceof FHIRResearchElementDefinitionCharacteristic)) {
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
            if (self::FIELD_DEFINITION_CODEABLE_CONCEPT === $childName) {
                $type->setDefinitionCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFINITION_CANONICAL === $childName) {
                $type->setDefinitionCanonical(FHIRCanonical::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFINITION_EXPRESSION === $childName) {
                $type->setDefinitionExpression(FHIRExpression::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFINITION_DATA_REQUIREMENT === $childName) {
                $type->setDefinitionDataRequirement(FHIRDataRequirement::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_USAGE_CONTEXT === $childName) {
                $type->addUsageContext(FHIRUsageContext::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXCLUDE === $childName) {
                $type->setExclude(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_UNIT_OF_MEASURE === $childName) {
                $type->setUnitOfMeasure(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STUDY_EFFECTIVE_DESCRIPTION === $childName) {
                $type->setStudyEffectiveDescription(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_STUDY_EFFECTIVE_DATE_TIME === $childName) {
                $type->setStudyEffectiveDateTime(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_STUDY_EFFECTIVE_PERIOD === $childName) {
                $type->setStudyEffectivePeriod(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STUDY_EFFECTIVE_DURATION === $childName) {
                $type->setStudyEffectiveDuration(FHIRDuration::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STUDY_EFFECTIVE_TIMING === $childName) {
                $type->setStudyEffectiveTiming(FHIRTiming::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STUDY_EFFECTIVE_TIME_FROM_START === $childName) {
                $type->setStudyEffectiveTimeFromStart(FHIRDuration::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE === $childName) {
                $type->setStudyEffectiveGroupMeasure(FHIRGroupMeasure::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION === $childName) {
                $type->setParticipantEffectiveDescription(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME === $childName) {
                $type->setParticipantEffectiveDateTime(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD === $childName) {
                $type->setParticipantEffectivePeriod(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PARTICIPANT_EFFECTIVE_DURATION === $childName) {
                $type->setParticipantEffectiveDuration(FHIRDuration::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PARTICIPANT_EFFECTIVE_TIMING === $childName) {
                $type->setParticipantEffectiveTiming(FHIRTiming::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START === $childName) {
                $type->setParticipantEffectiveTimeFromStart(FHIRDuration::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE === $childName) {
                $type->setParticipantEffectiveGroupMeasure(FHIRGroupMeasure::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_DEFINITION_CANONICAL])) {
            $pt = $type->getDefinitionCanonical();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFINITION_CANONICAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefinitionCanonical((string)$attributes[self::FIELD_DEFINITION_CANONICAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXCLUDE])) {
            $pt = $type->getExclude();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_EXCLUDE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setExclude((string)$attributes[self::FIELD_EXCLUDE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION])) {
            $pt = $type->getStudyEffectiveDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setStudyEffectiveDescription((string)$attributes[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_STUDY_EFFECTIVE_DATE_TIME])) {
            $pt = $type->getStudyEffectiveDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_STUDY_EFFECTIVE_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setStudyEffectiveDateTime((string)$attributes[self::FIELD_STUDY_EFFECTIVE_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION])) {
            $pt = $type->getParticipantEffectiveDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setParticipantEffectiveDescription((string)$attributes[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME])) {
            $pt = $type->getParticipantEffectiveDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setParticipantEffectiveDateTime((string)$attributes[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'ResearchElementDefinitionCharacteristic', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFINITION_CANONICAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefinitionCanonical())) {
            $xw->writeAttribute(self::FIELD_DEFINITION_CANONICAL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_EXCLUDE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getExclude())) {
            $xw->writeAttribute(self::FIELD_EXCLUDE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getStudyEffectiveDescription())) {
            $xw->writeAttribute(self::FIELD_STUDY_EFFECTIVE_DESCRIPTION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_STUDY_EFFECTIVE_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getStudyEffectiveDateTime())) {
            $xw->writeAttribute(self::FIELD_STUDY_EFFECTIVE_DATE_TIME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getParticipantEffectiveDescription())) {
            $xw->writeAttribute(self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getParticipantEffectiveDateTime())) {
            $xw->writeAttribute(self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getDefinitionCodeableConcept())) {
            $xw->startElement(self::FIELD_DEFINITION_CODEABLE_CONCEPT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFINITION_CANONICAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefinitionCanonical())) {
            $xw->startElement(self::FIELD_DEFINITION_CANONICAL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefinitionExpression())) {
            $xw->startElement(self::FIELD_DEFINITION_EXPRESSION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefinitionDataRequirement())) {
            $xw->startElement(self::FIELD_DEFINITION_DATA_REQUIREMENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getUsageContext() as $v) {
            $xw->startElement(self::FIELD_USAGE_CONTEXT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_EXCLUDE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getExclude())) {
            $xw->startElement(self::FIELD_EXCLUDE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getUnitOfMeasure())) {
            $xw->startElement(self::FIELD_UNIT_OF_MEASURE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getStudyEffectiveDescription())) {
            $xw->startElement(self::FIELD_STUDY_EFFECTIVE_DESCRIPTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_STUDY_EFFECTIVE_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getStudyEffectiveDateTime())) {
            $xw->startElement(self::FIELD_STUDY_EFFECTIVE_DATE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStudyEffectivePeriod())) {
            $xw->startElement(self::FIELD_STUDY_EFFECTIVE_PERIOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStudyEffectiveDuration())) {
            $xw->startElement(self::FIELD_STUDY_EFFECTIVE_DURATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStudyEffectiveTiming())) {
            $xw->startElement(self::FIELD_STUDY_EFFECTIVE_TIMING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStudyEffectiveTimeFromStart())) {
            $xw->startElement(self::FIELD_STUDY_EFFECTIVE_TIME_FROM_START);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStudyEffectiveGroupMeasure())) {
            $xw->startElement(self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getParticipantEffectiveDescription())) {
            $xw->startElement(self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getParticipantEffectiveDateTime())) {
            $xw->startElement(self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getParticipantEffectivePeriod())) {
            $xw->startElement(self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getParticipantEffectiveDuration())) {
            $xw->startElement(self::FIELD_PARTICIPANT_EFFECTIVE_DURATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getParticipantEffectiveTiming())) {
            $xw->startElement(self::FIELD_PARTICIPANT_EFFECTIVE_TIMING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getParticipantEffectiveTimeFromStart())) {
            $xw->startElement(self::FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getParticipantEffectiveGroupMeasure())) {
            $xw->startElement(self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE);
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
        if (null !== ($v = $this->getDefinitionCodeableConcept())) {
            $out->{self::FIELD_DEFINITION_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getDefinitionCanonical())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFINITION_CANONICAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCanonical::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFINITION_CANONICAL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefinitionExpression())) {
            $out->{self::FIELD_DEFINITION_EXPRESSION} = $v;
        }
        if (null !== ($v = $this->getDefinitionDataRequirement())) {
            $out->{self::FIELD_DEFINITION_DATA_REQUIREMENT} = $v;
        }
        if ([] !== ($vs = $this->getUsageContext())) {
            $out->{self::FIELD_USAGE_CONTEXT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_USAGE_CONTEXT}[] = $v;
            }
        }
        if (null !== ($v = $this->getExclude())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_EXCLUDE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EXCLUDE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getUnitOfMeasure())) {
            $out->{self::FIELD_UNIT_OF_MEASURE} = $v;
        }
        if (null !== ($v = $this->getStudyEffectiveDescription())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STUDY_EFFECTIVE_DESCRIPTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STUDY_EFFECTIVE_DESCRIPTION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getStudyEffectiveDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STUDY_EFFECTIVE_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STUDY_EFFECTIVE_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getStudyEffectivePeriod())) {
            $out->{self::FIELD_STUDY_EFFECTIVE_PERIOD} = $v;
        }
        if (null !== ($v = $this->getStudyEffectiveDuration())) {
            $out->{self::FIELD_STUDY_EFFECTIVE_DURATION} = $v;
        }
        if (null !== ($v = $this->getStudyEffectiveTiming())) {
            $out->{self::FIELD_STUDY_EFFECTIVE_TIMING} = $v;
        }
        if (null !== ($v = $this->getStudyEffectiveTimeFromStart())) {
            $out->{self::FIELD_STUDY_EFFECTIVE_TIME_FROM_START} = $v;
        }
        if (null !== ($v = $this->getStudyEffectiveGroupMeasure())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRGroupMeasure::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getParticipantEffectiveDescription())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getParticipantEffectiveDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getParticipantEffectivePeriod())) {
            $out->{self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD} = $v;
        }
        if (null !== ($v = $this->getParticipantEffectiveDuration())) {
            $out->{self::FIELD_PARTICIPANT_EFFECTIVE_DURATION} = $v;
        }
        if (null !== ($v = $this->getParticipantEffectiveTiming())) {
            $out->{self::FIELD_PARTICIPANT_EFFECTIVE_TIMING} = $v;
        }
        if (null !== ($v = $this->getParticipantEffectiveTimeFromStart())) {
            $out->{self::FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START} = $v;
        }
        if (null !== ($v = $this->getParticipantEffectiveGroupMeasure())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRGroupMeasure::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE_EXT} = $ext;
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