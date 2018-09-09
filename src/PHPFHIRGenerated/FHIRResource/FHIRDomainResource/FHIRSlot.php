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

use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRInstant;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRSlotStatus;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A slot of time on a schedule that may be available for booking appointments.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRSlot
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRSlot extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Slot';

    /**
     * The style of appointment or patient that may be booked in the slot (not service type).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $appointmentType = null;

    /**
     * Comments on the slot to describe any extended information. Such as custom constraints on the slot.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $comment = null;

    /**
     * Date/Time that the slot is to conclude.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $end = null;

    /**
     * External Ids for this item.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * This slot has already been overbooked, appointments are unlikely to be accepted for this time.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $overbooked = null;

    /**
     * The schedule resource that this slot defines an interval of status information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $schedule = null;

    /**
     * A broad categorization of the service that is to be performed during this appointment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $serviceCategory = null;

    /**
     * The type of appointments that can be booked into this slot (ideally this would be an identifiable service - which is at a location, rather than the location itself). If provided then this overrides the value provided on the availability resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $serviceType = null;

    /**
     * The specialty of a practitioner that would be required to perform the service requested in this appointment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $specialty = null;

    /**
     * Date/Time that the slot is to begin.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $start = null;

    /**
     * busy | free | busy-unavailable | busy-tentative | entered-in-error.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSlotStatus
     */
    public $status = null;

    /**
     * FHIRSlot Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['appointmentType'])) {
                $this->setAppointmentType($data['appointmentType']);
            }
            if (isset($data['comment'])) {
                $this->setComment($data['comment']);
            }
            if (isset($data['end'])) {
                $this->setEnd($data['end']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['overbooked'])) {
                $this->setOverbooked($data['overbooked']);
            }
            if (isset($data['schedule'])) {
                $this->setSchedule($data['schedule']);
            }
            if (isset($data['serviceCategory'])) {
                $this->setServiceCategory($data['serviceCategory']);
            }
            if (isset($data['serviceType'])) {
                $this->setServiceType($data['serviceType']);
            }
            if (isset($data['specialty'])) {
                $this->setSpecialty($data['specialty']);
            }
            if (isset($data['start'])) {
                $this->setStart($data['start']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSlot::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The style of appointment or patient that may be booked in the slot (not service type).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setAppointmentType(FHIRCodeableConcept $appointmentType = null)
    {
        if (null === $appointmentType) {
            return $this; 
        }
        $this->appointmentType = $appointmentType;
        return $this;
    }

    /**
     * The style of appointment or patient that may be booked in the slot (not service type).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAppointmentType()
    {
        return $this->appointmentType;
    }


    /**
     * Comments on the slot to describe any extended information. Such as custom constraints on the slot.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setComment($comment)
    {
        if (null === $comment) {
            return $this; 
        }
        if (is_scalar($comment)) {
            $comment = new FHIRString($comment);
        }
        if (!($comment instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSlot::setComment - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($comment)
            ));
        }
        $this->comment = $comment;
        return $this;
    }

    /**
     * Comments on the slot to describe any extended information. Such as custom constraints on the slot.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getComment()
    {
        return $this->comment;
    }


    /**
     * Date/Time that the slot is to conclude.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     * @return $this
     */
    public function setEnd($end)
    {
        if (null === $end) {
            return $this; 
        }
        if (is_scalar($end)) {
            $end = new FHIRInstant($end);
        }
        if (!($end instanceof FHIRInstant)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSlot::setEnd - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or appropriate scalar value, %s seen.',
                gettype($end)
            ));
        }
        $this->end = $end;
        return $this;
    }

    /**
     * Date/Time that the slot is to conclude.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getEnd()
    {
        return $this->end;
    }


    /**
     * External Ids for this item.
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
     * External Ids for this item.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * This slot has already been overbooked, appointments are unlikely to be accepted for this time.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setOverbooked($overbooked)
    {
        if (null === $overbooked) {
            return $this; 
        }
        if (is_scalar($overbooked)) {
            $overbooked = new FHIRBoolean($overbooked);
        }
        if (!($overbooked instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSlot::setOverbooked - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($overbooked)
            ));
        }
        $this->overbooked = $overbooked;
        return $this;
    }

    /**
     * This slot has already been overbooked, appointments are unlikely to be accepted for this time.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getOverbooked()
    {
        return $this->overbooked;
    }


    /**
     * The schedule resource that this slot defines an interval of status information.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSchedule(FHIRReference $schedule = null)
    {
        if (null === $schedule) {
            return $this; 
        }
        $this->schedule = $schedule;
        return $this;
    }

    /**
     * The schedule resource that this slot defines an interval of status information.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSchedule()
    {
        return $this->schedule;
    }


    /**
     * A broad categorization of the service that is to be performed during this appointment.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setServiceCategory(FHIRCodeableConcept $serviceCategory = null)
    {
        if (null === $serviceCategory) {
            return $this; 
        }
        $this->serviceCategory = $serviceCategory;
        return $this;
    }

    /**
     * A broad categorization of the service that is to be performed during this appointment.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getServiceCategory()
    {
        return $this->serviceCategory;
    }


    /**
     * The type of appointments that can be booked into this slot (ideally this would be an identifiable service - which is at a location, rather than the location itself). If provided then this overrides the value provided on the availability resource.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setServiceType(FHIRCodeableConcept $serviceType = null)
    {
        if (null === $serviceType) {
            return $this; 
        }
        $this->serviceType = $serviceType;
        return $this;
    }

    /**
     * The type of appointments that can be booked into this slot (ideally this would be an identifiable service - which is at a location, rather than the location itself). If provided then this overrides the value provided on the availability resource.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }


    /**
     * The specialty of a practitioner that would be required to perform the service requested in this appointment.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setSpecialty(FHIRCodeableConcept $specialty = null)
    {
        if (null === $specialty) {
            return $this; 
        }
        $this->specialty = $specialty;
        return $this;
    }

    /**
     * The specialty of a practitioner that would be required to perform the service requested in this appointment.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }


    /**
     * Date/Time that the slot is to begin.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     * @return $this
     */
    public function setStart($start)
    {
        if (null === $start) {
            return $this; 
        }
        if (is_scalar($start)) {
            $start = new FHIRInstant($start);
        }
        if (!($start instanceof FHIRInstant)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSlot::setStart - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or appropriate scalar value, %s seen.',
                gettype($start)
            ));
        }
        $this->start = $start;
        return $this;
    }

    /**
     * Date/Time that the slot is to begin.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getStart()
    {
        return $this->start;
    }


    /**
     * busy | free | busy-unavailable | busy-tentative | entered-in-error.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSlotStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRSlotStatus($status);
        }
        if (!($status instanceof FHIRSlotStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSlot::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRSlotStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * busy | free | busy-unavailable | busy-tentative | entered-in-error.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSlotStatus
     */
    public function getStatus()
    {
        return $this->status;
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
        if (null !== ($v = $this->getAppointmentType())) {
            $a['appointmentType'] = $v;
        }
        if (null !== ($v = $this->getComment())) {
            $a['comment'] = $v;
        }
        if (null !== ($v = $this->getEnd())) {
            $a['end'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getOverbooked())) {
            $a['overbooked'] = $v;
        }
        if (null !== ($v = $this->getSchedule())) {
            $a['schedule'] = $v;
        }
        if (null !== ($v = $this->getServiceCategory())) {
            $a['serviceCategory'] = $v;
        }
        if (null !== ($v = $this->getServiceType())) {
            $a['serviceType'] = $v;
        }
        if (null !== ($v = $this->getSpecialty())) {
            $a['specialty'] = $v;
        }
        if (null !== ($v = $this->getStart())) {
            $a['start'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
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
            $sxe = new \SimpleXMLElement('<Slot xmlns="http://hl7.org/fhir"></Slot>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}