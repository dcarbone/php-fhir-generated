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
 * Describes a measurement, calculation or setting capability of a medical device.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRDeviceMetric extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Describes the type of the metric. For example: Heart Rate, PEEP Setting, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Describes the unique identification of this metric that has been assigned by the device or gateway software. For example: handle ID.  It should be noted that in order to make the identifier unique, the system element of the identifier should be set to the unique identifier of the device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Describes the unit that an observed value determined for this metric will have. For example: Percent, Seconds, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $unit = null;

    /**
     * Describes the link to the  Device that this DeviceMetric belongs to and that contains administrative device information such as manufacture, serial number, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $source = null;

    /**
     * Describes the link to the  DeviceComponent that this DeviceMetric belongs to and that provide information about the location of this DeviceMetric in the containment structure of the parent Device. An example would be a DeviceComponent that represents a Channel. This reference can be used by a client application to distinguish DeviceMetrics that have the same type, but should be interpreted based on their containment location.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $parent = null;

    /**
     * Indicates current operational state of the device. For example: On, Off, Standby, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricOperationalStatus
     */
    public $operationalStatus = null;

    /**
     * Describes the color representation for the metric. This is often used to aid clinicians to track and identify parameter types by color. In practice, consider a Patient Monitor that has ECG/HR and Pleth for example; the parameters are displayed in different characteristic colors, such as HR-blue, BP-green, and PR and SpO2- magenta.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricColor
     */
    public $color = null;

    /**
     * Indicates the category of the observation generation process. A DeviceMetric can be for example a setting, measurement, or calculation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCategory
     */
    public $category = null;

    /**
     * Describes the measurement repetition time. This is not necessarily the same as the update period. The measurement repetition time can range from milliseconds up to hours. An example for a measurement repetition time in the range of milliseconds is the sampling rate of an ECG. An example for a measurement repetition time in the range of hours is a NIBP that is triggered automatically every hour. The update period may be different than the measurement repetition time, if the device does not update the published observed value with the same frequency as it was measured.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public $measurementPeriod = null;

    /**
     * Describes the calibrations that have been performed or that are required to be performed.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDeviceMetric\FHIRDeviceMetricCalibration[]
     */
    public $calibration = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'DeviceMetric';

    /**
     * Describes the type of the metric. For example: Heart Rate, PEEP Setting, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Describes the type of the metric. For example: Heart Rate, PEEP Setting, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Describes the unique identification of this metric that has been assigned by the device or gateway software. For example: handle ID.  It should be noted that in order to make the identifier unique, the system element of the identifier should be set to the unique identifier of the device.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Describes the unique identification of this metric that has been assigned by the device or gateway software. For example: handle ID.  It should be noted that in order to make the identifier unique, the system element of the identifier should be set to the unique identifier of the device.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Describes the unit that an observed value determined for this metric will have. For example: Percent, Seconds, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Describes the unit that an observed value determined for this metric will have. For example: Percent, Seconds, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $unit
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Describes the link to the  Device that this DeviceMetric belongs to and that contains administrative device information such as manufacture, serial number, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Describes the link to the  Device that this DeviceMetric belongs to and that contains administrative device information such as manufacture, serial number, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Describes the link to the  DeviceComponent that this DeviceMetric belongs to and that provide information about the location of this DeviceMetric in the containment structure of the parent Device. An example would be a DeviceComponent that represents a Channel. This reference can be used by a client application to distinguish DeviceMetrics that have the same type, but should be interpreted based on their containment location.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Describes the link to the  DeviceComponent that this DeviceMetric belongs to and that provide information about the location of this DeviceMetric in the containment structure of the parent Device. An example would be a DeviceComponent that represents a Channel. This reference can be used by a client application to distinguish DeviceMetrics that have the same type, but should be interpreted based on their containment location.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $parent
     * @return $this
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Indicates current operational state of the device. For example: On, Off, Standby, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricOperationalStatus
     */
    public function getOperationalStatus()
    {
        return $this->operationalStatus;
    }

    /**
     * Indicates current operational state of the device. For example: On, Off, Standby, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricOperationalStatus $operationalStatus
     * @return $this
     */
    public function setOperationalStatus($operationalStatus)
    {
        $this->operationalStatus = $operationalStatus;
        return $this;
    }

    /**
     * Describes the color representation for the metric. This is often used to aid clinicians to track and identify parameter types by color. In practice, consider a Patient Monitor that has ECG/HR and Pleth for example; the parameters are displayed in different characteristic colors, such as HR-blue, BP-green, and PR and SpO2- magenta.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricColor
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Describes the color representation for the metric. This is often used to aid clinicians to track and identify parameter types by color. In practice, consider a Patient Monitor that has ECG/HR and Pleth for example; the parameters are displayed in different characteristic colors, such as HR-blue, BP-green, and PR and SpO2- magenta.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricColor $color
     * @return $this
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * Indicates the category of the observation generation process. A DeviceMetric can be for example a setting, measurement, or calculation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCategory
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Indicates the category of the observation generation process. A DeviceMetric can be for example a setting, measurement, or calculation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCategory $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Describes the measurement repetition time. This is not necessarily the same as the update period. The measurement repetition time can range from milliseconds up to hours. An example for a measurement repetition time in the range of milliseconds is the sampling rate of an ECG. An example for a measurement repetition time in the range of hours is a NIBP that is triggered automatically every hour. The update period may be different than the measurement repetition time, if the device does not update the published observed value with the same frequency as it was measured.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getMeasurementPeriod()
    {
        return $this->measurementPeriod;
    }

    /**
     * Describes the measurement repetition time. This is not necessarily the same as the update period. The measurement repetition time can range from milliseconds up to hours. An example for a measurement repetition time in the range of milliseconds is the sampling rate of an ECG. An example for a measurement repetition time in the range of hours is a NIBP that is triggered automatically every hour. The update period may be different than the measurement repetition time, if the device does not update the published observed value with the same frequency as it was measured.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $measurementPeriod
     * @return $this
     */
    public function setMeasurementPeriod($measurementPeriod)
    {
        $this->measurementPeriod = $measurementPeriod;
        return $this;
    }

    /**
     * Describes the calibrations that have been performed or that are required to be performed.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRDeviceMetric\FHIRDeviceMetricCalibration[]
     */
    public function getCalibration()
    {
        return $this->calibration;
    }

    /**
     * Describes the calibrations that have been performed or that are required to be performed.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRDeviceMetric\FHIRDeviceMetricCalibration $calibration
     * @return $this
     */
    public function addCalibration($calibration)
    {
        $this->calibration[] = $calibration;
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
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->identifier) $json['identifier'] = $this->identifier;
        if (null !== $this->unit) $json['unit'] = $this->unit;
        if (null !== $this->source) $json['source'] = $this->source;
        if (null !== $this->parent) $json['parent'] = $this->parent;
        if (null !== $this->operationalStatus) $json['operationalStatus'] = $this->operationalStatus;
        if (null !== $this->color) $json['color'] = $this->color;
        if (null !== $this->category) $json['category'] = $this->category;
        if (null !== $this->measurementPeriod) $json['measurementPeriod'] = $this->measurementPeriod;
        if (0 < count($this->calibration)) {
            $json['calibration'] = [];
            foreach($this->calibration as $calibration) {
                $json['calibration'][] = $calibration;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<DeviceMetric xmlns="http://hl7.org/fhir"></DeviceMetric>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (null !== $this->unit) $this->unit->xmlSerialize(true, $sxe->addChild('unit'));
        if (null !== $this->source) $this->source->xmlSerialize(true, $sxe->addChild('source'));
        if (null !== $this->parent) $this->parent->xmlSerialize(true, $sxe->addChild('parent'));
        if (null !== $this->operationalStatus) $this->operationalStatus->xmlSerialize(true, $sxe->addChild('operationalStatus'));
        if (null !== $this->color) $this->color->xmlSerialize(true, $sxe->addChild('color'));
        if (null !== $this->category) $this->category->xmlSerialize(true, $sxe->addChild('category'));
        if (null !== $this->measurementPeriod) $this->measurementPeriod->xmlSerialize(true, $sxe->addChild('measurementPeriod'));
        if (0 < count($this->calibration)) {
            foreach($this->calibration as $calibration) {
                $calibration->xmlSerialize(true, $sxe->addChild('calibration'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}