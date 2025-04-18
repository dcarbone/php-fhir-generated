<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer;

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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Properties of a substance specific to it being a polymer.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRSubstancePolymerRepeat extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT;

    /* class_default.php:56 */
    public const FIELD_AVERAGE_MOLECULAR_FORMULA = 'averageMolecularFormula';
    public const FIELD_AVERAGE_MOLECULAR_FORMULA_EXT = '_averageMolecularFormula';
    public const FIELD_REPEAT_UNIT_AMOUNT_TYPE = 'repeatUnitAmountType';
    public const FIELD_REPEAT_UNIT = 'repeatUnit';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_AVERAGE_MOLECULAR_FORMULA => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A representation of an (average) molecular formula from a polymer.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $averageMolecularFormula;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How the quantitative amount of Structural Repeat Units is captured (e.g. Exact,
     * Numeric, Average).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $repeatUnitAmountType;
    /**
     * Properties of a substance specific to it being a polymer.
     *
     * An SRU - Structural Repeat Unit.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit> 
     */
    #[FHIRSubstancePolymerRepeatUnit]
    protected array $repeatUnit;

    /* constructor.php:61 */
    /**
     * FHIRSubstancePolymerRepeat Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $averageMolecularFormula
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $repeatUnitAmountType
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit> $repeatUnit
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $averageMolecularFormula = null,
                                null|FHIRCodeableConcept $repeatUnitAmountType = null,
                                null|iterable $repeatUnit = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
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

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A representation of an (average) molecular formula from a polymer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getAverageMolecularFormula(): null|FHIRString
    {
        return $this->averageMolecularFormula ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A representation of an (average) molecular formula from a polymer.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $averageMolecularFormula
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
     * How the quantitative amount of Structural Repeat Units is captured (e.g. Exact,
     * Numeric, Average).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
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
     * How the quantitative amount of Structural Repeat Units is captured (e.g. Exact,
     * Numeric, Average).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $repeatUnitAmountType
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
     * Properties of a substance specific to it being a polymer.
     *
     * An SRU - Structural Repeat Unit.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit>
     */
    public function getRepeatUnit(): array
    {
        return $this->repeatUnit ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit>
     */
    public function getRepeatUnitIterator(): iterable
    {
        if (!isset($this->repeatUnit)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->repeatUnit);
    }

    /**
     * Properties of a substance specific to it being a polymer.
     *
     * An SRU - Structural Repeat Unit.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit $repeatUnit
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
     * Properties of a substance specific to it being a polymer.
     *
     * An SRU - Structural Repeat Unit.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit ...$repeatUnit
     * @return static
     */
    public function setRepeatUnit(FHIRSubstancePolymerRepeatUnit ...$repeatUnit): self
    {
        if ([] === $repeatUnit) {
            unset($this->repeatUnit);
            return $this;
        }
        $this->repeatUnit = $repeatUnit;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
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
            } else if (self::FIELD_AVERAGE_MOLECULAR_FORMULA === $cen) {
                $type->setAverageMolecularFormula(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REPEAT_UNIT_AMOUNT_TYPE === $cen) {
                $type->setRepeatUnitAmountType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REPEAT_UNIT === $cen) {
                $type->addRepeatUnit(FHIRSubstancePolymerRepeatUnit::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_AVERAGE_MOLECULAR_FORMULA])) {
            if (isset($type->averageMolecularFormula)) {
                $type->averageMolecularFormula->setValue((string)$attributes[self::FIELD_AVERAGE_MOLECULAR_FORMULA]);
            } else {
                $type->setAverageMolecularFormula((string)$attributes[self::FIELD_AVERAGE_MOLECULAR_FORMULA]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_AVERAGE_MOLECULAR_FORMULA, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->averageMolecularFormula) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_AVERAGE_MOLECULAR_FORMULA]) {
            $xw->writeAttribute(self::FIELD_AVERAGE_MOLECULAR_FORMULA, $this->averageMolecularFormula->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->averageMolecularFormula)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_AVERAGE_MOLECULAR_FORMULA]
                || $this->averageMolecularFormula->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_AVERAGE_MOLECULAR_FORMULA);
            $this->averageMolecularFormula->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_AVERAGE_MOLECULAR_FORMULA]);
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
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
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
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->averageMolecularFormula)
            || isset($decoded->_averageMolecularFormula)
            || property_exists($decoded, self::FIELD_AVERAGE_MOLECULAR_FORMULA)
            || property_exists($decoded, self::FIELD_AVERAGE_MOLECULAR_FORMULA_EXT)) {
            $v = $decoded->_averageMolecularFormula ?? new \stdClass();
            $v->value = $decoded->averageMolecularFormula ?? null;
            $type->setAverageMolecularFormula(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->repeatUnitAmountType) || property_exists($decoded, self::FIELD_REPEAT_UNIT_AMOUNT_TYPE)) {
            if (is_array($decoded->repeatUnitAmountType)) {
                $type->setRepeatUnitAmountType(FHIRCodeableConcept::jsonUnserialize(reset($decoded->repeatUnitAmountType), $config));
            } else {
                $type->setRepeatUnitAmountType(FHIRCodeableConcept::jsonUnserialize($decoded->repeatUnitAmountType, $config));
            }
        }
        if (isset($decoded->repeatUnit) || property_exists($decoded, self::FIELD_REPEAT_UNIT)) {
            if (is_object($decoded->repeatUnit)) {
                $vals = [$decoded->repeatUnit];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_REPEAT_UNIT, true);
            } else {
                $vals = $decoded->repeatUnit;
            }
            foreach($vals as $v) {
                $type->addRepeatUnit(FHIRSubstancePolymerRepeatUnit::jsonUnserialize($v, $config));
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
        if (isset($this->averageMolecularFormula)) {
            if (null !== ($val = $this->averageMolecularFormula->getValue())) {
                $out->averageMolecularFormula = $val;
            }
            if ($this->averageMolecularFormula->_nonValueFieldDefined()) {
                $ext = $this->averageMolecularFormula->jsonSerialize();
                unset($ext->value);
                $out->_averageMolecularFormula = $ext;
            }
        }
        if (isset($this->repeatUnitAmountType)) {
            $out->repeatUnitAmountType = $this->repeatUnitAmountType;
        }
        if (isset($this->repeatUnit) && [] !== $this->repeatUnit) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_REPEAT_UNIT) && 1 === count($this->repeatUnit)) {
                $out->repeatUnit = $this->repeatUnit[0];
            } else {
                $out->repeatUnit = $this->repeatUnit;
            }
        }
        return $out;
    }
}