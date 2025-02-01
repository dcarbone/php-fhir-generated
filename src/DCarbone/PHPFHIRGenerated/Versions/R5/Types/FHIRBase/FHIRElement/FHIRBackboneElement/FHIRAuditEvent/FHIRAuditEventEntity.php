<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 16:35+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase64BinaryPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBase64Binary;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A record of an event relevant for purposes such as operations, privacy,
 * security, maintenance, and performance analysis.
 */
class FHIRAuditEventEntity extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_AUDIT_EVENT_DOT_ENTITY;

    /* class_default.php:47 */
    public const FIELD_WHAT = 'what';
    public const FIELD_ROLE = 'role';
    public const FIELD_SECURITY_LABEL = 'securityLabel';
    public const FIELD_QUERY = 'query';
    public const FIELD_QUERY_EXT = '_query';
    public const FIELD_DETAIL = 'detail';
    public const FIELD_AGENT = 'agent';

    /* class_default.php:66 */
    private static array $_validationRules = [];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_QUERY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies a specific instance of the entity. The reference should be version
     * specific. This is allowed to be a Parameters resource.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $what;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code representing the role the entity played in the event being audited.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $role;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Security labels for the identified entity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $securityLabel;
    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The query parameters for a query-type entities.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBase64Binary 
     */
    protected FHIRBase64Binary $query;
    /**
     * A record of an event relevant for purposes such as operations, privacy,
     * security, maintenance, and performance analysis.
     *
     * Tagged value pairs for conveying additional information about the entity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventDetail[] 
     */
    protected array $detail;
    /**
     * A record of an event relevant for purposes such as operations, privacy,
     * security, maintenance, and performance analysis.
     *
     * The entity is attributed to an agent to express the agent's responsibility for
     * that entity in the activity. This is most used to indicate when persistence
     * media (the entity) are used by an agent. For example when importing data from a
     * device, the device would be described in an entity, and the user importing data
     * from that media would be indicated as the entity.agent.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent[] 
     */
    protected array $agent;

    /* constructor.php:63 */
    /**
     * FHIRAuditEventEntity Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $what
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $role
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $securityLabel
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBase64Binary $query
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventDetail[] $detail
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent[] $agent
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRReference $what = null,
                                null|FHIRCodeableConcept $role = null,
                                null|iterable $securityLabel = null,
                                null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $query = null,
                                null|iterable $detail = null,
                                null|iterable $agent = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $what) {
            $this->setWhat($what);
        }
        if (null !== $role) {
            $this->setRole($role);
        }
        if (null !== $securityLabel) {
            $this->setSecurityLabel(...$securityLabel);
        }
        if (null !== $query) {
            $this->setQuery($query);
        }
        if (null !== $detail) {
            $this->setDetail(...$detail);
        }
        if (null !== $agent) {
            $this->setAgent(...$agent);
        }
    }

    /* class_default.php:136 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:162 */
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies a specific instance of the entity. The reference should be version
     * specific. This is allowed to be a Parameters resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getWhat(): null|FHIRReference
    {
        return $this->what ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies a specific instance of the entity. The reference should be version
     * specific. This is allowed to be a Parameters resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $what
     * @return static
     */
    public function setWhat(null|FHIRReference $what): self
    {
        if (null === $what) {
            unset($this->what);
            return $this;
        }
        $this->what = $what;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code representing the role the entity played in the event being audited.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getRole(): null|FHIRCodeableConcept
    {
        return $this->role ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code representing the role the entity played in the event being audited.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $role
     * @return static
     */
    public function setRole(null|FHIRCodeableConcept $role): self
    {
        if (null === $role) {
            unset($this->role);
            return $this;
        }
        $this->role = $role;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Security labels for the identified entity.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getSecurityLabel(): array
    {
        return $this->securityLabel ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getSecurityLabelIterator(): iterable
    {
        if (!isset($this->securityLabel)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->securityLabel);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Security labels for the identified entity.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $securityLabel
     * @return static
     */
    public function addSecurityLabel(FHIRCodeableConcept $securityLabel): self
    {
        if (!isset($this->securityLabel)) {
            $this->securityLabel = [];
        }
        $this->securityLabel[] = $securityLabel;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Security labels for the identified entity.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$securityLabel
     * @return static
     */
    public function setSecurityLabel(FHIRCodeableConcept ...$securityLabel): self
    {
        if ([] === $securityLabel) {
            unset($this->securityLabel);
            return $this;
        }
        $this->securityLabel = $securityLabel;
        return $this;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The query parameters for a query-type entities.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBase64Binary
     */
    public function getQuery(): null|FHIRBase64Binary
    {
        return $this->query ?? null;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The query parameters for a query-type entities.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBase64Binary $query
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setQuery(null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $query,
                             ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $query) {
            unset($this->query);
            return $this;
        }
        if (!($query instanceof FHIRBase64Binary)) {
            $query = new FHIRBase64Binary(value: $query);
        }
        $this->query = $query;
        if ($this->_valueXMLLocations[self::FIELD_QUERY] !== $valueXMLLocation) {
            $this->_setQueryValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the query element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getQueryValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_QUERY];
    }

    /**
     * Set the location the "value" field of the query element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setQueryValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_QUERY] = $valueXMLLocation;
        return $this;
    }

    /**
     * A record of an event relevant for purposes such as operations, privacy,
     * security, maintenance, and performance analysis.
     *
     * Tagged value pairs for conveying additional information about the entity.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventDetail[]
     */
    public function getDetail(): array
    {
        return $this->detail ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventDetail>
     */
    public function getDetailIterator(): iterable
    {
        if (!isset($this->detail)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->detail);
    }

    /**
     * A record of an event relevant for purposes such as operations, privacy,
     * security, maintenance, and performance analysis.
     *
     * Tagged value pairs for conveying additional information about the entity.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventDetail $detail
     * @return static
     */
    public function addDetail(FHIRAuditEventDetail $detail): self
    {
        if (!isset($this->detail)) {
            $this->detail = [];
        }
        $this->detail[] = $detail;
        return $this;
    }

    /**
     * A record of an event relevant for purposes such as operations, privacy,
     * security, maintenance, and performance analysis.
     *
     * Tagged value pairs for conveying additional information about the entity.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventDetail ...$detail
     * @return static
     */
    public function setDetail(FHIRAuditEventDetail ...$detail): self
    {
        if ([] === $detail) {
            unset($this->detail);
            return $this;
        }
        $this->detail = $detail;
        return $this;
    }

    /**
     * A record of an event relevant for purposes such as operations, privacy,
     * security, maintenance, and performance analysis.
     *
     * The entity is attributed to an agent to express the agent's responsibility for
     * that entity in the activity. This is most used to indicate when persistence
     * media (the entity) are used by an agent. For example when importing data from a
     * device, the device would be described in an entity, and the user importing data
     * from that media would be indicated as the entity.agent.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent[]
     */
    public function getAgent(): array
    {
        return $this->agent ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent>
     */
    public function getAgentIterator(): iterable
    {
        if (!isset($this->agent)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->agent);
    }

    /**
     * A record of an event relevant for purposes such as operations, privacy,
     * security, maintenance, and performance analysis.
     *
     * The entity is attributed to an agent to express the agent's responsibility for
     * that entity in the activity. This is most used to indicate when persistence
     * media (the entity) are used by an agent. For example when importing data from a
     * device, the device would be described in an entity, and the user importing data
     * from that media would be indicated as the entity.agent.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent $agent
     * @return static
     */
    public function addAgent(FHIRAuditEventAgent $agent): self
    {
        if (!isset($this->agent)) {
            $this->agent = [];
        }
        $this->agent[] = $agent;
        return $this;
    }

    /**
     * A record of an event relevant for purposes such as operations, privacy,
     * security, maintenance, and performance analysis.
     *
     * The entity is attributed to an agent to express the agent's responsibility for
     * that entity in the activity. This is most used to indicate when persistence
     * media (the entity) are used by an agent. For example when importing data from a
     * device, the device would be described in an entity, and the user importing data
     * from that media would be indicated as the entity.agent.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent ...$agent
     * @return static
     */
    public function setAgent(FHIRAuditEventAgent ...$agent): self
    {
        if ([] === $agent) {
            unset($this->agent);
            return $this;
        }
        $this->agent = $agent;
        return $this;
    }

    /* class_default.php:188 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
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
        if (isset($validationRules[self::FIELD_WHAT])) {
            $v = $this->getWhat();
            foreach($validationRules[self::FIELD_WHAT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_WHAT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHAT])) {
                        $errs[self::FIELD_WHAT] = [];
                    }
                    $errs[self::FIELD_WHAT][$rule] = $err;
                }
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
        if (isset($validationRules[self::FIELD_SECURITY_LABEL])) {
            $v = $this->getSecurityLabel();
            foreach($validationRules[self::FIELD_SECURITY_LABEL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SECURITY_LABEL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SECURITY_LABEL])) {
                        $errs[self::FIELD_SECURITY_LABEL] = [];
                    }
                    $errs[self::FIELD_SECURITY_LABEL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUERY])) {
            $v = $this->getQuery();
            foreach($validationRules[self::FIELD_QUERY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_QUERY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUERY])) {
                        $errs[self::FIELD_QUERY] = [];
                    }
                    $errs[self::FIELD_QUERY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL])) {
            $v = $this->getDetail();
            foreach($validationRules[self::FIELD_DETAIL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DETAIL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL])) {
                        $errs[self::FIELD_DETAIL] = [];
                    }
                    $errs[self::FIELD_DETAIL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AGENT])) {
            $v = $this->getAgent();
            foreach($validationRules[self::FIELD_AGENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AGENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AGENT])) {
                        $errs[self::FIELD_AGENT] = [];
                    }
                    $errs[self::FIELD_AGENT][$rule] = $err;
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

    /* class_default.php:212 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAuditEventEntity)) {
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
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_WHAT === $cen) {
                $type->setWhat(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ROLE === $cen) {
                $type->setRole(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SECURITY_LABEL === $cen) {
                $type->addSecurityLabel(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_QUERY === $cen) {
                $type->setQuery(FHIRBase64Binary::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DETAIL === $cen) {
                $type->addDetail(FHIRAuditEventDetail::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AGENT === $cen) {
                $type->addAgent(FHIRAuditEventAgent::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_QUERY])) {
            if (isset($type->query)) {
                $type->query->setValue((string)$attributes[self::FIELD_QUERY]);
                $type->_setQueryValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setQuery((string)$attributes[self::FIELD_QUERY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
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
        if (isset($this->query) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_QUERY]) {
            $xw->writeAttribute(self::FIELD_QUERY, $this->query->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->what)) {
            $xw->startElement(self::FIELD_WHAT);
            $this->what->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->role)) {
            $xw->startElement(self::FIELD_ROLE);
            $this->role->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->securityLabel)) {
            foreach ($this->securityLabel as $v) {
                $xw->startElement(self::FIELD_SECURITY_LABEL);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->query)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_QUERY]
                || $this->query->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_QUERY);
            $this->query->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_QUERY]);
            $xw->endElement();
        }
        if (isset($this->detail)) {
            foreach ($this->detail as $v) {
                $xw->startElement(self::FIELD_DETAIL);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAuditEventEntity)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_WHAT]) || array_key_exists(self::FIELD_WHAT, $json)) {
            $type->setWhat(FHIRReference::jsonUnserialize($json[self::FIELD_WHAT], $config));
        }
        if (isset($json[self::FIELD_ROLE]) || array_key_exists(self::FIELD_ROLE, $json)) {
            $type->setRole(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_ROLE], $config));
        }
        if (isset($json[self::FIELD_SECURITY_LABEL]) || array_key_exists(self::FIELD_SECURITY_LABEL, $json)) {
            $vs = $json[self::FIELD_SECURITY_LABEL];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addSecurityLabel(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_QUERY])
            || isset($json[self::FIELD_QUERY_EXT])
            || array_key_exists(self::FIELD_QUERY, $json)
            || array_key_exists(self::FIELD_QUERY_EXT, $json)) {
            $value = $json[self::FIELD_QUERY] ?? null;
            $type->setQuery(FHIRBase64Binary::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBase64Binary::FIELD_VALUE => $value]) + ($json[self::FIELD_QUERY_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DETAIL]) || array_key_exists(self::FIELD_DETAIL, $json)) {
            $vs = $json[self::FIELD_DETAIL];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addDetail(FHIRAuditEventDetail::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_AGENT]) || array_key_exists(self::FIELD_AGENT, $json)) {
            $vs = $json[self::FIELD_AGENT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addAgent(FHIRAuditEventAgent::jsonUnserialize($v, $config));
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
        if (isset($this->what)) {
            $out->what = $this->what;
        }
        if (isset($this->role)) {
            $out->role = $this->role;
        }
        if (isset($this->securityLabel) && [] !== $this->securityLabel) {
            $out->securityLabel = $this->securityLabel;
        }
        if (isset($this->query)) {
            if (null !== ($val = $this->query->getValue())) {
                $out->query = $val;
            }
            if ($this->query->_nonValueFieldDefined()) {
                $ext = $this->query->jsonSerialize();
                unset($ext->value);
                $out->_query = $ext;
            }
        }
        if (isset($this->detail) && [] !== $this->detail) {
            $out->detail = $this->detail;
        }
        if (isset($this->agent) && [] !== $this->agent) {
            $out->agent = $this->agent;
        }
        return $out;
    }
}