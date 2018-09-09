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
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCommunication\FHIRCommunicationPayload;
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIREventStatus;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRRequestPriority;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * An occurrence of information being transmitted; e.g. an alert that was sent to a responsible provider, a public health agency was notified about a reportable condition.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRCommunication
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRCommunication extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Communication';

    /**
     * Other resources that pertain to this communication and to which this communication should be associated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $about = null;

    /**
     * An order, proposal or plan fulfilled in whole or in part by this Communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $basedOn = null;

    /**
     * The type of message conveyed such as alert, notification, reminder, instruction, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * The encounter within which the communication was sent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * Business identifiers assigned to this communication by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Prior communication that this communication is in response to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $inResponseTo = null;

    /**
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $instantiatesCanonical = null;

    /**
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $instantiatesUri = null;

    /**
     * A channel that was used for this communication (e.g. email, fax).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $medium = null;

    /**
     * Additional notes or commentary about the communication by the sender, receiver or other interested parties.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * Part of this action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $partOf = null;

    /**
     * Text, attachment(s), or resource(s) that was communicated to the recipient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCommunication\FHIRCommunicationPayload
     */
    public $payload = null;

    /**
     * Characterizes how quickly the planned or in progress communication must be addressed. Includes concepts such as stat, urgent, routine.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     */
    public $priority = null;

    /**
     * The reason or justification for the communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCode = null;

    /**
     * Indicates another resource whose existence justifies this communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reasonReference = null;

    /**
     * The time when this communication arrived at the destination.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $received = null;

    /**
     * The entity (e.g. person, organization, clinical information system, care team or device) which was the target of the communication. If receipts need to be tracked by individual, a separate resource instance will need to be created for each recipient.  Multiple recipient communications are intended where either a receipt(s) is not tracked (e.g. a mass mail-out) or is captured in aggregate (all emails confirmed received by a particular time).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $recipient = null;

    /**
     * The entity (e.g. person, organization, clinical information system, or device) which was the source of the communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $sender = null;

    /**
     * The time when this communication was sent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $sent = null;

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
     * The patient or group that was the focus of this communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Description of the purpose/content, similar to a subject line in an email.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $topic = null;

    /**
     * FHIRCommunication Constructor
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
            if (isset($data['basedOn'])) {
                $this->setBasedOn($data['basedOn']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['inResponseTo'])) {
                $this->setInResponseTo($data['inResponseTo']);
            }
            if (isset($data['instantiatesCanonical'])) {
                $this->setInstantiatesCanonical($data['instantiatesCanonical']);
            }
            if (isset($data['instantiatesUri'])) {
                $this->setInstantiatesUri($data['instantiatesUri']);
            }
            if (isset($data['medium'])) {
                $this->setMedium($data['medium']);
            }
            if (isset($data['note'])) {
                $this->setNote($data['note']);
            }
            if (isset($data['partOf'])) {
                $this->setPartOf($data['partOf']);
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
            if (isset($data['received'])) {
                $this->setReceived($data['received']);
            }
            if (isset($data['recipient'])) {
                $this->setRecipient($data['recipient']);
            }
            if (isset($data['sender'])) {
                $this->setSender($data['sender']);
            }
            if (isset($data['sent'])) {
                $this->setSent($data['sent']);
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
            if (isset($data['topic'])) {
                $this->setTopic($data['topic']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunication::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Other resources that pertain to this communication and to which this communication should be associated.
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
     * Other resources that pertain to this communication and to which this communication should be associated.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAbout()
    {
        return $this->about;
    }


    /**
     * An order, proposal or plan fulfilled in whole or in part by this Communication.
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
     * An order, proposal or plan fulfilled in whole or in part by this Communication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }


    /**
     * The type of message conveyed such as alert, notification, reminder, instruction, etc.
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
     * The type of message conveyed such as alert, notification, reminder, instruction, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * The encounter within which the communication was sent.
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
     * The encounter within which the communication was sent.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }


    /**
     * Business identifiers assigned to this communication by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this communication by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Prior communication that this communication is in response to.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setInResponseTo(FHIRReference $inResponseTo = null)
    {
        if (null === $inResponseTo) {
            return $this; 
        }
        $this->inResponseTo = $inResponseTo;
        return $this;
    }

    /**
     * Prior communication that this communication is in response to.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getInResponseTo()
    {
        return $this->inResponseTo;
    }


    /**
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Communication.
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
                'FHIRCommunication::setInstantiatesCanonical - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($instantiatesCanonical)
            ));
        }
        $this->instantiatesCanonical = $instantiatesCanonical;
        return $this;
    }

    /**
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Communication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getInstantiatesCanonical()
    {
        return $this->instantiatesCanonical;
    }


    /**
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Communication.
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
                'FHIRCommunication::setInstantiatesUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($instantiatesUri)
            ));
        }
        $this->instantiatesUri = $instantiatesUri;
        return $this;
    }

    /**
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Communication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getInstantiatesUri()
    {
        return $this->instantiatesUri;
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
     * Additional notes or commentary about the communication by the sender, receiver or other interested parties.
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
     * Additional notes or commentary about the communication by the sender, receiver or other interested parties.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }


    /**
     * Part of this action.
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
     * Part of this action.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPartOf()
    {
        return $this->partOf;
    }


    /**
     * Text, attachment(s), or resource(s) that was communicated to the recipient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCommunication\FHIRCommunicationPayload
     * @return $this
     */
    public function setPayload(FHIRCommunicationPayload $payload = null)
    {
        if (null === $payload) {
            return $this; 
        }
        $this->payload = $payload;
        return $this;
    }

    /**
     * Text, attachment(s), or resource(s) that was communicated to the recipient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCommunication\FHIRCommunicationPayload
     */
    public function getPayload()
    {
        return $this->payload;
    }


    /**
     * Characterizes how quickly the planned or in progress communication must be addressed. Includes concepts such as stat, urgent, routine.
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
                'FHIRCommunication::setPriority - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRRequestPriority or appropriate scalar value, %s seen.',
                gettype($priority)
            ));
        }
        $this->priority = $priority;
        return $this;
    }

    /**
     * Characterizes how quickly the planned or in progress communication must be addressed. Includes concepts such as stat, urgent, routine.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     */
    public function getPriority()
    {
        return $this->priority;
    }


    /**
     * The reason or justification for the communication.
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
     * The reason or justification for the communication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }


    /**
     * Indicates another resource whose existence justifies this communication.
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
     * Indicates another resource whose existence justifies this communication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }


    /**
     * The time when this communication arrived at the destination.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setReceived($received)
    {
        if (null === $received) {
            return $this; 
        }
        if (is_scalar($received)) {
            $received = new FHIRDateTime($received);
        }
        if (!($received instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCommunication::setReceived - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($received)
            ));
        }
        $this->received = $received;
        return $this;
    }

    /**
     * The time when this communication arrived at the destination.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getReceived()
    {
        return $this->received;
    }


    /**
     * The entity (e.g. person, organization, clinical information system, care team or device) which was the target of the communication. If receipts need to be tracked by individual, a separate resource instance will need to be created for each recipient.  Multiple recipient communications are intended where either a receipt(s) is not tracked (e.g. a mass mail-out) or is captured in aggregate (all emails confirmed received by a particular time).
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
     * The entity (e.g. person, organization, clinical information system, care team or device) which was the target of the communication. If receipts need to be tracked by individual, a separate resource instance will need to be created for each recipient.  Multiple recipient communications are intended where either a receipt(s) is not tracked (e.g. a mass mail-out) or is captured in aggregate (all emails confirmed received by a particular time).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRecipient()
    {
        return $this->recipient;
    }


    /**
     * The entity (e.g. person, organization, clinical information system, or device) which was the source of the communication.
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
     * The entity (e.g. person, organization, clinical information system, or device) which was the source of the communication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSender()
    {
        return $this->sender;
    }


    /**
     * The time when this communication was sent.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setSent($sent)
    {
        if (null === $sent) {
            return $this; 
        }
        if (is_scalar($sent)) {
            $sent = new FHIRDateTime($sent);
        }
        if (!($sent instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCommunication::setSent - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($sent)
            ));
        }
        $this->sent = $sent;
        return $this;
    }

    /**
     * The time when this communication was sent.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getSent()
    {
        return $this->sent;
    }


    /**
     * The status of the transmission.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIREventStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIREventStatus($status);
        }
        if (!($status instanceof FHIREventStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCommunication::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIREventStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The status of the transmission.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIREventStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Captures the reason for the current state of the Communication.
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
     * Captures the reason for the current state of the Communication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }


    /**
     * The patient or group that was the focus of this communication.
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
     * The patient or group that was the focus of this communication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }


    /**
     * Description of the purpose/content, similar to a subject line in an email.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setTopic(FHIRCodeableConcept $topic = null)
    {
        if (null === $topic) {
            return $this; 
        }
        $this->topic = $topic;
        return $this;
    }

    /**
     * Description of the purpose/content, similar to a subject line in an email.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getTopic()
    {
        return $this->topic;
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
        if (null !== ($v = $this->getBasedOn())) {
            $a['basedOn'] = $v;
        }
        if (null !== ($v = $this->getCategory())) {
            $a['category'] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getInResponseTo())) {
            $a['inResponseTo'] = $v;
        }
        if (null !== ($v = $this->getInstantiatesCanonical())) {
            $a['instantiatesCanonical'] = $v;
        }
        if (null !== ($v = $this->getInstantiatesUri())) {
            $a['instantiatesUri'] = $v;
        }
        if (null !== ($v = $this->getMedium())) {
            $a['medium'] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a['note'] = $v;
        }
        if (null !== ($v = $this->getPartOf())) {
            $a['partOf'] = $v;
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
        if (null !== ($v = $this->getReceived())) {
            $a['received'] = $v;
        }
        if (null !== ($v = $this->getRecipient())) {
            $a['recipient'] = $v;
        }
        if (null !== ($v = $this->getSender())) {
            $a['sender'] = $v;
        }
        if (null !== ($v = $this->getSent())) {
            $a['sent'] = $v;
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
        if (null !== ($v = $this->getTopic())) {
            $a['topic'] = $v;
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
            $sxe = new \SimpleXMLElement('<Communication xmlns="http://hl7.org/fhir"></Communication>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}