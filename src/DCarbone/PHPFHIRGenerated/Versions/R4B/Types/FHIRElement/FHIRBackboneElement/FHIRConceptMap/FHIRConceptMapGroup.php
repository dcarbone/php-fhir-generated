<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * A statement of relationships from one set of concepts to one or more other
 * concepts - either concepts in code systems, or data element/data element
 * concepts, or classes in class models.
 */
class FHIRConceptMapGroup extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CONCEPT_MAP_DOT_GROUP;


    public const FIELD_SOURCE = 'source';
    public const FIELD_SOURCE_EXT = '_source';
    public const FIELD_SOURCE_VERSION = 'sourceVersion';
    public const FIELD_SOURCE_VERSION_EXT = '_sourceVersion';
    public const FIELD_TARGET = 'target';
    public const FIELD_TARGET_EXT = '_target';
    public const FIELD_TARGET_VERSION = 'targetVersion';
    public const FIELD_TARGET_VERSION_EXT = '_targetVersion';
    public const FIELD_ELEMENT = 'element';
    public const FIELD_UNMAPPED = 'unmapped';

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that identifies the source system where the concepts to be
     * mapped are defined.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $source;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The specific version of the code system, as determined by the code system
     * authority.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $sourceVersion;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that identifies the target system that the concepts will be
     * mapped to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $target;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The specific version of the code system, as determined by the code system
     * authority.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $targetVersion;
    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     *
     * Mappings for an individual concept in the source to one or more concepts in the
     * target.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapElement[] 
     */
    protected array $element;
    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     *
     * What to do when there is no mapping for the source concept. "Unmapped" does not
     * include codes that are unmatched, and the unmapped element is ignored in a code
     * is specified to have equivalence = unmatched.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapUnmapped 
     */
    protected FHIRConceptMapUnmapped $unmapped;

    /** Default validation map for fields in type ConceptMap.Group */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_ELEMENT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRConceptMapGroup Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri $source
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $sourceVersion
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri $target
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $targetVersion
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapElement[] $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapUnmapped $unmapped
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRUriPrimitive|FHIRUri $source = null,
                                null|string|FHIRStringPrimitive|FHIRString $sourceVersion = null,
                                null|string|FHIRUriPrimitive|FHIRUri $target = null,
                                null|string|FHIRStringPrimitive|FHIRString $targetVersion = null,
                                null|iterable $element = null,
                                null|FHIRConceptMapUnmapped $unmapped = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $source) {
            $this->setSource($source);
        }
        if (null !== $sourceVersion) {
            $this->setSourceVersion($sourceVersion);
        }
        if (null !== $target) {
            $this->setTarget($target);
        }
        if (null !== $targetVersion) {
            $this->setTargetVersion($targetVersion);
        }
        if (null !== $element) {
            $this->setElement(...$element);
        }
        if (null !== $unmapped) {
            $this->setUnmapped($unmapped);
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
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that identifies the source system where the concepts to be
     * mapped are defined.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri
     */
    public function getSource(): null|FHIRUri
    {
        return $this->source ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that identifies the source system where the concepts to be
     * mapped are defined.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri $source
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSource(null|string|FHIRUriPrimitive|FHIRUri $source,
                              null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $source) {
            unset($this->source);
            return $this;
        }
        if (!($source instanceof FHIRUri)) {
            $source = new FHIRUri(value: $source);
        }
        if (null !== $valueXMLLocation) {
            $source->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $source->_getValueXMLLocation()) {
            $source->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->source = $source;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The specific version of the code system, as determined by the code system
     * authority.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getSourceVersion(): null|FHIRString
    {
        return $this->sourceVersion ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The specific version of the code system, as determined by the code system
     * authority.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $sourceVersion
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSourceVersion(null|string|FHIRStringPrimitive|FHIRString $sourceVersion,
                                     null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $sourceVersion) {
            unset($this->sourceVersion);
            return $this;
        }
        if (!($sourceVersion instanceof FHIRString)) {
            $sourceVersion = new FHIRString(value: $sourceVersion);
        }
        if (null !== $valueXMLLocation) {
            $sourceVersion->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $sourceVersion->_getValueXMLLocation()) {
            $sourceVersion->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->sourceVersion = $sourceVersion;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that identifies the target system that the concepts will be
     * mapped to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri
     */
    public function getTarget(): null|FHIRUri
    {
        return $this->target ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that identifies the target system that the concepts will be
     * mapped to.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri $target
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTarget(null|string|FHIRUriPrimitive|FHIRUri $target,
                              null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $target) {
            unset($this->target);
            return $this;
        }
        if (!($target instanceof FHIRUri)) {
            $target = new FHIRUri(value: $target);
        }
        if (null !== $valueXMLLocation) {
            $target->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $target->_getValueXMLLocation()) {
            $target->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->target = $target;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The specific version of the code system, as determined by the code system
     * authority.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getTargetVersion(): null|FHIRString
    {
        return $this->targetVersion ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The specific version of the code system, as determined by the code system
     * authority.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $targetVersion
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTargetVersion(null|string|FHIRStringPrimitive|FHIRString $targetVersion,
                                     null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $targetVersion) {
            unset($this->targetVersion);
            return $this;
        }
        if (!($targetVersion instanceof FHIRString)) {
            $targetVersion = new FHIRString(value: $targetVersion);
        }
        if (null !== $valueXMLLocation) {
            $targetVersion->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $targetVersion->_getValueXMLLocation()) {
            $targetVersion->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->targetVersion = $targetVersion;
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     *
     * Mappings for an individual concept in the source to one or more concepts in the
     * target.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapElement[]
     */
    public function getElement(): array
    {
        return $this->element ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapElement>
     */
    public function getElementIterator(): iterable
    {
        if (!isset($this->element) || [] === $this->element) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->element);
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     *
     * Mappings for an individual concept in the source to one or more concepts in the
     * target.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapElement $element
     * @return static
     */
    public function addElement(FHIRConceptMapElement $element): self
    {
        if (!isset($this->element)) {
            $this->element = [];
        }
        $this->element[] = $element;
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     *
     * Mappings for an individual concept in the source to one or more concepts in the
     * target.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapElement ...$element
     * @return static
     */
    public function setElement(FHIRConceptMapElement ...$element): self
    {
        $this->element = $element;
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     *
     * What to do when there is no mapping for the source concept. "Unmapped" does not
     * include codes that are unmatched, and the unmapped element is ignored in a code
     * is specified to have equivalence = unmatched.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapUnmapped
     */
    public function getUnmapped(): null|FHIRConceptMapUnmapped
    {
        return $this->unmapped ?? null;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either concepts in code systems, or data element/data element
     * concepts, or classes in class models.
     *
     * What to do when there is no mapping for the source concept. "Unmapped" does not
     * include codes that are unmatched, and the unmapped element is ignored in a code
     * is specified to have equivalence = unmatched.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapUnmapped $unmapped
     * @return static
     */
    public function setUnmapped(null|FHIRConceptMapUnmapped $unmapped): self
    {
        if (null === $unmapped) {
            unset($this->unmapped);
            return $this;
        }
        $this->unmapped = $unmapped;
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
        if ([] !== ($vs = $this->getElement())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ELEMENT, $i)] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_SOURCE_VERSION])) {
            $v = $this->getSourceVersion();
            foreach($validationRules[self::FIELD_SOURCE_VERSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SOURCE_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE_VERSION])) {
                        $errs[self::FIELD_SOURCE_VERSION] = [];
                    }
                    $errs[self::FIELD_SOURCE_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET])) {
            $v = $this->getTarget();
            foreach($validationRules[self::FIELD_TARGET] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TARGET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET])) {
                        $errs[self::FIELD_TARGET] = [];
                    }
                    $errs[self::FIELD_TARGET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_VERSION])) {
            $v = $this->getTargetVersion();
            foreach($validationRules[self::FIELD_TARGET_VERSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TARGET_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_VERSION])) {
                        $errs[self::FIELD_TARGET_VERSION] = [];
                    }
                    $errs[self::FIELD_TARGET_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ELEMENT])) {
            $v = $this->getElement();
            foreach($validationRules[self::FIELD_ELEMENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ELEMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ELEMENT])) {
                        $errs[self::FIELD_ELEMENT] = [];
                    }
                    $errs[self::FIELD_ELEMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UNMAPPED])) {
            $v = $this->getUnmapped();
            foreach($validationRules[self::FIELD_UNMAPPED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_UNMAPPED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UNMAPPED])) {
                        $errs[self::FIELD_UNMAPPED] = [];
                    }
                    $errs[self::FIELD_UNMAPPED][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapGroup $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapGroup
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRConceptMapGroup)) {
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
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SOURCE === $childName) {
                $v = new FHIRUri(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setSource(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SOURCE_VERSION === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setSourceVersion(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TARGET === $childName) {
                $v = new FHIRUri(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setTarget(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TARGET_VERSION === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setTargetVersion(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ELEMENT === $childName) {
                $v = new FHIRConceptMapElement();
                $type->addElement(FHIRConceptMapElement::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_UNMAPPED === $childName) {
                $v = new FHIRConceptMapUnmapped();
                $type->setUnmapped(FHIRConceptMapUnmapped::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SOURCE])) {
            $pt = $type->getSource();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_SOURCE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSource(new FHIRUri(
                    value: (string)$attributes[self::FIELD_SOURCE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SOURCE_VERSION])) {
            $pt = $type->getSourceVersion();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_SOURCE_VERSION]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSourceVersion(new FHIRString(
                    value: (string)$attributes[self::FIELD_SOURCE_VERSION],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_TARGET])) {
            $pt = $type->getTarget();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_TARGET]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setTarget(new FHIRUri(
                    value: (string)$attributes[self::FIELD_TARGET],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_TARGET_VERSION])) {
            $pt = $type->getTargetVersion();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_TARGET_VERSION]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setTargetVersion(new FHIRString(
                    value: (string)$attributes[self::FIELD_TARGET_VERSION],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
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
            $xw->openRootNode('ConceptMapGroup', $this->_getSourceXMLNS());
        }
        if (isset($this->source) && $this->source->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SOURCE, $this->source->getValue()?->_getFormattedValue());
        }
        if (isset($this->sourceVersion) && $this->sourceVersion->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SOURCE_VERSION, $this->sourceVersion->getValue()?->_getFormattedValue());
        }
        if (isset($this->target) && $this->target->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_TARGET, $this->target->getValue()?->_getFormattedValue());
        }
        if (isset($this->targetVersion) && $this->targetVersion->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_TARGET_VERSION, $this->targetVersion->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->source) && $this->source->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SOURCE);
            $this->source->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->sourceVersion) && $this->sourceVersion->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SOURCE_VERSION);
            $this->sourceVersion->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->target) && $this->target->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_TARGET);
            $this->target->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->targetVersion) && $this->targetVersion->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_TARGET_VERSION);
            $this->targetVersion->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->element)) {
            foreach ($this->element as $v) {
                $xw->startElement(self::FIELD_ELEMENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->unmapped)) {
            $xw->startElement(self::FIELD_UNMAPPED);
            $this->unmapped->xmlSerialize($xw, $config);
            $xw->endElement();
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapGroup $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapGroup
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRConceptMapGroup)) {
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
        if (isset($json[self::FIELD_SOURCE]) || isset($json[self::FIELD_SOURCE_EXT]) || array_key_exists(self::FIELD_SOURCE, $json) || array_key_exists(self::FIELD_SOURCE_EXT, $json)) {
            $value = $json[self::FIELD_SOURCE] ?? null;
            $ext = (isset($json[self::FIELD_SOURCE_EXT]) && is_array($json[self::FIELD_SOURCE_EXT])) ? $json[self::FIELD_SOURCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $type->setSource($value);
                } else if (is_array($value)) {
                    $type->setSource(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $type->setSource(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSource(new FHIRUri($ext));
            } else {
                $type->setSource(new FHIRUri(null));
            }
        }
        if (isset($json[self::FIELD_SOURCE_VERSION]) || isset($json[self::FIELD_SOURCE_VERSION_EXT]) || array_key_exists(self::FIELD_SOURCE_VERSION, $json) || array_key_exists(self::FIELD_SOURCE_VERSION_EXT, $json)) {
            $value = $json[self::FIELD_SOURCE_VERSION] ?? null;
            $ext = (isset($json[self::FIELD_SOURCE_VERSION_EXT]) && is_array($json[self::FIELD_SOURCE_VERSION_EXT])) ? $json[self::FIELD_SOURCE_VERSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setSourceVersion($value);
                } else if (is_array($value)) {
                    $type->setSourceVersion(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setSourceVersion(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSourceVersion(new FHIRString($ext));
            } else {
                $type->setSourceVersion(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_TARGET]) || isset($json[self::FIELD_TARGET_EXT]) || array_key_exists(self::FIELD_TARGET, $json) || array_key_exists(self::FIELD_TARGET_EXT, $json)) {
            $value = $json[self::FIELD_TARGET] ?? null;
            $ext = (isset($json[self::FIELD_TARGET_EXT]) && is_array($json[self::FIELD_TARGET_EXT])) ? $json[self::FIELD_TARGET_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $type->setTarget($value);
                } else if (is_array($value)) {
                    $type->setTarget(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $type->setTarget(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setTarget(new FHIRUri($ext));
            } else {
                $type->setTarget(new FHIRUri(null));
            }
        }
        if (isset($json[self::FIELD_TARGET_VERSION]) || isset($json[self::FIELD_TARGET_VERSION_EXT]) || array_key_exists(self::FIELD_TARGET_VERSION, $json) || array_key_exists(self::FIELD_TARGET_VERSION_EXT, $json)) {
            $value = $json[self::FIELD_TARGET_VERSION] ?? null;
            $ext = (isset($json[self::FIELD_TARGET_VERSION_EXT]) && is_array($json[self::FIELD_TARGET_VERSION_EXT])) ? $json[self::FIELD_TARGET_VERSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setTargetVersion($value);
                } else if (is_array($value)) {
                    $type->setTargetVersion(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setTargetVersion(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setTargetVersion(new FHIRString($ext));
            } else {
                $type->setTargetVersion(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_ELEMENT]) || array_key_exists(self::FIELD_ELEMENT, $json)) {
            if (is_array($json[self::FIELD_ELEMENT])) {
                foreach($json[self::FIELD_ELEMENT] as $v) {
                    if ($v instanceof FHIRConceptMapElement) {
                        $type->addElement($v);
                    } else {
                        $type->addElement(new FHIRConceptMapElement($v));
                    }
                }
            } elseif ($json[self::FIELD_ELEMENT] instanceof FHIRConceptMapElement) {
                $type->addElement($json[self::FIELD_ELEMENT]);
            } else {
                $type->addElement(new FHIRConceptMapElement($json[self::FIELD_ELEMENT]));
            }
        }
        if (isset($json[self::FIELD_UNMAPPED]) || array_key_exists(self::FIELD_UNMAPPED, $json)) {
            if ($json[self::FIELD_UNMAPPED] instanceof FHIRConceptMapUnmapped) {
                $type->setUnmapped($json[self::FIELD_UNMAPPED]);
            } else {
                $type->setUnmapped(new FHIRConceptMapUnmapped($json[self::FIELD_UNMAPPED]));
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
        if (isset($this->source)) {
            if (null !== ($val = $this->source->getValue())) {
                $out->source = $val;
            }
            $ext = $this->source->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_source = $ext;
            }
        }
        if (isset($this->sourceVersion)) {
            if (null !== ($val = $this->sourceVersion->getValue())) {
                $out->sourceVersion = $val;
            }
            $ext = $this->sourceVersion->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_sourceVersion = $ext;
            }
        }
        if (isset($this->target)) {
            if (null !== ($val = $this->target->getValue())) {
                $out->target = $val;
            }
            $ext = $this->target->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_target = $ext;
            }
        }
        if (isset($this->targetVersion)) {
            if (null !== ($val = $this->targetVersion->getValue())) {
                $out->targetVersion = $val;
            }
            $ext = $this->targetVersion->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_targetVersion = $ext;
            }
        }
        if (isset($this->element) && [] !== $this->element) {
            $out->element = $this->element;
        }
        if (isset($this->unmapped)) {
            $out->unmapped = $this->unmapped;
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