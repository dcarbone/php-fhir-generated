<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 27th, 2019 15:55+0000
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

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * Todo.
 *
 * Class FHIRSubstancePolymerRepeatUnit
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer
 */
class FHIRSubstancePolymerRepeatUnit extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER_DOT_REPEAT_UNIT;

    const FIELD_AMOUNT = 'amount';
    const FIELD_DEGREE_OF_POLYMERISATION = 'degreeOfPolymerisation';
    const FIELD_ORIENTATION_OF_POLYMERISATION = 'orientationOfPolymerisation';
    const FIELD_REPEAT_UNIT = 'repeatUnit';
    const FIELD_REPEAT_UNIT_EXT = '_repeatUnit';
    const FIELD_STRUCTURAL_REPRESENTATION = 'structuralRepresentation';

    /**
     * Chemical substances are a single substance type whose primary defining element
     * is the molecular structure. Chemical substances shall be defined on the basis of
     * their complete covalent molecular structure; the presence of a salt
     * (counter-ion) and/or solvates (water, alcohols) is also captured. Purity, grade,
     * physical form or particle size are not taken into account in the definition of a
     * chemical substance or in the assignment of a Substance ID.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount
     */
    private $amount = null;

    /**
     * Todo.
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerDegreeOfPolymerisation[]
     */
    private $degreeOfPolymerisation = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $orientationOfPolymerisation = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $repeatUnit = null;

    /**
     * Todo.
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerStructuralRepresentation[]
     */
    private $structuralRepresentation = [];

    /**
     * FHIRSubstancePolymerRepeatUnit Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstancePolymerRepeatUnit::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AMOUNT])) {
            if ($data[self::FIELD_AMOUNT] instanceof FHIRSubstanceAmount) {
                $this->setAmount($data[self::FIELD_AMOUNT]);
            } else {
                $this->setAmount(new FHIRSubstanceAmount($data[self::FIELD_AMOUNT]));
            }
        }
        if (isset($data[self::FIELD_DEGREE_OF_POLYMERISATION])) {
            if (is_array($data[self::FIELD_DEGREE_OF_POLYMERISATION])) {
                foreach($data[self::FIELD_DEGREE_OF_POLYMERISATION] as $v) {
                    if ($v instanceof FHIRSubstancePolymerDegreeOfPolymerisation) {
                        $this->addDegreeOfPolymerisation($v);
                    } else {
                        $this->addDegreeOfPolymerisation(new FHIRSubstancePolymerDegreeOfPolymerisation($v));
                    }
                }
            } else if ($data[self::FIELD_DEGREE_OF_POLYMERISATION] instanceof FHIRSubstancePolymerDegreeOfPolymerisation) {
                $this->addDegreeOfPolymerisation($data[self::FIELD_DEGREE_OF_POLYMERISATION]);
            } else {
                $this->addDegreeOfPolymerisation(new FHIRSubstancePolymerDegreeOfPolymerisation($data[self::FIELD_DEGREE_OF_POLYMERISATION]));
            }
        }
        if (isset($data[self::FIELD_ORIENTATION_OF_POLYMERISATION])) {
            if ($data[self::FIELD_ORIENTATION_OF_POLYMERISATION] instanceof FHIRCodeableConcept) {
                $this->setOrientationOfPolymerisation($data[self::FIELD_ORIENTATION_OF_POLYMERISATION]);
            } else {
                $this->setOrientationOfPolymerisation(new FHIRCodeableConcept($data[self::FIELD_ORIENTATION_OF_POLYMERISATION]));
            }
        }
        if (isset($data[self::FIELD_REPEAT_UNIT])) {
            $ext = (isset($data[self::FIELD_REPEAT_UNIT_EXT]) && is_array($data[self::FIELD_REPEAT_UNIT_EXT]))
                ? $data[self::FIELD_REPEAT_UNIT_EXT]
                : null;
            if ($data[self::FIELD_REPEAT_UNIT] instanceof FHIRString) {
                $this->setRepeatUnit($data[self::FIELD_REPEAT_UNIT]);
            } elseif ($ext && is_scalar($data[self::FIELD_REPEAT_UNIT])) {
                $this->setRepeatUnit(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_REPEAT_UNIT]] + $ext));
            } else {
                $this->setRepeatUnit(new FHIRString($data[self::FIELD_REPEAT_UNIT]));
            }
        }
        if (isset($data[self::FIELD_STRUCTURAL_REPRESENTATION])) {
            if (is_array($data[self::FIELD_STRUCTURAL_REPRESENTATION])) {
                foreach($data[self::FIELD_STRUCTURAL_REPRESENTATION] as $v) {
                    if ($v instanceof FHIRSubstancePolymerStructuralRepresentation) {
                        $this->addStructuralRepresentation($v);
                    } else {
                        $this->addStructuralRepresentation(new FHIRSubstancePolymerStructuralRepresentation($v));
                    }
                }
            } else if ($data[self::FIELD_STRUCTURAL_REPRESENTATION] instanceof FHIRSubstancePolymerStructuralRepresentation) {
                $this->addStructuralRepresentation($data[self::FIELD_STRUCTURAL_REPRESENTATION]);
            } else {
                $this->addStructuralRepresentation(new FHIRSubstancePolymerStructuralRepresentation($data[self::FIELD_STRUCTURAL_REPRESENTATION]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * Chemical substances are a single substance type whose primary defining element
     * is the molecular structure. Chemical substances shall be defined on the basis of
     * their complete covalent molecular structure; the presence of a salt
     * (counter-ion) and/or solvates (water, alcohols) is also captured. Purity, grade,
     * physical form or particle size are not taken into account in the definition of a
     * chemical substance or in the assignment of a Substance ID.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount
     */
    public function getAmount()
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount $amount
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit
     */
    public function setAmount(FHIRSubstanceAmount $amount = null)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerDegreeOfPolymerisation[]
     */
    public function getDegreeOfPolymerisation()
    {
        return $this->degreeOfPolymerisation;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerDegreeOfPolymerisation $degreeOfPolymerisation
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit
     */
    public function addDegreeOfPolymerisation(FHIRSubstancePolymerDegreeOfPolymerisation $degreeOfPolymerisation = null)
    {
        $this->degreeOfPolymerisation[] = $degreeOfPolymerisation;
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerDegreeOfPolymerisation[] $degreeOfPolymerisation
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit
     */
    public function setDegreeOfPolymerisation(array $degreeOfPolymerisation = [])
    {
        $this->degreeOfPolymerisation = [];
        if ([] === $degreeOfPolymerisation) {
            return $this;
        }
        foreach($degreeOfPolymerisation as $v) {
            if ($v instanceof FHIRSubstancePolymerDegreeOfPolymerisation) {
                $this->addDegreeOfPolymerisation($v);
            } else {
                $this->addDegreeOfPolymerisation(new FHIRSubstancePolymerDegreeOfPolymerisation($v));
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
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getOrientationOfPolymerisation()
    {
        return $this->orientationOfPolymerisation;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $orientationOfPolymerisation
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit
     */
    public function setOrientationOfPolymerisation(FHIRCodeableConcept $orientationOfPolymerisation = null)
    {
        $this->orientationOfPolymerisation = $orientationOfPolymerisation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getRepeatUnit()
    {
        return $this->repeatUnit;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $repeatUnit
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit
     */
    public function setRepeatUnit($repeatUnit = null)
    {
        if (null === $repeatUnit) {
            $this->repeatUnit = null;
            return $this;
        }
        if ($repeatUnit instanceof FHIRString) {
            $this->repeatUnit = $repeatUnit;
            return $this;
        }
        $this->repeatUnit = new FHIRString($repeatUnit);
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerStructuralRepresentation[]
     */
    public function getStructuralRepresentation()
    {
        return $this->structuralRepresentation;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerStructuralRepresentation $structuralRepresentation
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit
     */
    public function addStructuralRepresentation(FHIRSubstancePolymerStructuralRepresentation $structuralRepresentation = null)
    {
        $this->structuralRepresentation[] = $structuralRepresentation;
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerStructuralRepresentation[] $structuralRepresentation
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit
     */
    public function setStructuralRepresentation(array $structuralRepresentation = [])
    {
        $this->structuralRepresentation = [];
        if ([] === $structuralRepresentation) {
            return $this;
        }
        foreach($structuralRepresentation as $v) {
            if ($v instanceof FHIRSubstancePolymerStructuralRepresentation) {
                $this->addStructuralRepresentation($v);
            } else {
                $this->addStructuralRepresentation(new FHIRSubstancePolymerStructuralRepresentation($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRSubstancePolymerRepeatUnit::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubstancePolymerRepeatUnit::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRSubstancePolymerRepeatUnit);
        } elseif (!is_object($type) || !($type instanceof FHIRSubstancePolymerRepeatUnit)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubstancePolymerRepeatUnit::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->amount)) {
            $type->setAmount(FHIRSubstanceAmount::xmlUnserialize($children->amount));
        }
        if (isset($children->degreeOfPolymerisation)) {
            foreach($children->degreeOfPolymerisation as $child) {
                $type->addDegreeOfPolymerisation(FHIRSubstancePolymerDegreeOfPolymerisation::xmlUnserialize($child));
            }
        }
        if (isset($children->orientationOfPolymerisation)) {
            $type->setOrientationOfPolymerisation(FHIRCodeableConcept::xmlUnserialize($children->orientationOfPolymerisation));
        }
        if (isset($attributes->repeatUnit)) {
            $type->setRepeatUnit((string)$attributes->repeatUnit);
        }
        if (isset($children->repeatUnit)) {
            $type->setRepeatUnit(FHIRString::xmlUnserialize($children->repeatUnit));
        }
        if (isset($children->structuralRepresentation)) {
            foreach($children->structuralRepresentation as $child) {
                $type->addStructuralRepresentation(FHIRSubstancePolymerStructuralRepresentation::xmlUnserialize($child));
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<SubstancePolymerRepeatUnit xmlns="http://hl7.org/fhir"></SubstancePolymerRepeatUnit>');
        }
        if (null !== ($v = $this->getAmount())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AMOUNT));
        }
        if ([] !== ($vs = $this->getDegreeOfPolymerisation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DEGREE_OF_POLYMERISATION));
            }
        }
        if (null !== ($v = $this->getOrientationOfPolymerisation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORIENTATION_OF_POLYMERISATION));
        }
        if (null !== ($v = $this->getRepeatUnit())) {
            $sxe->addAttribute(self::FIELD_REPEAT_UNIT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_REPEAT_UNIT));
            }
        }
        if ([] !== ($vs = $this->getStructuralRepresentation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_STRUCTURAL_REPRESENTATION));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAmount())) {
            $a[self::FIELD_AMOUNT] = $v;
        }
        if ([] !== ($vs = $this->getDegreeOfPolymerisation())) {
            $a[self::FIELD_DEGREE_OF_POLYMERISATION] = $vs;
        }
        if (null !== ($v = $this->getOrientationOfPolymerisation())) {
            $a[self::FIELD_ORIENTATION_OF_POLYMERISATION] = $v;
        }
        if (null !== ($v = $this->getRepeatUnit())) {
            $a[self::FIELD_REPEAT_UNIT] = (string)$v;
            $a[self::FIELD_REPEAT_UNIT_EXT] = $v;
        }
        if ([] !== ($vs = $this->getStructuralRepresentation())) {
            $a[self::FIELD_STRUCTURAL_REPRESENTATION] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}