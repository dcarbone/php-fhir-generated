<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureMap;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 02:55+0000
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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRStructureMapTargetListMode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRStructureMapTransform;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRStructureMapTargetListModeEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRStructureMapTransformEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A Map of relationships between 2 structures that can be used to transform data.
 */
class FHIRStructureMapTarget extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_STRUCTURE_MAP_DOT_TARGET;

    /* class_default.php:48 */
    public const FIELD_CONTEXT = 'context';
    public const FIELD_CONTEXT_EXT = '_context';
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

    /* class_default.php:67 */
    private static array $_validationRules = [];

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_CONTEXT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ELEMENT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VARIABLE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_LIST_RULE_ID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TRANSFORM => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Variable this rule applies to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $context;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Field to create in the context.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId 
     */
    protected FHIRId $variable;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If field is a list, how to manage the list.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRStructureMapTargetListMode[] 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId 
     */
    protected FHIRId $listRuleId;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the data is copied / created.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRStructureMapTransform 
     */
    protected FHIRStructureMapTransform $transform;
    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * Parameters to the transform.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter[] 
     */
    protected array $parameter;

    /* constructor.php:63 */
    /**
     * FHIRStructureMapTarget Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $context
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $element
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $variable
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRStructureMapTargetListModeEnum[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRStructureMapTargetListMode[] $listMode
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $listRuleId
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRStructureMapTransformEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRStructureMapTransform $transform
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter[] $parameter
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $context = null,
                                null|string|FHIRStringPrimitive|FHIRString $element = null,
                                null|string|FHIRIdPrimitive|FHIRId $variable = null,
                                null|iterable $listMode = null,
                                null|string|FHIRIdPrimitive|FHIRId $listRuleId = null,
                                null|string|FHIRStructureMapTransformEnum|FHIRStructureMapTransform $transform = null,
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

    /* class_default.php:137 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Variable this rule applies to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getContext(): null|FHIRString
    {
        return $this->context ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Variable this rule applies to.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $context
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setContext(null|string|FHIRStringPrimitive|FHIRString $context,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $context) {
            unset($this->context);
            return $this;
        }
        if (!($context instanceof FHIRString)) {
            $context = new FHIRString(value: $context);
        }
        $this->context = $context;
        if ($this->_valueXMLLocations[self::FIELD_CONTEXT] !== $valueXMLLocation) {
            $this->_setContextValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the context element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getContextValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CONTEXT];
    }

    /**
     * Set the location the "value" field of the context element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setContextValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CONTEXT] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Field to create in the context.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getElement(): null|FHIRString
    {
        return $this->element ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Field to create in the context.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setElement(null|string|FHIRStringPrimitive|FHIRString $element,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $element) {
            unset($this->element);
            return $this;
        }
        if (!($element instanceof FHIRString)) {
            $element = new FHIRString(value: $element);
        }
        $this->element = $element;
        if ($this->_valueXMLLocations[self::FIELD_ELEMENT] !== $valueXMLLocation) {
            $this->_setElementValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the element element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getElementValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ELEMENT];
    }

    /**
     * Set the location the "value" field of the element element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setElementValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ELEMENT] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $variable
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setVariable(null|string|FHIRIdPrimitive|FHIRId $variable,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $variable) {
            unset($this->variable);
            return $this;
        }
        if (!($variable instanceof FHIRId)) {
            $variable = new FHIRId(value: $variable);
        }
        $this->variable = $variable;
        if ($this->_valueXMLLocations[self::FIELD_VARIABLE] !== $valueXMLLocation) {
            $this->_setVariableValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the variable element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getVariableValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VARIABLE];
    }

    /**
     * Set the location the "value" field of the variable element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setVariableValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VARIABLE] = $valueXMLLocation;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If field is a list, how to manage the list.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRStructureMapTargetListMode[]
     */
    public function getListMode(): array
    {
        return $this->listMode ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRStructureMapTargetListMode>
     */
    public function getListModeIterator(): iterable
    {
        if (!isset($this->listMode)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->listMode);
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If field is a list, how to manage the list.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRStructureMapTargetListModeEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRStructureMapTargetListMode $listMode
     * @return static
     */
    public function addListMode(string|FHIRStructureMapTargetListModeEnum|FHIRStructureMapTargetListMode $listMode): self
    {
        if (!($listMode instanceof FHIRStructureMapTargetListMode)) {
            $listMode = new FHIRStructureMapTargetListMode(value: $listMode);
        }
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRStructureMapTargetListModeEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRStructureMapTargetListMode ...$listMode
     * @return static
     */
    public function setListMode(string|FHIRStructureMapTargetListModeEnum|FHIRStructureMapTargetListMode ...$listMode): self
    {
        if ([] === $listMode) {
            unset($this->listMode);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $listRuleId
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setListRuleId(null|string|FHIRIdPrimitive|FHIRId $listRuleId,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $listRuleId) {
            unset($this->listRuleId);
            return $this;
        }
        if (!($listRuleId instanceof FHIRId)) {
            $listRuleId = new FHIRId(value: $listRuleId);
        }
        $this->listRuleId = $listRuleId;
        if ($this->_valueXMLLocations[self::FIELD_LIST_RULE_ID] !== $valueXMLLocation) {
            $this->_setListRuleIdValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the listRuleId element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getListRuleIdValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_LIST_RULE_ID];
    }

    /**
     * Set the location the "value" field of the listRuleId element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setListRuleIdValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_LIST_RULE_ID] = $valueXMLLocation;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the data is copied / created.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRStructureMapTransform
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRStructureMapTransformEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRStructureMapTransform $transform
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTransform(null|string|FHIRStructureMapTransformEnum|FHIRStructureMapTransform $transform,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $transform) {
            unset($this->transform);
            return $this;
        }
        if (!($transform instanceof FHIRStructureMapTransform)) {
            $transform = new FHIRStructureMapTransform(value: $transform);
        }
        $this->transform = $transform;
        if ($this->_valueXMLLocations[self::FIELD_TRANSFORM] !== $valueXMLLocation) {
            $this->_setTransformValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the transform element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getTransformValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_TRANSFORM];
    }

    /**
     * Set the location the "value" field of the transform element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setTransformValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_TRANSFORM] = $valueXMLLocation;
        return $this;
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * Parameters to the transform.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter[]
     */
    public function getParameter(): array
    {
        return $this->parameter ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter>
     */
    public function getParameterIterator(): iterable
    {
        if (!isset($this->parameter)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->parameter);
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * Parameters to the transform.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter $parameter
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter ...$parameter
     * @return static
     */
    public function setParameter(FHIRStructureMapParameter ...$parameter): self
    {
        if ([] === $parameter) {
            unset($this->parameter);
            return $this;
        }
        $this->parameter = $parameter;
        return $this;
    }

    /* class_default.php:189 */
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

    /* class_default.php:213 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
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
            } else if (self::FIELD_CONTEXT === $cen) {
                $type->setContext(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ELEMENT === $cen) {
                $type->setElement(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VARIABLE === $cen) {
                $type->setVariable(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LIST_MODE === $cen) {
                $type->addListMode(FHIRStructureMapTargetListMode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LIST_RULE_ID === $cen) {
                $type->setListRuleId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TRANSFORM === $cen) {
                $type->setTransform(FHIRStructureMapTransform::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PARAMETER === $cen) {
                $type->addParameter(FHIRStructureMapParameter::xmlUnserialize($ce, $config));
            }        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CONTEXT])) {
            if (isset($type->context)) {
                $type->context->setValue((string)$attributes[self::FIELD_CONTEXT]);
                $type->_setContextValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setContext((string)$attributes[self::FIELD_CONTEXT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ELEMENT])) {
            if (isset($type->element)) {
                $type->element->setValue((string)$attributes[self::FIELD_ELEMENT]);
                $type->_setElementValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setElement((string)$attributes[self::FIELD_ELEMENT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VARIABLE])) {
            if (isset($type->variable)) {
                $type->variable->setValue((string)$attributes[self::FIELD_VARIABLE]);
                $type->_setVariableValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setVariable((string)$attributes[self::FIELD_VARIABLE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LIST_RULE_ID])) {
            if (isset($type->listRuleId)) {
                $type->listRuleId->setValue((string)$attributes[self::FIELD_LIST_RULE_ID]);
                $type->_setListRuleIdValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setListRuleId((string)$attributes[self::FIELD_LIST_RULE_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TRANSFORM])) {
            if (isset($type->transform)) {
                $type->transform->setValue((string)$attributes[self::FIELD_TRANSFORM]);
                $type->_setTransformValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setTransform((string)$attributes[self::FIELD_TRANSFORM], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->context) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CONTEXT]) {
            $xw->writeAttribute(self::FIELD_CONTEXT, $this->context->_getFormattedValue());
        }
        if (isset($this->element) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ELEMENT]) {
            $xw->writeAttribute(self::FIELD_ELEMENT, $this->element->_getFormattedValue());
        }
        if (isset($this->variable) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VARIABLE]) {
            $xw->writeAttribute(self::FIELD_VARIABLE, $this->variable->_getFormattedValue());
        }
        if (isset($this->listRuleId) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LIST_RULE_ID]) {
            $xw->writeAttribute(self::FIELD_LIST_RULE_ID, $this->listRuleId->_getFormattedValue());
        }
        if (isset($this->transform) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TRANSFORM]) {
            $xw->writeAttribute(self::FIELD_TRANSFORM, $this->transform->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->context)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CONTEXT]
                || $this->context->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CONTEXT);
            $this->context->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CONTEXT]);
            $xw->endElement();
        }
        if (isset($this->element)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ELEMENT]
                || $this->element->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ELEMENT);
            $this->element->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ELEMENT]);
            $xw->endElement();
        }
        if (isset($this->variable)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VARIABLE]
                || $this->variable->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VARIABLE);
            $this->variable->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VARIABLE]);
            $xw->endElement();
        }
        if (isset($this->listMode) && [] !== $this->listMode) {
            foreach($this->listMode as $v) {
                $xw->startElement(self::FIELD_LIST_MODE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->listRuleId)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LIST_RULE_ID]
                || $this->listRuleId->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LIST_RULE_ID);
            $this->listRuleId->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LIST_RULE_ID]);
            $xw->endElement();
        }
        if (isset($this->transform)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TRANSFORM]
                || $this->transform->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TRANSFORM);
            $this->transform->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TRANSFORM]);
            $xw->endElement();
        }
        if (isset($this->parameter)) {
            foreach ($this->parameter as $v) {
                $xw->startElement(self::FIELD_PARAMETER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_CONTEXT])
            || isset($json[self::FIELD_CONTEXT_EXT])
            || array_key_exists(self::FIELD_CONTEXT, $json)
            || array_key_exists(self::FIELD_CONTEXT_EXT, $json)) {
            $value = $json[self::FIELD_CONTEXT] ?? null;
            $type->setContext(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_CONTEXT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ELEMENT])
            || isset($json[self::FIELD_ELEMENT_EXT])
            || array_key_exists(self::FIELD_ELEMENT, $json)
            || array_key_exists(self::FIELD_ELEMENT_EXT, $json)) {
            $value = $json[self::FIELD_ELEMENT] ?? null;
            $type->setElement(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_ELEMENT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VARIABLE])
            || isset($json[self::FIELD_VARIABLE_EXT])
            || array_key_exists(self::FIELD_VARIABLE, $json)
            || array_key_exists(self::FIELD_VARIABLE_EXT, $json)) {
            $value = $json[self::FIELD_VARIABLE] ?? null;
            $type->setVariable(FHIRId::jsonUnserialize(
                (is_array($value) ? $value : [FHIRId::FIELD_VALUE => $value]) + ($json[self::FIELD_VARIABLE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_LIST_MODE])
            || isset($json[self::FIELD_LIST_MODE_EXT])
            || array_key_exists(self::FIELD_LIST_MODE, $json)
            || array_key_exists(self::FIELD_LIST_MODE_EXT, $json)) {
            $value = (array)($json[self::FIELD_LIST_MODE] ?? []);
            $ext = (array)($json[self::FIELD_LIST_MODE_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addListMode(FHIRStructureMapTargetListMode::jsonUnserialize(
                    [FHIRStructureMapTargetListMode::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_LIST_RULE_ID])
            || isset($json[self::FIELD_LIST_RULE_ID_EXT])
            || array_key_exists(self::FIELD_LIST_RULE_ID, $json)
            || array_key_exists(self::FIELD_LIST_RULE_ID_EXT, $json)) {
            $value = $json[self::FIELD_LIST_RULE_ID] ?? null;
            $type->setListRuleId(FHIRId::jsonUnserialize(
                (is_array($value) ? $value : [FHIRId::FIELD_VALUE => $value]) + ($json[self::FIELD_LIST_RULE_ID_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_TRANSFORM])
            || isset($json[self::FIELD_TRANSFORM_EXT])
            || array_key_exists(self::FIELD_TRANSFORM, $json)
            || array_key_exists(self::FIELD_TRANSFORM_EXT, $json)) {
            $value = $json[self::FIELD_TRANSFORM] ?? null;
            $type->setTransform(FHIRStructureMapTransform::jsonUnserialize(
                (is_array($value) ? $value : [FHIRStructureMapTransform::FIELD_VALUE => $value]) + ($json[self::FIELD_TRANSFORM_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PARAMETER]) || array_key_exists(self::FIELD_PARAMETER, $json)) {
            $vs = $json[self::FIELD_PARAMETER];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addParameter(FHIRStructureMapParameter::jsonUnserialize($v, $config));
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
    /* class_default.php:238 */
    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}