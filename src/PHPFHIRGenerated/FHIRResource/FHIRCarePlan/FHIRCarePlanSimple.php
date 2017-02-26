<?php namespace PHPFHIRGenerated\FHIRResource\FHIRCarePlan;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 26th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * Describes the intention of how one or more practitioners intend to deliver care for a particular patient for a period of time, possibly limited to care for a specific condition or set of conditions.
 */
class FHIRCarePlanSimple extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * High-level categorization of the type of activity in a care plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityCategory
     */
    public $category = null;

    /**
     * Detailed description of the type of activity.  E.g. What lab test, what procedure, what kind of encounter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSchedule
     */
    public $timingSchedule = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $timingPeriod = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $timingString = null;

    /**
     * Identifies the facility where the activity will occur.  E.g. home, hospital, specific clinic, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $location = null;

    /**
     * Identifies who's expected to be involved in the activity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public $performer = array();

    /**
     * Identifies the food, drug or other product being consumed or supplied in the activity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $product = null;

    /**
     * Identifies the quantity expected to be consumed in a given day.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $dailyAmount = null;

    /**
     * Identifies the quantity expected to be supplied.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * This provides a textual description of constraints on the activity occurrence, including relation to other activities.  It may also include objectives, pre-conditions and end-conditions.  Finally, it may convey specifics about the activity such as body site, method, route, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $details = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'CarePlan.Simple';

    /**
     * High-level categorization of the type of activity in a care plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityCategory
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * High-level categorization of the type of activity in a care plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityCategory $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Detailed description of the type of activity.  E.g. What lab test, what procedure, what kind of encounter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Detailed description of the type of activity.  E.g. What lab test, what procedure, what kind of encounter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSchedule
     */
    public function getTimingSchedule()
    {
        return $this->timingSchedule;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSchedule $timingSchedule
     * @return $this
     */
    public function setTimingSchedule($timingSchedule)
    {
        $this->timingSchedule = $timingSchedule;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getTimingPeriod()
    {
        return $this->timingPeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $timingPeriod
     * @return $this
     */
    public function setTimingPeriod($timingPeriod)
    {
        $this->timingPeriod = $timingPeriod;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTimingString()
    {
        return $this->timingString;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $timingString
     * @return $this
     */
    public function setTimingString($timingString)
    {
        $this->timingString = $timingString;
        return $this;
    }

    /**
     * Identifies the facility where the activity will occur.  E.g. home, hospital, specific clinic, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Identifies the facility where the activity will occur.  E.g. home, hospital, specific clinic, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Identifies who's expected to be involved in the activity.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Identifies who's expected to be involved in the activity.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $performer
     * @return $this
     */
    public function addPerformer($performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * Identifies the food, drug or other product being consumed or supplied in the activity.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Identifies the food, drug or other product being consumed or supplied in the activity.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $product
     * @return $this
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * Identifies the quantity expected to be consumed in a given day.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getDailyAmount()
    {
        return $this->dailyAmount;
    }

    /**
     * Identifies the quantity expected to be consumed in a given day.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $dailyAmount
     * @return $this
     */
    public function setDailyAmount($dailyAmount)
    {
        $this->dailyAmount = $dailyAmount;
        return $this;
    }

    /**
     * Identifies the quantity expected to be supplied.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Identifies the quantity expected to be supplied.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * This provides a textual description of constraints on the activity occurrence, including relation to other activities.  It may also include objectives, pre-conditions and end-conditions.  Finally, it may convey specifics about the activity such as body site, method, route, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * This provides a textual description of constraints on the activity occurrence, including relation to other activities.  It may also include objectives, pre-conditions and end-conditions.  Finally, it may convey specifics about the activity such as body site, method, route, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $details
     * @return $this
     */
    public function setDetails($details)
    {
        $this->details = $details;
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
        if (null !== $this->category) $json['category'] = json_encode($this->category);
        if (null !== $this->code) $json['code'] = json_encode($this->code);
        if (null !== $this->timingSchedule) $json['timingSchedule'] = json_encode($this->timingSchedule);
        if (null !== $this->timingPeriod) $json['timingPeriod'] = json_encode($this->timingPeriod);
        if (null !== $this->timingString) $json['timingString'] = json_encode($this->timingString);
        if (null !== $this->location) $json['location'] = json_encode($this->location);
        if (0 < count($this->performer)) {
            $json['performer'] = [];
            foreach($this->performer as $performer) {
                $json['performer'][] = json_encode($performer);
            }
        }
        if (null !== $this->product) $json['product'] = json_encode($this->product);
        if (null !== $this->dailyAmount) $json['dailyAmount'] = json_encode($this->dailyAmount);
        if (null !== $this->quantity) $json['quantity'] = json_encode($this->quantity);
        if (null !== $this->details) $json['details'] = json_encode($this->details);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<CarePlanSimple xmlns="http://hl7.org/fhir"></CarePlanSimple>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->category) $this->category->xmlSerialize(true, $sxe->addChild('category'));
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->timingSchedule) $this->timingSchedule->xmlSerialize(true, $sxe->addChild('timingSchedule'));
        if (null !== $this->timingPeriod) $this->timingPeriod->xmlSerialize(true, $sxe->addChild('timingPeriod'));
        if (null !== $this->timingString) $this->timingString->xmlSerialize(true, $sxe->addChild('timingString'));
        if (null !== $this->location) $this->location->xmlSerialize(true, $sxe->addChild('location'));
        if (0 < count($this->performer)) {
            foreach($this->performer as $performer) {
                $performer->xmlSerialize(true, $sxe->addChild('performer'));
            }
        }
        if (null !== $this->product) $this->product->xmlSerialize(true, $sxe->addChild('product'));
        if (null !== $this->dailyAmount) $this->dailyAmount->xmlSerialize(true, $sxe->addChild('dailyAmount'));
        if (null !== $this->quantity) $this->quantity->xmlSerialize(true, $sxe->addChild('quantity'));
        if (null !== $this->details) $this->details->xmlSerialize(true, $sxe->addChild('details'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}