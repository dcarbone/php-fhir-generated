<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable;

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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTriggerDefinition;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

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
    const FIELD_DEFINITION_CANONICAL = 'definitionCanonical';
    const FIELD_DEFINITION_CANONICAL_EXT = '_definitionCanonical';
    const FIELD_DEFINITION_CODEABLE_CONCEPT = 'definitionCodeableConcept';
    const FIELD_DEFINITION_DATA_REQUIREMENT = 'definitionDataRequirement';
    const FIELD_DEFINITION_EXPRESSION = 'definitionExpression';
    const FIELD_DEFINITION_REFERENCE = 'definitionReference';
    const FIELD_DEFINITION_TRIGGER_DEFINITION = 'definitionTriggerDefinition';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_EXCLUDE = 'exclude';
    const FIELD_EXCLUDE_EXT = '_exclude';
    const FIELD_GROUP_MEASURE = 'groupMeasure';
    const FIELD_GROUP_MEASURE_EXT = '_groupMeasure';
    const FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME = 'participantEffectiveDateTime';
    const FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME_EXT = '_participantEffectiveDateTime';
    const FIELD_PARTICIPANT_EFFECTIVE_DURATION = 'participantEffectiveDuration';
    const FIELD_PARTICIPANT_EFFECTIVE_PERIOD = 'participantEffectivePeriod';
    const FIELD_PARTICIPANT_EFFECTIVE_TIMING = 'participantEffectiveTiming';
    const FIELD_TIME_FROM_START = 'timeFromStart';
    const FIELD_USAGE_CONTEXT = 'usageContext';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
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
     * Define members of the evidence element using Codes (such as condition,
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
     * Define members of the evidence element using Codes (such as condition,
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
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year). (choose any one of definition*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExpression
     */
    protected $definitionExpression = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year). (choose any one of definition*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $definitionReference = null;

    /**
     * A description of a triggering event. Triggering events can be named events, data
     * events, or periodic, as determined by the type element.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year). (choose any one of definition*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTriggerDefinition
     */
    protected $definitionTriggerDefinition = null;

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
    protected $description = null;

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
     * Possible group measure aggregates (E.g. Mean, Median).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRGroupMeasure
     */
    protected $groupMeasure = null;

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
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates duration from the participant's study entry.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected $timeFromStart = null;

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
     * Validation map for fields in type EvidenceVariable.Characteristic
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIREvidenceVariableCharacteristic Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIREvidenceVariableCharacteristic::_construct - $data expected to be null or array, %s seen',
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
        if (isset($data[self::FIELD_DEFINITION_REFERENCE])) {
            if ($data[self::FIELD_DEFINITION_REFERENCE] instanceof FHIRReference) {
                $this->setDefinitionReference($data[self::FIELD_DEFINITION_REFERENCE]);
            } else {
                $this->setDefinitionReference(new FHIRReference($data[self::FIELD_DEFINITION_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_DEFINITION_TRIGGER_DEFINITION])) {
            if ($data[self::FIELD_DEFINITION_TRIGGER_DEFINITION] instanceof FHIRTriggerDefinition) {
                $this->setDefinitionTriggerDefinition($data[self::FIELD_DEFINITION_TRIGGER_DEFINITION]);
            } else {
                $this->setDefinitionTriggerDefinition(new FHIRTriggerDefinition($data[self::FIELD_DEFINITION_TRIGGER_DEFINITION]));
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
        if (isset($data[self::FIELD_GROUP_MEASURE]) || isset($data[self::FIELD_GROUP_MEASURE_EXT])) {
            if (isset($data[self::FIELD_GROUP_MEASURE])) {
                $value = $data[self::FIELD_GROUP_MEASURE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_GROUP_MEASURE_EXT]) && is_array($data[self::FIELD_GROUP_MEASURE_EXT])) {
                $ext = $data[self::FIELD_GROUP_MEASURE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRGroupMeasure) {
                    $this->setGroupMeasure($value);
                } else if (is_array($value)) {
                    $this->setGroupMeasure(new FHIRGroupMeasure(array_merge($ext, $value)));
                } else {
                    $this->setGroupMeasure(new FHIRGroupMeasure([FHIRGroupMeasure::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setGroupMeasure(new FHIRGroupMeasure($ext));
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
        if (isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_DURATION])) {
            if ($data[self::FIELD_PARTICIPANT_EFFECTIVE_DURATION] instanceof FHIRDuration) {
                $this->setParticipantEffectiveDuration($data[self::FIELD_PARTICIPANT_EFFECTIVE_DURATION]);
            } else {
                $this->setParticipantEffectiveDuration(new FHIRDuration($data[self::FIELD_PARTICIPANT_EFFECTIVE_DURATION]));
            }
        }
        if (isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD])) {
            if ($data[self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD] instanceof FHIRPeriod) {
                $this->setParticipantEffectivePeriod($data[self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD]);
            } else {
                $this->setParticipantEffectivePeriod(new FHIRPeriod($data[self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_PARTICIPANT_EFFECTIVE_TIMING])) {
            if ($data[self::FIELD_PARTICIPANT_EFFECTIVE_TIMING] instanceof FHIRTiming) {
                $this->setParticipantEffectiveTiming($data[self::FIELD_PARTICIPANT_EFFECTIVE_TIMING]);
            } else {
                $this->setParticipantEffectiveTiming(new FHIRTiming($data[self::FIELD_PARTICIPANT_EFFECTIVE_TIMING]));
            }
        }
        if (isset($data[self::FIELD_TIME_FROM_START])) {
            if ($data[self::FIELD_TIME_FROM_START] instanceof FHIRDuration) {
                $this->setTimeFromStart($data[self::FIELD_TIME_FROM_START]);
            } else {
                $this->setTimeFromStart(new FHIRDuration($data[self::FIELD_TIME_FROM_START]));
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
        return "<EvidenceVariableCharacteristic{$xmlns}></EvidenceVariableCharacteristic>";
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
     * Define members of the evidence element using Codes (such as condition,
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
     * Define members of the evidence element using Codes (such as condition,
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
     * Define members of the evidence element using Codes (such as condition,
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
     * Define members of the evidence element using Codes (such as condition,
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
     * Define members of the evidence element using Codes (such as condition,
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
     * Define members of the evidence element using Codes (such as condition,
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
     * Define members of the evidence element using Codes (such as condition,
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year). (choose any one of definition*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getDefinitionReference()
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
     * last year). (choose any one of definition*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $definitionReference
     * @return static
     */
    public function setDefinitionReference(FHIRReference $definitionReference = null)
    {
        $this->definitionReference = $definitionReference;
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
     * last year). (choose any one of definition*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTriggerDefinition
     */
    public function getDefinitionTriggerDefinition()
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
     * last year). (choose any one of definition*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTriggerDefinition $definitionTriggerDefinition
     * @return static
     */
    public function setDefinitionTriggerDefinition(FHIRTriggerDefinition $definitionTriggerDefinition = null)
    {
        $this->definitionTriggerDefinition = $definitionTriggerDefinition;
        return $this;
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
    public function getDescription()
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
     * Possible group measure aggregates (E.g. Mean, Median).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRGroupMeasure
     */
    public function getGroupMeasure()
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
    public function setGroupMeasure(FHIRGroupMeasure $groupMeasure = null)
    {
        $this->groupMeasure = $groupMeasure;
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
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates duration from the participant's study entry.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getTimeFromStart()
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
    public function setTimeFromStart(FHIRDuration $timeFromStart = null)
    {
        $this->timeFromStart = $timeFromStart;
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
        if (null !== ($v = $this->getDefinitionReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefinitionTriggerDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION_TRIGGER_DEFINITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExclude())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXCLUDE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getGroupMeasure())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GROUP_MEASURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getParticipantEffectiveDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getParticipantEffectiveDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARTICIPANT_EFFECTIVE_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getParticipantEffectivePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD] = $fieldErrs;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableCharacteristic $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableCharacteristic
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
                throw new \DomainException(sprintf('FHIREvidenceVariableCharacteristic::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIREvidenceVariableCharacteristic::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIREvidenceVariableCharacteristic;
        } elseif (!is_object($type) || !($type instanceof FHIREvidenceVariableCharacteristic)) {
            throw new \RuntimeException(sprintf(
                'FHIREvidenceVariableCharacteristic::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableCharacteristic or null, %s seen.',
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
        if (isset($children->definitionReference)) {
            $type->setDefinitionReference(FHIRReference::xmlUnserialize($children->definitionReference));
        }
        if (isset($children->definitionTriggerDefinition)) {
            $type->setDefinitionTriggerDefinition(FHIRTriggerDefinition::xmlUnserialize($children->definitionTriggerDefinition));
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
        if (isset($children->groupMeasure)) {
            $type->setGroupMeasure(FHIRGroupMeasure::xmlUnserialize($children->groupMeasure));
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
        if (isset($children->participantEffectiveDuration)) {
            $type->setParticipantEffectiveDuration(FHIRDuration::xmlUnserialize($children->participantEffectiveDuration));
        }
        if (isset($children->participantEffectivePeriod)) {
            $type->setParticipantEffectivePeriod(FHIRPeriod::xmlUnserialize($children->participantEffectivePeriod));
        }
        if (isset($children->participantEffectiveTiming)) {
            $type->setParticipantEffectiveTiming(FHIRTiming::xmlUnserialize($children->participantEffectiveTiming));
        }
        if (isset($children->timeFromStart)) {
            $type->setTimeFromStart(FHIRDuration::xmlUnserialize($children->timeFromStart));
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
        if (null !== ($v = $this->getDefinitionReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFINITION_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefinitionTriggerDefinition())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFINITION_TRIGGER_DEFINITION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExclude())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXCLUDE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getGroupMeasure())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_GROUP_MEASURE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getParticipantEffectiveDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getParticipantEffectiveDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PARTICIPANT_EFFECTIVE_DURATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getParticipantEffectivePeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getParticipantEffectiveTiming())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PARTICIPANT_EFFECTIVE_TIMING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTimeFromStart())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIME_FROM_START, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getDefinitionReference())) {
            $a[self::FIELD_DEFINITION_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getDefinitionTriggerDefinition())) {
            $a[self::FIELD_DEFINITION_TRIGGER_DEFINITION] = $v;
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
        if (null !== ($v = $this->getExclude())) {
            $a[self::FIELD_EXCLUDE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_EXCLUDE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getGroupMeasure())) {
            $a[self::FIELD_GROUP_MEASURE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRGroupMeasure::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRGroupMeasure::FIELD_VALUE]);
                $a[self::FIELD_GROUP_MEASURE_EXT] = $enc;
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
        if (null !== ($v = $this->getParticipantEffectiveDuration())) {
            $a[self::FIELD_PARTICIPANT_EFFECTIVE_DURATION] = $v;
        }
        if (null !== ($v = $this->getParticipantEffectivePeriod())) {
            $a[self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD] = $v;
        }
        if (null !== ($v = $this->getParticipantEffectiveTiming())) {
            $a[self::FIELD_PARTICIPANT_EFFECTIVE_TIMING] = $v;
        }
        if (null !== ($v = $this->getTimeFromStart())) {
            $a[self::FIELD_TIME_FROM_START] = $v;
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