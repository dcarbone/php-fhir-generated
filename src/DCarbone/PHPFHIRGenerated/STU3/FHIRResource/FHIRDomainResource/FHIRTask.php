<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 30th, 2024 22:23+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskInput;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskOutput;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskRequester;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskRestriction;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRequestIntent;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRequestPriority;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTaskStatus;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeMap;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter;

/**
 * A task to be performed.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRTask
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRTask extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TASK;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_DEFINITION_URI = 'definitionUri';
    const FIELD_DEFINITION_URI_EXT = '_definitionUri';
    const FIELD_DEFINITION_REFERENCE = 'definitionReference';
    const FIELD_BASED_ON = 'basedOn';
    const FIELD_GROUP_IDENTIFIER = 'groupIdentifier';
    const FIELD_PART_OF = 'partOf';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_STATUS_REASON = 'statusReason';
    const FIELD_BUSINESS_STATUS = 'businessStatus';
    const FIELD_INTENT = 'intent';
    const FIELD_INTENT_EXT = '_intent';
    const FIELD_PRIORITY = 'priority';
    const FIELD_PRIORITY_EXT = '_priority';
    const FIELD_CODE = 'code';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_FOCUS = 'focus';
    const FIELD_FOR = 'for';
    const FIELD_CONTEXT = 'context';
    const FIELD_EXECUTION_PERIOD = 'executionPeriod';
    const FIELD_AUTHORED_ON = 'authoredOn';
    const FIELD_AUTHORED_ON_EXT = '_authoredOn';
    const FIELD_LAST_MODIFIED = 'lastModified';
    const FIELD_LAST_MODIFIED_EXT = '_lastModified';
    const FIELD_REQUESTER = 'requester';
    const FIELD_PERFORMER_TYPE = 'performerType';
    const FIELD_OWNER = 'owner';
    const FIELD_REASON = 'reason';
    const FIELD_NOTE = 'note';
    const FIELD_RELEVANT_HISTORY = 'relevantHistory';
    const FIELD_RESTRICTION = 'restriction';
    const FIELD_INPUT = 'input';
    const FIELD_OUTPUT = 'output';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The business identifier for this task.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to a formal or informal definition of the task. For example, a
     * protocol, a step within a defined workflow definition, etc.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $definitionUri = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a formal or informal definition of the task. For example, a
     * protocol, a step within a defined workflow definition, etc.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $definitionReference = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * BasedOn refers to a higher-level authorization that triggered the creation of
     * the task. It references a "request" resource such as a ProcedureRequest,
     * MedicationRequest, ProcedureRequest, CarePlan, etc. which is distinct from the
     * "request" resource the task is seeking to fulfil. This latter resource is
     * referenced by FocusOn. For example, based on a ProcedureRequest (= BasedOn), a
     * task is created to fulfil a procedureRequest ( = FocusOn ) to collect a specimen
     * from a patient.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected null|array $basedOn = [];
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier that links together multiple tasks and other requests that were
     * created in the same context.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    protected null|FHIRIdentifier $groupIdentifier = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Task that this particular task is part of.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected null|array $partOf = [];
    /**
     * The current status of the task.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current status of the task.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTaskStatus
     */
    protected null|FHIRTaskStatus $status = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An explanation as to why this task is held, failed, was refused, etc.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $statusReason = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contains business-specific nuances of the business state.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $businessStatus = null;
    /**
     * The kind of procedure or diagnostic request
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the "level" of actionability associated with the Task. I.e. Is this a
     * proposed task, a planned task, an actionable task, etc.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRequestIntent
     */
    protected null|FHIRRequestIntent $intent = null;
    /**
     * Codes indicating the relative importance of a communication request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the Task should be addressed with respect to other
     * requests.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRequestPriority
     */
    protected null|FHIRRequestPriority $priority = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A name or code (or both) briefly describing what the task involves.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $code = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free-text description of what is to be performed.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $description = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request being actioned or the resource being manipulated by this task.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $focus = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity who benefits from the performance of the service specified in the
     * task (e.g., the patient).
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $for = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The healthcare event (e.g. a patient and healthcare provider interaction) during
     * which this task was created.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $context = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the time action was first taken against the task (start) and/or the
     * time final action was taken against the task prior to marking it as completed
     * (end).
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $executionPeriod = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time this task was created.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $authoredOn = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date and time of last modification to this task.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $lastModified = null;
    /**
     * A task to be performed.
     *
     * The creator of the task.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskRequester
     */
    protected null|FHIRTaskRequester $requester = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of participant that can execute the task.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $performerType = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual organization or Device currently responsible for task execution.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $owner = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description or code indicating why this task needs to be performed.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $reason = null;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Free-text information captured about the task as it progresses.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation[]
     */
    protected null|array $note = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Links to Provenance records for past versions of this Task that identify key
     * state transitions or updates that are likely to be relevant to a user looking at
     * the current version of the task.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected null|array $relevantHistory = [];
    /**
     * A task to be performed.
     *
     * If the Task.focus is a request resource and the task is seeking fulfillment (i.e
     * is asking for the request to be actioned), this element identifies any
     * limitations on what parts of the referenced request should be actioned.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskRestriction
     */
    protected null|FHIRTaskRestriction $restriction = null;
    /**
     * A task to be performed.
     *
     * Additional information that may be needed in the execution of the task.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskInput[]
     */
    protected null|array $input = [];
    /**
     * A task to be performed.
     *
     * Outputs produced by the Task.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskOutput[]
     */
    protected null|array $output = [];

    /**
     * Validation map for fields in type Task
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_INTENT => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_STATUS => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRTask Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_IDENTIFIER, $data)) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_DEFINITION_URI, $data) || array_key_exists(self::FIELD_DEFINITION_URI_EXT, $data)) {
            $value = $data[self::FIELD_DEFINITION_URI] ?? null;
            $ext = (isset($data[self::FIELD_DEFINITION_URI_EXT]) && is_array($data[self::FIELD_DEFINITION_URI_EXT])) ? $data[self::FIELD_DEFINITION_URI_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setDefinitionUri($value);
                } else if (is_array($value)) {
                    $this->setDefinitionUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setDefinitionUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefinitionUri(new FHIRUri($ext));
            } else {
                $this->setDefinitionUri(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFINITION_REFERENCE, $data)) {
            if ($data[self::FIELD_DEFINITION_REFERENCE] instanceof FHIRReference) {
                $this->setDefinitionReference($data[self::FIELD_DEFINITION_REFERENCE]);
            } else {
                $this->setDefinitionReference(new FHIRReference($data[self::FIELD_DEFINITION_REFERENCE]));
            }
        }
        if (array_key_exists(self::FIELD_BASED_ON, $data)) {
            if (is_array($data[self::FIELD_BASED_ON])) {
                foreach($data[self::FIELD_BASED_ON] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addBasedOn($v);
                    } else {
                        $this->addBasedOn(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_BASED_ON] instanceof FHIRReference) {
                $this->addBasedOn($data[self::FIELD_BASED_ON]);
            } else {
                $this->addBasedOn(new FHIRReference($data[self::FIELD_BASED_ON]));
            }
        }
        if (array_key_exists(self::FIELD_GROUP_IDENTIFIER, $data)) {
            if ($data[self::FIELD_GROUP_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setGroupIdentifier($data[self::FIELD_GROUP_IDENTIFIER]);
            } else {
                $this->setGroupIdentifier(new FHIRIdentifier($data[self::FIELD_GROUP_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_PART_OF, $data)) {
            if (is_array($data[self::FIELD_PART_OF])) {
                foreach($data[self::FIELD_PART_OF] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addPartOf($v);
                    } else {
                        $this->addPartOf(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_PART_OF] instanceof FHIRReference) {
                $this->addPartOf($data[self::FIELD_PART_OF]);
            } else {
                $this->addPartOf(new FHIRReference($data[self::FIELD_PART_OF]));
            }
        }
        if (array_key_exists(self::FIELD_STATUS, $data) || array_key_exists(self::FIELD_STATUS_EXT, $data)) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRTaskStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRTaskStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRTaskStatus([FHIRTaskStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRTaskStatus($ext));
            } else {
                $this->setStatus(new FHIRTaskStatus(null));
            }
        }
        if (array_key_exists(self::FIELD_STATUS_REASON, $data)) {
            if ($data[self::FIELD_STATUS_REASON] instanceof FHIRCodeableConcept) {
                $this->setStatusReason($data[self::FIELD_STATUS_REASON]);
            } else {
                $this->setStatusReason(new FHIRCodeableConcept($data[self::FIELD_STATUS_REASON]));
            }
        }
        if (array_key_exists(self::FIELD_BUSINESS_STATUS, $data)) {
            if ($data[self::FIELD_BUSINESS_STATUS] instanceof FHIRCodeableConcept) {
                $this->setBusinessStatus($data[self::FIELD_BUSINESS_STATUS]);
            } else {
                $this->setBusinessStatus(new FHIRCodeableConcept($data[self::FIELD_BUSINESS_STATUS]));
            }
        }
        if (array_key_exists(self::FIELD_INTENT, $data) || array_key_exists(self::FIELD_INTENT_EXT, $data)) {
            $value = $data[self::FIELD_INTENT] ?? null;
            $ext = (isset($data[self::FIELD_INTENT_EXT]) && is_array($data[self::FIELD_INTENT_EXT])) ? $data[self::FIELD_INTENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRRequestIntent) {
                    $this->setIntent($value);
                } else if (is_array($value)) {
                    $this->setIntent(new FHIRRequestIntent(array_merge($ext, $value)));
                } else {
                    $this->setIntent(new FHIRRequestIntent([FHIRRequestIntent::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setIntent(new FHIRRequestIntent($ext));
            } else {
                $this->setIntent(new FHIRRequestIntent(null));
            }
        }
        if (array_key_exists(self::FIELD_PRIORITY, $data) || array_key_exists(self::FIELD_PRIORITY_EXT, $data)) {
            $value = $data[self::FIELD_PRIORITY] ?? null;
            $ext = (isset($data[self::FIELD_PRIORITY_EXT]) && is_array($data[self::FIELD_PRIORITY_EXT])) ? $data[self::FIELD_PRIORITY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRRequestPriority) {
                    $this->setPriority($value);
                } else if (is_array($value)) {
                    $this->setPriority(new FHIRRequestPriority(array_merge($ext, $value)));
                } else {
                    $this->setPriority(new FHIRRequestPriority([FHIRRequestPriority::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPriority(new FHIRRequestPriority($ext));
            } else {
                $this->setPriority(new FHIRRequestPriority(null));
            }
        }
        if (array_key_exists(self::FIELD_CODE, $data)) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
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
        if (array_key_exists(self::FIELD_FOCUS, $data)) {
            if ($data[self::FIELD_FOCUS] instanceof FHIRReference) {
                $this->setFocus($data[self::FIELD_FOCUS]);
            } else {
                $this->setFocus(new FHIRReference($data[self::FIELD_FOCUS]));
            }
        }
        if (array_key_exists(self::FIELD_FOR, $data)) {
            if ($data[self::FIELD_FOR] instanceof FHIRReference) {
                $this->setFor($data[self::FIELD_FOR]);
            } else {
                $this->setFor(new FHIRReference($data[self::FIELD_FOR]));
            }
        }
        if (array_key_exists(self::FIELD_CONTEXT, $data)) {
            if ($data[self::FIELD_CONTEXT] instanceof FHIRReference) {
                $this->setContext($data[self::FIELD_CONTEXT]);
            } else {
                $this->setContext(new FHIRReference($data[self::FIELD_CONTEXT]));
            }
        }
        if (array_key_exists(self::FIELD_EXECUTION_PERIOD, $data)) {
            if ($data[self::FIELD_EXECUTION_PERIOD] instanceof FHIRPeriod) {
                $this->setExecutionPeriod($data[self::FIELD_EXECUTION_PERIOD]);
            } else {
                $this->setExecutionPeriod(new FHIRPeriod($data[self::FIELD_EXECUTION_PERIOD]));
            }
        }
        if (array_key_exists(self::FIELD_AUTHORED_ON, $data) || array_key_exists(self::FIELD_AUTHORED_ON_EXT, $data)) {
            $value = $data[self::FIELD_AUTHORED_ON] ?? null;
            $ext = (isset($data[self::FIELD_AUTHORED_ON_EXT]) && is_array($data[self::FIELD_AUTHORED_ON_EXT])) ? $data[self::FIELD_AUTHORED_ON_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setAuthoredOn($value);
                } else if (is_array($value)) {
                    $this->setAuthoredOn(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setAuthoredOn(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAuthoredOn(new FHIRDateTime($ext));
            } else {
                $this->setAuthoredOn(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_LAST_MODIFIED, $data) || array_key_exists(self::FIELD_LAST_MODIFIED_EXT, $data)) {
            $value = $data[self::FIELD_LAST_MODIFIED] ?? null;
            $ext = (isset($data[self::FIELD_LAST_MODIFIED_EXT]) && is_array($data[self::FIELD_LAST_MODIFIED_EXT])) ? $data[self::FIELD_LAST_MODIFIED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setLastModified($value);
                } else if (is_array($value)) {
                    $this->setLastModified(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setLastModified(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLastModified(new FHIRDateTime($ext));
            } else {
                $this->setLastModified(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_REQUESTER, $data)) {
            if ($data[self::FIELD_REQUESTER] instanceof FHIRTaskRequester) {
                $this->setRequester($data[self::FIELD_REQUESTER]);
            } else {
                $this->setRequester(new FHIRTaskRequester($data[self::FIELD_REQUESTER]));
            }
        }
        if (array_key_exists(self::FIELD_PERFORMER_TYPE, $data)) {
            if (is_array($data[self::FIELD_PERFORMER_TYPE])) {
                foreach($data[self::FIELD_PERFORMER_TYPE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addPerformerType($v);
                    } else {
                        $this->addPerformerType(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_PERFORMER_TYPE] instanceof FHIRCodeableConcept) {
                $this->addPerformerType($data[self::FIELD_PERFORMER_TYPE]);
            } else {
                $this->addPerformerType(new FHIRCodeableConcept($data[self::FIELD_PERFORMER_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_OWNER, $data)) {
            if ($data[self::FIELD_OWNER] instanceof FHIRReference) {
                $this->setOwner($data[self::FIELD_OWNER]);
            } else {
                $this->setOwner(new FHIRReference($data[self::FIELD_OWNER]));
            }
        }
        if (array_key_exists(self::FIELD_REASON, $data)) {
            if ($data[self::FIELD_REASON] instanceof FHIRCodeableConcept) {
                $this->setReason($data[self::FIELD_REASON]);
            } else {
                $this->setReason(new FHIRCodeableConcept($data[self::FIELD_REASON]));
            }
        }
        if (array_key_exists(self::FIELD_NOTE, $data)) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } elseif ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
            }
        }
        if (array_key_exists(self::FIELD_RELEVANT_HISTORY, $data)) {
            if (is_array($data[self::FIELD_RELEVANT_HISTORY])) {
                foreach($data[self::FIELD_RELEVANT_HISTORY] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addRelevantHistory($v);
                    } else {
                        $this->addRelevantHistory(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_RELEVANT_HISTORY] instanceof FHIRReference) {
                $this->addRelevantHistory($data[self::FIELD_RELEVANT_HISTORY]);
            } else {
                $this->addRelevantHistory(new FHIRReference($data[self::FIELD_RELEVANT_HISTORY]));
            }
        }
        if (array_key_exists(self::FIELD_RESTRICTION, $data)) {
            if ($data[self::FIELD_RESTRICTION] instanceof FHIRTaskRestriction) {
                $this->setRestriction($data[self::FIELD_RESTRICTION]);
            } else {
                $this->setRestriction(new FHIRTaskRestriction($data[self::FIELD_RESTRICTION]));
            }
        }
        if (array_key_exists(self::FIELD_INPUT, $data)) {
            if (is_array($data[self::FIELD_INPUT])) {
                foreach($data[self::FIELD_INPUT] as $v) {
                    if ($v instanceof FHIRTaskInput) {
                        $this->addInput($v);
                    } else {
                        $this->addInput(new FHIRTaskInput($v));
                    }
                }
            } elseif ($data[self::FIELD_INPUT] instanceof FHIRTaskInput) {
                $this->addInput($data[self::FIELD_INPUT]);
            } else {
                $this->addInput(new FHIRTaskInput($data[self::FIELD_INPUT]));
            }
        }
        if (array_key_exists(self::FIELD_OUTPUT, $data)) {
            if (is_array($data[self::FIELD_OUTPUT])) {
                foreach($data[self::FIELD_OUTPUT] as $v) {
                    if ($v instanceof FHIRTaskOutput) {
                        $this->addOutput($v);
                    } else {
                        $this->addOutput(new FHIRTaskOutput($v));
                    }
                }
            } elseif ($data[self::FIELD_OUTPUT] instanceof FHIRTaskOutput) {
                $this->addOutput($data[self::FIELD_OUTPUT]);
            } else {
                $this->addOutput(new FHIRTaskOutput($data[self::FIELD_OUTPUT]));
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
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The business identifier for this task.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): null|array
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The business identifier for this task.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(null|FHIRIdentifier $identifier = null): self
    {
        if (null === $identifier) {
            $identifier = new FHIRIdentifier();
        }
        $this->_trackValueAdded();
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The business identifier for this task.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        if ([] !== $this->identifier) {
            $this->_trackValuesRemoved(count($this->identifier));
            $this->identifier = [];
        }
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            $this->addIdentifier($v);
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to a formal or informal definition of the task. For example, a
     * protocol, a step within a defined workflow definition, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getDefinitionUri(): null|FHIRUri
    {
        return $this->definitionUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to a formal or informal definition of the task. For example, a
     * protocol, a step within a defined workflow definition, etc.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $definitionUri
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefinitionUri(null|string|FHIRUriPrimitive|FHIRUri $definitionUri = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $definitionUri && !($definitionUri instanceof FHIRUri)) {
            $definitionUri = new FHIRUri($definitionUri);
        }
        $this->_trackValueSet($this->definitionUri, $definitionUri);
        if (!isset($this->_xmlLocations[self::FIELD_DEFINITION_URI])) {
            $this->_xmlLocations[self::FIELD_DEFINITION_URI] = [];
        }
        $this->_xmlLocations[self::FIELD_DEFINITION_URI][0] = $xmlLocation;
        $this->definitionUri = $definitionUri;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a formal or informal definition of the task. For example, a
     * protocol, a step within a defined workflow definition, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
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
     * A reference to a formal or informal definition of the task. For example, a
     * protocol, a step within a defined workflow definition, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $definitionReference
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * BasedOn refers to a higher-level authorization that triggered the creation of
     * the task. It references a "request" resource such as a ProcedureRequest,
     * MedicationRequest, ProcedureRequest, CarePlan, etc. which is distinct from the
     * "request" resource the task is seeking to fulfil. This latter resource is
     * referenced by FocusOn. For example, based on a ProcedureRequest (= BasedOn), a
     * task is created to fulfil a procedureRequest ( = FocusOn ) to collect a specimen
     * from a patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getBasedOn(): null|array
    {
        return $this->basedOn;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * BasedOn refers to a higher-level authorization that triggered the creation of
     * the task. It references a "request" resource such as a ProcedureRequest,
     * MedicationRequest, ProcedureRequest, CarePlan, etc. which is distinct from the
     * "request" resource the task is seeking to fulfil. This latter resource is
     * referenced by FocusOn. For example, based on a ProcedureRequest (= BasedOn), a
     * task is created to fulfil a procedureRequest ( = FocusOn ) to collect a specimen
     * from a patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $basedOn
     * @return static
     */
    public function addBasedOn(null|FHIRReference $basedOn = null): self
    {
        if (null === $basedOn) {
            $basedOn = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * BasedOn refers to a higher-level authorization that triggered the creation of
     * the task. It references a "request" resource such as a ProcedureRequest,
     * MedicationRequest, ProcedureRequest, CarePlan, etc. which is distinct from the
     * "request" resource the task is seeking to fulfil. This latter resource is
     * referenced by FocusOn. For example, based on a ProcedureRequest (= BasedOn), a
     * task is created to fulfil a procedureRequest ( = FocusOn ) to collect a specimen
     * from a patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference ...$basedOn
     * @return static
     */
    public function setBasedOn(FHIRReference ...$basedOn): self
    {
        if ([] !== $this->basedOn) {
            $this->_trackValuesRemoved(count($this->basedOn));
            $this->basedOn = [];
        }
        if ([] === $basedOn) {
            return $this;
        }
        foreach($basedOn as $v) {
            $this->addBasedOn($v);
        }
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier that links together multiple tasks and other requests that were
     * created in the same context.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    public function getGroupIdentifier(): null|FHIRIdentifier
    {
        return $this->groupIdentifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier that links together multiple tasks and other requests that were
     * created in the same context.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $groupIdentifier
     * @return static
     */
    public function setGroupIdentifier(null|FHIRIdentifier $groupIdentifier = null): self
    {
        if (null === $groupIdentifier) {
            $groupIdentifier = new FHIRIdentifier();
        }
        $this->_trackValueSet($this->groupIdentifier, $groupIdentifier);
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getPartOf(): null|array
    {
        return $this->partOf;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Task that this particular task is part of.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $partOf
     * @return static
     */
    public function addPartOf(null|FHIRReference $partOf = null): self
    {
        if (null === $partOf) {
            $partOf = new FHIRReference();
        }
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference ...$partOf
     * @return static
     */
    public function setPartOf(FHIRReference ...$partOf): self
    {
        if ([] !== $this->partOf) {
            $this->_trackValuesRemoved(count($this->partOf));
            $this->partOf = [];
        }
        if ([] === $partOf) {
            return $this;
        }
        foreach($partOf as $v) {
            $this->addPartOf($v);
        }
        return $this;
    }

    /**
     * The current status of the task.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current status of the task.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTaskStatus
     */
    public function getStatus(): null|FHIRTaskStatus
    {
        return $this->status;
    }

    /**
     * The current status of the task.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current status of the task.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTaskStatus $status
     * @return static
     */
    public function setStatus(null|FHIRTaskStatus $status = null): self
    {
        if (null === $status) {
            $status = new FHIRTaskStatus();
        }
        $this->_trackValueSet($this->status, $status);
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getStatusReason(): null|FHIRCodeableConcept
    {
        return $this->statusReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An explanation as to why this task is held, failed, was refused, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $statusReason
     * @return static
     */
    public function setStatusReason(null|FHIRCodeableConcept $statusReason = null): self
    {
        if (null === $statusReason) {
            $statusReason = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->statusReason, $statusReason);
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getBusinessStatus(): null|FHIRCodeableConcept
    {
        return $this->businessStatus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contains business-specific nuances of the business state.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $businessStatus
     * @return static
     */
    public function setBusinessStatus(null|FHIRCodeableConcept $businessStatus = null): self
    {
        if (null === $businessStatus) {
            $businessStatus = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->businessStatus, $businessStatus);
        $this->businessStatus = $businessStatus;
        return $this;
    }

    /**
     * The kind of procedure or diagnostic request
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the "level" of actionability associated with the Task. I.e. Is this a
     * proposed task, a planned task, an actionable task, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRequestIntent
     */
    public function getIntent(): null|FHIRRequestIntent
    {
        return $this->intent;
    }

    /**
     * The kind of procedure or diagnostic request
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the "level" of actionability associated with the Task. I.e. Is this a
     * proposed task, a planned task, an actionable task, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRequestIntent $intent
     * @return static
     */
    public function setIntent(null|FHIRRequestIntent $intent = null): self
    {
        if (null === $intent) {
            $intent = new FHIRRequestIntent();
        }
        $this->_trackValueSet($this->intent, $intent);
        $this->intent = $intent;
        return $this;
    }

    /**
     * Codes indicating the relative importance of a communication request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the Task should be addressed with respect to other
     * requests.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRequestPriority
     */
    public function getPriority(): null|FHIRRequestPriority
    {
        return $this->priority;
    }

    /**
     * Codes indicating the relative importance of a communication request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the Task should be addressed with respect to other
     * requests.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRequestPriority $priority
     * @return static
     */
    public function setPriority(null|FHIRRequestPriority $priority = null): self
    {
        if (null === $priority) {
            $priority = new FHIRRequestPriority();
        }
        $this->_trackValueSet($this->priority, $priority);
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getCode(): null|FHIRCodeableConcept
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A name or code (or both) briefly describing what the task involves.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(null|FHIRCodeableConcept $code = null): self
    {
        if (null === $code) {
            $code = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->code, $code);
        $this->code = $code;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free-text description of what is to be performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free-text description of what is to be performed.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $description
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $description && !($description instanceof FHIRString)) {
            $description = new FHIRString($description);
        }
        $this->_trackValueSet($this->description, $description);
        if (!isset($this->_xmlLocations[self::FIELD_DESCRIPTION])) {
            $this->_xmlLocations[self::FIELD_DESCRIPTION] = [];
        }
        $this->_xmlLocations[self::FIELD_DESCRIPTION][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getFocus(): null|FHIRReference
    {
        return $this->focus;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request being actioned or the resource being manipulated by this task.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $focus
     * @return static
     */
    public function setFocus(null|FHIRReference $focus = null): self
    {
        if (null === $focus) {
            $focus = new FHIRReference();
        }
        $this->_trackValueSet($this->focus, $focus);
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getFor(): null|FHIRReference
    {
        return $this->for;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity who benefits from the performance of the service specified in the
     * task (e.g., the patient).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $for
     * @return static
     */
    public function setFor(null|FHIRReference $for = null): self
    {
        if (null === $for) {
            $for = new FHIRReference();
        }
        $this->_trackValueSet($this->for, $for);
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getContext(): null|FHIRReference
    {
        return $this->context;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The healthcare event (e.g. a patient and healthcare provider interaction) during
     * which this task was created.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $context
     * @return static
     */
    public function setContext(null|FHIRReference $context = null): self
    {
        if (null === $context) {
            $context = new FHIRReference();
        }
        $this->_trackValueSet($this->context, $context);
        $this->context = $context;
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    public function getExecutionPeriod(): null|FHIRPeriod
    {
        return $this->executionPeriod;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $executionPeriod
     * @return static
     */
    public function setExecutionPeriod(null|FHIRPeriod $executionPeriod = null): self
    {
        if (null === $executionPeriod) {
            $executionPeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->executionPeriod, $executionPeriod);
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getAuthoredOn(): null|FHIRDateTime
    {
        return $this->authoredOn;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $authoredOn
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setAuthoredOn(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $authoredOn = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $authoredOn && !($authoredOn instanceof FHIRDateTime)) {
            $authoredOn = new FHIRDateTime($authoredOn);
        }
        $this->_trackValueSet($this->authoredOn, $authoredOn);
        if (!isset($this->_xmlLocations[self::FIELD_AUTHORED_ON])) {
            $this->_xmlLocations[self::FIELD_AUTHORED_ON] = [];
        }
        $this->_xmlLocations[self::FIELD_AUTHORED_ON][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getLastModified(): null|FHIRDateTime
    {
        return $this->lastModified;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $lastModified
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setLastModified(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $lastModified = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $lastModified && !($lastModified instanceof FHIRDateTime)) {
            $lastModified = new FHIRDateTime($lastModified);
        }
        $this->_trackValueSet($this->lastModified, $lastModified);
        if (!isset($this->_xmlLocations[self::FIELD_LAST_MODIFIED])) {
            $this->_xmlLocations[self::FIELD_LAST_MODIFIED] = [];
        }
        $this->_xmlLocations[self::FIELD_LAST_MODIFIED][0] = $xmlLocation;
        $this->lastModified = $lastModified;
        return $this;
    }

    /**
     * A task to be performed.
     *
     * The creator of the task.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskRequester
     */
    public function getRequester(): null|FHIRTaskRequester
    {
        return $this->requester;
    }

    /**
     * A task to be performed.
     *
     * The creator of the task.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskRequester $requester
     * @return static
     */
    public function setRequester(null|FHIRTaskRequester $requester = null): self
    {
        if (null === $requester) {
            $requester = new FHIRTaskRequester();
        }
        $this->_trackValueSet($this->requester, $requester);
        $this->requester = $requester;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of participant that can execute the task.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getPerformerType(): null|array
    {
        return $this->performerType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of participant that can execute the task.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $performerType
     * @return static
     */
    public function addPerformerType(null|FHIRCodeableConcept $performerType = null): self
    {
        if (null === $performerType) {
            $performerType = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->performerType[] = $performerType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of participant that can execute the task.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept ...$performerType
     * @return static
     */
    public function setPerformerType(FHIRCodeableConcept ...$performerType): self
    {
        if ([] !== $this->performerType) {
            $this->_trackValuesRemoved(count($this->performerType));
            $this->performerType = [];
        }
        if ([] === $performerType) {
            return $this;
        }
        foreach($performerType as $v) {
            $this->addPerformerType($v);
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual organization or Device currently responsible for task execution.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getOwner(): null|FHIRReference
    {
        return $this->owner;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual organization or Device currently responsible for task execution.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $owner
     * @return static
     */
    public function setOwner(null|FHIRReference $owner = null): self
    {
        if (null === $owner) {
            $owner = new FHIRReference();
        }
        $this->_trackValueSet($this->owner, $owner);
        $this->owner = $owner;
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getReason(): null|FHIRCodeableConcept
    {
        return $this->reason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description or code indicating why this task needs to be performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $reason
     * @return static
     */
    public function setReason(null|FHIRCodeableConcept $reason = null): self
    {
        if (null === $reason) {
            $reason = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->reason, $reason);
        $this->reason = $reason;
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation[]
     */
    public function getNote(): null|array
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Free-text information captured about the task as it progresses.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation $note
     * @return static
     */
    public function addNote(null|FHIRAnnotation $note = null): self
    {
        if (null === $note) {
            $note = new FHIRAnnotation();
        }
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation ...$note
     * @return static
     */
    public function setNote(FHIRAnnotation ...$note): self
    {
        if ([] !== $this->note) {
            $this->_trackValuesRemoved(count($this->note));
            $this->note = [];
        }
        if ([] === $note) {
            return $this;
        }
        foreach($note as $v) {
            $this->addNote($v);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getRelevantHistory(): null|array
    {
        return $this->relevantHistory;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $relevantHistory
     * @return static
     */
    public function addRelevantHistory(null|FHIRReference $relevantHistory = null): self
    {
        if (null === $relevantHistory) {
            $relevantHistory = new FHIRReference();
        }
        $this->_trackValueAdded();
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference ...$relevantHistory
     * @return static
     */
    public function setRelevantHistory(FHIRReference ...$relevantHistory): self
    {
        if ([] !== $this->relevantHistory) {
            $this->_trackValuesRemoved(count($this->relevantHistory));
            $this->relevantHistory = [];
        }
        if ([] === $relevantHistory) {
            return $this;
        }
        foreach($relevantHistory as $v) {
            $this->addRelevantHistory($v);
        }
        return $this;
    }

    /**
     * A task to be performed.
     *
     * If the Task.focus is a request resource and the task is seeking fulfillment (i.e
     * is asking for the request to be actioned), this element identifies any
     * limitations on what parts of the referenced request should be actioned.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskRestriction
     */
    public function getRestriction(): null|FHIRTaskRestriction
    {
        return $this->restriction;
    }

    /**
     * A task to be performed.
     *
     * If the Task.focus is a request resource and the task is seeking fulfillment (i.e
     * is asking for the request to be actioned), this element identifies any
     * limitations on what parts of the referenced request should be actioned.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskRestriction $restriction
     * @return static
     */
    public function setRestriction(null|FHIRTaskRestriction $restriction = null): self
    {
        if (null === $restriction) {
            $restriction = new FHIRTaskRestriction();
        }
        $this->_trackValueSet($this->restriction, $restriction);
        $this->restriction = $restriction;
        return $this;
    }

    /**
     * A task to be performed.
     *
     * Additional information that may be needed in the execution of the task.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskInput[]
     */
    public function getInput(): null|array
    {
        return $this->input;
    }

    /**
     * A task to be performed.
     *
     * Additional information that may be needed in the execution of the task.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskInput $input
     * @return static
     */
    public function addInput(null|FHIRTaskInput $input = null): self
    {
        if (null === $input) {
            $input = new FHIRTaskInput();
        }
        $this->_trackValueAdded();
        $this->input[] = $input;
        return $this;
    }

    /**
     * A task to be performed.
     *
     * Additional information that may be needed in the execution of the task.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskInput ...$input
     * @return static
     */
    public function setInput(FHIRTaskInput ...$input): self
    {
        if ([] !== $this->input) {
            $this->_trackValuesRemoved(count($this->input));
            $this->input = [];
        }
        if ([] === $input) {
            return $this;
        }
        foreach($input as $v) {
            $this->addInput($v);
        }
        return $this;
    }

    /**
     * A task to be performed.
     *
     * Outputs produced by the Task.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskOutput[]
     */
    public function getOutput(): null|array
    {
        return $this->output;
    }

    /**
     * A task to be performed.
     *
     * Outputs produced by the Task.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskOutput $output
     * @return static
     */
    public function addOutput(null|FHIRTaskOutput $output = null): self
    {
        if (null === $output) {
            $output = new FHIRTaskOutput();
        }
        $this->_trackValueAdded();
        $this->output[] = $output;
        return $this;
    }

    /**
     * A task to be performed.
     *
     * Outputs produced by the Task.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskOutput ...$output
     * @return static
     */
    public function setOutput(FHIRTaskOutput ...$output): self
    {
        if ([] !== $this->output) {
            $this->_trackValuesRemoved(count($this->output));
            $this->output = [];
        }
        if ([] === $output) {
            return $this;
        }
        foreach($output as $v) {
            $this->addOutput($v);
        }
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
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDefinitionUri())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION_URI] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefinitionReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION_REFERENCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getBasedOn())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_BASED_ON, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getGroupIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GROUP_IDENTIFIER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPartOf())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PART_OF, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatusReason())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS_REASON] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBusinessStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BUSINESS_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIntent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INTENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPriority())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRIORITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFocus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FOCUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getContext())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTEXT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExecutionPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXECUTION_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAuthoredOn())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AUTHORED_ON] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLastModified())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LAST_MODIFIED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequester())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUESTER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPerformerType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PERFORMER_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getOwner())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OWNER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReason())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REASON] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRelevantHistory())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RELEVANT_HISTORY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getRestriction())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESTRICTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getInput())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INPUT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getOutput())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_OUTPUT, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TASK, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION_URI])) {
            $v = $this->getDefinitionUri();
            foreach($validationRules[self::FIELD_DEFINITION_URI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TASK, self::FIELD_DEFINITION_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION_URI])) {
                        $errs[self::FIELD_DEFINITION_URI] = [];
                    }
                    $errs[self::FIELD_DEFINITION_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION_REFERENCE])) {
            $v = $this->getDefinitionReference();
            foreach($validationRules[self::FIELD_DEFINITION_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TASK, self::FIELD_DEFINITION_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION_REFERENCE])) {
                        $errs[self::FIELD_DEFINITION_REFERENCE] = [];
                    }
                    $errs[self::FIELD_DEFINITION_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BASED_ON])) {
            $v = $this->getBasedOn();
            foreach($validationRules[self::FIELD_BASED_ON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TASK, self::FIELD_BASED_ON, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TASK, self::FIELD_GROUP_IDENTIFIER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TASK, self::FIELD_PART_OF, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TASK, self::FIELD_STATUS, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TASK, self::FIELD_STATUS_REASON, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TASK, self::FIELD_BUSINESS_STATUS, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TASK, self::FIELD_INTENT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TASK, self::FIELD_PRIORITY, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TASK, self::FIELD_CODE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TASK, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TASK, self::FIELD_FOCUS, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TASK, self::FIELD_FOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FOR])) {
                        $errs[self::FIELD_FOR] = [];
                    }
                    $errs[self::FIELD_FOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTEXT])) {
            $v = $this->getContext();
            foreach($validationRules[self::FIELD_CONTEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TASK, self::FIELD_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTEXT])) {
                        $errs[self::FIELD_CONTEXT] = [];
                    }
                    $errs[self::FIELD_CONTEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXECUTION_PERIOD])) {
            $v = $this->getExecutionPeriod();
            foreach($validationRules[self::FIELD_EXECUTION_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TASK, self::FIELD_EXECUTION_PERIOD, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TASK, self::FIELD_AUTHORED_ON, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TASK, self::FIELD_LAST_MODIFIED, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TASK, self::FIELD_REQUESTER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TASK, self::FIELD_PERFORMER_TYPE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TASK, self::FIELD_OWNER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OWNER])) {
                        $errs[self::FIELD_OWNER] = [];
                    }
                    $errs[self::FIELD_OWNER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON])) {
            $v = $this->getReason();
            foreach($validationRules[self::FIELD_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TASK, self::FIELD_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON])) {
                        $errs[self::FIELD_REASON] = [];
                    }
                    $errs[self::FIELD_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TASK, self::FIELD_NOTE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TASK, self::FIELD_RELEVANT_HISTORY, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TASK, self::FIELD_RESTRICTION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TASK, self::FIELD_INPUT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TASK, self::FIELD_OUTPUT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRTask $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRTask
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
        } else if (!($type instanceof FHIRTask)) {
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
            if (self::FIELD_IDENTIFIER === $childName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFINITION_URI === $childName) {
                $type->setDefinitionUri(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFINITION_REFERENCE === $childName) {
                $type->setDefinitionReference(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_BASED_ON === $childName) {
                $type->addBasedOn(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_GROUP_IDENTIFIER === $childName) {
                $type->setGroupIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PART_OF === $childName) {
                $type->addPartOf(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STATUS === $childName) {
                $type->setStatus(FHIRTaskStatus::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STATUS_REASON === $childName) {
                $type->setStatusReason(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_BUSINESS_STATUS === $childName) {
                $type->setBusinessStatus(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_INTENT === $childName) {
                $type->setIntent(FHIRRequestIntent::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PRIORITY === $childName) {
                $type->setPriority(FHIRRequestPriority::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CODE === $childName) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DESCRIPTION === $childName) {
                $type->setDescription(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_FOCUS === $childName) {
                $type->setFocus(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FOR === $childName) {
                $type->setFor(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTEXT === $childName) {
                $type->setContext(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXECUTION_PERIOD === $childName) {
                $type->setExecutionPeriod(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_AUTHORED_ON === $childName) {
                $type->setAuthoredOn(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LAST_MODIFIED === $childName) {
                $type->setLastModified(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_REQUESTER === $childName) {
                $type->setRequester(FHIRTaskRequester::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PERFORMER_TYPE === $childName) {
                $type->addPerformerType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OWNER === $childName) {
                $type->setOwner(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REASON === $childName) {
                $type->setReason(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_NOTE === $childName) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RELEVANT_HISTORY === $childName) {
                $type->addRelevantHistory(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RESTRICTION === $childName) {
                $type->setRestriction(FHIRTaskRestriction::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_INPUT === $childName) {
                $type->addInput(FHIRTaskInput::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OUTPUT === $childName) {
                $type->addOutput(FHIRTaskOutput::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TEXT === $childName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn, $config));
                }
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_META === $childName) {
                $type->setMeta(FHIRMeta::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMPLICIT_RULES === $childName) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LANGUAGE === $childName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_DEFINITION_URI])) {
            $pt = $type->getDefinitionUri();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFINITION_URI], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefinitionUri((string)$attributes[self::FIELD_DEFINITION_URI], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_AUTHORED_ON])) {
            $pt = $type->getAuthoredOn();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_AUTHORED_ON], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setAuthoredOn((string)$attributes[self::FIELD_AUTHORED_ON], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LAST_MODIFIED])) {
            $pt = $type->getLastModified();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LAST_MODIFIED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLastModified((string)$attributes[self::FIELD_LAST_MODIFIED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'Task', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFINITION_URI] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefinitionUri())) {
            $xw->writeAttribute(self::FIELD_DEFINITION_URI, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_AUTHORED_ON] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getAuthoredOn())) {
            $xw->writeAttribute(self::FIELD_AUTHORED_ON, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_LAST_MODIFIED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getLastModified())) {
            $xw->writeAttribute(self::FIELD_LAST_MODIFIED, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        foreach ($this->getIdentifier() as $v) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DEFINITION_URI] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefinitionUri())) {
            $xw->startElement(self::FIELD_DEFINITION_URI);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefinitionReference())) {
            $xw->startElement(self::FIELD_DEFINITION_REFERENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getBasedOn() as $v) {
            $xw->startElement(self::FIELD_BASED_ON);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getGroupIdentifier())) {
            $xw->startElement(self::FIELD_GROUP_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getPartOf() as $v) {
            $xw->startElement(self::FIELD_PART_OF);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStatus())) {
            $xw->startElement(self::FIELD_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStatusReason())) {
            $xw->startElement(self::FIELD_STATUS_REASON);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getBusinessStatus())) {
            $xw->startElement(self::FIELD_BUSINESS_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getIntent())) {
            $xw->startElement(self::FIELD_INTENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPriority())) {
            $xw->startElement(self::FIELD_PRIORITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getCode())) {
            $xw->startElement(self::FIELD_CODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getFocus())) {
            $xw->startElement(self::FIELD_FOCUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getFor())) {
            $xw->startElement(self::FIELD_FOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getContext())) {
            $xw->startElement(self::FIELD_CONTEXT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getExecutionPeriod())) {
            $xw->startElement(self::FIELD_EXECUTION_PERIOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_AUTHORED_ON] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getAuthoredOn())) {
            $xw->startElement(self::FIELD_AUTHORED_ON);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_LAST_MODIFIED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getLastModified())) {
            $xw->startElement(self::FIELD_LAST_MODIFIED);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getRequester())) {
            $xw->startElement(self::FIELD_REQUESTER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getPerformerType() as $v) {
            $xw->startElement(self::FIELD_PERFORMER_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getOwner())) {
            $xw->startElement(self::FIELD_OWNER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getReason())) {
            $xw->startElement(self::FIELD_REASON);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getNote() as $v) {
            $xw->startElement(self::FIELD_NOTE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getRelevantHistory() as $v) {
            $xw->startElement(self::FIELD_RELEVANT_HISTORY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getRestriction())) {
            $xw->startElement(self::FIELD_RESTRICTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getInput() as $v) {
            $xw->startElement(self::FIELD_INPUT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getOutput() as $v) {
            $xw->startElement(self::FIELD_OUTPUT);
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
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getDefinitionUri())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFINITION_URI} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFINITION_URI_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefinitionReference())) {
            $out->{self::FIELD_DEFINITION_REFERENCE} = $v;
        }
        if ([] !== ($vs = $this->getBasedOn())) {
            $out->{self::FIELD_BASED_ON} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_BASED_ON}[] = $v;
            }
        }
        if (null !== ($v = $this->getGroupIdentifier())) {
            $out->{self::FIELD_GROUP_IDENTIFIER} = $v;
        }
        if ([] !== ($vs = $this->getPartOf())) {
            $out->{self::FIELD_PART_OF} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PART_OF}[] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRTaskStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getStatusReason())) {
            $out->{self::FIELD_STATUS_REASON} = $v;
        }
        if (null !== ($v = $this->getBusinessStatus())) {
            $out->{self::FIELD_BUSINESS_STATUS} = $v;
        }
        if (null !== ($v = $this->getIntent())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_INTENT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRRequestIntent::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_INTENT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPriority())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PRIORITY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRRequestPriority::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PRIORITY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCode())) {
            $out->{self::FIELD_CODE} = $v;
        }
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
        if (null !== ($v = $this->getFocus())) {
            $out->{self::FIELD_FOCUS} = $v;
        }
        if (null !== ($v = $this->getFor())) {
            $out->{self::FIELD_FOR} = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $out->{self::FIELD_CONTEXT} = $v;
        }
        if (null !== ($v = $this->getExecutionPeriod())) {
            $out->{self::FIELD_EXECUTION_PERIOD} = $v;
        }
        if (null !== ($v = $this->getAuthoredOn())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_AUTHORED_ON} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_AUTHORED_ON_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getLastModified())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LAST_MODIFIED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LAST_MODIFIED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRequester())) {
            $out->{self::FIELD_REQUESTER} = $v;
        }
        if ([] !== ($vs = $this->getPerformerType())) {
            $out->{self::FIELD_PERFORMER_TYPE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PERFORMER_TYPE}[] = $v;
            }
        }
        if (null !== ($v = $this->getOwner())) {
            $out->{self::FIELD_OWNER} = $v;
        }
        if (null !== ($v = $this->getReason())) {
            $out->{self::FIELD_REASON} = $v;
        }
        if ([] !== ($vs = $this->getNote())) {
            $out->{self::FIELD_NOTE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_NOTE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getRelevantHistory())) {
            $out->{self::FIELD_RELEVANT_HISTORY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_RELEVANT_HISTORY}[] = $v;
            }
        }
        if (null !== ($v = $this->getRestriction())) {
            $out->{self::FIELD_RESTRICTION} = $v;
        }
        if ([] !== ($vs = $this->getInput())) {
            $out->{self::FIELD_INPUT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_INPUT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getOutput())) {
            $out->{self::FIELD_OUTPUT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_OUTPUT}[] = $v;
            }
        }

        $out->{PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE} = $this->_getResourceType();

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