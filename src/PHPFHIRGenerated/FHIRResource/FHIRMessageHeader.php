<?php namespace PHPFHIRGenerated\FHIRResource;

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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use PHPFHIRGenerated\FHIRResource\FHIRResource;

/**
 * The header for a message exchange that is either requesting or responding to an action.  The resource(s) that are the subject of the action as well as other Information related to the action are typically transmitted in a bundle in which the MessageHeader resource instance is the first resource in the bundle.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMessageHeader extends FHIRResource implements \JsonSerializable
{
    /**
     * The identifier of this message.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $identifier = null;

    /**
     * The time that the message was sent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $timestamp = null;

    /**
     * Code that identifies the event this message represents and connects it with it's definition. Events defined as part of the FHIR specification have the system value "http://hl7.org/fhir/message-type".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $event = null;

    /**
     * Information about the message that this message is a response to.  Only present if this message is a response.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMessageHeader\FHIRMessageHeaderResponse
     */
    public $response = null;

    /**
     * The source application from which this message originated.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMessageHeader\FHIRMessageHeaderSource
     */
    public $source = null;

    /**
     * The destination application which the message is intended for.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMessageHeader\FHIRMessageHeaderDestination[]
     */
    public $destination = array();

    /**
     * The person or device that performed the data entry leading to this message. Where there is more than one candidate, pick the most proximal to the message. Can provide other enterers in extensions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $enterer = null;

    /**
     * The logical author of the message - the person or device that decided the described event should happen. Where there is more than one candidate, pick the most proximal to the MessageHeader. Can provide other authors in extensions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $author = null;

    /**
     * Allows data conveyed by a message to be addressed to a particular person or department when routing to a specific application isn't sufficient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $receiver = null;

    /**
     * The person or organization that accepts overall responsibility for the contents of the message. The implication is that the message event happened under the policies of the responsible party.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $responsible = null;

    /**
     * Coded indication of the cause for the event - indicates  a reason for the occurance of the event that is a focus of this message.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reason = null;

    /**
     * The actual data of the message - a reference to the root/focus class of the event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public $data = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'MessageHeader';

    /**
     * The identifier of this message.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * The identifier of this message.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The time that the message was sent.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * The time that the message was sent.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $timestamp
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * Code that identifies the event this message represents and connects it with it's definition. Events defined as part of the FHIR specification have the system value "http://hl7.org/fhir/message-type".
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Code that identifies the event this message represents and connects it with it's definition. Events defined as part of the FHIR specification have the system value "http://hl7.org/fhir/message-type".
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $event
     * @return $this
     */
    public function setEvent($event)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * Information about the message that this message is a response to.  Only present if this message is a response.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMessageHeader\FHIRMessageHeaderResponse
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Information about the message that this message is a response to.  Only present if this message is a response.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMessageHeader\FHIRMessageHeaderResponse $response
     * @return $this
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * The source application from which this message originated.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMessageHeader\FHIRMessageHeaderSource
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * The source application from which this message originated.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMessageHeader\FHIRMessageHeaderSource $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * The destination application which the message is intended for.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMessageHeader\FHIRMessageHeaderDestination[]
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * The destination application which the message is intended for.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMessageHeader\FHIRMessageHeaderDestination $destination
     * @return $this
     */
    public function addDestination($destination)
    {
        $this->destination[] = $destination;
        return $this;
    }

    /**
     * The person or device that performed the data entry leading to this message. Where there is more than one candidate, pick the most proximal to the message. Can provide other enterers in extensions.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getEnterer()
    {
        return $this->enterer;
    }

    /**
     * The person or device that performed the data entry leading to this message. Where there is more than one candidate, pick the most proximal to the message. Can provide other enterers in extensions.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $enterer
     * @return $this
     */
    public function setEnterer($enterer)
    {
        $this->enterer = $enterer;
        return $this;
    }

    /**
     * The logical author of the message - the person or device that decided the described event should happen. Where there is more than one candidate, pick the most proximal to the MessageHeader. Can provide other authors in extensions.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * The logical author of the message - the person or device that decided the described event should happen. Where there is more than one candidate, pick the most proximal to the MessageHeader. Can provide other authors in extensions.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $author
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Allows data conveyed by a message to be addressed to a particular person or department when routing to a specific application isn't sufficient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Allows data conveyed by a message to be addressed to a particular person or department when routing to a specific application isn't sufficient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $receiver
     * @return $this
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;
        return $this;
    }

    /**
     * The person or organization that accepts overall responsibility for the contents of the message. The implication is that the message event happened under the policies of the responsible party.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getResponsible()
    {
        return $this->responsible;
    }

    /**
     * The person or organization that accepts overall responsibility for the contents of the message. The implication is that the message event happened under the policies of the responsible party.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $responsible
     * @return $this
     */
    public function setResponsible($responsible)
    {
        $this->responsible = $responsible;
        return $this;
    }

    /**
     * Coded indication of the cause for the event - indicates  a reason for the occurance of the event that is a focus of this message.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Coded indication of the cause for the event - indicates  a reason for the occurance of the event that is a focus of this message.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * The actual data of the message - a reference to the root/focus class of the event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * The actual data of the message - a reference to the root/focus class of the event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $data
     * @return $this
     */
    public function addData($data)
    {
        $this->data[] = $data;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (null !== $this->identifier) $json['identifier'] = $this->identifier;
        if (null !== $this->timestamp) $json['timestamp'] = $this->timestamp;
        if (null !== $this->event) $json['event'] = $this->event;
        if (null !== $this->response) $json['response'] = $this->response;
        if (null !== $this->source) $json['source'] = $this->source;
        if (0 < count($this->destination)) {
            $json['destination'] = [];
            foreach($this->destination as $destination) {
                $json['destination'][] = $destination;
            }
        }
        if (null !== $this->enterer) $json['enterer'] = $this->enterer;
        if (null !== $this->author) $json['author'] = $this->author;
        if (null !== $this->receiver) $json['receiver'] = $this->receiver;
        if (null !== $this->responsible) $json['responsible'] = $this->responsible;
        if (null !== $this->reason) $json['reason'] = $this->reason;
        if (0 < count($this->data)) {
            $json['data'] = [];
            foreach($this->data as $data) {
                $json['data'][] = $data;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MessageHeader xmlns="http://hl7.org/fhir"></MessageHeader>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (null !== $this->timestamp) $this->timestamp->xmlSerialize(true, $sxe->addChild('timestamp'));
        if (null !== $this->event) $this->event->xmlSerialize(true, $sxe->addChild('event'));
        if (null !== $this->response) $this->response->xmlSerialize(true, $sxe->addChild('response'));
        if (null !== $this->source) $this->source->xmlSerialize(true, $sxe->addChild('source'));
        if (0 < count($this->destination)) {
            foreach($this->destination as $destination) {
                $destination->xmlSerialize(true, $sxe->addChild('destination'));
            }
        }
        if (null !== $this->enterer) $this->enterer->xmlSerialize(true, $sxe->addChild('enterer'));
        if (null !== $this->author) $this->author->xmlSerialize(true, $sxe->addChild('author'));
        if (null !== $this->receiver) $this->receiver->xmlSerialize(true, $sxe->addChild('receiver'));
        if (null !== $this->responsible) $this->responsible->xmlSerialize(true, $sxe->addChild('responsible'));
        if (null !== $this->reason) $this->reason->xmlSerialize(true, $sxe->addChild('reason'));
        if (0 < count($this->data)) {
            foreach($this->data as $data) {
                $data->xmlSerialize(true, $sxe->addChild('data'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}