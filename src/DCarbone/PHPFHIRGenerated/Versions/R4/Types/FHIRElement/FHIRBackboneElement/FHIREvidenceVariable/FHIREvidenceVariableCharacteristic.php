<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable;

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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExpression;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRGroupMeasure;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTriggerDefinition;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUsageContext;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * The EvidenceVariable resource describes a "PICO" element that knowledge
 * (evidence, assertion, recommendation) is about.
 */
class FHIREvidenceVariableCharacteristic extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC;

    /* class_default.php:48 */
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_DEFINITION_REFERENCE = 'definitionReference';
    public const FIELD_DEFINITION_CANONICAL = 'definitionCanonical';
    public const FIELD_DEFINITION_CANONICAL_EXT = '_definitionCanonical';
    public const FIELD_DEFINITION_CODEABLE_CONCEPT = 'definitionCodeableConcept';
    public const FIELD_DEFINITION_EXPRESSION = 'definitionExpression';
    public const FIELD_DEFINITION_DATA_REQUIREMENT = 'definitionDataRequirement';
    public const FIELD_DEFINITION_TRIGGER_DEFINITION = 'definitionTriggerDefinition';
    public const FIELD_USAGE_CONTEXT = 'usageContext';
    public const FIELD_EXCLUDE = 'exclude';
    public const FIELD_EXCLUDE_EXT = '_exclude';
    public const FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME = 'participantEffectiveDateTime';
    public const FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME_EXT = '_participantEffectiveDateTime';
    public const FIELD_PARTICIPANT_EFFECTIVE_PERIOD = 'participantEffectivePeriod';
    public const FIELD_PARTICIPANT_EFFECTIVE_DURATION = 'participantEffectiveDuration';
    public const FIELD_PARTICIPANT_EFFECTIVE_TIMING = 'participantEffectiveTiming';
    public const FIELD_TIME_FROM_START = 'timeFromStart';
    public const FIELD_GROUP_MEASURE = 'groupMeasure';
    public const FIELD_GROUP_MEASURE_EXT = '_groupMeasure';

    /* class_default.php:67 */
    private static array $_validationRules = [
        self::FIELD_DEFINITION_REFERENCE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_DEFINITION_CANONICAL => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_DEFINITION_CODEABLE_CONCEPT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_DEFINITION_EXPRESSION => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_DEFINITION_DATA_REQUIREMENT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_DEFINITION_TRIGGER_DEFINITION => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DEFINITION_CANONICAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXCLUDE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_GROUP_MEASURE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, natural language description of the characteristic that could be used
     * to communicate the criteria to an end-user.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $description;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $definitionReference;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical 
     */
    protected FHIRCanonical $definitionCanonical;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $definitionCodeableConcept;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExpression 
     */
    protected FHIRExpression $definitionExpression;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement 
     */
    protected FHIRDataRequirement $definitionDataRequirement;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTriggerDefinition 
     */
    protected FHIRTriggerDefinition $definitionTriggerDefinition;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUsageContext[] 
     */
    protected array $usageContext;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When true, members with this characteristic are excluded from the element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $exclude;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $participantEffectiveDateTime;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $participantEffectivePeriod;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTiming 
     */
    protected FHIRTiming $participantEffectiveTiming;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates duration from the participant's study entry.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration 
     */
    protected FHIRDuration $timeFromStart;
    /**
     * Possible group measure aggregates (E.g. Mean, Median).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRGroupMeasure 
     */
    protected FHIRGroupMeasure $groupMeasure;

    /* constructor.php:63 */
    /**
     * FHIREvidenceVariableCharacteristic Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $description
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $definitionReference
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical $definitionCanonical
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $definitionCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExpression $definitionExpression
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement $definitionDataRequirement
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTriggerDefinition $definitionTriggerDefinition
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUsageContext[] $usageContext
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean $exclude
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime $participantEffectiveDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod $participantEffectivePeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration $participantEffectiveDuration
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTiming $participantEffectiveTiming
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration $timeFromStart
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRGroupMeasure $groupMeasure
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $description = null,
                                null|FHIRReference $definitionReference = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $definitionCanonical = null,
                                null|FHIRCodeableConcept $definitionCodeableConcept = null,
                                null|FHIRExpression $definitionExpression = null,
                                null|FHIRDataRequirement $definitionDataRequirement = null,
                                null|FHIRTriggerDefinition $definitionTriggerDefinition = null,
                                null|iterable $usageContext = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $exclude = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $participantEffectiveDateTime = null,
                                null|FHIRPeriod $participantEffectivePeriod = null,
                                null|FHIRDuration $participantEffectiveDuration = null,
                                null|FHIRTiming $participantEffectiveTiming = null,
                                null|FHIRDuration $timeFromStart = null,
                                null|FHIRGroupMeasure $groupMeasure = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $definitionReference) {
            $this->setDefinitionReference($definitionReference);
        }
        if (null !== $definitionCanonical) {
            $this->setDefinitionCanonical($definitionCanonical);
        }
        if (null !== $definitionCodeableConcept) {
            $this->setDefinitionCodeableConcept($definitionCodeableConcept);
        }
        if (null !== $definitionExpression) {
            $this->setDefinitionExpression($definitionExpression);
        }
        if (null !== $definitionDataRequirement) {
            $this->setDefinitionDataRequirement($definitionDataRequirement);
        }
        if (null !== $definitionTriggerDefinition) {
            $this->setDefinitionTriggerDefinition($definitionTriggerDefinition);
        }
        if (null !== $usageContext) {
            $this->setUsageContext(...$usageContext);
        }
        if (null !== $exclude) {
            $this->setExclude($exclude);
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
        if (null !== $timeFromStart) {
            $this->setTimeFromStart($timeFromStart);
        }
        if (null !== $groupMeasure) {
            $this->setGroupMeasure($groupMeasure);
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, natural language description of the characteristic that could be used
     * to communicate the criteria to an end-user.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
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
     * A short, natural language description of the characteristic that could be used
     * to communicate the criteria to an end-user.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $description
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRString)) {
            $description = new FHIRString(value: $description);
        }
        $this->description = $description;
        if ($this->_valueXMLLocations[self::FIELD_DESCRIPTION] !== $valueXMLLocation) {
            $this->_setDescriptionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the description element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDescriptionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DESCRIPTION];
    }

    /**
     * Set the location the "value" field of the description element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDescriptionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DESCRIPTION] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getDefinitionReference(): null|FHIRReference
    {
        return $this->definitionReference ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $definitionReference
     * @return static
     */
    public function setDefinitionReference(null|FHIRReference $definitionReference): self
    {
        if (null === $definitionReference) {
            unset($this->definitionReference);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical
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
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical $definitionCanonical
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
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
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $definitionCodeableConcept
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExpression
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
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExpression $definitionExpression
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
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement
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
     * Define members of the evidence element using Codes (such as condition,
     * medication, or observation), Expressions ( using an expression language such as
     * FHIRPath or CQL) or DataRequirements (such as Diabetes diagnosis onset in the
     * last year).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDataRequirement $definitionDataRequirement
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTriggerDefinition
     */
    public function getDefinitionTriggerDefinition(): null|FHIRTriggerDefinition
    {
        return $this->definitionTriggerDefinition ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTriggerDefinition $definitionTriggerDefinition
     * @return static
     */
    public function setDefinitionTriggerDefinition(null|FHIRTriggerDefinition $definitionTriggerDefinition): self
    {
        if (null === $definitionTriggerDefinition) {
            unset($this->definitionTriggerDefinition);
            return $this;
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUsageContext[]
     */
    public function getUsageContext(): array
    {
        return $this->usageContext ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUsageContext>
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUsageContext $usageContext
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUsageContext ...$usageContext
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean
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
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean $exclude
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates what effective period the study covers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime $participantEffectiveDateTime
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod $participantEffectivePeriod
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration $participantEffectiveDuration
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTiming
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTiming $participantEffectiveTiming
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getTimeFromStart(): null|FHIRDuration
    {
        return $this->timeFromStart ?? null;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates duration from the participant's study entry.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration $timeFromStart
     * @return static
     */
    public function setTimeFromStart(null|FHIRDuration $timeFromStart): self
    {
        if (null === $timeFromStart) {
            unset($this->timeFromStart);
            return $this;
        }
        $this->timeFromStart = $timeFromStart;
        return $this;
    }

    /**
     * Possible group measure aggregates (E.g. Mean, Median).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRGroupMeasure
     */
    public function getGroupMeasure(): null|FHIRGroupMeasure
    {
        return $this->groupMeasure ?? null;
    }

    /**
     * Possible group measure aggregates (E.g. Mean, Median).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how elements are aggregated within the study effective period.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRGroupMeasure $groupMeasure
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setGroupMeasure(null|FHIRGroupMeasure $groupMeasure,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $groupMeasure) {
            unset($this->groupMeasure);
            return $this;
        }
        $this->groupMeasure = $groupMeasure;
        if ($this->_valueXMLLocations[self::FIELD_GROUP_MEASURE] !== $valueXMLLocation) {
            $this->_setGroupMeasureValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the groupMeasure element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getGroupMeasureValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_GROUP_MEASURE];
    }

    /**
     * Set the location the "value" field of the groupMeasure element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setGroupMeasureValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_GROUP_MEASURE] = $valueXMLLocation;
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
        if (isset($validationRules[self::FIELD_DEFINITION_REFERENCE])) {
            $v = $this->getDefinitionReference();
            foreach($validationRules[self::FIELD_DEFINITION_REFERENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFINITION_REFERENCE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFINITION_CANONICAL, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFINITION_CODEABLE_CONCEPT, $rule, $constraint, $v);
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
        if (isset($validationRules[self::FIELD_DEFINITION_TRIGGER_DEFINITION])) {
            $v = $this->getDefinitionTriggerDefinition();
            foreach($validationRules[self::FIELD_DEFINITION_TRIGGER_DEFINITION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFINITION_TRIGGER_DEFINITION, $rule, $constraint, $v);
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
        if (isset($validationRules[self::FIELD_TIME_FROM_START])) {
            $v = $this->getTimeFromStart();
            foreach($validationRules[self::FIELD_TIME_FROM_START] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TIME_FROM_START, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_GROUP_MEASURE, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableCharacteristic $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableCharacteristic
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIREvidenceVariableCharacteristic)) {
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
            } else if (self::FIELD_DESCRIPTION === $cen) {
                $type->setDescription(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFINITION_REFERENCE === $cen) {
                $type->setDefinitionReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFINITION_CANONICAL === $cen) {
                $type->setDefinitionCanonical(FHIRCanonical::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFINITION_CODEABLE_CONCEPT === $cen) {
                $type->setDefinitionCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFINITION_EXPRESSION === $cen) {
                $type->setDefinitionExpression(FHIRExpression::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFINITION_DATA_REQUIREMENT === $cen) {
                $type->setDefinitionDataRequirement(FHIRDataRequirement::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEFINITION_TRIGGER_DEFINITION === $cen) {
                $type->setDefinitionTriggerDefinition(FHIRTriggerDefinition::xmlUnserialize($ce, $config));
            } else if (self::FIELD_USAGE_CONTEXT === $cen) {
                $type->addUsageContext(FHIRUsageContext::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXCLUDE === $cen) {
                $type->setExclude(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME === $cen) {
                $type->setParticipantEffectiveDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PARTICIPANT_EFFECTIVE_PERIOD === $cen) {
                $type->setParticipantEffectivePeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PARTICIPANT_EFFECTIVE_DURATION === $cen) {
                $type->setParticipantEffectiveDuration(FHIRDuration::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PARTICIPANT_EFFECTIVE_TIMING === $cen) {
                $type->setParticipantEffectiveTiming(FHIRTiming::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIME_FROM_START === $cen) {
                $type->setTimeFromStart(FHIRDuration::xmlUnserialize($ce, $config));
            } else if (self::FIELD_GROUP_MEASURE === $cen) {
                $type->setGroupMeasure(FHIRGroupMeasure::xmlUnserialize($ce, $config));
            }        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            if (isset($type->description)) {
                $type->description->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
                $type->_setDescriptionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
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
        if (isset($attributes[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME])) {
            if (isset($type->participantEffectiveDateTime)) {
                $type->participantEffectiveDateTime->setValue((string)$attributes[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME]);
                $type->_setParticipantEffectiveDateTimeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setParticipantEffectiveDateTime((string)$attributes[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_GROUP_MEASURE])) {
            if (isset($type->groupMeasure)) {
                $type->groupMeasure->setValue((string)$attributes[self::FIELD_GROUP_MEASURE]);
                $type->_setGroupMeasureValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setGroupMeasure((string)$attributes[self::FIELD_GROUP_MEASURE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->description) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->_getFormattedValue());
        }
        if (isset($this->definitionCanonical) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEFINITION_CANONICAL]) {
            $xw->writeAttribute(self::FIELD_DEFINITION_CANONICAL, $this->definitionCanonical->_getFormattedValue());
        }
        if (isset($this->exclude) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXCLUDE]) {
            $xw->writeAttribute(self::FIELD_EXCLUDE, $this->exclude->_getFormattedValue());
        }
        if (isset($this->participantEffectiveDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_PARTICIPANT_EFFECTIVE_DATE_TIME, $this->participantEffectiveDateTime->_getFormattedValue());
        }
        if (isset($this->groupMeasure) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_GROUP_MEASURE]) {
            $xw->writeAttribute(self::FIELD_GROUP_MEASURE, $this->groupMeasure->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->description)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DESCRIPTION]
                || $this->description->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DESCRIPTION]);
            $xw->endElement();
        }
        if (isset($this->definitionReference)) {
            $xw->startElement(self::FIELD_DEFINITION_REFERENCE);
            $this->definitionReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->definitionCanonical)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEFINITION_CANONICAL]
                || $this->definitionCanonical->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEFINITION_CANONICAL);
            $this->definitionCanonical->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEFINITION_CANONICAL]);
            $xw->endElement();
        }
        if (isset($this->definitionCodeableConcept)) {
            $xw->startElement(self::FIELD_DEFINITION_CODEABLE_CONCEPT);
            $this->definitionCodeableConcept->xmlSerialize($xw, $config);
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
        if (isset($this->definitionTriggerDefinition)) {
            $xw->startElement(self::FIELD_DEFINITION_TRIGGER_DEFINITION);
            $this->definitionTriggerDefinition->xmlSerialize($xw, $config);
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
        if (isset($this->timeFromStart)) {
            $xw->startElement(self::FIELD_TIME_FROM_START);
            $this->timeFromStart->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->groupMeasure)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_GROUP_MEASURE]
                || $this->groupMeasure->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_GROUP_MEASURE);
            $this->groupMeasure->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_GROUP_MEASURE]);
            $xw->endElement();
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableCharacteristic $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableCharacteristic
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIREvidenceVariableCharacteristic)) {
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
        if (isset($json[self::FIELD_DESCRIPTION]) || isset($json[self::FIELD_DESCRIPTION_EXT]) || array_key_exists(self::FIELD_DESCRIPTION, $json) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $json)) {
            $value = $json[self::FIELD_DESCRIPTION] ?? null;
            $ext = (array)($json[self::FIELD_DESCRIPTION_EXT] ?? []);
            $type->setDescription(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DEFINITION_REFERENCE]) || array_key_exists(self::FIELD_DEFINITION_REFERENCE, $json)) {
            $type->setDefinitionReference(FHIRReference::jsonUnserialize(
                json: $json[self::FIELD_DEFINITION_REFERENCE],
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
        if (isset($json[self::FIELD_DEFINITION_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_DEFINITION_CODEABLE_CONCEPT, $json)) {
            $type->setDefinitionCodeableConcept(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_DEFINITION_CODEABLE_CONCEPT],
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
        if (isset($json[self::FIELD_DEFINITION_TRIGGER_DEFINITION]) || array_key_exists(self::FIELD_DEFINITION_TRIGGER_DEFINITION, $json)) {
            $type->setDefinitionTriggerDefinition(FHIRTriggerDefinition::jsonUnserialize(
                json: $json[self::FIELD_DEFINITION_TRIGGER_DEFINITION],
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
        if (isset($json[self::FIELD_TIME_FROM_START]) || array_key_exists(self::FIELD_TIME_FROM_START, $json)) {
            $type->setTimeFromStart(FHIRDuration::jsonUnserialize(
                json: $json[self::FIELD_TIME_FROM_START],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_GROUP_MEASURE]) || isset($json[self::FIELD_GROUP_MEASURE_EXT]) || array_key_exists(self::FIELD_GROUP_MEASURE, $json) || array_key_exists(self::FIELD_GROUP_MEASURE_EXT, $json)) {
            $value = $json[self::FIELD_GROUP_MEASURE] ?? null;
            $ext = (array)($json[self::FIELD_GROUP_MEASURE_EXT] ?? []);
            $type->setGroupMeasure(FHIRGroupMeasure::jsonUnserialize(
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
        if (isset($this->definitionReference)) {
            $out->definitionReference = $this->definitionReference;
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
        if (isset($this->definitionCodeableConcept)) {
            $out->definitionCodeableConcept = $this->definitionCodeableConcept;
        }
        if (isset($this->definitionExpression)) {
            $out->definitionExpression = $this->definitionExpression;
        }
        if (isset($this->definitionDataRequirement)) {
            $out->definitionDataRequirement = $this->definitionDataRequirement;
        }
        if (isset($this->definitionTriggerDefinition)) {
            $out->definitionTriggerDefinition = $this->definitionTriggerDefinition;
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
        if (isset($this->timeFromStart)) {
            $out->timeFromStart = $this->timeFromStart;
        }
        if (isset($this->groupMeasure)) {
            if (null !== ($val = $this->groupMeasure->getValue())) {
                $out->groupMeasure = $val;
            }
            $ext = $this->groupMeasure->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_groupMeasure = $ext;
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