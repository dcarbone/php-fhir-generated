<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapContextType;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapTargetListMode;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapTransform;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

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
    const FIELD_LIST_MODE = 'listMode';
    const FIELD_LIST_MODE_EXT = '_listMode';
    const FIELD_LIST_RULE_ID = 'listRuleId';
    const FIELD_LIST_RULE_ID_EXT = '_listRuleId';
    const FIELD_PARAMETER = 'parameter';
    const FIELD_TRANSFORM = 'transform';
    const FIELD_TRANSFORM_EXT = '_transform';
    const FIELD_VARIABLE = 'variable';
    const FIELD_VARIABLE_EXT = '_variable';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

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
    protected $context = null;

    /**
     * How to interpret the context
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How to interpret the context.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapContextType
     */
    protected $contextType = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Field to create in the context.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $element = null;

    /**
     * If field is a list, how to manage the production
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If field is a list, how to manage the list.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapTargetListMode[]
     */
    protected $listMode = [];

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
    protected $listRuleId = null;

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * Parameters to the transform.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter[]
     */
    protected $parameter = [];

    /**
     * How data is copied/created
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the data is copied / created.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapTransform
     */
    protected $transform = null;

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
    protected $variable = null;

    /**
     * Validation map for fields in type StructureMap.Target
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRStructureMapTarget Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapTarget::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CONTEXT]) || isset($data[self::FIELD_CONTEXT_EXT])) {
            if (isset($data[self::FIELD_CONTEXT])) {
                $value = $data[self::FIELD_CONTEXT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CONTEXT_EXT]) && is_array($data[self::FIELD_CONTEXT_EXT])) {
                $ext = $data[self::FIELD_CONTEXT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setContext($value);
                } else if (is_array($value)) {
                    $this->setContext(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setContext(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setContext(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_CONTEXT_TYPE]) || isset($data[self::FIELD_CONTEXT_TYPE_EXT])) {
            if (isset($data[self::FIELD_CONTEXT_TYPE])) {
                $value = $data[self::FIELD_CONTEXT_TYPE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CONTEXT_TYPE_EXT]) && is_array($data[self::FIELD_CONTEXT_TYPE_EXT])) {
                $ext = $data[self::FIELD_CONTEXT_TYPE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRStructureMapContextType) {
                    $this->setContextType($value);
                } else if (is_array($value)) {
                    $this->setContextType(new FHIRStructureMapContextType(array_merge($ext, $value)));
                } else {
                    $this->setContextType(new FHIRStructureMapContextType([FHIRStructureMapContextType::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setContextType(new FHIRStructureMapContextType($ext));
            }
        }
        if (isset($data[self::FIELD_ELEMENT]) || isset($data[self::FIELD_ELEMENT_EXT])) {
            if (isset($data[self::FIELD_ELEMENT])) {
                $value = $data[self::FIELD_ELEMENT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ELEMENT_EXT]) && is_array($data[self::FIELD_ELEMENT_EXT])) {
                $ext = $data[self::FIELD_ELEMENT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setElement($value);
                } else if (is_array($value)) {
                    $this->setElement(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setElement(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setElement(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_LIST_MODE]) || isset($data[self::FIELD_LIST_MODE_EXT])) {
            if (isset($data[self::FIELD_LIST_MODE])) {
                $value = $data[self::FIELD_LIST_MODE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LIST_MODE_EXT]) && is_array($data[self::FIELD_LIST_MODE_EXT])) {
                $ext = $data[self::FIELD_LIST_MODE_EXT];
            } else {
                $ext = [];
            }
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
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addListMode(new FHIRStructureMapTargetListMode($iext));
                }
            }
        }
        if (isset($data[self::FIELD_LIST_RULE_ID]) || isset($data[self::FIELD_LIST_RULE_ID_EXT])) {
            if (isset($data[self::FIELD_LIST_RULE_ID])) {
                $value = $data[self::FIELD_LIST_RULE_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LIST_RULE_ID_EXT]) && is_array($data[self::FIELD_LIST_RULE_ID_EXT])) {
                $ext = $data[self::FIELD_LIST_RULE_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setListRuleId($value);
                } else if (is_array($value)) {
                    $this->setListRuleId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setListRuleId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setListRuleId(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_PARAMETER])) {
            if (is_array($data[self::FIELD_PARAMETER])) {
                foreach($data[self::FIELD_PARAMETER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRStructureMapParameter) {
                        $this->addParameter($v);
                    } else {
                        $this->addParameter(new FHIRStructureMapParameter($v));
                    }
                }
            } else if ($data[self::FIELD_PARAMETER] instanceof FHIRStructureMapParameter) {
                $this->addParameter($data[self::FIELD_PARAMETER]);
            } else {
                $this->addParameter(new FHIRStructureMapParameter($data[self::FIELD_PARAMETER]));
            }
        }
        if (isset($data[self::FIELD_TRANSFORM]) || isset($data[self::FIELD_TRANSFORM_EXT])) {
            if (isset($data[self::FIELD_TRANSFORM])) {
                $value = $data[self::FIELD_TRANSFORM];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TRANSFORM_EXT]) && is_array($data[self::FIELD_TRANSFORM_EXT])) {
                $ext = $data[self::FIELD_TRANSFORM_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRStructureMapTransform) {
                    $this->setTransform($value);
                } else if (is_array($value)) {
                    $this->setTransform(new FHIRStructureMapTransform(array_merge($ext, $value)));
                } else {
                    $this->setTransform(new FHIRStructureMapTransform([FHIRStructureMapTransform::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setTransform(new FHIRStructureMapTransform($ext));
            }
        }
        if (isset($data[self::FIELD_VARIABLE]) || isset($data[self::FIELD_VARIABLE_EXT])) {
            if (isset($data[self::FIELD_VARIABLE])) {
                $value = $data[self::FIELD_VARIABLE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VARIABLE_EXT]) && is_array($data[self::FIELD_VARIABLE_EXT])) {
                $ext = $data[self::FIELD_VARIABLE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setVariable($value);
                } else if (is_array($value)) {
                    $this->setVariable(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setVariable(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setVariable(new FHIRId($ext));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<StructureMapTarget{$xmlns}></StructureMapTarget>";
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
    public function getContext()
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $context
     * @return static
     */
    public function setContext($context = null)
    {
        if (null === $context) {
            $this->context = null;
            return $this;
        }
        if ($context instanceof FHIRId) {
            $this->context = $context;
            return $this;
        }
        $this->context = new FHIRId($context);
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
    public function getContextType()
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
    public function setContextType(FHIRStructureMapContextType $contextType = null)
    {
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
    public function getElement()
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $element
     * @return static
     */
    public function setElement($element = null)
    {
        if (null === $element) {
            $this->element = null;
            return $this;
        }
        if ($element instanceof FHIRString) {
            $this->element = $element;
            return $this;
        }
        $this->element = new FHIRString($element);
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
    public function getListMode()
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
    public function addListMode(FHIRStructureMapTargetListMode $listMode = null)
    {
        $this->listMode[] = $listMode;
        return $this;
    }

    /**
     * If field is a list, how to manage the production
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If field is a list, how to manage the list.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapTargetListMode[] $listMode
     * @return static
     */
    public function setListMode(array $listMode = [])
    {
        $this->listMode = [];
        if ([] === $listMode) {
            return $this;
        }
        foreach($listMode as $v) {
            if ($v instanceof FHIRStructureMapTargetListMode) {
                $this->addListMode($v);
            } else {
                $this->addListMode(new FHIRStructureMapTargetListMode($v));
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    public function getListRuleId()
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $listRuleId
     * @return static
     */
    public function setListRuleId($listRuleId = null)
    {
        if (null === $listRuleId) {
            $this->listRuleId = null;
            return $this;
        }
        if ($listRuleId instanceof FHIRId) {
            $this->listRuleId = $listRuleId;
            return $this;
        }
        $this->listRuleId = new FHIRId($listRuleId);
        return $this;
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * Parameters to the transform.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter[]
     */
    public function getParameter()
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
    public function addParameter(FHIRStructureMapParameter $parameter = null)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * Parameters to the transform.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter[] $parameter
     * @return static
     */
    public function setParameter(array $parameter = [])
    {
        $this->parameter = [];
        if ([] === $parameter) {
            return $this;
        }
        foreach($parameter as $v) {
            if ($v instanceof FHIRStructureMapParameter) {
                $this->addParameter($v);
            } else {
                $this->addParameter(new FHIRStructureMapParameter($v));
            }
        }
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
    public function getTransform()
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
    public function setTransform(FHIRStructureMapTransform $transform = null)
    {
        $this->transform = $transform;
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
    public function getVariable()
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $variable
     * @return static
     */
    public function setVariable($variable = null)
    {
        if (null === $variable) {
            $this->variable = null;
            return $this;
        }
        if ($variable instanceof FHIRId) {
            $this->variable = $variable;
            return $this;
        }
        $this->variable = new FHIRId($variable);
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
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
        if ([] !== ($vs = $this->getParameter())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PARAMETER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getTransform())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TRANSFORM] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVariable())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VARIABLE] = $fieldErrs;
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRStructureMapTarget::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRStructureMapTarget::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRStructureMapTarget;
        } elseif (!is_object($type) || !($type instanceof FHIRStructureMapTarget)) {
            throw new \RuntimeException(sprintf(
                'FHIRStructureMapTarget::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->context)) {
            $type->setContext(FHIRId::xmlUnserialize($children->context));
        }
        if (isset($attributes->context)) {
            $pt = $type->getContext();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->context);
            } else {
                $type->setContext((string)$attributes->context);
            }
        }
        if (isset($children->contextType)) {
            $type->setContextType(FHIRStructureMapContextType::xmlUnserialize($children->contextType));
        }
        if (isset($children->element)) {
            $type->setElement(FHIRString::xmlUnserialize($children->element));
        }
        if (isset($attributes->element)) {
            $pt = $type->getElement();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->element);
            } else {
                $type->setElement((string)$attributes->element);
            }
        }
        if (isset($children->listMode)) {
            foreach($children->listMode as $child) {
                $type->addListMode(FHIRStructureMapTargetListMode::xmlUnserialize($child));
            }
        }
        if (isset($children->listRuleId)) {
            $type->setListRuleId(FHIRId::xmlUnserialize($children->listRuleId));
        }
        if (isset($attributes->listRuleId)) {
            $pt = $type->getListRuleId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->listRuleId);
            } else {
                $type->setListRuleId((string)$attributes->listRuleId);
            }
        }
        if (isset($children->parameter)) {
            foreach($children->parameter as $child) {
                $type->addParameter(FHIRStructureMapParameter::xmlUnserialize($child));
            }
        }
        if (isset($children->transform)) {
            $type->setTransform(FHIRStructureMapTransform::xmlUnserialize($children->transform));
        }
        if (isset($children->variable)) {
            $type->setVariable(FHIRId::xmlUnserialize($children->variable));
        }
        if (isset($attributes->variable)) {
            $pt = $type->getVariable();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->variable);
            } else {
                $type->setVariable((string)$attributes->variable);
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getContext())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTEXT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getContextType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTEXT_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getElement())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ELEMENT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getListMode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LIST_MODE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getListRuleId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LIST_RULE_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getParameter())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PARAMETER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getTransform())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TRANSFORM, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getVariable())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VARIABLE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getContext())) {
            $a[self::FIELD_CONTEXT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRId::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRId::FIELD_VALUE]);
                $a[self::FIELD_CONTEXT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getContextType())) {
            $a[self::FIELD_CONTEXT_TYPE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRStructureMapContextType::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRStructureMapContextType::FIELD_VALUE]);
                $a[self::FIELD_CONTEXT_TYPE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getElement())) {
            $a[self::FIELD_ELEMENT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_ELEMENT_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getListMode())) {
            $a[self::FIELD_LIST_MODE] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_LIST_MODE][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRStructureMapTargetListMode::FIELD_VALUE]) || array_key_exists(FHIRStructureMapTargetListMode::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRStructureMapTargetListMode::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_LIST_MODE_EXT] = $encs;
            }
        }
        if (null !== ($v = $this->getListRuleId())) {
            $a[self::FIELD_LIST_RULE_ID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRId::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRId::FIELD_VALUE]);
                $a[self::FIELD_LIST_RULE_ID_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getParameter())) {
            $a[self::FIELD_PARAMETER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PARAMETER][] = $v;
            }
        }
        if (null !== ($v = $this->getTransform())) {
            $a[self::FIELD_TRANSFORM] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRStructureMapTransform::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRStructureMapTransform::FIELD_VALUE]);
                $a[self::FIELD_TRANSFORM_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getVariable())) {
            $a[self::FIELD_VARIABLE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRId::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRId::FIELD_VALUE]);
                $a[self::FIELD_VARIABLE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}