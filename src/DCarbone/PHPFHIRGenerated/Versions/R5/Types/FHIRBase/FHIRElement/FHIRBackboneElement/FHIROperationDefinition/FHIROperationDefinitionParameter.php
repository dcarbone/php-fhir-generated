<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIROperationDefinition;

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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFHIRTypes;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIROperationParameterScope;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIROperationParameterUse;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchParamType;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A formal computable definition of an operation (on the RESTful interface) or a
 * named query (using the search interaction).
 */
class FHIROperationDefinitionParameter extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER;


    public const FIELD_NAME = 'name';
    public const FIELD_NAME_EXT = '_name';
    public const FIELD_USE = 'use';
    public const FIELD_USE_EXT = '_use';
    public const FIELD_SCOPE = 'scope';
    public const FIELD_SCOPE_EXT = '_scope';
    public const FIELD_MIN = 'min';
    public const FIELD_MIN_EXT = '_min';
    public const FIELD_MAX = 'max';
    public const FIELD_MAX_EXT = '_max';
    public const FIELD_DOCUMENTATION = 'documentation';
    public const FIELD_DOCUMENTATION_EXT = '_documentation';
    public const FIELD_TYPE = 'type';
    public const FIELD_TYPE_EXT = '_type';
    public const FIELD_ALLOWED_TYPE = 'allowedType';
    public const FIELD_ALLOWED_TYPE_EXT = '_allowedType';
    public const FIELD_TARGET_PROFILE = 'targetProfile';
    public const FIELD_TARGET_PROFILE_EXT = '_targetProfile';
    public const FIELD_SEARCH_TYPE = 'searchType';
    public const FIELD_SEARCH_TYPE_EXT = '_searchType';
    public const FIELD_BINDING = 'binding';
    public const FIELD_REFERENCED_FROM = 'referencedFrom';
    public const FIELD_PART = 'part';

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The name of used to identify the parameter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode 
     */
    protected FHIRCode $name;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this is an input or an output parameter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIROperationParameterUse 
     */
    protected FHIROperationParameterUse $use;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the parameter applies when the operation is being
     * invoked at the specified level.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIROperationParameterScope[] 
     */
    protected array $scope;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum number of times this parameter SHALL appear in the request or
     * response.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $min;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the request
     * or response.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $max;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Describes the meaning or use of this parameter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $documentation;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type for this parameter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFHIRTypes 
     */
    protected FHIRFHIRTypes $type;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Support for polymorphic types. If the parameter type is abstract, this element
     * lists allowed sub-types for the parameter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFHIRTypes[] 
     */
    protected array $allowedType;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical[] 
     */
    protected array $targetProfile;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the parameter is understood if/when it used as search parameter. This is
     * only used if the parameter is a string.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchParamType 
     */
    protected FHIRSearchParamType $searchType;
    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * Binds to a value set if this parameter is coded (code, Coding, CodeableConcept).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding 
     */
    protected FHIROperationDefinitionBinding $binding;
    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * Identifies other resource parameters within the operation invocation that are
     * expected to resolve to this resource.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionReferencedFrom[] 
     */
    protected array $referencedFrom;
    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * The parts of a nested Parameter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter[] 
     */
    protected array $part;

    /** Default validation map for fields in type OperationDefinition.Parameter */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_NAME => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_USE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_MIN => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_MAX => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIROperationDefinitionParameter Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $name
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIROperationParameterUse $use
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIROperationParameterScope[] $scope
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $min
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $max
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $documentation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFHIRTypes $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFHIRTypes[] $allowedType
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical[] $targetProfile
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchParamType $searchType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding $binding
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionReferencedFrom[] $referencedFrom
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter[] $part
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRCodePrimitive|FHIRCode $name = null,
                                null|FHIROperationParameterUse $use = null,
                                null|iterable $scope = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $min = null,
                                null|string|FHIRStringPrimitive|FHIRString $max = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $documentation = null,
                                null|FHIRFHIRTypes $type = null,
                                null|iterable $allowedType = null,
                                null|iterable $targetProfile = null,
                                null|FHIRSearchParamType $searchType = null,
                                null|FHIROperationDefinitionBinding $binding = null,
                                null|iterable $referencedFrom = null,
                                null|iterable $part = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $name) {
            $this->setName($name);
        }
        if (null !== $use) {
            $this->setUse($use);
        }
        if (null !== $scope) {
            $this->setScope(...$scope);
        }
        if (null !== $min) {
            $this->setMin($min);
        }
        if (null !== $max) {
            $this->setMax($max);
        }
        if (null !== $documentation) {
            $this->setDocumentation($documentation);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $allowedType) {
            $this->setAllowedType(...$allowedType);
        }
        if (null !== $targetProfile) {
            $this->setTargetProfile(...$targetProfile);
        }
        if (null !== $searchType) {
            $this->setSearchType($searchType);
        }
        if (null !== $binding) {
            $this->setBinding($binding);
        }
        if (null !== $referencedFrom) {
            $this->setReferencedFrom(...$referencedFrom);
        }
        if (null !== $part) {
            $this->setPart(...$part);
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
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The name of used to identify the parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode
     */
    public function getName(): null|FHIRCode
    {
        return $this->name ?? null;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The name of used to identify the parameter.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $name
     * @return static
     */
    public function setName(null|string|FHIRCodePrimitive|FHIRCode $name): self
    {
        if (null === $name) {
            unset($this->name);
            return $this;
        }
        if (!($name instanceof FHIRCode)) {
            $name = new FHIRCode(value: $name);
        }
        $this->name = $name;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this is an input or an output parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIROperationParameterUse
     */
    public function getUse(): null|FHIROperationParameterUse
    {
        return $this->use ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this is an input or an output parameter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIROperationParameterUse $use
     * @return static
     */
    public function setUse(null|FHIROperationParameterUse $use): self
    {
        if (null === $use) {
            unset($this->use);
            return $this;
        }
        $this->use = $use;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the parameter applies when the operation is being
     * invoked at the specified level.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIROperationParameterScope[]
     */
    public function getScope(): array
    {
        return $this->scope ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIROperationParameterScope>
     */
    public function getScopeIterator(): iterable
    {
        if (!isset($this->scope) || [] === $this->scope) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->scope);
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the parameter applies when the operation is being
     * invoked at the specified level.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIROperationParameterScope $scope
     * @return static
     */
    public function addScope(FHIROperationParameterScope $scope): self
    {
        if (!isset($this->scope)) {
            $this->scope = [];
        }
        $this->scope[] = $scope;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the parameter applies when the operation is being
     * invoked at the specified level.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIROperationParameterScope ...$scope
     * @return static
     */
    public function setScope(FHIROperationParameterScope ...$scope): self
    {
        $this->scope = [];
        foreach($scope as $v) {
            if ($v instanceof FHIROperationParameterScope) {
                $this->scope[] = $v;
            } else {
                $this->scope[] = new FHIROperationParameterScope(value: $v);
            }
        }
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
     * The minimum number of times this parameter SHALL appear in the request or
     * response.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $min
     * @return static
     */
    public function setMin(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $min): self
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
     * The maximum number of times this element is permitted to appear in the request
     * or response.
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
     * The maximum number of times this element is permitted to appear in the request
     * or response.
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
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Describes the meaning or use of this parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getDocumentation(): null|FHIRMarkdown
    {
        return $this->documentation ?? null;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Describes the meaning or use of this parameter.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $documentation
     * @return static
     */
    public function setDocumentation(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $documentation): self
    {
        if (null === $documentation) {
            unset($this->documentation);
            return $this;
        }
        if (!($documentation instanceof FHIRMarkdown)) {
            $documentation = new FHIRMarkdown(value: $documentation);
        }
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type for this parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFHIRTypes
     */
    public function getType(): null|FHIRFHIRTypes
    {
        return $this->type ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type for this parameter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFHIRTypes $type
     * @return static
     */
    public function setType(null|FHIRFHIRTypes $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        $this->type = $type;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Support for polymorphic types. If the parameter type is abstract, this element
     * lists allowed sub-types for the parameter.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFHIRTypes[]
     */
    public function getAllowedType(): array
    {
        return $this->allowedType ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFHIRTypes>
     */
    public function getAllowedTypeIterator(): iterable
    {
        if (!isset($this->allowedType) || [] === $this->allowedType) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->allowedType);
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Support for polymorphic types. If the parameter type is abstract, this element
     * lists allowed sub-types for the parameter.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFHIRTypes $allowedType
     * @return static
     */
    public function addAllowedType(FHIRFHIRTypes $allowedType): self
    {
        if (!isset($this->allowedType)) {
            $this->allowedType = [];
        }
        $this->allowedType[] = $allowedType;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Support for polymorphic types. If the parameter type is abstract, this element
     * lists allowed sub-types for the parameter.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRFHIRTypes ...$allowedType
     * @return static
     */
    public function setAllowedType(FHIRFHIRTypes ...$allowedType): self
    {
        $this->allowedType = [];
        foreach($allowedType as $v) {
            if ($v instanceof FHIRFHIRTypes) {
                $this->allowedType[] = $v;
            } else {
                $this->allowedType[] = new FHIRFHIRTypes(value: $v);
            }
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical[]
     */
    public function getTargetProfile(): array
    {
        return $this->targetProfile ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical>
     */
    public function getTargetProfileIterator(): iterable
    {
        if (!isset($this->targetProfile) || [] === $this->targetProfile) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->targetProfile);
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $targetProfile
     * @return static
     */
    public function addTargetProfile(string|FHIRCanonicalPrimitive|FHIRCanonical $targetProfile): self
    {
        if (!($targetProfile instanceof FHIRCanonical)) {
            $targetProfile = new FHIRCanonical(value: $targetProfile);
        }
        if (!isset($this->targetProfile)) {
            $this->targetProfile = [];
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical ...$targetProfile
     * @return static
     */
    public function setTargetProfile(string|FHIRCanonicalPrimitive|FHIRCanonical ...$targetProfile): self
    {
        $this->targetProfile = [];
        foreach($targetProfile as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->targetProfile[] = $v;
            } else {
                $this->targetProfile[] = new FHIRCanonical(value: $v);
            }
        }
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the parameter is understood if/when it used as search parameter. This is
     * only used if the parameter is a string.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchParamType
     */
    public function getSearchType(): null|FHIRSearchParamType
    {
        return $this->searchType ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the parameter is understood if/when it used as search parameter. This is
     * only used if the parameter is a string.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchParamType $searchType
     * @return static
     */
    public function setSearchType(null|FHIRSearchParamType $searchType): self
    {
        if (null === $searchType) {
            unset($this->searchType);
            return $this;
        }
        $this->searchType = $searchType;
        return $this;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * Binds to a value set if this parameter is coded (code, Coding, CodeableConcept).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding
     */
    public function getBinding(): null|FHIROperationDefinitionBinding
    {
        return $this->binding ?? null;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * Binds to a value set if this parameter is coded (code, Coding, CodeableConcept).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding $binding
     * @return static
     */
    public function setBinding(null|FHIROperationDefinitionBinding $binding): self
    {
        if (null === $binding) {
            unset($this->binding);
            return $this;
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionReferencedFrom[]
     */
    public function getReferencedFrom(): array
    {
        return $this->referencedFrom ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionReferencedFrom>
     */
    public function getReferencedFromIterator(): iterable
    {
        if (!isset($this->referencedFrom) || [] === $this->referencedFrom) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->referencedFrom);
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * Identifies other resource parameters within the operation invocation that are
     * expected to resolve to this resource.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionReferencedFrom $referencedFrom
     * @return static
     */
    public function addReferencedFrom(FHIROperationDefinitionReferencedFrom $referencedFrom): self
    {
        if (!isset($this->referencedFrom)) {
            $this->referencedFrom = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionReferencedFrom ...$referencedFrom
     * @return static
     */
    public function setReferencedFrom(FHIROperationDefinitionReferencedFrom ...$referencedFrom): self
    {
        $this->referencedFrom = $referencedFrom;
        return $this;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * The parts of a nested Parameter.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter[]
     */
    public function getPart(): array
    {
        return $this->part ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter>
     */
    public function getPartIterator(): iterable
    {
        if (!isset($this->part) || [] === $this->part) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->part);
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * The parts of a nested Parameter.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter $part
     * @return static
     */
    public function addPart(FHIROperationDefinitionParameter $part): self
    {
        if (!isset($this->part)) {
            $this->part = [];
        }
        $this->part[] = $part;
        return $this;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * The parts of a nested Parameter.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter ...$part
     * @return static
     */
    public function setPart(FHIROperationDefinitionParameter ...$part): self
    {
        $this->part = $part;
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
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NAME, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_USE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USE])) {
                        $errs[self::FIELD_USE] = [];
                    }
                    $errs[self::FIELD_USE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SCOPE])) {
            $v = $this->getScope();
            foreach($validationRules[self::FIELD_SCOPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SCOPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SCOPE])) {
                        $errs[self::FIELD_SCOPE] = [];
                    }
                    $errs[self::FIELD_SCOPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN])) {
            $v = $this->getMin();
            foreach($validationRules[self::FIELD_MIN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MIN, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MAX, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DOCUMENTATION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ALLOWED_TYPE])) {
            $v = $this->getAllowedType();
            foreach($validationRules[self::FIELD_ALLOWED_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ALLOWED_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALLOWED_TYPE])) {
                        $errs[self::FIELD_ALLOWED_TYPE] = [];
                    }
                    $errs[self::FIELD_ALLOWED_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_PROFILE])) {
            $v = $this->getTargetProfile();
            foreach($validationRules[self::FIELD_TARGET_PROFILE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TARGET_PROFILE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SEARCH_TYPE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BINDING, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REFERENCED_FROM, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PART, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIROperationDefinitionParameter)) {
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
            } else if (self::FIELD_NAME === $childName) {
                $v = new FHIRCode(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setName(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_USE === $childName) {
                $v = new FHIROperationParameterUse(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setUse(FHIROperationParameterUse::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SCOPE === $childName) {
                $v = new FHIROperationParameterScope(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->addScope(FHIROperationParameterScope::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MIN === $childName) {
                $v = new FHIRInteger(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMin(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MAX === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMax(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DOCUMENTATION === $childName) {
                $v = new FHIRMarkdown(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDocumentation(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TYPE === $childName) {
                $v = new FHIRFHIRTypes(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setType(FHIRFHIRTypes::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ALLOWED_TYPE === $childName) {
                $v = new FHIRFHIRTypes(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->addAllowedType(FHIRFHIRTypes::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TARGET_PROFILE === $childName) {
                $v = new FHIRCanonical(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->addTargetProfile(FHIRCanonical::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SEARCH_TYPE === $childName) {
                $v = new FHIRSearchParamType(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setSearchType(FHIRSearchParamType::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_BINDING === $childName) {
                $v = new FHIROperationDefinitionBinding();
                $type->setBinding(FHIROperationDefinitionBinding::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REFERENCED_FROM === $childName) {
                $v = new FHIROperationDefinitionReferencedFrom();
                $type->addReferencedFrom(FHIROperationDefinitionReferencedFrom::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PART === $childName) {
                $v = new FHIROperationDefinitionParameter();
                $type->addPart(FHIROperationDefinitionParameter::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_NAME])) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_NAME]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setName(new FHIRCode(
                    value: (string)$attributes[self::FIELD_NAME],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MIN])) {
            $pt = $type->getMin();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MIN]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMin(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_MIN],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MAX])) {
            $pt = $type->getMax();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MAX]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMax(new FHIRString(
                    value: (string)$attributes[self::FIELD_MAX],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DOCUMENTATION])) {
            $pt = $type->getDocumentation();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DOCUMENTATION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDocumentation(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_DOCUMENTATION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_TARGET_PROFILE])) {
            $v = new FHIRCanonical(value: (string)$attributes[self::FIELD_TARGET_PROFILE],
                                                       xmlLocation: XMLLocationEnum::ATTRIBUTE);
            $type->addTargetProfile($v);
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
            $xw->openRootNode('OperationDefinitionParameter', $this->_getSourceXMLNS());
        }
        if (isset($this->name) && $this->name->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_NAME, $this->name->getValue()?->getFormattedValue());
        }
        if (isset($this->min) && $this->min->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MIN, $this->min->getValue()?->getFormattedValue());
        }
        if (isset($this->max) && $this->max->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MAX, $this->max->getValue()?->getFormattedValue());
        }
        if (isset($this->documentation) && $this->documentation->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DOCUMENTATION, $this->documentation->getValue()?->getFormattedValue());
        }
        if (isset($this->targetProfile)) {
           foreach($this->targetProfile as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_TARGET_PROFILE, $v->getValue()?->getFormattedValue());
                    break;
                }
            }
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->name) && $this->name->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_NAME);
            $this->name->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->use)) {
            $xw->startElement(self::FIELD_USE);
            $this->use->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->scope)) {
            foreach ($this->scope as $v) {
                $xw->startElement(self::FIELD_SCOPE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->min) && $this->min->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MIN);
            $this->min->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->max) && $this->max->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MAX);
            $this->max->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->documentation) && $this->documentation->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DOCUMENTATION);
            $this->documentation->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->allowedType)) {
            foreach ($this->allowedType as $v) {
                $xw->startElement(self::FIELD_ALLOWED_TYPE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->targetProfile)) {
            foreach($this->targetProfile as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_TARGET_PROFILE);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->searchType)) {
            $xw->startElement(self::FIELD_SEARCH_TYPE);
            $this->searchType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->binding)) {
            $xw->startElement(self::FIELD_BINDING);
            $this->binding->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->referencedFrom)) {
            foreach ($this->referencedFrom as $v) {
                $xw->startElement(self::FIELD_REFERENCED_FROM);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->part)) {
            foreach ($this->part as $v) {
                $xw->startElement(self::FIELD_PART);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIROperationDefinitionParameter)) {
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
        if (isset($json[self::FIELD_NAME]) || isset($json[self::FIELD_NAME_EXT]) || array_key_exists(self::FIELD_NAME, $json) || array_key_exists(self::FIELD_NAME_EXT, $json)) {
            $value = $json[self::FIELD_NAME] ?? null;
            $ext = (isset($json[self::FIELD_NAME_EXT]) && is_array($json[self::FIELD_NAME_EXT])) ? $json[self::FIELD_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $type->setName($value);
                } else if (is_array($value)) {
                    $type->setName(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $type->setName(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setName(new FHIRCode($ext));
            } else {
                $type->setName(new FHIRCode(null));
            }
        }
        if (isset($json[self::FIELD_USE]) || isset($json[self::FIELD_USE_EXT]) || array_key_exists(self::FIELD_USE, $json) || array_key_exists(self::FIELD_USE_EXT, $json)) {
            $value = $json[self::FIELD_USE] ?? null;
            $ext = (isset($json[self::FIELD_USE_EXT]) && is_array($json[self::FIELD_USE_EXT])) ? $json[self::FIELD_USE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIROperationParameterUse) {
                    $type->setUse($value);
                } else if (is_array($value)) {
                    $type->setUse(new FHIROperationParameterUse(array_merge($ext, $value)));
                } else {
                    $type->setUse(new FHIROperationParameterUse([FHIROperationParameterUse::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setUse(new FHIROperationParameterUse($ext));
            } else {
                $type->setUse(new FHIROperationParameterUse(null));
            }
        }
        if (isset($json[self::FIELD_SCOPE]) || isset($json[self::FIELD_SCOPE_EXT]) || array_key_exists(self::FIELD_SCOPE, $json) || array_key_exists(self::FIELD_SCOPE_EXT, $json)) {
            $value = $json[self::FIELD_SCOPE] ?? null;
            $ext = (isset($json[self::FIELD_SCOPE_EXT]) && is_array($json[self::FIELD_SCOPE_EXT])) ? $json[self::FIELD_SCOPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIROperationParameterScope) {
                    $type->addScope($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIROperationParameterScope) {
                            $type->addScope($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addScope(new FHIROperationParameterScope(array_merge($v, $iext)));
                            } else {
                                $type->addScope(new FHIROperationParameterScope([FHIROperationParameterScope::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addScope(new FHIROperationParameterScope(array_merge($ext, $value)));
                } else {
                    $type->addScope(new FHIROperationParameterScope([FHIROperationParameterScope::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addScope(new FHIROperationParameterScope($iext));
                }
            } else {
                $type->addScope(new FHIROperationParameterScope(null));
            }
        }
        if (isset($json[self::FIELD_MIN]) || isset($json[self::FIELD_MIN_EXT]) || array_key_exists(self::FIELD_MIN, $json) || array_key_exists(self::FIELD_MIN_EXT, $json)) {
            $value = $json[self::FIELD_MIN] ?? null;
            $ext = (isset($json[self::FIELD_MIN_EXT]) && is_array($json[self::FIELD_MIN_EXT])) ? $json[self::FIELD_MIN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $type->setMin($value);
                } else if (is_array($value)) {
                    $type->setMin(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $type->setMin(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMin(new FHIRInteger($ext));
            } else {
                $type->setMin(new FHIRInteger(null));
            }
        }
        if (isset($json[self::FIELD_MAX]) || isset($json[self::FIELD_MAX_EXT]) || array_key_exists(self::FIELD_MAX, $json) || array_key_exists(self::FIELD_MAX_EXT, $json)) {
            $value = $json[self::FIELD_MAX] ?? null;
            $ext = (isset($json[self::FIELD_MAX_EXT]) && is_array($json[self::FIELD_MAX_EXT])) ? $json[self::FIELD_MAX_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setMax($value);
                } else if (is_array($value)) {
                    $type->setMax(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setMax(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMax(new FHIRString($ext));
            } else {
                $type->setMax(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_DOCUMENTATION]) || isset($json[self::FIELD_DOCUMENTATION_EXT]) || array_key_exists(self::FIELD_DOCUMENTATION, $json) || array_key_exists(self::FIELD_DOCUMENTATION_EXT, $json)) {
            $value = $json[self::FIELD_DOCUMENTATION] ?? null;
            $ext = (isset($json[self::FIELD_DOCUMENTATION_EXT]) && is_array($json[self::FIELD_DOCUMENTATION_EXT])) ? $json[self::FIELD_DOCUMENTATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $type->setDocumentation($value);
                } else if (is_array($value)) {
                    $type->setDocumentation(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $type->setDocumentation(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDocumentation(new FHIRMarkdown($ext));
            } else {
                $type->setDocumentation(new FHIRMarkdown(null));
            }
        }
        if (isset($json[self::FIELD_TYPE]) || isset($json[self::FIELD_TYPE_EXT]) || array_key_exists(self::FIELD_TYPE, $json) || array_key_exists(self::FIELD_TYPE_EXT, $json)) {
            $value = $json[self::FIELD_TYPE] ?? null;
            $ext = (isset($json[self::FIELD_TYPE_EXT]) && is_array($json[self::FIELD_TYPE_EXT])) ? $json[self::FIELD_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRFHIRTypes) {
                    $type->setType($value);
                } else if (is_array($value)) {
                    $type->setType(new FHIRFHIRTypes(array_merge($ext, $value)));
                } else {
                    $type->setType(new FHIRFHIRTypes([FHIRFHIRTypes::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setType(new FHIRFHIRTypes($ext));
            } else {
                $type->setType(new FHIRFHIRTypes(null));
            }
        }
        if (isset($json[self::FIELD_ALLOWED_TYPE]) || isset($json[self::FIELD_ALLOWED_TYPE_EXT]) || array_key_exists(self::FIELD_ALLOWED_TYPE, $json) || array_key_exists(self::FIELD_ALLOWED_TYPE_EXT, $json)) {
            $value = $json[self::FIELD_ALLOWED_TYPE] ?? null;
            $ext = (isset($json[self::FIELD_ALLOWED_TYPE_EXT]) && is_array($json[self::FIELD_ALLOWED_TYPE_EXT])) ? $json[self::FIELD_ALLOWED_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRFHIRTypes) {
                    $type->addAllowedType($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRFHIRTypes) {
                            $type->addAllowedType($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addAllowedType(new FHIRFHIRTypes(array_merge($v, $iext)));
                            } else {
                                $type->addAllowedType(new FHIRFHIRTypes([FHIRFHIRTypes::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addAllowedType(new FHIRFHIRTypes(array_merge($ext, $value)));
                } else {
                    $type->addAllowedType(new FHIRFHIRTypes([FHIRFHIRTypes::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addAllowedType(new FHIRFHIRTypes($iext));
                }
            } else {
                $type->addAllowedType(new FHIRFHIRTypes(null));
            }
        }
        if (isset($json[self::FIELD_TARGET_PROFILE]) || isset($json[self::FIELD_TARGET_PROFILE_EXT]) || array_key_exists(self::FIELD_TARGET_PROFILE, $json) || array_key_exists(self::FIELD_TARGET_PROFILE_EXT, $json)) {
            $value = $json[self::FIELD_TARGET_PROFILE] ?? null;
            $ext = (isset($json[self::FIELD_TARGET_PROFILE_EXT]) && is_array($json[self::FIELD_TARGET_PROFILE_EXT])) ? $json[self::FIELD_TARGET_PROFILE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $type->addTargetProfile($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRCanonical) {
                            $type->addTargetProfile($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addTargetProfile(new FHIRCanonical(array_merge($v, $iext)));
                            } else {
                                $type->addTargetProfile(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addTargetProfile(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $type->addTargetProfile(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addTargetProfile(new FHIRCanonical($iext));
                }
            } else {
                $type->addTargetProfile(new FHIRCanonical(null));
            }
        }
        if (isset($json[self::FIELD_SEARCH_TYPE]) || isset($json[self::FIELD_SEARCH_TYPE_EXT]) || array_key_exists(self::FIELD_SEARCH_TYPE, $json) || array_key_exists(self::FIELD_SEARCH_TYPE_EXT, $json)) {
            $value = $json[self::FIELD_SEARCH_TYPE] ?? null;
            $ext = (isset($json[self::FIELD_SEARCH_TYPE_EXT]) && is_array($json[self::FIELD_SEARCH_TYPE_EXT])) ? $json[self::FIELD_SEARCH_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRSearchParamType) {
                    $type->setSearchType($value);
                } else if (is_array($value)) {
                    $type->setSearchType(new FHIRSearchParamType(array_merge($ext, $value)));
                } else {
                    $type->setSearchType(new FHIRSearchParamType([FHIRSearchParamType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSearchType(new FHIRSearchParamType($ext));
            } else {
                $type->setSearchType(new FHIRSearchParamType(null));
            }
        }
        if (isset($json[self::FIELD_BINDING]) || array_key_exists(self::FIELD_BINDING, $json)) {
            if ($json[self::FIELD_BINDING] instanceof FHIROperationDefinitionBinding) {
                $type->setBinding($json[self::FIELD_BINDING]);
            } else {
                $type->setBinding(new FHIROperationDefinitionBinding($json[self::FIELD_BINDING]));
            }
        }
        if (isset($json[self::FIELD_REFERENCED_FROM]) || array_key_exists(self::FIELD_REFERENCED_FROM, $json)) {
            if (is_array($json[self::FIELD_REFERENCED_FROM])) {
                foreach($json[self::FIELD_REFERENCED_FROM] as $v) {
                    if ($v instanceof FHIROperationDefinitionReferencedFrom) {
                        $type->addReferencedFrom($v);
                    } else {
                        $type->addReferencedFrom(new FHIROperationDefinitionReferencedFrom($v));
                    }
                }
            } elseif ($json[self::FIELD_REFERENCED_FROM] instanceof FHIROperationDefinitionReferencedFrom) {
                $type->addReferencedFrom($json[self::FIELD_REFERENCED_FROM]);
            } else {
                $type->addReferencedFrom(new FHIROperationDefinitionReferencedFrom($json[self::FIELD_REFERENCED_FROM]));
            }
        }
        if (isset($json[self::FIELD_PART]) || array_key_exists(self::FIELD_PART, $json)) {
            if (is_array($json[self::FIELD_PART])) {
                foreach($json[self::FIELD_PART] as $v) {
                    if ($v instanceof FHIROperationDefinitionParameter) {
                        $type->addPart($v);
                    } else {
                        $type->addPart(new FHIROperationDefinitionParameter($v));
                    }
                }
            } elseif ($json[self::FIELD_PART] instanceof FHIROperationDefinitionParameter) {
                $type->addPart($json[self::FIELD_PART]);
            } else {
                $type->addPart(new FHIROperationDefinitionParameter($json[self::FIELD_PART]));
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
            $ext = $this->name->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_name = $ext;
            }
        }
        if (isset($this->use)) {
            if (null !== ($val = $this->use->getValue())) {
                $out->use = $val;
            }
            $ext = $this->use->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_use = $ext;
            }
        }
        if (isset($this->scope) && [] !== $this->scope) {
            $vals = [];
            $exts = [];
            foreach ($this->scope as $v) {
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
                $out->scope = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_scope = $exts;
            }
        }
        if (isset($this->min)) {
            if (null !== ($val = $this->min->getValue())) {
                $out->min = $val;
            }
            $ext = $this->min->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_min = $ext;
            }
        }
        if (isset($this->max)) {
            if (null !== ($val = $this->max->getValue())) {
                $out->max = $val;
            }
            $ext = $this->max->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_max = $ext;
            }
        }
        if (isset($this->documentation)) {
            if (null !== ($val = $this->documentation->getValue())) {
                $out->documentation = $val;
            }
            $ext = $this->documentation->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_documentation = $ext;
            }
        }
        if (isset($this->type)) {
            if (null !== ($val = $this->type->getValue())) {
                $out->type = $val;
            }
            $ext = $this->type->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_type = $ext;
            }
        }
        if (isset($this->allowedType) && [] !== $this->allowedType) {
            $vals = [];
            $exts = [];
            foreach ($this->allowedType as $v) {
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
                $out->allowedType = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_allowedType = $exts;
            }
        }
        if (isset($this->targetProfile) && [] !== $this->targetProfile) {
            $vals = [];
            $exts = [];
            foreach ($this->targetProfile as $v) {
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
                $out->targetProfile = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_targetProfile = $exts;
            }
        }
        if (isset($this->searchType)) {
            if (null !== ($val = $this->searchType->getValue())) {
                $out->searchType = $val;
            }
            $ext = $this->searchType->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_searchType = $ext;
            }
        }
        if (isset($this->binding)) {
            $out->binding = $this->binding;
        }
        if (isset($this->referencedFrom) && [] !== $this->referencedFrom) {
            $out->referencedFrom = $this->referencedFrom;
        }
        if (isset($this->part) && [] !== $this->part) {
            $out->part = $this->part;
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