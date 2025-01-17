<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStructureMapContextType;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStructureMapTargetListMode;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStructureMapTransform;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * A Map of relationships between 2 structures that can be used to transform data.
 */
class FHIRStructureMapTarget extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_STRUCTURE_MAP_DOT_TARGET;


    public const FIELD_CONTEXT = 'context';
    public const FIELD_CONTEXT_EXT = '_context';
    public const FIELD_CONTEXT_TYPE = 'contextType';
    public const FIELD_CONTEXT_TYPE_EXT = '_contextType';
    public const FIELD_ELEMENT = 'element';
    public const FIELD_ELEMENT_EXT = '_element';
    public const FIELD_VARIABLE = 'variable';
    public const FIELD_VARIABLE_EXT = '_variable';
    public const FIELD_LIST_MODE = 'listMode';
    public const FIELD_LIST_MODE_EXT = '_listMode';
    public const FIELD_LIST_RULE_ID = 'listRuleId';
    public const FIELD_LIST_RULE_ID_EXT = '_listRuleId';
    public const FIELD_TRANSFORM = 'transform';
    public const FIELD_TRANSFORM_EXT = '_transform';
    public const FIELD_PARAMETER = 'parameter';

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Type or variable this rule applies to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRId 
     */
    protected FHIRId $context;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How to interpret the context.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStructureMapContextType 
     */
    protected FHIRStructureMapContextType $contextType;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Field to create in the context.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $element;
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Named context for field, if desired, and a field is specified.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRId 
     */
    protected FHIRId $variable;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If field is a list, how to manage the list.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStructureMapTargetListMode[] 
     */
    protected array $listMode;
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Internal rule reference for shared list items.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRId 
     */
    protected FHIRId $listRuleId;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the data is copied / created.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStructureMapTransform 
     */
    protected FHIRStructureMapTransform $transform;
    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * Parameters to the transform.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter[] 
     */
    protected array $parameter;

    /** Default validation map for fields in type StructureMap.Target */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRStructureMapTarget Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRId $context
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStructureMapContextType $contextType
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $element
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRId $variable
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStructureMapTargetListMode[] $listMode
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRId $listRuleId
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStructureMapTransform $transform
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter[] $parameter
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRIdPrimitive|FHIRId $context = null,
                                null|FHIRStructureMapContextType $contextType = null,
                                null|string|FHIRStringPrimitive|FHIRString $element = null,
                                null|string|FHIRIdPrimitive|FHIRId $variable = null,
                                null|iterable $listMode = null,
                                null|string|FHIRIdPrimitive|FHIRId $listRuleId = null,
                                null|FHIRStructureMapTransform $transform = null,
                                null|iterable $parameter = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $context) {
            $this->setContext($context);
        }
        if (null !== $contextType) {
            $this->setContextType($contextType);
        }
        if (null !== $element) {
            $this->setElement($element);
        }
        if (null !== $variable) {
            $this->setVariable($variable);
        }
        if (null !== $listMode) {
            $this->setListMode(...$listMode);
        }
        if (null !== $listRuleId) {
            $this->setListRuleId($listRuleId);
        }
        if (null !== $transform) {
            $this->setTransform($transform);
        }
        if (null !== $parameter) {
            $this->setParameter(...$parameter);
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
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Type or variable this rule applies to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRId
     */
    public function getContext(): null|FHIRId
    {
        return $this->context ?? null;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Type or variable this rule applies to.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRId $context
     * @return static
     */
    public function setContext(null|string|FHIRIdPrimitive|FHIRId $context): self
    {
        if (null === $context) {
            unset($this->context);
            return $this;
        }
        if (!($context instanceof FHIRId)) {
            $context = new FHIRId(value: $context);
        }
        $this->context = $context;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How to interpret the context.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStructureMapContextType
     */
    public function getContextType(): null|FHIRStructureMapContextType
    {
        return $this->contextType ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How to interpret the context.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStructureMapContextType $contextType
     * @return static
     */
    public function setContextType(null|FHIRStructureMapContextType $contextType): self
    {
        if (null === $contextType) {
            unset($this->contextType);
            return $this;
        }
        $this->contextType = $contextType;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Field to create in the context.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getElement(): null|FHIRString
    {
        return $this->element ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Field to create in the context.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $element
     * @return static
     */
    public function setElement(null|string|FHIRStringPrimitive|FHIRString $element): self
    {
        if (null === $element) {
            unset($this->element);
            return $this;
        }
        if (!($element instanceof FHIRString)) {
            $element = new FHIRString(value: $element);
        }
        $this->element = $element;
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Named context for field, if desired, and a field is specified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRId
     */
    public function getVariable(): null|FHIRId
    {
        return $this->variable ?? null;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Named context for field, if desired, and a field is specified.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRId $variable
     * @return static
     */
    public function setVariable(null|string|FHIRIdPrimitive|FHIRId $variable): self
    {
        if (null === $variable) {
            unset($this->variable);
            return $this;
        }
        if (!($variable instanceof FHIRId)) {
            $variable = new FHIRId(value: $variable);
        }
        $this->variable = $variable;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If field is a list, how to manage the list.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStructureMapTargetListMode[]
     */
    public function getListMode(): array
    {
        return $this->listMode ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStructureMapTargetListMode>
     */
    public function getListModeIterator(): iterable
    {
        if (!isset($this->listMode) || [] === $this->listMode) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->listMode);
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If field is a list, how to manage the list.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStructureMapTargetListMode $listMode
     * @return static
     */
    public function addListMode(FHIRStructureMapTargetListMode $listMode): self
    {
        if (!isset($this->listMode)) {
            $this->listMode = [];
        }
        $this->listMode[] = $listMode;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If field is a list, how to manage the list.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStructureMapTargetListMode ...$listMode
     * @return static
     */
    public function setListMode(FHIRStructureMapTargetListMode ...$listMode): self
    {
        $this->listMode = [];
        foreach($listMode as $v) {
            if ($v instanceof FHIRStructureMapTargetListMode) {
                $this->listMode[] = $v;
            } else {
                $this->listMode[] = new FHIRStructureMapTargetListMode(value: $v);
            }
        }
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Internal rule reference for shared list items.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRId
     */
    public function getListRuleId(): null|FHIRId
    {
        return $this->listRuleId ?? null;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Internal rule reference for shared list items.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRId $listRuleId
     * @return static
     */
    public function setListRuleId(null|string|FHIRIdPrimitive|FHIRId $listRuleId): self
    {
        if (null === $listRuleId) {
            unset($this->listRuleId);
            return $this;
        }
        if (!($listRuleId instanceof FHIRId)) {
            $listRuleId = new FHIRId(value: $listRuleId);
        }
        $this->listRuleId = $listRuleId;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the data is copied / created.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStructureMapTransform
     */
    public function getTransform(): null|FHIRStructureMapTransform
    {
        return $this->transform ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the data is copied / created.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStructureMapTransform $transform
     * @return static
     */
    public function setTransform(null|FHIRStructureMapTransform $transform): self
    {
        if (null === $transform) {
            unset($this->transform);
            return $this;
        }
        $this->transform = $transform;
        return $this;
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * Parameters to the transform.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter[]
     */
    public function getParameter(): array
    {
        return $this->parameter ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter>
     */
    public function getParameterIterator(): iterable
    {
        if (!isset($this->parameter) || [] === $this->parameter) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->parameter);
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * Parameters to the transform.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter $parameter
     * @return static
     */
    public function addParameter(FHIRStructureMapParameter $parameter): self
    {
        if (!isset($this->parameter)) {
            $this->parameter = [];
        }
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * Parameters to the transform.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter ...$parameter
     * @return static
     */
    public function setParameter(FHIRStructureMapParameter ...$parameter): self
    {
        $this->parameter = $parameter;
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
        if (isset($validationRules[self::FIELD_CONTEXT])) {
            $v = $this->getContext();
            foreach($validationRules[self::FIELD_CONTEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTEXT])) {
                        $errs[self::FIELD_CONTEXT] = [];
                    }
                    $errs[self::FIELD_CONTEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTEXT_TYPE])) {
            $v = $this->getContextType();
            foreach($validationRules[self::FIELD_CONTEXT_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTEXT_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTEXT_TYPE])) {
                        $errs[self::FIELD_CONTEXT_TYPE] = [];
                    }
                    $errs[self::FIELD_CONTEXT_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ELEMENT])) {
            $v = $this->getElement();
            foreach($validationRules[self::FIELD_ELEMENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ELEMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ELEMENT])) {
                        $errs[self::FIELD_ELEMENT] = [];
                    }
                    $errs[self::FIELD_ELEMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VARIABLE])) {
            $v = $this->getVariable();
            foreach($validationRules[self::FIELD_VARIABLE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VARIABLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VARIABLE])) {
                        $errs[self::FIELD_VARIABLE] = [];
                    }
                    $errs[self::FIELD_VARIABLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LIST_MODE])) {
            $v = $this->getListMode();
            foreach($validationRules[self::FIELD_LIST_MODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LIST_MODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LIST_MODE])) {
                        $errs[self::FIELD_LIST_MODE] = [];
                    }
                    $errs[self::FIELD_LIST_MODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LIST_RULE_ID])) {
            $v = $this->getListRuleId();
            foreach($validationRules[self::FIELD_LIST_RULE_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LIST_RULE_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LIST_RULE_ID])) {
                        $errs[self::FIELD_LIST_RULE_ID] = [];
                    }
                    $errs[self::FIELD_LIST_RULE_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TRANSFORM])) {
            $v = $this->getTransform();
            foreach($validationRules[self::FIELD_TRANSFORM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TRANSFORM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TRANSFORM])) {
                        $errs[self::FIELD_TRANSFORM] = [];
                    }
                    $errs[self::FIELD_TRANSFORM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARAMETER])) {
            $v = $this->getParameter();
            foreach($validationRules[self::FIELD_PARAMETER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PARAMETER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARAMETER])) {
                        $errs[self::FIELD_PARAMETER] = [];
                    }
                    $errs[self::FIELD_PARAMETER][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRStructureMapTarget)) {
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
                $v = new FHIRStringPrimitive(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTEXT === $childName) {
                $v = new FHIRId(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setContext(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTEXT_TYPE === $childName) {
                $v = new FHIRStructureMapContextType(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setContextType(FHIRStructureMapContextType::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ELEMENT === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setElement(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_VARIABLE === $childName) {
                $v = new FHIRId(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setVariable(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LIST_MODE === $childName) {
                $v = new FHIRStructureMapTargetListMode(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->addListMode(FHIRStructureMapTargetListMode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LIST_RULE_ID === $childName) {
                $v = new FHIRId(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setListRuleId(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TRANSFORM === $childName) {
                $v = new FHIRStructureMapTransform(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setTransform(FHIRStructureMapTransform::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PARAMETER === $childName) {
                $v = new FHIRStructureMapParameter();
                $type->addParameter(FHIRStructureMapParameter::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CONTEXT])) {
            $pt = $type->getContext();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CONTEXT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setContext(new FHIRId(
                    value: (string)$attributes[self::FIELD_CONTEXT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ELEMENT])) {
            $pt = $type->getElement();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ELEMENT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setElement(new FHIRString(
                    value: (string)$attributes[self::FIELD_ELEMENT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_VARIABLE])) {
            $pt = $type->getVariable();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VARIABLE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setVariable(new FHIRId(
                    value: (string)$attributes[self::FIELD_VARIABLE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LIST_RULE_ID])) {
            $pt = $type->getListRuleId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LIST_RULE_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setListRuleId(new FHIRId(
                    value: (string)$attributes[self::FIELD_LIST_RULE_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
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
            $xw->openRootNode('StructureMapTarget', $this->_getSourceXMLNS());
        }
        if (isset($this->context) && $this->context->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CONTEXT, $this->context->getValue()?->getFormattedValue());
        }
        if (isset($this->element) && $this->element->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ELEMENT, $this->element->getValue()?->getFormattedValue());
        }
        if (isset($this->variable) && $this->variable->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_VARIABLE, $this->variable->getValue()?->getFormattedValue());
        }
        if (isset($this->listRuleId) && $this->listRuleId->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_LIST_RULE_ID, $this->listRuleId->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->context) && $this->context->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CONTEXT);
            $this->context->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->contextType)) {
            $xw->startElement(self::FIELD_CONTEXT_TYPE);
            $this->contextType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->element) && $this->element->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ELEMENT);
            $this->element->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->variable) && $this->variable->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_VARIABLE);
            $this->variable->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->listMode)) {
            foreach ($this->listMode as $v) {
                $xw->startElement(self::FIELD_LIST_MODE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->listRuleId) && $this->listRuleId->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_LIST_RULE_ID);
            $this->listRuleId->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->transform)) {
            $xw->startElement(self::FIELD_TRANSFORM);
            $this->transform->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->parameter)) {
            foreach ($this->parameter as $v) {
                $xw->startElement(self::FIELD_PARAMETER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRStructureMapTarget)) {
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
        if (isset($json[self::FIELD_CONTEXT]) || isset($json[self::FIELD_CONTEXT_EXT]) || array_key_exists(self::FIELD_CONTEXT, $json) || array_key_exists(self::FIELD_CONTEXT_EXT, $json)) {
            $value = $json[self::FIELD_CONTEXT] ?? null;
            $ext = (isset($json[self::FIELD_CONTEXT_EXT]) && is_array($json[self::FIELD_CONTEXT_EXT])) ? $json[self::FIELD_CONTEXT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $type->setContext($value);
                } else if (is_array($value)) {
                    $type->setContext(new FHIRId(array_merge($ext, $value)));
                } else {
                    $type->setContext(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setContext(new FHIRId($ext));
            } else {
                $type->setContext(new FHIRId(null));
            }
        }
        if (isset($json[self::FIELD_CONTEXT_TYPE]) || isset($json[self::FIELD_CONTEXT_TYPE_EXT]) || array_key_exists(self::FIELD_CONTEXT_TYPE, $json) || array_key_exists(self::FIELD_CONTEXT_TYPE_EXT, $json)) {
            $value = $json[self::FIELD_CONTEXT_TYPE] ?? null;
            $ext = (isset($json[self::FIELD_CONTEXT_TYPE_EXT]) && is_array($json[self::FIELD_CONTEXT_TYPE_EXT])) ? $json[self::FIELD_CONTEXT_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRStructureMapContextType) {
                    $type->setContextType($value);
                } else if (is_array($value)) {
                    $type->setContextType(new FHIRStructureMapContextType(array_merge($ext, $value)));
                } else {
                    $type->setContextType(new FHIRStructureMapContextType([FHIRStructureMapContextType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setContextType(new FHIRStructureMapContextType($ext));
            } else {
                $type->setContextType(new FHIRStructureMapContextType(null));
            }
        }
        if (isset($json[self::FIELD_ELEMENT]) || isset($json[self::FIELD_ELEMENT_EXT]) || array_key_exists(self::FIELD_ELEMENT, $json) || array_key_exists(self::FIELD_ELEMENT_EXT, $json)) {
            $value = $json[self::FIELD_ELEMENT] ?? null;
            $ext = (isset($json[self::FIELD_ELEMENT_EXT]) && is_array($json[self::FIELD_ELEMENT_EXT])) ? $json[self::FIELD_ELEMENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setElement($value);
                } else if (is_array($value)) {
                    $type->setElement(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setElement(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setElement(new FHIRString($ext));
            } else {
                $type->setElement(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_VARIABLE]) || isset($json[self::FIELD_VARIABLE_EXT]) || array_key_exists(self::FIELD_VARIABLE, $json) || array_key_exists(self::FIELD_VARIABLE_EXT, $json)) {
            $value = $json[self::FIELD_VARIABLE] ?? null;
            $ext = (isset($json[self::FIELD_VARIABLE_EXT]) && is_array($json[self::FIELD_VARIABLE_EXT])) ? $json[self::FIELD_VARIABLE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $type->setVariable($value);
                } else if (is_array($value)) {
                    $type->setVariable(new FHIRId(array_merge($ext, $value)));
                } else {
                    $type->setVariable(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setVariable(new FHIRId($ext));
            } else {
                $type->setVariable(new FHIRId(null));
            }
        }
        if (isset($json[self::FIELD_LIST_MODE]) || isset($json[self::FIELD_LIST_MODE_EXT]) || array_key_exists(self::FIELD_LIST_MODE, $json) || array_key_exists(self::FIELD_LIST_MODE_EXT, $json)) {
            $value = $json[self::FIELD_LIST_MODE] ?? null;
            $ext = (isset($json[self::FIELD_LIST_MODE_EXT]) && is_array($json[self::FIELD_LIST_MODE_EXT])) ? $json[self::FIELD_LIST_MODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRStructureMapTargetListMode) {
                    $type->addListMode($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRStructureMapTargetListMode) {
                            $type->addListMode($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addListMode(new FHIRStructureMapTargetListMode(array_merge($v, $iext)));
                            } else {
                                $type->addListMode(new FHIRStructureMapTargetListMode([FHIRStructureMapTargetListMode::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addListMode(new FHIRStructureMapTargetListMode(array_merge($ext, $value)));
                } else {
                    $type->addListMode(new FHIRStructureMapTargetListMode([FHIRStructureMapTargetListMode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addListMode(new FHIRStructureMapTargetListMode($iext));
                }
            } else {
                $type->addListMode(new FHIRStructureMapTargetListMode(null));
            }
        }
        if (isset($json[self::FIELD_LIST_RULE_ID]) || isset($json[self::FIELD_LIST_RULE_ID_EXT]) || array_key_exists(self::FIELD_LIST_RULE_ID, $json) || array_key_exists(self::FIELD_LIST_RULE_ID_EXT, $json)) {
            $value = $json[self::FIELD_LIST_RULE_ID] ?? null;
            $ext = (isset($json[self::FIELD_LIST_RULE_ID_EXT]) && is_array($json[self::FIELD_LIST_RULE_ID_EXT])) ? $json[self::FIELD_LIST_RULE_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $type->setListRuleId($value);
                } else if (is_array($value)) {
                    $type->setListRuleId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $type->setListRuleId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setListRuleId(new FHIRId($ext));
            } else {
                $type->setListRuleId(new FHIRId(null));
            }
        }
        if (isset($json[self::FIELD_TRANSFORM]) || isset($json[self::FIELD_TRANSFORM_EXT]) || array_key_exists(self::FIELD_TRANSFORM, $json) || array_key_exists(self::FIELD_TRANSFORM_EXT, $json)) {
            $value = $json[self::FIELD_TRANSFORM] ?? null;
            $ext = (isset($json[self::FIELD_TRANSFORM_EXT]) && is_array($json[self::FIELD_TRANSFORM_EXT])) ? $json[self::FIELD_TRANSFORM_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRStructureMapTransform) {
                    $type->setTransform($value);
                } else if (is_array($value)) {
                    $type->setTransform(new FHIRStructureMapTransform(array_merge($ext, $value)));
                } else {
                    $type->setTransform(new FHIRStructureMapTransform([FHIRStructureMapTransform::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setTransform(new FHIRStructureMapTransform($ext));
            } else {
                $type->setTransform(new FHIRStructureMapTransform(null));
            }
        }
        if (isset($json[self::FIELD_PARAMETER]) || array_key_exists(self::FIELD_PARAMETER, $json)) {
            if (is_array($json[self::FIELD_PARAMETER])) {
                foreach($json[self::FIELD_PARAMETER] as $v) {
                    if ($v instanceof FHIRStructureMapParameter) {
                        $type->addParameter($v);
                    } else {
                        $type->addParameter(new FHIRStructureMapParameter($v));
                    }
                }
            } elseif ($json[self::FIELD_PARAMETER] instanceof FHIRStructureMapParameter) {
                $type->addParameter($json[self::FIELD_PARAMETER]);
            } else {
                $type->addParameter(new FHIRStructureMapParameter($json[self::FIELD_PARAMETER]));
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
        if (isset($this->context)) {
            if (null !== ($val = $this->context->getValue())) {
                $out->context = $val;
            }
            $ext = $this->context->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_context = $ext;
            }
        }
        if (isset($this->contextType)) {
            if (null !== ($val = $this->contextType->getValue())) {
                $out->contextType = $val;
            }
            $ext = $this->contextType->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_contextType = $ext;
            }
        }
        if (isset($this->element)) {
            if (null !== ($val = $this->element->getValue())) {
                $out->element = $val;
            }
            $ext = $this->element->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_element = $ext;
            }
        }
        if (isset($this->variable)) {
            if (null !== ($val = $this->variable->getValue())) {
                $out->variable = $val;
            }
            $ext = $this->variable->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_variable = $ext;
            }
        }
        if (isset($this->listMode) && [] !== $this->listMode) {
            $vals = [];
            $exts = [];
            foreach ($this->listMode as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->listMode = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_listMode = $exts;
            }
        }
        if (isset($this->listRuleId)) {
            if (null !== ($val = $this->listRuleId->getValue())) {
                $out->listRuleId = $val;
            }
            $ext = $this->listRuleId->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_listRuleId = $ext;
            }
        }
        if (isset($this->transform)) {
            if (null !== ($val = $this->transform->getValue())) {
                $out->transform = $val;
            }
            $ext = $this->transform->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_transform = $ext;
            }
        }
        if (isset($this->parameter) && [] !== $this->parameter) {
            $out->parameter = $this->parameter;
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