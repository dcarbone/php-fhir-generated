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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRUserSession\FHIRUserSessionContext;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRUserSession\FHIRUserSessionStatus;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRInstant;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Information about a user's current session.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRUserSession
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRUserSession extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'UserSession';

    /**
     * Provides additional information associated with the context.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRUserSession\FHIRUserSessionContext
     */
    public $context = null;

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
     * The current focus of the user's session. Common values are a reference to a Patient, Encounter, ImagingStudy, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $focus = null;

    /**
     * Allows a service to provide a unique, business identifier for the session.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Status of the session.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRUserSession\FHIRUserSessionStatus
     */
    public $status = null;

    /**
     * A practitioner, patient, device, or related person engaged in the session.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $user = null;

    /**
     * Location that identifies the physical place at which the user's session is occurring. For the purposes of context synchronization, this is intended to represent the user's workstation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $workstation = null;

    /**
     * FHIRUserSession Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['created'])) {
                $this->setCreated($data['created']);
            }
            if (isset($data['expires'])) {
                $this->setExpires($data['expires']);
            }
            if (isset($data['focus'])) {
                $this->setFocus($data['focus']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['user'])) {
                $this->setUser($data['user']);
            }
            if (isset($data['workstation'])) {
                $this->setWorkstation($data['workstation']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRUserSession::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Provides additional information associated with the context.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRUserSession\FHIRUserSessionContext
     * @return $this
     */
    public function setContext(FHIRUserSessionContext $context = null)
    {
        if (null === $context) {
            return $this; 
        }
        $this->context = $context;
        return $this;
    }

    /**
     * Provides additional information associated with the context.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRUserSession\FHIRUserSessionContext
     */
    public function getContext()
    {
        return $this->context;
    }


    /**
     * Indicates the timestamp when the user session was first created.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     * @return $this
     */
    public function setCreated($created)
    {
        if (null === $created) {
            return $this; 
        }
        if (is_scalar($created)) {
            $created = new FHIRInstant($created);
        }
        if (!($created instanceof FHIRInstant)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRUserSession::setCreated - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or appropriate scalar value, %s seen.',
                gettype($created)
            ));
        }
        $this->created = $created;
        return $this;
    }

    /**
     * Indicates the timestamp when the user session was first created.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getCreated()
    {
        return $this->created;
    }


    /**
     * Indicates the timestamp when the user session will expire (i.e. no longer be valid).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     * @return $this
     */
    public function setExpires($expires)
    {
        if (null === $expires) {
            return $this; 
        }
        if (is_scalar($expires)) {
            $expires = new FHIRInstant($expires);
        }
        if (!($expires instanceof FHIRInstant)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRUserSession::setExpires - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or appropriate scalar value, %s seen.',
                gettype($expires)
            ));
        }
        $this->expires = $expires;
        return $this;
    }

    /**
     * Indicates the timestamp when the user session will expire (i.e. no longer be valid).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getExpires()
    {
        return $this->expires;
    }


    /**
     * The current focus of the user's session. Common values are a reference to a Patient, Encounter, ImagingStudy, etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setFocus(FHIRReference $focus = null)
    {
        if (null === $focus) {
            return $this; 
        }
        $this->focus = $focus;
        return $this;
    }

    /**
     * The current focus of the user's session. Common values are a reference to a Patient, Encounter, ImagingStudy, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getFocus()
    {
        return $this->focus;
    }


    /**
     * Allows a service to provide a unique, business identifier for the session.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Allows a service to provide a unique, business identifier for the session.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Status of the session.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRUserSession\FHIRUserSessionStatus
     * @return $this
     */
    public function setStatus(FHIRUserSessionStatus $status = null)
    {
        if (null === $status) {
            return $this; 
        }
        $this->status = $status;
        return $this;
    }

    /**
     * Status of the session.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRUserSession\FHIRUserSessionStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * A practitioner, patient, device, or related person engaged in the session.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setUser(FHIRReference $user = null)
    {
        if (null === $user) {
            return $this; 
        }
        $this->user = $user;
        return $this;
    }

    /**
     * A practitioner, patient, device, or related person engaged in the session.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getUser()
    {
        return $this->user;
    }


    /**
     * Location that identifies the physical place at which the user's session is occurring. For the purposes of context synchronization, this is intended to represent the user's workstation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setWorkstation(FHIRIdentifier $workstation = null)
    {
        if (null === $workstation) {
            return $this; 
        }
        $this->workstation = $workstation;
        return $this;
    }

    /**
     * Location that identifies the physical place at which the user's session is occurring. For the purposes of context synchronization, this is intended to represent the user's workstation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getWorkstation()
    {
        return $this->workstation;
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
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
        }
        if (null !== ($v = $this->getCreated())) {
            $a['created'] = $v;
        }
        if (null !== ($v = $this->getExpires())) {
            $a['expires'] = $v;
        }
        if (null !== ($v = $this->getFocus())) {
            $a['focus'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getUser())) {
            $a['user'] = $v;
        }
        if (null !== ($v = $this->getWorkstation())) {
            $a['workstation'] = $v;
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
            $sxe = new \SimpleXMLElement('<UserSession xmlns="http://hl7.org/fhir"></UserSession>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}