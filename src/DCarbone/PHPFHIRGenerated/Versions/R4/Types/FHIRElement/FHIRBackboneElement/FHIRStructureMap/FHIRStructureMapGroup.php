<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap;

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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
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
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRStructureMapGroupTypeModeList;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRStructureMapGroupTypeMode;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * A Map of relationships between 2 structures that can be used to transform data.
 */
class FHIRStructureMapGroup extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_STRUCTURE_MAP_DOT_GROUP;

    /* class_default.php:50 */
    public const FIELD_NAME = 'name';
    public const FIELD_NAME_EXT = '_name';
    public const FIELD_EXTENDS = 'extends';
    public const FIELD_EXTENDS_EXT = '_extends';
    public const FIELD_TYPE_MODE = 'typeMode';
    public const FIELD_TYPE_MODE_EXT = '_typeMode';
    public const FIELD_DOCUMENTATION = 'documentation';
    public const FIELD_DOCUMENTATION_EXT = '_documentation';
    public const FIELD_INPUT = 'input';
    public const FIELD_RULE = 'rule';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_NAME => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_TYPE_MODE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_INPUT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_RULE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_NAME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXTENDS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TYPE_MODE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DOCUMENTATION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId 
     */
    protected FHIRId $name;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId 
     */
    protected FHIRId $extends;
    /**
     * If this is the default rule set to apply for the source type, or this
     * combination of types.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If this is the default rule set to apply for the source type or this combination
     * of types.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRStructureMapGroupTypeMode 
     */
    protected FHIRStructureMapGroupTypeMode $typeMode;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional supporting documentation that explains the purpose of the group and
     * the types of mappings within it.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $documentation;
    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * A name assigned to an instance of data. The instance must be provided when the
     * mapping is invoked.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapInput[] 
     */
    protected array $input;
    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * Transform Rule from source to target.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapRule[] 
     */
    protected array $rule;

    /* constructor.php:61 */
    /**
     * FHIRStructureMapGroup Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $name
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $extends
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRStructureMapGroupTypeModeList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRStructureMapGroupTypeMode $typeMode
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $documentation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapInput[] $input
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapRule[] $rule
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRIdPrimitive|FHIRId $name = null,
                                null|string|FHIRIdPrimitive|FHIRId $extends = null,
                                null|string|FHIRStructureMapGroupTypeModeList|FHIRStructureMapGroupTypeMode $typeMode = null,
                                null|string|FHIRStringPrimitive|FHIRString $documentation = null,
                                null|iterable $input = null,
                                null|iterable $rule = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $name) {
            $this->setName($name);
        }
        if (null !== $extends) {
            $this->setExtends($extends);
        }
        if (null !== $typeMode) {
            $this->setTypeMode($typeMode);
        }
        if (null !== $documentation) {
            $this->setDocumentation($documentation);
        }
        if (null !== $input) {
            $this->setInput(...$input);
        }
        if (null !== $rule) {
            $this->setRule(...$rule);
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
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A unique name for the group for the convenience of human readers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId
     */
    public function getName(): null|FHIRId
    {
        return $this->name ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $name
     * @return static
     */
    public function setName(null|string|FHIRIdPrimitive|FHIRId $name): self
    {
        if (null === $name) {
            unset($this->name);
            return $this;
        }
        if (!($name instanceof FHIRId)) {
            $name = new FHIRId(value: $name);
        }
        $this->name = $name;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId
     */
    public function getExtends(): null|FHIRId
    {
        return $this->extends ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $extends
     * @return static
     */
    public function setExtends(null|string|FHIRIdPrimitive|FHIRId $extends): self
    {
        if (null === $extends) {
            unset($this->extends);
            return $this;
        }
        if (!($extends instanceof FHIRId)) {
            $extends = new FHIRId(value: $extends);
        }
        $this->extends = $extends;
        return $this;
    }

    /**
     * If this is the default rule set to apply for the source type, or this
     * combination of types.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If this is the default rule set to apply for the source type or this combination
     * of types.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRStructureMapGroupTypeMode
     */
    public function getTypeMode(): null|FHIRStructureMapGroupTypeMode
    {
        return $this->typeMode ?? null;
    }

    /**
     * If this is the default rule set to apply for the source type, or this
     * combination of types.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If this is the default rule set to apply for the source type or this combination
     * of types.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRStructureMapGroupTypeModeList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRStructureMapGroupTypeMode $typeMode
     * @return static
     */
    public function setTypeMode(null|string|FHIRStructureMapGroupTypeModeList|FHIRStructureMapGroupTypeMode $typeMode): self
    {
        if (null === $typeMode) {
            unset($this->typeMode);
            return $this;
        }
        if (!($typeMode instanceof FHIRStructureMapGroupTypeMode)) {
            $typeMode = new FHIRStructureMapGroupTypeMode(value: $typeMode);
        }
        $this->typeMode = $typeMode;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional supporting documentation that explains the purpose of the group and
     * the types of mappings within it.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getDocumentation(): null|FHIRString
    {
        return $this->documentation ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional supporting documentation that explains the purpose of the group and
     * the types of mappings within it.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $documentation
     * @return static
     */
    public function setDocumentation(null|string|FHIRStringPrimitive|FHIRString $documentation): self
    {
        if (null === $documentation) {
            unset($this->documentation);
            return $this;
        }
        if (!($documentation instanceof FHIRString)) {
            $documentation = new FHIRString(value: $documentation);
        }
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * A name assigned to an instance of data. The instance must be provided when the
     * mapping is invoked.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapInput[]
     */
    public function getInput(): array
    {
        return $this->input ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapInput>
     */
    public function getInputIterator(): iterable
    {
        if (!isset($this->input)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->input);
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * A name assigned to an instance of data. The instance must be provided when the
     * mapping is invoked.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapInput $input
     * @return static
     */
    public function addInput(FHIRStructureMapInput $input): self
    {
        if (!isset($this->input)) {
            $this->input = [];
        }
        $this->input[] = $input;
        return $this;
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * A name assigned to an instance of data. The instance must be provided when the
     * mapping is invoked.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapInput ...$input
     * @return static
     */
    public function setInput(FHIRStructureMapInput ...$input): self
    {
        if ([] === $input) {
            unset($this->input);
            return $this;
        }
        $this->input = $input;
        return $this;
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * Transform Rule from source to target.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapRule[]
     */
    public function getRule(): array
    {
        return $this->rule ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapRule>
     */
    public function getRuleIterator(): iterable
    {
        if (!isset($this->rule)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->rule);
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * Transform Rule from source to target.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapRule $rule
     * @return static
     */
    public function addRule(FHIRStructureMapRule $rule): self
    {
        if (!isset($this->rule)) {
            $this->rule = [];
        }
        $this->rule[] = $rule;
        return $this;
    }

    /**
     * A Map of relationships between 2 structures that can be used to transform data.
     *
     * Transform Rule from source to target.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapRule ...$rule
     * @return static
     */
    public function setRule(FHIRStructureMapRule ...$rule): self
    {
        if ([] === $rule) {
            unset($this->rule);
            return $this;
        }
        $this->rule = $rule;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapGroup $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapGroup
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRStructureMapGroup)) {
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
            } else if (self::FIELD_NAME === $cen) {
                $type->setName(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXTENDS === $cen) {
                $type->setExtends(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE_MODE === $cen) {
                $type->setTypeMode(FHIRStructureMapGroupTypeMode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DOCUMENTATION === $cen) {
                $type->setDocumentation(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INPUT === $cen) {
                $type->addInput(FHIRStructureMapInput::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RULE === $cen) {
                $type->addRule(FHIRStructureMapRule::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_NAME])) {
            if (isset($type->name)) {
                $type->name->setValue((string)$attributes[self::FIELD_NAME]);
            } else {
                $type->setName((string)$attributes[self::FIELD_NAME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_NAME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EXTENDS])) {
            if (isset($type->extends)) {
                $type->extends->setValue((string)$attributes[self::FIELD_EXTENDS]);
            } else {
                $type->setExtends((string)$attributes[self::FIELD_EXTENDS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_EXTENDS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TYPE_MODE])) {
            if (isset($type->typeMode)) {
                $type->typeMode->setValue((string)$attributes[self::FIELD_TYPE_MODE]);
            } else {
                $type->setTypeMode((string)$attributes[self::FIELD_TYPE_MODE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TYPE_MODE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DOCUMENTATION])) {
            if (isset($type->documentation)) {
                $type->documentation->setValue((string)$attributes[self::FIELD_DOCUMENTATION]);
            } else {
                $type->setDocumentation((string)$attributes[self::FIELD_DOCUMENTATION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DOCUMENTATION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->name) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NAME]) {
            $xw->writeAttribute(self::FIELD_NAME, $this->name->_getValueAsString());
        }
        if (isset($this->extends) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXTENDS]) {
            $xw->writeAttribute(self::FIELD_EXTENDS, $this->extends->_getValueAsString());
        }
        if (isset($this->typeMode) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TYPE_MODE]) {
            $xw->writeAttribute(self::FIELD_TYPE_MODE, $this->typeMode->_getValueAsString());
        }
        if (isset($this->documentation) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DOCUMENTATION]) {
            $xw->writeAttribute(self::FIELD_DOCUMENTATION, $this->documentation->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->name)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NAME]
                || $this->name->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NAME);
            $this->name->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NAME]);
            $xw->endElement();
        }
        if (isset($this->extends)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXTENDS]
                || $this->extends->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXTENDS);
            $this->extends->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXTENDS]);
            $xw->endElement();
        }
        if (isset($this->typeMode)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TYPE_MODE]
                || $this->typeMode->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TYPE_MODE);
            $this->typeMode->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TYPE_MODE]);
            $xw->endElement();
        }
        if (isset($this->documentation)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DOCUMENTATION]
                || $this->documentation->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DOCUMENTATION);
            $this->documentation->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DOCUMENTATION]);
            $xw->endElement();
        }
        if (isset($this->input)) {
            foreach ($this->input as $v) {
                $xw->startElement(self::FIELD_INPUT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->rule)) {
            foreach ($this->rule as $v) {
                $xw->startElement(self::FIELD_RULE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapGroup $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapGroup
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRStructureMapGroup)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->name)
            || isset($json->_name)
            || property_exists($json, self::FIELD_NAME)
            || property_exists($json, self::FIELD_NAME_EXT)) {
            $v = $json->_name ?? new \stdClass();
            $v->value = $json->name ?? null;
            $type->setName(FHIRId::jsonUnserialize($v, $config));
        }
        if (isset($json->extends)
            || isset($json->_extends)
            || property_exists($json, self::FIELD_EXTENDS)
            || property_exists($json, self::FIELD_EXTENDS_EXT)) {
            $v = $json->_extends ?? new \stdClass();
            $v->value = $json->extends ?? null;
            $type->setExtends(FHIRId::jsonUnserialize($v, $config));
        }
        if (isset($json->typeMode)
            || isset($json->_typeMode)
            || property_exists($json, self::FIELD_TYPE_MODE)
            || property_exists($json, self::FIELD_TYPE_MODE_EXT)) {
            $v = $json->_typeMode ?? new \stdClass();
            $v->value = $json->typeMode ?? null;
            $type->setTypeMode(FHIRStructureMapGroupTypeMode::jsonUnserialize($v, $config));
        }
        if (isset($json->documentation)
            || isset($json->_documentation)
            || property_exists($json, self::FIELD_DOCUMENTATION)
            || property_exists($json, self::FIELD_DOCUMENTATION_EXT)) {
            $v = $json->_documentation ?? new \stdClass();
            $v->value = $json->documentation ?? null;
            $type->setDocumentation(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->input) || property_exists($json, self::FIELD_INPUT)) {
            if (is_object($json->input)) {
                $vals = [$json->input];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_INPUT, true);
            } else {
                $vals = $json->input;
            }
            foreach($vals as $v) {
                $type->addInput(FHIRStructureMapInput::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->rule) || property_exists($json, self::FIELD_RULE)) {
            if (is_object($json->rule)) {
                $vals = [$json->rule];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_RULE, true);
            } else {
                $vals = $json->rule;
            }
            foreach($vals as $v) {
                $type->addRule(FHIRStructureMapRule::jsonUnserialize($v, $config));
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
        if (isset($this->name)) {
            if (null !== ($val = $this->name->getValue())) {
                $out->name = $val;
            }
            if ($this->name->_nonValueFieldDefined()) {
                $ext = $this->name->jsonSerialize();
                unset($ext->value);
                $out->_name = $ext;
            }
        }
        if (isset($this->extends)) {
            if (null !== ($val = $this->extends->getValue())) {
                $out->extends = $val;
            }
            if ($this->extends->_nonValueFieldDefined()) {
                $ext = $this->extends->jsonSerialize();
                unset($ext->value);
                $out->_extends = $ext;
            }
        }
        if (isset($this->typeMode)) {
            if (null !== ($val = $this->typeMode->getValue())) {
                $out->typeMode = $val;
            }
            if ($this->typeMode->_nonValueFieldDefined()) {
                $ext = $this->typeMode->jsonSerialize();
                unset($ext->value);
                $out->_typeMode = $ext;
            }
        }
        if (isset($this->documentation)) {
            if (null !== ($val = $this->documentation->getValue())) {
                $out->documentation = $val;
            }
            if ($this->documentation->_nonValueFieldDefined()) {
                $ext = $this->documentation->jsonSerialize();
                unset($ext->value);
                $out->_documentation = $ext;
            }
        }
        if (isset($this->input) && [] !== $this->input) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_INPUT) && 1 === count($this->input)) {
                $out->input = $this->input[0];
            } else {
                $out->input = $this->input;
            }
        }
        if (isset($this->rule) && [] !== $this->rule) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_RULE) && 1 === count($this->rule)) {
                $out->rule = $this->rule[0];
            } else {
                $out->rule = $this->rule;
            }
        }
        return $out;
    }
}