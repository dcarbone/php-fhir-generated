<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription;

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
use PHPFHIRGenerated\FHIRElement\FHIRDecimal;
use PHPFHIRGenerated\FHIRElement\FHIRVisionBase;

/**
 * An authorization for the supply of glasses and/or contact lenses to a patient.
 *
 * Class FHIRVisionPrescriptionPrism
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription
 */
class FHIRVisionPrescriptionPrism extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'VisionPrescription.Prism';

    /**
     * Amount of prism to compensate for eye alignment in fractional units.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $amount = null;

    /**
     * The relative base, or reference lens edge, for the prism.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRVisionBase
     */
    public $base = null;

    /**
     * FHIRVisionPrescriptionPrism Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['amount'])) {
                $this->setAmount($data['amount']);
            }
            if (isset($data['base'])) {
                $this->setBase($data['base']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionPrism::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Amount of prism to compensate for eye alignment in fractional units.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setAmount($amount)
    {
        if (null === $amount) {
            return $this; 
        }
        if (is_scalar($amount)) {
            $amount = new FHIRDecimal($amount);
        }
        if (!($amount instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVisionPrescriptionPrism::setAmount - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($amount)
            ));
        }
        $this->amount = $amount;
        return $this;
    }

    /**
     * Amount of prism to compensate for eye alignment in fractional units.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getAmount()
    {
        return $this->amount;
    }


    /**
     * The relative base, or reference lens edge, for the prism.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRVisionBase
     * @return $this
     */
    public function setBase($base)
    {
        if (null === $base) {
            return $this; 
        }
        if (is_scalar($base)) {
            $base = new FHIRVisionBase($base);
        }
        if (!($base instanceof FHIRVisionBase)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVisionPrescriptionPrism::setBase - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRVisionBase or appropriate scalar value, %s seen.',
                gettype($base)
            ));
        }
        $this->base = $base;
        return $this;
    }

    /**
     * The relative base, or reference lens edge, for the prism.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRVisionBase
     */
    public function getBase()
    {
        return $this->base;
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
        if (null !== ($v = $this->getAmount())) {
            $a['amount'] = $v;
        }
        if (null !== ($v = $this->getBase())) {
            $a['base'] = $v;
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
            $sxe = new \SimpleXMLElement('<VisionPrescriptionPrism xmlns="http://hl7.org/fhir"></VisionPrescriptionPrism>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}