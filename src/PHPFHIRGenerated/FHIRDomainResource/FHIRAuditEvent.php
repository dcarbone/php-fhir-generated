<?php namespace PHPFHIRGenerated\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A record of an event made for purposes of maintaining a security log. Typical uses include detection of intrusion attempts and monitoring for inappropriate usage.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRAuditEvent extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Identifies the name, action type, time, and disposition of the audited event.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRAuditEvent\FHIRAuditEventEvent
     */
    public $event = null;

    /**
     * A person, a hardware device or software process.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRAuditEvent\FHIRAuditEventParticipant[]
     */
    public $participant = array();

    /**
     * Application systems and processes.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRAuditEvent\FHIRAuditEventSource
     */
    public $source = null;

    /**
     * Specific instances of data or objects that have been accessed.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRAuditEvent\FHIRAuditEventObject[]
     */
    public $object = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'AuditEvent';

    /**
     * Identifies the name, action type, time, and disposition of the audited event.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRAuditEvent\FHIRAuditEventEvent
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Identifies the name, action type, time, and disposition of the audited event.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRAuditEvent\FHIRAuditEventEvent $event
     * @return $this
     */
    public function setEvent($event)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * A person, a hardware device or software process.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRAuditEvent\FHIRAuditEventParticipant[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * A person, a hardware device or software process.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRAuditEvent\FHIRAuditEventParticipant $participant
     * @return $this
     */
    public function addParticipant($participant)
    {
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * Application systems and processes.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRAuditEvent\FHIRAuditEventSource
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Application systems and processes.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRAuditEvent\FHIRAuditEventSource $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Specific instances of data or objects that have been accessed.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRAuditEvent\FHIRAuditEventObject[]
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Specific instances of data or objects that have been accessed.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRAuditEvent\FHIRAuditEventObject $object
     * @return $this
     */
    public function addObject($object)
    {
        $this->object[] = $object;
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
        if (null !== $this->event) $json['event'] = $this->event;
        if (0 < count($this->participant)) {
            $json['participant'] = [];
            foreach($this->participant as $participant) {
                $json['participant'][] = $participant;
            }
        }
        if (null !== $this->source) $json['source'] = $this->source;
        if (0 < count($this->object)) {
            $json['object'] = [];
            foreach($this->object as $object) {
                $json['object'][] = $object;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<AuditEvent xmlns="http://hl7.org/fhir"></AuditEvent>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->event) $this->event->xmlSerialize(true, $sxe->addChild('event'));
        if (0 < count($this->participant)) {
            foreach($this->participant as $participant) {
                $participant->xmlSerialize(true, $sxe->addChild('participant'));
            }
        }
        if (null !== $this->source) $this->source->xmlSerialize(true, $sxe->addChild('source'));
        if (0 < count($this->object)) {
            foreach($this->object as $object) {
                $object->xmlSerialize(true, $sxe->addChild('object'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}