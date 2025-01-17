<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer;

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
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * Todo.
 */
class FHIRSubstancePolymerRepeat extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT;


    public const FIELD_NUMBER_OF_UNITS = 'numberOfUnits';
    public const FIELD_NUMBER_OF_UNITS_EXT = '_numberOfUnits';
    public const FIELD_AVERAGE_MOLECULAR_FORMULA = 'averageMolecularFormula';
    public const FIELD_AVERAGE_MOLECULAR_FORMULA_EXT = '_averageMolecularFormula';
    public const FIELD_REPEAT_UNIT_AMOUNT_TYPE = 'repeatUnitAmountType';
    public const FIELD_REPEAT_UNIT = 'repeatUnit';

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $numberOfUnits;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $averageMolecularFormula;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $repeatUnitAmountType;
    /**
     * Todo.
     *
     * Todo.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit[] 
     */
    protected array $repeatUnit;

    /** Default validation map for fields in type SubstancePolymer.Repeat */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRSubstancePolymerRepeat Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger $numberOfUnits
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $averageMolecularFormula
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $repeatUnitAmountType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit[] $repeatUnit
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $numberOfUnits = null,
                                null|string|FHIRStringPrimitive|FHIRString $averageMolecularFormula = null,
                                null|FHIRCodeableConcept $repeatUnitAmountType = null,
                                null|iterable $repeatUnit = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $numberOfUnits) {
            $this->setNumberOfUnits($numberOfUnits);
        }
        if (null !== $averageMolecularFormula) {
            $this->setAverageMolecularFormula($averageMolecularFormula);
        }
        if (null !== $repeatUnitAmountType) {
            $this->setRepeatUnitAmountType($repeatUnitAmountType);
        }
        if (null !== $repeatUnit) {
            $this->setRepeatUnit(...$repeatUnit);
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
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger
     */
    public function getNumberOfUnits(): null|FHIRInteger
    {
        return $this->numberOfUnits ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger $numberOfUnits
     * @return static
     */
    public function setNumberOfUnits(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $numberOfUnits): self
    {
        if (null === $numberOfUnits) {
            unset($this->numberOfUnits);
            return $this;
        }
        if (!($numberOfUnits instanceof FHIRInteger)) {
            $numberOfUnits = new FHIRInteger(value: $numberOfUnits);
        }
        $this->numberOfUnits = $numberOfUnits;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getAverageMolecularFormula(): null|FHIRString
    {
        return $this->averageMolecularFormula ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $averageMolecularFormula
     * @return static
     */
    public function setAverageMolecularFormula(null|string|FHIRStringPrimitive|FHIRString $averageMolecularFormula): self
    {
        if (null === $averageMolecularFormula) {
            unset($this->averageMolecularFormula);
            return $this;
        }
        if (!($averageMolecularFormula instanceof FHIRString)) {
            $averageMolecularFormula = new FHIRString(value: $averageMolecularFormula);
        }
        $this->averageMolecularFormula = $averageMolecularFormula;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getRepeatUnitAmountType(): null|FHIRCodeableConcept
    {
        return $this->repeatUnitAmountType ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $repeatUnitAmountType
     * @return static
     */
    public function setRepeatUnitAmountType(null|FHIRCodeableConcept $repeatUnitAmountType): self
    {
        if (null === $repeatUnitAmountType) {
            unset($this->repeatUnitAmountType);
            return $this;
        }
        $this->repeatUnitAmountType = $repeatUnitAmountType;
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit[]
     */
    public function getRepeatUnit(): array
    {
        return $this->repeatUnit ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit>
     */
    public function getRepeatUnitIterator(): iterable
    {
        if (!isset($this->repeatUnit) || [] === $this->repeatUnit) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->repeatUnit);
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit $repeatUnit
     * @return static
     */
    public function addRepeatUnit(FHIRSubstancePolymerRepeatUnit $repeatUnit): self
    {
        if (!isset($this->repeatUnit)) {
            $this->repeatUnit = [];
        }
        $this->repeatUnit[] = $repeatUnit;
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit ...$repeatUnit
     * @return static
     */
    public function setRepeatUnit(FHIRSubstancePolymerRepeatUnit ...$repeatUnit): self
    {
        $this->repeatUnit = $repeatUnit;
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
        if (isset($validationRules[self::FIELD_NUMBER_OF_UNITS])) {
            $v = $this->getNumberOfUnits();
            foreach($validationRules[self::FIELD_NUMBER_OF_UNITS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NUMBER_OF_UNITS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUMBER_OF_UNITS])) {
                        $errs[self::FIELD_NUMBER_OF_UNITS] = [];
                    }
                    $errs[self::FIELD_NUMBER_OF_UNITS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AVERAGE_MOLECULAR_FORMULA])) {
            $v = $this->getAverageMolecularFormula();
            foreach($validationRules[self::FIELD_AVERAGE_MOLECULAR_FORMULA] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AVERAGE_MOLECULAR_FORMULA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AVERAGE_MOLECULAR_FORMULA])) {
                        $errs[self::FIELD_AVERAGE_MOLECULAR_FORMULA] = [];
                    }
                    $errs[self::FIELD_AVERAGE_MOLECULAR_FORMULA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE])) {
            $v = $this->getRepeatUnitAmountType();
            foreach($validationRules[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REPEAT_UNIT_AMOUNT_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE])) {
                        $errs[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE] = [];
                    }
                    $errs[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPEAT_UNIT])) {
            $v = $this->getRepeatUnit();
            foreach($validationRules[self::FIELD_REPEAT_UNIT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REPEAT_UNIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPEAT_UNIT])) {
                        $errs[self::FIELD_REPEAT_UNIT] = [];
                    }
                    $errs[self::FIELD_REPEAT_UNIT][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubstancePolymerRepeat)) {
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
            } else if (self::FIELD_NUMBER_OF_UNITS === $childName) {
                $v = new FHIRInteger(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setNumberOfUnits(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_AVERAGE_MOLECULAR_FORMULA === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setAverageMolecularFormula(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REPEAT_UNIT_AMOUNT_TYPE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setRepeatUnitAmountType(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REPEAT_UNIT === $childName) {
                $v = new FHIRSubstancePolymerRepeatUnit();
                $type->addRepeatUnit(FHIRSubstancePolymerRepeatUnit::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_NUMBER_OF_UNITS])) {
            $pt = $type->getNumberOfUnits();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_NUMBER_OF_UNITS]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setNumberOfUnits(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_NUMBER_OF_UNITS],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_AVERAGE_MOLECULAR_FORMULA])) {
            $pt = $type->getAverageMolecularFormula();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_AVERAGE_MOLECULAR_FORMULA]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAverageMolecularFormula(new FHIRString(
                    value: (string)$attributes[self::FIELD_AVERAGE_MOLECULAR_FORMULA],
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
            $xw->openRootNode('SubstancePolymerRepeat', $this->_getSourceXMLNS());
        }
        if (isset($this->numberOfUnits) && $this->numberOfUnits->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_NUMBER_OF_UNITS, $this->numberOfUnits->getValue()?->getFormattedValue());
        }
        if (isset($this->averageMolecularFormula) && $this->averageMolecularFormula->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_AVERAGE_MOLECULAR_FORMULA, $this->averageMolecularFormula->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->numberOfUnits) && $this->numberOfUnits->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_NUMBER_OF_UNITS);
            $this->numberOfUnits->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->averageMolecularFormula) && $this->averageMolecularFormula->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_AVERAGE_MOLECULAR_FORMULA);
            $this->averageMolecularFormula->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->repeatUnitAmountType)) {
            $xw->startElement(self::FIELD_REPEAT_UNIT_AMOUNT_TYPE);
            $this->repeatUnitAmountType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->repeatUnit)) {
            foreach ($this->repeatUnit as $v) {
                $xw->startElement(self::FIELD_REPEAT_UNIT);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubstancePolymerRepeat)) {
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
        if (isset($json[self::FIELD_NUMBER_OF_UNITS]) || isset($json[self::FIELD_NUMBER_OF_UNITS_EXT]) || array_key_exists(self::FIELD_NUMBER_OF_UNITS, $json) || array_key_exists(self::FIELD_NUMBER_OF_UNITS_EXT, $json)) {
            $value = $json[self::FIELD_NUMBER_OF_UNITS] ?? null;
            $ext = (isset($json[self::FIELD_NUMBER_OF_UNITS_EXT]) && is_array($json[self::FIELD_NUMBER_OF_UNITS_EXT])) ? $json[self::FIELD_NUMBER_OF_UNITS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $type->setNumberOfUnits($value);
                } else if (is_array($value)) {
                    $type->setNumberOfUnits(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $type->setNumberOfUnits(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setNumberOfUnits(new FHIRInteger($ext));
            } else {
                $type->setNumberOfUnits(new FHIRInteger(null));
            }
        }
        if (isset($json[self::FIELD_AVERAGE_MOLECULAR_FORMULA]) || isset($json[self::FIELD_AVERAGE_MOLECULAR_FORMULA_EXT]) || array_key_exists(self::FIELD_AVERAGE_MOLECULAR_FORMULA, $json) || array_key_exists(self::FIELD_AVERAGE_MOLECULAR_FORMULA_EXT, $json)) {
            $value = $json[self::FIELD_AVERAGE_MOLECULAR_FORMULA] ?? null;
            $ext = (isset($json[self::FIELD_AVERAGE_MOLECULAR_FORMULA_EXT]) && is_array($json[self::FIELD_AVERAGE_MOLECULAR_FORMULA_EXT])) ? $json[self::FIELD_AVERAGE_MOLECULAR_FORMULA_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setAverageMolecularFormula($value);
                } else if (is_array($value)) {
                    $type->setAverageMolecularFormula(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setAverageMolecularFormula(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setAverageMolecularFormula(new FHIRString($ext));
            } else {
                $type->setAverageMolecularFormula(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE]) || array_key_exists(self::FIELD_REPEAT_UNIT_AMOUNT_TYPE, $json)) {
            if ($json[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE] instanceof FHIRCodeableConcept) {
                $type->setRepeatUnitAmountType($json[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE]);
            } else {
                $type->setRepeatUnitAmountType(new FHIRCodeableConcept($json[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE]));
            }
        }
        if (isset($json[self::FIELD_REPEAT_UNIT]) || array_key_exists(self::FIELD_REPEAT_UNIT, $json)) {
            if (is_array($json[self::FIELD_REPEAT_UNIT])) {
                foreach($json[self::FIELD_REPEAT_UNIT] as $v) {
                    if ($v instanceof FHIRSubstancePolymerRepeatUnit) {
                        $type->addRepeatUnit($v);
                    } else {
                        $type->addRepeatUnit(new FHIRSubstancePolymerRepeatUnit($v));
                    }
                }
            } elseif ($json[self::FIELD_REPEAT_UNIT] instanceof FHIRSubstancePolymerRepeatUnit) {
                $type->addRepeatUnit($json[self::FIELD_REPEAT_UNIT]);
            } else {
                $type->addRepeatUnit(new FHIRSubstancePolymerRepeatUnit($json[self::FIELD_REPEAT_UNIT]));
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
        if (isset($this->numberOfUnits)) {
            if (null !== ($val = $this->numberOfUnits->getValue())) {
                $out->numberOfUnits = $val;
            }
            $ext = $this->numberOfUnits->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_numberOfUnits = $ext;
            }
        }
        if (isset($this->averageMolecularFormula)) {
            if (null !== ($val = $this->averageMolecularFormula->getValue())) {
                $out->averageMolecularFormula = $val;
            }
            $ext = $this->averageMolecularFormula->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_averageMolecularFormula = $ext;
            }
        }
        if (isset($this->repeatUnitAmountType)) {
            $out->repeatUnitAmountType = $this->repeatUnitAmountType;
        }
        if (isset($this->repeatUnit) && [] !== $this->repeatUnit) {
            $out->repeatUnit = $this->repeatUnit;
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