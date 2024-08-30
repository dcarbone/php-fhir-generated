<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 30th, 2024 22:24+0000
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
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString;
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
 * Class FHIRSubstancePolymerRepeat
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer
 */
class FHIRSubstancePolymerRepeat extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT;

    const FIELD_AVERAGE_MOLECULAR_FORMULA = 'averageMolecularFormula';
    const FIELD_AVERAGE_MOLECULAR_FORMULA_EXT = '_averageMolecularFormula';
    const FIELD_REPEAT_UNIT_AMOUNT_TYPE = 'repeatUnitAmountType';
    const FIELD_REPEAT_UNIT = 'repeatUnit';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A representation of an (average) molecular formula from a polymer.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $averageMolecularFormula = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How the quantitative amount of Structural Repeat Units is captured (e.g. Exact,
     * Numeric, Average).
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $repeatUnitAmountType = null;
    /**
     * Properties of a substance specific to it being a polymer.
     *
     * An SRU - Structural Repeat Unit.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit[]
     */
    protected null|array $repeatUnit = [];

    /**
     * Validation map for fields in type SubstancePolymer.Repeat
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRSubstancePolymerRepeat Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_AVERAGE_MOLECULAR_FORMULA, $data) || array_key_exists(self::FIELD_AVERAGE_MOLECULAR_FORMULA_EXT, $data)) {
            $value = $data[self::FIELD_AVERAGE_MOLECULAR_FORMULA] ?? null;
            $ext = (isset($data[self::FIELD_AVERAGE_MOLECULAR_FORMULA_EXT]) && is_array($data[self::FIELD_AVERAGE_MOLECULAR_FORMULA_EXT])) ? $data[self::FIELD_AVERAGE_MOLECULAR_FORMULA_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setAverageMolecularFormula($value);
                } else if (is_array($value)) {
                    $this->setAverageMolecularFormula(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setAverageMolecularFormula(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAverageMolecularFormula(new FHIRString($ext));
            } else {
                $this->setAverageMolecularFormula(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_REPEAT_UNIT_AMOUNT_TYPE, $data)) {
            if ($data[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE] instanceof FHIRCodeableConcept) {
                $this->setRepeatUnitAmountType($data[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE]);
            } else {
                $this->setRepeatUnitAmountType(new FHIRCodeableConcept($data[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_REPEAT_UNIT, $data)) {
            if (is_array($data[self::FIELD_REPEAT_UNIT])) {
                foreach($data[self::FIELD_REPEAT_UNIT] as $v) {
                    if ($v instanceof FHIRSubstancePolymerRepeatUnit) {
                        $this->addRepeatUnit($v);
                    } else {
                        $this->addRepeatUnit(new FHIRSubstancePolymerRepeatUnit($v));
                    }
                }
            } elseif ($data[self::FIELD_REPEAT_UNIT] instanceof FHIRSubstancePolymerRepeatUnit) {
                $this->addRepeatUnit($data[self::FIELD_REPEAT_UNIT]);
            } else {
                $this->addRepeatUnit(new FHIRSubstancePolymerRepeatUnit($data[self::FIELD_REPEAT_UNIT]));
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
     * A representation of an (average) molecular formula from a polymer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getAverageMolecularFormula(): null|FHIRString
    {
        return $this->averageMolecularFormula;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A representation of an (average) molecular formula from a polymer.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $averageMolecularFormula
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setAverageMolecularFormula(null|string|FHIRStringPrimitive|FHIRString $averageMolecularFormula = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $averageMolecularFormula && !($averageMolecularFormula instanceof FHIRString)) {
            $averageMolecularFormula = new FHIRString($averageMolecularFormula);
        }
        $this->_trackValueSet($this->averageMolecularFormula, $averageMolecularFormula);
        if (!isset($this->_xmlLocations[self::FIELD_AVERAGE_MOLECULAR_FORMULA])) {
            $this->_xmlLocations[self::FIELD_AVERAGE_MOLECULAR_FORMULA] = [];
        }
        $this->_xmlLocations[self::FIELD_AVERAGE_MOLECULAR_FORMULA][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getRepeatUnitAmountType(): null|FHIRCodeableConcept
    {
        return $this->repeatUnitAmountType;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $repeatUnitAmountType
     * @return static
     */
    public function setRepeatUnitAmountType(null|FHIRCodeableConcept $repeatUnitAmountType = null): self
    {
        if (null === $repeatUnitAmountType) {
            $repeatUnitAmountType = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->repeatUnitAmountType, $repeatUnitAmountType);
        $this->repeatUnitAmountType = $repeatUnitAmountType;
        return $this;
    }

    /**
     * Properties of a substance specific to it being a polymer.
     *
     * An SRU - Structural Repeat Unit.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit[]
     */
    public function getRepeatUnit(): null|array
    {
        return $this->repeatUnit;
    }

    /**
     * Properties of a substance specific to it being a polymer.
     *
     * An SRU - Structural Repeat Unit.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit $repeatUnit
     * @return static
     */
    public function addRepeatUnit(null|FHIRSubstancePolymerRepeatUnit $repeatUnit = null): self
    {
        if (null === $repeatUnit) {
            $repeatUnit = new FHIRSubstancePolymerRepeatUnit();
        }
        $this->_trackValueAdded();
        $this->repeatUnit[] = $repeatUnit;
        return $this;
    }

    /**
     * Properties of a substance specific to it being a polymer.
     *
     * An SRU - Structural Repeat Unit.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit ...$repeatUnit
     * @return static
     */
    public function setRepeatUnit(FHIRSubstancePolymerRepeatUnit ...$repeatUnit): self
    {
        if ([] !== $this->repeatUnit) {
            $this->_trackValuesRemoved(count($this->repeatUnit));
            $this->repeatUnit = [];
        }
        if ([] === $repeatUnit) {
            return $this;
        }
        foreach($repeatUnit as $v) {
            $this->addRepeatUnit($v);
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
        if (null !== ($v = $this->getAverageMolecularFormula())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AVERAGE_MOLECULAR_FORMULA] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRepeatUnitAmountType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRepeatUnit())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REPEAT_UNIT, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AVERAGE_MOLECULAR_FORMULA])) {
            $v = $this->getAverageMolecularFormula();
            foreach($validationRules[self::FIELD_AVERAGE_MOLECULAR_FORMULA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT, self::FIELD_AVERAGE_MOLECULAR_FORMULA, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT, self::FIELD_REPEAT_UNIT_AMOUNT_TYPE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT, self::FIELD_REPEAT_UNIT, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat
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
        } else if (!($type instanceof FHIRSubstancePolymerRepeat)) {
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
            if (self::FIELD_AVERAGE_MOLECULAR_FORMULA === $childName) {
                $type->setAverageMolecularFormula(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_REPEAT_UNIT_AMOUNT_TYPE === $childName) {
                $type->setRepeatUnitAmountType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REPEAT_UNIT === $childName) {
                $type->addRepeatUnit(FHIRSubstancePolymerRepeatUnit::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_AVERAGE_MOLECULAR_FORMULA])) {
            $pt = $type->getAverageMolecularFormula();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_AVERAGE_MOLECULAR_FORMULA], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setAverageMolecularFormula((string)$attributes[self::FIELD_AVERAGE_MOLECULAR_FORMULA], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'SubstancePolymerRepeat', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_AVERAGE_MOLECULAR_FORMULA] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getAverageMolecularFormula())) {
            $xw->writeAttribute(self::FIELD_AVERAGE_MOLECULAR_FORMULA, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_xmlLocations[self::FIELD_AVERAGE_MOLECULAR_FORMULA] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getAverageMolecularFormula())) {
            $xw->startElement(self::FIELD_AVERAGE_MOLECULAR_FORMULA);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getRepeatUnitAmountType())) {
            $xw->startElement(self::FIELD_REPEAT_UNIT_AMOUNT_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getRepeatUnit() as $v) {
            $xw->startElement(self::FIELD_REPEAT_UNIT);
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
        if (null !== ($v = $this->getAverageMolecularFormula())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_AVERAGE_MOLECULAR_FORMULA} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_AVERAGE_MOLECULAR_FORMULA_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRepeatUnitAmountType())) {
            $out->{self::FIELD_REPEAT_UNIT_AMOUNT_TYPE} = $v;
        }
        if ([] !== ($vs = $this->getRepeatUnit())) {
            $out->{self::FIELD_REPEAT_UNIT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_REPEAT_UNIT}[] = $v;
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