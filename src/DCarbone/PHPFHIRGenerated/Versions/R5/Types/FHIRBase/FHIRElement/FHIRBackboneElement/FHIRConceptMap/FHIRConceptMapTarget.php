<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap;

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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConceptMapRelationship;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRConceptMapRelationshipEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A statement of relationships from one set of concepts to one or more other
 * concepts - either concepts in code systems, or data element/data element
 * concepts, or classes in class models.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRConceptMapTarget extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CONCEPT_MAP_DOT_TARGET;

    /* class_default.php:56 */
    public const FIELD_CODE = 'code';
    public const FIELD_CODE_EXT = '_code';
    public const FIELD_DISPLAY = 'display';
    public const FIELD_DISPLAY_EXT = '_display';
    public const FIELD_VALUE_SET = 'valueSet';
    public const FIELD_VALUE_SET_EXT = '_valueSet';
    public const FIELD_RELATIONSHIP = 'relationship';
    public const FIELD_RELATIONSHIP_EXT = '_relationship';
    public const FIELD_COMMENT = 'comment';
    public const FIELD_COMMENT_EXT = '_comment';
    public const FIELD_PROPERTY = 'property';
    public const FIELD_DEPENDS_ON = 'dependsOn';
    public const FIELD_PRODUCT = 'product';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_RELATIONSHIP => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_CODE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DISPLAY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_VALUE_SET => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_RELATIONSHIP => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_COMMENT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identity (code or path) or the element/item that the map refers to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode 
     */
    #[FHIRCode]
    protected FHIRCode $code;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The display for the code. The display is only provided to help editors when
     * editing the concept map.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $display;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The set of concepts from the ConceptMap.group.target code system which are all
     * being mapped to as part of this mapping rule. The effect of using this data
     * element is the same as having multiple ConceptMap.group.element.target elements
     * with one for each concept in the ConceptMap.group.element.target.valueSet value
     * set.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical 
     */
    #[FHIRCanonical]
    protected FHIRCanonical $valueSet;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The relationship between the source and target concepts. The relationship is
     * read from source to target (e.g. source-is-narrower-than-target).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConceptMapRelationship 
     */
    #[FHIRConceptMapRelationship]
    protected FHIRConceptMapRelationship $relationship;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of status/issues in mapping that conveys additional information
     * not represented in the structured data.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $comment;
    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     *
     * A property value for this source -> target mapping.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapProperty1> 
     */
    #[FHIRConceptMapProperty1]
    protected array $property;
    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     *
     * A set of additional dependencies for this mapping to hold. This mapping is only
     * applicable if the specified data attribute can be resolved, and it has the
     * specified value.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn> 
     */
    #[FHIRConceptMapDependsOn]
    protected array $dependsOn;
    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     *
     * Product is the output of a ConceptMap that provides additional values that go in
     * other attributes / data elemnts of the target data.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn> 
     */
    #[FHIRConceptMapDependsOn]
    protected array $product;

    /* constructor.php:61 */
    /**
     * FHIRConceptMapTarget Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $code
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $display
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $valueSet
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRConceptMapRelationshipEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConceptMapRelationship $relationship
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $comment
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapProperty1> $property
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn> $dependsOn
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn> $product
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRCodePrimitive|FHIRCode $code = null,
                                null|string|FHIRStringPrimitive|FHIRString $display = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $valueSet = null,
                                null|string|FHIRConceptMapRelationshipEnum|FHIRConceptMapRelationship $relationship = null,
                                null|string|FHIRStringPrimitive|FHIRString $comment = null,
                                null|iterable $property = null,
                                null|iterable $dependsOn = null,
                                null|iterable $product = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $display) {
            $this->setDisplay($display);
        }
        if (null !== $valueSet) {
            $this->setValueSet($valueSet);
        }
        if (null !== $relationship) {
            $this->setRelationship($relationship);
        }
        if (null !== $comment) {
            $this->setComment($comment);
        }
        if (null !== $property) {
            $this->setProperty(...$property);
        }
        if (null !== $dependsOn) {
            $this->setDependsOn(...$dependsOn);
        }
        if (null !== $product) {
            $this->setProduct(...$product);
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
     * Identity (code or path) or the element/item that the map refers to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode
     */
    public function getCode(): null|FHIRCode
    {
        return $this->code ?? null;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identity (code or path) or the element/item that the map refers to.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $code
     * @return static
     */
    public function setCode(null|string|FHIRCodePrimitive|FHIRCode $code): self
    {
        if (null === $code) {
            unset($this->code);
            return $this;
        }
        if (!($code instanceof FHIRCode)) {
            $code = new FHIRCode(value: $code);
        }
        $this->code = $code;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The display for the code. The display is only provided to help editors when
     * editing the concept map.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getDisplay(): null|FHIRString
    {
        return $this->display ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The display for the code. The display is only provided to help editors when
     * editing the concept map.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $display
     * @return static
     */
    public function setDisplay(null|string|FHIRStringPrimitive|FHIRString $display): self
    {
        if (null === $display) {
            unset($this->display);
            return $this;
        }
        if (!($display instanceof FHIRString)) {
            $display = new FHIRString(value: $display);
        }
        $this->display = $display;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The set of concepts from the ConceptMap.group.target code system which are all
     * being mapped to as part of this mapping rule. The effect of using this data
     * element is the same as having multiple ConceptMap.group.element.target elements
     * with one for each concept in the ConceptMap.group.element.target.valueSet value
     * set.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getValueSet(): null|FHIRCanonical
    {
        return $this->valueSet ?? null;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The set of concepts from the ConceptMap.group.target code system which are all
     * being mapped to as part of this mapping rule. The effect of using this data
     * element is the same as having multiple ConceptMap.group.element.target elements
     * with one for each concept in the ConceptMap.group.element.target.valueSet value
     * set.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $valueSet
     * @return static
     */
    public function setValueSet(null|string|FHIRCanonicalPrimitive|FHIRCanonical $valueSet): self
    {
        if (null === $valueSet) {
            unset($this->valueSet);
            return $this;
        }
        if (!($valueSet instanceof FHIRCanonical)) {
            $valueSet = new FHIRCanonical(value: $valueSet);
        }
        $this->valueSet = $valueSet;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The relationship between the source and target concepts. The relationship is
     * read from source to target (e.g. source-is-narrower-than-target).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConceptMapRelationship
     */
    public function getRelationship(): null|FHIRConceptMapRelationship
    {
        return $this->relationship ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The relationship between the source and target concepts. The relationship is
     * read from source to target (e.g. source-is-narrower-than-target).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRConceptMapRelationshipEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConceptMapRelationship $relationship
     * @return static
     */
    public function setRelationship(null|string|FHIRConceptMapRelationshipEnum|FHIRConceptMapRelationship $relationship): self
    {
        if (null === $relationship) {
            unset($this->relationship);
            return $this;
        }
        if (!($relationship instanceof FHIRConceptMapRelationship)) {
            $relationship = new FHIRConceptMapRelationship(value: $relationship);
        }
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of status/issues in mapping that conveys additional information
     * not represented in the structured data.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getComment(): null|FHIRString
    {
        return $this->comment ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of status/issues in mapping that conveys additional information
     * not represented in the structured data.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $comment
     * @return static
     */
    public function setComment(null|string|FHIRStringPrimitive|FHIRString $comment): self
    {
        if (null === $comment) {
            unset($this->comment);
            return $this;
        }
        if (!($comment instanceof FHIRString)) {
            $comment = new FHIRString(value: $comment);
        }
        $this->comment = $comment;
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     *
     * A property value for this source -> target mapping.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapProperty1>
     */
    public function getProperty(): array
    {
        return $this->property ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapProperty1>
     */
    public function getPropertyIterator(): iterable
    {
        if (!isset($this->property)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->property);
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     *
     * A property value for this source -> target mapping.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapProperty1 $property
     * @return static
     */
    public function addProperty(FHIRConceptMapProperty1 $property): self
    {
        if (!isset($this->property)) {
            $this->property = [];
        }
        $this->property[] = $property;
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     *
     * A property value for this source -> target mapping.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapProperty1 ...$property
     * @return static
     */
    public function setProperty(FHIRConceptMapProperty1 ...$property): self
    {
        if ([] === $property) {
            unset($this->property);
            return $this;
        }
        $this->property = $property;
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     *
     * A set of additional dependencies for this mapping to hold. This mapping is only
     * applicable if the specified data attribute can be resolved, and it has the
     * specified value.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn>
     */
    public function getDependsOn(): array
    {
        return $this->dependsOn ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn>
     */
    public function getDependsOnIterator(): iterable
    {
        if (!isset($this->dependsOn)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->dependsOn);
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     *
     * A set of additional dependencies for this mapping to hold. This mapping is only
     * applicable if the specified data attribute can be resolved, and it has the
     * specified value.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn $dependsOn
     * @return static
     */
    public function addDependsOn(FHIRConceptMapDependsOn $dependsOn): self
    {
        if (!isset($this->dependsOn)) {
            $this->dependsOn = [];
        }
        $this->dependsOn[] = $dependsOn;
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     *
     * A set of additional dependencies for this mapping to hold. This mapping is only
     * applicable if the specified data attribute can be resolved, and it has the
     * specified value.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn ...$dependsOn
     * @return static
     */
    public function setDependsOn(FHIRConceptMapDependsOn ...$dependsOn): self
    {
        if ([] === $dependsOn) {
            unset($this->dependsOn);
            return $this;
        }
        $this->dependsOn = $dependsOn;
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     *
     * Product is the output of a ConceptMap that provides additional values that go in
     * other attributes / data elemnts of the target data.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn>
     */
    public function getProduct(): array
    {
        return $this->product ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn>
     */
    public function getProductIterator(): iterable
    {
        if (!isset($this->product)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->product);
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     *
     * Product is the output of a ConceptMap that provides additional values that go in
     * other attributes / data elemnts of the target data.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn $product
     * @return static
     */
    public function addProduct(FHIRConceptMapDependsOn $product): self
    {
        if (!isset($this->product)) {
            $this->product = [];
        }
        $this->product[] = $product;
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     *
     * Product is the output of a ConceptMap that provides additional values that go in
     * other attributes / data elemnts of the target data.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn ...$product
     * @return static
     */
    public function setProduct(FHIRConceptMapDependsOn ...$product): self
    {
        if ([] === $product) {
            unset($this->product);
            return $this;
        }
        $this->product = $product;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapTarget $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapTarget
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRConceptMapTarget)) {
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
            } else if (self::FIELD_CODE === $cen) {
                $type->setCode(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DISPLAY === $cen) {
                $type->setDisplay(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_SET === $cen) {
                $type->setValueSet(FHIRCanonical::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RELATIONSHIP === $cen) {
                $type->setRelationship(FHIRConceptMapRelationship::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COMMENT === $cen) {
                $type->setComment(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROPERTY === $cen) {
                $type->addProperty(FHIRConceptMapProperty1::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEPENDS_ON === $cen) {
                $type->addDependsOn(FHIRConceptMapDependsOn::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRODUCT === $cen) {
                $type->addProduct(FHIRConceptMapDependsOn::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CODE])) {
            if (isset($type->code)) {
                $type->code->setValue((string)$attributes[self::FIELD_CODE]);
            } else {
                $type->setCode((string)$attributes[self::FIELD_CODE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_CODE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DISPLAY])) {
            if (isset($type->display)) {
                $type->display->setValue((string)$attributes[self::FIELD_DISPLAY]);
            } else {
                $type->setDisplay((string)$attributes[self::FIELD_DISPLAY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DISPLAY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VALUE_SET])) {
            if (isset($type->valueSet)) {
                $type->valueSet->setValue((string)$attributes[self::FIELD_VALUE_SET]);
            } else {
                $type->setValueSet((string)$attributes[self::FIELD_VALUE_SET]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_VALUE_SET, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_RELATIONSHIP])) {
            if (isset($type->relationship)) {
                $type->relationship->setValue((string)$attributes[self::FIELD_RELATIONSHIP]);
            } else {
                $type->setRelationship((string)$attributes[self::FIELD_RELATIONSHIP]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_RELATIONSHIP, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_COMMENT])) {
            if (isset($type->comment)) {
                $type->comment->setValue((string)$attributes[self::FIELD_COMMENT]);
            } else {
                $type->setComment((string)$attributes[self::FIELD_COMMENT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_COMMENT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->code) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CODE]) {
            $xw->writeAttribute(self::FIELD_CODE, $this->code->_getValueAsString());
        }
        if (isset($this->display) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DISPLAY]) {
            $xw->writeAttribute(self::FIELD_DISPLAY, $this->display->_getValueAsString());
        }
        if (isset($this->valueSet) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_SET]) {
            $xw->writeAttribute(self::FIELD_VALUE_SET, $this->valueSet->_getValueAsString());
        }
        if (isset($this->relationship) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_RELATIONSHIP]) {
            $xw->writeAttribute(self::FIELD_RELATIONSHIP, $this->relationship->_getValueAsString());
        }
        if (isset($this->comment) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_COMMENT]) {
            $xw->writeAttribute(self::FIELD_COMMENT, $this->comment->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->code)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CODE]
                || $this->code->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CODE]);
            $xw->endElement();
        }
        if (isset($this->display)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DISPLAY]
                || $this->display->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DISPLAY);
            $this->display->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DISPLAY]);
            $xw->endElement();
        }
        if (isset($this->valueSet)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_SET]
                || $this->valueSet->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_SET);
            $this->valueSet->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_SET]);
            $xw->endElement();
        }
        if (isset($this->relationship)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_RELATIONSHIP]
                || $this->relationship->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_RELATIONSHIP);
            $this->relationship->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_RELATIONSHIP]);
            $xw->endElement();
        }
        if (isset($this->comment)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_COMMENT]
                || $this->comment->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_COMMENT);
            $this->comment->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_COMMENT]);
            $xw->endElement();
        }
        if (isset($this->property)) {
            foreach ($this->property as $v) {
                $xw->startElement(self::FIELD_PROPERTY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->dependsOn)) {
            foreach ($this->dependsOn as $v) {
                $xw->startElement(self::FIELD_DEPENDS_ON);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->product)) {
            foreach ($this->product as $v) {
                $xw->startElement(self::FIELD_PRODUCT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapTarget $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapTarget
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRConceptMapTarget)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->code)
            || isset($decoded->_code)
            || property_exists($decoded, self::FIELD_CODE)
            || property_exists($decoded, self::FIELD_CODE_EXT)) {
            $v = $decoded->_code ?? new \stdClass();
            $v->value = $decoded->code ?? null;
            $type->setCode(FHIRCode::jsonUnserialize($v, $config));
        }
        if (isset($decoded->display)
            || isset($decoded->_display)
            || property_exists($decoded, self::FIELD_DISPLAY)
            || property_exists($decoded, self::FIELD_DISPLAY_EXT)) {
            $v = $decoded->_display ?? new \stdClass();
            $v->value = $decoded->display ?? null;
            $type->setDisplay(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->valueSet)
            || isset($decoded->_valueSet)
            || property_exists($decoded, self::FIELD_VALUE_SET)
            || property_exists($decoded, self::FIELD_VALUE_SET_EXT)) {
            $v = $decoded->_valueSet ?? new \stdClass();
            $v->value = $decoded->valueSet ?? null;
            $type->setValueSet(FHIRCanonical::jsonUnserialize($v, $config));
        }
        if (isset($decoded->relationship)
            || isset($decoded->_relationship)
            || property_exists($decoded, self::FIELD_RELATIONSHIP)
            || property_exists($decoded, self::FIELD_RELATIONSHIP_EXT)) {
            $v = $decoded->_relationship ?? new \stdClass();
            $v->value = $decoded->relationship ?? null;
            $type->setRelationship(FHIRConceptMapRelationship::jsonUnserialize($v, $config));
        }
        if (isset($decoded->comment)
            || isset($decoded->_comment)
            || property_exists($decoded, self::FIELD_COMMENT)
            || property_exists($decoded, self::FIELD_COMMENT_EXT)) {
            $v = $decoded->_comment ?? new \stdClass();
            $v->value = $decoded->comment ?? null;
            $type->setComment(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->property) || property_exists($decoded, self::FIELD_PROPERTY)) {
            if (is_object($decoded->property)) {
                $vals = [$decoded->property];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PROPERTY, true);
            } else {
                $vals = $decoded->property;
            }
            foreach($vals as $v) {
                $type->addProperty(FHIRConceptMapProperty1::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->dependsOn) || property_exists($decoded, self::FIELD_DEPENDS_ON)) {
            if (is_object($decoded->dependsOn)) {
                $vals = [$decoded->dependsOn];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DEPENDS_ON, true);
            } else {
                $vals = $decoded->dependsOn;
            }
            foreach($vals as $v) {
                $type->addDependsOn(FHIRConceptMapDependsOn::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->product) || property_exists($decoded, self::FIELD_PRODUCT)) {
            if (is_object($decoded->product)) {
                $vals = [$decoded->product];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PRODUCT, true);
            } else {
                $vals = $decoded->product;
            }
            foreach($vals as $v) {
                $type->addProduct(FHIRConceptMapDependsOn::jsonUnserialize($v, $config));
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
        if (isset($this->code)) {
            if (null !== ($val = $this->code->getValue())) {
                $out->code = $val;
            }
            if ($this->code->_nonValueFieldDefined()) {
                $ext = $this->code->jsonSerialize();
                unset($ext->value);
                $out->_code = $ext;
            }
        }
        if (isset($this->display)) {
            if (null !== ($val = $this->display->getValue())) {
                $out->display = $val;
            }
            if ($this->display->_nonValueFieldDefined()) {
                $ext = $this->display->jsonSerialize();
                unset($ext->value);
                $out->_display = $ext;
            }
        }
        if (isset($this->valueSet)) {
            if (null !== ($val = $this->valueSet->getValue())) {
                $out->valueSet = $val;
            }
            if ($this->valueSet->_nonValueFieldDefined()) {
                $ext = $this->valueSet->jsonSerialize();
                unset($ext->value);
                $out->_valueSet = $ext;
            }
        }
        if (isset($this->relationship)) {
            if (null !== ($val = $this->relationship->getValue())) {
                $out->relationship = $val;
            }
            if ($this->relationship->_nonValueFieldDefined()) {
                $ext = $this->relationship->jsonSerialize();
                unset($ext->value);
                $out->_relationship = $ext;
            }
        }
        if (isset($this->comment)) {
            if (null !== ($val = $this->comment->getValue())) {
                $out->comment = $val;
            }
            if ($this->comment->_nonValueFieldDefined()) {
                $ext = $this->comment->jsonSerialize();
                unset($ext->value);
                $out->_comment = $ext;
            }
        }
        if (isset($this->property) && [] !== $this->property) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PROPERTY) && 1 === count($this->property)) {
                $out->property = $this->property[0];
            } else {
                $out->property = $this->property;
            }
        }
        if (isset($this->dependsOn) && [] !== $this->dependsOn) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_DEPENDS_ON) && 1 === count($this->dependsOn)) {
                $out->dependsOn = $this->dependsOn[0];
            } else {
                $out->dependsOn = $this->dependsOn;
            }
        }
        if (isset($this->product) && [] !== $this->product) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PRODUCT) && 1 === count($this->product)) {
                $out->product = $this->product[0];
            } else {
                $out->product = $this->product;
            }
        }
        return $out;
    }
}