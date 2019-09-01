<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 1st, 2019 15:45+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRStructureMapContextType;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRStructureMapTargetListMode;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRStructureMapTransform;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * A Map of relationships between 2 structures that can be used to transform data.
 *
 * Class FHIRStructureMapTarget
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap
 */
class FHIRStructureMapTarget extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_TARGET;

    const FIELD_CONTEXT = 'context';
    const FIELD_CONTEXT_EXT = '_context';
    const FIELD_CONTEXT_TYPE = 'contextType';
    const FIELD_ELEMENT = 'element';
    const FIELD_ELEMENT_EXT = '_element';
    const FIELD_LIST_MODE = 'listMode';
    const FIELD_LIST_RULE_ID = 'listRuleId';
    const FIELD_LIST_RULE_ID_EXT = '_listRuleId';
    const FIELD_PARAMETER = 'parameter';
    const FIELD_TRANSFORM = 'transform';
    const FIELD_VARIABLE = 'variable';
    const FIELD_VARIABLE_EXT = '_variable';

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Type or variable this rule applies to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    private $context = null;

    /**
     * How to interpret the context.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How to interpret the context.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRStructureMapContextType
     */
    private $contextType = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Field to create in the context.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $element = null;

    /**
     * If field is a list, how to manage the production.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If field is a list, how to manage the list.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRStructureMapTargetListMode[]
     */
    private $listMode = [];

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Internal rule reference for shared list items.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    private $listRuleId = null;

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * Parameters to the transform.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter[]
     */
    private $parameter = [];

    /**
     * How data is copied/created.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How the data is copied / created.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRStructureMapTransform
     */
    private $transform = null;

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Named context for field, if desired, and a field is specified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    private $variable = null;

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
        if (isset($data[self::FIELD_CONTEXT])) {
            $ext = (isset($data[self::FIELD_CONTEXT_EXT]) && is_array($data[self::FIELD_CONTEXT_EXT]))
                ? $data[self::FIELD_CONTEXT_EXT]
                : null;
            if ($data[self::FIELD_CONTEXT] instanceof FHIRId) {
                $this->setContext($data[self::FIELD_CONTEXT]);
            } elseif ($ext && is_scalar($data[self::FIELD_CONTEXT])) {
                $this->setContext(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_CONTEXT]] + $ext));
            } else {
                $this->setContext(new FHIRId($data[self::FIELD_CONTEXT]));
            }
        }
        if (isset($data[self::FIELD_CONTEXT_TYPE])) {
            if ($data[self::FIELD_CONTEXT_TYPE] instanceof FHIRStructureMapContextType) {
                $this->setContextType($data[self::FIELD_CONTEXT_TYPE]);
            } else {
                $this->setContextType(new FHIRStructureMapContextType($data[self::FIELD_CONTEXT_TYPE]));
            }
        }
        if (isset($data[self::FIELD_ELEMENT])) {
            $ext = (isset($data[self::FIELD_ELEMENT_EXT]) && is_array($data[self::FIELD_ELEMENT_EXT]))
                ? $data[self::FIELD_ELEMENT_EXT]
                : null;
            if ($data[self::FIELD_ELEMENT] instanceof FHIRString) {
                $this->setElement($data[self::FIELD_ELEMENT]);
            } elseif ($ext && is_scalar($data[self::FIELD_ELEMENT])) {
                $this->setElement(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_ELEMENT]] + $ext));
            } else {
                $this->setElement(new FHIRString($data[self::FIELD_ELEMENT]));
            }
        }
        if (isset($data[self::FIELD_LIST_MODE])) {
            if (is_array($data[self::FIELD_LIST_MODE])) {
                foreach($data[self::FIELD_LIST_MODE] as $v) {
                    if ($v instanceof FHIRStructureMapTargetListMode) {
                        $this->addListMode($v);
                    } else {
                        $this->addListMode(new FHIRStructureMapTargetListMode($v));
                    }
                }
            } else if ($data[self::FIELD_LIST_MODE] instanceof FHIRStructureMapTargetListMode) {
                $this->addListMode($data[self::FIELD_LIST_MODE]);
            } else {
                $this->addListMode(new FHIRStructureMapTargetListMode($data[self::FIELD_LIST_MODE]));
            }
        }
        if (isset($data[self::FIELD_LIST_RULE_ID])) {
            $ext = (isset($data[self::FIELD_LIST_RULE_ID_EXT]) && is_array($data[self::FIELD_LIST_RULE_ID_EXT]))
                ? $data[self::FIELD_LIST_RULE_ID_EXT]
                : null;
            if ($data[self::FIELD_LIST_RULE_ID] instanceof FHIRId) {
                $this->setListRuleId($data[self::FIELD_LIST_RULE_ID]);
            } elseif ($ext && is_scalar($data[self::FIELD_LIST_RULE_ID])) {
                $this->setListRuleId(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_LIST_RULE_ID]] + $ext));
            } else {
                $this->setListRuleId(new FHIRId($data[self::FIELD_LIST_RULE_ID]));
            }
        }
        if (isset($data[self::FIELD_PARAMETER])) {
            if (is_array($data[self::FIELD_PARAMETER])) {
                foreach($data[self::FIELD_PARAMETER] as $v) {
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
        if (isset($data[self::FIELD_TRANSFORM])) {
            if ($data[self::FIELD_TRANSFORM] instanceof FHIRStructureMapTransform) {
                $this->setTransform($data[self::FIELD_TRANSFORM]);
            } else {
                $this->setTransform(new FHIRStructureMapTransform($data[self::FIELD_TRANSFORM]));
            }
        }
        if (isset($data[self::FIELD_VARIABLE])) {
            $ext = (isset($data[self::FIELD_VARIABLE_EXT]) && is_array($data[self::FIELD_VARIABLE_EXT]))
                ? $data[self::FIELD_VARIABLE_EXT]
                : null;
            if ($data[self::FIELD_VARIABLE] instanceof FHIRId) {
                $this->setVariable($data[self::FIELD_VARIABLE]);
            } elseif ($ext && is_scalar($data[self::FIELD_VARIABLE])) {
                $this->setVariable(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_VARIABLE]] + $ext));
            } else {
                $this->setVariable(new FHIRId($data[self::FIELD_VARIABLE]));
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
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Type or variable this rule applies to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRId
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Type or variable this rule applies to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRId $context
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget
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
     * How to interpret the context.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How to interpret the context.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRStructureMapContextType
     */
    public function getContextType()
    {
        return $this->contextType;
    }

    /**
     * How to interpret the context.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How to interpret the context.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRStructureMapContextType $contextType
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget
     */
    public function setContextType(FHIRStructureMapContextType $contextType = null)
    {
        $this->contextType = $contextType;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Field to create in the context.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Field to create in the context.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $element
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget
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
     * If field is a list, how to manage the production.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If field is a list, how to manage the list.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRStructureMapTargetListMode[]
     */
    public function getListMode()
    {
        return $this->listMode;
    }

    /**
     * If field is a list, how to manage the production.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If field is a list, how to manage the list.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRStructureMapTargetListMode $listMode
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget
     */
    public function addListMode(FHIRStructureMapTargetListMode $listMode = null)
    {
        $this->listMode[] = $listMode;
        return $this;
    }

    /**
     * If field is a list, how to manage the production.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * If field is a list, how to manage the list.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRStructureMapTargetListMode[] $listMode
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Internal rule reference for shared list items.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRId
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Internal rule reference for shared list items.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRId $listRuleId
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget
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
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter $parameter
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget
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
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter[] $parameter
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget
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
     * How data is copied/created.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How the data is copied / created.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRStructureMapTransform
     */
    public function getTransform()
    {
        return $this->transform;
    }

    /**
     * How data is copied/created.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * How the data is copied / created.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRStructureMapTransform $transform
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Named context for field, if desired, and a field is specified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRId
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Named context for field, if desired, and a field is specified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRId $variable
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget
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
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget
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
                throw new \DomainException(sprintf('FHIRStructureMapTarget::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRStructureMapTarget::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRStructureMapTarget);
        } elseif (!is_object($type) || !($type instanceof FHIRStructureMapTarget)) {
            throw new \RuntimeException(sprintf(
                'FHIRStructureMapTarget::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->context)) {
            $type->setContext((string)$attributes->context);
        }
        if (isset($children->context)) {
            $type->setContext(FHIRId::xmlUnserialize($children->context));
        }
        if (isset($children->contextType)) {
            $type->setContextType(FHIRStructureMapContextType::xmlUnserialize($children->contextType));
        }
        if (isset($attributes->element)) {
            $type->setElement((string)$attributes->element);
        }
        if (isset($children->element)) {
            $type->setElement(FHIRString::xmlUnserialize($children->element));
        }
        if (isset($children->listMode)) {
            foreach($children->listMode as $child) {
                $type->addListMode(FHIRStructureMapTargetListMode::xmlUnserialize($child));
            }
        }
        if (isset($attributes->listRuleId)) {
            $type->setListRuleId((string)$attributes->listRuleId);
        }
        if (isset($children->listRuleId)) {
            $type->setListRuleId(FHIRId::xmlUnserialize($children->listRuleId));
        }
        if (isset($children->parameter)) {
            foreach($children->parameter as $child) {
                $type->addParameter(FHIRStructureMapParameter::xmlUnserialize($child));
            }
        }
        if (isset($children->transform)) {
            $type->setTransform(FHIRStructureMapTransform::xmlUnserialize($children->transform));
        }
        if (isset($attributes->variable)) {
            $type->setVariable((string)$attributes->variable);
        }
        if (isset($children->variable)) {
            $type->setVariable(FHIRId::xmlUnserialize($children->variable));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<StructureMapTarget xmlns="http://hl7.org/fhir"></StructureMapTarget>');
        }
        if (null !== ($v = $this->getContext())) {
            $sxe->addAttribute(self::FIELD_CONTEXT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTEXT));
            }
        }
        if (null !== ($v = $this->getContextType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTEXT_TYPE));
        }
        if (null !== ($v = $this->getElement())) {
            $sxe->addAttribute(self::FIELD_ELEMENT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_ELEMENT));
            }
        }
        if ([] !== ($vs = $this->getListMode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LIST_MODE));
            }
        }
        if (null !== ($v = $this->getListRuleId())) {
            $sxe->addAttribute(self::FIELD_LIST_RULE_ID, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_LIST_RULE_ID));
            }
        }
        if ([] !== ($vs = $this->getParameter())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PARAMETER));
            }
        }
        if (null !== ($v = $this->getTransform())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TRANSFORM));
        }
        if (null !== ($v = $this->getVariable())) {
            $sxe->addAttribute(self::FIELD_VARIABLE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_VARIABLE));
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
        if (null !== ($v = $this->getContext())) {
            $a[self::FIELD_CONTEXT] = (string)$v;
            $a[self::FIELD_CONTEXT_EXT] = $v;
        }
        if (null !== ($v = $this->getContextType())) {
            $a[self::FIELD_CONTEXT_TYPE] = $v;
        }
        if (null !== ($v = $this->getElement())) {
            $a[self::FIELD_ELEMENT] = (string)$v;
            $a[self::FIELD_ELEMENT_EXT] = $v;
        }
        if ([] !== ($vs = $this->getListMode())) {
            $a[self::FIELD_LIST_MODE] = $vs;
        }
        if (null !== ($v = $this->getListRuleId())) {
            $a[self::FIELD_LIST_RULE_ID] = (string)$v;
            $a[self::FIELD_LIST_RULE_ID_EXT] = $v;
        }
        if ([] !== ($vs = $this->getParameter())) {
            $a[self::FIELD_PARAMETER] = $vs;
        }
        if (null !== ($v = $this->getTransform())) {
            $a[self::FIELD_TRANSFORM] = $v;
        }
        if (null !== ($v = $this->getVariable())) {
            $a[self::FIELD_VARIABLE] = (string)$v;
            $a[self::FIELD_VARIABLE_EXT] = $v;
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