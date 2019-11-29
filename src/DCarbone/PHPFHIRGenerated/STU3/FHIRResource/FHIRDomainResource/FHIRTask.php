<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 29th, 2019 23:10+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskInput;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskOutput;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskRequester;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskRestriction;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRequestIntent;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRequestPriority;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTaskStatus;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

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
    const FIELD_AUTHORED_ON = 'authoredOn';
    const FIELD_AUTHORED_ON_EXT = '_authoredOn';
    const FIELD_BASED_ON = 'basedOn';
    const FIELD_BUSINESS_STATUS = 'businessStatus';
    const FIELD_CODE = 'code';
    const FIELD_CONTEXT = 'context';
    const FIELD_DEFINITION_REFERENCE = 'definitionReference';
    const FIELD_DEFINITION_URI = 'definitionUri';
    const FIELD_DEFINITION_URI_EXT = '_definitionUri';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_EXECUTION_PERIOD = 'executionPeriod';
    const FIELD_FOCUS = 'focus';
    const FIELD_FOR = 'for';
    const FIELD_GROUP_IDENTIFIER = 'groupIdentifier';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_INPUT = 'input';
    const FIELD_INTENT = 'intent';
    const FIELD_INTENT_EXT = '_intent';
    const FIELD_LAST_MODIFIED = 'lastModified';
    const FIELD_LAST_MODIFIED_EXT = '_lastModified';
    const FIELD_NOTE = 'note';
    const FIELD_OUTPUT = 'output';
    const FIELD_OWNER = 'owner';
    const FIELD_PART_OF = 'partOf';
    const FIELD_PERFORMER_TYPE = 'performerType';
    const FIELD_PRIORITY = 'priority';
    const FIELD_PRIORITY_EXT = '_priority';
    const FIELD_REASON = 'reason';
    const FIELD_RELEVANT_HISTORY = 'relevantHistory';
    const FIELD_REQUESTER = 'requester';
    const FIELD_RESTRICTION = 'restriction';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_STATUS_REASON = 'statusReason';

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected $authoredOn = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $basedOn = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contains business-specific nuances of the business state.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $businessStatus = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A name or code (or both) briefly describing what the task involves.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $code = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The healthcare event (e.g. a patient and healthcare provider interaction) during
     * which this task was created.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $context = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to a formal or informal definition of the task. For example, a
     * protocol, a step within a defined workflow definition, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $definitionReference = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to a formal or informal definition of the task. For example, a
     * protocol, a step within a defined workflow definition, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $definitionUri = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free-text description of what is to be performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $description = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the time action was first taken against the task (start) and/or the
     * time final action was taken against the task prior to marking it as completed
     * (end).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    protected $executionPeriod = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The request being actioned or the resource being manipulated by this task.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $focus = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity who benefits from the performance of the service specified in the
     * task (e.g., the patient).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $for = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier that links together multiple tasks and other requests that were
     * created in the same context.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    protected $groupIdentifier = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The business identifier for this task.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A task to be performed.
     *
     * Additional information that may be needed in the execution of the task.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskInput[]
     */
    protected $input = [];

    /**
     * The kind of procedure or diagnostic request
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the "level" of actionability associated with the Task. I.e. Is this a
     * proposed task, a planned task, an actionable task, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRequestIntent
     */
    protected $intent = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected $lastModified = null;

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Free-text information captured about the task as it progresses.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation[]
     */
    protected $note = [];

    /**
     * A task to be performed.
     *
     * Outputs produced by the Task.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskOutput[]
     */
    protected $output = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual organization or Device currently responsible for task execution.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $owner = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Task that this particular task is part of.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $partOf = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of participant that can execute the task.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected $performerType = [];

    /**
     * Codes indicating the relative importance of a communication request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the Task should be addressed with respect to other
     * requests.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRequestPriority
     */
    protected $priority = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A description or code indicating why this task needs to be performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $reason = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Links to Provenance records for past versions of this Task that identify key
     * state transitions or updates that are likely to be relevant to a user looking at
     * the current version of the task.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $relevantHistory = [];

    /**
     * A task to be performed.
     *
     * The creator of the task.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskRequester
     */
    protected $requester = null;

    /**
     * A task to be performed.
     *
     * If the Task.focus is a request resource and the task is seeking fulfillment (i.e
     * is asking for the request to be actioned), this element identifies any
     * limitations on what parts of the referenced request should be actioned.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskRestriction
     */
    protected $restriction = null;

    /**
     * The current status of the task.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current status of the task.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTaskStatus
     */
    protected $status = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An explanation as to why this task is held, failed, was refused, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $statusReason = null;

    /**
     * Validation map for fields in type Task
     * @var array
     */
    private static $_fieldValidation = [    ];

    /**
     * FHIRTask Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTask::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AUTHORED_ON])) {
            $ext = (isset($data[self::FIELD_AUTHORED_ON_EXT]) && is_array($data[self::FIELD_AUTHORED_ON_EXT]))
                ? $data[self::FIELD_AUTHORED_ON_EXT]
                : null;
            if ($data[self::FIELD_AUTHORED_ON] instanceof FHIRDateTime) {
                $this->setAuthoredOn($data[self::FIELD_AUTHORED_ON]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_AUTHORED_ON])) {
                    $this->setAuthoredOn(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_AUTHORED_ON]] + $ext));
                } else if (is_array($data[self::FIELD_AUTHORED_ON])) {
                    $this->setAuthoredOn(new FHIRDateTime(array_merge($ext, $data[self::FIELD_AUTHORED_ON])));
                }
            } else {
                $this->setAuthoredOn(new FHIRDateTime($data[self::FIELD_AUTHORED_ON]));
            }
        }
        if (isset($data[self::FIELD_BASED_ON])) {
            if (is_array($data[self::FIELD_BASED_ON])) {
                foreach($data[self::FIELD_BASED_ON] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addBasedOn($v);
                    } else {
                        $this->addBasedOn(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_BASED_ON] instanceof FHIRReference) {
                $this->addBasedOn($data[self::FIELD_BASED_ON]);
            } else {
                $this->addBasedOn(new FHIRReference($data[self::FIELD_BASED_ON]));
            }
        }
        if (isset($data[self::FIELD_BUSINESS_STATUS])) {
            if ($data[self::FIELD_BUSINESS_STATUS] instanceof FHIRCodeableConcept) {
                $this->setBusinessStatus($data[self::FIELD_BUSINESS_STATUS]);
            } else {
                $this->setBusinessStatus(new FHIRCodeableConcept($data[self::FIELD_BUSINESS_STATUS]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_CONTEXT])) {
            if ($data[self::FIELD_CONTEXT] instanceof FHIRReference) {
                $this->setContext($data[self::FIELD_CONTEXT]);
            } else {
                $this->setContext(new FHIRReference($data[self::FIELD_CONTEXT]));
            }
        }
        if (isset($data[self::FIELD_DEFINITION_REFERENCE])) {
            if ($data[self::FIELD_DEFINITION_REFERENCE] instanceof FHIRReference) {
                $this->setDefinitionReference($data[self::FIELD_DEFINITION_REFERENCE]);
            } else {
                $this->setDefinitionReference(new FHIRReference($data[self::FIELD_DEFINITION_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_DEFINITION_URI])) {
            $ext = (isset($data[self::FIELD_DEFINITION_URI_EXT]) && is_array($data[self::FIELD_DEFINITION_URI_EXT]))
                ? $data[self::FIELD_DEFINITION_URI_EXT]
                : null;
            if ($data[self::FIELD_DEFINITION_URI] instanceof FHIRUri) {
                $this->setDefinitionUri($data[self::FIELD_DEFINITION_URI]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEFINITION_URI])) {
                    $this->setDefinitionUri(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_DEFINITION_URI]] + $ext));
                } else if (is_array($data[self::FIELD_DEFINITION_URI])) {
                    $this->setDefinitionUri(new FHIRUri(array_merge($ext, $data[self::FIELD_DEFINITION_URI])));
                }
            } else {
                $this->setDefinitionUri(new FHIRUri($data[self::FIELD_DEFINITION_URI]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRString) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DESCRIPTION])) {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
                } else if (is_array($data[self::FIELD_DESCRIPTION])) {
                    $this->setDescription(new FHIRString(array_merge($ext, $data[self::FIELD_DESCRIPTION])));
                }
            } else {
                $this->setDescription(new FHIRString($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_EXECUTION_PERIOD])) {
            if ($data[self::FIELD_EXECUTION_PERIOD] instanceof FHIRPeriod) {
                $this->setExecutionPeriod($data[self::FIELD_EXECUTION_PERIOD]);
            } else {
                $this->setExecutionPeriod(new FHIRPeriod($data[self::FIELD_EXECUTION_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_FOCUS])) {
            if ($data[self::FIELD_FOCUS] instanceof FHIRReference) {
                $this->setFocus($data[self::FIELD_FOCUS]);
            } else {
                $this->setFocus(new FHIRReference($data[self::FIELD_FOCUS]));
            }
        }
        if (isset($data[self::FIELD_FOR])) {
            if ($data[self::FIELD_FOR] instanceof FHIRReference) {
                $this->setFor($data[self::FIELD_FOR]);
            } else {
                $this->setFor(new FHIRReference($data[self::FIELD_FOR]));
            }
        }
        if (isset($data[self::FIELD_GROUP_IDENTIFIER])) {
            if ($data[self::FIELD_GROUP_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setGroupIdentifier($data[self::FIELD_GROUP_IDENTIFIER]);
            } else {
                $this->setGroupIdentifier(new FHIRIdentifier($data[self::FIELD_GROUP_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } else if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_INPUT])) {
            if (is_array($data[self::FIELD_INPUT])) {
                foreach($data[self::FIELD_INPUT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRTaskInput) {
                        $this->addInput($v);
                    } else {
                        $this->addInput(new FHIRTaskInput($v));
                    }
                }
            } else if ($data[self::FIELD_INPUT] instanceof FHIRTaskInput) {
                $this->addInput($data[self::FIELD_INPUT]);
            } else {
                $this->addInput(new FHIRTaskInput($data[self::FIELD_INPUT]));
            }
        }
        if (isset($data[self::FIELD_INTENT])) {
            $ext = (isset($data[self::FIELD_INTENT_EXT]) && is_array($data[self::FIELD_INTENT_EXT]))
                ? $data[self::FIELD_INTENT_EXT]
                : null;
            if ($data[self::FIELD_INTENT] instanceof FHIRRequestIntent) {
                $this->setIntent($data[self::FIELD_INTENT]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_INTENT])) {
                    $this->setIntent(new FHIRRequestIntent([FHIRRequestIntent::FIELD_VALUE => $data[self::FIELD_INTENT]] + $ext));
                } else if (is_array($data[self::FIELD_INTENT])) {
                    $this->setIntent(new FHIRRequestIntent(array_merge($ext, $data[self::FIELD_INTENT])));
                }
            } else {
                $this->setIntent(new FHIRRequestIntent($data[self::FIELD_INTENT]));
            }
        }
        if (isset($data[self::FIELD_LAST_MODIFIED])) {
            $ext = (isset($data[self::FIELD_LAST_MODIFIED_EXT]) && is_array($data[self::FIELD_LAST_MODIFIED_EXT]))
                ? $data[self::FIELD_LAST_MODIFIED_EXT]
                : null;
            if ($data[self::FIELD_LAST_MODIFIED] instanceof FHIRDateTime) {
                $this->setLastModified($data[self::FIELD_LAST_MODIFIED]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_LAST_MODIFIED])) {
                    $this->setLastModified(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_LAST_MODIFIED]] + $ext));
                } else if (is_array($data[self::FIELD_LAST_MODIFIED])) {
                    $this->setLastModified(new FHIRDateTime(array_merge($ext, $data[self::FIELD_LAST_MODIFIED])));
                }
            } else {
                $this->setLastModified(new FHIRDateTime($data[self::FIELD_LAST_MODIFIED]));
            }
        }
        if (isset($data[self::FIELD_NOTE])) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } else if ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
            }
        }
        if (isset($data[self::FIELD_OUTPUT])) {
            if (is_array($data[self::FIELD_OUTPUT])) {
                foreach($data[self::FIELD_OUTPUT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRTaskOutput) {
                        $this->addOutput($v);
                    } else {
                        $this->addOutput(new FHIRTaskOutput($v));
                    }
                }
            } else if ($data[self::FIELD_OUTPUT] instanceof FHIRTaskOutput) {
                $this->addOutput($data[self::FIELD_OUTPUT]);
            } else {
                $this->addOutput(new FHIRTaskOutput($data[self::FIELD_OUTPUT]));
            }
        }
        if (isset($data[self::FIELD_OWNER])) {
            if ($data[self::FIELD_OWNER] instanceof FHIRReference) {
                $this->setOwner($data[self::FIELD_OWNER]);
            } else {
                $this->setOwner(new FHIRReference($data[self::FIELD_OWNER]));
            }
        }
        if (isset($data[self::FIELD_PART_OF])) {
            if (is_array($data[self::FIELD_PART_OF])) {
                foreach($data[self::FIELD_PART_OF] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addPartOf($v);
                    } else {
                        $this->addPartOf(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_PART_OF] instanceof FHIRReference) {
                $this->addPartOf($data[self::FIELD_PART_OF]);
            } else {
                $this->addPartOf(new FHIRReference($data[self::FIELD_PART_OF]));
            }
        }
        if (isset($data[self::FIELD_PERFORMER_TYPE])) {
            if (is_array($data[self::FIELD_PERFORMER_TYPE])) {
                foreach($data[self::FIELD_PERFORMER_TYPE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addPerformerType($v);
                    } else {
                        $this->addPerformerType(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_PERFORMER_TYPE] instanceof FHIRCodeableConcept) {
                $this->addPerformerType($data[self::FIELD_PERFORMER_TYPE]);
            } else {
                $this->addPerformerType(new FHIRCodeableConcept($data[self::FIELD_PERFORMER_TYPE]));
            }
        }
        if (isset($data[self::FIELD_PRIORITY])) {
            $ext = (isset($data[self::FIELD_PRIORITY_EXT]) && is_array($data[self::FIELD_PRIORITY_EXT]))
                ? $data[self::FIELD_PRIORITY_EXT]
                : null;
            if ($data[self::FIELD_PRIORITY] instanceof FHIRRequestPriority) {
                $this->setPriority($data[self::FIELD_PRIORITY]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PRIORITY])) {
                    $this->setPriority(new FHIRRequestPriority([FHIRRequestPriority::FIELD_VALUE => $data[self::FIELD_PRIORITY]] + $ext));
                } else if (is_array($data[self::FIELD_PRIORITY])) {
                    $this->setPriority(new FHIRRequestPriority(array_merge($ext, $data[self::FIELD_PRIORITY])));
                }
            } else {
                $this->setPriority(new FHIRRequestPriority($data[self::FIELD_PRIORITY]));
            }
        }
        if (isset($data[self::FIELD_REASON])) {
            if ($data[self::FIELD_REASON] instanceof FHIRCodeableConcept) {
                $this->setReason($data[self::FIELD_REASON]);
            } else {
                $this->setReason(new FHIRCodeableConcept($data[self::FIELD_REASON]));
            }
        }
        if (isset($data[self::FIELD_RELEVANT_HISTORY])) {
            if (is_array($data[self::FIELD_RELEVANT_HISTORY])) {
                foreach($data[self::FIELD_RELEVANT_HISTORY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addRelevantHistory($v);
                    } else {
                        $this->addRelevantHistory(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_RELEVANT_HISTORY] instanceof FHIRReference) {
                $this->addRelevantHistory($data[self::FIELD_RELEVANT_HISTORY]);
            } else {
                $this->addRelevantHistory(new FHIRReference($data[self::FIELD_RELEVANT_HISTORY]));
            }
        }
        if (isset($data[self::FIELD_REQUESTER])) {
            if ($data[self::FIELD_REQUESTER] instanceof FHIRTaskRequester) {
                $this->setRequester($data[self::FIELD_REQUESTER]);
            } else {
                $this->setRequester(new FHIRTaskRequester($data[self::FIELD_REQUESTER]));
            }
        }
        if (isset($data[self::FIELD_RESTRICTION])) {
            if ($data[self::FIELD_RESTRICTION] instanceof FHIRTaskRestriction) {
                $this->setRestriction($data[self::FIELD_RESTRICTION]);
            } else {
                $this->setRestriction(new FHIRTaskRestriction($data[self::FIELD_RESTRICTION]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT]))
                ? $data[self::FIELD_STATUS_EXT]
                : null;
            if ($data[self::FIELD_STATUS] instanceof FHIRTaskStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_STATUS])) {
                    $this->setStatus(new FHIRTaskStatus([FHIRTaskStatus::FIELD_VALUE => $data[self::FIELD_STATUS]] + $ext));
                } else if (is_array($data[self::FIELD_STATUS])) {
                    $this->setStatus(new FHIRTaskStatus(array_merge($ext, $data[self::FIELD_STATUS])));
                }
            } else {
                $this->setStatus(new FHIRTaskStatus($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_STATUS_REASON])) {
            if ($data[self::FIELD_STATUS_REASON] instanceof FHIRCodeableConcept) {
                $this->setStatusReason($data[self::FIELD_STATUS_REASON]);
            } else {
                $this->setStatusReason(new FHIRCodeableConcept($data[self::FIELD_STATUS_REASON]));
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
        return "<Task{$xmlns}></Task>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
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
    public function getAuthoredOn()
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $authoredOn
     * @return static
     */
    public function setAuthoredOn($authoredOn = null)
    {
        if (null === $authoredOn) {
            $this->authoredOn = null;
            return $this;
        }
        if ($authoredOn instanceof FHIRDateTime) {
            $this->authoredOn = $authoredOn;
            return $this;
        }
        $this->authoredOn = new FHIRDateTime($authoredOn);
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
    public function getBasedOn()
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
    public function addBasedOn(FHIRReference $basedOn = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $basedOn
     * @return static
     */
    public function setBasedOn(array $basedOn = [])
    {
        $this->basedOn = [];
        if ([] === $basedOn) {
            return $this;
        }
        foreach($basedOn as $v) {
            if ($v instanceof FHIRReference) {
                $this->addBasedOn($v);
            } else {
                $this->addBasedOn(new FHIRReference($v));
            }
        }
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
    public function getBusinessStatus()
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
    public function setBusinessStatus(FHIRCodeableConcept $businessStatus = null)
    {
        $this->businessStatus = $businessStatus;
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
    public function getCode()
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
    public function setCode(FHIRCodeableConcept $code = null)
    {
        $this->code = $code;
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
    public function getContext()
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
    public function setContext(FHIRReference $context = null)
    {
        $this->context = $context;
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
    public function getDefinitionReference()
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
    public function setDefinitionReference(FHIRReference $definitionReference = null)
    {
        $this->definitionReference = $definitionReference;
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
    public function getDefinitionUri()
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $definitionUri
     * @return static
     */
    public function setDefinitionUri($definitionUri = null)
    {
        if (null === $definitionUri) {
            $this->definitionUri = null;
            return $this;
        }
        if ($definitionUri instanceof FHIRUri) {
            $this->definitionUri = $definitionUri;
            return $this;
        }
        $this->definitionUri = new FHIRUri($definitionUri);
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
    public function getDescription()
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $description
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
    public function getExecutionPeriod()
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
    public function setExecutionPeriod(FHIRPeriod $executionPeriod = null)
    {
        $this->executionPeriod = $executionPeriod;
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
    public function getFocus()
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
    public function setFocus(FHIRReference $focus = null)
    {
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
    public function getFor()
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
    public function setFor(FHIRReference $for = null)
    {
        $this->for = $for;
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
    public function getGroupIdentifier()
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
    public function setGroupIdentifier(FHIRIdentifier $groupIdentifier = null)
    {
        $this->groupIdentifier = $groupIdentifier;
        return $this;
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
    public function getIdentifier()
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
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
     */
    public function setIdentifier(array $identifier = [])
    {
        $this->identifier = [];
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * A task to be performed.
     *
     * Additional information that may be needed in the execution of the task.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskInput[]
     */
    public function getInput()
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
    public function addInput(FHIRTaskInput $input = null)
    {
        $this->input[] = $input;
        return $this;
    }

    /**
     * A task to be performed.
     *
     * Additional information that may be needed in the execution of the task.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskInput[] $input
     * @return static
     */
    public function setInput(array $input = [])
    {
        $this->input = [];
        if ([] === $input) {
            return $this;
        }
        foreach($input as $v) {
            if ($v instanceof FHIRTaskInput) {
                $this->addInput($v);
            } else {
                $this->addInput(new FHIRTaskInput($v));
            }
        }
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
    public function getIntent()
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
    public function setIntent(FHIRRequestIntent $intent = null)
    {
        $this->intent = $intent;
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
    public function getLastModified()
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $lastModified
     * @return static
     */
    public function setLastModified($lastModified = null)
    {
        if (null === $lastModified) {
            $this->lastModified = null;
            return $this;
        }
        if ($lastModified instanceof FHIRDateTime) {
            $this->lastModified = $lastModified;
            return $this;
        }
        $this->lastModified = new FHIRDateTime($lastModified);
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
    public function getNote()
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
    public function addNote(FHIRAnnotation $note = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation[] $note
     * @return static
     */
    public function setNote(array $note = [])
    {
        $this->note = [];
        if ([] === $note) {
            return $this;
        }
        foreach($note as $v) {
            if ($v instanceof FHIRAnnotation) {
                $this->addNote($v);
            } else {
                $this->addNote(new FHIRAnnotation($v));
            }
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
    public function getOutput()
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
    public function addOutput(FHIRTaskOutput $output = null)
    {
        $this->output[] = $output;
        return $this;
    }

    /**
     * A task to be performed.
     *
     * Outputs produced by the Task.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskOutput[] $output
     * @return static
     */
    public function setOutput(array $output = [])
    {
        $this->output = [];
        if ([] === $output) {
            return $this;
        }
        foreach($output as $v) {
            if ($v instanceof FHIRTaskOutput) {
                $this->addOutput($v);
            } else {
                $this->addOutput(new FHIRTaskOutput($v));
            }
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
    public function getOwner()
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
    public function setOwner(FHIRReference $owner = null)
    {
        $this->owner = $owner;
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
    public function getPartOf()
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
    public function addPartOf(FHIRReference $partOf = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $partOf
     * @return static
     */
    public function setPartOf(array $partOf = [])
    {
        $this->partOf = [];
        if ([] === $partOf) {
            return $this;
        }
        foreach($partOf as $v) {
            if ($v instanceof FHIRReference) {
                $this->addPartOf($v);
            } else {
                $this->addPartOf(new FHIRReference($v));
            }
        }
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
    public function getPerformerType()
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
    public function addPerformerType(FHIRCodeableConcept $performerType = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $performerType
     * @return static
     */
    public function setPerformerType(array $performerType = [])
    {
        $this->performerType = [];
        if ([] === $performerType) {
            return $this;
        }
        foreach($performerType as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addPerformerType($v);
            } else {
                $this->addPerformerType(new FHIRCodeableConcept($v));
            }
        }
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
    public function getPriority()
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
    public function setPriority(FHIRRequestPriority $priority = null)
    {
        $this->priority = $priority;
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
    public function getReason()
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
    public function setReason(FHIRCodeableConcept $reason = null)
    {
        $this->reason = $reason;
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
    public function getRelevantHistory()
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
    public function addRelevantHistory(FHIRReference $relevantHistory = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $relevantHistory
     * @return static
     */
    public function setRelevantHistory(array $relevantHistory = [])
    {
        $this->relevantHistory = [];
        if ([] === $relevantHistory) {
            return $this;
        }
        foreach($relevantHistory as $v) {
            if ($v instanceof FHIRReference) {
                $this->addRelevantHistory($v);
            } else {
                $this->addRelevantHistory(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A task to be performed.
     *
     * The creator of the task.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskRequester
     */
    public function getRequester()
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
    public function setRequester(FHIRTaskRequester $requester = null)
    {
        $this->requester = $requester;
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
    public function getRestriction()
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
    public function setRestriction(FHIRTaskRestriction $restriction = null)
    {
        $this->restriction = $restriction;
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
    public function getStatus()
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
    public function setStatus(FHIRTaskStatus $status = null)
    {
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
    public function getStatusReason()
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
    public function setStatusReason(FHIRCodeableConcept $statusReason = null)
    {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * @return array
     */
    public function _validationErrors()
    {
        // TODO: implement validation
        return [];
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRTask $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRTask
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
                throw new \DomainException(sprintf('FHIRTask::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRTask::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRTask;
        } elseif (!is_object($type) || !($type instanceof FHIRTask)) {
            throw new \RuntimeException(sprintf(
                'FHIRTask::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRTask or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->authoredOn)) {
            $type->setAuthoredOn((string)$attributes->authoredOn);
        }
        if (isset($children->authoredOn)) {
            $type->setAuthoredOn(FHIRDateTime::xmlUnserialize($children->authoredOn));
        }
        if (isset($children->basedOn)) {
            foreach($children->basedOn as $child) {
                $type->addBasedOn(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->businessStatus)) {
            $type->setBusinessStatus(FHIRCodeableConcept::xmlUnserialize($children->businessStatus));
        }
        if (isset($children->code)) {
            $type->setCode(FHIRCodeableConcept::xmlUnserialize($children->code));
        }
        if (isset($children->context)) {
            $type->setContext(FHIRReference::xmlUnserialize($children->context));
        }
        if (isset($children->definitionReference)) {
            $type->setDefinitionReference(FHIRReference::xmlUnserialize($children->definitionReference));
        }
        if (isset($attributes->definitionUri)) {
            $type->setDefinitionUri((string)$attributes->definitionUri);
        }
        if (isset($children->definitionUri)) {
            $type->setDefinitionUri(FHIRUri::xmlUnserialize($children->definitionUri));
        }
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($children->executionPeriod)) {
            $type->setExecutionPeriod(FHIRPeriod::xmlUnserialize($children->executionPeriod));
        }
        if (isset($children->focus)) {
            $type->setFocus(FHIRReference::xmlUnserialize($children->focus));
        }
        if (isset($children->for)) {
            $type->setFor(FHIRReference::xmlUnserialize($children->for));
        }
        if (isset($children->groupIdentifier)) {
            $type->setGroupIdentifier(FHIRIdentifier::xmlUnserialize($children->groupIdentifier));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->input)) {
            foreach($children->input as $child) {
                $type->addInput(FHIRTaskInput::xmlUnserialize($child));
            }
        }
        if (isset($children->intent)) {
            $type->setIntent(FHIRRequestIntent::xmlUnserialize($children->intent));
        }
        if (isset($attributes->lastModified)) {
            $type->setLastModified((string)$attributes->lastModified);
        }
        if (isset($children->lastModified)) {
            $type->setLastModified(FHIRDateTime::xmlUnserialize($children->lastModified));
        }
        if (isset($children->note)) {
            foreach($children->note as $child) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($child));
            }
        }
        if (isset($children->output)) {
            foreach($children->output as $child) {
                $type->addOutput(FHIRTaskOutput::xmlUnserialize($child));
            }
        }
        if (isset($children->owner)) {
            $type->setOwner(FHIRReference::xmlUnserialize($children->owner));
        }
        if (isset($children->partOf)) {
            foreach($children->partOf as $child) {
                $type->addPartOf(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->performerType)) {
            foreach($children->performerType as $child) {
                $type->addPerformerType(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->priority)) {
            $type->setPriority(FHIRRequestPriority::xmlUnserialize($children->priority));
        }
        if (isset($children->reason)) {
            $type->setReason(FHIRCodeableConcept::xmlUnserialize($children->reason));
        }
        if (isset($children->relevantHistory)) {
            foreach($children->relevantHistory as $child) {
                $type->addRelevantHistory(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->requester)) {
            $type->setRequester(FHIRTaskRequester::xmlUnserialize($children->requester));
        }
        if (isset($children->restriction)) {
            $type->setRestriction(FHIRTaskRestriction::xmlUnserialize($children->restriction));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRTaskStatus::xmlUnserialize($children->status));
        }
        if (isset($children->statusReason)) {
            $type->setStatusReason(FHIRCodeableConcept::xmlUnserialize($children->statusReason));
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

        if (null !== ($v = $this->getAuthoredOn())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHORED_ON, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getBasedOn())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_BASED_ON, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getBusinessStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BUSINESS_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getContext())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTEXT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefinitionReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFINITION_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDefinitionUri())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFINITION_URI, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExecutionPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXECUTION_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFocus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FOCUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFor())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FOR, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getGroupIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_GROUP_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getInput())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INPUT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getIntent())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INTENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getLastModified())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LAST_MODIFIED, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NOTE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getOutput())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_OUTPUT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getOwner())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OWNER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getPartOf())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PART_OF, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getPerformerType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PERFORMER_TYPE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPriority())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRIORITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReason())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REASON, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getRelevantHistory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RELEVANT_HISTORY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getRequester())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUESTER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRestriction())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESTRICTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatusReason())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS_REASON, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAuthoredOn())) {
            $a[self::FIELD_AUTHORED_ON] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_AUTHORED_ON_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getBasedOn())) {
            $a[self::FIELD_BASED_ON] = $vs;
        }
        if (null !== ($v = $this->getBusinessStatus())) {
            $a[self::FIELD_BUSINESS_STATUS] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a[self::FIELD_CONTEXT] = $v;
        }
        if (null !== ($v = $this->getDefinitionReference())) {
            $a[self::FIELD_DEFINITION_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getDefinitionUri())) {
            $a[self::FIELD_DEFINITION_URI] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_DEFINITION_URI_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_DESCRIPTION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getExecutionPeriod())) {
            $a[self::FIELD_EXECUTION_PERIOD] = $v;
        }
        if (null !== ($v = $this->getFocus())) {
            $a[self::FIELD_FOCUS] = $v;
        }
        if (null !== ($v = $this->getFor())) {
            $a[self::FIELD_FOR] = $v;
        }
        if (null !== ($v = $this->getGroupIdentifier())) {
            $a[self::FIELD_GROUP_IDENTIFIER] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if ([] !== ($vs = $this->getInput())) {
            $a[self::FIELD_INPUT] = $vs;
        }
        if (null !== ($v = $this->getIntent())) {
            $a[self::FIELD_INTENT] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_INTENT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getLastModified())) {
            $a[self::FIELD_LAST_MODIFIED] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_LAST_MODIFIED_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            $a[self::FIELD_NOTE] = $vs;
        }
        if ([] !== ($vs = $this->getOutput())) {
            $a[self::FIELD_OUTPUT] = $vs;
        }
        if (null !== ($v = $this->getOwner())) {
            $a[self::FIELD_OWNER] = $v;
        }
        if ([] !== ($vs = $this->getPartOf())) {
            $a[self::FIELD_PART_OF] = $vs;
        }
        if ([] !== ($vs = $this->getPerformerType())) {
            $a[self::FIELD_PERFORMER_TYPE] = $vs;
        }
        if (null !== ($v = $this->getPriority())) {
            $a[self::FIELD_PRIORITY] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_PRIORITY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getReason())) {
            $a[self::FIELD_REASON] = $v;
        }
        if ([] !== ($vs = $this->getRelevantHistory())) {
            $a[self::FIELD_RELEVANT_HISTORY] = $vs;
        }
        if (null !== ($v = $this->getRequester())) {
            $a[self::FIELD_REQUESTER] = $v;
        }
        if (null !== ($v = $this->getRestriction())) {
            $a[self::FIELD_RESTRICTION] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getStatusReason())) {
            $a[self::FIELD_STATUS_REASON] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}