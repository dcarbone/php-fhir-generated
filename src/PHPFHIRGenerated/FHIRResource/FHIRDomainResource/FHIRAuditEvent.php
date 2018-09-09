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

use PHPFHIRGenerated\FHIRElement\FHIRAuditEventAction;
use PHPFHIRGenerated\FHIRElement\FHIRAuditEventOutcome;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventSource;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRInstant;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
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
    public $action = null;

    /**
     * An actor taking an active role in the event or activity that is logged.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent
     */
    public $agent = null;

    /**
     * Specific instances of data or objects that have been accessed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity
     */
    public $entity = null;

    /**
     * Indicates whether the event succeeded or failed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAuditEventOutcome
     */
    public $outcome = null;

    /**
     * A free text description of the outcome of the event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $outcomeDesc = null;

    /**
     * The period during which the activity occurred.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * The purposeOfUse (reason) that was used during the event being recorded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $purposeOfEvent = null;

    /**
     * The time when the event was recorded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $recorded = null;

    /**
     * The system that is reporting the event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventSource
     */
    public $source = null;

    /**
     * Identifier for the category of event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $subtype = null;

    /**
     * Identifier for a family of the event.  For example, a menu item, program, rule, policy, function code, application name or URL. It identifies the performed function.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $type = null;

    /**
     * FHIRAuditEvent Constructor
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
            if (isset($data['agent'])) {
                $this->setAgent($data['agent']);
            }
            if (isset($data['entity'])) {
                $this->setEntity($data['entity']);
            }
            if (isset($data['outcome'])) {
                $this->setOutcome($data['outcome']);
            }
            if (isset($data['outcomeDesc'])) {
                $this->setOutcomeDesc($data['outcomeDesc']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['purposeOfEvent'])) {
                $this->setPurposeOfEvent($data['purposeOfEvent']);
            }
            if (isset($data['recorded'])) {
                $this->setRecorded($data['recorded']);
            }
            if (isset($data['source'])) {
                $this->setSource($data['source']);
            }
            if (isset($data['subtype'])) {
                $this->setSubtype($data['subtype']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAuditEvent::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
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
    public function setAgent(FHIRAuditEventAgent $agent = null)
    {
        if (null === $agent) {
            return $this; 
        }
        $this->agent = $agent;
        return $this;
    }

    /**
     * An actor taking an active role in the event or activity that is logged.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent
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
    public function setEntity(FHIRAuditEventEntity $entity = null)
    {
        if (null === $entity) {
            return $this; 
        }
        $this->entity = $entity;
        return $this;
    }

    /**
     * Specific instances of data or objects that have been accessed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity
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
     * The period during which the activity occurred.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        if (null === $period) {
            return $this; 
        }
        $this->period = $period;
        return $this;
    }

    /**
     * The period during which the activity occurred.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }


    /**
     * The purposeOfUse (reason) that was used during the event being recorded.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setPurposeOfEvent(FHIRCodeableConcept $purposeOfEvent = null)
    {
        if (null === $purposeOfEvent) {
            return $this; 
        }
        $this->purposeOfEvent = $purposeOfEvent;
        return $this;
    }

    /**
     * The purposeOfUse (reason) that was used during the event being recorded.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPurposeOfEvent()
    {
        return $this->purposeOfEvent;
    }


    /**
     * The time when the event was recorded.
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
     * The time when the event was recorded.
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
    public function setSubtype(FHIRCoding $subtype = null)
    {
        if (null === $subtype) {
            return $this; 
        }
        $this->subtype = $subtype;
        return $this;
    }

    /**
     * Identifier for the category of event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
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
        if (null !== ($v = $this->getAgent())) {
            $a['agent'] = $v;
        }
        if (null !== ($v = $this->getEntity())) {
            $a['entity'] = $v;
        }
        if (null !== ($v = $this->getOutcome())) {
            $a['outcome'] = $v;
        }
        if (null !== ($v = $this->getOutcomeDesc())) {
            $a['outcomeDesc'] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a['period'] = $v;
        }
        if (null !== ($v = $this->getPurposeOfEvent())) {
            $a['purposeOfEvent'] = $v;
        }
        if (null !== ($v = $this->getRecorded())) {
            $a['recorded'] = $v;
        }
        if (null !== ($v = $this->getSource())) {
            $a['source'] = $v;
        }
        if (null !== ($v = $this->getSubtype())) {
            $a['subtype'] = $v;
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
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}