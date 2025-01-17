<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
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
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskInput;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskOutput;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskRestriction;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRequestPriority;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTaskIntent;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTaskStatus;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionTypeMap;

/**
 * A task to be performed.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRTask extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_TASK;


    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_INSTANTIATES_CANONICAL = 'instantiatesCanonical';
    public const FIELD_INSTANTIATES_CANONICAL_EXT = '_instantiatesCanonical';
    public const FIELD_INSTANTIATES_URI = 'instantiatesUri';
    public const FIELD_INSTANTIATES_URI_EXT = '_instantiatesUri';
    public const FIELD_BASED_ON = 'basedOn';
    public const FIELD_GROUP_IDENTIFIER = 'groupIdentifier';
    public const FIELD_PART_OF = 'partOf';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_STATUS_REASON = 'statusReason';
    public const FIELD_BUSINESS_STATUS = 'businessStatus';
    public const FIELD_INTENT = 'intent';
    public const FIELD_INTENT_EXT = '_intent';
    public const FIELD_PRIORITY = 'priority';
    public const FIELD_PRIORITY_EXT = '_priority';
    public const FIELD_CODE = 'code';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_FOCUS = 'focus';
    public const FIELD_FOR = 'for';
    public const FIELD_ENCOUNTER = 'encounter';
    public const FIELD_EXECUTION_PERIOD = 'executionPeriod';
    public const FIELD_AUTHORED_ON = 'authoredOn';
    public const FIELD_AUTHORED_ON_EXT = '_authoredOn';
    public const FIELD_LAST_MODIFIED = 'lastModified';
    public const FIELD_LAST_MODIFIED_EXT = '_lastModified';
    public const FIELD_REQUESTER = 'requester';
    public const FIELD_PERFORMER_TYPE = 'performerType';
    public const FIELD_OWNER = 'owner';
    public const FIELD_LOCATION = 'location';
    public const FIELD_REASON_CODE = 'reasonCode';
    public const FIELD_REASON_REFERENCE = 'reasonReference';
    public const FIELD_INSURANCE = 'insurance';
    public const FIELD_NOTE = 'note';
    public const FIELD_RELEVANT_HISTORY = 'relevantHistory';
    public const FIELD_RESTRICTION = 'restriction';
    public const FIELD_INPUT = 'input';
    public const FIELD_OUTPUT = 'output';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The business identifier for this task.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The URL pointing to a *FHIR*-defined protocol, guideline, orderset or other
     * definition that is adhered to in whole or in part by this Task.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical 
     */
    protected FHIRCanonical $instantiatesCanonical;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an *externally* maintained protocol, guideline, orderset or
     * other definition that is adhered to in whole or in part by this Task.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $instantiatesUri;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * BasedOn refers to a higher-level authorization that triggered the creation of
     * the task. It references a "request" resource such as a ServiceRequest,
     * MedicationRequest, ServiceRequest, CarePlan, etc. which is distinct from the
     * "request" resource the task is seeking to fulfill. This latter resource is
     * referenced by FocusOn. For example, based on a ServiceRequest (= BasedOn), a
     * task is created to fulfill a procedureRequest ( = FocusOn ) to collect a
     * specimen from a patient.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] 
     */
    protected array $basedOn;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier that links together multiple tasks and other requests that were
     * created in the same context.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier 
     */
    protected FHIRIdentifier $groupIdentifier;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Task that this particular task is part of.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] 
     */
    protected array $partOf;
    /**
     * The current status of the task.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current status of the task.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTaskStatus 
     */
    protected FHIRTaskStatus $status;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An explanation as to why this task is held, failed, was refused, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $statusReason;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contains business-specific nuances of the business state.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $businessStatus;
    /**
     * Distinguishes whether the task is a proposal, plan or full order.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the "level" of actionability associated with the Task, i.e. i+R[9]Cs
     * this a proposed task, a planned task, an actionable task, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTaskIntent 
     */
    protected FHIRTaskIntent $intent;
    /**
     * Identifies the level of importance to be assigned to actioning the request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the Task should be addressed with respect to other
     * requests.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRequestPriority 
     */
    protected FHIRRequestPriority $priority;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A name or code (or both) briefly describing what the task involves.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $code;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free-text description of what is to be performed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $description;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request being actioned or the resource being manipulated by this task.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $focus;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity who benefits from the performance of the service specified in the
     * task (e.g., the patient).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $for;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The healthcare event (e.g. a patient and healthcare provider interaction) during
     * which this task was created.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $encounter;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the time action was first taken against the task (start) and/or the
     * time final action was taken against the task prior to marking it as completed
     * (end).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $executionPeriod;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time this task was created.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $authoredOn;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time of last modification to this task.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $lastModified;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The creator of the task.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $requester;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of participant that should perform the task.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $performerType;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual organization or Device currently responsible for task execution.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $owner;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Principal physical location where the this task is performed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $location;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description or code indicating why this task needs to be performed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $reasonCode;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A resource reference indicating why this task needs to be performed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $reasonReference;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Insurance plans, coverage extensions, pre-authorizations and/or
     * pre-determinations that may be relevant to the Task.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] 
     */
    protected array $insurance;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Free-text information captured about the task as it progresses.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAnnotation[] 
     */
    protected array $note;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Links to Provenance records for past versions of this Task that identify key
     * state transitions or updates that are likely to be relevant to a user looking at
     * the current version of the task.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] 
     */
    protected array $relevantHistory;
    /**
     * A task to be performed.
     *
     * If the Task.focus is a request resource and the task is seeking fulfillment
     * (i.e. is asking for the request to be actioned), this element identifies any
     * limitations on what parts of the referenced request should be actioned.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskRestriction 
     */
    protected FHIRTaskRestriction $restriction;
    /**
     * A task to be performed.
     *
     * Additional information that may be needed in the execution of the task.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskInput[] 
     */
    protected array $input;
    /**
     * A task to be performed.
     *
     * Outputs produced by the Task.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskOutput[] 
     */
    protected array $output;

    /** Default validation map for fields in type Task */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_STATUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_INTENT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRTask Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical $instantiatesCanonical
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri $instantiatesUri
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] $basedOn
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier $groupIdentifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] $partOf
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTaskStatus $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $statusReason
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $businessStatus
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTaskIntent $intent
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRequestPriority $priority
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $code
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $description
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $focus
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $for
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $encounter
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod $executionPeriod
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime $authoredOn
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime $lastModified
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $requester
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] $performerType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $owner
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $location
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $reasonCode
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $reasonReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] $insurance
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAnnotation[] $note
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] $relevantHistory
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskRestriction $restriction
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskInput[] $input
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskOutput[] $output
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
                                null|iterable $identifier = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $instantiatesCanonical = null,
                                null|string|FHIRUriPrimitive|FHIRUri $instantiatesUri = null,
                                null|iterable $basedOn = null,
                                null|FHIRIdentifier $groupIdentifier = null,
                                null|iterable $partOf = null,
                                null|FHIRTaskStatus $status = null,
                                null|FHIRCodeableConcept $statusReason = null,
                                null|FHIRCodeableConcept $businessStatus = null,
                                null|FHIRTaskIntent $intent = null,
                                null|FHIRRequestPriority $priority = null,
                                null|FHIRCodeableConcept $code = null,
                                null|string|FHIRStringPrimitive|FHIRString $description = null,
                                null|FHIRReference $focus = null,
                                null|FHIRReference $for = null,
                                null|FHIRReference $encounter = null,
                                null|FHIRPeriod $executionPeriod = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $authoredOn = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $lastModified = null,
                                null|FHIRReference $requester = null,
                                null|iterable $performerType = null,
                                null|FHIRReference $owner = null,
                                null|FHIRReference $location = null,
                                null|FHIRCodeableConcept $reasonCode = null,
                                null|FHIRReference $reasonReference = null,
                                null|iterable $insurance = null,
                                null|iterable $note = null,
                                null|iterable $relevantHistory = null,
                                null|FHIRTaskRestriction $restriction = null,
                                null|iterable $input = null,
                                null|iterable $output = null,
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
        if (null !== $identifier) {
            $this->setIdentifier(...$identifier);
        }
        if (null !== $instantiatesCanonical) {
            $this->setInstantiatesCanonical($instantiatesCanonical);
        }
        if (null !== $instantiatesUri) {
            $this->setInstantiatesUri($instantiatesUri);
        }
        if (null !== $basedOn) {
            $this->setBasedOn(...$basedOn);
        }
        if (null !== $groupIdentifier) {
            $this->setGroupIdentifier($groupIdentifier);
        }
        if (null !== $partOf) {
            $this->setPartOf(...$partOf);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $statusReason) {
            $this->setStatusReason($statusReason);
        }
        if (null !== $businessStatus) {
            $this->setBusinessStatus($businessStatus);
        }
        if (null !== $intent) {
            $this->setIntent($intent);
        }
        if (null !== $priority) {
            $this->setPriority($priority);
        }
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $focus) {
            $this->setFocus($focus);
        }
        if (null !== $for) {
            $this->setFor($for);
        }
        if (null !== $encounter) {
            $this->setEncounter($encounter);
        }
        if (null !== $executionPeriod) {
            $this->setExecutionPeriod($executionPeriod);
        }
        if (null !== $authoredOn) {
            $this->setAuthoredOn($authoredOn);
        }
        if (null !== $lastModified) {
            $this->setLastModified($lastModified);
        }
        if (null !== $requester) {
            $this->setRequester($requester);
        }
        if (null !== $performerType) {
            $this->setPerformerType(...$performerType);
        }
        if (null !== $owner) {
            $this->setOwner($owner);
        }
        if (null !== $location) {
            $this->setLocation($location);
        }
        if (null !== $reasonCode) {
            $this->setReasonCode($reasonCode);
        }
        if (null !== $reasonReference) {
            $this->setReasonReference($reasonReference);
        }
        if (null !== $insurance) {
            $this->setInsurance(...$insurance);
        }
        if (null !== $note) {
            $this->setNote(...$note);
        }
        if (null !== $relevantHistory) {
            $this->setRelevantHistory(...$relevantHistory);
        }
        if (null !== $restriction) {
            $this->setRestriction($restriction);
        }
        if (null !== $input) {
            $this->setInput(...$input);
        }
        if (null !== $output) {
            $this->setOutput(...$output);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The business identifier for this task.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier>
     */
    public function getIdentifierIterator(): iterable
    {
        if (!isset($this->identifier) || [] === $this->identifier) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The business identifier for this task.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier): self
    {
        if (!isset($this->identifier)) {
            $this->identifier = [];
        }
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The business identifier for this task.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The URL pointing to a *FHIR*-defined protocol, guideline, orderset or other
     * definition that is adhered to in whole or in part by this Task.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical
     */
    public function getInstantiatesCanonical(): null|FHIRCanonical
    {
        return $this->instantiatesCanonical ?? null;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The URL pointing to a *FHIR*-defined protocol, guideline, orderset or other
     * definition that is adhered to in whole or in part by this Task.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical $instantiatesCanonical
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setInstantiatesCanonical(null|string|FHIRCanonicalPrimitive|FHIRCanonical $instantiatesCanonical,
                                             null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $instantiatesCanonical) {
            unset($this->instantiatesCanonical);
            return $this;
        }
        if (!($instantiatesCanonical instanceof FHIRCanonical)) {
            $instantiatesCanonical = new FHIRCanonical(value: $instantiatesCanonical);
        }
        if (null !== $valueXMLLocation) {
            $instantiatesCanonical->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $instantiatesCanonical->_getValueXMLLocation()) {
            $instantiatesCanonical->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->instantiatesCanonical = $instantiatesCanonical;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an *externally* maintained protocol, guideline, orderset or
     * other definition that is adhered to in whole or in part by this Task.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri
     */
    public function getInstantiatesUri(): null|FHIRUri
    {
        return $this->instantiatesUri ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an *externally* maintained protocol, guideline, orderset or
     * other definition that is adhered to in whole or in part by this Task.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri $instantiatesUri
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setInstantiatesUri(null|string|FHIRUriPrimitive|FHIRUri $instantiatesUri,
                                       null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $instantiatesUri) {
            unset($this->instantiatesUri);
            return $this;
        }
        if (!($instantiatesUri instanceof FHIRUri)) {
            $instantiatesUri = new FHIRUri(value: $instantiatesUri);
        }
        if (null !== $valueXMLLocation) {
            $instantiatesUri->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $instantiatesUri->_getValueXMLLocation()) {
            $instantiatesUri->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->instantiatesUri = $instantiatesUri;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * BasedOn refers to a higher-level authorization that triggered the creation of
     * the task. It references a "request" resource such as a ServiceRequest,
     * MedicationRequest, ServiceRequest, CarePlan, etc. which is distinct from the
     * "request" resource the task is seeking to fulfill. This latter resource is
     * referenced by FocusOn. For example, based on a ServiceRequest (= BasedOn), a
     * task is created to fulfill a procedureRequest ( = FocusOn ) to collect a
     * specimen from a patient.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[]
     */
    public function getBasedOn(): array
    {
        return $this->basedOn ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference>
     */
    public function getBasedOnIterator(): iterable
    {
        if (!isset($this->basedOn) || [] === $this->basedOn) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->basedOn);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * BasedOn refers to a higher-level authorization that triggered the creation of
     * the task. It references a "request" resource such as a ServiceRequest,
     * MedicationRequest, ServiceRequest, CarePlan, etc. which is distinct from the
     * "request" resource the task is seeking to fulfill. This latter resource is
     * referenced by FocusOn. For example, based on a ServiceRequest (= BasedOn), a
     * task is created to fulfill a procedureRequest ( = FocusOn ) to collect a
     * specimen from a patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $basedOn
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
     * BasedOn refers to a higher-level authorization that triggered the creation of
     * the task. It references a "request" resource such as a ServiceRequest,
     * MedicationRequest, ServiceRequest, CarePlan, etc. which is distinct from the
     * "request" resource the task is seeking to fulfill. This latter resource is
     * referenced by FocusOn. For example, based on a ServiceRequest (= BasedOn), a
     * task is created to fulfill a procedureRequest ( = FocusOn ) to collect a
     * specimen from a patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference ...$basedOn
     * @return static
     */
    public function setBasedOn(FHIRReference ...$basedOn): self
    {
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier that links together multiple tasks and other requests that were
     * created in the same context.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier
     */
    public function getGroupIdentifier(): null|FHIRIdentifier
    {
        return $this->groupIdentifier ?? null;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier that links together multiple tasks and other requests that were
     * created in the same context.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier $groupIdentifier
     * @return static
     */
    public function setGroupIdentifier(null|FHIRIdentifier $groupIdentifier): self
    {
        if (null === $groupIdentifier) {
            unset($this->groupIdentifier);
            return $this;
        }
        $this->groupIdentifier = $groupIdentifier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Task that this particular task is part of.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[]
     */
    public function getPartOf(): array
    {
        return $this->partOf ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference>
     */
    public function getPartOfIterator(): iterable
    {
        if (!isset($this->partOf) || [] === $this->partOf) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->partOf);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Task that this particular task is part of.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $partOf
     * @return static
     */
    public function addPartOf(FHIRReference $partOf): self
    {
        if (!isset($this->partOf)) {
            $this->partOf = [];
        }
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Task that this particular task is part of.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference ...$partOf
     * @return static
     */
    public function setPartOf(FHIRReference ...$partOf): self
    {
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * The current status of the task.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current status of the task.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTaskStatus
     */
    public function getStatus(): null|FHIRTaskStatus
    {
        return $this->status ?? null;
    }

    /**
     * The current status of the task.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current status of the task.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTaskStatus $status
     * @return static
     */
    public function setStatus(null|FHIRTaskStatus $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        $this->status = $status;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An explanation as to why this task is held, failed, was refused, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getStatusReason(): null|FHIRCodeableConcept
    {
        return $this->statusReason ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An explanation as to why this task is held, failed, was refused, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $statusReason
     * @return static
     */
    public function setStatusReason(null|FHIRCodeableConcept $statusReason): self
    {
        if (null === $statusReason) {
            unset($this->statusReason);
            return $this;
        }
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contains business-specific nuances of the business state.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getBusinessStatus(): null|FHIRCodeableConcept
    {
        return $this->businessStatus ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contains business-specific nuances of the business state.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $businessStatus
     * @return static
     */
    public function setBusinessStatus(null|FHIRCodeableConcept $businessStatus): self
    {
        if (null === $businessStatus) {
            unset($this->businessStatus);
            return $this;
        }
        $this->businessStatus = $businessStatus;
        return $this;
    }

    /**
     * Distinguishes whether the task is a proposal, plan or full order.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the "level" of actionability associated with the Task, i.e. i+R[9]Cs
     * this a proposed task, a planned task, an actionable task, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTaskIntent
     */
    public function getIntent(): null|FHIRTaskIntent
    {
        return $this->intent ?? null;
    }

    /**
     * Distinguishes whether the task is a proposal, plan or full order.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the "level" of actionability associated with the Task, i.e. i+R[9]Cs
     * this a proposed task, a planned task, an actionable task, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRTaskIntent $intent
     * @return static
     */
    public function setIntent(null|FHIRTaskIntent $intent): self
    {
        if (null === $intent) {
            unset($this->intent);
            return $this;
        }
        $this->intent = $intent;
        return $this;
    }

    /**
     * Identifies the level of importance to be assigned to actioning the request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the Task should be addressed with respect to other
     * requests.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRequestPriority
     */
    public function getPriority(): null|FHIRRequestPriority
    {
        return $this->priority ?? null;
    }

    /**
     * Identifies the level of importance to be assigned to actioning the request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the Task should be addressed with respect to other
     * requests.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRequestPriority $priority
     * @return static
     */
    public function setPriority(null|FHIRRequestPriority $priority): self
    {
        if (null === $priority) {
            unset($this->priority);
            return $this;
        }
        $this->priority = $priority;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A name or code (or both) briefly describing what the task involves.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
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
     * A name or code (or both) briefly describing what the task involves.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $code
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free-text description of what is to be performed.
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
     * A free-text description of what is to be performed.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $description
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRString)) {
            $description = new FHIRString(value: $description);
        }
        if (null !== $valueXMLLocation) {
            $description->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $description->_getValueXMLLocation()) {
            $description->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request being actioned or the resource being manipulated by this task.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getFocus(): null|FHIRReference
    {
        return $this->focus ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request being actioned or the resource being manipulated by this task.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $focus
     * @return static
     */
    public function setFocus(null|FHIRReference $focus): self
    {
        if (null === $focus) {
            unset($this->focus);
            return $this;
        }
        $this->focus = $focus;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity who benefits from the performance of the service specified in the
     * task (e.g., the patient).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getFor(): null|FHIRReference
    {
        return $this->for ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity who benefits from the performance of the service specified in the
     * task (e.g., the patient).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $for
     * @return static
     */
    public function setFor(null|FHIRReference $for): self
    {
        if (null === $for) {
            unset($this->for);
            return $this;
        }
        $this->for = $for;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The healthcare event (e.g. a patient and healthcare provider interaction) during
     * which this task was created.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
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
     * The healthcare event (e.g. a patient and healthcare provider interaction) during
     * which this task was created.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $encounter
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
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the time action was first taken against the task (start) and/or the
     * time final action was taken against the task prior to marking it as completed
     * (end).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod
     */
    public function getExecutionPeriod(): null|FHIRPeriod
    {
        return $this->executionPeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the time action was first taken against the task (start) and/or the
     * time final action was taken against the task prior to marking it as completed
     * (end).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod $executionPeriod
     * @return static
     */
    public function setExecutionPeriod(null|FHIRPeriod $executionPeriod): self
    {
        if (null === $executionPeriod) {
            unset($this->executionPeriod);
            return $this;
        }
        $this->executionPeriod = $executionPeriod;
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
     * The date and time this task was created.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime
     */
    public function getAuthoredOn(): null|FHIRDateTime
    {
        return $this->authoredOn ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time this task was created.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime $authoredOn
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAuthoredOn(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $authoredOn,
                                  null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $authoredOn) {
            unset($this->authoredOn);
            return $this;
        }
        if (!($authoredOn instanceof FHIRDateTime)) {
            $authoredOn = new FHIRDateTime(value: $authoredOn);
        }
        if (null !== $valueXMLLocation) {
            $authoredOn->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $authoredOn->_getValueXMLLocation()) {
            $authoredOn->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->authoredOn = $authoredOn;
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
     * The date and time of last modification to this task.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime
     */
    public function getLastModified(): null|FHIRDateTime
    {
        return $this->lastModified ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time of last modification to this task.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDateTime $lastModified
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setLastModified(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $lastModified,
                                    null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $lastModified) {
            unset($this->lastModified);
            return $this;
        }
        if (!($lastModified instanceof FHIRDateTime)) {
            $lastModified = new FHIRDateTime(value: $lastModified);
        }
        if (null !== $valueXMLLocation) {
            $lastModified->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $lastModified->_getValueXMLLocation()) {
            $lastModified->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->lastModified = $lastModified;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The creator of the task.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getRequester(): null|FHIRReference
    {
        return $this->requester ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The creator of the task.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $requester
     * @return static
     */
    public function setRequester(null|FHIRReference $requester): self
    {
        if (null === $requester) {
            unset($this->requester);
            return $this;
        }
        $this->requester = $requester;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of participant that should perform the task.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getPerformerType(): array
    {
        return $this->performerType ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getPerformerTypeIterator(): iterable
    {
        if (!isset($this->performerType) || [] === $this->performerType) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->performerType);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of participant that should perform the task.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $performerType
     * @return static
     */
    public function addPerformerType(FHIRCodeableConcept $performerType): self
    {
        if (!isset($this->performerType)) {
            $this->performerType = [];
        }
        $this->performerType[] = $performerType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of participant that should perform the task.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept ...$performerType
     * @return static
     */
    public function setPerformerType(FHIRCodeableConcept ...$performerType): self
    {
        $this->performerType = $performerType;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual organization or Device currently responsible for task execution.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getOwner(): null|FHIRReference
    {
        return $this->owner ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual organization or Device currently responsible for task execution.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $owner
     * @return static
     */
    public function setOwner(null|FHIRReference $owner): self
    {
        if (null === $owner) {
            unset($this->owner);
            return $this;
        }
        $this->owner = $owner;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Principal physical location where the this task is performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getLocation(): null|FHIRReference
    {
        return $this->location ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Principal physical location where the this task is performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $location
     * @return static
     */
    public function setLocation(null|FHIRReference $location): self
    {
        if (null === $location) {
            unset($this->location);
            return $this;
        }
        $this->location = $location;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description or code indicating why this task needs to be performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCode(): null|FHIRCodeableConcept
    {
        return $this->reasonCode ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description or code indicating why this task needs to be performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return static
     */
    public function setReasonCode(null|FHIRCodeableConcept $reasonCode): self
    {
        if (null === $reasonCode) {
            unset($this->reasonCode);
            return $this;
        }
        $this->reasonCode = $reasonCode;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A resource reference indicating why this task needs to be performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getReasonReference(): null|FHIRReference
    {
        return $this->reasonReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A resource reference indicating why this task needs to be performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $reasonReference
     * @return static
     */
    public function setReasonReference(null|FHIRReference $reasonReference): self
    {
        if (null === $reasonReference) {
            unset($this->reasonReference);
            return $this;
        }
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Insurance plans, coverage extensions, pre-authorizations and/or
     * pre-determinations that may be relevant to the Task.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[]
     */
    public function getInsurance(): array
    {
        return $this->insurance ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference>
     */
    public function getInsuranceIterator(): iterable
    {
        if (!isset($this->insurance) || [] === $this->insurance) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->insurance);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Insurance plans, coverage extensions, pre-authorizations and/or
     * pre-determinations that may be relevant to the Task.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $insurance
     * @return static
     */
    public function addInsurance(FHIRReference $insurance): self
    {
        if (!isset($this->insurance)) {
            $this->insurance = [];
        }
        $this->insurance[] = $insurance;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Insurance plans, coverage extensions, pre-authorizations and/or
     * pre-determinations that may be relevant to the Task.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference ...$insurance
     * @return static
     */
    public function setInsurance(FHIRReference ...$insurance): self
    {
        $this->insurance = $insurance;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Free-text information captured about the task as it progresses.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAnnotation[]
     */
    public function getNote(): array
    {
        return $this->note ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAnnotation>
     */
    public function getNoteIterator(): iterable
    {
        if (!isset($this->note) || [] === $this->note) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->note);
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Free-text information captured about the task as it progresses.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAnnotation $note
     * @return static
     */
    public function addNote(FHIRAnnotation $note): self
    {
        if (!isset($this->note)) {
            $this->note = [];
        }
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Free-text information captured about the task as it progresses.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAnnotation ...$note
     * @return static
     */
    public function setNote(FHIRAnnotation ...$note): self
    {
        $this->note = $note;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Links to Provenance records for past versions of this Task that identify key
     * state transitions or updates that are likely to be relevant to a user looking at
     * the current version of the task.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[]
     */
    public function getRelevantHistory(): array
    {
        return $this->relevantHistory ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference>
     */
    public function getRelevantHistoryIterator(): iterable
    {
        if (!isset($this->relevantHistory) || [] === $this->relevantHistory) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->relevantHistory);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Links to Provenance records for past versions of this Task that identify key
     * state transitions or updates that are likely to be relevant to a user looking at
     * the current version of the task.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $relevantHistory
     * @return static
     */
    public function addRelevantHistory(FHIRReference $relevantHistory): self
    {
        if (!isset($this->relevantHistory)) {
            $this->relevantHistory = [];
        }
        $this->relevantHistory[] = $relevantHistory;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Links to Provenance records for past versions of this Task that identify key
     * state transitions or updates that are likely to be relevant to a user looking at
     * the current version of the task.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference ...$relevantHistory
     * @return static
     */
    public function setRelevantHistory(FHIRReference ...$relevantHistory): self
    {
        $this->relevantHistory = $relevantHistory;
        return $this;
    }

    /**
     * A task to be performed.
     *
     * If the Task.focus is a request resource and the task is seeking fulfillment
     * (i.e. is asking for the request to be actioned), this element identifies any
     * limitations on what parts of the referenced request should be actioned.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskRestriction
     */
    public function getRestriction(): null|FHIRTaskRestriction
    {
        return $this->restriction ?? null;
    }

    /**
     * A task to be performed.
     *
     * If the Task.focus is a request resource and the task is seeking fulfillment
     * (i.e. is asking for the request to be actioned), this element identifies any
     * limitations on what parts of the referenced request should be actioned.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskRestriction $restriction
     * @return static
     */
    public function setRestriction(null|FHIRTaskRestriction $restriction): self
    {
        if (null === $restriction) {
            unset($this->restriction);
            return $this;
        }
        $this->restriction = $restriction;
        return $this;
    }

    /**
     * A task to be performed.
     *
     * Additional information that may be needed in the execution of the task.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskInput[]
     */
    public function getInput(): array
    {
        return $this->input ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskInput>
     */
    public function getInputIterator(): iterable
    {
        if (!isset($this->input) || [] === $this->input) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->input);
    }

    /**
     * A task to be performed.
     *
     * Additional information that may be needed in the execution of the task.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskInput $input
     * @return static
     */
    public function addInput(FHIRTaskInput $input): self
    {
        if (!isset($this->input)) {
            $this->input = [];
        }
        $this->input[] = $input;
        return $this;
    }

    /**
     * A task to be performed.
     *
     * Additional information that may be needed in the execution of the task.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskInput ...$input
     * @return static
     */
    public function setInput(FHIRTaskInput ...$input): self
    {
        $this->input = $input;
        return $this;
    }

    /**
     * A task to be performed.
     *
     * Outputs produced by the Task.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskOutput[]
     */
    public function getOutput(): array
    {
        return $this->output ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskOutput>
     */
    public function getOutputIterator(): iterable
    {
        if (!isset($this->output) || [] === $this->output) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->output);
    }

    /**
     * A task to be performed.
     *
     * Outputs produced by the Task.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskOutput $output
     * @return static
     */
    public function addOutput(FHIRTaskOutput $output): self
    {
        if (!isset($this->output)) {
            $this->output = [];
        }
        $this->output[] = $output;
        return $this;
    }

    /**
     * A task to be performed.
     *
     * Outputs produced by the Task.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskOutput ...$output
     * @return static
     */
    public function setOutput(FHIRTaskOutput ...$output): self
    {
        $this->output = $output;
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
        return self::_DEFAULT_VALIDATION_RULES;
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
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIntent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INTENT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSTANTIATES_CANONICAL])) {
            $v = $this->getInstantiatesCanonical();
            foreach($validationRules[self::FIELD_INSTANTIATES_CANONICAL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INSTANTIATES_CANONICAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSTANTIATES_CANONICAL])) {
                        $errs[self::FIELD_INSTANTIATES_CANONICAL] = [];
                    }
                    $errs[self::FIELD_INSTANTIATES_CANONICAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSTANTIATES_URI])) {
            $v = $this->getInstantiatesUri();
            foreach($validationRules[self::FIELD_INSTANTIATES_URI] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INSTANTIATES_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSTANTIATES_URI])) {
                        $errs[self::FIELD_INSTANTIATES_URI] = [];
                    }
                    $errs[self::FIELD_INSTANTIATES_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BASED_ON])) {
            $v = $this->getBasedOn();
            foreach($validationRules[self::FIELD_BASED_ON] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BASED_ON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASED_ON])) {
                        $errs[self::FIELD_BASED_ON] = [];
                    }
                    $errs[self::FIELD_BASED_ON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GROUP_IDENTIFIER])) {
            $v = $this->getGroupIdentifier();
            foreach($validationRules[self::FIELD_GROUP_IDENTIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_GROUP_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GROUP_IDENTIFIER])) {
                        $errs[self::FIELD_GROUP_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_GROUP_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PART_OF])) {
            $v = $this->getPartOf();
            foreach($validationRules[self::FIELD_PART_OF] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PART_OF, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PART_OF])) {
                        $errs[self::FIELD_PART_OF] = [];
                    }
                    $errs[self::FIELD_PART_OF][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS_REASON])) {
            $v = $this->getStatusReason();
            foreach($validationRules[self::FIELD_STATUS_REASON] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STATUS_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS_REASON])) {
                        $errs[self::FIELD_STATUS_REASON] = [];
                    }
                    $errs[self::FIELD_STATUS_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BUSINESS_STATUS])) {
            $v = $this->getBusinessStatus();
            foreach($validationRules[self::FIELD_BUSINESS_STATUS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BUSINESS_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BUSINESS_STATUS])) {
                        $errs[self::FIELD_BUSINESS_STATUS] = [];
                    }
                    $errs[self::FIELD_BUSINESS_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INTENT])) {
            $v = $this->getIntent();
            foreach($validationRules[self::FIELD_INTENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INTENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTENT])) {
                        $errs[self::FIELD_INTENT] = [];
                    }
                    $errs[self::FIELD_INTENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRIORITY])) {
            $v = $this->getPriority();
            foreach($validationRules[self::FIELD_PRIORITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRIORITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRIORITY])) {
                        $errs[self::FIELD_PRIORITY] = [];
                    }
                    $errs[self::FIELD_PRIORITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
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
        if (isset($validationRules[self::FIELD_FOCUS])) {
            $v = $this->getFocus();
            foreach($validationRules[self::FIELD_FOCUS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FOCUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FOCUS])) {
                        $errs[self::FIELD_FOCUS] = [];
                    }
                    $errs[self::FIELD_FOCUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FOR])) {
            $v = $this->getFor();
            foreach($validationRules[self::FIELD_FOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FOR])) {
                        $errs[self::FIELD_FOR] = [];
                    }
                    $errs[self::FIELD_FOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENCOUNTER])) {
            $v = $this->getEncounter();
            foreach($validationRules[self::FIELD_ENCOUNTER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENCOUNTER])) {
                        $errs[self::FIELD_ENCOUNTER] = [];
                    }
                    $errs[self::FIELD_ENCOUNTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXECUTION_PERIOD])) {
            $v = $this->getExecutionPeriod();
            foreach($validationRules[self::FIELD_EXECUTION_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXECUTION_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXECUTION_PERIOD])) {
                        $errs[self::FIELD_EXECUTION_PERIOD] = [];
                    }
                    $errs[self::FIELD_EXECUTION_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AUTHORED_ON])) {
            $v = $this->getAuthoredOn();
            foreach($validationRules[self::FIELD_AUTHORED_ON] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AUTHORED_ON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHORED_ON])) {
                        $errs[self::FIELD_AUTHORED_ON] = [];
                    }
                    $errs[self::FIELD_AUTHORED_ON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LAST_MODIFIED])) {
            $v = $this->getLastModified();
            foreach($validationRules[self::FIELD_LAST_MODIFIED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LAST_MODIFIED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LAST_MODIFIED])) {
                        $errs[self::FIELD_LAST_MODIFIED] = [];
                    }
                    $errs[self::FIELD_LAST_MODIFIED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUESTER])) {
            $v = $this->getRequester();
            foreach($validationRules[self::FIELD_REQUESTER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REQUESTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUESTER])) {
                        $errs[self::FIELD_REQUESTER] = [];
                    }
                    $errs[self::FIELD_REQUESTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMER_TYPE])) {
            $v = $this->getPerformerType();
            foreach($validationRules[self::FIELD_PERFORMER_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PERFORMER_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMER_TYPE])) {
                        $errs[self::FIELD_PERFORMER_TYPE] = [];
                    }
                    $errs[self::FIELD_PERFORMER_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OWNER])) {
            $v = $this->getOwner();
            foreach($validationRules[self::FIELD_OWNER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OWNER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OWNER])) {
                        $errs[self::FIELD_OWNER] = [];
                    }
                    $errs[self::FIELD_OWNER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCATION])) {
            $v = $this->getLocation();
            foreach($validationRules[self::FIELD_LOCATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION])) {
                        $errs[self::FIELD_LOCATION] = [];
                    }
                    $errs[self::FIELD_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_CODE])) {
            $v = $this->getReasonCode();
            foreach($validationRules[self::FIELD_REASON_CODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REASON_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_CODE])) {
                        $errs[self::FIELD_REASON_CODE] = [];
                    }
                    $errs[self::FIELD_REASON_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_REFERENCE])) {
            $v = $this->getReasonReference();
            foreach($validationRules[self::FIELD_REASON_REFERENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REASON_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_REFERENCE])) {
                        $errs[self::FIELD_REASON_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REASON_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSURANCE])) {
            $v = $this->getInsurance();
            foreach($validationRules[self::FIELD_INSURANCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INSURANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSURANCE])) {
                        $errs[self::FIELD_INSURANCE] = [];
                    }
                    $errs[self::FIELD_INSURANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELEVANT_HISTORY])) {
            $v = $this->getRelevantHistory();
            foreach($validationRules[self::FIELD_RELEVANT_HISTORY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RELEVANT_HISTORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELEVANT_HISTORY])) {
                        $errs[self::FIELD_RELEVANT_HISTORY] = [];
                    }
                    $errs[self::FIELD_RELEVANT_HISTORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESTRICTION])) {
            $v = $this->getRestriction();
            foreach($validationRules[self::FIELD_RESTRICTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RESTRICTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESTRICTION])) {
                        $errs[self::FIELD_RESTRICTION] = [];
                    }
                    $errs[self::FIELD_RESTRICTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INPUT])) {
            $v = $this->getInput();
            foreach($validationRules[self::FIELD_INPUT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INPUT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INPUT])) {
                        $errs[self::FIELD_INPUT] = [];
                    }
                    $errs[self::FIELD_INPUT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OUTPUT])) {
            $v = $this->getOutput();
            foreach($validationRules[self::FIELD_OUTPUT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OUTPUT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OUTPUT])) {
                        $errs[self::FIELD_OUTPUT] = [];
                    }
                    $errs[self::FIELD_OUTPUT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRTask $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRTask
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRTask)) {
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
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_ID === $childName) {
                $v = new FHIRId(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setId(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_META === $childName) {
                $v = new FHIRMeta();
                $type->setMeta(FHIRMeta::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $childName) {
                $v = new FHIRUri(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LANGUAGE === $childName) {
                $v = new FHIRCode(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setLanguage(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TEXT === $childName) {
                $v = new FHIRNarrative();
                $type->setText(FHIRNarrative::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($nn);
                    $type->addContained($cn::xmlUnserialize($nn, null, $config));
                }
            } else if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_INSTANTIATES_CANONICAL === $childName) {
                $v = new FHIRCanonical(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setInstantiatesCanonical(FHIRCanonical::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_INSTANTIATES_URI === $childName) {
                $v = new FHIRUri(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setInstantiatesUri(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_BASED_ON === $childName) {
                $v = new FHIRReference();
                $type->addBasedOn(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_GROUP_IDENTIFIER === $childName) {
                $v = new FHIRIdentifier();
                $type->setGroupIdentifier(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PART_OF === $childName) {
                $v = new FHIRReference();
                $type->addPartOf(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STATUS === $childName) {
                $v = new FHIRTaskStatus(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setStatus(FHIRTaskStatus::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STATUS_REASON === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setStatusReason(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_BUSINESS_STATUS === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setBusinessStatus(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_INTENT === $childName) {
                $v = new FHIRTaskIntent(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setIntent(FHIRTaskIntent::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PRIORITY === $childName) {
                $v = new FHIRRequestPriority(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setPriority(FHIRRequestPriority::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CODE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DESCRIPTION === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDescription(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FOCUS === $childName) {
                $v = new FHIRReference();
                $type->setFocus(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FOR === $childName) {
                $v = new FHIRReference();
                $type->setFor(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ENCOUNTER === $childName) {
                $v = new FHIRReference();
                $type->setEncounter(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXECUTION_PERIOD === $childName) {
                $v = new FHIRPeriod();
                $type->setExecutionPeriod(FHIRPeriod::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_AUTHORED_ON === $childName) {
                $v = new FHIRDateTime(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setAuthoredOn(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LAST_MODIFIED === $childName) {
                $v = new FHIRDateTime(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setLastModified(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REQUESTER === $childName) {
                $v = new FHIRReference();
                $type->setRequester(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PERFORMER_TYPE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addPerformerType(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_OWNER === $childName) {
                $v = new FHIRReference();
                $type->setOwner(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LOCATION === $childName) {
                $v = new FHIRReference();
                $type->setLocation(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REASON_CODE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setReasonCode(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REASON_REFERENCE === $childName) {
                $v = new FHIRReference();
                $type->setReasonReference(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_INSURANCE === $childName) {
                $v = new FHIRReference();
                $type->addInsurance(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NOTE === $childName) {
                $v = new FHIRAnnotation();
                $type->addNote(FHIRAnnotation::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RELEVANT_HISTORY === $childName) {
                $v = new FHIRReference();
                $type->addRelevantHistory(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RESTRICTION === $childName) {
                $v = new FHIRTaskRestriction();
                $type->setRestriction(FHIRTaskRestriction::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_INPUT === $childName) {
                $v = new FHIRTaskInput();
                $type->addInput(FHIRTaskInput::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_OUTPUT === $childName) {
                $v = new FHIRTaskOutput();
                $type->addOutput(FHIRTaskOutput::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRId(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules(new FHIRUri(
                    value: (string)$attributes[self::FIELD_IMPLICIT_RULES],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_LANGUAGE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage(new FHIRCode(
                    value: (string)$attributes[self::FIELD_LANGUAGE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_INSTANTIATES_CANONICAL])) {
            $pt = $type->getInstantiatesCanonical();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_INSTANTIATES_CANONICAL]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setInstantiatesCanonical(new FHIRCanonical(
                    value: (string)$attributes[self::FIELD_INSTANTIATES_CANONICAL],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_INSTANTIATES_URI])) {
            $pt = $type->getInstantiatesUri();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_INSTANTIATES_URI]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setInstantiatesUri(new FHIRUri(
                    value: (string)$attributes[self::FIELD_INSTANTIATES_URI],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DESCRIPTION]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription(new FHIRString(
                    value: (string)$attributes[self::FIELD_DESCRIPTION],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_AUTHORED_ON])) {
            $pt = $type->getAuthoredOn();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_AUTHORED_ON]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAuthoredOn(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_AUTHORED_ON],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LAST_MODIFIED])) {
            $pt = $type->getLastModified();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_LAST_MODIFIED]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLastModified(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_LAST_MODIFIED],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
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
            $xw->openRootNode('Task', $this->_getSourceXMLNS());
        }
        if (isset($this->instantiatesCanonical) && $this->instantiatesCanonical->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_INSTANTIATES_CANONICAL, $this->instantiatesCanonical->getValue()?->_getFormattedValue());
        }
        if (isset($this->instantiatesUri) && $this->instantiatesUri->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_INSTANTIATES_URI, $this->instantiatesUri->getValue()?->_getFormattedValue());
        }
        if (isset($this->description) && $this->description->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->getValue()?->_getFormattedValue());
        }
        if (isset($this->authoredOn) && $this->authoredOn->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_AUTHORED_ON, $this->authoredOn->getValue()?->_getFormattedValue());
        }
        if (isset($this->lastModified) && $this->lastModified->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_LAST_MODIFIED, $this->lastModified->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->instantiatesCanonical) && $this->instantiatesCanonical->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_INSTANTIATES_CANONICAL);
            $this->instantiatesCanonical->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->instantiatesUri) && $this->instantiatesUri->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_INSTANTIATES_URI);
            $this->instantiatesUri->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->basedOn)) {
            foreach ($this->basedOn as $v) {
                $xw->startElement(self::FIELD_BASED_ON);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->groupIdentifier)) {
            $xw->startElement(self::FIELD_GROUP_IDENTIFIER);
            $this->groupIdentifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->partOf)) {
            foreach ($this->partOf as $v) {
                $xw->startElement(self::FIELD_PART_OF);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->status)) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->statusReason)) {
            $xw->startElement(self::FIELD_STATUS_REASON);
            $this->statusReason->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->businessStatus)) {
            $xw->startElement(self::FIELD_BUSINESS_STATUS);
            $this->businessStatus->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->intent)) {
            $xw->startElement(self::FIELD_INTENT);
            $this->intent->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->priority)) {
            $xw->startElement(self::FIELD_PRIORITY);
            $this->priority->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->code)) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->description) && $this->description->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->focus)) {
            $xw->startElement(self::FIELD_FOCUS);
            $this->focus->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->for)) {
            $xw->startElement(self::FIELD_FOR);
            $this->for->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->encounter)) {
            $xw->startElement(self::FIELD_ENCOUNTER);
            $this->encounter->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->executionPeriod)) {
            $xw->startElement(self::FIELD_EXECUTION_PERIOD);
            $this->executionPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->authoredOn) && $this->authoredOn->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_AUTHORED_ON);
            $this->authoredOn->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->lastModified) && $this->lastModified->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_LAST_MODIFIED);
            $this->lastModified->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->requester)) {
            $xw->startElement(self::FIELD_REQUESTER);
            $this->requester->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->performerType)) {
            foreach ($this->performerType as $v) {
                $xw->startElement(self::FIELD_PERFORMER_TYPE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->owner)) {
            $xw->startElement(self::FIELD_OWNER);
            $this->owner->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->location)) {
            $xw->startElement(self::FIELD_LOCATION);
            $this->location->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->reasonCode)) {
            $xw->startElement(self::FIELD_REASON_CODE);
            $this->reasonCode->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->reasonReference)) {
            $xw->startElement(self::FIELD_REASON_REFERENCE);
            $this->reasonReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->insurance)) {
            foreach ($this->insurance as $v) {
                $xw->startElement(self::FIELD_INSURANCE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->note)) {
            foreach ($this->note as $v) {
                $xw->startElement(self::FIELD_NOTE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->relevantHistory)) {
            foreach ($this->relevantHistory as $v) {
                $xw->startElement(self::FIELD_RELEVANT_HISTORY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->restriction)) {
            $xw->startElement(self::FIELD_RESTRICTION);
            $this->restriction->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->input)) {
            foreach ($this->input as $v) {
                $xw->startElement(self::FIELD_INPUT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->output)) {
            foreach ($this->output as $v) {
                $xw->startElement(self::FIELD_OUTPUT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRTask $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRTask
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRTask)) {
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
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_IDENTIFIER]) || array_key_exists(self::FIELD_IDENTIFIER, $json)) {
            if (is_array($json[self::FIELD_IDENTIFIER])) {
                foreach($json[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $type->addIdentifier($v);
                    } else {
                        $type->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($json[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $type->addIdentifier($json[self::FIELD_IDENTIFIER]);
            } else {
                $type->addIdentifier(new FHIRIdentifier($json[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($json[self::FIELD_INSTANTIATES_CANONICAL]) || isset($json[self::FIELD_INSTANTIATES_CANONICAL_EXT]) || array_key_exists(self::FIELD_INSTANTIATES_CANONICAL, $json) || array_key_exists(self::FIELD_INSTANTIATES_CANONICAL_EXT, $json)) {
            $value = $json[self::FIELD_INSTANTIATES_CANONICAL] ?? null;
            $ext = (isset($json[self::FIELD_INSTANTIATES_CANONICAL_EXT]) && is_array($json[self::FIELD_INSTANTIATES_CANONICAL_EXT])) ? $json[self::FIELD_INSTANTIATES_CANONICAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $type->setInstantiatesCanonical($value);
                } else if (is_array($value)) {
                    $type->setInstantiatesCanonical(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $type->setInstantiatesCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setInstantiatesCanonical(new FHIRCanonical($ext));
            } else {
                $type->setInstantiatesCanonical(new FHIRCanonical(null));
            }
        }
        if (isset($json[self::FIELD_INSTANTIATES_URI]) || isset($json[self::FIELD_INSTANTIATES_URI_EXT]) || array_key_exists(self::FIELD_INSTANTIATES_URI, $json) || array_key_exists(self::FIELD_INSTANTIATES_URI_EXT, $json)) {
            $value = $json[self::FIELD_INSTANTIATES_URI] ?? null;
            $ext = (isset($json[self::FIELD_INSTANTIATES_URI_EXT]) && is_array($json[self::FIELD_INSTANTIATES_URI_EXT])) ? $json[self::FIELD_INSTANTIATES_URI_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $type->setInstantiatesUri($value);
                } else if (is_array($value)) {
                    $type->setInstantiatesUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $type->setInstantiatesUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setInstantiatesUri(new FHIRUri($ext));
            } else {
                $type->setInstantiatesUri(new FHIRUri(null));
            }
        }
        if (isset($json[self::FIELD_BASED_ON]) || array_key_exists(self::FIELD_BASED_ON, $json)) {
            if (is_array($json[self::FIELD_BASED_ON])) {
                foreach($json[self::FIELD_BASED_ON] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addBasedOn($v);
                    } else {
                        $type->addBasedOn(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_BASED_ON] instanceof FHIRReference) {
                $type->addBasedOn($json[self::FIELD_BASED_ON]);
            } else {
                $type->addBasedOn(new FHIRReference($json[self::FIELD_BASED_ON]));
            }
        }
        if (isset($json[self::FIELD_GROUP_IDENTIFIER]) || array_key_exists(self::FIELD_GROUP_IDENTIFIER, $json)) {
            if ($json[self::FIELD_GROUP_IDENTIFIER] instanceof FHIRIdentifier) {
                $type->setGroupIdentifier($json[self::FIELD_GROUP_IDENTIFIER]);
            } else {
                $type->setGroupIdentifier(new FHIRIdentifier($json[self::FIELD_GROUP_IDENTIFIER]));
            }
        }
        if (isset($json[self::FIELD_PART_OF]) || array_key_exists(self::FIELD_PART_OF, $json)) {
            if (is_array($json[self::FIELD_PART_OF])) {
                foreach($json[self::FIELD_PART_OF] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addPartOf($v);
                    } else {
                        $type->addPartOf(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_PART_OF] instanceof FHIRReference) {
                $type->addPartOf($json[self::FIELD_PART_OF]);
            } else {
                $type->addPartOf(new FHIRReference($json[self::FIELD_PART_OF]));
            }
        }
        if (isset($json[self::FIELD_STATUS]) || isset($json[self::FIELD_STATUS_EXT]) || array_key_exists(self::FIELD_STATUS, $json) || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $ext = (isset($json[self::FIELD_STATUS_EXT]) && is_array($json[self::FIELD_STATUS_EXT])) ? $json[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRTaskStatus) {
                    $type->setStatus($value);
                } else if (is_array($value)) {
                    $type->setStatus(new FHIRTaskStatus(array_merge($ext, $value)));
                } else {
                    $type->setStatus(new FHIRTaskStatus([FHIRTaskStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setStatus(new FHIRTaskStatus($ext));
            } else {
                $type->setStatus(new FHIRTaskStatus(null));
            }
        }
        if (isset($json[self::FIELD_STATUS_REASON]) || array_key_exists(self::FIELD_STATUS_REASON, $json)) {
            if ($json[self::FIELD_STATUS_REASON] instanceof FHIRCodeableConcept) {
                $type->setStatusReason($json[self::FIELD_STATUS_REASON]);
            } else {
                $type->setStatusReason(new FHIRCodeableConcept($json[self::FIELD_STATUS_REASON]));
            }
        }
        if (isset($json[self::FIELD_BUSINESS_STATUS]) || array_key_exists(self::FIELD_BUSINESS_STATUS, $json)) {
            if ($json[self::FIELD_BUSINESS_STATUS] instanceof FHIRCodeableConcept) {
                $type->setBusinessStatus($json[self::FIELD_BUSINESS_STATUS]);
            } else {
                $type->setBusinessStatus(new FHIRCodeableConcept($json[self::FIELD_BUSINESS_STATUS]));
            }
        }
        if (isset($json[self::FIELD_INTENT]) || isset($json[self::FIELD_INTENT_EXT]) || array_key_exists(self::FIELD_INTENT, $json) || array_key_exists(self::FIELD_INTENT_EXT, $json)) {
            $value = $json[self::FIELD_INTENT] ?? null;
            $ext = (isset($json[self::FIELD_INTENT_EXT]) && is_array($json[self::FIELD_INTENT_EXT])) ? $json[self::FIELD_INTENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRTaskIntent) {
                    $type->setIntent($value);
                } else if (is_array($value)) {
                    $type->setIntent(new FHIRTaskIntent(array_merge($ext, $value)));
                } else {
                    $type->setIntent(new FHIRTaskIntent([FHIRTaskIntent::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setIntent(new FHIRTaskIntent($ext));
            } else {
                $type->setIntent(new FHIRTaskIntent(null));
            }
        }
        if (isset($json[self::FIELD_PRIORITY]) || isset($json[self::FIELD_PRIORITY_EXT]) || array_key_exists(self::FIELD_PRIORITY, $json) || array_key_exists(self::FIELD_PRIORITY_EXT, $json)) {
            $value = $json[self::FIELD_PRIORITY] ?? null;
            $ext = (isset($json[self::FIELD_PRIORITY_EXT]) && is_array($json[self::FIELD_PRIORITY_EXT])) ? $json[self::FIELD_PRIORITY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRRequestPriority) {
                    $type->setPriority($value);
                } else if (is_array($value)) {
                    $type->setPriority(new FHIRRequestPriority(array_merge($ext, $value)));
                } else {
                    $type->setPriority(new FHIRRequestPriority([FHIRRequestPriority::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPriority(new FHIRRequestPriority($ext));
            } else {
                $type->setPriority(new FHIRRequestPriority(null));
            }
        }
        if (isset($json[self::FIELD_CODE]) || array_key_exists(self::FIELD_CODE, $json)) {
            if ($json[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $type->setCode($json[self::FIELD_CODE]);
            } else {
                $type->setCode(new FHIRCodeableConcept($json[self::FIELD_CODE]));
            }
        }
        if (isset($json[self::FIELD_DESCRIPTION]) || isset($json[self::FIELD_DESCRIPTION_EXT]) || array_key_exists(self::FIELD_DESCRIPTION, $json) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $json)) {
            $value = $json[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($json[self::FIELD_DESCRIPTION_EXT]) && is_array($json[self::FIELD_DESCRIPTION_EXT])) ? $json[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setDescription($value);
                } else if (is_array($value)) {
                    $type->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDescription(new FHIRString($ext));
            } else {
                $type->setDescription(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_FOCUS]) || array_key_exists(self::FIELD_FOCUS, $json)) {
            if ($json[self::FIELD_FOCUS] instanceof FHIRReference) {
                $type->setFocus($json[self::FIELD_FOCUS]);
            } else {
                $type->setFocus(new FHIRReference($json[self::FIELD_FOCUS]));
            }
        }
        if (isset($json[self::FIELD_FOR]) || array_key_exists(self::FIELD_FOR, $json)) {
            if ($json[self::FIELD_FOR] instanceof FHIRReference) {
                $type->setFor($json[self::FIELD_FOR]);
            } else {
                $type->setFor(new FHIRReference($json[self::FIELD_FOR]));
            }
        }
        if (isset($json[self::FIELD_ENCOUNTER]) || array_key_exists(self::FIELD_ENCOUNTER, $json)) {
            if ($json[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $type->setEncounter($json[self::FIELD_ENCOUNTER]);
            } else {
                $type->setEncounter(new FHIRReference($json[self::FIELD_ENCOUNTER]));
            }
        }
        if (isset($json[self::FIELD_EXECUTION_PERIOD]) || array_key_exists(self::FIELD_EXECUTION_PERIOD, $json)) {
            if ($json[self::FIELD_EXECUTION_PERIOD] instanceof FHIRPeriod) {
                $type->setExecutionPeriod($json[self::FIELD_EXECUTION_PERIOD]);
            } else {
                $type->setExecutionPeriod(new FHIRPeriod($json[self::FIELD_EXECUTION_PERIOD]));
            }
        }
        if (isset($json[self::FIELD_AUTHORED_ON]) || isset($json[self::FIELD_AUTHORED_ON_EXT]) || array_key_exists(self::FIELD_AUTHORED_ON, $json) || array_key_exists(self::FIELD_AUTHORED_ON_EXT, $json)) {
            $value = $json[self::FIELD_AUTHORED_ON] ?? null;
            $ext = (isset($json[self::FIELD_AUTHORED_ON_EXT]) && is_array($json[self::FIELD_AUTHORED_ON_EXT])) ? $json[self::FIELD_AUTHORED_ON_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $type->setAuthoredOn($value);
                } else if (is_array($value)) {
                    $type->setAuthoredOn(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $type->setAuthoredOn(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setAuthoredOn(new FHIRDateTime($ext));
            } else {
                $type->setAuthoredOn(new FHIRDateTime(null));
            }
        }
        if (isset($json[self::FIELD_LAST_MODIFIED]) || isset($json[self::FIELD_LAST_MODIFIED_EXT]) || array_key_exists(self::FIELD_LAST_MODIFIED, $json) || array_key_exists(self::FIELD_LAST_MODIFIED_EXT, $json)) {
            $value = $json[self::FIELD_LAST_MODIFIED] ?? null;
            $ext = (isset($json[self::FIELD_LAST_MODIFIED_EXT]) && is_array($json[self::FIELD_LAST_MODIFIED_EXT])) ? $json[self::FIELD_LAST_MODIFIED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $type->setLastModified($value);
                } else if (is_array($value)) {
                    $type->setLastModified(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $type->setLastModified(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setLastModified(new FHIRDateTime($ext));
            } else {
                $type->setLastModified(new FHIRDateTime(null));
            }
        }
        if (isset($json[self::FIELD_REQUESTER]) || array_key_exists(self::FIELD_REQUESTER, $json)) {
            if ($json[self::FIELD_REQUESTER] instanceof FHIRReference) {
                $type->setRequester($json[self::FIELD_REQUESTER]);
            } else {
                $type->setRequester(new FHIRReference($json[self::FIELD_REQUESTER]));
            }
        }
        if (isset($json[self::FIELD_PERFORMER_TYPE]) || array_key_exists(self::FIELD_PERFORMER_TYPE, $json)) {
            if (is_array($json[self::FIELD_PERFORMER_TYPE])) {
                foreach($json[self::FIELD_PERFORMER_TYPE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addPerformerType($v);
                    } else {
                        $type->addPerformerType(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_PERFORMER_TYPE] instanceof FHIRCodeableConcept) {
                $type->addPerformerType($json[self::FIELD_PERFORMER_TYPE]);
            } else {
                $type->addPerformerType(new FHIRCodeableConcept($json[self::FIELD_PERFORMER_TYPE]));
            }
        }
        if (isset($json[self::FIELD_OWNER]) || array_key_exists(self::FIELD_OWNER, $json)) {
            if ($json[self::FIELD_OWNER] instanceof FHIRReference) {
                $type->setOwner($json[self::FIELD_OWNER]);
            } else {
                $type->setOwner(new FHIRReference($json[self::FIELD_OWNER]));
            }
        }
        if (isset($json[self::FIELD_LOCATION]) || array_key_exists(self::FIELD_LOCATION, $json)) {
            if ($json[self::FIELD_LOCATION] instanceof FHIRReference) {
                $type->setLocation($json[self::FIELD_LOCATION]);
            } else {
                $type->setLocation(new FHIRReference($json[self::FIELD_LOCATION]));
            }
        }
        if (isset($json[self::FIELD_REASON_CODE]) || array_key_exists(self::FIELD_REASON_CODE, $json)) {
            if ($json[self::FIELD_REASON_CODE] instanceof FHIRCodeableConcept) {
                $type->setReasonCode($json[self::FIELD_REASON_CODE]);
            } else {
                $type->setReasonCode(new FHIRCodeableConcept($json[self::FIELD_REASON_CODE]));
            }
        }
        if (isset($json[self::FIELD_REASON_REFERENCE]) || array_key_exists(self::FIELD_REASON_REFERENCE, $json)) {
            if ($json[self::FIELD_REASON_REFERENCE] instanceof FHIRReference) {
                $type->setReasonReference($json[self::FIELD_REASON_REFERENCE]);
            } else {
                $type->setReasonReference(new FHIRReference($json[self::FIELD_REASON_REFERENCE]));
            }
        }
        if (isset($json[self::FIELD_INSURANCE]) || array_key_exists(self::FIELD_INSURANCE, $json)) {
            if (is_array($json[self::FIELD_INSURANCE])) {
                foreach($json[self::FIELD_INSURANCE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addInsurance($v);
                    } else {
                        $type->addInsurance(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_INSURANCE] instanceof FHIRReference) {
                $type->addInsurance($json[self::FIELD_INSURANCE]);
            } else {
                $type->addInsurance(new FHIRReference($json[self::FIELD_INSURANCE]));
            }
        }
        if (isset($json[self::FIELD_NOTE]) || array_key_exists(self::FIELD_NOTE, $json)) {
            if (is_array($json[self::FIELD_NOTE])) {
                foreach($json[self::FIELD_NOTE] as $v) {
                    if ($v instanceof FHIRAnnotation) {
                        $type->addNote($v);
                    } else {
                        $type->addNote(new FHIRAnnotation($v));
                    }
                }
            } elseif ($json[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $type->addNote($json[self::FIELD_NOTE]);
            } else {
                $type->addNote(new FHIRAnnotation($json[self::FIELD_NOTE]));
            }
        }
        if (isset($json[self::FIELD_RELEVANT_HISTORY]) || array_key_exists(self::FIELD_RELEVANT_HISTORY, $json)) {
            if (is_array($json[self::FIELD_RELEVANT_HISTORY])) {
                foreach($json[self::FIELD_RELEVANT_HISTORY] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addRelevantHistory($v);
                    } else {
                        $type->addRelevantHistory(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_RELEVANT_HISTORY] instanceof FHIRReference) {
                $type->addRelevantHistory($json[self::FIELD_RELEVANT_HISTORY]);
            } else {
                $type->addRelevantHistory(new FHIRReference($json[self::FIELD_RELEVANT_HISTORY]));
            }
        }
        if (isset($json[self::FIELD_RESTRICTION]) || array_key_exists(self::FIELD_RESTRICTION, $json)) {
            if ($json[self::FIELD_RESTRICTION] instanceof FHIRTaskRestriction) {
                $type->setRestriction($json[self::FIELD_RESTRICTION]);
            } else {
                $type->setRestriction(new FHIRTaskRestriction($json[self::FIELD_RESTRICTION]));
            }
        }
        if (isset($json[self::FIELD_INPUT]) || array_key_exists(self::FIELD_INPUT, $json)) {
            if (is_array($json[self::FIELD_INPUT])) {
                foreach($json[self::FIELD_INPUT] as $v) {
                    if ($v instanceof FHIRTaskInput) {
                        $type->addInput($v);
                    } else {
                        $type->addInput(new FHIRTaskInput($v));
                    }
                }
            } elseif ($json[self::FIELD_INPUT] instanceof FHIRTaskInput) {
                $type->addInput($json[self::FIELD_INPUT]);
            } else {
                $type->addInput(new FHIRTaskInput($json[self::FIELD_INPUT]));
            }
        }
        if (isset($json[self::FIELD_OUTPUT]) || array_key_exists(self::FIELD_OUTPUT, $json)) {
            if (is_array($json[self::FIELD_OUTPUT])) {
                foreach($json[self::FIELD_OUTPUT] as $v) {
                    if ($v instanceof FHIRTaskOutput) {
                        $type->addOutput($v);
                    } else {
                        $type->addOutput(new FHIRTaskOutput($v));
                    }
                }
            } elseif ($json[self::FIELD_OUTPUT] instanceof FHIRTaskOutput) {
                $type->addOutput($json[self::FIELD_OUTPUT]);
            } else {
                $type->addOutput(new FHIRTaskOutput($json[self::FIELD_OUTPUT]));
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
        if (isset($this->identifier) && [] !== $this->identifier) {
            $out->identifier = $this->identifier;
        }
        if (isset($this->instantiatesCanonical)) {
            if (null !== ($val = $this->instantiatesCanonical->getValue())) {
                $out->instantiatesCanonical = $val;
            }
            $ext = $this->instantiatesCanonical->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_instantiatesCanonical = $ext;
            }
        }
        if (isset($this->instantiatesUri)) {
            if (null !== ($val = $this->instantiatesUri->getValue())) {
                $out->instantiatesUri = $val;
            }
            $ext = $this->instantiatesUri->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_instantiatesUri = $ext;
            }
        }
        if (isset($this->basedOn) && [] !== $this->basedOn) {
            $out->basedOn = $this->basedOn;
        }
        if (isset($this->groupIdentifier)) {
            $out->groupIdentifier = $this->groupIdentifier;
        }
        if (isset($this->partOf) && [] !== $this->partOf) {
            $out->partOf = $this->partOf;
        }
        if (isset($this->status)) {
            if (null !== ($val = $this->status->getValue())) {
                $out->status = $val;
            }
            $ext = $this->status->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_status = $ext;
            }
        }
        if (isset($this->statusReason)) {
            $out->statusReason = $this->statusReason;
        }
        if (isset($this->businessStatus)) {
            $out->businessStatus = $this->businessStatus;
        }
        if (isset($this->intent)) {
            if (null !== ($val = $this->intent->getValue())) {
                $out->intent = $val;
            }
            $ext = $this->intent->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_intent = $ext;
            }
        }
        if (isset($this->priority)) {
            if (null !== ($val = $this->priority->getValue())) {
                $out->priority = $val;
            }
            $ext = $this->priority->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_priority = $ext;
            }
        }
        if (isset($this->code)) {
            $out->code = $this->code;
        }
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
        if (isset($this->focus)) {
            $out->focus = $this->focus;
        }
        if (isset($this->for)) {
            $out->for = $this->for;
        }
        if (isset($this->encounter)) {
            $out->encounter = $this->encounter;
        }
        if (isset($this->executionPeriod)) {
            $out->executionPeriod = $this->executionPeriod;
        }
        if (isset($this->authoredOn)) {
            if (null !== ($val = $this->authoredOn->getValue())) {
                $out->authoredOn = $val;
            }
            $ext = $this->authoredOn->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_authoredOn = $ext;
            }
        }
        if (isset($this->lastModified)) {
            if (null !== ($val = $this->lastModified->getValue())) {
                $out->lastModified = $val;
            }
            $ext = $this->lastModified->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_lastModified = $ext;
            }
        }
        if (isset($this->requester)) {
            $out->requester = $this->requester;
        }
        if (isset($this->performerType) && [] !== $this->performerType) {
            $out->performerType = $this->performerType;
        }
        if (isset($this->owner)) {
            $out->owner = $this->owner;
        }
        if (isset($this->location)) {
            $out->location = $this->location;
        }
        if (isset($this->reasonCode)) {
            $out->reasonCode = $this->reasonCode;
        }
        if (isset($this->reasonReference)) {
            $out->reasonReference = $this->reasonReference;
        }
        if (isset($this->insurance) && [] !== $this->insurance) {
            $out->insurance = $this->insurance;
        }
        if (isset($this->note) && [] !== $this->note) {
            $out->note = $this->note;
        }
        if (isset($this->relevantHistory) && [] !== $this->relevantHistory) {
            $out->relevantHistory = $this->relevantHistory;
        }
        if (isset($this->restriction)) {
            $out->restriction = $this->restriction;
        }
        if (isset($this->input) && [] !== $this->input) {
            $out->input = $this->input;
        }
        if (isset($this->output) && [] !== $this->output) {
            $out->output = $this->output;
        }
        $out->resourceType = $this->_getResourceType();
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