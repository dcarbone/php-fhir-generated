<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:04+0000
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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRProvenanceEntityRole;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * Provenance of a resource is a record that describes entities and processes
 * involved in producing and delivering or otherwise influencing that resource.
 * Provenance provides a critical foundation for assessing authenticity, enabling
 * trust, and allowing reproducibility. Provenance assertions are a form of
 * contextual metadata and can themselves become important records with their own
 * provenance. Provenance statement indicates clinical significance in terms of
 * confidence in authenticity, reliability, and trustworthiness, integrity, and
 * stage in lifecycle (e.g. Document Completion - has the artifact been legally
 * authenticated), all of which may impact security, privacy, and trust policies.
 *
 * Class FHIRProvenanceEntity
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance
 */
class FHIRProvenanceEntity extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_ENTITY;

    const FIELD_AGENT = 'agent';
    const FIELD_ROLE = 'role';
    const FIELD_WHAT_IDENTIFIER = 'whatIdentifier';
    const FIELD_WHAT_REFERENCE = 'whatReference';
    const FIELD_WHAT_URI = 'whatUri';
    const FIELD_WHAT_URI_EXT = '_whatUri';

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     *
     * The entity is attributed to an agent to express the agent's responsibility for
     * that entity, possibly along with other agents. This description can be
     * understood as shorthand for saying that the agent was responsible for the
     * activity which generated the entity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent[]
     */
    private $agent = [];
    /**
     * How an entity was used in an activity.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How the entity was used during the activity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRProvenanceEntityRole
     */
    private $role = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    private $whatIdentifier = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $whatReference = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    private $whatUri = null;

    /**
     * FHIRProvenanceEntity Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProvenanceEntity::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AGENT])) {
            if (is_array($data[self::FIELD_AGENT])) {
                foreach($data[self::FIELD_AGENT] as $v) {
                    if ($v instanceof FHIRProvenanceAgent) {
                        $this->addAgent($v);
                    } else {
                        $this->addAgent(new FHIRProvenanceAgent($v));
                    }
                }
            } else if ($data[self::FIELD_AGENT] instanceof FHIRProvenanceAgent) {
                $this->addAgent($data[self::FIELD_AGENT]);
            } else {
                $this->addAgent(new FHIRProvenanceAgent($data[self::FIELD_AGENT]));
            }
        }
        if (isset($data[self::FIELD_ROLE])) {
            if ($data[self::FIELD_ROLE] instanceof FHIRProvenanceEntityRole) {
                $this->setRole($data[self::FIELD_ROLE]);
            } else {
                $this->setRole(new FHIRProvenanceEntityRole($data[self::FIELD_ROLE]));
            }
        }
        if (isset($data[self::FIELD_WHAT_IDENTIFIER])) {
            if ($data[self::FIELD_WHAT_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setWhatIdentifier($data[self::FIELD_WHAT_IDENTIFIER]);
            } else {
                $this->setWhatIdentifier(new FHIRIdentifier($data[self::FIELD_WHAT_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_WHAT_REFERENCE])) {
            if ($data[self::FIELD_WHAT_REFERENCE] instanceof FHIRReference) {
                $this->setWhatReference($data[self::FIELD_WHAT_REFERENCE]);
            } else {
                $this->setWhatReference(new FHIRReference($data[self::FIELD_WHAT_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_WHAT_URI])) {
            $ext = (isset($data[self::FIELD_WHAT_URI_EXT]) && is_array($data[self::FIELD_WHAT_URI_EXT]))
                ? $data[self::FIELD_WHAT_URI_EXT]
                : null;
            if ($data[self::FIELD_WHAT_URI] instanceof FHIRUri) {
                $this->setWhatUri($data[self::FIELD_WHAT_URI]);
            } elseif ($ext && is_scalar($data[self::FIELD_WHAT_URI])) {
                $this->setWhatUri(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_WHAT_URI]] + $ext));
            } else {
                $this->setWhatUri(new FHIRUri($data[self::FIELD_WHAT_URI]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     *
     * The entity is attributed to an agent to express the agent's responsibility for
     * that entity, possibly along with other agents. This description can be
     * understood as shorthand for saying that the agent was responsible for the
     * activity which generated the entity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent[]
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     *
     * The entity is attributed to an agent to express the agent's responsibility for
     * that entity, possibly along with other agents. This description can be
     * understood as shorthand for saying that the agent was responsible for the
     * activity which generated the entity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent $agent
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity
     */
    public function addAgent(FHIRProvenanceAgent $agent = null)
    {
        $this->agent[] = $agent;
        return $this;
    }

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     *
     * The entity is attributed to an agent to express the agent's responsibility for
     * that entity, possibly along with other agents. This description can be
     * understood as shorthand for saying that the agent was responsible for the
     * activity which generated the entity.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent[] $agent
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity
     */
    public function setAgent(array $agent = [])
    {
        $this->agent = [];
        if ([] === $agent) {
            return $this;
        }
        foreach($agent as $v) {
            if ($v instanceof FHIRProvenanceAgent) {
                $this->addAgent($v);
            } else {
                $this->addAgent(new FHIRProvenanceAgent($v));
            }
        }
        return $this;
    }

    /**
     * How an entity was used in an activity.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How the entity was used during the activity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRProvenanceEntityRole
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * How an entity was used in an activity.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How the entity was used during the activity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRProvenanceEntityRole $role
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity
     */
    public function setRole(FHIRProvenanceEntityRole $role = null)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    public function getWhatIdentifier()
    {
        return $this->whatIdentifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $whatIdentifier
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity
     */
    public function setWhatIdentifier(FHIRIdentifier $whatIdentifier = null)
    {
        $this->whatIdentifier = $whatIdentifier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getWhatReference()
    {
        return $this->whatReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $whatReference
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity
     */
    public function setWhatReference(FHIRReference $whatReference = null)
    {
        $this->whatReference = $whatReference;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getWhatUri()
    {
        return $this->whatUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $whatUri
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity
     */
    public function setWhatUri($whatUri = null)
    {
        if (null === $whatUri) {
            $this->whatUri = null;
            return $this;
        }
        if ($whatUri instanceof FHIRUri) {
            $this->whatUri = $whatUri;
            return $this;
        }
        $this->whatUri = new FHIRUri($whatUri);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity $type
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRProvenanceEntity::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRProvenanceEntity::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRProvenanceEntity);
        } elseif (!is_object($type) || !($type instanceof FHIRProvenanceEntity)) {
            throw new \RuntimeException(sprintf(
                'FHIRProvenanceEntity::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->agent)) {
            foreach($children->agent as $child) {
                $type->addAgent(FHIRProvenanceAgent::xmlUnserialize($child));
            }
        }
        if (isset($children->role)) {
            $type->setRole(FHIRProvenanceEntityRole::xmlUnserialize($children->role));
        }
        if (isset($children->whatIdentifier)) {
            $type->setWhatIdentifier(FHIRIdentifier::xmlUnserialize($children->whatIdentifier));
        }
        if (isset($children->whatReference)) {
            $type->setWhatReference(FHIRReference::xmlUnserialize($children->whatReference));
        }
        if (isset($attributes->whatUri)) {
            $type->setWhatUri((string)$attributes->whatUri);
        }
        if (isset($children->whatUri)) {
            $type->setWhatUri(FHIRUri::xmlUnserialize($children->whatUri));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ProvenanceEntity xmlns="http://hl7.org/fhir"></ProvenanceEntity>');
        }
        parent::xmlSerialize($sxe);

        if ([] !== ($vs = $this->getAgent())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_AGENT));
            }
        }

        if (null !== ($v = $this->getRole())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ROLE));
        }

        if (null !== ($v = $this->getWhatIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WHAT_IDENTIFIER));
        }

        if (null !== ($v = $this->getWhatReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WHAT_REFERENCE));
        }
        if (null !== ($v = $this->getWhatUri())) {
            $sxe->addAttribute(self::FIELD_WHAT_URI, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_WHAT_URI));
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
        if ([] !== ($vs = $this->getAgent())) {
            $a[self::FIELD_AGENT] = $vs;
        }
        if (null !== ($v = $this->getRole())) {
            $a[self::FIELD_ROLE] = $v;
        }
        if (null !== ($v = $this->getWhatIdentifier())) {
            $a[self::FIELD_WHAT_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getWhatReference())) {
            $a[self::FIELD_WHAT_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getWhatUri())) {
            $a[self::FIELD_WHAT_URI] = (string)$v;
            $a[self::FIELD_WHAT_URI_EXT] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}