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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSupplyRequest\FHIRSupplyRequestParameter;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRRequestPriority;
use PHPFHIRGenerated\FHIRElement\FHIRSupplyRequestStatus;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A record of a request for a medication, substance or device used in the healthcare setting.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRSupplyRequest
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRSupplyRequest extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'SupplyRequest';

    /**
     * When the request was made.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $authoredOn = null;

    /**
     * Category of supply, e.g.  central, non-stock, etc. This is used to support work flows associated with the supply process.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * Where the supply is expected to come from.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $deliverFrom = null;

    /**
     * Where the supply is destined to go.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $deliverTo = null;

    /**
     * Unique identifier for this supply request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The item that is requested to be supplied. This is either a link to a resource representing the details of the item or a code that identifies the item from a known list.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $itemCodeableConcept = null;

    /**
     * The item that is requested to be supplied. This is either a link to a resource representing the details of the item or a code that identifies the item from a known list.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $itemReference = null;

    /**
     * When the request should be fulfilled.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $occurrenceDateTime = null;

    /**
     * When the request should be fulfilled.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $occurrencePeriod = null;

    /**
     * When the request should be fulfilled.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public $occurrenceTiming = null;

    /**
     * Specific parameters for the ordered item.  For example, the size of the indicated item.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSupplyRequest\FHIRSupplyRequestParameter
     */
    public $parameter = null;

    /**
     * Indicates how quickly this SupplyRequest should be addressed with respect to other requests.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     */
    public $priority = null;

    /**
     * The amount that is being ordered of the indicated item.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $quantity = null;

    /**
     * The reason why the supply item was requested.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCode = null;

    /**
     * The reason why the supply item was requested.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reasonReference = null;

    /**
     * The device, practitioner, etc. who initiated the request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $requester = null;

    /**
     * Status of the supply request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSupplyRequestStatus
     */
    public $status = null;

    /**
     * Who is intended to fulfill the request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $supplier = null;

    /**
     * FHIRSupplyRequest Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['authoredOn'])) {
                $this->setAuthoredOn($data['authoredOn']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['deliverFrom'])) {
                $this->setDeliverFrom($data['deliverFrom']);
            }
            if (isset($data['deliverTo'])) {
                $this->setDeliverTo($data['deliverTo']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['itemCodeableConcept'])) {
                $this->setItemCodeableConcept($data['itemCodeableConcept']);
            }
            if (isset($data['itemReference'])) {
                $this->setItemReference($data['itemReference']);
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
            if (isset($data['parameter'])) {
                $this->setParameter($data['parameter']);
            }
            if (isset($data['priority'])) {
                $this->setPriority($data['priority']);
            }
            if (isset($data['quantity'])) {
                $this->setQuantity($data['quantity']);
            }
            if (isset($data['reasonCode'])) {
                $this->setReasonCode($data['reasonCode']);
            }
            if (isset($data['reasonReference'])) {
                $this->setReasonReference($data['reasonReference']);
            }
            if (isset($data['requester'])) {
                $this->setRequester($data['requester']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['supplier'])) {
                $this->setSupplier($data['supplier']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSupplyRequest::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * When the request was made.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setAuthoredOn($authoredOn)
    {
        if (null === $authoredOn) {
            return $this; 
        }
        if (is_scalar($authoredOn)) {
            $authoredOn = new FHIRDateTime($authoredOn);
        }
        if (!($authoredOn instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSupplyRequest::setAuthoredOn - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($authoredOn)
            ));
        }
        $this->authoredOn = $authoredOn;
        return $this;
    }

    /**
     * When the request was made.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getAuthoredOn()
    {
        return $this->authoredOn;
    }


    /**
     * Category of supply, e.g.  central, non-stock, etc. This is used to support work flows associated with the supply process.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCategory(FHIRCodeableConcept $category = null)
    {
        if (null === $category) {
            return $this; 
        }
        $this->category = $category;
        return $this;
    }

    /**
     * Category of supply, e.g.  central, non-stock, etc. This is used to support work flows associated with the supply process.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * Where the supply is expected to come from.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setDeliverFrom(FHIRReference $deliverFrom = null)
    {
        if (null === $deliverFrom) {
            return $this; 
        }
        $this->deliverFrom = $deliverFrom;
        return $this;
    }

    /**
     * Where the supply is expected to come from.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDeliverFrom()
    {
        return $this->deliverFrom;
    }


    /**
     * Where the supply is destined to go.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setDeliverTo(FHIRReference $deliverTo = null)
    {
        if (null === $deliverTo) {
            return $this; 
        }
        $this->deliverTo = $deliverTo;
        return $this;
    }

    /**
     * Where the supply is destined to go.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDeliverTo()
    {
        return $this->deliverTo;
    }


    /**
     * Unique identifier for this supply request.
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
     * Unique identifier for this supply request.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * The item that is requested to be supplied. This is either a link to a resource representing the details of the item or a code that identifies the item from a known list.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setItemCodeableConcept(FHIRCodeableConcept $itemCodeableConcept = null)
    {
        if (null === $itemCodeableConcept) {
            return $this; 
        }
        $this->itemCodeableConcept = $itemCodeableConcept;
        return $this;
    }

    /**
     * The item that is requested to be supplied. This is either a link to a resource representing the details of the item or a code that identifies the item from a known list.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getItemCodeableConcept()
    {
        return $this->itemCodeableConcept;
    }


    /**
     * The item that is requested to be supplied. This is either a link to a resource representing the details of the item or a code that identifies the item from a known list.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setItemReference(FHIRReference $itemReference = null)
    {
        if (null === $itemReference) {
            return $this; 
        }
        $this->itemReference = $itemReference;
        return $this;
    }

    /**
     * The item that is requested to be supplied. This is either a link to a resource representing the details of the item or a code that identifies the item from a known list.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getItemReference()
    {
        return $this->itemReference;
    }


    /**
     * When the request should be fulfilled.
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
                'FHIRSupplyRequest::setOccurrenceDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($occurrenceDateTime)
            ));
        }
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * When the request should be fulfilled.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getOccurrenceDateTime()
    {
        return $this->occurrenceDateTime;
    }


    /**
     * When the request should be fulfilled.
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
     * When the request should be fulfilled.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getOccurrencePeriod()
    {
        return $this->occurrencePeriod;
    }


    /**
     * When the request should be fulfilled.
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
     * When the request should be fulfilled.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getOccurrenceTiming()
    {
        return $this->occurrenceTiming;
    }


    /**
     * Specific parameters for the ordered item.  For example, the size of the indicated item.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSupplyRequest\FHIRSupplyRequestParameter
     * @return $this
     */
    public function setParameter(FHIRSupplyRequestParameter $parameter = null)
    {
        if (null === $parameter) {
            return $this; 
        }
        $this->parameter = $parameter;
        return $this;
    }

    /**
     * Specific parameters for the ordered item.  For example, the size of the indicated item.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSupplyRequest\FHIRSupplyRequestParameter
     */
    public function getParameter()
    {
        return $this->parameter;
    }


    /**
     * Indicates how quickly this SupplyRequest should be addressed with respect to other requests.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     * @return $this
     */
    public function setPriority($priority)
    {
        if (null === $priority) {
            return $this; 
        }
        if (is_scalar($priority)) {
            $priority = new FHIRRequestPriority($priority);
        }
        if (!($priority instanceof FHIRRequestPriority)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSupplyRequest::setPriority - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRRequestPriority or appropriate scalar value, %s seen.',
                gettype($priority)
            ));
        }
        $this->priority = $priority;
        return $this;
    }

    /**
     * Indicates how quickly this SupplyRequest should be addressed with respect to other requests.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRequestPriority
     */
    public function getPriority()
    {
        return $this->priority;
    }


    /**
     * The amount that is being ordered of the indicated item.
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
     * The amount that is being ordered of the indicated item.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }


    /**
     * The reason why the supply item was requested.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setReasonCode(FHIRCodeableConcept $reasonCode = null)
    {
        if (null === $reasonCode) {
            return $this; 
        }
        $this->reasonCode = $reasonCode;
        return $this;
    }

    /**
     * The reason why the supply item was requested.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }


    /**
     * The reason why the supply item was requested.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setReasonReference(FHIRReference $reasonReference = null)
    {
        if (null === $reasonReference) {
            return $this; 
        }
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * The reason why the supply item was requested.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }


    /**
     * The device, practitioner, etc. who initiated the request.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setRequester(FHIRReference $requester = null)
    {
        if (null === $requester) {
            return $this; 
        }
        $this->requester = $requester;
        return $this;
    }

    /**
     * The device, practitioner, etc. who initiated the request.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequester()
    {
        return $this->requester;
    }


    /**
     * Status of the supply request.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSupplyRequestStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRSupplyRequestStatus($status);
        }
        if (!($status instanceof FHIRSupplyRequestStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSupplyRequest::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRSupplyRequestStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * Status of the supply request.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSupplyRequestStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Who is intended to fulfill the request.
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
     * Who is intended to fulfill the request.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSupplier()
    {
        return $this->supplier;
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
        if (null !== ($v = $this->getAuthoredOn())) {
            $a['authoredOn'] = $v;
        }
        if (null !== ($v = $this->getCategory())) {
            $a['category'] = $v;
        }
        if (null !== ($v = $this->getDeliverFrom())) {
            $a['deliverFrom'] = $v;
        }
        if (null !== ($v = $this->getDeliverTo())) {
            $a['deliverTo'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getItemCodeableConcept())) {
            $a['itemCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getItemReference())) {
            $a['itemReference'] = $v;
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
        if (null !== ($v = $this->getParameter())) {
            $a['parameter'] = $v;
        }
        if (null !== ($v = $this->getPriority())) {
            $a['priority'] = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $a['quantity'] = $v;
        }
        if (null !== ($v = $this->getReasonCode())) {
            $a['reasonCode'] = $v;
        }
        if (null !== ($v = $this->getReasonReference())) {
            $a['reasonReference'] = $v;
        }
        if (null !== ($v = $this->getRequester())) {
            $a['requester'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getSupplier())) {
            $a['supplier'] = $v;
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
            $sxe = new \SimpleXMLElement('<SupplyRequest xmlns="http://hl7.org/fhir"></SupplyRequest>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}