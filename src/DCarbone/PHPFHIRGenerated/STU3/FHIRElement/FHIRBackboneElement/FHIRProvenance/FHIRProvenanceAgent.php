<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 5th, 2019 12:57+0000
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
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
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
 * Class FHIRProvenanceAgent
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance
 */
class FHIRProvenanceAgent extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_AGENT;

    const FIELD_ON_BEHALF_OF_REFERENCE = 'onBehalfOfReference';
    const FIELD_ON_BEHALF_OF_URI = 'onBehalfOfUri';
    const FIELD_ON_BEHALF_OF_URI_EXT = '_onBehalfOfUri';
    const FIELD_RELATED_AGENT_TYPE = 'relatedAgentType';
    const FIELD_ROLE = 'role';
    const FIELD_WHO_REFERENCE = 'whoReference';
    const FIELD_WHO_URI = 'whoUri';
    const FIELD_WHO_URI_EXT = '_whoUri';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The individual, device, or organization for whom the change was made.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $onBehalfOfReference = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The individual, device, or organization for whom the change was made.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    private $onBehalfOfUri = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of relationship between agents.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    private $relatedAgentType = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The function of the agent with respect to the activity. The security role
     * enabling the agent with respect to the activity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    private $role = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The individual, device or organization that participated in the event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $whoReference = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The individual, device or organization that participated in the event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    private $whoUri = null;

    /**
     * FHIRProvenanceAgent Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProvenanceAgent::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ON_BEHALF_OF_REFERENCE])) {
            if ($data[self::FIELD_ON_BEHALF_OF_REFERENCE] instanceof FHIRReference) {
                $this->setOnBehalfOfReference($data[self::FIELD_ON_BEHALF_OF_REFERENCE]);
            } else {
                $this->setOnBehalfOfReference(new FHIRReference($data[self::FIELD_ON_BEHALF_OF_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_ON_BEHALF_OF_URI])) {
            $ext = (isset($data[self::FIELD_ON_BEHALF_OF_URI_EXT]) && is_array($data[self::FIELD_ON_BEHALF_OF_URI_EXT]))
                ? $data[self::FIELD_ON_BEHALF_OF_URI_EXT]
                : null;
            if ($data[self::FIELD_ON_BEHALF_OF_URI] instanceof FHIRUri) {
                $this->setOnBehalfOfUri($data[self::FIELD_ON_BEHALF_OF_URI]);
            } elseif ($ext && is_scalar($data[self::FIELD_ON_BEHALF_OF_URI])) {
                $this->setOnBehalfOfUri(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_ON_BEHALF_OF_URI]] + $ext));
            } else {
                $this->setOnBehalfOfUri(new FHIRUri($data[self::FIELD_ON_BEHALF_OF_URI]));
            }
        }
        if (isset($data[self::FIELD_RELATED_AGENT_TYPE])) {
            if ($data[self::FIELD_RELATED_AGENT_TYPE] instanceof FHIRCodeableConcept) {
                $this->setRelatedAgentType($data[self::FIELD_RELATED_AGENT_TYPE]);
            } else {
                $this->setRelatedAgentType(new FHIRCodeableConcept($data[self::FIELD_RELATED_AGENT_TYPE]));
            }
        }
        if (isset($data[self::FIELD_ROLE])) {
            if (is_array($data[self::FIELD_ROLE])) {
                foreach($data[self::FIELD_ROLE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addRole($v);
                    } else {
                        $this->addRole(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_ROLE] instanceof FHIRCodeableConcept) {
                $this->addRole($data[self::FIELD_ROLE]);
            } else {
                $this->addRole(new FHIRCodeableConcept($data[self::FIELD_ROLE]));
            }
        }
        if (isset($data[self::FIELD_WHO_REFERENCE])) {
            if ($data[self::FIELD_WHO_REFERENCE] instanceof FHIRReference) {
                $this->setWhoReference($data[self::FIELD_WHO_REFERENCE]);
            } else {
                $this->setWhoReference(new FHIRReference($data[self::FIELD_WHO_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_WHO_URI])) {
            $ext = (isset($data[self::FIELD_WHO_URI_EXT]) && is_array($data[self::FIELD_WHO_URI_EXT]))
                ? $data[self::FIELD_WHO_URI_EXT]
                : null;
            if ($data[self::FIELD_WHO_URI] instanceof FHIRUri) {
                $this->setWhoUri($data[self::FIELD_WHO_URI]);
            } elseif ($ext && is_scalar($data[self::FIELD_WHO_URI])) {
                $this->setWhoUri(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_WHO_URI]] + $ext));
            } else {
                $this->setWhoUri(new FHIRUri($data[self::FIELD_WHO_URI]));
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The individual, device, or organization for whom the change was made.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getOnBehalfOfReference()
    {
        return $this->onBehalfOfReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The individual, device, or organization for whom the change was made.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $onBehalfOfReference
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent
     */
    public function setOnBehalfOfReference(FHIRReference $onBehalfOfReference = null)
    {
        $this->onBehalfOfReference = $onBehalfOfReference;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The individual, device, or organization for whom the change was made.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getOnBehalfOfUri()
    {
        return $this->onBehalfOfUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The individual, device, or organization for whom the change was made.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $onBehalfOfUri
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent
     */
    public function setOnBehalfOfUri($onBehalfOfUri = null)
    {
        if (null === $onBehalfOfUri) {
            $this->onBehalfOfUri = null;
            return $this;
        }
        if ($onBehalfOfUri instanceof FHIRUri) {
            $this->onBehalfOfUri = $onBehalfOfUri;
            return $this;
        }
        $this->onBehalfOfUri = new FHIRUri($onBehalfOfUri);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of relationship between agents.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getRelatedAgentType()
    {
        return $this->relatedAgentType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of relationship between agents.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $relatedAgentType
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent
     */
    public function setRelatedAgentType(FHIRCodeableConcept $relatedAgentType = null)
    {
        $this->relatedAgentType = $relatedAgentType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The function of the agent with respect to the activity. The security role
     * enabling the agent with respect to the activity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The function of the agent with respect to the activity. The security role
     * enabling the agent with respect to the activity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $role
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent
     */
    public function addRole(FHIRCodeableConcept $role = null)
    {
        $this->role[] = $role;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The function of the agent with respect to the activity. The security role
     * enabling the agent with respect to the activity.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $role
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent
     */
    public function setRole(array $role = [])
    {
        $this->role = [];
        if ([] === $role) {
            return $this;
        }
        foreach($role as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addRole($v);
            } else {
                $this->addRole(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The individual, device or organization that participated in the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getWhoReference()
    {
        return $this->whoReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The individual, device or organization that participated in the event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $whoReference
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent
     */
    public function setWhoReference(FHIRReference $whoReference = null)
    {
        $this->whoReference = $whoReference;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The individual, device or organization that participated in the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getWhoUri()
    {
        return $this->whoUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The individual, device or organization that participated in the event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $whoUri
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent
     */
    public function setWhoUri($whoUri = null)
    {
        if (null === $whoUri) {
            $this->whoUri = null;
            return $this;
        }
        if ($whoUri instanceof FHIRUri) {
            $this->whoUri = $whoUri;
            return $this;
        }
        $this->whoUri = new FHIRUri($whoUri);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent $type
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent
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
                throw new \DomainException(sprintf('FHIRProvenanceAgent::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRProvenanceAgent::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRProvenanceAgent);
        } elseif (!is_object($type) || !($type instanceof FHIRProvenanceAgent)) {
            throw new \RuntimeException(sprintf(
                'FHIRProvenanceAgent::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->onBehalfOfReference)) {
            $type->setOnBehalfOfReference(FHIRReference::xmlUnserialize($children->onBehalfOfReference));
        }
        if (isset($attributes->onBehalfOfUri)) {
            $type->setOnBehalfOfUri((string)$attributes->onBehalfOfUri);
        }
        if (isset($children->onBehalfOfUri)) {
            $type->setOnBehalfOfUri(FHIRUri::xmlUnserialize($children->onBehalfOfUri));
        }
        if (isset($children->relatedAgentType)) {
            $type->setRelatedAgentType(FHIRCodeableConcept::xmlUnserialize($children->relatedAgentType));
        }
        if (isset($children->role)) {
            foreach($children->role as $child) {
                $type->addRole(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->whoReference)) {
            $type->setWhoReference(FHIRReference::xmlUnserialize($children->whoReference));
        }
        if (isset($attributes->whoUri)) {
            $type->setWhoUri((string)$attributes->whoUri);
        }
        if (isset($children->whoUri)) {
            $type->setWhoUri(FHIRUri::xmlUnserialize($children->whoUri));
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
            $sxe = new \SimpleXMLElement('<ProvenanceAgent xmlns="http://hl7.org/fhir"></ProvenanceAgent>');
        }
    parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getOnBehalfOfReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ON_BEHALF_OF_REFERENCE));
        }
        if (null !== ($v = $this->getOnBehalfOfUri())) {
            $sxe->addAttribute(self::FIELD_ON_BEHALF_OF_URI, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_ON_BEHALF_OF_URI));
            }
        }

        if (null !== ($v = $this->getRelatedAgentType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RELATED_AGENT_TYPE));
        }

        if ([] !== ($vs = $this->getRole())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ROLE));
            }
        }

        if (null !== ($v = $this->getWhoReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WHO_REFERENCE));
        }
        if (null !== ($v = $this->getWhoUri())) {
            $sxe->addAttribute(self::FIELD_WHO_URI, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_WHO_URI));
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
        if (null !== ($v = $this->getOnBehalfOfReference())) {
            $a[self::FIELD_ON_BEHALF_OF_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getOnBehalfOfUri())) {
            $a[self::FIELD_ON_BEHALF_OF_URI] = (string)$v;
            $a[self::FIELD_ON_BEHALF_OF_URI_EXT] = $v;
        }
        if (null !== ($v = $this->getRelatedAgentType())) {
            $a[self::FIELD_RELATED_AGENT_TYPE] = $v;
        }
        if ([] !== ($vs = $this->getRole())) {
            $a[self::FIELD_ROLE] = $vs;
        }
        if (null !== ($v = $this->getWhoReference())) {
            $a[self::FIELD_WHO_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getWhoUri())) {
            $a[self::FIELD_WHO_URI] = (string)$v;
            $a[self::FIELD_WHO_URI_EXT] = $v;
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