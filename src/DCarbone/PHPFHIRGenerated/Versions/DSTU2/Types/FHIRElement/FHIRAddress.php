<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 15:49+0000
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValuePatternMatchRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRAddressTypeList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRAddressUseList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;

/**
 * There is a variety of postal address formats defined around the world. This
 * format defines a superset that is the basis for all addresses around the world.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
class FHIRAddress extends FHIRElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_ADDRESS;

    /* class_default.php:50 */
    public const FIELD_USE = 'use';
    public const FIELD_USE_EXT = '_use';
    public const FIELD_TYPE = 'type';
    public const FIELD_TYPE_EXT = '_type';
    public const FIELD_TEXT = 'text';
    public const FIELD_TEXT_EXT = '_text';
    public const FIELD_LINE = 'line';
    public const FIELD_LINE_EXT = '_line';
    public const FIELD_CITY = 'city';
    public const FIELD_CITY_EXT = '_city';
    public const FIELD_DISTRICT = 'district';
    public const FIELD_DISTRICT_EXT = '_district';
    public const FIELD_STATE = 'state';
    public const FIELD_STATE_EXT = '_state';
    public const FIELD_POSTAL_CODE = 'postalCode';
    public const FIELD_POSTAL_CODE_EXT = '_postalCode';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_COUNTRY_EXT = '_country';
    public const FIELD_PERIOD = 'period';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_ID => [
            ValuePatternMatchRule::NAME => '/^[A-Za-z0-9\\-\\.]{1,64}$/',
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_USE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TYPE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TEXT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CITY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DISTRICT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_STATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_POSTAL_CODE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_COUNTRY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * The use of an address
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The purpose of this address.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAddressUse 
     */
    protected FHIRAddressUse $use;
    /**
     * The type of an address (physical / postal)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Distinguishes between physical addresses (those you can visit) and mailing
     * addresses (e.g. PO Boxes and care-of addresses). Most addresses are both.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAddressType 
     */
    protected FHIRAddressType $type;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A full text representation of the address.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $text;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This component contains the house number, apartment number, street name, street
     * direction, P.O. Box number, delivery hints, and similar address information.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString[] 
     */
    protected array $line;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the city, town, village or other community or delivery center.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $city;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the administrative area (county).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $district;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sub-unit of a country with limited sovereignty in a federally organized country.
     * A code may be used if codes are in common use (i.e. US 2 letter state codes).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $state;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A postal code designating a region defined by the postal service.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $postalCode;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Country - a nation as commonly understood or generally accepted.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $country;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Time period when address was/is in use.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $period;

    /* constructor.php:61 */
    /**
     * FHIRAddress Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $id
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRAddressUseList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAddressUse $use
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRAddressTypeList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAddressType $type
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $text
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString[] $line
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $city
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $district
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $state
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $postalCode
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $country
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod $period
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|string|FHIRAddressUseList|FHIRAddressUse $use = null,
                                null|string|FHIRAddressTypeList|FHIRAddressType $type = null,
                                null|string|FHIRStringPrimitive|FHIRString $text = null,
                                null|iterable $line = null,
                                null|string|FHIRStringPrimitive|FHIRString $city = null,
                                null|string|FHIRStringPrimitive|FHIRString $district = null,
                                null|string|FHIRStringPrimitive|FHIRString $state = null,
                                null|string|FHIRStringPrimitive|FHIRString $postalCode = null,
                                null|string|FHIRStringPrimitive|FHIRString $country = null,
                                null|FHIRPeriod $period = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            fhirComments: $fhirComments);
        if (null !== $use) {
            $this->setUse($use);
        }
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $text) {
            $this->setText($text);
        }
        if (null !== $line) {
            $this->setLine(...$line);
        }
        if (null !== $city) {
            $this->setCity($city);
        }
        if (null !== $district) {
            $this->setDistrict($district);
        }
        if (null !== $state) {
            $this->setState($state);
        }
        if (null !== $postalCode) {
            $this->setPostalCode($postalCode);
        }
        if (null !== $country) {
            $this->setCountry($country);
        }
        if (null !== $period) {
            $this->setPeriod($period);
        }
    }

    /* class_default.php:139 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:165 */
    /**
     * The use of an address
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The purpose of this address.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAddressUse
     */
    public function getUse(): null|FHIRAddressUse
    {
        return $this->use ?? null;
    }

    /**
     * The use of an address
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The purpose of this address.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRAddressUseList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAddressUse $use
     * @return static
     */
    public function setUse(null|string|FHIRAddressUseList|FHIRAddressUse $use): self
    {
        if (null === $use) {
            unset($this->use);
            return $this;
        }
        if (!($use instanceof FHIRAddressUse)) {
            $use = new FHIRAddressUse(value: $use);
        }
        $this->use = $use;
        return $this;
    }

    /**
     * The type of an address (physical / postal)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Distinguishes between physical addresses (those you can visit) and mailing
     * addresses (e.g. PO Boxes and care-of addresses). Most addresses are both.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAddressType
     */
    public function getType(): null|FHIRAddressType
    {
        return $this->type ?? null;
    }

    /**
     * The type of an address (physical / postal)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Distinguishes between physical addresses (those you can visit) and mailing
     * addresses (e.g. PO Boxes and care-of addresses). Most addresses are both.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRAddressTypeList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAddressType $type
     * @return static
     */
    public function setType(null|string|FHIRAddressTypeList|FHIRAddressType $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        if (!($type instanceof FHIRAddressType)) {
            $type = new FHIRAddressType(value: $type);
        }
        $this->type = $type;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A full text representation of the address.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getText(): null|FHIRString
    {
        return $this->text ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A full text representation of the address.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $text
     * @return static
     */
    public function setText(null|string|FHIRStringPrimitive|FHIRString $text): self
    {
        if (null === $text) {
            unset($this->text);
            return $this;
        }
        if (!($text instanceof FHIRString)) {
            $text = new FHIRString(value: $text);
        }
        $this->text = $text;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This component contains the house number, apartment number, street name, street
     * direction, P.O. Box number, delivery hints, and similar address information.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString[]
     */
    public function getLine(): array
    {
        return $this->line ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString>
     */
    public function getLineIterator(): iterable
    {
        if (!isset($this->line)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->line);
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This component contains the house number, apartment number, street name, street
     * direction, P.O. Box number, delivery hints, and similar address information.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $line
     * @return static
     */
    public function addLine(string|FHIRStringPrimitive|FHIRString $line): self
    {
        if (!($line instanceof FHIRString)) {
            $line = new FHIRString(value: $line);
        }
        if (!isset($this->line)) {
            $this->line = [];
        }
        $this->line[] = $line;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This component contains the house number, apartment number, street name, street
     * direction, P.O. Box number, delivery hints, and similar address information.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString ...$line
     * @return static
     */
    public function setLine(string|FHIRStringPrimitive|FHIRString ...$line): self
    {
        if ([] === $line) {
            unset($this->line);
            return $this;
        }
        $this->line = [];
        foreach($line as $v) {
            if ($v instanceof FHIRString) {
                $this->line[] = $v;
            } else {
                $this->line[] = new FHIRString(value: $v);
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the city, town, village or other community or delivery center.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getCity(): null|FHIRString
    {
        return $this->city ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the city, town, village or other community or delivery center.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $city
     * @return static
     */
    public function setCity(null|string|FHIRStringPrimitive|FHIRString $city): self
    {
        if (null === $city) {
            unset($this->city);
            return $this;
        }
        if (!($city instanceof FHIRString)) {
            $city = new FHIRString(value: $city);
        }
        $this->city = $city;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the administrative area (county).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getDistrict(): null|FHIRString
    {
        return $this->district ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the administrative area (county).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $district
     * @return static
     */
    public function setDistrict(null|string|FHIRStringPrimitive|FHIRString $district): self
    {
        if (null === $district) {
            unset($this->district);
            return $this;
        }
        if (!($district instanceof FHIRString)) {
            $district = new FHIRString(value: $district);
        }
        $this->district = $district;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sub-unit of a country with limited sovereignty in a federally organized country.
     * A code may be used if codes are in common use (i.e. US 2 letter state codes).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getState(): null|FHIRString
    {
        return $this->state ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sub-unit of a country with limited sovereignty in a federally organized country.
     * A code may be used if codes are in common use (i.e. US 2 letter state codes).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $state
     * @return static
     */
    public function setState(null|string|FHIRStringPrimitive|FHIRString $state): self
    {
        if (null === $state) {
            unset($this->state);
            return $this;
        }
        if (!($state instanceof FHIRString)) {
            $state = new FHIRString(value: $state);
        }
        $this->state = $state;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A postal code designating a region defined by the postal service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getPostalCode(): null|FHIRString
    {
        return $this->postalCode ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A postal code designating a region defined by the postal service.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $postalCode
     * @return static
     */
    public function setPostalCode(null|string|FHIRStringPrimitive|FHIRString $postalCode): self
    {
        if (null === $postalCode) {
            unset($this->postalCode);
            return $this;
        }
        if (!($postalCode instanceof FHIRString)) {
            $postalCode = new FHIRString(value: $postalCode);
        }
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Country - a nation as commonly understood or generally accepted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getCountry(): null|FHIRString
    {
        return $this->country ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Country - a nation as commonly understood or generally accepted.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $country
     * @return static
     */
    public function setCountry(null|string|FHIRStringPrimitive|FHIRString $country): self
    {
        if (null === $country) {
            unset($this->country);
            return $this;
        }
        if (!($country instanceof FHIRString)) {
            $country = new FHIRString(value: $country);
        }
        $this->country = $country;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Time period when address was/is in use.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod
     */
    public function getPeriod(): null|FHIRPeriod
    {
        return $this->period ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Time period when address was/is in use.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod $period
     * @return static
     */
    public function setPeriod(null|FHIRPeriod $period): self
    {
        if (null === $period) {
            unset($this->period);
            return $this;
        }
        $this->period = $period;
        return $this;
    }

    /* class_default.php:192 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAddress $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAddress
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAddress)) {
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
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_USE === $cen) {
                $type->setUse(FHIRAddressUse::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRAddressType::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LINE === $cen) {
                $type->addLine(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CITY === $cen) {
                $type->setCity(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DISTRICT === $cen) {
                $type->setDistrict(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATE === $cen) {
                $type->setState(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_POSTAL_CODE === $cen) {
                $type->setPostalCode(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COUNTRY === $cen) {
                $type->setCountry(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERIOD === $cen) {
                $type->setPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_USE])) {
            if (isset($type->use)) {
                $type->use->setValue((string)$attributes[self::FIELD_USE]);
            } else {
                $type->setUse((string)$attributes[self::FIELD_USE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_USE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TYPE])) {
            if (isset($type->type)) {
                $type->type->setValue((string)$attributes[self::FIELD_TYPE]);
            } else {
                $type->setType((string)$attributes[self::FIELD_TYPE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TYPE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TEXT])) {
            if (isset($type->text)) {
                $type->text->setValue((string)$attributes[self::FIELD_TEXT]);
            } else {
                $type->setText((string)$attributes[self::FIELD_TEXT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TEXT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CITY])) {
            if (isset($type->city)) {
                $type->city->setValue((string)$attributes[self::FIELD_CITY]);
            } else {
                $type->setCity((string)$attributes[self::FIELD_CITY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_CITY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DISTRICT])) {
            if (isset($type->district)) {
                $type->district->setValue((string)$attributes[self::FIELD_DISTRICT]);
            } else {
                $type->setDistrict((string)$attributes[self::FIELD_DISTRICT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DISTRICT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_STATE])) {
            if (isset($type->state)) {
                $type->state->setValue((string)$attributes[self::FIELD_STATE]);
            } else {
                $type->setState((string)$attributes[self::FIELD_STATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_STATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_POSTAL_CODE])) {
            if (isset($type->postalCode)) {
                $type->postalCode->setValue((string)$attributes[self::FIELD_POSTAL_CODE]);
            } else {
                $type->setPostalCode((string)$attributes[self::FIELD_POSTAL_CODE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_POSTAL_CODE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_COUNTRY])) {
            if (isset($type->country)) {
                $type->country->setValue((string)$attributes[self::FIELD_COUNTRY]);
            } else {
                $type->setCountry((string)$attributes[self::FIELD_COUNTRY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_COUNTRY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->use) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_USE]) {
            $xw->writeAttribute(self::FIELD_USE, $this->use->_getValueAsString());
        }
        if (isset($this->type) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TYPE]) {
            $xw->writeAttribute(self::FIELD_TYPE, $this->type->_getValueAsString());
        }
        if (isset($this->text) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TEXT]) {
            $xw->writeAttribute(self::FIELD_TEXT, $this->text->_getValueAsString());
        }
        if (isset($this->city) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CITY]) {
            $xw->writeAttribute(self::FIELD_CITY, $this->city->_getValueAsString());
        }
        if (isset($this->district) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DISTRICT]) {
            $xw->writeAttribute(self::FIELD_DISTRICT, $this->district->_getValueAsString());
        }
        if (isset($this->state) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATE]) {
            $xw->writeAttribute(self::FIELD_STATE, $this->state->_getValueAsString());
        }
        if (isset($this->postalCode) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_POSTAL_CODE]) {
            $xw->writeAttribute(self::FIELD_POSTAL_CODE, $this->postalCode->_getValueAsString());
        }
        if (isset($this->country) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_COUNTRY]) {
            $xw->writeAttribute(self::FIELD_COUNTRY, $this->country->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->use)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_USE]
                || $this->use->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_USE);
            $this->use->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_USE]);
            $xw->endElement();
        }
        if (isset($this->type)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TYPE]
                || $this->type->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TYPE]);
            $xw->endElement();
        }
        if (isset($this->text)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TEXT]
                || $this->text->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TEXT);
            $this->text->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TEXT]);
            $xw->endElement();
        }
        if (isset($this->line) && [] !== $this->line) {
            foreach($this->line as $v) {
                $xw->startElement(self::FIELD_LINE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->city)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CITY]
                || $this->city->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CITY);
            $this->city->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CITY]);
            $xw->endElement();
        }
        if (isset($this->district)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DISTRICT]
                || $this->district->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DISTRICT);
            $this->district->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DISTRICT]);
            $xw->endElement();
        }
        if (isset($this->state)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STATE]
                || $this->state->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STATE);
            $this->state->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STATE]);
            $xw->endElement();
        }
        if (isset($this->postalCode)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_POSTAL_CODE]
                || $this->postalCode->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_POSTAL_CODE);
            $this->postalCode->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_POSTAL_CODE]);
            $xw->endElement();
        }
        if (isset($this->country)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_COUNTRY]
                || $this->country->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_COUNTRY);
            $this->country->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_COUNTRY]);
            $xw->endElement();
        }
        if (isset($this->period)) {
            $xw->startElement(self::FIELD_PERIOD);
            $this->period->xmlSerialize($xw, $config);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAddress $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAddress
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAddress)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->use)
            || isset($json->_use)
            || property_exists($json, self::FIELD_USE)
            || property_exists($json, self::FIELD_USE_EXT)) {
            $v = $json->_use ?? new \stdClass();
            $v->value = $json->use ?? null;
            $type->setUse(FHIRAddressUse::jsonUnserialize($v, $config));
        }
        if (isset($json->type)
            || isset($json->_type)
            || property_exists($json, self::FIELD_TYPE)
            || property_exists($json, self::FIELD_TYPE_EXT)) {
            $v = $json->_type ?? new \stdClass();
            $v->value = $json->type ?? null;
            $type->setType(FHIRAddressType::jsonUnserialize($v, $config));
        }
        if (isset($json->text)
            || isset($json->_text)
            || property_exists($json, self::FIELD_TEXT)
            || property_exists($json, self::FIELD_TEXT_EXT)) {
            $v = $json->_text ?? new \stdClass();
            $v->value = $json->text ?? null;
            $type->setText(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->line)
            || isset($json->_line)
            || property_exists($json, self::FIELD_LINE)
            || property_exists($json, self::FIELD_LINE_EXT)) {
            $vals = (array)($json->line ?? []);
            $exts = (array)($json->FIELD_LINE_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addLine(FHIRString::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->city)
            || isset($json->_city)
            || property_exists($json, self::FIELD_CITY)
            || property_exists($json, self::FIELD_CITY_EXT)) {
            $v = $json->_city ?? new \stdClass();
            $v->value = $json->city ?? null;
            $type->setCity(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->district)
            || isset($json->_district)
            || property_exists($json, self::FIELD_DISTRICT)
            || property_exists($json, self::FIELD_DISTRICT_EXT)) {
            $v = $json->_district ?? new \stdClass();
            $v->value = $json->district ?? null;
            $type->setDistrict(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->state)
            || isset($json->_state)
            || property_exists($json, self::FIELD_STATE)
            || property_exists($json, self::FIELD_STATE_EXT)) {
            $v = $json->_state ?? new \stdClass();
            $v->value = $json->state ?? null;
            $type->setState(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->postalCode)
            || isset($json->_postalCode)
            || property_exists($json, self::FIELD_POSTAL_CODE)
            || property_exists($json, self::FIELD_POSTAL_CODE_EXT)) {
            $v = $json->_postalCode ?? new \stdClass();
            $v->value = $json->postalCode ?? null;
            $type->setPostalCode(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->country)
            || isset($json->_country)
            || property_exists($json, self::FIELD_COUNTRY)
            || property_exists($json, self::FIELD_COUNTRY_EXT)) {
            $v = $json->_country ?? new \stdClass();
            $v->value = $json->country ?? null;
            $type->setCountry(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->period) || property_exists($json, self::FIELD_PERIOD)) {
            if (is_array($json->period)) {
                $type->setPeriod(FHIRPeriod::jsonUnserialize(reset($json->period), $config));
            } else {
                $type->setPeriod(FHIRPeriod::jsonUnserialize($json->period, $config));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->use)) {
            if (null !== ($val = $this->use->getValue())) {
                $out->use = $val;
            }
            if ($this->use->_nonValueFieldDefined()) {
                $ext = $this->use->jsonSerialize();
                unset($ext->value);
                $out->_use = $ext;
            }
        }
        if (isset($this->type)) {
            if (null !== ($val = $this->type->getValue())) {
                $out->type = $val;
            }
            if ($this->type->_nonValueFieldDefined()) {
                $ext = $this->type->jsonSerialize();
                unset($ext->value);
                $out->_type = $ext;
            }
        }
        if (isset($this->text)) {
            if (null !== ($val = $this->text->getValue())) {
                $out->text = $val;
            }
            if ($this->text->_nonValueFieldDefined()) {
                $ext = $this->text->jsonSerialize();
                unset($ext->value);
                $out->_text = $ext;
            }
        }
        if (isset($this->line) && [] !== $this->line) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->line as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->line = $vals;
            }
            if ($hasExts) {
                $out->_line = $exts;
            }
        }
        if (isset($this->city)) {
            if (null !== ($val = $this->city->getValue())) {
                $out->city = $val;
            }
            if ($this->city->_nonValueFieldDefined()) {
                $ext = $this->city->jsonSerialize();
                unset($ext->value);
                $out->_city = $ext;
            }
        }
        if (isset($this->district)) {
            if (null !== ($val = $this->district->getValue())) {
                $out->district = $val;
            }
            if ($this->district->_nonValueFieldDefined()) {
                $ext = $this->district->jsonSerialize();
                unset($ext->value);
                $out->_district = $ext;
            }
        }
        if (isset($this->state)) {
            if (null !== ($val = $this->state->getValue())) {
                $out->state = $val;
            }
            if ($this->state->_nonValueFieldDefined()) {
                $ext = $this->state->jsonSerialize();
                unset($ext->value);
                $out->_state = $ext;
            }
        }
        if (isset($this->postalCode)) {
            if (null !== ($val = $this->postalCode->getValue())) {
                $out->postalCode = $val;
            }
            if ($this->postalCode->_nonValueFieldDefined()) {
                $ext = $this->postalCode->jsonSerialize();
                unset($ext->value);
                $out->_postalCode = $ext;
            }
        }
        if (isset($this->country)) {
            if (null !== ($val = $this->country->getValue())) {
                $out->country = $val;
            }
            if ($this->country->_nonValueFieldDefined()) {
                $ext = $this->country->jsonSerialize();
                unset($ext->value);
                $out->_country = $ext;
            }
        }
        if (isset($this->period)) {
            $out->period = $this->period;
        }
        return $out;
    }
}