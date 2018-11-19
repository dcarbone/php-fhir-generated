<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCategory;
use PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricColor;
use PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricOperationalStatus;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRTiming;
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
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration[]
     */
    private $calibration = [];

    /**
     * Indicates the category of the observation generation process. A DeviceMetric can be for example a setting, measurement, or calculation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCategory
     */
    private $category = null;

    /**
     * Describes the color representation for the metric. This is often used to aid clinicians to track and identify parameter types by color. In practice, consider a Patient Monitor that has ECG/HR and Pleth for example; the parameters are displayed in different characteristic colors, such as HR-blue, BP-green, and PR and SpO2- magenta.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricColor
     */
    private $color = null;

    /**
     * Describes the unique identification of this metric that has been assigned by the device or gateway software. For example: handle ID.  It should be noted that in order to make the identifier unique, the system element of the identifier should be set to the unique identifier of the device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    private $identifier = null;

    /**
     * Describes the measurement repetition time. This is not necessarily the same as the update period. The measurement repetition time can range from milliseconds up to hours. An example for a measurement repetition time in the range of milliseconds is the sampling rate of an ECG. An example for a measurement repetition time in the range of hours is a NIBP that is triggered automatically every hour. The update period may be different than the measurement repetition time, if the device does not update the published observed value with the same frequency as it was measured.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    private $measurementPeriod = null;

    /**
     * Indicates current operational state of the device. For example: On, Off, Standby, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricOperationalStatus
     */
    private $operationalStatus = null;

    /**
     * Describes the link to the  DeviceComponent that this DeviceMetric belongs to and that provide information about the location of this DeviceMetric in the containment structure of the parent Device. An example would be a DeviceComponent that represents a Channel. This reference can be used by a client application to distinguish DeviceMetrics that have the same type, but should be interpreted based on their containment location.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $parent = null;

    /**
     * Describes the link to the  Device that this DeviceMetric belongs to and that contains administrative device information such as manufacturer, serial number, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $source = null;

    /**
     * Describes the type of the metric. For example: Heart Rate, PEEP Setting, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;

    /**
     * Describes the unit that an observed value determined for this metric will have. For example: Percent, Seconds, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $unit = null;

    /**
     * FHIRDeviceMetric Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['calibration'])) {
                $value = $data['calibration'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRDeviceMetricCalibration($v);
                        } 
                        if (!($v instanceof FHIRDeviceMetricCalibration)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceMetric::__construct - Collection field \"calibration\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addCalibration($v);
                    }
                }
            }
            if (isset($data['category'])) {
                $value = $data['category'];
                if (is_array($value)) {
                    $value = new FHIRDeviceMetricCategory($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDeviceMetricCategory($value);
                }
                if (!($value instanceof FHIRDeviceMetricCategory)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceMetric::__construct - Property \"category\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCategory or data to construct type, saw ".gettype($value)); 
                }
                $this->setCategory($value);
            }
            if (isset($data['color'])) {
                $value = $data['color'];
                if (is_array($value)) {
                    $value = new FHIRDeviceMetricColor($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDeviceMetricColor($value);
                }
                if (!($value instanceof FHIRDeviceMetricColor)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceMetric::__construct - Property \"color\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricColor or data to construct type, saw ".gettype($value)); 
                }
                $this->setColor($value);
            }
            if (isset($data['identifier'])) {
                $value = $data['identifier'];
                if (is_array($value)) {
                    $value = new FHIRIdentifier($value);
                } 
                if (!($value instanceof FHIRIdentifier)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceMetric::__construct - Property \"identifier\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRIdentifier or data to construct type, saw ".gettype($value)); 
                }
                $this->setIdentifier($value);
            }
            if (isset($data['measurementPeriod'])) {
                $value = $data['measurementPeriod'];
                if (is_array($value)) {
                    $value = new FHIRTiming($value);
                } 
                if (!($value instanceof FHIRTiming)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceMetric::__construct - Property \"measurementPeriod\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRTiming or data to construct type, saw ".gettype($value)); 
                }
                $this->setMeasurementPeriod($value);
            }
            if (isset($data['operationalStatus'])) {
                $value = $data['operationalStatus'];
                if (is_array($value)) {
                    $value = new FHIRDeviceMetricOperationalStatus($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDeviceMetricOperationalStatus($value);
                }
                if (!($value instanceof FHIRDeviceMetricOperationalStatus)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceMetric::__construct - Property \"operationalStatus\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricOperationalStatus or data to construct type, saw ".gettype($value)); 
                }
                $this->setOperationalStatus($value);
            }
            if (isset($data['parent'])) {
                $value = $data['parent'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceMetric::__construct - Property \"parent\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setParent($value);
            }
            if (isset($data['source'])) {
                $value = $data['source'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceMetric::__construct - Property \"source\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setSource($value);
            }
            if (isset($data['type'])) {
                $value = $data['type'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceMetric::__construct - Property \"type\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value)); 
                }
                $this->setType($value);
            }
            if (isset($data['unit'])) {
                $value = $data['unit'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceMetric::__construct - Property \"unit\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value)); 
                }
                $this->setUnit($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDeviceMetric::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Describes the calibrations that have been performed or that are required to be performed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration
     * @return $this
     */
    public function addCalibration(FHIRDeviceMetricCalibration $calibration = null)
    {
        if (null === $calibration) {
            return $this; 
        }
        $this->calibration[] = $calibration;
        return $this;
    }

    /**
     * Describes the calibrations that have been performed or that are required to be performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration[]
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
     * Describes the unique identification of this metric that has been assigned by the device or gateway software. For example: handle ID.  It should be noted that in order to make the identifier unique, the system element of the identifier should be set to the unique identifier of the device.
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
     * Describes the unique identification of this metric that has been assigned by the device or gateway software. For example: handle ID.  It should be noted that in order to make the identifier unique, the system element of the identifier should be set to the unique identifier of the device.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Describes the measurement repetition time. This is not necessarily the same as the update period. The measurement repetition time can range from milliseconds up to hours. An example for a measurement repetition time in the range of milliseconds is the sampling rate of an ECG. An example for a measurement repetition time in the range of hours is a NIBP that is triggered automatically every hour. The update period may be different than the measurement repetition time, if the device does not update the published observed value with the same frequency as it was measured.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTiming
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
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTiming
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
     * Describes the link to the  DeviceComponent that this DeviceMetric belongs to and that provide information about the location of this DeviceMetric in the containment structure of the parent Device. An example would be a DeviceComponent that represents a Channel. This reference can be used by a client application to distinguish DeviceMetrics that have the same type, but should be interpreted based on their containment location.
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
     * Describes the link to the  DeviceComponent that this DeviceMetric belongs to and that provide information about the location of this DeviceMetric in the containment structure of the parent Device. An example would be a DeviceComponent that represents a Channel. This reference can be used by a client application to distinguish DeviceMetrics that have the same type, but should be interpreted based on their containment location.
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
        if (0 < count($values = $this->getCalibration())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['calibration'] = $vs;
            }
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
        if (0 < count($values = $this->getCalibration())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('calibration'));
                }
            }
        }
        if (null !== ($v = $this->getCategory())) {
            $v->xmlSerialize(true, $sxe->addChild('category'));
        }
        if (null !== ($v = $this->getColor())) {
            $v->xmlSerialize(true, $sxe->addChild('color'));
        }
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize(true, $sxe->addChild('identifier'));
        }
        if (null !== ($v = $this->getMeasurementPeriod())) {
            $v->xmlSerialize(true, $sxe->addChild('measurementPeriod'));
        }
        if (null !== ($v = $this->getOperationalStatus())) {
            $v->xmlSerialize(true, $sxe->addChild('operationalStatus'));
        }
        if (null !== ($v = $this->getParent())) {
            $v->xmlSerialize(true, $sxe->addChild('parent'));
        }
        if (null !== ($v = $this->getSource())) {
            $v->xmlSerialize(true, $sxe->addChild('source'));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize(true, $sxe->addChild('type'));
        }
        if (null !== ($v = $this->getUnit())) {
            $v->xmlSerialize(true, $sxe->addChild('unit'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}