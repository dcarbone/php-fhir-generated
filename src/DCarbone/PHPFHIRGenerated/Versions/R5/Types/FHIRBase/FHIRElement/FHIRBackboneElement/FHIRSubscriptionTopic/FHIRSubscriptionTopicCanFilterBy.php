<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic;

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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchComparator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchModifierCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Describes a stream of resource state changes or events and annotated with labels
 * useful to filter projections from this topic.
 */
class FHIRSubscriptionTopicCanFilterBy extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_CAN_FILTER_BY;


    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_RESOURCE = 'resource';
    public const FIELD_RESOURCE_EXT = '_resource';
    public const FIELD_FILTER_PARAMETER = 'filterParameter';
    public const FIELD_FILTER_PARAMETER_EXT = '_filterParameter';
    public const FIELD_FILTER_DEFINITION = 'filterDefinition';
    public const FIELD_FILTER_DEFINITION_EXT = '_filterDefinition';
    public const FIELD_COMPARATOR = 'comparator';
    public const FIELD_COMPARATOR_EXT = '_comparator';
    public const FIELD_MODIFIER = 'modifier';
    public const FIELD_MODIFIER_EXT = '_modifier';

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Description of how this filtering parameter is intended to be used.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $description;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * URL of the Resource that is the type used in this filter. This is the "focus" of
     * the topic (or one of them if there are more than one). It will be the same, a
     * generality, or a specificity of SubscriptionTopic.resourceTrigger.resource or
     * SubscriptionTopic.eventTrigger.resource when they are present.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri 
     */
    protected FHIRUri $resource;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Either the canonical URL to a search parameter (like
     * "http://hl7.org/fhir/SearchParameter/encounter-patient") or topic-defined
     * parameter (like "hub.event") which is a label for the filter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $filterParameter;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Either the canonical URL to a search parameter (like
     * "http://hl7.org/fhir/SearchParameter/encounter-patient") or the
     * officially-defined URI for a shared filter concept (like
     * "http://example.org/concepts/shared-common-event").
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri 
     */
    protected FHIRUri $filterDefinition;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Comparators allowed for the filter parameter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchComparator[] 
     */
    protected array $comparator;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Modifiers allowed for the filter parameter.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchModifierCode[] 
     */
    protected array $modifier;

    /** Default validation map for fields in type SubscriptionTopic.CanFilterBy */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_FILTER_PARAMETER => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRSubscriptionTopicCanFilterBy Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $resource
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $filterParameter
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $filterDefinition
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchComparator[] $comparator
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchModifierCode[] $modifier
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description = null,
                                null|string|FHIRUriPrimitive|FHIRUri $resource = null,
                                null|string|FHIRStringPrimitive|FHIRString $filterParameter = null,
                                null|string|FHIRUriPrimitive|FHIRUri $filterDefinition = null,
                                null|iterable $comparator = null,
                                null|iterable $modifier = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $resource) {
            $this->setResource($resource);
        }
        if (null !== $filterParameter) {
            $this->setFilterParameter($filterParameter);
        }
        if (null !== $filterDefinition) {
            $this->setFilterDefinition($filterDefinition);
        }
        if (null !== $comparator) {
            $this->setComparator(...$comparator);
        }
        if (null !== $modifier) {
            $this->setModifier(...$modifier);
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
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Description of how this filtering parameter is intended to be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getDescription(): null|FHIRMarkdown
    {
        return $this->description ?? null;
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
     * Description of how this filtering parameter is intended to be used.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @return static
     */
    public function setDescription(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRMarkdown)) {
            $description = new FHIRMarkdown(value: $description);
        }
        $this->description = $description;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * URL of the Resource that is the type used in this filter. This is the "focus" of
     * the topic (or one of them if there are more than one). It will be the same, a
     * generality, or a specificity of SubscriptionTopic.resourceTrigger.resource or
     * SubscriptionTopic.eventTrigger.resource when they are present.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri
     */
    public function getResource(): null|FHIRUri
    {
        return $this->resource ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * URL of the Resource that is the type used in this filter. This is the "focus" of
     * the topic (or one of them if there are more than one). It will be the same, a
     * generality, or a specificity of SubscriptionTopic.resourceTrigger.resource or
     * SubscriptionTopic.eventTrigger.resource when they are present.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $resource
     * @return static
     */
    public function setResource(null|string|FHIRUriPrimitive|FHIRUri $resource): self
    {
        if (null === $resource) {
            unset($this->resource);
            return $this;
        }
        if (!($resource instanceof FHIRUri)) {
            $resource = new FHIRUri(value: $resource);
        }
        $this->resource = $resource;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Either the canonical URL to a search parameter (like
     * "http://hl7.org/fhir/SearchParameter/encounter-patient") or topic-defined
     * parameter (like "hub.event") which is a label for the filter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getFilterParameter(): null|FHIRString
    {
        return $this->filterParameter ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Either the canonical URL to a search parameter (like
     * "http://hl7.org/fhir/SearchParameter/encounter-patient") or topic-defined
     * parameter (like "hub.event") which is a label for the filter.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $filterParameter
     * @return static
     */
    public function setFilterParameter(null|string|FHIRStringPrimitive|FHIRString $filterParameter): self
    {
        if (null === $filterParameter) {
            unset($this->filterParameter);
            return $this;
        }
        if (!($filterParameter instanceof FHIRString)) {
            $filterParameter = new FHIRString(value: $filterParameter);
        }
        $this->filterParameter = $filterParameter;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Either the canonical URL to a search parameter (like
     * "http://hl7.org/fhir/SearchParameter/encounter-patient") or the
     * officially-defined URI for a shared filter concept (like
     * "http://example.org/concepts/shared-common-event").
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri
     */
    public function getFilterDefinition(): null|FHIRUri
    {
        return $this->filterDefinition ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Either the canonical URL to a search parameter (like
     * "http://hl7.org/fhir/SearchParameter/encounter-patient") or the
     * officially-defined URI for a shared filter concept (like
     * "http://example.org/concepts/shared-common-event").
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $filterDefinition
     * @return static
     */
    public function setFilterDefinition(null|string|FHIRUriPrimitive|FHIRUri $filterDefinition): self
    {
        if (null === $filterDefinition) {
            unset($this->filterDefinition);
            return $this;
        }
        if (!($filterDefinition instanceof FHIRUri)) {
            $filterDefinition = new FHIRUri(value: $filterDefinition);
        }
        $this->filterDefinition = $filterDefinition;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Comparators allowed for the filter parameter.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchComparator[]
     */
    public function getComparator(): array
    {
        return $this->comparator ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchComparator>
     */
    public function getComparatorIterator(): iterable
    {
        if (!isset($this->comparator) || [] === $this->comparator) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->comparator);
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Comparators allowed for the filter parameter.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchComparator $comparator
     * @return static
     */
    public function addComparator(FHIRSearchComparator $comparator): self
    {
        if (!isset($this->comparator)) {
            $this->comparator = [];
        }
        $this->comparator[] = $comparator;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Comparators allowed for the filter parameter.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchComparator ...$comparator
     * @return static
     */
    public function setComparator(FHIRSearchComparator ...$comparator): self
    {
        $this->comparator = [];
        foreach($comparator as $v) {
            if ($v instanceof FHIRSearchComparator) {
                $this->comparator[] = $v;
            } else {
                $this->comparator[] = new FHIRSearchComparator(value: $v);
            }
        }
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Modifiers allowed for the filter parameter.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchModifierCode[]
     */
    public function getModifier(): array
    {
        return $this->modifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchModifierCode>
     */
    public function getModifierIterator(): iterable
    {
        if (!isset($this->modifier) || [] === $this->modifier) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->modifier);
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Modifiers allowed for the filter parameter.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchModifierCode $modifier
     * @return static
     */
    public function addModifier(FHIRSearchModifierCode $modifier): self
    {
        if (!isset($this->modifier)) {
            $this->modifier = [];
        }
        $this->modifier[] = $modifier;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Modifiers allowed for the filter parameter.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSearchModifierCode ...$modifier
     * @return static
     */
    public function setModifier(FHIRSearchModifierCode ...$modifier): self
    {
        $this->modifier = [];
        foreach($modifier as $v) {
            if ($v instanceof FHIRSearchModifierCode) {
                $this->modifier[] = $v;
            } else {
                $this->modifier[] = new FHIRSearchModifierCode(value: $v);
            }
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
        if (null !== ($v = $this->getFilterParameter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FILTER_PARAMETER] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESOURCE])) {
            $v = $this->getResource();
            foreach($validationRules[self::FIELD_RESOURCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RESOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESOURCE])) {
                        $errs[self::FIELD_RESOURCE] = [];
                    }
                    $errs[self::FIELD_RESOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FILTER_PARAMETER])) {
            $v = $this->getFilterParameter();
            foreach($validationRules[self::FIELD_FILTER_PARAMETER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FILTER_PARAMETER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FILTER_PARAMETER])) {
                        $errs[self::FIELD_FILTER_PARAMETER] = [];
                    }
                    $errs[self::FIELD_FILTER_PARAMETER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FILTER_DEFINITION])) {
            $v = $this->getFilterDefinition();
            foreach($validationRules[self::FIELD_FILTER_DEFINITION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FILTER_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FILTER_DEFINITION])) {
                        $errs[self::FIELD_FILTER_DEFINITION] = [];
                    }
                    $errs[self::FIELD_FILTER_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMPARATOR])) {
            $v = $this->getComparator();
            foreach($validationRules[self::FIELD_COMPARATOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COMPARATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMPARATOR])) {
                        $errs[self::FIELD_COMPARATOR] = [];
                    }
                    $errs[self::FIELD_COMPARATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER])) {
            $v = $this->getModifier();
            foreach($validationRules[self::FIELD_MODIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER])) {
                        $errs[self::FIELD_MODIFIER] = [];
                    }
                    $errs[self::FIELD_MODIFIER][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicCanFilterBy $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicCanFilterBy
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubscriptionTopicCanFilterBy)) {
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
            } else if (self::FIELD_DESCRIPTION === $childName) {
                $v = new FHIRMarkdown(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RESOURCE === $childName) {
                $v = new FHIRUri(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setResource(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FILTER_PARAMETER === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setFilterParameter(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FILTER_DEFINITION === $childName) {
                $v = new FHIRUri(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setFilterDefinition(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COMPARATOR === $childName) {
                $v = new FHIRSearchComparator(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->addComparator(FHIRSearchComparator::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER === $childName) {
                $v = new FHIRSearchModifierCode(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->addModifier(FHIRSearchModifierCode::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription(new FHIRMarkdown(
                    value: (string)$attributes[self::FIELD_DESCRIPTION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_RESOURCE])) {
            $pt = $type->getResource();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_RESOURCE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setResource(new FHIRUri(
                    value: (string)$attributes[self::FIELD_RESOURCE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_FILTER_PARAMETER])) {
            $pt = $type->getFilterParameter();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FILTER_PARAMETER]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setFilterParameter(new FHIRString(
                    value: (string)$attributes[self::FIELD_FILTER_PARAMETER],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_FILTER_DEFINITION])) {
            $pt = $type->getFilterDefinition();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FILTER_DEFINITION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setFilterDefinition(new FHIRUri(
                    value: (string)$attributes[self::FIELD_FILTER_DEFINITION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
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
            $xw->openRootNode('SubscriptionTopicCanFilterBy', $this->_getSourceXMLNS());
        }
        if (isset($this->description) && $this->description->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->getValue()?->getFormattedValue());
        }
        if (isset($this->resource) && $this->resource->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_RESOURCE, $this->resource->getValue()?->getFormattedValue());
        }
        if (isset($this->filterParameter) && $this->filterParameter->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_FILTER_PARAMETER, $this->filterParameter->getValue()?->getFormattedValue());
        }
        if (isset($this->filterDefinition) && $this->filterDefinition->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_FILTER_DEFINITION, $this->filterDefinition->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->description) && $this->description->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->resource) && $this->resource->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_RESOURCE);
            $this->resource->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->filterParameter) && $this->filterParameter->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_FILTER_PARAMETER);
            $this->filterParameter->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->filterDefinition) && $this->filterDefinition->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_FILTER_DEFINITION);
            $this->filterDefinition->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->comparator)) {
            foreach ($this->comparator as $v) {
                $xw->startElement(self::FIELD_COMPARATOR);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->modifier)) {
            foreach ($this->modifier as $v) {
                $xw->startElement(self::FIELD_MODIFIER);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicCanFilterBy $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicCanFilterBy
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubscriptionTopicCanFilterBy)) {
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
        if (isset($json[self::FIELD_DESCRIPTION]) || isset($json[self::FIELD_DESCRIPTION_EXT]) || array_key_exists(self::FIELD_DESCRIPTION, $json) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $json)) {
            $value = $json[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($json[self::FIELD_DESCRIPTION_EXT]) && is_array($json[self::FIELD_DESCRIPTION_EXT])) ? $json[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $type->setDescription($value);
                } else if (is_array($value)) {
                    $type->setDescription(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $type->setDescription(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDescription(new FHIRMarkdown($ext));
            } else {
                $type->setDescription(new FHIRMarkdown(null));
            }
        }
        if (isset($json[self::FIELD_RESOURCE]) || isset($json[self::FIELD_RESOURCE_EXT]) || array_key_exists(self::FIELD_RESOURCE, $json) || array_key_exists(self::FIELD_RESOURCE_EXT, $json)) {
            $value = $json[self::FIELD_RESOURCE] ?? null;
            $ext = (isset($json[self::FIELD_RESOURCE_EXT]) && is_array($json[self::FIELD_RESOURCE_EXT])) ? $json[self::FIELD_RESOURCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $type->setResource($value);
                } else if (is_array($value)) {
                    $type->setResource(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $type->setResource(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setResource(new FHIRUri($ext));
            } else {
                $type->setResource(new FHIRUri(null));
            }
        }
        if (isset($json[self::FIELD_FILTER_PARAMETER]) || isset($json[self::FIELD_FILTER_PARAMETER_EXT]) || array_key_exists(self::FIELD_FILTER_PARAMETER, $json) || array_key_exists(self::FIELD_FILTER_PARAMETER_EXT, $json)) {
            $value = $json[self::FIELD_FILTER_PARAMETER] ?? null;
            $ext = (isset($json[self::FIELD_FILTER_PARAMETER_EXT]) && is_array($json[self::FIELD_FILTER_PARAMETER_EXT])) ? $json[self::FIELD_FILTER_PARAMETER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setFilterParameter($value);
                } else if (is_array($value)) {
                    $type->setFilterParameter(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setFilterParameter(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setFilterParameter(new FHIRString($ext));
            } else {
                $type->setFilterParameter(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_FILTER_DEFINITION]) || isset($json[self::FIELD_FILTER_DEFINITION_EXT]) || array_key_exists(self::FIELD_FILTER_DEFINITION, $json) || array_key_exists(self::FIELD_FILTER_DEFINITION_EXT, $json)) {
            $value = $json[self::FIELD_FILTER_DEFINITION] ?? null;
            $ext = (isset($json[self::FIELD_FILTER_DEFINITION_EXT]) && is_array($json[self::FIELD_FILTER_DEFINITION_EXT])) ? $json[self::FIELD_FILTER_DEFINITION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $type->setFilterDefinition($value);
                } else if (is_array($value)) {
                    $type->setFilterDefinition(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $type->setFilterDefinition(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setFilterDefinition(new FHIRUri($ext));
            } else {
                $type->setFilterDefinition(new FHIRUri(null));
            }
        }
        if (isset($json[self::FIELD_COMPARATOR]) || isset($json[self::FIELD_COMPARATOR_EXT]) || array_key_exists(self::FIELD_COMPARATOR, $json) || array_key_exists(self::FIELD_COMPARATOR_EXT, $json)) {
            $value = $json[self::FIELD_COMPARATOR] ?? null;
            $ext = (isset($json[self::FIELD_COMPARATOR_EXT]) && is_array($json[self::FIELD_COMPARATOR_EXT])) ? $json[self::FIELD_COMPARATOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRSearchComparator) {
                    $type->addComparator($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRSearchComparator) {
                            $type->addComparator($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addComparator(new FHIRSearchComparator(array_merge($v, $iext)));
                            } else {
                                $type->addComparator(new FHIRSearchComparator([FHIRSearchComparator::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addComparator(new FHIRSearchComparator(array_merge($ext, $value)));
                } else {
                    $type->addComparator(new FHIRSearchComparator([FHIRSearchComparator::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addComparator(new FHIRSearchComparator($iext));
                }
            } else {
                $type->addComparator(new FHIRSearchComparator(null));
            }
        }
        if (isset($json[self::FIELD_MODIFIER]) || isset($json[self::FIELD_MODIFIER_EXT]) || array_key_exists(self::FIELD_MODIFIER, $json) || array_key_exists(self::FIELD_MODIFIER_EXT, $json)) {
            $value = $json[self::FIELD_MODIFIER] ?? null;
            $ext = (isset($json[self::FIELD_MODIFIER_EXT]) && is_array($json[self::FIELD_MODIFIER_EXT])) ? $json[self::FIELD_MODIFIER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRSearchModifierCode) {
                    $type->addModifier($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRSearchModifierCode) {
                            $type->addModifier($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addModifier(new FHIRSearchModifierCode(array_merge($v, $iext)));
                            } else {
                                $type->addModifier(new FHIRSearchModifierCode([FHIRSearchModifierCode::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addModifier(new FHIRSearchModifierCode(array_merge($ext, $value)));
                } else {
                    $type->addModifier(new FHIRSearchModifierCode([FHIRSearchModifierCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addModifier(new FHIRSearchModifierCode($iext));
                }
            } else {
                $type->addModifier(new FHIRSearchModifierCode(null));
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
            $ext = $this->description->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_description = $ext;
            }
        }
        if (isset($this->resource)) {
            if (null !== ($val = $this->resource->getValue())) {
                $out->resource = $val;
            }
            $ext = $this->resource->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_resource = $ext;
            }
        }
        if (isset($this->filterParameter)) {
            if (null !== ($val = $this->filterParameter->getValue())) {
                $out->filterParameter = $val;
            }
            $ext = $this->filterParameter->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_filterParameter = $ext;
            }
        }
        if (isset($this->filterDefinition)) {
            if (null !== ($val = $this->filterDefinition->getValue())) {
                $out->filterDefinition = $val;
            }
            $ext = $this->filterDefinition->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_filterDefinition = $ext;
            }
        }
        if (isset($this->comparator) && [] !== $this->comparator) {
            $vals = [];
            $exts = [];
            foreach ($this->comparator as $v) {
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
                $out->comparator = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_comparator = $exts;
            }
        }
        if (isset($this->modifier) && [] !== $this->modifier) {
            $vals = [];
            $exts = [];
            foreach ($this->modifier as $v) {
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
                $out->modifier = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_modifier = $exts;
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