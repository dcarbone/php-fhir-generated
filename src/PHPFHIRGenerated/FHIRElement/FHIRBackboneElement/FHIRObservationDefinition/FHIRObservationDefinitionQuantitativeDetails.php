<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition;

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
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRDecimal;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;

/**
 * Set of definitional characteristics for a kind of observation or measurement produced or consumed by an orderable health care service.
 *
 * Class FHIRObservationDefinitionQuantitativeDetails
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition
 */
class FHIRObservationDefinitionQuantitativeDetails extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ObservationDefinition.QuantitativeDetails';

    /**
     * Factor for converting value expressed with SI unit to value expressed with customary unit.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $conversionFactor = null;

    /**
     * Customary unit used to report quantitative results of this observation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $customaryUnit = null;

    /**
     * Number of digits after decimal separator when the results of this observation are of type Quantity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $decimalPrecision = null;

    /**
     * SI unit used to report quantitative results of this observation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $unit = null;

    /**
     * FHIRObservationDefinitionQuantitativeDetails Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['conversionFactor'])) {
                $this->setConversionFactor($data['conversionFactor']);
            }
            if (isset($data['customaryUnit'])) {
                $this->setCustomaryUnit($data['customaryUnit']);
            }
            if (isset($data['decimalPrecision'])) {
                $this->setDecimalPrecision($data['decimalPrecision']);
            }
            if (isset($data['unit'])) {
                $this->setUnit($data['unit']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Factor for converting value expressed with SI unit to value expressed with customary unit.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setConversionFactor($conversionFactor)
    {
        if (null === $conversionFactor) {
            return $this; 
        }
        if (is_scalar($conversionFactor)) {
            $conversionFactor = new FHIRDecimal($conversionFactor);
        }
        if (!($conversionFactor instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRObservationDefinitionQuantitativeDetails::setConversionFactor - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($conversionFactor)
            ));
        }
        $this->conversionFactor = $conversionFactor;
        return $this;
    }

    /**
     * Factor for converting value expressed with SI unit to value expressed with customary unit.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getConversionFactor()
    {
        return $this->conversionFactor;
    }


    /**
     * Customary unit used to report quantitative results of this observation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setCustomaryUnit(FHIRCoding $customaryUnit = null)
    {
        if (null === $customaryUnit) {
            return $this; 
        }
        $this->customaryUnit = $customaryUnit;
        return $this;
    }

    /**
     * Customary unit used to report quantitative results of this observation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getCustomaryUnit()
    {
        return $this->customaryUnit;
    }


    /**
     * Number of digits after decimal separator when the results of this observation are of type Quantity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setDecimalPrecision($decimalPrecision)
    {
        if (null === $decimalPrecision) {
            return $this; 
        }
        if (is_scalar($decimalPrecision)) {
            $decimalPrecision = new FHIRInteger($decimalPrecision);
        }
        if (!($decimalPrecision instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRObservationDefinitionQuantitativeDetails::setDecimalPrecision - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($decimalPrecision)
            ));
        }
        $this->decimalPrecision = $decimalPrecision;
        return $this;
    }

    /**
     * Number of digits after decimal separator when the results of this observation are of type Quantity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getDecimalPrecision()
    {
        return $this->decimalPrecision;
    }


    /**
     * SI unit used to report quantitative results of this observation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setUnit(FHIRCoding $unit = null)
    {
        if (null === $unit) {
            return $this; 
        }
        $this->unit = $unit;
        return $this;
    }

    /**
     * SI unit used to report quantitative results of this observation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getUnit()
    {
        return $this->unit;
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
        if (null !== ($v = $this->getConversionFactor())) {
            $a['conversionFactor'] = $v;
        }
        if (null !== ($v = $this->getCustomaryUnit())) {
            $a['customaryUnit'] = $v;
        }
        if (null !== ($v = $this->getDecimalPrecision())) {
            $a['decimalPrecision'] = $v;
        }
        if (null !== ($v = $this->getUnit())) {
            $a['unit'] = $v;
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
            $sxe = new \SimpleXMLElement('<ObservationDefinitionQuantitativeDetails xmlns="http://hl7.org/fhir"></ObservationDefinitionQuantitativeDetails>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}