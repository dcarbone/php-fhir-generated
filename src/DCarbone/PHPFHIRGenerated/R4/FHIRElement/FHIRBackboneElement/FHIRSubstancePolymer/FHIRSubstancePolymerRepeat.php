<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Todo.
 *
 * Class FHIRSubstancePolymerRepeat
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer
 */
class FHIRSubstancePolymerRepeat extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT;
    const FIELD_AVERAGE_MOLECULAR_FORMULA = 'averageMolecularFormula';
    const FIELD_AVERAGE_MOLECULAR_FORMULA_EXT = '_averageMolecularFormula';
    const FIELD_NUMBER_OF_UNITS = 'numberOfUnits';
    const FIELD_NUMBER_OF_UNITS_EXT = '_numberOfUnits';
    const FIELD_REPEAT_UNIT = 'repeatUnit';
    const FIELD_REPEAT_UNIT_AMOUNT_TYPE = 'repeatUnitAmountType';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $averageMolecularFormula = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    protected $numberOfUnits = null;

    /**
     * Todo.
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit[]
     */
    protected $repeatUnit = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $repeatUnitAmountType = null;

    /**
     * Validation map for fields in type SubstancePolymer.Repeat
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRSubstancePolymerRepeat Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstancePolymerRepeat::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AVERAGE_MOLECULAR_FORMULA]) || isset($data[self::FIELD_AVERAGE_MOLECULAR_FORMULA_EXT])) {
            if (isset($data[self::FIELD_AVERAGE_MOLECULAR_FORMULA])) {
                $value = $data[self::FIELD_AVERAGE_MOLECULAR_FORMULA];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_AVERAGE_MOLECULAR_FORMULA_EXT]) && is_array($data[self::FIELD_AVERAGE_MOLECULAR_FORMULA_EXT])) {
                $ext = $data[self::FIELD_AVERAGE_MOLECULAR_FORMULA_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setAverageMolecularFormula($value);
                } else if (is_array($value)) {
                    $this->setAverageMolecularFormula(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setAverageMolecularFormula(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAverageMolecularFormula(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_NUMBER_OF_UNITS]) || isset($data[self::FIELD_NUMBER_OF_UNITS_EXT])) {
            if (isset($data[self::FIELD_NUMBER_OF_UNITS])) {
                $value = $data[self::FIELD_NUMBER_OF_UNITS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NUMBER_OF_UNITS_EXT]) && is_array($data[self::FIELD_NUMBER_OF_UNITS_EXT])) {
                $ext = $data[self::FIELD_NUMBER_OF_UNITS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setNumberOfUnits($value);
                } else if (is_array($value)) {
                    $this->setNumberOfUnits(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setNumberOfUnits(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setNumberOfUnits(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_REPEAT_UNIT])) {
            if (is_array($data[self::FIELD_REPEAT_UNIT])) {
                foreach($data[self::FIELD_REPEAT_UNIT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstancePolymerRepeatUnit) {
                        $this->addRepeatUnit($v);
                    } else {
                        $this->addRepeatUnit(new FHIRSubstancePolymerRepeatUnit($v));
                    }
                }
            } else if ($data[self::FIELD_REPEAT_UNIT] instanceof FHIRSubstancePolymerRepeatUnit) {
                $this->addRepeatUnit($data[self::FIELD_REPEAT_UNIT]);
            } else {
                $this->addRepeatUnit(new FHIRSubstancePolymerRepeatUnit($data[self::FIELD_REPEAT_UNIT]));
            }
        }
        if (isset($data[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE])) {
            if ($data[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE] instanceof FHIRCodeableConcept) {
                $this->setRepeatUnitAmountType($data[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE]);
            } else {
                $this->setRepeatUnitAmountType(new FHIRCodeableConcept($data[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<SubstancePolymerRepeat{$xmlns}></SubstancePolymerRepeat>";
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
    public function getAverageMolecularFormula()
    {
        return $this->averageMolecularFormula;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $averageMolecularFormula
     * @return static
     */
    public function setAverageMolecularFormula($averageMolecularFormula = null)
    {
        if (null === $averageMolecularFormula) {
            $this->averageMolecularFormula = null;
            return $this;
        }
        if ($averageMolecularFormula instanceof FHIRString) {
            $this->averageMolecularFormula = $averageMolecularFormula;
            return $this;
        }
        $this->averageMolecularFormula = new FHIRString($averageMolecularFormula);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getNumberOfUnits()
    {
        return $this->numberOfUnits;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $numberOfUnits
     * @return static
     */
    public function setNumberOfUnits($numberOfUnits = null)
    {
        if (null === $numberOfUnits) {
            $this->numberOfUnits = null;
            return $this;
        }
        if ($numberOfUnits instanceof FHIRInteger) {
            $this->numberOfUnits = $numberOfUnits;
            return $this;
        }
        $this->numberOfUnits = new FHIRInteger($numberOfUnits);
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit[]
     */
    public function getRepeatUnit()
    {
        return $this->repeatUnit;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit $repeatUnit
     * @return static
     */
    public function addRepeatUnit(FHIRSubstancePolymerRepeatUnit $repeatUnit = null)
    {
        $this->repeatUnit[] = $repeatUnit;
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit[] $repeatUnit
     * @return static
     */
    public function setRepeatUnit(array $repeatUnit = [])
    {
        $this->repeatUnit = [];
        if ([] === $repeatUnit) {
            return $this;
        }
        foreach($repeatUnit as $v) {
            if ($v instanceof FHIRSubstancePolymerRepeatUnit) {
                $this->addRepeatUnit($v);
            } else {
                $this->addRepeatUnit(new FHIRSubstancePolymerRepeatUnit($v));
            }
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getRepeatUnitAmountType()
    {
        return $this->repeatUnitAmountType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $repeatUnitAmountType
     * @return static
     */
    public function setRepeatUnitAmountType(FHIRCodeableConcept $repeatUnitAmountType = null)
    {
        $this->repeatUnitAmountType = $repeatUnitAmountType;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getAverageMolecularFormula())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AVERAGE_MOLECULAR_FORMULA] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNumberOfUnits())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NUMBER_OF_UNITS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRepeatUnit())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REPEAT_UNIT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getRepeatUnitAmountType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_NUMBER_OF_UNITS])) {
            $v = $this->getNumberOfUnits();
            foreach($validationRules[self::FIELD_NUMBER_OF_UNITS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT, self::FIELD_NUMBER_OF_UNITS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUMBER_OF_UNITS])) {
                        $errs[self::FIELD_NUMBER_OF_UNITS] = [];
                    }
                    $errs[self::FIELD_NUMBER_OF_UNITS][$rule] = $err;
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRSubstancePolymerRepeat::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubstancePolymerRepeat::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSubstancePolymerRepeat;
        } elseif (!is_object($type) || !($type instanceof FHIRSubstancePolymerRepeat)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubstancePolymerRepeat::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->averageMolecularFormula)) {
            $type->setAverageMolecularFormula(FHIRString::xmlUnserialize($children->averageMolecularFormula));
        }
        if (isset($attributes->averageMolecularFormula)) {
            $pt = $type->getAverageMolecularFormula();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->averageMolecularFormula);
            } else {
                $type->setAverageMolecularFormula((string)$attributes->averageMolecularFormula);
            }
        }
        if (isset($children->numberOfUnits)) {
            $type->setNumberOfUnits(FHIRInteger::xmlUnserialize($children->numberOfUnits));
        }
        if (isset($attributes->numberOfUnits)) {
            $pt = $type->getNumberOfUnits();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->numberOfUnits);
            } else {
                $type->setNumberOfUnits((string)$attributes->numberOfUnits);
            }
        }
        if (isset($children->repeatUnit)) {
            foreach($children->repeatUnit as $child) {
                $type->addRepeatUnit(FHIRSubstancePolymerRepeatUnit::xmlUnserialize($child));
            }
        }
        if (isset($children->repeatUnitAmountType)) {
            $type->setRepeatUnitAmountType(FHIRCodeableConcept::xmlUnserialize($children->repeatUnitAmountType));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getAverageMolecularFormula())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AVERAGE_MOLECULAR_FORMULA, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getNumberOfUnits())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NUMBER_OF_UNITS, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getRepeatUnit())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REPEAT_UNIT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getRepeatUnitAmountType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REPEAT_UNIT_AMOUNT_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAverageMolecularFormula())) {
            $a[self::FIELD_AVERAGE_MOLECULAR_FORMULA] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_AVERAGE_MOLECULAR_FORMULA_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getNumberOfUnits())) {
            $a[self::FIELD_NUMBER_OF_UNITS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_NUMBER_OF_UNITS_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getRepeatUnit())) {
            $a[self::FIELD_REPEAT_UNIT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REPEAT_UNIT][] = $v;
            }
        }
        if (null !== ($v = $this->getRepeatUnitAmountType())) {
            $a[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE] = $v;
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}