<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservation;

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
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRRange;
use PHPFHIRGenerated\FHIRElement\FHIRRatio;
use PHPFHIRGenerated\FHIRElement\FHIRSampledData;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRTime;

/**
 * Measurements and simple assertions made about a patient, device or other subject.
 *
 * Class FHIRObservationComponent
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservation
 */
class FHIRObservationComponent extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Observation.Component';

    /**
     * Describes what was observed. Sometimes this is called the observation "code".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * Provides a reason why the expected value in the element Observation.component.value[x] is missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $dataAbsentReason = null;

    /**
     * A categorical assessment of an observation value.  For example, high, low, normal.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $interpretation = null;

    /**
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange
     */
    public $referenceRange = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $valueBoolean = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $valueCodeableConcept = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $valueDateTime = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $valueInteger = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $valuePeriod = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $valueQuantity = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $valueRange = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $valueRatio = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public $valueSampledData = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $valueString = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $valueTime = null;

    /**
     * FHIRObservationComponent Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['dataAbsentReason'])) {
                $this->setDataAbsentReason($data['dataAbsentReason']);
            }
            if (isset($data['interpretation'])) {
                $this->setInterpretation($data['interpretation']);
            }
            if (isset($data['referenceRange'])) {
                $this->setReferenceRange($data['referenceRange']);
            }
            if (isset($data['valueBoolean'])) {
                $this->setValueBoolean($data['valueBoolean']);
            }
            if (isset($data['valueCodeableConcept'])) {
                $this->setValueCodeableConcept($data['valueCodeableConcept']);
            }
            if (isset($data['valueDateTime'])) {
                $this->setValueDateTime($data['valueDateTime']);
            }
            if (isset($data['valueInteger'])) {
                $this->setValueInteger($data['valueInteger']);
            }
            if (isset($data['valuePeriod'])) {
                $this->setValuePeriod($data['valuePeriod']);
            }
            if (isset($data['valueQuantity'])) {
                $this->setValueQuantity($data['valueQuantity']);
            }
            if (isset($data['valueRange'])) {
                $this->setValueRange($data['valueRange']);
            }
            if (isset($data['valueRatio'])) {
                $this->setValueRatio($data['valueRatio']);
            }
            if (isset($data['valueSampledData'])) {
                $this->setValueSampledData($data['valueSampledData']);
            }
            if (isset($data['valueString'])) {
                $this->setValueString($data['valueString']);
            }
            if (isset($data['valueTime'])) {
                $this->setValueTime($data['valueTime']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationComponent::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Describes what was observed. Sometimes this is called the observation "code".
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        if (null === $code) {
            return $this; 
        }
        $this->code = $code;
        return $this;
    }

    /**
     * Describes what was observed. Sometimes this is called the observation "code".
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * Provides a reason why the expected value in the element Observation.component.value[x] is missing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setDataAbsentReason(FHIRCodeableConcept $dataAbsentReason = null)
    {
        if (null === $dataAbsentReason) {
            return $this; 
        }
        $this->dataAbsentReason = $dataAbsentReason;
        return $this;
    }

    /**
     * Provides a reason why the expected value in the element Observation.component.value[x] is missing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDataAbsentReason()
    {
        return $this->dataAbsentReason;
    }


    /**
     * A categorical assessment of an observation value.  For example, high, low, normal.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setInterpretation(FHIRCodeableConcept $interpretation = null)
    {
        if (null === $interpretation) {
            return $this; 
        }
        $this->interpretation = $interpretation;
        return $this;
    }

    /**
     * A categorical assessment of an observation value.  For example, high, low, normal.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getInterpretation()
    {
        return $this->interpretation;
    }


    /**
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange
     * @return $this
     */
    public function setReferenceRange(FHIRObservationReferenceRange $referenceRange = null)
    {
        if (null === $referenceRange) {
            return $this; 
        }
        $this->referenceRange = $referenceRange;
        return $this;
    }

    /**
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange
     */
    public function getReferenceRange()
    {
        return $this->referenceRange;
    }


    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setValueBoolean($valueBoolean)
    {
        if (null === $valueBoolean) {
            return $this; 
        }
        if (is_scalar($valueBoolean)) {
            $valueBoolean = new FHIRBoolean($valueBoolean);
        }
        if (!($valueBoolean instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRObservationComponent::setValueBoolean - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($valueBoolean)
            ));
        }
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }


    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setValueCodeableConcept(FHIRCodeableConcept $valueCodeableConcept = null)
    {
        if (null === $valueCodeableConcept) {
            return $this; 
        }
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }


    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setValueDateTime($valueDateTime)
    {
        if (null === $valueDateTime) {
            return $this; 
        }
        if (is_scalar($valueDateTime)) {
            $valueDateTime = new FHIRDateTime($valueDateTime);
        }
        if (!($valueDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRObservationComponent::setValueDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($valueDateTime)
            ));
        }
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }


    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setValueInteger($valueInteger)
    {
        if (null === $valueInteger) {
            return $this; 
        }
        if (is_scalar($valueInteger)) {
            $valueInteger = new FHIRInteger($valueInteger);
        }
        if (!($valueInteger instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRObservationComponent::setValueInteger - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($valueInteger)
            ));
        }
        $this->valueInteger = $valueInteger;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }


    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setValuePeriod(FHIRPeriod $valuePeriod = null)
    {
        if (null === $valuePeriod) {
            return $this; 
        }
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }


    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setValueQuantity(FHIRQuantity $valueQuantity = null)
    {
        if (null === $valueQuantity) {
            return $this; 
        }
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }


    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setValueRange(FHIRRange $valueRange = null)
    {
        if (null === $valueRange) {
            return $this; 
        }
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }


    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     * @return $this
     */
    public function setValueRatio(FHIRRatio $valueRatio = null)
    {
        if (null === $valueRatio) {
            return $this; 
        }
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getValueRatio()
    {
        return $this->valueRatio;
    }


    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSampledData
     * @return $this
     */
    public function setValueSampledData(FHIRSampledData $valueSampledData = null)
    {
        if (null === $valueSampledData) {
            return $this; 
        }
        $this->valueSampledData = $valueSampledData;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getValueSampledData()
    {
        return $this->valueSampledData;
    }


    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setValueString($valueString)
    {
        if (null === $valueString) {
            return $this; 
        }
        if (is_scalar($valueString)) {
            $valueString = new FHIRString($valueString);
        }
        if (!($valueString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRObservationComponent::setValueString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($valueString)
            ));
        }
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getValueString()
    {
        return $this->valueString;
    }


    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     * @return $this
     */
    public function setValueTime($valueTime)
    {
        if (null === $valueTime) {
            return $this; 
        }
        if (is_scalar($valueTime)) {
            $valueTime = new FHIRTime($valueTime);
        }
        if (!($valueTime instanceof FHIRTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRObservationComponent::setValueTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRTime or appropriate scalar value, %s seen.',
                gettype($valueTime)
            ));
        }
        $this->valueTime = $valueTime;
        return $this;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getValueTime()
    {
        return $this->valueTime;
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
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getDataAbsentReason())) {
            $a['dataAbsentReason'] = $v;
        }
        if (null !== ($v = $this->getInterpretation())) {
            $a['interpretation'] = $v;
        }
        if (null !== ($v = $this->getReferenceRange())) {
            $a['referenceRange'] = $v;
        }
        if (null !== ($v = $this->getValueBoolean())) {
            $a['valueBoolean'] = $v;
        }
        if (null !== ($v = $this->getValueCodeableConcept())) {
            $a['valueCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getValueDateTime())) {
            $a['valueDateTime'] = $v;
        }
        if (null !== ($v = $this->getValueInteger())) {
            $a['valueInteger'] = $v;
        }
        if (null !== ($v = $this->getValuePeriod())) {
            $a['valuePeriod'] = $v;
        }
        if (null !== ($v = $this->getValueQuantity())) {
            $a['valueQuantity'] = $v;
        }
        if (null !== ($v = $this->getValueRange())) {
            $a['valueRange'] = $v;
        }
        if (null !== ($v = $this->getValueRatio())) {
            $a['valueRatio'] = $v;
        }
        if (null !== ($v = $this->getValueSampledData())) {
            $a['valueSampledData'] = $v;
        }
        if (null !== ($v = $this->getValueString())) {
            $a['valueString'] = $v;
        }
        if (null !== ($v = $this->getValueTime())) {
            $a['valueTime'] = $v;
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
            $sxe = new \SimpleXMLElement('<ObservationComponent xmlns="http://hl7.org/fhir"></ObservationComponent>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}