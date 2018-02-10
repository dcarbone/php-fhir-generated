<?php namespace PHPFHIRGenerated\FHIRResource\FHIRNutritionOrder;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A request to supply a diet, formula feeding (enteral) or oral nutritional supplement to a patient/resident.
 */
class FHIRNutritionOrderAdministration extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The time period and frequency at which the enteral formula should be delivered to the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public $schedule = null;

    /**
     * The volume of formula to provide to the patient per the specified administration schedule.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public $quantity = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public $rateQuantity = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $rateRatio = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'NutritionOrder.Administration';

    /**
     * The time period and frequency at which the enteral formula should be delivered to the patient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * The time period and frequency at which the enteral formula should be delivered to the patient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $schedule
     * @return $this
     */
    public function setSchedule($schedule)
    {
        $this->schedule = $schedule;
        return $this;
    }

    /**
     * The volume of formula to provide to the patient per the specified administration schedule.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * The volume of formula to provide to the patient per the specified administration schedule.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getRateQuantity()
    {
        return $this->rateQuantity;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $rateQuantity
     * @return $this
     */
    public function setRateQuantity($rateQuantity)
    {
        $this->rateQuantity = $rateQuantity;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getRateRatio()
    {
        return $this->rateRatio;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $rateRatio
     * @return $this
     */
    public function setRateRatio($rateRatio)
    {
        $this->rateRatio = $rateRatio;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->schedule) $json['schedule'] = $this->schedule;
        if (null !== $this->quantity) $json['quantity'] = $this->quantity;
        if (null !== $this->rateQuantity) $json['rateQuantity'] = $this->rateQuantity;
        if (null !== $this->rateRatio) $json['rateRatio'] = $this->rateRatio;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<NutritionOrderAdministration xmlns="http://hl7.org/fhir"></NutritionOrderAdministration>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->schedule) $this->schedule->xmlSerialize(true, $sxe->addChild('schedule'));
        if (null !== $this->quantity) $this->quantity->xmlSerialize(true, $sxe->addChild('quantity'));
        if (null !== $this->rateQuantity) $this->rateQuantity->xmlSerialize(true, $sxe->addChild('rateQuantity'));
        if (null !== $this->rateRatio) $this->rateRatio->xmlSerialize(true, $sxe->addChild('rateRatio'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}