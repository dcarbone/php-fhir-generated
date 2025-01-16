<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRRequirements;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 16th, 2025 01:05+0000
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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConformanceExpectation;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUrlPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A set of requirements - a list of features or behaviors of designed systems that
 * are necessary to achieve organizational or regulatory goals.
 */
class FHIRRequirementsStatement extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_REQUIREMENTS_DOT_STATEMENT;


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
    protected FHIRString $label;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short human usable label for this statement.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConformanceExpectation[] 
     */
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl[] 
     */
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl[] 
     */
    protected array $reference;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who asked for this statement to be a requirement. By default, it's assumed that
     * the publisher knows who it is if it matters.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $source;

    /** Default validation map for fields in type Requirements.Statement */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_KEY => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_REQUIREMENT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRRequirementsStatement Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $key
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $label
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConformanceExpectation[] $conformance
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $conditionality
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $requirement
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $derivedFrom
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $parent
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUrlPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl[] $satisfiedBy
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUrlPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl[] $reference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $source
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

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConformanceExpectation[]
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
        if (!isset($this->conformance) || [] === $this->conformance) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->conformance);
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short human usable label for this statement.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConformanceExpectation $conformance
     * @return static
     */
    public function addConformance(FHIRConformanceExpectation $conformance): self
    {
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConformanceExpectation ...$conformance
     * @return static
     */
    public function setConformance(FHIRConformanceExpectation ...$conformance): self
    {
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl[]
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
        if (!isset($this->satisfiedBy) || [] === $this->satisfiedBy) {
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUrl[]
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
        if (!isset($this->reference) || [] === $this->reference) {
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
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
        if (!isset($this->source) || [] === $this->source) {
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
        $this->source = $source;
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
        if (null !== ($v = $this->getKey())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_KEY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequirement())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUIREMENT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_KEY])) {
            $v = $this->getKey();
            foreach($validationRules[self::FIELD_KEY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_KEY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_KEY])) {
                        $errs[self::FIELD_KEY] = [];
                    }
                    $errs[self::FIELD_KEY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LABEL])) {
            $v = $this->getLabel();
            foreach($validationRules[self::FIELD_LABEL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LABEL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LABEL])) {
                        $errs[self::FIELD_LABEL] = [];
                    }
                    $errs[self::FIELD_LABEL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONFORMANCE])) {
            $v = $this->getConformance();
            foreach($validationRules[self::FIELD_CONFORMANCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONFORMANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONFORMANCE])) {
                        $errs[self::FIELD_CONFORMANCE] = [];
                    }
                    $errs[self::FIELD_CONFORMANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONDITIONALITY])) {
            $v = $this->getConditionality();
            foreach($validationRules[self::FIELD_CONDITIONALITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONDITIONALITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONDITIONALITY])) {
                        $errs[self::FIELD_CONDITIONALITY] = [];
                    }
                    $errs[self::FIELD_CONDITIONALITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUIREMENT])) {
            $v = $this->getRequirement();
            foreach($validationRules[self::FIELD_REQUIREMENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REQUIREMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUIREMENT])) {
                        $errs[self::FIELD_REQUIREMENT] = [];
                    }
                    $errs[self::FIELD_REQUIREMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DERIVED_FROM])) {
            $v = $this->getDerivedFrom();
            foreach($validationRules[self::FIELD_DERIVED_FROM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DERIVED_FROM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DERIVED_FROM])) {
                        $errs[self::FIELD_DERIVED_FROM] = [];
                    }
                    $errs[self::FIELD_DERIVED_FROM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARENT])) {
            $v = $this->getParent();
            foreach($validationRules[self::FIELD_PARENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PARENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARENT])) {
                        $errs[self::FIELD_PARENT] = [];
                    }
                    $errs[self::FIELD_PARENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SATISFIED_BY])) {
            $v = $this->getSatisfiedBy();
            foreach($validationRules[self::FIELD_SATISFIED_BY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SATISFIED_BY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SATISFIED_BY])) {
                        $errs[self::FIELD_SATISFIED_BY] = [];
                    }
                    $errs[self::FIELD_SATISFIED_BY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE])) {
            $v = $this->getReference();
            foreach($validationRules[self::FIELD_REFERENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE])) {
                        $errs[self::FIELD_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE])) {
            $v = $this->getSource();
            foreach($validationRules[self::FIELD_SOURCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE])) {
                        $errs[self::FIELD_SOURCE] = [];
                    }
                    $errs[self::FIELD_SOURCE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRRequirements\FHIRRequirementsStatement $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRRequirements\FHIRRequirementsStatement
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
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
            } else if (self::FIELD_KEY === $childName) {
                $v = new FHIRId(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setKey(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LABEL === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setLabel(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONFORMANCE === $childName) {
                $v = new FHIRConformanceExpectation(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->addConformance(FHIRConformanceExpectation::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONDITIONALITY === $childName) {
                $v = new FHIRBoolean(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setConditionality(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REQUIREMENT === $childName) {
                $v = new FHIRMarkdown(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setRequirement(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DERIVED_FROM === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDerivedFrom(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PARENT === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setParent(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SATISFIED_BY === $childName) {
                $v = new FHIRUrl(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->addSatisfiedBy(FHIRUrl::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REFERENCE === $childName) {
                $v = new FHIRUrl(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->addReference(FHIRUrl::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SOURCE === $childName) {
                $v = new FHIRReference();
                $type->addSource(FHIRReference::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_KEY])) {
            $pt = $type->getKey();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_KEY]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setKey(new FHIRId(
                    value: (string)$attributes[self::FIELD_KEY],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LABEL])) {
            $pt = $type->getLabel();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LABEL]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLabel(new FHIRString(
                    value: (string)$attributes[self::FIELD_LABEL],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CONDITIONALITY])) {
            $pt = $type->getConditionality();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CONDITIONALITY]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setConditionality(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_CONDITIONALITY],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_REQUIREMENT])) {
            $pt = $type->getRequirement();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_REQUIREMENT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setRequirement(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_REQUIREMENT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DERIVED_FROM])) {
            $pt = $type->getDerivedFrom();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DERIVED_FROM]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDerivedFrom(new FHIRString(
                    value: (string)$attributes[self::FIELD_DERIVED_FROM],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PARENT])) {
            $pt = $type->getParent();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PARENT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setParent(new FHIRString(
                    value: (string)$attributes[self::FIELD_PARENT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SATISFIED_BY])) {
            $v = new FHIRUrl(value: (string)$attributes[self::FIELD_SATISFIED_BY],
                                                       xmlLocation: XMLLocationEnum::ATTRIBUTE);
            $type->addSatisfiedBy($v);
        }
        if (isset($attributes[self::FIELD_REFERENCE])) {
            $v = new FHIRUrl(value: (string)$attributes[self::FIELD_REFERENCE],
                                                       xmlLocation: XMLLocationEnum::ATTRIBUTE);
            $type->addReference($v);
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
        if (null === $xw) {
            $xw = new XMLWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode($config, 'RequirementsStatement', $this->_getSourceXMLNS());
        }
        if (isset($this->key) && $this->key->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_KEY, $this->key->getValue()?->getFormattedValue());
        }
        if (isset($this->label) && $this->label->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_LABEL, $this->label->getValue()?->getFormattedValue());
        }
        if (isset($this->conditionality) && $this->conditionality->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CONDITIONALITY, $this->conditionality->getValue()?->getFormattedValue());
        }
        if (isset($this->requirement) && $this->requirement->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_REQUIREMENT, $this->requirement->getValue()?->getFormattedValue());
        }
        if (isset($this->derivedFrom) && $this->derivedFrom->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DERIVED_FROM, $this->derivedFrom->getValue()?->getFormattedValue());
        }
        if (isset($this->parent) && $this->parent->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PARENT, $this->parent->getValue()?->getFormattedValue());
        }
        if (isset($this->satisfiedBy)) {
           foreach($this->satisfiedBy as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_SATISFIED_BY, $v->getValue()?->getFormattedValue());
                    break;
                }
            }
        }
        if (isset($this->reference)) {
           foreach($this->reference as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_REFERENCE, $v->getValue()?->getFormattedValue());
                    break;
                }
            }
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->key) && $this->key->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_KEY);
            $this->key->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->label) && $this->label->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_LABEL);
            $this->label->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->conformance)) {
            foreach ($this->conformance as $v) {
                $xw->startElement(self::FIELD_CONFORMANCE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->conditionality) && $this->conditionality->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CONDITIONALITY);
            $this->conditionality->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->requirement) && $this->requirement->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_REQUIREMENT);
            $this->requirement->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->derivedFrom) && $this->derivedFrom->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DERIVED_FROM);
            $this->derivedFrom->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->parent) && $this->parent->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PARENT);
            $this->parent->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->satisfiedBy)) {
            foreach($this->satisfiedBy as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_SATISFIED_BY);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->reference)) {
            foreach($this->reference as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_REFERENCE);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->source)) {
            foreach ($this->source as $v) {
                $xw->startElement(self::FIELD_SOURCE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRRequirements\FHIRRequirementsStatement $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRRequirements\FHIRRequirementsStatement
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
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
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_KEY]) || isset($json[self::FIELD_KEY_EXT]) || array_key_exists(self::FIELD_KEY, $json) || array_key_exists(self::FIELD_KEY_EXT, $json)) {
            $value = $json[self::FIELD_KEY] ?? null;
            $ext = (isset($json[self::FIELD_KEY_EXT]) && is_array($json[self::FIELD_KEY_EXT])) ? $json[self::FIELD_KEY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $type->setKey($value);
                } else if (is_array($value)) {
                    $type->setKey(new FHIRId(array_merge($ext, $value)));
                } else {
                    $type->setKey(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setKey(new FHIRId($ext));
            } else {
                $type->setKey(new FHIRId(null));
            }
        }
        if (isset($json[self::FIELD_LABEL]) || isset($json[self::FIELD_LABEL_EXT]) || array_key_exists(self::FIELD_LABEL, $json) || array_key_exists(self::FIELD_LABEL_EXT, $json)) {
            $value = $json[self::FIELD_LABEL] ?? null;
            $ext = (isset($json[self::FIELD_LABEL_EXT]) && is_array($json[self::FIELD_LABEL_EXT])) ? $json[self::FIELD_LABEL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setLabel($value);
                } else if (is_array($value)) {
                    $type->setLabel(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setLabel(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setLabel(new FHIRString($ext));
            } else {
                $type->setLabel(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_CONFORMANCE]) || isset($json[self::FIELD_CONFORMANCE_EXT]) || array_key_exists(self::FIELD_CONFORMANCE, $json) || array_key_exists(self::FIELD_CONFORMANCE_EXT, $json)) {
            $value = $json[self::FIELD_CONFORMANCE] ?? null;
            $ext = (isset($json[self::FIELD_CONFORMANCE_EXT]) && is_array($json[self::FIELD_CONFORMANCE_EXT])) ? $json[self::FIELD_CONFORMANCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRConformanceExpectation) {
                    $type->addConformance($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRConformanceExpectation) {
                            $type->addConformance($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addConformance(new FHIRConformanceExpectation(array_merge($v, $iext)));
                            } else {
                                $type->addConformance(new FHIRConformanceExpectation([FHIRConformanceExpectation::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addConformance(new FHIRConformanceExpectation(array_merge($ext, $value)));
                } else {
                    $type->addConformance(new FHIRConformanceExpectation([FHIRConformanceExpectation::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addConformance(new FHIRConformanceExpectation($iext));
                }
            } else {
                $type->addConformance(new FHIRConformanceExpectation(null));
            }
        }
        if (isset($json[self::FIELD_CONDITIONALITY]) || isset($json[self::FIELD_CONDITIONALITY_EXT]) || array_key_exists(self::FIELD_CONDITIONALITY, $json) || array_key_exists(self::FIELD_CONDITIONALITY_EXT, $json)) {
            $value = $json[self::FIELD_CONDITIONALITY] ?? null;
            $ext = (isset($json[self::FIELD_CONDITIONALITY_EXT]) && is_array($json[self::FIELD_CONDITIONALITY_EXT])) ? $json[self::FIELD_CONDITIONALITY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setConditionality($value);
                } else if (is_array($value)) {
                    $type->setConditionality(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setConditionality(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setConditionality(new FHIRBoolean($ext));
            } else {
                $type->setConditionality(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_REQUIREMENT]) || isset($json[self::FIELD_REQUIREMENT_EXT]) || array_key_exists(self::FIELD_REQUIREMENT, $json) || array_key_exists(self::FIELD_REQUIREMENT_EXT, $json)) {
            $value = $json[self::FIELD_REQUIREMENT] ?? null;
            $ext = (isset($json[self::FIELD_REQUIREMENT_EXT]) && is_array($json[self::FIELD_REQUIREMENT_EXT])) ? $json[self::FIELD_REQUIREMENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $type->setRequirement($value);
                } else if (is_array($value)) {
                    $type->setRequirement(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $type->setRequirement(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setRequirement(new FHIRMarkdown($ext));
            } else {
                $type->setRequirement(new FHIRMarkdown(null));
            }
        }
        if (isset($json[self::FIELD_DERIVED_FROM]) || isset($json[self::FIELD_DERIVED_FROM_EXT]) || array_key_exists(self::FIELD_DERIVED_FROM, $json) || array_key_exists(self::FIELD_DERIVED_FROM_EXT, $json)) {
            $value = $json[self::FIELD_DERIVED_FROM] ?? null;
            $ext = (isset($json[self::FIELD_DERIVED_FROM_EXT]) && is_array($json[self::FIELD_DERIVED_FROM_EXT])) ? $json[self::FIELD_DERIVED_FROM_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setDerivedFrom($value);
                } else if (is_array($value)) {
                    $type->setDerivedFrom(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setDerivedFrom(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDerivedFrom(new FHIRString($ext));
            } else {
                $type->setDerivedFrom(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_PARENT]) || isset($json[self::FIELD_PARENT_EXT]) || array_key_exists(self::FIELD_PARENT, $json) || array_key_exists(self::FIELD_PARENT_EXT, $json)) {
            $value = $json[self::FIELD_PARENT] ?? null;
            $ext = (isset($json[self::FIELD_PARENT_EXT]) && is_array($json[self::FIELD_PARENT_EXT])) ? $json[self::FIELD_PARENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setParent($value);
                } else if (is_array($value)) {
                    $type->setParent(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setParent(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setParent(new FHIRString($ext));
            } else {
                $type->setParent(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_SATISFIED_BY]) || isset($json[self::FIELD_SATISFIED_BY_EXT]) || array_key_exists(self::FIELD_SATISFIED_BY, $json) || array_key_exists(self::FIELD_SATISFIED_BY_EXT, $json)) {
            $value = $json[self::FIELD_SATISFIED_BY] ?? null;
            $ext = (isset($json[self::FIELD_SATISFIED_BY_EXT]) && is_array($json[self::FIELD_SATISFIED_BY_EXT])) ? $json[self::FIELD_SATISFIED_BY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUrl) {
                    $type->addSatisfiedBy($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRUrl) {
                            $type->addSatisfiedBy($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addSatisfiedBy(new FHIRUrl(array_merge($v, $iext)));
                            } else {
                                $type->addSatisfiedBy(new FHIRUrl([FHIRUrl::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addSatisfiedBy(new FHIRUrl(array_merge($ext, $value)));
                } else {
                    $type->addSatisfiedBy(new FHIRUrl([FHIRUrl::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addSatisfiedBy(new FHIRUrl($iext));
                }
            } else {
                $type->addSatisfiedBy(new FHIRUrl(null));
            }
        }
        if (isset($json[self::FIELD_REFERENCE]) || isset($json[self::FIELD_REFERENCE_EXT]) || array_key_exists(self::FIELD_REFERENCE, $json) || array_key_exists(self::FIELD_REFERENCE_EXT, $json)) {
            $value = $json[self::FIELD_REFERENCE] ?? null;
            $ext = (isset($json[self::FIELD_REFERENCE_EXT]) && is_array($json[self::FIELD_REFERENCE_EXT])) ? $json[self::FIELD_REFERENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUrl) {
                    $type->addReference($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRUrl) {
                            $type->addReference($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addReference(new FHIRUrl(array_merge($v, $iext)));
                            } else {
                                $type->addReference(new FHIRUrl([FHIRUrl::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addReference(new FHIRUrl(array_merge($ext, $value)));
                } else {
                    $type->addReference(new FHIRUrl([FHIRUrl::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addReference(new FHIRUrl($iext));
                }
            } else {
                $type->addReference(new FHIRUrl(null));
            }
        }
        if (isset($json[self::FIELD_SOURCE]) || array_key_exists(self::FIELD_SOURCE, $json)) {
            if (is_array($json[self::FIELD_SOURCE])) {
                foreach($json[self::FIELD_SOURCE] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addSource($v);
                    } else {
                        $type->addSource(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_SOURCE] instanceof FHIRReference) {
                $type->addSource($json[self::FIELD_SOURCE]);
            } else {
                $type->addSource(new FHIRReference($json[self::FIELD_SOURCE]));
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
            $ext = $this->key->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_key = $ext;
            }
        }
        if (isset($this->label)) {
            if (null !== ($val = $this->label->getValue())) {
                $out->label = $val;
            }
            $ext = $this->label->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_label = $ext;
            }
        }
        if (isset($this->conformance) && [] !== $this->conformance) {
            $vals = [];
            $exts = [];
            foreach ($this->conformance as $v) {
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
                $out->conformance = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_conformance = $exts;
            }
        }
        if (isset($this->conditionality)) {
            if (null !== ($val = $this->conditionality->getValue())) {
                $out->conditionality = $val;
            }
            $ext = $this->conditionality->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_conditionality = $ext;
            }
        }
        if (isset($this->requirement)) {
            if (null !== ($val = $this->requirement->getValue())) {
                $out->requirement = $val;
            }
            $ext = $this->requirement->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_requirement = $ext;
            }
        }
        if (isset($this->derivedFrom)) {
            if (null !== ($val = $this->derivedFrom->getValue())) {
                $out->derivedFrom = $val;
            }
            $ext = $this->derivedFrom->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_derivedFrom = $ext;
            }
        }
        if (isset($this->parent)) {
            if (null !== ($val = $this->parent->getValue())) {
                $out->parent = $val;
            }
            $ext = $this->parent->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_parent = $ext;
            }
        }
        if (isset($this->satisfiedBy) && [] !== $this->satisfiedBy) {
            $vals = [];
            $exts = [];
            foreach ($this->satisfiedBy as $v) {
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
                $out->satisfiedBy = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_satisfiedBy = $exts;
            }
        }
        if (isset($this->reference) && [] !== $this->reference) {
            $vals = [];
            $exts = [];
            foreach ($this->reference as $v) {
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
                $out->reference = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_reference = $exts;
            }
        }
        if (isset($this->source) && [] !== $this->source) {
            $out->source = $this->source;
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