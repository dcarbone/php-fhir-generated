<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * Todo.
 *
 * Class FHIRSubstancePolymerRepeat
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer
 */
class FHIRSubstancePolymerRepeat extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'SubstancePolymer.Repeat';

    /**
     * Todo.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $averageMolecularFormula = null;

    /**
     * Todo.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $numberOfUnits = null;

    /**
     * Todo.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit
     */
    public $repeatUnit = null;

    /**
     * Todo.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $repeatUnitAmountType = null;

    /**
     * FHIRSubstancePolymerRepeat Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['averageMolecularFormula'])) {
                $this->setAverageMolecularFormula($data['averageMolecularFormula']);
            }
            if (isset($data['numberOfUnits'])) {
                $this->setNumberOfUnits($data['numberOfUnits']);
            }
            if (isset($data['repeatUnit'])) {
                $this->setRepeatUnit($data['repeatUnit']);
            }
            if (isset($data['repeatUnitAmountType'])) {
                $this->setRepeatUnitAmountType($data['repeatUnitAmountType']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Todo.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setAverageMolecularFormula($averageMolecularFormula)
    {
        if (null === $averageMolecularFormula) {
            return $this; 
        }
        if (is_scalar($averageMolecularFormula)) {
            $averageMolecularFormula = new FHIRString($averageMolecularFormula);
        }
        if (!($averageMolecularFormula instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstancePolymerRepeat::setAverageMolecularFormula - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($averageMolecularFormula)
            ));
        }
        $this->averageMolecularFormula = $averageMolecularFormula;
        return $this;
    }

    /**
     * Todo.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAverageMolecularFormula()
    {
        return $this->averageMolecularFormula;
    }


    /**
     * Todo.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setNumberOfUnits($numberOfUnits)
    {
        if (null === $numberOfUnits) {
            return $this; 
        }
        if (is_scalar($numberOfUnits)) {
            $numberOfUnits = new FHIRInteger($numberOfUnits);
        }
        if (!($numberOfUnits instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstancePolymerRepeat::setNumberOfUnits - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($numberOfUnits)
            ));
        }
        $this->numberOfUnits = $numberOfUnits;
        return $this;
    }

    /**
     * Todo.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getNumberOfUnits()
    {
        return $this->numberOfUnits;
    }


    /**
     * Todo.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit
     * @return $this
     */
    public function setRepeatUnit(FHIRSubstancePolymerRepeatUnit $repeatUnit = null)
    {
        if (null === $repeatUnit) {
            return $this; 
        }
        $this->repeatUnit = $repeatUnit;
        return $this;
    }

    /**
     * Todo.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit
     */
    public function getRepeatUnit()
    {
        return $this->repeatUnit;
    }


    /**
     * Todo.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setRepeatUnitAmountType(FHIRCodeableConcept $repeatUnitAmountType = null)
    {
        if (null === $repeatUnitAmountType) {
            return $this; 
        }
        $this->repeatUnitAmountType = $repeatUnitAmountType;
        return $this;
    }

    /**
     * Todo.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRepeatUnitAmountType()
    {
        return $this->repeatUnitAmountType;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAverageMolecularFormula())) {
            $a['averageMolecularFormula'] = $v;
        }
        if (null !== ($v = $this->getNumberOfUnits())) {
            $a['numberOfUnits'] = $v;
        }
        if (null !== ($v = $this->getRepeatUnit())) {
            $a['repeatUnit'] = $v;
        }
        if (null !== ($v = $this->getRepeatUnitAmountType())) {
            $a['repeatUnitAmountType'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<SubstancePolymerRepeat xmlns="http://hl7.org/fhir"></SubstancePolymerRepeat>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}