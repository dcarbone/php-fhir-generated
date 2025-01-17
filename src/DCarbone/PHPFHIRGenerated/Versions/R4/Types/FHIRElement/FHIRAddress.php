<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * An address expressed using postal conventions (as opposed to GPS or other
 * location definition formats). This data type may be used to convey addresses for
 * use in delivering mail as well as for visiting locations which might not be
 * valid for mail delivery. There are a variety of postal address formats defined
 * around the world.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
class FHIRAddress extends FHIRElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_ADDRESS;


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

    /**
     * The use of an address.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The purpose of this address.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAddressUse 
     */
    protected FHIRAddressUse $use;
    /**
     * The type of an address (physical / postal).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Distinguishes between physical addresses (those you can visit) and mailing
     * addresses (e.g. PO Boxes and care-of addresses). Most addresses are both.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAddressType 
     */
    protected FHIRAddressType $type;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies the entire address as it should be displayed e.g. on a postal label.
     * This may be provided instead of or as well as the specific parts.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $text;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This component contains the house number, apartment number, street name, street
     * direction, P.O. Box number, delivery hints, and similar address information.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString[] 
     */
    protected array $line;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the city, town, suburb, village or other community or delivery
     * center.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $city;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the administrative area (county).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $district;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sub-unit of a country with limited sovereignty in a federally organized country.
     * A code may be used if codes are in common use (e.g. US 2 letter state codes).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $state;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A postal code designating a region defined by the postal service.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $postalCode;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Country - a nation as commonly understood or generally accepted.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $country;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Time period when address was/is in use.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $period;

    /** Default validation map for fields in type Address */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRAddress Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAddressUse $use
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAddressType $type
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $text
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString[] $line
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $city
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $district
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $state
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $postalCode
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $country
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod $period
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|FHIRAddressUse $use = null,
                                null|FHIRAddressType $type = null,
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

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * The use of an address.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The purpose of this address.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAddressUse
     */
    public function getUse(): null|FHIRAddressUse
    {
        return $this->use ?? null;
    }

    /**
     * The use of an address.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The purpose of this address.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAddressUse $use
     * @return static
     */
    public function setUse(null|FHIRAddressUse $use): self
    {
        if (null === $use) {
            unset($this->use);
            return $this;
        }
        $this->use = $use;
        return $this;
    }

    /**
     * The type of an address (physical / postal).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Distinguishes between physical addresses (those you can visit) and mailing
     * addresses (e.g. PO Boxes and care-of addresses). Most addresses are both.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAddressType
     */
    public function getType(): null|FHIRAddressType
    {
        return $this->type ?? null;
    }

    /**
     * The type of an address (physical / postal).
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Distinguishes between physical addresses (those you can visit) and mailing
     * addresses (e.g. PO Boxes and care-of addresses). Most addresses are both.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAddressType $type
     * @return static
     */
    public function setType(null|FHIRAddressType $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        $this->type = $type;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies the entire address as it should be displayed e.g. on a postal label.
     * This may be provided instead of or as well as the specific parts.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getText(): null|FHIRString
    {
        return $this->text ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies the entire address as it should be displayed e.g. on a postal label.
     * This may be provided instead of or as well as the specific parts.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $text
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setText(null|string|FHIRStringPrimitive|FHIRString $text,
                            null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $text) {
            unset($this->text);
            return $this;
        }
        if (!($text instanceof FHIRString)) {
            $text = new FHIRString(value: $text);
        }
        if (null !== $valueXMLLocation) {
            $text->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $text->_getValueXMLLocation()) {
            $text->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->text = $text;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This component contains the house number, apartment number, street name, street
     * direction, P.O. Box number, delivery hints, and similar address information.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString[]
     */
    public function getLine(): array
    {
        return $this->line ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString>
     */
    public function getLineIterator(): iterable
    {
        if (!isset($this->line) || [] === $this->line) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->line);
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This component contains the house number, apartment number, street name, street
     * direction, P.O. Box number, delivery hints, and similar address information.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $line
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
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This component contains the house number, apartment number, street name, street
     * direction, P.O. Box number, delivery hints, and similar address information.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString ...$line
     * @return static
     */
    public function setLine(string|FHIRStringPrimitive|FHIRString ...$line): self
    {
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
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the city, town, suburb, village or other community or delivery
     * center.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getCity(): null|FHIRString
    {
        return $this->city ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the city, town, suburb, village or other community or delivery
     * center.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $city
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCity(null|string|FHIRStringPrimitive|FHIRString $city,
                            null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $city) {
            unset($this->city);
            return $this;
        }
        if (!($city instanceof FHIRString)) {
            $city = new FHIRString(value: $city);
        }
        if (null !== $valueXMLLocation) {
            $city->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $city->_getValueXMLLocation()) {
            $city->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->city = $city;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the administrative area (county).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getDistrict(): null|FHIRString
    {
        return $this->district ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the administrative area (county).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $district
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDistrict(null|string|FHIRStringPrimitive|FHIRString $district,
                                null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $district) {
            unset($this->district);
            return $this;
        }
        if (!($district instanceof FHIRString)) {
            $district = new FHIRString(value: $district);
        }
        if (null !== $valueXMLLocation) {
            $district->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $district->_getValueXMLLocation()) {
            $district->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->district = $district;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sub-unit of a country with limited sovereignty in a federally organized country.
     * A code may be used if codes are in common use (e.g. US 2 letter state codes).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getState(): null|FHIRString
    {
        return $this->state ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sub-unit of a country with limited sovereignty in a federally organized country.
     * A code may be used if codes are in common use (e.g. US 2 letter state codes).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $state
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setState(null|string|FHIRStringPrimitive|FHIRString $state,
                             null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $state) {
            unset($this->state);
            return $this;
        }
        if (!($state instanceof FHIRString)) {
            $state = new FHIRString(value: $state);
        }
        if (null !== $valueXMLLocation) {
            $state->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $state->_getValueXMLLocation()) {
            $state->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->state = $state;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A postal code designating a region defined by the postal service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getPostalCode(): null|FHIRString
    {
        return $this->postalCode ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A postal code designating a region defined by the postal service.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $postalCode
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPostalCode(null|string|FHIRStringPrimitive|FHIRString $postalCode,
                                  null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $postalCode) {
            unset($this->postalCode);
            return $this;
        }
        if (!($postalCode instanceof FHIRString)) {
            $postalCode = new FHIRString(value: $postalCode);
        }
        if (null !== $valueXMLLocation) {
            $postalCode->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $postalCode->_getValueXMLLocation()) {
            $postalCode->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Country - a nation as commonly understood or generally accepted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getCountry(): null|FHIRString
    {
        return $this->country ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Country - a nation as commonly understood or generally accepted.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $country
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCountry(null|string|FHIRStringPrimitive|FHIRString $country,
                               null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $country) {
            unset($this->country);
            return $this;
        }
        if (!($country instanceof FHIRString)) {
            $country = new FHIRString(value: $country);
        }
        if (null !== $valueXMLLocation) {
            $country->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $country->_getValueXMLLocation()) {
            $country->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod $period
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
        if (isset($validationRules[self::FIELD_USE])) {
            $v = $this->getUse();
            foreach($validationRules[self::FIELD_USE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_USE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USE])) {
                        $errs[self::FIELD_USE] = [];
                    }
                    $errs[self::FIELD_USE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LINE])) {
            $v = $this->getLine();
            foreach($validationRules[self::FIELD_LINE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LINE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LINE])) {
                        $errs[self::FIELD_LINE] = [];
                    }
                    $errs[self::FIELD_LINE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CITY])) {
            $v = $this->getCity();
            foreach($validationRules[self::FIELD_CITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CITY])) {
                        $errs[self::FIELD_CITY] = [];
                    }
                    $errs[self::FIELD_CITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISTRICT])) {
            $v = $this->getDistrict();
            foreach($validationRules[self::FIELD_DISTRICT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DISTRICT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISTRICT])) {
                        $errs[self::FIELD_DISTRICT] = [];
                    }
                    $errs[self::FIELD_DISTRICT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATE])) {
            $v = $this->getState();
            foreach($validationRules[self::FIELD_STATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATE])) {
                        $errs[self::FIELD_STATE] = [];
                    }
                    $errs[self::FIELD_STATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_POSTAL_CODE])) {
            $v = $this->getPostalCode();
            foreach($validationRules[self::FIELD_POSTAL_CODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_POSTAL_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_POSTAL_CODE])) {
                        $errs[self::FIELD_POSTAL_CODE] = [];
                    }
                    $errs[self::FIELD_POSTAL_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COUNTRY])) {
            $v = $this->getCountry();
            foreach($validationRules[self::FIELD_COUNTRY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COUNTRY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COUNTRY])) {
                        $errs[self::FIELD_COUNTRY] = [];
                    }
                    $errs[self::FIELD_COUNTRY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD])) {
            $v = $this->getPeriod();
            foreach($validationRules[self::FIELD_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD])) {
                        $errs[self::FIELD_PERIOD] = [];
                    }
                    $errs[self::FIELD_PERIOD][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAddress $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAddress
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
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
            } else if (self::FIELD_USE === $childName) {
                $v = new FHIRAddressUse(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setUse(FHIRAddressUse::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TYPE === $childName) {
                $v = new FHIRAddressType(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setType(FHIRAddressType::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TEXT === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setText(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LINE === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->addLine(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CITY === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setCity(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DISTRICT === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDistrict(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STATE === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setState(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_POSTAL_CODE === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setPostalCode(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COUNTRY === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setCountry(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PERIOD === $childName) {
                $v = new FHIRPeriod();
                $type->setPeriod(FHIRPeriod::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_TEXT])) {
            $pt = $type->getText();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_TEXT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setText(new FHIRString(
                    value: (string)$attributes[self::FIELD_TEXT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LINE])) {
            $v = new FHIRString(value: (string)$attributes[self::FIELD_LINE],
                                                       valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE);
            $type->addLine($v);
        }
        if (isset($attributes[self::FIELD_CITY])) {
            $pt = $type->getCity();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_CITY]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCity(new FHIRString(
                    value: (string)$attributes[self::FIELD_CITY],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DISTRICT])) {
            $pt = $type->getDistrict();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DISTRICT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDistrict(new FHIRString(
                    value: (string)$attributes[self::FIELD_DISTRICT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_STATE])) {
            $pt = $type->getState();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_STATE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setState(new FHIRString(
                    value: (string)$attributes[self::FIELD_STATE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_POSTAL_CODE])) {
            $pt = $type->getPostalCode();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_POSTAL_CODE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPostalCode(new FHIRString(
                    value: (string)$attributes[self::FIELD_POSTAL_CODE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_COUNTRY])) {
            $pt = $type->getCountry();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_COUNTRY]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCountry(new FHIRString(
                    value: (string)$attributes[self::FIELD_COUNTRY],
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
            $xw->openRootNode('Address', $this->_getSourceXMLNS());
        }
        if (isset($this->text) && $this->text->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_TEXT, $this->text->getValue()?->_getFormattedValue());
        }
        if (isset($this->line)) {
           foreach($this->line as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_LINE, $v->getValue()?->_getFormattedValue());
                    break;
                }
            }
        }
        if (isset($this->city) && $this->city->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CITY, $this->city->getValue()?->_getFormattedValue());
        }
        if (isset($this->district) && $this->district->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DISTRICT, $this->district->getValue()?->_getFormattedValue());
        }
        if (isset($this->state) && $this->state->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_STATE, $this->state->getValue()?->_getFormattedValue());
        }
        if (isset($this->postalCode) && $this->postalCode->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_POSTAL_CODE, $this->postalCode->getValue()?->_getFormattedValue());
        }
        if (isset($this->country) && $this->country->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_COUNTRY, $this->country->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->use)) {
            $xw->startElement(self::FIELD_USE);
            $this->use->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->text) && $this->text->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_TEXT);
            $this->text->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->line)) {
            foreach($this->line as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_LINE);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->city) && $this->city->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CITY);
            $this->city->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->district) && $this->district->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DISTRICT);
            $this->district->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->state) && $this->state->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_STATE);
            $this->state->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->postalCode) && $this->postalCode->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_POSTAL_CODE);
            $this->postalCode->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->country) && $this->country->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_COUNTRY);
            $this->country->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->period)) {
            $xw->startElement(self::FIELD_PERIOD);
            $this->period->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAddress $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAddress
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
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
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_USE]) || isset($json[self::FIELD_USE_EXT]) || array_key_exists(self::FIELD_USE, $json) || array_key_exists(self::FIELD_USE_EXT, $json)) {
            $value = $json[self::FIELD_USE] ?? null;
            $ext = (isset($json[self::FIELD_USE_EXT]) && is_array($json[self::FIELD_USE_EXT])) ? $json[self::FIELD_USE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAddressUse) {
                    $type->setUse($value);
                } else if (is_array($value)) {
                    $type->setUse(new FHIRAddressUse(array_merge($ext, $value)));
                } else {
                    $type->setUse(new FHIRAddressUse([FHIRAddressUse::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setUse(new FHIRAddressUse($ext));
            } else {
                $type->setUse(new FHIRAddressUse(null));
            }
        }
        if (isset($json[self::FIELD_TYPE]) || isset($json[self::FIELD_TYPE_EXT]) || array_key_exists(self::FIELD_TYPE, $json) || array_key_exists(self::FIELD_TYPE_EXT, $json)) {
            $value = $json[self::FIELD_TYPE] ?? null;
            $ext = (isset($json[self::FIELD_TYPE_EXT]) && is_array($json[self::FIELD_TYPE_EXT])) ? $json[self::FIELD_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAddressType) {
                    $type->setType($value);
                } else if (is_array($value)) {
                    $type->setType(new FHIRAddressType(array_merge($ext, $value)));
                } else {
                    $type->setType(new FHIRAddressType([FHIRAddressType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setType(new FHIRAddressType($ext));
            } else {
                $type->setType(new FHIRAddressType(null));
            }
        }
        if (isset($json[self::FIELD_TEXT]) || isset($json[self::FIELD_TEXT_EXT]) || array_key_exists(self::FIELD_TEXT, $json) || array_key_exists(self::FIELD_TEXT_EXT, $json)) {
            $value = $json[self::FIELD_TEXT] ?? null;
            $ext = (isset($json[self::FIELD_TEXT_EXT]) && is_array($json[self::FIELD_TEXT_EXT])) ? $json[self::FIELD_TEXT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setText($value);
                } else if (is_array($value)) {
                    $type->setText(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setText(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setText(new FHIRString($ext));
            } else {
                $type->setText(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_LINE]) || isset($json[self::FIELD_LINE_EXT]) || array_key_exists(self::FIELD_LINE, $json) || array_key_exists(self::FIELD_LINE_EXT, $json)) {
            $value = $json[self::FIELD_LINE] ?? null;
            $ext = (isset($json[self::FIELD_LINE_EXT]) && is_array($json[self::FIELD_LINE_EXT])) ? $json[self::FIELD_LINE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->addLine($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $type->addLine($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addLine(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $type->addLine(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addLine(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->addLine(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addLine(new FHIRString($iext));
                }
            } else {
                $type->addLine(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_CITY]) || isset($json[self::FIELD_CITY_EXT]) || array_key_exists(self::FIELD_CITY, $json) || array_key_exists(self::FIELD_CITY_EXT, $json)) {
            $value = $json[self::FIELD_CITY] ?? null;
            $ext = (isset($json[self::FIELD_CITY_EXT]) && is_array($json[self::FIELD_CITY_EXT])) ? $json[self::FIELD_CITY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setCity($value);
                } else if (is_array($value)) {
                    $type->setCity(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setCity(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setCity(new FHIRString($ext));
            } else {
                $type->setCity(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_DISTRICT]) || isset($json[self::FIELD_DISTRICT_EXT]) || array_key_exists(self::FIELD_DISTRICT, $json) || array_key_exists(self::FIELD_DISTRICT_EXT, $json)) {
            $value = $json[self::FIELD_DISTRICT] ?? null;
            $ext = (isset($json[self::FIELD_DISTRICT_EXT]) && is_array($json[self::FIELD_DISTRICT_EXT])) ? $json[self::FIELD_DISTRICT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setDistrict($value);
                } else if (is_array($value)) {
                    $type->setDistrict(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setDistrict(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDistrict(new FHIRString($ext));
            } else {
                $type->setDistrict(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_STATE]) || isset($json[self::FIELD_STATE_EXT]) || array_key_exists(self::FIELD_STATE, $json) || array_key_exists(self::FIELD_STATE_EXT, $json)) {
            $value = $json[self::FIELD_STATE] ?? null;
            $ext = (isset($json[self::FIELD_STATE_EXT]) && is_array($json[self::FIELD_STATE_EXT])) ? $json[self::FIELD_STATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setState($value);
                } else if (is_array($value)) {
                    $type->setState(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setState(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setState(new FHIRString($ext));
            } else {
                $type->setState(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_POSTAL_CODE]) || isset($json[self::FIELD_POSTAL_CODE_EXT]) || array_key_exists(self::FIELD_POSTAL_CODE, $json) || array_key_exists(self::FIELD_POSTAL_CODE_EXT, $json)) {
            $value = $json[self::FIELD_POSTAL_CODE] ?? null;
            $ext = (isset($json[self::FIELD_POSTAL_CODE_EXT]) && is_array($json[self::FIELD_POSTAL_CODE_EXT])) ? $json[self::FIELD_POSTAL_CODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setPostalCode($value);
                } else if (is_array($value)) {
                    $type->setPostalCode(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setPostalCode(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPostalCode(new FHIRString($ext));
            } else {
                $type->setPostalCode(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_COUNTRY]) || isset($json[self::FIELD_COUNTRY_EXT]) || array_key_exists(self::FIELD_COUNTRY, $json) || array_key_exists(self::FIELD_COUNTRY_EXT, $json)) {
            $value = $json[self::FIELD_COUNTRY] ?? null;
            $ext = (isset($json[self::FIELD_COUNTRY_EXT]) && is_array($json[self::FIELD_COUNTRY_EXT])) ? $json[self::FIELD_COUNTRY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setCountry($value);
                } else if (is_array($value)) {
                    $type->setCountry(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setCountry(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setCountry(new FHIRString($ext));
            } else {
                $type->setCountry(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_PERIOD]) || array_key_exists(self::FIELD_PERIOD, $json)) {
            if ($json[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $type->setPeriod($json[self::FIELD_PERIOD]);
            } else {
                $type->setPeriod(new FHIRPeriod($json[self::FIELD_PERIOD]));
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
            $ext = $this->use->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_use = $ext;
            }
        }
        if (isset($this->type)) {
            if (null !== ($val = $this->type->getValue())) {
                $out->type = $val;
            }
            $ext = $this->type->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_type = $ext;
            }
        }
        if (isset($this->text)) {
            if (null !== ($val = $this->text->getValue())) {
                $out->text = $val;
            }
            $ext = $this->text->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_text = $ext;
            }
        }
        if (isset($this->line) && [] !== $this->line) {
            $vals = [];
            $exts = [];
            foreach ($this->line as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->line = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_line = $exts;
            }
        }
        if (isset($this->city)) {
            if (null !== ($val = $this->city->getValue())) {
                $out->city = $val;
            }
            $ext = $this->city->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_city = $ext;
            }
        }
        if (isset($this->district)) {
            if (null !== ($val = $this->district->getValue())) {
                $out->district = $val;
            }
            $ext = $this->district->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_district = $ext;
            }
        }
        if (isset($this->state)) {
            if (null !== ($val = $this->state->getValue())) {
                $out->state = $val;
            }
            $ext = $this->state->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_state = $ext;
            }
        }
        if (isset($this->postalCode)) {
            if (null !== ($val = $this->postalCode->getValue())) {
                $out->postalCode = $val;
            }
            $ext = $this->postalCode->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_postalCode = $ext;
            }
        }
        if (isset($this->country)) {
            if (null !== ($val = $this->country->getValue())) {
                $out->country = $val;
            }
            $ext = $this->country->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_country = $ext;
            }
        }
        if (isset($this->period)) {
            $out->period = $this->period;
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