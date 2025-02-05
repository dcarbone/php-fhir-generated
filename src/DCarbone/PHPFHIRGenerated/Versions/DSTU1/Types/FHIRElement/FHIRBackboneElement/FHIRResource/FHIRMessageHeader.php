<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 01:55+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRResourceInline;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionTypeMap;

/**
 * The header for a message exchange that is either requesting or responding to an
 * action. The resource(s) that are the subject of the action as well as other
 * Information related to the action are typically transmitted in a bundle in which
 * the MessageHeader resource instance is the first resource in the bundle.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRMessageHeader extends FHIRResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MESSAGE_HEADER;

    /* class_default.php:50 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_IDENTIFIER_EXT = '_identifier';
    public const FIELD_TIMESTAMP = 'timestamp';
    public const FIELD_TIMESTAMP_EXT = '_timestamp';
    public const FIELD_EVENT = 'event';
    public const FIELD_RESPONSE = 'response';
    public const FIELD_SOURCE = 'source';
    public const FIELD_DESTINATION = 'destination';
    public const FIELD_ENTERER = 'enterer';
    public const FIELD_AUTHOR = 'author';
    public const FIELD_RECEIVER = 'receiver';
    public const FIELD_RESPONSIBLE = 'responsible';
    public const FIELD_REASON = 'reason';
    public const FIELD_DATA = 'data';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_IDENTIFIER => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_TIMESTAMP => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_EVENT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_SOURCE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_IDENTIFIER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TIMESTAMP => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The identifier of this message.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId 
     */
    protected FHIRId $identifier;
    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time that the message was sent.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant 
     */
    protected FHIRInstant $timestamp;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code that identifies the event this message represents and connects it with it's
     * definition. Events defined as part of the FHIR specification have the system
     * value "http://hl7.org/fhir/message-type".
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $event;
    /**
     * The header for a message exchange that is either requesting or responding to an
     * action. The resource(s) that are the subject of the action as well as other
     * Information related to the action are typically transmitted in a bundle in which
     * the MessageHeader resource instance is the first resource in the bundle.
     *
     * Information about the message that this message is a response to. Only present
     * if this message is a response.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse 
     */
    protected FHIRMessageHeaderResponse $response;
    /**
     * The header for a message exchange that is either requesting or responding to an
     * action. The resource(s) that are the subject of the action as well as other
     * Information related to the action are typically transmitted in a bundle in which
     * the MessageHeader resource instance is the first resource in the bundle.
     *
     * The source application from which this message originated.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource 
     */
    protected FHIRMessageHeaderSource $source;
    /**
     * The header for a message exchange that is either requesting or responding to an
     * action. The resource(s) that are the subject of the action as well as other
     * Information related to the action are typically transmitted in a bundle in which
     * the MessageHeader resource instance is the first resource in the bundle.
     *
     * The destination application which the message is intended for.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination[] 
     */
    protected array $destination;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or device that performed the data entry leading to this message.
     * Where there is more than one candidate, pick the most proximal to the message.
     * Can provide other enterers in extensions.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $enterer;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The logical author of the message - the person or device that decided the
     * described event should happen. Where there is more than one candidate, pick the
     * most proximal to the MessageHeader. Can provide other authors in extensions.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $author;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows data conveyed by a message to be addressed to a particular person or
     * department when routing to a specific application isn't sufficient.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $receiver;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or organization that accepts overall responsibility for the contents
     * of the message. The implication is that the message event happened under the
     * policies of the responsible party.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $responsible;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Coded indication of the cause for the event - indicates a reason for the
     * occurance of the event that is a focus of this message.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $reason;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual data of the message - a reference to the root/focus class of the
     * event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[] 
     */
    protected array $data;

    /* constructor.php:61 */
    /**
     * FHIRMessageHeader Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRResourceInline[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface[] $contained
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId $identifier
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant $timestamp
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding $event
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse $response
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource $source
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination[] $destination
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $enterer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $author
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $receiver
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $responsible
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $reason
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[] $data
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|string|FHIRIdPrimitive|FHIRId $identifier = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $timestamp = null,
                                null|FHIRCoding $event = null,
                                null|FHIRMessageHeaderResponse $response = null,
                                null|FHIRMessageHeaderSource $source = null,
                                null|iterable $destination = null,
                                null|FHIRResourceReference $enterer = null,
                                null|FHIRResourceReference $author = null,
                                null|FHIRResourceReference $receiver = null,
                                null|FHIRResourceReference $responsible = null,
                                null|FHIRCodeableConcept $reason = null,
                                null|iterable $data = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            language: $language,
                            text: $text,
                            contained: $contained,
                            fhirComments: $fhirComments);
        if (null !== $identifier) {
            $this->setIdentifier($identifier);
        }
        if (null !== $timestamp) {
            $this->setTimestamp($timestamp);
        }
        if (null !== $event) {
            $this->setEvent($event);
        }
        if (null !== $response) {
            $this->setResponse($response);
        }
        if (null !== $source) {
            $this->setSource($source);
        }
        if (null !== $destination) {
            $this->setDestination(...$destination);
        }
        if (null !== $enterer) {
            $this->setEnterer($enterer);
        }
        if (null !== $author) {
            $this->setAuthor($author);
        }
        if (null !== $receiver) {
            $this->setReceiver($receiver);
        }
        if (null !== $responsible) {
            $this->setResponsible($responsible);
        }
        if (null !== $reason) {
            $this->setReason($reason);
        }
        if (null !== $data) {
            $this->setData(...$data);
        }
    }

    /* class_default.php:146 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:158 */
    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:172 */
    /**
     * A whole number in the range to 2^64-1, optionally represented in hex, a uuid, an
     * oid or any other combination of lower-case letters a-z, numerals, "-" and ".",
     * with a length limit of 36 characters
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The identifier of this message.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId
     */
    public function getIdentifier(): null|FHIRId
    {
        return $this->identifier ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId $identifier
     * @return static
     */
    public function setIdentifier(null|string|FHIRIdPrimitive|FHIRId $identifier): self
    {
        if (null === $identifier) {
            unset($this->identifier);
            return $this;
        }
        if (!($identifier instanceof FHIRId)) {
            $identifier = new FHIRId(value: $identifier);
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time that the message was sent.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant
     */
    public function getTimestamp(): null|FHIRInstant
    {
        return $this->timestamp ?? null;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time that the message was sent.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant $timestamp
     * @return static
     */
    public function setTimestamp(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $timestamp): self
    {
        if (null === $timestamp) {
            unset($this->timestamp);
            return $this;
        }
        if (!($timestamp instanceof FHIRInstant)) {
            $timestamp = new FHIRInstant(value: $timestamp);
        }
        $this->timestamp = $timestamp;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding
     */
    public function getEvent(): null|FHIRCoding
    {
        return $this->event ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding $event
     * @return static
     */
    public function setEvent(null|FHIRCoding $event): self
    {
        if (null === $event) {
            unset($this->event);
            return $this;
        }
        $this->event = $event;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse
     */
    public function getResponse(): null|FHIRMessageHeaderResponse
    {
        return $this->response ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse $response
     * @return static
     */
    public function setResponse(null|FHIRMessageHeaderResponse $response): self
    {
        if (null === $response) {
            unset($this->response);
            return $this;
        }
        $this->response = $response;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource
     */
    public function getSource(): null|FHIRMessageHeaderSource
    {
        return $this->source ?? null;
    }

    /**
     * The header for a message exchange that is either requesting or responding to an
     * action. The resource(s) that are the subject of the action as well as other
     * Information related to the action are typically transmitted in a bundle in which
     * the MessageHeader resource instance is the first resource in the bundle.
     *
     * The source application from which this message originated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource $source
     * @return static
     */
    public function setSource(null|FHIRMessageHeaderSource $source): self
    {
        if (null === $source) {
            unset($this->source);
            return $this;
        }
        $this->source = $source;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination[]
     */
    public function getDestination(): array
    {
        return $this->destination ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination>
     */
    public function getDestinationIterator(): iterable
    {
        if (!isset($this->destination)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->destination);
    }

    /**
     * The header for a message exchange that is either requesting or responding to an
     * action. The resource(s) that are the subject of the action as well as other
     * Information related to the action are typically transmitted in a bundle in which
     * the MessageHeader resource instance is the first resource in the bundle.
     *
     * The destination application which the message is intended for.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination $destination
     * @return static
     */
    public function addDestination(FHIRMessageHeaderDestination $destination): self
    {
        if (!isset($this->destination)) {
            $this->destination = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination ...$destination
     * @return static
     */
    public function setDestination(FHIRMessageHeaderDestination ...$destination): self
    {
        if ([] === $destination) {
            unset($this->destination);
            return $this;
        }
        $this->destination = $destination;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getEnterer(): null|FHIRResourceReference
    {
        return $this->enterer ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $enterer
     * @return static
     */
    public function setEnterer(null|FHIRResourceReference $enterer): self
    {
        if (null === $enterer) {
            unset($this->enterer);
            return $this;
        }
        $this->enterer = $enterer;
        return $this;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getAuthor(): null|FHIRResourceReference
    {
        return $this->author ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $author
     * @return static
     */
    public function setAuthor(null|FHIRResourceReference $author): self
    {
        if (null === $author) {
            unset($this->author);
            return $this;
        }
        $this->author = $author;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getReceiver(): null|FHIRResourceReference
    {
        return $this->receiver ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows data conveyed by a message to be addressed to a particular person or
     * department when routing to a specific application isn't sufficient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $receiver
     * @return static
     */
    public function setReceiver(null|FHIRResourceReference $receiver): self
    {
        if (null === $receiver) {
            unset($this->receiver);
            return $this;
        }
        $this->receiver = $receiver;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getResponsible(): null|FHIRResourceReference
    {
        return $this->responsible ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $responsible
     * @return static
     */
    public function setResponsible(null|FHIRResourceReference $responsible): self
    {
        if (null === $responsible) {
            unset($this->responsible);
            return $this;
        }
        $this->responsible = $responsible;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getReason(): null|FHIRCodeableConcept
    {
        return $this->reason ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $reason
     * @return static
     */
    public function setReason(null|FHIRCodeableConcept $reason): self
    {
        if (null === $reason) {
            unset($this->reason);
            return $this;
        }
        $this->reason = $reason;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[]
     */
    public function getData(): array
    {
        return $this->data ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference>
     */
    public function getDataIterator(): iterable
    {
        if (!isset($this->data)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->data);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual data of the message - a reference to the root/focus class of the
     * event.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $data
     * @return static
     */
    public function addData(FHIRResourceReference $data): self
    {
        if (!isset($this->data)) {
            $this->data = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference ...$data
     * @return static
     */
    public function setData(FHIRResourceReference ...$data): self
    {
        if ([] === $data) {
            unset($this->data);
            return $this;
        }
        $this->data = $data;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMessageHeader $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMessageHeader
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMessageHeader)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LANGUAGE === $cen) {
                $type->setLanguage(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRNarrative::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED === $cen) {
                foreach ($ce->children() as $cen) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->setIdentifier(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIMESTAMP === $cen) {
                $type->setTimestamp(FHIRInstant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EVENT === $cen) {
                $type->setEvent(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RESPONSE === $cen) {
                $type->setResponse(FHIRMessageHeaderResponse::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SOURCE === $cen) {
                $type->setSource(FHIRMessageHeaderSource::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DESTINATION === $cen) {
                $type->addDestination(FHIRMessageHeaderDestination::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ENTERER === $cen) {
                $type->setEnterer(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AUTHOR === $cen) {
                $type->setAuthor(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RECEIVER === $cen) {
                $type->setReceiver(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RESPONSIBLE === $cen) {
                $type->setResponsible(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REASON === $cen) {
                $type->setReason(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA === $cen) {
                $type->addData(FHIRResourceReference::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LANGUAGE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_IDENTIFIER])) {
            if (isset($type->identifier)) {
                $type->identifier->setValue((string)$attributes[self::FIELD_IDENTIFIER]);
            } else {
                $type->setIdentifier((string)$attributes[self::FIELD_IDENTIFIER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_IDENTIFIER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TIMESTAMP])) {
            if (isset($type->timestamp)) {
                $type->timestamp->setValue((string)$attributes[self::FIELD_TIMESTAMP]);
            } else {
                $type->setTimestamp((string)$attributes[self::FIELD_TIMESTAMP]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TIMESTAMP, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null,
                                 null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('MessageHeader', $this->_getSourceXMLNS());
        }
        if (isset($this->identifier) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_IDENTIFIER]) {
            $xw->writeAttribute(self::FIELD_IDENTIFIER, $this->identifier->_getValueAsString());
        }
        if (isset($this->timestamp) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TIMESTAMP]) {
            $xw->writeAttribute(self::FIELD_TIMESTAMP, $this->timestamp->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_IDENTIFIER]
                || $this->identifier->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $this->identifier->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_IDENTIFIER]);
            $xw->endElement();
        }
        if (isset($this->timestamp)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TIMESTAMP]
                || $this->timestamp->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TIMESTAMP);
            $this->timestamp->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TIMESTAMP]);
            $xw->endElement();
        }
        if (isset($this->event)) {
            $xw->startElement(self::FIELD_EVENT);
            $this->event->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->response)) {
            $xw->startElement(self::FIELD_RESPONSE);
            $this->response->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->source)) {
            $xw->startElement(self::FIELD_SOURCE);
            $this->source->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->destination)) {
            foreach ($this->destination as $v) {
                $xw->startElement(self::FIELD_DESTINATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->enterer)) {
            $xw->startElement(self::FIELD_ENTERER);
            $this->enterer->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->author)) {
            $xw->startElement(self::FIELD_AUTHOR);
            $this->author->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->receiver)) {
            $xw->startElement(self::FIELD_RECEIVER);
            $this->receiver->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->responsible)) {
            $xw->startElement(self::FIELD_RESPONSIBLE);
            $this->responsible->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->reason)) {
            $xw->startElement(self::FIELD_REASON);
            $this->reason->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->data)) {
            foreach ($this->data as $v) {
                $xw->startElement(self::FIELD_DATA);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMessageHeader $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMessageHeader
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMessageHeader)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: false, depth: $config->getJSONDecodeMaxDepth());
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->identifier)
            || isset($json->_identifier)
            || property_exists($json, self::FIELD_IDENTIFIER)
            || property_exists($json, self::FIELD_IDENTIFIER_EXT)) {
            $v = $json->_identifier ?? new \stdClass();
            $v->value = $json->identifier ?? null;
            $type->setIdentifier(FHIRId::jsonUnserialize($v, $config));
        }
        if (isset($json->timestamp)
            || isset($json->_timestamp)
            || property_exists($json, self::FIELD_TIMESTAMP)
            || property_exists($json, self::FIELD_TIMESTAMP_EXT)) {
            $v = $json->_timestamp ?? new \stdClass();
            $v->value = $json->timestamp ?? null;
            $type->setTimestamp(FHIRInstant::jsonUnserialize($v, $config));
        }
        if (isset($json->event) || property_exists($json, self::FIELD_EVENT)) {
            if (is_array($json->event)) {
                $type->setEvent(FHIRCoding::jsonUnserialize(reset($json->event), $config));
            } else {
                $type->setEvent(FHIRCoding::jsonUnserialize($json->event, $config));
            }
        }
        if (isset($json->response) || property_exists($json, self::FIELD_RESPONSE)) {
            if (is_array($json->response)) {
                $type->setResponse(FHIRMessageHeaderResponse::jsonUnserialize(reset($json->response), $config));
            } else {
                $type->setResponse(FHIRMessageHeaderResponse::jsonUnserialize($json->response, $config));
            }
        }
        if (isset($json->source) || property_exists($json, self::FIELD_SOURCE)) {
            if (is_array($json->source)) {
                $type->setSource(FHIRMessageHeaderSource::jsonUnserialize(reset($json->source), $config));
            } else {
                $type->setSource(FHIRMessageHeaderSource::jsonUnserialize($json->source, $config));
            }
        }
        if (isset($json->destination) || property_exists($json, self::FIELD_DESTINATION)) {
            if (is_object($json->destination)) {
                $vals = [$json->destination];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DESTINATION, true);
            } else {
                $vals = $json->destination;
            }
            foreach($vals as $v) {
                $type->addDestination(FHIRMessageHeaderDestination::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->enterer) || property_exists($json, self::FIELD_ENTERER)) {
            if (is_array($json->enterer)) {
                $type->setEnterer(FHIRResourceReference::jsonUnserialize(reset($json->enterer), $config));
            } else {
                $type->setEnterer(FHIRResourceReference::jsonUnserialize($json->enterer, $config));
            }
        }
        if (isset($json->author) || property_exists($json, self::FIELD_AUTHOR)) {
            if (is_array($json->author)) {
                $type->setAuthor(FHIRResourceReference::jsonUnserialize(reset($json->author), $config));
            } else {
                $type->setAuthor(FHIRResourceReference::jsonUnserialize($json->author, $config));
            }
        }
        if (isset($json->receiver) || property_exists($json, self::FIELD_RECEIVER)) {
            if (is_array($json->receiver)) {
                $type->setReceiver(FHIRResourceReference::jsonUnserialize(reset($json->receiver), $config));
            } else {
                $type->setReceiver(FHIRResourceReference::jsonUnserialize($json->receiver, $config));
            }
        }
        if (isset($json->responsible) || property_exists($json, self::FIELD_RESPONSIBLE)) {
            if (is_array($json->responsible)) {
                $type->setResponsible(FHIRResourceReference::jsonUnserialize(reset($json->responsible), $config));
            } else {
                $type->setResponsible(FHIRResourceReference::jsonUnserialize($json->responsible, $config));
            }
        }
        if (isset($json->reason) || property_exists($json, self::FIELD_REASON)) {
            if (is_array($json->reason)) {
                $type->setReason(FHIRCodeableConcept::jsonUnserialize(reset($json->reason), $config));
            } else {
                $type->setReason(FHIRCodeableConcept::jsonUnserialize($json->reason, $config));
            }
        }
        if (isset($json->data) || property_exists($json, self::FIELD_DATA)) {
            if (is_object($json->data)) {
                $vals = [$json->data];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DATA, true);
            } else {
                $vals = $json->data;
            }
            foreach($vals as $v) {
                $type->addData(FHIRResourceReference::jsonUnserialize($v, $config));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->identifier)) {
            if (null !== ($val = $this->identifier->getValue())) {
                $out->identifier = $val;
            }
            if ($this->identifier->_nonValueFieldDefined()) {
                $ext = $this->identifier->jsonSerialize();
                unset($ext->value);
                $out->_identifier = $ext;
            }
        }
        if (isset($this->timestamp)) {
            if (null !== ($val = $this->timestamp->getValue())) {
                $out->timestamp = $val;
            }
            if ($this->timestamp->_nonValueFieldDefined()) {
                $ext = $this->timestamp->jsonSerialize();
                unset($ext->value);
                $out->_timestamp = $ext;
            }
        }
        if (isset($this->event)) {
            $out->event = $this->event;
        }
        if (isset($this->response)) {
            $out->response = $this->response;
        }
        if (isset($this->source)) {
            $out->source = $this->source;
        }
        if (isset($this->destination) && [] !== $this->destination) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_DESTINATION) && 1 === count($this->destination)) {
                $out->destination = $this->destination[0];
            } else {
                $out->destination = $this->destination;
            }
        }
        if (isset($this->enterer)) {
            $out->enterer = $this->enterer;
        }
        if (isset($this->author)) {
            $out->author = $this->author;
        }
        if (isset($this->receiver)) {
            $out->receiver = $this->receiver;
        }
        if (isset($this->responsible)) {
            $out->responsible = $this->responsible;
        }
        if (isset($this->reason)) {
            $out->reason = $this->reason;
        }
        if (isset($this->data) && [] !== $this->data) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_DATA) && 1 === count($this->data)) {
                $out->data = $this->data[0];
            } else {
                $out->data = $this->data;
            }
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}