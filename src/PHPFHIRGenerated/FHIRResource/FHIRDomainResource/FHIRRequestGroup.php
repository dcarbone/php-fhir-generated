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
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction;
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRRequestIntent;
use PHPFHIRGenerated\FHIRElement\FHIRRequestPriority;
use PHPFHIRGenerated\FHIRElement\FHIRRequestStatus;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A group of related requests that can be used to capture intended activities that have inter-dependencies such as "give this medication after that one".
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRRequestGroup
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRRequestGroup extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'RequestGroup';

    /**
     * The actions, if any, produced by the evaluation of the artifact.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
     */
    public $action = null;

    /**
     * Provides a reference to the author of the request group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $author = null;

    /**
     * Indicates when the request group was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $authoredOn = null;

    /**
     * A plan, proposal or order that is fulfilled in whole or in part by this request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $basedOn = null;

    /**
     * A code that identifies what the overall request group is.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * Describes the context of the request group, if any.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * A shared identifier common to all requests that were authorized more or less simultaneously by a single author, representing the identifier of the requisition, prescription or similar form.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $groupIdentifier = null;

    /**
     * Allows a service to provide a unique, business identifier for the request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * A canonical URL referencing a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $instantiatesCanonical = null;

    /**
     * A URL referencing an externally defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $instantiatesUri = null;

    /**
     * Indicates the level of authority/intentionality associated with the request and where the request fits into the workflow chain.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRequestIntent
     */
    public $intent = null;

    /**
     * Provides a mechanism to communicate additional information about the response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * Indicates how quickly the request should be addressed with respect to other requests.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     */
    public $priority = null;

    /**
     * Describes the reason for the request group in coded or textual form.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCode = null;

    /**
     * Indicates another resource whose existence justifies this request group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reasonReference = null;

    /**
     * Completed or terminated request(s) whose function is taken by this new request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $replaces = null;

    /**
     * The current state of the request. For request groups, the status reflects the status of all the requests in the group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRequestStatus
     */
    public $status = null;

    /**
     * The subject for which the request group was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * FHIRRequestGroup Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['action'])) {
                $this->setAction($data['action']);
            }
            if (isset($data['author'])) {
                $this->setAuthor($data['author']);
            }
            if (isset($data['authoredOn'])) {
                $this->setAuthoredOn($data['authoredOn']);
            }
            if (isset($data['basedOn'])) {
                $this->setBasedOn($data['basedOn']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['groupIdentifier'])) {
                $this->setGroupIdentifier($data['groupIdentifier']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['instantiatesCanonical'])) {
                $this->setInstantiatesCanonical($data['instantiatesCanonical']);
            }
            if (isset($data['instantiatesUri'])) {
                $this->setInstantiatesUri($data['instantiatesUri']);
            }
            if (isset($data['intent'])) {
                $this->setIntent($data['intent']);
            }
            if (isset($data['note'])) {
                $this->setNote($data['note']);
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
            if (isset($data['replaces'])) {
                $this->setReplaces($data['replaces']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRRequestGroup::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The actions, if any, produced by the evaluation of the artifact.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
     * @return $this
     */
    public function setAction(FHIRRequestGroupAction $action = null)
    {
        if (null === $action) {
            return $this; 
        }
        $this->action = $action;
        return $this;
    }

    /**
     * The actions, if any, produced by the evaluation of the artifact.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction
     */
    public function getAction()
    {
        return $this->action;
    }


    /**
     * Provides a reference to the author of the request group.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setAuthor(FHIRReference $author = null)
    {
        if (null === $author) {
            return $this; 
        }
        $this->author = $author;
        return $this;
    }

    /**
     * Provides a reference to the author of the request group.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAuthor()
    {
        return $this->author;
    }


    /**
     * Indicates when the request group was created.
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
                'FHIRRequestGroup::setAuthoredOn - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($authoredOn)
            ));
        }
        $this->authoredOn = $authoredOn;
        return $this;
    }

    /**
     * Indicates when the request group was created.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getAuthoredOn()
    {
        return $this->authoredOn;
    }


    /**
     * A plan, proposal or order that is fulfilled in whole or in part by this request.
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
     * A plan, proposal or order that is fulfilled in whole or in part by this request.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }


    /**
     * A code that identifies what the overall request group is.
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
     * A code that identifies what the overall request group is.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * Describes the context of the request group, if any.
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
     * Describes the context of the request group, if any.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
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
     * Allows a service to provide a unique, business identifier for the request.
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
     * Allows a service to provide a unique, business identifier for the request.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * A canonical URL referencing a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this request.
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
                'FHIRRequestGroup::setInstantiatesCanonical - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($instantiatesCanonical)
            ));
        }
        $this->instantiatesCanonical = $instantiatesCanonical;
        return $this;
    }

    /**
     * A canonical URL referencing a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this request.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getInstantiatesCanonical()
    {
        return $this->instantiatesCanonical;
    }


    /**
     * A URL referencing an externally defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this request.
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
                'FHIRRequestGroup::setInstantiatesUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($instantiatesUri)
            ));
        }
        $this->instantiatesUri = $instantiatesUri;
        return $this;
    }

    /**
     * A URL referencing an externally defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this request.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getInstantiatesUri()
    {
        return $this->instantiatesUri;
    }


    /**
     * Indicates the level of authority/intentionality associated with the request and where the request fits into the workflow chain.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRequestIntent
     * @return $this
     */
    public function setIntent($intent)
    {
        if (null === $intent) {
            return $this; 
        }
        if (is_scalar($intent)) {
            $intent = new FHIRRequestIntent($intent);
        }
        if (!($intent instanceof FHIRRequestIntent)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRRequestGroup::setIntent - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRRequestIntent or appropriate scalar value, %s seen.',
                gettype($intent)
            ));
        }
        $this->intent = $intent;
        return $this;
    }

    /**
     * Indicates the level of authority/intentionality associated with the request and where the request fits into the workflow chain.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRequestIntent
     */
    public function getIntent()
    {
        return $this->intent;
    }


    /**
     * Provides a mechanism to communicate additional information about the response.
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
     * Provides a mechanism to communicate additional information about the response.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }


    /**
     * Indicates how quickly the request should be addressed with respect to other requests.
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
                'FHIRRequestGroup::setPriority - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRRequestPriority or appropriate scalar value, %s seen.',
                gettype($priority)
            ));
        }
        $this->priority = $priority;
        return $this;
    }

    /**
     * Indicates how quickly the request should be addressed with respect to other requests.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     */
    public function getPriority()
    {
        return $this->priority;
    }


    /**
     * Describes the reason for the request group in coded or textual form.
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
     * Describes the reason for the request group in coded or textual form.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }


    /**
     * Indicates another resource whose existence justifies this request group.
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
     * Indicates another resource whose existence justifies this request group.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
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
     * The current state of the request. For request groups, the status reflects the status of all the requests in the group.
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
                'FHIRRequestGroup::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRRequestStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The current state of the request. For request groups, the status reflects the status of all the requests in the group.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRequestStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * The subject for which the request group was created.
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
     * The subject for which the request group was created.
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
        if (null !== ($v = $this->getAction())) {
            $a['action'] = $v;
        }
        if (null !== ($v = $this->getAuthor())) {
            $a['author'] = $v;
        }
        if (null !== ($v = $this->getAuthoredOn())) {
            $a['authoredOn'] = $v;
        }
        if (null !== ($v = $this->getBasedOn())) {
            $a['basedOn'] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
        }
        if (null !== ($v = $this->getGroupIdentifier())) {
            $a['groupIdentifier'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getInstantiatesCanonical())) {
            $a['instantiatesCanonical'] = $v;
        }
        if (null !== ($v = $this->getInstantiatesUri())) {
            $a['instantiatesUri'] = $v;
        }
        if (null !== ($v = $this->getIntent())) {
            $a['intent'] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a['note'] = $v;
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
        if (null !== ($v = $this->getReplaces())) {
            $a['replaces'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
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
            $sxe = new \SimpleXMLElement('<RequestGroup xmlns="http://hl7.org/fhir"></RequestGroup>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}