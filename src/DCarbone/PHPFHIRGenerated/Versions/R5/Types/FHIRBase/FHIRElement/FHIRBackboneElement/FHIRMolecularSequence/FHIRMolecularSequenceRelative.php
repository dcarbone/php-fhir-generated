<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence;

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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Representation of a molecular sequence.
 */
class FHIRMolecularSequenceRelative extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_RELATIVE;


    public const FIELD_COORDINATE_SYSTEM = 'coordinateSystem';
    public const FIELD_ORDINAL_POSITION = 'ordinalPosition';
    public const FIELD_ORDINAL_POSITION_EXT = '_ordinalPosition';
    public const FIELD_SEQUENCE_RANGE = 'sequenceRange';
    public const FIELD_STARTING_SEQUENCE = 'startingSequence';
    public const FIELD_EDIT = 'edit';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * These are different ways of identifying nucleotides or amino acids within a
     * sequence. Different databases and file types may use different systems. For
     * detail definitions, see https://loinc.org/92822-6/ for more detail.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $coordinateSystem;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the order in which the sequence should be considered when putting
     * multiple 'relative' elements together.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $ordinalPosition;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the nucleotide range in the composed sequence when multiple 'relative'
     * elements are used together.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange 
     */
    protected FHIRRange $sequenceRange;
    /**
     * Representation of a molecular sequence.
     *
     * A sequence that is used as a starting sequence to describe variants that are
     * present in a sequence analyzed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStartingSequence 
     */
    protected FHIRMolecularSequenceStartingSequence $startingSequence;
    /**
     * Representation of a molecular sequence.
     *
     * Changes in sequence from the starting sequence.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceEdit[] 
     */
    protected array $edit;

    /** Default validation map for fields in type MolecularSequence.Relative */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_COORDINATE_SYSTEM => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRMolecularSequenceRelative Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $coordinateSystem
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $ordinalPosition
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $sequenceRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStartingSequence $startingSequence
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceEdit[] $edit
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $coordinateSystem = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $ordinalPosition = null,
                                null|FHIRRange $sequenceRange = null,
                                null|FHIRMolecularSequenceStartingSequence $startingSequence = null,
                                null|iterable $edit = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $coordinateSystem) {
            $this->setCoordinateSystem($coordinateSystem);
        }
        if (null !== $ordinalPosition) {
            $this->setOrdinalPosition($ordinalPosition);
        }
        if (null !== $sequenceRange) {
            $this->setSequenceRange($sequenceRange);
        }
        if (null !== $startingSequence) {
            $this->setStartingSequence($startingSequence);
        }
        if (null !== $edit) {
            $this->setEdit(...$edit);
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
     * These are different ways of identifying nucleotides or amino acids within a
     * sequence. Different databases and file types may use different systems. For
     * detail definitions, see https://loinc.org/92822-6/ for more detail.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getCoordinateSystem(): null|FHIRCodeableConcept
    {
        return $this->coordinateSystem ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * These are different ways of identifying nucleotides or amino acids within a
     * sequence. Different databases and file types may use different systems. For
     * detail definitions, see https://loinc.org/92822-6/ for more detail.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $coordinateSystem
     * @return static
     */
    public function setCoordinateSystem(null|FHIRCodeableConcept $coordinateSystem): self
    {
        if (null === $coordinateSystem) {
            unset($this->coordinateSystem);
            return $this;
        }
        $this->coordinateSystem = $coordinateSystem;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the order in which the sequence should be considered when putting
     * multiple 'relative' elements together.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger
     */
    public function getOrdinalPosition(): null|FHIRInteger
    {
        return $this->ordinalPosition ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the order in which the sequence should be considered when putting
     * multiple 'relative' elements together.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $ordinalPosition
     * @return static
     */
    public function setOrdinalPosition(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $ordinalPosition): self
    {
        if (null === $ordinalPosition) {
            unset($this->ordinalPosition);
            return $this;
        }
        if (!($ordinalPosition instanceof FHIRInteger)) {
            $ordinalPosition = new FHIRInteger(value: $ordinalPosition);
        }
        $this->ordinalPosition = $ordinalPosition;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the nucleotide range in the composed sequence when multiple 'relative'
     * elements are used together.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    public function getSequenceRange(): null|FHIRRange
    {
        return $this->sequenceRange ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the nucleotide range in the composed sequence when multiple 'relative'
     * elements are used together.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $sequenceRange
     * @return static
     */
    public function setSequenceRange(null|FHIRRange $sequenceRange): self
    {
        if (null === $sequenceRange) {
            unset($this->sequenceRange);
            return $this;
        }
        $this->sequenceRange = $sequenceRange;
        return $this;
    }

    /**
     * Representation of a molecular sequence.
     *
     * A sequence that is used as a starting sequence to describe variants that are
     * present in a sequence analyzed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStartingSequence
     */
    public function getStartingSequence(): null|FHIRMolecularSequenceStartingSequence
    {
        return $this->startingSequence ?? null;
    }

    /**
     * Representation of a molecular sequence.
     *
     * A sequence that is used as a starting sequence to describe variants that are
     * present in a sequence analyzed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStartingSequence $startingSequence
     * @return static
     */
    public function setStartingSequence(null|FHIRMolecularSequenceStartingSequence $startingSequence): self
    {
        if (null === $startingSequence) {
            unset($this->startingSequence);
            return $this;
        }
        $this->startingSequence = $startingSequence;
        return $this;
    }

    /**
     * Representation of a molecular sequence.
     *
     * Changes in sequence from the starting sequence.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceEdit[]
     */
    public function getEdit(): array
    {
        return $this->edit ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceEdit>
     */
    public function getEditIterator(): iterable
    {
        if (!isset($this->edit) || [] === $this->edit) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->edit);
    }

    /**
     * Representation of a molecular sequence.
     *
     * Changes in sequence from the starting sequence.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceEdit $edit
     * @return static
     */
    public function addEdit(FHIRMolecularSequenceEdit $edit): self
    {
        if (!isset($this->edit)) {
            $this->edit = [];
        }
        $this->edit[] = $edit;
        return $this;
    }

    /**
     * Representation of a molecular sequence.
     *
     * Changes in sequence from the starting sequence.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceEdit ...$edit
     * @return static
     */
    public function setEdit(FHIRMolecularSequenceEdit ...$edit): self
    {
        $this->edit = $edit;
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
        if (null !== ($v = $this->getCoordinateSystem())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COORDINATE_SYSTEM] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_COORDINATE_SYSTEM])) {
            $v = $this->getCoordinateSystem();
            foreach($validationRules[self::FIELD_COORDINATE_SYSTEM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COORDINATE_SYSTEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COORDINATE_SYSTEM])) {
                        $errs[self::FIELD_COORDINATE_SYSTEM] = [];
                    }
                    $errs[self::FIELD_COORDINATE_SYSTEM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORDINAL_POSITION])) {
            $v = $this->getOrdinalPosition();
            foreach($validationRules[self::FIELD_ORDINAL_POSITION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ORDINAL_POSITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORDINAL_POSITION])) {
                        $errs[self::FIELD_ORDINAL_POSITION] = [];
                    }
                    $errs[self::FIELD_ORDINAL_POSITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE_RANGE])) {
            $v = $this->getSequenceRange();
            foreach($validationRules[self::FIELD_SEQUENCE_RANGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SEQUENCE_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE_RANGE])) {
                        $errs[self::FIELD_SEQUENCE_RANGE] = [];
                    }
                    $errs[self::FIELD_SEQUENCE_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STARTING_SEQUENCE])) {
            $v = $this->getStartingSequence();
            foreach($validationRules[self::FIELD_STARTING_SEQUENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STARTING_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STARTING_SEQUENCE])) {
                        $errs[self::FIELD_STARTING_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_STARTING_SEQUENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EDIT])) {
            $v = $this->getEdit();
            foreach($validationRules[self::FIELD_EDIT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EDIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EDIT])) {
                        $errs[self::FIELD_EDIT] = [];
                    }
                    $errs[self::FIELD_EDIT][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRelative $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRelative
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMolecularSequenceRelative)) {
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
            } else if (self::FIELD_COORDINATE_SYSTEM === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setCoordinateSystem(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ORDINAL_POSITION === $childName) {
                $v = new FHIRInteger(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setOrdinalPosition(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SEQUENCE_RANGE === $childName) {
                $v = new FHIRRange();
                $type->setSequenceRange(FHIRRange::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STARTING_SEQUENCE === $childName) {
                $v = new FHIRMolecularSequenceStartingSequence();
                $type->setStartingSequence(FHIRMolecularSequenceStartingSequence::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EDIT === $childName) {
                $v = new FHIRMolecularSequenceEdit();
                $type->addEdit(FHIRMolecularSequenceEdit::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_ORDINAL_POSITION])) {
            $pt = $type->getOrdinalPosition();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ORDINAL_POSITION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setOrdinalPosition(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_ORDINAL_POSITION],
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
            $xw->openRootNode($config, 'MolecularSequenceRelative', $this->_getSourceXMLNS());
        }
        if (isset($this->ordinalPosition) && $this->ordinalPosition->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ORDINAL_POSITION, $this->ordinalPosition->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->coordinateSystem)) {
            $xw->startElement(self::FIELD_COORDINATE_SYSTEM);
            $this->coordinateSystem->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->ordinalPosition) && $this->ordinalPosition->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ORDINAL_POSITION);
            $this->ordinalPosition->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->sequenceRange)) {
            $xw->startElement(self::FIELD_SEQUENCE_RANGE);
            $this->sequenceRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->startingSequence)) {
            $xw->startElement(self::FIELD_STARTING_SEQUENCE);
            $this->startingSequence->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->edit)) {
            foreach ($this->edit as $v) {
                $xw->startElement(self::FIELD_EDIT);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRelative $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRelative
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMolecularSequenceRelative)) {
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
        if (isset($json[self::FIELD_COORDINATE_SYSTEM]) || array_key_exists(self::FIELD_COORDINATE_SYSTEM, $json)) {
            if ($json[self::FIELD_COORDINATE_SYSTEM] instanceof FHIRCodeableConcept) {
                $type->setCoordinateSystem($json[self::FIELD_COORDINATE_SYSTEM]);
            } else {
                $type->setCoordinateSystem(new FHIRCodeableConcept($json[self::FIELD_COORDINATE_SYSTEM]));
            }
        }
        if (isset($json[self::FIELD_ORDINAL_POSITION]) || isset($json[self::FIELD_ORDINAL_POSITION_EXT]) || array_key_exists(self::FIELD_ORDINAL_POSITION, $json) || array_key_exists(self::FIELD_ORDINAL_POSITION_EXT, $json)) {
            $value = $json[self::FIELD_ORDINAL_POSITION] ?? null;
            $ext = (isset($json[self::FIELD_ORDINAL_POSITION_EXT]) && is_array($json[self::FIELD_ORDINAL_POSITION_EXT])) ? $json[self::FIELD_ORDINAL_POSITION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $type->setOrdinalPosition($value);
                } else if (is_array($value)) {
                    $type->setOrdinalPosition(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $type->setOrdinalPosition(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setOrdinalPosition(new FHIRInteger($ext));
            } else {
                $type->setOrdinalPosition(new FHIRInteger(null));
            }
        }
        if (isset($json[self::FIELD_SEQUENCE_RANGE]) || array_key_exists(self::FIELD_SEQUENCE_RANGE, $json)) {
            if ($json[self::FIELD_SEQUENCE_RANGE] instanceof FHIRRange) {
                $type->setSequenceRange($json[self::FIELD_SEQUENCE_RANGE]);
            } else {
                $type->setSequenceRange(new FHIRRange($json[self::FIELD_SEQUENCE_RANGE]));
            }
        }
        if (isset($json[self::FIELD_STARTING_SEQUENCE]) || array_key_exists(self::FIELD_STARTING_SEQUENCE, $json)) {
            if ($json[self::FIELD_STARTING_SEQUENCE] instanceof FHIRMolecularSequenceStartingSequence) {
                $type->setStartingSequence($json[self::FIELD_STARTING_SEQUENCE]);
            } else {
                $type->setStartingSequence(new FHIRMolecularSequenceStartingSequence($json[self::FIELD_STARTING_SEQUENCE]));
            }
        }
        if (isset($json[self::FIELD_EDIT]) || array_key_exists(self::FIELD_EDIT, $json)) {
            if (is_array($json[self::FIELD_EDIT])) {
                foreach($json[self::FIELD_EDIT] as $v) {
                    if ($v instanceof FHIRMolecularSequenceEdit) {
                        $type->addEdit($v);
                    } else {
                        $type->addEdit(new FHIRMolecularSequenceEdit($v));
                    }
                }
            } elseif ($json[self::FIELD_EDIT] instanceof FHIRMolecularSequenceEdit) {
                $type->addEdit($json[self::FIELD_EDIT]);
            } else {
                $type->addEdit(new FHIRMolecularSequenceEdit($json[self::FIELD_EDIT]));
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
        if (isset($this->coordinateSystem)) {
            $out->coordinateSystem = $this->coordinateSystem;
        }
        if (isset($this->ordinalPosition)) {
            if (null !== ($val = $this->ordinalPosition->getValue())) {
                $out->ordinalPosition = $val;
            }
            $ext = $this->ordinalPosition->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_ordinalPosition = $ext;
            }
        }
        if (isset($this->sequenceRange)) {
            $out->sequenceRange = $this->sequenceRange;
        }
        if (isset($this->startingSequence)) {
            $out->startingSequence = $this->startingSequence;
        }
        if (isset($this->edit) && [] !== $this->edit) {
            $out->edit = $this->edit;
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