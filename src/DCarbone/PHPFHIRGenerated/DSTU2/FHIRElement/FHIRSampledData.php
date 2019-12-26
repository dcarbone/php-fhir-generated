<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * A series of measurements taken by a device, with upper and lower limits. There
 * may be more than one dimension in the data.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRSampledData
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement
 */
class FHIRSampledData extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA;
    const FIELD_DATA = 'data';
    const FIELD_DATA_EXT = '_data';
    const FIELD_DIMENSIONS = 'dimensions';
    const FIELD_DIMENSIONS_EXT = '_dimensions';
    const FIELD_FACTOR = 'factor';
    const FIELD_FACTOR_EXT = '_factor';
    const FIELD_LOWER_LIMIT = 'lowerLimit';
    const FIELD_LOWER_LIMIT_EXT = '_lowerLimit';
    const FIELD_ORIGIN = 'origin';
    const FIELD_PERIOD = 'period';
    const FIELD_PERIOD_EXT = '_period';
    const FIELD_UPPER_LIMIT = 'upperLimit';
    const FIELD_UPPER_LIMIT_EXT = '_upperLimit';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A series of data points which are decimal values separated by a single space
     * (character u20). The special values "E" (error), "L" (below detection limit) and
     * "U" (above detection limit) can also be used in place of a decimal value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSampledDataDataType
     */
    protected $data = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of sample points at each time point. If this value is greater than
     * one, then the dimensions will be interlaced - all the sample points for a point
     * in time will be recorded at once.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    protected $dimensions = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A correction factor that is applied to the sampled data points before they are
     * added to the origin.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    protected $factor = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The lower limit of detection of the measured points. This is needed if any of
     * the data points have the value "L" (lower than detection limit).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    protected $lowerLimit = null;

    /**
     * The base quantity that a measured value of zero represents. In addition, this
     * provides the units of the entire measurement series.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    protected $origin = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The length of time between sampling times, measured in milliseconds.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    protected $period = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The upper limit of detection of the measured points. This is needed if any of
     * the data points have the value "U" (higher than detection limit).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    protected $upperLimit = null;

    /**
     * Validation map for fields in type SampledData
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRSampledData Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSampledData::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DATA]) || isset($data[self::FIELD_DATA_EXT])) {
            if (isset($data[self::FIELD_DATA])) {
                $value = $data[self::FIELD_DATA];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATA_EXT]) && is_array($data[self::FIELD_DATA_EXT])) {
                $ext = $data[self::FIELD_DATA_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRSampledDataDataType) {
                    $this->setData($value);
                } else if (is_array($value)) {
                    $this->setData(new FHIRSampledDataDataType(array_merge($ext, $value)));
                } else {
                    $this->setData(new FHIRSampledDataDataType([FHIRSampledDataDataType::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setData(new FHIRSampledDataDataType($ext));
            }
        }
        if (isset($data[self::FIELD_DIMENSIONS]) || isset($data[self::FIELD_DIMENSIONS_EXT])) {
            if (isset($data[self::FIELD_DIMENSIONS])) {
                $value = $data[self::FIELD_DIMENSIONS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DIMENSIONS_EXT]) && is_array($data[self::FIELD_DIMENSIONS_EXT])) {
                $ext = $data[self::FIELD_DIMENSIONS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setDimensions($value);
                } else if (is_array($value)) {
                    $this->setDimensions(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setDimensions(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDimensions(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_FACTOR]) || isset($data[self::FIELD_FACTOR_EXT])) {
            if (isset($data[self::FIELD_FACTOR])) {
                $value = $data[self::FIELD_FACTOR];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FACTOR_EXT]) && is_array($data[self::FIELD_FACTOR_EXT])) {
                $ext = $data[self::FIELD_FACTOR_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setFactor($value);
                } else if (is_array($value)) {
                    $this->setFactor(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setFactor(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFactor(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_LOWER_LIMIT]) || isset($data[self::FIELD_LOWER_LIMIT_EXT])) {
            if (isset($data[self::FIELD_LOWER_LIMIT])) {
                $value = $data[self::FIELD_LOWER_LIMIT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LOWER_LIMIT_EXT]) && is_array($data[self::FIELD_LOWER_LIMIT_EXT])) {
                $ext = $data[self::FIELD_LOWER_LIMIT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setLowerLimit($value);
                } else if (is_array($value)) {
                    $this->setLowerLimit(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setLowerLimit(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setLowerLimit(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_ORIGIN])) {
            if ($data[self::FIELD_ORIGIN] instanceof FHIRSimpleQuantity) {
                $this->setOrigin($data[self::FIELD_ORIGIN]);
            } else {
                $this->setOrigin(new FHIRSimpleQuantity($data[self::FIELD_ORIGIN]));
            }
        }
        if (isset($data[self::FIELD_PERIOD]) || isset($data[self::FIELD_PERIOD_EXT])) {
            if (isset($data[self::FIELD_PERIOD])) {
                $value = $data[self::FIELD_PERIOD];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PERIOD_EXT]) && is_array($data[self::FIELD_PERIOD_EXT])) {
                $ext = $data[self::FIELD_PERIOD_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setPeriod($value);
                } else if (is_array($value)) {
                    $this->setPeriod(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setPeriod(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPeriod(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_UPPER_LIMIT]) || isset($data[self::FIELD_UPPER_LIMIT_EXT])) {
            if (isset($data[self::FIELD_UPPER_LIMIT])) {
                $value = $data[self::FIELD_UPPER_LIMIT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_UPPER_LIMIT_EXT]) && is_array($data[self::FIELD_UPPER_LIMIT_EXT])) {
                $ext = $data[self::FIELD_UPPER_LIMIT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setUpperLimit($value);
                } else if (is_array($value)) {
                    $this->setUpperLimit(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setUpperLimit(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setUpperLimit(new FHIRDecimal($ext));
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
        return "<SampledData{$xmlns}></SampledData>";
    }

    /**
     * A series of data points which are decimal values separated by a single space
     * (character u20). The special values "E" (error), "L" (below detection limit) and
     * "U" (above detection limit) can also be used in place of a decimal value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSampledDataDataType
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * A series of data points which are decimal values separated by a single space
     * (character u20). The special values "E" (error), "L" (below detection limit) and
     * "U" (above detection limit) can also be used in place of a decimal value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSampledDataDataType $data
     * @return static
     */
    public function setData($data = null)
    {
        if (null === $data) {
            $this->data = null;
            return $this;
        }
        if ($data instanceof FHIRSampledDataDataType) {
            $this->data = $data;
            return $this;
        }
        $this->data = new FHIRSampledDataDataType($data);
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of sample points at each time point. If this value is greater than
     * one, then the dimensions will be interlaced - all the sample points for a point
     * in time will be recorded at once.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of sample points at each time point. If this value is greater than
     * one, then the dimensions will be interlaced - all the sample points for a point
     * in time will be recorded at once.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt $dimensions
     * @return static
     */
    public function setDimensions($dimensions = null)
    {
        if (null === $dimensions) {
            $this->dimensions = null;
            return $this;
        }
        if ($dimensions instanceof FHIRPositiveInt) {
            $this->dimensions = $dimensions;
            return $this;
        }
        $this->dimensions = new FHIRPositiveInt($dimensions);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A correction factor that is applied to the sampled data points before they are
     * added to the origin.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getFactor()
    {
        return $this->factor;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A correction factor that is applied to the sampled data points before they are
     * added to the origin.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $factor
     * @return static
     */
    public function setFactor($factor = null)
    {
        if (null === $factor) {
            $this->factor = null;
            return $this;
        }
        if ($factor instanceof FHIRDecimal) {
            $this->factor = $factor;
            return $this;
        }
        $this->factor = new FHIRDecimal($factor);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The lower limit of detection of the measured points. This is needed if any of
     * the data points have the value "L" (lower than detection limit).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getLowerLimit()
    {
        return $this->lowerLimit;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The lower limit of detection of the measured points. This is needed if any of
     * the data points have the value "L" (lower than detection limit).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $lowerLimit
     * @return static
     */
    public function setLowerLimit($lowerLimit = null)
    {
        if (null === $lowerLimit) {
            $this->lowerLimit = null;
            return $this;
        }
        if ($lowerLimit instanceof FHIRDecimal) {
            $this->lowerLimit = $lowerLimit;
            return $this;
        }
        $this->lowerLimit = new FHIRDecimal($lowerLimit);
        return $this;
    }

    /**
     * The base quantity that a measured value of zero represents. In addition, this
     * provides the units of the entire measurement series.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * The base quantity that a measured value of zero represents. In addition, this
     * provides the units of the entire measurement series.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $origin
     * @return static
     */
    public function setOrigin(FHIRSimpleQuantity $origin = null)
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The length of time between sampling times, measured in milliseconds.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The length of time between sampling times, measured in milliseconds.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $period
     * @return static
     */
    public function setPeriod($period = null)
    {
        if (null === $period) {
            $this->period = null;
            return $this;
        }
        if ($period instanceof FHIRDecimal) {
            $this->period = $period;
            return $this;
        }
        $this->period = new FHIRDecimal($period);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The upper limit of detection of the measured points. This is needed if any of
     * the data points have the value "U" (higher than detection limit).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getUpperLimit()
    {
        return $this->upperLimit;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The upper limit of detection of the measured points. This is needed if any of
     * the data points have the value "U" (higher than detection limit).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $upperLimit
     * @return static
     */
    public function setUpperLimit($upperLimit = null)
    {
        if (null === $upperLimit) {
            $this->upperLimit = null;
            return $this;
        }
        if ($upperLimit instanceof FHIRDecimal) {
            $this->upperLimit = $upperLimit;
            return $this;
        }
        $this->upperLimit = new FHIRDecimal($upperLimit);
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
        if (null !== ($v = $this->getData())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDimensions())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DIMENSIONS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFactor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FACTOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLowerLimit())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOWER_LIMIT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrigin())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORIGIN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUpperLimit())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UPPER_LIMIT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DATA])) {
            $v = $this->getData();
            foreach($validationRules[self::FIELD_DATA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA, self::FIELD_DATA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATA])) {
                        $errs[self::FIELD_DATA] = [];
                    }
                    $errs[self::FIELD_DATA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DIMENSIONS])) {
            $v = $this->getDimensions();
            foreach($validationRules[self::FIELD_DIMENSIONS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA, self::FIELD_DIMENSIONS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DIMENSIONS])) {
                        $errs[self::FIELD_DIMENSIONS] = [];
                    }
                    $errs[self::FIELD_DIMENSIONS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FACTOR])) {
            $v = $this->getFactor();
            foreach($validationRules[self::FIELD_FACTOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA, self::FIELD_FACTOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FACTOR])) {
                        $errs[self::FIELD_FACTOR] = [];
                    }
                    $errs[self::FIELD_FACTOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOWER_LIMIT])) {
            $v = $this->getLowerLimit();
            foreach($validationRules[self::FIELD_LOWER_LIMIT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA, self::FIELD_LOWER_LIMIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOWER_LIMIT])) {
                        $errs[self::FIELD_LOWER_LIMIT] = [];
                    }
                    $errs[self::FIELD_LOWER_LIMIT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORIGIN])) {
            $v = $this->getOrigin();
            foreach($validationRules[self::FIELD_ORIGIN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA, self::FIELD_ORIGIN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORIGIN])) {
                        $errs[self::FIELD_ORIGIN] = [];
                    }
                    $errs[self::FIELD_ORIGIN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD])) {
            $v = $this->getPeriod();
            foreach($validationRules[self::FIELD_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA, self::FIELD_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD])) {
                        $errs[self::FIELD_PERIOD] = [];
                    }
                    $errs[self::FIELD_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UPPER_LIMIT])) {
            $v = $this->getUpperLimit();
            foreach($validationRules[self::FIELD_UPPER_LIMIT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA, self::FIELD_UPPER_LIMIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UPPER_LIMIT])) {
                        $errs[self::FIELD_UPPER_LIMIT] = [];
                    }
                    $errs[self::FIELD_UPPER_LIMIT][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSampledData $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSampledData
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
                throw new \DomainException(sprintf('FHIRSampledData::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSampledData::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSampledData;
        } elseif (!is_object($type) || !($type instanceof FHIRSampledData)) {
            throw new \RuntimeException(sprintf(
                'FHIRSampledData::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSampledData or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->data)) {
            $type->setData(FHIRSampledDataDataType::xmlUnserialize($children->data));
        }
        if (isset($attributes->data)) {
            $pt = $type->getData();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->data);
            } else {
                $type->setData((string)$attributes->data);
            }
        }
        if (isset($children->dimensions)) {
            $type->setDimensions(FHIRPositiveInt::xmlUnserialize($children->dimensions));
        }
        if (isset($attributes->dimensions)) {
            $pt = $type->getDimensions();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->dimensions);
            } else {
                $type->setDimensions((string)$attributes->dimensions);
            }
        }
        if (isset($children->factor)) {
            $type->setFactor(FHIRDecimal::xmlUnserialize($children->factor));
        }
        if (isset($attributes->factor)) {
            $pt = $type->getFactor();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->factor);
            } else {
                $type->setFactor((string)$attributes->factor);
            }
        }
        if (isset($children->lowerLimit)) {
            $type->setLowerLimit(FHIRDecimal::xmlUnserialize($children->lowerLimit));
        }
        if (isset($attributes->lowerLimit)) {
            $pt = $type->getLowerLimit();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->lowerLimit);
            } else {
                $type->setLowerLimit((string)$attributes->lowerLimit);
            }
        }
        if (isset($children->origin)) {
            $type->setOrigin(FHIRSimpleQuantity::xmlUnserialize($children->origin));
        }
        if (isset($children->period)) {
            $type->setPeriod(FHIRDecimal::xmlUnserialize($children->period));
        }
        if (isset($attributes->period)) {
            $pt = $type->getPeriod();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->period);
            } else {
                $type->setPeriod((string)$attributes->period);
            }
        }
        if (isset($children->upperLimit)) {
            $type->setUpperLimit(FHIRDecimal::xmlUnserialize($children->upperLimit));
        }
        if (isset($attributes->upperLimit)) {
            $pt = $type->getUpperLimit();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->upperLimit);
            } else {
                $type->setUpperLimit((string)$attributes->upperLimit);
            }
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
        if (null !== ($v = $this->getData())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDimensions())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DIMENSIONS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFactor())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FACTOR, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getLowerLimit())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LOWER_LIMIT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOrigin())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORIGIN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUpperLimit())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_UPPER_LIMIT, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getData())) {
            $a[self::FIELD_DATA] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRSampledDataDataType::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRSampledDataDataType::FIELD_VALUE]);
                $a[self::FIELD_DATA_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDimensions())) {
            $a[self::FIELD_DIMENSIONS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRPositiveInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRPositiveInt::FIELD_VALUE]);
                $a[self::FIELD_DIMENSIONS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getFactor())) {
            $a[self::FIELD_FACTOR] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_FACTOR_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getLowerLimit())) {
            $a[self::FIELD_LOWER_LIMIT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_LOWER_LIMIT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getOrigin())) {
            $a[self::FIELD_ORIGIN] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_PERIOD_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getUpperLimit())) {
            $a[self::FIELD_UPPER_LIMIT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_UPPER_LIMIT_EXT] = $enc;
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