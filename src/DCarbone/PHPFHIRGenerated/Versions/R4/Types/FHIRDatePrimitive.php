<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 18th, 2025 00:31+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\FHIRVersion;
use DCarbone\PHPFHIRGenerated\Types\PrimitiveTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValuePatternMatchRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRDatePrimitive implements PrimitiveTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_DATE_HYPHEN_PRIMITIVE;

    public const FIELD_VALUE = 'value';

    /* class_primitive.php:74 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_VALUE => [
            ValuePatternMatchRule::NAME => '/^([0-9]([0-9]([0-9][1-9]|[1-9]0)|[1-9]00)|[1-9]000)(-(0[1-9]|1[0-2])(-(0[0-9]|[1-2][0-9]|3[0-1]))?)?$/',
        ],
    ];

    /* class_primitive.php:93 */
    /** @var string */
    protected string $value;

    /* class_primitive.php:111 */
    /**
     * FHIRDatePrimitive Constructor
     * @param null|string|\DateTimeInterface $value
     */
    public function __construct(null|string|\DateTimeInterface $value = null)
    {
        $this->setValue($value);
    }

    /* class_primitive.php:129 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_primitive.php:139 */
    public function _getFHIRVersion(): FHIRVersion
    {
        return Version::getFHIRVersion();
    }
    /**
     * @return null|string
     */
    public function getValue(): null|string
    {
        return $this->value ?? null;
    }

    /**
     * @param null|string|\DateTimeInterface $value
     * @return static
     */
    public function setValue(null|string|\DateTimeInterface $value): self
    {
        if (null === $value) {
            unset($this->value);
            return $this;
        }
        if (is_string($value)) {
            $this->value = $value;
            return $this;
        }
        if ($value instanceof \DateTimeInterface) {
            $this->value = $value->format(Constants::DATE_FORMAT_YEAR_MONTH_DAY);
            return $this;
        }
        throw new \InvalidArgumentException(sprintf('Value must be null, string, or instance of \\DateTimeInterface, %s seen.', gettype($value)));
    }

    /**
     * @return null|\DateTimeInterface
     */
    public function _getValueAsDateTime(): null|\DateTimeInterface
    {
        if (!isset($this->value)) {
            return null;
        }
        switch(strlen($this->value)) {
            case 4:
                $dt = \DateTime::createFromFormat(Constants::DATE_FORMAT_YEAR, $this->value);
                if (!($dt instanceof \DateTime)) {
                    throw new \UnexpectedValueException(sprintf('Unable to parse value "%s" into \DateTime instance with expected format "%s"', $this->value, Constants::DATE_FORMAT_YEAR));
                }
                return $dt;
            case 7:
                $dt = \DateTime::createFromFormat(Constants::DATE_FORMAT_YEAR_MONTH, $this->value);
                if (!($dt instanceof \DateTime)) {
                    throw new \UnexpectedValueException(sprintf('Unable to parse value "%s" into \DateTime instance with expected format "%s"', $this->value, Constants::DATE_FORMAT_YEAR_MONTH));
                }
                return $dt;
            case 10:
                $dt = \DateTime::createFromFormat(Constants::DATE_FORMAT_YEAR_MONTH_DAY, $this->value);
                if (!($dt instanceof \DateTime)) {
                    throw new \UnexpectedValueException(sprintf('Unable to parse value "%s" into \DateTime instance with expected format "%s"', $this->value, Constants::DATE_FORMAT_YEAR_MONTH_DAY));
                }
                return $dt;

            default:
                throw new \UnexpectedValueException(sprintf('Unable to parse value "%s" into \DateTime as it is not a value expected by the Date type', $this->value));
        }
    }

    /**
     * @return string
     */
    public function _getValueAsString(): string
    {
        return $this->value ?? '';
    }

    public function jsonSerialize(): string
    {
        return $this->value ?? '';
    }

    public function __toString(): string
    {
        return $this->_getValueAsString();
    }
}
