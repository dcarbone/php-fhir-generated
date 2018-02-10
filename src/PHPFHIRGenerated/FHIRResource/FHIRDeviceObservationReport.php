<?php namespace PHPFHIRGenerated\FHIRResource;

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

use PHPFHIRGenerated\FHIRResource\FHIRResource;

/**
 * Describes the data produced by a device at a point in time.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRDeviceObservationReport extends FHIRResource implements \JsonSerializable
{
    /**
     * The point in time that the values are reported.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $instant = null;

    /**
     * An identifier assigned to this observation bu the source device that made the observation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Identification information for the device that is the source of the data.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $source = null;

    /**
     * The subject of the measurement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $subject = null;

    /**
     * A medical-related subsystem of a medical device.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDeviceObservationReport\FHIRDeviceObservationReportVirtualDevice[]
     */
    public $virtualDevice = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'DeviceObservationReport';

    /**
     * The point in time that the values are reported.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getInstant()
    {
        return $this->instant;
    }

    /**
     * The point in time that the values are reported.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $instant
     * @return $this
     */
    public function setInstant($instant)
    {
        $this->instant = $instant;
        return $this;
    }

    /**
     * An identifier assigned to this observation bu the source device that made the observation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier assigned to this observation bu the source device that made the observation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Identification information for the device that is the source of the data.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Identification information for the device that is the source of the data.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * The subject of the measurement.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The subject of the measurement.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * A medical-related subsystem of a medical device.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRDeviceObservationReport\FHIRDeviceObservationReportVirtualDevice[]
     */
    public function getVirtualDevice()
    {
        return $this->virtualDevice;
    }

    /**
     * A medical-related subsystem of a medical device.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRDeviceObservationReport\FHIRDeviceObservationReportVirtualDevice $virtualDevice
     * @return $this
     */
    public function addVirtualDevice($virtualDevice)
    {
        $this->virtualDevice[] = $virtualDevice;
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
        if (null !== $this->instant) $json['instant'] = $this->instant;
        if (null !== $this->identifier) $json['identifier'] = $this->identifier;
        if (null !== $this->source) $json['source'] = $this->source;
        if (null !== $this->subject) $json['subject'] = $this->subject;
        if (0 < count($this->virtualDevice)) {
            $json['virtualDevice'] = [];
            foreach($this->virtualDevice as $virtualDevice) {
                $json['virtualDevice'][] = $virtualDevice;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<DeviceObservationReport xmlns="http://hl7.org/fhir"></DeviceObservationReport>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->instant) $this->instant->xmlSerialize(true, $sxe->addChild('instant'));
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (null !== $this->source) $this->source->xmlSerialize(true, $sxe->addChild('source'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (0 < count($this->virtualDevice)) {
            foreach($this->virtualDevice as $virtualDevice) {
                $virtualDevice->xmlSerialize(true, $sxe->addChild('virtualDevice'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}