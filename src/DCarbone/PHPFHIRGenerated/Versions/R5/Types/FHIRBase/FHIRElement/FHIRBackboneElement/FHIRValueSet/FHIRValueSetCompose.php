<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet;

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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A ValueSet resource instance specifies a set of codes drawn from one or more
 * code systems, intended for use in a particular context. Value sets link between
 * [CodeSystem](codesystem.html) definitions and their use in [coded
 * elements](terminologies.html).
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRValueSetCompose extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_VALUE_SET_DOT_COMPOSE;

    /* class_default.php:56 */
    public const FIELD_LOCKED_DATE = 'lockedDate';
    public const FIELD_LOCKED_DATE_EXT = '_lockedDate';
    public const FIELD_INACTIVE = 'inactive';
    public const FIELD_INACTIVE_EXT = '_inactive';
    public const FIELD_INCLUDE = 'include';
    public const FIELD_EXCLUDE = 'exclude';
    public const FIELD_PROPERTY = 'property';
    public const FIELD_PROPERTY_EXT = '_property';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_INCLUDE => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_LOCKED_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_INACTIVE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Locked Date is the effective date that is used to determine the version of
     * all referenced Code Systems and Value Set Definitions included in the compose
     * that are not already tied to a specific version.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate 
     */
    #[FHIRDate]
    protected FHIRDate $lockedDate;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether inactive codes - codes that are not approved for current use - are in
     * the value set. If inactive = true, inactive codes are to be included in the
     * expansion, if inactive = false, the inactive codes will not be included in the
     * expansion. If absent, the behavior is determined by the implementation, or by
     * the applicable $expand parameters (but generally, inactive codes would be
     * expected to be included).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    #[FHIRBoolean]
    protected FHIRBoolean $inactive;
    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [CodeSystem](codesystem.html) definitions and their use in [coded
     * elements](terminologies.html).
     *
     * Include one or more codes from a code system or other value set(s).
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude> 
     */
    #[FHIRValueSetInclude]
    protected array $include;
    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [CodeSystem](codesystem.html) definitions and their use in [coded
     * elements](terminologies.html).
     *
     * Exclude one or more codes from the value set based on code system filters and/or
     * other value sets.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude> 
     */
    #[FHIRValueSetInclude]
    protected array $exclude;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A property to return in the expansion, if the client doesn't ask for any
     * particular properties. May be either a code from the code system definition
     * (convenient) or a the formal URI that refers to the property. The special value
     * '*' means all properties known to the server.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString> 
     */
    #[FHIRString]
    protected array $property;

    /* constructor.php:61 */
    /**
     * FHIRValueSetCompose Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $lockedDate
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $inactive
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude> $include
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude> $exclude
     * @param null|iterable<string>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString> $property
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $lockedDate = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $inactive = null,
                                null|iterable $include = null,
                                null|iterable $exclude = null,
                                null|iterable $property = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $lockedDate) {
            $this->setLockedDate($lockedDate);
        }
        if (null !== $inactive) {
            $this->setInactive($inactive);
        }
        if (null !== $include) {
            $this->setInclude(...$include);
        }
        if (null !== $exclude) {
            $this->setExclude(...$exclude);
        }
        if (null !== $property) {
            $this->setProperty(...$property);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Locked Date is the effective date that is used to determine the version of
     * all referenced Code Systems and Value Set Definitions included in the compose
     * that are not already tied to a specific version.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate
     */
    public function getLockedDate(): null|FHIRDate
    {
        return $this->lockedDate ?? null;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no UTC offset.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Locked Date is the effective date that is used to determine the version of
     * all referenced Code Systems and Value Set Definitions included in the compose
     * that are not already tied to a specific version.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDate $lockedDate
     * @return static
     */
    public function setLockedDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $lockedDate): self
    {
        if (null === $lockedDate) {
            unset($this->lockedDate);
            return $this;
        }
        if (!($lockedDate instanceof FHIRDate)) {
            $lockedDate = new FHIRDate(value: $lockedDate);
        }
        $this->lockedDate = $lockedDate;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether inactive codes - codes that are not approved for current use - are in
     * the value set. If inactive = true, inactive codes are to be included in the
     * expansion, if inactive = false, the inactive codes will not be included in the
     * expansion. If absent, the behavior is determined by the implementation, or by
     * the applicable $expand parameters (but generally, inactive codes would be
     * expected to be included).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getInactive(): null|FHIRBoolean
    {
        return $this->inactive ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether inactive codes - codes that are not approved for current use - are in
     * the value set. If inactive = true, inactive codes are to be included in the
     * expansion, if inactive = false, the inactive codes will not be included in the
     * expansion. If absent, the behavior is determined by the implementation, or by
     * the applicable $expand parameters (but generally, inactive codes would be
     * expected to be included).
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $inactive
     * @return static
     */
    public function setInactive(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $inactive): self
    {
        if (null === $inactive) {
            unset($this->inactive);
            return $this;
        }
        if (!($inactive instanceof FHIRBoolean)) {
            $inactive = new FHIRBoolean(value: $inactive);
        }
        $this->inactive = $inactive;
        return $this;
    }

    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [CodeSystem](codesystem.html) definitions and their use in [coded
     * elements](terminologies.html).
     *
     * Include one or more codes from a code system or other value set(s).
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude>
     */
    public function getInclude(): array
    {
        return $this->include ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude>
     */
    public function getIncludeIterator(): iterable
    {
        if (!isset($this->include)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->include);
    }

    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [CodeSystem](codesystem.html) definitions and their use in [coded
     * elements](terminologies.html).
     *
     * Include one or more codes from a code system or other value set(s).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude $include
     * @return static
     */
    public function addInclude(FHIRValueSetInclude $include): self
    {
        if (!isset($this->include)) {
            $this->include = [];
        }
        $this->include[] = $include;
        return $this;
    }

    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [CodeSystem](codesystem.html) definitions and their use in [coded
     * elements](terminologies.html).
     *
     * Include one or more codes from a code system or other value set(s).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude ...$include
     * @return static
     */
    public function setInclude(FHIRValueSetInclude ...$include): self
    {
        if ([] === $include) {
            unset($this->include);
            return $this;
        }
        $this->include = $include;
        return $this;
    }

    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [CodeSystem](codesystem.html) definitions and their use in [coded
     * elements](terminologies.html).
     *
     * Exclude one or more codes from the value set based on code system filters and/or
     * other value sets.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude>
     */
    public function getExclude(): array
    {
        return $this->exclude ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude>
     */
    public function getExcludeIterator(): iterable
    {
        if (!isset($this->exclude)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->exclude);
    }

    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [CodeSystem](codesystem.html) definitions and their use in [coded
     * elements](terminologies.html).
     *
     * Exclude one or more codes from the value set based on code system filters and/or
     * other value sets.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude $exclude
     * @return static
     */
    public function addExclude(FHIRValueSetInclude $exclude): self
    {
        if (!isset($this->exclude)) {
            $this->exclude = [];
        }
        $this->exclude[] = $exclude;
        return $this;
    }

    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [CodeSystem](codesystem.html) definitions and their use in [coded
     * elements](terminologies.html).
     *
     * Exclude one or more codes from the value set based on code system filters and/or
     * other value sets.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude ...$exclude
     * @return static
     */
    public function setExclude(FHIRValueSetInclude ...$exclude): self
    {
        if ([] === $exclude) {
            unset($this->exclude);
            return $this;
        }
        $this->exclude = $exclude;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A property to return in the expansion, if the client doesn't ask for any
     * particular properties. May be either a code from the code system definition
     * (convenient) or a the formal URI that refers to the property. The special value
     * '*' means all properties known to the server.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString>
     */
    public function getProperty(): array
    {
        return $this->property ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString>
     */
    public function getPropertyIterator(): iterable
    {
        if (!isset($this->property)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->property);
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A property to return in the expansion, if the client doesn't ask for any
     * particular properties. May be either a code from the code system definition
     * (convenient) or a the formal URI that refers to the property. The special value
     * '*' means all properties known to the server.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $property
     * @return static
     */
    public function addProperty(string|FHIRStringPrimitive|FHIRString $property): self
    {
        if (!($property instanceof FHIRString)) {
            $property = new FHIRString(value: $property);
        }
        if (!isset($this->property)) {
            $this->property = [];
        }
        $this->property[] = $property;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A property to return in the expansion, if the client doesn't ask for any
     * particular properties. May be either a code from the code system definition
     * (convenient) or a the formal URI that refers to the property. The special value
     * '*' means all properties known to the server.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString ...$property
     * @return static
     */
    public function setProperty(string|FHIRStringPrimitive|FHIRString ...$property): self
    {
        if ([] === $property) {
            unset($this->property);
            return $this;
        }
        $this->property = [];
        foreach($property as $v) {
            if ($v instanceof FHIRString) {
                $this->property[] = $v;
            } else {
                $this->property[] = new FHIRString(value: $v);
            }
        }
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRValueSetCompose)) {
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
            } else if (self::FIELD_LOCKED_DATE === $cen) {
                $type->setLockedDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INACTIVE === $cen) {
                $type->setInactive(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INCLUDE === $cen) {
                $type->addInclude(FHIRValueSetInclude::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXCLUDE === $cen) {
                $type->addExclude(FHIRValueSetInclude::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROPERTY === $cen) {
                $type->addProperty(FHIRString::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LOCKED_DATE])) {
            if (isset($type->lockedDate)) {
                $type->lockedDate->setValue((string)$attributes[self::FIELD_LOCKED_DATE]);
            } else {
                $type->setLockedDate((string)$attributes[self::FIELD_LOCKED_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LOCKED_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_INACTIVE])) {
            if (isset($type->inactive)) {
                $type->inactive->setValue((string)$attributes[self::FIELD_INACTIVE]);
            } else {
                $type->setInactive((string)$attributes[self::FIELD_INACTIVE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_INACTIVE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->lockedDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LOCKED_DATE]) {
            $xw->writeAttribute(self::FIELD_LOCKED_DATE, $this->lockedDate->_getValueAsString());
        }
        if (isset($this->inactive) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_INACTIVE]) {
            $xw->writeAttribute(self::FIELD_INACTIVE, $this->inactive->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->lockedDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LOCKED_DATE]
                || $this->lockedDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LOCKED_DATE);
            $this->lockedDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LOCKED_DATE]);
            $xw->endElement();
        }
        if (isset($this->inactive)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_INACTIVE]
                || $this->inactive->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_INACTIVE);
            $this->inactive->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_INACTIVE]);
            $xw->endElement();
        }
        if (isset($this->include)) {
            foreach ($this->include as $v) {
                $xw->startElement(self::FIELD_INCLUDE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->exclude)) {
            foreach ($this->exclude as $v) {
                $xw->startElement(self::FIELD_EXCLUDE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->property) && [] !== $this->property) {
            foreach($this->property as $v) {
                $xw->startElement(self::FIELD_PROPERTY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRValueSetCompose)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->lockedDate)
            || isset($decoded->_lockedDate)
            || property_exists($decoded, self::FIELD_LOCKED_DATE)
            || property_exists($decoded, self::FIELD_LOCKED_DATE_EXT)) {
            $v = $decoded->_lockedDate ?? new \stdClass();
            $v->value = $decoded->lockedDate ?? null;
            $type->setLockedDate(FHIRDate::jsonUnserialize($v, $config));
        }
        if (isset($decoded->inactive)
            || isset($decoded->_inactive)
            || property_exists($decoded, self::FIELD_INACTIVE)
            || property_exists($decoded, self::FIELD_INACTIVE_EXT)) {
            $v = $decoded->_inactive ?? new \stdClass();
            $v->value = $decoded->inactive ?? null;
            $type->setInactive(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->include) || property_exists($decoded, self::FIELD_INCLUDE)) {
            if (is_object($decoded->include)) {
                $vals = [$decoded->include];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_INCLUDE, true);
            } else {
                $vals = $decoded->include;
            }
            foreach($vals as $v) {
                $type->addInclude(FHIRValueSetInclude::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->exclude) || property_exists($decoded, self::FIELD_EXCLUDE)) {
            if (is_object($decoded->exclude)) {
                $vals = [$decoded->exclude];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_EXCLUDE, true);
            } else {
                $vals = $decoded->exclude;
            }
            foreach($vals as $v) {
                $type->addExclude(FHIRValueSetInclude::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->property)
            || isset($decoded->_property)
            || property_exists($decoded, self::FIELD_PROPERTY)
            || property_exists($decoded, self::FIELD_PROPERTY_EXT)) {
            $vals = (array)($decoded->property ?? []);
            $exts = (array)($decoded->FIELD_PROPERTY_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addProperty(FHIRString::jsonUnserialize($v, $config));
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
        if (isset($this->lockedDate)) {
            if (null !== ($val = $this->lockedDate->getValue())) {
                $out->lockedDate = $val;
            }
            if ($this->lockedDate->_nonValueFieldDefined()) {
                $ext = $this->lockedDate->jsonSerialize();
                unset($ext->value);
                $out->_lockedDate = $ext;
            }
        }
        if (isset($this->inactive)) {
            if (null !== ($val = $this->inactive->getValue())) {
                $out->inactive = $val;
            }
            if ($this->inactive->_nonValueFieldDefined()) {
                $ext = $this->inactive->jsonSerialize();
                unset($ext->value);
                $out->_inactive = $ext;
            }
        }
        if (isset($this->include) && [] !== $this->include) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_INCLUDE) && 1 === count($this->include)) {
                $out->include = $this->include[0];
            } else {
                $out->include = $this->include;
            }
        }
        if (isset($this->exclude) && [] !== $this->exclude) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_EXCLUDE) && 1 === count($this->exclude)) {
                $out->exclude = $this->exclude[0];
            } else {
                $out->exclude = $this->exclude;
            }
        }
        if (isset($this->property) && [] !== $this->property) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->property as $v) {
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
                $out->property = $vals;
            }
            if ($hasExts) {
                $out->_property = $exts;
            }
        }
        return $out;
    }
}