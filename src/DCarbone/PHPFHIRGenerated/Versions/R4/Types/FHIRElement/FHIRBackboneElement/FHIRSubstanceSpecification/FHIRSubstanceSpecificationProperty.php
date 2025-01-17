<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification;

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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * The detailed description of a substance, typically at a level beyond what is
 * used for prescribing.
 */
class FHIRSubstanceSpecificationProperty extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SUBSTANCE_SPECIFICATION_DOT_PROPERTY;


    public const FIELD_CATEGORY = 'category';
    public const FIELD_CODE = 'code';
    public const FIELD_PARAMETERS = 'parameters';
    public const FIELD_PARAMETERS_EXT = '_parameters';
    public const FIELD_DEFINING_SUBSTANCE_REFERENCE = 'definingSubstanceReference';
    public const FIELD_DEFINING_SUBSTANCE_CODEABLE_CONCEPT = 'definingSubstanceCodeableConcept';
    public const FIELD_AMOUNT_QUANTITY = 'amountQuantity';
    public const FIELD_AMOUNT_STRING = 'amountString';
    public const FIELD_AMOUNT_STRING_EXT = '_amountString';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A category for this property, e.g. Physical, Chemical, Enzymatic.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $category;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Property type e.g. viscosity, pH, isoelectric point.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $code;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Parameters that were used in the measurement of a property (e.g. for viscosity:
     * measured at 20C with a pH of 7.1).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $parameters;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A substance upon which a defining property depends (e.g. for solubility: in
     * water, in alcohol).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $definingSubstanceReference;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A substance upon which a defining property depends (e.g. for solubility: in
     * water, in alcohol).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $definingSubstanceCodeableConcept;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Quantitative value for this property.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $amountQuantity;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Quantitative value for this property.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $amountString;

    /** Default validation map for fields in type SubstanceSpecification.Property */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRSubstanceSpecificationProperty Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $category
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $code
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $parameters
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $definingSubstanceReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $definingSubstanceCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $amountQuantity
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $amountString
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $category = null,
                                null|FHIRCodeableConcept $code = null,
                                null|string|FHIRStringPrimitive|FHIRString $parameters = null,
                                null|FHIRReference $definingSubstanceReference = null,
                                null|FHIRCodeableConcept $definingSubstanceCodeableConcept = null,
                                null|FHIRQuantity $amountQuantity = null,
                                null|string|FHIRStringPrimitive|FHIRString $amountString = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $category) {
            $this->setCategory($category);
        }
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $parameters) {
            $this->setParameters($parameters);
        }
        if (null !== $definingSubstanceReference) {
            $this->setDefiningSubstanceReference($definingSubstanceReference);
        }
        if (null !== $definingSubstanceCodeableConcept) {
            $this->setDefiningSubstanceCodeableConcept($definingSubstanceCodeableConcept);
        }
        if (null !== $amountQuantity) {
            $this->setAmountQuantity($amountQuantity);
        }
        if (null !== $amountString) {
            $this->setAmountString($amountString);
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A category for this property, e.g. Physical, Chemical, Enzymatic.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory(): null|FHIRCodeableConcept
    {
        return $this->category ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A category for this property, e.g. Physical, Chemical, Enzymatic.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $category
     * @return static
     */
    public function setCategory(null|FHIRCodeableConcept $category): self
    {
        if (null === $category) {
            unset($this->category);
            return $this;
        }
        $this->category = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Property type e.g. viscosity, pH, isoelectric point.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getCode(): null|FHIRCodeableConcept
    {
        return $this->code ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Property type e.g. viscosity, pH, isoelectric point.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(null|FHIRCodeableConcept $code): self
    {
        if (null === $code) {
            unset($this->code);
            return $this;
        }
        $this->code = $code;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Parameters that were used in the measurement of a property (e.g. for viscosity:
     * measured at 20C with a pH of 7.1).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getParameters(): null|FHIRString
    {
        return $this->parameters ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Parameters that were used in the measurement of a property (e.g. for viscosity:
     * measured at 20C with a pH of 7.1).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $parameters
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setParameters(null|string|FHIRStringPrimitive|FHIRString $parameters,
                                  null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $parameters) {
            unset($this->parameters);
            return $this;
        }
        if (!($parameters instanceof FHIRString)) {
            $parameters = new FHIRString(value: $parameters);
        }
        if (null !== $valueXMLLocation) {
            $parameters->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $parameters->_getValueXMLLocation()) {
            $parameters->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->parameters = $parameters;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A substance upon which a defining property depends (e.g. for solubility: in
     * water, in alcohol).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getDefiningSubstanceReference(): null|FHIRReference
    {
        return $this->definingSubstanceReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A substance upon which a defining property depends (e.g. for solubility: in
     * water, in alcohol).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $definingSubstanceReference
     * @return static
     */
    public function setDefiningSubstanceReference(null|FHIRReference $definingSubstanceReference): self
    {
        if (null === $definingSubstanceReference) {
            unset($this->definingSubstanceReference);
            return $this;
        }
        $this->definingSubstanceReference = $definingSubstanceReference;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A substance upon which a defining property depends (e.g. for solubility: in
     * water, in alcohol).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getDefiningSubstanceCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->definingSubstanceCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A substance upon which a defining property depends (e.g. for solubility: in
     * water, in alcohol).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $definingSubstanceCodeableConcept
     * @return static
     */
    public function setDefiningSubstanceCodeableConcept(null|FHIRCodeableConcept $definingSubstanceCodeableConcept): self
    {
        if (null === $definingSubstanceCodeableConcept) {
            unset($this->definingSubstanceCodeableConcept);
            return $this;
        }
        $this->definingSubstanceCodeableConcept = $definingSubstanceCodeableConcept;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Quantitative value for this property.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity
     */
    public function getAmountQuantity(): null|FHIRQuantity
    {
        return $this->amountQuantity ?? null;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Quantitative value for this property.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $amountQuantity
     * @return static
     */
    public function setAmountQuantity(null|FHIRQuantity $amountQuantity): self
    {
        if (null === $amountQuantity) {
            unset($this->amountQuantity);
            return $this;
        }
        $this->amountQuantity = $amountQuantity;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Quantitative value for this property.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getAmountString(): null|FHIRString
    {
        return $this->amountString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Quantitative value for this property.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $amountString
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAmountString(null|string|FHIRStringPrimitive|FHIRString $amountString,
                                    null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $amountString) {
            unset($this->amountString);
            return $this;
        }
        if (!($amountString instanceof FHIRString)) {
            $amountString = new FHIRString(value: $amountString);
        }
        if (null !== $valueXMLLocation) {
            $amountString->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $amountString->_getValueXMLLocation()) {
            $amountString->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->amountString = $amountString;
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
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CATEGORY])) {
                        $errs[self::FIELD_CATEGORY] = [];
                    }
                    $errs[self::FIELD_CATEGORY][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_PARAMETERS])) {
            $v = $this->getParameters();
            foreach($validationRules[self::FIELD_PARAMETERS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PARAMETERS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARAMETERS])) {
                        $errs[self::FIELD_PARAMETERS] = [];
                    }
                    $errs[self::FIELD_PARAMETERS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINING_SUBSTANCE_REFERENCE])) {
            $v = $this->getDefiningSubstanceReference();
            foreach($validationRules[self::FIELD_DEFINING_SUBSTANCE_REFERENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFINING_SUBSTANCE_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINING_SUBSTANCE_REFERENCE])) {
                        $errs[self::FIELD_DEFINING_SUBSTANCE_REFERENCE] = [];
                    }
                    $errs[self::FIELD_DEFINING_SUBSTANCE_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINING_SUBSTANCE_CODEABLE_CONCEPT])) {
            $v = $this->getDefiningSubstanceCodeableConcept();
            foreach($validationRules[self::FIELD_DEFINING_SUBSTANCE_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEFINING_SUBSTANCE_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINING_SUBSTANCE_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_DEFINING_SUBSTANCE_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_DEFINING_SUBSTANCE_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AMOUNT_QUANTITY])) {
            $v = $this->getAmountQuantity();
            foreach($validationRules[self::FIELD_AMOUNT_QUANTITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AMOUNT_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT_QUANTITY])) {
                        $errs[self::FIELD_AMOUNT_QUANTITY] = [];
                    }
                    $errs[self::FIELD_AMOUNT_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AMOUNT_STRING])) {
            $v = $this->getAmountString();
            foreach($validationRules[self::FIELD_AMOUNT_STRING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AMOUNT_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT_STRING])) {
                        $errs[self::FIELD_AMOUNT_STRING] = [];
                    }
                    $errs[self::FIELD_AMOUNT_STRING][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationProperty $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationProperty
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubstanceSpecificationProperty)) {
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
            } else if (self::FIELD_CATEGORY === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setCategory(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CODE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PARAMETERS === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setParameters(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFINING_SUBSTANCE_REFERENCE === $childName) {
                $v = new FHIRReference();
                $type->setDefiningSubstanceReference(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEFINING_SUBSTANCE_CODEABLE_CONCEPT === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setDefiningSubstanceCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_AMOUNT_QUANTITY === $childName) {
                $v = new FHIRQuantity();
                $type->setAmountQuantity(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_AMOUNT_STRING === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setAmountString(FHIRString::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_PARAMETERS])) {
            $pt = $type->getParameters();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_PARAMETERS]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setParameters(new FHIRString(
                    value: (string)$attributes[self::FIELD_PARAMETERS],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_AMOUNT_STRING])) {
            $pt = $type->getAmountString();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_AMOUNT_STRING]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAmountString(new FHIRString(
                    value: (string)$attributes[self::FIELD_AMOUNT_STRING],
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
            $xw->openRootNode('SubstanceSpecificationProperty', $this->_getSourceXMLNS());
        }
        if (isset($this->parameters) && $this->parameters->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PARAMETERS, $this->parameters->getValue()?->_getFormattedValue());
        }
        if (isset($this->amountString) && $this->amountString->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_AMOUNT_STRING, $this->amountString->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->category)) {
            $xw->startElement(self::FIELD_CATEGORY);
            $this->category->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->code)) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->parameters) && $this->parameters->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PARAMETERS);
            $this->parameters->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->definingSubstanceReference)) {
            $xw->startElement(self::FIELD_DEFINING_SUBSTANCE_REFERENCE);
            $this->definingSubstanceReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->definingSubstanceCodeableConcept)) {
            $xw->startElement(self::FIELD_DEFINING_SUBSTANCE_CODEABLE_CONCEPT);
            $this->definingSubstanceCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->amountQuantity)) {
            $xw->startElement(self::FIELD_AMOUNT_QUANTITY);
            $this->amountQuantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->amountString) && $this->amountString->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_AMOUNT_STRING);
            $this->amountString->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationProperty $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationProperty
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubstanceSpecificationProperty)) {
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
        if (isset($json[self::FIELD_CATEGORY]) || array_key_exists(self::FIELD_CATEGORY, $json)) {
            if ($json[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $type->setCategory($json[self::FIELD_CATEGORY]);
            } else {
                $type->setCategory(new FHIRCodeableConcept($json[self::FIELD_CATEGORY]));
            }
        }
        if (isset($json[self::FIELD_CODE]) || array_key_exists(self::FIELD_CODE, $json)) {
            if ($json[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $type->setCode($json[self::FIELD_CODE]);
            } else {
                $type->setCode(new FHIRCodeableConcept($json[self::FIELD_CODE]));
            }
        }
        if (isset($json[self::FIELD_PARAMETERS]) || isset($json[self::FIELD_PARAMETERS_EXT]) || array_key_exists(self::FIELD_PARAMETERS, $json) || array_key_exists(self::FIELD_PARAMETERS_EXT, $json)) {
            $value = $json[self::FIELD_PARAMETERS] ?? null;
            $ext = (isset($json[self::FIELD_PARAMETERS_EXT]) && is_array($json[self::FIELD_PARAMETERS_EXT])) ? $json[self::FIELD_PARAMETERS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setParameters($value);
                } else if (is_array($value)) {
                    $type->setParameters(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setParameters(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setParameters(new FHIRString($ext));
            } else {
                $type->setParameters(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_DEFINING_SUBSTANCE_REFERENCE]) || array_key_exists(self::FIELD_DEFINING_SUBSTANCE_REFERENCE, $json)) {
            if ($json[self::FIELD_DEFINING_SUBSTANCE_REFERENCE] instanceof FHIRReference) {
                $type->setDefiningSubstanceReference($json[self::FIELD_DEFINING_SUBSTANCE_REFERENCE]);
            } else {
                $type->setDefiningSubstanceReference(new FHIRReference($json[self::FIELD_DEFINING_SUBSTANCE_REFERENCE]));
            }
        }
        if (isset($json[self::FIELD_DEFINING_SUBSTANCE_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_DEFINING_SUBSTANCE_CODEABLE_CONCEPT, $json)) {
            if ($json[self::FIELD_DEFINING_SUBSTANCE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $type->setDefiningSubstanceCodeableConcept($json[self::FIELD_DEFINING_SUBSTANCE_CODEABLE_CONCEPT]);
            } else {
                $type->setDefiningSubstanceCodeableConcept(new FHIRCodeableConcept($json[self::FIELD_DEFINING_SUBSTANCE_CODEABLE_CONCEPT]));
            }
        }
        if (isset($json[self::FIELD_AMOUNT_QUANTITY]) || array_key_exists(self::FIELD_AMOUNT_QUANTITY, $json)) {
            if ($json[self::FIELD_AMOUNT_QUANTITY] instanceof FHIRQuantity) {
                $type->setAmountQuantity($json[self::FIELD_AMOUNT_QUANTITY]);
            } else {
                $type->setAmountQuantity(new FHIRQuantity($json[self::FIELD_AMOUNT_QUANTITY]));
            }
        }
        if (isset($json[self::FIELD_AMOUNT_STRING]) || isset($json[self::FIELD_AMOUNT_STRING_EXT]) || array_key_exists(self::FIELD_AMOUNT_STRING, $json) || array_key_exists(self::FIELD_AMOUNT_STRING_EXT, $json)) {
            $value = $json[self::FIELD_AMOUNT_STRING] ?? null;
            $ext = (isset($json[self::FIELD_AMOUNT_STRING_EXT]) && is_array($json[self::FIELD_AMOUNT_STRING_EXT])) ? $json[self::FIELD_AMOUNT_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setAmountString($value);
                } else if (is_array($value)) {
                    $type->setAmountString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setAmountString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setAmountString(new FHIRString($ext));
            } else {
                $type->setAmountString(new FHIRString(null));
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
        if (isset($this->category)) {
            $out->category = $this->category;
        }
        if (isset($this->code)) {
            $out->code = $this->code;
        }
        if (isset($this->parameters)) {
            if (null !== ($val = $this->parameters->getValue())) {
                $out->parameters = $val;
            }
            $ext = $this->parameters->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_parameters = $ext;
            }
        }
        if (isset($this->definingSubstanceReference)) {
            $out->definingSubstanceReference = $this->definingSubstanceReference;
        }
        if (isset($this->definingSubstanceCodeableConcept)) {
            $out->definingSubstanceCodeableConcept = $this->definingSubstanceCodeableConcept;
        }
        if (isset($this->amountQuantity)) {
            $out->amountQuantity = $this->amountQuantity;
        }
        if (isset($this->amountString)) {
            if (null !== ($val = $this->amountString->getValue())) {
                $out->amountString = $val;
            }
            $ext = $this->amountString->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_amountString = $ext;
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