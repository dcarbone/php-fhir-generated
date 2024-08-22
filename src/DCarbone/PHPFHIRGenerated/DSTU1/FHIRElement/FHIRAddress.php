<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 22nd, 2024 02:47+0000
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter;

/**
 * There is a variety of postal address formats defined around the world. This
 * format defines a superset that is the basis for all addresses around the world.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRAddress
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement
 */
class FHIRAddress extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ADDRESS;

    const FIELD_USE = 'use';
    const FIELD_USE_EXT = '_use';
    const FIELD_TEXT = 'text';
    const FIELD_TEXT_EXT = '_text';
    const FIELD_LINE = 'line';
    const FIELD_LINE_EXT = '_line';
    const FIELD_CITY = 'city';
    const FIELD_CITY_EXT = '_city';
    const FIELD_STATE = 'state';
    const FIELD_STATE_EXT = '_state';
    const FIELD_ZIP = 'zip';
    const FIELD_ZIP_EXT = '_zip';
    const FIELD_COUNTRY = 'country';
    const FIELD_COUNTRY_EXT = '_country';
    const FIELD_PERIOD = 'period';

    /**
     * The use of an address
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The purpose of this address.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddressUse
     */
    protected null|FHIRAddressUse $use = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A full text representation of the address.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected null|FHIRString $text = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This component contains the house number, apartment number, street name, street
     * direction, P.O. Box number, delivery hints, and similar address information.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString[]
     */
    protected null|array $line = [];
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the city, town, village or other community or delivery center.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected null|FHIRString $city = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sub-unit of a country with limited sovereignty in a federally organized country.
     * A code may be used if codes are in common use (i.e. US 2 letter state codes).
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected null|FHIRString $state = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A postal code designating a region defined by the postal service.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected null|FHIRString $zip = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Country - a nation as commonly understood or generally accepted.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected null|FHIRString $country = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Time period when address was/is in use.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $period = null;

    /**
     * Validation map for fields in type Address
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRAddress Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_USE, $data) || array_key_exists(self::FIELD_USE_EXT, $data)) {
            $value = $data[self::FIELD_USE] ?? null;
            $ext = (isset($data[self::FIELD_USE_EXT]) && is_array($data[self::FIELD_USE_EXT])) ? $data[self::FIELD_USE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAddressUse) {
                    $this->setUse($value);
                } else if (is_array($value)) {
                    $this->setUse(new FHIRAddressUse(array_merge($ext, $value)));
                } else {
                    $this->setUse(new FHIRAddressUse([FHIRAddressUse::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setUse(new FHIRAddressUse($ext));
            } else {
                $this->setUse(new FHIRAddressUse(null));
            }
        }
        if (array_key_exists(self::FIELD_TEXT, $data) || array_key_exists(self::FIELD_TEXT_EXT, $data)) {
            $value = $data[self::FIELD_TEXT] ?? null;
            $ext = (isset($data[self::FIELD_TEXT_EXT]) && is_array($data[self::FIELD_TEXT_EXT])) ? $data[self::FIELD_TEXT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setText($value);
                } else if (is_array($value)) {
                    $this->setText(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setText(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setText(new FHIRString($ext));
            } else {
                $this->setText(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_LINE, $data) || array_key_exists(self::FIELD_LINE_EXT, $data)) {
            $value = $data[self::FIELD_LINE] ?? null;
            $ext = (isset($data[self::FIELD_LINE_EXT]) && is_array($data[self::FIELD_LINE_EXT])) ? $data[self::FIELD_LINE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addLine($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addLine($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addLine(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addLine(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addLine(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addLine(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addLine(new FHIRString($iext));
                }
            } else {
                $this->addLine(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_CITY, $data) || array_key_exists(self::FIELD_CITY_EXT, $data)) {
            $value = $data[self::FIELD_CITY] ?? null;
            $ext = (isset($data[self::FIELD_CITY_EXT]) && is_array($data[self::FIELD_CITY_EXT])) ? $data[self::FIELD_CITY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCity($value);
                } else if (is_array($value)) {
                    $this->setCity(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCity(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCity(new FHIRString($ext));
            } else {
                $this->setCity(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_STATE, $data) || array_key_exists(self::FIELD_STATE_EXT, $data)) {
            $value = $data[self::FIELD_STATE] ?? null;
            $ext = (isset($data[self::FIELD_STATE_EXT]) && is_array($data[self::FIELD_STATE_EXT])) ? $data[self::FIELD_STATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setState($value);
                } else if (is_array($value)) {
                    $this->setState(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setState(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setState(new FHIRString($ext));
            } else {
                $this->setState(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_ZIP, $data) || array_key_exists(self::FIELD_ZIP_EXT, $data)) {
            $value = $data[self::FIELD_ZIP] ?? null;
            $ext = (isset($data[self::FIELD_ZIP_EXT]) && is_array($data[self::FIELD_ZIP_EXT])) ? $data[self::FIELD_ZIP_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setZip($value);
                } else if (is_array($value)) {
                    $this->setZip(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setZip(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setZip(new FHIRString($ext));
            } else {
                $this->setZip(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_COUNTRY, $data) || array_key_exists(self::FIELD_COUNTRY_EXT, $data)) {
            $value = $data[self::FIELD_COUNTRY] ?? null;
            $ext = (isset($data[self::FIELD_COUNTRY_EXT]) && is_array($data[self::FIELD_COUNTRY_EXT])) ? $data[self::FIELD_COUNTRY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCountry($value);
                } else if (is_array($value)) {
                    $this->setCountry(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCountry(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCountry(new FHIRString($ext));
            } else {
                $this->setCountry(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_PERIOD, $data)) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
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
     * The use of an address
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The purpose of this address.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddressUse
     */
    public function getUse(): null|FHIRAddressUse
    {
        return $this->use;
    }

    /**
     * The use of an address
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The purpose of this address.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddressUse $use
     * @return static
     */
    public function setUse(null|FHIRAddressUse $use = null): self
    {
        if (null === $use) {
            $use = new FHIRAddressUse();
        }
        $this->_trackValueSet($this->use, $use);
        $this->use = $use;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A full text representation of the address.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getText(): null|FHIRString
    {
        return $this->text;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A full text representation of the address.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $text
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setText(null|string|FHIRStringPrimitive|FHIRString $text = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $text && !($text instanceof FHIRString)) {
            $text = new FHIRString($text);
        }
        $this->_trackValueSet($this->text, $text);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_TEXT])) {
            $this->_primitiveXmlLocations[self::FIELD_TEXT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_TEXT][0] = $xmlLocation;
        $this->text = $text;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This component contains the house number, apartment number, street name, street
     * direction, P.O. Box number, delivery hints, and similar address information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString[]
     */
    public function getLine(): null|array
    {
        return $this->line;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This component contains the house number, apartment number, street name, street
     * direction, P.O. Box number, delivery hints, and similar address information.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $line
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addLine(null|string|FHIRStringPrimitive|FHIRString $line = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $line && !($line instanceof FHIRString)) {
            $line = new FHIRString($line);
        }
        $this->_trackValueAdded();
        if (!isset($this->_primitiveXmlLocations[self::FIELD_LINE])) {
            $this->_primitiveXmlLocations[self::FIELD_LINE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_LINE][] = $xmlLocation;
        $this->line[] = $line;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This component contains the house number, apartment number, street name, street
     * direction, P.O. Box number, delivery hints, and similar address information.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString[] $line
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setLine(array $line = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        unset($this->_primitiveXmlLocations[self::FIELD_LINE]);
        if ([] !== $this->line) {
            $this->_trackValuesRemoved(count($this->line));
            $this->line = [];
        }
        if ([] === $line) {
            return $this;
        }
        foreach($line as $v) {
            if ($v instanceof FHIRString) {
                $this->addLine($v, $xmlLocation);
            } else {
                $this->addLine(new FHIRString($v), $xmlLocation);
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the city, town, village or other community or delivery center.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getCity(): null|FHIRString
    {
        return $this->city;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the city, town, village or other community or delivery center.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $city
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setCity(null|string|FHIRStringPrimitive|FHIRString $city = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $city && !($city instanceof FHIRString)) {
            $city = new FHIRString($city);
        }
        $this->_trackValueSet($this->city, $city);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_CITY])) {
            $this->_primitiveXmlLocations[self::FIELD_CITY] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_CITY][0] = $xmlLocation;
        $this->city = $city;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sub-unit of a country with limited sovereignty in a federally organized country.
     * A code may be used if codes are in common use (i.e. US 2 letter state codes).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getState(): null|FHIRString
    {
        return $this->state;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sub-unit of a country with limited sovereignty in a federally organized country.
     * A code may be used if codes are in common use (i.e. US 2 letter state codes).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $state
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setState(null|string|FHIRStringPrimitive|FHIRString $state = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $state && !($state instanceof FHIRString)) {
            $state = new FHIRString($state);
        }
        $this->_trackValueSet($this->state, $state);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_STATE])) {
            $this->_primitiveXmlLocations[self::FIELD_STATE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_STATE][0] = $xmlLocation;
        $this->state = $state;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A postal code designating a region defined by the postal service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getZip(): null|FHIRString
    {
        return $this->zip;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A postal code designating a region defined by the postal service.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $zip
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setZip(null|string|FHIRStringPrimitive|FHIRString $zip = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $zip && !($zip instanceof FHIRString)) {
            $zip = new FHIRString($zip);
        }
        $this->_trackValueSet($this->zip, $zip);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_ZIP])) {
            $this->_primitiveXmlLocations[self::FIELD_ZIP] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_ZIP][0] = $xmlLocation;
        $this->zip = $zip;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Country - a nation as commonly understood or generally accepted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getCountry(): null|FHIRString
    {
        return $this->country;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Country - a nation as commonly understood or generally accepted.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $country
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setCountry(null|string|FHIRStringPrimitive|FHIRString $country = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $country && !($country instanceof FHIRString)) {
            $country = new FHIRString($country);
        }
        $this->_trackValueSet($this->country, $country);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_COUNTRY])) {
            $this->_primitiveXmlLocations[self::FIELD_COUNTRY] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_COUNTRY][0] = $xmlLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    public function getPeriod(): null|FHIRPeriod
    {
        return $this->period;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Time period when address was/is in use.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod $period
     * @return static
     */
    public function setPeriod(null|FHIRPeriod $period = null): self
    {
        if (null === $period) {
            $period = new FHIRPeriod();
        }
        $this->_trackValueSet($this->period, $period);
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
        if (null !== ($v = $this->getUse())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_USE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getText())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEXT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getLine())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LINE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getCity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getState())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getZip())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ZIP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCountry())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COUNTRY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERIOD] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_USE])) {
            $v = $this->getUse();
            foreach($validationRules[self::FIELD_USE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADDRESS, self::FIELD_USE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USE])) {
                        $errs[self::FIELD_USE] = [];
                    }
                    $errs[self::FIELD_USE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADDRESS, self::FIELD_TEXT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADDRESS, self::FIELD_LINE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADDRESS, self::FIELD_CITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CITY])) {
                        $errs[self::FIELD_CITY] = [];
                    }
                    $errs[self::FIELD_CITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATE])) {
            $v = $this->getState();
            foreach($validationRules[self::FIELD_STATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADDRESS, self::FIELD_STATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATE])) {
                        $errs[self::FIELD_STATE] = [];
                    }
                    $errs[self::FIELD_STATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ZIP])) {
            $v = $this->getZip();
            foreach($validationRules[self::FIELD_ZIP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADDRESS, self::FIELD_ZIP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ZIP])) {
                        $errs[self::FIELD_ZIP] = [];
                    }
                    $errs[self::FIELD_ZIP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COUNTRY])) {
            $v = $this->getCountry();
            foreach($validationRules[self::FIELD_COUNTRY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADDRESS, self::FIELD_COUNTRY, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADDRESS, self::FIELD_PERIOD, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress
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
        } else if (!($type instanceof FHIRAddress)) {
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
            if (self::FIELD_USE === $childName) {
                $type->setUse(FHIRAddressUse::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TEXT === $childName) {
                $type->setText(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LINE === $childName) {
                $type->addLine(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CITY === $childName) {
                $type->setCity(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_STATE === $childName) {
                $type->setState(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ZIP === $childName) {
                $type->setZip(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_COUNTRY === $childName) {
                $type->setCountry(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PERIOD === $childName) {
                $type->setPeriod(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_TEXT])) {
            $pt = $type->getText();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TEXT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setText((string)$attributes[self::FIELD_TEXT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LINE])) {
            $type->addLine((string)$attributes[self::FIELD_LINE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CITY])) {
            $pt = $type->getCity();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CITY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setCity((string)$attributes[self::FIELD_CITY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_STATE])) {
            $pt = $type->getState();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_STATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setState((string)$attributes[self::FIELD_STATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ZIP])) {
            $pt = $type->getZip();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ZIP], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setZip((string)$attributes[self::FIELD_ZIP], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_COUNTRY])) {
            $pt = $type->getCountry();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_COUNTRY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setCountry((string)$attributes[self::FIELD_COUNTRY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'Address', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_TEXT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getText())) {
            $xw->writeAttribute(self::FIELD_TEXT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_LINE] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getLine())) {
            $xw->writeAttribute(self::FIELD_LINE, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getLine()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_LINE, $vs[$idx]->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_CITY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getCity())) {
            $xw->writeAttribute(self::FIELD_CITY, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_STATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getState())) {
            $xw->writeAttribute(self::FIELD_STATE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ZIP] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getZip())) {
            $xw->writeAttribute(self::FIELD_ZIP, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_COUNTRY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getCountry())) {
            $xw->writeAttribute(self::FIELD_COUNTRY, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getUse())) {
            $xw->startElement(self::FIELD_USE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_TEXT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getText())) {
            $xw->startElement(self::FIELD_TEXT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_LINE] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getLine())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_LINE);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_CITY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getCity())) {
            $xw->startElement(self::FIELD_CITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_STATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getState())) {
            $xw->startElement(self::FIELD_STATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ZIP] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getZip())) {
            $xw->startElement(self::FIELD_ZIP);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_COUNTRY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getCountry())) {
            $xw->startElement(self::FIELD_COUNTRY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPeriod())) {
            $xw->startElement(self::FIELD_PERIOD);
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
        if (null !== ($v = $this->getUse())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_USE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRAddressUse::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_USE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getText())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TEXT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TEXT_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getLine())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRString::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_LINE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LINE_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getCity())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CITY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CITY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getState())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getZip())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ZIP} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ZIP_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCountry())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_COUNTRY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_COUNTRY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            $out->{self::FIELD_PERIOD} = $v;
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