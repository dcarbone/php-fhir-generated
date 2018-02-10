<?php namespace PHPFHIRGenerated\FHIRResource\FHIRObservation;

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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * Measurements and simple assertions made about a patient, device or other subject.
 */
class FHIRObservationComponent extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Describes what was observed. Sometimes this is called the observation "code".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $valueQuantity = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $valueCodeableConcept = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $valueString = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $valueBoolean = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $valueInteger = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $valueRange = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $valueRatio = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public $valueSampledData = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $valueTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $valueDateTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $valuePeriod = null;

    /**
     * Provides a reason why the expected value in the element Observation.component.value[x] is missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $dataAbsentReason = null;

    /**
     * The assessment made based on the result of the observation.  Intended as a simple compact code often placed adjacent to the result value in reports and flow sheets to signal the meaning/normalcy status of the result. Otherwise known as abnormal flag.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $interpretation = null;

    /**
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRObservation\FHIRObservationReferenceRange[]
     */
    public $referenceRange = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'Observation.Component';

    /**
     * Describes what was observed. Sometimes this is called the observation "code".
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Describes what was observed. Sometimes this is called the observation "code".
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity() {
        return $this->valueQuantity;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $valueQuantity
     * @return $this
     */
    public function setValueQuantity($valueQuantity) {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getValueCodeableConcept() {
        return $this->valueCodeableConcept;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $valueCodeableConcept
     * @return $this
     */
    public function setValueCodeableConcept($valueCodeableConcept) {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getValueString() {
        return $this->valueString;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $valueString
     * @return $this
     */
    public function setValueString($valueString) {
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean() {
        return $this->valueBoolean;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $valueBoolean
     * @return $this
     */
    public function setValueBoolean($valueBoolean) {
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getValueInteger() {
        return $this->valueInteger;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $valueInteger
     * @return $this
     */
    public function setValueInteger($valueInteger) {
        $this->valueInteger = $valueInteger;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getValueRange() {
        return $this->valueRange;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $valueRange
     * @return $this
     */
    public function setValueRange($valueRange) {
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getValueRatio() {
        return $this->valueRatio;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $valueRatio
     * @return $this
     */
    public function setValueRatio($valueRatio) {
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getValueSampledData() {
        return $this->valueSampledData;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSampledData $valueSampledData
     * @return $this
     */
    public function setValueSampledData($valueSampledData) {
        $this->valueSampledData = $valueSampledData;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getValueTime() {
        return $this->valueTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $valueTime
     * @return $this
     */
    public function setValueTime($valueTime) {
        $this->valueTime = $valueTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime() {
        return $this->valueDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $valueDateTime
     * @return $this
     */
    public function setValueDateTime($valueDateTime) {
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getValuePeriod() {
        return $this->valuePeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $valuePeriod
     * @return $this
     */
    public function setValuePeriod($valuePeriod) {
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * Provides a reason why the expected value in the element Observation.component.value[x] is missing.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDataAbsentReason() {
        return $this->dataAbsentReason;
    }

    /**
     * Provides a reason why the expected value in the element Observation.component.value[x] is missing.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $dataAbsentReason
     * @return $this
     */
    public function setDataAbsentReason($dataAbsentReason) {
        $this->dataAbsentReason = $dataAbsentReason;
        return $this;
    }

    /**
     * The assessment made based on the result of the observation.  Intended as a simple compact code often placed adjacent to the result value in reports and flow sheets to signal the meaning/normalcy status of the result. Otherwise known as abnormal flag.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getInterpretation() {
        return $this->interpretation;
    }

    /**
     * The assessment made based on the result of the observation.  Intended as a simple compact code often placed adjacent to the result value in reports and flow sheets to signal the meaning/normalcy status of the result. Otherwise known as abnormal flag.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $interpretation
     * @return $this
     */
    public function setInterpretation($interpretation) {
        $this->interpretation = $interpretation;
        return $this;
    }

    /**
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRObservation\FHIRObservationReferenceRange[]
     */
    public function getReferenceRange() {
        return $this->referenceRange;
    }

    /**
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRObservation\FHIRObservationReferenceRange $referenceRange
     * @return $this
     */
    public function addReferenceRange($referenceRange) {
        $this->referenceRange[] = $referenceRange;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['valueQuantity'])) {
                $this->setValueQuantity($data['valueQuantity']);
            }
            if (isset($data['valueCodeableConcept'])) {
                $this->setValueCodeableConcept($data['valueCodeableConcept']);
            }
            if (isset($data['valueString'])) {
                $this->setValueString($data['valueString']);
            }
            if (isset($data['valueBoolean'])) {
                $this->setValueBoolean($data['valueBoolean']);
            }
            if (isset($data['valueInteger'])) {
                $this->setValueInteger($data['valueInteger']);
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
            if (isset($data['valueTime'])) {
                $this->setValueTime($data['valueTime']);
            }
            if (isset($data['valueDateTime'])) {
                $this->setValueDateTime($data['valueDateTime']);
            }
            if (isset($data['valuePeriod'])) {
                $this->setValuePeriod($data['valuePeriod']);
            }
            if (isset($data['dataAbsentReason'])) {
                $this->setDataAbsentReason($data['dataAbsentReason']);
            }
            if (isset($data['interpretation'])) {
                $this->setInterpretation($data['interpretation']);
            }
            if (isset($data['referenceRange'])) {
                if (is_array($data['referenceRange'])) {
                    foreach($data['referenceRange'] as $d) {
                        $this->addReferenceRange($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"referenceRange" must be array of objects or null, '.gettype($data['referenceRange']).' seen.');
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        if (isset($this->code)) $json['code'] = $this->code;
        if (isset($this->valueQuantity)) $json['valueQuantity'] = $this->valueQuantity;
        if (isset($this->valueCodeableConcept)) $json['valueCodeableConcept'] = $this->valueCodeableConcept;
        if (isset($this->valueString)) $json['valueString'] = $this->valueString;
        if (isset($this->valueBoolean)) $json['valueBoolean'] = $this->valueBoolean;
        if (isset($this->valueInteger)) $json['valueInteger'] = $this->valueInteger;
        if (isset($this->valueRange)) $json['valueRange'] = $this->valueRange;
        if (isset($this->valueRatio)) $json['valueRatio'] = $this->valueRatio;
        if (isset($this->valueSampledData)) $json['valueSampledData'] = $this->valueSampledData;
        if (isset($this->valueTime)) $json['valueTime'] = $this->valueTime;
        if (isset($this->valueDateTime)) $json['valueDateTime'] = $this->valueDateTime;
        if (isset($this->valuePeriod)) $json['valuePeriod'] = $this->valuePeriod;
        if (isset($this->dataAbsentReason)) $json['dataAbsentReason'] = $this->dataAbsentReason;
        if (isset($this->interpretation)) $json['interpretation'] = $this->interpretation;
        if (0 < count($this->referenceRange)) {
            $json['referenceRange'] = [];
            foreach($this->referenceRange as $referenceRange) {
                if (null !== $referenceRange) $json['referenceRange'][] = $referenceRange;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ObservationComponent xmlns="http://hl7.org/fhir"></ObservationComponent>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->code)) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (isset($this->valueQuantity)) $this->valueQuantity->xmlSerialize(true, $sxe->addChild('valueQuantity'));
        if (isset($this->valueCodeableConcept)) $this->valueCodeableConcept->xmlSerialize(true, $sxe->addChild('valueCodeableConcept'));
        if (isset($this->valueString)) $this->valueString->xmlSerialize(true, $sxe->addChild('valueString'));
        if (isset($this->valueBoolean)) $this->valueBoolean->xmlSerialize(true, $sxe->addChild('valueBoolean'));
        if (isset($this->valueInteger)) $this->valueInteger->xmlSerialize(true, $sxe->addChild('valueInteger'));
        if (isset($this->valueRange)) $this->valueRange->xmlSerialize(true, $sxe->addChild('valueRange'));
        if (isset($this->valueRatio)) $this->valueRatio->xmlSerialize(true, $sxe->addChild('valueRatio'));
        if (isset($this->valueSampledData)) $this->valueSampledData->xmlSerialize(true, $sxe->addChild('valueSampledData'));
        if (isset($this->valueTime)) $this->valueTime->xmlSerialize(true, $sxe->addChild('valueTime'));
        if (isset($this->valueDateTime)) $this->valueDateTime->xmlSerialize(true, $sxe->addChild('valueDateTime'));
        if (isset($this->valuePeriod)) $this->valuePeriod->xmlSerialize(true, $sxe->addChild('valuePeriod'));
        if (isset($this->dataAbsentReason)) $this->dataAbsentReason->xmlSerialize(true, $sxe->addChild('dataAbsentReason'));
        if (isset($this->interpretation)) $this->interpretation->xmlSerialize(true, $sxe->addChild('interpretation'));
        if (0 < count($this->referenceRange)) {
            foreach($this->referenceRange as $referenceRange) {
                $referenceRange->xmlSerialize(true, $sxe->addChild('referenceRange'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}