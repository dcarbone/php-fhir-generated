<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:04+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDeviceMetricCategory;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDeviceMetricColor;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDeviceMetricOperationalStatus;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * Describes a measurement, calculation or setting capability of a medical device.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRDeviceMetric
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRDeviceMetric extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_CALIBRATION = 'calibration';
    const FIELD_CATEGORY = 'category';
    const FIELD_CATEGORY_EXT = '_category';
    const FIELD_COLOR = 'color';
    const FIELD_COLOR_EXT = '_color';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_MEASUREMENT_PERIOD = 'measurementPeriod';
    const FIELD_OPERATIONAL_STATUS = 'operationalStatus';
    const FIELD_OPERATIONAL_STATUS_EXT = '_operationalStatus';
    const FIELD_PARENT = 'parent';
    const FIELD_SOURCE = 'source';
    const FIELD_TYPE = 'type';
    const FIELD_UNIT = 'unit';

    /**
     * Describes a measurement, calculation or setting capability of a medical device.
     *
     * Describes the calibrations that have been performed or that are required to be
     * performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration[]
     */
    private $calibration = [];
    /**
     * Describes the category of the metric.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the category of the observation generation process. A DeviceMetric can
     * be for example a setting, measurement, or calculation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDeviceMetricCategory
     */
    private $category = null;
    /**
     * Describes the typical color of representation.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the color representation for the metric. This is often used to aid
     * clinicians to track and identify parameter types by color. In practice, consider
     * a Patient Monitor that has ECG/HR and Pleth for example; the parameters are
     * displayed in different characteristic colors, such as HR-blue, BP-green, and PR
     * and SpO2- magenta.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDeviceMetricColor
     */
    private $color = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the unique identification of this metric that has been assigned by the
     * device or gateway software. For example: handle ID. It should be noted that in
     * order to make the identifier unique, the system element of the identifier should
     * be set to the unique identifier of the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    private $identifier = null;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the measurement repetition time. This is not necessarily the same as
     * the update period. The measurement repetition time can range from milliseconds
     * up to hours. An example for a measurement repetition time in the range of
     * milliseconds is the sampling rate of an ECG. An example for a measurement
     * repetition time in the range of hours is a NIBP that is triggered automatically
     * every hour. The update period may be different than the measurement repetition
     * time, if the device does not update the published observed value with the same
     * frequency as it was measured.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming
     */
    private $measurementPeriod = null;
    /**
     * Describes the operational status of the DeviceMetric.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates current operational state of the device. For example: On, Off,
     * Standby, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDeviceMetricOperationalStatus
     */
    private $operationalStatus = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the link to the DeviceComponent that this DeviceMetric belongs to and
     * that provide information about the location of this DeviceMetric in the
     * containment structure of the parent Device. An example would be a
     * DeviceComponent that represents a Channel. This reference can be used by a
     * client application to distinguish DeviceMetrics that have the same type, but
     * should be interpreted based on their containment location.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $parent = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the link to the Device that this DeviceMetric belongs to and that
     * contains administrative device information such as manufacturer, serial number,
     * etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $source = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the type of the metric. For example: Heart Rate, PEEP Setting, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the unit that an observed value determined for this metric will have.
     * For example: Percent, Seconds, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    private $unit = null;

    /**
     * FHIRDeviceMetric Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceMetric::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CALIBRATION])) {
            if (is_array($data[self::FIELD_CALIBRATION])) {
                foreach($data[self::FIELD_CALIBRATION] as $v) {
                    if ($v instanceof FHIRDeviceMetricCalibration) {
                        $this->addCalibration($v);
                    } else {
                        $this->addCalibration(new FHIRDeviceMetricCalibration($v));
                    }
                }
            } else if ($data[self::FIELD_CALIBRATION] instanceof FHIRDeviceMetricCalibration) {
                $this->addCalibration($data[self::FIELD_CALIBRATION]);
            } else {
                $this->addCalibration(new FHIRDeviceMetricCalibration($data[self::FIELD_CALIBRATION]));
            }
        }
        if (isset($data[self::FIELD_CATEGORY])) {
            $ext = (isset($data[self::FIELD_CATEGORY_EXT]) && is_array($data[self::FIELD_CATEGORY_EXT]))
                ? $data[self::FIELD_CATEGORY_EXT]
                : null;
            if ($data[self::FIELD_CATEGORY] instanceof FHIRDeviceMetricCategory) {
                $this->setCategory($data[self::FIELD_CATEGORY]);
            } elseif ($ext && is_scalar($data[self::FIELD_CATEGORY])) {
                $this->setCategory(new FHIRDeviceMetricCategory([FHIRDeviceMetricCategory::FIELD_VALUE => $data[self::FIELD_CATEGORY]] + $ext));
            } else {
                $this->setCategory(new FHIRDeviceMetricCategory($data[self::FIELD_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_COLOR])) {
            $ext = (isset($data[self::FIELD_COLOR_EXT]) && is_array($data[self::FIELD_COLOR_EXT]))
                ? $data[self::FIELD_COLOR_EXT]
                : null;
            if ($data[self::FIELD_COLOR] instanceof FHIRDeviceMetricColor) {
                $this->setColor($data[self::FIELD_COLOR]);
            } elseif ($ext && is_scalar($data[self::FIELD_COLOR])) {
                $this->setColor(new FHIRDeviceMetricColor([FHIRDeviceMetricColor::FIELD_VALUE => $data[self::FIELD_COLOR]] + $ext));
            } else {
                $this->setColor(new FHIRDeviceMetricColor($data[self::FIELD_COLOR]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT]))
                ? $data[self::FIELD_IDENTIFIER_EXT]
                : null;
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_IDENTIFIER])) {
                $this->setIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_IDENTIFIER]] + $ext));
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_MEASUREMENT_PERIOD])) {
            if ($data[self::FIELD_MEASUREMENT_PERIOD] instanceof FHIRTiming) {
                $this->setMeasurementPeriod($data[self::FIELD_MEASUREMENT_PERIOD]);
            } else {
                $this->setMeasurementPeriod(new FHIRTiming($data[self::FIELD_MEASUREMENT_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_OPERATIONAL_STATUS])) {
            $ext = (isset($data[self::FIELD_OPERATIONAL_STATUS_EXT]) && is_array($data[self::FIELD_OPERATIONAL_STATUS_EXT]))
                ? $data[self::FIELD_OPERATIONAL_STATUS_EXT]
                : null;
            if ($data[self::FIELD_OPERATIONAL_STATUS] instanceof FHIRDeviceMetricOperationalStatus) {
                $this->setOperationalStatus($data[self::FIELD_OPERATIONAL_STATUS]);
            } elseif ($ext && is_scalar($data[self::FIELD_OPERATIONAL_STATUS])) {
                $this->setOperationalStatus(new FHIRDeviceMetricOperationalStatus([FHIRDeviceMetricOperationalStatus::FIELD_VALUE => $data[self::FIELD_OPERATIONAL_STATUS]] + $ext));
            } else {
                $this->setOperationalStatus(new FHIRDeviceMetricOperationalStatus($data[self::FIELD_OPERATIONAL_STATUS]));
            }
        }
        if (isset($data[self::FIELD_PARENT])) {
            if ($data[self::FIELD_PARENT] instanceof FHIRReference) {
                $this->setParent($data[self::FIELD_PARENT]);
            } else {
                $this->setParent(new FHIRReference($data[self::FIELD_PARENT]));
            }
        }
        if (isset($data[self::FIELD_SOURCE])) {
            if ($data[self::FIELD_SOURCE] instanceof FHIRReference) {
                $this->setSource($data[self::FIELD_SOURCE]);
            } else {
                $this->setSource(new FHIRReference($data[self::FIELD_SOURCE]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_UNIT])) {
            if ($data[self::FIELD_UNIT] instanceof FHIRCodeableConcept) {
                $this->setUnit($data[self::FIELD_UNIT]);
            } else {
                $this->setUnit(new FHIRCodeableConcept($data[self::FIELD_UNIT]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceMetric
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<DeviceMetric{$xmlns}></DeviceMetric>";
    }

    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * Describes a measurement, calculation or setting capability of a medical device.
     *
     * Describes the calibrations that have been performed or that are required to be
     * performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration[]
     */
    public function getCalibration()
    {
        return $this->calibration;
    }

    /**
     * Describes a measurement, calculation or setting capability of a medical device.
     *
     * Describes the calibrations that have been performed or that are required to be
     * performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration $calibration
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceMetric
     */
    public function addCalibration(FHIRDeviceMetricCalibration $calibration = null)
    {
        $this->calibration[] = $calibration;
        return $this;
    }

    /**
     * Describes a measurement, calculation or setting capability of a medical device.
     *
     * Describes the calibrations that have been performed or that are required to be
     * performed.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration[] $calibration
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceMetric
     */
    public function setCalibration(array $calibration = [])
    {
        $this->calibration = [];
        if ([] === $calibration) {
            return $this;
        }
        foreach($calibration as $v) {
            if ($v instanceof FHIRDeviceMetricCalibration) {
                $this->addCalibration($v);
            } else {
                $this->addCalibration(new FHIRDeviceMetricCalibration($v));
            }
        }
        return $this;
    }

    /**
     * Describes the category of the metric.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the category of the observation generation process. A DeviceMetric can
     * be for example a setting, measurement, or calculation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDeviceMetricCategory
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Describes the category of the metric.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates the category of the observation generation process. A DeviceMetric can
     * be for example a setting, measurement, or calculation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDeviceMetricCategory $category
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceMetric
     */
    public function setCategory(FHIRDeviceMetricCategory $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Describes the typical color of representation.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the color representation for the metric. This is often used to aid
     * clinicians to track and identify parameter types by color. In practice, consider
     * a Patient Monitor that has ECG/HR and Pleth for example; the parameters are
     * displayed in different characteristic colors, such as HR-blue, BP-green, and PR
     * and SpO2- magenta.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDeviceMetricColor
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Describes the typical color of representation.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the color representation for the metric. This is often used to aid
     * clinicians to track and identify parameter types by color. In practice, consider
     * a Patient Monitor that has ECG/HR and Pleth for example; the parameters are
     * displayed in different characteristic colors, such as HR-blue, BP-green, and PR
     * and SpO2- magenta.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDeviceMetricColor $color
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceMetric
     */
    public function setColor(FHIRDeviceMetricColor $color = null)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the unique identification of this metric that has been assigned by the
     * device or gateway software. For example: handle ID. It should be noted that in
     * order to make the identifier unique, the system element of the identifier should
     * be set to the unique identifier of the device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the unique identification of this metric that has been assigned by the
     * device or gateway software. For example: handle ID. It should be noted that in
     * order to make the identifier unique, the system element of the identifier should
     * be set to the unique identifier of the device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceMetric
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the measurement repetition time. This is not necessarily the same as
     * the update period. The measurement repetition time can range from milliseconds
     * up to hours. An example for a measurement repetition time in the range of
     * milliseconds is the sampling rate of an ECG. An example for a measurement
     * repetition time in the range of hours is a NIBP that is triggered automatically
     * every hour. The update period may be different than the measurement repetition
     * time, if the device does not update the published observed value with the same
     * frequency as it was measured.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming
     */
    public function getMeasurementPeriod()
    {
        return $this->measurementPeriod;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the measurement repetition time. This is not necessarily the same as
     * the update period. The measurement repetition time can range from milliseconds
     * up to hours. An example for a measurement repetition time in the range of
     * milliseconds is the sampling rate of an ECG. An example for a measurement
     * repetition time in the range of hours is a NIBP that is triggered automatically
     * every hour. The update period may be different than the measurement repetition
     * time, if the device does not update the published observed value with the same
     * frequency as it was measured.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming $measurementPeriod
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceMetric
     */
    public function setMeasurementPeriod(FHIRTiming $measurementPeriod = null)
    {
        $this->measurementPeriod = $measurementPeriod;
        return $this;
    }

    /**
     * Describes the operational status of the DeviceMetric.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates current operational state of the device. For example: On, Off,
     * Standby, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDeviceMetricOperationalStatus
     */
    public function getOperationalStatus()
    {
        return $this->operationalStatus;
    }

    /**
     * Describes the operational status of the DeviceMetric.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates current operational state of the device. For example: On, Off,
     * Standby, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDeviceMetricOperationalStatus $operationalStatus
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceMetric
     */
    public function setOperationalStatus(FHIRDeviceMetricOperationalStatus $operationalStatus = null)
    {
        $this->operationalStatus = $operationalStatus;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the link to the DeviceComponent that this DeviceMetric belongs to and
     * that provide information about the location of this DeviceMetric in the
     * containment structure of the parent Device. An example would be a
     * DeviceComponent that represents a Channel. This reference can be used by a
     * client application to distinguish DeviceMetrics that have the same type, but
     * should be interpreted based on their containment location.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the link to the DeviceComponent that this DeviceMetric belongs to and
     * that provide information about the location of this DeviceMetric in the
     * containment structure of the parent Device. An example would be a
     * DeviceComponent that represents a Channel. This reference can be used by a
     * client application to distinguish DeviceMetrics that have the same type, but
     * should be interpreted based on their containment location.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $parent
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceMetric
     */
    public function setParent(FHIRReference $parent = null)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the link to the Device that this DeviceMetric belongs to and that
     * contains administrative device information such as manufacturer, serial number,
     * etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the link to the Device that this DeviceMetric belongs to and that
     * contains administrative device information such as manufacturer, serial number,
     * etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $source
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceMetric
     */
    public function setSource(FHIRReference $source = null)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the type of the metric. For example: Heart Rate, PEEP Setting, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the type of the metric. For example: Heart Rate, PEEP Setting, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $type
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceMetric
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the unit that an observed value determined for this metric will have.
     * For example: Percent, Seconds, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the unit that an observed value determined for this metric will have.
     * For example: Percent, Seconds, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $unit
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceMetric
     */
    public function setUnit(FHIRCodeableConcept $unit = null)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceMetric $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceMetric
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRDeviceMetric::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDeviceMetric::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRDeviceMetric;
        } elseif (!is_object($type) || !($type instanceof FHIRDeviceMetric)) {
            throw new \RuntimeException(sprintf(
                'FHIRDeviceMetric::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceMetric or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->calibration)) {
            foreach($children->calibration as $child) {
                $type->addCalibration(FHIRDeviceMetricCalibration::xmlUnserialize($child));
            }
        }
        if (isset($children->category)) {
            $type->setCategory(FHIRDeviceMetricCategory::xmlUnserialize($children->category));
        }
        if (isset($children->color)) {
            $type->setColor(FHIRDeviceMetricColor::xmlUnserialize($children->color));
        }
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRIdentifier::xmlUnserialize($children->identifier));
        }
        if (isset($children->measurementPeriod)) {
            $type->setMeasurementPeriod(FHIRTiming::xmlUnserialize($children->measurementPeriod));
        }
        if (isset($children->operationalStatus)) {
            $type->setOperationalStatus(FHIRDeviceMetricOperationalStatus::xmlUnserialize($children->operationalStatus));
        }
        if (isset($children->parent)) {
            $type->setParent(FHIRReference::xmlUnserialize($children->parent));
        }
        if (isset($children->source)) {
            $type->setSource(FHIRReference::xmlUnserialize($children->source));
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
        }
        if (isset($children->unit)) {
            $type->setUnit(FHIRCodeableConcept::xmlUnserialize($children->unit));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);

        if ([] !== ($vs = $this->getCalibration())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CALIBRATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getCategory())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getColor())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COLOR, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getMeasurementPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MEASUREMENT_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOperationalStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OPERATIONAL_STATUS, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getParent())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PARENT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getSource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getUnit())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_UNIT, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getCalibration())) {
            $a[self::FIELD_CALIBRATION] = $vs;
        }
        if (null !== ($v = $this->getCategory())) {
            $a[self::FIELD_CATEGORY] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_CATEGORY_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getColor())) {
            $a[self::FIELD_COLOR] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_COLOR_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_IDENTIFIER_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getMeasurementPeriod())) {
            $a[self::FIELD_MEASUREMENT_PERIOD] = $v;
        }
        if (null !== ($v = $this->getOperationalStatus())) {
            $a[self::FIELD_OPERATIONAL_STATUS] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_OPERATIONAL_STATUS_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getParent())) {
            $a[self::FIELD_PARENT] = $v;
        }
        if (null !== ($v = $this->getSource())) {
            $a[self::FIELD_SOURCE] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if (null !== ($v = $this->getUnit())) {
            $a[self::FIELD_UNIT] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}