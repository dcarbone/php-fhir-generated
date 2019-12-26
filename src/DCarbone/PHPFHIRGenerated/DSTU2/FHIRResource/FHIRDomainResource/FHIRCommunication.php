<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCommunication\FHIRCommunicationPayload;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCommunicationStatus;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * An occurrence of information being transmitted; e.g. an alert that was sent to a
 * responsible provider, a public health agency was notified about a reportable
 * condition.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRCommunication
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRCommunication extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_COMMUNICATION;
    const FIELD_CATEGORY = 'category';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_MEDIUM = 'medium';
    const FIELD_PAYLOAD = 'payload';
    const FIELD_REASON = 'reason';
    const FIELD_RECEIVED = 'received';
    const FIELD_RECEIVED_EXT = '_received';
    const FIELD_RECIPIENT = 'recipient';
    const FIELD_REQUEST_DETAIL = 'requestDetail';
    const FIELD_SENDER = 'sender';
    const FIELD_SENT = 'sent';
    const FIELD_SENT_EXT = '_sent';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_SUBJECT = 'subject';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of message conveyed such as alert, notification, reminder, instruction,
     * etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $category = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter within which the communication was sent.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $encounter = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers associated with this Communication that are defined by business
     * processes and/ or used to refer to it when a direct URL reference to the
     * resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A channel that was used for this communication (e.g. email, fax).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected $medium = [];

    /**
     * An occurrence of information being transmitted; e.g. an alert that was sent to a
     * responsible provider, a public health agency was notified about a reportable
     * condition.
     *
     * Text, attachment(s), or resource(s) that was communicated to the recipient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCommunication\FHIRCommunicationPayload[]
     */
    protected $payload = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason or justification for the communication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected $reason = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time when this communication arrived at the destination.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    protected $received = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity (e.g. person, organization, clinical information system, or device)
     * which was the target of the communication. If receipts need to be tracked by
     * individual, a separate resource instance will need to be created for each
     * recipient.  Multiple recipient communications are intended where either a
     * receipt(s) is not tracked (e.g. a mass mail-out) or is captured in aggregate
     * (all emails confirmed received by a particular time).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    protected $recipient = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The communication request that was responsible for producing this communication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $requestDetail = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity (e.g. person, organization, clinical information system, or device)
     * which was the source of the communication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $sender = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time when this communication was sent.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    protected $sent = null;

    /**
     * The status of the communication.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the transmission.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCommunicationStatus
     */
    protected $status = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient who was the focus of this communication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $subject = null;

    /**
     * Validation map for fields in type Communication
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRCommunication Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCommunication::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CATEGORY])) {
            if ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->setCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->setCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_ENCOUNTER])) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIRReference($data[self::FIELD_ENCOUNTER]));
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
        if (isset($data[self::FIELD_MEDIUM])) {
            if (is_array($data[self::FIELD_MEDIUM])) {
                foreach($data[self::FIELD_MEDIUM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addMedium($v);
                    } else {
                        $this->addMedium(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_MEDIUM] instanceof FHIRCodeableConcept) {
                $this->addMedium($data[self::FIELD_MEDIUM]);
            } else {
                $this->addMedium(new FHIRCodeableConcept($data[self::FIELD_MEDIUM]));
            }
        }
        if (isset($data[self::FIELD_PAYLOAD])) {
            if (is_array($data[self::FIELD_PAYLOAD])) {
                foreach($data[self::FIELD_PAYLOAD] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCommunicationPayload) {
                        $this->addPayload($v);
                    } else {
                        $this->addPayload(new FHIRCommunicationPayload($v));
                    }
                }
            } else if ($data[self::FIELD_PAYLOAD] instanceof FHIRCommunicationPayload) {
                $this->addPayload($data[self::FIELD_PAYLOAD]);
            } else {
                $this->addPayload(new FHIRCommunicationPayload($data[self::FIELD_PAYLOAD]));
            }
        }
        if (isset($data[self::FIELD_REASON])) {
            if (is_array($data[self::FIELD_REASON])) {
                foreach($data[self::FIELD_REASON] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addReason($v);
                    } else {
                        $this->addReason(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_REASON] instanceof FHIRCodeableConcept) {
                $this->addReason($data[self::FIELD_REASON]);
            } else {
                $this->addReason(new FHIRCodeableConcept($data[self::FIELD_REASON]));
            }
        }
        if (isset($data[self::FIELD_RECEIVED]) || isset($data[self::FIELD_RECEIVED_EXT])) {
            if (isset($data[self::FIELD_RECEIVED])) {
                $value = $data[self::FIELD_RECEIVED];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_RECEIVED_EXT]) && is_array($data[self::FIELD_RECEIVED_EXT])) {
                $ext = $data[self::FIELD_RECEIVED_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setReceived($value);
                } else if (is_array($value)) {
                    $this->setReceived(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setReceived(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setReceived(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_RECIPIENT])) {
            if (is_array($data[self::FIELD_RECIPIENT])) {
                foreach($data[self::FIELD_RECIPIENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addRecipient($v);
                    } else {
                        $this->addRecipient(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_RECIPIENT] instanceof FHIRReference) {
                $this->addRecipient($data[self::FIELD_RECIPIENT]);
            } else {
                $this->addRecipient(new FHIRReference($data[self::FIELD_RECIPIENT]));
            }
        }
        if (isset($data[self::FIELD_REQUEST_DETAIL])) {
            if ($data[self::FIELD_REQUEST_DETAIL] instanceof FHIRReference) {
                $this->setRequestDetail($data[self::FIELD_REQUEST_DETAIL]);
            } else {
                $this->setRequestDetail(new FHIRReference($data[self::FIELD_REQUEST_DETAIL]));
            }
        }
        if (isset($data[self::FIELD_SENDER])) {
            if ($data[self::FIELD_SENDER] instanceof FHIRReference) {
                $this->setSender($data[self::FIELD_SENDER]);
            } else {
                $this->setSender(new FHIRReference($data[self::FIELD_SENDER]));
            }
        }
        if (isset($data[self::FIELD_SENT]) || isset($data[self::FIELD_SENT_EXT])) {
            if (isset($data[self::FIELD_SENT])) {
                $value = $data[self::FIELD_SENT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SENT_EXT]) && is_array($data[self::FIELD_SENT_EXT])) {
                $ext = $data[self::FIELD_SENT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setSent($value);
                } else if (is_array($value)) {
                    $this->setSent(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setSent(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSent(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            if (isset($data[self::FIELD_STATUS])) {
                $value = $data[self::FIELD_STATUS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) {
                $ext = $data[self::FIELD_STATUS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCommunicationStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRCommunicationStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRCommunicationStatus([FHIRCommunicationStatus::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRCommunicationStatus($ext));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
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
        return "<Communication{$xmlns}></Communication>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of message conveyed such as alert, notification, reminder, instruction,
     * etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of message conveyed such as alert, notification, reminder, instruction,
     * etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $category
     * @return static
     */
    public function setCategory(FHIRCodeableConcept $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter within which the communication was sent.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter within which the communication was sent.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $encounter
     * @return static
     */
    public function setEncounter(FHIRReference $encounter = null)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers associated with this Communication that are defined by business
     * processes and/ or used to refer to it when a direct URL reference to the
     * resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
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
     * Identifiers associated with this Communication that are defined by business
     * processes and/ or used to refer to it when a direct URL reference to the
     * resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $identifier
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
     * Identifiers associated with this Communication that are defined by business
     * processes and/ or used to refer to it when a direct URL reference to the
     * resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[] $identifier
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A channel that was used for this communication (e.g. email, fax).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getMedium()
    {
        return $this->medium;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A channel that was used for this communication (e.g. email, fax).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $medium
     * @return static
     */
    public function addMedium(FHIRCodeableConcept $medium = null)
    {
        $this->medium[] = $medium;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A channel that was used for this communication (e.g. email, fax).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[] $medium
     * @return static
     */
    public function setMedium(array $medium = [])
    {
        $this->medium = [];
        if ([] === $medium) {
            return $this;
        }
        foreach($medium as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addMedium($v);
            } else {
                $this->addMedium(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * An occurrence of information being transmitted; e.g. an alert that was sent to a
     * responsible provider, a public health agency was notified about a reportable
     * condition.
     *
     * Text, attachment(s), or resource(s) that was communicated to the recipient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCommunication\FHIRCommunicationPayload[]
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * An occurrence of information being transmitted; e.g. an alert that was sent to a
     * responsible provider, a public health agency was notified about a reportable
     * condition.
     *
     * Text, attachment(s), or resource(s) that was communicated to the recipient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCommunication\FHIRCommunicationPayload $payload
     * @return static
     */
    public function addPayload(FHIRCommunicationPayload $payload = null)
    {
        $this->payload[] = $payload;
        return $this;
    }

    /**
     * An occurrence of information being transmitted; e.g. an alert that was sent to a
     * responsible provider, a public health agency was notified about a reportable
     * condition.
     *
     * Text, attachment(s), or resource(s) that was communicated to the recipient.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCommunication\FHIRCommunicationPayload[] $payload
     * @return static
     */
    public function setPayload(array $payload = [])
    {
        $this->payload = [];
        if ([] === $payload) {
            return $this;
        }
        foreach($payload as $v) {
            if ($v instanceof FHIRCommunicationPayload) {
                $this->addPayload($v);
            } else {
                $this->addPayload(new FHIRCommunicationPayload($v));
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
     * The reason or justification for the communication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
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
     * The reason or justification for the communication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $reason
     * @return static
     */
    public function addReason(FHIRCodeableConcept $reason = null)
    {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason or justification for the communication.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[] $reason
     * @return static
     */
    public function setReason(array $reason = [])
    {
        $this->reason = [];
        if ([] === $reason) {
            return $this;
        }
        foreach($reason as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addReason($v);
            } else {
                $this->addReason(new FHIRCodeableConcept($v));
            }
        }
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
     * The time when this communication arrived at the destination.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getReceived()
    {
        return $this->received;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time when this communication arrived at the destination.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $received
     * @return static
     */
    public function setReceived($received = null)
    {
        if (null === $received) {
            $this->received = null;
            return $this;
        }
        if ($received instanceof FHIRDateTime) {
            $this->received = $received;
            return $this;
        }
        $this->received = new FHIRDateTime($received);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity (e.g. person, organization, clinical information system, or device)
     * which was the target of the communication. If receipts need to be tracked by
     * individual, a separate resource instance will need to be created for each
     * recipient.  Multiple recipient communications are intended where either a
     * receipt(s) is not tracked (e.g. a mass mail-out) or is captured in aggregate
     * (all emails confirmed received by a particular time).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity (e.g. person, organization, clinical information system, or device)
     * which was the target of the communication. If receipts need to be tracked by
     * individual, a separate resource instance will need to be created for each
     * recipient.  Multiple recipient communications are intended where either a
     * receipt(s) is not tracked (e.g. a mass mail-out) or is captured in aggregate
     * (all emails confirmed received by a particular time).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $recipient
     * @return static
     */
    public function addRecipient(FHIRReference $recipient = null)
    {
        $this->recipient[] = $recipient;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity (e.g. person, organization, clinical information system, or device)
     * which was the target of the communication. If receipts need to be tracked by
     * individual, a separate resource instance will need to be created for each
     * recipient.  Multiple recipient communications are intended where either a
     * receipt(s) is not tracked (e.g. a mass mail-out) or is captured in aggregate
     * (all emails confirmed received by a particular time).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[] $recipient
     * @return static
     */
    public function setRecipient(array $recipient = [])
    {
        $this->recipient = [];
        if ([] === $recipient) {
            return $this;
        }
        foreach($recipient as $v) {
            if ($v instanceof FHIRReference) {
                $this->addRecipient($v);
            } else {
                $this->addRecipient(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The communication request that was responsible for producing this communication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getRequestDetail()
    {
        return $this->requestDetail;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The communication request that was responsible for producing this communication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $requestDetail
     * @return static
     */
    public function setRequestDetail(FHIRReference $requestDetail = null)
    {
        $this->requestDetail = $requestDetail;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity (e.g. person, organization, clinical information system, or device)
     * which was the source of the communication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity (e.g. person, organization, clinical information system, or device)
     * which was the source of the communication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $sender
     * @return static
     */
    public function setSender(FHIRReference $sender = null)
    {
        $this->sender = $sender;
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
     * The time when this communication was sent.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getSent()
    {
        return $this->sent;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time when this communication was sent.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $sent
     * @return static
     */
    public function setSent($sent = null)
    {
        if (null === $sent) {
            $this->sent = null;
            return $this;
        }
        if ($sent instanceof FHIRDateTime) {
            $this->sent = $sent;
            return $this;
        }
        $this->sent = new FHIRDateTime($sent);
        return $this;
    }

    /**
     * The status of the communication.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the transmission.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCommunicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the communication.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the transmission.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCommunicationStatus $status
     * @return static
     */
    public function setStatus(FHIRCommunicationStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient who was the focus of this communication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient who was the focus of this communication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $subject
     * @return static
     */
    public function setSubject(FHIRReference $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getCategory())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CATEGORY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENCOUNTER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getMedium())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MEDIUM, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPayload())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PAYLOAD, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReason())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getReceived())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RECEIVED] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRecipient())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RECIPIENT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getRequestDetail())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUEST_DETAIL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSender())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SENDER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMMUNICATION, self::FIELD_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CATEGORY])) {
                        $errs[self::FIELD_CATEGORY] = [];
                    }
                    $errs[self::FIELD_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENCOUNTER])) {
            $v = $this->getEncounter();
            foreach($validationRules[self::FIELD_ENCOUNTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMMUNICATION, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENCOUNTER])) {
                        $errs[self::FIELD_ENCOUNTER] = [];
                    }
                    $errs[self::FIELD_ENCOUNTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMMUNICATION, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEDIUM])) {
            $v = $this->getMedium();
            foreach($validationRules[self::FIELD_MEDIUM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMMUNICATION, self::FIELD_MEDIUM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEDIUM])) {
                        $errs[self::FIELD_MEDIUM] = [];
                    }
                    $errs[self::FIELD_MEDIUM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAYLOAD])) {
            $v = $this->getPayload();
            foreach($validationRules[self::FIELD_PAYLOAD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMMUNICATION, self::FIELD_PAYLOAD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAYLOAD])) {
                        $errs[self::FIELD_PAYLOAD] = [];
                    }
                    $errs[self::FIELD_PAYLOAD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON])) {
            $v = $this->getReason();
            foreach($validationRules[self::FIELD_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMMUNICATION, self::FIELD_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON])) {
                        $errs[self::FIELD_REASON] = [];
                    }
                    $errs[self::FIELD_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RECEIVED])) {
            $v = $this->getReceived();
            foreach($validationRules[self::FIELD_RECEIVED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMMUNICATION, self::FIELD_RECEIVED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RECEIVED])) {
                        $errs[self::FIELD_RECEIVED] = [];
                    }
                    $errs[self::FIELD_RECEIVED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RECIPIENT])) {
            $v = $this->getRecipient();
            foreach($validationRules[self::FIELD_RECIPIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMMUNICATION, self::FIELD_RECIPIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RECIPIENT])) {
                        $errs[self::FIELD_RECIPIENT] = [];
                    }
                    $errs[self::FIELD_RECIPIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUEST_DETAIL])) {
            $v = $this->getRequestDetail();
            foreach($validationRules[self::FIELD_REQUEST_DETAIL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMMUNICATION, self::FIELD_REQUEST_DETAIL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUEST_DETAIL])) {
                        $errs[self::FIELD_REQUEST_DETAIL] = [];
                    }
                    $errs[self::FIELD_REQUEST_DETAIL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SENDER])) {
            $v = $this->getSender();
            foreach($validationRules[self::FIELD_SENDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMMUNICATION, self::FIELD_SENDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SENDER])) {
                        $errs[self::FIELD_SENDER] = [];
                    }
                    $errs[self::FIELD_SENDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SENT])) {
            $v = $this->getSent();
            foreach($validationRules[self::FIELD_SENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMMUNICATION, self::FIELD_SENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SENT])) {
                        $errs[self::FIELD_SENT] = [];
                    }
                    $errs[self::FIELD_SENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMMUNICATION, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMMUNICATION, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRCommunication $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRCommunication
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
                throw new \DomainException(sprintf('FHIRCommunication::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCommunication::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRCommunication;
        } elseif (!is_object($type) || !($type instanceof FHIRCommunication)) {
            throw new \RuntimeException(sprintf(
                'FHIRCommunication::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRCommunication or null, %s seen.',
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
        if (isset($children->category)) {
            $type->setCategory(FHIRCodeableConcept::xmlUnserialize($children->category));
        }
        if (isset($children->encounter)) {
            $type->setEncounter(FHIRReference::xmlUnserialize($children->encounter));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->medium)) {
            foreach($children->medium as $child) {
                $type->addMedium(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->payload)) {
            foreach($children->payload as $child) {
                $type->addPayload(FHIRCommunicationPayload::xmlUnserialize($child));
            }
        }
        if (isset($children->reason)) {
            foreach($children->reason as $child) {
                $type->addReason(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->received)) {
            $type->setReceived(FHIRDateTime::xmlUnserialize($children->received));
        }
        if (isset($attributes->received)) {
            $pt = $type->getReceived();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->received);
            } else {
                $type->setReceived((string)$attributes->received);
            }
        }
        if (isset($children->recipient)) {
            foreach($children->recipient as $child) {
                $type->addRecipient(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->requestDetail)) {
            $type->setRequestDetail(FHIRReference::xmlUnserialize($children->requestDetail));
        }
        if (isset($children->sender)) {
            $type->setSender(FHIRReference::xmlUnserialize($children->sender));
        }
        if (isset($children->sent)) {
            $type->setSent(FHIRDateTime::xmlUnserialize($children->sent));
        }
        if (isset($attributes->sent)) {
            $pt = $type->getSent();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->sent);
            } else {
                $type->setSent((string)$attributes->sent);
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRCommunicationStatus::xmlUnserialize($children->status));
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRReference::xmlUnserialize($children->subject));
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
        if (null !== ($v = $this->getCategory())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getEncounter())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENCOUNTER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getMedium())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MEDIUM, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getPayload())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PAYLOAD, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getReason())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getReceived())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RECEIVED, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getRecipient())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RECIPIENT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getRequestDetail())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUEST_DETAIL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSender())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SENDER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSent())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCategory())) {
            $a[self::FIELD_CATEGORY] = $v;
        }
        if (null !== ($v = $this->getEncounter())) {
            $a[self::FIELD_ENCOUNTER] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v;
            }
        }
        if ([] !== ($vs = $this->getMedium())) {
            $a[self::FIELD_MEDIUM] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_MEDIUM][] = $v;
            }
        }
        if ([] !== ($vs = $this->getPayload())) {
            $a[self::FIELD_PAYLOAD] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PAYLOAD][] = $v;
            }
        }
        if ([] !== ($vs = $this->getReason())) {
            $a[self::FIELD_REASON] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REASON][] = $v;
            }
        }
        if (null !== ($v = $this->getReceived())) {
            $a[self::FIELD_RECEIVED] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_RECEIVED_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getRecipient())) {
            $a[self::FIELD_RECIPIENT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_RECIPIENT][] = $v;
            }
        }
        if (null !== ($v = $this->getRequestDetail())) {
            $a[self::FIELD_REQUEST_DETAIL] = $v;
        }
        if (null !== ($v = $this->getSender())) {
            $a[self::FIELD_SENDER] = $v;
        }
        if (null !== ($v = $this->getSent())) {
            $a[self::FIELD_SENT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_SENT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCommunicationStatus::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCommunicationStatus::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
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