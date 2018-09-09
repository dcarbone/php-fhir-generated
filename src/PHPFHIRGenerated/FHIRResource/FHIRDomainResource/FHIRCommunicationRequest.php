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
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCommunicationRequest\FHIRCommunicationRequestPayload;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRRequestPriority;
use PHPFHIRGenerated\FHIRElement\FHIRRequestStatus;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A request to convey information; e.g. the CDS system proposes that an alert be sent to a responsible provider, the CDS system proposes that the public health agency be notified about a reportable condition.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRCommunicationRequest
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRCommunicationRequest extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'CommunicationRequest';

    /**
     * Other resources that pertain to this communication request and to which this communication request should be associated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $about = null;

    /**
     * For draft requests, indicates the date of initial creation.  For requests with other statuses, indicates the date of activation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $authoredOn = null;

    /**
     * A plan or proposal that is fulfilled in whole or in part by this request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $basedOn = null;

    /**
     * The type of message to be sent such as alert, notification, reminder, instruction, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * The encounter or episode of care within which the communication request was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * If true indicates that the CommunicationRequest is asking for the specified action to *not* occur.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $doNotPerform = null;

    /**
     * A shared identifier common to all requests that were authorized more or less simultaneously by a single author, representing the identifier of the requisition, prescription or similar form.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $groupIdentifier = null;

    /**
     * Business identifiers assigned to this communication request by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * A channel that was used for this communication (e.g. email, fax).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $medium = null;

    /**
     * Comments made about the request by the requester, sender, recipient, subject or other participants.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * The time when this communication is to occur.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $occurrenceDateTime = null;

    /**
     * The time when this communication is to occur.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $occurrencePeriod = null;

    /**
     * Text, attachment(s), or resource(s) to be communicated to the recipient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCommunicationRequest\FHIRCommunicationRequestPayload
     */
    public $payload = null;

    /**
     * Characterizes how quickly the proposed act must be initiated. Includes concepts such as stat, urgent, routine.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     */
    public $priority = null;

    /**
     * Describes why the request is being made in coded or textual form.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCode = null;

    /**
     * Indicates another resource whose existence justifies this request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reasonReference = null;

    /**
     * The entity (e.g. person, organization, clinical information system, device, group, or care team) which is the intended target of the communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $recipient = null;

    /**
     * Completed or terminated request(s) whose function is taken by this new request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $replaces = null;

    /**
     * The device, individual, or organization who initiated the request and has responsibility for its activation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $requester = null;

    /**
     * The entity (e.g. person, organization, clinical information system, or device) which is to be the source of the communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $sender = null;

    /**
     * The status of the proposal or order.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRequestStatus
     */
    public $status = null;

    /**
     * Captures the reason for the current state of the CommunicationRequest.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $statusReason = null;

    /**
     * The patient or group that is the focus of this communication request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * FHIRCommunicationRequest Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['about'])) {
                $this->setAbout($data['about']);
            }
            if (isset($data['authoredOn'])) {
                $this->setAuthoredOn($data['authoredOn']);
            }
            if (isset($data['basedOn'])) {
                $this->setBasedOn($data['basedOn']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['doNotPerform'])) {
                $this->setDoNotPerform($data['doNotPerform']);
            }
            if (isset($data['groupIdentifier'])) {
                $this->setGroupIdentifier($data['groupIdentifier']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['medium'])) {
                $this->setMedium($data['medium']);
            }
            if (isset($data['note'])) {
                $this->setNote($data['note']);
            }
            if (isset($data['occurrenceDateTime'])) {
                $this->setOccurrenceDateTime($data['occurrenceDateTime']);
            }
            if (isset($data['occurrencePeriod'])) {
                $this->setOccurrencePeriod($data['occurrencePeriod']);
            }
            if (isset($data['payload'])) {
                $this->setPayload($data['payload']);
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
            if (isset($data['recipient'])) {
                $this->setRecipient($data['recipient']);
            }
            if (isset($data['replaces'])) {
                $this->setReplaces($data['replaces']);
            }
            if (isset($data['requester'])) {
                $this->setRequester($data['requester']);
            }
            if (isset($data['sender'])) {
                $this->setSender($data['sender']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['statusReason'])) {
                $this->setStatusReason($data['statusReason']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunicationRequest::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Other resources that pertain to this communication request and to which this communication request should be associated.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setAbout(FHIRReference $about = null)
    {
        if (null === $about) {
            return $this; 
        }
        $this->about = $about;
        return $this;
    }

    /**
     * Other resources that pertain to this communication request and to which this communication request should be associated.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAbout()
    {
        return $this->about;
    }


    /**
     * For draft requests, indicates the date of initial creation.  For requests with other statuses, indicates the date of activation.
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
                'FHIRCommunicationRequest::setAuthoredOn - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($authoredOn)
            ));
        }
        $this->authoredOn = $authoredOn;
        return $this;
    }

    /**
     * For draft requests, indicates the date of initial creation.  For requests with other statuses, indicates the date of activation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getAuthoredOn()
    {
        return $this->authoredOn;
    }


    /**
     * A plan or proposal that is fulfilled in whole or in part by this request.
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
     * A plan or proposal that is fulfilled in whole or in part by this request.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }


    /**
     * The type of message to be sent such as alert, notification, reminder, instruction, etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCategory(FHIRCodeableConcept $category = null)
    {
        if (null === $category) {
            return $this; 
        }
        $this->category = $category;
        return $this;
    }

    /**
     * The type of message to be sent such as alert, notification, reminder, instruction, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * The encounter or episode of care within which the communication request was created.
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
     * The encounter or episode of care within which the communication request was created.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }


    /**
     * If true indicates that the CommunicationRequest is asking for the specified action to *not* occur.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setDoNotPerform($doNotPerform)
    {
        if (null === $doNotPerform) {
            return $this; 
        }
        if (is_scalar($doNotPerform)) {
            $doNotPerform = new FHIRBoolean($doNotPerform);
        }
        if (!($doNotPerform instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCommunicationRequest::setDoNotPerform - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($doNotPerform)
            ));
        }
        $this->doNotPerform = $doNotPerform;
        return $this;
    }

    /**
     * If true indicates that the CommunicationRequest is asking for the specified action to *not* occur.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getDoNotPerform()
    {
        return $this->doNotPerform;
    }


    /**
     * A shared identifier common to all requests that were authorized more or less simultaneously by a single author, representing the identifier of the requisition, prescription or similar form.
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
     * A shared identifier common to all requests that were authorized more or less simultaneously by a single author, representing the identifier of the requisition, prescription or similar form.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getGroupIdentifier()
    {
        return $this->groupIdentifier;
    }


    /**
     * Business identifiers assigned to this communication request by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this communication request by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * A channel that was used for this communication (e.g. email, fax).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setMedium(FHIRCodeableConcept $medium = null)
    {
        if (null === $medium) {
            return $this; 
        }
        $this->medium = $medium;
        return $this;
    }

    /**
     * A channel that was used for this communication (e.g. email, fax).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMedium()
    {
        return $this->medium;
    }


    /**
     * Comments made about the request by the requester, sender, recipient, subject or other participants.
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
     * Comments made about the request by the requester, sender, recipient, subject or other participants.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }


    /**
     * The time when this communication is to occur.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setOccurrenceDateTime($occurrenceDateTime)
    {
        if (null === $occurrenceDateTime) {
            return $this; 
        }
        if (is_scalar($occurrenceDateTime)) {
            $occurrenceDateTime = new FHIRDateTime($occurrenceDateTime);
        }
        if (!($occurrenceDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCommunicationRequest::setOccurrenceDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($occurrenceDateTime)
            ));
        }
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * The time when this communication is to occur.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getOccurrenceDateTime()
    {
        return $this->occurrenceDateTime;
    }


    /**
     * The time when this communication is to occur.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setOccurrencePeriod(FHIRPeriod $occurrencePeriod = null)
    {
        if (null === $occurrencePeriod) {
            return $this; 
        }
        $this->occurrencePeriod = $occurrencePeriod;
        return $this;
    }

    /**
     * The time when this communication is to occur.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getOccurrencePeriod()
    {
        return $this->occurrencePeriod;
    }


    /**
     * Text, attachment(s), or resource(s) to be communicated to the recipient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCommunicationRequest\FHIRCommunicationRequestPayload
     * @return $this
     */
    public function setPayload(FHIRCommunicationRequestPayload $payload = null)
    {
        if (null === $payload) {
            return $this; 
        }
        $this->payload = $payload;
        return $this;
    }

    /**
     * Text, attachment(s), or resource(s) to be communicated to the recipient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCommunicationRequest\FHIRCommunicationRequestPayload
     */
    public function getPayload()
    {
        return $this->payload;
    }


    /**
     * Characterizes how quickly the proposed act must be initiated. Includes concepts such as stat, urgent, routine.
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
                'FHIRCommunicationRequest::setPriority - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRRequestPriority or appropriate scalar value, %s seen.',
                gettype($priority)
            ));
        }
        $this->priority = $priority;
        return $this;
    }

    /**
     * Characterizes how quickly the proposed act must be initiated. Includes concepts such as stat, urgent, routine.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     */
    public function getPriority()
    {
        return $this->priority;
    }


    /**
     * Describes why the request is being made in coded or textual form.
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
     * Describes why the request is being made in coded or textual form.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }


    /**
     * Indicates another resource whose existence justifies this request.
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
     * Indicates another resource whose existence justifies this request.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }


    /**
     * The entity (e.g. person, organization, clinical information system, device, group, or care team) which is the intended target of the communication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setRecipient(FHIRReference $recipient = null)
    {
        if (null === $recipient) {
            return $this; 
        }
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * The entity (e.g. person, organization, clinical information system, device, group, or care team) which is the intended target of the communication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRecipient()
    {
        return $this->recipient;
    }


    /**
     * Completed or terminated request(s) whose function is taken by this new request.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setReplaces(FHIRReference $replaces = null)
    {
        if (null === $replaces) {
            return $this; 
        }
        $this->replaces = $replaces;
        return $this;
    }

    /**
     * Completed or terminated request(s) whose function is taken by this new request.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReplaces()
    {
        return $this->replaces;
    }


    /**
     * The device, individual, or organization who initiated the request and has responsibility for its activation.
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
     * The device, individual, or organization who initiated the request and has responsibility for its activation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequester()
    {
        return $this->requester;
    }


    /**
     * The entity (e.g. person, organization, clinical information system, or device) which is to be the source of the communication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSender(FHIRReference $sender = null)
    {
        if (null === $sender) {
            return $this; 
        }
        $this->sender = $sender;
        return $this;
    }

    /**
     * The entity (e.g. person, organization, clinical information system, or device) which is to be the source of the communication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSender()
    {
        return $this->sender;
    }


    /**
     * The status of the proposal or order.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRequestStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRRequestStatus($status);
        }
        if (!($status instanceof FHIRRequestStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCommunicationRequest::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRRequestStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The status of the proposal or order.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRequestStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Captures the reason for the current state of the CommunicationRequest.
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
     * Captures the reason for the current state of the CommunicationRequest.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }


    /**
     * The patient or group that is the focus of this communication request.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSubject(FHIRReference $subject = null)
    {
        if (null === $subject) {
            return $this; 
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * The patient or group that is the focus of this communication request.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
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
        if (null !== ($v = $this->getAbout())) {
            $a['about'] = $v;
        }
        if (null !== ($v = $this->getAuthoredOn())) {
            $a['authoredOn'] = $v;
        }
        if (null !== ($v = $this->getBasedOn())) {
            $a['basedOn'] = $v;
        }
        if (null !== ($v = $this->getCategory())) {
            $a['category'] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
        }
        if (null !== ($v = $this->getDoNotPerform())) {
            $a['doNotPerform'] = $v;
        }
        if (null !== ($v = $this->getGroupIdentifier())) {
            $a['groupIdentifier'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getMedium())) {
            $a['medium'] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a['note'] = $v;
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            $a['occurrenceDateTime'] = $v;
        }
        if (null !== ($v = $this->getOccurrencePeriod())) {
            $a['occurrencePeriod'] = $v;
        }
        if (null !== ($v = $this->getPayload())) {
            $a['payload'] = $v;
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
        if (null !== ($v = $this->getRecipient())) {
            $a['recipient'] = $v;
        }
        if (null !== ($v = $this->getReplaces())) {
            $a['replaces'] = $v;
        }
        if (null !== ($v = $this->getRequester())) {
            $a['requester'] = $v;
        }
        if (null !== ($v = $this->getSender())) {
            $a['sender'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getStatusReason())) {
            $a['statusReason'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
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
            $sxe = new \SimpleXMLElement('<CommunicationRequest xmlns="http://hl7.org/fhir"></CommunicationRequest>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}