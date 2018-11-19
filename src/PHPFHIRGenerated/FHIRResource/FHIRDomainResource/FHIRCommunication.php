<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCommunication\FHIRCommunicationPayload;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIREventStatus;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
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
     * An order, proposal or plan fulfilled in whole or in part by this Communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $basedOn = [];

    /**
     * The type of message conveyed such as alert, notification, reminder, instruction, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $category = [];

    /**
     * The encounter within which the communication was sent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $context = null;

    /**
     * A protocol, guideline, or other definition that was adhered to in whole or in part by this communication event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $definition = [];

    /**
     * Identifiers associated with this Communication that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * A channel that was used for this communication (e.g. email, fax).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $medium = [];

    /**
     * If true, indicates that the described communication event did not actually occur.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $notDone = null;

    /**
     * Describes why the communication event did not occur in coded and/or textual form.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $notDoneReason = null;

    /**
     * Additional notes or commentary about the communication by the sender, receiver or other interested parties.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    private $note = [];

    /**
     * Part of this action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $partOf = [];

    /**
     * Text, attachment(s), or resource(s) that was communicated to the recipient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCommunication\FHIRCommunicationPayload[]
     */
    private $payload = [];

    /**
     * The reason or justification for the communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $reasonCode = [];

    /**
     * Indicates another resource whose existence justifies this communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $reasonReference = [];

    /**
     * The time when this communication arrived at the destination.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $received = null;

    /**
     * The entity (e.g. person, organization, clinical information system, or device) which was the target of the communication. If receipts need to be tracked by individual, a separate resource instance will need to be created for each recipient.  Multiple recipient communications are intended where either a receipt(s) is not tracked (e.g. a mass mail-out) or is captured in aggregate (all emails confirmed received by a particular time).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $recipient = [];

    /**
     * The entity (e.g. person, organization, clinical information system, or device) which was the source of the communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $sender = null;

    /**
     * The time when this communication was sent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $sent = null;

    /**
     * The status of the transmission.
     * @var \PHPFHIRGenerated\FHIRElement\FHIREventStatus
     */
    private $status = null;

    /**
     * The patient or group that was the focus of this communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $subject = null;

    /**
     * The resources which were responsible for or related to producing this communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $topic = [];

    /**
     * FHIRCommunication Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['basedOn'])) {
                $value = $data['basedOn'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRReference($v);
                        } 
                        if (!($v instanceof FHIRReference)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunication::__construct - Collection field \"basedOn\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($v));
                        }
                        $this->addBasedOn($v);
                    }
                }
            }
            if (isset($data['category'])) {
                $value = $data['category'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCodeableConcept($v);
                        } 
                        if (!($v instanceof FHIRCodeableConcept)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunication::__construct - Collection field \"category\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($v));
                        }
                        $this->addCategory($v);
                    }
                }
            }
            if (isset($data['context'])) {
                $value = $data['context'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunication::__construct - Property \"context\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setContext($value);
            }
            if (isset($data['definition'])) {
                $value = $data['definition'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRReference($v);
                        } 
                        if (!($v instanceof FHIRReference)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunication::__construct - Collection field \"definition\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($v));
                        }
                        $this->addDefinition($v);
                    }
                }
            }
            if (isset($data['identifier'])) {
                $value = $data['identifier'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRIdentifier($v);
                        } 
                        if (!($v instanceof FHIRIdentifier)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunication::__construct - Collection field \"identifier\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRIdentifier or data to construct type, saw ".gettype($v));
                        }
                        $this->addIdentifier($v);
                    }
                }
            }
            if (isset($data['medium'])) {
                $value = $data['medium'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCodeableConcept($v);
                        } 
                        if (!($v instanceof FHIRCodeableConcept)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunication::__construct - Collection field \"medium\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($v));
                        }
                        $this->addMedium($v);
                    }
                }
            }
            if (isset($data['notDone'])) {
                $value = $data['notDone'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunication::__construct - Property \"notDone\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value));
                }
                $this->setNotDone($value);
            }
            if (isset($data['notDoneReason'])) {
                $value = $data['notDoneReason'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunication::__construct - Property \"notDoneReason\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setNotDoneReason($value);
            }
            if (isset($data['note'])) {
                $value = $data['note'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRAnnotation($v);
                        } 
                        if (!($v instanceof FHIRAnnotation)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunication::__construct - Collection field \"note\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAnnotation or data to construct type, saw ".gettype($v));
                        }
                        $this->addNote($v);
                    }
                }
            }
            if (isset($data['partOf'])) {
                $value = $data['partOf'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRReference($v);
                        } 
                        if (!($v instanceof FHIRReference)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunication::__construct - Collection field \"partOf\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($v));
                        }
                        $this->addPartOf($v);
                    }
                }
            }
            if (isset($data['payload'])) {
                $value = $data['payload'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCommunicationPayload($v);
                        } 
                        if (!($v instanceof FHIRCommunicationPayload)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunication::__construct - Collection field \"payload\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCommunication\FHIRCommunicationPayload or data to construct type, saw ".gettype($v));
                        }
                        $this->addPayload($v);
                    }
                }
            }
            if (isset($data['reasonCode'])) {
                $value = $data['reasonCode'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCodeableConcept($v);
                        } 
                        if (!($v instanceof FHIRCodeableConcept)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunication::__construct - Collection field \"reasonCode\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($v));
                        }
                        $this->addReasonCode($v);
                    }
                }
            }
            if (isset($data['reasonReference'])) {
                $value = $data['reasonReference'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRReference($v);
                        } 
                        if (!($v instanceof FHIRReference)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunication::__construct - Collection field \"reasonReference\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($v));
                        }
                        $this->addReasonReference($v);
                    }
                }
            }
            if (isset($data['received'])) {
                $value = $data['received'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunication::__construct - Property \"received\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value));
                }
                $this->setReceived($value);
            }
            if (isset($data['recipient'])) {
                $value = $data['recipient'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRReference($v);
                        } 
                        if (!($v instanceof FHIRReference)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunication::__construct - Collection field \"recipient\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($v));
                        }
                        $this->addRecipient($v);
                    }
                }
            }
            if (isset($data['sender'])) {
                $value = $data['sender'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunication::__construct - Property \"sender\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setSender($value);
            }
            if (isset($data['sent'])) {
                $value = $data['sent'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunication::__construct - Property \"sent\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value));
                }
                $this->setSent($value);
            }
            if (isset($data['status'])) {
                $value = $data['status'];
                if (is_array($value)) {
                    $value = new FHIREventStatus($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIREventStatus($value);
                }
                if (!($value instanceof FHIREventStatus)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunication::__construct - Property \"status\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIREventStatus or data to construct type, saw ".gettype($value));
                }
                $this->setStatus($value);
            }
            if (isset($data['subject'])) {
                $value = $data['subject'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunication::__construct - Property \"subject\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setSubject($value);
            }
            if (isset($data['topic'])) {
                $value = $data['topic'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRReference($v);
                        } 
                        if (!($v instanceof FHIRReference)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunication::__construct - Collection field \"topic\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($v));
                        }
                        $this->addTopic($v);
                    }
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRCommunication::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * An order, proposal or plan fulfilled in whole or in part by this Communication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function addBasedOn(FHIRReference $basedOn = null)
    {
        if (null === $basedOn) {
            return $this; 
        }
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * An order, proposal or plan fulfilled in whole or in part by this Communication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference[]
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
    public function addCategory(FHIRCodeableConcept $category = null)
    {
        if (null === $category) {
            return $this; 
        }
        $this->category[] = $category;
        return $this;
    }

    /**
     * The type of message conveyed such as alert, notification, reminder, instruction, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
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
     * A protocol, guideline, or other definition that was adhered to in whole or in part by this communication event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function addDefinition(FHIRReference $definition = null)
    {
        if (null === $definition) {
            return $this; 
        }
        $this->definition[] = $definition;
        return $this;
    }

    /**
     * A protocol, guideline, or other definition that was adhered to in whole or in part by this communication event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Identifiers associated with this Communication that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Identifiers associated with this Communication that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
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
    public function addMedium(FHIRCodeableConcept $medium = null)
    {
        if (null === $medium) {
            return $this; 
        }
        $this->medium[] = $medium;
        return $this;
    }

    /**
     * A channel that was used for this communication (e.g. email, fax).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getMedium()
    {
        return $this->medium;
    }

    /**
     * If true, indicates that the described communication event did not actually occur.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setNotDone($notDone)
    {
        if (null === $notDone) {
            return $this; 
        }
        if (is_scalar($notDone)) {
            $notDone = new FHIRBoolean($notDone);
        }
        if (!($notDone instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCommunication::setNotDone - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($notDone)
            ));
        }
        $this->notDone = $notDone;
        return $this;
    }

    /**
     * If true, indicates that the described communication event did not actually occur.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getNotDone()
    {
        return $this->notDone;
    }

    /**
     * Describes why the communication event did not occur in coded and/or textual form.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setNotDoneReason(FHIRCodeableConcept $notDoneReason = null)
    {
        if (null === $notDoneReason) {
            return $this; 
        }
        $this->notDoneReason = $notDoneReason;
        return $this;
    }

    /**
     * Describes why the communication event did not occur in coded and/or textual form.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getNotDoneReason()
    {
        return $this->notDoneReason;
    }

    /**
     * Additional notes or commentary about the communication by the sender, receiver or other interested parties.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     * @return $this
     */
    public function addNote(FHIRAnnotation $note = null)
    {
        if (null === $note) {
            return $this; 
        }
        $this->note[] = $note;
        return $this;
    }

    /**
     * Additional notes or commentary about the communication by the sender, receiver or other interested parties.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
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
    public function addPartOf(FHIRReference $partOf = null)
    {
        if (null === $partOf) {
            return $this; 
        }
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * Part of this action.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference[]
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
    public function addPayload(FHIRCommunicationPayload $payload = null)
    {
        if (null === $payload) {
            return $this; 
        }
        $this->payload[] = $payload;
        return $this;
    }

    /**
     * Text, attachment(s), or resource(s) that was communicated to the recipient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCommunication\FHIRCommunicationPayload[]
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * The reason or justification for the communication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function addReasonCode(FHIRCodeableConcept $reasonCode = null)
    {
        if (null === $reasonCode) {
            return $this; 
        }
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * The reason or justification for the communication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
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
    public function addReasonReference(FHIRReference $reasonReference = null)
    {
        if (null === $reasonReference) {
            return $this; 
        }
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * Indicates another resource whose existence justifies this communication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference[]
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
     * The entity (e.g. person, organization, clinical information system, or device) which was the target of the communication. If receipts need to be tracked by individual, a separate resource instance will need to be created for each recipient.  Multiple recipient communications are intended where either a receipt(s) is not tracked (e.g. a mass mail-out) or is captured in aggregate (all emails confirmed received by a particular time).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function addRecipient(FHIRReference $recipient = null)
    {
        if (null === $recipient) {
            return $this; 
        }
        $this->recipient[] = $recipient;
        return $this;
    }

    /**
     * The entity (e.g. person, organization, clinical information system, or device) which was the target of the communication. If receipts need to be tracked by individual, a separate resource instance will need to be created for each recipient.  Multiple recipient communications are intended where either a receipt(s) is not tracked (e.g. a mass mail-out) or is captured in aggregate (all emails confirmed received by a particular time).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference[]
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
     * The resources which were responsible for or related to producing this communication.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function addTopic(FHIRReference $topic = null)
    {
        if (null === $topic) {
            return $this; 
        }
        $this->topic[] = $topic;
        return $this;
    }

    /**
     * The resources which were responsible for or related to producing this communication.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference[]
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
        if (0 < count($values = $this->getBasedOn())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['basedOn'] = $vs;
            }
        }
        if (0 < count($values = $this->getCategory())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['category'] = $vs;
            }
        }
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
        }
        if (0 < count($values = $this->getDefinition())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['definition'] = $vs;
            }
        }
        if (0 < count($values = $this->getIdentifier())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['identifier'] = $vs;
            }
        }
        if (0 < count($values = $this->getMedium())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['medium'] = $vs;
            }
        }
        if (null !== ($v = $this->getNotDone())) {
            $a['notDone'] = $v;
        }
        if (null !== ($v = $this->getNotDoneReason())) {
            $a['notDoneReason'] = $v;
        }
        if (0 < count($values = $this->getNote())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['note'] = $vs;
            }
        }
        if (0 < count($values = $this->getPartOf())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['partOf'] = $vs;
            }
        }
        if (0 < count($values = $this->getPayload())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['payload'] = $vs;
            }
        }
        if (0 < count($values = $this->getReasonCode())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['reasonCode'] = $vs;
            }
        }
        if (0 < count($values = $this->getReasonReference())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['reasonReference'] = $vs;
            }
        }
        if (null !== ($v = $this->getReceived())) {
            $a['received'] = $v;
        }
        if (0 < count($values = $this->getRecipient())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['recipient'] = $vs;
            }
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
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
        }
        if (0 < count($values = $this->getTopic())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['topic'] = $vs;
            }
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
        if (0 < count($values = $this->getBasedOn())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('basedOn'));
                }
            }
        }
        if (0 < count($values = $this->getCategory())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('category'));
                }
            }
        }
        if (null !== ($v = $this->getContext())) {
            $v->xmlSerialize(true, $sxe->addChild('context'));
        }
        if (0 < count($values = $this->getDefinition())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('definition'));
                }
            }
        }
        if (0 < count($values = $this->getIdentifier())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('identifier'));
                }
            }
        }
        if (0 < count($values = $this->getMedium())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('medium'));
                }
            }
        }
        if (null !== ($v = $this->getNotDone())) {
            $v->xmlSerialize(true, $sxe->addChild('notDone'));
        }
        if (null !== ($v = $this->getNotDoneReason())) {
            $v->xmlSerialize(true, $sxe->addChild('notDoneReason'));
        }
        if (0 < count($values = $this->getNote())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('note'));
                }
            }
        }
        if (0 < count($values = $this->getPartOf())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('partOf'));
                }
            }
        }
        if (0 < count($values = $this->getPayload())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('payload'));
                }
            }
        }
        if (0 < count($values = $this->getReasonCode())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('reasonCode'));
                }
            }
        }
        if (0 < count($values = $this->getReasonReference())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('reasonReference'));
                }
            }
        }
        if (null !== ($v = $this->getReceived())) {
            $v->xmlSerialize(true, $sxe->addChild('received'));
        }
        if (0 < count($values = $this->getRecipient())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('recipient'));
                }
            }
        }
        if (null !== ($v = $this->getSender())) {
            $v->xmlSerialize(true, $sxe->addChild('sender'));
        }
        if (null !== ($v = $this->getSent())) {
            $v->xmlSerialize(true, $sxe->addChild('sent'));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize(true, $sxe->addChild('status'));
        }
        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize(true, $sxe->addChild('subject'));
        }
        if (0 < count($values = $this->getTopic())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('topic'));
                }
            }
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}