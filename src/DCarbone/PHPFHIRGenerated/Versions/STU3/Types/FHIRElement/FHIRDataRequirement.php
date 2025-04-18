<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement;

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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
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
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * Describes a required data item for evaluation in terms of the type of data, and
 * optional code or date-based filters of the data.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRDataRequirement extends FHIRElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_DATA_REQUIREMENT;

    /* class_default.php:56 */
    public const FIELD_TYPE = 'type';
    public const FIELD_TYPE_EXT = '_type';
    public const FIELD_PROFILE = 'profile';
    public const FIELD_PROFILE_EXT = '_profile';
    public const FIELD_MUST_SUPPORT = 'mustSupport';
    public const FIELD_MUST_SUPPORT_EXT = '_mustSupport';
    public const FIELD_CODE_FILTER = 'codeFilter';
    public const FIELD_DATE_FILTER = 'dateFilter';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_TYPE => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_TYPE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The type of the required data, specified as the type name of a resource. For
     * profiles, this value is set to the type of the base resource of the profile.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode 
     */
    #[FHIRCode]
    protected FHIRCode $type;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The profile of the required data, specified as the uri of the profile
     * definition.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri> 
     */
    #[FHIRUri]
    protected array $profile;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that specific elements of the type are referenced by the knowledge
     * module and must be supported by the consumer in order to obtain an effective
     * evaluation. This does not mean that a value is required for this element, only
     * that the consuming system must understand the element and be able to provide
     * values for it if they are available. Note that the value for this element can be
     * a path to allow references to nested elements. In that case, all the elements
     * along the path must be supported.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString> 
     */
    #[FHIRString]
    protected array $mustSupport;
    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code filters specify additional constraints on the data, specifying the value
     * set of interest for a particular element of the data.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter> 
     */
    #[FHIRDataRequirementCodeFilter]
    protected array $codeFilter;
    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Date filters specify additional constraints on the data in terms of the
     * applicable date range for specific elements.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter> 
     */
    #[FHIRDataRequirementDateFilter]
    protected array $dateFilter;

    /* constructor.php:61 */
    /**
     * FHIRDataRequirement Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode $type
     * @param null|iterable<string>|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive>|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri> $profile
     * @param null|iterable<string>|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive>|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString> $mustSupport
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter> $codeFilter
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter> $dateFilter
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|string|FHIRCodePrimitive|FHIRCode $type = null,
                                null|iterable $profile = null,
                                null|iterable $mustSupport = null,
                                null|iterable $codeFilter = null,
                                null|iterable $dateFilter = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            fhirComments: $fhirComments);
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $profile) {
            $this->setProfile(...$profile);
        }
        if (null !== $mustSupport) {
            $this->setMustSupport(...$mustSupport);
        }
        if (null !== $codeFilter) {
            $this->setCodeFilter(...$codeFilter);
        }
        if (null !== $dateFilter) {
            $this->setDateFilter(...$dateFilter);
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
     * The type of the required data, specified as the type name of a resource. For
     * profiles, this value is set to the type of the base resource of the profile.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode
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
     * The type of the required data, specified as the type name of a resource. For
     * profiles, this value is set to the type of the base resource of the profile.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode $type
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
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The profile of the required data, specified as the uri of the profile
     * definition.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri>
     */
    public function getProfile(): array
    {
        return $this->profile ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri>
     */
    public function getProfileIterator(): iterable
    {
        if (!isset($this->profile)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->profile);
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The profile of the required data, specified as the uri of the profile
     * definition.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $profile
     * @return static
     */
    public function addProfile(string|FHIRUriPrimitive|FHIRUri $profile): self
    {
        if (!($profile instanceof FHIRUri)) {
            $profile = new FHIRUri(value: $profile);
        }
        if (!isset($this->profile)) {
            $this->profile = [];
        }
        $this->profile[] = $profile;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The profile of the required data, specified as the uri of the profile
     * definition.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri ...$profile
     * @return static
     */
    public function setProfile(string|FHIRUriPrimitive|FHIRUri ...$profile): self
    {
        if ([] === $profile) {
            unset($this->profile);
            return $this;
        }
        $this->profile = [];
        foreach($profile as $v) {
            if ($v instanceof FHIRUri) {
                $this->profile[] = $v;
            } else {
                $this->profile[] = new FHIRUri(value: $v);
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that specific elements of the type are referenced by the knowledge
     * module and must be supported by the consumer in order to obtain an effective
     * evaluation. This does not mean that a value is required for this element, only
     * that the consuming system must understand the element and be able to provide
     * values for it if they are available. Note that the value for this element can be
     * a path to allow references to nested elements. In that case, all the elements
     * along the path must be supported.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString>
     */
    public function getMustSupport(): array
    {
        return $this->mustSupport ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString>
     */
    public function getMustSupportIterator(): iterable
    {
        if (!isset($this->mustSupport)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->mustSupport);
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that specific elements of the type are referenced by the knowledge
     * module and must be supported by the consumer in order to obtain an effective
     * evaluation. This does not mean that a value is required for this element, only
     * that the consuming system must understand the element and be able to provide
     * values for it if they are available. Note that the value for this element can be
     * a path to allow references to nested elements. In that case, all the elements
     * along the path must be supported.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $mustSupport
     * @return static
     */
    public function addMustSupport(string|FHIRStringPrimitive|FHIRString $mustSupport): self
    {
        if (!($mustSupport instanceof FHIRString)) {
            $mustSupport = new FHIRString(value: $mustSupport);
        }
        if (!isset($this->mustSupport)) {
            $this->mustSupport = [];
        }
        $this->mustSupport[] = $mustSupport;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates that specific elements of the type are referenced by the knowledge
     * module and must be supported by the consumer in order to obtain an effective
     * evaluation. This does not mean that a value is required for this element, only
     * that the consuming system must understand the element and be able to provide
     * values for it if they are available. Note that the value for this element can be
     * a path to allow references to nested elements. In that case, all the elements
     * along the path must be supported.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString ...$mustSupport
     * @return static
     */
    public function setMustSupport(string|FHIRStringPrimitive|FHIRString ...$mustSupport): self
    {
        if ([] === $mustSupport) {
            unset($this->mustSupport);
            return $this;
        }
        $this->mustSupport = [];
        foreach($mustSupport as $v) {
            if ($v instanceof FHIRString) {
                $this->mustSupport[] = $v;
            } else {
                $this->mustSupport[] = new FHIRString(value: $v);
            }
        }
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code filters specify additional constraints on the data, specifying the value
     * set of interest for a particular element of the data.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter>
     */
    public function getCodeFilter(): array
    {
        return $this->codeFilter ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter>
     */
    public function getCodeFilterIterator(): iterable
    {
        if (!isset($this->codeFilter)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->codeFilter);
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code filters specify additional constraints on the data, specifying the value
     * set of interest for a particular element of the data.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter $codeFilter
     * @return static
     */
    public function addCodeFilter(FHIRDataRequirementCodeFilter $codeFilter): self
    {
        if (!isset($this->codeFilter)) {
            $this->codeFilter = [];
        }
        $this->codeFilter[] = $codeFilter;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code filters specify additional constraints on the data, specifying the value
     * set of interest for a particular element of the data.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter ...$codeFilter
     * @return static
     */
    public function setCodeFilter(FHIRDataRequirementCodeFilter ...$codeFilter): self
    {
        if ([] === $codeFilter) {
            unset($this->codeFilter);
            return $this;
        }
        $this->codeFilter = $codeFilter;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Date filters specify additional constraints on the data in terms of the
     * applicable date range for specific elements.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter>
     */
    public function getDateFilter(): array
    {
        return $this->dateFilter ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter>
     */
    public function getDateFilterIterator(): iterable
    {
        if (!isset($this->dateFilter)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->dateFilter);
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Date filters specify additional constraints on the data in terms of the
     * applicable date range for specific elements.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter $dateFilter
     * @return static
     */
    public function addDateFilter(FHIRDataRequirementDateFilter $dateFilter): self
    {
        if (!isset($this->dateFilter)) {
            $this->dateFilter = [];
        }
        $this->dateFilter[] = $dateFilter;
        return $this;
    }

    /**
     * Describes a required data item for evaluation in terms of the type of data, and
     * optional code or date-based filters of the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Date filters specify additional constraints on the data in terms of the
     * applicable date range for specific elements.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter ...$dateFilter
     * @return static
     */
    public function setDateFilter(FHIRDataRequirementDateFilter ...$dateFilter): self
    {
        if ([] === $dateFilter) {
            unset($this->dateFilter);
            return $this;
        }
        $this->dateFilter = $dateFilter;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDataRequirement)) {
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
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROFILE === $cen) {
                $type->addProfile(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MUST_SUPPORT === $cen) {
                $type->addMustSupport(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE_FILTER === $cen) {
                $type->addCodeFilter(FHIRDataRequirementCodeFilter::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATE_FILTER === $cen) {
                $type->addDateFilter(FHIRDataRequirementDateFilter::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->type) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TYPE]) {
            $xw->writeAttribute(self::FIELD_TYPE, $this->type->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->type)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TYPE]
                || $this->type->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TYPE]);
            $xw->endElement();
        }
        if (isset($this->profile) && [] !== $this->profile) {
            foreach($this->profile as $v) {
                $xw->startElement(self::FIELD_PROFILE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->mustSupport) && [] !== $this->mustSupport) {
            foreach($this->mustSupport as $v) {
                $xw->startElement(self::FIELD_MUST_SUPPORT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->codeFilter)) {
            foreach ($this->codeFilter as $v) {
                $xw->startElement(self::FIELD_CODE_FILTER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->dateFilter)) {
            foreach ($this->dateFilter as $v) {
                $xw->startElement(self::FIELD_DATE_FILTER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDataRequirement)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->type)
            || isset($decoded->_type)
            || property_exists($decoded, self::FIELD_TYPE)
            || property_exists($decoded, self::FIELD_TYPE_EXT)) {
            $v = $decoded->_type ?? new \stdClass();
            $v->value = $decoded->type ?? null;
            $type->setType(FHIRCode::jsonUnserialize($v, $config));
        }
        if (isset($decoded->profile)
            || isset($decoded->_profile)
            || property_exists($decoded, self::FIELD_PROFILE)
            || property_exists($decoded, self::FIELD_PROFILE_EXT)) {
            $vals = (array)($decoded->profile ?? []);
            $exts = (array)($decoded->FIELD_PROFILE_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addProfile(FHIRUri::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->mustSupport)
            || isset($decoded->_mustSupport)
            || property_exists($decoded, self::FIELD_MUST_SUPPORT)
            || property_exists($decoded, self::FIELD_MUST_SUPPORT_EXT)) {
            $vals = (array)($decoded->mustSupport ?? []);
            $exts = (array)($decoded->FIELD_MUST_SUPPORT_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addMustSupport(FHIRString::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->codeFilter) || property_exists($decoded, self::FIELD_CODE_FILTER)) {
            if (is_object($decoded->codeFilter)) {
                $vals = [$decoded->codeFilter];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CODE_FILTER, true);
            } else {
                $vals = $decoded->codeFilter;
            }
            foreach($vals as $v) {
                $type->addCodeFilter(FHIRDataRequirementCodeFilter::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->dateFilter) || property_exists($decoded, self::FIELD_DATE_FILTER)) {
            if (is_object($decoded->dateFilter)) {
                $vals = [$decoded->dateFilter];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DATE_FILTER, true);
            } else {
                $vals = $decoded->dateFilter;
            }
            foreach($vals as $v) {
                $type->addDateFilter(FHIRDataRequirementDateFilter::jsonUnserialize($v, $config));
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
        if (isset($this->profile) && [] !== $this->profile) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->profile as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->profile = $vals;
            }
            if ($hasExts) {
                $out->_profile = $exts;
            }
        }
        if (isset($this->mustSupport) && [] !== $this->mustSupport) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->mustSupport as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->mustSupport = $vals;
            }
            if ($hasExts) {
                $out->_mustSupport = $exts;
            }
        }
        if (isset($this->codeFilter) && [] !== $this->codeFilter) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CODE_FILTER) && 1 === count($this->codeFilter)) {
                $out->codeFilter = $this->codeFilter[0];
            } else {
                $out->codeFilter = $this->codeFilter;
            }
        }
        if (isset($this->dateFilter) && [] !== $this->dateFilter) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_DATE_FILTER) && 1 === count($this->dateFilter)) {
                $out->dateFilter = $this->dateFilter[0];
            } else {
                $out->dateFilter = $this->dateFilter;
            }
        }
        return $out;
    }
}