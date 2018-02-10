<?php namespace PHPFHIRGenerated\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A response to an order.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIROrderResponse extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Identifiers assigned to this order. The identifiers are usually assigned by the system responding to the order, but they may be provided or added to by other systems.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * A reference to the order that this is in response to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $request = null;

    /**
     * The date and time at which this order response was made (created/posted).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * The person, organization, or device credited with making the response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $who = null;

    /**
     * What this response says about the status of the original order.
     * @var \PHPFHIRGenerated\FHIRElement\FHIROrderStatus
     */
    public $orderStatus = null;

    /**
     * Additional description about the response - e.g. a text description provided by a human user when making decisions about the order.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Links to resources that provide details of the outcome of performing the order; e.g. Diagnostic Reports in a response that is made to an order that referenced a diagnostic order.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $fulfillment = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'OrderResponse';

    /**
     * Identifiers assigned to this order. The identifiers are usually assigned by the system responding to the order, but they may be provided or added to by other systems.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifiers assigned to this order. The identifiers are usually assigned by the system responding to the order, but they may be provided or added to by other systems.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A reference to the order that this is in response to.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * A reference to the order that this is in response to.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $request
     * @return $this
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * The date and time at which this order response was made (created/posted).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date and time at which this order response was made (created/posted).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * The person, organization, or device credited with making the response.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getWho()
    {
        return $this->who;
    }

    /**
     * The person, organization, or device credited with making the response.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $who
     * @return $this
     */
    public function setWho($who)
    {
        $this->who = $who;
        return $this;
    }

    /**
     * What this response says about the status of the original order.
     * @return \PHPFHIRGenerated\FHIRElement\FHIROrderStatus
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * What this response says about the status of the original order.
     * @param \PHPFHIRGenerated\FHIRElement\FHIROrderStatus $orderStatus
     * @return $this
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * Additional description about the response - e.g. a text description provided by a human user when making decisions about the order.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Additional description about the response - e.g. a text description provided by a human user when making decisions about the order.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Links to resources that provide details of the outcome of performing the order; e.g. Diagnostic Reports in a response that is made to an order that referenced a diagnostic order.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    /**
     * Links to resources that provide details of the outcome of performing the order; e.g. Diagnostic Reports in a response that is made to an order that referenced a diagnostic order.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $fulfillment
     * @return $this
     */
    public function addFulfillment($fulfillment)
    {
        $this->fulfillment[] = $fulfillment;
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
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier;
            }
        }
        if (null !== $this->request) $json['request'] = $this->request;
        if (null !== $this->date) $json['date'] = $this->date;
        if (null !== $this->who) $json['who'] = $this->who;
        if (null !== $this->orderStatus) $json['orderStatus'] = $this->orderStatus;
        if (null !== $this->description) $json['description'] = $this->description;
        if (0 < count($this->fulfillment)) {
            $json['fulfillment'] = [];
            foreach($this->fulfillment as $fulfillment) {
                $json['fulfillment'][] = $fulfillment;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<OrderResponse xmlns="http://hl7.org/fhir"></OrderResponse>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->request) $this->request->xmlSerialize(true, $sxe->addChild('request'));
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->who) $this->who->xmlSerialize(true, $sxe->addChild('who'));
        if (null !== $this->orderStatus) $this->orderStatus->xmlSerialize(true, $sxe->addChild('orderStatus'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (0 < count($this->fulfillment)) {
            foreach($this->fulfillment as $fulfillment) {
                $fulfillment->xmlSerialize(true, $sxe->addChild('fulfillment'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}