<?php

namespace PHPFHIRGenerated\FHIRElement;

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

use PHPFHIRGenerated\FHIRElement;

/**
 * A series of measurements taken by a device, with upper and lower limits. There may be more than one dimension in the data.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRSampledData
 * @package PHPFHIRGenerated\FHIRElement
 */
class FHIRSampledData extends FHIRElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'SampledData';

    /**
     * A series of data points which are decimal values separated by a single space (character u20). The special values "E" (error), "L" (below detection limit) and "U" (above detection limit) can also be used in place of a decimal value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledDataDataType
     */
    private $data = null;

    /**
     * The number of sample points at each time point. If this value is greater than one, then the dimensions will be interlaced - all the sample points for a point in time will be recorded at once.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    private $dimensions = null;

    /**
     * A correction factor that is applied to the sampled data points before they are added to the origin.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $factor = null;

    /**
     * The lower limit of detection of the measured points. This is needed if any of the data points have the value "L" (lower than detection limit).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $lowerLimit = null;

    /**
     * The base quantity that a measured value of zero represents. In addition, this provides the units of the entire measurement series.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    private $origin = null;

    /**
     * The length of time between sampling times, measured in milliseconds.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $period = null;

    /**
     * The upper limit of detection of the measured points. This is needed if any of the data points have the value "U" (higher than detection limit).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $upperLimit = null;

    /**
     * FHIRSampledData Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['data'])) {
                $value = $data['data'];
                if (is_array($value)) {
                    $value = new FHIRSampledDataDataType($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRSampledDataDataType($value);
                }
                if (!($value instanceof FHIRSampledDataDataType)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRSampledData::__construct - Property \"data\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRSampledDataDataType or data to construct type, saw ".gettype($value)); 
                }
                $this->setData($value);
            }
            if (isset($data['dimensions'])) {
                $value = $data['dimensions'];
                if (is_array($value)) {
                    $value = new FHIRPositiveInt($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRPositiveInt($value);
                }
                if (!($value instanceof FHIRPositiveInt)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRSampledData::__construct - Property \"dimensions\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or data to construct type, saw ".gettype($value)); 
                }
                $this->setDimensions($value);
            }
            if (isset($data['factor'])) {
                $value = $data['factor'];
                if (is_array($value)) {
                    $value = new FHIRDecimal($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDecimal($value);
                }
                if (!($value instanceof FHIRDecimal)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRSampledData::__construct - Property \"factor\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or data to construct type, saw ".gettype($value)); 
                }
                $this->setFactor($value);
            }
            if (isset($data['lowerLimit'])) {
                $value = $data['lowerLimit'];
                if (is_array($value)) {
                    $value = new FHIRDecimal($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDecimal($value);
                }
                if (!($value instanceof FHIRDecimal)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRSampledData::__construct - Property \"lowerLimit\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or data to construct type, saw ".gettype($value)); 
                }
                $this->setLowerLimit($value);
            }
            if (isset($data['origin'])) {
                $value = $data['origin'];
                if (is_array($value)) {
                    $value = new FHIRQuantity($value);
                } 
                if (!($value instanceof FHIRQuantity)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRSampledData::__construct - Property \"origin\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity or data to construct type, saw ".gettype($value)); 
                }
                $this->setOrigin($value);
            }
            if (isset($data['period'])) {
                $value = $data['period'];
                if (is_array($value)) {
                    $value = new FHIRDecimal($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDecimal($value);
                }
                if (!($value instanceof FHIRDecimal)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRSampledData::__construct - Property \"period\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or data to construct type, saw ".gettype($value)); 
                }
                $this->setPeriod($value);
            }
            if (isset($data['upperLimit'])) {
                $value = $data['upperLimit'];
                if (is_array($value)) {
                    $value = new FHIRDecimal($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDecimal($value);
                }
                if (!($value instanceof FHIRDecimal)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRSampledData::__construct - Property \"upperLimit\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or data to construct type, saw ".gettype($value)); 
                }
                $this->setUpperLimit($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRSampledData::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * A series of data points which are decimal values separated by a single space (character u20). The special values "E" (error), "L" (below detection limit) and "U" (above detection limit) can also be used in place of a decimal value.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSampledDataDataType
     * @return $this
     */
    public function setData($data)
    {
        if (null === $data) {
            return $this; 
        }
        if (is_scalar($data)) {
            $data = new FHIRSampledDataDataType($data);
        }
        if (!($data instanceof FHIRSampledDataDataType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSampledData::setData - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRSampledDataDataType or appropriate scalar value, %s seen.',
                gettype($data)
            ));
        }
        $this->data = $data;
        return $this;
    }

    /**
     * A series of data points which are decimal values separated by a single space (character u20). The special values "E" (error), "L" (below detection limit) and "U" (above detection limit) can also be used in place of a decimal value.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSampledDataDataType
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * The number of sample points at each time point. If this value is greater than one, then the dimensions will be interlaced - all the sample points for a point in time will be recorded at once.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        if (null === $dimensions) {
            return $this; 
        }
        if (is_scalar($dimensions)) {
            $dimensions = new FHIRPositiveInt($dimensions);
        }
        if (!($dimensions instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSampledData::setDimensions - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($dimensions)
            ));
        }
        $this->dimensions = $dimensions;
        return $this;
    }

    /**
     * The number of sample points at each time point. If this value is greater than one, then the dimensions will be interlaced - all the sample points for a point in time will be recorded at once.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * A correction factor that is applied to the sampled data points before they are added to the origin.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setFactor($factor)
    {
        if (null === $factor) {
            return $this; 
        }
        if (is_scalar($factor)) {
            $factor = new FHIRDecimal($factor);
        }
        if (!($factor instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSampledData::setFactor - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($factor)
            ));
        }
        $this->factor = $factor;
        return $this;
    }

    /**
     * A correction factor that is applied to the sampled data points before they are added to the origin.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getFactor()
    {
        return $this->factor;
    }

    /**
     * The lower limit of detection of the measured points. This is needed if any of the data points have the value "L" (lower than detection limit).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setLowerLimit($lowerLimit)
    {
        if (null === $lowerLimit) {
            return $this; 
        }
        if (is_scalar($lowerLimit)) {
            $lowerLimit = new FHIRDecimal($lowerLimit);
        }
        if (!($lowerLimit instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSampledData::setLowerLimit - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($lowerLimit)
            ));
        }
        $this->lowerLimit = $lowerLimit;
        return $this;
    }

    /**
     * The lower limit of detection of the measured points. This is needed if any of the data points have the value "L" (lower than detection limit).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getLowerLimit()
    {
        return $this->lowerLimit;
    }

    /**
     * The base quantity that a measured value of zero represents. In addition, this provides the units of the entire measurement series.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setOrigin(FHIRQuantity $origin = null)
    {
        if (null === $origin) {
            return $this; 
        }
        $this->origin = $origin;
        return $this;
    }

    /**
     * The base quantity that a measured value of zero represents. In addition, this provides the units of the entire measurement series.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * The length of time between sampling times, measured in milliseconds.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setPeriod($period)
    {
        if (null === $period) {
            return $this; 
        }
        if (is_scalar($period)) {
            $period = new FHIRDecimal($period);
        }
        if (!($period instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSampledData::setPeriod - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($period)
            ));
        }
        $this->period = $period;
        return $this;
    }

    /**
     * The length of time between sampling times, measured in milliseconds.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * The upper limit of detection of the measured points. This is needed if any of the data points have the value "U" (higher than detection limit).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setUpperLimit($upperLimit)
    {
        if (null === $upperLimit) {
            return $this; 
        }
        if (is_scalar($upperLimit)) {
            $upperLimit = new FHIRDecimal($upperLimit);
        }
        if (!($upperLimit instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSampledData::setUpperLimit - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($upperLimit)
            ));
        }
        $this->upperLimit = $upperLimit;
        return $this;
    }

    /**
     * The upper limit of detection of the measured points. This is needed if any of the data points have the value "U" (higher than detection limit).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getUpperLimit()
    {
        return $this->upperLimit;
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
        if (null !== ($v = $this->getData())) {
            $a['data'] = $v;
        }
        if (null !== ($v = $this->getDimensions())) {
            $a['dimensions'] = $v;
        }
        if (null !== ($v = $this->getFactor())) {
            $a['factor'] = $v;
        }
        if (null !== ($v = $this->getLowerLimit())) {
            $a['lowerLimit'] = $v;
        }
        if (null !== ($v = $this->getOrigin())) {
            $a['origin'] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a['period'] = $v;
        }
        if (null !== ($v = $this->getUpperLimit())) {
            $a['upperLimit'] = $v;
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
            $sxe = new \SimpleXMLElement('<SampledData xmlns="http://hl7.org/fhir"></SampledData>');
        }
        if (null !== ($v = $this->getData())) {
            $v->xmlSerialize(true, $sxe->addChild('data'));
        }
        if (null !== ($v = $this->getDimensions())) {
            $v->xmlSerialize(true, $sxe->addChild('dimensions'));
        }
        if (null !== ($v = $this->getFactor())) {
            $v->xmlSerialize(true, $sxe->addChild('factor'));
        }
        if (null !== ($v = $this->getLowerLimit())) {
            $v->xmlSerialize(true, $sxe->addChild('lowerLimit'));
        }
        if (null !== ($v = $this->getOrigin())) {
            $v->xmlSerialize(true, $sxe->addChild('origin'));
        }
        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize(true, $sxe->addChild('period'));
        }
        if (null !== ($v = $this->getUpperLimit())) {
            $v->xmlSerialize(true, $sxe->addChild('upperLimit'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}