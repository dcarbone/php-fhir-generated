<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
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
class FHIRProvenanceAgent extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_PROVENANCE_DOT_AGENT;


    public const FIELD_ROLE = 'role';
    public const FIELD_WHO_URI = 'whoUri';
    public const FIELD_WHO_URI_EXT = '_whoUri';
    public const FIELD_WHO_REFERENCE = 'whoReference';
    public const FIELD_ON_BEHALF_OF_URI = 'onBehalfOfUri';
    public const FIELD_ON_BEHALF_OF_URI_EXT = '_onBehalfOfUri';
    public const FIELD_ON_BEHALF_OF_REFERENCE = 'onBehalfOfReference';
    public const FIELD_RELATED_AGENT_TYPE = 'relatedAgentType';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The function of the agent with respect to the activity. The security role
     * enabling the agent with respect to the activity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $role;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The individual, device or organization that participated in the event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $whoUri;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual, device or organization that participated in the event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $whoReference;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The individual, device, or organization for whom the change was made.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $onBehalfOfUri;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual, device, or organization for whom the change was made.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $onBehalfOfReference;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of relationship between agents.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $relatedAgentType;

    /** Default validation map for fields in type Provenance.Agent */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_WHO_URI => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_WHO_REFERENCE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRProvenanceAgent Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[] $role
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $whoUri
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $whoReference
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $onBehalfOfUri
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $onBehalfOfReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $relatedAgentType
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $role = null,
                                null|string|FHIRUriPrimitive|FHIRUri $whoUri = null,
                                null|FHIRReference $whoReference = null,
                                null|string|FHIRUriPrimitive|FHIRUri $onBehalfOfUri = null,
                                null|FHIRReference $onBehalfOfReference = null,
                                null|FHIRCodeableConcept $relatedAgentType = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $role) {
            $this->setRole(...$role);
        }
        if (null !== $whoUri) {
            $this->setWhoUri($whoUri);
        }
        if (null !== $whoReference) {
            $this->setWhoReference($whoReference);
        }
        if (null !== $onBehalfOfUri) {
            $this->setOnBehalfOfUri($onBehalfOfUri);
        }
        if (null !== $onBehalfOfReference) {
            $this->setOnBehalfOfReference($onBehalfOfReference);
        }
        if (null !== $relatedAgentType) {
            $this->setRelatedAgentType($relatedAgentType);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The function of the agent with respect to the activity. The security role
     * enabling the agent with respect to the activity.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getRole(): array
    {
        return $this->role ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getRoleIterator(): iterable
    {
        if (!isset($this->role) || [] === $this->role) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->role);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The function of the agent with respect to the activity. The security role
     * enabling the agent with respect to the activity.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $role
     * @return static
     */
    public function addRole(FHIRCodeableConcept $role): self
    {
        if (!isset($this->role)) {
            $this->role = [];
        }
        $this->role[] = $role;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The function of the agent with respect to the activity. The security role
     * enabling the agent with respect to the activity.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept ...$role
     * @return static
     */
    public function setRole(FHIRCodeableConcept ...$role): self
    {
        $this->role = $role;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The individual, device or organization that participated in the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri
     */
    public function getWhoUri(): null|FHIRUri
    {
        return $this->whoUri ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The individual, device or organization that participated in the event.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $whoUri
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setWhoUri(null|string|FHIRUriPrimitive|FHIRUri $whoUri,
                              null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $whoUri) {
            unset($this->whoUri);
            return $this;
        }
        if (!($whoUri instanceof FHIRUri)) {
            $whoUri = new FHIRUri(value: $whoUri);
        }
        if (null !== $valueXMLLocation) {
            $whoUri->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $whoUri->_getValueXMLLocation()) {
            $whoUri->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->whoUri = $whoUri;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual, device or organization that participated in the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getWhoReference(): null|FHIRReference
    {
        return $this->whoReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual, device or organization that participated in the event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $whoReference
     * @return static
     */
    public function setWhoReference(null|FHIRReference $whoReference): self
    {
        if (null === $whoReference) {
            unset($this->whoReference);
            return $this;
        }
        $this->whoReference = $whoReference;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The individual, device, or organization for whom the change was made.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri
     */
    public function getOnBehalfOfUri(): null|FHIRUri
    {
        return $this->onBehalfOfUri ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The individual, device, or organization for whom the change was made.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $onBehalfOfUri
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setOnBehalfOfUri(null|string|FHIRUriPrimitive|FHIRUri $onBehalfOfUri,
                                     null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $onBehalfOfUri) {
            unset($this->onBehalfOfUri);
            return $this;
        }
        if (!($onBehalfOfUri instanceof FHIRUri)) {
            $onBehalfOfUri = new FHIRUri(value: $onBehalfOfUri);
        }
        if (null !== $valueXMLLocation) {
            $onBehalfOfUri->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $onBehalfOfUri->_getValueXMLLocation()) {
            $onBehalfOfUri->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->onBehalfOfUri = $onBehalfOfUri;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual, device, or organization for whom the change was made.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getOnBehalfOfReference(): null|FHIRReference
    {
        return $this->onBehalfOfReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual, device, or organization for whom the change was made.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $onBehalfOfReference
     * @return static
     */
    public function setOnBehalfOfReference(null|FHIRReference $onBehalfOfReference): self
    {
        if (null === $onBehalfOfReference) {
            unset($this->onBehalfOfReference);
            return $this;
        }
        $this->onBehalfOfReference = $onBehalfOfReference;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of relationship between agents.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getRelatedAgentType(): null|FHIRCodeableConcept
    {
        return $this->relatedAgentType ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of relationship between agents.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $relatedAgentType
     * @return static
     */
    public function setRelatedAgentType(null|FHIRCodeableConcept $relatedAgentType): self
    {
        if (null === $relatedAgentType) {
            unset($this->relatedAgentType);
            return $this;
        }
        $this->relatedAgentType = $relatedAgentType;
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
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getWhoUri())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WHO_URI] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWhoReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WHO_REFERENCE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ROLE])) {
            $v = $this->getRole();
            foreach($validationRules[self::FIELD_ROLE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ROLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ROLE])) {
                        $errs[self::FIELD_ROLE] = [];
                    }
                    $errs[self::FIELD_ROLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WHO_URI])) {
            $v = $this->getWhoUri();
            foreach($validationRules[self::FIELD_WHO_URI] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_WHO_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHO_URI])) {
                        $errs[self::FIELD_WHO_URI] = [];
                    }
                    $errs[self::FIELD_WHO_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WHO_REFERENCE])) {
            $v = $this->getWhoReference();
            foreach($validationRules[self::FIELD_WHO_REFERENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_WHO_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHO_REFERENCE])) {
                        $errs[self::FIELD_WHO_REFERENCE] = [];
                    }
                    $errs[self::FIELD_WHO_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ON_BEHALF_OF_URI])) {
            $v = $this->getOnBehalfOfUri();
            foreach($validationRules[self::FIELD_ON_BEHALF_OF_URI] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ON_BEHALF_OF_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ON_BEHALF_OF_URI])) {
                        $errs[self::FIELD_ON_BEHALF_OF_URI] = [];
                    }
                    $errs[self::FIELD_ON_BEHALF_OF_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ON_BEHALF_OF_REFERENCE])) {
            $v = $this->getOnBehalfOfReference();
            foreach($validationRules[self::FIELD_ON_BEHALF_OF_REFERENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ON_BEHALF_OF_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ON_BEHALF_OF_REFERENCE])) {
                        $errs[self::FIELD_ON_BEHALF_OF_REFERENCE] = [];
                    }
                    $errs[self::FIELD_ON_BEHALF_OF_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATED_AGENT_TYPE])) {
            $v = $this->getRelatedAgentType();
            foreach($validationRules[self::FIELD_RELATED_AGENT_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RELATED_AGENT_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATED_AGENT_TYPE])) {
                        $errs[self::FIELD_RELATED_AGENT_TYPE] = [];
                    }
                    $errs[self::FIELD_RELATED_AGENT_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRProvenanceAgent)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ROLE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addRole(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_WHO_URI === $childName) {
                $v = new FHIRUri(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setWhoUri(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_WHO_REFERENCE === $childName) {
                $v = new FHIRReference();
                $type->setWhoReference(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ON_BEHALF_OF_URI === $childName) {
                $v = new FHIRUri(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setOnBehalfOfUri(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ON_BEHALF_OF_REFERENCE === $childName) {
                $v = new FHIRReference();
                $type->setOnBehalfOfReference(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RELATED_AGENT_TYPE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setRelatedAgentType(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_WHO_URI])) {
            $pt = $type->getWhoUri();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_WHO_URI]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setWhoUri(new FHIRUri(
                    value: (string)$attributes[self::FIELD_WHO_URI],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ON_BEHALF_OF_URI])) {
            $pt = $type->getOnBehalfOfUri();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ON_BEHALF_OF_URI]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setOnBehalfOfUri(new FHIRUri(
                    value: (string)$attributes[self::FIELD_ON_BEHALF_OF_URI],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('ProvenanceAgent', $this->_getSourceXMLNS());
        }
        if (isset($this->whoUri) && $this->whoUri->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_WHO_URI, $this->whoUri->getValue()?->_getFormattedValue());
        }
        if (isset($this->onBehalfOfUri) && $this->onBehalfOfUri->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ON_BEHALF_OF_URI, $this->onBehalfOfUri->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->role)) {
            foreach ($this->role as $v) {
                $xw->startElement(self::FIELD_ROLE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->whoUri) && $this->whoUri->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_WHO_URI);
            $this->whoUri->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->whoReference)) {
            $xw->startElement(self::FIELD_WHO_REFERENCE);
            $this->whoReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->onBehalfOfUri) && $this->onBehalfOfUri->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ON_BEHALF_OF_URI);
            $this->onBehalfOfUri->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->onBehalfOfReference)) {
            $xw->startElement(self::FIELD_ON_BEHALF_OF_REFERENCE);
            $this->onBehalfOfReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->relatedAgentType)) {
            $xw->startElement(self::FIELD_RELATED_AGENT_TYPE);
            $this->relatedAgentType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRProvenanceAgent)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_ROLE]) || array_key_exists(self::FIELD_ROLE, $json)) {
            if (is_array($json[self::FIELD_ROLE])) {
                foreach($json[self::FIELD_ROLE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addRole($v);
                    } else {
                        $type->addRole(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_ROLE] instanceof FHIRCodeableConcept) {
                $type->addRole($json[self::FIELD_ROLE]);
            } else {
                $type->addRole(new FHIRCodeableConcept($json[self::FIELD_ROLE]));
            }
        }
        if (isset($json[self::FIELD_WHO_URI]) || isset($json[self::FIELD_WHO_URI_EXT]) || array_key_exists(self::FIELD_WHO_URI, $json) || array_key_exists(self::FIELD_WHO_URI_EXT, $json)) {
            $value = $json[self::FIELD_WHO_URI] ?? null;
            $ext = (isset($json[self::FIELD_WHO_URI_EXT]) && is_array($json[self::FIELD_WHO_URI_EXT])) ? $json[self::FIELD_WHO_URI_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $type->setWhoUri($value);
                } else if (is_array($value)) {
                    $type->setWhoUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $type->setWhoUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setWhoUri(new FHIRUri($ext));
            } else {
                $type->setWhoUri(new FHIRUri(null));
            }
        }
        if (isset($json[self::FIELD_WHO_REFERENCE]) || array_key_exists(self::FIELD_WHO_REFERENCE, $json)) {
            if ($json[self::FIELD_WHO_REFERENCE] instanceof FHIRReference) {
                $type->setWhoReference($json[self::FIELD_WHO_REFERENCE]);
            } else {
                $type->setWhoReference(new FHIRReference($json[self::FIELD_WHO_REFERENCE]));
            }
        }
        if (isset($json[self::FIELD_ON_BEHALF_OF_URI]) || isset($json[self::FIELD_ON_BEHALF_OF_URI_EXT]) || array_key_exists(self::FIELD_ON_BEHALF_OF_URI, $json) || array_key_exists(self::FIELD_ON_BEHALF_OF_URI_EXT, $json)) {
            $value = $json[self::FIELD_ON_BEHALF_OF_URI] ?? null;
            $ext = (isset($json[self::FIELD_ON_BEHALF_OF_URI_EXT]) && is_array($json[self::FIELD_ON_BEHALF_OF_URI_EXT])) ? $json[self::FIELD_ON_BEHALF_OF_URI_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $type->setOnBehalfOfUri($value);
                } else if (is_array($value)) {
                    $type->setOnBehalfOfUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $type->setOnBehalfOfUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setOnBehalfOfUri(new FHIRUri($ext));
            } else {
                $type->setOnBehalfOfUri(new FHIRUri(null));
            }
        }
        if (isset($json[self::FIELD_ON_BEHALF_OF_REFERENCE]) || array_key_exists(self::FIELD_ON_BEHALF_OF_REFERENCE, $json)) {
            if ($json[self::FIELD_ON_BEHALF_OF_REFERENCE] instanceof FHIRReference) {
                $type->setOnBehalfOfReference($json[self::FIELD_ON_BEHALF_OF_REFERENCE]);
            } else {
                $type->setOnBehalfOfReference(new FHIRReference($json[self::FIELD_ON_BEHALF_OF_REFERENCE]));
            }
        }
        if (isset($json[self::FIELD_RELATED_AGENT_TYPE]) || array_key_exists(self::FIELD_RELATED_AGENT_TYPE, $json)) {
            if ($json[self::FIELD_RELATED_AGENT_TYPE] instanceof FHIRCodeableConcept) {
                $type->setRelatedAgentType($json[self::FIELD_RELATED_AGENT_TYPE]);
            } else {
                $type->setRelatedAgentType(new FHIRCodeableConcept($json[self::FIELD_RELATED_AGENT_TYPE]));
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
        if (isset($this->role) && [] !== $this->role) {
            $out->role = $this->role;
        }
        if (isset($this->whoUri)) {
            if (null !== ($val = $this->whoUri->getValue())) {
                $out->whoUri = $val;
            }
            $ext = $this->whoUri->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_whoUri = $ext;
            }
        }
        if (isset($this->whoReference)) {
            $out->whoReference = $this->whoReference;
        }
        if (isset($this->onBehalfOfUri)) {
            if (null !== ($val = $this->onBehalfOfUri->getValue())) {
                $out->onBehalfOfUri = $val;
            }
            $ext = $this->onBehalfOfUri->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_onBehalfOfUri = $ext;
            }
        }
        if (isset($this->onBehalfOfReference)) {
            $out->onBehalfOfReference = $this->onBehalfOfReference;
        }
        if (isset($this->relatedAgentType)) {
            $out->relatedAgentType = $this->relatedAgentType;
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