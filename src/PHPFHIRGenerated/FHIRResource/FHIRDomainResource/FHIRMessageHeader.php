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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource;
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * The header for a message exchange that is either requesting or responding to an action.  The reference(s) that are the subject of the action as well as other information related to the action are typically transmitted in a bundle in which the MessageHeader resource instance is the first resource in the bundle.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRMessageHeader
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRMessageHeader extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'MessageHeader';

    /**
     * The logical author of the message - the person or device that decided the described event should happen. When there is more than one candidate, pick the most proximal to the MessageHeader. Can provide other authors in extensions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $author = null;

    /**
     * Permanent link to the MessageDefinition for this message.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $definition = null;

    /**
     * The destination application which the message is intended for.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination
     */
    public $destination = null;

    /**
     * The person or device that performed the data entry leading to this message. When there is more than one candidate, pick the most proximal to the message. Can provide other enterers in extensions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $enterer = null;

    /**
     * Code that identifies the event this message represents and connects it with its definition. Events defined as part of the FHIR specification have the system value "http://terminology.hl7.org/CodeSystem/message-events".  Alternatively uri to the EventDefinition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $eventCoding = null;

    /**
     * Code that identifies the event this message represents and connects it with its definition. Events defined as part of the FHIR specification have the system value "http://terminology.hl7.org/CodeSystem/message-events".  Alternatively uri to the EventDefinition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $eventUri = null;

    /**
     * The actual data of the message - a reference to the root/focus class of the event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $focus = null;

    /**
     * Coded indication of the cause for the event - indicates  a reason for the occurrence of the event that is a focus of this message.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reason = null;

    /**
     * Information about the message that this message is a response to.  Only present if this message is a response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse
     */
    public $response = null;

    /**
     * The person or organization that accepts overall responsibility for the contents of the message. The implication is that the message event happened under the policies of the responsible party.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $responsible = null;

    /**
     * Identifies the sending system to allow the use of a trust relationship.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $sender = null;

    /**
     * The source application from which this message originated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource
     */
    public $source = null;

    /**
     * FHIRMessageHeader Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['author'])) {
                $this->setAuthor($data['author']);
            }
            if (isset($data['definition'])) {
                $this->setDefinition($data['definition']);
            }
            if (isset($data['destination'])) {
                $this->setDestination($data['destination']);
            }
            if (isset($data['enterer'])) {
                $this->setEnterer($data['enterer']);
            }
            if (isset($data['eventCoding'])) {
                $this->setEventCoding($data['eventCoding']);
            }
            if (isset($data['eventUri'])) {
                $this->setEventUri($data['eventUri']);
            }
            if (isset($data['focus'])) {
                $this->setFocus($data['focus']);
            }
            if (isset($data['reason'])) {
                $this->setReason($data['reason']);
            }
            if (isset($data['response'])) {
                $this->setResponse($data['response']);
            }
            if (isset($data['responsible'])) {
                $this->setResponsible($data['responsible']);
            }
            if (isset($data['sender'])) {
                $this->setSender($data['sender']);
            }
            if (isset($data['source'])) {
                $this->setSource($data['source']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMessageHeader::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The logical author of the message - the person or device that decided the described event should happen. When there is more than one candidate, pick the most proximal to the MessageHeader. Can provide other authors in extensions.
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
     * The logical author of the message - the person or device that decided the described event should happen. When there is more than one candidate, pick the most proximal to the MessageHeader. Can provide other authors in extensions.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAuthor()
    {
        return $this->author;
    }


    /**
     * Permanent link to the MessageDefinition for this message.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setDefinition($definition)
    {
        if (null === $definition) {
            return $this; 
        }
        if (is_scalar($definition)) {
            $definition = new FHIRCanonical($definition);
        }
        if (!($definition instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMessageHeader::setDefinition - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($definition)
            ));
        }
        $this->definition = $definition;
        return $this;
    }

    /**
     * Permanent link to the MessageDefinition for this message.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getDefinition()
    {
        return $this->definition;
    }


    /**
     * The destination application which the message is intended for.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination
     * @return $this
     */
    public function setDestination(FHIRMessageHeaderDestination $destination = null)
    {
        if (null === $destination) {
            return $this; 
        }
        $this->destination = $destination;
        return $this;
    }

    /**
     * The destination application which the message is intended for.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination
     */
    public function getDestination()
    {
        return $this->destination;
    }


    /**
     * The person or device that performed the data entry leading to this message. When there is more than one candidate, pick the most proximal to the message. Can provide other enterers in extensions.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setEnterer(FHIRReference $enterer = null)
    {
        if (null === $enterer) {
            return $this; 
        }
        $this->enterer = $enterer;
        return $this;
    }

    /**
     * The person or device that performed the data entry leading to this message. When there is more than one candidate, pick the most proximal to the message. Can provide other enterers in extensions.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEnterer()
    {
        return $this->enterer;
    }


    /**
     * Code that identifies the event this message represents and connects it with its definition. Events defined as part of the FHIR specification have the system value "http://terminology.hl7.org/CodeSystem/message-events".  Alternatively uri to the EventDefinition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setEventCoding(FHIRCoding $eventCoding = null)
    {
        if (null === $eventCoding) {
            return $this; 
        }
        $this->eventCoding = $eventCoding;
        return $this;
    }

    /**
     * Code that identifies the event this message represents and connects it with its definition. Events defined as part of the FHIR specification have the system value "http://terminology.hl7.org/CodeSystem/message-events".  Alternatively uri to the EventDefinition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getEventCoding()
    {
        return $this->eventCoding;
    }


    /**
     * Code that identifies the event this message represents and connects it with its definition. Events defined as part of the FHIR specification have the system value "http://terminology.hl7.org/CodeSystem/message-events".  Alternatively uri to the EventDefinition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setEventUri($eventUri)
    {
        if (null === $eventUri) {
            return $this; 
        }
        if (is_scalar($eventUri)) {
            $eventUri = new FHIRUri($eventUri);
        }
        if (!($eventUri instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMessageHeader::setEventUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($eventUri)
            ));
        }
        $this->eventUri = $eventUri;
        return $this;
    }

    /**
     * Code that identifies the event this message represents and connects it with its definition. Events defined as part of the FHIR specification have the system value "http://terminology.hl7.org/CodeSystem/message-events".  Alternatively uri to the EventDefinition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getEventUri()
    {
        return $this->eventUri;
    }


    /**
     * The actual data of the message - a reference to the root/focus class of the event.
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
     * The actual data of the message - a reference to the root/focus class of the event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getFocus()
    {
        return $this->focus;
    }


    /**
     * Coded indication of the cause for the event - indicates  a reason for the occurrence of the event that is a focus of this message.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setReason(FHIRCodeableConcept $reason = null)
    {
        if (null === $reason) {
            return $this; 
        }
        $this->reason = $reason;
        return $this;
    }

    /**
     * Coded indication of the cause for the event - indicates  a reason for the occurrence of the event that is a focus of this message.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReason()
    {
        return $this->reason;
    }


    /**
     * Information about the message that this message is a response to.  Only present if this message is a response.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse
     * @return $this
     */
    public function setResponse(FHIRMessageHeaderResponse $response = null)
    {
        if (null === $response) {
            return $this; 
        }
        $this->response = $response;
        return $this;
    }

    /**
     * Information about the message that this message is a response to.  Only present if this message is a response.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse
     */
    public function getResponse()
    {
        return $this->response;
    }


    /**
     * The person or organization that accepts overall responsibility for the contents of the message. The implication is that the message event happened under the policies of the responsible party.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setResponsible(FHIRReference $responsible = null)
    {
        if (null === $responsible) {
            return $this; 
        }
        $this->responsible = $responsible;
        return $this;
    }

    /**
     * The person or organization that accepts overall responsibility for the contents of the message. The implication is that the message event happened under the policies of the responsible party.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getResponsible()
    {
        return $this->responsible;
    }


    /**
     * Identifies the sending system to allow the use of a trust relationship.
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
     * Identifies the sending system to allow the use of a trust relationship.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSender()
    {
        return $this->sender;
    }


    /**
     * The source application from which this message originated.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource
     * @return $this
     */
    public function setSource(FHIRMessageHeaderSource $source = null)
    {
        if (null === $source) {
            return $this; 
        }
        $this->source = $source;
        return $this;
    }

    /**
     * The source application from which this message originated.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource
     */
    public function getSource()
    {
        return $this->source;
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
        if (null !== ($v = $this->getAuthor())) {
            $a['author'] = $v;
        }
        if (null !== ($v = $this->getDefinition())) {
            $a['definition'] = $v;
        }
        if (null !== ($v = $this->getDestination())) {
            $a['destination'] = $v;
        }
        if (null !== ($v = $this->getEnterer())) {
            $a['enterer'] = $v;
        }
        if (null !== ($v = $this->getEventCoding())) {
            $a['eventCoding'] = $v;
        }
        if (null !== ($v = $this->getEventUri())) {
            $a['eventUri'] = $v;
        }
        if (null !== ($v = $this->getFocus())) {
            $a['focus'] = $v;
        }
        if (null !== ($v = $this->getReason())) {
            $a['reason'] = $v;
        }
        if (null !== ($v = $this->getResponse())) {
            $a['response'] = $v;
        }
        if (null !== ($v = $this->getResponsible())) {
            $a['responsible'] = $v;
        }
        if (null !== ($v = $this->getSender())) {
            $a['sender'] = $v;
        }
        if (null !== ($v = $this->getSource())) {
            $a['source'] = $v;
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
            $sxe = new \SimpleXMLElement('<MessageHeader xmlns="http://hl7.org/fhir"></MessageHeader>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}