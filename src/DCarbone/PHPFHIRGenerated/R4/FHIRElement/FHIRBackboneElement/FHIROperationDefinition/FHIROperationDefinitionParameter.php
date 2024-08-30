<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 30th, 2024 22:23+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIROperationParameterUse;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSearchParamType;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter;

/**
 * A formal computable definition of an operation (on the RESTful interface) or a
 * named query (using the search interaction).
 *
 * Class FHIROperationDefinitionParameter
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition
 */
class FHIROperationDefinitionParameter extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER;

    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_USE = 'use';
    const FIELD_USE_EXT = '_use';
    const FIELD_MIN = 'min';
    const FIELD_MIN_EXT = '_min';
    const FIELD_MAX = 'max';
    const FIELD_MAX_EXT = '_max';
    const FIELD_DOCUMENTATION = 'documentation';
    const FIELD_DOCUMENTATION_EXT = '_documentation';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_TARGET_PROFILE = 'targetProfile';
    const FIELD_TARGET_PROFILE_EXT = '_targetProfile';
    const FIELD_SEARCH_TYPE = 'searchType';
    const FIELD_SEARCH_TYPE_EXT = '_searchType';
    const FIELD_BINDING = 'binding';
    const FIELD_REFERENCED_FROM = 'referencedFrom';
    const FIELD_PART = 'part';

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The name of used to identify the parameter.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    protected null|FHIRCode $name = null;
    /**
     * Whether an operation parameter is an input or an output parameter.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this is an input or an output parameter.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIROperationParameterUse
     */
    protected null|FHIROperationParameterUse $use = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum number of times this parameter SHALL appear in the request or
     * response.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $min = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the request
     * or response.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $max = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the meaning or use of this parameter.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $documentation = null;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type for this parameter.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    protected null|FHIRCode $type = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Used when the type is "Reference" or "canonical", and identifies a profile
     * structure or implementation Guide that applies to the target of the reference
     * this parameter refers to. If any profiles are specified, then the content must
     * conform to at least one of them. The URL can be a local reference - to a
     * contained StructureDefinition, or a reference to another StructureDefinition or
     * Implementation Guide by a canonical URL. When an implementation guide is
     * specified, the target resource SHALL conform to at least one profile defined in
     * the implementation guide.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    protected null|array $targetProfile = [];
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the parameter is understood as a search parameter. This is only used if the
     * parameter type is 'string'.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSearchParamType
     */
    protected null|FHIRSearchParamType $searchType = null;
    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * Binds to a value set if this parameter is coded (code, Coding, CodeableConcept).
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding
     */
    protected null|FHIROperationDefinitionBinding $binding = null;
    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * Identifies other resource parameters within the operation invocation that are
     * expected to resolve to this resource.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionReferencedFrom[]
     */
    protected null|array $referencedFrom = [];
    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * The parts of a nested Parameter.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter[]
     */
    protected null|array $part = [];

    /**
     * Validation map for fields in type OperationDefinition.Parameter
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_MAX => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_MIN => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_NAME => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_USE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIROperationDefinitionParameter Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_NAME, $data) || array_key_exists(self::FIELD_NAME_EXT, $data)) {
            $value = $data[self::FIELD_NAME] ?? null;
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT])) ? $data[self::FIELD_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setName($value);
                } else if (is_array($value)) {
                    $this->setName(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setName(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setName(new FHIRCode($ext));
            } else {
                $this->setName(new FHIRCode(null));
            }
        }
        if (array_key_exists(self::FIELD_USE, $data) || array_key_exists(self::FIELD_USE_EXT, $data)) {
            $value = $data[self::FIELD_USE] ?? null;
            $ext = (isset($data[self::FIELD_USE_EXT]) && is_array($data[self::FIELD_USE_EXT])) ? $data[self::FIELD_USE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIROperationParameterUse) {
                    $this->setUse($value);
                } else if (is_array($value)) {
                    $this->setUse(new FHIROperationParameterUse(array_merge($ext, $value)));
                } else {
                    $this->setUse(new FHIROperationParameterUse([FHIROperationParameterUse::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setUse(new FHIROperationParameterUse($ext));
            } else {
                $this->setUse(new FHIROperationParameterUse(null));
            }
        }
        if (array_key_exists(self::FIELD_MIN, $data) || array_key_exists(self::FIELD_MIN_EXT, $data)) {
            $value = $data[self::FIELD_MIN] ?? null;
            $ext = (isset($data[self::FIELD_MIN_EXT]) && is_array($data[self::FIELD_MIN_EXT])) ? $data[self::FIELD_MIN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setMin($value);
                } else if (is_array($value)) {
                    $this->setMin(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setMin(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMin(new FHIRInteger($ext));
            } else {
                $this->setMin(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_MAX, $data) || array_key_exists(self::FIELD_MAX_EXT, $data)) {
            $value = $data[self::FIELD_MAX] ?? null;
            $ext = (isset($data[self::FIELD_MAX_EXT]) && is_array($data[self::FIELD_MAX_EXT])) ? $data[self::FIELD_MAX_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setMax($value);
                } else if (is_array($value)) {
                    $this->setMax(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setMax(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMax(new FHIRString($ext));
            } else {
                $this->setMax(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_DOCUMENTATION, $data) || array_key_exists(self::FIELD_DOCUMENTATION_EXT, $data)) {
            $value = $data[self::FIELD_DOCUMENTATION] ?? null;
            $ext = (isset($data[self::FIELD_DOCUMENTATION_EXT]) && is_array($data[self::FIELD_DOCUMENTATION_EXT])) ? $data[self::FIELD_DOCUMENTATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDocumentation($value);
                } else if (is_array($value)) {
                    $this->setDocumentation(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDocumentation(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDocumentation(new FHIRString($ext));
            } else {
                $this->setDocumentation(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_TYPE, $data) || array_key_exists(self::FIELD_TYPE_EXT, $data)) {
            $value = $data[self::FIELD_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) ? $data[self::FIELD_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setType(new FHIRCode($ext));
            } else {
                $this->setType(new FHIRCode(null));
            }
        }
        if (array_key_exists(self::FIELD_TARGET_PROFILE, $data) || array_key_exists(self::FIELD_TARGET_PROFILE_EXT, $data)) {
            $value = $data[self::FIELD_TARGET_PROFILE] ?? null;
            $ext = (isset($data[self::FIELD_TARGET_PROFILE_EXT]) && is_array($data[self::FIELD_TARGET_PROFILE_EXT])) ? $data[self::FIELD_TARGET_PROFILE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->addTargetProfile($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRCanonical) {
                            $this->addTargetProfile($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addTargetProfile(new FHIRCanonical(array_merge($v, $iext)));
                            } else {
                                $this->addTargetProfile(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addTargetProfile(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->addTargetProfile(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addTargetProfile(new FHIRCanonical($iext));
                }
            } else {
                $this->addTargetProfile(new FHIRCanonical(null));
            }
        }
        if (array_key_exists(self::FIELD_SEARCH_TYPE, $data) || array_key_exists(self::FIELD_SEARCH_TYPE_EXT, $data)) {
            $value = $data[self::FIELD_SEARCH_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_SEARCH_TYPE_EXT]) && is_array($data[self::FIELD_SEARCH_TYPE_EXT])) ? $data[self::FIELD_SEARCH_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRSearchParamType) {
                    $this->setSearchType($value);
                } else if (is_array($value)) {
                    $this->setSearchType(new FHIRSearchParamType(array_merge($ext, $value)));
                } else {
                    $this->setSearchType(new FHIRSearchParamType([FHIRSearchParamType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSearchType(new FHIRSearchParamType($ext));
            } else {
                $this->setSearchType(new FHIRSearchParamType(null));
            }
        }
        if (array_key_exists(self::FIELD_BINDING, $data)) {
            if ($data[self::FIELD_BINDING] instanceof FHIROperationDefinitionBinding) {
                $this->setBinding($data[self::FIELD_BINDING]);
            } else {
                $this->setBinding(new FHIROperationDefinitionBinding($data[self::FIELD_BINDING]));
            }
        }
        if (array_key_exists(self::FIELD_REFERENCED_FROM, $data)) {
            if (is_array($data[self::FIELD_REFERENCED_FROM])) {
                foreach($data[self::FIELD_REFERENCED_FROM] as $v) {
                    if ($v instanceof FHIROperationDefinitionReferencedFrom) {
                        $this->addReferencedFrom($v);
                    } else {
                        $this->addReferencedFrom(new FHIROperationDefinitionReferencedFrom($v));
                    }
                }
            } elseif ($data[self::FIELD_REFERENCED_FROM] instanceof FHIROperationDefinitionReferencedFrom) {
                $this->addReferencedFrom($data[self::FIELD_REFERENCED_FROM]);
            } else {
                $this->addReferencedFrom(new FHIROperationDefinitionReferencedFrom($data[self::FIELD_REFERENCED_FROM]));
            }
        }
        if (array_key_exists(self::FIELD_PART, $data)) {
            if (is_array($data[self::FIELD_PART])) {
                foreach($data[self::FIELD_PART] as $v) {
                    if ($v instanceof FHIROperationDefinitionParameter) {
                        $this->addPart($v);
                    } else {
                        $this->addPart(new FHIROperationDefinitionParameter($v));
                    }
                }
            } elseif ($data[self::FIELD_PART] instanceof FHIROperationDefinitionParameter) {
                $this->addPart($data[self::FIELD_PART]);
            } else {
                $this->addPart(new FHIROperationDefinitionParameter($data[self::FIELD_PART]));
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
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The name of used to identify the parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    public function getName(): null|FHIRCode
    {
        return $this->name;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The name of used to identify the parameter.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode $name
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setName(null|string|FHIRCodePrimitive|FHIRCode $name = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $name && !($name instanceof FHIRCode)) {
            $name = new FHIRCode($name);
        }
        $this->_trackValueSet($this->name, $name);
        if (!isset($this->_xmlLocations[self::FIELD_NAME])) {
            $this->_xmlLocations[self::FIELD_NAME] = [];
        }
        $this->_xmlLocations[self::FIELD_NAME][0] = $xmlLocation;
        $this->name = $name;
        return $this;
    }

    /**
     * Whether an operation parameter is an input or an output parameter.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this is an input or an output parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIROperationParameterUse
     */
    public function getUse(): null|FHIROperationParameterUse
    {
        return $this->use;
    }

    /**
     * Whether an operation parameter is an input or an output parameter.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this is an input or an output parameter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIROperationParameterUse $use
     * @return static
     */
    public function setUse(null|FHIROperationParameterUse $use = null): self
    {
        if (null === $use) {
            $use = new FHIROperationParameterUse();
        }
        $this->_trackValueSet($this->use, $use);
        $this->use = $use;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum number of times this parameter SHALL appear in the request or
     * response.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getMin(): null|FHIRInteger
    {
        return $this->min;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum number of times this parameter SHALL appear in the request or
     * response.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R4\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $min
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMin(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $min = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $min && !($min instanceof FHIRInteger)) {
            $min = new FHIRInteger($min);
        }
        $this->_trackValueSet($this->min, $min);
        if (!isset($this->_xmlLocations[self::FIELD_MIN])) {
            $this->_xmlLocations[self::FIELD_MIN] = [];
        }
        $this->_xmlLocations[self::FIELD_MIN][0] = $xmlLocation;
        $this->min = $min;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the request
     * or response.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getMax(): null|FHIRString
    {
        return $this->max;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the request
     * or response.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $max
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMax(null|string|FHIRStringPrimitive|FHIRString $max = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $max && !($max instanceof FHIRString)) {
            $max = new FHIRString($max);
        }
        $this->_trackValueSet($this->max, $max);
        if (!isset($this->_xmlLocations[self::FIELD_MAX])) {
            $this->_xmlLocations[self::FIELD_MAX] = [];
        }
        $this->_xmlLocations[self::FIELD_MAX][0] = $xmlLocation;
        $this->max = $max;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the meaning or use of this parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDocumentation(): null|FHIRString
    {
        return $this->documentation;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the meaning or use of this parameter.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $documentation
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDocumentation(null|string|FHIRStringPrimitive|FHIRString $documentation = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $documentation && !($documentation instanceof FHIRString)) {
            $documentation = new FHIRString($documentation);
        }
        $this->_trackValueSet($this->documentation, $documentation);
        if (!isset($this->_xmlLocations[self::FIELD_DOCUMENTATION])) {
            $this->_xmlLocations[self::FIELD_DOCUMENTATION] = [];
        }
        $this->_xmlLocations[self::FIELD_DOCUMENTATION][0] = $xmlLocation;
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type for this parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode
     */
    public function getType(): null|FHIRCode
    {
        return $this->type;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type for this parameter.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode $type
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setType(null|string|FHIRCodePrimitive|FHIRCode $type = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $type && !($type instanceof FHIRCode)) {
            $type = new FHIRCode($type);
        }
        $this->_trackValueSet($this->type, $type);
        if (!isset($this->_xmlLocations[self::FIELD_TYPE])) {
            $this->_xmlLocations[self::FIELD_TYPE] = [];
        }
        $this->_xmlLocations[self::FIELD_TYPE][0] = $xmlLocation;
        $this->type = $type;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Used when the type is "Reference" or "canonical", and identifies a profile
     * structure or implementation Guide that applies to the target of the reference
     * this parameter refers to. If any profiles are specified, then the content must
     * conform to at least one of them. The URL can be a local reference - to a
     * contained StructureDefinition, or a reference to another StructureDefinition or
     * Implementation Guide by a canonical URL. When an implementation guide is
     * specified, the target resource SHALL conform to at least one profile defined in
     * the implementation guide.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    public function getTargetProfile(): null|array
    {
        return $this->targetProfile;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Used when the type is "Reference" or "canonical", and identifies a profile
     * structure or implementation Guide that applies to the target of the reference
     * this parameter refers to. If any profiles are specified, then the content must
     * conform to at least one of them. The URL can be a local reference - to a
     * contained StructureDefinition, or a reference to another StructureDefinition or
     * Implementation Guide by a canonical URL. When an implementation guide is
     * specified, the target resource SHALL conform to at least one profile defined in
     * the implementation guide.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $targetProfile
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addTargetProfile(null|string|FHIRCanonicalPrimitive|FHIRCanonical $targetProfile = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $targetProfile && !($targetProfile instanceof FHIRCanonical)) {
            $targetProfile = new FHIRCanonical($targetProfile);
        }
        $this->_trackValueAdded();
        if (!isset($this->_xmlLocations[self::FIELD_TARGET_PROFILE])) {
            $this->_xmlLocations[self::FIELD_TARGET_PROFILE] = [];
        }
        if ([] === $this->_xmlLocations[self::FIELD_TARGET_PROFILE]) {
            $this->_xmlLocations[self::FIELD_TARGET_PROFILE][0] = $xmlLocation;
        } else {
            $this->_xmlLocations[self::FIELD_TARGET_PROFILE][] = PHPFHIRXmlLocationEnum::ELEMENT;
        }
        $this->targetProfile[] = $targetProfile;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Used when the type is "Reference" or "canonical", and identifies a profile
     * structure or implementation Guide that applies to the target of the reference
     * this parameter refers to. If any profiles are specified, then the content must
     * conform to at least one of them. The URL can be a local reference - to a
     * contained StructureDefinition, or a reference to another StructureDefinition or
     * Implementation Guide by a canonical URL. When an implementation guide is
     * specified, the target resource SHALL conform to at least one profile defined in
     * the implementation guide.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[] $targetProfile
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setTargetProfile(array $targetProfile = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        unset($this->_xmlLocations[self::FIELD_TARGET_PROFILE]);
        if ([] !== $this->targetProfile) {
            $this->_trackValuesRemoved(count($this->targetProfile));
            $this->targetProfile = [];
        }
        if ([] === $targetProfile) {
            return $this;
        }
        foreach($targetProfile as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->addTargetProfile($v, $xmlLocation);
            } else {
                $this->addTargetProfile(new FHIRCanonical($v), $xmlLocation);
            }
        }
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the parameter is understood as a search parameter. This is only used if the
     * parameter type is 'string'.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSearchParamType
     */
    public function getSearchType(): null|FHIRSearchParamType
    {
        return $this->searchType;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the parameter is understood as a search parameter. This is only used if the
     * parameter type is 'string'.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSearchParamType $searchType
     * @return static
     */
    public function setSearchType(null|FHIRSearchParamType $searchType = null): self
    {
        if (null === $searchType) {
            $searchType = new FHIRSearchParamType();
        }
        $this->_trackValueSet($this->searchType, $searchType);
        $this->searchType = $searchType;
        return $this;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * Binds to a value set if this parameter is coded (code, Coding, CodeableConcept).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding
     */
    public function getBinding(): null|FHIROperationDefinitionBinding
    {
        return $this->binding;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * Binds to a value set if this parameter is coded (code, Coding, CodeableConcept).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding $binding
     * @return static
     */
    public function setBinding(null|FHIROperationDefinitionBinding $binding = null): self
    {
        if (null === $binding) {
            $binding = new FHIROperationDefinitionBinding();
        }
        $this->_trackValueSet($this->binding, $binding);
        $this->binding = $binding;
        return $this;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * Identifies other resource parameters within the operation invocation that are
     * expected to resolve to this resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionReferencedFrom[]
     */
    public function getReferencedFrom(): null|array
    {
        return $this->referencedFrom;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * Identifies other resource parameters within the operation invocation that are
     * expected to resolve to this resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionReferencedFrom $referencedFrom
     * @return static
     */
    public function addReferencedFrom(null|FHIROperationDefinitionReferencedFrom $referencedFrom = null): self
    {
        if (null === $referencedFrom) {
            $referencedFrom = new FHIROperationDefinitionReferencedFrom();
        }
        $this->_trackValueAdded();
        $this->referencedFrom[] = $referencedFrom;
        return $this;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * Identifies other resource parameters within the operation invocation that are
     * expected to resolve to this resource.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionReferencedFrom ...$referencedFrom
     * @return static
     */
    public function setReferencedFrom(FHIROperationDefinitionReferencedFrom ...$referencedFrom): self
    {
        if ([] !== $this->referencedFrom) {
            $this->_trackValuesRemoved(count($this->referencedFrom));
            $this->referencedFrom = [];
        }
        if ([] === $referencedFrom) {
            return $this;
        }
        foreach($referencedFrom as $v) {
            $this->addReferencedFrom($v);
        }
        return $this;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * The parts of a nested Parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter[]
     */
    public function getPart(): null|array
    {
        return $this->part;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * The parts of a nested Parameter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter $part
     * @return static
     */
    public function addPart(null|FHIROperationDefinitionParameter $part = null): self
    {
        if (null === $part) {
            $part = new FHIROperationDefinitionParameter();
        }
        $this->_trackValueAdded();
        $this->part[] = $part;
        return $this;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * The parts of a nested Parameter.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter ...$part
     * @return static
     */
    public function setPart(FHIROperationDefinitionParameter ...$part): self
    {
        if ([] !== $this->part) {
            $this->_trackValuesRemoved(count($this->part));
            $this->part = [];
        }
        if ([] === $part) {
            return $this;
        }
        foreach($part as $v) {
            $this->addPart($v);
        }
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
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUse())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_USE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMin())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MIN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMax())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDocumentation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOCUMENTATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getTargetProfile())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TARGET_PROFILE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSearchType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEARCH_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBinding())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BINDING] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getReferencedFrom())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REFERENCED_FROM, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPart())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PART, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_USE])) {
            $v = $this->getUse();
            foreach($validationRules[self::FIELD_USE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER, self::FIELD_USE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USE])) {
                        $errs[self::FIELD_USE] = [];
                    }
                    $errs[self::FIELD_USE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN])) {
            $v = $this->getMin();
            foreach($validationRules[self::FIELD_MIN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER, self::FIELD_MIN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN])) {
                        $errs[self::FIELD_MIN] = [];
                    }
                    $errs[self::FIELD_MIN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX])) {
            $v = $this->getMax();
            foreach($validationRules[self::FIELD_MAX] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER, self::FIELD_MAX, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX])) {
                        $errs[self::FIELD_MAX] = [];
                    }
                    $errs[self::FIELD_MAX][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOCUMENTATION])) {
            $v = $this->getDocumentation();
            foreach($validationRules[self::FIELD_DOCUMENTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER, self::FIELD_DOCUMENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOCUMENTATION])) {
                        $errs[self::FIELD_DOCUMENTATION] = [];
                    }
                    $errs[self::FIELD_DOCUMENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_PROFILE])) {
            $v = $this->getTargetProfile();
            foreach($validationRules[self::FIELD_TARGET_PROFILE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER, self::FIELD_TARGET_PROFILE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_PROFILE])) {
                        $errs[self::FIELD_TARGET_PROFILE] = [];
                    }
                    $errs[self::FIELD_TARGET_PROFILE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEARCH_TYPE])) {
            $v = $this->getSearchType();
            foreach($validationRules[self::FIELD_SEARCH_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER, self::FIELD_SEARCH_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEARCH_TYPE])) {
                        $errs[self::FIELD_SEARCH_TYPE] = [];
                    }
                    $errs[self::FIELD_SEARCH_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BINDING])) {
            $v = $this->getBinding();
            foreach($validationRules[self::FIELD_BINDING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER, self::FIELD_BINDING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BINDING])) {
                        $errs[self::FIELD_BINDING] = [];
                    }
                    $errs[self::FIELD_BINDING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCED_FROM])) {
            $v = $this->getReferencedFrom();
            foreach($validationRules[self::FIELD_REFERENCED_FROM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER, self::FIELD_REFERENCED_FROM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCED_FROM])) {
                        $errs[self::FIELD_REFERENCED_FROM] = [];
                    }
                    $errs[self::FIELD_REFERENCED_FROM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PART])) {
            $v = $this->getPart();
            foreach($validationRules[self::FIELD_PART] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER, self::FIELD_PART, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PART])) {
                        $errs[self::FIELD_PART] = [];
                    }
                    $errs[self::FIELD_PART][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter
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
        } else if (!($type instanceof FHIROperationDefinitionParameter)) {
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
            if (self::FIELD_NAME === $childName) {
                $type->setName(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_USE === $childName) {
                $type->setUse(FHIROperationParameterUse::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MIN === $childName) {
                $type->setMin(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MAX === $childName) {
                $type->setMax(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DOCUMENTATION === $childName) {
                $type->setDocumentation(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TARGET_PROFILE === $childName) {
                $type->addTargetProfile(FHIRCanonical::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SEARCH_TYPE === $childName) {
                $type->setSearchType(FHIRSearchParamType::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_BINDING === $childName) {
                $type->setBinding(FHIROperationDefinitionBinding::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REFERENCED_FROM === $childName) {
                $type->addReferencedFrom(FHIROperationDefinitionReferencedFrom::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PART === $childName) {
                $type->addPart(FHIROperationDefinitionParameter::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_NAME])) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setName((string)$attributes[self::FIELD_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MIN])) {
            $pt = $type->getMin();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MIN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMin((string)$attributes[self::FIELD_MIN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MAX])) {
            $pt = $type->getMax();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MAX], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMax((string)$attributes[self::FIELD_MAX], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DOCUMENTATION])) {
            $pt = $type->getDocumentation();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DOCUMENTATION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDocumentation((string)$attributes[self::FIELD_DOCUMENTATION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TYPE])) {
            $pt = $type->getType();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TYPE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setType((string)$attributes[self::FIELD_TYPE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TARGET_PROFILE])) {
            $type->addTargetProfile((string)$attributes[self::FIELD_TARGET_PROFILE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'OperationDefinitionParameter', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_NAME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getName())) {
            $xw->writeAttribute(self::FIELD_NAME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_MIN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMin())) {
            $xw->writeAttribute(self::FIELD_MIN, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_MAX] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMax())) {
            $xw->writeAttribute(self::FIELD_MAX, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DOCUMENTATION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDocumentation())) {
            $xw->writeAttribute(self::FIELD_DOCUMENTATION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_TYPE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getType())) {
            $xw->writeAttribute(self::FIELD_TYPE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_TARGET_PROFILE] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getTargetProfile())) {
            $xw->writeAttribute(self::FIELD_TARGET_PROFILE, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getTargetProfile()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_TARGET_PROFILE, $vs[$idx]->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_xmlLocations[self::FIELD_NAME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getName())) {
            $xw->startElement(self::FIELD_NAME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getUse())) {
            $xw->startElement(self::FIELD_USE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_MIN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMin())) {
            $xw->startElement(self::FIELD_MIN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_MAX] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMax())) {
            $xw->startElement(self::FIELD_MAX);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DOCUMENTATION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDocumentation())) {
            $xw->startElement(self::FIELD_DOCUMENTATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_TYPE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_TARGET_PROFILE] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getTargetProfile())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_TARGET_PROFILE);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (null !== ($v = $this->getSearchType())) {
            $xw->startElement(self::FIELD_SEARCH_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getBinding())) {
            $xw->startElement(self::FIELD_BINDING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getReferencedFrom() as $v) {
            $xw->startElement(self::FIELD_REFERENCED_FROM);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getPart() as $v) {
            $xw->startElement(self::FIELD_PART);
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
        if (null !== ($v = $this->getName())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NAME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NAME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getUse())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_USE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIROperationParameterUse::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_USE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMin())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MIN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MIN_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMax())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MAX} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MAX_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDocumentation())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DOCUMENTATION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DOCUMENTATION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TYPE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getTargetProfile())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRCanonical::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_TARGET_PROFILE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TARGET_PROFILE_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getSearchType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SEARCH_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRSearchParamType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SEARCH_TYPE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getBinding())) {
            $out->{self::FIELD_BINDING} = $v;
        }
        if ([] !== ($vs = $this->getReferencedFrom())) {
            $out->{self::FIELD_REFERENCED_FROM} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_REFERENCED_FROM}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getPart())) {
            $out->{self::FIELD_PART} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PART}[] = $v;
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