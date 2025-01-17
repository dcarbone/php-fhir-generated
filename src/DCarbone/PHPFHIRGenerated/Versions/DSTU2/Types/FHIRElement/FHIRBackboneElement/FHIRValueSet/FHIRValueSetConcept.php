<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet;

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
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;

/**
 * A value set specifies a set of codes drawn from one or more code systems.
 */
class FHIRValueSetConcept extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_VALUE_SET_DOT_CONCEPT;


    public const FIELD_CODE = 'code';
    public const FIELD_CODE_EXT = '_code';
    public const FIELD_ABSTRACT = 'abstract';
    public const FIELD_ABSTRACT_EXT = '_abstract';
    public const FIELD_DISPLAY = 'display';
    public const FIELD_DISPLAY_EXT = '_display';
    public const FIELD_DEFINITION = 'definition';
    public const FIELD_DEFINITION_EXT = '_definition';
    public const FIELD_DESIGNATION = 'designation';
    public const FIELD_CONCEPT = 'concept';

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A code - a text symbol - that uniquely identifies the concept within the code
     * system.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode 
     */
    protected FHIRCode $code;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If this code is not for use as a real concept.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $abstract;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A human readable string that is the recommended default way to present this
     * concept to a user.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $display;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The formal definition of the concept. The value set resource does not make
     * formal definitions required, because of the prevalence of legacy systems.
     * However, they are highly recommended, as without them there is no formal meaning
     * associated with the concept.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $definition;
    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Additional representations for the concept - other languages, aliases,
     * specialized purposes, used for particular purposes, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDesignation[] 
     */
    protected array $designation;
    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Defines children of a concept to produce a hierarchy of concepts. The nature of
     * the relationships is variable (is-a/contains/categorizes) and can only be
     * determined by examining the definitions of the concepts.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept[] 
     */
    protected array $concept;

    /** Default validation map for fields in type ValueSet.Concept */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_ID => [
            Constants::VALIDATE_PATTERN => '/^[A-Za-z0-9\\-\\.]{1,64}$/',
        ],
        self::FIELD_CODE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRValueSetConcept Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode $code
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBoolean $abstract
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $display
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $definition
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDesignation[] $designation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept[] $concept
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRCodePrimitive|FHIRCode $code = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $abstract = null,
                                null|string|FHIRStringPrimitive|FHIRString $display = null,
                                null|string|FHIRStringPrimitive|FHIRString $definition = null,
                                null|iterable $designation = null,
                                null|iterable $concept = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $abstract) {
            $this->setAbstract($abstract);
        }
        if (null !== $display) {
            $this->setDisplay($display);
        }
        if (null !== $definition) {
            $this->setDefinition($definition);
        }
        if (null !== $designation) {
            $this->setDesignation(...$designation);
        }
        if (null !== $concept) {
            $this->setConcept(...$concept);
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
     * A code - a text symbol - that uniquely identifies the concept within the code
     * system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode
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
     * A code - a text symbol - that uniquely identifies the concept within the code
     * system.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode $code
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCode(null|string|FHIRCodePrimitive|FHIRCode $code,
                            null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $code) {
            unset($this->code);
            return $this;
        }
        if (!($code instanceof FHIRCode)) {
            $code = new FHIRCode(value: $code);
        }
        if (null !== $valueXMLLocation) {
            $code->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $code->_getValueXMLLocation()) {
            $code->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->code = $code;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If this code is not for use as a real concept.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBoolean
     */
    public function getAbstract(): null|FHIRBoolean
    {
        return $this->abstract ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If this code is not for use as a real concept.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBoolean $abstract
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAbstract(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $abstract,
                                null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $abstract) {
            unset($this->abstract);
            return $this;
        }
        if (!($abstract instanceof FHIRBoolean)) {
            $abstract = new FHIRBoolean(value: $abstract);
        }
        if (null !== $valueXMLLocation) {
            $abstract->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $abstract->_getValueXMLLocation()) {
            $abstract->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->abstract = $abstract;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A human readable string that is the recommended default way to present this
     * concept to a user.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getDisplay(): null|FHIRString
    {
        return $this->display ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A human readable string that is the recommended default way to present this
     * concept to a user.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $display
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDisplay(null|string|FHIRStringPrimitive|FHIRString $display,
                               null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $display) {
            unset($this->display);
            return $this;
        }
        if (!($display instanceof FHIRString)) {
            $display = new FHIRString(value: $display);
        }
        if (null !== $valueXMLLocation) {
            $display->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $display->_getValueXMLLocation()) {
            $display->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->display = $display;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The formal definition of the concept. The value set resource does not make
     * formal definitions required, because of the prevalence of legacy systems.
     * However, they are highly recommended, as without them there is no formal meaning
     * associated with the concept.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getDefinition(): null|FHIRString
    {
        return $this->definition ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The formal definition of the concept. The value set resource does not make
     * formal definitions required, because of the prevalence of legacy systems.
     * However, they are highly recommended, as without them there is no formal meaning
     * associated with the concept.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $definition
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDefinition(null|string|FHIRStringPrimitive|FHIRString $definition,
                                  null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $definition) {
            unset($this->definition);
            return $this;
        }
        if (!($definition instanceof FHIRString)) {
            $definition = new FHIRString(value: $definition);
        }
        if (null !== $valueXMLLocation) {
            $definition->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $definition->_getValueXMLLocation()) {
            $definition->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->definition = $definition;
        return $this;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Additional representations for the concept - other languages, aliases,
     * specialized purposes, used for particular purposes, etc.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDesignation[]
     */
    public function getDesignation(): array
    {
        return $this->designation ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDesignation>
     */
    public function getDesignationIterator(): iterable
    {
        if (!isset($this->designation) || [] === $this->designation) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->designation);
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Additional representations for the concept - other languages, aliases,
     * specialized purposes, used for particular purposes, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDesignation $designation
     * @return static
     */
    public function addDesignation(FHIRValueSetDesignation $designation): self
    {
        if (!isset($this->designation)) {
            $this->designation = [];
        }
        $this->designation[] = $designation;
        return $this;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Additional representations for the concept - other languages, aliases,
     * specialized purposes, used for particular purposes, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDesignation ...$designation
     * @return static
     */
    public function setDesignation(FHIRValueSetDesignation ...$designation): self
    {
        $this->designation = $designation;
        return $this;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Defines children of a concept to produce a hierarchy of concepts. The nature of
     * the relationships is variable (is-a/contains/categorizes) and can only be
     * determined by examining the definitions of the concepts.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept[]
     */
    public function getConcept(): array
    {
        return $this->concept ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept>
     */
    public function getConceptIterator(): iterable
    {
        if (!isset($this->concept) || [] === $this->concept) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->concept);
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Defines children of a concept to produce a hierarchy of concepts. The nature of
     * the relationships is variable (is-a/contains/categorizes) and can only be
     * determined by examining the definitions of the concepts.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept $concept
     * @return static
     */
    public function addConcept(FHIRValueSetConcept $concept): self
    {
        if (!isset($this->concept)) {
            $this->concept = [];
        }
        $this->concept[] = $concept;
        return $this;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Defines children of a concept to produce a hierarchy of concepts. The nature of
     * the relationships is variable (is-a/contains/categorizes) and can only be
     * determined by examining the definitions of the concepts.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept ...$concept
     * @return static
     */
    public function setConcept(FHIRValueSetConcept ...$concept): self
    {
        $this->concept = $concept;
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
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_ABSTRACT])) {
            $v = $this->getAbstract();
            foreach($validationRules[self::FIELD_ABSTRACT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ABSTRACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ABSTRACT])) {
                        $errs[self::FIELD_ABSTRACT] = [];
                    }
                    $errs[self::FIELD_ABSTRACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISPLAY])) {
            $v = $this->getDisplay();
            foreach($validationRules[self::FIELD_DISPLAY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DISPLAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISPLAY])) {
                        $errs[self::FIELD_DISPLAY] = [];
                    }
                    $errs[self::FIELD_DISPLAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION])) {
            $v = $this->getDefinition();
            foreach($validationRules[self::FIELD_DEFINITION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION])) {
                        $errs[self::FIELD_DEFINITION] = [];
                    }
                    $errs[self::FIELD_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESIGNATION])) {
            $v = $this->getDesignation();
            foreach($validationRules[self::FIELD_DESIGNATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DESIGNATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESIGNATION])) {
                        $errs[self::FIELD_DESIGNATION] = [];
                    }
                    $errs[self::FIELD_DESIGNATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONCEPT])) {
            $v = $this->getConcept();
            foreach($validationRules[self::FIELD_CONCEPT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONCEPT])) {
                        $errs[self::FIELD_CONCEPT] = [];
                    }
                    $errs[self::FIELD_CONCEPT][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRValueSetConcept)) {
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
                $valueAttr = $n->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
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
            } else if (self::FIELD_CODE === $childName) {
                $v = new FHIRCode(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setCode(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ABSTRACT === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setAbstract(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DISPLAY === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDisplay(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFINITION === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDefinition(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DESIGNATION === $childName) {
                $v = new FHIRValueSetDesignation();
                $type->addDesignation(FHIRValueSetDesignation::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONCEPT === $childName) {
                $v = new FHIRValueSetConcept();
                $type->addConcept(FHIRValueSetConcept::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRIdPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CODE])) {
            $pt = $type->getCode();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_CODE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCode(new FHIRCode(
                    value: (string)$attributes[self::FIELD_CODE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ABSTRACT])) {
            $pt = $type->getAbstract();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ABSTRACT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAbstract(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_ABSTRACT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DISPLAY])) {
            $pt = $type->getDisplay();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DISPLAY]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDisplay(new FHIRString(
                    value: (string)$attributes[self::FIELD_DISPLAY],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DEFINITION])) {
            $pt = $type->getDefinition();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DEFINITION]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefinition(new FHIRString(
                    value: (string)$attributes[self::FIELD_DEFINITION],
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
            $xw->openRootNode('ValueSetConcept', $this->_getSourceXMLNS());
        }
        if (isset($this->code) && $this->code->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CODE, $this->code->getValue()?->_getFormattedValue());
        }
        if (isset($this->abstract) && $this->abstract->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ABSTRACT, $this->abstract->getValue()?->_getFormattedValue());
        }
        if (isset($this->display) && $this->display->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DISPLAY, $this->display->getValue()?->_getFormattedValue());
        }
        if (isset($this->definition) && $this->definition->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DEFINITION, $this->definition->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->code) && $this->code->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->abstract) && $this->abstract->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ABSTRACT);
            $this->abstract->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->display) && $this->display->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DISPLAY);
            $this->display->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->definition) && $this->definition->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DEFINITION);
            $this->definition->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->designation)) {
            foreach ($this->designation as $v) {
                $xw->startElement(self::FIELD_DESIGNATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->concept)) {
            foreach ($this->concept as $v) {
                $xw->startElement(self::FIELD_CONCEPT);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRValueSetConcept)) {
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
        if (isset($json[self::FIELD_ABSTRACT]) || isset($json[self::FIELD_ABSTRACT_EXT]) || array_key_exists(self::FIELD_ABSTRACT, $json) || array_key_exists(self::FIELD_ABSTRACT_EXT, $json)) {
            $value = $json[self::FIELD_ABSTRACT] ?? null;
            $ext = (isset($json[self::FIELD_ABSTRACT_EXT]) && is_array($json[self::FIELD_ABSTRACT_EXT])) ? $json[self::FIELD_ABSTRACT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $type->setAbstract($value);
                } else if (is_array($value)) {
                    $type->setAbstract(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $type->setAbstract(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setAbstract(new FHIRBoolean($ext));
            } else {
                $type->setAbstract(new FHIRBoolean(null));
            }
        }
        if (isset($json[self::FIELD_DISPLAY]) || isset($json[self::FIELD_DISPLAY_EXT]) || array_key_exists(self::FIELD_DISPLAY, $json) || array_key_exists(self::FIELD_DISPLAY_EXT, $json)) {
            $value = $json[self::FIELD_DISPLAY] ?? null;
            $ext = (isset($json[self::FIELD_DISPLAY_EXT]) && is_array($json[self::FIELD_DISPLAY_EXT])) ? $json[self::FIELD_DISPLAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setDisplay($value);
                } else if (is_array($value)) {
                    $type->setDisplay(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setDisplay(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDisplay(new FHIRString($ext));
            } else {
                $type->setDisplay(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_DEFINITION]) || isset($json[self::FIELD_DEFINITION_EXT]) || array_key_exists(self::FIELD_DEFINITION, $json) || array_key_exists(self::FIELD_DEFINITION_EXT, $json)) {
            $value = $json[self::FIELD_DEFINITION] ?? null;
            $ext = (isset($json[self::FIELD_DEFINITION_EXT]) && is_array($json[self::FIELD_DEFINITION_EXT])) ? $json[self::FIELD_DEFINITION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setDefinition($value);
                } else if (is_array($value)) {
                    $type->setDefinition(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setDefinition(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDefinition(new FHIRString($ext));
            } else {
                $type->setDefinition(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_DESIGNATION]) || array_key_exists(self::FIELD_DESIGNATION, $json)) {
            if (is_array($json[self::FIELD_DESIGNATION])) {
                foreach($json[self::FIELD_DESIGNATION] as $v) {
                    if ($v instanceof FHIRValueSetDesignation) {
                        $type->addDesignation($v);
                    } else {
                        $type->addDesignation(new FHIRValueSetDesignation($v));
                    }
                }
            } elseif ($json[self::FIELD_DESIGNATION] instanceof FHIRValueSetDesignation) {
                $type->addDesignation($json[self::FIELD_DESIGNATION]);
            } else {
                $type->addDesignation(new FHIRValueSetDesignation($json[self::FIELD_DESIGNATION]));
            }
        }
        if (isset($json[self::FIELD_CONCEPT]) || array_key_exists(self::FIELD_CONCEPT, $json)) {
            if (is_array($json[self::FIELD_CONCEPT])) {
                foreach($json[self::FIELD_CONCEPT] as $v) {
                    if ($v instanceof FHIRValueSetConcept) {
                        $type->addConcept($v);
                    } else {
                        $type->addConcept(new FHIRValueSetConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_CONCEPT] instanceof FHIRValueSetConcept) {
                $type->addConcept($json[self::FIELD_CONCEPT]);
            } else {
                $type->addConcept(new FHIRValueSetConcept($json[self::FIELD_CONCEPT]));
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
            $ext = $this->code->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_code = $ext;
            }
        }
        if (isset($this->abstract)) {
            if (null !== ($val = $this->abstract->getValue())) {
                $out->abstract = $val;
            }
            $ext = $this->abstract->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_abstract = $ext;
            }
        }
        if (isset($this->display)) {
            if (null !== ($val = $this->display->getValue())) {
                $out->display = $val;
            }
            $ext = $this->display->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_display = $ext;
            }
        }
        if (isset($this->definition)) {
            if (null !== ($val = $this->definition->getValue())) {
                $out->definition = $val;
            }
            $ext = $this->definition->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_definition = $ext;
            }
        }
        if (isset($this->designation) && [] !== $this->designation) {
            $out->designation = $this->designation;
        }
        if (isset($this->concept) && [] !== $this->concept) {
            $out->concept = $this->concept;
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