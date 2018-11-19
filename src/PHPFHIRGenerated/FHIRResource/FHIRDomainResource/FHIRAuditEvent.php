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

use PHPFHIRGenerated\FHIRElement\FHIRAuditEventAction;
use PHPFHIRGenerated\FHIRElement\FHIRAuditEventOutcome;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventSource;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRInstant;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A record of an event made for purposes of maintaining a security log. Typical uses include detection of intrusion attempts and monitoring for inappropriate usage.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRAuditEvent
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRAuditEvent extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'AuditEvent';

    /**
     * Indicator for type of action performed during the event that generated the audit.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAuditEventAction
     */
    private $action = null;

    /**
     * An actor taking an active role in the event or activity that is logged.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent[]
     */
    private $agent = [];

    /**
     * Specific instances of data or objects that have been accessed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity[]
     */
    private $entity = [];

    /**
     * Indicates whether the event succeeded or failed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAuditEventOutcome
     */
    private $outcome = null;

    /**
     * A free text description of the outcome of the event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $outcomeDesc = null;

    /**
     * The purposeOfUse (reason) that was used during the event being recorded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $purposeOfEvent = [];

    /**
     * The time when the event occurred on the source.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    private $recorded = null;

    /**
     * The system that is reporting the event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventSource
     */
    private $source = null;

    /**
     * Identifier for the category of event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    private $subtype = [];

    /**
     * Identifier for a family of the event.  For example, a menu item, program, rule, policy, function code, application name or URL. It identifies the performed function.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    private $type = null;

    /**
     * FHIRAuditEvent Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['action'])) {
                $value = $data['action'];
                if (is_array($value)) {
                    $value = new FHIRAuditEventAction($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRAuditEventAction($value);
                }
                if (!($value instanceof FHIRAuditEventAction)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAuditEvent::__construct - Property \"action\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAuditEventAction or data to construct type, saw ".gettype($value)); 
                }
                $this->setAction($value);
            }
            if (isset($data['agent'])) {
                $value = $data['agent'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRAuditEventAgent($v);
                        } 
                        if (!($v instanceof FHIRAuditEventAgent)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAuditEvent::__construct - Collection field \"agent\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addAgent($v);
                    }
                }
            }
            if (isset($data['entity'])) {
                $value = $data['entity'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRAuditEventEntity($v);
                        } 
                        if (!($v instanceof FHIRAuditEventEntity)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAuditEvent::__construct - Collection field \"entity\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addEntity($v);
                    }
                }
            }
            if (isset($data['outcome'])) {
                $value = $data['outcome'];
                if (is_array($value)) {
                    $value = new FHIRAuditEventOutcome($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRAuditEventOutcome($value);
                }
                if (!($value instanceof FHIRAuditEventOutcome)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAuditEvent::__construct - Property \"outcome\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAuditEventOutcome or data to construct type, saw ".gettype($value)); 
                }
                $this->setOutcome($value);
            }
            if (isset($data['outcomeDesc'])) {
                $value = $data['outcomeDesc'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAuditEvent::__construct - Property \"outcomeDesc\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setOutcomeDesc($value);
            }
            if (isset($data['purposeOfEvent'])) {
                $value = $data['purposeOfEvent'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCodeableConcept($v);
                        } 
                        if (!($v instanceof FHIRCodeableConcept)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAuditEvent::__construct - Collection field \"purposeOfEvent\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addPurposeOfEvent($v);
                    }
                }
            }
            if (isset($data['recorded'])) {
                $value = $data['recorded'];
                if (is_array($value)) {
                    $value = new FHIRInstant($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRInstant($value);
                }
                if (!($value instanceof FHIRInstant)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAuditEvent::__construct - Property \"recorded\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or data to construct type, saw ".gettype($value)); 
                }
                $this->setRecorded($value);
            }
            if (isset($data['source'])) {
                $value = $data['source'];
                if (is_array($value)) {
                    $value = new FHIRAuditEventSource($value);
                } 
                if (!($value instanceof FHIRAuditEventSource)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAuditEvent::__construct - Property \"source\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventSource or data to construct type, saw ".gettype($value)); 
                }
                $this->setSource($value);
            }
            if (isset($data['subtype'])) {
                $value = $data['subtype'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCoding($v);
                        } 
                        if (!($v instanceof FHIRCoding)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAuditEvent::__construct - Collection field \"subtype\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCoding or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addSubtype($v);
                    }
                }
            }
            if (isset($data['type'])) {
                $value = $data['type'];
                if (is_array($value)) {
                    $value = new FHIRCoding($value);
                } 
                if (!($value instanceof FHIRCoding)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAuditEvent::__construct - Property \"type\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCoding or data to construct type, saw ".gettype($value)); 
                }
                $this->setType($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAuditEvent::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Indicator for type of action performed during the event that generated the audit.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAuditEventAction
     * @return $this
     */
    public function setAction($action)
    {
        if (null === $action) {
            return $this; 
        }
        if (is_scalar($action)) {
            $action = new FHIRAuditEventAction($action);
        }
        if (!($action instanceof FHIRAuditEventAction)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAuditEvent::setAction - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRAuditEventAction or appropriate scalar value, %s seen.',
                gettype($action)
            ));
        }
        $this->action = $action;
        return $this;
    }

    /**
     * Indicator for type of action performed during the event that generated the audit.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAuditEventAction
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * An actor taking an active role in the event or activity that is logged.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent
     * @return $this
     */
    public function addAgent(FHIRAuditEventAgent $agent = null)
    {
        if (null === $agent) {
            return $this; 
        }
        $this->agent[] = $agent;
        return $this;
    }

    /**
     * An actor taking an active role in the event or activity that is logged.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent[]
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Specific instances of data or objects that have been accessed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity
     * @return $this
     */
    public function addEntity(FHIRAuditEventEntity $entity = null)
    {
        if (null === $entity) {
            return $this; 
        }
        $this->entity[] = $entity;
        return $this;
    }

    /**
     * Specific instances of data or objects that have been accessed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity[]
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * Indicates whether the event succeeded or failed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAuditEventOutcome
     * @return $this
     */
    public function setOutcome($outcome)
    {
        if (null === $outcome) {
            return $this; 
        }
        if (is_scalar($outcome)) {
            $outcome = new FHIRAuditEventOutcome($outcome);
        }
        if (!($outcome instanceof FHIRAuditEventOutcome)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAuditEvent::setOutcome - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRAuditEventOutcome or appropriate scalar value, %s seen.',
                gettype($outcome)
            ));
        }
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Indicates whether the event succeeded or failed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAuditEventOutcome
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * A free text description of the outcome of the event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setOutcomeDesc($outcomeDesc)
    {
        if (null === $outcomeDesc) {
            return $this; 
        }
        if (is_scalar($outcomeDesc)) {
            $outcomeDesc = new FHIRString($outcomeDesc);
        }
        if (!($outcomeDesc instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAuditEvent::setOutcomeDesc - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($outcomeDesc)
            ));
        }
        $this->outcomeDesc = $outcomeDesc;
        return $this;
    }

    /**
     * A free text description of the outcome of the event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getOutcomeDesc()
    {
        return $this->outcomeDesc;
    }

    /**
     * The purposeOfUse (reason) that was used during the event being recorded.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function addPurposeOfEvent(FHIRCodeableConcept $purposeOfEvent = null)
    {
        if (null === $purposeOfEvent) {
            return $this; 
        }
        $this->purposeOfEvent[] = $purposeOfEvent;
        return $this;
    }

    /**
     * The purposeOfUse (reason) that was used during the event being recorded.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getPurposeOfEvent()
    {
        return $this->purposeOfEvent;
    }

    /**
     * The time when the event occurred on the source.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     * @return $this
     */
    public function setRecorded($recorded)
    {
        if (null === $recorded) {
            return $this; 
        }
        if (is_scalar($recorded)) {
            $recorded = new FHIRInstant($recorded);
        }
        if (!($recorded instanceof FHIRInstant)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAuditEvent::setRecorded - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or appropriate scalar value, %s seen.',
                gettype($recorded)
            ));
        }
        $this->recorded = $recorded;
        return $this;
    }

    /**
     * The time when the event occurred on the source.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getRecorded()
    {
        return $this->recorded;
    }

    /**
     * The system that is reporting the event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventSource
     * @return $this
     */
    public function setSource(FHIRAuditEventSource $source = null)
    {
        if (null === $source) {
            return $this; 
        }
        $this->source = $source;
        return $this;
    }

    /**
     * The system that is reporting the event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventSource
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Identifier for the category of event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function addSubtype(FHIRCoding $subtype = null)
    {
        if (null === $subtype) {
            return $this; 
        }
        $this->subtype[] = $subtype;
        return $this;
    }

    /**
     * Identifier for the category of event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * Identifier for a family of the event.  For example, a menu item, program, rule, policy, function code, application name or URL. It identifies the performed function.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setType(FHIRCoding $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Identifier for a family of the event.  For example, a menu item, program, rule, policy, function code, application name or URL. It identifies the performed function.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getType()
    {
        return $this->type;
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
        if (0 < count($values = $this->getAgent())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['agent'] = $vs;
            }
        }
        if (0 < count($values = $this->getEntity())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['entity'] = $vs;
            }
        }
        if (null !== ($v = $this->getOutcome())) {
            $a['outcome'] = $v;
        }
        if (null !== ($v = $this->getOutcomeDesc())) {
            $a['outcomeDesc'] = $v;
        }
        if (0 < count($values = $this->getPurposeOfEvent())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['purposeOfEvent'] = $vs;
            }
        }
        if (null !== ($v = $this->getRecorded())) {
            $a['recorded'] = $v;
        }
        if (null !== ($v = $this->getSource())) {
            $a['source'] = $v;
        }
        if (0 < count($values = $this->getSubtype())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['subtype'] = $vs;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
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
            $sxe = new \SimpleXMLElement('<AuditEvent xmlns="http://hl7.org/fhir"></AuditEvent>');
        }
        if (null !== ($v = $this->getAction())) {
            $v->xmlSerialize(true, $sxe->addChild('action'));
        }
        if (0 < count($values = $this->getAgent())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('agent'));
                }
            }
        }
        if (0 < count($values = $this->getEntity())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('entity'));
                }
            }
        }
        if (null !== ($v = $this->getOutcome())) {
            $v->xmlSerialize(true, $sxe->addChild('outcome'));
        }
        if (null !== ($v = $this->getOutcomeDesc())) {
            $v->xmlSerialize(true, $sxe->addChild('outcomeDesc'));
        }
        if (0 < count($values = $this->getPurposeOfEvent())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('purposeOfEvent'));
                }
            }
        }
        if (null !== ($v = $this->getRecorded())) {
            $v->xmlSerialize(true, $sxe->addChild('recorded'));
        }
        if (null !== ($v = $this->getSource())) {
            $v->xmlSerialize(true, $sxe->addChild('source'));
        }
        if (0 < count($values = $this->getSubtype())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('subtype'));
                }
            }
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize(true, $sxe->addChild('type'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}