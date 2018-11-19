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
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRUri;

/**
 * Provenance of a resource is a record that describes entities and processes involved in producing and delivering or otherwise influencing that resource. Provenance provides a critical foundation for assessing authenticity, enabling trust, and allowing reproducibility. Provenance assertions are a form of contextual metadata and can themselves become important records with their own provenance. Provenance statement indicates clinical significance in terms of confidence in authenticity, reliability, and trustworthiness, integrity, and stage in lifecycle (e.g. Document Completion - has the artifact been legally authenticated), all of which may impact security, privacy, and trust policies.
 *
 * Class FHIRProvenanceAgent
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance
 */
class FHIRProvenanceAgent extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Provenance.Agent';

    /**
     * The individual, device, or organization for whom the change was made. (choose any one of onBehalfOf*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $onBehalfOfReference = null;

    /**
     * The individual, device, or organization for whom the change was made. (choose any one of onBehalfOf*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $onBehalfOfUri = null;

    /**
     * The type of relationship between agents.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $relatedAgentType = null;

    /**
     * The function of the agent with respect to the activity. The security role enabling the agent with respect to the activity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $role = [];

    /**
     * The individual, device or organization that participated in the event. (choose any one of who*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $whoReference = null;

    /**
     * The individual, device or organization that participated in the event. (choose any one of who*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $whoUri = null;

    /**
     * FHIRProvenanceAgent Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['onBehalfOfReference'])) {
                $value = $data['onBehalfOfReference'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent::__construct - Property \"onBehalfOfReference\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setOnBehalfOfReference($value);
            }
            if (isset($data['onBehalfOfUri'])) {
                $value = $data['onBehalfOfUri'];
                if (is_array($value)) {
                    $value = new FHIRUri($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRUri($value);
                }
                if (!($value instanceof FHIRUri)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent::__construct - Property \"onBehalfOfUri\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or data to construct type, saw ".gettype($value)); 
                }
                $this->setOnBehalfOfUri($value);
            }
            if (isset($data['relatedAgentType'])) {
                $value = $data['relatedAgentType'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent::__construct - Property \"relatedAgentType\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value)); 
                }
                $this->setRelatedAgentType($value);
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
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent::__construct - Collection field \"role\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addRole($v);
                    }
                }
            }
            if (isset($data['whoReference'])) {
                $value = $data['whoReference'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent::__construct - Property \"whoReference\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setWhoReference($value);
            }
            if (isset($data['whoUri'])) {
                $value = $data['whoUri'];
                if (is_array($value)) {
                    $value = new FHIRUri($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRUri($value);
                }
                if (!($value instanceof FHIRUri)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent::__construct - Property \"whoUri\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or data to construct type, saw ".gettype($value)); 
                }
                $this->setWhoUri($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * The individual, device, or organization for whom the change was made. (choose any one of onBehalfOf*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setOnBehalfOfReference(FHIRReference $onBehalfOfReference = null)
    {
        if (null === $onBehalfOfReference) {
            return $this; 
        }
        $this->onBehalfOfReference = $onBehalfOfReference;
        return $this;
    }

    /**
     * The individual, device, or organization for whom the change was made. (choose any one of onBehalfOf*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOnBehalfOfReference()
    {
        return $this->onBehalfOfReference;
    }

    /**
     * The individual, device, or organization for whom the change was made. (choose any one of onBehalfOf*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setOnBehalfOfUri($onBehalfOfUri)
    {
        if (null === $onBehalfOfUri) {
            return $this; 
        }
        if (is_scalar($onBehalfOfUri)) {
            $onBehalfOfUri = new FHIRUri($onBehalfOfUri);
        }
        if (!($onBehalfOfUri instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProvenanceAgent::setOnBehalfOfUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($onBehalfOfUri)
            ));
        }
        $this->onBehalfOfUri = $onBehalfOfUri;
        return $this;
    }

    /**
     * The individual, device, or organization for whom the change was made. (choose any one of onBehalfOf*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getOnBehalfOfUri()
    {
        return $this->onBehalfOfUri;
    }

    /**
     * The type of relationship between agents.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setRelatedAgentType(FHIRCodeableConcept $relatedAgentType = null)
    {
        if (null === $relatedAgentType) {
            return $this; 
        }
        $this->relatedAgentType = $relatedAgentType;
        return $this;
    }

    /**
     * The type of relationship between agents.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRelatedAgentType()
    {
        return $this->relatedAgentType;
    }

    /**
     * The function of the agent with respect to the activity. The security role enabling the agent with respect to the activity.
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
     * The function of the agent with respect to the activity. The security role enabling the agent with respect to the activity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * The individual, device or organization that participated in the event. (choose any one of who*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setWhoReference(FHIRReference $whoReference = null)
    {
        if (null === $whoReference) {
            return $this; 
        }
        $this->whoReference = $whoReference;
        return $this;
    }

    /**
     * The individual, device or organization that participated in the event. (choose any one of who*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getWhoReference()
    {
        return $this->whoReference;
    }

    /**
     * The individual, device or organization that participated in the event. (choose any one of who*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setWhoUri($whoUri)
    {
        if (null === $whoUri) {
            return $this; 
        }
        if (is_scalar($whoUri)) {
            $whoUri = new FHIRUri($whoUri);
        }
        if (!($whoUri instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProvenanceAgent::setWhoUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($whoUri)
            ));
        }
        $this->whoUri = $whoUri;
        return $this;
    }

    /**
     * The individual, device or organization that participated in the event. (choose any one of who*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getWhoUri()
    {
        return $this->whoUri;
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
        if (null !== ($v = $this->getOnBehalfOfReference())) {
            $a['onBehalfOfReference'] = $v;
        }
        if (null !== ($v = $this->getOnBehalfOfUri())) {
            $a['onBehalfOfUri'] = $v;
        }
        if (null !== ($v = $this->getRelatedAgentType())) {
            $a['relatedAgentType'] = $v;
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
        if (null !== ($v = $this->getWhoReference())) {
            $a['whoReference'] = $v;
        }
        if (null !== ($v = $this->getWhoUri())) {
            $a['whoUri'] = $v;
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
            $sxe = new \SimpleXMLElement('<ProvenanceAgent xmlns="http://hl7.org/fhir"></ProvenanceAgent>');
        }
        if (null !== ($v = $this->getOnBehalfOfReference())) {
            $v->xmlSerialize(true, $sxe->addChild('onBehalfOfReference'));
        }
        if (null !== ($v = $this->getOnBehalfOfUri())) {
            $v->xmlSerialize(true, $sxe->addChild('onBehalfOfUri'));
        }
        if (null !== ($v = $this->getRelatedAgentType())) {
            $v->xmlSerialize(true, $sxe->addChild('relatedAgentType'));
        }
        if (0 < count($values = $this->getRole())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('role'));
                }
            }
        }
        if (null !== ($v = $this->getWhoReference())) {
            $v->xmlSerialize(true, $sxe->addChild('whoReference'));
        }
        if (null !== ($v = $this->getWhoUri())) {
            $v->xmlSerialize(true, $sxe->addChild('whoUri'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}