<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 18th, 2025 00:31+0000
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
use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A formal computable definition of a graph of resources - that is, a coherent set
 * of resources that form a graph by following references. The Graph Definition
 * resource defines a set and makes rules about the set.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRGraphDefinitionLink extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_GRAPH_DEFINITION_DOT_LINK;

    /* class_default.php:56 */
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_MIN = 'min';
    public const FIELD_MIN_EXT = '_min';
    public const FIELD_MAX = 'max';
    public const FIELD_MAX_EXT = '_max';
    public const FIELD_SOURCE_ID = 'sourceId';
    public const FIELD_SOURCE_ID_EXT = '_sourceId';
    public const FIELD_PATH = 'path';
    public const FIELD_PATH_EXT = '_path';
    public const FIELD_SLICE_NAME = 'sliceName';
    public const FIELD_SLICE_NAME_EXT = '_sliceName';
    public const FIELD_TARGET_ID = 'targetId';
    public const FIELD_TARGET_ID_EXT = '_targetId';
    public const FIELD_PARAMS = 'params';
    public const FIELD_PARAMS_EXT = '_params';
    public const FIELD_COMPARTMENT = 'compartment';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_SOURCE_ID => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_TARGET_ID => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MIN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MAX => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SOURCE_ID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PATH => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SLICE_NAME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TARGET_ID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PARAMS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Information about why this link is of interest in this graph definition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $description;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Minimum occurrences for this link.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger 
     */
    #[FHIRInteger]
    protected FHIRInteger $min;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Maximum occurrences for this link.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $max;
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The source node for this link.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId 
     */
    #[FHIRId]
    protected FHIRId $sourceId;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A FHIRPath expression that identifies one of FHIR References to other resources.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $path;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Which slice (if profiled).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $sliceName;
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The target node for this link.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId 
     */
    #[FHIRId]
    protected FHIRId $targetId;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A set of parameters to look up.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $params;
    /**
     * A formal computable definition of a graph of resources - that is, a coherent set
     * of resources that form a graph by following references. The Graph Definition
     * resource defines a set and makes rules about the set.
     *
     * Compartment Consistency Rules.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionCompartment> 
     */
    #[FHIRGraphDefinitionCompartment]
    protected array $compartment;

    /* constructor.php:61 */
    /**
     * FHIRGraphDefinitionLink Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $description
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $min
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $max
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $sourceId
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $path
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $sliceName
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $targetId
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $params
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionCompartment> $compartment
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $description = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $min = null,
                                null|string|FHIRStringPrimitive|FHIRString $max = null,
                                null|string|FHIRIdPrimitive|FHIRId $sourceId = null,
                                null|string|FHIRStringPrimitive|FHIRString $path = null,
                                null|string|FHIRStringPrimitive|FHIRString $sliceName = null,
                                null|string|FHIRIdPrimitive|FHIRId $targetId = null,
                                null|string|FHIRStringPrimitive|FHIRString $params = null,
                                null|iterable $compartment = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $min) {
            $this->setMin($min);
        }
        if (null !== $max) {
            $this->setMax($max);
        }
        if (null !== $sourceId) {
            $this->setSourceId($sourceId);
        }
        if (null !== $path) {
            $this->setPath($path);
        }
        if (null !== $sliceName) {
            $this->setSliceName($sliceName);
        }
        if (null !== $targetId) {
            $this->setTargetId($targetId);
        }
        if (null !== $params) {
            $this->setParams($params);
        }
        if (null !== $compartment) {
            $this->setCompartment(...$compartment);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Information about why this link is of interest in this graph definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Information about why this link is of interest in this graph definition.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $description
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRString)) {
            $description = new FHIRString(value: $description);
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Minimum occurrences for this link.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger
     */
    public function getMin(): null|FHIRInteger
    {
        return $this->min ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Minimum occurrences for this link.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $min
     * @return static
     */
    public function setMin(null|string|float|FHIRIntegerPrimitive|FHIRInteger $min): self
    {
        if (null === $min) {
            unset($this->min);
            return $this;
        }
        if (!($min instanceof FHIRInteger)) {
            $min = new FHIRInteger(value: $min);
        }
        $this->min = $min;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Maximum occurrences for this link.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getMax(): null|FHIRString
    {
        return $this->max ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Maximum occurrences for this link.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $max
     * @return static
     */
    public function setMax(null|string|FHIRStringPrimitive|FHIRString $max): self
    {
        if (null === $max) {
            unset($this->max);
            return $this;
        }
        if (!($max instanceof FHIRString)) {
            $max = new FHIRString(value: $max);
        }
        $this->max = $max;
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
     * The source node for this link.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId
     */
    public function getSourceId(): null|FHIRId
    {
        return $this->sourceId ?? null;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The source node for this link.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $sourceId
     * @return static
     */
    public function setSourceId(null|string|FHIRIdPrimitive|FHIRId $sourceId): self
    {
        if (null === $sourceId) {
            unset($this->sourceId);
            return $this;
        }
        if (!($sourceId instanceof FHIRId)) {
            $sourceId = new FHIRId(value: $sourceId);
        }
        $this->sourceId = $sourceId;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A FHIRPath expression that identifies one of FHIR References to other resources.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getPath(): null|FHIRString
    {
        return $this->path ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A FHIRPath expression that identifies one of FHIR References to other resources.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $path
     * @return static
     */
    public function setPath(null|string|FHIRStringPrimitive|FHIRString $path): self
    {
        if (null === $path) {
            unset($this->path);
            return $this;
        }
        if (!($path instanceof FHIRString)) {
            $path = new FHIRString(value: $path);
        }
        $this->path = $path;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Which slice (if profiled).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getSliceName(): null|FHIRString
    {
        return $this->sliceName ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Which slice (if profiled).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $sliceName
     * @return static
     */
    public function setSliceName(null|string|FHIRStringPrimitive|FHIRString $sliceName): self
    {
        if (null === $sliceName) {
            unset($this->sliceName);
            return $this;
        }
        if (!($sliceName instanceof FHIRString)) {
            $sliceName = new FHIRString(value: $sliceName);
        }
        $this->sliceName = $sliceName;
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
     * The target node for this link.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId
     */
    public function getTargetId(): null|FHIRId
    {
        return $this->targetId ?? null;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The target node for this link.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $targetId
     * @return static
     */
    public function setTargetId(null|string|FHIRIdPrimitive|FHIRId $targetId): self
    {
        if (null === $targetId) {
            unset($this->targetId);
            return $this;
        }
        if (!($targetId instanceof FHIRId)) {
            $targetId = new FHIRId(value: $targetId);
        }
        $this->targetId = $targetId;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A set of parameters to look up.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getParams(): null|FHIRString
    {
        return $this->params ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A set of parameters to look up.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $params
     * @return static
     */
    public function setParams(null|string|FHIRStringPrimitive|FHIRString $params): self
    {
        if (null === $params) {
            unset($this->params);
            return $this;
        }
        if (!($params instanceof FHIRString)) {
            $params = new FHIRString(value: $params);
        }
        $this->params = $params;
        return $this;
    }

    /**
     * A formal computable definition of a graph of resources - that is, a coherent set
     * of resources that form a graph by following references. The Graph Definition
     * resource defines a set and makes rules about the set.
     *
     * Compartment Consistency Rules.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionCompartment>
     */
    public function getCompartment(): array
    {
        return $this->compartment ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionCompartment>
     */
    public function getCompartmentIterator(): iterable
    {
        if (!isset($this->compartment)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->compartment);
    }

    /**
     * A formal computable definition of a graph of resources - that is, a coherent set
     * of resources that form a graph by following references. The Graph Definition
     * resource defines a set and makes rules about the set.
     *
     * Compartment Consistency Rules.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionCompartment $compartment
     * @return static
     */
    public function addCompartment(FHIRGraphDefinitionCompartment $compartment): self
    {
        if (!isset($this->compartment)) {
            $this->compartment = [];
        }
        $this->compartment[] = $compartment;
        return $this;
    }

    /**
     * A formal computable definition of a graph of resources - that is, a coherent set
     * of resources that form a graph by following references. The Graph Definition
     * resource defines a set and makes rules about the set.
     *
     * Compartment Consistency Rules.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionCompartment ...$compartment
     * @return static
     */
    public function setCompartment(FHIRGraphDefinitionCompartment ...$compartment): self
    {
        if ([] === $compartment) {
            unset($this->compartment);
            return $this;
        }
        $this->compartment = $compartment;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionLink $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionLink
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRGraphDefinitionLink)) {
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
            } else if (self::FIELD_DESCRIPTION === $cen) {
                $type->setDescription(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MIN === $cen) {
                $type->setMin(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAX === $cen) {
                $type->setMax(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SOURCE_ID === $cen) {
                $type->setSourceId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATH === $cen) {
                $type->setPath(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SLICE_NAME === $cen) {
                $type->setSliceName(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TARGET_ID === $cen) {
                $type->setTargetId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PARAMS === $cen) {
                $type->setParams(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COMPARTMENT === $cen) {
                $type->addCompartment(FHIRGraphDefinitionCompartment::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            if (isset($type->description)) {
                $type->description->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DESCRIPTION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MIN])) {
            if (isset($type->min)) {
                $type->min->setValue((string)$attributes[self::FIELD_MIN]);
            } else {
                $type->setMin((string)$attributes[self::FIELD_MIN]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MIN, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MAX])) {
            if (isset($type->max)) {
                $type->max->setValue((string)$attributes[self::FIELD_MAX]);
            } else {
                $type->setMax((string)$attributes[self::FIELD_MAX]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_MAX, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SOURCE_ID])) {
            if (isset($type->sourceId)) {
                $type->sourceId->setValue((string)$attributes[self::FIELD_SOURCE_ID]);
            } else {
                $type->setSourceId((string)$attributes[self::FIELD_SOURCE_ID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SOURCE_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PATH])) {
            if (isset($type->path)) {
                $type->path->setValue((string)$attributes[self::FIELD_PATH]);
            } else {
                $type->setPath((string)$attributes[self::FIELD_PATH]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PATH, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SLICE_NAME])) {
            if (isset($type->sliceName)) {
                $type->sliceName->setValue((string)$attributes[self::FIELD_SLICE_NAME]);
            } else {
                $type->setSliceName((string)$attributes[self::FIELD_SLICE_NAME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SLICE_NAME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TARGET_ID])) {
            if (isset($type->targetId)) {
                $type->targetId->setValue((string)$attributes[self::FIELD_TARGET_ID]);
            } else {
                $type->setTargetId((string)$attributes[self::FIELD_TARGET_ID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TARGET_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PARAMS])) {
            if (isset($type->params)) {
                $type->params->setValue((string)$attributes[self::FIELD_PARAMS]);
            } else {
                $type->setParams((string)$attributes[self::FIELD_PARAMS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PARAMS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->description) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->_getValueAsString());
        }
        if (isset($this->min) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MIN]) {
            $xw->writeAttribute(self::FIELD_MIN, $this->min->_getValueAsString());
        }
        if (isset($this->max) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MAX]) {
            $xw->writeAttribute(self::FIELD_MAX, $this->max->_getValueAsString());
        }
        if (isset($this->sourceId) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SOURCE_ID]) {
            $xw->writeAttribute(self::FIELD_SOURCE_ID, $this->sourceId->_getValueAsString());
        }
        if (isset($this->path) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PATH]) {
            $xw->writeAttribute(self::FIELD_PATH, $this->path->_getValueAsString());
        }
        if (isset($this->sliceName) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SLICE_NAME]) {
            $xw->writeAttribute(self::FIELD_SLICE_NAME, $this->sliceName->_getValueAsString());
        }
        if (isset($this->targetId) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TARGET_ID]) {
            $xw->writeAttribute(self::FIELD_TARGET_ID, $this->targetId->_getValueAsString());
        }
        if (isset($this->params) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PARAMS]) {
            $xw->writeAttribute(self::FIELD_PARAMS, $this->params->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->description)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DESCRIPTION]
                || $this->description->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DESCRIPTION]);
            $xw->endElement();
        }
        if (isset($this->min)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MIN]
                || $this->min->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MIN);
            $this->min->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MIN]);
            $xw->endElement();
        }
        if (isset($this->max)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_MAX]
                || $this->max->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_MAX);
            $this->max->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_MAX]);
            $xw->endElement();
        }
        if (isset($this->sourceId)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SOURCE_ID]
                || $this->sourceId->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SOURCE_ID);
            $this->sourceId->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SOURCE_ID]);
            $xw->endElement();
        }
        if (isset($this->path)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PATH]
                || $this->path->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PATH);
            $this->path->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PATH]);
            $xw->endElement();
        }
        if (isset($this->sliceName)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SLICE_NAME]
                || $this->sliceName->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SLICE_NAME);
            $this->sliceName->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SLICE_NAME]);
            $xw->endElement();
        }
        if (isset($this->targetId)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TARGET_ID]
                || $this->targetId->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TARGET_ID);
            $this->targetId->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TARGET_ID]);
            $xw->endElement();
        }
        if (isset($this->params)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PARAMS]
                || $this->params->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PARAMS);
            $this->params->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PARAMS]);
            $xw->endElement();
        }
        if (isset($this->compartment)) {
            foreach ($this->compartment as $v) {
                $xw->startElement(self::FIELD_COMPARTMENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionLink $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionLink
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRGraphDefinitionLink)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->description)
            || isset($decoded->_description)
            || property_exists($decoded, self::FIELD_DESCRIPTION)
            || property_exists($decoded, self::FIELD_DESCRIPTION_EXT)) {
            $v = $decoded->_description ?? new \stdClass();
            $v->value = $decoded->description ?? null;
            $type->setDescription(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->min)
            || isset($decoded->_min)
            || property_exists($decoded, self::FIELD_MIN)
            || property_exists($decoded, self::FIELD_MIN_EXT)) {
            $v = $decoded->_min ?? new \stdClass();
            $v->value = $decoded->min ?? null;
            $type->setMin(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($decoded->max)
            || isset($decoded->_max)
            || property_exists($decoded, self::FIELD_MAX)
            || property_exists($decoded, self::FIELD_MAX_EXT)) {
            $v = $decoded->_max ?? new \stdClass();
            $v->value = $decoded->max ?? null;
            $type->setMax(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->sourceId)
            || isset($decoded->_sourceId)
            || property_exists($decoded, self::FIELD_SOURCE_ID)
            || property_exists($decoded, self::FIELD_SOURCE_ID_EXT)) {
            $v = $decoded->_sourceId ?? new \stdClass();
            $v->value = $decoded->sourceId ?? null;
            $type->setSourceId(FHIRId::jsonUnserialize($v, $config));
        }
        if (isset($decoded->path)
            || isset($decoded->_path)
            || property_exists($decoded, self::FIELD_PATH)
            || property_exists($decoded, self::FIELD_PATH_EXT)) {
            $v = $decoded->_path ?? new \stdClass();
            $v->value = $decoded->path ?? null;
            $type->setPath(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->sliceName)
            || isset($decoded->_sliceName)
            || property_exists($decoded, self::FIELD_SLICE_NAME)
            || property_exists($decoded, self::FIELD_SLICE_NAME_EXT)) {
            $v = $decoded->_sliceName ?? new \stdClass();
            $v->value = $decoded->sliceName ?? null;
            $type->setSliceName(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->targetId)
            || isset($decoded->_targetId)
            || property_exists($decoded, self::FIELD_TARGET_ID)
            || property_exists($decoded, self::FIELD_TARGET_ID_EXT)) {
            $v = $decoded->_targetId ?? new \stdClass();
            $v->value = $decoded->targetId ?? null;
            $type->setTargetId(FHIRId::jsonUnserialize($v, $config));
        }
        if (isset($decoded->params)
            || isset($decoded->_params)
            || property_exists($decoded, self::FIELD_PARAMS)
            || property_exists($decoded, self::FIELD_PARAMS_EXT)) {
            $v = $decoded->_params ?? new \stdClass();
            $v->value = $decoded->params ?? null;
            $type->setParams(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->compartment) || property_exists($decoded, self::FIELD_COMPARTMENT)) {
            if (is_object($decoded->compartment)) {
                $vals = [$decoded->compartment];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_COMPARTMENT, true);
            } else {
                $vals = $decoded->compartment;
            }
            foreach($vals as $v) {
                $type->addCompartment(FHIRGraphDefinitionCompartment::jsonUnserialize($v, $config));
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
        if (isset($this->description)) {
            if (null !== ($val = $this->description->getValue())) {
                $out->description = $val;
            }
            if ($this->description->_nonValueFieldDefined()) {
                $ext = $this->description->jsonSerialize();
                unset($ext->value);
                $out->_description = $ext;
            }
        }
        if (isset($this->min)) {
            if (null !== ($val = $this->min->getValue())) {
                $out->min = $val;
            }
            if ($this->min->_nonValueFieldDefined()) {
                $ext = $this->min->jsonSerialize();
                unset($ext->value);
                $out->_min = $ext;
            }
        }
        if (isset($this->max)) {
            if (null !== ($val = $this->max->getValue())) {
                $out->max = $val;
            }
            if ($this->max->_nonValueFieldDefined()) {
                $ext = $this->max->jsonSerialize();
                unset($ext->value);
                $out->_max = $ext;
            }
        }
        if (isset($this->sourceId)) {
            if (null !== ($val = $this->sourceId->getValue())) {
                $out->sourceId = $val;
            }
            if ($this->sourceId->_nonValueFieldDefined()) {
                $ext = $this->sourceId->jsonSerialize();
                unset($ext->value);
                $out->_sourceId = $ext;
            }
        }
        if (isset($this->path)) {
            if (null !== ($val = $this->path->getValue())) {
                $out->path = $val;
            }
            if ($this->path->_nonValueFieldDefined()) {
                $ext = $this->path->jsonSerialize();
                unset($ext->value);
                $out->_path = $ext;
            }
        }
        if (isset($this->sliceName)) {
            if (null !== ($val = $this->sliceName->getValue())) {
                $out->sliceName = $val;
            }
            if ($this->sliceName->_nonValueFieldDefined()) {
                $ext = $this->sliceName->jsonSerialize();
                unset($ext->value);
                $out->_sliceName = $ext;
            }
        }
        if (isset($this->targetId)) {
            if (null !== ($val = $this->targetId->getValue())) {
                $out->targetId = $val;
            }
            if ($this->targetId->_nonValueFieldDefined()) {
                $ext = $this->targetId->jsonSerialize();
                unset($ext->value);
                $out->_targetId = $ext;
            }
        }
        if (isset($this->params)) {
            if (null !== ($val = $this->params->getValue())) {
                $out->params = $val;
            }
            if ($this->params->_nonValueFieldDefined()) {
                $ext = $this->params->jsonSerialize();
                unset($ext->value);
                $out->_params = $ext;
            }
        }
        if (isset($this->compartment) && [] !== $this->compartment) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_COMPARTMENT) && 1 === count($this->compartment)) {
                $out->compartment = $this->compartment[0];
            } else {
                $out->compartment = $this->compartment;
            }
        }
        return $out;
    }
}