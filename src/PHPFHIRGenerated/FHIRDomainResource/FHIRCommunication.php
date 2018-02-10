<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * An occurrence of information being transmitted; e.g. an alert that was sent to a responsible provider, a public health agency was notified about a reportable condition.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRCommunication extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Identifiers associated with this Communication that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * A protocol, guideline, or other definition that was adhered to in whole or in part by this communication event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public $instantiates = [];

    /**
     * An order, proposal or plan fulfilled in whole or in part by this Communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $basedOn = [];

    /**
     * Part of this action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $partOf = [];

    /**
     * Prior communication that this communication is in response to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $inResponseTo = [];

    /**
     * The status of the transmission.
     * @var \PHPFHIRGenerated\FHIRElement\FHIREventStatus
     */
    public $status = null;

    /**
     * Captures the reason for the current state of the Communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $statusReason = null;

    /**
     * The type of message conveyed such as alert, notification, reminder, instruction, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $category = [];

    /**
     * Characterizes how quickly the planned or in progress communication must be addressed. Includes concepts such as stat, urgent, routine.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     */
    public $priority = null;

    /**
     * A channel that was used for this communication (e.g. email, fax).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $medium = [];

    /**
     * The patient or group that was the focus of this communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The entity (e.g. person, organization, clinical information system, care team or device) which was the target of the communication. If receipts need to be tracked by individual, a separate resource instance will need to be created for each recipient.  Multiple recipient communications are intended where either a receipt(s) is not tracked (e.g. a mass mail-out) or is captured in aggregate (all emails confirmed received by a particular time).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $recipient = [];

    /**
     * Description of the purpose/content, similar to a subject line in an email.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $topic = null;

    /**
     * Other resources that pertain to this communication and to which this communication should be associated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $about = [];

    /**
     * The encounter within which the communication was sent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * The time when this communication was sent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $sent = null;

    /**
     * The time when this communication arrived at the destination.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $received = null;

    /**
     * The entity (e.g. person, organization, clinical information system, or device) which was the source of the communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $sender = null;

    /**
     * The reason or justification for the communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $reasonCode = [];

    /**
     * Indicates another resource whose existence justifies this communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $reasonReference = [];

    /**
     * Text, attachment(s), or resource(s) that was communicated to the recipient.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRCommunication\FHIRCommunicationPayload[]
     */
    public $payload = [];

    /**
     * Additional notes or commentary about the communication by the sender, receiver or other interested parties.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public $note = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'Communication';

    /**
     * Identifiers associated with this Communication that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Identifiers associated with this Communication that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A protocol, guideline, or other definition that was adhered to in whole or in part by this communication event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public function getInstantiates() {
        return $this->instantiates;
    }

    /**
     * A protocol, guideline, or other definition that was adhered to in whole or in part by this communication event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $instantiates
     * @return $this
     */
    public function addInstantiates($instantiates) {
        $this->instantiates[] = $instantiates;
        return $this;
    }

    /**
     * An order, proposal or plan fulfilled in whole or in part by this Communication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getBasedOn() {
        return $this->basedOn;
    }

    /**
     * An order, proposal or plan fulfilled in whole or in part by this Communication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $basedOn
     * @return $this
     */
    public function addBasedOn($basedOn) {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * Part of this action.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getPartOf() {
        return $this->partOf;
    }

    /**
     * Part of this action.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $partOf
     * @return $this
     */
    public function addPartOf($partOf) {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * Prior communication that this communication is in response to.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getInResponseTo() {
        return $this->inResponseTo;
    }

    /**
     * Prior communication that this communication is in response to.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $inResponseTo
     * @return $this
     */
    public function addInResponseTo($inResponseTo) {
        $this->inResponseTo[] = $inResponseTo;
        return $this;
    }

    /**
     * The status of the transmission.
     * @return \PHPFHIRGenerated\FHIRElement\FHIREventStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * The status of the transmission.
     * @param \PHPFHIRGenerated\FHIRElement\FHIREventStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Captures the reason for the current state of the Communication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getStatusReason() {
        return $this->statusReason;
    }

    /**
     * Captures the reason for the current state of the Communication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $statusReason
     * @return $this
     */
    public function setStatusReason($statusReason) {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * The type of message conveyed such as alert, notification, reminder, instruction, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * The type of message conveyed such as alert, notification, reminder, instruction, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function addCategory($category) {
        $this->category[] = $category;
        return $this;
    }

    /**
     * Characterizes how quickly the planned or in progress communication must be addressed. Includes concepts such as stat, urgent, routine.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     */
    public function getPriority() {
        return $this->priority;
    }

    /**
     * Characterizes how quickly the planned or in progress communication must be addressed. Includes concepts such as stat, urgent, routine.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRequestPriority $priority
     * @return $this
     */
    public function setPriority($priority) {
        $this->priority = $priority;
        return $this;
    }

    /**
     * A channel that was used for this communication (e.g. email, fax).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getMedium() {
        return $this->medium;
    }

    /**
     * A channel that was used for this communication (e.g. email, fax).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $medium
     * @return $this
     */
    public function addMedium($medium) {
        $this->medium[] = $medium;
        return $this;
    }

    /**
     * The patient or group that was the focus of this communication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * The patient or group that was the focus of this communication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject) {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The entity (e.g. person, organization, clinical information system, care team or device) which was the target of the communication. If receipts need to be tracked by individual, a separate resource instance will need to be created for each recipient.  Multiple recipient communications are intended where either a receipt(s) is not tracked (e.g. a mass mail-out) or is captured in aggregate (all emails confirmed received by a particular time).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getRecipient() {
        return $this->recipient;
    }

    /**
     * The entity (e.g. person, organization, clinical information system, care team or device) which was the target of the communication. If receipts need to be tracked by individual, a separate resource instance will need to be created for each recipient.  Multiple recipient communications are intended where either a receipt(s) is not tracked (e.g. a mass mail-out) or is captured in aggregate (all emails confirmed received by a particular time).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $recipient
     * @return $this
     */
    public function addRecipient($recipient) {
        $this->recipient[] = $recipient;
        return $this;
    }

    /**
     * Description of the purpose/content, similar to a subject line in an email.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getTopic() {
        return $this->topic;
    }

    /**
     * Description of the purpose/content, similar to a subject line in an email.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $topic
     * @return $this
     */
    public function setTopic($topic) {
        $this->topic = $topic;
        return $this;
    }

    /**
     * Other resources that pertain to this communication and to which this communication should be associated.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAbout() {
        return $this->about;
    }

    /**
     * Other resources that pertain to this communication and to which this communication should be associated.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $about
     * @return $this
     */
    public function addAbout($about) {
        $this->about[] = $about;
        return $this;
    }

    /**
     * The encounter within which the communication was sent.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext() {
        return $this->context;
    }

    /**
     * The encounter within which the communication was sent.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $context
     * @return $this
     */
    public function setContext($context) {
        $this->context = $context;
        return $this;
    }

    /**
     * The time when this communication was sent.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getSent() {
        return $this->sent;
    }

    /**
     * The time when this communication was sent.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $sent
     * @return $this
     */
    public function setSent($sent) {
        $this->sent = $sent;
        return $this;
    }

    /**
     * The time when this communication arrived at the destination.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getReceived() {
        return $this->received;
    }

    /**
     * The time when this communication arrived at the destination.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $received
     * @return $this
     */
    public function setReceived($received) {
        $this->received = $received;
        return $this;
    }

    /**
     * The entity (e.g. person, organization, clinical information system, or device) which was the source of the communication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSender() {
        return $this->sender;
    }

    /**
     * The entity (e.g. person, organization, clinical information system, or device) which was the source of the communication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $sender
     * @return $this
     */
    public function setSender($sender) {
        $this->sender = $sender;
        return $this;
    }

    /**
     * The reason or justification for the communication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode() {
        return $this->reasonCode;
    }

    /**
     * The reason or justification for the communication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return $this
     */
    public function addReasonCode($reasonCode) {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * Indicates another resource whose existence justifies this communication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getReasonReference() {
        return $this->reasonReference;
    }

    /**
     * Indicates another resource whose existence justifies this communication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $reasonReference
     * @return $this
     */
    public function addReasonReference($reasonReference) {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * Text, attachment(s), or resource(s) that was communicated to the recipient.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRCommunication\FHIRCommunicationPayload[]
     */
    public function getPayload() {
        return $this->payload;
    }

    /**
     * Text, attachment(s), or resource(s) that was communicated to the recipient.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRCommunication\FHIRCommunicationPayload $payload
     * @return $this
     */
    public function addPayload($payload) {
        $this->payload[] = $payload;
        return $this;
    }

    /**
     * Additional notes or commentary about the communication by the sender, receiver or other interested parties.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * Additional notes or commentary about the communication by the sender, receiver or other interested parties.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note) {
        $this->note[] = $note;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['identifier'])) {
                if (is_array($data['identifier'])) {
                    foreach($data['identifier'] as $d) {
                        $this->addIdentifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"identifier" must be array of objects or null, '.gettype($data['identifier']).' seen.');
                }
            }
            if (isset($data['instantiates'])) {
                if (is_array($data['instantiates'])) {
                    foreach($data['instantiates'] as $d) {
                        $this->addInstantiates($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"instantiates" must be array of objects or null, '.gettype($data['instantiates']).' seen.');
                }
            }
            if (isset($data['basedOn'])) {
                if (is_array($data['basedOn'])) {
                    foreach($data['basedOn'] as $d) {
                        $this->addBasedOn($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"basedOn" must be array of objects or null, '.gettype($data['basedOn']).' seen.');
                }
            }
            if (isset($data['partOf'])) {
                if (is_array($data['partOf'])) {
                    foreach($data['partOf'] as $d) {
                        $this->addPartOf($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"partOf" must be array of objects or null, '.gettype($data['partOf']).' seen.');
                }
            }
            if (isset($data['inResponseTo'])) {
                if (is_array($data['inResponseTo'])) {
                    foreach($data['inResponseTo'] as $d) {
                        $this->addInResponseTo($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"inResponseTo" must be array of objects or null, '.gettype($data['inResponseTo']).' seen.');
                }
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['statusReason'])) {
                $this->setStatusReason($data['statusReason']);
            }
            if (isset($data['category'])) {
                if (is_array($data['category'])) {
                    foreach($data['category'] as $d) {
                        $this->addCategory($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"category" must be array of objects or null, '.gettype($data['category']).' seen.');
                }
            }
            if (isset($data['priority'])) {
                $this->setPriority($data['priority']);
            }
            if (isset($data['medium'])) {
                if (is_array($data['medium'])) {
                    foreach($data['medium'] as $d) {
                        $this->addMedium($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"medium" must be array of objects or null, '.gettype($data['medium']).' seen.');
                }
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['recipient'])) {
                if (is_array($data['recipient'])) {
                    foreach($data['recipient'] as $d) {
                        $this->addRecipient($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"recipient" must be array of objects or null, '.gettype($data['recipient']).' seen.');
                }
            }
            if (isset($data['topic'])) {
                $this->setTopic($data['topic']);
            }
            if (isset($data['about'])) {
                if (is_array($data['about'])) {
                    foreach($data['about'] as $d) {
                        $this->addAbout($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"about" must be array of objects or null, '.gettype($data['about']).' seen.');
                }
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['sent'])) {
                $this->setSent($data['sent']);
            }
            if (isset($data['received'])) {
                $this->setReceived($data['received']);
            }
            if (isset($data['sender'])) {
                $this->setSender($data['sender']);
            }
            if (isset($data['reasonCode'])) {
                if (is_array($data['reasonCode'])) {
                    foreach($data['reasonCode'] as $d) {
                        $this->addReasonCode($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"reasonCode" must be array of objects or null, '.gettype($data['reasonCode']).' seen.');
                }
            }
            if (isset($data['reasonReference'])) {
                if (is_array($data['reasonReference'])) {
                    foreach($data['reasonReference'] as $d) {
                        $this->addReasonReference($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"reasonReference" must be array of objects or null, '.gettype($data['reasonReference']).' seen.');
                }
            }
            if (isset($data['payload'])) {
                if (is_array($data['payload'])) {
                    foreach($data['payload'] as $d) {
                        $this->addPayload($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"payload" must be array of objects or null, '.gettype($data['payload']).' seen.');
                }
            }
            if (isset($data['note'])) {
                if (is_array($data['note'])) {
                    foreach($data['note'] as $d) {
                        $this->addNote($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"note" must be array of objects or null, '.gettype($data['note']).' seen.');
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                if (null !== $identifier) $json['identifier'][] = $identifier;
            }
        }
        if (0 < count($this->instantiates)) {
            $json['instantiates'] = [];
            foreach($this->instantiates as $instantiates) {
                if (null !== $instantiates) $json['instantiates'][] = $instantiates;
            }
        }
        if (0 < count($this->basedOn)) {
            $json['basedOn'] = [];
            foreach($this->basedOn as $basedOn) {
                if (null !== $basedOn) $json['basedOn'][] = $basedOn;
            }
        }
        if (0 < count($this->partOf)) {
            $json['partOf'] = [];
            foreach($this->partOf as $partOf) {
                if (null !== $partOf) $json['partOf'][] = $partOf;
            }
        }
        if (0 < count($this->inResponseTo)) {
            $json['inResponseTo'] = [];
            foreach($this->inResponseTo as $inResponseTo) {
                if (null !== $inResponseTo) $json['inResponseTo'][] = $inResponseTo;
            }
        }
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->statusReason)) $json['statusReason'] = $this->statusReason;
        if (0 < count($this->category)) {
            $json['category'] = [];
            foreach($this->category as $category) {
                if (null !== $category) $json['category'][] = $category;
            }
        }
        if (isset($this->priority)) $json['priority'] = $this->priority;
        if (0 < count($this->medium)) {
            $json['medium'] = [];
            foreach($this->medium as $medium) {
                if (null !== $medium) $json['medium'][] = $medium;
            }
        }
        if (isset($this->subject)) $json['subject'] = $this->subject;
        if (0 < count($this->recipient)) {
            $json['recipient'] = [];
            foreach($this->recipient as $recipient) {
                if (null !== $recipient) $json['recipient'][] = $recipient;
            }
        }
        if (isset($this->topic)) $json['topic'] = $this->topic;
        if (0 < count($this->about)) {
            $json['about'] = [];
            foreach($this->about as $about) {
                if (null !== $about) $json['about'][] = $about;
            }
        }
        if (isset($this->context)) $json['context'] = $this->context;
        if (isset($this->sent)) $json['sent'] = $this->sent;
        if (isset($this->received)) $json['received'] = $this->received;
        if (isset($this->sender)) $json['sender'] = $this->sender;
        if (0 < count($this->reasonCode)) {
            $json['reasonCode'] = [];
            foreach($this->reasonCode as $reasonCode) {
                if (null !== $reasonCode) $json['reasonCode'][] = $reasonCode;
            }
        }
        if (0 < count($this->reasonReference)) {
            $json['reasonReference'] = [];
            foreach($this->reasonReference as $reasonReference) {
                if (null !== $reasonReference) $json['reasonReference'][] = $reasonReference;
            }
        }
        if (0 < count($this->payload)) {
            $json['payload'] = [];
            foreach($this->payload as $payload) {
                if (null !== $payload) $json['payload'][] = $payload;
            }
        }
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                if (null !== $note) $json['note'][] = $note;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Communication xmlns="http://hl7.org/fhir"></Communication>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (0 < count($this->instantiates)) {
            foreach($this->instantiates as $instantiates) {
                $instantiates->xmlSerialize(true, $sxe->addChild('instantiates'));
            }
        }
        if (0 < count($this->basedOn)) {
            foreach($this->basedOn as $basedOn) {
                $basedOn->xmlSerialize(true, $sxe->addChild('basedOn'));
            }
        }
        if (0 < count($this->partOf)) {
            foreach($this->partOf as $partOf) {
                $partOf->xmlSerialize(true, $sxe->addChild('partOf'));
            }
        }
        if (0 < count($this->inResponseTo)) {
            foreach($this->inResponseTo as $inResponseTo) {
                $inResponseTo->xmlSerialize(true, $sxe->addChild('inResponseTo'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->statusReason)) $this->statusReason->xmlSerialize(true, $sxe->addChild('statusReason'));
        if (0 < count($this->category)) {
            foreach($this->category as $category) {
                $category->xmlSerialize(true, $sxe->addChild('category'));
            }
        }
        if (isset($this->priority)) $this->priority->xmlSerialize(true, $sxe->addChild('priority'));
        if (0 < count($this->medium)) {
            foreach($this->medium as $medium) {
                $medium->xmlSerialize(true, $sxe->addChild('medium'));
            }
        }
        if (isset($this->subject)) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (0 < count($this->recipient)) {
            foreach($this->recipient as $recipient) {
                $recipient->xmlSerialize(true, $sxe->addChild('recipient'));
            }
        }
        if (isset($this->topic)) $this->topic->xmlSerialize(true, $sxe->addChild('topic'));
        if (0 < count($this->about)) {
            foreach($this->about as $about) {
                $about->xmlSerialize(true, $sxe->addChild('about'));
            }
        }
        if (isset($this->context)) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if (isset($this->sent)) $this->sent->xmlSerialize(true, $sxe->addChild('sent'));
        if (isset($this->received)) $this->received->xmlSerialize(true, $sxe->addChild('received'));
        if (isset($this->sender)) $this->sender->xmlSerialize(true, $sxe->addChild('sender'));
        if (0 < count($this->reasonCode)) {
            foreach($this->reasonCode as $reasonCode) {
                $reasonCode->xmlSerialize(true, $sxe->addChild('reasonCode'));
            }
        }
        if (0 < count($this->reasonReference)) {
            foreach($this->reasonReference as $reasonReference) {
                $reasonReference->xmlSerialize(true, $sxe->addChild('reasonReference'));
            }
        }
        if (0 < count($this->payload)) {
            foreach($this->payload as $payload) {
                $payload->xmlSerialize(true, $sxe->addChild('payload'));
            }
        }
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}