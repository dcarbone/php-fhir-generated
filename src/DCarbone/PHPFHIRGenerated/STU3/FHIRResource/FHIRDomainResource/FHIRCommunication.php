<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCommunication\FHIRCommunicationPayload;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIREventStatus;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * An occurrence of information being transmitted; e.g. an alert that was sent to a
 * responsible provider, a public health agency was notified about a reportable
 * condition.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRCommunication
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRCommunication extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_COMMUNICATION;
    const FIELD_BASED_ON = 'basedOn';
    const FIELD_CATEGORY = 'category';
    const FIELD_CONTEXT = 'context';
    const FIELD_DEFINITION = 'definition';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_MEDIUM = 'medium';
    const FIELD_NOT_DONE = 'notDone';
    const FIELD_NOT_DONE_EXT = '_notDone';
    const FIELD_NOT_DONE_REASON = 'notDoneReason';
    const FIELD_NOTE = 'note';
    const FIELD_PART_OF = 'partOf';
    const FIELD_PAYLOAD = 'payload';
    const FIELD_REASON_CODE = 'reasonCode';
    const FIELD_REASON_REFERENCE = 'reasonReference';
    const FIELD_RECEIVED = 'received';
    const FIELD_RECEIVED_EXT = '_received';
    const FIELD_RECIPIENT = 'recipient';
    const FIELD_SENDER = 'sender';
    const FIELD_SENT = 'sent';
    const FIELD_SENT_EXT = '_sent';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_SUBJECT = 'subject';
    const FIELD_TOPIC = 'topic';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An order, proposal or plan fulfilled in whole or in part by this Communication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $basedOn = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of message conveyed such as alert, notification, reminder, instruction,
     * etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected $category = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter within which the communication was sent.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $context = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A protocol, guideline, or other definition that was adhered to in whole or in
     * part by this communication event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $definition = [];

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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected $medium = [];

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates that the described communication event did not actually
     * occur.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $notDone = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the communication event did not occur in coded and/or textual
     * form.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $notDoneReason = null;

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional notes or commentary about the communication by the sender, receiver
     * or other interested parties.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation[]
     */
    protected $note = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Part of this action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $partOf = [];

    /**
     * An occurrence of information being transmitted; e.g. an alert that was sent to a
     * responsible provider, a public health agency was notified about a reportable
     * condition.
     *
     * Text, attachment(s), or resource(s) that was communicated to the recipient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCommunication\FHIRCommunicationPayload[]
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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected $reasonCode = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates another resource whose existence justifies this communication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $reasonReference = [];

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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $recipient = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The entity (e.g. person, organization, clinical information system, or device)
     * which was the source of the communication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected $sent = null;

    /**
     * The status of the communication.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the transmission.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIREventStatus
     */
    protected $status = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient or group that was the focus of this communication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $subject = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The resources which were responsible for or related to producing this
     * communication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $topic = [];

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
        if (isset($data[self::FIELD_BASED_ON])) {
            if (is_array($data[self::FIELD_BASED_ON])) {
                foreach($data[self::FIELD_BASED_ON] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addBasedOn($v);
                    } else {
                        $this->addBasedOn(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_BASED_ON] instanceof FHIRReference) {
                $this->addBasedOn($data[self::FIELD_BASED_ON]);
            } else {
                $this->addBasedOn(new FHIRReference($data[self::FIELD_BASED_ON]));
            }
        }
        if (isset($data[self::FIELD_CATEGORY])) {
            if (is_array($data[self::FIELD_CATEGORY])) {
                foreach($data[self::FIELD_CATEGORY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCategory($v);
                    } else {
                        $this->addCategory(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->addCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->addCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_CONTEXT])) {
            if ($data[self::FIELD_CONTEXT] instanceof FHIRReference) {
                $this->setContext($data[self::FIELD_CONTEXT]);
            } else {
                $this->setContext(new FHIRReference($data[self::FIELD_CONTEXT]));
            }
        }
        if (isset($data[self::FIELD_DEFINITION])) {
            if (is_array($data[self::FIELD_DEFINITION])) {
                foreach($data[self::FIELD_DEFINITION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addDefinition($v);
                    } else {
                        $this->addDefinition(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_DEFINITION] instanceof FHIRReference) {
                $this->addDefinition($data[self::FIELD_DEFINITION]);
            } else {
                $this->addDefinition(new FHIRReference($data[self::FIELD_DEFINITION]));
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
        if (isset($data[self::FIELD_NOT_DONE]) || isset($data[self::FIELD_NOT_DONE_EXT])) {
            if (isset($data[self::FIELD_NOT_DONE])) {
                $value = $data[self::FIELD_NOT_DONE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NOT_DONE_EXT]) && is_array($data[self::FIELD_NOT_DONE_EXT])) {
                $ext = $data[self::FIELD_NOT_DONE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setNotDone($value);
                } else if (is_array($value)) {
                    $this->setNotDone(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setNotDone(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setNotDone(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_NOT_DONE_REASON])) {
            if ($data[self::FIELD_NOT_DONE_REASON] instanceof FHIRCodeableConcept) {
                $this->setNotDoneReason($data[self::FIELD_NOT_DONE_REASON]);
            } else {
                $this->setNotDoneReason(new FHIRCodeableConcept($data[self::FIELD_NOT_DONE_REASON]));
            }
        }
        if (isset($data[self::FIELD_NOTE])) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } else if ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
            }
        }
        if (isset($data[self::FIELD_PART_OF])) {
            if (is_array($data[self::FIELD_PART_OF])) {
                foreach($data[self::FIELD_PART_OF] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addPartOf($v);
                    } else {
                        $this->addPartOf(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_PART_OF] instanceof FHIRReference) {
                $this->addPartOf($data[self::FIELD_PART_OF]);
            } else {
                $this->addPartOf(new FHIRReference($data[self::FIELD_PART_OF]));
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
        if (isset($data[self::FIELD_REASON_CODE])) {
            if (is_array($data[self::FIELD_REASON_CODE])) {
                foreach($data[self::FIELD_REASON_CODE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addReasonCode($v);
                    } else {
                        $this->addReasonCode(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_REASON_CODE] instanceof FHIRCodeableConcept) {
                $this->addReasonCode($data[self::FIELD_REASON_CODE]);
            } else {
                $this->addReasonCode(new FHIRCodeableConcept($data[self::FIELD_REASON_CODE]));
            }
        }
        if (isset($data[self::FIELD_REASON_REFERENCE])) {
            if (is_array($data[self::FIELD_REASON_REFERENCE])) {
                foreach($data[self::FIELD_REASON_REFERENCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addReasonReference($v);
                    } else {
                        $this->addReasonReference(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_REASON_REFERENCE] instanceof FHIRReference) {
                $this->addReasonReference($data[self::FIELD_REASON_REFERENCE]);
            } else {
                $this->addReasonReference(new FHIRReference($data[self::FIELD_REASON_REFERENCE]));
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
                if ($value instanceof FHIREventStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIREventStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIREventStatus([FHIREventStatus::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIREventStatus($ext));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_TOPIC])) {
            if (is_array($data[self::FIELD_TOPIC])) {
                foreach($data[self::FIELD_TOPIC] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addTopic($v);
                    } else {
                        $this->addTopic(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_TOPIC] instanceof FHIRReference) {
                $this->addTopic($data[self::FIELD_TOPIC]);
            } else {
                $this->addTopic(new FHIRReference($data[self::FIELD_TOPIC]));
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An order, proposal or plan fulfilled in whole or in part by this Communication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An order, proposal or plan fulfilled in whole or in part by this Communication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $basedOn
     * @return static
     */
    public function addBasedOn(FHIRReference $basedOn = null)
    {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An order, proposal or plan fulfilled in whole or in part by this Communication.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $basedOn
     * @return static
     */
    public function setBasedOn(array $basedOn = [])
    {
        $this->basedOn = [];
        if ([] === $basedOn) {
            return $this;
        }
        foreach($basedOn as $v) {
            if ($v instanceof FHIRReference) {
                $this->addBasedOn($v);
            } else {
                $this->addBasedOn(new FHIRReference($v));
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
     * The type of message conveyed such as alert, notification, reminder, instruction,
     * etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $category
     * @return static
     */
    public function addCategory(FHIRCodeableConcept $category = null)
    {
        $this->category[] = $category;
        return $this;
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $category
     * @return static
     */
    public function setCategory(array $category = [])
    {
        $this->category = [];
        if ([] === $category) {
            return $this;
        }
        foreach($category as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCategory($v);
            } else {
                $this->addCategory(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter within which the communication was sent.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter within which the communication was sent.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $context
     * @return static
     */
    public function setContext(FHIRReference $context = null)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A protocol, guideline, or other definition that was adhered to in whole or in
     * part by this communication event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A protocol, guideline, or other definition that was adhered to in whole or in
     * part by this communication event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $definition
     * @return static
     */
    public function addDefinition(FHIRReference $definition = null)
    {
        $this->definition[] = $definition;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A protocol, guideline, or other definition that was adhered to in whole or in
     * part by this communication event.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $definition
     * @return static
     */
    public function setDefinition(array $definition = [])
    {
        $this->definition = [];
        if ([] === $definition) {
            return $this;
        }
        foreach($definition as $v) {
            if ($v instanceof FHIRReference) {
                $this->addDefinition($v);
            } else {
                $this->addDefinition(new FHIRReference($v));
            }
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $identifier
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[] $identifier
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $medium
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $medium
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates that the described communication event did not actually
     * occur.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getNotDone()
    {
        return $this->notDone;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates that the described communication event did not actually
     * occur.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $notDone
     * @return static
     */
    public function setNotDone($notDone = null)
    {
        if (null === $notDone) {
            $this->notDone = null;
            return $this;
        }
        if ($notDone instanceof FHIRBoolean) {
            $this->notDone = $notDone;
            return $this;
        }
        $this->notDone = new FHIRBoolean($notDone);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the communication event did not occur in coded and/or textual
     * form.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getNotDoneReason()
    {
        return $this->notDoneReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the communication event did not occur in coded and/or textual
     * form.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $notDoneReason
     * @return static
     */
    public function setNotDoneReason(FHIRCodeableConcept $notDoneReason = null)
    {
        $this->notDoneReason = $notDoneReason;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional notes or commentary about the communication by the sender, receiver
     * or other interested parties.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional notes or commentary about the communication by the sender, receiver
     * or other interested parties.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation $note
     * @return static
     */
    public function addNote(FHIRAnnotation $note = null)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional notes or commentary about the communication by the sender, receiver
     * or other interested parties.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation[] $note
     * @return static
     */
    public function setNote(array $note = [])
    {
        $this->note = [];
        if ([] === $note) {
            return $this;
        }
        foreach($note as $v) {
            if ($v instanceof FHIRAnnotation) {
                $this->addNote($v);
            } else {
                $this->addNote(new FHIRAnnotation($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Part of this action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Part of this action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $partOf
     * @return static
     */
    public function addPartOf(FHIRReference $partOf = null)
    {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Part of this action.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $partOf
     * @return static
     */
    public function setPartOf(array $partOf = [])
    {
        $this->partOf = [];
        if ([] === $partOf) {
            return $this;
        }
        foreach($partOf as $v) {
            if ($v instanceof FHIRReference) {
                $this->addPartOf($v);
            } else {
                $this->addPartOf(new FHIRReference($v));
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCommunication\FHIRCommunicationPayload[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCommunication\FHIRCommunicationPayload $payload
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCommunication\FHIRCommunicationPayload[] $payload
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason or justification for the communication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return static
     */
    public function addReasonCode(FHIRCodeableConcept $reasonCode = null)
    {
        $this->reasonCode[] = $reasonCode;
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $reasonCode
     * @return static
     */
    public function setReasonCode(array $reasonCode = [])
    {
        $this->reasonCode = [];
        if ([] === $reasonCode) {
            return $this;
        }
        foreach($reasonCode as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addReasonCode($v);
            } else {
                $this->addReasonCode(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates another resource whose existence justifies this communication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates another resource whose existence justifies this communication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $reasonReference
     * @return static
     */
    public function addReasonReference(FHIRReference $reasonReference = null)
    {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates another resource whose existence justifies this communication.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $reasonReference
     * @return static
     */
    public function setReasonReference(array $reasonReference = [])
    {
        $this->reasonReference = [];
        if ([] === $reasonReference) {
            return $this;
        }
        foreach($reasonReference as $v) {
            if ($v instanceof FHIRReference) {
                $this->addReasonReference($v);
            } else {
                $this->addReasonReference(new FHIRReference($v));
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $received
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $recipient
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $recipient
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
     * The entity (e.g. person, organization, clinical information system, or device)
     * which was the source of the communication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $sender
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $sent
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIREventStatus
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIREventStatus $status
     * @return static
     */
    public function setStatus(FHIREventStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient or group that was the focus of this communication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
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
     * The patient or group that was the focus of this communication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $subject
     * @return static
     */
    public function setSubject(FHIRReference $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The resources which were responsible for or related to producing this
     * communication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The resources which were responsible for or related to producing this
     * communication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $topic
     * @return static
     */
    public function addTopic(FHIRReference $topic = null)
    {
        $this->topic[] = $topic;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The resources which were responsible for or related to producing this
     * communication.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $topic
     * @return static
     */
    public function setTopic(array $topic = [])
    {
        $this->topic = [];
        if ([] === $topic) {
            return $this;
        }
        foreach($topic as $v) {
            if ($v instanceof FHIRReference) {
                $this->addTopic($v);
            } else {
                $this->addTopic(new FHIRReference($v));
            }
        }
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
        if ([] !== ($vs = $this->getBasedOn())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_BASED_ON, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CATEGORY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getContext())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTEXT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDefinition())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DEFINITION, $i)] = $fieldErrs;
                }
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
        if (null !== ($v = $this->getNotDone())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NOT_DONE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNotDoneReason())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NOT_DONE_REASON] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPartOf())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PART_OF, $i)] = $fieldErrs;
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
        if ([] !== ($vs = $this->getReasonCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON_REFERENCE, $i)] = $fieldErrs;
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
        if ([] !== ($vs = $this->getTopic())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TOPIC, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BASED_ON])) {
            $v = $this->getBasedOn();
            foreach($validationRules[self::FIELD_BASED_ON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMMUNICATION, self::FIELD_BASED_ON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASED_ON])) {
                        $errs[self::FIELD_BASED_ON] = [];
                    }
                    $errs[self::FIELD_BASED_ON][$rule] = $err;
                }
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
        if (isset($validationRules[self::FIELD_CONTEXT])) {
            $v = $this->getContext();
            foreach($validationRules[self::FIELD_CONTEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMMUNICATION, self::FIELD_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTEXT])) {
                        $errs[self::FIELD_CONTEXT] = [];
                    }
                    $errs[self::FIELD_CONTEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION])) {
            $v = $this->getDefinition();
            foreach($validationRules[self::FIELD_DEFINITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMMUNICATION, self::FIELD_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION])) {
                        $errs[self::FIELD_DEFINITION] = [];
                    }
                    $errs[self::FIELD_DEFINITION][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_NOT_DONE])) {
            $v = $this->getNotDone();
            foreach($validationRules[self::FIELD_NOT_DONE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMMUNICATION, self::FIELD_NOT_DONE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOT_DONE])) {
                        $errs[self::FIELD_NOT_DONE] = [];
                    }
                    $errs[self::FIELD_NOT_DONE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOT_DONE_REASON])) {
            $v = $this->getNotDoneReason();
            foreach($validationRules[self::FIELD_NOT_DONE_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMMUNICATION, self::FIELD_NOT_DONE_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOT_DONE_REASON])) {
                        $errs[self::FIELD_NOT_DONE_REASON] = [];
                    }
                    $errs[self::FIELD_NOT_DONE_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMMUNICATION, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PART_OF])) {
            $v = $this->getPartOf();
            foreach($validationRules[self::FIELD_PART_OF] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMMUNICATION, self::FIELD_PART_OF, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PART_OF])) {
                        $errs[self::FIELD_PART_OF] = [];
                    }
                    $errs[self::FIELD_PART_OF][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_REASON_CODE])) {
            $v = $this->getReasonCode();
            foreach($validationRules[self::FIELD_REASON_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMMUNICATION, self::FIELD_REASON_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_CODE])) {
                        $errs[self::FIELD_REASON_CODE] = [];
                    }
                    $errs[self::FIELD_REASON_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_REFERENCE])) {
            $v = $this->getReasonReference();
            foreach($validationRules[self::FIELD_REASON_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMMUNICATION, self::FIELD_REASON_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_REFERENCE])) {
                        $errs[self::FIELD_REASON_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REASON_REFERENCE][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_TOPIC])) {
            $v = $this->getTopic();
            foreach($validationRules[self::FIELD_TOPIC] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMMUNICATION, self::FIELD_TOPIC, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TOPIC])) {
                        $errs[self::FIELD_TOPIC] = [];
                    }
                    $errs[self::FIELD_TOPIC][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCommunication $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCommunication
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
                'FHIRCommunication::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCommunication or null, %s seen.',
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
        if (isset($children->basedOn)) {
            foreach($children->basedOn as $child) {
                $type->addBasedOn(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->category)) {
            foreach($children->category as $child) {
                $type->addCategory(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->context)) {
            $type->setContext(FHIRReference::xmlUnserialize($children->context));
        }
        if (isset($children->definition)) {
            foreach($children->definition as $child) {
                $type->addDefinition(FHIRReference::xmlUnserialize($child));
            }
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
        if (isset($children->notDone)) {
            $type->setNotDone(FHIRBoolean::xmlUnserialize($children->notDone));
        }
        if (isset($attributes->notDone)) {
            $pt = $type->getNotDone();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->notDone);
            } else {
                $type->setNotDone((string)$attributes->notDone);
            }
        }
        if (isset($children->notDoneReason)) {
            $type->setNotDoneReason(FHIRCodeableConcept::xmlUnserialize($children->notDoneReason));
        }
        if (isset($children->note)) {
            foreach($children->note as $child) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($child));
            }
        }
        if (isset($children->partOf)) {
            foreach($children->partOf as $child) {
                $type->addPartOf(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->payload)) {
            foreach($children->payload as $child) {
                $type->addPayload(FHIRCommunicationPayload::xmlUnserialize($child));
            }
        }
        if (isset($children->reasonCode)) {
            foreach($children->reasonCode as $child) {
                $type->addReasonCode(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->reasonReference)) {
            foreach($children->reasonReference as $child) {
                $type->addReasonReference(FHIRReference::xmlUnserialize($child));
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
            $type->setStatus(FHIREventStatus::xmlUnserialize($children->status));
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRReference::xmlUnserialize($children->subject));
        }
        if (isset($children->topic)) {
            foreach($children->topic as $child) {
                $type->addTopic(FHIRReference::xmlUnserialize($child));
            }
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
        if ([] !== ($vs = $this->getBasedOn())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_BASED_ON, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getContext())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTEXT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getDefinition())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DEFINITION, null, $v->_getFHIRXMLNamespace()));
            }
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
        if (null !== ($v = $this->getNotDone())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NOT_DONE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getNotDoneReason())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NOT_DONE_REASON, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NOTE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getPartOf())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PART_OF, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getReasonCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_CODE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_REFERENCE, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getTopic())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TOPIC, null, $v->_getFHIRXMLNamespace()));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getBasedOn())) {
            $a[self::FIELD_BASED_ON] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_BASED_ON][] = $v;
            }
        }
        if ([] !== ($vs = $this->getCategory())) {
            $a[self::FIELD_CATEGORY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CATEGORY][] = $v;
            }
        }
        if (null !== ($v = $this->getContext())) {
            $a[self::FIELD_CONTEXT] = $v;
        }
        if ([] !== ($vs = $this->getDefinition())) {
            $a[self::FIELD_DEFINITION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DEFINITION][] = $v;
            }
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
        if (null !== ($v = $this->getNotDone())) {
            $a[self::FIELD_NOT_DONE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_NOT_DONE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getNotDoneReason())) {
            $a[self::FIELD_NOT_DONE_REASON] = $v;
        }
        if ([] !== ($vs = $this->getNote())) {
            $a[self::FIELD_NOTE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_NOTE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getPartOf())) {
            $a[self::FIELD_PART_OF] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PART_OF][] = $v;
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
        if ([] !== ($vs = $this->getReasonCode())) {
            $a[self::FIELD_REASON_CODE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REASON_CODE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            $a[self::FIELD_REASON_REFERENCE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REASON_REFERENCE][] = $v;
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
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIREventStatus::FIELD_VALUE, $enc)))) {
                unset($enc[FHIREventStatus::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if ([] !== ($vs = $this->getTopic())) {
            $a[self::FIELD_TOPIC] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TOPIC][] = $v;
            }
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