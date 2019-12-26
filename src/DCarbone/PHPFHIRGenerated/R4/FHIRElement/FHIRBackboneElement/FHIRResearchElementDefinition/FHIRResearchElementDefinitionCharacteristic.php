<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition;

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

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year). (choose any one of definition*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    protected $definitionCanonical = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year). (choose any one of definition*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $definitionCodeableConcept = null;

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year). (choose any one of definition*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement
     */
    protected $definitionDataRequirement = null;

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
     * last year). (choose any one of definition*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExpression
     */
    protected $definitionExpression = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When true, members with this characteristic are excluded from the element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $exclude = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates what effective period the study covers. (choose any one of
     * participantEffective*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $participantEffectiveDateTime = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A narrative description of the time period the study covers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $participantEffectiveDescription = null;

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers. (choose any one of
     * participantEffective*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected $participantEffectiveDuration = null;

    /**
     * Possible group measure aggregates (E.g. Mean, Median).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRGroupMeasure
     */
    protected $participantEffectiveGroupMeasure = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers. (choose any one of
     * participantEffective*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    protected $participantEffectivePeriod = null;

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates duration from the participant's study entry.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected $participantEffectiveTimeFromStart = null;

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers. (choose any one of
     * participantEffective*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    protected $participantEffectiveTiming = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates what effective period the study covers. (choose any one of
     * studyEffective*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $studyEffectiveDateTime = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A narrative description of the time period the study covers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $studyEffectiveDescription = null;

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers. (choose any one of
     * studyEffective*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected $studyEffectiveDuration = null;

    /**
     * Possible group measure aggregates (E.g. Mean, Median).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRGroupMeasure
     */
    protected $studyEffectiveGroupMeasure = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers. (choose any one of
     * studyEffective*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    protected $studyEffectivePeriod = null;

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates duration from the study initiation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected $studyEffectiveTimeFromStart = null;

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers. (choose any one of
     * studyEffective*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    protected $studyEffectiveTiming = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the UCUM unit for the outcome.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $unitOfMeasure = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext[]
     */
    protected $usageContext = [];

    /**
     * Validation map for fields in type ResearchElementDefinition.Characteristic
     * @var array
     */
    private static $_validationRules = [    ];

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
        if (isset($data[self::FIELD_DEFINITION_CANONICAL]) || isset($data[self::FIELD_DEFINITION_CANONICAL_EXT])) {
            if (isset($data[self::FIELD_DEFINITION_CANONICAL])) {
                $value = $data[self::FIELD_DEFINITION_CANONICAL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DEFINITION_CANONICAL_EXT]) && is_array($data[self::FIELD_DEFINITION_CANONICAL_EXT])) {
                $ext = $data[self::FIELD_DEFINITION_CANONICAL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setDefinitionCanonical($value);
                } else if (is_array($value)) {
                    $this->setDefinitionCanonical(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setDefinitionCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDefinitionCanonical(new FHIRCanonical($ext));
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
        if (isset($data[self::FIELD_EXCLUDE]) || isset($data[self::FIELD_EXCLUDE_EXT])) {
            if (isset($data[self::FIELD_EXCLUDE])) {
                $value = $data[self::FIELD_EXCLUDE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_EXCLUDE_EXT]) && is_array($data[self::FIELD_EXCLUDE_EXT])) {
                $ext = $data[self::FIELD_EXCLUDE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setExclude($value);
                } else if (is_array($value)) {
                    $this->setExclude(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setExclude(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setExclude(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME]) || isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME_EXT])) {
            if (isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME])) {
                $value = $data[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME_EXT]) && is_array($data[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME_EXT])) {
                $ext = $data[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setParticipantEffectiveDateTime($value);
                } else if (is_array($value)) {
                    $this->setParticipantEffectiveDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setParticipantEffectiveDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setParticipantEffectiveDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION]) || isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION_EXT])) {
            if (isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION])) {
                $value = $data[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION_EXT]) && is_array($data[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION_EXT])) {
                $ext = $data[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setParticipantEffectiveDescription($value);
                } else if (is_array($value)) {
                    $this->setParticipantEffectiveDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setParticipantEffectiveDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setParticipantEffectiveDescription(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_DURATION])) {
            if ($data[self::FIELD_PARTICIPANT_EFFECTIVE_DURATION] instanceof FHIRDuration) {
                $this->setParticipantEffectiveDuration($data[self::FIELD_PARTICIPANT_EFFECTIVE_DURATION]);
            } else {
                $this->setParticipantEffectiveDuration(new FHIRDuration($data[self::FIELD_PARTICIPANT_EFFECTIVE_DURATION]));
            }
        }
        if (isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE]) || isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE_EXT])) {
            if (isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE])) {
                $value = $data[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE_EXT]) && is_array($data[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE_EXT])) {
                $ext = $data[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRGroupMeasure) {
                    $this->setParticipantEffectiveGroupMeasure($value);
                } else if (is_array($value)) {
                    $this->setParticipantEffectiveGroupMeasure(new FHIRGroupMeasure(array_merge($ext, $value)));
                } else {
                    $this->setParticipantEffectiveGroupMeasure(new FHIRGroupMeasure([FHIRGroupMeasure::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setParticipantEffectiveGroupMeasure(new FHIRGroupMeasure($ext));
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
        if (isset($data[self::FIELD_STUDY_EFFECTIVE_DATE_TIME]) || isset($data[self::FIELD_STUDY_EFFECTIVE_DATE_TIME_EXT])) {
            if (isset($data[self::FIELD_STUDY_EFFECTIVE_DATE_TIME])) {
                $value = $data[self::FIELD_STUDY_EFFECTIVE_DATE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STUDY_EFFECTIVE_DATE_TIME_EXT]) && is_array($data[self::FIELD_STUDY_EFFECTIVE_DATE_TIME_EXT])) {
                $ext = $data[self::FIELD_STUDY_EFFECTIVE_DATE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setStudyEffectiveDateTime($value);
                } else if (is_array($value)) {
                    $this->setStudyEffectiveDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setStudyEffectiveDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStudyEffectiveDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION]) || isset($data[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION_EXT])) {
            if (isset($data[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION])) {
                $value = $data[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION_EXT]) && is_array($data[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION_EXT])) {
                $ext = $data[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setStudyEffectiveDescription($value);
                } else if (is_array($value)) {
                    $this->setStudyEffectiveDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setStudyEffectiveDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStudyEffectiveDescription(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_STUDY_EFFECTIVE_DURATION])) {
            if ($data[self::FIELD_STUDY_EFFECTIVE_DURATION] instanceof FHIRDuration) {
                $this->setStudyEffectiveDuration($data[self::FIELD_STUDY_EFFECTIVE_DURATION]);
            } else {
                $this->setStudyEffectiveDuration(new FHIRDuration($data[self::FIELD_STUDY_EFFECTIVE_DURATION]));
            }
        }
        if (isset($data[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE]) || isset($data[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE_EXT])) {
            if (isset($data[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE])) {
                $value = $data[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE_EXT]) && is_array($data[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE_EXT])) {
                $ext = $data[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRGroupMeasure) {
                    $this->setStudyEffectiveGroupMeasure($value);
                } else if (is_array($value)) {
                    $this->setStudyEffectiveGroupMeasure(new FHIRGroupMeasure(array_merge($ext, $value)));
                } else {
                    $this->setStudyEffectiveGroupMeasure(new FHIRGroupMeasure([FHIRGroupMeasure::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStudyEffectiveGroupMeasure(new FHIRGroupMeasure($ext));
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
                    if (null === $v) {
                        continue;
                    }
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year). (choose any one of definition*, but only one)
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year). (choose any one of definition*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $definitionCanonical
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year). (choose any one of definition*, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year). (choose any one of definition*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $definitionCodeableConcept
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year). (choose any one of definition*, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year). (choose any one of definition*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement $definitionDataRequirement
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year). (choose any one of definition*, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the research element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year). (choose any one of definition*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExpression $definitionExpression
     * @return static
     */
    public function setDefinitionExpression(FHIRExpression $definitionExpression = null)
    {
        $this->definitionExpression = $definitionExpression;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When true, members with this characteristic are excluded from the element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $exclude
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates what effective period the study covers. (choose any one of
     * participantEffective*, but only one)
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates what effective period the study covers. (choose any one of
     * participantEffective*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $participantEffectiveDateTime
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A narrative description of the time period the study covers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $participantEffectiveDescription
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers. (choose any one of
     * participantEffective*, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers. (choose any one of
     * participantEffective*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration $participantEffectiveDuration
     * @return static
     */
    public function setParticipantEffectiveDuration(FHIRDuration $participantEffectiveDuration = null)
    {
        $this->participantEffectiveDuration = $participantEffectiveDuration;
        return $this;
    }

    /**
     * Possible group measure aggregates (E.g. Mean, Median).
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRGroupMeasure $participantEffectiveGroupMeasure
     * @return static
     */
    public function setParticipantEffectiveGroupMeasure(FHIRGroupMeasure $participantEffectiveGroupMeasure = null)
    {
        $this->participantEffectiveGroupMeasure = $participantEffectiveGroupMeasure;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers. (choose any one of
     * participantEffective*, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers. (choose any one of
     * participantEffective*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $participantEffectivePeriod
     * @return static
     */
    public function setParticipantEffectivePeriod(FHIRPeriod $participantEffectivePeriod = null)
    {
        $this->participantEffectivePeriod = $participantEffectivePeriod;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates duration from the participant's study entry.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration $participantEffectiveTimeFromStart
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers. (choose any one of
     * participantEffective*, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers. (choose any one of
     * participantEffective*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming $participantEffectiveTiming
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates what effective period the study covers. (choose any one of
     * studyEffective*, but only one)
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates what effective period the study covers. (choose any one of
     * studyEffective*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $studyEffectiveDateTime
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A narrative description of the time period the study covers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $studyEffectiveDescription
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers. (choose any one of
     * studyEffective*, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers. (choose any one of
     * studyEffective*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration $studyEffectiveDuration
     * @return static
     */
    public function setStudyEffectiveDuration(FHIRDuration $studyEffectiveDuration = null)
    {
        $this->studyEffectiveDuration = $studyEffectiveDuration;
        return $this;
    }

    /**
     * Possible group measure aggregates (E.g. Mean, Median).
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRGroupMeasure $studyEffectiveGroupMeasure
     * @return static
     */
    public function setStudyEffectiveGroupMeasure(FHIRGroupMeasure $studyEffectiveGroupMeasure = null)
    {
        $this->studyEffectiveGroupMeasure = $studyEffectiveGroupMeasure;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers. (choose any one of
     * studyEffective*, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers. (choose any one of
     * studyEffective*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $studyEffectivePeriod
     * @return static
     */
    public function setStudyEffectivePeriod(FHIRPeriod $studyEffectivePeriod = null)
    {
        $this->studyEffectivePeriod = $studyEffectivePeriod;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates duration from the study initiation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration $studyEffectiveTimeFromStart
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers. (choose any one of
     * studyEffective*, but only one)
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers. (choose any one of
     * studyEffective*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming $studyEffectiveTiming
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the UCUM unit for the outcome.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $unitOfMeasure
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Use UsageContext to define the members of the population, such as Age Ranges,
     * Genders, Settings.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext $usageContext
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Use UsageContext to define the members of the population, such as Age Ranges,
     * Genders, Settings.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext[] $usageContext
     * @return static
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
        if (null !== ($v = $this->getDefinitionCanonical())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION_CANONICAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefinitionCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefinitionDataRequirement())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION_DATA_REQUIREMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefinitionExpression())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION_EXPRESSION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExclude())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXCLUDE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getParticipantEffectiveDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getParticipantEffectiveDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getParticipantEffectiveDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARTICIPANT_EFFECTIVE_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getParticipantEffectiveGroupMeasure())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getParticipantEffectivePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getParticipantEffectiveTimeFromStart())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARTICIPANT_EFFECTIVE_TIME_FROM_START] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getParticipantEffectiveTiming())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARTICIPANT_EFFECTIVE_TIMING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStudyEffectiveDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STUDY_EFFECTIVE_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStudyEffectiveDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStudyEffectiveDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STUDY_EFFECTIVE_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStudyEffectiveGroupMeasure())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStudyEffectivePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STUDY_EFFECTIVE_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStudyEffectiveTimeFromStart())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STUDY_EFFECTIVE_TIME_FROM_START] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStudyEffectiveTiming())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STUDY_EFFECTIVE_TIMING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUnitOfMeasure())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UNIT_OF_MEASURE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getUsageContext())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_USAGE_CONTEXT, $i)] = $fieldErrs;
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
        if (isset($children->definitionCanonical)) {
            $type->setDefinitionCanonical(FHIRCanonical::xmlUnserialize($children->definitionCanonical));
        }
        if (isset($attributes->definitionCanonical)) {
            $pt = $type->getDefinitionCanonical();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->definitionCanonical);
            } else {
                $type->setDefinitionCanonical((string)$attributes->definitionCanonical);
            }
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
        if (isset($children->exclude)) {
            $type->setExclude(FHIRBoolean::xmlUnserialize($children->exclude));
        }
        if (isset($attributes->exclude)) {
            $pt = $type->getExclude();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->exclude);
            } else {
                $type->setExclude((string)$attributes->exclude);
            }
        }
        if (isset($children->participantEffectiveDateTime)) {
            $type->setParticipantEffectiveDateTime(FHIRDateTime::xmlUnserialize($children->participantEffectiveDateTime));
        }
        if (isset($attributes->participantEffectiveDateTime)) {
            $pt = $type->getParticipantEffectiveDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->participantEffectiveDateTime);
            } else {
                $type->setParticipantEffectiveDateTime((string)$attributes->participantEffectiveDateTime);
            }
        }
        if (isset($children->participantEffectiveDescription)) {
            $type->setParticipantEffectiveDescription(FHIRString::xmlUnserialize($children->participantEffectiveDescription));
        }
        if (isset($attributes->participantEffectiveDescription)) {
            $pt = $type->getParticipantEffectiveDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->participantEffectiveDescription);
            } else {
                $type->setParticipantEffectiveDescription((string)$attributes->participantEffectiveDescription);
            }
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
        if (isset($children->studyEffectiveDateTime)) {
            $type->setStudyEffectiveDateTime(FHIRDateTime::xmlUnserialize($children->studyEffectiveDateTime));
        }
        if (isset($attributes->studyEffectiveDateTime)) {
            $pt = $type->getStudyEffectiveDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->studyEffectiveDateTime);
            } else {
                $type->setStudyEffectiveDateTime((string)$attributes->studyEffectiveDateTime);
            }
        }
        if (isset($children->studyEffectiveDescription)) {
            $type->setStudyEffectiveDescription(FHIRString::xmlUnserialize($children->studyEffectiveDescription));
        }
        if (isset($attributes->studyEffectiveDescription)) {
            $pt = $type->getStudyEffectiveDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->studyEffectiveDescription);
            } else {
                $type->setStudyEffectiveDescription((string)$attributes->studyEffectiveDescription);
            }
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
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCanonical::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCanonical::FIELD_VALUE]);
                $a[self::FIELD_DEFINITION_CANONICAL_EXT] = $enc;
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
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_EXCLUDE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getParticipantEffectiveDateTime())) {
            $a[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getParticipantEffectiveDescription())) {
            $a[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_PARTICIPANT_EFFECTIVE_DESCRIPTION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getParticipantEffectiveDuration())) {
            $a[self::FIELD_PARTICIPANT_EFFECTIVE_DURATION] = $v;
        }
        if (null !== ($v = $this->getParticipantEffectiveGroupMeasure())) {
            $a[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRGroupMeasure::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRGroupMeasure::FIELD_VALUE]);
                $a[self::FIELD_PARTICIPANT_EFFECTIVE_GROUP_MEASURE_EXT] = $enc;
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
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_STUDY_EFFECTIVE_DATE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getStudyEffectiveDescription())) {
            $a[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_STUDY_EFFECTIVE_DESCRIPTION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getStudyEffectiveDuration())) {
            $a[self::FIELD_STUDY_EFFECTIVE_DURATION] = $v;
        }
        if (null !== ($v = $this->getStudyEffectiveGroupMeasure())) {
            $a[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRGroupMeasure::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRGroupMeasure::FIELD_VALUE]);
                $a[self::FIELD_STUDY_EFFECTIVE_GROUP_MEASURE_EXT] = $enc;
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
            $a[self::FIELD_USAGE_CONTEXT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_USAGE_CONTEXT][] = $v;
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