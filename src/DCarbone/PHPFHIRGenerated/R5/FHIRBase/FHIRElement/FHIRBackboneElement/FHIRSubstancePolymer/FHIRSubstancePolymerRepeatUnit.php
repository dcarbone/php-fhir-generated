<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 8th, 2024 03:16+0000
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

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R5\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * Properties of a substance specific to it being a polymer.
 *
 * Class FHIRSubstancePolymerRepeatUnit
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer
 */
class FHIRSubstancePolymerRepeatUnit extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT_UNIT;

    const FIELD_UNIT = 'unit';
    const FIELD_UNIT_EXT = '_unit';
    const FIELD_ORIENTATION = 'orientation';
    const FIELD_AMOUNT = 'amount';
    const FIELD_AMOUNT_EXT = '_amount';
    const FIELD_DEGREE_OF_POLYMERISATION = 'degreeOfPolymerisation';
    const FIELD_STRUCTURAL_REPRESENTATION = 'structuralRepresentation';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structural repeat units are essential elements for defining polymers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $unit = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The orientation of the polymerisation, e.g. head-tail, head-head, random.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $orientation = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of repeats of this unit.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $amount = null;
    /**
     * Properties of a substance specific to it being a polymer.
     *
     * Applies to homopolymer and block co-polymers where the degree of polymerisation
     * within a block can be described.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerDegreeOfPolymerisation[]
     */
    protected null|array $degreeOfPolymerisation = [];
    /**
     * Properties of a substance specific to it being a polymer.
     *
     * A graphical structure for this SRU.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerStructuralRepresentation[]
     */
    protected null|array $structuralRepresentation = [];

    /**
     * Validation map for fields in type SubstancePolymer.RepeatUnit
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

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
        if (array_key_exists(self::FIELD_UNIT, $data) || array_key_exists(self::FIELD_UNIT_EXT, $data)) {
            $value = $data[self::FIELD_UNIT] ?? null;
            $ext = (isset($data[self::FIELD_UNIT_EXT]) && is_array($data[self::FIELD_UNIT_EXT])) ? $data[self::FIELD_UNIT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setUnit($value);
                } else if (is_array($value)) {
                    $this->setUnit(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setUnit(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setUnit(new FHIRString($ext));
            } else {
                $this->setUnit(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_ORIENTATION, $data)) {
            if ($data[self::FIELD_ORIENTATION] instanceof FHIRCodeableConcept) {
                $this->setOrientation($data[self::FIELD_ORIENTATION]);
            } else {
                $this->setOrientation(new FHIRCodeableConcept($data[self::FIELD_ORIENTATION]));
            }
        }
        if (array_key_exists(self::FIELD_AMOUNT, $data) || array_key_exists(self::FIELD_AMOUNT_EXT, $data)) {
            $value = $data[self::FIELD_AMOUNT] ?? null;
            $ext = (isset($data[self::FIELD_AMOUNT_EXT]) && is_array($data[self::FIELD_AMOUNT_EXT])) ? $data[self::FIELD_AMOUNT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setAmount($value);
                } else if (is_array($value)) {
                    $this->setAmount(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setAmount(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAmount(new FHIRInteger($ext));
            } else {
                $this->setAmount(new FHIRInteger(null));
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structural repeat units are essential elements for defining polymers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getUnit(): null|FHIRString
    {
        return $this->unit;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structural repeat units are essential elements for defining polymers.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $unit
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setUnit(null|string|FHIRStringPrimitive|FHIRString $unit = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $unit && !($unit instanceof FHIRString)) {
            $unit = new FHIRString($unit);
        }
        $this->_trackValueSet($this->unit, $unit);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_UNIT])) {
            $this->_primitiveXmlLocations[self::FIELD_UNIT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_UNIT][0] = $xmlLocation;
        $this->unit = $unit;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The orientation of the polymerisation, e.g. head-tail, head-head, random.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getOrientation(): null|FHIRCodeableConcept
    {
        return $this->orientation;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The orientation of the polymerisation, e.g. head-tail, head-head, random.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $orientation
     * @return static
     */
    public function setOrientation(null|FHIRCodeableConcept $orientation = null): self
    {
        if (null === $orientation) {
            $orientation = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->orientation, $orientation);
        $this->orientation = $orientation;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of repeats of this unit.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger
     */
    public function getAmount(): null|FHIRInteger
    {
        return $this->amount;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of repeats of this unit.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R5\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger $amount
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setAmount(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $amount = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $amount && !($amount instanceof FHIRInteger)) {
            $amount = new FHIRInteger($amount);
        }
        $this->_trackValueSet($this->amount, $amount);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_AMOUNT])) {
            $this->_primitiveXmlLocations[self::FIELD_AMOUNT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_AMOUNT][0] = $xmlLocation;
        $this->amount = $amount;
        return $this;
    }

    /**
     * Properties of a substance specific to it being a polymer.
     *
     * Applies to homopolymer and block co-polymers where the degree of polymerisation
     * within a block can be described.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerDegreeOfPolymerisation[]
     */
    public function getDegreeOfPolymerisation(): null|array
    {
        return $this->degreeOfPolymerisation;
    }

    /**
     * Properties of a substance specific to it being a polymer.
     *
     * Applies to homopolymer and block co-polymers where the degree of polymerisation
     * within a block can be described.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerDegreeOfPolymerisation $degreeOfPolymerisation
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
     * Properties of a substance specific to it being a polymer.
     *
     * A graphical structure for this SRU.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerStructuralRepresentation[]
     */
    public function getStructuralRepresentation(): null|array
    {
        return $this->structuralRepresentation;
    }

    /**
     * Properties of a substance specific to it being a polymer.
     *
     * A graphical structure for this SRU.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerStructuralRepresentation $structuralRepresentation
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
        if (null !== ($v = $this->getUnit())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UNIT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrientation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORIENTATION] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_UNIT])) {
            $v = $this->getUnit();
            foreach($validationRules[self::FIELD_UNIT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT_UNIT, self::FIELD_UNIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UNIT])) {
                        $errs[self::FIELD_UNIT] = [];
                    }
                    $errs[self::FIELD_UNIT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORIENTATION])) {
            $v = $this->getOrientation();
            foreach($validationRules[self::FIELD_ORIENTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT_UNIT, self::FIELD_ORIENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORIENTATION])) {
                        $errs[self::FIELD_ORIENTATION] = [];
                    }
                    $errs[self::FIELD_ORIENTATION][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit
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
            if (self::FIELD_UNIT === $childName) {
                $type->setUnit(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ORIENTATION === $childName) {
                $type->setOrientation(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_AMOUNT === $childName) {
                $type->setAmount(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
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
        if (isset($attributes[self::FIELD_UNIT])) {
            $pt = $type->getUnit();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_UNIT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setUnit((string)$attributes[self::FIELD_UNIT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_AMOUNT])) {
            $pt = $type->getAmount();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_AMOUNT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setAmount((string)$attributes[self::FIELD_AMOUNT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter
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
        $locs = $this->_primitiveXmlLocations[self::FIELD_UNIT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getUnit())) {
            $xw->writeAttribute(self::FIELD_UNIT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_AMOUNT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getAmount())) {
            $xw->writeAttribute(self::FIELD_AMOUNT, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_UNIT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getUnit())) {
            $xw->startElement(self::FIELD_UNIT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getOrientation())) {
            $xw->startElement(self::FIELD_ORIENTATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_AMOUNT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getAmount())) {
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
        if (null !== ($v = $this->getUnit())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_UNIT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_UNIT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOrientation())) {
            $out->{self::FIELD_ORIENTATION} = $v;
        }
        if (null !== ($v = $this->getAmount())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_AMOUNT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_AMOUNT_EXT} = $ext;
            }
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