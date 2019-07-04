<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 4th, 2019 22:05+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCalibrationState;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCalibrationType;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * Describes a measurement, calculation or setting capability of a medical device.
 *
 * Class FHIRDeviceMetricCalibration
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric
 */
class FHIRDeviceMetricCalibration extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_DOT_CALIBRATION;

    const FIELD_STATE = 'state';
    const FIELD_TIME = 'time';
    const FIELD_TIME_EXT = '_time';
    const FIELD_TYPE = 'type';

    /**
     * Describes the state of a metric calibration.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the state of the calibration.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCalibrationState
     */
    private $state = null;

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the time last calibration has been performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    private $time = null;

    /**
     * Describes the type of a metric calibration.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the type of the calibration method.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCalibrationType
     */
    private $type = null;

    /**
     * FHIRDeviceMetricCalibration Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceMetricCalibration::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_STATE])) {
            if ($data[self::FIELD_STATE] instanceof FHIRDeviceMetricCalibrationState) {
                $this->setState($data[self::FIELD_STATE]);
            } else {
                $this->setState(new FHIRDeviceMetricCalibrationState($data[self::FIELD_STATE]));
            }
        }
        if (isset($data[self::FIELD_TIME])) {
            $ext = (isset($data[self::FIELD_TIME_EXT]) && is_array($data[self::FIELD_TIME_EXT]))
                ? $data[self::FIELD_TIME_EXT]
                : null;
            if ($data[self::FIELD_TIME] instanceof FHIRInstant) {
                $this->setTime($data[self::FIELD_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_TIME])) {
                $this->setTime(new FHIRInstant([FHIRInstant::FIELD_VALUE => $data[self::FIELD_TIME]] + $ext));
            } else {
                $this->setTime(new FHIRInstant($data[self::FIELD_TIME]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRDeviceMetricCalibrationType) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRDeviceMetricCalibrationType($data[self::FIELD_TYPE]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * Describes the state of a metric calibration.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the state of the calibration.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCalibrationState
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Describes the state of a metric calibration.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the state of the calibration.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCalibrationState $state
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration
     */
    public function setState(FHIRDeviceMetricCalibrationState $state = null)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the time last calibration has been performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the time last calibration has been performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInstant $time
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration
     */
    public function setTime($time = null)
    {
        if (null === $time) {
            $this->time = null;
            return $this;
        }
        if ($time instanceof FHIRInstant) {
            $this->time = $time;
            return $this;
        }
        $this->time = new FHIRInstant($time);
        return $this;
    }

    /**
     * Describes the type of a metric calibration.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the type of the calibration method.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCalibrationType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Describes the type of a metric calibration.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Describes the type of the calibration method.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCalibrationType $type
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration
     */
    public function setType(FHIRDeviceMetricCalibrationType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRDeviceMetricCalibration::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDeviceMetricCalibration::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRDeviceMetricCalibration);
        } elseif (!is_object($type) || !($type instanceof FHIRDeviceMetricCalibration)) {
            throw new \RuntimeException(sprintf(
                'FHIRDeviceMetricCalibration::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->state)) {
            $type->setState(FHIRDeviceMetricCalibrationState::xmlUnserialize($children->state));
        }
        if (isset($attributes->time)) {
            $type->setTime((string)$attributes->time);
        }
        if (isset($children->time)) {
            $type->setTime(FHIRInstant::xmlUnserialize($children->time));
        }
        if (isset($children->type)) {
            $type->setType(FHIRDeviceMetricCalibrationType::xmlUnserialize($children->type));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<DeviceMetricCalibration xmlns="http://hl7.org/fhir"></DeviceMetricCalibration>');
        }
        if (null !== ($v = $this->getState())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATE));
        }
        if (null !== ($v = $this->getTime())) {
            $sxe->addAttribute(self::FIELD_TIME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_TIME));
            }
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getState())) {
            $a[self::FIELD_STATE] = $v;
        }
        if (null !== ($v = $this->getTime())) {
            $a[self::FIELD_TIME] = (string)$v;
            $a[self::FIELD_TIME_EXT] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}