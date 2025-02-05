<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 20:30+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Properties of a substance specific to it being a polymer.
 */
class FHIRSubstancePolymerRepeatUnit extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT_UNIT;

    /* class_default.php:50 */
    public const FIELD_UNIT = 'unit';
    public const FIELD_UNIT_EXT = '_unit';
    public const FIELD_ORIENTATION = 'orientation';
    public const FIELD_AMOUNT = 'amount';
    public const FIELD_AMOUNT_EXT = '_amount';
    public const FIELD_DEGREE_OF_POLYMERISATION = 'degreeOfPolymerisation';
    public const FIELD_STRUCTURAL_REPRESENTATION = 'structuralRepresentation';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_UNIT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_AMOUNT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structural repeat units are essential elements for defining polymers.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $unit;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The orientation of the polymerisation, e.g. head-tail, head-head, random.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $orientation;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of repeats of this unit.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $amount;
    /**
     * Properties of a substance specific to it being a polymer.
     *
     * Applies to homopolymer and block co-polymers where the degree of polymerisation
     * within a block can be described.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerDegreeOfPolymerisation[] 
     */
    protected array $degreeOfPolymerisation;
    /**
     * Properties of a substance specific to it being a polymer.
     *
     * A graphical structure for this SRU.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerStructuralRepresentation[] 
     */
    protected array $structuralRepresentation;

    /* constructor.php:61 */
    /**
     * FHIRSubstancePolymerRepeatUnit Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $unit
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $orientation
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $amount
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerDegreeOfPolymerisation[] $degreeOfPolymerisation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerStructuralRepresentation[] $structuralRepresentation
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $unit = null,
                                null|FHIRCodeableConcept $orientation = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $amount = null,
                                null|iterable $degreeOfPolymerisation = null,
                                null|iterable $structuralRepresentation = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $unit) {
            $this->setUnit($unit);
        }
        if (null !== $orientation) {
            $this->setOrientation($orientation);
        }
        if (null !== $amount) {
            $this->setAmount($amount);
        }
        if (null !== $degreeOfPolymerisation) {
            $this->setDegreeOfPolymerisation(...$degreeOfPolymerisation);
        }
        if (null !== $structuralRepresentation) {
            $this->setStructuralRepresentation(...$structuralRepresentation);
        }
    }

    /* class_default.php:146 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:172 */
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structural repeat units are essential elements for defining polymers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getUnit(): null|FHIRString
    {
        return $this->unit ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Structural repeat units are essential elements for defining polymers.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $unit
     * @return static
     */
    public function setUnit(null|string|FHIRStringPrimitive|FHIRString $unit): self
    {
        if (null === $unit) {
            unset($this->unit);
            return $this;
        }
        if (!($unit instanceof FHIRString)) {
            $unit = new FHIRString(value: $unit);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getOrientation(): null|FHIRCodeableConcept
    {
        return $this->orientation ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The orientation of the polymerisation, e.g. head-tail, head-head, random.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $orientation
     * @return static
     */
    public function setOrientation(null|FHIRCodeableConcept $orientation): self
    {
        if (null === $orientation) {
            unset($this->orientation);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger
     */
    public function getAmount(): null|FHIRInteger
    {
        return $this->amount ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Number of repeats of this unit.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $amount
     * @return static
     */
    public function setAmount(null|string|float|FHIRIntegerPrimitive|FHIRInteger $amount): self
    {
        if (null === $amount) {
            unset($this->amount);
            return $this;
        }
        if (!($amount instanceof FHIRInteger)) {
            $amount = new FHIRInteger(value: $amount);
        }
        $this->amount = $amount;
        return $this;
    }

    /**
     * Properties of a substance specific to it being a polymer.
     *
     * Applies to homopolymer and block co-polymers where the degree of polymerisation
     * within a block can be described.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerDegreeOfPolymerisation[]
     */
    public function getDegreeOfPolymerisation(): array
    {
        return $this->degreeOfPolymerisation ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerDegreeOfPolymerisation>
     */
    public function getDegreeOfPolymerisationIterator(): iterable
    {
        if (!isset($this->degreeOfPolymerisation)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->degreeOfPolymerisation);
    }

    /**
     * Properties of a substance specific to it being a polymer.
     *
     * Applies to homopolymer and block co-polymers where the degree of polymerisation
     * within a block can be described.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerDegreeOfPolymerisation $degreeOfPolymerisation
     * @return static
     */
    public function addDegreeOfPolymerisation(FHIRSubstancePolymerDegreeOfPolymerisation $degreeOfPolymerisation): self
    {
        if (!isset($this->degreeOfPolymerisation)) {
            $this->degreeOfPolymerisation = [];
        }
        $this->degreeOfPolymerisation[] = $degreeOfPolymerisation;
        return $this;
    }

    /**
     * Properties of a substance specific to it being a polymer.
     *
     * Applies to homopolymer and block co-polymers where the degree of polymerisation
     * within a block can be described.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerDegreeOfPolymerisation ...$degreeOfPolymerisation
     * @return static
     */
    public function setDegreeOfPolymerisation(FHIRSubstancePolymerDegreeOfPolymerisation ...$degreeOfPolymerisation): self
    {
        if ([] === $degreeOfPolymerisation) {
            unset($this->degreeOfPolymerisation);
            return $this;
        }
        $this->degreeOfPolymerisation = $degreeOfPolymerisation;
        return $this;
    }

    /**
     * Properties of a substance specific to it being a polymer.
     *
     * A graphical structure for this SRU.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerStructuralRepresentation[]
     */
    public function getStructuralRepresentation(): array
    {
        return $this->structuralRepresentation ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerStructuralRepresentation>
     */
    public function getStructuralRepresentationIterator(): iterable
    {
        if (!isset($this->structuralRepresentation)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->structuralRepresentation);
    }

    /**
     * Properties of a substance specific to it being a polymer.
     *
     * A graphical structure for this SRU.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerStructuralRepresentation $structuralRepresentation
     * @return static
     */
    public function addStructuralRepresentation(FHIRSubstancePolymerStructuralRepresentation $structuralRepresentation): self
    {
        if (!isset($this->structuralRepresentation)) {
            $this->structuralRepresentation = [];
        }
        $this->structuralRepresentation[] = $structuralRepresentation;
        return $this;
    }

    /**
     * Properties of a substance specific to it being a polymer.
     *
     * A graphical structure for this SRU.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerStructuralRepresentation ...$structuralRepresentation
     * @return static
     */
    public function setStructuralRepresentation(FHIRSubstancePolymerStructuralRepresentation ...$structuralRepresentation): self
    {
        if ([] === $structuralRepresentation) {
            unset($this->structuralRepresentation);
            return $this;
        }
        $this->structuralRepresentation = $structuralRepresentation;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubstancePolymerRepeatUnit)) {
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
            } else if (self::FIELD_UNIT === $cen) {
                $type->setUnit(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ORIENTATION === $cen) {
                $type->setOrientation(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AMOUNT === $cen) {
                $type->setAmount(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEGREE_OF_POLYMERISATION === $cen) {
                $type->addDegreeOfPolymerisation(FHIRSubstancePolymerDegreeOfPolymerisation::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STRUCTURAL_REPRESENTATION === $cen) {
                $type->addStructuralRepresentation(FHIRSubstancePolymerStructuralRepresentation::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_UNIT])) {
            if (isset($type->unit)) {
                $type->unit->setValue((string)$attributes[self::FIELD_UNIT]);
            } else {
                $type->setUnit((string)$attributes[self::FIELD_UNIT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_UNIT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_AMOUNT])) {
            if (isset($type->amount)) {
                $type->amount->setValue((string)$attributes[self::FIELD_AMOUNT]);
            } else {
                $type->setAmount((string)$attributes[self::FIELD_AMOUNT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_AMOUNT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->unit) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_UNIT]) {
            $xw->writeAttribute(self::FIELD_UNIT, $this->unit->_getValueAsString());
        }
        if (isset($this->amount) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_AMOUNT]) {
            $xw->writeAttribute(self::FIELD_AMOUNT, $this->amount->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->unit)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_UNIT]
                || $this->unit->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_UNIT);
            $this->unit->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_UNIT]);
            $xw->endElement();
        }
        if (isset($this->orientation)) {
            $xw->startElement(self::FIELD_ORIENTATION);
            $this->orientation->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->amount)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_AMOUNT]
                || $this->amount->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_AMOUNT);
            $this->amount->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_AMOUNT]);
            $xw->endElement();
        }
        if (isset($this->degreeOfPolymerisation)) {
            foreach ($this->degreeOfPolymerisation as $v) {
                $xw->startElement(self::FIELD_DEGREE_OF_POLYMERISATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->structuralRepresentation)) {
            foreach ($this->structuralRepresentation as $v) {
                $xw->startElement(self::FIELD_STRUCTURAL_REPRESENTATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubstancePolymerRepeatUnit)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->unit)
            || isset($json->_unit)
            || property_exists($json, self::FIELD_UNIT)
            || property_exists($json, self::FIELD_UNIT_EXT)) {
            $v = $json->_unit ?? new \stdClass();
            $v->value = $json->unit ?? null;
            $type->setUnit(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->orientation) || property_exists($json, self::FIELD_ORIENTATION)) {
            if (is_array($json->orientation)) {
                $type->setOrientation(FHIRCodeableConcept::jsonUnserialize(reset($json->orientation), $config));
            } else {
                $type->setOrientation(FHIRCodeableConcept::jsonUnserialize($json->orientation, $config));
            }
        }
        if (isset($json->amount)
            || isset($json->_amount)
            || property_exists($json, self::FIELD_AMOUNT)
            || property_exists($json, self::FIELD_AMOUNT_EXT)) {
            $v = $json->_amount ?? new \stdClass();
            $v->value = $json->amount ?? null;
            $type->setAmount(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($json->degreeOfPolymerisation) || property_exists($json, self::FIELD_DEGREE_OF_POLYMERISATION)) {
            if (is_object($json->degreeOfPolymerisation)) {
                $vals = [$json->degreeOfPolymerisation];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DEGREE_OF_POLYMERISATION, true);
            } else {
                $vals = $json->degreeOfPolymerisation;
            }
            foreach($vals as $v) {
                $type->addDegreeOfPolymerisation(FHIRSubstancePolymerDegreeOfPolymerisation::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->structuralRepresentation) || property_exists($json, self::FIELD_STRUCTURAL_REPRESENTATION)) {
            if (is_object($json->structuralRepresentation)) {
                $vals = [$json->structuralRepresentation];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_STRUCTURAL_REPRESENTATION, true);
            } else {
                $vals = $json->structuralRepresentation;
            }
            foreach($vals as $v) {
                $type->addStructuralRepresentation(FHIRSubstancePolymerStructuralRepresentation::jsonUnserialize($v, $config));
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
        if (isset($this->unit)) {
            if (null !== ($val = $this->unit->getValue())) {
                $out->unit = $val;
            }
            if ($this->unit->_nonValueFieldDefined()) {
                $ext = $this->unit->jsonSerialize();
                unset($ext->value);
                $out->_unit = $ext;
            }
        }
        if (isset($this->orientation)) {
            $out->orientation = $this->orientation;
        }
        if (isset($this->amount)) {
            if (null !== ($val = $this->amount->getValue())) {
                $out->amount = $val;
            }
            if ($this->amount->_nonValueFieldDefined()) {
                $ext = $this->amount->jsonSerialize();
                unset($ext->value);
                $out->_amount = $ext;
            }
        }
        if (isset($this->degreeOfPolymerisation) && [] !== $this->degreeOfPolymerisation) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_DEGREE_OF_POLYMERISATION) && 1 === count($this->degreeOfPolymerisation)) {
                $out->degreeOfPolymerisation = $this->degreeOfPolymerisation[0];
            } else {
                $out->degreeOfPolymerisation = $this->degreeOfPolymerisation;
            }
        }
        if (isset($this->structuralRepresentation) && [] !== $this->structuralRepresentation) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_STRUCTURAL_REPRESENTATION) && 1 === count($this->structuralRepresentation)) {
                $out->structuralRepresentation = $this->structuralRepresentation[0];
            } else {
                $out->structuralRepresentation = $this->structuralRepresentation;
            }
        }
        return $out;
    }
}