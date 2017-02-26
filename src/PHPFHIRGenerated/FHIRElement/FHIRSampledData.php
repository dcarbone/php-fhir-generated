<?php namespace PHPFHIRGenerated\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 26th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use PHPFHIRGenerated\FHIRElement;

/**
 * A series of measurements taken by a device, with upper and lower limits. There may be more than one dimension in the data.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRSampledData extends FHIRElement implements \JsonSerializable
{
    /**
     * The base quantity that a measured value of zero represents. In addition, this provides the units of the entire measurement series.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public $origin = null;

    /**
     * The length of time between sampling times, measured in milliseconds.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $period = null;

    /**
     * A correction factor that is applied to the sampled data points before they are added to the origin.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $factor = null;

    /**
     * The lower limit of detection of the measured points. This is needed if any of the data points have the value "L" (lower than detection limit).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $lowerLimit = null;

    /**
     * The upper limit of detection of the measured points. This is needed if any of the data points have the value "U" (higher than detection limit).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $upperLimit = null;

    /**
     * The number of sample points at each time point. If this value is greater than one, then the dimensions will be interlaced - all the sample points for a point in time will be recorded at once.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $dimensions = null;

    /**
     * A series of data points which are decimal values separated by a single space (character u20). The special values "E" (error), "L" (below detection limit) and "U" (above detection limit) can also be used in place of a decimal value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledDataDataType
     */
    public $data = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'SampledData';

    /**
     * The base quantity that a measured value of zero represents. In addition, this provides the units of the entire measurement series.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * The base quantity that a measured value of zero represents. In addition, this provides the units of the entire measurement series.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $origin
     * @return $this
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * The length of time between sampling times, measured in milliseconds.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * The length of time between sampling times, measured in milliseconds.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $period
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * A correction factor that is applied to the sampled data points before they are added to the origin.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getFactor()
    {
        return $this->factor;
    }

    /**
     * A correction factor that is applied to the sampled data points before they are added to the origin.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $factor
     * @return $this
     */
    public function setFactor($factor)
    {
        $this->factor = $factor;
        return $this;
    }

    /**
     * The lower limit of detection of the measured points. This is needed if any of the data points have the value "L" (lower than detection limit).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getLowerLimit()
    {
        return $this->lowerLimit;
    }

    /**
     * The lower limit of detection of the measured points. This is needed if any of the data points have the value "L" (lower than detection limit).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $lowerLimit
     * @return $this
     */
    public function setLowerLimit($lowerLimit)
    {
        $this->lowerLimit = $lowerLimit;
        return $this;
    }

    /**
     * The upper limit of detection of the measured points. This is needed if any of the data points have the value "U" (higher than detection limit).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getUpperLimit()
    {
        return $this->upperLimit;
    }

    /**
     * The upper limit of detection of the measured points. This is needed if any of the data points have the value "U" (higher than detection limit).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $upperLimit
     * @return $this
     */
    public function setUpperLimit($upperLimit)
    {
        $this->upperLimit = $upperLimit;
        return $this;
    }

    /**
     * The number of sample points at each time point. If this value is greater than one, then the dimensions will be interlaced - all the sample points for a point in time will be recorded at once.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * The number of sample points at each time point. If this value is greater than one, then the dimensions will be interlaced - all the sample points for a point in time will be recorded at once.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $dimensions
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;
        return $this;
    }

    /**
     * A series of data points which are decimal values separated by a single space (character u20). The special values "E" (error), "L" (below detection limit) and "U" (above detection limit) can also be used in place of a decimal value.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSampledDataDataType
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * A series of data points which are decimal values separated by a single space (character u20). The special values "E" (error), "L" (below detection limit) and "U" (above detection limit) can also be used in place of a decimal value.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSampledDataDataType $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
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
        if (null !== $this->origin) $json['origin'] = json_encode($this->origin);
        if (null !== $this->period) $json['period'] = json_encode($this->period);
        if (null !== $this->factor) $json['factor'] = json_encode($this->factor);
        if (null !== $this->lowerLimit) $json['lowerLimit'] = json_encode($this->lowerLimit);
        if (null !== $this->upperLimit) $json['upperLimit'] = json_encode($this->upperLimit);
        if (null !== $this->dimensions) $json['dimensions'] = json_encode($this->dimensions);
        if (null !== $this->data) $json['data'] = json_encode($this->data);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<SampledData xmlns="http://hl7.org/fhir"></SampledData>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->origin) $this->origin->xmlSerialize(true, $sxe->addChild('origin'));
        if (null !== $this->period) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (null !== $this->factor) $this->factor->xmlSerialize(true, $sxe->addChild('factor'));
        if (null !== $this->lowerLimit) $this->lowerLimit->xmlSerialize(true, $sxe->addChild('lowerLimit'));
        if (null !== $this->upperLimit) $this->upperLimit->xmlSerialize(true, $sxe->addChild('upperLimit'));
        if (null !== $this->dimensions) $this->dimensions->xmlSerialize(true, $sxe->addChild('dimensions'));
        if (null !== $this->data) $this->data->xmlSerialize(true, $sxe->addChild('data'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}