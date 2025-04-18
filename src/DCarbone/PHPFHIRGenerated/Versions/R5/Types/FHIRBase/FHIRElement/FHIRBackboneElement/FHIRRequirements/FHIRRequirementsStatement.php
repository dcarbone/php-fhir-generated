<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRRequirements;

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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConformanceExpectation;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRConformanceExpectationEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUrlPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A set of requirements - a list of features or behaviors of designed systems that
 * are necessary to achieve organizational or regulatory goals.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRRequirementsStatement extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_REQUIREMENTS_DOT_STATEMENT;

    /* class_default.php:56 */
    public const FIELD_KEY = 'key';
    public const FIELD_KEY_EXT = '_key';
    public const FIELD_LABEL = 'label';
    public const FIELD_LABEL_EXT = '_label';
    public const FIELD_CONFORMANCE = 'conformance';
    public const FIELD_CONFORMANCE_EXT = '_conformance';
    public const FIELD_CONDITIONALITY = 'conditionality';
    public const FIELD_CONDITIONALITY_EXT = '_conditionality';
    public const FIELD_REQUIREMENT = 'requirement';
    public const FIELD_REQUIREMENT_EXT = '_requirement';
    public const FIELD_DERIVED_FROM = 'derivedFrom';
    public const FIELD_DERIVED_FROM_EXT = '_derivedFrom';
    public const FIELD_PARENT = 'parent';
    public const FIELD_PARENT_EXT = '_parent';
    public const FIELD_SATISFIED_BY = 'satisfiedBy';
    public const FIELD_SATISFIED_BY_EXT = '_satisfiedBy';
    public const FIELD_REFERENCE = 'reference';
    public const FIELD_REFERENCE_EXT = '_reference';
    public const FIELD_SOURCE = 'source';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_KEY => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_REQUIREMENT => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_KEY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_LABEL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CONDITIONALITY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_REQUIREMENT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DERIVED_FROM => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PARENT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Key that identifies this statement (unique within this resource).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId 
     */
    #[FHIRId]
    protected FHIRId $key;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short human usable label for this statement.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $label;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short human usable label for this statement.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConformanceExpectation> 
     */
    #[FHIRConformanceExpectation]
    protected array $conformance;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This boolean flag is set to true of the text of the requirement is conditional
     * on something e.g. it includes lanauage like 'if x then y'. This conditionality
     * flag is introduced for purposes of filtering and colour highlighting etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    #[FHIRBoolean]
    protected FHIRBoolean $conditionality;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The actual requirement for human consumption.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    #[FHIRMarkdown]
    protected FHIRMarkdown $requirement;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Another statement on one of the requirements that this requirement clarifies or
     * restricts.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $derivedFrom;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A larger requirement that this requirement helps to refine and enable.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $parent;
    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to another artifact that satisfies this requirement. This could be a
     * Profile, extension, or an element in one of those, or a CapabilityStatement,
     * OperationDefinition, SearchParameter, CodeSystem(/code), ValueSet, Libary etc.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl> 
     */
    #[FHIRUrl]
    protected array $satisfiedBy;
    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to another artifact that created this requirement. This could be a
     * Profile, etc., or external regulation, or business requirements expressed
     * elsewhere.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl> 
     */
    #[FHIRUrl]
    protected array $reference;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who asked for this statement to be a requirement. By default, it's assumed that
     * the publisher knows who it is if it matters.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> 
     */
    #[FHIRReference]
    protected array $source;

    /* constructor.php:61 */
    /**
     * FHIRRequirementsStatement Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $key
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $label
     * @param null|iterable<string>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRConformanceExpectationEnum>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConformanceExpectation> $conformance
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $conditionality
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $requirement
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $derivedFrom
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $parent
     * @param null|iterable<string>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUrlPrimitive>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl> $satisfiedBy
     * @param null|iterable<string>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUrlPrimitive>|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl> $reference
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> $source
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRIdPrimitive|FHIRId $key = null,
                                null|string|FHIRStringPrimitive|FHIRString $label = null,
                                null|iterable $conformance = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $conditionality = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $requirement = null,
                                null|string|FHIRStringPrimitive|FHIRString $derivedFrom = null,
                                null|string|FHIRStringPrimitive|FHIRString $parent = null,
                                null|iterable $satisfiedBy = null,
                                null|iterable $reference = null,
                                null|iterable $source = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $key) {
            $this->setKey($key);
        }
        if (null !== $label) {
            $this->setLabel($label);
        }
        if (null !== $conformance) {
            $this->setConformance(...$conformance);
        }
        if (null !== $conditionality) {
            $this->setConditionality($conditionality);
        }
        if (null !== $requirement) {
            $this->setRequirement($requirement);
        }
        if (null !== $derivedFrom) {
            $this->setDerivedFrom($derivedFrom);
        }
        if (null !== $parent) {
            $this->setParent($parent);
        }
        if (null !== $satisfiedBy) {
            $this->setSatisfiedBy(...$satisfiedBy);
        }
        if (null !== $reference) {
            $this->setReference(...$reference);
        }
        if (null !== $source) {
            $this->setSource(...$source);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Key that identifies this statement (unique within this resource).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId
     */
    public function getKey(): null|FHIRId
    {
        return $this->key ?? null;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Key that identifies this statement (unique within this resource).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $key
     * @return static
     */
    public function setKey(null|string|FHIRIdPrimitive|FHIRId $key): self
    {
        if (null === $key) {
            unset($this->key);
            return $this;
        }
        if (!($key instanceof FHIRId)) {
            $key = new FHIRId(value: $key);
        }
        $this->key = $key;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short human usable label for this statement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getLabel(): null|FHIRString
    {
        return $this->label ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short human usable label for this statement.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $label
     * @return static
     */
    public function setLabel(null|string|FHIRStringPrimitive|FHIRString $label): self
    {
        if (null === $label) {
            unset($this->label);
            return $this;
        }
        if (!($label instanceof FHIRString)) {
            $label = new FHIRString(value: $label);
        }
        $this->label = $label;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short human usable label for this statement.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConformanceExpectation>
     */
    public function getConformance(): array
    {
        return $this->conformance ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConformanceExpectation>
     */
    public function getConformanceIterator(): iterable
    {
        if (!isset($this->conformance)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->conformance);
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short human usable label for this statement.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRConformanceExpectationEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConformanceExpectation $conformance
     * @return static
     */
    public function addConformance(string|FHIRConformanceExpectationEnum|FHIRConformanceExpectation $conformance): self
    {
        if (!($conformance instanceof FHIRConformanceExpectation)) {
            $conformance = new FHIRConformanceExpectation(value: $conformance);
        }
        if (!isset($this->conformance)) {
            $this->conformance = [];
        }
        $this->conformance[] = $conformance;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short human usable label for this statement.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRConformanceExpectationEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConformanceExpectation ...$conformance
     * @return static
     */
    public function setConformance(string|FHIRConformanceExpectationEnum|FHIRConformanceExpectation ...$conformance): self
    {
        if ([] === $conformance) {
            unset($this->conformance);
            return $this;
        }
        $this->conformance = [];
        foreach($conformance as $v) {
            if ($v instanceof FHIRConformanceExpectation) {
                $this->conformance[] = $v;
            } else {
                $this->conformance[] = new FHIRConformanceExpectation(value: $v);
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This boolean flag is set to true of the text of the requirement is conditional
     * on something e.g. it includes lanauage like 'if x then y'. This conditionality
     * flag is introduced for purposes of filtering and colour highlighting etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getConditionality(): null|FHIRBoolean
    {
        return $this->conditionality ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This boolean flag is set to true of the text of the requirement is conditional
     * on something e.g. it includes lanauage like 'if x then y'. This conditionality
     * flag is introduced for purposes of filtering and colour highlighting etc.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $conditionality
     * @return static
     */
    public function setConditionality(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $conditionality): self
    {
        if (null === $conditionality) {
            unset($this->conditionality);
            return $this;
        }
        if (!($conditionality instanceof FHIRBoolean)) {
            $conditionality = new FHIRBoolean(value: $conditionality);
        }
        $this->conditionality = $conditionality;
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
     * The actual requirement for human consumption.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getRequirement(): null|FHIRMarkdown
    {
        return $this->requirement ?? null;
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
     * The actual requirement for human consumption.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $requirement
     * @return static
     */
    public function setRequirement(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $requirement): self
    {
        if (null === $requirement) {
            unset($this->requirement);
            return $this;
        }
        if (!($requirement instanceof FHIRMarkdown)) {
            $requirement = new FHIRMarkdown(value: $requirement);
        }
        $this->requirement = $requirement;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Another statement on one of the requirements that this requirement clarifies or
     * restricts.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getDerivedFrom(): null|FHIRString
    {
        return $this->derivedFrom ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Another statement on one of the requirements that this requirement clarifies or
     * restricts.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $derivedFrom
     * @return static
     */
    public function setDerivedFrom(null|string|FHIRStringPrimitive|FHIRString $derivedFrom): self
    {
        if (null === $derivedFrom) {
            unset($this->derivedFrom);
            return $this;
        }
        if (!($derivedFrom instanceof FHIRString)) {
            $derivedFrom = new FHIRString(value: $derivedFrom);
        }
        $this->derivedFrom = $derivedFrom;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A larger requirement that this requirement helps to refine and enable.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getParent(): null|FHIRString
    {
        return $this->parent ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A larger requirement that this requirement helps to refine and enable.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $parent
     * @return static
     */
    public function setParent(null|string|FHIRStringPrimitive|FHIRString $parent): self
    {
        if (null === $parent) {
            unset($this->parent);
            return $this;
        }
        if (!($parent instanceof FHIRString)) {
            $parent = new FHIRString(value: $parent);
        }
        $this->parent = $parent;
        return $this;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to another artifact that satisfies this requirement. This could be a
     * Profile, extension, or an element in one of those, or a CapabilityStatement,
     * OperationDefinition, SearchParameter, CodeSystem(/code), ValueSet, Libary etc.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl>
     */
    public function getSatisfiedBy(): array
    {
        return $this->satisfiedBy ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl>
     */
    public function getSatisfiedByIterator(): iterable
    {
        if (!isset($this->satisfiedBy)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->satisfiedBy);
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to another artifact that satisfies this requirement. This could be a
     * Profile, extension, or an element in one of those, or a CapabilityStatement,
     * OperationDefinition, SearchParameter, CodeSystem(/code), ValueSet, Libary etc.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUrlPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl $satisfiedBy
     * @return static
     */
    public function addSatisfiedBy(string|FHIRUrlPrimitive|FHIRUrl $satisfiedBy): self
    {
        if (!($satisfiedBy instanceof FHIRUrl)) {
            $satisfiedBy = new FHIRUrl(value: $satisfiedBy);
        }
        if (!isset($this->satisfiedBy)) {
            $this->satisfiedBy = [];
        }
        $this->satisfiedBy[] = $satisfiedBy;
        return $this;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to another artifact that satisfies this requirement. This could be a
     * Profile, extension, or an element in one of those, or a CapabilityStatement,
     * OperationDefinition, SearchParameter, CodeSystem(/code), ValueSet, Libary etc.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUrlPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl ...$satisfiedBy
     * @return static
     */
    public function setSatisfiedBy(string|FHIRUrlPrimitive|FHIRUrl ...$satisfiedBy): self
    {
        if ([] === $satisfiedBy) {
            unset($this->satisfiedBy);
            return $this;
        }
        $this->satisfiedBy = [];
        foreach($satisfiedBy as $v) {
            if ($v instanceof FHIRUrl) {
                $this->satisfiedBy[] = $v;
            } else {
                $this->satisfiedBy[] = new FHIRUrl(value: $v);
            }
        }
        return $this;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to another artifact that created this requirement. This could be a
     * Profile, etc., or external regulation, or business requirements expressed
     * elsewhere.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl>
     */
    public function getReference(): array
    {
        return $this->reference ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl>
     */
    public function getReferenceIterator(): iterable
    {
        if (!isset($this->reference)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->reference);
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to another artifact that created this requirement. This could be a
     * Profile, etc., or external regulation, or business requirements expressed
     * elsewhere.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUrlPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl $reference
     * @return static
     */
    public function addReference(string|FHIRUrlPrimitive|FHIRUrl $reference): self
    {
        if (!($reference instanceof FHIRUrl)) {
            $reference = new FHIRUrl(value: $reference);
        }
        if (!isset($this->reference)) {
            $this->reference = [];
        }
        $this->reference[] = $reference;
        return $this;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to another artifact that created this requirement. This could be a
     * Profile, etc., or external regulation, or business requirements expressed
     * elsewhere.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUrlPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl ...$reference
     * @return static
     */
    public function setReference(string|FHIRUrlPrimitive|FHIRUrl ...$reference): self
    {
        if ([] === $reference) {
            unset($this->reference);
            return $this;
        }
        $this->reference = [];
        foreach($reference as $v) {
            if ($v instanceof FHIRUrl) {
                $this->reference[] = $v;
            } else {
                $this->reference[] = new FHIRUrl(value: $v);
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who asked for this statement to be a requirement. By default, it's assumed that
     * the publisher knows who it is if it matters.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getSource(): array
    {
        return $this->source ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getSourceIterator(): iterable
    {
        if (!isset($this->source)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->source);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who asked for this statement to be a requirement. By default, it's assumed that
     * the publisher knows who it is if it matters.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $source
     * @return static
     */
    public function addSource(FHIRReference $source): self
    {
        if (!isset($this->source)) {
            $this->source = [];
        }
        $this->source[] = $source;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who asked for this statement to be a requirement. By default, it's assumed that
     * the publisher knows who it is if it matters.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$source
     * @return static
     */
    public function setSource(FHIRReference ...$source): self
    {
        if ([] === $source) {
            unset($this->source);
            return $this;
        }
        $this->source = $source;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRRequirements\FHIRRequirementsStatement $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRRequirements\FHIRRequirementsStatement
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRRequirementsStatement)) {
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
            } else if (self::FIELD_KEY === $cen) {
                $type->setKey(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LABEL === $cen) {
                $type->setLabel(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONFORMANCE === $cen) {
                $type->addConformance(FHIRConformanceExpectation::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONDITIONALITY === $cen) {
                $type->setConditionality(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REQUIREMENT === $cen) {
                $type->setRequirement(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DERIVED_FROM === $cen) {
                $type->setDerivedFrom(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PARENT === $cen) {
                $type->setParent(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SATISFIED_BY === $cen) {
                $type->addSatisfiedBy(FHIRUrl::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REFERENCE === $cen) {
                $type->addReference(FHIRUrl::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SOURCE === $cen) {
                $type->addSource(FHIRReference::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_KEY])) {
            if (isset($type->key)) {
                $type->key->setValue((string)$attributes[self::FIELD_KEY]);
            } else {
                $type->setKey((string)$attributes[self::FIELD_KEY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_KEY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LABEL])) {
            if (isset($type->label)) {
                $type->label->setValue((string)$attributes[self::FIELD_LABEL]);
            } else {
                $type->setLabel((string)$attributes[self::FIELD_LABEL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LABEL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CONDITIONALITY])) {
            if (isset($type->conditionality)) {
                $type->conditionality->setValue((string)$attributes[self::FIELD_CONDITIONALITY]);
            } else {
                $type->setConditionality((string)$attributes[self::FIELD_CONDITIONALITY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_CONDITIONALITY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_REQUIREMENT])) {
            if (isset($type->requirement)) {
                $type->requirement->setValue((string)$attributes[self::FIELD_REQUIREMENT]);
            } else {
                $type->setRequirement((string)$attributes[self::FIELD_REQUIREMENT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_REQUIREMENT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DERIVED_FROM])) {
            if (isset($type->derivedFrom)) {
                $type->derivedFrom->setValue((string)$attributes[self::FIELD_DERIVED_FROM]);
            } else {
                $type->setDerivedFrom((string)$attributes[self::FIELD_DERIVED_FROM]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DERIVED_FROM, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PARENT])) {
            if (isset($type->parent)) {
                $type->parent->setValue((string)$attributes[self::FIELD_PARENT]);
            } else {
                $type->setParent((string)$attributes[self::FIELD_PARENT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PARENT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->key) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_KEY]) {
            $xw->writeAttribute(self::FIELD_KEY, $this->key->_getValueAsString());
        }
        if (isset($this->label) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LABEL]) {
            $xw->writeAttribute(self::FIELD_LABEL, $this->label->_getValueAsString());
        }
        if (isset($this->conditionality) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CONDITIONALITY]) {
            $xw->writeAttribute(self::FIELD_CONDITIONALITY, $this->conditionality->_getValueAsString());
        }
        if (isset($this->requirement) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_REQUIREMENT]) {
            $xw->writeAttribute(self::FIELD_REQUIREMENT, $this->requirement->_getValueAsString());
        }
        if (isset($this->derivedFrom) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DERIVED_FROM]) {
            $xw->writeAttribute(self::FIELD_DERIVED_FROM, $this->derivedFrom->_getValueAsString());
        }
        if (isset($this->parent) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PARENT]) {
            $xw->writeAttribute(self::FIELD_PARENT, $this->parent->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->key)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_KEY]
                || $this->key->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_KEY);
            $this->key->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_KEY]);
            $xw->endElement();
        }
        if (isset($this->label)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LABEL]
                || $this->label->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LABEL);
            $this->label->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LABEL]);
            $xw->endElement();
        }
        if (isset($this->conformance) && [] !== $this->conformance) {
            foreach($this->conformance as $v) {
                $xw->startElement(self::FIELD_CONFORMANCE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->conditionality)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CONDITIONALITY]
                || $this->conditionality->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CONDITIONALITY);
            $this->conditionality->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CONDITIONALITY]);
            $xw->endElement();
        }
        if (isset($this->requirement)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_REQUIREMENT]
                || $this->requirement->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_REQUIREMENT);
            $this->requirement->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_REQUIREMENT]);
            $xw->endElement();
        }
        if (isset($this->derivedFrom)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DERIVED_FROM]
                || $this->derivedFrom->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DERIVED_FROM);
            $this->derivedFrom->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DERIVED_FROM]);
            $xw->endElement();
        }
        if (isset($this->parent)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PARENT]
                || $this->parent->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PARENT);
            $this->parent->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PARENT]);
            $xw->endElement();
        }
        if (isset($this->satisfiedBy) && [] !== $this->satisfiedBy) {
            foreach($this->satisfiedBy as $v) {
                $xw->startElement(self::FIELD_SATISFIED_BY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->reference) && [] !== $this->reference) {
            foreach($this->reference as $v) {
                $xw->startElement(self::FIELD_REFERENCE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->source)) {
            foreach ($this->source as $v) {
                $xw->startElement(self::FIELD_SOURCE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRRequirements\FHIRRequirementsStatement $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRRequirements\FHIRRequirementsStatement
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRRequirementsStatement)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->key)
            || isset($decoded->_key)
            || property_exists($decoded, self::FIELD_KEY)
            || property_exists($decoded, self::FIELD_KEY_EXT)) {
            $v = $decoded->_key ?? new \stdClass();
            $v->value = $decoded->key ?? null;
            $type->setKey(FHIRId::jsonUnserialize($v, $config));
        }
        if (isset($decoded->label)
            || isset($decoded->_label)
            || property_exists($decoded, self::FIELD_LABEL)
            || property_exists($decoded, self::FIELD_LABEL_EXT)) {
            $v = $decoded->_label ?? new \stdClass();
            $v->value = $decoded->label ?? null;
            $type->setLabel(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->conformance)
            || isset($decoded->_conformance)
            || property_exists($decoded, self::FIELD_CONFORMANCE)
            || property_exists($decoded, self::FIELD_CONFORMANCE_EXT)) {
            $vals = (array)($decoded->conformance ?? []);
            $exts = (array)($decoded->FIELD_CONFORMANCE_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addConformance(FHIRConformanceExpectation::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->conditionality)
            || isset($decoded->_conditionality)
            || property_exists($decoded, self::FIELD_CONDITIONALITY)
            || property_exists($decoded, self::FIELD_CONDITIONALITY_EXT)) {
            $v = $decoded->_conditionality ?? new \stdClass();
            $v->value = $decoded->conditionality ?? null;
            $type->setConditionality(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->requirement)
            || isset($decoded->_requirement)
            || property_exists($decoded, self::FIELD_REQUIREMENT)
            || property_exists($decoded, self::FIELD_REQUIREMENT_EXT)) {
            $v = $decoded->_requirement ?? new \stdClass();
            $v->value = $decoded->requirement ?? null;
            $type->setRequirement(FHIRMarkdown::jsonUnserialize($v, $config));
        }
        if (isset($decoded->derivedFrom)
            || isset($decoded->_derivedFrom)
            || property_exists($decoded, self::FIELD_DERIVED_FROM)
            || property_exists($decoded, self::FIELD_DERIVED_FROM_EXT)) {
            $v = $decoded->_derivedFrom ?? new \stdClass();
            $v->value = $decoded->derivedFrom ?? null;
            $type->setDerivedFrom(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->parent)
            || isset($decoded->_parent)
            || property_exists($decoded, self::FIELD_PARENT)
            || property_exists($decoded, self::FIELD_PARENT_EXT)) {
            $v = $decoded->_parent ?? new \stdClass();
            $v->value = $decoded->parent ?? null;
            $type->setParent(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->satisfiedBy)
            || isset($decoded->_satisfiedBy)
            || property_exists($decoded, self::FIELD_SATISFIED_BY)
            || property_exists($decoded, self::FIELD_SATISFIED_BY_EXT)) {
            $vals = (array)($decoded->satisfiedBy ?? []);
            $exts = (array)($decoded->FIELD_SATISFIED_BY_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addSatisfiedBy(FHIRUrl::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->reference)
            || isset($decoded->_reference)
            || property_exists($decoded, self::FIELD_REFERENCE)
            || property_exists($decoded, self::FIELD_REFERENCE_EXT)) {
            $vals = (array)($decoded->reference ?? []);
            $exts = (array)($decoded->FIELD_REFERENCE_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addReference(FHIRUrl::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->source) || property_exists($decoded, self::FIELD_SOURCE)) {
            if (is_object($decoded->source)) {
                $vals = [$decoded->source];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_SOURCE, true);
            } else {
                $vals = $decoded->source;
            }
            foreach($vals as $v) {
                $type->addSource(FHIRReference::jsonUnserialize($v, $config));
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
        if (isset($this->key)) {
            if (null !== ($val = $this->key->getValue())) {
                $out->key = $val;
            }
            if ($this->key->_nonValueFieldDefined()) {
                $ext = $this->key->jsonSerialize();
                unset($ext->value);
                $out->_key = $ext;
            }
        }
        if (isset($this->label)) {
            if (null !== ($val = $this->label->getValue())) {
                $out->label = $val;
            }
            if ($this->label->_nonValueFieldDefined()) {
                $ext = $this->label->jsonSerialize();
                unset($ext->value);
                $out->_label = $ext;
            }
        }
        if (isset($this->conformance) && [] !== $this->conformance) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->conformance as $v) {
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
                $out->conformance = $vals;
            }
            if ($hasExts) {
                $out->_conformance = $exts;
            }
        }
        if (isset($this->conditionality)) {
            if (null !== ($val = $this->conditionality->getValue())) {
                $out->conditionality = $val;
            }
            if ($this->conditionality->_nonValueFieldDefined()) {
                $ext = $this->conditionality->jsonSerialize();
                unset($ext->value);
                $out->_conditionality = $ext;
            }
        }
        if (isset($this->requirement)) {
            if (null !== ($val = $this->requirement->getValue())) {
                $out->requirement = $val;
            }
            if ($this->requirement->_nonValueFieldDefined()) {
                $ext = $this->requirement->jsonSerialize();
                unset($ext->value);
                $out->_requirement = $ext;
            }
        }
        if (isset($this->derivedFrom)) {
            if (null !== ($val = $this->derivedFrom->getValue())) {
                $out->derivedFrom = $val;
            }
            if ($this->derivedFrom->_nonValueFieldDefined()) {
                $ext = $this->derivedFrom->jsonSerialize();
                unset($ext->value);
                $out->_derivedFrom = $ext;
            }
        }
        if (isset($this->parent)) {
            if (null !== ($val = $this->parent->getValue())) {
                $out->parent = $val;
            }
            if ($this->parent->_nonValueFieldDefined()) {
                $ext = $this->parent->jsonSerialize();
                unset($ext->value);
                $out->_parent = $ext;
            }
        }
        if (isset($this->satisfiedBy) && [] !== $this->satisfiedBy) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->satisfiedBy as $v) {
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
                $out->satisfiedBy = $vals;
            }
            if ($hasExts) {
                $out->_satisfiedBy = $exts;
            }
        }
        if (isset($this->reference) && [] !== $this->reference) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->reference as $v) {
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
                $out->reference = $vals;
            }
            if ($hasExts) {
                $out->_reference = $exts;
            }
        }
        if (isset($this->source) && [] !== $this->source) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_SOURCE) && 1 === count($this->source)) {
                $out->source = $this->source[0];
            } else {
                $out->source = $this->source;
            }
        }
        return $out;
    }
}