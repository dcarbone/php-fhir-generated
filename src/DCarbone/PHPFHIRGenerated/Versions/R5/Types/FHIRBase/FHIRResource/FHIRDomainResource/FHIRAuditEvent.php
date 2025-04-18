<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;

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
use DCarbone\PHPFHIRGenerated\FHIRVersion;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAuditEventAction;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAuditEventSeverity;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventOutcome;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventSource;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRAuditEventActionEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRAuditEventSeverityEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionTypeMap;

/**
 * A record of an event relevant for purposes such as operations, privacy,
 * security, maintenance, and performance analysis.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRAuditEvent extends FHIRDomainResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_AUDIT_EVENT;

    /* class_default.php:56 */
    public const FIELD_CATEGORY = 'category';
    public const FIELD_CODE = 'code';
    public const FIELD_ACTION = 'action';
    public const FIELD_ACTION_EXT = '_action';
    public const FIELD_SEVERITY = 'severity';
    public const FIELD_SEVERITY_EXT = '_severity';
    public const FIELD_OCCURRED_PERIOD = 'occurredPeriod';
    public const FIELD_OCCURRED_DATE_TIME = 'occurredDateTime';
    public const FIELD_OCCURRED_DATE_TIME_EXT = '_occurredDateTime';
    public const FIELD_RECORDED = 'recorded';
    public const FIELD_RECORDED_EXT = '_recorded';
    public const FIELD_OUTCOME = 'outcome';
    public const FIELD_AUTHORIZATION = 'authorization';
    public const FIELD_BASED_ON = 'basedOn';
    public const FIELD_PATIENT = 'patient';
    public const FIELD_ENCOUNTER = 'encounter';
    public const FIELD_AGENT = 'agent';
    public const FIELD_SOURCE = 'source';
    public const FIELD_ENTITY = 'entity';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_CODE => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_RECORDED => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_AGENT => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_SOURCE => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_ACTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SEVERITY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_OCCURRED_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_RECORDED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Classification of the type of event.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $category;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes what happened. The most specific code for the event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $code;
    /**
     * Indicator for type of action performed during the event that generated the
     * event.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicator for type of action performed during the event that generated the
     * audit.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAuditEventAction 
     */
    #[FHIRAuditEventAction]
    protected FHIRAuditEventAction $action;
    /**
     * The severity of the audit entry.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates and enables segmentation of various severity including debugging from
     * critical.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAuditEventSeverity 
     */
    #[FHIRAuditEventSeverity]
    protected FHIRAuditEventSeverity $severity;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time or period during which the activity occurred. (choose any one of
     * occurred*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod 
     */
    #[FHIRPeriod]
    protected FHIRPeriod $occurredPeriod;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time or period during which the activity occurred. (choose any one of
     * occurred*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime 
     */
    #[FHIRDateTime]
    protected FHIRDateTime $occurredDateTime;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time when the event was recorded.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant 
     */
    #[FHIRInstant]
    protected FHIRInstant $recorded;
    /**
     * A record of an event relevant for purposes such as operations, privacy,
     * security, maintenance, and performance analysis.
     *
     * Indicates whether the event succeeded or failed. A free text descripiton can be
     * given in outcome.text.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventOutcome 
     */
    #[FHIRAuditEventOutcome]
    protected FHIRAuditEventOutcome $outcome;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The authorization (e.g., PurposeOfUse) that was used during the event being
     * recorded.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $authorization;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows tracing of authorizatino for the events and tracking whether
     * proposals/recommendations were acted upon.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> 
     */
    #[FHIRReference]
    protected array $basedOn;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient element is available to enable deterministic tracking of activities
     * that involve the patient as the subject of the data used in an activity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    #[FHIRReference]
    protected FHIRReference $patient;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This will typically be the encounter the event occurred, but some events may be
     * initiated prior to or after the official completion of an encounter but still be
     * tied to the context of the encounter (e.g. pre-admission lab tests).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    #[FHIRReference]
    protected FHIRReference $encounter;
    /**
     * A record of an event relevant for purposes such as operations, privacy,
     * security, maintenance, and performance analysis.
     *
     * An actor taking an active role in the event or activity that is logged.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent> 
     */
    #[FHIRAuditEventAgent]
    protected array $agent;
    /**
     * A record of an event relevant for purposes such as operations, privacy,
     * security, maintenance, and performance analysis.
     *
     * The actor that is reporting the event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventSource 
     */
    #[FHIRAuditEventSource]
    protected FHIRAuditEventSource $source;
    /**
     * A record of an event relevant for purposes such as operations, privacy,
     * security, maintenance, and performance analysis.
     *
     * Specific instances of data or objects that have been accessed.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity> 
     */
    #[FHIRAuditEventEntity]
    protected array $entity;

    /* constructor.php:61 */
    /**
     * FHIRAuditEvent Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative $text
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface> $contained
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> $category
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $code
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRAuditEventActionEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAuditEventAction $action
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRAuditEventSeverityEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAuditEventSeverity $severity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $occurredPeriod
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $occurredDateTime
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant $recorded
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventOutcome $outcome
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> $authorization
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> $basedOn
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $patient
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $encounter
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent> $agent
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventSource $source
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity> $entity
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRIdPrimitive|FHIRId $id = null,
                                null|FHIRMeta $meta = null,
                                null|string|FHIRUriPrimitive|FHIRUri $implicitRules = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $extension = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $category = null,
                                null|FHIRCodeableConcept $code = null,
                                null|string|FHIRAuditEventActionEnum|FHIRAuditEventAction $action = null,
                                null|string|FHIRAuditEventSeverityEnum|FHIRAuditEventSeverity $severity = null,
                                null|FHIRPeriod $occurredPeriod = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $occurredDateTime = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $recorded = null,
                                null|FHIRAuditEventOutcome $outcome = null,
                                null|iterable $authorization = null,
                                null|iterable $basedOn = null,
                                null|FHIRReference $patient = null,
                                null|FHIRReference $encounter = null,
                                null|iterable $agent = null,
                                null|FHIRAuditEventSource $source = null,
                                null|iterable $entity = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(id: $id,
                            meta: $meta,
                            implicitRules: $implicitRules,
                            language: $language,
                            text: $text,
                            contained: $contained,
                            extension: $extension,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $category) {
            $this->setCategory(...$category);
        }
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $action) {
            $this->setAction($action);
        }
        if (null !== $severity) {
            $this->setSeverity($severity);
        }
        if (null !== $occurredPeriod) {
            $this->setOccurredPeriod($occurredPeriod);
        }
        if (null !== $occurredDateTime) {
            $this->setOccurredDateTime($occurredDateTime);
        }
        if (null !== $recorded) {
            $this->setRecorded($recorded);
        }
        if (null !== $outcome) {
            $this->setOutcome($outcome);
        }
        if (null !== $authorization) {
            $this->setAuthorization(...$authorization);
        }
        if (null !== $basedOn) {
            $this->setBasedOn(...$basedOn);
        }
        if (null !== $patient) {
            $this->setPatient($patient);
        }
        if (null !== $encounter) {
            $this->setEncounter($encounter);
        }
        if (null !== $agent) {
            $this->setAgent(...$agent);
        }
        if (null !== $source) {
            $this->setSource($source);
        }
        if (null !== $entity) {
            $this->setEntity(...$entity);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Classification of the type of event.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getCategory(): array
    {
        return $this->category ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getCategoryIterator(): iterable
    {
        if (!isset($this->category)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->category);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Classification of the type of event.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $category
     * @return static
     */
    public function addCategory(FHIRCodeableConcept $category): self
    {
        if (!isset($this->category)) {
            $this->category = [];
        }
        $this->category[] = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Classification of the type of event.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$category
     * @return static
     */
    public function setCategory(FHIRCodeableConcept ...$category): self
    {
        if ([] === $category) {
            unset($this->category);
            return $this;
        }
        $this->category = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes what happened. The most specific code for the event.
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
     * Describes what happened. The most specific code for the event.
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
     * Indicator for type of action performed during the event that generated the
     * event.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicator for type of action performed during the event that generated the
     * audit.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAuditEventAction
     */
    public function getAction(): null|FHIRAuditEventAction
    {
        return $this->action ?? null;
    }

    /**
     * Indicator for type of action performed during the event that generated the
     * event.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicator for type of action performed during the event that generated the
     * audit.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRAuditEventActionEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAuditEventAction $action
     * @return static
     */
    public function setAction(null|string|FHIRAuditEventActionEnum|FHIRAuditEventAction $action): self
    {
        if (null === $action) {
            unset($this->action);
            return $this;
        }
        if (!($action instanceof FHIRAuditEventAction)) {
            $action = new FHIRAuditEventAction(value: $action);
        }
        $this->action = $action;
        return $this;
    }

    /**
     * The severity of the audit entry.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates and enables segmentation of various severity including debugging from
     * critical.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAuditEventSeverity
     */
    public function getSeverity(): null|FHIRAuditEventSeverity
    {
        return $this->severity ?? null;
    }

    /**
     * The severity of the audit entry.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates and enables segmentation of various severity including debugging from
     * critical.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRAuditEventSeverityEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRAuditEventSeverity $severity
     * @return static
     */
    public function setSeverity(null|string|FHIRAuditEventSeverityEnum|FHIRAuditEventSeverity $severity): self
    {
        if (null === $severity) {
            unset($this->severity);
            return $this;
        }
        if (!($severity instanceof FHIRAuditEventSeverity)) {
            $severity = new FHIRAuditEventSeverity(value: $severity);
        }
        $this->severity = $severity;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time or period during which the activity occurred. (choose any one of
     * occurred*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    public function getOccurredPeriod(): null|FHIRPeriod
    {
        return $this->occurredPeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time or period during which the activity occurred. (choose any one of
     * occurred*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $occurredPeriod
     * @return static
     */
    public function setOccurredPeriod(null|FHIRPeriod $occurredPeriod): self
    {
        if (null === $occurredPeriod) {
            unset($this->occurredPeriod);
            return $this;
        }
        $this->occurredPeriod = $occurredPeriod;
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
     * The time or period during which the activity occurred. (choose any one of
     * occurred*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getOccurredDateTime(): null|FHIRDateTime
    {
        return $this->occurredDateTime ?? null;
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
     * The time or period during which the activity occurred. (choose any one of
     * occurred*, but only one)
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $occurredDateTime
     * @return static
     */
    public function setOccurredDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $occurredDateTime): self
    {
        if (null === $occurredDateTime) {
            unset($this->occurredDateTime);
            return $this;
        }
        if (!($occurredDateTime instanceof FHIRDateTime)) {
            $occurredDateTime = new FHIRDateTime(value: $occurredDateTime);
        }
        $this->occurredDateTime = $occurredDateTime;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time when the event was recorded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant
     */
    public function getRecorded(): null|FHIRInstant
    {
        return $this->recorded ?? null;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time when the event was recorded.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant $recorded
     * @return static
     */
    public function setRecorded(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $recorded): self
    {
        if (null === $recorded) {
            unset($this->recorded);
            return $this;
        }
        if (!($recorded instanceof FHIRInstant)) {
            $recorded = new FHIRInstant(value: $recorded);
        }
        $this->recorded = $recorded;
        return $this;
    }

    /**
     * A record of an event relevant for purposes such as operations, privacy,
     * security, maintenance, and performance analysis.
     *
     * Indicates whether the event succeeded or failed. A free text descripiton can be
     * given in outcome.text.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventOutcome
     */
    public function getOutcome(): null|FHIRAuditEventOutcome
    {
        return $this->outcome ?? null;
    }

    /**
     * A record of an event relevant for purposes such as operations, privacy,
     * security, maintenance, and performance analysis.
     *
     * Indicates whether the event succeeded or failed. A free text descripiton can be
     * given in outcome.text.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventOutcome $outcome
     * @return static
     */
    public function setOutcome(null|FHIRAuditEventOutcome $outcome): self
    {
        if (null === $outcome) {
            unset($this->outcome);
            return $this;
        }
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The authorization (e.g., PurposeOfUse) that was used during the event being
     * recorded.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getAuthorization(): array
    {
        return $this->authorization ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getAuthorizationIterator(): iterable
    {
        if (!isset($this->authorization)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->authorization);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The authorization (e.g., PurposeOfUse) that was used during the event being
     * recorded.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $authorization
     * @return static
     */
    public function addAuthorization(FHIRCodeableConcept $authorization): self
    {
        if (!isset($this->authorization)) {
            $this->authorization = [];
        }
        $this->authorization[] = $authorization;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The authorization (e.g., PurposeOfUse) that was used during the event being
     * recorded.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$authorization
     * @return static
     */
    public function setAuthorization(FHIRCodeableConcept ...$authorization): self
    {
        if ([] === $authorization) {
            unset($this->authorization);
            return $this;
        }
        $this->authorization = $authorization;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows tracing of authorizatino for the events and tracking whether
     * proposals/recommendations were acted upon.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getBasedOn(): array
    {
        return $this->basedOn ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getBasedOnIterator(): iterable
    {
        if (!isset($this->basedOn)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->basedOn);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows tracing of authorizatino for the events and tracking whether
     * proposals/recommendations were acted upon.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $basedOn
     * @return static
     */
    public function addBasedOn(FHIRReference $basedOn): self
    {
        if (!isset($this->basedOn)) {
            $this->basedOn = [];
        }
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows tracing of authorizatino for the events and tracking whether
     * proposals/recommendations were acted upon.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$basedOn
     * @return static
     */
    public function setBasedOn(FHIRReference ...$basedOn): self
    {
        if ([] === $basedOn) {
            unset($this->basedOn);
            return $this;
        }
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient element is available to enable deterministic tracking of activities
     * that involve the patient as the subject of the data used in an activity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getPatient(): null|FHIRReference
    {
        return $this->patient ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient element is available to enable deterministic tracking of activities
     * that involve the patient as the subject of the data used in an activity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $patient
     * @return static
     */
    public function setPatient(null|FHIRReference $patient): self
    {
        if (null === $patient) {
            unset($this->patient);
            return $this;
        }
        $this->patient = $patient;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This will typically be the encounter the event occurred, but some events may be
     * initiated prior to or after the official completion of an encounter but still be
     * tied to the context of the encounter (e.g. pre-admission lab tests).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getEncounter(): null|FHIRReference
    {
        return $this->encounter ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This will typically be the encounter the event occurred, but some events may be
     * initiated prior to or after the official completion of an encounter but still be
     * tied to the context of the encounter (e.g. pre-admission lab tests).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $encounter
     * @return static
     */
    public function setEncounter(null|FHIRReference $encounter): self
    {
        if (null === $encounter) {
            unset($this->encounter);
            return $this;
        }
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * A record of an event relevant for purposes such as operations, privacy,
     * security, maintenance, and performance analysis.
     *
     * An actor taking an active role in the event or activity that is logged.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent>
     */
    public function getAgent(): array
    {
        return $this->agent ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent>
     */
    public function getAgentIterator(): iterable
    {
        if (!isset($this->agent)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->agent);
    }

    /**
     * A record of an event relevant for purposes such as operations, privacy,
     * security, maintenance, and performance analysis.
     *
     * An actor taking an active role in the event or activity that is logged.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent $agent
     * @return static
     */
    public function addAgent(FHIRAuditEventAgent $agent): self
    {
        if (!isset($this->agent)) {
            $this->agent = [];
        }
        $this->agent[] = $agent;
        return $this;
    }

    /**
     * A record of an event relevant for purposes such as operations, privacy,
     * security, maintenance, and performance analysis.
     *
     * An actor taking an active role in the event or activity that is logged.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent ...$agent
     * @return static
     */
    public function setAgent(FHIRAuditEventAgent ...$agent): self
    {
        if ([] === $agent) {
            unset($this->agent);
            return $this;
        }
        $this->agent = $agent;
        return $this;
    }

    /**
     * A record of an event relevant for purposes such as operations, privacy,
     * security, maintenance, and performance analysis.
     *
     * The actor that is reporting the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventSource
     */
    public function getSource(): null|FHIRAuditEventSource
    {
        return $this->source ?? null;
    }

    /**
     * A record of an event relevant for purposes such as operations, privacy,
     * security, maintenance, and performance analysis.
     *
     * The actor that is reporting the event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventSource $source
     * @return static
     */
    public function setSource(null|FHIRAuditEventSource $source): self
    {
        if (null === $source) {
            unset($this->source);
            return $this;
        }
        $this->source = $source;
        return $this;
    }

    /**
     * A record of an event relevant for purposes such as operations, privacy,
     * security, maintenance, and performance analysis.
     *
     * Specific instances of data or objects that have been accessed.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity>
     */
    public function getEntity(): array
    {
        return $this->entity ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity>
     */
    public function getEntityIterator(): iterable
    {
        if (!isset($this->entity)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->entity);
    }

    /**
     * A record of an event relevant for purposes such as operations, privacy,
     * security, maintenance, and performance analysis.
     *
     * Specific instances of data or objects that have been accessed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity $entity
     * @return static
     */
    public function addEntity(FHIRAuditEventEntity $entity): self
    {
        if (!isset($this->entity)) {
            $this->entity = [];
        }
        $this->entity[] = $entity;
        return $this;
    }

    /**
     * A record of an event relevant for purposes such as operations, privacy,
     * security, maintenance, and performance analysis.
     *
     * Specific instances of data or objects that have been accessed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity ...$entity
     * @return static
     */
    public function setEntity(FHIRAuditEventEntity ...$entity): self
    {
        if ([] === $entity) {
            unset($this->entity);
            return $this;
        }
        $this->entity = $entity;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAuditEvent $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAuditEvent
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAuditEvent)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_ID === $cen) {
                $type->setId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_META === $cen) {
                $type->setMeta(FHIRMeta::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $cen) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LANGUAGE === $cen) {
                $type->setLanguage(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRNarrative::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED === $cen) {
                foreach ($ce->children() as $cen) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::mustGetContainedTypeClassnameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CATEGORY === $cen) {
                $type->addCategory(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE === $cen) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ACTION === $cen) {
                $type->setAction(FHIRAuditEventAction::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SEVERITY === $cen) {
                $type->setSeverity(FHIRAuditEventSeverity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OCCURRED_PERIOD === $cen) {
                $type->setOccurredPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OCCURRED_DATE_TIME === $cen) {
                $type->setOccurredDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RECORDED === $cen) {
                $type->setRecorded(FHIRInstant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OUTCOME === $cen) {
                $type->setOutcome(FHIRAuditEventOutcome::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AUTHORIZATION === $cen) {
                $type->addAuthorization(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BASED_ON === $cen) {
                $type->addBasedOn(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATIENT === $cen) {
                $type->setPatient(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ENCOUNTER === $cen) {
                $type->setEncounter(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AGENT === $cen) {
                $type->addAgent(FHIRAuditEventAgent::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SOURCE === $cen) {
                $type->setSource(FHIRAuditEventSource::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ENTITY === $cen) {
                $type->addEntity(FHIRAuditEventEntity::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            if (isset($type->id)) {
                $type->id->setValue((string)$attributes[self::FIELD_ID]);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            if (isset($type->implicitRules)) {
                $type->implicitRules->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_IMPLICIT_RULES, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LANGUAGE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ACTION])) {
            if (isset($type->action)) {
                $type->action->setValue((string)$attributes[self::FIELD_ACTION]);
            } else {
                $type->setAction((string)$attributes[self::FIELD_ACTION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ACTION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SEVERITY])) {
            if (isset($type->severity)) {
                $type->severity->setValue((string)$attributes[self::FIELD_SEVERITY]);
            } else {
                $type->setSeverity((string)$attributes[self::FIELD_SEVERITY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SEVERITY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_OCCURRED_DATE_TIME])) {
            if (isset($type->occurredDateTime)) {
                $type->occurredDateTime->setValue((string)$attributes[self::FIELD_OCCURRED_DATE_TIME]);
            } else {
                $type->setOccurredDateTime((string)$attributes[self::FIELD_OCCURRED_DATE_TIME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_OCCURRED_DATE_TIME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_RECORDED])) {
            if (isset($type->recorded)) {
                $type->recorded->setValue((string)$attributes[self::FIELD_RECORDED]);
            } else {
                $type->setRecorded((string)$attributes[self::FIELD_RECORDED]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_RECORDED, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null,
                                 null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('AuditEvent', $this->_getSourceXMLNS());
        }
        if (isset($this->action) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ACTION]) {
            $xw->writeAttribute(self::FIELD_ACTION, $this->action->_getValueAsString());
        }
        if (isset($this->severity) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SEVERITY]) {
            $xw->writeAttribute(self::FIELD_SEVERITY, $this->severity->_getValueAsString());
        }
        if (isset($this->occurredDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_OCCURRED_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_OCCURRED_DATE_TIME, $this->occurredDateTime->_getValueAsString());
        }
        if (isset($this->recorded) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_RECORDED]) {
            $xw->writeAttribute(self::FIELD_RECORDED, $this->recorded->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->category)) {
            foreach ($this->category as $v) {
                $xw->startElement(self::FIELD_CATEGORY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->code)) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->action)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ACTION]
                || $this->action->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ACTION);
            $this->action->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ACTION]);
            $xw->endElement();
        }
        if (isset($this->severity)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SEVERITY]
                || $this->severity->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SEVERITY);
            $this->severity->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SEVERITY]);
            $xw->endElement();
        }
        if (isset($this->occurredPeriod)) {
            $xw->startElement(self::FIELD_OCCURRED_PERIOD);
            $this->occurredPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->occurredDateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_OCCURRED_DATE_TIME]
                || $this->occurredDateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_OCCURRED_DATE_TIME);
            $this->occurredDateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_OCCURRED_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->recorded)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_RECORDED]
                || $this->recorded->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_RECORDED);
            $this->recorded->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_RECORDED]);
            $xw->endElement();
        }
        if (isset($this->outcome)) {
            $xw->startElement(self::FIELD_OUTCOME);
            $this->outcome->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->authorization)) {
            foreach ($this->authorization as $v) {
                $xw->startElement(self::FIELD_AUTHORIZATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->basedOn)) {
            foreach ($this->basedOn as $v) {
                $xw->startElement(self::FIELD_BASED_ON);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->patient)) {
            $xw->startElement(self::FIELD_PATIENT);
            $this->patient->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->encounter)) {
            $xw->startElement(self::FIELD_ENCOUNTER);
            $this->encounter->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->agent)) {
            foreach ($this->agent as $v) {
                $xw->startElement(self::FIELD_AGENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->source)) {
            $xw->startElement(self::FIELD_SOURCE);
            $this->source->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->entity)) {
            foreach ($this->entity as $v) {
                $xw->startElement(self::FIELD_ENTITY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if ($rootOpened ?? false) {
            $xw->endElement();
        }
        if ($docStarted ?? false) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|\stdClass $decoded
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAuditEvent $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRAuditEvent
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $decoded,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAuditEvent)) {
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
        if (is_string($decoded)) {
            $decoded = json_decode(json: $decoded,
                                associative: false,
                                depth: $config->getJSONDecodeMaxDepth(),
                                flags: $config->getJSONDecodeOpts());
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->category) || property_exists($decoded, self::FIELD_CATEGORY)) {
            if (is_object($decoded->category)) {
                $vals = [$decoded->category];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CATEGORY, true);
            } else {
                $vals = $decoded->category;
            }
            foreach($vals as $v) {
                $type->addCategory(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->code) || property_exists($decoded, self::FIELD_CODE)) {
            if (is_array($decoded->code)) {
                $type->setCode(FHIRCodeableConcept::jsonUnserialize(reset($decoded->code), $config));
            } else {
                $type->setCode(FHIRCodeableConcept::jsonUnserialize($decoded->code, $config));
            }
        }
        if (isset($decoded->action)
            || isset($decoded->_action)
            || property_exists($decoded, self::FIELD_ACTION)
            || property_exists($decoded, self::FIELD_ACTION_EXT)) {
            $v = $decoded->_action ?? new \stdClass();
            $v->value = $decoded->action ?? null;
            $type->setAction(FHIRAuditEventAction::jsonUnserialize($v, $config));
        }
        if (isset($decoded->severity)
            || isset($decoded->_severity)
            || property_exists($decoded, self::FIELD_SEVERITY)
            || property_exists($decoded, self::FIELD_SEVERITY_EXT)) {
            $v = $decoded->_severity ?? new \stdClass();
            $v->value = $decoded->severity ?? null;
            $type->setSeverity(FHIRAuditEventSeverity::jsonUnserialize($v, $config));
        }
        if (isset($decoded->occurredPeriod) || property_exists($decoded, self::FIELD_OCCURRED_PERIOD)) {
            if (is_array($decoded->occurredPeriod)) {
                $type->setOccurredPeriod(FHIRPeriod::jsonUnserialize(reset($decoded->occurredPeriod), $config));
            } else {
                $type->setOccurredPeriod(FHIRPeriod::jsonUnserialize($decoded->occurredPeriod, $config));
            }
        }
        if (isset($decoded->occurredDateTime)
            || isset($decoded->_occurredDateTime)
            || property_exists($decoded, self::FIELD_OCCURRED_DATE_TIME)
            || property_exists($decoded, self::FIELD_OCCURRED_DATE_TIME_EXT)) {
            $v = $decoded->_occurredDateTime ?? new \stdClass();
            $v->value = $decoded->occurredDateTime ?? null;
            $type->setOccurredDateTime(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($decoded->recorded)
            || isset($decoded->_recorded)
            || property_exists($decoded, self::FIELD_RECORDED)
            || property_exists($decoded, self::FIELD_RECORDED_EXT)) {
            $v = $decoded->_recorded ?? new \stdClass();
            $v->value = $decoded->recorded ?? null;
            $type->setRecorded(FHIRInstant::jsonUnserialize($v, $config));
        }
        if (isset($decoded->outcome) || property_exists($decoded, self::FIELD_OUTCOME)) {
            if (is_array($decoded->outcome)) {
                $type->setOutcome(FHIRAuditEventOutcome::jsonUnserialize(reset($decoded->outcome), $config));
            } else {
                $type->setOutcome(FHIRAuditEventOutcome::jsonUnserialize($decoded->outcome, $config));
            }
        }
        if (isset($decoded->authorization) || property_exists($decoded, self::FIELD_AUTHORIZATION)) {
            if (is_object($decoded->authorization)) {
                $vals = [$decoded->authorization];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_AUTHORIZATION, true);
            } else {
                $vals = $decoded->authorization;
            }
            foreach($vals as $v) {
                $type->addAuthorization(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->basedOn) || property_exists($decoded, self::FIELD_BASED_ON)) {
            if (is_object($decoded->basedOn)) {
                $vals = [$decoded->basedOn];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_BASED_ON, true);
            } else {
                $vals = $decoded->basedOn;
            }
            foreach($vals as $v) {
                $type->addBasedOn(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->patient) || property_exists($decoded, self::FIELD_PATIENT)) {
            if (is_array($decoded->patient)) {
                $type->setPatient(FHIRReference::jsonUnserialize(reset($decoded->patient), $config));
            } else {
                $type->setPatient(FHIRReference::jsonUnserialize($decoded->patient, $config));
            }
        }
        if (isset($decoded->encounter) || property_exists($decoded, self::FIELD_ENCOUNTER)) {
            if (is_array($decoded->encounter)) {
                $type->setEncounter(FHIRReference::jsonUnserialize(reset($decoded->encounter), $config));
            } else {
                $type->setEncounter(FHIRReference::jsonUnserialize($decoded->encounter, $config));
            }
        }
        if (isset($decoded->agent) || property_exists($decoded, self::FIELD_AGENT)) {
            if (is_object($decoded->agent)) {
                $vals = [$decoded->agent];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_AGENT, true);
            } else {
                $vals = $decoded->agent;
            }
            foreach($vals as $v) {
                $type->addAgent(FHIRAuditEventAgent::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->source) || property_exists($decoded, self::FIELD_SOURCE)) {
            if (is_array($decoded->source)) {
                $type->setSource(FHIRAuditEventSource::jsonUnserialize(reset($decoded->source), $config));
            } else {
                $type->setSource(FHIRAuditEventSource::jsonUnserialize($decoded->source, $config));
            }
        }
        if (isset($decoded->entity) || property_exists($decoded, self::FIELD_ENTITY)) {
            if (is_object($decoded->entity)) {
                $vals = [$decoded->entity];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ENTITY, true);
            } else {
                $vals = $decoded->entity;
            }
            foreach($vals as $v) {
                $type->addEntity(FHIRAuditEventEntity::jsonUnserialize($v, $config));
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
        if (isset($this->category) && [] !== $this->category) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CATEGORY) && 1 === count($this->category)) {
                $out->category = $this->category[0];
            } else {
                $out->category = $this->category;
            }
        }
        if (isset($this->code)) {
            $out->code = $this->code;
        }
        if (isset($this->action)) {
            if (null !== ($val = $this->action->getValue())) {
                $out->action = $val;
            }
            if ($this->action->_nonValueFieldDefined()) {
                $ext = $this->action->jsonSerialize();
                unset($ext->value);
                $out->_action = $ext;
            }
        }
        if (isset($this->severity)) {
            if (null !== ($val = $this->severity->getValue())) {
                $out->severity = $val;
            }
            if ($this->severity->_nonValueFieldDefined()) {
                $ext = $this->severity->jsonSerialize();
                unset($ext->value);
                $out->_severity = $ext;
            }
        }
        if (isset($this->occurredPeriod)) {
            $out->occurredPeriod = $this->occurredPeriod;
        }
        if (isset($this->occurredDateTime)) {
            if (null !== ($val = $this->occurredDateTime->getValue())) {
                $out->occurredDateTime = $val;
            }
            if ($this->occurredDateTime->_nonValueFieldDefined()) {
                $ext = $this->occurredDateTime->jsonSerialize();
                unset($ext->value);
                $out->_occurredDateTime = $ext;
            }
        }
        if (isset($this->recorded)) {
            if (null !== ($val = $this->recorded->getValue())) {
                $out->recorded = $val;
            }
            if ($this->recorded->_nonValueFieldDefined()) {
                $ext = $this->recorded->jsonSerialize();
                unset($ext->value);
                $out->_recorded = $ext;
            }
        }
        if (isset($this->outcome)) {
            $out->outcome = $this->outcome;
        }
        if (isset($this->authorization) && [] !== $this->authorization) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_AUTHORIZATION) && 1 === count($this->authorization)) {
                $out->authorization = $this->authorization[0];
            } else {
                $out->authorization = $this->authorization;
            }
        }
        if (isset($this->basedOn) && [] !== $this->basedOn) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_BASED_ON) && 1 === count($this->basedOn)) {
                $out->basedOn = $this->basedOn[0];
            } else {
                $out->basedOn = $this->basedOn;
            }
        }
        if (isset($this->patient)) {
            $out->patient = $this->patient;
        }
        if (isset($this->encounter)) {
            $out->encounter = $this->encounter;
        }
        if (isset($this->agent) && [] !== $this->agent) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_AGENT) && 1 === count($this->agent)) {
                $out->agent = $this->agent[0];
            } else {
                $out->agent = $this->agent;
            }
        }
        if (isset($this->source)) {
            $out->source = $this->source;
        }
        if (isset($this->entity) && [] !== $this->entity) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ENTITY) && 1 === count($this->entity)) {
                $out->entity = $this->entity[0];
            } else {
                $out->entity = $this->entity;
            }
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}