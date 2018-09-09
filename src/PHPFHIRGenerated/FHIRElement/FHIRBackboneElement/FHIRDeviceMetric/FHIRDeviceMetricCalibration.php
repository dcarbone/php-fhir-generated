<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCalibrationState;
use PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCalibrationType;
use PHPFHIRGenerated\FHIRElement\FHIRInstant;

/**
 * Describes a measurement, calculation or setting capability of a medical device.
 *
 * Class FHIRDeviceMetricCalibration
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric
 */
class FHIRDeviceMetricCalibration extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'DeviceMetric.Calibration';

    /**
     * Describes the state of the calibration.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCalibrationState
     */
    public $state = null;

    /**
     * Describes the time last calibration has been performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $time = null;

    /**
     * Describes the type of the calibration method.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCalibrationType
     */
    public $type = null;

    /**
     * FHIRDeviceMetricCalibration Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['state'])) {
                $this->setState($data['state']);
            }
            if (isset($data['time'])) {
                $this->setTime($data['time']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Describes the state of the calibration.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCalibrationState
     * @return $this
     */
    public function setState($state)
    {
        if (null === $state) {
            return $this; 
        }
        if (is_scalar($state)) {
            $state = new FHIRDeviceMetricCalibrationState($state);
        }
        if (!($state instanceof FHIRDeviceMetricCalibrationState)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceMetricCalibration::setState - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCalibrationState or appropriate scalar value, %s seen.',
                gettype($state)
            ));
        }
        $this->state = $state;
        return $this;
    }

    /**
     * Describes the state of the calibration.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCalibrationState
     */
    public function getState()
    {
        return $this->state;
    }


    /**
     * Describes the time last calibration has been performed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     * @return $this
     */
    public function setTime($time)
    {
        if (null === $time) {
            return $this; 
        }
        if (is_scalar($time)) {
            $time = new FHIRInstant($time);
        }
        if (!($time instanceof FHIRInstant)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceMetricCalibration::setTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or appropriate scalar value, %s seen.',
                gettype($time)
            ));
        }
        $this->time = $time;
        return $this;
    }

    /**
     * Describes the time last calibration has been performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getTime()
    {
        return $this->time;
    }


    /**
     * Describes the type of the calibration method.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCalibrationType
     * @return $this
     */
    public function setType($type)
    {
        if (null === $type) {
            return $this; 
        }
        if (is_scalar($type)) {
            $type = new FHIRDeviceMetricCalibrationType($type);
        }
        if (!($type instanceof FHIRDeviceMetricCalibrationType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceMetricCalibration::setType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCalibrationType or appropriate scalar value, %s seen.',
                gettype($type)
            ));
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Describes the type of the calibration method.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDeviceMetricCalibrationType
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
        if (null !== ($v = $this->getState())) {
            $a['state'] = $v;
        }
        if (null !== ($v = $this->getTime())) {
            $a['time'] = $v;
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
            $sxe = new \SimpleXMLElement('<DeviceMetricCalibration xmlns="http://hl7.org/fhir"></DeviceMetricCalibration>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}