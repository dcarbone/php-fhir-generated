<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:05+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExpression;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRGroupMeasure;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * The ResearchElementDefinition resource describes a "PICO" element that knowledge
 * (evidence, assertion, recommendation) is about.
 *
 * Class FHIRResearchElementDefinitionCharacteristic
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition
 */
class FHIRResearchElementDefinitionCharacteristic extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_RESEARCH_ELEMENT_DEFINITION_DOT_CHARACTERISTIC;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_DEFINITION_CANONICAL = 'definitionCanonical';
    const FIELD_DEFINITION_CANONICAL_EXT = '_definitionCanonical';
    const FIELD_DEFINITION_CODEABLE_CONCEPT = 'definitionCodeableConcept';
    const FIELD_DEFINITION_DATA_REQUIREMENT = 'definitionDataRequirement';
    const FIELD_DEFINITION_EXPRESSION = 'definitionExpression';
    const FIELD_EXCLUDE = 'exclude';
    const FIELD_EXCLUDE_EXT = '_exclude';
    const FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME = 'participantEffectiveDateTime';
    const FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME_EXT = '_participantEffectiveDateTime';
    const FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION = 'participantEffectiveDescription';
    const FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION_EXT = '_participantEffectiveDescription';
    const FIELD_PARTICIPANT_EFFECTIVE_DURATION = 'participantEffectiveDuration';
    const FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE = 'participantEffectiveGroupMeasure';
    const FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE_EXT = '_participantEffectiveGroupMeasure';
    const FIELD_PARTICIPANT_EFFECTIVE_PERIOD = 'participantEffectivePeriod';
    const FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START = 'participantEffectiveTimeFromStart';
    const FIELD_PARTICIPANT_EFFECTIVE_TIMING = 'participantEffectiveTiming';
    const FIELD_STUDY_EFFECTIVE_DATE_TIME = 'studyEffectiveDateTime';
    const FIELD_STUDY_EFFECTIVE_DATE_TIME_EXT = '_studyEffectiveDateTime';
    const FIELD_STUDY_EFFECTIVE_DESCRIPTION = 'studyEffectiveDescription';
    const FIELD_STUDY_EFFECTIVE_DESCRIPTION_EXT = '_studyEffectiveDescription';
    const FIELD_STUDY_EFFECTIVE_DURATION = 'studyEffectiveDuration';
    const FIELD_STUDY_EFFECTIVE_GROUP_MEASURE = 'studyEffectiveGroupMeasure';
    const FIELD_STUDY_EFFECTIVE_GROUP_MEASURE_EXT = '_studyEffectiveGroupMeasure';
    const FIELD_STUDY_EFFECTIVE_PERIOD = 'studyEffectivePeriod';
    const FIELD_STUDY_EFFECTIVE_TIME_FROM_START = 'studyEffectiveTimeFromStart';
    const FIELD_STUDY_EFFECTIVE_TIMING = 'studyEffectiveTiming';
    const FIELD_UNIT_OF_MEASURE = 'unitOfMeasure';
    const FIELD_USAGE_CONTEXT = 'usageContext';

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    private $definitionCanonical = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $definitionCodeableConcept = null;
    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement
     */
    private $definitionDataRequirement = null;
    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExpression
     */
    private $definitionExpression = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * When true, members with this characteristic are excluded from the element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    private $exclude = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    private $participantEffectiveDateTime = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A narrative description of the time period the study covers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $participantEffectiveDescription = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    private $participantEffectiveDuration = null;
    /**
     * Possible group measure aggregates (E.g. Mean, Median).
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRGroupMeasure
     */
    private $participantEffectiveGroupMeasure = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    private $participantEffectivePeriod = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates duration from the participant's study entry.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    private $participantEffectiveTimeFromStart = null;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    private $participantEffectiveTiming = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    private $studyEffectiveDateTime = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A narrative description of the time period the study covers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $studyEffectiveDescription = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    private $studyEffectiveDuration = null;
    /**
     * Possible group measure aggregates (E.g. Mean, Median).
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRGroupMeasure
     */
    private $studyEffectiveGroupMeasure = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    private $studyEffectivePeriod = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates duration from the study initiation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    private $studyEffectiveTimeFromStart = null;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    private $studyEffectiveTiming = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies the UCUM unit for the outcome.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $unitOfMeasure = null;
    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Use UsageContext to define the members of the population, such as Age Ranges,
     * Genders, Settings.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext[]
     */
    private $usageContext = [];

    /**
     * FHIRResearchElementDefinitionCharacteristic Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRResearchElementDefinitionCharacteristic::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DEFINITION_CANONICAL])) {
            $ext = (isset($data[self::FIELD_DEFINITION_CANONICAL_EXT]) && is_array($data[self::FIELD_DEFINITION_CANONICAL_EXT]))
                ? $data[self::FIELD_DEFINITION_CANONICAL_EXT]
                : null;
            if ($data[self::FIELD_DEFINITION_CANONICAL] instanceof FHIRCanonical) {
                $this->setDefinitionCanonical($data[self::FIELD_DEFINITION_CANONICAL]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEFINITION_CANONICAL])) {
                $this->setDefinitionCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $data[self::FIELD_DEFINITION_CANONICAL]] + $ext));
            } else {
                $this->setDefinitionCanonical(new FHIRCanonical($data[self::FIELD_DEFINITION_CANONICAL]));
            }
        }
        if (isset($data[self::FIELD_DEFINITION_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_DEFINITION_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setDefinitionCodeableConcept($data[self::FIELD_DEFINITION_CODEABLE_CONCEPT]);
            } else {
                $this->setDefinitionCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_DEFINITION_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_DEFINITION_DATA_REQUIREMENT])) {
            if ($data[self::FIELD_DEFINITION_DATA_REQUIREMENT] instanceof FHIRDataRequirement) {
                $this->setDefinitionDataRequirement($data[self::FIELD_DEFINITION_DATA_REQUIREMENT]);
            } else {
                $this->setDefinitionDataRequirement(new FHIRDataRequirement($data[self::FIELD_DEFINITION_DATA_REQUIREMENT]));
            }
        }
        if (isset($data[self::FIELD_DEFINITION_EXPRESSION])) {
            if ($data[self::FIELD_DEFINITION_EXPRESSION] instanceof FHIRExpression) {
                $this->setDefinitionExpression($data[self::FIELD_DEFINITION_EXPRESSION]);
            } else {
                $this->setDefinitionExpression(new FHIRExpression($data[self::FIELD_DEFINITION_EXPRESSION]));
            }
        }
        if (isset($data[self::FIELD_EXCLUDE])) {
            $ext = (isset($data[self::FIELD_EXCLUDE_EXT]) && is_array($data[self::FIELD_EXCLUDE_EXT]))
                ? $data[self::FIELD_EXCLUDE_EXT]
                : null;
            if ($data[self::FIELD_EXCLUDE] instanceof FHIRBoolean) {
                $this->setExclude($data[self::FIELD_EXCLUDE]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXCLUDE])) {
                $this->setExclude(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_EXCLUDE]] + $ext));
            } else {
                $this->setExclude(new FHIRBoolean($data[self::FIELD_EXCLUDE]));
            }
        }
        if (isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME_EXT]) && is_array($data[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME_EXT]))
                ? $data[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME] instanceof FHIRDateTime) {
                $this->setParticipantEffectiveDateTime($data[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME])) {
                $this->setParticipantEffectiveDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME]] + $ext));
            } else {
                $this->setParticipantEffectiveDateTime(new FHIRDateTime($data[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION_EXT]) && is_array($data[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION_EXT]))
                ? $data[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION] instanceof FHIRString) {
                $this->setParticipantEffectiveDescription($data[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION])) {
                $this->setParticipantEffectiveDescription(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION]] + $ext));
            } else {
                $this->setParticipantEffectiveDescription(new FHIRString($data[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_DURATION])) {
            if ($data[self::FIELD_PARTICIPANT_EFFECTIVE_DURATION] instanceof FHIRDuration) {
                $this->setParticipantEffectiveDuration($data[self::FIELD_PARTICIPANT_EFFECTIVE_DURATION]);
            } else {
                $this->setParticipantEffectiveDuration(new FHIRDuration($data[self::FIELD_PARTICIPANT_EFFECTIVE_DURATION]));
            }
        }
        if (isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE])) {
            $ext = (isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE_EXT]) && is_array($data[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE_EXT]))
                ? $data[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE_EXT]
                : null;
            if ($data[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE] instanceof FHIRGroupMeasure) {
                $this->setParticipantEffectiveGroupMeasure($data[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE]);
            } elseif ($ext && is_scalar($data[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE])) {
                $this->setParticipantEffectiveGroupMeasure(new FHIRGroupMeasure([FHIRGroupMeasure::FIELD_VALUE => $data[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE]] + $ext));
            } else {
                $this->setParticipantEffectiveGroupMeasure(new FHIRGroupMeasure($data[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE]));
            }
        }
        if (isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD])) {
            if ($data[self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD] instanceof FHIRPeriod) {
                $this->setParticipantEffectivePeriod($data[self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD]);
            } else {
                $this->setParticipantEffectivePeriod(new FHIRPeriod($data[self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START])) {
            if ($data[self::FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START] instanceof FHIRDuration) {
                $this->setParticipantEffectiveTimeFromStart($data[self::FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START]);
            } else {
                $this->setParticipantEffectiveTimeFromStart(new FHIRDuration($data[self::FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START]));
            }
        }
        if (isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_TIMING])) {
            if ($data[self::FIELD_PARTICIPANT_EFFECTIVE_TIMING] instanceof FHIRTiming) {
                $this->setParticipantEffectiveTiming($data[self::FIELD_PARTICIPANT_EFFECTIVE_TIMING]);
            } else {
                $this->setParticipantEffectiveTiming(new FHIRTiming($data[self::FIELD_PARTICIPANT_EFFECTIVE_TIMING]));
            }
        }
        if (isset($data[self::FIELD_STUDY_EFFECTIVE_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_STUDY_EFFECTIVE_DATE_TIME_EXT]) && is_array($data[self::FIELD_STUDY_EFFECTIVE_DATE_TIME_EXT]))
                ? $data[self::FIELD_STUDY_EFFECTIVE_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_STUDY_EFFECTIVE_DATE_TIME] instanceof FHIRDateTime) {
                $this->setStudyEffectiveDateTime($data[self::FIELD_STUDY_EFFECTIVE_DATE_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_STUDY_EFFECTIVE_DATE_TIME])) {
                $this->setStudyEffectiveDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_STUDY_EFFECTIVE_DATE_TIME]] + $ext));
            } else {
                $this->setStudyEffectiveDateTime(new FHIRDateTime($data[self::FIELD_STUDY_EFFECTIVE_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION_EXT]) && is_array($data[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION_EXT]))
                ? $data[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION] instanceof FHIRString) {
                $this->setStudyEffectiveDescription($data[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION])) {
                $this->setStudyEffectiveDescription(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION]] + $ext));
            } else {
                $this->setStudyEffectiveDescription(new FHIRString($data[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_STUDY_EFFECTIVE_DURATION])) {
            if ($data[self::FIELD_STUDY_EFFECTIVE_DURATION] instanceof FHIRDuration) {
                $this->setStudyEffectiveDuration($data[self::FIELD_STUDY_EFFECTIVE_DURATION]);
            } else {
                $this->setStudyEffectiveDuration(new FHIRDuration($data[self::FIELD_STUDY_EFFECTIVE_DURATION]));
            }
        }
        if (isset($data[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE])) {
            $ext = (isset($data[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE_EXT]) && is_array($data[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE_EXT]))
                ? $data[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE_EXT]
                : null;
            if ($data[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE] instanceof FHIRGroupMeasure) {
                $this->setStudyEffectiveGroupMeasure($data[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE]);
            } elseif ($ext && is_scalar($data[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE])) {
                $this->setStudyEffectiveGroupMeasure(new FHIRGroupMeasure([FHIRGroupMeasure::FIELD_VALUE => $data[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE]] + $ext));
            } else {
                $this->setStudyEffectiveGroupMeasure(new FHIRGroupMeasure($data[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE]));
            }
        }
        if (isset($data[self::FIELD_STUDY_EFFECTIVE_PERIOD])) {
            if ($data[self::FIELD_STUDY_EFFECTIVE_PERIOD] instanceof FHIRPeriod) {
                $this->setStudyEffectivePeriod($data[self::FIELD_STUDY_EFFECTIVE_PERIOD]);
            } else {
                $this->setStudyEffectivePeriod(new FHIRPeriod($data[self::FIELD_STUDY_EFFECTIVE_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_STUDY_EFFECTIVE_TIME_FROM_START])) {
            if ($data[self::FIELD_STUDY_EFFECTIVE_TIME_FROM_START] instanceof FHIRDuration) {
                $this->setStudyEffectiveTimeFromStart($data[self::FIELD_STUDY_EFFECTIVE_TIME_FROM_START]);
            } else {
                $this->setStudyEffectiveTimeFromStart(new FHIRDuration($data[self::FIELD_STUDY_EFFECTIVE_TIME_FROM_START]));
            }
        }
        if (isset($data[self::FIELD_STUDY_EFFECTIVE_TIMING])) {
            if ($data[self::FIELD_STUDY_EFFECTIVE_TIMING] instanceof FHIRTiming) {
                $this->setStudyEffectiveTiming($data[self::FIELD_STUDY_EFFECTIVE_TIMING]);
            } else {
                $this->setStudyEffectiveTiming(new FHIRTiming($data[self::FIELD_STUDY_EFFECTIVE_TIMING]));
            }
        }
        if (isset($data[self::FIELD_UNIT_OF_MEASURE])) {
            if ($data[self::FIELD_UNIT_OF_MEASURE] instanceof FHIRCodeableConcept) {
                $this->setUnitOfMeasure($data[self::FIELD_UNIT_OF_MEASURE]);
            } else {
                $this->setUnitOfMeasure(new FHIRCodeableConcept($data[self::FIELD_UNIT_OF_MEASURE]));
            }
        }
        if (isset($data[self::FIELD_USAGE_CONTEXT])) {
            if (is_array($data[self::FIELD_USAGE_CONTEXT])) {
                foreach($data[self::FIELD_USAGE_CONTEXT] as $v) {
                    if ($v instanceof FHIRUsageContext) {
                        $this->addUsageContext($v);
                    } else {
                        $this->addUsageContext(new FHIRUsageContext($v));
                    }
                }
            } else if ($data[self::FIELD_USAGE_CONTEXT] instanceof FHIRUsageContext) {
                $this->addUsageContext($data[self::FIELD_USAGE_CONTEXT]);
            } else {
                $this->addUsageContext(new FHIRUsageContext($data[self::FIELD_USAGE_CONTEXT]));
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic
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
        return "<ResearchElementDefinitionCharacteristic{$xmlns}></ResearchElementDefinitionCharacteristic>";
    }


    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    public function getDefinitionCanonical()
    {
        return $this->definitionCanonical;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $definitionCanonical
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic
     */
    public function setDefinitionCanonical($definitionCanonical = null)
    {
        if (null === $definitionCanonical) {
            $this->definitionCanonical = null;
            return $this;
        }
        if ($definitionCanonical instanceof FHIRCanonical) {
            $this->definitionCanonical = $definitionCanonical;
            return $this;
        }
        $this->definitionCanonical = new FHIRCanonical($definitionCanonical);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getDefinitionCodeableConcept()
    {
        return $this->definitionCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $definitionCodeableConcept
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic
     */
    public function setDefinitionCodeableConcept(FHIRCodeableConcept $definitionCodeableConcept = null)
    {
        $this->definitionCodeableConcept = $definitionCodeableConcept;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement
     */
    public function getDefinitionDataRequirement()
    {
        return $this->definitionDataRequirement;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement $definitionDataRequirement
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic
     */
    public function setDefinitionDataRequirement(FHIRDataRequirement $definitionDataRequirement = null)
    {
        $this->definitionDataRequirement = $definitionDataRequirement;
        return $this;
    }

    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExpression
     */
    public function getDefinitionExpression()
    {
        return $this->definitionExpression;
    }

    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExpression $definitionExpression
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic
     */
    public function setDefinitionExpression(FHIRExpression $definitionExpression = null)
    {
        $this->definitionExpression = $definitionExpression;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * When true, members with this characteristic are excluded from the element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getExclude()
    {
        return $this->exclude;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * When true, members with this characteristic are excluded from the element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $exclude
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic
     */
    public function setExclude($exclude = null)
    {
        if (null === $exclude) {
            $this->exclude = null;
            return $this;
        }
        if ($exclude instanceof FHIRBoolean) {
            $this->exclude = $exclude;
            return $this;
        }
        $this->exclude = new FHIRBoolean($exclude);
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getParticipantEffectiveDateTime()
    {
        return $this->participantEffectiveDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $participantEffectiveDateTime
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic
     */
    public function setParticipantEffectiveDateTime($participantEffectiveDateTime = null)
    {
        if (null === $participantEffectiveDateTime) {
            $this->participantEffectiveDateTime = null;
            return $this;
        }
        if ($participantEffectiveDateTime instanceof FHIRDateTime) {
            $this->participantEffectiveDateTime = $participantEffectiveDateTime;
            return $this;
        }
        $this->participantEffectiveDateTime = new FHIRDateTime($participantEffectiveDateTime);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A narrative description of the time period the study covers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getParticipantEffectiveDescription()
    {
        return $this->participantEffectiveDescription;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A narrative description of the time period the study covers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $participantEffectiveDescription
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic
     */
    public function setParticipantEffectiveDescription($participantEffectiveDescription = null)
    {
        if (null === $participantEffectiveDescription) {
            $this->participantEffectiveDescription = null;
            return $this;
        }
        if ($participantEffectiveDescription instanceof FHIRString) {
            $this->participantEffectiveDescription = $participantEffectiveDescription;
            return $this;
        }
        $this->participantEffectiveDescription = new FHIRString($participantEffectiveDescription);
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getParticipantEffectiveDuration()
    {
        return $this->participantEffectiveDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration $participantEffectiveDuration
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic
     */
    public function setParticipantEffectiveDuration(FHIRDuration $participantEffectiveDuration = null)
    {
        $this->participantEffectiveDuration = $participantEffectiveDuration;
        return $this;
    }

    /**
     * Possible group measure aggregates (E.g. Mean, Median).
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRGroupMeasure
     */
    public function getParticipantEffectiveGroupMeasure()
    {
        return $this->participantEffectiveGroupMeasure;
    }

    /**
     * Possible group measure aggregates (E.g. Mean, Median).
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRGroupMeasure $participantEffectiveGroupMeasure
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic
     */
    public function setParticipantEffectiveGroupMeasure(FHIRGroupMeasure $participantEffectiveGroupMeasure = null)
    {
        $this->participantEffectiveGroupMeasure = $participantEffectiveGroupMeasure;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    public function getParticipantEffectivePeriod()
    {
        return $this->participantEffectivePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $participantEffectivePeriod
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic
     */
    public function setParticipantEffectivePeriod(FHIRPeriod $participantEffectivePeriod = null)
    {
        $this->participantEffectivePeriod = $participantEffectivePeriod;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates duration from the participant's study entry.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getParticipantEffectiveTimeFromStart()
    {
        return $this->participantEffectiveTimeFromStart;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates duration from the participant's study entry.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration $participantEffectiveTimeFromStart
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic
     */
    public function setParticipantEffectiveTimeFromStart(FHIRDuration $participantEffectiveTimeFromStart = null)
    {
        $this->participantEffectiveTimeFromStart = $participantEffectiveTimeFromStart;
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getParticipantEffectiveTiming()
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming $participantEffectiveTiming
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic
     */
    public function setParticipantEffectiveTiming(FHIRTiming $participantEffectiveTiming = null)
    {
        $this->participantEffectiveTiming = $participantEffectiveTiming;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getStudyEffectiveDateTime()
    {
        return $this->studyEffectiveDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $studyEffectiveDateTime
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic
     */
    public function setStudyEffectiveDateTime($studyEffectiveDateTime = null)
    {
        if (null === $studyEffectiveDateTime) {
            $this->studyEffectiveDateTime = null;
            return $this;
        }
        if ($studyEffectiveDateTime instanceof FHIRDateTime) {
            $this->studyEffectiveDateTime = $studyEffectiveDateTime;
            return $this;
        }
        $this->studyEffectiveDateTime = new FHIRDateTime($studyEffectiveDateTime);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A narrative description of the time period the study covers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getStudyEffectiveDescription()
    {
        return $this->studyEffectiveDescription;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A narrative description of the time period the study covers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $studyEffectiveDescription
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic
     */
    public function setStudyEffectiveDescription($studyEffectiveDescription = null)
    {
        if (null === $studyEffectiveDescription) {
            $this->studyEffectiveDescription = null;
            return $this;
        }
        if ($studyEffectiveDescription instanceof FHIRString) {
            $this->studyEffectiveDescription = $studyEffectiveDescription;
            return $this;
        }
        $this->studyEffectiveDescription = new FHIRString($studyEffectiveDescription);
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getStudyEffectiveDuration()
    {
        return $this->studyEffectiveDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration $studyEffectiveDuration
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic
     */
    public function setStudyEffectiveDuration(FHIRDuration $studyEffectiveDuration = null)
    {
        $this->studyEffectiveDuration = $studyEffectiveDuration;
        return $this;
    }

    /**
     * Possible group measure aggregates (E.g. Mean, Median).
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRGroupMeasure
     */
    public function getStudyEffectiveGroupMeasure()
    {
        return $this->studyEffectiveGroupMeasure;
    }

    /**
     * Possible group measure aggregates (E.g. Mean, Median).
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRGroupMeasure $studyEffectiveGroupMeasure
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic
     */
    public function setStudyEffectiveGroupMeasure(FHIRGroupMeasure $studyEffectiveGroupMeasure = null)
    {
        $this->studyEffectiveGroupMeasure = $studyEffectiveGroupMeasure;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    public function getStudyEffectivePeriod()
    {
        return $this->studyEffectivePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $studyEffectivePeriod
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic
     */
    public function setStudyEffectivePeriod(FHIRPeriod $studyEffectivePeriod = null)
    {
        $this->studyEffectivePeriod = $studyEffectivePeriod;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates duration from the study initiation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getStudyEffectiveTimeFromStart()
    {
        return $this->studyEffectiveTimeFromStart;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates duration from the study initiation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration $studyEffectiveTimeFromStart
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic
     */
    public function setStudyEffectiveTimeFromStart(FHIRDuration $studyEffectiveTimeFromStart = null)
    {
        $this->studyEffectiveTimeFromStart = $studyEffectiveTimeFromStart;
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getStudyEffectiveTiming()
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming $studyEffectiveTiming
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic
     */
    public function setStudyEffectiveTiming(FHIRTiming $studyEffectiveTiming = null)
    {
        $this->studyEffectiveTiming = $studyEffectiveTiming;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies the UCUM unit for the outcome.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getUnitOfMeasure()
    {
        return $this->unitOfMeasure;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Specifies the UCUM unit for the outcome.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $unitOfMeasure
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic
     */
    public function setUnitOfMeasure(FHIRCodeableConcept $unitOfMeasure = null)
    {
        $this->unitOfMeasure = $unitOfMeasure;
        return $this;
    }

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Use UsageContext to define the members of the population, such as Age Ranges,
     * Genders, Settings.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext[]
     */
    public function getUsageContext()
    {
        return $this->usageContext;
    }

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Use UsageContext to define the members of the population, such as Age Ranges,
     * Genders, Settings.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext $usageContext
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic
     */
    public function addUsageContext(FHIRUsageContext $usageContext = null)
    {
        $this->usageContext[] = $usageContext;
        return $this;
    }

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Use UsageContext to define the members of the population, such as Age Ranges,
     * Genders, Settings.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext[] $usageContext
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic
     */
    public function setUsageContext(array $usageContext = [])
    {
        $this->usageContext = [];
        if ([] === $usageContext) {
            return $this;
        }
        foreach($usageContext as $v) {
            if ($v instanceof FHIRUsageContext) {
                $this->addUsageContext($v);
            } else {
                $this->addUsageContext(new FHIRUsageContext($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic
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
                throw new \DomainException(sprintf('FHIRResearchElementDefinitionCharacteristic::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRResearchElementDefinitionCharacteristic::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRResearchElementDefinitionCharacteristic;
        } elseif (!is_object($type) || !($type instanceof FHIRResearchElementDefinitionCharacteristic)) {
            throw new \RuntimeException(sprintf(
                'FHIRResearchElementDefinitionCharacteristic::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic or null, %s seen.',
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
        if (isset($attributes->definitionCanonical)) {
            $type->setDefinitionCanonical((string)$attributes->definitionCanonical);
        }
        if (isset($children->definitionCanonical)) {
            $type->setDefinitionCanonical(FHIRCanonical::xmlUnserialize($children->definitionCanonical));
        }
        if (isset($children->definitionCodeableConcept)) {
            $type->setDefinitionCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->definitionCodeableConcept));
        }
        if (isset($children->definitionDataRequirement)) {
            $type->setDefinitionDataRequirement(FHIRDataRequirement::xmlUnserialize($children->definitionDataRequirement));
        }
        if (isset($children->definitionExpression)) {
            $type->setDefinitionExpression(FHIRExpression::xmlUnserialize($children->definitionExpression));
        }
        if (isset($attributes->exclude)) {
            $type->setExclude((string)$attributes->exclude);
        }
        if (isset($children->exclude)) {
            $type->setExclude(FHIRBoolean::xmlUnserialize($children->exclude));
        }
        if (isset($attributes->participantEffectiveDateTime)) {
            $type->setParticipantEffectiveDateTime((string)$attributes->participantEffectiveDateTime);
        }
        if (isset($children->participantEffectiveDateTime)) {
            $type->setParticipantEffectiveDateTime(FHIRDateTime::xmlUnserialize($children->participantEffectiveDateTime));
        }
        if (isset($attributes->participantEffectiveDescription)) {
            $type->setParticipantEffectiveDescription((string)$attributes->participantEffectiveDescription);
        }
        if (isset($children->participantEffectiveDescription)) {
            $type->setParticipantEffectiveDescription(FHIRString::xmlUnserialize($children->participantEffectiveDescription));
        }
        if (isset($children->participantEffectiveDuration)) {
            $type->setParticipantEffectiveDuration(FHIRDuration::xmlUnserialize($children->participantEffectiveDuration));
        }
        if (isset($children->participantEffectiveGroupMeasure)) {
            $type->setParticipantEffectiveGroupMeasure(FHIRGroupMeasure::xmlUnserialize($children->participantEffectiveGroupMeasure));
        }
        if (isset($children->participantEffectivePeriod)) {
            $type->setParticipantEffectivePeriod(FHIRPeriod::xmlUnserialize($children->participantEffectivePeriod));
        }
        if (isset($children->participantEffectiveTimeFromStart)) {
            $type->setParticipantEffectiveTimeFromStart(FHIRDuration::xmlUnserialize($children->participantEffectiveTimeFromStart));
        }
        if (isset($children->participantEffectiveTiming)) {
            $type->setParticipantEffectiveTiming(FHIRTiming::xmlUnserialize($children->participantEffectiveTiming));
        }
        if (isset($attributes->studyEffectiveDateTime)) {
            $type->setStudyEffectiveDateTime((string)$attributes->studyEffectiveDateTime);
        }
        if (isset($children->studyEffectiveDateTime)) {
            $type->setStudyEffectiveDateTime(FHIRDateTime::xmlUnserialize($children->studyEffectiveDateTime));
        }
        if (isset($attributes->studyEffectiveDescription)) {
            $type->setStudyEffectiveDescription((string)$attributes->studyEffectiveDescription);
        }
        if (isset($children->studyEffectiveDescription)) {
            $type->setStudyEffectiveDescription(FHIRString::xmlUnserialize($children->studyEffectiveDescription));
        }
        if (isset($children->studyEffectiveDuration)) {
            $type->setStudyEffectiveDuration(FHIRDuration::xmlUnserialize($children->studyEffectiveDuration));
        }
        if (isset($children->studyEffectiveGroupMeasure)) {
            $type->setStudyEffectiveGroupMeasure(FHIRGroupMeasure::xmlUnserialize($children->studyEffectiveGroupMeasure));
        }
        if (isset($children->studyEffectivePeriod)) {
            $type->setStudyEffectivePeriod(FHIRPeriod::xmlUnserialize($children->studyEffectivePeriod));
        }
        if (isset($children->studyEffectiveTimeFromStart)) {
            $type->setStudyEffectiveTimeFromStart(FHIRDuration::xmlUnserialize($children->studyEffectiveTimeFromStart));
        }
        if (isset($children->studyEffectiveTiming)) {
            $type->setStudyEffectiveTiming(FHIRTiming::xmlUnserialize($children->studyEffectiveTiming));
        }
        if (isset($children->unitOfMeasure)) {
            $type->setUnitOfMeasure(FHIRCodeableConcept::xmlUnserialize($children->unitOfMeasure));
        }
        if (isset($children->usageContext)) {
            foreach($children->usageContext as $child) {
                $type->addUsageContext(FHIRUsageContext::xmlUnserialize($child));
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
        if (null !== ($v = $this->getDefinitionCanonical())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFINITION_CANONICAL, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefinitionCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFINITION_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefinitionDataRequirement())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFINITION_DATA_REQUIREMENT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDefinitionExpression())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFINITION_EXPRESSION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExclude())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXCLUDE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getParticipantEffectiveDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getParticipantEffectiveDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getParticipantEffectiveDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PARTICIPANT_EFFECTIVE_DURATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getParticipantEffectiveGroupMeasure())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getParticipantEffectivePeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getParticipantEffectiveTimeFromStart())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getParticipantEffectiveTiming())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PARTICIPANT_EFFECTIVE_TIMING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStudyEffectiveDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STUDY_EFFECTIVE_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStudyEffectiveDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STUDY_EFFECTIVE_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getStudyEffectiveDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STUDY_EFFECTIVE_DURATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStudyEffectiveGroupMeasure())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getStudyEffectivePeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STUDY_EFFECTIVE_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getStudyEffectiveTimeFromStart())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STUDY_EFFECTIVE_TIME_FROM_START, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getStudyEffectiveTiming())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STUDY_EFFECTIVE_TIMING, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getUnitOfMeasure())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_UNIT_OF_MEASURE, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getUsageContext())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_USAGE_CONTEXT, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getDefinitionCanonical())) {
            $a[self::FIELD_DEFINITION_CANONICAL] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_DEFINITION_CANONICAL_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getDefinitionCodeableConcept())) {
            $a[self::FIELD_DEFINITION_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getDefinitionDataRequirement())) {
            $a[self::FIELD_DEFINITION_DATA_REQUIREMENT] = $v;
        }
        if (null !== ($v = $this->getDefinitionExpression())) {
            $a[self::FIELD_DEFINITION_EXPRESSION] = $v;
        }
        if (null !== ($v = $this->getExclude())) {
            $a[self::FIELD_EXCLUDE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_EXCLUDE_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getParticipantEffectiveDateTime())) {
            $a[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getParticipantEffectiveDescription())) {
            $a[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getParticipantEffectiveDuration())) {
            $a[self::FIELD_PARTICIPANT_EFFECTIVE_DURATION] = $v;
        }
        if (null !== ($v = $this->getParticipantEffectiveGroupMeasure())) {
            $a[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getParticipantEffectivePeriod())) {
            $a[self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD] = $v;
        }
        if (null !== ($v = $this->getParticipantEffectiveTimeFromStart())) {
            $a[self::FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START] = $v;
        }
        if (null !== ($v = $this->getParticipantEffectiveTiming())) {
            $a[self::FIELD_PARTICIPANT_EFFECTIVE_TIMING] = $v;
        }
        if (null !== ($v = $this->getStudyEffectiveDateTime())) {
            $a[self::FIELD_STUDY_EFFECTIVE_DATE_TIME] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_STUDY_EFFECTIVE_DATE_TIME_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getStudyEffectiveDescription())) {
            $a[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getStudyEffectiveDuration())) {
            $a[self::FIELD_STUDY_EFFECTIVE_DURATION] = $v;
        }
        if (null !== ($v = $this->getStudyEffectiveGroupMeasure())) {
            $a[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getStudyEffectivePeriod())) {
            $a[self::FIELD_STUDY_EFFECTIVE_PERIOD] = $v;
        }
        if (null !== ($v = $this->getStudyEffectiveTimeFromStart())) {
            $a[self::FIELD_STUDY_EFFECTIVE_TIME_FROM_START] = $v;
        }
        if (null !== ($v = $this->getStudyEffectiveTiming())) {
            $a[self::FIELD_STUDY_EFFECTIVE_TIMING] = $v;
        }
        if (null !== ($v = $this->getUnitOfMeasure())) {
            $a[self::FIELD_UNIT_OF_MEASURE] = $v;
        }
        if ([] !== ($vs = $this->getUsageContext())) {
            $a[self::FIELD_USAGE_CONTEXT] = $vs;
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