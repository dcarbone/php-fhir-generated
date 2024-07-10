<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 10th, 2024 03:24+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRSampledDataDataType;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R5\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRSampledDataDataTypePrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRChangeTrackingTrait;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRSourceXmlNamespaceTrait;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRValidationAssertionsTrait;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * A series of measurements taken by a device, with upper and lower limits. There
 * may be more than one dimension in the data.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRSampledData
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType
 */
class FHIRSampledData extends FHIRDataType
{
    use PHPFHIRValidationAssertionsTrait;
    use PHPFHIRChangeTrackingTrait;
    use PHPFHIRSourceXmlNamespaceTrait;

    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA;

    const FIELD_ORIGIN = 'origin';
    const FIELD_INTERVAL = 'interval';
    const FIELD_INTERVAL_EXT = '_interval';
    const FIELD_INTERVAL_UNIT = 'intervalUnit';
    const FIELD_INTERVAL_UNIT_EXT = '_intervalUnit';
    const FIELD_FACTOR = 'factor';
    const FIELD_FACTOR_EXT = '_factor';
    const FIELD_LOWER_LIMIT = 'lowerLimit';
    const FIELD_LOWER_LIMIT_EXT = '_lowerLimit';
    const FIELD_UPPER_LIMIT = 'upperLimit';
    const FIELD_UPPER_LIMIT_EXT = '_upperLimit';
    const FIELD_DIMENSIONS = 'dimensions';
    const FIELD_DIMENSIONS_EXT = '_dimensions';
    const FIELD_CODE_MAP = 'codeMap';
    const FIELD_CODE_MAP_EXT = '_codeMap';
    const FIELD_OFFSETS = 'offsets';
    const FIELD_OFFSETS_EXT = '_offsets';
    const FIELD_DATA = 'data';
    const FIELD_DATA_EXT = '_data';

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The base quantity that a measured value of zero represents. In addition, this
     * provides the units of the entire measurement series.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    protected null|FHIRQuantity $origin = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Amount of intervalUnits between samples, e.g. milliseconds for time-based
     * sampling.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $interval = null;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The measurement unit in which the sample interval is expressed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCode
     */
    protected null|FHIRCode $intervalUnit = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A correction factor that is applied to the sampled data points before they are
     * added to the origin.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $factor = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The lower limit of detection of the measured points. This is needed if any of
     * the data points have the value "L" (lower than detection limit).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $lowerLimit = null;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The upper limit of detection of the measured points. This is needed if any of
     * the data points have the value "U" (higher than detection limit).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $upperLimit = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of sample points at each time point. If this value is greater than
     * one, then the dimensions will be interlaced - all the sample points for a point
     * in time will be recorded at once.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $dimensions = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Reference to ConceptMap that defines the codes used in the data.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $codeMap = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A series of data points which are decimal values separated by a single space
     * (character u20). The units in which the offsets are expressed are found in
     * intervalUnit. The absolute point at which the measurements begin SHALL be
     * conveyed outside the scope of this datatype, e.g. Observation.effectiveDateTime
     * for a timing offset.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $offsets = null;
    /**
     * A series of data points which are decimal values or codes separated by a single
     * space (character u20). The special codes "E" (error), "L" (below detection
     * limit) and "U" (above detection limit) are also defined for used in place of
     * decimal values.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRSampledDataDataType
     */
    protected null|FHIRSampledDataDataType $data = null;

    /**
     * Validation map for fields in type SampledData
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRSampledData Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_ORIGIN, $data)) {
            if ($data[self::FIELD_ORIGIN] instanceof FHIRQuantity) {
                $this->setOrigin($data[self::FIELD_ORIGIN]);
            } else {
                $this->setOrigin(new FHIRQuantity($data[self::FIELD_ORIGIN]));
            }
        }
        if (array_key_exists(self::FIELD_INTERVAL, $data) || array_key_exists(self::FIELD_INTERVAL_EXT, $data)) {
            $value = $data[self::FIELD_INTERVAL] ?? null;
            $ext = (isset($data[self::FIELD_INTERVAL_EXT]) && is_array($data[self::FIELD_INTERVAL_EXT])) ? $data[self::FIELD_INTERVAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setInterval($value);
                } else if (is_array($value)) {
                    $this->setInterval(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setInterval(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setInterval(new FHIRDecimal($ext));
            } else {
                $this->setInterval(new FHIRDecimal(null));
            }
        }
        if (array_key_exists(self::FIELD_INTERVAL_UNIT, $data) || array_key_exists(self::FIELD_INTERVAL_UNIT_EXT, $data)) {
            $value = $data[self::FIELD_INTERVAL_UNIT] ?? null;
            $ext = (isset($data[self::FIELD_INTERVAL_UNIT_EXT]) && is_array($data[self::FIELD_INTERVAL_UNIT_EXT])) ? $data[self::FIELD_INTERVAL_UNIT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setIntervalUnit($value);
                } else if (is_array($value)) {
                    $this->setIntervalUnit(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setIntervalUnit(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setIntervalUnit(new FHIRCode($ext));
            } else {
                $this->setIntervalUnit(new FHIRCode(null));
            }
        }
        if (array_key_exists(self::FIELD_FACTOR, $data) || array_key_exists(self::FIELD_FACTOR_EXT, $data)) {
            $value = $data[self::FIELD_FACTOR] ?? null;
            $ext = (isset($data[self::FIELD_FACTOR_EXT]) && is_array($data[self::FIELD_FACTOR_EXT])) ? $data[self::FIELD_FACTOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setFactor($value);
                } else if (is_array($value)) {
                    $this->setFactor(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setFactor(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFactor(new FHIRDecimal($ext));
            } else {
                $this->setFactor(new FHIRDecimal(null));
            }
        }
        if (array_key_exists(self::FIELD_LOWER_LIMIT, $data) || array_key_exists(self::FIELD_LOWER_LIMIT_EXT, $data)) {
            $value = $data[self::FIELD_LOWER_LIMIT] ?? null;
            $ext = (isset($data[self::FIELD_LOWER_LIMIT_EXT]) && is_array($data[self::FIELD_LOWER_LIMIT_EXT])) ? $data[self::FIELD_LOWER_LIMIT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setLowerLimit($value);
                } else if (is_array($value)) {
                    $this->setLowerLimit(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setLowerLimit(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLowerLimit(new FHIRDecimal($ext));
            } else {
                $this->setLowerLimit(new FHIRDecimal(null));
            }
        }
        if (array_key_exists(self::FIELD_UPPER_LIMIT, $data) || array_key_exists(self::FIELD_UPPER_LIMIT_EXT, $data)) {
            $value = $data[self::FIELD_UPPER_LIMIT] ?? null;
            $ext = (isset($data[self::FIELD_UPPER_LIMIT_EXT]) && is_array($data[self::FIELD_UPPER_LIMIT_EXT])) ? $data[self::FIELD_UPPER_LIMIT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setUpperLimit($value);
                } else if (is_array($value)) {
                    $this->setUpperLimit(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setUpperLimit(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setUpperLimit(new FHIRDecimal($ext));
            } else {
                $this->setUpperLimit(new FHIRDecimal(null));
            }
        }
        if (array_key_exists(self::FIELD_DIMENSIONS, $data) || array_key_exists(self::FIELD_DIMENSIONS_EXT, $data)) {
            $value = $data[self::FIELD_DIMENSIONS] ?? null;
            $ext = (isset($data[self::FIELD_DIMENSIONS_EXT]) && is_array($data[self::FIELD_DIMENSIONS_EXT])) ? $data[self::FIELD_DIMENSIONS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setDimensions($value);
                } else if (is_array($value)) {
                    $this->setDimensions(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setDimensions(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDimensions(new FHIRPositiveInt($ext));
            } else {
                $this->setDimensions(new FHIRPositiveInt(null));
            }
        }
        if (array_key_exists(self::FIELD_CODE_MAP, $data) || array_key_exists(self::FIELD_CODE_MAP_EXT, $data)) {
            $value = $data[self::FIELD_CODE_MAP] ?? null;
            $ext = (isset($data[self::FIELD_CODE_MAP_EXT]) && is_array($data[self::FIELD_CODE_MAP_EXT])) ? $data[self::FIELD_CODE_MAP_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setCodeMap($value);
                } else if (is_array($value)) {
                    $this->setCodeMap(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setCodeMap(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCodeMap(new FHIRCanonical($ext));
            } else {
                $this->setCodeMap(new FHIRCanonical(null));
            }
        }
        if (array_key_exists(self::FIELD_OFFSETS, $data) || array_key_exists(self::FIELD_OFFSETS_EXT, $data)) {
            $value = $data[self::FIELD_OFFSETS] ?? null;
            $ext = (isset($data[self::FIELD_OFFSETS_EXT]) && is_array($data[self::FIELD_OFFSETS_EXT])) ? $data[self::FIELD_OFFSETS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setOffsets($value);
                } else if (is_array($value)) {
                    $this->setOffsets(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setOffsets(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOffsets(new FHIRString($ext));
            } else {
                $this->setOffsets(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_DATA, $data) || array_key_exists(self::FIELD_DATA_EXT, $data)) {
            $value = $data[self::FIELD_DATA] ?? null;
            $ext = (isset($data[self::FIELD_DATA_EXT]) && is_array($data[self::FIELD_DATA_EXT])) ? $data[self::FIELD_DATA_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRSampledDataDataType) {
                    $this->setData($value);
                } else if (is_array($value)) {
                    $this->setData(new FHIRSampledDataDataType(array_merge($ext, $value)));
                } else {
                    $this->setData(new FHIRSampledDataDataType([FHIRSampledDataDataType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setData(new FHIRSampledDataDataType($ext));
            } else {
                $this->setData(new FHIRSampledDataDataType(null));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The base quantity that a measured value of zero represents. In addition, this
     * provides the units of the entire measurement series.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getOrigin(): null|FHIRQuantity
    {
        return $this->origin;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The base quantity that a measured value of zero represents. In addition, this
     * provides the units of the entire measurement series.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $origin
     * @return static
     */
    public function setOrigin(null|FHIRQuantity $origin = null): self
    {
        if (null === $origin) {
            $origin = new FHIRQuantity();
        }
        $this->_trackValueSet($this->origin, $origin);
        $this->origin = $origin;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Amount of intervalUnits between samples, e.g. milliseconds for time-based
     * sampling.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    public function getInterval(): null|FHIRDecimal
    {
        return $this->interval;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Amount of intervalUnits between samples, e.g. milliseconds for time-based
     * sampling.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\R5\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDecimal $interval
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setInterval(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $interval = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $interval && !($interval instanceof FHIRDecimal)) {
            $interval = new FHIRDecimal($interval);
        }
        $this->_trackValueSet($this->interval, $interval);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_INTERVAL])) {
            $this->_primitiveXmlLocations[self::FIELD_INTERVAL] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_INTERVAL][0] = $xmlLocation;
        $this->interval = $interval;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The measurement unit in which the sample interval is expressed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCode
     */
    public function getIntervalUnit(): null|FHIRCode
    {
        return $this->intervalUnit;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The measurement unit in which the sample interval is expressed.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCode $intervalUnit
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setIntervalUnit(null|string|FHIRCodePrimitive|FHIRCode $intervalUnit = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $intervalUnit && !($intervalUnit instanceof FHIRCode)) {
            $intervalUnit = new FHIRCode($intervalUnit);
        }
        $this->_trackValueSet($this->intervalUnit, $intervalUnit);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_INTERVAL_UNIT])) {
            $this->_primitiveXmlLocations[self::FIELD_INTERVAL_UNIT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_INTERVAL_UNIT][0] = $xmlLocation;
        $this->intervalUnit = $intervalUnit;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A correction factor that is applied to the sampled data points before they are
     * added to the origin.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    public function getFactor(): null|FHIRDecimal
    {
        return $this->factor;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A correction factor that is applied to the sampled data points before they are
     * added to the origin.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\R5\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDecimal $factor
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setFactor(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $factor = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $factor && !($factor instanceof FHIRDecimal)) {
            $factor = new FHIRDecimal($factor);
        }
        $this->_trackValueSet($this->factor, $factor);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_FACTOR])) {
            $this->_primitiveXmlLocations[self::FIELD_FACTOR] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_FACTOR][0] = $xmlLocation;
        $this->factor = $factor;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The lower limit of detection of the measured points. This is needed if any of
     * the data points have the value "L" (lower than detection limit).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    public function getLowerLimit(): null|FHIRDecimal
    {
        return $this->lowerLimit;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The lower limit of detection of the measured points. This is needed if any of
     * the data points have the value "L" (lower than detection limit).
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\R5\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDecimal $lowerLimit
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setLowerLimit(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $lowerLimit = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $lowerLimit && !($lowerLimit instanceof FHIRDecimal)) {
            $lowerLimit = new FHIRDecimal($lowerLimit);
        }
        $this->_trackValueSet($this->lowerLimit, $lowerLimit);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_LOWER_LIMIT])) {
            $this->_primitiveXmlLocations[self::FIELD_LOWER_LIMIT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_LOWER_LIMIT][0] = $xmlLocation;
        $this->lowerLimit = $lowerLimit;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The upper limit of detection of the measured points. This is needed if any of
     * the data points have the value "U" (higher than detection limit).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDecimal
     */
    public function getUpperLimit(): null|FHIRDecimal
    {
        return $this->upperLimit;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The upper limit of detection of the measured points. This is needed if any of
     * the data points have the value "U" (higher than detection limit).
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\R5\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDecimal $upperLimit
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setUpperLimit(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $upperLimit = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $upperLimit && !($upperLimit instanceof FHIRDecimal)) {
            $upperLimit = new FHIRDecimal($upperLimit);
        }
        $this->_trackValueSet($this->upperLimit, $upperLimit);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_UPPER_LIMIT])) {
            $this->_primitiveXmlLocations[self::FIELD_UPPER_LIMIT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_UPPER_LIMIT][0] = $xmlLocation;
        $this->upperLimit = $upperLimit;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getDimensions(): null|FHIRPositiveInt
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R5\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPositiveInt $dimensions
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDimensions(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $dimensions = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $dimensions && !($dimensions instanceof FHIRPositiveInt)) {
            $dimensions = new FHIRPositiveInt($dimensions);
        }
        $this->_trackValueSet($this->dimensions, $dimensions);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DIMENSIONS])) {
            $this->_primitiveXmlLocations[self::FIELD_DIMENSIONS] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DIMENSIONS][0] = $xmlLocation;
        $this->dimensions = $dimensions;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Reference to ConceptMap that defines the codes used in the data.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getCodeMap(): null|FHIRCanonical
    {
        return $this->codeMap;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Reference to ConceptMap that defines the codes used in the data.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCanonical $codeMap
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setCodeMap(null|string|FHIRCanonicalPrimitive|FHIRCanonical $codeMap = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $codeMap && !($codeMap instanceof FHIRCanonical)) {
            $codeMap = new FHIRCanonical($codeMap);
        }
        $this->_trackValueSet($this->codeMap, $codeMap);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_CODE_MAP])) {
            $this->_primitiveXmlLocations[self::FIELD_CODE_MAP] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_CODE_MAP][0] = $xmlLocation;
        $this->codeMap = $codeMap;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A series of data points which are decimal values separated by a single space
     * (character u20). The units in which the offsets are expressed are found in
     * intervalUnit. The absolute point at which the measurements begin SHALL be
     * conveyed outside the scope of this datatype, e.g. Observation.effectiveDateTime
     * for a timing offset.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getOffsets(): null|FHIRString
    {
        return $this->offsets;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A series of data points which are decimal values separated by a single space
     * (character u20). The units in which the offsets are expressed are found in
     * intervalUnit. The absolute point at which the measurements begin SHALL be
     * conveyed outside the scope of this datatype, e.g. Observation.effectiveDateTime
     * for a timing offset.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $offsets
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setOffsets(null|string|FHIRStringPrimitive|FHIRString $offsets = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $offsets && !($offsets instanceof FHIRString)) {
            $offsets = new FHIRString($offsets);
        }
        $this->_trackValueSet($this->offsets, $offsets);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_OFFSETS])) {
            $this->_primitiveXmlLocations[self::FIELD_OFFSETS] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_OFFSETS][0] = $xmlLocation;
        $this->offsets = $offsets;
        return $this;
    }

    /**
     * A series of data points which are decimal values or codes separated by a single
     * space (character u20). The special codes "E" (error), "L" (below detection
     * limit) and "U" (above detection limit) are also defined for used in place of
     * decimal values.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRSampledDataDataType
     */
    public function getData(): null|FHIRSampledDataDataType
    {
        return $this->data;
    }

    /**
     * A series of data points which are decimal values or codes separated by a single
     * space (character u20). The special codes "E" (error), "L" (below detection
     * limit) and "U" (above detection limit) are also defined for used in place of
     * decimal values.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRSampledDataDataTypePrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRSampledDataDataType $data
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setData(null|string|FHIRSampledDataDataTypePrimitive|FHIRSampledDataDataType $data = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $data && !($data instanceof FHIRSampledDataDataType)) {
            $data = new FHIRSampledDataDataType($data);
        }
        $this->_trackValueSet($this->data, $data);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DATA])) {
            $this->_primitiveXmlLocations[self::FIELD_DATA] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DATA][0] = $xmlLocation;
        $this->data = $data;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getOrigin())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORIGIN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInterval())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INTERVAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIntervalUnit())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INTERVAL_UNIT] = $fieldErrs;
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
        if (null !== ($v = $this->getUpperLimit())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UPPER_LIMIT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDimensions())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DIMENSIONS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCodeMap())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE_MAP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOffsets())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OFFSETS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getData())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATA] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_INTERVAL])) {
            $v = $this->getInterval();
            foreach($validationRules[self::FIELD_INTERVAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA, self::FIELD_INTERVAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTERVAL])) {
                        $errs[self::FIELD_INTERVAL] = [];
                    }
                    $errs[self::FIELD_INTERVAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INTERVAL_UNIT])) {
            $v = $this->getIntervalUnit();
            foreach($validationRules[self::FIELD_INTERVAL_UNIT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA, self::FIELD_INTERVAL_UNIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTERVAL_UNIT])) {
                        $errs[self::FIELD_INTERVAL_UNIT] = [];
                    }
                    $errs[self::FIELD_INTERVAL_UNIT][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_CODE_MAP])) {
            $v = $this->getCodeMap();
            foreach($validationRules[self::FIELD_CODE_MAP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA, self::FIELD_CODE_MAP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE_MAP])) {
                        $errs[self::FIELD_CODE_MAP] = [];
                    }
                    $errs[self::FIELD_CODE_MAP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OFFSETS])) {
            $v = $this->getOffsets();
            foreach($validationRules[self::FIELD_OFFSETS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA, self::FIELD_OFFSETS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OFFSETS])) {
                        $errs[self::FIELD_OFFSETS] = [];
                    }
                    $errs[self::FIELD_OFFSETS][$rule] = $err;
                }
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRSampledData $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRSampledData
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRSampledData)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_ORIGIN === $childName) {
                $type->setOrigin(FHIRQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_INTERVAL === $childName) {
                $type->setInterval(FHIRDecimal::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_INTERVAL_UNIT === $childName) {
                $type->setIntervalUnit(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_FACTOR === $childName) {
                $type->setFactor(FHIRDecimal::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LOWER_LIMIT === $childName) {
                $type->setLowerLimit(FHIRDecimal::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_UPPER_LIMIT === $childName) {
                $type->setUpperLimit(FHIRDecimal::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DIMENSIONS === $childName) {
                $type->setDimensions(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CODE_MAP === $childName) {
                $type->setCodeMap(FHIRCanonical::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_OFFSETS === $childName) {
                $type->setOffsets(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DATA === $childName) {
                $type->setData(FHIRSampledDataDataType::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_INTERVAL])) {
            $pt = $type->getInterval();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_INTERVAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setInterval((string)$attributes[self::FIELD_INTERVAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_INTERVAL_UNIT])) {
            $pt = $type->getIntervalUnit();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_INTERVAL_UNIT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setIntervalUnit((string)$attributes[self::FIELD_INTERVAL_UNIT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FACTOR])) {
            $pt = $type->getFactor();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FACTOR], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setFactor((string)$attributes[self::FIELD_FACTOR], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LOWER_LIMIT])) {
            $pt = $type->getLowerLimit();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LOWER_LIMIT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLowerLimit((string)$attributes[self::FIELD_LOWER_LIMIT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_UPPER_LIMIT])) {
            $pt = $type->getUpperLimit();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_UPPER_LIMIT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setUpperLimit((string)$attributes[self::FIELD_UPPER_LIMIT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DIMENSIONS])) {
            $pt = $type->getDimensions();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DIMENSIONS], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDimensions((string)$attributes[self::FIELD_DIMENSIONS], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CODE_MAP])) {
            $pt = $type->getCodeMap();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CODE_MAP], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setCodeMap((string)$attributes[self::FIELD_CODE_MAP], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_OFFSETS])) {
            $pt = $type->getOffsets();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_OFFSETS], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setOffsets((string)$attributes[self::FIELD_OFFSETS], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DATA])) {
            $pt = $type->getData();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATA], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setData((string)$attributes[self::FIELD_DATA], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'SampledData', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_INTERVAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getInterval())) {
            $xw->writeAttribute(self::FIELD_INTERVAL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_INTERVAL_UNIT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getIntervalUnit())) {
            $xw->writeAttribute(self::FIELD_INTERVAL_UNIT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FACTOR] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getFactor())) {
            $xw->writeAttribute(self::FIELD_FACTOR, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_LOWER_LIMIT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getLowerLimit())) {
            $xw->writeAttribute(self::FIELD_LOWER_LIMIT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_UPPER_LIMIT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getUpperLimit())) {
            $xw->writeAttribute(self::FIELD_UPPER_LIMIT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DIMENSIONS] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDimensions())) {
            $xw->writeAttribute(self::FIELD_DIMENSIONS, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_CODE_MAP] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getCodeMap())) {
            $xw->writeAttribute(self::FIELD_CODE_MAP, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_OFFSETS] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getOffsets())) {
            $xw->writeAttribute(self::FIELD_OFFSETS, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATA] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getData())) {
            $xw->writeAttribute(self::FIELD_DATA, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getOrigin())) {
            $xw->startElement(self::FIELD_ORIGIN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_INTERVAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getInterval())) {
            $xw->startElement(self::FIELD_INTERVAL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_INTERVAL_UNIT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getIntervalUnit())) {
            $xw->startElement(self::FIELD_INTERVAL_UNIT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FACTOR] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getFactor())) {
            $xw->startElement(self::FIELD_FACTOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_LOWER_LIMIT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getLowerLimit())) {
            $xw->startElement(self::FIELD_LOWER_LIMIT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_UPPER_LIMIT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getUpperLimit())) {
            $xw->startElement(self::FIELD_UPPER_LIMIT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DIMENSIONS] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDimensions())) {
            $xw->startElement(self::FIELD_DIMENSIONS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_CODE_MAP] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getCodeMap())) {
            $xw->startElement(self::FIELD_CODE_MAP);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_OFFSETS] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getOffsets())) {
            $xw->startElement(self::FIELD_OFFSETS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATA] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getData())) {
            $xw->startElement(self::FIELD_DATA);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getOrigin())) {
            $out->{self::FIELD_ORIGIN} = $v;
        }
        if (null !== ($v = $this->getInterval())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_INTERVAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_INTERVAL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getIntervalUnit())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_INTERVAL_UNIT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_INTERVAL_UNIT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFactor())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FACTOR} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FACTOR_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getLowerLimit())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LOWER_LIMIT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LOWER_LIMIT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getUpperLimit())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_UPPER_LIMIT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_UPPER_LIMIT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDimensions())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DIMENSIONS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DIMENSIONS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCodeMap())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CODE_MAP} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCanonical::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CODE_MAP_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOffsets())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_OFFSETS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_OFFSETS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getData())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATA} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRSampledDataDataType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATA_EXT} = $ext;
            }
        }

        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}