<?php namespace PHPFHIRGenerated\FHIRResource\FHIRProtocol;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 20th, 2017
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A definition of behaviors to be taken in particular circumstances, often including conditions, options and other decision points.
 */
class FHIRProtocolDetail extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * High-level categorization of the type of activity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRProtocolActivityDefinitionCategory
     */
    public $category = null;

    /**
     * Detailed description of the type of activity; e.g. What lab test, what procedure, what kind of encounter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of timing*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $timingCodeableConcept = null;

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of timing*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public $timingTiming = null;

    /**
     * Identifies the facility where the activity will occur; e.g. home, hospital, specific clinic, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * Identifies who's expected to be involved in the activity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $performer = array();

    /**
     * Identifies the food, drug or other product being consumed or supplied in the activity. (choose any one of product*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $productReference = null;

    /**
     * Identifies the food, drug or other product being consumed or supplied in the activity. (choose any one of product*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $productCodeableConcept = null;

    /**
     * Identifies the quantity expected to be consumed at once (per dose, per meal, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * This provides a textual description of constraints on the activity occurrence, including relation to other activities.  It may also include objectives, pre-conditions and end-conditions.  Finally, it may convey specifics about the activity such as body site, method, route, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Protocol.Detail';

    /**
     * High-level categorization of the type of activity.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRProtocolActivityDefinitionCategory
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * High-level categorization of the type of activity.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRProtocolActivityDefinitionCategory $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Detailed description of the type of activity; e.g. What lab test, what procedure, what kind of encounter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Detailed description of the type of activity; e.g. What lab test, what procedure, what kind of encounter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of timing*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getTimingCodeableConcept()
    {
        return $this->timingCodeableConcept;
    }

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of timing*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $timingCodeableConcept
     * @return $this
     */
    public function setTimingCodeableConcept($timingCodeableConcept)
    {
        $this->timingCodeableConcept = $timingCodeableConcept;
        return $this;
    }

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of timing*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getTimingTiming()
    {
        return $this->timingTiming;
    }

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of timing*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $timingTiming
     * @return $this
     */
    public function setTimingTiming($timingTiming)
    {
        $this->timingTiming = $timingTiming;
        return $this;
    }

    /**
     * Identifies the facility where the activity will occur; e.g. home, hospital, specific clinic, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Identifies the facility where the activity will occur; e.g. home, hospital, specific clinic, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Identifies who's expected to be involved in the activity.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Identifies who's expected to be involved in the activity.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $performer
     * @return $this
     */
    public function addPerformer($performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * Identifies the food, drug or other product being consumed or supplied in the activity. (choose any one of product*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProductReference()
    {
        return $this->productReference;
    }

    /**
     * Identifies the food, drug or other product being consumed or supplied in the activity. (choose any one of product*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $productReference
     * @return $this
     */
    public function setProductReference($productReference)
    {
        $this->productReference = $productReference;
        return $this;
    }

    /**
     * Identifies the food, drug or other product being consumed or supplied in the activity. (choose any one of product*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getProductCodeableConcept()
    {
        return $this->productCodeableConcept;
    }

    /**
     * Identifies the food, drug or other product being consumed or supplied in the activity. (choose any one of product*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $productCodeableConcept
     * @return $this
     */
    public function setProductCodeableConcept($productCodeableConcept)
    {
        $this->productCodeableConcept = $productCodeableConcept;
        return $this;
    }

    /**
     * Identifies the quantity expected to be consumed at once (per dose, per meal, etc.).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Identifies the quantity expected to be consumed at once (per dose, per meal, etc.).
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * This provides a textual description of constraints on the activity occurrence, including relation to other activities.  It may also include objectives, pre-conditions and end-conditions.  Finally, it may convey specifics about the activity such as body site, method, route, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
        if (null !== $this->timingCodeableConcept) $json['timingCodeableConcept'] = json_encode($this->timingCodeableConcept);
        if (null !== $this->timingTiming) $json['timingTiming'] = json_encode($this->timingTiming);
        if (null !== $this->location) $json['location'] = json_encode($this->location);
        if (0 < count($this->performer)) {
            $json['performer'] = [];
            foreach($this->performer as $performer) {
                $json['performer'][] = json_encode($performer);
            }
        }
        if (null !== $this->productReference) $json['productReference'] = json_encode($this->productReference);
        if (null !== $this->productCodeableConcept) $json['productCodeableConcept'] = json_encode($this->productCodeableConcept);
        if (null !== $this->quantity) $json['quantity'] = json_encode($this->quantity);
        if (null !== $this->description) $json['description'] = json_encode($this->description);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ProtocolDetail xmlns="http://hl7.org/fhir"></ProtocolDetail>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->category) $this->category->xmlSerialize(true, $sxe->addChild('category'));
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->timingCodeableConcept) $this->timingCodeableConcept->xmlSerialize(true, $sxe->addChild('timingCodeableConcept'));
        if (null !== $this->timingTiming) $this->timingTiming->xmlSerialize(true, $sxe->addChild('timingTiming'));
        if (null !== $this->location) $this->location->xmlSerialize(true, $sxe->addChild('location'));
        if (0 < count($this->performer)) {
            foreach($this->performer as $performer) {
                $performer->xmlSerialize(true, $sxe->addChild('performer'));
            }
        }
        if (null !== $this->productReference) $this->productReference->xmlSerialize(true, $sxe->addChild('productReference'));
        if (null !== $this->productCodeableConcept) $this->productCodeableConcept->xmlSerialize(true, $sxe->addChild('productCodeableConcept'));
        if (null !== $this->quantity) $this->quantity->xmlSerialize(true, $sxe->addChild('quantity'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}