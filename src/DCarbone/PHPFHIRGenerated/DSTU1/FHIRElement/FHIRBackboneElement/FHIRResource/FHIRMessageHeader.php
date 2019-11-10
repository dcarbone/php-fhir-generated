<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 10th, 2019 18:12+0000
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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * The header for a message exchange that is either requesting or responding to an
 * action. The resource(s) that are the subject of the action as well as other
 * Information related to the action are typically transmitted in a bundle in which
 * the MessageHeader resource instance is the first resource in the bundle.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMessageHeader
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource
 */
class FHIRMessageHeader extends FHIRResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MESSAGE_HEADER;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_AUTHOR = 'author';
    const FIELD_DATA = 'data';
    const FIELD_DESTINATION = 'destination';
    const FIELD_ENTERER = 'enterer';
    const FIELD_EVENT = 'event';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_REASON = 'reason';
    const FIELD_RECEIVER = 'receiver';
    const FIELD_RESPONSE = 'response';
    const FIELD_RESPONSIBLE = 'responsible';
    const FIELD_SOURCE = 'source';
    const FIELD_TIMESTAMP = 'timestamp';
    const FIELD_TIMESTAMP_EXT = '_timestamp';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The logical author of the message - the person or device that decided the
     * described event should happen. Where there is more than one candidate, pick the
     * most proximal to the MessageHeader. Can provide other authors in extensions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $author = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual data of the message - a reference to the root/focus class of the
     * event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    protected $data = [];

    /**
     * The header for a message exchange that is either requesting or responding to an
     * action. The resource(s) that are the subject of the action as well as other
     * Information related to the action are typically transmitted in a bundle in which
     * the MessageHeader resource instance is the first resource in the bundle.
     *
     * The destination application which the message is intended for.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination[]
     */
    protected $destination = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or device that performed the data entry leading to this message.
     * Where there is more than one candidate, pick the most proximal to the message.
     * Can provide other enterers in extensions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $enterer = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code that identifies the event this message represents and connects it with it's
     * definition. Events defined as part of the FHIR specification have the system
     * value "http://hl7.org/fhir/message-type".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding
     */
    protected $event = null;

    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The identifier of this message.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId
     */
    protected $identifier = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Coded indication of the cause for the event - indicates a reason for the
     * occurance of the event that is a focus of this message.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected $reason = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows data conveyed by a message to be addressed to a particular person or
     * department when routing to a specific application isn't sufficient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $receiver = null;

    /**
     * The header for a message exchange that is either requesting or responding to an
     * action. The resource(s) that are the subject of the action as well as other
     * Information related to the action are typically transmitted in a bundle in which
     * the MessageHeader resource instance is the first resource in the bundle.
     *
     * Information about the message that this message is a response to. Only present
     * if this message is a response.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse
     */
    protected $response = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or organization that accepts overall responsibility for the contents
     * of the message. The implication is that the message event happened under the
     * policies of the responsible party.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $responsible = null;

    /**
     * The header for a message exchange that is either requesting or responding to an
     * action. The resource(s) that are the subject of the action as well as other
     * Information related to the action are typically transmitted in a bundle in which
     * the MessageHeader resource instance is the first resource in the bundle.
     *
     * The source application from which this message originated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource
     */
    protected $source = null;

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time that the message was sent.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant
     */
    protected $timestamp = null;

    /**
     * FHIRMessageHeader Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMessageHeader::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AUTHOR])) {
            if ($data[self::FIELD_AUTHOR] instanceof FHIRResourceReference) {
                $this->setAuthor($data[self::FIELD_AUTHOR]);
            } else {
                $this->setAuthor(new FHIRResourceReference($data[self::FIELD_AUTHOR]));
            }
        }
        if (isset($data[self::FIELD_DATA])) {
            if (is_array($data[self::FIELD_DATA])) {
                foreach($data[self::FIELD_DATA] as $v) {
                    if ($v instanceof FHIRResourceReference) {
                        $this->addData($v);
                    } else {
                        $this->addData(new FHIRResourceReference($v));
                    }
                }
            } else if ($data[self::FIELD_DATA] instanceof FHIRResourceReference) {
                $this->addData($data[self::FIELD_DATA]);
            } else {
                $this->addData(new FHIRResourceReference($data[self::FIELD_DATA]));
            }
        }
        if (isset($data[self::FIELD_DESTINATION])) {
            if (is_array($data[self::FIELD_DESTINATION])) {
                foreach($data[self::FIELD_DESTINATION] as $v) {
                    if ($v instanceof FHIRMessageHeaderDestination) {
                        $this->addDestination($v);
                    } else {
                        $this->addDestination(new FHIRMessageHeaderDestination($v));
                    }
                }
            } else if ($data[self::FIELD_DESTINATION] instanceof FHIRMessageHeaderDestination) {
                $this->addDestination($data[self::FIELD_DESTINATION]);
            } else {
                $this->addDestination(new FHIRMessageHeaderDestination($data[self::FIELD_DESTINATION]));
            }
        }
        if (isset($data[self::FIELD_ENTERER])) {
            if ($data[self::FIELD_ENTERER] instanceof FHIRResourceReference) {
                $this->setEnterer($data[self::FIELD_ENTERER]);
            } else {
                $this->setEnterer(new FHIRResourceReference($data[self::FIELD_ENTERER]));
            }
        }
        if (isset($data[self::FIELD_EVENT])) {
            if ($data[self::FIELD_EVENT] instanceof FHIRCoding) {
                $this->setEvent($data[self::FIELD_EVENT]);
            } else {
                $this->setEvent(new FHIRCoding($data[self::FIELD_EVENT]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT]))
                ? $data[self::FIELD_IDENTIFIER_EXT]
                : null;
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRId) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_IDENTIFIER])) {
                $this->setIdentifier(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_IDENTIFIER]] + $ext));
            } else {
                $this->setIdentifier(new FHIRId($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_REASON])) {
            if ($data[self::FIELD_REASON] instanceof FHIRCodeableConcept) {
                $this->setReason($data[self::FIELD_REASON]);
            } else {
                $this->setReason(new FHIRCodeableConcept($data[self::FIELD_REASON]));
            }
        }
        if (isset($data[self::FIELD_RECEIVER])) {
            if ($data[self::FIELD_RECEIVER] instanceof FHIRResourceReference) {
                $this->setReceiver($data[self::FIELD_RECEIVER]);
            } else {
                $this->setReceiver(new FHIRResourceReference($data[self::FIELD_RECEIVER]));
            }
        }
        if (isset($data[self::FIELD_RESPONSE])) {
            if ($data[self::FIELD_RESPONSE] instanceof FHIRMessageHeaderResponse) {
                $this->setResponse($data[self::FIELD_RESPONSE]);
            } else {
                $this->setResponse(new FHIRMessageHeaderResponse($data[self::FIELD_RESPONSE]));
            }
        }
        if (isset($data[self::FIELD_RESPONSIBLE])) {
            if ($data[self::FIELD_RESPONSIBLE] instanceof FHIRResourceReference) {
                $this->setResponsible($data[self::FIELD_RESPONSIBLE]);
            } else {
                $this->setResponsible(new FHIRResourceReference($data[self::FIELD_RESPONSIBLE]));
            }
        }
        if (isset($data[self::FIELD_SOURCE])) {
            if ($data[self::FIELD_SOURCE] instanceof FHIRMessageHeaderSource) {
                $this->setSource($data[self::FIELD_SOURCE]);
            } else {
                $this->setSource(new FHIRMessageHeaderSource($data[self::FIELD_SOURCE]));
            }
        }
        if (isset($data[self::FIELD_TIMESTAMP])) {
            $ext = (isset($data[self::FIELD_TIMESTAMP_EXT]) && is_array($data[self::FIELD_TIMESTAMP_EXT]))
                ? $data[self::FIELD_TIMESTAMP_EXT]
                : null;
            if ($data[self::FIELD_TIMESTAMP] instanceof FHIRInstant) {
                $this->setTimestamp($data[self::FIELD_TIMESTAMP]);
            } elseif ($ext && is_scalar($data[self::FIELD_TIMESTAMP])) {
                $this->setTimestamp(new FHIRInstant([FHIRInstant::FIELD_VALUE => $data[self::FIELD_TIMESTAMP]] + $ext));
            } else {
                $this->setTimestamp(new FHIRInstant($data[self::FIELD_TIMESTAMP]));
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return static
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
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
        return "<MessageHeader{$xmlns}></MessageHeader>";
    }

    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The logical author of the message - the person or device that decided the
     * described event should happen. Where there is more than one candidate, pick the
     * most proximal to the MessageHeader. Can provide other authors in extensions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The logical author of the message - the person or device that decided the
     * described event should happen. Where there is more than one candidate, pick the
     * most proximal to the MessageHeader. Can provide other authors in extensions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $author
     * @return static
     */
    public function setAuthor(FHIRResourceReference $author = null)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual data of the message - a reference to the root/focus class of the
     * event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual data of the message - a reference to the root/focus class of the
     * event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $data
     * @return static
     */
    public function addData(FHIRResourceReference $data = null)
    {
        $this->data[] = $data;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual data of the message - a reference to the root/focus class of the
     * event.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[] $data
     * @return static
     */
    public function setData(array $data = [])
    {
        $this->data = [];
        if ([] === $data) {
            return $this;
        }
        foreach($data as $v) {
            if ($v instanceof FHIRResourceReference) {
                $this->addData($v);
            } else {
                $this->addData(new FHIRResourceReference($v));
            }
        }
        return $this;
    }

    /**
     * The header for a message exchange that is either requesting or responding to an
     * action. The resource(s) that are the subject of the action as well as other
     * Information related to the action are typically transmitted in a bundle in which
     * the MessageHeader resource instance is the first resource in the bundle.
     *
     * The destination application which the message is intended for.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination[]
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * The header for a message exchange that is either requesting or responding to an
     * action. The resource(s) that are the subject of the action as well as other
     * Information related to the action are typically transmitted in a bundle in which
     * the MessageHeader resource instance is the first resource in the bundle.
     *
     * The destination application which the message is intended for.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination $destination
     * @return static
     */
    public function addDestination(FHIRMessageHeaderDestination $destination = null)
    {
        $this->destination[] = $destination;
        return $this;
    }

    /**
     * The header for a message exchange that is either requesting or responding to an
     * action. The resource(s) that are the subject of the action as well as other
     * Information related to the action are typically transmitted in a bundle in which
     * the MessageHeader resource instance is the first resource in the bundle.
     *
     * The destination application which the message is intended for.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination[] $destination
     * @return static
     */
    public function setDestination(array $destination = [])
    {
        $this->destination = [];
        if ([] === $destination) {
            return $this;
        }
        foreach($destination as $v) {
            if ($v instanceof FHIRMessageHeaderDestination) {
                $this->addDestination($v);
            } else {
                $this->addDestination(new FHIRMessageHeaderDestination($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or device that performed the data entry leading to this message.
     * Where there is more than one candidate, pick the most proximal to the message.
     * Can provide other enterers in extensions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getEnterer()
    {
        return $this->enterer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or device that performed the data entry leading to this message.
     * Where there is more than one candidate, pick the most proximal to the message.
     * Can provide other enterers in extensions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $enterer
     * @return static
     */
    public function setEnterer(FHIRResourceReference $enterer = null)
    {
        $this->enterer = $enterer;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code that identifies the event this message represents and connects it with it's
     * definition. Events defined as part of the FHIR specification have the system
     * value "http://hl7.org/fhir/message-type".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code that identifies the event this message represents and connects it with it's
     * definition. Events defined as part of the FHIR specification have the system
     * value "http://hl7.org/fhir/message-type".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding $event
     * @return static
     */
    public function setEvent(FHIRCoding $event = null)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The identifier of this message.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The identifier of this message.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId $identifier
     * @return static
     */
    public function setIdentifier($identifier = null)
    {
        if (null === $identifier) {
            $this->identifier = null;
            return $this;
        }
        if ($identifier instanceof FHIRId) {
            $this->identifier = $identifier;
            return $this;
        }
        $this->identifier = new FHIRId($identifier);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Coded indication of the cause for the event - indicates a reason for the
     * occurance of the event that is a focus of this message.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
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
     * Coded indication of the cause for the event - indicates a reason for the
     * occurance of the event that is a focus of this message.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $reason
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
     * Allows data conveyed by a message to be addressed to a particular person or
     * department when routing to a specific application isn't sufficient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows data conveyed by a message to be addressed to a particular person or
     * department when routing to a specific application isn't sufficient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $receiver
     * @return static
     */
    public function setReceiver(FHIRResourceReference $receiver = null)
    {
        $this->receiver = $receiver;
        return $this;
    }

    /**
     * The header for a message exchange that is either requesting or responding to an
     * action. The resource(s) that are the subject of the action as well as other
     * Information related to the action are typically transmitted in a bundle in which
     * the MessageHeader resource instance is the first resource in the bundle.
     *
     * Information about the message that this message is a response to. Only present
     * if this message is a response.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * The header for a message exchange that is either requesting or responding to an
     * action. The resource(s) that are the subject of the action as well as other
     * Information related to the action are typically transmitted in a bundle in which
     * the MessageHeader resource instance is the first resource in the bundle.
     *
     * Information about the message that this message is a response to. Only present
     * if this message is a response.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse $response
     * @return static
     */
    public function setResponse(FHIRMessageHeaderResponse $response = null)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or organization that accepts overall responsibility for the contents
     * of the message. The implication is that the message event happened under the
     * policies of the responsible party.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getResponsible()
    {
        return $this->responsible;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or organization that accepts overall responsibility for the contents
     * of the message. The implication is that the message event happened under the
     * policies of the responsible party.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $responsible
     * @return static
     */
    public function setResponsible(FHIRResourceReference $responsible = null)
    {
        $this->responsible = $responsible;
        return $this;
    }

    /**
     * The header for a message exchange that is either requesting or responding to an
     * action. The resource(s) that are the subject of the action as well as other
     * Information related to the action are typically transmitted in a bundle in which
     * the MessageHeader resource instance is the first resource in the bundle.
     *
     * The source application from which this message originated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * The header for a message exchange that is either requesting or responding to an
     * action. The resource(s) that are the subject of the action as well as other
     * Information related to the action are typically transmitted in a bundle in which
     * the MessageHeader resource instance is the first resource in the bundle.
     *
     * The source application from which this message originated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource $source
     * @return static
     */
    public function setSource(FHIRMessageHeaderSource $source = null)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time that the message was sent.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time that the message was sent.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant $timestamp
     * @return static
     */
    public function setTimestamp($timestamp = null)
    {
        if (null === $timestamp) {
            $this->timestamp = null;
            return $this;
        }
        if ($timestamp instanceof FHIRInstant) {
            $this->timestamp = $timestamp;
            return $this;
        }
        $this->timestamp = new FHIRInstant($timestamp);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMessageHeader $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMessageHeader
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
                throw new \DomainException(sprintf('FHIRMessageHeader::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMessageHeader::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMessageHeader;
        } elseif (!is_object($type) || !($type instanceof FHIRMessageHeader)) {
            throw new \RuntimeException(sprintf(
                'FHIRMessageHeader::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMessageHeader or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->author)) {
            $type->setAuthor(FHIRResourceReference::xmlUnserialize($children->author));
        }
        if (isset($children->data)) {
            foreach($children->data as $child) {
                $type->addData(FHIRResourceReference::xmlUnserialize($child));
            }
        }
        if (isset($children->destination)) {
            foreach($children->destination as $child) {
                $type->addDestination(FHIRMessageHeaderDestination::xmlUnserialize($child));
            }
        }
        if (isset($children->enterer)) {
            $type->setEnterer(FHIRResourceReference::xmlUnserialize($children->enterer));
        }
        if (isset($children->event)) {
            $type->setEvent(FHIRCoding::xmlUnserialize($children->event));
        }
        if (isset($attributes->identifier)) {
            $type->setIdentifier((string)$attributes->identifier);
        }
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRId::xmlUnserialize($children->identifier));
        }
        if (isset($children->reason)) {
            $type->setReason(FHIRCodeableConcept::xmlUnserialize($children->reason));
        }
        if (isset($children->receiver)) {
            $type->setReceiver(FHIRResourceReference::xmlUnserialize($children->receiver));
        }
        if (isset($children->response)) {
            $type->setResponse(FHIRMessageHeaderResponse::xmlUnserialize($children->response));
        }
        if (isset($children->responsible)) {
            $type->setResponsible(FHIRResourceReference::xmlUnserialize($children->responsible));
        }
        if (isset($children->source)) {
            $type->setSource(FHIRMessageHeaderSource::xmlUnserialize($children->source));
        }
        if (isset($attributes->timestamp)) {
            $type->setTimestamp((string)$attributes->timestamp);
        }
        if (isset($children->timestamp)) {
            $type->setTimestamp(FHIRInstant::xmlUnserialize($children->timestamp));
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

        if (null !== ($v = $this->getAuthor())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHOR, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getData())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DATA, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getDestination())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DESTINATION, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getEnterer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENTERER, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getEvent())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EVENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getReason())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REASON, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getReceiver())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RECEIVER, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getResponse())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESPONSE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getResponsible())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESPONSIBLE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getSource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTimestamp())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIMESTAMP, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAuthor())) {
            $a[self::FIELD_AUTHOR] = $v;
        }
        if ([] !== ($vs = $this->getData())) {
            $a[self::FIELD_DATA] = $vs;
        }
        if ([] !== ($vs = $this->getDestination())) {
            $a[self::FIELD_DESTINATION] = $vs;
        }
        if (null !== ($v = $this->getEnterer())) {
            $a[self::FIELD_ENTERER] = $v;
        }
        if (null !== ($v = $this->getEvent())) {
            $a[self::FIELD_EVENT] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v->getValue();
            $a[self::FIELD_IDENTIFIER_EXT] = $v;
        }
        if (null !== ($v = $this->getReason())) {
            $a[self::FIELD_REASON] = $v;
        }
        if (null !== ($v = $this->getReceiver())) {
            $a[self::FIELD_RECEIVER] = $v;
        }
        if (null !== ($v = $this->getResponse())) {
            $a[self::FIELD_RESPONSE] = $v;
        }
        if (null !== ($v = $this->getResponsible())) {
            $a[self::FIELD_RESPONSIBLE] = $v;
        }
        if (null !== ($v = $this->getSource())) {
            $a[self::FIELD_SOURCE] = $v;
        }
        if (null !== ($v = $this->getTimestamp())) {
            $a[self::FIELD_TIMESTAMP] = $v->getValue();
            $a[self::FIELD_TIMESTAMP_EXT] = $v;
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