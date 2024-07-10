<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 10th, 2024 03:24+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExpression;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRGroupMeasure;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTriggerDefinition;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext;
use DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter;

/**
 * The EvidenceVariable resource describes a "PICO" element that knowledge
 * (evidence, assertion, recommendation) is about.
 *
 * Class FHIREvidenceVariableCharacteristic
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable
 */
class FHIREvidenceVariableCharacteristic extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC;

    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_DEFINITION_REFERENCE = 'definitionReference';
    const FIELD_DEFINITION_CANONICAL = 'definitionCanonical';
    const FIELD_DEFINITION_CANONICAL_EXT = '_definitionCanonical';
    const FIELD_DEFINITION_CODEABLE_CONCEPT = 'definitionCodeableConcept';
    const FIELD_DEFINITION_EXPRESSION = 'definitionExpression';
    const FIELD_DEFINITION_DATA_REQUIREMENT = 'definitionDataRequirement';
    const FIELD_DEFINITION_TRIGGER_DEFINITION = 'definitionTriggerDefinition';
    const FIELD_USAGE_CONTEXT = 'usageContext';
    const FIELD_EXCLUDE = 'exclude';
    const FIELD_EXCLUDE_EXT = '_exclude';
    const FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME = 'participantEffectiveDateTime';
    const FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME_EXT = '_participantEffectiveDateTime';
    const FIELD_PARTICIPANT_EFFECTIVE_PERIOD = 'participantEffectivePeriod';
    const FIELD_PARTICIPANT_EFFECTIVE_DURATION = 'participantEffectiveDuration';
    const FIELD_PARTICIPANT_EFFECTIVE_TIMING = 'participantEffectiveTiming';
    const FIELD_TIME_FROM_START = 'timeFromStart';
    const FIELD_GROUP_MEASURE = 'groupMeasure';
    const FIELD_GROUP_MEASURE_EXT = '_groupMeasure';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, natural language description of the characteristic that could be used
     * to communicate the criteria to an end-user.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $description = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $definitionReference = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $definitionCanonical = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $definitionCodeableConcept = null;
    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExpression
     */
    protected null|FHIRExpression $definitionExpression = null;
    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement
     */
    protected null|FHIRDataRequirement $definitionDataRequirement = null;
    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTriggerDefinition
     */
    protected null|FHIRTriggerDefinition $definitionTriggerDefinition = null;
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
    protected null|array $usageContext = [];
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When true, members with this characteristic are excluded from the element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $exclude = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $participantEffectiveDateTime = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $participantEffectivePeriod = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
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
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    protected null|FHIRTiming $participantEffectiveTiming = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates duration from the participant's study entry.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected null|FHIRDuration $timeFromStart = null;
    /**
     * Possible group measure aggregates (E.g. Mean, Median).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRGroupMeasure
     */
    protected null|FHIRGroupMeasure $groupMeasure = null;

    /**
     * Validation map for fields in type EvidenceVariable.Characteristic
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIREvidenceVariableCharacteristic Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_DESCRIPTION, $data) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $data)) {
            $value = $data[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) ? $data[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDescription(new FHIRString($ext));
            } else {
                $this->setDescription(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFINITION_REFERENCE, $data)) {
            if ($data[self::FIELD_DEFINITION_REFERENCE] instanceof FHIRReference) {
                $this->setDefinitionReference($data[self::FIELD_DEFINITION_REFERENCE]);
            } else {
                $this->setDefinitionReference(new FHIRReference($data[self::FIELD_DEFINITION_REFERENCE]));
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
        if (array_key_exists(self::FIELD_DEFINITION_CODEABLE_CONCEPT, $data)) {
            if ($data[self::FIELD_DEFINITION_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setDefinitionCodeableConcept($data[self::FIELD_DEFINITION_CODEABLE_CONCEPT]);
            } else {
                $this->setDefinitionCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_DEFINITION_CODEABLE_CONCEPT]));
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
        if (array_key_exists(self::FIELD_DEFINITION_TRIGGER_DEFINITION, $data)) {
            if ($data[self::FIELD_DEFINITION_TRIGGER_DEFINITION] instanceof FHIRTriggerDefinition) {
                $this->setDefinitionTriggerDefinition($data[self::FIELD_DEFINITION_TRIGGER_DEFINITION]);
            } else {
                $this->setDefinitionTriggerDefinition(new FHIRTriggerDefinition($data[self::FIELD_DEFINITION_TRIGGER_DEFINITION]));
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
        if (array_key_exists(self::FIELD_TIME_FROM_START, $data)) {
            if ($data[self::FIELD_TIME_FROM_START] instanceof FHIRDuration) {
                $this->setTimeFromStart($data[self::FIELD_TIME_FROM_START]);
            } else {
                $this->setTimeFromStart(new FHIRDuration($data[self::FIELD_TIME_FROM_START]));
            }
        }
        if (array_key_exists(self::FIELD_GROUP_MEASURE, $data) || array_key_exists(self::FIELD_GROUP_MEASURE_EXT, $data)) {
            $value = $data[self::FIELD_GROUP_MEASURE] ?? null;
            $ext = (isset($data[self::FIELD_GROUP_MEASURE_EXT]) && is_array($data[self::FIELD_GROUP_MEASURE_EXT])) ? $data[self::FIELD_GROUP_MEASURE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRGroupMeasure) {
                    $this->setGroupMeasure($value);
                } else if (is_array($value)) {
                    $this->setGroupMeasure(new FHIRGroupMeasure(array_merge($ext, $value)));
                } else {
                    $this->setGroupMeasure(new FHIRGroupMeasure([FHIRGroupMeasure::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setGroupMeasure(new FHIRGroupMeasure($ext));
            } else {
                $this->setGroupMeasure(new FHIRGroupMeasure(null));
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, natural language description of the characteristic that could be used
     * to communicate the criteria to an end-user.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, natural language description of the characteristic that could be used
     * to communicate the criteria to an end-user.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $description
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $description && !($description instanceof FHIRString)) {
            $description = new FHIRString($description);
        }
        $this->_trackValueSet($this->description, $description);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DESCRIPTION])) {
            $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION][0] = $xmlLocation;
        $this->description = $description;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getDefinitionReference(): null|FHIRReference
    {
        return $this->definitionReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $definitionReference
     * @return static
     */
    public function setDefinitionReference(null|FHIRReference $definitionReference = null): self
    {
        if (null === $definitionReference) {
            $definitionReference = new FHIRReference();
        }
        $this->_trackValueSet($this->definitionReference, $definitionReference);
        $this->definitionReference = $definitionReference;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
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
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $definitionCanonical
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefinitionCanonical(null|string|FHIRCanonicalPrimitive|FHIRCanonical $definitionCanonical = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $definitionCanonical && !($definitionCanonical instanceof FHIRCanonical)) {
            $definitionCanonical = new FHIRCanonical($definitionCanonical);
        }
        $this->_trackValueSet($this->definitionCanonical, $definitionCanonical);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFINITION_CANONICAL])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFINITION_CANONICAL] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFINITION_CANONICAL][0] = $xmlLocation;
        $this->definitionCanonical = $definitionCanonical;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
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
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $definitionCodeableConcept
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
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExpression
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
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExpression $definitionExpression
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
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement
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
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement $definitionDataRequirement
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
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTriggerDefinition
     */
    public function getDefinitionTriggerDefinition(): null|FHIRTriggerDefinition
    {
        return $this->definitionTriggerDefinition;
    }

    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTriggerDefinition $definitionTriggerDefinition
     * @return static
     */
    public function setDefinitionTriggerDefinition(null|FHIRTriggerDefinition $definitionTriggerDefinition = null): self
    {
        if (null === $definitionTriggerDefinition) {
            $definitionTriggerDefinition = new FHIRTriggerDefinition();
        }
        $this->_trackValueSet($this->definitionTriggerDefinition, $definitionTriggerDefinition);
        $this->definitionTriggerDefinition = $definitionTriggerDefinition;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext $usageContext
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When true, members with this characteristic are excluded from the element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
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
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R4\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $exclude
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setExclude(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $exclude = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $exclude && !($exclude instanceof FHIRBoolean)) {
            $exclude = new FHIRBoolean($exclude);
        }
        $this->_trackValueSet($this->exclude, $exclude);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_EXCLUDE])) {
            $this->_primitiveXmlLocations[self::FIELD_EXCLUDE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_EXCLUDE][0] = $xmlLocation;
        $this->exclude = $exclude;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R4\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $participantEffectiveDateTime
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setParticipantEffectiveDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $participantEffectiveDateTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $participantEffectiveDateTime && !($participantEffectiveDateTime instanceof FHIRDateTime)) {
            $participantEffectiveDateTime = new FHIRDateTime($participantEffectiveDateTime);
        }
        $this->_trackValueSet($this->participantEffectiveDateTime, $participantEffectiveDateTime);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME])) {
            $this->_primitiveXmlLocations[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $participantEffectivePeriod
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration $participantEffectiveDuration
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming $participantEffectiveTiming
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getTimeFromStart(): null|FHIRDuration
    {
        return $this->timeFromStart;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates duration from the participant's study entry.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration $timeFromStart
     * @return static
     */
    public function setTimeFromStart(null|FHIRDuration $timeFromStart = null): self
    {
        if (null === $timeFromStart) {
            $timeFromStart = new FHIRDuration();
        }
        $this->_trackValueSet($this->timeFromStart, $timeFromStart);
        $this->timeFromStart = $timeFromStart;
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
    public function getGroupMeasure(): null|FHIRGroupMeasure
    {
        return $this->groupMeasure;
    }

    /**
     * Possible group measure aggregates (E.g. Mean, Median).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRGroupMeasure $groupMeasure
     * @return static
     */
    public function setGroupMeasure(null|FHIRGroupMeasure $groupMeasure = null): self
    {
        if (null === $groupMeasure) {
            $groupMeasure = new FHIRGroupMeasure();
        }
        $this->_trackValueSet($this->groupMeasure, $groupMeasure);
        $this->groupMeasure = $groupMeasure;
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
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefinitionReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION_REFERENCE] = $fieldErrs;
            }
        }
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
        if (null !== ($v = $this->getDefinitionTriggerDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION_TRIGGER_DEFINITION] = $fieldErrs;
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
        if (null !== ($v = $this->getTimeFromStart())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIME_FROM_START] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getGroupMeasure())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GROUP_MEASURE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION_REFERENCE])) {
            $v = $this->getDefinitionReference();
            foreach($validationRules[self::FIELD_DEFINITION_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_DEFINITION_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION_REFERENCE])) {
                        $errs[self::FIELD_DEFINITION_REFERENCE] = [];
                    }
                    $errs[self::FIELD_DEFINITION_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION_CANONICAL])) {
            $v = $this->getDefinitionCanonical();
            foreach($validationRules[self::FIELD_DEFINITION_CANONICAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_DEFINITION_CANONICAL, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_DEFINITION_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_DEFINITION_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_DEFINITION_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION_EXPRESSION])) {
            $v = $this->getDefinitionExpression();
            foreach($validationRules[self::FIELD_DEFINITION_EXPRESSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_DEFINITION_EXPRESSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_DEFINITION_DATA_REQUIREMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION_DATA_REQUIREMENT])) {
                        $errs[self::FIELD_DEFINITION_DATA_REQUIREMENT] = [];
                    }
                    $errs[self::FIELD_DEFINITION_DATA_REQUIREMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION_TRIGGER_DEFINITION])) {
            $v = $this->getDefinitionTriggerDefinition();
            foreach($validationRules[self::FIELD_DEFINITION_TRIGGER_DEFINITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_DEFINITION_TRIGGER_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION_TRIGGER_DEFINITION])) {
                        $errs[self::FIELD_DEFINITION_TRIGGER_DEFINITION] = [];
                    }
                    $errs[self::FIELD_DEFINITION_TRIGGER_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_USAGE_CONTEXT])) {
            $v = $this->getUsageContext();
            foreach($validationRules[self::FIELD_USAGE_CONTEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_USAGE_CONTEXT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_EXCLUDE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_PARTICIPANT_EFFECTIVE_DURATION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_PARTICIPANT_EFFECTIVE_TIMING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARTICIPANT_EFFECTIVE_TIMING])) {
                        $errs[self::FIELD_PARTICIPANT_EFFECTIVE_TIMING] = [];
                    }
                    $errs[self::FIELD_PARTICIPANT_EFFECTIVE_TIMING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIME_FROM_START])) {
            $v = $this->getTimeFromStart();
            foreach($validationRules[self::FIELD_TIME_FROM_START] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_TIME_FROM_START, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIME_FROM_START])) {
                        $errs[self::FIELD_TIME_FROM_START] = [];
                    }
                    $errs[self::FIELD_TIME_FROM_START][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GROUP_MEASURE])) {
            $v = $this->getGroupMeasure();
            foreach($validationRules[self::FIELD_GROUP_MEASURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC, self::FIELD_GROUP_MEASURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GROUP_MEASURE])) {
                        $errs[self::FIELD_GROUP_MEASURE] = [];
                    }
                    $errs[self::FIELD_GROUP_MEASURE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableCharacteristic $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableCharacteristic
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
        } else if (!($type instanceof FHIREvidenceVariableCharacteristic)) {
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
            if (self::FIELD_DESCRIPTION === $childName) {
                $type->setDescription(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFINITION_REFERENCE === $childName) {
                $type->setDefinitionReference(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFINITION_CANONICAL === $childName) {
                $type->setDefinitionCanonical(FHIRCanonical::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFINITION_CODEABLE_CONCEPT === $childName) {
                $type->setDefinitionCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFINITION_EXPRESSION === $childName) {
                $type->setDefinitionExpression(FHIRExpression::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFINITION_DATA_REQUIREMENT === $childName) {
                $type->setDefinitionDataRequirement(FHIRDataRequirement::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFINITION_TRIGGER_DEFINITION === $childName) {
                $type->setDefinitionTriggerDefinition(FHIRTriggerDefinition::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_USAGE_CONTEXT === $childName) {
                $type->addUsageContext(FHIRUsageContext::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXCLUDE === $childName) {
                $type->setExclude(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME === $childName) {
                $type->setParticipantEffectiveDateTime(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD === $childName) {
                $type->setParticipantEffectivePeriod(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PARTICIPANT_EFFECTIVE_DURATION === $childName) {
                $type->setParticipantEffectiveDuration(FHIRDuration::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PARTICIPANT_EFFECTIVE_TIMING === $childName) {
                $type->setParticipantEffectiveTiming(FHIRTiming::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TIME_FROM_START === $childName) {
                $type->setTimeFromStart(FHIRDuration::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_GROUP_MEASURE === $childName) {
                $type->setGroupMeasure(FHIRGroupMeasure::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'EvidenceVariableCharacteristic', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFINITION_CANONICAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefinitionCanonical())) {
            $xw->writeAttribute(self::FIELD_DEFINITION_CANONICAL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_EXCLUDE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getExclude())) {
            $xw->writeAttribute(self::FIELD_EXCLUDE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getParticipantEffectiveDateTime())) {
            $xw->writeAttribute(self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefinitionReference())) {
            $xw->startElement(self::FIELD_DEFINITION_REFERENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFINITION_CANONICAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefinitionCanonical())) {
            $xw->startElement(self::FIELD_DEFINITION_CANONICAL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefinitionCodeableConcept())) {
            $xw->startElement(self::FIELD_DEFINITION_CODEABLE_CONCEPT);
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
        if (null !== ($v = $this->getDefinitionTriggerDefinition())) {
            $xw->startElement(self::FIELD_DEFINITION_TRIGGER_DEFINITION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getUsageContext() as $v) {
            $xw->startElement(self::FIELD_USAGE_CONTEXT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_EXCLUDE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getExclude())) {
            $xw->startElement(self::FIELD_EXCLUDE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME] ?? [];
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
        if (null !== ($v = $this->getTimeFromStart())) {
            $xw->startElement(self::FIELD_TIME_FROM_START);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getGroupMeasure())) {
            $xw->startElement(self::FIELD_GROUP_MEASURE);
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
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DESCRIPTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DESCRIPTION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefinitionReference())) {
            $out->{self::FIELD_DEFINITION_REFERENCE} = $v;
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
        if (null !== ($v = $this->getDefinitionCodeableConcept())) {
            $out->{self::FIELD_DEFINITION_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getDefinitionExpression())) {
            $out->{self::FIELD_DEFINITION_EXPRESSION} = $v;
        }
        if (null !== ($v = $this->getDefinitionDataRequirement())) {
            $out->{self::FIELD_DEFINITION_DATA_REQUIREMENT} = $v;
        }
        if (null !== ($v = $this->getDefinitionTriggerDefinition())) {
            $out->{self::FIELD_DEFINITION_TRIGGER_DEFINITION} = $v;
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
        if (null !== ($v = $this->getTimeFromStart())) {
            $out->{self::FIELD_TIME_FROM_START} = $v;
        }
        if (null !== ($v = $this->getGroupMeasure())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_GROUP_MEASURE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRGroupMeasure::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_GROUP_MEASURE_EXT} = $ext;
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