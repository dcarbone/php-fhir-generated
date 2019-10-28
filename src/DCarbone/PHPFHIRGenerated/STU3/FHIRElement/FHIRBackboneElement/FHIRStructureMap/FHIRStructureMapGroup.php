<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 28th, 2019 20:54+0000
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
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapGroupTypeMode;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A Map of relationships between 2 structures that can be used to transform data.
 *
 * Class FHIRStructureMapGroup
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap
 */
class FHIRStructureMapGroup extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_GROUP;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_DOCUMENTATION = 'documentation';
    const FIELD_DOCUMENTATION_EXT = '_documentation';
    const FIELD_EXTENDS = 'extends';
    const FIELD_EXTENDS_EXT = '_extends';
    const FIELD_INPUT = 'input';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_RULE = 'rule';
    const FIELD_TYPE_MODE = 'typeMode';
    const FIELD_TYPE_MODE_EXT = '_typeMode';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional supporting documentation that explains the purpose of the group and
     * the types of mappings within it.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $documentation = null;

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Another group that this group adds rules to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    protected $extends = null;

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * A name assigned to an instance of data. The instance must be provided when the
     * mapping is invoked.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapInput[]
     */
    protected $input = [];

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A unique name for the group for the convenience of human readers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    protected $name = null;

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * Transform Rule from source to target.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapRule[]
     */
    protected $rule = [];

    /**
     * If this is the default rule set to apply for the source type, or this
     * combination of types
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If this is the default rule set to apply for thie source type, or this
     * combination of types.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapGroupTypeMode
     */
    protected $typeMode = null;

    /**
     * FHIRStructureMapGroup Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapGroup::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DOCUMENTATION])) {
            $ext = (isset($data[self::FIELD_DOCUMENTATION_EXT]) && is_array($data[self::FIELD_DOCUMENTATION_EXT]))
                ? $data[self::FIELD_DOCUMENTATION_EXT]
                : null;
            if ($data[self::FIELD_DOCUMENTATION] instanceof FHIRString) {
                $this->setDocumentation($data[self::FIELD_DOCUMENTATION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DOCUMENTATION])) {
                $this->setDocumentation(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DOCUMENTATION]] + $ext));
            } else {
                $this->setDocumentation(new FHIRString($data[self::FIELD_DOCUMENTATION]));
            }
        }
        if (isset($data[self::FIELD_EXTENDS])) {
            $ext = (isset($data[self::FIELD_EXTENDS_EXT]) && is_array($data[self::FIELD_EXTENDS_EXT]))
                ? $data[self::FIELD_EXTENDS_EXT]
                : null;
            if ($data[self::FIELD_EXTENDS] instanceof FHIRId) {
                $this->setExtends($data[self::FIELD_EXTENDS]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXTENDS])) {
                $this->setExtends(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_EXTENDS]] + $ext));
            } else {
                $this->setExtends(new FHIRId($data[self::FIELD_EXTENDS]));
            }
        }
        if (isset($data[self::FIELD_INPUT])) {
            if (is_array($data[self::FIELD_INPUT])) {
                foreach($data[self::FIELD_INPUT] as $v) {
                    if ($v instanceof FHIRStructureMapInput) {
                        $this->addInput($v);
                    } else {
                        $this->addInput(new FHIRStructureMapInput($v));
                    }
                }
            } else if ($data[self::FIELD_INPUT] instanceof FHIRStructureMapInput) {
                $this->addInput($data[self::FIELD_INPUT]);
            } else {
                $this->addInput(new FHIRStructureMapInput($data[self::FIELD_INPUT]));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT]))
                ? $data[self::FIELD_NAME_EXT]
                : null;
            if ($data[self::FIELD_NAME] instanceof FHIRId) {
                $this->setName($data[self::FIELD_NAME]);
            } elseif ($ext && is_scalar($data[self::FIELD_NAME])) {
                $this->setName(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_NAME]] + $ext));
            } else {
                $this->setName(new FHIRId($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_RULE])) {
            if (is_array($data[self::FIELD_RULE])) {
                foreach($data[self::FIELD_RULE] as $v) {
                    if ($v instanceof FHIRStructureMapRule) {
                        $this->addRule($v);
                    } else {
                        $this->addRule(new FHIRStructureMapRule($v));
                    }
                }
            } else if ($data[self::FIELD_RULE] instanceof FHIRStructureMapRule) {
                $this->addRule($data[self::FIELD_RULE]);
            } else {
                $this->addRule(new FHIRStructureMapRule($data[self::FIELD_RULE]));
            }
        }
        if (isset($data[self::FIELD_TYPE_MODE])) {
            $ext = (isset($data[self::FIELD_TYPE_MODE_EXT]) && is_array($data[self::FIELD_TYPE_MODE_EXT]))
                ? $data[self::FIELD_TYPE_MODE_EXT]
                : null;
            if ($data[self::FIELD_TYPE_MODE] instanceof FHIRStructureMapGroupTypeMode) {
                $this->setTypeMode($data[self::FIELD_TYPE_MODE]);
            } elseif ($ext && is_scalar($data[self::FIELD_TYPE_MODE])) {
                $this->setTypeMode(new FHIRStructureMapGroupTypeMode([FHIRStructureMapGroupTypeMode::FIELD_VALUE => $data[self::FIELD_TYPE_MODE]] + $ext));
            } else {
                $this->setTypeMode(new FHIRStructureMapGroupTypeMode($data[self::FIELD_TYPE_MODE]));
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return static
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
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
        return "<StructureMapGroup{$xmlns}></StructureMapGroup>";
    }


    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional supporting documentation that explains the purpose of the group and
     * the types of mappings within it.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional supporting documentation that explains the purpose of the group and
     * the types of mappings within it.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $documentation
     * @return static
     */
    public function setDocumentation($documentation = null)
    {
        if (null === $documentation) {
            $this->documentation = null;
            return $this;
        }
        if ($documentation instanceof FHIRString) {
            $this->documentation = $documentation;
            return $this;
        }
        $this->documentation = new FHIRString($documentation);
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
     * Another group that this group adds rules to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    public function getExtends()
    {
        return $this->extends;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Another group that this group adds rules to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $extends
     * @return static
     */
    public function setExtends($extends = null)
    {
        if (null === $extends) {
            $this->extends = null;
            return $this;
        }
        if ($extends instanceof FHIRId) {
            $this->extends = $extends;
            return $this;
        }
        $this->extends = new FHIRId($extends);
        return $this;
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * A name assigned to an instance of data. The instance must be provided when the
     * mapping is invoked.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapInput[]
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * A name assigned to an instance of data. The instance must be provided when the
     * mapping is invoked.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapInput $input
     * @return static
     */
    public function addInput(FHIRStructureMapInput $input = null)
    {
        $this->input[] = $input;
        return $this;
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * A name assigned to an instance of data. The instance must be provided when the
     * mapping is invoked.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapInput[] $input
     * @return static
     */
    public function setInput(array $input = [])
    {
        $this->input = [];
        if ([] === $input) {
            return $this;
        }
        foreach($input as $v) {
            if ($v instanceof FHIRStructureMapInput) {
                $this->addInput($v);
            } else {
                $this->addInput(new FHIRStructureMapInput($v));
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
     * A unique name for the group for the convenience of human readers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A unique name for the group for the convenience of human readers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $name
     * @return static
     */
    public function setName($name = null)
    {
        if (null === $name) {
            $this->name = null;
            return $this;
        }
        if ($name instanceof FHIRId) {
            $this->name = $name;
            return $this;
        }
        $this->name = new FHIRId($name);
        return $this;
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * Transform Rule from source to target.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapRule[]
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * Transform Rule from source to target.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapRule $rule
     * @return static
     */
    public function addRule(FHIRStructureMapRule $rule = null)
    {
        $this->rule[] = $rule;
        return $this;
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * Transform Rule from source to target.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapRule[] $rule
     * @return static
     */
    public function setRule(array $rule = [])
    {
        $this->rule = [];
        if ([] === $rule) {
            return $this;
        }
        foreach($rule as $v) {
            if ($v instanceof FHIRStructureMapRule) {
                $this->addRule($v);
            } else {
                $this->addRule(new FHIRStructureMapRule($v));
            }
        }
        return $this;
    }

    /**
     * If this is the default rule set to apply for the source type, or this
     * combination of types
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If this is the default rule set to apply for thie source type, or this
     * combination of types.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapGroupTypeMode
     */
    public function getTypeMode()
    {
        return $this->typeMode;
    }

    /**
     * If this is the default rule set to apply for the source type, or this
     * combination of types
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If this is the default rule set to apply for thie source type, or this
     * combination of types.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapGroupTypeMode $typeMode
     * @return static
     */
    public function setTypeMode(FHIRStructureMapGroupTypeMode $typeMode = null)
    {
        $this->typeMode = $typeMode;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapGroup $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapGroup
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
                throw new \DomainException(sprintf('FHIRStructureMapGroup::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRStructureMapGroup::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRStructureMapGroup;
        } elseif (!is_object($type) || !($type instanceof FHIRStructureMapGroup)) {
            throw new \RuntimeException(sprintf(
                'FHIRStructureMapGroup::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapGroup or null, %s seen.',
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
        if (isset($attributes->documentation)) {
            $type->setDocumentation((string)$attributes->documentation);
        }
        if (isset($children->documentation)) {
            $type->setDocumentation(FHIRString::xmlUnserialize($children->documentation));
        }
        if (isset($attributes->extends)) {
            $type->setExtends((string)$attributes->extends);
        }
        if (isset($children->extends)) {
            $type->setExtends(FHIRId::xmlUnserialize($children->extends));
        }
        if (isset($children->input)) {
            foreach($children->input as $child) {
                $type->addInput(FHIRStructureMapInput::xmlUnserialize($child));
            }
        }
        if (isset($attributes->name)) {
            $type->setName((string)$attributes->name);
        }
        if (isset($children->name)) {
            $type->setName(FHIRId::xmlUnserialize($children->name));
        }
        if (isset($children->rule)) {
            foreach($children->rule as $child) {
                $type->addRule(FHIRStructureMapRule::xmlUnserialize($child));
            }
        }
        if (isset($children->typeMode)) {
            $type->setTypeMode(FHIRStructureMapGroupTypeMode::xmlUnserialize($children->typeMode));
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
        if (null !== ($v = $this->getDocumentation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DOCUMENTATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExtends())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXTENDS, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getInput())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INPUT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getRule())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RULE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getTypeMode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE_MODE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getDocumentation())) {
            $a[self::FIELD_DOCUMENTATION] = $v->getValue();
            $a[self::FIELD_DOCUMENTATION_EXT] = $v;
        }
        if (null !== ($v = $this->getExtends())) {
            $a[self::FIELD_EXTENDS] = $v->getValue();
            $a[self::FIELD_EXTENDS_EXT] = $v;
        }
        if ([] !== ($vs = $this->getInput())) {
            $a[self::FIELD_INPUT] = $vs;
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = $v->getValue();
            $a[self::FIELD_NAME_EXT] = $v;
        }
        if ([] !== ($vs = $this->getRule())) {
            $a[self::FIELD_RULE] = $vs;
        }
        if (null !== ($v = $this->getTypeMode())) {
            $a[self::FIELD_TYPE_MODE] = $v;
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