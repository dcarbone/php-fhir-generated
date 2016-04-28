<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 28th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
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
use PHPFHIRGenerated\JsonSerializable;

/**
 * A supply - a  request for something, and provision of what is supplied.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRSupply extends FHIRDomainResource implements JsonSerializable
{
    /**
     * Category of supply, e.g.  central, non-stock, etc. This is used to support work flows associated with the supply process.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $kind = null;

    /**
     * Unique identifier for this supply request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Status of the supply request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSupplyStatus
     */
    public $status = null;

    /**
     * The item that is requested to be supplied.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $orderedItem = null;

    /**
     * A link to a resource representing the person whom the ordered item is for.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * Indicates the details of the dispense event such as the days supply and quantity of a supply dispensed.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRSupply\FHIRSupplyDispense[]
     */
    public $dispense = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Supply';

    /**
     * Category of supply, e.g.  central, non-stock, etc. This is used to support work flows associated with the supply process.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Category of supply, e.g.  central, non-stock, etc. This is used to support work flows associated with the supply process.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $kind
     * @return $this
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
        return $this;
    }

    /**
     * Unique identifier for this supply request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Unique identifier for this supply request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Status of the supply request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSupplyStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status of the supply request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSupplyStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The item that is requested to be supplied.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrderedItem()
    {
        return $this->orderedItem;
    }

    /**
     * The item that is requested to be supplied.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $orderedItem
     * @return $this
     */
    public function setOrderedItem($orderedItem)
    {
        $this->orderedItem = $orderedItem;
        return $this;
    }

    /**
     * A link to a resource representing the person whom the ordered item is for.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * A link to a resource representing the person whom the ordered item is for.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Indicates the details of the dispense event such as the days supply and quantity of a supply dispensed.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRSupply\FHIRSupplyDispense[]
     */
    public function getDispense()
    {
        return $this->dispense;
    }

    /**
     * Indicates the details of the dispense event such as the days supply and quantity of a supply dispensed.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRSupply\FHIRSupplyDispense[] $dispense
     * @return $this
     */
    public function addDispense($dispense)
    {
        $this->dispense[] = $dispense;
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
        if (null !== $this->kind) $json['kind'] = $this->kind->jsonSerialize();
        if (null !== $this->identifier) $json['identifier'] = $this->identifier->jsonSerialize();
        if (null !== $this->status) $json['status'] = $this->status->jsonSerialize();
        if (null !== $this->orderedItem) $json['orderedItem'] = $this->orderedItem->jsonSerialize();
        if (null !== $this->patient) $json['patient'] = $this->patient->jsonSerialize();
        if (0 < count($this->dispense)) {
            $json['dispense'] = array();
            foreach($this->dispense as $dispense) {
                $json['dispense'][] = $dispense->jsonSerialize();
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Supply xmlns="http://hl7.org/fhir"></Supply>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->kind) $this->kind->xmlSerialize(true, $sxe->addChild('kind'));
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->orderedItem) $this->orderedItem->xmlSerialize(true, $sxe->addChild('orderedItem'));
        if (null !== $this->patient) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (0 < count($this->dispense)) {
            foreach($this->dispense as $dispense) {
                $dispense->xmlSerialize(true, $sxe->addChild('dispense'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}