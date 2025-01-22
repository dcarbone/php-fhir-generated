<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 22nd, 2025 19:32+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\SourceXMLNamespaceTrait;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSampledDataDataType;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRSampledDataDataTypePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A series of measurements taken by a device, with upper and lower limits. There
 * may be more than one dimension in the data.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
class FHIRSampledData extends FHIRDataType
{
    use SourceXMLNamespaceTrait;


    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SAMPLED_DATA;


    public const FIELD_ORIGIN = 'origin';
    public const FIELD_INTERVAL = 'interval';
    public const FIELD_INTERVAL_EXT = '_interval';
    public const FIELD_INTERVAL_UNIT = 'intervalUnit';
    public const FIELD_INTERVAL_UNIT_EXT = '_intervalUnit';
    public const FIELD_FACTOR = 'factor';
    public const FIELD_FACTOR_EXT = '_factor';
    public const FIELD_LOWER_LIMIT = 'lowerLimit';
    public const FIELD_LOWER_LIMIT_EXT = '_lowerLimit';
    public const FIELD_UPPER_LIMIT = 'upperLimit';
    public const FIELD_UPPER_LIMIT_EXT = '_upperLimit';
    public const FIELD_DIMENSIONS = 'dimensions';
    public const FIELD_DIMENSIONS_EXT = '_dimensions';
    public const FIELD_CODE_MAP = 'codeMap';
    public const FIELD_CODE_MAP_EXT = '_codeMap';
    public const FIELD_OFFSETS = 'offsets';
    public const FIELD_OFFSETS_EXT = '_offsets';
    public const FIELD_DATA = 'data';
    public const FIELD_DATA_EXT = '_data';

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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity 
     */
    protected FHIRQuantity $origin;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Amount of intervalUnits between samples, e.g. milliseconds for time-based
     * sampling.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $interval;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The measurement unit in which the sample interval is expressed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode 
     */
    protected FHIRCode $intervalUnit;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A correction factor that is applied to the sampled data points before they are
     * added to the origin.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $factor;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The lower limit of detection of the measured points. This is needed if any of
     * the data points have the value "L" (lower than detection limit).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $lowerLimit;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The upper limit of detection of the measured points. This is needed if any of
     * the data points have the value "U" (higher than detection limit).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $upperLimit;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of sample points at each time point. If this value is greater than
     * one, then the dimensions will be interlaced - all the sample points for a point
     * in time will be recorded at once.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $dimensions;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Reference to ConceptMap that defines the codes used in the data.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical 
     */
    protected FHIRCanonical $codeMap;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $offsets;
    /**
     * A series of data points which are decimal values or codes separated by a single
     * space (character u20). The special codes "E" (error), "L" (below detection
     * limit) and "U" (above detection limit) are also defined for used in place of
     * decimal values.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSampledDataDataType 
     */
    protected FHIRSampledDataDataType $data;

    /** Default validation map for fields in type SampledData */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_ORIGIN => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_INTERVAL_UNIT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_DIMENSIONS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRSampledData Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $origin
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal $interval
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $intervalUnit
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal $factor
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal $lowerLimit
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal $upperLimit
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $dimensions
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $codeMap
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $offsets
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRSampledDataDataTypePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSampledDataDataType $data
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|FHIRQuantity $origin = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $interval = null,
                                null|string|FHIRCodePrimitive|FHIRCode $intervalUnit = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $factor = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $lowerLimit = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $upperLimit = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $dimensions = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $codeMap = null,
                                null|string|FHIRStringPrimitive|FHIRString $offsets = null,
                                null|string|FHIRSampledDataDataTypePrimitive|FHIRSampledDataDataType $data = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            fhirComments: $fhirComments);
        if (null !== $origin) {
            $this->setOrigin($origin);
        }
        if (null !== $interval) {
            $this->setInterval($interval);
        }
        if (null !== $intervalUnit) {
            $this->setIntervalUnit($intervalUnit);
        }
        if (null !== $factor) {
            $this->setFactor($factor);
        }
        if (null !== $lowerLimit) {
            $this->setLowerLimit($lowerLimit);
        }
        if (null !== $upperLimit) {
            $this->setUpperLimit($upperLimit);
        }
        if (null !== $dimensions) {
            $this->setDimensions($dimensions);
        }
        if (null !== $codeMap) {
            $this->setCodeMap($codeMap);
        }
        if (null !== $offsets) {
            $this->setOffsets($offsets);
        }
        if (null !== $data) {
            $this->setData($data);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getOrigin(): null|FHIRQuantity
    {
        return $this->origin ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $origin
     * @return static
     */
    public function setOrigin(null|FHIRQuantity $origin): self
    {
        if (null === $origin) {
            unset($this->origin);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal
     */
    public function getInterval(): null|FHIRDecimal
    {
        return $this->interval ?? null;
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
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal $interval
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setInterval(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $interval,
                                null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $interval) {
            unset($this->interval);
            return $this;
        }
        if (!($interval instanceof FHIRDecimal)) {
            $interval = new FHIRDecimal(value: $interval);
        }
        if (null !== $valueXMLLocation) {
            $interval->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $interval->_getValueXMLLocation()) {
            $interval->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode
     */
    public function getIntervalUnit(): null|FHIRCode
    {
        return $this->intervalUnit ?? null;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The measurement unit in which the sample interval is expressed.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $intervalUnit
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setIntervalUnit(null|string|FHIRCodePrimitive|FHIRCode $intervalUnit,
                                    null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $intervalUnit) {
            unset($this->intervalUnit);
            return $this;
        }
        if (!($intervalUnit instanceof FHIRCode)) {
            $intervalUnit = new FHIRCode(value: $intervalUnit);
        }
        if (null !== $valueXMLLocation) {
            $intervalUnit->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $intervalUnit->_getValueXMLLocation()) {
            $intervalUnit->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal
     */
    public function getFactor(): null|FHIRDecimal
    {
        return $this->factor ?? null;
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
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal $factor
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setFactor(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $factor,
                              null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $factor) {
            unset($this->factor);
            return $this;
        }
        if (!($factor instanceof FHIRDecimal)) {
            $factor = new FHIRDecimal(value: $factor);
        }
        if (null !== $valueXMLLocation) {
            $factor->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $factor->_getValueXMLLocation()) {
            $factor->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal
     */
    public function getLowerLimit(): null|FHIRDecimal
    {
        return $this->lowerLimit ?? null;
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
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal $lowerLimit
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setLowerLimit(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $lowerLimit,
                                  null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $lowerLimit) {
            unset($this->lowerLimit);
            return $this;
        }
        if (!($lowerLimit instanceof FHIRDecimal)) {
            $lowerLimit = new FHIRDecimal(value: $lowerLimit);
        }
        if (null !== $valueXMLLocation) {
            $lowerLimit->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $lowerLimit->_getValueXMLLocation()) {
            $lowerLimit->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal
     */
    public function getUpperLimit(): null|FHIRDecimal
    {
        return $this->upperLimit ?? null;
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
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal $upperLimit
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setUpperLimit(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $upperLimit,
                                  null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $upperLimit) {
            unset($this->upperLimit);
            return $this;
        }
        if (!($upperLimit instanceof FHIRDecimal)) {
            $upperLimit = new FHIRDecimal(value: $upperLimit);
        }
        if (null !== $valueXMLLocation) {
            $upperLimit->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $upperLimit->_getValueXMLLocation()) {
            $upperLimit->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt
     */
    public function getDimensions(): null|FHIRPositiveInt
    {
        return $this->dimensions ?? null;
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRPositiveInt $dimensions
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDimensions(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $dimensions,
                                  null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $dimensions) {
            unset($this->dimensions);
            return $this;
        }
        if (!($dimensions instanceof FHIRPositiveInt)) {
            $dimensions = new FHIRPositiveInt(value: $dimensions);
        }
        if (null !== $valueXMLLocation) {
            $dimensions->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $dimensions->_getValueXMLLocation()) {
            $dimensions->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical
     */
    public function getCodeMap(): null|FHIRCanonical
    {
        return $this->codeMap ?? null;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Reference to ConceptMap that defines the codes used in the data.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCanonical $codeMap
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCodeMap(null|string|FHIRCanonicalPrimitive|FHIRCanonical $codeMap,
                               null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $codeMap) {
            unset($this->codeMap);
            return $this;
        }
        if (!($codeMap instanceof FHIRCanonical)) {
            $codeMap = new FHIRCanonical(value: $codeMap);
        }
        if (null !== $valueXMLLocation) {
            $codeMap->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $codeMap->_getValueXMLLocation()) {
            $codeMap->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getOffsets(): null|FHIRString
    {
        return $this->offsets ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $offsets
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setOffsets(null|string|FHIRStringPrimitive|FHIRString $offsets,
                               null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $offsets) {
            unset($this->offsets);
            return $this;
        }
        if (!($offsets instanceof FHIRString)) {
            $offsets = new FHIRString(value: $offsets);
        }
        if (null !== $valueXMLLocation) {
            $offsets->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $offsets->_getValueXMLLocation()) {
            $offsets->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->offsets = $offsets;
        return $this;
    }

    /**
     * A series of data points which are decimal values or codes separated by a single
     * space (character u20). The special codes "E" (error), "L" (below detection
     * limit) and "U" (above detection limit) are also defined for used in place of
     * decimal values.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSampledDataDataType
     */
    public function getData(): null|FHIRSampledDataDataType
    {
        return $this->data ?? null;
    }

    /**
     * A series of data points which are decimal values or codes separated by a single
     * space (character u20). The special codes "E" (error), "L" (below detection
     * limit) and "U" (above detection limit) are also defined for used in place of
     * decimal values.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRSampledDataDataTypePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRSampledDataDataType $data
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setData(null|string|FHIRSampledDataDataTypePrimitive|FHIRSampledDataDataType $data,
                            null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $data) {
            unset($this->data);
            return $this;
        }
        if (!($data instanceof FHIRSampledDataDataType)) {
            $data = new FHIRSampledDataDataType(value: $data);
        }
        if (null !== $valueXMLLocation) {
            $data->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $data->_getValueXMLLocation()) {
            $data->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
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
        if (null !== ($v = $this->getIntervalUnit())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INTERVAL_UNIT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDimensions())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DIMENSIONS] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ORIGIN])) {
            $v = $this->getOrigin();
            foreach($validationRules[self::FIELD_ORIGIN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ORIGIN, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INTERVAL, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INTERVAL_UNIT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FACTOR, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LOWER_LIMIT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_UPPER_LIMIT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DIMENSIONS, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CODE_MAP, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OFFSETS, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATA, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRSampledData $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRSampledData
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSampledData)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_ORIGIN === $childName) {
                $v = new FHIRQuantity();
                $type->setOrigin(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_INTERVAL === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setInterval(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_INTERVAL_UNIT === $childName) {
                $v = new FHIRCode(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setIntervalUnit(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FACTOR === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setFactor(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LOWER_LIMIT === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setLowerLimit(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_UPPER_LIMIT === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setUpperLimit(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DIMENSIONS === $childName) {
                $v = new FHIRPositiveInt(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDimensions(FHIRPositiveInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CODE_MAP === $childName) {
                $v = new FHIRCanonical(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setCodeMap(FHIRCanonical::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_OFFSETS === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setOffsets(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATA === $childName) {
                $v = new FHIRSampledDataDataType(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setData(FHIRSampledDataDataType::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_INTERVAL])) {
            $pt = $type->getInterval();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_INTERVAL]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setInterval(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_INTERVAL],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_INTERVAL_UNIT])) {
            $pt = $type->getIntervalUnit();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_INTERVAL_UNIT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setIntervalUnit(new FHIRCode(
                    value: (string)$attributes[self::FIELD_INTERVAL_UNIT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_FACTOR])) {
            $pt = $type->getFactor();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_FACTOR]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setFactor(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_FACTOR],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LOWER_LIMIT])) {
            $pt = $type->getLowerLimit();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_LOWER_LIMIT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLowerLimit(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_LOWER_LIMIT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_UPPER_LIMIT])) {
            $pt = $type->getUpperLimit();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_UPPER_LIMIT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setUpperLimit(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_UPPER_LIMIT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DIMENSIONS])) {
            $pt = $type->getDimensions();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DIMENSIONS]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDimensions(new FHIRPositiveInt(
                    value: (string)$attributes[self::FIELD_DIMENSIONS],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CODE_MAP])) {
            $pt = $type->getCodeMap();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_CODE_MAP]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCodeMap(new FHIRCanonical(
                    value: (string)$attributes[self::FIELD_CODE_MAP],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_OFFSETS])) {
            $pt = $type->getOffsets();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_OFFSETS]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setOffsets(new FHIRString(
                    value: (string)$attributes[self::FIELD_OFFSETS],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DATA])) {
            $pt = $type->getData();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DATA]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setData(new FHIRSampledDataDataType(
                    value: (string)$attributes[self::FIELD_DATA],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('SampledData', $this->_getSourceXMLNS());
        }
        if (isset($this->interval) && $this->interval->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_INTERVAL, $this->interval->getValue()?->_getFormattedValue());
        }
        if (isset($this->intervalUnit) && $this->intervalUnit->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_INTERVAL_UNIT, $this->intervalUnit->getValue()?->_getFormattedValue());
        }
        if (isset($this->factor) && $this->factor->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_FACTOR, $this->factor->getValue()?->_getFormattedValue());
        }
        if (isset($this->lowerLimit) && $this->lowerLimit->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_LOWER_LIMIT, $this->lowerLimit->getValue()?->_getFormattedValue());
        }
        if (isset($this->upperLimit) && $this->upperLimit->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_UPPER_LIMIT, $this->upperLimit->getValue()?->_getFormattedValue());
        }
        if (isset($this->dimensions) && $this->dimensions->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DIMENSIONS, $this->dimensions->getValue()?->_getFormattedValue());
        }
        if (isset($this->codeMap) && $this->codeMap->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CODE_MAP, $this->codeMap->getValue()?->_getFormattedValue());
        }
        if (isset($this->offsets) && $this->offsets->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_OFFSETS, $this->offsets->getValue()?->_getFormattedValue());
        }
        if (isset($this->data) && $this->data->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATA, $this->data->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->origin)) {
            $xw->startElement(self::FIELD_ORIGIN);
            $this->origin->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->interval) && $this->interval->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_INTERVAL);
            $this->interval->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->intervalUnit) && $this->intervalUnit->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_INTERVAL_UNIT);
            $this->intervalUnit->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->factor) && $this->factor->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_FACTOR);
            $this->factor->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->lowerLimit) && $this->lowerLimit->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_LOWER_LIMIT);
            $this->lowerLimit->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->upperLimit) && $this->upperLimit->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_UPPER_LIMIT);
            $this->upperLimit->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dimensions) && $this->dimensions->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DIMENSIONS);
            $this->dimensions->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->codeMap) && $this->codeMap->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CODE_MAP);
            $this->codeMap->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->offsets) && $this->offsets->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_OFFSETS);
            $this->offsets->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->data) && $this->data->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DATA);
            $this->data->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRSampledData $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRSampledData
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSampledData)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_ORIGIN]) || array_key_exists(self::FIELD_ORIGIN, $json)) {
            $type->setOrigin(FHIRQuantity::jsonUnserialize(
                json: $json[self::FIELD_ORIGIN],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_INTERVAL]) || isset($json[self::FIELD_INTERVAL_EXT]) || array_key_exists(self::FIELD_INTERVAL, $json) || array_key_exists(self::FIELD_INTERVAL_EXT, $json)) {
            $value = $json[self::FIELD_INTERVAL] ?? null;
            $ext = (array)($json[self::FIELD_INTERVAL_EXT] ?? []);
            $type->setInterval(FHIRDecimal::jsonUnserialize(
                json: [FHIRDecimal::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_INTERVAL_UNIT]) || isset($json[self::FIELD_INTERVAL_UNIT_EXT]) || array_key_exists(self::FIELD_INTERVAL_UNIT, $json) || array_key_exists(self::FIELD_INTERVAL_UNIT_EXT, $json)) {
            $value = $json[self::FIELD_INTERVAL_UNIT] ?? null;
            $ext = (array)($json[self::FIELD_INTERVAL_UNIT_EXT] ?? []);
            $type->setIntervalUnit(FHIRCode::jsonUnserialize(
                json: [FHIRCode::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_FACTOR]) || isset($json[self::FIELD_FACTOR_EXT]) || array_key_exists(self::FIELD_FACTOR, $json) || array_key_exists(self::FIELD_FACTOR_EXT, $json)) {
            $value = $json[self::FIELD_FACTOR] ?? null;
            $ext = (array)($json[self::FIELD_FACTOR_EXT] ?? []);
            $type->setFactor(FHIRDecimal::jsonUnserialize(
                json: [FHIRDecimal::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_LOWER_LIMIT]) || isset($json[self::FIELD_LOWER_LIMIT_EXT]) || array_key_exists(self::FIELD_LOWER_LIMIT, $json) || array_key_exists(self::FIELD_LOWER_LIMIT_EXT, $json)) {
            $value = $json[self::FIELD_LOWER_LIMIT] ?? null;
            $ext = (array)($json[self::FIELD_LOWER_LIMIT_EXT] ?? []);
            $type->setLowerLimit(FHIRDecimal::jsonUnserialize(
                json: [FHIRDecimal::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_UPPER_LIMIT]) || isset($json[self::FIELD_UPPER_LIMIT_EXT]) || array_key_exists(self::FIELD_UPPER_LIMIT, $json) || array_key_exists(self::FIELD_UPPER_LIMIT_EXT, $json)) {
            $value = $json[self::FIELD_UPPER_LIMIT] ?? null;
            $ext = (array)($json[self::FIELD_UPPER_LIMIT_EXT] ?? []);
            $type->setUpperLimit(FHIRDecimal::jsonUnserialize(
                json: [FHIRDecimal::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DIMENSIONS]) || isset($json[self::FIELD_DIMENSIONS_EXT]) || array_key_exists(self::FIELD_DIMENSIONS, $json) || array_key_exists(self::FIELD_DIMENSIONS_EXT, $json)) {
            $value = $json[self::FIELD_DIMENSIONS] ?? null;
            $ext = (array)($json[self::FIELD_DIMENSIONS_EXT] ?? []);
            $type->setDimensions(FHIRPositiveInt::jsonUnserialize(
                json: [FHIRPositiveInt::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_CODE_MAP]) || isset($json[self::FIELD_CODE_MAP_EXT]) || array_key_exists(self::FIELD_CODE_MAP, $json) || array_key_exists(self::FIELD_CODE_MAP_EXT, $json)) {
            $value = $json[self::FIELD_CODE_MAP] ?? null;
            $ext = (array)($json[self::FIELD_CODE_MAP_EXT] ?? []);
            $type->setCodeMap(FHIRCanonical::jsonUnserialize(
                json: [FHIRCanonical::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_OFFSETS]) || isset($json[self::FIELD_OFFSETS_EXT]) || array_key_exists(self::FIELD_OFFSETS, $json) || array_key_exists(self::FIELD_OFFSETS_EXT, $json)) {
            $value = $json[self::FIELD_OFFSETS] ?? null;
            $ext = (array)($json[self::FIELD_OFFSETS_EXT] ?? []);
            $type->setOffsets(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DATA]) || isset($json[self::FIELD_DATA_EXT]) || array_key_exists(self::FIELD_DATA, $json) || array_key_exists(self::FIELD_DATA_EXT, $json)) {
            $value = $json[self::FIELD_DATA] ?? null;
            $ext = (array)($json[self::FIELD_DATA_EXT] ?? []);
            $type->setData(FHIRSampledDataDataType::jsonUnserialize(
                json: [FHIRSampledDataDataType::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->origin)) {
            $out->origin = $this->origin;
        }
        if (isset($this->interval)) {
            if (null !== ($val = $this->interval->getValue())) {
                $out->interval = $val;
            }
            $ext = $this->interval->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_interval = $ext;
            }
        }
        if (isset($this->intervalUnit)) {
            if (null !== ($val = $this->intervalUnit->getValue())) {
                $out->intervalUnit = $val;
            }
            $ext = $this->intervalUnit->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_intervalUnit = $ext;
            }
        }
        if (isset($this->factor)) {
            if (null !== ($val = $this->factor->getValue())) {
                $out->factor = $val;
            }
            $ext = $this->factor->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_factor = $ext;
            }
        }
        if (isset($this->lowerLimit)) {
            if (null !== ($val = $this->lowerLimit->getValue())) {
                $out->lowerLimit = $val;
            }
            $ext = $this->lowerLimit->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_lowerLimit = $ext;
            }
        }
        if (isset($this->upperLimit)) {
            if (null !== ($val = $this->upperLimit->getValue())) {
                $out->upperLimit = $val;
            }
            $ext = $this->upperLimit->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_upperLimit = $ext;
            }
        }
        if (isset($this->dimensions)) {
            if (null !== ($val = $this->dimensions->getValue())) {
                $out->dimensions = $val;
            }
            $ext = $this->dimensions->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_dimensions = $ext;
            }
        }
        if (isset($this->codeMap)) {
            if (null !== ($val = $this->codeMap->getValue())) {
                $out->codeMap = $val;
            }
            $ext = $this->codeMap->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_codeMap = $ext;
            }
        }
        if (isset($this->offsets)) {
            if (null !== ($val = $this->offsets->getValue())) {
                $out->offsets = $val;
            }
            $ext = $this->offsets->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_offsets = $ext;
            }
        }
        if (isset($this->data)) {
            if (null !== ($val = $this->data->getValue())) {
                $out->data = $val;
            }
            $ext = $this->data->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_data = $ext;
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