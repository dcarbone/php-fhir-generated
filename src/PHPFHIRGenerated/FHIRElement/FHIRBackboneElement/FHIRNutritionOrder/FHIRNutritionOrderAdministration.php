<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder;

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
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRRatio;

/**
 * A request to supply a diet, formula feeding (enteral) or oral nutritional supplement to a patient/resident.
 *
 * Class FHIRNutritionOrderAdministration
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder
 */
class FHIRNutritionOrderAdministration extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'NutritionOrder.Administration';

    /**
     * The volume of formula to provide to the patient per the specified administration schedule.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * The rate of administration of formula via a feeding pump, e.g. 60 mL per hour, according to the specified schedule.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $rateQuantity = null;

    /**
     * The rate of administration of formula via a feeding pump, e.g. 60 mL per hour, according to the specified schedule.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $rateRatio = null;

    /**
     * The time period and frequency at which the enteral formula should be delivered to the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public $schedule = null;

    /**
     * FHIRNutritionOrderAdministration Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['quantity'])) {
                $this->setQuantity($data['quantity']);
            }
            if (isset($data['rateQuantity'])) {
                $this->setRateQuantity($data['rateQuantity']);
            }
            if (isset($data['rateRatio'])) {
                $this->setRateRatio($data['rateRatio']);
            }
            if (isset($data['schedule'])) {
                $this->setSchedule($data['schedule']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The volume of formula to provide to the patient per the specified administration schedule.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setQuantity(FHIRQuantity $quantity = null)
    {
        if (null === $quantity) {
            return $this; 
        }
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * The volume of formula to provide to the patient per the specified administration schedule.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }


    /**
     * The rate of administration of formula via a feeding pump, e.g. 60 mL per hour, according to the specified schedule.
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
     * The rate of administration of formula via a feeding pump, e.g. 60 mL per hour, according to the specified schedule.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getRateQuantity()
    {
        return $this->rateQuantity;
    }


    /**
     * The rate of administration of formula via a feeding pump, e.g. 60 mL per hour, according to the specified schedule.
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
     * The rate of administration of formula via a feeding pump, e.g. 60 mL per hour, according to the specified schedule.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getRateRatio()
    {
        return $this->rateRatio;
    }


    /**
     * The time period and frequency at which the enteral formula should be delivered to the patient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     * @return $this
     */
    public function setSchedule(FHIRTiming $schedule = null)
    {
        if (null === $schedule) {
            return $this; 
        }
        $this->schedule = $schedule;
        return $this;
    }

    /**
     * The time period and frequency at which the enteral formula should be delivered to the patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getSchedule()
    {
        return $this->schedule;
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
        if (null !== ($v = $this->getQuantity())) {
            $a['quantity'] = $v;
        }
        if (null !== ($v = $this->getRateQuantity())) {
            $a['rateQuantity'] = $v;
        }
        if (null !== ($v = $this->getRateRatio())) {
            $a['rateRatio'] = $v;
        }
        if (null !== ($v = $this->getSchedule())) {
            $a['schedule'] = $v;
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
            $sxe = new \SimpleXMLElement('<NutritionOrderAdministration xmlns="http://hl7.org/fhir"></NutritionOrderAdministration>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}