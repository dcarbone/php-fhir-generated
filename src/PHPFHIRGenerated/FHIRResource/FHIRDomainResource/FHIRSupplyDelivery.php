<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSupplyDelivery\FHIRSupplyDeliverySuppliedItem;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRSupplyDeliveryStatus;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Record of delivery of what is supplied.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRSupplyDelivery
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRSupplyDelivery extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'SupplyDelivery';

    /**
     * A plan, proposal or order that is fulfilled in whole or in part by this event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $basedOn = null;

    /**
     * Identification of the facility/location where the Supply was shipped to, as part of the dispense event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $destination = null;

    /**
     * Identifier for the supply delivery event that is used to identify it across multiple disparate systems.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The date or time(s) the activity occurred.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $occurrenceDateTime = null;

    /**
     * The date or time(s) the activity occurred.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $occurrencePeriod = null;

    /**
     * The date or time(s) the activity occurred.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public $occurrenceTiming = null;

    /**
     * A larger event of which this particular event is a component or step.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $partOf = null;

    /**
     * A link to a resource representing the person whom the delivered item is for.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * Identifies the person who picked up the Supply.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $receiver = null;

    /**
     * A code specifying the state of the dispense event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSupplyDeliveryStatus
     */
    public $status = null;

    /**
     * The item that is being delivered or has been supplied.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSupplyDelivery\FHIRSupplyDeliverySuppliedItem
     */
    public $suppliedItem = null;

    /**
     * The individual responsible for dispensing the medication, supplier or device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $supplier = null;

    /**
     * Indicates the type of dispensing event that is performed. Examples include: Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * FHIRSupplyDelivery Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['basedOn'])) {
                $this->setBasedOn($data['basedOn']);
            }
            if (isset($data['destination'])) {
                $this->setDestination($data['destination']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['occurrenceDateTime'])) {
                $this->setOccurrenceDateTime($data['occurrenceDateTime']);
            }
            if (isset($data['occurrencePeriod'])) {
                $this->setOccurrencePeriod($data['occurrencePeriod']);
            }
            if (isset($data['occurrenceTiming'])) {
                $this->setOccurrenceTiming($data['occurrenceTiming']);
            }
            if (isset($data['partOf'])) {
                $this->setPartOf($data['partOf']);
            }
            if (isset($data['patient'])) {
                $this->setPatient($data['patient']);
            }
            if (isset($data['receiver'])) {
                $this->setReceiver($data['receiver']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['suppliedItem'])) {
                $this->setSuppliedItem($data['suppliedItem']);
            }
            if (isset($data['supplier'])) {
                $this->setSupplier($data['supplier']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * A plan, proposal or order that is fulfilled in whole or in part by this event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setBasedOn(FHIRReference $basedOn = null)
    {
        if (null === $basedOn) {
            return $this; 
        }
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * A plan, proposal or order that is fulfilled in whole or in part by this event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }


    /**
     * Identification of the facility/location where the Supply was shipped to, as part of the dispense event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setDestination(FHIRReference $destination = null)
    {
        if (null === $destination) {
            return $this; 
        }
        $this->destination = $destination;
        return $this;
    }

    /**
     * Identification of the facility/location where the Supply was shipped to, as part of the dispense event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDestination()
    {
        return $this->destination;
    }


    /**
     * Identifier for the supply delivery event that is used to identify it across multiple disparate systems.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Identifier for the supply delivery event that is used to identify it across multiple disparate systems.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * The date or time(s) the activity occurred.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setOccurrenceDateTime($occurrenceDateTime)
    {
        if (null === $occurrenceDateTime) {
            return $this; 
        }
        if (is_scalar($occurrenceDateTime)) {
            $occurrenceDateTime = new FHIRDateTime($occurrenceDateTime);
        }
        if (!($occurrenceDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSupplyDelivery::setOccurrenceDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($occurrenceDateTime)
            ));
        }
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * The date or time(s) the activity occurred.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getOccurrenceDateTime()
    {
        return $this->occurrenceDateTime;
    }


    /**
     * The date or time(s) the activity occurred.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setOccurrencePeriod(FHIRPeriod $occurrencePeriod = null)
    {
        if (null === $occurrencePeriod) {
            return $this; 
        }
        $this->occurrencePeriod = $occurrencePeriod;
        return $this;
    }

    /**
     * The date or time(s) the activity occurred.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getOccurrencePeriod()
    {
        return $this->occurrencePeriod;
    }


    /**
     * The date or time(s) the activity occurred.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     * @return $this
     */
    public function setOccurrenceTiming(FHIRTiming $occurrenceTiming = null)
    {
        if (null === $occurrenceTiming) {
            return $this; 
        }
        $this->occurrenceTiming = $occurrenceTiming;
        return $this;
    }

    /**
     * The date or time(s) the activity occurred.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getOccurrenceTiming()
    {
        return $this->occurrenceTiming;
    }


    /**
     * A larger event of which this particular event is a component or step.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPartOf(FHIRReference $partOf = null)
    {
        if (null === $partOf) {
            return $this; 
        }
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * A larger event of which this particular event is a component or step.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPartOf()
    {
        return $this->partOf;
    }


    /**
     * A link to a resource representing the person whom the delivered item is for.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPatient(FHIRReference $patient = null)
    {
        if (null === $patient) {
            return $this; 
        }
        $this->patient = $patient;
        return $this;
    }

    /**
     * A link to a resource representing the person whom the delivered item is for.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }


    /**
     * Identifies the person who picked up the Supply.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setReceiver(FHIRReference $receiver = null)
    {
        if (null === $receiver) {
            return $this; 
        }
        $this->receiver = $receiver;
        return $this;
    }

    /**
     * Identifies the person who picked up the Supply.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReceiver()
    {
        return $this->receiver;
    }


    /**
     * A code specifying the state of the dispense event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSupplyDeliveryStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRSupplyDeliveryStatus($status);
        }
        if (!($status instanceof FHIRSupplyDeliveryStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSupplyDelivery::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRSupplyDeliveryStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * A code specifying the state of the dispense event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSupplyDeliveryStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * The item that is being delivered or has been supplied.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSupplyDelivery\FHIRSupplyDeliverySuppliedItem
     * @return $this
     */
    public function setSuppliedItem(FHIRSupplyDeliverySuppliedItem $suppliedItem = null)
    {
        if (null === $suppliedItem) {
            return $this; 
        }
        $this->suppliedItem = $suppliedItem;
        return $this;
    }

    /**
     * The item that is being delivered or has been supplied.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSupplyDelivery\FHIRSupplyDeliverySuppliedItem
     */
    public function getSuppliedItem()
    {
        return $this->suppliedItem;
    }


    /**
     * The individual responsible for dispensing the medication, supplier or device.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSupplier(FHIRReference $supplier = null)
    {
        if (null === $supplier) {
            return $this; 
        }
        $this->supplier = $supplier;
        return $this;
    }

    /**
     * The individual responsible for dispensing the medication, supplier or device.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSupplier()
    {
        return $this->supplier;
    }


    /**
     * Indicates the type of dispensing event that is performed. Examples include: Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
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
     * Indicates the type of dispensing event that is performed. Examples include: Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
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
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getBasedOn())) {
            $a['basedOn'] = $v;
        }
        if (null !== ($v = $this->getDestination())) {
            $a['destination'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            $a['occurrenceDateTime'] = $v;
        }
        if (null !== ($v = $this->getOccurrencePeriod())) {
            $a['occurrencePeriod'] = $v;
        }
        if (null !== ($v = $this->getOccurrenceTiming())) {
            $a['occurrenceTiming'] = $v;
        }
        if (null !== ($v = $this->getPartOf())) {
            $a['partOf'] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a['patient'] = $v;
        }
        if (null !== ($v = $this->getReceiver())) {
            $a['receiver'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getSuppliedItem())) {
            $a['suppliedItem'] = $v;
        }
        if (null !== ($v = $this->getSupplier())) {
            $a['supplier'] = $v;
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
            $sxe = new \SimpleXMLElement('<SupplyDelivery xmlns="http://hl7.org/fhir"></SupplyDelivery>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}