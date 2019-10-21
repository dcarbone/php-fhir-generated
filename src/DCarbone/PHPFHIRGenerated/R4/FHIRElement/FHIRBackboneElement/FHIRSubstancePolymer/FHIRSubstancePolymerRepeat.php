<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:05+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
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

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_AVERAGE_MOLECULAR_FORMULA = 'averageMolecularFormula';
    const FIELD_AVERAGE_MOLECULAR_FORMULA_EXT = '_averageMolecularFormula';
    const FIELD_NUMBER_OF_UNITS = 'numberOfUnits';
    const FIELD_NUMBER_OF_UNITS_EXT = '_numberOfUnits';
    const FIELD_REPEAT_UNIT = 'repeatUnit';
    const FIELD_REPEAT_UNIT_AMOUNT_TYPE = 'repeatUnitAmountType';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $averageMolecularFormula = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    private $numberOfUnits = null;
    /**
     * Todo.
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit[]
     */
    private $repeatUnit = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $repeatUnitAmountType = null;

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
        if (isset($data[self::FIELD_AVERAGE_MOLECULAR_FORMULA])) {
            $ext = (isset($data[self::FIELD_AVERAGE_MOLECULAR_FORMULA_EXT]) && is_array($data[self::FIELD_AVERAGE_MOLECULAR_FORMULA_EXT]))
                ? $data[self::FIELD_AVERAGE_MOLECULAR_FORMULA_EXT]
                : null;
            if ($data[self::FIELD_AVERAGE_MOLECULAR_FORMULA] instanceof FHIRString) {
                $this->setAverageMolecularFormula($data[self::FIELD_AVERAGE_MOLECULAR_FORMULA]);
            } elseif ($ext && is_scalar($data[self::FIELD_AVERAGE_MOLECULAR_FORMULA])) {
                $this->setAverageMolecularFormula(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_AVERAGE_MOLECULAR_FORMULA]] + $ext));
            } else {
                $this->setAverageMolecularFormula(new FHIRString($data[self::FIELD_AVERAGE_MOLECULAR_FORMULA]));
            }
        }
        if (isset($data[self::FIELD_NUMBER_OF_UNITS])) {
            $ext = (isset($data[self::FIELD_NUMBER_OF_UNITS_EXT]) && is_array($data[self::FIELD_NUMBER_OF_UNITS_EXT]))
                ? $data[self::FIELD_NUMBER_OF_UNITS_EXT]
                : null;
            if ($data[self::FIELD_NUMBER_OF_UNITS] instanceof FHIRInteger) {
                $this->setNumberOfUnits($data[self::FIELD_NUMBER_OF_UNITS]);
            } elseif ($ext && is_scalar($data[self::FIELD_NUMBER_OF_UNITS])) {
                $this->setNumberOfUnits(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_NUMBER_OF_UNITS]] + $ext));
            } else {
                $this->setNumberOfUnits(new FHIRInteger($data[self::FIELD_NUMBER_OF_UNITS]));
            }
        }
        if (isset($data[self::FIELD_REPEAT_UNIT])) {
            if (is_array($data[self::FIELD_REPEAT_UNIT])) {
                foreach($data[self::FIELD_REPEAT_UNIT] as $v) {
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
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
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $averageMolecularFormula
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat
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
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $numberOfUnits
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat
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
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $repeatUnitAmountType
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat
     */
    public function setRepeatUnitAmountType(FHIRCodeableConcept $repeatUnitAmountType = null)
    {
        $this->repeatUnitAmountType = $repeatUnitAmountType;
        return $this;
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
        if (isset($attributes->averageMolecularFormula)) {
            $type->setAverageMolecularFormula((string)$attributes->averageMolecularFormula);
        }
        if (isset($children->averageMolecularFormula)) {
            $type->setAverageMolecularFormula(FHIRString::xmlUnserialize($children->averageMolecularFormula));
        }
        if (isset($attributes->numberOfUnits)) {
            $type->setNumberOfUnits((string)$attributes->numberOfUnits);
        }
        if (isset($children->numberOfUnits)) {
            $type->setNumberOfUnits(FHIRInteger::xmlUnserialize($children->numberOfUnits));
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
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_AVERAGE_MOLECULAR_FORMULA_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getNumberOfUnits())) {
            $a[self::FIELD_NUMBER_OF_UNITS] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_NUMBER_OF_UNITS_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getRepeatUnit())) {
            $a[self::FIELD_REPEAT_UNIT] = $vs;
        }
        if (null !== ($v = $this->getRepeatUnitAmountType())) {
            $a[self::FIELD_REPEAT_UNIT_AMOUNT_TYPE] = $v;
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