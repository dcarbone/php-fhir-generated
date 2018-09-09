<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage;

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
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRRange;
use PHPFHIRGenerated\FHIRElement\FHIRRatio;

/**
 * Indicates how the medication is/was taken or should be taken by the patient.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRDosageDoseAndRate
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage
 */
class FHIRDosageDoseAndRate extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Dosage.DoseAndRate';

    /**
     * Amount of medication per dose.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $doseQuantity = null;

    /**
     * Amount of medication per dose.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $doseRange = null;

    /**
     * Amount of medication per unit of time.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $rateQuantity = null;

    /**
     * Amount of medication per unit of time.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $rateRange = null;

    /**
     * Amount of medication per unit of time.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $rateRatio = null;

    /**
     * The kind of dose or rate specified, for example, ordered or calculated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * FHIRDosageDoseAndRate Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['doseQuantity'])) {
                $this->setDoseQuantity($data['doseQuantity']);
            }
            if (isset($data['doseRange'])) {
                $this->setDoseRange($data['doseRange']);
            }
            if (isset($data['rateQuantity'])) {
                $this->setRateQuantity($data['rateQuantity']);
            }
            if (isset($data['rateRange'])) {
                $this->setRateRange($data['rateRange']);
            }
            if (isset($data['rateRatio'])) {
                $this->setRateRatio($data['rateRatio']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage\FHIRDosageDoseAndRate::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Amount of medication per dose.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setDoseQuantity(FHIRQuantity $doseQuantity = null)
    {
        if (null === $doseQuantity) {
            return $this; 
        }
        $this->doseQuantity = $doseQuantity;
        return $this;
    }

    /**
     * Amount of medication per dose.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getDoseQuantity()
    {
        return $this->doseQuantity;
    }


    /**
     * Amount of medication per dose.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setDoseRange(FHIRRange $doseRange = null)
    {
        if (null === $doseRange) {
            return $this; 
        }
        $this->doseRange = $doseRange;
        return $this;
    }

    /**
     * Amount of medication per dose.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getDoseRange()
    {
        return $this->doseRange;
    }


    /**
     * Amount of medication per unit of time.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setRateQuantity(FHIRQuantity $rateQuantity = null)
    {
        if (null === $rateQuantity) {
            return $this; 
        }
        $this->rateQuantity = $rateQuantity;
        return $this;
    }

    /**
     * Amount of medication per unit of time.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getRateQuantity()
    {
        return $this->rateQuantity;
    }


    /**
     * Amount of medication per unit of time.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setRateRange(FHIRRange $rateRange = null)
    {
        if (null === $rateRange) {
            return $this; 
        }
        $this->rateRange = $rateRange;
        return $this;
    }

    /**
     * Amount of medication per unit of time.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getRateRange()
    {
        return $this->rateRange;
    }


    /**
     * Amount of medication per unit of time.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     * @return $this
     */
    public function setRateRatio(FHIRRatio $rateRatio = null)
    {
        if (null === $rateRatio) {
            return $this; 
        }
        $this->rateRatio = $rateRatio;
        return $this;
    }

    /**
     * Amount of medication per unit of time.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getRateRatio()
    {
        return $this->rateRatio;
    }


    /**
     * The kind of dose or rate specified, for example, ordered or calculated.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type = $type;
        return $this;
    }

    /**
     * The kind of dose or rate specified, for example, ordered or calculated.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
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
        if (null !== ($v = $this->getDoseQuantity())) {
            $a['doseQuantity'] = $v;
        }
        if (null !== ($v = $this->getDoseRange())) {
            $a['doseRange'] = $v;
        }
        if (null !== ($v = $this->getRateQuantity())) {
            $a['rateQuantity'] = $v;
        }
        if (null !== ($v = $this->getRateRange())) {
            $a['rateRange'] = $v;
        }
        if (null !== ($v = $this->getRateRatio())) {
            $a['rateRatio'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
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
            $sxe = new \SimpleXMLElement('<DosageDoseAndRate xmlns="http://hl7.org/fhir"></DosageDoseAndRate>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}