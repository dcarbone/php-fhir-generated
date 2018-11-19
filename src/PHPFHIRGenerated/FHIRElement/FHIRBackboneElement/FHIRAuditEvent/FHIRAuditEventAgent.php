<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;

/**
 * A record of an event made for purposes of maintaining a security log. Typical uses include detection of intrusion attempts and monitoring for inappropriate usage.
 *
 * Class FHIRAuditEventAgent
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent
 */
class FHIRAuditEventAgent extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'AuditEvent.Agent';

    /**
     * Alternative agent Identifier. For a human, this should be a user identifier text string from authentication system. This identifier would be one known to a common authentication system (e.g. single sign-on), if available.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $altId = null;

    /**
     * Where the event occurred.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $location = null;

    /**
     * Type of media involved. Used when the event is about exporting/importing onto media.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    private $media = null;

    /**
     * Human-meaningful name for the agent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $name = null;

    /**
     * Logical network location for application activity, if the activity has a network location.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventNetwork
     */
    private $network = null;

    /**
     * The policy or plan that authorized the activity being recorded. Typically, a single activity may have multiple applicable policies, such as patient consent, guarantor funding, etc. The policy would also indicate the security token used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    private $policy = [];

    /**
     * The reason (purpose of use), specific to this agent, that was used during the event being recorded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $purposeOfUse = [];

    /**
     * Direct reference to a resource that identifies the agent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $reference = null;

    /**
     * Indicator that the user is or is not the requestor, or initiator, for the event being audited.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $requestor = null;

    /**
     * The security role that the user was acting under, that come from local codes defined by the access control security system (e.g. RBAC, ABAC) used in the local context.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $role = [];

    /**
     * Unique identifier for the user actively participating in the event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    private $userId = null;

    /**
     * FHIRAuditEventAgent Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['altId'])) {
                $value = $data['altId'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent::__construct - Property \"altId\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setAltId($value);
            }
            if (isset($data['location'])) {
                $value = $data['location'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent::__construct - Property \"location\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setLocation($value);
            }
            if (isset($data['media'])) {
                $value = $data['media'];
                if (is_array($value)) {
                    $value = new FHIRCoding($value);
                } 
                if (!($value instanceof FHIRCoding)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent::__construct - Property \"media\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCoding or data to construct type, saw ".gettype($value)); 
                }
                $this->setMedia($value);
            }
            if (isset($data['name'])) {
                $value = $data['name'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent::__construct - Property \"name\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setName($value);
            }
            if (isset($data['network'])) {
                $value = $data['network'];
                if (is_array($value)) {
                    $value = new FHIRAuditEventNetwork($value);
                } 
                if (!($value instanceof FHIRAuditEventNetwork)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent::__construct - Property \"network\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventNetwork or data to construct type, saw ".gettype($value)); 
                }
                $this->setNetwork($value);
            }
            if (isset($data['policy'])) {
                $value = $data['policy'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRUri($v);
                        }  elseif (is_scalar($v)) {
                            $v = new FHIRUri($v);
                        }
                        if (!($v instanceof FHIRUri)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent::__construct - Collection field \"policy\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addPolicy($v);
                    }
                }
            }
            if (isset($data['purposeOfUse'])) {
                $value = $data['purposeOfUse'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCodeableConcept($v);
                        } 
                        if (!($v instanceof FHIRCodeableConcept)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent::__construct - Collection field \"purposeOfUse\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addPurposeOfUse($v);
                    }
                }
            }
            if (isset($data['reference'])) {
                $value = $data['reference'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent::__construct - Property \"reference\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setReference($value);
            }
            if (isset($data['requestor'])) {
                $value = $data['requestor'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent::__construct - Property \"requestor\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value)); 
                }
                $this->setRequestor($value);
            }
            if (isset($data['role'])) {
                $value = $data['role'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRCodeableConcept($v);
                        } 
                        if (!($v instanceof FHIRCodeableConcept)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent::__construct - Collection field \"role\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addRole($v);
                    }
                }
            }
            if (isset($data['userId'])) {
                $value = $data['userId'];
                if (is_array($value)) {
                    $value = new FHIRIdentifier($value);
                } 
                if (!($value instanceof FHIRIdentifier)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent::__construct - Property \"userId\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRIdentifier or data to construct type, saw ".gettype($value)); 
                }
                $this->setUserId($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Alternative agent Identifier. For a human, this should be a user identifier text string from authentication system. This identifier would be one known to a common authentication system (e.g. single sign-on), if available.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setAltId($altId)
    {
        if (null === $altId) {
            return $this; 
        }
        if (is_scalar($altId)) {
            $altId = new FHIRString($altId);
        }
        if (!($altId instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAuditEventAgent::setAltId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($altId)
            ));
        }
        $this->altId = $altId;
        return $this;
    }

    /**
     * Alternative agent Identifier. For a human, this should be a user identifier text string from authentication system. This identifier would be one known to a common authentication system (e.g. single sign-on), if available.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAltId()
    {
        return $this->altId;
    }

    /**
     * Where the event occurred.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setLocation(FHIRReference $location = null)
    {
        if (null === $location) {
            return $this; 
        }
        $this->location = $location;
        return $this;
    }

    /**
     * Where the event occurred.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Type of media involved. Used when the event is about exporting/importing onto media.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setMedia(FHIRCoding $media = null)
    {
        if (null === $media) {
            return $this; 
        }
        $this->media = $media;
        return $this;
    }

    /**
     * Type of media involved. Used when the event is about exporting/importing onto media.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Human-meaningful name for the agent.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setName($name)
    {
        if (null === $name) {
            return $this; 
        }
        if (is_scalar($name)) {
            $name = new FHIRString($name);
        }
        if (!($name instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAuditEventAgent::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * Human-meaningful name for the agent.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Logical network location for application activity, if the activity has a network location.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventNetwork
     * @return $this
     */
    public function setNetwork(FHIRAuditEventNetwork $network = null)
    {
        if (null === $network) {
            return $this; 
        }
        $this->network = $network;
        return $this;
    }

    /**
     * Logical network location for application activity, if the activity has a network location.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventNetwork
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * The policy or plan that authorized the activity being recorded. Typically, a single activity may have multiple applicable policies, such as patient consent, guarantor funding, etc. The policy would also indicate the security token used.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function addPolicy($policy)
    {
        if (null === $policy) {
            return $this; 
        }
        if (is_scalar($policy)) {
            $policy = new FHIRUri($policy);
        }
        if (!($policy instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAuditEventAgent::addPolicy - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($policy)
            ));
        }
        $this->policy[] = $policy;
        return $this;
    }

    /**
     * The policy or plan that authorized the activity being recorded. Typically, a single activity may have multiple applicable policies, such as patient consent, guarantor funding, etc. The policy would also indicate the security token used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * The reason (purpose of use), specific to this agent, that was used during the event being recorded.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function addPurposeOfUse(FHIRCodeableConcept $purposeOfUse = null)
    {
        if (null === $purposeOfUse) {
            return $this; 
        }
        $this->purposeOfUse[] = $purposeOfUse;
        return $this;
    }

    /**
     * The reason (purpose of use), specific to this agent, that was used during the event being recorded.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getPurposeOfUse()
    {
        return $this->purposeOfUse;
    }

    /**
     * Direct reference to a resource that identifies the agent.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setReference(FHIRReference $reference = null)
    {
        if (null === $reference) {
            return $this; 
        }
        $this->reference = $reference;
        return $this;
    }

    /**
     * Direct reference to a resource that identifies the agent.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Indicator that the user is or is not the requestor, or initiator, for the event being audited.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setRequestor($requestor)
    {
        if (null === $requestor) {
            return $this; 
        }
        if (is_scalar($requestor)) {
            $requestor = new FHIRBoolean($requestor);
        }
        if (!($requestor instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAuditEventAgent::setRequestor - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($requestor)
            ));
        }
        $this->requestor = $requestor;
        return $this;
    }

    /**
     * Indicator that the user is or is not the requestor, or initiator, for the event being audited.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getRequestor()
    {
        return $this->requestor;
    }

    /**
     * The security role that the user was acting under, that come from local codes defined by the access control security system (e.g. RBAC, ABAC) used in the local context.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function addRole(FHIRCodeableConcept $role = null)
    {
        if (null === $role) {
            return $this; 
        }
        $this->role[] = $role;
        return $this;
    }

    /**
     * The security role that the user was acting under, that come from local codes defined by the access control security system (e.g. RBAC, ABAC) used in the local context.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Unique identifier for the user actively participating in the event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setUserId(FHIRIdentifier $userId = null)
    {
        if (null === $userId) {
            return $this; 
        }
        $this->userId = $userId;
        return $this;
    }

    /**
     * Unique identifier for the user actively participating in the event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getUserId()
    {
        return $this->userId;
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
        if (null !== ($v = $this->getAltId())) {
            $a['altId'] = $v;
        }
        if (null !== ($v = $this->getLocation())) {
            $a['location'] = $v;
        }
        if (null !== ($v = $this->getMedia())) {
            $a['media'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getNetwork())) {
            $a['network'] = $v;
        }
        if (0 < count($values = $this->getPolicy())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['policy'] = $vs;
            }
        }
        if (0 < count($values = $this->getPurposeOfUse())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['purposeOfUse'] = $vs;
            }
        }
        if (null !== ($v = $this->getReference())) {
            $a['reference'] = $v;
        }
        if (null !== ($v = $this->getRequestor())) {
            $a['requestor'] = $v;
        }
        if (0 < count($values = $this->getRole())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['role'] = $vs;
            }
        }
        if (null !== ($v = $this->getUserId())) {
            $a['userId'] = $v;
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
            $sxe = new \SimpleXMLElement('<AuditEventAgent xmlns="http://hl7.org/fhir"></AuditEventAgent>');
        }
        if (null !== ($v = $this->getAltId())) {
            $v->xmlSerialize(true, $sxe->addChild('altId'));
        }
        if (null !== ($v = $this->getLocation())) {
            $v->xmlSerialize(true, $sxe->addChild('location'));
        }
        if (null !== ($v = $this->getMedia())) {
            $v->xmlSerialize(true, $sxe->addChild('media'));
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize(true, $sxe->addChild('name'));
        }
        if (null !== ($v = $this->getNetwork())) {
            $v->xmlSerialize(true, $sxe->addChild('network'));
        }
        if (0 < count($values = $this->getPolicy())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('policy'));
                }
            }
        }
        if (0 < count($values = $this->getPurposeOfUse())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('purposeOfUse'));
                }
            }
        }
        if (null !== ($v = $this->getReference())) {
            $v->xmlSerialize(true, $sxe->addChild('reference'));
        }
        if (null !== ($v = $this->getRequestor())) {
            $v->xmlSerialize(true, $sxe->addChild('requestor'));
        }
        if (0 < count($values = $this->getRole())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('role'));
                }
            }
        }
        if (null !== ($v = $this->getUserId())) {
            $v->xmlSerialize(true, $sxe->addChild('userId'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}