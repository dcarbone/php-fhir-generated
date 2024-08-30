<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 30th, 2024 22:23+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter;

/**
 * Todo.
 *
 * Class FHIRSubstancePolymerRepeatUnit
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer
 */
class FHIRSubstancePolymerRepeatUnit extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT_UNIT;

    const FIELD_ORIENTATION_OF_POLYMERISATION = 'orientationOfPolymerisation';
    const FIELD_REPEAT_UNIT = 'repeatUnit';
    const FIELD_REPEAT_UNIT_EXT = '_repeatUnit';
    const FIELD_AMOUNT = 'amount';
    const FIELD_DEGREE_OF_POLYMERISATION = 'degreeOfPolymerisation';
    const FIELD_STRUCTURAL_REPRESENTATION = 'structuralRepresentation';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $orientationOfPolymerisation = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $repeatUnit = null;
    /**
     * Chemical substances are a single substance type whose primary defining element
     * is the molecular structure. Chemical substances shall be defined on the basis of
     * their complete covalent molecular structure; the presence of a salt
     * (counter-ion) and/or solvates (water, alcohols) is also captured. Purity, grade,
     * physical form or particle size are not taken into account in the definition of a
     * chemical substance or in the assignment of a Substance ID.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount
     */
    protected null|FHIRSubstanceAmount $amount = null;
    /**
     * Todo.
     *
     * Todo.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerDegreeOfPolymerisation[]
     */
    protected null|array $degreeOfPolymerisation = [];
    /**
     * Todo.
     *
     * Todo.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerStructuralRepresentation[]
     */
    protected null|array $structuralRepresentation = [];

    /**
     * Validation map for fields in type SubstancePolymer.RepeatUnit
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRSubstancePolymerRepeatUnit Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_ORIENTATION_OF_POLYMERISATION, $data)) {
            if ($data[self::FIELD_ORIENTATION_OF_POLYMERISATION] instanceof FHIRCodeableConcept) {
                $this->setOrientationOfPolymerisation($data[self::FIELD_ORIENTATION_OF_POLYMERISATION]);
            } else {
                $this->setOrientationOfPolymerisation(new FHIRCodeableConcept($data[self::FIELD_ORIENTATION_OF_POLYMERISATION]));
            }
        }
        if (array_key_exists(self::FIELD_REPEAT_UNIT, $data) || array_key_exists(self::FIELD_REPEAT_UNIT_EXT, $data)) {
            $value = $data[self::FIELD_REPEAT_UNIT] ?? null;
            $ext = (isset($data[self::FIELD_REPEAT_UNIT_EXT]) && is_array($data[self::FIELD_REPEAT_UNIT_EXT])) ? $data[self::FIELD_REPEAT_UNIT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setRepeatUnit($value);
                } else if (is_array($value)) {
                    $this->setRepeatUnit(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setRepeatUnit(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRepeatUnit(new FHIRString($ext));
            } else {
                $this->setRepeatUnit(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_AMOUNT, $data)) {
            if ($data[self::FIELD_AMOUNT] instanceof FHIRSubstanceAmount) {
                $this->setAmount($data[self::FIELD_AMOUNT]);
            } else {
                $this->setAmount(new FHIRSubstanceAmount($data[self::FIELD_AMOUNT]));
            }
        }
        if (array_key_exists(self::FIELD_DEGREE_OF_POLYMERISATION, $data)) {
            if (is_array($data[self::FIELD_DEGREE_OF_POLYMERISATION])) {
                foreach($data[self::FIELD_DEGREE_OF_POLYMERISATION] as $v) {
                    if ($v instanceof FHIRSubstancePolymerDegreeOfPolymerisation) {
                        $this->addDegreeOfPolymerisation($v);
                    } else {
                        $this->addDegreeOfPolymerisation(new FHIRSubstancePolymerDegreeOfPolymerisation($v));
                    }
                }
            } elseif ($data[self::FIELD_DEGREE_OF_POLYMERISATION] instanceof FHIRSubstancePolymerDegreeOfPolymerisation) {
                $this->addDegreeOfPolymerisation($data[self::FIELD_DEGREE_OF_POLYMERISATION]);
            } else {
                $this->addDegreeOfPolymerisation(new FHIRSubstancePolymerDegreeOfPolymerisation($data[self::FIELD_DEGREE_OF_POLYMERISATION]));
            }
        }
        if (array_key_exists(self::FIELD_STRUCTURAL_REPRESENTATION, $data)) {
            if (is_array($data[self::FIELD_STRUCTURAL_REPRESENTATION])) {
                foreach($data[self::FIELD_STRUCTURAL_REPRESENTATION] as $v) {
                    if ($v instanceof FHIRSubstancePolymerStructuralRepresentation) {
                        $this->addStructuralRepresentation($v);
                    } else {
                        $this->addStructuralRepresentation(new FHIRSubstancePolymerStructuralRepresentation($v));
                    }
                }
            } elseif ($data[self::FIELD_STRUCTURAL_REPRESENTATION] instanceof FHIRSubstancePolymerStructuralRepresentation) {
                $this->addStructuralRepresentation($data[self::FIELD_STRUCTURAL_REPRESENTATION]);
            } else {
                $this->addStructuralRepresentation(new FHIRSubstancePolymerStructuralRepresentation($data[self::FIELD_STRUCTURAL_REPRESENTATION]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getOrientationOfPolymerisation(): null|FHIRCodeableConcept
    {
        return $this->orientationOfPolymerisation;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $orientationOfPolymerisation
     * @return static
     */
    public function setOrientationOfPolymerisation(null|FHIRCodeableConcept $orientationOfPolymerisation = null): self
    {
        if (null === $orientationOfPolymerisation) {
            $orientationOfPolymerisation = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->orientationOfPolymerisation, $orientationOfPolymerisation);
        $this->orientationOfPolymerisation = $orientationOfPolymerisation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getRepeatUnit(): null|FHIRString
    {
        return $this->repeatUnit;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $repeatUnit
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setRepeatUnit(null|string|FHIRStringPrimitive|FHIRString $repeatUnit = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $repeatUnit && !($repeatUnit instanceof FHIRString)) {
            $repeatUnit = new FHIRString($repeatUnit);
        }
        $this->_trackValueSet($this->repeatUnit, $repeatUnit);
        if (!isset($this->_xmlLocations[self::FIELD_REPEAT_UNIT])) {
            $this->_xmlLocations[self::FIELD_REPEAT_UNIT] = [];
        }
        $this->_xmlLocations[self::FIELD_REPEAT_UNIT][0] = $xmlLocation;
        $this->repeatUnit = $repeatUnit;
        return $this;
    }

    /**
     * Chemical substances are a single substance type whose primary defining element
     * is the molecular structure. Chemical substances shall be defined on the basis of
     * their complete covalent molecular structure; the presence of a salt
     * (counter-ion) and/or solvates (water, alcohols) is also captured. Purity, grade,
     * physical form or particle size are not taken into account in the definition of a
     * chemical substance or in the assignment of a Substance ID.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount
     */
    public function getAmount(): null|FHIRSubstanceAmount
    {
        return $this->amount;
    }

    /**
     * Chemical substances are a single substance type whose primary defining element
     * is the molecular structure. Chemical substances shall be defined on the basis of
     * their complete covalent molecular structure; the presence of a salt
     * (counter-ion) and/or solvates (water, alcohols) is also captured. Purity, grade,
     * physical form or particle size are not taken into account in the definition of a
     * chemical substance or in the assignment of a Substance ID.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount $amount
     * @return static
     */
    public function setAmount(null|FHIRSubstanceAmount $amount = null): self
    {
        if (null === $amount) {
            $amount = new FHIRSubstanceAmount();
        }
        $this->_trackValueSet($this->amount, $amount);
        $this->amount = $amount;
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerDegreeOfPolymerisation[]
     */
    public function getDegreeOfPolymerisation(): null|array
    {
        return $this->degreeOfPolymerisation;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerDegreeOfPolymerisation $degreeOfPolymerisation
     * @return static
     */
    public function addDegreeOfPolymerisation(null|FHIRSubstancePolymerDegreeOfPolymerisation $degreeOfPolymerisation = null): self
    {
        if (null === $degreeOfPolymerisation) {
            $degreeOfPolymerisation = new FHIRSubstancePolymerDegreeOfPolymerisation();
        }
        $this->_trackValueAdded();
        $this->degreeOfPolymerisation[] = $degreeOfPolymerisation;
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerDegreeOfPolymerisation ...$degreeOfPolymerisation
     * @return static
     */
    public function setDegreeOfPolymerisation(FHIRSubstancePolymerDegreeOfPolymerisation ...$degreeOfPolymerisation): self
    {
        if ([] !== $this->degreeOfPolymerisation) {
            $this->_trackValuesRemoved(count($this->degreeOfPolymerisation));
            $this->degreeOfPolymerisation = [];
        }
        if ([] === $degreeOfPolymerisation) {
            return $this;
        }
        foreach($degreeOfPolymerisation as $v) {
            $this->addDegreeOfPolymerisation($v);
        }
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerStructuralRepresentation[]
     */
    public function getStructuralRepresentation(): null|array
    {
        return $this->structuralRepresentation;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerStructuralRepresentation $structuralRepresentation
     * @return static
     */
    public function addStructuralRepresentation(null|FHIRSubstancePolymerStructuralRepresentation $structuralRepresentation = null): self
    {
        if (null === $structuralRepresentation) {
            $structuralRepresentation = new FHIRSubstancePolymerStructuralRepresentation();
        }
        $this->_trackValueAdded();
        $this->structuralRepresentation[] = $structuralRepresentation;
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerStructuralRepresentation ...$structuralRepresentation
     * @return static
     */
    public function setStructuralRepresentation(FHIRSubstancePolymerStructuralRepresentation ...$structuralRepresentation): self
    {
        if ([] !== $this->structuralRepresentation) {
            $this->_trackValuesRemoved(count($this->structuralRepresentation));
            $this->structuralRepresentation = [];
        }
        if ([] === $structuralRepresentation) {
            return $this;
        }
        foreach($structuralRepresentation as $v) {
            $this->addStructuralRepresentation($v);
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
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getOrientationOfPolymerisation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORIENTATION_OF_POLYMERISATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRepeatUnit())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REPEAT_UNIT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAmount())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AMOUNT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDegreeOfPolymerisation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DEGREE_OF_POLYMERISATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getStructuralRepresentation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_STRUCTURAL_REPRESENTATION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORIENTATION_OF_POLYMERISATION])) {
            $v = $this->getOrientationOfPolymerisation();
            foreach($validationRules[self::FIELD_ORIENTATION_OF_POLYMERISATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT_UNIT, self::FIELD_ORIENTATION_OF_POLYMERISATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORIENTATION_OF_POLYMERISATION])) {
                        $errs[self::FIELD_ORIENTATION_OF_POLYMERISATION] = [];
                    }
                    $errs[self::FIELD_ORIENTATION_OF_POLYMERISATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPEAT_UNIT])) {
            $v = $this->getRepeatUnit();
            foreach($validationRules[self::FIELD_REPEAT_UNIT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT_UNIT, self::FIELD_REPEAT_UNIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPEAT_UNIT])) {
                        $errs[self::FIELD_REPEAT_UNIT] = [];
                    }
                    $errs[self::FIELD_REPEAT_UNIT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AMOUNT])) {
            $v = $this->getAmount();
            foreach($validationRules[self::FIELD_AMOUNT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT_UNIT, self::FIELD_AMOUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AMOUNT])) {
                        $errs[self::FIELD_AMOUNT] = [];
                    }
                    $errs[self::FIELD_AMOUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEGREE_OF_POLYMERISATION])) {
            $v = $this->getDegreeOfPolymerisation();
            foreach($validationRules[self::FIELD_DEGREE_OF_POLYMERISATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT_UNIT, self::FIELD_DEGREE_OF_POLYMERISATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEGREE_OF_POLYMERISATION])) {
                        $errs[self::FIELD_DEGREE_OF_POLYMERISATION] = [];
                    }
                    $errs[self::FIELD_DEGREE_OF_POLYMERISATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STRUCTURAL_REPRESENTATION])) {
            $v = $this->getStructuralRepresentation();
            foreach($validationRules[self::FIELD_STRUCTURAL_REPRESENTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT_UNIT, self::FIELD_STRUCTURAL_REPRESENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STRUCTURAL_REPRESENTATION])) {
                        $errs[self::FIELD_STRUCTURAL_REPRESENTATION] = [];
                    }
                    $errs[self::FIELD_STRUCTURAL_REPRESENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRSubstancePolymerRepeatUnit)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_ORIENTATION_OF_POLYMERISATION === $childName) {
                $type->setOrientationOfPolymerisation(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REPEAT_UNIT === $childName) {
                $type->setRepeatUnit(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_AMOUNT === $childName) {
                $type->setAmount(FHIRSubstanceAmount::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEGREE_OF_POLYMERISATION === $childName) {
                $type->addDegreeOfPolymerisation(FHIRSubstancePolymerDegreeOfPolymerisation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STRUCTURAL_REPRESENTATION === $childName) {
                $type->addStructuralRepresentation(FHIRSubstancePolymerStructuralRepresentation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_REPEAT_UNIT])) {
            $pt = $type->getRepeatUnit();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_REPEAT_UNIT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setRepeatUnit((string)$attributes[self::FIELD_REPEAT_UNIT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'SubstancePolymerRepeatUnit', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_REPEAT_UNIT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getRepeatUnit())) {
            $xw->writeAttribute(self::FIELD_REPEAT_UNIT, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getOrientationOfPolymerisation())) {
            $xw->startElement(self::FIELD_ORIENTATION_OF_POLYMERISATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_REPEAT_UNIT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getRepeatUnit())) {
            $xw->startElement(self::FIELD_REPEAT_UNIT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getAmount())) {
            $xw->startElement(self::FIELD_AMOUNT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getDegreeOfPolymerisation() as $v) {
            $xw->startElement(self::FIELD_DEGREE_OF_POLYMERISATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getStructuralRepresentation() as $v) {
            $xw->startElement(self::FIELD_STRUCTURAL_REPRESENTATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getOrientationOfPolymerisation())) {
            $out->{self::FIELD_ORIENTATION_OF_POLYMERISATION} = $v;
        }
        if (null !== ($v = $this->getRepeatUnit())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REPEAT_UNIT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REPEAT_UNIT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAmount())) {
            $out->{self::FIELD_AMOUNT} = $v;
        }
        if ([] !== ($vs = $this->getDegreeOfPolymerisation())) {
            $out->{self::FIELD_DEGREE_OF_POLYMERISATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_DEGREE_OF_POLYMERISATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getStructuralRepresentation())) {
            $out->{self::FIELD_STRUCTURAL_REPRESENTATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_STRUCTURAL_REPRESENTATION}[] = $v;
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