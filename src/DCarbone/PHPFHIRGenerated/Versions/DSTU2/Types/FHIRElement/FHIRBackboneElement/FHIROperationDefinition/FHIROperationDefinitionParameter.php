<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIROperationDefinition;

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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
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
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValuePatternMatchRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIROperationParameterUse;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIROperationParameterUseList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;

/**
 * A formal computable definition of an operation (on the RESTful interface) or a
 * named query (using the search interaction).
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIROperationDefinitionParameter extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER;

    /* class_default.php:56 */
    public const FIELD_NAME = 'name';
    public const FIELD_NAME_EXT = '_name';
    public const FIELD_USE = 'use';
    public const FIELD_USE_EXT = '_use';
    public const FIELD_MIN = 'min';
    public const FIELD_MIN_EXT = '_min';
    public const FIELD_MAX = 'max';
    public const FIELD_MAX_EXT = '_max';
    public const FIELD_DOCUMENTATION = 'documentation';
    public const FIELD_DOCUMENTATION_EXT = '_documentation';
    public const FIELD_TYPE = 'type';
    public const FIELD_TYPE_EXT = '_type';
    public const FIELD_PROFILE = 'profile';
    public const FIELD_BINDING = 'binding';
    public const FIELD_PART = 'part';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_ID => [
            ValuePatternMatchRule::NAME => '/^[A-Za-z0-9\\-\\.]{1,64}$/',
        ],
        self::FIELD_NAME => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_USE => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_MIN => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_MAX => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_NAME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_USE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MIN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_MAX => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DOCUMENTATION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TYPE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The name of used to identify the parameter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode 
     */
    #[FHIRCode]
    protected FHIRCode $name;
    /**
     * Whether an operation parameter is an input or an output parameter.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this is an input or an output parameter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIROperationParameterUse 
     */
    #[FHIROperationParameterUse]
    protected FHIROperationParameterUse $use;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum number of times this parameter SHALL appear in the request or
     * response.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger 
     */
    #[FHIRInteger]
    protected FHIRInteger $min;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the request
     * or response.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $max;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the meaning or use of this parameter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $documentation;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type for this parameter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode 
     */
    #[FHIRCode]
    protected FHIRCode $type;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A profile the specifies the rules that this parameter must conform to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    #[FHIRReference]
    protected FHIRReference $profile;
    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * Binds to a value set if this parameter is coded (code, Coding, CodeableConcept).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding 
     */
    #[FHIROperationDefinitionBinding]
    protected FHIROperationDefinitionBinding $binding;
    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * The parts of a Tuple Parameter.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter> 
     */
    #[FHIROperationDefinitionParameter]
    protected array $part;

    /* constructor.php:61 */
    /**
     * FHIROperationDefinitionParameter Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension> $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode $name
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIROperationParameterUseList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIROperationParameterUse $use
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger $min
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $max
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $documentation
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $profile
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding $binding
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter> $part
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRCodePrimitive|FHIRCode $name = null,
                                null|string|FHIROperationParameterUseList|FHIROperationParameterUse $use = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $min = null,
                                null|string|FHIRStringPrimitive|FHIRString $max = null,
                                null|string|FHIRStringPrimitive|FHIRString $documentation = null,
                                null|string|FHIRCodePrimitive|FHIRCode $type = null,
                                null|FHIRReference $profile = null,
                                null|FHIROperationDefinitionBinding $binding = null,
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
        if (null !== $profile) {
            $this->setProfile($profile);
        }
        if (null !== $binding) {
            $this->setBinding($binding);
        }
        if (null !== $part) {
            $this->setPart(...$part);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The name of used to identify the parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode $name
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
     * Whether an operation parameter is an input or an output parameter.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this is an input or an output parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIROperationParameterUse
     */
    public function getUse(): null|FHIROperationParameterUse
    {
        return $this->use ?? null;
    }

    /**
     * Whether an operation parameter is an input or an output parameter.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this is an input or an output parameter.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIROperationParameterUseList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIROperationParameterUse $use
     * @return static
     */
    public function setUse(null|string|FHIROperationParameterUseList|FHIROperationParameterUse $use): self
    {
        if (null === $use) {
            unset($this->use);
            return $this;
        }
        if (!($use instanceof FHIROperationParameterUse)) {
            $use = new FHIROperationParameterUse(value: $use);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger $min
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
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the request
     * or response.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getMax(): null|FHIRString
    {
        return $this->max ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the request
     * or response.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $max
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the meaning or use of this parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getDocumentation(): null|FHIRString
    {
        return $this->documentation ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the meaning or use of this parameter.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $documentation
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
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type for this parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode
     */
    public function getType(): null|FHIRCode
    {
        return $this->type ?? null;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type for this parameter.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode $type
     * @return static
     */
    public function setType(null|string|FHIRCodePrimitive|FHIRCode $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        if (!($type instanceof FHIRCode)) {
            $type = new FHIRCode(value: $type);
        }
        $this->type = $type;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A profile the specifies the rules that this parameter must conform to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
     */
    public function getProfile(): null|FHIRReference
    {
        return $this->profile ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A profile the specifies the rules that this parameter must conform to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $profile
     * @return static
     */
    public function setProfile(null|FHIRReference $profile): self
    {
        if (null === $profile) {
            unset($this->profile);
            return $this;
        }
        $this->profile = $profile;
        return $this;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * Binds to a value set if this parameter is coded (code, Coding, CodeableConcept).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding $binding
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
     * The parts of a Tuple Parameter.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter>
     */
    public function getPart(): array
    {
        return $this->part ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter>
     */
    public function getPartIterator(): iterable
    {
        if (!isset($this->part)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->part);
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * The parts of a Tuple Parameter.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter $part
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
     * The parts of a Tuple Parameter.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter ...$part
     * @return static
     */
    public function setPart(FHIROperationDefinitionParameter ...$part): self
    {
        if ([] === $part) {
            unset($this->part);
            return $this;
        }
        $this->part = $part;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
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
                $type->setName(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_USE === $cen) {
                $type->setUse(FHIROperationParameterUse::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MIN === $cen) {
                $type->setMin(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAX === $cen) {
                $type->setMax(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DOCUMENTATION === $cen) {
                $type->setDocumentation(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROFILE === $cen) {
                $type->setProfile(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BINDING === $cen) {
                $type->setBinding(FHIROperationDefinitionBinding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PART === $cen) {
                $type->addPart(FHIROperationDefinitionParameter::xmlUnserialize($ce, $config));
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
        if (isset($attributes[self::FIELD_USE])) {
            if (isset($type->use)) {
                $type->use->setValue((string)$attributes[self::FIELD_USE]);
            } else {
                $type->setUse((string)$attributes[self::FIELD_USE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_USE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_DOCUMENTATION])) {
            if (isset($type->documentation)) {
                $type->documentation->setValue((string)$attributes[self::FIELD_DOCUMENTATION]);
            } else {
                $type->setDocumentation((string)$attributes[self::FIELD_DOCUMENTATION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DOCUMENTATION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TYPE])) {
            if (isset($type->type)) {
                $type->type->setValue((string)$attributes[self::FIELD_TYPE]);
            } else {
                $type->setType((string)$attributes[self::FIELD_TYPE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TYPE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->use) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_USE]) {
            $xw->writeAttribute(self::FIELD_USE, $this->use->_getValueAsString());
        }
        if (isset($this->min) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MIN]) {
            $xw->writeAttribute(self::FIELD_MIN, $this->min->_getValueAsString());
        }
        if (isset($this->max) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_MAX]) {
            $xw->writeAttribute(self::FIELD_MAX, $this->max->_getValueAsString());
        }
        if (isset($this->documentation) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DOCUMENTATION]) {
            $xw->writeAttribute(self::FIELD_DOCUMENTATION, $this->documentation->_getValueAsString());
        }
        if (isset($this->type) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TYPE]) {
            $xw->writeAttribute(self::FIELD_TYPE, $this->type->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->name)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NAME]
                || $this->name->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NAME);
            $this->name->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NAME]);
            $xw->endElement();
        }
        if (isset($this->use)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_USE]
                || $this->use->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_USE);
            $this->use->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_USE]);
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
        if (isset($this->documentation)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DOCUMENTATION]
                || $this->documentation->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DOCUMENTATION);
            $this->documentation->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DOCUMENTATION]);
            $xw->endElement();
        }
        if (isset($this->type)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TYPE]
                || $this->type->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TYPE]);
            $xw->endElement();
        }
        if (isset($this->profile)) {
            $xw->startElement(self::FIELD_PROFILE);
            $this->profile->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->binding)) {
            $xw->startElement(self::FIELD_BINDING);
            $this->binding->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->part)) {
            foreach ($this->part as $v) {
                $xw->startElement(self::FIELD_PART);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
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
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->name)
            || isset($decoded->_name)
            || property_exists($decoded, self::FIELD_NAME)
            || property_exists($decoded, self::FIELD_NAME_EXT)) {
            $v = $decoded->_name ?? new \stdClass();
            $v->value = $decoded->name ?? null;
            $type->setName(FHIRCode::jsonUnserialize($v, $config));
        }
        if (isset($decoded->use)
            || isset($decoded->_use)
            || property_exists($decoded, self::FIELD_USE)
            || property_exists($decoded, self::FIELD_USE_EXT)) {
            $v = $decoded->_use ?? new \stdClass();
            $v->value = $decoded->use ?? null;
            $type->setUse(FHIROperationParameterUse::jsonUnserialize($v, $config));
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
        if (isset($decoded->documentation)
            || isset($decoded->_documentation)
            || property_exists($decoded, self::FIELD_DOCUMENTATION)
            || property_exists($decoded, self::FIELD_DOCUMENTATION_EXT)) {
            $v = $decoded->_documentation ?? new \stdClass();
            $v->value = $decoded->documentation ?? null;
            $type->setDocumentation(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->type)
            || isset($decoded->_type)
            || property_exists($decoded, self::FIELD_TYPE)
            || property_exists($decoded, self::FIELD_TYPE_EXT)) {
            $v = $decoded->_type ?? new \stdClass();
            $v->value = $decoded->type ?? null;
            $type->setType(FHIRCode::jsonUnserialize($v, $config));
        }
        if (isset($decoded->profile) || property_exists($decoded, self::FIELD_PROFILE)) {
            if (is_array($decoded->profile)) {
                $type->setProfile(FHIRReference::jsonUnserialize(reset($decoded->profile), $config));
            } else {
                $type->setProfile(FHIRReference::jsonUnserialize($decoded->profile, $config));
            }
        }
        if (isset($decoded->binding) || property_exists($decoded, self::FIELD_BINDING)) {
            if (is_array($decoded->binding)) {
                $type->setBinding(FHIROperationDefinitionBinding::jsonUnserialize(reset($decoded->binding), $config));
            } else {
                $type->setBinding(FHIROperationDefinitionBinding::jsonUnserialize($decoded->binding, $config));
            }
        }
        if (isset($decoded->part) || property_exists($decoded, self::FIELD_PART)) {
            if (is_object($decoded->part)) {
                $vals = [$decoded->part];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PART, true);
            } else {
                $vals = $decoded->part;
            }
            foreach($vals as $v) {
                $type->addPart(FHIROperationDefinitionParameter::jsonUnserialize($v, $config));
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
        if (isset($this->use)) {
            if (null !== ($val = $this->use->getValue())) {
                $out->use = $val;
            }
            if ($this->use->_nonValueFieldDefined()) {
                $ext = $this->use->jsonSerialize();
                unset($ext->value);
                $out->_use = $ext;
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
        if (isset($this->type)) {
            if (null !== ($val = $this->type->getValue())) {
                $out->type = $val;
            }
            if ($this->type->_nonValueFieldDefined()) {
                $ext = $this->type->jsonSerialize();
                unset($ext->value);
                $out->_type = $ext;
            }
        }
        if (isset($this->profile)) {
            $out->profile = $this->profile;
        }
        if (isset($this->binding)) {
            $out->binding = $this->binding;
        }
        if (isset($this->part) && [] !== $this->part) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PART) && 1 === count($this->part)) {
                $out->part = $this->part[0];
            } else {
                $out->part = $this->part;
            }
        }
        return $out;
    }
}