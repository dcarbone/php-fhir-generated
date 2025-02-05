<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 01:55+0000
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRSampledDataDataTypePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * A series of measurements taken by a device, with upper and lower limits. There
 * may be more than one dimension in the data.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
class FHIRSampledData extends FHIRElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SAMPLED_DATA;

    /* class_default.php:50 */
    public const FIELD_ORIGIN = 'origin';
    public const FIELD_PERIOD = 'period';
    public const FIELD_PERIOD_EXT = '_period';
    public const FIELD_FACTOR = 'factor';
    public const FIELD_FACTOR_EXT = '_factor';
    public const FIELD_LOWER_LIMIT = 'lowerLimit';
    public const FIELD_LOWER_LIMIT_EXT = '_lowerLimit';
    public const FIELD_UPPER_LIMIT = 'upperLimit';
    public const FIELD_UPPER_LIMIT_EXT = '_upperLimit';
    public const FIELD_DIMENSIONS = 'dimensions';
    public const FIELD_DIMENSIONS_EXT = '_dimensions';
    public const FIELD_DATA = 'data';
    public const FIELD_DATA_EXT = '_data';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_ORIGIN => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_PERIOD => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_DIMENSIONS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_DATA => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_PERIOD => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FACTOR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_LOWER_LIMIT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_UPPER_LIMIT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DIMENSIONS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATA => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $origin;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The length of time between sampling times, measured in milliseconds.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $period;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A correction factor that is applied to the sampled data points before they are
     * added to the origin.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $factor;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The lower limit of detection of the measured points. This is needed if any of
     * the data points have the value "L" (lower than detection limit).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $lowerLimit;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The upper limit of detection of the measured points. This is needed if any of
     * the data points have the value "U" (higher than detection limit).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $dimensions;
    /**
     * A series of data points which are decimal values separated by a single space
     * (character u20). The special values "E" (error), "L" (below detection limit) and
     * "U" (above detection limit) can also be used in place of a decimal value.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSampledDataDataType 
     */
    protected FHIRSampledDataDataType $data;

    /* constructor.php:61 */
    /**
     * FHIRSampledData Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $origin
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $period
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $factor
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $lowerLimit
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $upperLimit
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $dimensions
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRSampledDataDataTypePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSampledDataDataType $data
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|FHIRQuantity $origin = null,
                                null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $period = null,
                                null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $factor = null,
                                null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $lowerLimit = null,
                                null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $upperLimit = null,
                                null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $dimensions = null,
                                null|string|FHIRSampledDataDataTypePrimitive|FHIRSampledDataDataType $data = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            fhirComments: $fhirComments);
        if (null !== $origin) {
            $this->setOrigin($origin);
        }
        if (null !== $period) {
            $this->setPeriod($period);
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
        if (null !== $data) {
            $this->setData($data);
        }
    }

    /* class_default.php:146 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:172 */
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $origin
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
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The length of time between sampling times, measured in milliseconds.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
     */
    public function getPeriod(): null|FHIRDecimal
    {
        return $this->period ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The length of time between sampling times, measured in milliseconds.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $period
     * @return static
     */
    public function setPeriod(null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $period): self
    {
        if (null === $period) {
            unset($this->period);
            return $this;
        }
        if (!($period instanceof FHIRDecimal)) {
            $period = new FHIRDecimal(value: $period);
        }
        $this->period = $period;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
     */
    public function getFactor(): null|FHIRDecimal
    {
        return $this->factor ?? null;
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $factor
     * @return static
     */
    public function setFactor(null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $factor): self
    {
        if (null === $factor) {
            unset($this->factor);
            return $this;
        }
        if (!($factor instanceof FHIRDecimal)) {
            $factor = new FHIRDecimal(value: $factor);
        }
        $this->factor = $factor;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
     */
    public function getLowerLimit(): null|FHIRDecimal
    {
        return $this->lowerLimit ?? null;
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $lowerLimit
     * @return static
     */
    public function setLowerLimit(null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $lowerLimit): self
    {
        if (null === $lowerLimit) {
            unset($this->lowerLimit);
            return $this;
        }
        if (!($lowerLimit instanceof FHIRDecimal)) {
            $lowerLimit = new FHIRDecimal(value: $lowerLimit);
        }
        $this->lowerLimit = $lowerLimit;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
     */
    public function getUpperLimit(): null|FHIRDecimal
    {
        return $this->upperLimit ?? null;
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $upperLimit
     * @return static
     */
    public function setUpperLimit(null|string|int|float|FHIRDecimalPrimitive|FHIRDecimal $upperLimit): self
    {
        if (null === $upperLimit) {
            unset($this->upperLimit);
            return $this;
        }
        if (!($upperLimit instanceof FHIRDecimal)) {
            $upperLimit = new FHIRDecimal(value: $upperLimit);
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $dimensions
     * @return static
     */
    public function setDimensions(null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $dimensions): self
    {
        if (null === $dimensions) {
            unset($this->dimensions);
            return $this;
        }
        if (!($dimensions instanceof FHIRPositiveInt)) {
            $dimensions = new FHIRPositiveInt(value: $dimensions);
        }
        $this->dimensions = $dimensions;
        return $this;
    }

    /**
     * A series of data points which are decimal values separated by a single space
     * (character u20). The special values "E" (error), "L" (below detection limit) and
     * "U" (above detection limit) can also be used in place of a decimal value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSampledDataDataType
     */
    public function getData(): null|FHIRSampledDataDataType
    {
        return $this->data ?? null;
    }

    /**
     * A series of data points which are decimal values separated by a single space
     * (character u20). The special values "E" (error), "L" (below detection limit) and
     * "U" (above detection limit) can also be used in place of a decimal value.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRSampledDataDataTypePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSampledDataDataType $data
     * @return static
     */
    public function setData(null|string|FHIRSampledDataDataTypePrimitive|FHIRSampledDataDataType $data): self
    {
        if (null === $data) {
            unset($this->data);
            return $this;
        }
        if (!($data instanceof FHIRSampledDataDataType)) {
            $data = new FHIRSampledDataDataType(value: $data);
        }
        $this->data = $data;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSampledData $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSampledData
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_ORIGIN === $cen) {
                $type->setOrigin(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERIOD === $cen) {
                $type->setPeriod(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FACTOR === $cen) {
                $type->setFactor(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LOWER_LIMIT === $cen) {
                $type->setLowerLimit(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_UPPER_LIMIT === $cen) {
                $type->setUpperLimit(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DIMENSIONS === $cen) {
                $type->setDimensions(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA === $cen) {
                $type->setData(FHIRSampledDataDataType::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PERIOD])) {
            if (isset($type->period)) {
                $type->period->setValue((string)$attributes[self::FIELD_PERIOD]);
            } else {
                $type->setPeriod((string)$attributes[self::FIELD_PERIOD]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PERIOD, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FACTOR])) {
            if (isset($type->factor)) {
                $type->factor->setValue((string)$attributes[self::FIELD_FACTOR]);
            } else {
                $type->setFactor((string)$attributes[self::FIELD_FACTOR]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FACTOR, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LOWER_LIMIT])) {
            if (isset($type->lowerLimit)) {
                $type->lowerLimit->setValue((string)$attributes[self::FIELD_LOWER_LIMIT]);
            } else {
                $type->setLowerLimit((string)$attributes[self::FIELD_LOWER_LIMIT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LOWER_LIMIT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_UPPER_LIMIT])) {
            if (isset($type->upperLimit)) {
                $type->upperLimit->setValue((string)$attributes[self::FIELD_UPPER_LIMIT]);
            } else {
                $type->setUpperLimit((string)$attributes[self::FIELD_UPPER_LIMIT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_UPPER_LIMIT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DIMENSIONS])) {
            if (isset($type->dimensions)) {
                $type->dimensions->setValue((string)$attributes[self::FIELD_DIMENSIONS]);
            } else {
                $type->setDimensions((string)$attributes[self::FIELD_DIMENSIONS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DIMENSIONS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DATA])) {
            if (isset($type->data)) {
                $type->data->setValue((string)$attributes[self::FIELD_DATA]);
            } else {
                $type->setData((string)$attributes[self::FIELD_DATA]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DATA, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->period) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PERIOD]) {
            $xw->writeAttribute(self::FIELD_PERIOD, $this->period->_getValueAsString());
        }
        if (isset($this->factor) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FACTOR]) {
            $xw->writeAttribute(self::FIELD_FACTOR, $this->factor->_getValueAsString());
        }
        if (isset($this->lowerLimit) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LOWER_LIMIT]) {
            $xw->writeAttribute(self::FIELD_LOWER_LIMIT, $this->lowerLimit->_getValueAsString());
        }
        if (isset($this->upperLimit) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_UPPER_LIMIT]) {
            $xw->writeAttribute(self::FIELD_UPPER_LIMIT, $this->upperLimit->_getValueAsString());
        }
        if (isset($this->dimensions) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DIMENSIONS]) {
            $xw->writeAttribute(self::FIELD_DIMENSIONS, $this->dimensions->_getValueAsString());
        }
        if (isset($this->data) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATA]) {
            $xw->writeAttribute(self::FIELD_DATA, $this->data->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->origin)) {
            $xw->startElement(self::FIELD_ORIGIN);
            $this->origin->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->period)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PERIOD]
                || $this->period->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PERIOD);
            $this->period->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PERIOD]);
            $xw->endElement();
        }
        if (isset($this->factor)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FACTOR]
                || $this->factor->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FACTOR);
            $this->factor->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FACTOR]);
            $xw->endElement();
        }
        if (isset($this->lowerLimit)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LOWER_LIMIT]
                || $this->lowerLimit->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LOWER_LIMIT);
            $this->lowerLimit->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LOWER_LIMIT]);
            $xw->endElement();
        }
        if (isset($this->upperLimit)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_UPPER_LIMIT]
                || $this->upperLimit->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_UPPER_LIMIT);
            $this->upperLimit->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_UPPER_LIMIT]);
            $xw->endElement();
        }
        if (isset($this->dimensions)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DIMENSIONS]
                || $this->dimensions->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DIMENSIONS);
            $this->dimensions->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DIMENSIONS]);
            $xw->endElement();
        }
        if (isset($this->data)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATA]
                || $this->data->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATA);
            $this->data->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATA]);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSampledData $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSampledData
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->origin) || property_exists($json, self::FIELD_ORIGIN)) {
            if (is_array($json->origin)) {
                $type->setOrigin(FHIRQuantity::jsonUnserialize(reset($json->origin), $config));
            } else {
                $type->setOrigin(FHIRQuantity::jsonUnserialize($json->origin, $config));
            }
        }
        if (isset($json->period)
            || isset($json->_period)
            || property_exists($json, self::FIELD_PERIOD)
            || property_exists($json, self::FIELD_PERIOD_EXT)) {
            $v = $json->_period ?? new \stdClass();
            $v->value = $json->period ?? null;
            $type->setPeriod(FHIRDecimal::jsonUnserialize($v, $config));
        }
        if (isset($json->factor)
            || isset($json->_factor)
            || property_exists($json, self::FIELD_FACTOR)
            || property_exists($json, self::FIELD_FACTOR_EXT)) {
            $v = $json->_factor ?? new \stdClass();
            $v->value = $json->factor ?? null;
            $type->setFactor(FHIRDecimal::jsonUnserialize($v, $config));
        }
        if (isset($json->lowerLimit)
            || isset($json->_lowerLimit)
            || property_exists($json, self::FIELD_LOWER_LIMIT)
            || property_exists($json, self::FIELD_LOWER_LIMIT_EXT)) {
            $v = $json->_lowerLimit ?? new \stdClass();
            $v->value = $json->lowerLimit ?? null;
            $type->setLowerLimit(FHIRDecimal::jsonUnserialize($v, $config));
        }
        if (isset($json->upperLimit)
            || isset($json->_upperLimit)
            || property_exists($json, self::FIELD_UPPER_LIMIT)
            || property_exists($json, self::FIELD_UPPER_LIMIT_EXT)) {
            $v = $json->_upperLimit ?? new \stdClass();
            $v->value = $json->upperLimit ?? null;
            $type->setUpperLimit(FHIRDecimal::jsonUnserialize($v, $config));
        }
        if (isset($json->dimensions)
            || isset($json->_dimensions)
            || property_exists($json, self::FIELD_DIMENSIONS)
            || property_exists($json, self::FIELD_DIMENSIONS_EXT)) {
            $v = $json->_dimensions ?? new \stdClass();
            $v->value = $json->dimensions ?? null;
            $type->setDimensions(FHIRPositiveInt::jsonUnserialize($v, $config));
        }
        if (isset($json->data)
            || isset($json->_data)
            || property_exists($json, self::FIELD_DATA)
            || property_exists($json, self::FIELD_DATA_EXT)) {
            $v = $json->_data ?? new \stdClass();
            $v->value = $json->data ?? null;
            $type->setData(FHIRSampledDataDataType::jsonUnserialize($v, $config));
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
        if (isset($this->period)) {
            if (null !== ($val = $this->period->getValue())) {
                $out->period = $val;
            }
            if ($this->period->_nonValueFieldDefined()) {
                $ext = $this->period->jsonSerialize();
                unset($ext->value);
                $out->_period = $ext;
            }
        }
        if (isset($this->factor)) {
            if (null !== ($val = $this->factor->getValue())) {
                $out->factor = $val;
            }
            if ($this->factor->_nonValueFieldDefined()) {
                $ext = $this->factor->jsonSerialize();
                unset($ext->value);
                $out->_factor = $ext;
            }
        }
        if (isset($this->lowerLimit)) {
            if (null !== ($val = $this->lowerLimit->getValue())) {
                $out->lowerLimit = $val;
            }
            if ($this->lowerLimit->_nonValueFieldDefined()) {
                $ext = $this->lowerLimit->jsonSerialize();
                unset($ext->value);
                $out->_lowerLimit = $ext;
            }
        }
        if (isset($this->upperLimit)) {
            if (null !== ($val = $this->upperLimit->getValue())) {
                $out->upperLimit = $val;
            }
            if ($this->upperLimit->_nonValueFieldDefined()) {
                $ext = $this->upperLimit->jsonSerialize();
                unset($ext->value);
                $out->_upperLimit = $ext;
            }
        }
        if (isset($this->dimensions)) {
            if (null !== ($val = $this->dimensions->getValue())) {
                $out->dimensions = $val;
            }
            if ($this->dimensions->_nonValueFieldDefined()) {
                $ext = $this->dimensions->jsonSerialize();
                unset($ext->value);
                $out->_dimensions = $ext;
            }
        }
        if (isset($this->data)) {
            if (null !== ($val = $this->data->getValue())) {
                $out->data = $val;
            }
            if ($this->data->_nonValueFieldDefined()) {
                $ext = $this->data->jsonSerialize();
                unset($ext->value);
                $out->_data = $ext;
            }
        }
        return $out;
    }
}