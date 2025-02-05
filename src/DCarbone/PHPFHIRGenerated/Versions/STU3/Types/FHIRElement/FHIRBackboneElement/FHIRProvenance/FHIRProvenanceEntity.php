<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 01:55+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRProvenanceEntityRoleList;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRProvenanceEntityRole;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

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
 */
class FHIRProvenanceEntity extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_PROVENANCE_DOT_ENTITY;

    /* class_default.php:50 */
    public const FIELD_ROLE = 'role';
    public const FIELD_ROLE_EXT = '_role';
    public const FIELD_WHAT_URI = 'whatUri';
    public const FIELD_WHAT_URI_EXT = '_whatUri';
    public const FIELD_WHAT_REFERENCE = 'whatReference';
    public const FIELD_WHAT_IDENTIFIER = 'whatIdentifier';
    public const FIELD_AGENT = 'agent';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_ROLE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_WHAT_URI => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_WHAT_REFERENCE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_WHAT_IDENTIFIER => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_ROLE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_WHAT_URI => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
    /**
     * How an entity was used in an activity.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the entity was used during the activity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRProvenanceEntityRole 
     */
    protected FHIRProvenanceEntityRole $role;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $whatUri;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $whatReference;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier 
     */
    protected FHIRIdentifier $whatIdentifier;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent[] 
     */
    protected array $agent;

    /* constructor.php:61 */
    /**
     * FHIRProvenanceEntity Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRProvenanceEntityRoleList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRProvenanceEntityRole $role
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $whatUri
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $whatReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier $whatIdentifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent[] $agent
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRProvenanceEntityRoleList|FHIRProvenanceEntityRole $role = null,
                                null|string|FHIRUriPrimitive|FHIRUri $whatUri = null,
                                null|FHIRReference $whatReference = null,
                                null|FHIRIdentifier $whatIdentifier = null,
                                null|iterable $agent = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $role) {
            $this->setRole($role);
        }
        if (null !== $whatUri) {
            $this->setWhatUri($whatUri);
        }
        if (null !== $whatReference) {
            $this->setWhatReference($whatReference);
        }
        if (null !== $whatIdentifier) {
            $this->setWhatIdentifier($whatIdentifier);
        }
        if (null !== $agent) {
            $this->setAgent(...$agent);
        }
    }

    /* class_default.php:146 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:172 */
    /**
     * How an entity was used in an activity.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the entity was used during the activity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRProvenanceEntityRole
     */
    public function getRole(): null|FHIRProvenanceEntityRole
    {
        return $this->role ?? null;
    }

    /**
     * How an entity was used in an activity.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the entity was used during the activity.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRProvenanceEntityRoleList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRProvenanceEntityRole $role
     * @return static
     */
    public function setRole(null|string|FHIRProvenanceEntityRoleList|FHIRProvenanceEntityRole $role): self
    {
        if (null === $role) {
            unset($this->role);
            return $this;
        }
        if (!($role instanceof FHIRProvenanceEntityRole)) {
            $role = new FHIRProvenanceEntityRole(value: $role);
        }
        $this->role = $role;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri
     */
    public function getWhatUri(): null|FHIRUri
    {
        return $this->whatUri ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $whatUri
     * @return static
     */
    public function setWhatUri(null|string|FHIRUriPrimitive|FHIRUri $whatUri): self
    {
        if (null === $whatUri) {
            unset($this->whatUri);
            return $this;
        }
        if (!($whatUri instanceof FHIRUri)) {
            $whatUri = new FHIRUri(value: $whatUri);
        }
        $this->whatUri = $whatUri;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getWhatReference(): null|FHIRReference
    {
        return $this->whatReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $whatReference
     * @return static
     */
    public function setWhatReference(null|FHIRReference $whatReference): self
    {
        if (null === $whatReference) {
            unset($this->whatReference);
            return $this;
        }
        $this->whatReference = $whatReference;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier
     */
    public function getWhatIdentifier(): null|FHIRIdentifier
    {
        return $this->whatIdentifier ?? null;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier $whatIdentifier
     * @return static
     */
    public function setWhatIdentifier(null|FHIRIdentifier $whatIdentifier): self
    {
        if (null === $whatIdentifier) {
            unset($this->whatIdentifier);
            return $this;
        }
        $this->whatIdentifier = $whatIdentifier;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent[]
     */
    public function getAgent(): array
    {
        return $this->agent ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent>
     */
    public function getAgentIterator(): iterable
    {
        if (!isset($this->agent)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->agent);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent $agent
     * @return static
     */
    public function addAgent(FHIRProvenanceAgent $agent): self
    {
        if (!isset($this->agent)) {
            $this->agent = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent ...$agent
     * @return static
     */
    public function setAgent(FHIRProvenanceAgent ...$agent): self
    {
        if ([] === $agent) {
            unset($this->agent);
            return $this;
        }
        $this->agent = $agent;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRProvenanceEntity)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ROLE === $cen) {
                $type->setRole(FHIRProvenanceEntityRole::xmlUnserialize($ce, $config));
            } else if (self::FIELD_WHAT_URI === $cen) {
                $type->setWhatUri(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_WHAT_REFERENCE === $cen) {
                $type->setWhatReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_WHAT_IDENTIFIER === $cen) {
                $type->setWhatIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AGENT === $cen) {
                $type->addAgent(FHIRProvenanceAgent::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ROLE])) {
            if (isset($type->role)) {
                $type->role->setValue((string)$attributes[self::FIELD_ROLE]);
            } else {
                $type->setRole((string)$attributes[self::FIELD_ROLE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ROLE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_WHAT_URI])) {
            if (isset($type->whatUri)) {
                $type->whatUri->setValue((string)$attributes[self::FIELD_WHAT_URI]);
            } else {
                $type->setWhatUri((string)$attributes[self::FIELD_WHAT_URI]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_WHAT_URI, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->role) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ROLE]) {
            $xw->writeAttribute(self::FIELD_ROLE, $this->role->_getValueAsString());
        }
        if (isset($this->whatUri) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_WHAT_URI]) {
            $xw->writeAttribute(self::FIELD_WHAT_URI, $this->whatUri->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->role)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ROLE]
                || $this->role->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ROLE);
            $this->role->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ROLE]);
            $xw->endElement();
        }
        if (isset($this->whatUri)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_WHAT_URI]
                || $this->whatUri->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_WHAT_URI);
            $this->whatUri->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_WHAT_URI]);
            $xw->endElement();
        }
        if (isset($this->whatReference)) {
            $xw->startElement(self::FIELD_WHAT_REFERENCE);
            $this->whatReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->whatIdentifier)) {
            $xw->startElement(self::FIELD_WHAT_IDENTIFIER);
            $this->whatIdentifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->agent)) {
            foreach ($this->agent as $v) {
                $xw->startElement(self::FIELD_AGENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRProvenanceEntity)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->role)
            || isset($json->_role)
            || property_exists($json, self::FIELD_ROLE)
            || property_exists($json, self::FIELD_ROLE_EXT)) {
            $v = $json->_role ?? new \stdClass();
            $v->value = $json->role ?? null;
            $type->setRole(FHIRProvenanceEntityRole::jsonUnserialize($v, $config));
        }
        if (isset($json->whatUri)
            || isset($json->_whatUri)
            || property_exists($json, self::FIELD_WHAT_URI)
            || property_exists($json, self::FIELD_WHAT_URI_EXT)) {
            $v = $json->_whatUri ?? new \stdClass();
            $v->value = $json->whatUri ?? null;
            $type->setWhatUri(FHIRUri::jsonUnserialize($v, $config));
        }
        if (isset($json->whatReference) || property_exists($json, self::FIELD_WHAT_REFERENCE)) {
            if (is_array($json->whatReference)) {
                $type->setWhatReference(FHIRReference::jsonUnserialize(reset($json->whatReference), $config));
            } else {
                $type->setWhatReference(FHIRReference::jsonUnserialize($json->whatReference, $config));
            }
        }
        if (isset($json->whatIdentifier) || property_exists($json, self::FIELD_WHAT_IDENTIFIER)) {
            if (is_array($json->whatIdentifier)) {
                $type->setWhatIdentifier(FHIRIdentifier::jsonUnserialize(reset($json->whatIdentifier), $config));
            } else {
                $type->setWhatIdentifier(FHIRIdentifier::jsonUnserialize($json->whatIdentifier, $config));
            }
        }
        if (isset($json->agent) || property_exists($json, self::FIELD_AGENT)) {
            if (is_object($json->agent)) {
                $vals = [$json->agent];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_AGENT, true);
            } else {
                $vals = $json->agent;
            }
            foreach($vals as $v) {
                $type->addAgent(FHIRProvenanceAgent::jsonUnserialize($v, $config));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->role)) {
            if (null !== ($val = $this->role->getValue())) {
                $out->role = $val;
            }
            if ($this->role->_nonValueFieldDefined()) {
                $ext = $this->role->jsonSerialize();
                unset($ext->value);
                $out->_role = $ext;
            }
        }
        if (isset($this->whatUri)) {
            if (null !== ($val = $this->whatUri->getValue())) {
                $out->whatUri = $val;
            }
            if ($this->whatUri->_nonValueFieldDefined()) {
                $ext = $this->whatUri->jsonSerialize();
                unset($ext->value);
                $out->_whatUri = $ext;
            }
        }
        if (isset($this->whatReference)) {
            $out->whatReference = $this->whatReference;
        }
        if (isset($this->whatIdentifier)) {
            $out->whatIdentifier = $this->whatIdentifier;
        }
        if (isset($this->agent) && [] !== $this->agent) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_AGENT) && 1 === count($this->agent)) {
                $out->agent = $this->agent[0];
            } else {
                $out->agent = $this->agent;
            }
        }
        return $out;
    }
}