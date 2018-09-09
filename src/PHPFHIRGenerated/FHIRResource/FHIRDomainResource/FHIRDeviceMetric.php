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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCategory;
use PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricColor;
use PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricOperationalStatus;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Describes a measurement, calculation or setting capability of a medical device.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRDeviceMetric
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRDeviceMetric extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'DeviceMetric';

    /**
     * Describes the calibrations that have been performed or that are required to be performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration
     */
    public $calibration = null;

    /**
     * Indicates the category of the observation generation process. A DeviceMetric can be for example a setting, measurement, or calculation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCategory
     */
    public $category = null;

    /**
     * Describes the color representation for the metric. This is often used to aid clinicians to track and identify parameter types by color. In practice, consider a Patient Monitor that has ECG/HR and Pleth for example; the parameters are displayed in different characteristic colors, such as HR-blue, BP-green, and PR and SpO2- magenta.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricColor
     */
    public $color = null;

    /**
     * Unique instance identifiers assigned to a device by the device or gateway software, manufacturers, other organizations or owners. For example: handle ID.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Describes the measurement repetition time. This is not necessarily the same as the update period. The measurement repetition time can range from milliseconds up to hours. An example for a measurement repetition time in the range of milliseconds is the sampling rate of an ECG. An example for a measurement repetition time in the range of hours is a NIBP that is triggered automatically every hour. The update period may be different than the measurement repetition time, if the device does not update the published observed value with the same frequency as it was measured.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public $measurementPeriod = null;

    /**
     * Indicates current operational state of the device. For example: On, Off, Standby, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricOperationalStatus
     */
    public $operationalStatus = null;

    /**
     * Describes the link to the  Device that this DeviceMetric belongs to and that provide information about the location of this DeviceMetric in the containment structure of the parent Device. An example would be a Device that represents a Channel. This reference can be used by a client application to distinguish DeviceMetrics that have the same type, but should be interpreted based on their containment location.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $parent = null;

    /**
     * Describes the link to the  Device that this DeviceMetric belongs to and that contains administrative device information such as manufacturer, serial number, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $source = null;

    /**
     * Describes the type of the metric. For example: Heart Rate, PEEP Setting, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Describes the unit that an observed value determined for this metric will have. For example: Percent, Seconds, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $unit = null;

    /**
     * FHIRDeviceMetric Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['calibration'])) {
                $this->setCalibration($data['calibration']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['color'])) {
                $this->setColor($data['color']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['measurementPeriod'])) {
                $this->setMeasurementPeriod($data['measurementPeriod']);
            }
            if (isset($data['operationalStatus'])) {
                $this->setOperationalStatus($data['operationalStatus']);
            }
            if (isset($data['parent'])) {
                $this->setParent($data['parent']);
            }
            if (isset($data['source'])) {
                $this->setSource($data['source']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['unit'])) {
                $this->setUnit($data['unit']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceMetric::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Describes the calibrations that have been performed or that are required to be performed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration
     * @return $this
     */
    public function setCalibration(FHIRDeviceMetricCalibration $calibration = null)
    {
        if (null === $calibration) {
            return $this; 
        }
        $this->calibration = $calibration;
        return $this;
    }

    /**
     * Describes the calibrations that have been performed or that are required to be performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration
     */
    public function getCalibration()
    {
        return $this->calibration;
    }


    /**
     * Indicates the category of the observation generation process. A DeviceMetric can be for example a setting, measurement, or calculation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCategory
     * @return $this
     */
    public function setCategory($category)
    {
        if (null === $category) {
            return $this; 
        }
        if (is_scalar($category)) {
            $category = new FHIRDeviceMetricCategory($category);
        }
        if (!($category instanceof FHIRDeviceMetricCategory)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceMetric::setCategory - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCategory or appropriate scalar value, %s seen.',
                gettype($category)
            ));
        }
        $this->category = $category;
        return $this;
    }

    /**
     * Indicates the category of the observation generation process. A DeviceMetric can be for example a setting, measurement, or calculation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCategory
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * Describes the color representation for the metric. This is often used to aid clinicians to track and identify parameter types by color. In practice, consider a Patient Monitor that has ECG/HR and Pleth for example; the parameters are displayed in different characteristic colors, such as HR-blue, BP-green, and PR and SpO2- magenta.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricColor
     * @return $this
     */
    public function setColor($color)
    {
        if (null === $color) {
            return $this; 
        }
        if (is_scalar($color)) {
            $color = new FHIRDeviceMetricColor($color);
        }
        if (!($color instanceof FHIRDeviceMetricColor)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceMetric::setColor - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricColor or appropriate scalar value, %s seen.',
                gettype($color)
            ));
        }
        $this->color = $color;
        return $this;
    }

    /**
     * Describes the color representation for the metric. This is often used to aid clinicians to track and identify parameter types by color. In practice, consider a Patient Monitor that has ECG/HR and Pleth for example; the parameters are displayed in different characteristic colors, such as HR-blue, BP-green, and PR and SpO2- magenta.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricColor
     */
    public function getColor()
    {
        return $this->color;
    }


    /**
     * Unique instance identifiers assigned to a device by the device or gateway software, manufacturers, other organizations or owners. For example: handle ID.
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
     * Unique instance identifiers assigned to a device by the device or gateway software, manufacturers, other organizations or owners. For example: handle ID.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Describes the measurement repetition time. This is not necessarily the same as the update period. The measurement repetition time can range from milliseconds up to hours. An example for a measurement repetition time in the range of milliseconds is the sampling rate of an ECG. An example for a measurement repetition time in the range of hours is a NIBP that is triggered automatically every hour. The update period may be different than the measurement repetition time, if the device does not update the published observed value with the same frequency as it was measured.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     * @return $this
     */
    public function setMeasurementPeriod(FHIRTiming $measurementPeriod = null)
    {
        if (null === $measurementPeriod) {
            return $this; 
        }
        $this->measurementPeriod = $measurementPeriod;
        return $this;
    }

    /**
     * Describes the measurement repetition time. This is not necessarily the same as the update period. The measurement repetition time can range from milliseconds up to hours. An example for a measurement repetition time in the range of milliseconds is the sampling rate of an ECG. An example for a measurement repetition time in the range of hours is a NIBP that is triggered automatically every hour. The update period may be different than the measurement repetition time, if the device does not update the published observed value with the same frequency as it was measured.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getMeasurementPeriod()
    {
        return $this->measurementPeriod;
    }


    /**
     * Indicates current operational state of the device. For example: On, Off, Standby, etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricOperationalStatus
     * @return $this
     */
    public function setOperationalStatus($operationalStatus)
    {
        if (null === $operationalStatus) {
            return $this; 
        }
        if (is_scalar($operationalStatus)) {
            $operationalStatus = new FHIRDeviceMetricOperationalStatus($operationalStatus);
        }
        if (!($operationalStatus instanceof FHIRDeviceMetricOperationalStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceMetric::setOperationalStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricOperationalStatus or appropriate scalar value, %s seen.',
                gettype($operationalStatus)
            ));
        }
        $this->operationalStatus = $operationalStatus;
        return $this;
    }

    /**
     * Indicates current operational state of the device. For example: On, Off, Standby, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricOperationalStatus
     */
    public function getOperationalStatus()
    {
        return $this->operationalStatus;
    }


    /**
     * Describes the link to the  Device that this DeviceMetric belongs to and that provide information about the location of this DeviceMetric in the containment structure of the parent Device. An example would be a Device that represents a Channel. This reference can be used by a client application to distinguish DeviceMetrics that have the same type, but should be interpreted based on their containment location.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setParent(FHIRReference $parent = null)
    {
        if (null === $parent) {
            return $this; 
        }
        $this->parent = $parent;
        return $this;
    }

    /**
     * Describes the link to the  Device that this DeviceMetric belongs to and that provide information about the location of this DeviceMetric in the containment structure of the parent Device. An example would be a Device that represents a Channel. This reference can be used by a client application to distinguish DeviceMetrics that have the same type, but should be interpreted based on their containment location.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getParent()
    {
        return $this->parent;
    }


    /**
     * Describes the link to the  Device that this DeviceMetric belongs to and that contains administrative device information such as manufacturer, serial number, etc.
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
     * Describes the link to the  Device that this DeviceMetric belongs to and that contains administrative device information such as manufacturer, serial number, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSource()
    {
        return $this->source;
    }


    /**
     * Describes the type of the metric. For example: Heart Rate, PEEP Setting, etc.
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
     * Describes the type of the metric. For example: Heart Rate, PEEP Setting, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * Describes the unit that an observed value determined for this metric will have. For example: Percent, Seconds, etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setUnit(FHIRCodeableConcept $unit = null)
    {
        if (null === $unit) {
            return $this; 
        }
        $this->unit = $unit;
        return $this;
    }

    /**
     * Describes the unit that an observed value determined for this metric will have. For example: Percent, Seconds, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getUnit()
    {
        return $this->unit;
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
        if (null !== ($v = $this->getCalibration())) {
            $a['calibration'] = $v;
        }
        if (null !== ($v = $this->getCategory())) {
            $a['category'] = $v;
        }
        if (null !== ($v = $this->getColor())) {
            $a['color'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getMeasurementPeriod())) {
            $a['measurementPeriod'] = $v;
        }
        if (null !== ($v = $this->getOperationalStatus())) {
            $a['operationalStatus'] = $v;
        }
        if (null !== ($v = $this->getParent())) {
            $a['parent'] = $v;
        }
        if (null !== ($v = $this->getSource())) {
            $a['source'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getUnit())) {
            $a['unit'] = $v;
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
            $sxe = new \SimpleXMLElement('<DeviceMetric xmlns="http://hl7.org/fhir"></DeviceMetric>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}