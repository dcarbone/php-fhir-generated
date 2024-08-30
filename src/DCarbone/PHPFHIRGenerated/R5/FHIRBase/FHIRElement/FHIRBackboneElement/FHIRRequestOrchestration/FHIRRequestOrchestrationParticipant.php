<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRRequestOrchestration;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 30th, 2024 22:24+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRActionParticipantType;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\R5\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * A set of related requests that can be used to capture intended activities that
 * have inter-dependencies such as "give this medication after that one".
 *
 * Class FHIRRequestOrchestrationParticipant
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRRequestOrchestration
 */
class FHIRRequestOrchestrationParticipant extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_REQUEST_ORCHESTRATION_DOT_PARTICIPANT;

    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_TYPE_CANONICAL = 'typeCanonical';
    const FIELD_TYPE_CANONICAL_EXT = '_typeCanonical';
    const FIELD_TYPE_REFERENCE = 'typeReference';
    const FIELD_ROLE = 'role';
    const FIELD_FUNCTION = 'function';
    const FIELD_ACTOR_CANONICAL = 'actorCanonical';
    const FIELD_ACTOR_CANONICAL_EXT = '_actorCanonical';
    const FIELD_ACTOR_REFERENCE = 'actorReference';

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of participant in the action.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRActionParticipantType
     */
    protected null|FHIRActionParticipantType $type = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type of participant in the action.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $typeCanonical = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of participant in the action.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $typeReference = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The role the participant should play in performing the described action.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $role = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates how the actor will be involved in the action - author, reviewer,
     * witness, etc.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $function = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to the actual participant.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $actorCanonical = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the actual participant.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $actorReference = null;

    /**
     * Validation map for fields in type RequestOrchestration.Participant
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRRequestOrchestrationParticipant Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_TYPE, $data) || array_key_exists(self::FIELD_TYPE_EXT, $data)) {
            $value = $data[self::FIELD_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) ? $data[self::FIELD_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRActionParticipantType) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRActionParticipantType(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRActionParticipantType([FHIRActionParticipantType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setType(new FHIRActionParticipantType($ext));
            } else {
                $this->setType(new FHIRActionParticipantType(null));
            }
        }
        if (array_key_exists(self::FIELD_TYPE_CANONICAL, $data) || array_key_exists(self::FIELD_TYPE_CANONICAL_EXT, $data)) {
            $value = $data[self::FIELD_TYPE_CANONICAL] ?? null;
            $ext = (isset($data[self::FIELD_TYPE_CANONICAL_EXT]) && is_array($data[self::FIELD_TYPE_CANONICAL_EXT])) ? $data[self::FIELD_TYPE_CANONICAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setTypeCanonical($value);
                } else if (is_array($value)) {
                    $this->setTypeCanonical(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setTypeCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTypeCanonical(new FHIRCanonical($ext));
            } else {
                $this->setTypeCanonical(new FHIRCanonical(null));
            }
        }
        if (array_key_exists(self::FIELD_TYPE_REFERENCE, $data)) {
            if ($data[self::FIELD_TYPE_REFERENCE] instanceof FHIRReference) {
                $this->setTypeReference($data[self::FIELD_TYPE_REFERENCE]);
            } else {
                $this->setTypeReference(new FHIRReference($data[self::FIELD_TYPE_REFERENCE]));
            }
        }
        if (array_key_exists(self::FIELD_ROLE, $data)) {
            if ($data[self::FIELD_ROLE] instanceof FHIRCodeableConcept) {
                $this->setRole($data[self::FIELD_ROLE]);
            } else {
                $this->setRole(new FHIRCodeableConcept($data[self::FIELD_ROLE]));
            }
        }
        if (array_key_exists(self::FIELD_FUNCTION, $data)) {
            if ($data[self::FIELD_FUNCTION] instanceof FHIRCodeableConcept) {
                $this->setFunction($data[self::FIELD_FUNCTION]);
            } else {
                $this->setFunction(new FHIRCodeableConcept($data[self::FIELD_FUNCTION]));
            }
        }
        if (array_key_exists(self::FIELD_ACTOR_CANONICAL, $data) || array_key_exists(self::FIELD_ACTOR_CANONICAL_EXT, $data)) {
            $value = $data[self::FIELD_ACTOR_CANONICAL] ?? null;
            $ext = (isset($data[self::FIELD_ACTOR_CANONICAL_EXT]) && is_array($data[self::FIELD_ACTOR_CANONICAL_EXT])) ? $data[self::FIELD_ACTOR_CANONICAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setActorCanonical($value);
                } else if (is_array($value)) {
                    $this->setActorCanonical(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setActorCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setActorCanonical(new FHIRCanonical($ext));
            } else {
                $this->setActorCanonical(new FHIRCanonical(null));
            }
        }
        if (array_key_exists(self::FIELD_ACTOR_REFERENCE, $data)) {
            if ($data[self::FIELD_ACTOR_REFERENCE] instanceof FHIRReference) {
                $this->setActorReference($data[self::FIELD_ACTOR_REFERENCE]);
            } else {
                $this->setActorReference(new FHIRReference($data[self::FIELD_ACTOR_REFERENCE]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of participant in the action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRActionParticipantType
     */
    public function getType(): null|FHIRActionParticipantType
    {
        return $this->type;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of participant in the action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRActionParticipantType $type
     * @return static
     */
    public function setType(null|FHIRActionParticipantType $type = null): self
    {
        if (null === $type) {
            $type = new FHIRActionParticipantType();
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type of participant in the action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getTypeCanonical(): null|FHIRCanonical
    {
        return $this->typeCanonical;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type of participant in the action.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical $typeCanonical
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setTypeCanonical(null|string|FHIRCanonicalPrimitive|FHIRCanonical $typeCanonical = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $typeCanonical && !($typeCanonical instanceof FHIRCanonical)) {
            $typeCanonical = new FHIRCanonical($typeCanonical);
        }
        $this->_trackValueSet($this->typeCanonical, $typeCanonical);
        if (!isset($this->_xmlLocations[self::FIELD_TYPE_CANONICAL])) {
            $this->_xmlLocations[self::FIELD_TYPE_CANONICAL] = [];
        }
        $this->_xmlLocations[self::FIELD_TYPE_CANONICAL][0] = $xmlLocation;
        $this->typeCanonical = $typeCanonical;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of participant in the action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getTypeReference(): null|FHIRReference
    {
        return $this->typeReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of participant in the action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $typeReference
     * @return static
     */
    public function setTypeReference(null|FHIRReference $typeReference = null): self
    {
        if (null === $typeReference) {
            $typeReference = new FHIRReference();
        }
        $this->_trackValueSet($this->typeReference, $typeReference);
        $this->typeReference = $typeReference;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The role the participant should play in performing the described action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getRole(): null|FHIRCodeableConcept
    {
        return $this->role;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The role the participant should play in performing the described action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $role
     * @return static
     */
    public function setRole(null|FHIRCodeableConcept $role = null): self
    {
        if (null === $role) {
            $role = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->role, $role);
        $this->role = $role;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates how the actor will be involved in the action - author, reviewer,
     * witness, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getFunction(): null|FHIRCodeableConcept
    {
        return $this->function;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates how the actor will be involved in the action - author, reviewer,
     * witness, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $function
     * @return static
     */
    public function setFunction(null|FHIRCodeableConcept $function = null): self
    {
        if (null === $function) {
            $function = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->function, $function);
        $this->function = $function;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to the actual participant.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getActorCanonical(): null|FHIRCanonical
    {
        return $this->actorCanonical;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to the actual participant.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical $actorCanonical
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setActorCanonical(null|string|FHIRCanonicalPrimitive|FHIRCanonical $actorCanonical = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $actorCanonical && !($actorCanonical instanceof FHIRCanonical)) {
            $actorCanonical = new FHIRCanonical($actorCanonical);
        }
        $this->_trackValueSet($this->actorCanonical, $actorCanonical);
        if (!isset($this->_xmlLocations[self::FIELD_ACTOR_CANONICAL])) {
            $this->_xmlLocations[self::FIELD_ACTOR_CANONICAL] = [];
        }
        $this->_xmlLocations[self::FIELD_ACTOR_CANONICAL][0] = $xmlLocation;
        $this->actorCanonical = $actorCanonical;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the actual participant.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getActorReference(): null|FHIRReference
    {
        return $this->actorReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A reference to the actual participant.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $actorReference
     * @return static
     */
    public function setActorReference(null|FHIRReference $actorReference = null): self
    {
        if (null === $actorReference) {
            $actorReference = new FHIRReference();
        }
        $this->_trackValueSet($this->actorReference, $actorReference);
        $this->actorReference = $actorReference;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTypeCanonical())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE_CANONICAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTypeReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRole())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ROLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFunction())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FUNCTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getActorCanonical())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACTOR_CANONICAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getActorReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACTOR_REFERENCE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_ORCHESTRATION_DOT_PARTICIPANT, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE_CANONICAL])) {
            $v = $this->getTypeCanonical();
            foreach($validationRules[self::FIELD_TYPE_CANONICAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_ORCHESTRATION_DOT_PARTICIPANT, self::FIELD_TYPE_CANONICAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE_CANONICAL])) {
                        $errs[self::FIELD_TYPE_CANONICAL] = [];
                    }
                    $errs[self::FIELD_TYPE_CANONICAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE_REFERENCE])) {
            $v = $this->getTypeReference();
            foreach($validationRules[self::FIELD_TYPE_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_ORCHESTRATION_DOT_PARTICIPANT, self::FIELD_TYPE_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE_REFERENCE])) {
                        $errs[self::FIELD_TYPE_REFERENCE] = [];
                    }
                    $errs[self::FIELD_TYPE_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ROLE])) {
            $v = $this->getRole();
            foreach($validationRules[self::FIELD_ROLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_ORCHESTRATION_DOT_PARTICIPANT, self::FIELD_ROLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ROLE])) {
                        $errs[self::FIELD_ROLE] = [];
                    }
                    $errs[self::FIELD_ROLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FUNCTION])) {
            $v = $this->getFunction();
            foreach($validationRules[self::FIELD_FUNCTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_ORCHESTRATION_DOT_PARTICIPANT, self::FIELD_FUNCTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FUNCTION])) {
                        $errs[self::FIELD_FUNCTION] = [];
                    }
                    $errs[self::FIELD_FUNCTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACTOR_CANONICAL])) {
            $v = $this->getActorCanonical();
            foreach($validationRules[self::FIELD_ACTOR_CANONICAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_ORCHESTRATION_DOT_PARTICIPANT, self::FIELD_ACTOR_CANONICAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTOR_CANONICAL])) {
                        $errs[self::FIELD_ACTOR_CANONICAL] = [];
                    }
                    $errs[self::FIELD_ACTOR_CANONICAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACTOR_REFERENCE])) {
            $v = $this->getActorReference();
            foreach($validationRules[self::FIELD_ACTOR_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REQUEST_ORCHESTRATION_DOT_PARTICIPANT, self::FIELD_ACTOR_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTOR_REFERENCE])) {
                        $errs[self::FIELD_ACTOR_REFERENCE] = [];
                    }
                    $errs[self::FIELD_ACTOR_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRRequestOrchestration\FHIRRequestOrchestrationParticipant $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRRequestOrchestration\FHIRRequestOrchestrationParticipant
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRRequestOrchestrationParticipant)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRActionParticipantType::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TYPE_CANONICAL === $childName) {
                $type->setTypeCanonical(FHIRCanonical::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TYPE_REFERENCE === $childName) {
                $type->setTypeReference(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ROLE === $childName) {
                $type->setRole(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FUNCTION === $childName) {
                $type->setFunction(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ACTOR_CANONICAL === $childName) {
                $type->setActorCanonical(FHIRCanonical::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ACTOR_REFERENCE === $childName) {
                $type->setActorReference(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_TYPE_CANONICAL])) {
            $pt = $type->getTypeCanonical();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TYPE_CANONICAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setTypeCanonical((string)$attributes[self::FIELD_TYPE_CANONICAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ACTOR_CANONICAL])) {
            $pt = $type->getActorCanonical();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ACTOR_CANONICAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setActorCanonical((string)$attributes[self::FIELD_ACTOR_CANONICAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'RequestOrchestrationParticipant', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_TYPE_CANONICAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getTypeCanonical())) {
            $xw->writeAttribute(self::FIELD_TYPE_CANONICAL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_ACTOR_CANONICAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getActorCanonical())) {
            $xw->writeAttribute(self::FIELD_ACTOR_CANONICAL, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_TYPE_CANONICAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getTypeCanonical())) {
            $xw->startElement(self::FIELD_TYPE_CANONICAL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getTypeReference())) {
            $xw->startElement(self::FIELD_TYPE_REFERENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getRole())) {
            $xw->startElement(self::FIELD_ROLE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getFunction())) {
            $xw->startElement(self::FIELD_FUNCTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_ACTOR_CANONICAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getActorCanonical())) {
            $xw->startElement(self::FIELD_ACTOR_CANONICAL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getActorReference())) {
            $xw->startElement(self::FIELD_ACTOR_REFERENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRActionParticipantType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TYPE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getTypeCanonical())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TYPE_CANONICAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCanonical::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TYPE_CANONICAL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getTypeReference())) {
            $out->{self::FIELD_TYPE_REFERENCE} = $v;
        }
        if (null !== ($v = $this->getRole())) {
            $out->{self::FIELD_ROLE} = $v;
        }
        if (null !== ($v = $this->getFunction())) {
            $out->{self::FIELD_FUNCTION} = $v;
        }
        if (null !== ($v = $this->getActorCanonical())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ACTOR_CANONICAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCanonical::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ACTOR_CANONICAL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getActorReference())) {
            $out->{self::FIELD_ACTOR_REFERENCE} = $v;
        }

        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}