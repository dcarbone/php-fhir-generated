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

use PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRDeviceUseStatementStatus;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A record of a device being used by a patient where the record is the result of a report from the patient or another clinician.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRDeviceUseStatement
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRDeviceUseStatement extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'DeviceUseStatement';

    /**
     * A plan, proposal or order that is fulfilled in whole or in part by this DeviceUseStatement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $basedOn = null;

    /**
     * Indicates the anotomic location on the subject's body where the device was used ( i.e. the target).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $bodySite = null;

    /**
     * Allows linking the DeviceUseStatement to the underlying Request, or to other information that supports or is used to derive the DeviceUseStatement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $derivedFrom = null;

    /**
     * The details of the device used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $device = null;

    /**
     * An external identifier for this statement such as an IRI.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Details about the device statement that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * Reason or justification for the use of the device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCode = null;

    /**
     * Indicates another resource whose existence justifies this DeviceUseStatement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reasonReference = null;

    /**
     * The time at which the statement was made/recorded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $recordedOn = null;

    /**
     * Who reported the device was being used by the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $source = null;

    /**
     * A code representing the patient or other source's judgment about the state of the device used that this statement is about.  Generally this will be active or completed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDeviceUseStatementStatus
     */
    public $status = null;

    /**
     * The patient who used the device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * How often the device was used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $timingDateTime = null;

    /**
     * How often the device was used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $timingPeriod = null;

    /**
     * How often the device was used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public $timingTiming = null;

    /**
     * FHIRDeviceUseStatement Constructor
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
            if (isset($data['bodySite'])) {
                $this->setBodySite($data['bodySite']);
            }
            if (isset($data['derivedFrom'])) {
                $this->setDerivedFrom($data['derivedFrom']);
            }
            if (isset($data['device'])) {
                $this->setDevice($data['device']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['note'])) {
                $this->setNote($data['note']);
            }
            if (isset($data['reasonCode'])) {
                $this->setReasonCode($data['reasonCode']);
            }
            if (isset($data['reasonReference'])) {
                $this->setReasonReference($data['reasonReference']);
            }
            if (isset($data['recordedOn'])) {
                $this->setRecordedOn($data['recordedOn']);
            }
            if (isset($data['source'])) {
                $this->setSource($data['source']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['timingDateTime'])) {
                $this->setTimingDateTime($data['timingDateTime']);
            }
            if (isset($data['timingPeriod'])) {
                $this->setTimingPeriod($data['timingPeriod']);
            }
            if (isset($data['timingTiming'])) {
                $this->setTimingTiming($data['timingTiming']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceUseStatement::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * A plan, proposal or order that is fulfilled in whole or in part by this DeviceUseStatement.
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
     * A plan, proposal or order that is fulfilled in whole or in part by this DeviceUseStatement.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }


    /**
     * Indicates the anotomic location on the subject's body where the device was used ( i.e. the target).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setBodySite(FHIRCodeableConcept $bodySite = null)
    {
        if (null === $bodySite) {
            return $this; 
        }
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Indicates the anotomic location on the subject's body where the device was used ( i.e. the target).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }


    /**
     * Allows linking the DeviceUseStatement to the underlying Request, or to other information that supports or is used to derive the DeviceUseStatement.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setDerivedFrom(FHIRReference $derivedFrom = null)
    {
        if (null === $derivedFrom) {
            return $this; 
        }
        $this->derivedFrom = $derivedFrom;
        return $this;
    }

    /**
     * Allows linking the DeviceUseStatement to the underlying Request, or to other information that supports or is used to derive the DeviceUseStatement.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDerivedFrom()
    {
        return $this->derivedFrom;
    }


    /**
     * The details of the device used.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setDevice(FHIRReference $device = null)
    {
        if (null === $device) {
            return $this; 
        }
        $this->device = $device;
        return $this;
    }

    /**
     * The details of the device used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDevice()
    {
        return $this->device;
    }


    /**
     * An external identifier for this statement such as an IRI.
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
     * An external identifier for this statement such as an IRI.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Details about the device statement that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     * @return $this
     */
    public function setNote(FHIRAnnotation $note = null)
    {
        if (null === $note) {
            return $this; 
        }
        $this->note = $note;
        return $this;
    }

    /**
     * Details about the device statement that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }


    /**
     * Reason or justification for the use of the device.
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
     * Reason or justification for the use of the device.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }


    /**
     * Indicates another resource whose existence justifies this DeviceUseStatement.
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
     * Indicates another resource whose existence justifies this DeviceUseStatement.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }


    /**
     * The time at which the statement was made/recorded.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setRecordedOn($recordedOn)
    {
        if (null === $recordedOn) {
            return $this; 
        }
        if (is_scalar($recordedOn)) {
            $recordedOn = new FHIRDateTime($recordedOn);
        }
        if (!($recordedOn instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceUseStatement::setRecordedOn - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($recordedOn)
            ));
        }
        $this->recordedOn = $recordedOn;
        return $this;
    }

    /**
     * The time at which the statement was made/recorded.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getRecordedOn()
    {
        return $this->recordedOn;
    }


    /**
     * Who reported the device was being used by the patient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSource(FHIRReference $source = null)
    {
        if (null === $source) {
            return $this; 
        }
        $this->source = $source;
        return $this;
    }

    /**
     * Who reported the device was being used by the patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSource()
    {
        return $this->source;
    }


    /**
     * A code representing the patient or other source's judgment about the state of the device used that this statement is about.  Generally this will be active or completed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDeviceUseStatementStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRDeviceUseStatementStatus($status);
        }
        if (!($status instanceof FHIRDeviceUseStatementStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceUseStatement::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDeviceUseStatementStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * A code representing the patient or other source's judgment about the state of the device used that this statement is about.  Generally this will be active or completed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDeviceUseStatementStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * The patient who used the device.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSubject(FHIRReference $subject = null)
    {
        if (null === $subject) {
            return $this; 
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * The patient who used the device.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }


    /**
     * How often the device was used.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setTimingDateTime($timingDateTime)
    {
        if (null === $timingDateTime) {
            return $this; 
        }
        if (is_scalar($timingDateTime)) {
            $timingDateTime = new FHIRDateTime($timingDateTime);
        }
        if (!($timingDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceUseStatement::setTimingDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($timingDateTime)
            ));
        }
        $this->timingDateTime = $timingDateTime;
        return $this;
    }

    /**
     * How often the device was used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getTimingDateTime()
    {
        return $this->timingDateTime;
    }


    /**
     * How often the device was used.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setTimingPeriod(FHIRPeriod $timingPeriod = null)
    {
        if (null === $timingPeriod) {
            return $this; 
        }
        $this->timingPeriod = $timingPeriod;
        return $this;
    }

    /**
     * How often the device was used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getTimingPeriod()
    {
        return $this->timingPeriod;
    }


    /**
     * How often the device was used.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     * @return $this
     */
    public function setTimingTiming(FHIRTiming $timingTiming = null)
    {
        if (null === $timingTiming) {
            return $this; 
        }
        $this->timingTiming = $timingTiming;
        return $this;
    }

    /**
     * How often the device was used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getTimingTiming()
    {
        return $this->timingTiming;
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
        if (null !== ($v = $this->getBodySite())) {
            $a['bodySite'] = $v;
        }
        if (null !== ($v = $this->getDerivedFrom())) {
            $a['derivedFrom'] = $v;
        }
        if (null !== ($v = $this->getDevice())) {
            $a['device'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a['note'] = $v;
        }
        if (null !== ($v = $this->getReasonCode())) {
            $a['reasonCode'] = $v;
        }
        if (null !== ($v = $this->getReasonReference())) {
            $a['reasonReference'] = $v;
        }
        if (null !== ($v = $this->getRecordedOn())) {
            $a['recordedOn'] = $v;
        }
        if (null !== ($v = $this->getSource())) {
            $a['source'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
        }
        if (null !== ($v = $this->getTimingDateTime())) {
            $a['timingDateTime'] = $v;
        }
        if (null !== ($v = $this->getTimingPeriod())) {
            $a['timingPeriod'] = $v;
        }
        if (null !== ($v = $this->getTimingTiming())) {
            $a['timingTiming'] = $v;
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
            $sxe = new \SimpleXMLElement('<DeviceUseStatement xmlns="http://hl7.org/fhir"></DeviceUseStatement>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}