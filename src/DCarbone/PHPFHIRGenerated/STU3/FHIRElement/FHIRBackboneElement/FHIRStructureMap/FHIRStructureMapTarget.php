<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 7th, 2024 20:38+0000
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
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapContextType;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapTargetListMode;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapTransform;
use DCarbone\PHPFHIRGenerated\STU3\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter;

/**
 * A Map of relationships between 2 structures that can be used to transform data.
 *
 * Class FHIRStructureMapTarget
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap
 */
class FHIRStructureMapTarget extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_TARGET;

    const FIELD_CONTEXT = 'context';
    const FIELD_CONTEXT_EXT = '_context';
    const FIELD_CONTEXT_TYPE = 'contextType';
    const FIELD_CONTEXT_TYPE_EXT = '_contextType';
    const FIELD_ELEMENT = 'element';
    const FIELD_ELEMENT_EXT = '_element';
    const FIELD_VARIABLE = 'variable';
    const FIELD_VARIABLE_EXT = '_variable';
    const FIELD_LIST_MODE = 'listMode';
    const FIELD_LIST_MODE_EXT = '_listMode';
    const FIELD_LIST_RULE_ID = 'listRuleId';
    const FIELD_LIST_RULE_ID_EXT = '_listRuleId';
    const FIELD_TRANSFORM = 'transform';
    const FIELD_TRANSFORM_EXT = '_transform';
    const FIELD_PARAMETER = 'parameter';

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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    protected null|FHIRId $context = null;
    /**
     * How to interpret the context
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How to interpret the context.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapContextType
     */
    protected null|FHIRStructureMapContextType $contextType = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Field to create in the context.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $element = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    protected null|FHIRId $variable = null;
    /**
     * If field is a list, how to manage the production
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If field is a list, how to manage the list.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapTargetListMode[]
     */
    protected null|array $listMode = [];
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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    protected null|FHIRId $listRuleId = null;
    /**
     * How data is copied/created
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the data is copied / created.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapTransform
     */
    protected null|FHIRStructureMapTransform $transform = null;
    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * Parameters to the transform.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter[]
     */
    protected null|array $parameter = [];

    /**
     * Validation map for fields in type StructureMap.Target
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRStructureMapTarget Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_CONTEXT, $data) || array_key_exists(self::FIELD_CONTEXT_EXT, $data)) {
            $value = $data[self::FIELD_CONTEXT] ?? null;
            $ext = (isset($data[self::FIELD_CONTEXT_EXT]) && is_array($data[self::FIELD_CONTEXT_EXT])) ? $data[self::FIELD_CONTEXT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setContext($value);
                } else if (is_array($value)) {
                    $this->setContext(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setContext(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setContext(new FHIRId($ext));
            } else {
                $this->setContext(new FHIRId(null));
            }
        }
        if (array_key_exists(self::FIELD_CONTEXT_TYPE, $data) || array_key_exists(self::FIELD_CONTEXT_TYPE_EXT, $data)) {
            $value = $data[self::FIELD_CONTEXT_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_CONTEXT_TYPE_EXT]) && is_array($data[self::FIELD_CONTEXT_TYPE_EXT])) ? $data[self::FIELD_CONTEXT_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRStructureMapContextType) {
                    $this->setContextType($value);
                } else if (is_array($value)) {
                    $this->setContextType(new FHIRStructureMapContextType(array_merge($ext, $value)));
                } else {
                    $this->setContextType(new FHIRStructureMapContextType([FHIRStructureMapContextType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setContextType(new FHIRStructureMapContextType($ext));
            } else {
                $this->setContextType(new FHIRStructureMapContextType(null));
            }
        }
        if (array_key_exists(self::FIELD_ELEMENT, $data) || array_key_exists(self::FIELD_ELEMENT_EXT, $data)) {
            $value = $data[self::FIELD_ELEMENT] ?? null;
            $ext = (isset($data[self::FIELD_ELEMENT_EXT]) && is_array($data[self::FIELD_ELEMENT_EXT])) ? $data[self::FIELD_ELEMENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setElement($value);
                } else if (is_array($value)) {
                    $this->setElement(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setElement(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setElement(new FHIRString($ext));
            } else {
                $this->setElement(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_VARIABLE, $data) || array_key_exists(self::FIELD_VARIABLE_EXT, $data)) {
            $value = $data[self::FIELD_VARIABLE] ?? null;
            $ext = (isset($data[self::FIELD_VARIABLE_EXT]) && is_array($data[self::FIELD_VARIABLE_EXT])) ? $data[self::FIELD_VARIABLE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setVariable($value);
                } else if (is_array($value)) {
                    $this->setVariable(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setVariable(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setVariable(new FHIRId($ext));
            } else {
                $this->setVariable(new FHIRId(null));
            }
        }
        if (array_key_exists(self::FIELD_LIST_MODE, $data) || array_key_exists(self::FIELD_LIST_MODE_EXT, $data)) {
            $value = $data[self::FIELD_LIST_MODE] ?? null;
            $ext = (isset($data[self::FIELD_LIST_MODE_EXT]) && is_array($data[self::FIELD_LIST_MODE_EXT])) ? $data[self::FIELD_LIST_MODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRStructureMapTargetListMode) {
                    $this->addListMode($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRStructureMapTargetListMode) {
                            $this->addListMode($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addListMode(new FHIRStructureMapTargetListMode(array_merge($v, $iext)));
                            } else {
                                $this->addListMode(new FHIRStructureMapTargetListMode([FHIRStructureMapTargetListMode::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addListMode(new FHIRStructureMapTargetListMode(array_merge($ext, $value)));
                } else {
                    $this->addListMode(new FHIRStructureMapTargetListMode([FHIRStructureMapTargetListMode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addListMode(new FHIRStructureMapTargetListMode($iext));
                }
            } else {
                $this->addListMode(new FHIRStructureMapTargetListMode(null));
            }
        }
        if (array_key_exists(self::FIELD_LIST_RULE_ID, $data) || array_key_exists(self::FIELD_LIST_RULE_ID_EXT, $data)) {
            $value = $data[self::FIELD_LIST_RULE_ID] ?? null;
            $ext = (isset($data[self::FIELD_LIST_RULE_ID_EXT]) && is_array($data[self::FIELD_LIST_RULE_ID_EXT])) ? $data[self::FIELD_LIST_RULE_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setListRuleId($value);
                } else if (is_array($value)) {
                    $this->setListRuleId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setListRuleId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setListRuleId(new FHIRId($ext));
            } else {
                $this->setListRuleId(new FHIRId(null));
            }
        }
        if (array_key_exists(self::FIELD_TRANSFORM, $data) || array_key_exists(self::FIELD_TRANSFORM_EXT, $data)) {
            $value = $data[self::FIELD_TRANSFORM] ?? null;
            $ext = (isset($data[self::FIELD_TRANSFORM_EXT]) && is_array($data[self::FIELD_TRANSFORM_EXT])) ? $data[self::FIELD_TRANSFORM_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRStructureMapTransform) {
                    $this->setTransform($value);
                } else if (is_array($value)) {
                    $this->setTransform(new FHIRStructureMapTransform(array_merge($ext, $value)));
                } else {
                    $this->setTransform(new FHIRStructureMapTransform([FHIRStructureMapTransform::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTransform(new FHIRStructureMapTransform($ext));
            } else {
                $this->setTransform(new FHIRStructureMapTransform(null));
            }
        }
        if (array_key_exists(self::FIELD_PARAMETER, $data)) {
            if (is_array($data[self::FIELD_PARAMETER])) {
                foreach($data[self::FIELD_PARAMETER] as $v) {
                    if ($v instanceof FHIRStructureMapParameter) {
                        $this->addParameter($v);
                    } else {
                        $this->addParameter(new FHIRStructureMapParameter($v));
                    }
                }
            } elseif ($data[self::FIELD_PARAMETER] instanceof FHIRStructureMapParameter) {
                $this->addParameter($data[self::FIELD_PARAMETER]);
            } else {
                $this->addParameter(new FHIRStructureMapParameter($data[self::FIELD_PARAMETER]));
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
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Type or variable this rule applies to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    public function getContext(): null|FHIRId
    {
        return $this->context;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $context
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setContext(null|string|FHIRIdPrimitive|FHIRId $context = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $context && !($context instanceof FHIRId)) {
            $context = new FHIRId($context);
        }
        $this->_trackValueSet($this->context, $context);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_CONTEXT])) {
            $this->_primitiveXmlLocations[self::FIELD_CONTEXT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_CONTEXT][0] = $xmlLocation;
        $this->context = $context;
        return $this;
    }

    /**
     * How to interpret the context
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How to interpret the context.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapContextType
     */
    public function getContextType(): null|FHIRStructureMapContextType
    {
        return $this->contextType;
    }

    /**
     * How to interpret the context
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How to interpret the context.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapContextType $contextType
     * @return static
     */
    public function setContextType(null|FHIRStructureMapContextType $contextType = null): self
    {
        if (null === $contextType) {
            $contextType = new FHIRStructureMapContextType();
        }
        $this->_trackValueSet($this->contextType, $contextType);
        $this->contextType = $contextType;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Field to create in the context.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getElement(): null|FHIRString
    {
        return $this->element;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Field to create in the context.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $element
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setElement(null|string|FHIRStringPrimitive|FHIRString $element = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $element && !($element instanceof FHIRString)) {
            $element = new FHIRString($element);
        }
        $this->_trackValueSet($this->element, $element);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_ELEMENT])) {
            $this->_primitiveXmlLocations[self::FIELD_ELEMENT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_ELEMENT][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    public function getVariable(): null|FHIRId
    {
        return $this->variable;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $variable
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setVariable(null|string|FHIRIdPrimitive|FHIRId $variable = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $variable && !($variable instanceof FHIRId)) {
            $variable = new FHIRId($variable);
        }
        $this->_trackValueSet($this->variable, $variable);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_VARIABLE])) {
            $this->_primitiveXmlLocations[self::FIELD_VARIABLE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_VARIABLE][0] = $xmlLocation;
        $this->variable = $variable;
        return $this;
    }

    /**
     * If field is a list, how to manage the production
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If field is a list, how to manage the list.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapTargetListMode[]
     */
    public function getListMode(): null|array
    {
        return $this->listMode;
    }

    /**
     * If field is a list, how to manage the production
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If field is a list, how to manage the list.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapTargetListMode $listMode
     * @return static
     */
    public function addListMode(null|FHIRStructureMapTargetListMode $listMode = null): self
    {
        if (null === $listMode) {
            $listMode = new FHIRStructureMapTargetListMode();
        }
        $this->_trackValueAdded();
        $this->listMode[] = $listMode;
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    public function getListRuleId(): null|FHIRId
    {
        return $this->listRuleId;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $listRuleId
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setListRuleId(null|string|FHIRIdPrimitive|FHIRId $listRuleId = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $listRuleId && !($listRuleId instanceof FHIRId)) {
            $listRuleId = new FHIRId($listRuleId);
        }
        $this->_trackValueSet($this->listRuleId, $listRuleId);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_LIST_RULE_ID])) {
            $this->_primitiveXmlLocations[self::FIELD_LIST_RULE_ID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_LIST_RULE_ID][0] = $xmlLocation;
        $this->listRuleId = $listRuleId;
        return $this;
    }

    /**
     * How data is copied/created
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the data is copied / created.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapTransform
     */
    public function getTransform(): null|FHIRStructureMapTransform
    {
        return $this->transform;
    }

    /**
     * How data is copied/created
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the data is copied / created.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapTransform $transform
     * @return static
     */
    public function setTransform(null|FHIRStructureMapTransform $transform = null): self
    {
        if (null === $transform) {
            $transform = new FHIRStructureMapTransform();
        }
        $this->_trackValueSet($this->transform, $transform);
        $this->transform = $transform;
        return $this;
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * Parameters to the transform.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter[]
     */
    public function getParameter(): null|array
    {
        return $this->parameter;
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * Parameters to the transform.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter $parameter
     * @return static
     */
    public function addParameter(null|FHIRStructureMapParameter $parameter = null): self
    {
        if (null === $parameter) {
            $parameter = new FHIRStructureMapParameter();
        }
        $this->_trackValueAdded();
        $this->parameter[] = $parameter;
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
        if (null !== ($v = $this->getContext())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTEXT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getContextType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTEXT_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getElement())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ELEMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVariable())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VARIABLE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getListMode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LIST_MODE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getListRuleId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LIST_RULE_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTransform())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TRANSFORM] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getParameter())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PARAMETER, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTEXT])) {
            $v = $this->getContext();
            foreach($validationRules[self::FIELD_CONTEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_TARGET, self::FIELD_CONTEXT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_TARGET, self::FIELD_CONTEXT_TYPE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_TARGET, self::FIELD_ELEMENT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_TARGET, self::FIELD_VARIABLE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_TARGET, self::FIELD_LIST_MODE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_TARGET, self::FIELD_LIST_RULE_ID, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_TARGET, self::FIELD_TRANSFORM, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_TARGET, self::FIELD_PARAMETER, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget
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
        } else if (!($type instanceof FHIRStructureMapTarget)) {
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
            if (self::FIELD_CONTEXT === $childName) {
                $type->setContext(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CONTEXT_TYPE === $childName) {
                $type->setContextType(FHIRStructureMapContextType::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ELEMENT === $childName) {
                $type->setElement(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VARIABLE === $childName) {
                $type->setVariable(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LIST_MODE === $childName) {
                $type->addListMode(FHIRStructureMapTargetListMode::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_LIST_RULE_ID === $childName) {
                $type->setListRuleId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TRANSFORM === $childName) {
                $type->setTransform(FHIRStructureMapTransform::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PARAMETER === $childName) {
                $type->addParameter(FHIRStructureMapParameter::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_CONTEXT])) {
            $pt = $type->getContext();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CONTEXT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setContext((string)$attributes[self::FIELD_CONTEXT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ELEMENT])) {
            $pt = $type->getElement();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ELEMENT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setElement((string)$attributes[self::FIELD_ELEMENT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VARIABLE])) {
            $pt = $type->getVariable();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VARIABLE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setVariable((string)$attributes[self::FIELD_VARIABLE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LIST_RULE_ID])) {
            $pt = $type->getListRuleId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LIST_RULE_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setListRuleId((string)$attributes[self::FIELD_LIST_RULE_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'StructureMapTarget', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_CONTEXT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getContext())) {
            $xw->writeAttribute(self::FIELD_CONTEXT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ELEMENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getElement())) {
            $xw->writeAttribute(self::FIELD_ELEMENT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VARIABLE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getVariable())) {
            $xw->writeAttribute(self::FIELD_VARIABLE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_LIST_RULE_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getListRuleId())) {
            $xw->writeAttribute(self::FIELD_LIST_RULE_ID, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_CONTEXT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getContext())) {
            $xw->startElement(self::FIELD_CONTEXT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getContextType())) {
            $xw->startElement(self::FIELD_CONTEXT_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ELEMENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getElement())) {
            $xw->startElement(self::FIELD_ELEMENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_VARIABLE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getVariable())) {
            $xw->startElement(self::FIELD_VARIABLE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getListMode() as $v) {
            $xw->startElement(self::FIELD_LIST_MODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_LIST_RULE_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getListRuleId())) {
            $xw->startElement(self::FIELD_LIST_RULE_ID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getTransform())) {
            $xw->startElement(self::FIELD_TRANSFORM);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getParameter() as $v) {
            $xw->startElement(self::FIELD_PARAMETER);
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
        if (null !== ($v = $this->getContext())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CONTEXT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRId::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONTEXT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getContextType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CONTEXT_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRStructureMapContextType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONTEXT_TYPE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getElement())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ELEMENT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ELEMENT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getVariable())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VARIABLE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRId::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VARIABLE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getListMode())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRStructureMapTargetListMode::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_LIST_MODE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LIST_MODE_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getListRuleId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LIST_RULE_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRId::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LIST_RULE_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getTransform())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TRANSFORM} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRStructureMapTransform::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TRANSFORM_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getParameter())) {
            $out->{self::FIELD_PARAMETER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PARAMETER}[] = $v;
            }
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