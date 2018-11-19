<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance;

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
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRProvenanceEntityRole;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRUri;

/**
 * Provenance of a resource is a record that describes entities and processes involved in producing and delivering or otherwise influencing that resource. Provenance provides a critical foundation for assessing authenticity, enabling trust, and allowing reproducibility. Provenance assertions are a form of contextual metadata and can themselves become important records with their own provenance. Provenance statement indicates clinical significance in terms of confidence in authenticity, reliability, and trustworthiness, integrity, and stage in lifecycle (e.g. Document Completion - has the artifact been legally authenticated), all of which may impact security, privacy, and trust policies.
 *
 * Class FHIRProvenanceEntity
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance
 */
class FHIRProvenanceEntity extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Provenance.Entity';

    /**
     * The entity is attributed to an agent to express the agent's responsibility for that entity, possibly along with other agents. This description can be understood as shorthand for saying that the agent was responsible for the activity which generated the entity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent[]
     */
    private $agent = [];

    /**
     * How the entity was used during the activity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRProvenanceEntityRole
     */
    private $role = null;

    /**
     * Identity of the  Entity used. May be a logical or physical uri and maybe absolute or relative. (choose any one of what*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    private $whatIdentifier = null;

    /**
     * Identity of the  Entity used. May be a logical or physical uri and maybe absolute or relative. (choose any one of what*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $whatReference = null;

    /**
     * Identity of the  Entity used. May be a logical or physical uri and maybe absolute or relative. (choose any one of what*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $whatUri = null;

    /**
     * FHIRProvenanceEntity Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['agent'])) {
                $value = $data['agent'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRProvenanceAgent($v);
                        } 
                        if (!($v instanceof FHIRProvenanceAgent)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity::__construct - Collection field \"agent\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addAgent($v);
                    }
                }
            }
            if (isset($data['role'])) {
                $value = $data['role'];
                if (is_array($value)) {
                    $value = new FHIRProvenanceEntityRole($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRProvenanceEntityRole($value);
                }
                if (!($value instanceof FHIRProvenanceEntityRole)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity::__construct - Property \"role\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRProvenanceEntityRole or data to construct type, saw ".gettype($value)); 
                }
                $this->setRole($value);
            }
            if (isset($data['whatIdentifier'])) {
                $value = $data['whatIdentifier'];
                if (is_array($value)) {
                    $value = new FHIRIdentifier($value);
                } 
                if (!($value instanceof FHIRIdentifier)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity::__construct - Property \"whatIdentifier\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRIdentifier or data to construct type, saw ".gettype($value)); 
                }
                $this->setWhatIdentifier($value);
            }
            if (isset($data['whatReference'])) {
                $value = $data['whatReference'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity::__construct - Property \"whatReference\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setWhatReference($value);
            }
            if (isset($data['whatUri'])) {
                $value = $data['whatUri'];
                if (is_array($value)) {
                    $value = new FHIRUri($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRUri($value);
                }
                if (!($value instanceof FHIRUri)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity::__construct - Property \"whatUri\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or data to construct type, saw ".gettype($value)); 
                }
                $this->setWhatUri($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * The entity is attributed to an agent to express the agent's responsibility for that entity, possibly along with other agents. This description can be understood as shorthand for saying that the agent was responsible for the activity which generated the entity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent
     * @return $this
     */
    public function addAgent(FHIRProvenanceAgent $agent = null)
    {
        if (null === $agent) {
            return $this; 
        }
        $this->agent[] = $agent;
        return $this;
    }

    /**
     * The entity is attributed to an agent to express the agent's responsibility for that entity, possibly along with other agents. This description can be understood as shorthand for saying that the agent was responsible for the activity which generated the entity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent[]
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * How the entity was used during the activity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRProvenanceEntityRole
     * @return $this
     */
    public function setRole($role)
    {
        if (null === $role) {
            return $this; 
        }
        if (is_scalar($role)) {
            $role = new FHIRProvenanceEntityRole($role);
        }
        if (!($role instanceof FHIRProvenanceEntityRole)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProvenanceEntity::setRole - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRProvenanceEntityRole or appropriate scalar value, %s seen.',
                gettype($role)
            ));
        }
        $this->role = $role;
        return $this;
    }

    /**
     * How the entity was used during the activity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRProvenanceEntityRole
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Identity of the  Entity used. May be a logical or physical uri and maybe absolute or relative. (choose any one of what*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setWhatIdentifier(FHIRIdentifier $whatIdentifier = null)
    {
        if (null === $whatIdentifier) {
            return $this; 
        }
        $this->whatIdentifier = $whatIdentifier;
        return $this;
    }

    /**
     * Identity of the  Entity used. May be a logical or physical uri and maybe absolute or relative. (choose any one of what*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getWhatIdentifier()
    {
        return $this->whatIdentifier;
    }

    /**
     * Identity of the  Entity used. May be a logical or physical uri and maybe absolute or relative. (choose any one of what*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setWhatReference(FHIRReference $whatReference = null)
    {
        if (null === $whatReference) {
            return $this; 
        }
        $this->whatReference = $whatReference;
        return $this;
    }

    /**
     * Identity of the  Entity used. May be a logical or physical uri and maybe absolute or relative. (choose any one of what*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getWhatReference()
    {
        return $this->whatReference;
    }

    /**
     * Identity of the  Entity used. May be a logical or physical uri and maybe absolute or relative. (choose any one of what*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setWhatUri($whatUri)
    {
        if (null === $whatUri) {
            return $this; 
        }
        if (is_scalar($whatUri)) {
            $whatUri = new FHIRUri($whatUri);
        }
        if (!($whatUri instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProvenanceEntity::setWhatUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($whatUri)
            ));
        }
        $this->whatUri = $whatUri;
        return $this;
    }

    /**
     * Identity of the  Entity used. May be a logical or physical uri and maybe absolute or relative. (choose any one of what*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getWhatUri()
    {
        return $this->whatUri;
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
        if (null !== ($v = $this->getRole())) {
            $a['role'] = $v;
        }
        if (null !== ($v = $this->getWhatIdentifier())) {
            $a['whatIdentifier'] = $v;
        }
        if (null !== ($v = $this->getWhatReference())) {
            $a['whatReference'] = $v;
        }
        if (null !== ($v = $this->getWhatUri())) {
            $a['whatUri'] = $v;
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
            $sxe = new \SimpleXMLElement('<ProvenanceEntity xmlns="http://hl7.org/fhir"></ProvenanceEntity>');
        }
        if (0 < count($values = $this->getAgent())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('agent'));
                }
            }
        }
        if (null !== ($v = $this->getRole())) {
            $v->xmlSerialize(true, $sxe->addChild('role'));
        }
        if (null !== ($v = $this->getWhatIdentifier())) {
            $v->xmlSerialize(true, $sxe->addChild('whatIdentifier'));
        }
        if (null !== ($v = $this->getWhatReference())) {
            $v->xmlSerialize(true, $sxe->addChild('whatReference'));
        }
        if (null !== ($v = $this->getWhatUri())) {
            $v->xmlSerialize(true, $sxe->addChild('whatUri'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}