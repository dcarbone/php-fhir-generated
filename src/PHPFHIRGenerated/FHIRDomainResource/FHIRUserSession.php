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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Information about a user's current session.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRUserSession extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Allows a service to provide a unique, business identifier for the session.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * A practitioner, patient, device, or related person engaged in the session.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $user = null;

    /**
     * Status of the session.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRUserSession\FHIRUserSessionStatus
     */
    public $status = null;

    /**
     * Location that identifies the physical place at which the user's session is occurring. For the purposes of context synchronization, this is intended to represent the user's workstation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $workstation = null;

    /**
     * The current focus of the user's session. Common values are a reference to a Patient, Encounter, ImagingStudy, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $focus = [];

    /**
     * Indicates the timestamp when the user session was first created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $created = null;

    /**
     * Indicates the timestamp when the user session will expire (i.e. no longer be valid).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $expires = null;

    /**
     * Provides additional information associated with the context.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRUserSession\FHIRUserSessionContext[]
     */
    public $context = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'UserSession';

    /**
     * Allows a service to provide a unique, business identifier for the session.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Allows a service to provide a unique, business identifier for the session.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier) {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A practitioner, patient, device, or related person engaged in the session.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * A practitioner, patient, device, or related person engaged in the session.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $user
     * @return $this
     */
    public function setUser($user) {
        $this->user = $user;
        return $this;
    }

    /**
     * Status of the session.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRUserSession\FHIRUserSessionStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Status of the session.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRUserSession\FHIRUserSessionStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Location that identifies the physical place at which the user's session is occurring. For the purposes of context synchronization, this is intended to represent the user's workstation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getWorkstation() {
        return $this->workstation;
    }

    /**
     * Location that identifies the physical place at which the user's session is occurring. For the purposes of context synchronization, this is intended to represent the user's workstation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $workstation
     * @return $this
     */
    public function setWorkstation($workstation) {
        $this->workstation = $workstation;
        return $this;
    }

    /**
     * The current focus of the user's session. Common values are a reference to a Patient, Encounter, ImagingStudy, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getFocus() {
        return $this->focus;
    }

    /**
     * The current focus of the user's session. Common values are a reference to a Patient, Encounter, ImagingStudy, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $focus
     * @return $this
     */
    public function addFocus($focus) {
        $this->focus[] = $focus;
        return $this;
    }

    /**
     * Indicates the timestamp when the user session was first created.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getCreated() {
        return $this->created;
    }

    /**
     * Indicates the timestamp when the user session was first created.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $created
     * @return $this
     */
    public function setCreated($created) {
        $this->created = $created;
        return $this;
    }

    /**
     * Indicates the timestamp when the user session will expire (i.e. no longer be valid).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getExpires() {
        return $this->expires;
    }

    /**
     * Indicates the timestamp when the user session will expire (i.e. no longer be valid).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $expires
     * @return $this
     */
    public function setExpires($expires) {
        $this->expires = $expires;
        return $this;
    }

    /**
     * Provides additional information associated with the context.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRUserSession\FHIRUserSessionContext[]
     */
    public function getContext() {
        return $this->context;
    }

    /**
     * Provides additional information associated with the context.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRUserSession\FHIRUserSessionContext $context
     * @return $this
     */
    public function addContext($context) {
        $this->context[] = $context;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['user'])) {
                $this->setUser($data['user']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['workstation'])) {
                $this->setWorkstation($data['workstation']);
            }
            if (isset($data['focus'])) {
                if (is_array($data['focus'])) {
                    foreach($data['focus'] as $d) {
                        $this->addFocus($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"focus" must be array of objects or null, '.gettype($data['focus']).' seen.');
                }
            }
            if (isset($data['created'])) {
                $this->setCreated($data['created']);
            }
            if (isset($data['expires'])) {
                $this->setExpires($data['expires']);
            }
            if (isset($data['context'])) {
                if (is_array($data['context'])) {
                    foreach($data['context'] as $d) {
                        $this->addContext($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"context" must be array of objects or null, '.gettype($data['context']).' seen.');
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (isset($this->identifier)) $json['identifier'] = $this->identifier;
        if (isset($this->user)) $json['user'] = $this->user;
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->workstation)) $json['workstation'] = $this->workstation;
        if (0 < count($this->focus)) {
            $json['focus'] = [];
            foreach($this->focus as $focus) {
                if (null !== $focus) $json['focus'][] = $focus;
            }
        }
        if (isset($this->created)) $json['created'] = $this->created;
        if (isset($this->expires)) $json['expires'] = $this->expires;
        if (0 < count($this->context)) {
            $json['context'] = [];
            foreach($this->context as $context) {
                if (null !== $context) $json['context'][] = $context;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<UserSession xmlns="http://hl7.org/fhir"></UserSession>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->identifier)) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (isset($this->user)) $this->user->xmlSerialize(true, $sxe->addChild('user'));
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->workstation)) $this->workstation->xmlSerialize(true, $sxe->addChild('workstation'));
        if (0 < count($this->focus)) {
            foreach($this->focus as $focus) {
                $focus->xmlSerialize(true, $sxe->addChild('focus'));
            }
        }
        if (isset($this->created)) $this->created->xmlSerialize(true, $sxe->addChild('created'));
        if (isset($this->expires)) $this->expires->xmlSerialize(true, $sxe->addChild('expires'));
        if (0 < count($this->context)) {
            foreach($this->context as $context) {
                $context->xmlSerialize(true, $sxe->addChild('context'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}