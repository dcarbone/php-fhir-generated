<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap;

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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConceptMapEquivalence;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;

/**
 * A statement of relationships from one set of concepts to one or more other
 * concept systems.
 */
class FHIRConceptMapMap extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CONCEPT_MAP_DOT_MAP;


    public const FIELD_SYSTEM = 'system';
    public const FIELD_SYSTEM_EXT = '_system';
    public const FIELD_CODE = 'code';
    public const FIELD_CODE_EXT = '_code';
    public const FIELD_EQUIVALENCE = 'equivalence';
    public const FIELD_EQUIVALENCE_EXT = '_equivalence';
    public const FIELD_COMMENTS = 'comments';
    public const FIELD_COMMENTS_EXT = '_comments';
    public const FIELD_PRODUCT = 'product';

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * System of the target.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $system;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Code that identifies the target concept.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode 
     */
    protected FHIRCode $code;
    /**
     * The degree of equivalence between concepts
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * equal | equivalent | wider | subsumes | narrower | specialises | inexact |
     * unmatched | disjoint.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConceptMapEquivalence 
     */
    protected FHIRConceptMapEquivalence $equivalence;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Description of status/issues in mapping.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $comments;
    /**
     * A statement of relationships from one set of concepts to one or more other
     * concept systems.
     *
     * A set of additional outcomes from this mapping to other value sets. To properly
     * execute this mapping, the specified value set must be mapped to some data
     * element or source that is in context. The mapping may still be useful without a
     * place for the additional data elements, but the equivalence cannot be relied on.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn[] 
     */
    protected array $product;

    /** Default validation map for fields in type ConceptMap.Map */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_ID => [
            Constants::VALIDATE_PATTERN => '/^[a-z0-9\\-\\.]{1,36}$/',
        ],
        self::FIELD_EQUIVALENCE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRConceptMapMap Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri $system
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $code
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConceptMapEquivalence $equivalence
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $comments
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn[] $product
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRUriPrimitive|FHIRUri $system = null,
                                null|string|FHIRCodePrimitive|FHIRCode $code = null,
                                null|FHIRConceptMapEquivalence $equivalence = null,
                                null|string|FHIRStringPrimitive|FHIRString $comments = null,
                                null|iterable $product = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $system) {
            $this->setSystem($system);
        }
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $equivalence) {
            $this->setEquivalence($equivalence);
        }
        if (null !== $comments) {
            $this->setComments($comments);
        }
        if (null !== $product) {
            $this->setProduct(...$product);
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * System of the target.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri
     */
    public function getSystem(): null|FHIRUri
    {
        return $this->system ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * System of the target.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri $system
     * @return static
     */
    public function setSystem(null|string|FHIRUriPrimitive|FHIRUri $system): self
    {
        if (null === $system) {
            unset($this->system);
            return $this;
        }
        if (!($system instanceof FHIRUri)) {
            $system = new FHIRUri(value: $system);
        }
        $this->system = $system;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Code that identifies the target concept.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode
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
     * Code that identifies the target concept.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $code
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
     * The degree of equivalence between concepts
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * equal | equivalent | wider | subsumes | narrower | specialises | inexact |
     * unmatched | disjoint.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConceptMapEquivalence
     */
    public function getEquivalence(): null|FHIRConceptMapEquivalence
    {
        return $this->equivalence ?? null;
    }

    /**
     * The degree of equivalence between concepts
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * equal | equivalent | wider | subsumes | narrower | specialises | inexact |
     * unmatched | disjoint.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConceptMapEquivalence $equivalence
     * @return static
     */
    public function setEquivalence(null|FHIRConceptMapEquivalence $equivalence): self
    {
        if (null === $equivalence) {
            unset($this->equivalence);
            return $this;
        }
        $this->equivalence = $equivalence;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Description of status/issues in mapping.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getComments(): null|FHIRString
    {
        return $this->comments ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Description of status/issues in mapping.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $comments
     * @return static
     */
    public function setComments(null|string|FHIRStringPrimitive|FHIRString $comments): self
    {
        if (null === $comments) {
            unset($this->comments);
            return $this;
        }
        if (!($comments instanceof FHIRString)) {
            $comments = new FHIRString(value: $comments);
        }
        $this->comments = $comments;
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concept systems.
     *
     * A set of additional outcomes from this mapping to other value sets. To properly
     * execute this mapping, the specified value set must be mapped to some data
     * element or source that is in context. The mapping may still be useful without a
     * place for the additional data elements, but the equivalence cannot be relied on.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn[]
     */
    public function getProduct(): array
    {
        return $this->product ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn>
     */
    public function getProductIterator(): iterable
    {
        if (!isset($this->product) || [] === $this->product) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->product);
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concept systems.
     *
     * A set of additional outcomes from this mapping to other value sets. To properly
     * execute this mapping, the specified value set must be mapped to some data
     * element or source that is in context. The mapping may still be useful without a
     * place for the additional data elements, but the equivalence cannot be relied on.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn $product
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
     * concept systems.
     *
     * A set of additional outcomes from this mapping to other value sets. To properly
     * execute this mapping, the specified value set must be mapped to some data
     * element or source that is in context. The mapping may still be useful without a
     * place for the additional data elements, but the equivalence cannot be relied on.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn ...$product
     * @return static
     */
    public function setProduct(FHIRConceptMapDependsOn ...$product): self
    {
        $this->product = $product;
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
        if (null !== ($v = $this->getEquivalence())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EQUIVALENCE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_SYSTEM])) {
            $v = $this->getSystem();
            foreach($validationRules[self::FIELD_SYSTEM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SYSTEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SYSTEM])) {
                        $errs[self::FIELD_SYSTEM] = [];
                    }
                    $errs[self::FIELD_SYSTEM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EQUIVALENCE])) {
            $v = $this->getEquivalence();
            foreach($validationRules[self::FIELD_EQUIVALENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EQUIVALENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EQUIVALENCE])) {
                        $errs[self::FIELD_EQUIVALENCE] = [];
                    }
                    $errs[self::FIELD_EQUIVALENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMMENTS])) {
            $v = $this->getComments();
            foreach($validationRules[self::FIELD_COMMENTS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COMMENTS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMMENTS])) {
                        $errs[self::FIELD_COMMENTS] = [];
                    }
                    $errs[self::FIELD_COMMENTS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRODUCT])) {
            $v = $this->getProduct();
            foreach($validationRules[self::FIELD_PRODUCT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRODUCT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCT])) {
                        $errs[self::FIELD_PRODUCT] = [];
                    }
                    $errs[self::FIELD_PRODUCT][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapMap $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapMap
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRConceptMapMap)) {
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
                $v = new FHIRIdPrimitive(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SYSTEM === $childName) {
                $v = new FHIRUri(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setSystem(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CODE === $childName) {
                $v = new FHIRCode(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setCode(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EQUIVALENCE === $childName) {
                $v = new FHIRConceptMapEquivalence(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setEquivalence(FHIRConceptMapEquivalence::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COMMENTS === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setComments(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PRODUCT === $childName) {
                $v = new FHIRConceptMapDependsOn();
                $type->addProduct(FHIRConceptMapDependsOn::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRIdPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SYSTEM])) {
            $pt = $type->getSystem();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SYSTEM]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSystem(new FHIRUri(
                    value: (string)$attributes[self::FIELD_SYSTEM],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CODE])) {
            $pt = $type->getCode();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CODE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCode(new FHIRCode(
                    value: (string)$attributes[self::FIELD_CODE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_COMMENTS])) {
            $pt = $type->getComments();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_COMMENTS]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setComments(new FHIRString(
                    value: (string)$attributes[self::FIELD_COMMENTS],
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
            $xw->openRootNode('ConceptMapMap', $this->_getSourceXMLNS());
        }
        if (isset($this->system) && $this->system->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SYSTEM, $this->system->getValue()?->getFormattedValue());
        }
        if (isset($this->code) && $this->code->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CODE, $this->code->getValue()?->getFormattedValue());
        }
        if (isset($this->comments) && $this->comments->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_COMMENTS, $this->comments->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->system) && $this->system->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SYSTEM);
            $this->system->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->code) && $this->code->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->equivalence)) {
            $xw->startElement(self::FIELD_EQUIVALENCE);
            $this->equivalence->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->comments) && $this->comments->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_COMMENTS);
            $this->comments->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->product)) {
            foreach ($this->product as $v) {
                $xw->startElement(self::FIELD_PRODUCT);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapMap $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapMap
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRConceptMapMap)) {
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
        if (isset($json[self::FIELD_SYSTEM]) || isset($json[self::FIELD_SYSTEM_EXT]) || array_key_exists(self::FIELD_SYSTEM, $json) || array_key_exists(self::FIELD_SYSTEM_EXT, $json)) {
            $value = $json[self::FIELD_SYSTEM] ?? null;
            $ext = (isset($json[self::FIELD_SYSTEM_EXT]) && is_array($json[self::FIELD_SYSTEM_EXT])) ? $json[self::FIELD_SYSTEM_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $type->setSystem($value);
                } else if (is_array($value)) {
                    $type->setSystem(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $type->setSystem(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSystem(new FHIRUri($ext));
            } else {
                $type->setSystem(new FHIRUri(null));
            }
        }
        if (isset($json[self::FIELD_CODE]) || isset($json[self::FIELD_CODE_EXT]) || array_key_exists(self::FIELD_CODE, $json) || array_key_exists(self::FIELD_CODE_EXT, $json)) {
            $value = $json[self::FIELD_CODE] ?? null;
            $ext = (isset($json[self::FIELD_CODE_EXT]) && is_array($json[self::FIELD_CODE_EXT])) ? $json[self::FIELD_CODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $type->setCode($value);
                } else if (is_array($value)) {
                    $type->setCode(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $type->setCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setCode(new FHIRCode($ext));
            } else {
                $type->setCode(new FHIRCode(null));
            }
        }
        if (isset($json[self::FIELD_EQUIVALENCE]) || isset($json[self::FIELD_EQUIVALENCE_EXT]) || array_key_exists(self::FIELD_EQUIVALENCE, $json) || array_key_exists(self::FIELD_EQUIVALENCE_EXT, $json)) {
            $value = $json[self::FIELD_EQUIVALENCE] ?? null;
            $ext = (isset($json[self::FIELD_EQUIVALENCE_EXT]) && is_array($json[self::FIELD_EQUIVALENCE_EXT])) ? $json[self::FIELD_EQUIVALENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRConceptMapEquivalence) {
                    $type->setEquivalence($value);
                } else if (is_array($value)) {
                    $type->setEquivalence(new FHIRConceptMapEquivalence(array_merge($ext, $value)));
                } else {
                    $type->setEquivalence(new FHIRConceptMapEquivalence([FHIRConceptMapEquivalence::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setEquivalence(new FHIRConceptMapEquivalence($ext));
            } else {
                $type->setEquivalence(new FHIRConceptMapEquivalence(null));
            }
        }
        if (isset($json[self::FIELD_COMMENTS]) || isset($json[self::FIELD_COMMENTS_EXT]) || array_key_exists(self::FIELD_COMMENTS, $json) || array_key_exists(self::FIELD_COMMENTS_EXT, $json)) {
            $value = $json[self::FIELD_COMMENTS] ?? null;
            $ext = (isset($json[self::FIELD_COMMENTS_EXT]) && is_array($json[self::FIELD_COMMENTS_EXT])) ? $json[self::FIELD_COMMENTS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setComments($value);
                } else if (is_array($value)) {
                    $type->setComments(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setComments(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setComments(new FHIRString($ext));
            } else {
                $type->setComments(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_PRODUCT]) || array_key_exists(self::FIELD_PRODUCT, $json)) {
            if (is_array($json[self::FIELD_PRODUCT])) {
                foreach($json[self::FIELD_PRODUCT] as $v) {
                    if ($v instanceof FHIRConceptMapDependsOn) {
                        $type->addProduct($v);
                    } else {
                        $type->addProduct(new FHIRConceptMapDependsOn($v));
                    }
                }
            } elseif ($json[self::FIELD_PRODUCT] instanceof FHIRConceptMapDependsOn) {
                $type->addProduct($json[self::FIELD_PRODUCT]);
            } else {
                $type->addProduct(new FHIRConceptMapDependsOn($json[self::FIELD_PRODUCT]));
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
        if (isset($this->system)) {
            if (null !== ($val = $this->system->getValue())) {
                $out->system = $val;
            }
            $ext = $this->system->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_system = $ext;
            }
        }
        if (isset($this->code)) {
            if (null !== ($val = $this->code->getValue())) {
                $out->code = $val;
            }
            $ext = $this->code->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_code = $ext;
            }
        }
        if (isset($this->equivalence)) {
            if (null !== ($val = $this->equivalence->getValue())) {
                $out->equivalence = $val;
            }
            $ext = $this->equivalence->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_equivalence = $ext;
            }
        }
        if (isset($this->comments)) {
            if (null !== ($val = $this->comments->getValue())) {
                $out->comments = $val;
            }
            $ext = $this->comments->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_comments = $ext;
            }
        }
        if (isset($this->product) && [] !== $this->product) {
            $out->product = $this->product;
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