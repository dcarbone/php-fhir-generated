<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskInput;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskOutput;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskRestriction;
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRRequestPriority;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRTaskIntent;
use PHPFHIRGenerated\FHIRElement\FHIRTaskStatus;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A task to be performed.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRTask
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRTask extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Task';

    /**
     * The date and time this task was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $authoredOn = null;

    /**
     * BasedOn refers to a higher-level authorization that triggered the creation of the task.  It references a "request" resource such as a ServiceRequest, MedicationRequest, ServiceRequest, CarePlan, etc. which is distinct from the "request" resource the task is seeking to fulfill.  This latter resource is referenced by FocusOn.  For example, based on a ServiceRequest (= BasedOn), a task is created to fulfill a procedureRequest ( = FocusOn ) to collect a specimen from a patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $basedOn = null;

    /**
     * Contains business-specific nuances of the business state.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $businessStatus = null;

    /**
     * A name or code (or both) briefly describing what the task involves.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * The healthcare event  (e.g. a patient and healthcare provider interaction) during which this task was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * A free-text description of what is to be performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Identifies the time action was first taken against the task (start) and/or the time final action was taken against the task prior to marking it as completed (end).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $executionPeriod = null;

    /**
     * The request being actioned or the resource being manipulated by this task.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $focus = null;

    /**
     * The entity who benefits from the performance of the service specified in the task (e.g., the patient).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $for = null;

    /**
     * An identifier that links together multiple tasks and other requests that were created in the same context.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $groupIdentifier = null;

    /**
     * The business identifier for this task.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Additional information that may be needed in the execution of the task.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskInput
     */
    public $input = null;

    /**
     * The URL pointing to a *FHIR*-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Task.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $instantiatesCanonical = null;

    /**
     * The URL pointing to an *externally* maintained  protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Task.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $instantiatesUri = null;

    /**
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be relevant to the Task.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $insurance = null;

    /**
     * Indicates the "level" of actionability associated with the Task, i.e. i+R[9]Cs this a proposed task, a planned task, an actionable task, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTaskIntent
     */
    public $intent = null;

    /**
     * The date and time of last modification to this task.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $lastModified = null;

    /**
     * The principal physical location where the this task is performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * Free-text information captured about the task as it progresses.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * Outputs produced by the Task.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskOutput
     */
    public $output = null;

    /**
     * Individual organization or Device currently responsible for task execution.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $owner = null;

    /**
     * Task that this particular task is part of.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $partOf = null;

    /**
     * The type of participant that can execute the task.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $performerType = null;

    /**
     * Indicates how quickly the Task should be addressed with respect to other requests.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     */
    public $priority = null;

    /**
     * A description or code indicating why this task needs to be performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCode = null;

    /**
     * A resource reference indicating why this task needs to be performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reasonReference = null;

    /**
     * Links to Provenance records for past versions of this Task that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the task.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $relevantHistory = null;

    /**
     * The creator of the task.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $requester = null;

    /**
     * If the Task.focus is a request resource and the task is seeking fulfillment (i.e. is asking for the request to be actioned), this element identifies any limitations on what parts of the referenced request should be actioned.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskRestriction
     */
    public $restriction = null;

    /**
     * The current status of the task.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTaskStatus
     */
    public $status = null;

    /**
     * An explanation as to why this task is held, failed, was refused, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $statusReason = null;

    /**
     * FHIRTask Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['authoredOn'])) {
                $this->setAuthoredOn($data['authoredOn']);
            }
            if (isset($data['basedOn'])) {
                $this->setBasedOn($data['basedOn']);
            }
            if (isset($data['businessStatus'])) {
                $this->setBusinessStatus($data['businessStatus']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['executionPeriod'])) {
                $this->setExecutionPeriod($data['executionPeriod']);
            }
            if (isset($data['focus'])) {
                $this->setFocus($data['focus']);
            }
            if (isset($data['for'])) {
                $this->setFor($data['for']);
            }
            if (isset($data['groupIdentifier'])) {
                $this->setGroupIdentifier($data['groupIdentifier']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['input'])) {
                $this->setInput($data['input']);
            }
            if (isset($data['instantiatesCanonical'])) {
                $this->setInstantiatesCanonical($data['instantiatesCanonical']);
            }
            if (isset($data['instantiatesUri'])) {
                $this->setInstantiatesUri($data['instantiatesUri']);
            }
            if (isset($data['insurance'])) {
                $this->setInsurance($data['insurance']);
            }
            if (isset($data['intent'])) {
                $this->setIntent($data['intent']);
            }
            if (isset($data['lastModified'])) {
                $this->setLastModified($data['lastModified']);
            }
            if (isset($data['location'])) {
                $this->setLocation($data['location']);
            }
            if (isset($data['note'])) {
                $this->setNote($data['note']);
            }
            if (isset($data['output'])) {
                $this->setOutput($data['output']);
            }
            if (isset($data['owner'])) {
                $this->setOwner($data['owner']);
            }
            if (isset($data['partOf'])) {
                $this->setPartOf($data['partOf']);
            }
            if (isset($data['performerType'])) {
                $this->setPerformerType($data['performerType']);
            }
            if (isset($data['priority'])) {
                $this->setPriority($data['priority']);
            }
            if (isset($data['reasonCode'])) {
                $this->setReasonCode($data['reasonCode']);
            }
            if (isset($data['reasonReference'])) {
                $this->setReasonReference($data['reasonReference']);
            }
            if (isset($data['relevantHistory'])) {
                $this->setRelevantHistory($data['relevantHistory']);
            }
            if (isset($data['requester'])) {
                $this->setRequester($data['requester']);
            }
            if (isset($data['restriction'])) {
                $this->setRestriction($data['restriction']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['statusReason'])) {
                $this->setStatusReason($data['statusReason']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRTask::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The date and time this task was created.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setAuthoredOn($authoredOn)
    {
        if (null === $authoredOn) {
            return $this; 
        }
        if (is_scalar($authoredOn)) {
            $authoredOn = new FHIRDateTime($authoredOn);
        }
        if (!($authoredOn instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTask::setAuthoredOn - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($authoredOn)
            ));
        }
        $this->authoredOn = $authoredOn;
        return $this;
    }

    /**
     * The date and time this task was created.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getAuthoredOn()
    {
        return $this->authoredOn;
    }


    /**
     * BasedOn refers to a higher-level authorization that triggered the creation of the task.  It references a "request" resource such as a ServiceRequest, MedicationRequest, ServiceRequest, CarePlan, etc. which is distinct from the "request" resource the task is seeking to fulfill.  This latter resource is referenced by FocusOn.  For example, based on a ServiceRequest (= BasedOn), a task is created to fulfill a procedureRequest ( = FocusOn ) to collect a specimen from a patient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setBasedOn(FHIRReference $basedOn = null)
    {
        if (null === $basedOn) {
            return $this; 
        }
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * BasedOn refers to a higher-level authorization that triggered the creation of the task.  It references a "request" resource such as a ServiceRequest, MedicationRequest, ServiceRequest, CarePlan, etc. which is distinct from the "request" resource the task is seeking to fulfill.  This latter resource is referenced by FocusOn.  For example, based on a ServiceRequest (= BasedOn), a task is created to fulfill a procedureRequest ( = FocusOn ) to collect a specimen from a patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }


    /**
     * Contains business-specific nuances of the business state.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setBusinessStatus(FHIRCodeableConcept $businessStatus = null)
    {
        if (null === $businessStatus) {
            return $this; 
        }
        $this->businessStatus = $businessStatus;
        return $this;
    }

    /**
     * Contains business-specific nuances of the business state.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getBusinessStatus()
    {
        return $this->businessStatus;
    }


    /**
     * A name or code (or both) briefly describing what the task involves.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        if (null === $code) {
            return $this; 
        }
        $this->code = $code;
        return $this;
    }

    /**
     * A name or code (or both) briefly describing what the task involves.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * The healthcare event  (e.g. a patient and healthcare provider interaction) during which this task was created.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setContext(FHIRReference $context = null)
    {
        if (null === $context) {
            return $this; 
        }
        $this->context = $context;
        return $this;
    }

    /**
     * The healthcare event  (e.g. a patient and healthcare provider interaction) during which this task was created.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }


    /**
     * A free-text description of what is to be performed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDescription($description)
    {
        if (null === $description) {
            return $this; 
        }
        if (is_scalar($description)) {
            $description = new FHIRString($description);
        }
        if (!($description instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTask::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A free-text description of what is to be performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * Identifies the time action was first taken against the task (start) and/or the time final action was taken against the task prior to marking it as completed (end).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setExecutionPeriod(FHIRPeriod $executionPeriod = null)
    {
        if (null === $executionPeriod) {
            return $this; 
        }
        $this->executionPeriod = $executionPeriod;
        return $this;
    }

    /**
     * Identifies the time action was first taken against the task (start) and/or the time final action was taken against the task prior to marking it as completed (end).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getExecutionPeriod()
    {
        return $this->executionPeriod;
    }


    /**
     * The request being actioned or the resource being manipulated by this task.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setFocus(FHIRReference $focus = null)
    {
        if (null === $focus) {
            return $this; 
        }
        $this->focus = $focus;
        return $this;
    }

    /**
     * The request being actioned or the resource being manipulated by this task.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getFocus()
    {
        return $this->focus;
    }


    /**
     * The entity who benefits from the performance of the service specified in the task (e.g., the patient).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setFor(FHIRReference $for = null)
    {
        if (null === $for) {
            return $this; 
        }
        $this->for = $for;
        return $this;
    }

    /**
     * The entity who benefits from the performance of the service specified in the task (e.g., the patient).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getFor()
    {
        return $this->for;
    }


    /**
     * An identifier that links together multiple tasks and other requests that were created in the same context.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setGroupIdentifier(FHIRIdentifier $groupIdentifier = null)
    {
        if (null === $groupIdentifier) {
            return $this; 
        }
        $this->groupIdentifier = $groupIdentifier;
        return $this;
    }

    /**
     * An identifier that links together multiple tasks and other requests that were created in the same context.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getGroupIdentifier()
    {
        return $this->groupIdentifier;
    }


    /**
     * The business identifier for this task.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The business identifier for this task.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Additional information that may be needed in the execution of the task.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskInput
     * @return $this
     */
    public function setInput(FHIRTaskInput $input = null)
    {
        if (null === $input) {
            return $this; 
        }
        $this->input = $input;
        return $this;
    }

    /**
     * Additional information that may be needed in the execution of the task.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskInput
     */
    public function getInput()
    {
        return $this->input;
    }


    /**
     * The URL pointing to a *FHIR*-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Task.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setInstantiatesCanonical($instantiatesCanonical)
    {
        if (null === $instantiatesCanonical) {
            return $this; 
        }
        if (is_scalar($instantiatesCanonical)) {
            $instantiatesCanonical = new FHIRCanonical($instantiatesCanonical);
        }
        if (!($instantiatesCanonical instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTask::setInstantiatesCanonical - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($instantiatesCanonical)
            ));
        }
        $this->instantiatesCanonical = $instantiatesCanonical;
        return $this;
    }

    /**
     * The URL pointing to a *FHIR*-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Task.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getInstantiatesCanonical()
    {
        return $this->instantiatesCanonical;
    }


    /**
     * The URL pointing to an *externally* maintained  protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Task.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setInstantiatesUri($instantiatesUri)
    {
        if (null === $instantiatesUri) {
            return $this; 
        }
        if (is_scalar($instantiatesUri)) {
            $instantiatesUri = new FHIRUri($instantiatesUri);
        }
        if (!($instantiatesUri instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTask::setInstantiatesUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($instantiatesUri)
            ));
        }
        $this->instantiatesUri = $instantiatesUri;
        return $this;
    }

    /**
     * The URL pointing to an *externally* maintained  protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Task.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getInstantiatesUri()
    {
        return $this->instantiatesUri;
    }


    /**
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be relevant to the Task.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setInsurance(FHIRReference $insurance = null)
    {
        if (null === $insurance) {
            return $this; 
        }
        $this->insurance = $insurance;
        return $this;
    }

    /**
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be relevant to the Task.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getInsurance()
    {
        return $this->insurance;
    }


    /**
     * Indicates the "level" of actionability associated with the Task, i.e. i+R[9]Cs this a proposed task, a planned task, an actionable task, etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTaskIntent
     * @return $this
     */
    public function setIntent($intent)
    {
        if (null === $intent) {
            return $this; 
        }
        if (is_scalar($intent)) {
            $intent = new FHIRTaskIntent($intent);
        }
        if (!($intent instanceof FHIRTaskIntent)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTask::setIntent - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRTaskIntent or appropriate scalar value, %s seen.',
                gettype($intent)
            ));
        }
        $this->intent = $intent;
        return $this;
    }

    /**
     * Indicates the "level" of actionability associated with the Task, i.e. i+R[9]Cs this a proposed task, a planned task, an actionable task, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTaskIntent
     */
    public function getIntent()
    {
        return $this->intent;
    }


    /**
     * The date and time of last modification to this task.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setLastModified($lastModified)
    {
        if (null === $lastModified) {
            return $this; 
        }
        if (is_scalar($lastModified)) {
            $lastModified = new FHIRDateTime($lastModified);
        }
        if (!($lastModified instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTask::setLastModified - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($lastModified)
            ));
        }
        $this->lastModified = $lastModified;
        return $this;
    }

    /**
     * The date and time of last modification to this task.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }


    /**
     * The principal physical location where the this task is performed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setLocation(FHIRReference $location = null)
    {
        if (null === $location) {
            return $this; 
        }
        $this->location = $location;
        return $this;
    }

    /**
     * The principal physical location where the this task is performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }


    /**
     * Free-text information captured about the task as it progresses.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     * @return $this
     */
    public function setNote(FHIRAnnotation $note = null)
    {
        if (null === $note) {
            return $this; 
        }
        $this->note = $note;
        return $this;
    }

    /**
     * Free-text information captured about the task as it progresses.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }


    /**
     * Outputs produced by the Task.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskOutput
     * @return $this
     */
    public function setOutput(FHIRTaskOutput $output = null)
    {
        if (null === $output) {
            return $this; 
        }
        $this->output = $output;
        return $this;
    }

    /**
     * Outputs produced by the Task.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskOutput
     */
    public function getOutput()
    {
        return $this->output;
    }


    /**
     * Individual organization or Device currently responsible for task execution.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setOwner(FHIRReference $owner = null)
    {
        if (null === $owner) {
            return $this; 
        }
        $this->owner = $owner;
        return $this;
    }

    /**
     * Individual organization or Device currently responsible for task execution.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOwner()
    {
        return $this->owner;
    }


    /**
     * Task that this particular task is part of.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPartOf(FHIRReference $partOf = null)
    {
        if (null === $partOf) {
            return $this; 
        }
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * Task that this particular task is part of.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPartOf()
    {
        return $this->partOf;
    }


    /**
     * The type of participant that can execute the task.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setPerformerType(FHIRCodeableConcept $performerType = null)
    {
        if (null === $performerType) {
            return $this; 
        }
        $this->performerType = $performerType;
        return $this;
    }

    /**
     * The type of participant that can execute the task.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPerformerType()
    {
        return $this->performerType;
    }


    /**
     * Indicates how quickly the Task should be addressed with respect to other requests.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     * @return $this
     */
    public function setPriority($priority)
    {
        if (null === $priority) {
            return $this; 
        }
        if (is_scalar($priority)) {
            $priority = new FHIRRequestPriority($priority);
        }
        if (!($priority instanceof FHIRRequestPriority)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTask::setPriority - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRRequestPriority or appropriate scalar value, %s seen.',
                gettype($priority)
            ));
        }
        $this->priority = $priority;
        return $this;
    }

    /**
     * Indicates how quickly the Task should be addressed with respect to other requests.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     */
    public function getPriority()
    {
        return $this->priority;
    }


    /**
     * A description or code indicating why this task needs to be performed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setReasonCode(FHIRCodeableConcept $reasonCode = null)
    {
        if (null === $reasonCode) {
            return $this; 
        }
        $this->reasonCode = $reasonCode;
        return $this;
    }

    /**
     * A description or code indicating why this task needs to be performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }


    /**
     * A resource reference indicating why this task needs to be performed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setReasonReference(FHIRReference $reasonReference = null)
    {
        if (null === $reasonReference) {
            return $this; 
        }
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * A resource reference indicating why this task needs to be performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }


    /**
     * Links to Provenance records for past versions of this Task that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the task.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setRelevantHistory(FHIRReference $relevantHistory = null)
    {
        if (null === $relevantHistory) {
            return $this; 
        }
        $this->relevantHistory = $relevantHistory;
        return $this;
    }

    /**
     * Links to Provenance records for past versions of this Task that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the task.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRelevantHistory()
    {
        return $this->relevantHistory;
    }


    /**
     * The creator of the task.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setRequester(FHIRReference $requester = null)
    {
        if (null === $requester) {
            return $this; 
        }
        $this->requester = $requester;
        return $this;
    }

    /**
     * The creator of the task.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequester()
    {
        return $this->requester;
    }


    /**
     * If the Task.focus is a request resource and the task is seeking fulfillment (i.e. is asking for the request to be actioned), this element identifies any limitations on what parts of the referenced request should be actioned.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskRestriction
     * @return $this
     */
    public function setRestriction(FHIRTaskRestriction $restriction = null)
    {
        if (null === $restriction) {
            return $this; 
        }
        $this->restriction = $restriction;
        return $this;
    }

    /**
     * If the Task.focus is a request resource and the task is seeking fulfillment (i.e. is asking for the request to be actioned), this element identifies any limitations on what parts of the referenced request should be actioned.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskRestriction
     */
    public function getRestriction()
    {
        return $this->restriction;
    }


    /**
     * The current status of the task.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTaskStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRTaskStatus($status);
        }
        if (!($status instanceof FHIRTaskStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTask::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRTaskStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The current status of the task.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTaskStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * An explanation as to why this task is held, failed, was refused, etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setStatusReason(FHIRCodeableConcept $statusReason = null)
    {
        if (null === $statusReason) {
            return $this; 
        }
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * An explanation as to why this task is held, failed, was refused, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getAuthoredOn())) {
            $a['authoredOn'] = $v;
        }
        if (null !== ($v = $this->getBasedOn())) {
            $a['basedOn'] = $v;
        }
        if (null !== ($v = $this->getBusinessStatus())) {
            $a['businessStatus'] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getExecutionPeriod())) {
            $a['executionPeriod'] = $v;
        }
        if (null !== ($v = $this->getFocus())) {
            $a['focus'] = $v;
        }
        if (null !== ($v = $this->getFor())) {
            $a['for'] = $v;
        }
        if (null !== ($v = $this->getGroupIdentifier())) {
            $a['groupIdentifier'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getInput())) {
            $a['input'] = $v;
        }
        if (null !== ($v = $this->getInstantiatesCanonical())) {
            $a['instantiatesCanonical'] = $v;
        }
        if (null !== ($v = $this->getInstantiatesUri())) {
            $a['instantiatesUri'] = $v;
        }
        if (null !== ($v = $this->getInsurance())) {
            $a['insurance'] = $v;
        }
        if (null !== ($v = $this->getIntent())) {
            $a['intent'] = $v;
        }
        if (null !== ($v = $this->getLastModified())) {
            $a['lastModified'] = $v;
        }
        if (null !== ($v = $this->getLocation())) {
            $a['location'] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a['note'] = $v;
        }
        if (null !== ($v = $this->getOutput())) {
            $a['output'] = $v;
        }
        if (null !== ($v = $this->getOwner())) {
            $a['owner'] = $v;
        }
        if (null !== ($v = $this->getPartOf())) {
            $a['partOf'] = $v;
        }
        if (null !== ($v = $this->getPerformerType())) {
            $a['performerType'] = $v;
        }
        if (null !== ($v = $this->getPriority())) {
            $a['priority'] = $v;
        }
        if (null !== ($v = $this->getReasonCode())) {
            $a['reasonCode'] = $v;
        }
        if (null !== ($v = $this->getReasonReference())) {
            $a['reasonReference'] = $v;
        }
        if (null !== ($v = $this->getRelevantHistory())) {
            $a['relevantHistory'] = $v;
        }
        if (null !== ($v = $this->getRequester())) {
            $a['requester'] = $v;
        }
        if (null !== ($v = $this->getRestriction())) {
            $a['restriction'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getStatusReason())) {
            $a['statusReason'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<Task xmlns="http://hl7.org/fhir"></Task>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}