<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 7th, 2024 02:08+0000
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
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R5\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * Representation of a molecular sequence.
 *
 * Class FHIRMolecularSequenceRelative
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence
 */
class FHIRMolecularSequenceRelative extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_RELATIVE;

    const FIELD_COORDINATE_SYSTEM = 'coordinateSystem';
    const FIELD_ORDINAL_POSITION = 'ordinalPosition';
    const FIELD_ORDINAL_POSITION_EXT = '_ordinalPosition';
    const FIELD_SEQUENCE_RANGE = 'sequenceRange';
    const FIELD_STARTING_SEQUENCE = 'startingSequence';
    const FIELD_EDIT = 'edit';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * These are different ways of identifying nucleotides or amino acids within a
     * sequence. Different databases and file types may use different systems. For
     * detail definitions, see https://loinc.org/92822-6/ for more detail.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $coordinateSystem = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the order in which the sequence should be considered when putting
     * multiple 'relative' elements together.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $ordinalPosition = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the nucleotide range in the composed sequence when multiple 'relative'
     * elements are used together.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    protected null|FHIRRange $sequenceRange = null;
    /**
     * Representation of a molecular sequence.
     *
     * A sequence that is used as a starting sequence to describe variants that are
     * present in a sequence analyzed.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStartingSequence
     */
    protected null|FHIRMolecularSequenceStartingSequence $startingSequence = null;
    /**
     * Representation of a molecular sequence.
     *
     * Changes in sequence from the starting sequence.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceEdit[]
     */
    protected null|array $edit = [];

    /**
     * Validation map for fields in type MolecularSequence.Relative
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRMolecularSequenceRelative Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_COORDINATE_SYSTEM, $data)) {
            if ($data[self::FIELD_COORDINATE_SYSTEM] instanceof FHIRCodeableConcept) {
                $this->setCoordinateSystem($data[self::FIELD_COORDINATE_SYSTEM]);
            } else {
                $this->setCoordinateSystem(new FHIRCodeableConcept($data[self::FIELD_COORDINATE_SYSTEM]));
            }
        }
        if (array_key_exists(self::FIELD_ORDINAL_POSITION, $data) || array_key_exists(self::FIELD_ORDINAL_POSITION_EXT, $data)) {
            $value = $data[self::FIELD_ORDINAL_POSITION] ?? null;
            $ext = (isset($data[self::FIELD_ORDINAL_POSITION_EXT]) && is_array($data[self::FIELD_ORDINAL_POSITION_EXT])) ? $data[self::FIELD_ORDINAL_POSITION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setOrdinalPosition($value);
                } else if (is_array($value)) {
                    $this->setOrdinalPosition(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setOrdinalPosition(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOrdinalPosition(new FHIRInteger($ext));
            } else {
                $this->setOrdinalPosition(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_SEQUENCE_RANGE, $data)) {
            if ($data[self::FIELD_SEQUENCE_RANGE] instanceof FHIRRange) {
                $this->setSequenceRange($data[self::FIELD_SEQUENCE_RANGE]);
            } else {
                $this->setSequenceRange(new FHIRRange($data[self::FIELD_SEQUENCE_RANGE]));
            }
        }
        if (array_key_exists(self::FIELD_STARTING_SEQUENCE, $data)) {
            if ($data[self::FIELD_STARTING_SEQUENCE] instanceof FHIRMolecularSequenceStartingSequence) {
                $this->setStartingSequence($data[self::FIELD_STARTING_SEQUENCE]);
            } else {
                $this->setStartingSequence(new FHIRMolecularSequenceStartingSequence($data[self::FIELD_STARTING_SEQUENCE]));
            }
        }
        if (array_key_exists(self::FIELD_EDIT, $data)) {
            if (is_array($data[self::FIELD_EDIT])) {
                foreach($data[self::FIELD_EDIT] as $v) {
                    if ($v instanceof FHIRMolecularSequenceEdit) {
                        $this->addEdit($v);
                    } else {
                        $this->addEdit(new FHIRMolecularSequenceEdit($v));
                    }
                }
            } elseif ($data[self::FIELD_EDIT] instanceof FHIRMolecularSequenceEdit) {
                $this->addEdit($data[self::FIELD_EDIT]);
            } else {
                $this->addEdit(new FHIRMolecularSequenceEdit($data[self::FIELD_EDIT]));
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
     * These are different ways of identifying nucleotides or amino acids within a
     * sequence. Different databases and file types may use different systems. For
     * detail definitions, see https://loinc.org/92822-6/ for more detail.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getCoordinateSystem(): null|FHIRCodeableConcept
    {
        return $this->coordinateSystem;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $coordinateSystem
     * @return static
     */
    public function setCoordinateSystem(null|FHIRCodeableConcept $coordinateSystem = null): self
    {
        if (null === $coordinateSystem) {
            $coordinateSystem = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->coordinateSystem, $coordinateSystem);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger
     */
    public function getOrdinalPosition(): null|FHIRInteger
    {
        return $this->ordinalPosition;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the order in which the sequence should be considered when putting
     * multiple 'relative' elements together.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R5\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger $ordinalPosition
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setOrdinalPosition(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $ordinalPosition = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $ordinalPosition && !($ordinalPosition instanceof FHIRInteger)) {
            $ordinalPosition = new FHIRInteger($ordinalPosition);
        }
        $this->_trackValueSet($this->ordinalPosition, $ordinalPosition);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_ORDINAL_POSITION])) {
            $this->_primitiveXmlLocations[self::FIELD_ORDINAL_POSITION] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_ORDINAL_POSITION][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    public function getSequenceRange(): null|FHIRRange
    {
        return $this->sequenceRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the nucleotide range in the composed sequence when multiple 'relative'
     * elements are used together.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $sequenceRange
     * @return static
     */
    public function setSequenceRange(null|FHIRRange $sequenceRange = null): self
    {
        if (null === $sequenceRange) {
            $sequenceRange = new FHIRRange();
        }
        $this->_trackValueSet($this->sequenceRange, $sequenceRange);
        $this->sequenceRange = $sequenceRange;
        return $this;
    }

    /**
     * Representation of a molecular sequence.
     *
     * A sequence that is used as a starting sequence to describe variants that are
     * present in a sequence analyzed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStartingSequence
     */
    public function getStartingSequence(): null|FHIRMolecularSequenceStartingSequence
    {
        return $this->startingSequence;
    }

    /**
     * Representation of a molecular sequence.
     *
     * A sequence that is used as a starting sequence to describe variants that are
     * present in a sequence analyzed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStartingSequence $startingSequence
     * @return static
     */
    public function setStartingSequence(null|FHIRMolecularSequenceStartingSequence $startingSequence = null): self
    {
        if (null === $startingSequence) {
            $startingSequence = new FHIRMolecularSequenceStartingSequence();
        }
        $this->_trackValueSet($this->startingSequence, $startingSequence);
        $this->startingSequence = $startingSequence;
        return $this;
    }

    /**
     * Representation of a molecular sequence.
     *
     * Changes in sequence from the starting sequence.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceEdit[]
     */
    public function getEdit(): null|array
    {
        return $this->edit;
    }

    /**
     * Representation of a molecular sequence.
     *
     * Changes in sequence from the starting sequence.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceEdit $edit
     * @return static
     */
    public function addEdit(null|FHIRMolecularSequenceEdit $edit = null): self
    {
        if (null === $edit) {
            $edit = new FHIRMolecularSequenceEdit();
        }
        $this->_trackValueAdded();
        $this->edit[] = $edit;
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
        if (null !== ($v = $this->getCoordinateSystem())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COORDINATE_SYSTEM] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrdinalPosition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORDINAL_POSITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSequenceRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEQUENCE_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStartingSequence())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STARTING_SEQUENCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getEdit())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_EDIT, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COORDINATE_SYSTEM])) {
            $v = $this->getCoordinateSystem();
            foreach($validationRules[self::FIELD_COORDINATE_SYSTEM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_RELATIVE, self::FIELD_COORDINATE_SYSTEM, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_RELATIVE, self::FIELD_ORDINAL_POSITION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_RELATIVE, self::FIELD_SEQUENCE_RANGE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_RELATIVE, self::FIELD_STARTING_SEQUENCE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_RELATIVE, self::FIELD_EDIT, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRelative $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRelative
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
        } else if (!($type instanceof FHIRMolecularSequenceRelative)) {
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
            if (self::FIELD_COORDINATE_SYSTEM === $childName) {
                $type->setCoordinateSystem(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ORDINAL_POSITION === $childName) {
                $type->setOrdinalPosition(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SEQUENCE_RANGE === $childName) {
                $type->setSequenceRange(FHIRRange::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STARTING_SEQUENCE === $childName) {
                $type->setStartingSequence(FHIRMolecularSequenceStartingSequence::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EDIT === $childName) {
                $type->addEdit(FHIRMolecularSequenceEdit::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ORDINAL_POSITION])) {
            $pt = $type->getOrdinalPosition();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ORDINAL_POSITION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setOrdinalPosition((string)$attributes[self::FIELD_ORDINAL_POSITION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'MolecularSequenceRelative', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ORDINAL_POSITION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getOrdinalPosition())) {
            $xw->writeAttribute(self::FIELD_ORDINAL_POSITION, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getCoordinateSystem())) {
            $xw->startElement(self::FIELD_COORDINATE_SYSTEM);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ORDINAL_POSITION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getOrdinalPosition())) {
            $xw->startElement(self::FIELD_ORDINAL_POSITION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSequenceRange())) {
            $xw->startElement(self::FIELD_SEQUENCE_RANGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStartingSequence())) {
            $xw->startElement(self::FIELD_STARTING_SEQUENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getEdit() as $v) {
            $xw->startElement(self::FIELD_EDIT);
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
        if (null !== ($v = $this->getCoordinateSystem())) {
            $out->{self::FIELD_COORDINATE_SYSTEM} = $v;
        }
        if (null !== ($v = $this->getOrdinalPosition())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ORDINAL_POSITION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ORDINAL_POSITION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSequenceRange())) {
            $out->{self::FIELD_SEQUENCE_RANGE} = $v;
        }
        if (null !== ($v = $this->getStartingSequence())) {
            $out->{self::FIELD_STARTING_SEQUENCE} = $v;
        }
        if ([] !== ($vs = $this->getEdit())) {
            $out->{self::FIELD_EDIT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_EDIT}[] = $v;
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