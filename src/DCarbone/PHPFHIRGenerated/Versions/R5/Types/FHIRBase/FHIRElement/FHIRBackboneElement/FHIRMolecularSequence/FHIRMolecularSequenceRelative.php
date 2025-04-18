<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence;

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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Representation of a molecular sequence.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRMolecularSequenceRelative extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_RELATIVE;

    /* class_default.php:56 */
    public const FIELD_COORDINATE_SYSTEM = 'coordinateSystem';
    public const FIELD_ORDINAL_POSITION = 'ordinalPosition';
    public const FIELD_ORDINAL_POSITION_EXT = '_ordinalPosition';
    public const FIELD_SEQUENCE_RANGE = 'sequenceRange';
    public const FIELD_STARTING_SEQUENCE = 'startingSequence';
    public const FIELD_EDIT = 'edit';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_COORDINATE_SYSTEM => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_ORDINAL_POSITION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
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
    #[FHIRCodeableConcept]
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
    #[FHIRInteger]
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
    #[FHIRRange]
    protected FHIRRange $sequenceRange;
    /**
     * Representation of a molecular sequence.
     *
     * A sequence that is used as a starting sequence to describe variants that are
     * present in a sequence analyzed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStartingSequence 
     */
    #[FHIRMolecularSequenceStartingSequence]
    protected FHIRMolecularSequenceStartingSequence $startingSequence;
    /**
     * Representation of a molecular sequence.
     *
     * Changes in sequence from the starting sequence.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceEdit> 
     */
    #[FHIRMolecularSequenceEdit]
    protected array $edit;

    /* constructor.php:61 */
    /**
     * FHIRMolecularSequenceRelative Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $coordinateSystem
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $ordinalPosition
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $sequenceRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStartingSequence $startingSequence
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceEdit> $edit
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $coordinateSystem = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $ordinalPosition = null,
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

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $ordinalPosition
     * @return static
     */
    public function setOrdinalPosition(null|string|float|FHIRIntegerPrimitive|FHIRInteger $ordinalPosition): self
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceEdit>
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
        if (!isset($this->edit)) {
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
        if ([] === $edit) {
            unset($this->edit);
            return $this;
        }
        $this->edit = $edit;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRelative $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRelative
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
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
            } else if (self::FIELD_COORDINATE_SYSTEM === $cen) {
                $type->setCoordinateSystem(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ORDINAL_POSITION === $cen) {
                $type->setOrdinalPosition(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SEQUENCE_RANGE === $cen) {
                $type->setSequenceRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STARTING_SEQUENCE === $cen) {
                $type->setStartingSequence(FHIRMolecularSequenceStartingSequence::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EDIT === $cen) {
                $type->addEdit(FHIRMolecularSequenceEdit::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ORDINAL_POSITION])) {
            if (isset($type->ordinalPosition)) {
                $type->ordinalPosition->setValue((string)$attributes[self::FIELD_ORDINAL_POSITION]);
            } else {
                $type->setOrdinalPosition((string)$attributes[self::FIELD_ORDINAL_POSITION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ORDINAL_POSITION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->ordinalPosition) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ORDINAL_POSITION]) {
            $xw->writeAttribute(self::FIELD_ORDINAL_POSITION, $this->ordinalPosition->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->coordinateSystem)) {
            $xw->startElement(self::FIELD_COORDINATE_SYSTEM);
            $this->coordinateSystem->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->ordinalPosition)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ORDINAL_POSITION]
                || $this->ordinalPosition->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ORDINAL_POSITION);
            $this->ordinalPosition->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ORDINAL_POSITION]);
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
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRelative $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRelative
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
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
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->coordinateSystem) || property_exists($decoded, self::FIELD_COORDINATE_SYSTEM)) {
            if (is_array($decoded->coordinateSystem)) {
                $type->setCoordinateSystem(FHIRCodeableConcept::jsonUnserialize(reset($decoded->coordinateSystem), $config));
            } else {
                $type->setCoordinateSystem(FHIRCodeableConcept::jsonUnserialize($decoded->coordinateSystem, $config));
            }
        }
        if (isset($decoded->ordinalPosition)
            || isset($decoded->_ordinalPosition)
            || property_exists($decoded, self::FIELD_ORDINAL_POSITION)
            || property_exists($decoded, self::FIELD_ORDINAL_POSITION_EXT)) {
            $v = $decoded->_ordinalPosition ?? new \stdClass();
            $v->value = $decoded->ordinalPosition ?? null;
            $type->setOrdinalPosition(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($decoded->sequenceRange) || property_exists($decoded, self::FIELD_SEQUENCE_RANGE)) {
            if (is_array($decoded->sequenceRange)) {
                $type->setSequenceRange(FHIRRange::jsonUnserialize(reset($decoded->sequenceRange), $config));
            } else {
                $type->setSequenceRange(FHIRRange::jsonUnserialize($decoded->sequenceRange, $config));
            }
        }
        if (isset($decoded->startingSequence) || property_exists($decoded, self::FIELD_STARTING_SEQUENCE)) {
            if (is_array($decoded->startingSequence)) {
                $type->setStartingSequence(FHIRMolecularSequenceStartingSequence::jsonUnserialize(reset($decoded->startingSequence), $config));
            } else {
                $type->setStartingSequence(FHIRMolecularSequenceStartingSequence::jsonUnserialize($decoded->startingSequence, $config));
            }
        }
        if (isset($decoded->edit) || property_exists($decoded, self::FIELD_EDIT)) {
            if (is_object($decoded->edit)) {
                $vals = [$decoded->edit];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_EDIT, true);
            } else {
                $vals = $decoded->edit;
            }
            foreach($vals as $v) {
                $type->addEdit(FHIRMolecularSequenceEdit::jsonUnserialize($v, $config));
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
            if ($this->ordinalPosition->_nonValueFieldDefined()) {
                $ext = $this->ordinalPosition->jsonSerialize();
                unset($ext->value);
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
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_EDIT) && 1 === count($this->edit)) {
                $out->edit = $this->edit[0];
            } else {
                $out->edit = $this->edit;
            }
        }
        return $out;
    }
}