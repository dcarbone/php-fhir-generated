<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDeviceMetricCalibrationState;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDeviceMetricCalibrationType;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Describes a measurement, calculation or setting capability of a medical device.
 *
 * Class FHIRDeviceMetricCalibration
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric
 */
class FHIRDeviceMetricCalibration extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_DOT_CALIBRATION;
    const FIELD_STATE = 'state';
    const FIELD_STATE_EXT = '_state';
    const FIELD_TIME = 'time';
    const FIELD_TIME_EXT = '_time';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * Describes the state of a metric calibration.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the state of the calibration.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDeviceMetricCalibrationState
     */
    protected $state = null;

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the time last calibration has been performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant
     */
    protected $time = null;

    /**
     * Describes the type of a metric calibration.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the type of the calibration method.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDeviceMetricCalibrationType
     */
    protected $type = null;

    /**
     * Validation map for fields in type DeviceMetric.Calibration
     * @var array
     */
    private static $_validationRules = [    ];

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
        if (isset($data[self::FIELD_STATE]) || isset($data[self::FIELD_STATE_EXT])) {
            if (isset($data[self::FIELD_STATE])) {
                $value = $data[self::FIELD_STATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STATE_EXT]) && is_array($data[self::FIELD_STATE_EXT])) {
                $ext = $data[self::FIELD_STATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDeviceMetricCalibrationState) {
                    $this->setState($value);
                } else if (is_array($value)) {
                    $this->setState(new FHIRDeviceMetricCalibrationState(array_merge($ext, $value)));
                } else {
                    $this->setState(new FHIRDeviceMetricCalibrationState([FHIRDeviceMetricCalibrationState::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setState(new FHIRDeviceMetricCalibrationState($ext));
            }
        }
        if (isset($data[self::FIELD_TIME]) || isset($data[self::FIELD_TIME_EXT])) {
            if (isset($data[self::FIELD_TIME])) {
                $value = $data[self::FIELD_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TIME_EXT]) && is_array($data[self::FIELD_TIME_EXT])) {
                $ext = $data[self::FIELD_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setTime($value);
                } else if (is_array($value)) {
                    $this->setTime(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setTime(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setTime(new FHIRInstant($ext));
            }
        }
        if (isset($data[self::FIELD_TYPE]) || isset($data[self::FIELD_TYPE_EXT])) {
            if (isset($data[self::FIELD_TYPE])) {
                $value = $data[self::FIELD_TYPE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) {
                $ext = $data[self::FIELD_TYPE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDeviceMetricCalibrationType) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRDeviceMetricCalibrationType(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRDeviceMetricCalibrationType([FHIRDeviceMetricCalibrationType::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setType(new FHIRDeviceMetricCalibrationType($ext));
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
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<DeviceMetricCalibration{$xmlns}></DeviceMetricCalibration>";
    }

    /**
     * Describes the state of a metric calibration.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the state of the calibration.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDeviceMetricCalibrationState
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Describes the state of a metric calibration.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the state of the calibration.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDeviceMetricCalibrationState $state
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the time last calibration has been performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the time last calibration has been performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant $time
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the type of the calibration method.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDeviceMetricCalibrationType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Describes the type of a metric calibration.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Describes the type of the calibration method.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDeviceMetricCalibrationType $type
     * @return static
     */
    public function setType(FHIRDeviceMetricCalibrationType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getState())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_STATE])) {
            $v = $this->getState();
            foreach($validationRules[self::FIELD_STATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_DOT_CALIBRATION, self::FIELD_STATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATE])) {
                        $errs[self::FIELD_STATE] = [];
                    }
                    $errs[self::FIELD_STATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIME])) {
            $v = $this->getTime();
            foreach($validationRules[self::FIELD_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_DOT_CALIBRATION, self::FIELD_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIME])) {
                        $errs[self::FIELD_TIME] = [];
                    }
                    $errs[self::FIELD_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_DOT_CALIBRATION, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration
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
                throw new \DomainException(sprintf('FHIRDeviceMetricCalibration::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDeviceMetricCalibration::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRDeviceMetricCalibration;
        } elseif (!is_object($type) || !($type instanceof FHIRDeviceMetricCalibration)) {
            throw new \RuntimeException(sprintf(
                'FHIRDeviceMetricCalibration::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->state)) {
            $type->setState(FHIRDeviceMetricCalibrationState::xmlUnserialize($children->state));
        }
        if (isset($children->time)) {
            $type->setTime(FHIRInstant::xmlUnserialize($children->time));
        }
        if (isset($attributes->time)) {
            $pt = $type->getTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->time);
            } else {
                $type->setTime((string)$attributes->time);
            }
        }
        if (isset($children->type)) {
            $type->setType(FHIRDeviceMetricCalibrationType::xmlUnserialize($children->type));
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
        if (null !== ($v = $this->getState())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_STATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDeviceMetricCalibrationState::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDeviceMetricCalibrationState::FIELD_VALUE]);
                $a[self::FIELD_STATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getTime())) {
            $a[self::FIELD_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInstant::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInstant::FIELD_VALUE]);
                $a[self::FIELD_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDeviceMetricCalibrationType::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDeviceMetricCalibrationType::FIELD_VALUE]);
                $a[self::FIELD_TYPE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}