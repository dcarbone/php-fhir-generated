<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:04+0000
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
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * There is a variety of postal address formats defined around the world. This
 * format defines a superset that is the basis for all addresses around the world.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRAddress
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement
 */
class FHIRAddress extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ADDRESS;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_CITY = 'city';
    const FIELD_CITY_EXT = '_city';
    const FIELD_COUNTRY = 'country';
    const FIELD_COUNTRY_EXT = '_country';
    const FIELD_LINE = 'line';
    const FIELD_LINE_EXT = '_line';
    const FIELD_PERIOD = 'period';
    const FIELD_STATE = 'state';
    const FIELD_STATE_EXT = '_state';
    const FIELD_TEXT = 'text';
    const FIELD_TEXT_EXT = '_text';
    const FIELD_USE = 'use';
    const FIELD_USE_EXT = '_use';
    const FIELD_ZIP = 'zip';
    const FIELD_ZIP_EXT = '_zip';

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the city, town, village or other community or delivery center.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $city = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Country - a nation as commonly understood or generally accepted.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $country = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * This component contains the house number, apartment number, street name, street
     * direction, P.O. Box number, delivery hints, and similar address information.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString[]
     */
    private $line = [];
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Time period when address was/is in use.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    private $period = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Sub-unit of a country with limited sovereignty in a federally organized country.
     * A code may be used if codes are in common use (i.e. US 2 letter state codes).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $state = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A full text representation of the address.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $text = null;
    /**
     * The use of an address
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The purpose of this address.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddressUse
     */
    private $use = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A postal code designating a region defined by the postal service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $zip = null;

    /**
     * FHIRAddress Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAddress::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CITY])) {
            $ext = (isset($data[self::FIELD_CITY_EXT]) && is_array($data[self::FIELD_CITY_EXT]))
                ? $data[self::FIELD_CITY_EXT]
                : null;
            if ($data[self::FIELD_CITY] instanceof FHIRString) {
                $this->setCity($data[self::FIELD_CITY]);
            } elseif ($ext && is_scalar($data[self::FIELD_CITY])) {
                $this->setCity(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_CITY]] + $ext));
            } else {
                $this->setCity(new FHIRString($data[self::FIELD_CITY]));
            }
        }
        if (isset($data[self::FIELD_COUNTRY])) {
            $ext = (isset($data[self::FIELD_COUNTRY_EXT]) && is_array($data[self::FIELD_COUNTRY_EXT]))
                ? $data[self::FIELD_COUNTRY_EXT]
                : null;
            if ($data[self::FIELD_COUNTRY] instanceof FHIRString) {
                $this->setCountry($data[self::FIELD_COUNTRY]);
            } elseif ($ext && is_scalar($data[self::FIELD_COUNTRY])) {
                $this->setCountry(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_COUNTRY]] + $ext));
            } else {
                $this->setCountry(new FHIRString($data[self::FIELD_COUNTRY]));
            }
        }
        if (isset($data[self::FIELD_LINE])) {
            $ext = (isset($data[self::FIELD_LINE_EXT]) && is_array($data[self::FIELD_LINE_EXT]))
                ? $data[self::FIELD_LINE_EXT]
                : null;
            if (is_array($data[self::FIELD_LINE])) {
                foreach($data[self::FIELD_LINE] as $i => $v) {
                    if ($v instanceof FHIRString) {
                        $this->addLine($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addLine(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addLine(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_LINE] instanceof FHIRString) {
                $this->addLine($data[self::FIELD_LINE]);
            } elseif ($ext && is_scalar($data[self::FIELD_LINE])) {
                $this->addLine(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_LINE]] + $ext));
            } else {
                $this->addLine(new FHIRString($data[self::FIELD_LINE]));
            }
        }
        if (isset($data[self::FIELD_PERIOD])) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_STATE])) {
            $ext = (isset($data[self::FIELD_STATE_EXT]) && is_array($data[self::FIELD_STATE_EXT]))
                ? $data[self::FIELD_STATE_EXT]
                : null;
            if ($data[self::FIELD_STATE] instanceof FHIRString) {
                $this->setState($data[self::FIELD_STATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_STATE])) {
                $this->setState(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_STATE]] + $ext));
            } else {
                $this->setState(new FHIRString($data[self::FIELD_STATE]));
            }
        }
        if (isset($data[self::FIELD_TEXT])) {
            $ext = (isset($data[self::FIELD_TEXT_EXT]) && is_array($data[self::FIELD_TEXT_EXT]))
                ? $data[self::FIELD_TEXT_EXT]
                : null;
            if ($data[self::FIELD_TEXT] instanceof FHIRString) {
                $this->setText($data[self::FIELD_TEXT]);
            } elseif ($ext && is_scalar($data[self::FIELD_TEXT])) {
                $this->setText(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_TEXT]] + $ext));
            } else {
                $this->setText(new FHIRString($data[self::FIELD_TEXT]));
            }
        }
        if (isset($data[self::FIELD_USE])) {
            $ext = (isset($data[self::FIELD_USE_EXT]) && is_array($data[self::FIELD_USE_EXT]))
                ? $data[self::FIELD_USE_EXT]
                : null;
            if ($data[self::FIELD_USE] instanceof FHIRAddressUse) {
                $this->setUse($data[self::FIELD_USE]);
            } elseif ($ext && is_scalar($data[self::FIELD_USE])) {
                $this->setUse(new FHIRAddressUse([FHIRAddressUse::FIELD_VALUE => $data[self::FIELD_USE]] + $ext));
            } else {
                $this->setUse(new FHIRAddressUse($data[self::FIELD_USE]));
            }
        }
        if (isset($data[self::FIELD_ZIP])) {
            $ext = (isset($data[self::FIELD_ZIP_EXT]) && is_array($data[self::FIELD_ZIP_EXT]))
                ? $data[self::FIELD_ZIP_EXT]
                : null;
            if ($data[self::FIELD_ZIP] instanceof FHIRString) {
                $this->setZip($data[self::FIELD_ZIP]);
            } elseif ($ext && is_scalar($data[self::FIELD_ZIP])) {
                $this->setZip(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_ZIP]] + $ext));
            } else {
                $this->setZip(new FHIRString($data[self::FIELD_ZIP]));
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
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
        return "<Address{$xmlns}></Address>";
    }


    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the city, town, village or other community or delivery center.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the city, town, village or other community or delivery center.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $city
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress
     */
    public function setCity($city = null)
    {
        if (null === $city) {
            $this->city = null;
            return $this;
        }
        if ($city instanceof FHIRString) {
            $this->city = $city;
            return $this;
        }
        $this->city = new FHIRString($city);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Country - a nation as commonly understood or generally accepted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Country - a nation as commonly understood or generally accepted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $country
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress
     */
    public function setCountry($country = null)
    {
        if (null === $country) {
            $this->country = null;
            return $this;
        }
        if ($country instanceof FHIRString) {
            $this->country = $country;
            return $this;
        }
        $this->country = new FHIRString($country);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * This component contains the house number, apartment number, street name, street
     * direction, P.O. Box number, delivery hints, and similar address information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString[]
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * This component contains the house number, apartment number, street name, street
     * direction, P.O. Box number, delivery hints, and similar address information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $line
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress
     */
    public function addLine($line = null)
    {
        if (null === $line) {
            $this->line = [];
            return $this;
        }
        if ($line instanceof FHIRString) {
            $this->line[] = $line;
            return $this;
        }
        $this->line[] = new FHIRString($line);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * This component contains the house number, apartment number, street name, street
     * direction, P.O. Box number, delivery hints, and similar address information.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString[] $line
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress
     */
    public function setLine(array $line = [])
    {
        $this->line = [];
        if ([] === $line) {
            return $this;
        }
        foreach($line as $v) {
            if ($v instanceof FHIRString) {
                $this->addLine($v);
            } else {
                $this->addLine(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Time period when address was/is in use.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Time period when address was/is in use.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod $period
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Sub-unit of a country with limited sovereignty in a federally organized country.
     * A code may be used if codes are in common use (i.e. US 2 letter state codes).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Sub-unit of a country with limited sovereignty in a federally organized country.
     * A code may be used if codes are in common use (i.e. US 2 letter state codes).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $state
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress
     */
    public function setState($state = null)
    {
        if (null === $state) {
            $this->state = null;
            return $this;
        }
        if ($state instanceof FHIRString) {
            $this->state = $state;
            return $this;
        }
        $this->state = new FHIRString($state);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A full text representation of the address.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A full text representation of the address.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $text
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress
     */
    public function setText($text = null)
    {
        if (null === $text) {
            $this->text = null;
            return $this;
        }
        if ($text instanceof FHIRString) {
            $this->text = $text;
            return $this;
        }
        $this->text = new FHIRString($text);
        return $this;
    }

    /**
     * The use of an address
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The purpose of this address.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddressUse
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * The use of an address
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The purpose of this address.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddressUse $use
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress
     */
    public function setUse(FHIRAddressUse $use = null)
    {
        $this->use = $use;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A postal code designating a region defined by the postal service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A postal code designating a region defined by the postal service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $zip
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress
     */
    public function setZip($zip = null)
    {
        if (null === $zip) {
            $this->zip = null;
            return $this;
        }
        if ($zip instanceof FHIRString) {
            $this->zip = $zip;
            return $this;
        }
        $this->zip = new FHIRString($zip);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress
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
                throw new \DomainException(sprintf('FHIRAddress::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRAddress::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRAddress;
        } elseif (!is_object($type) || !($type instanceof FHIRAddress)) {
            throw new \RuntimeException(sprintf(
                'FHIRAddress::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress or null, %s seen.',
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
        if (isset($attributes->city)) {
            $type->setCity((string)$attributes->city);
        }
        if (isset($children->city)) {
            $type->setCity(FHIRString::xmlUnserialize($children->city));
        }
        if (isset($attributes->country)) {
            $type->setCountry((string)$attributes->country);
        }
        if (isset($children->country)) {
            $type->setCountry(FHIRString::xmlUnserialize($children->country));
        }
        if (isset($attributes->line)) {
            $type->addLine((string)$attributes->line);
        }
        if (isset($children->line)) {
            foreach($children->line as $child) {
                $type->addLine(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->period)) {
            $type->setPeriod(FHIRPeriod::xmlUnserialize($children->period));
        }
        if (isset($attributes->state)) {
            $type->setState((string)$attributes->state);
        }
        if (isset($children->state)) {
            $type->setState(FHIRString::xmlUnserialize($children->state));
        }
        if (isset($attributes->text)) {
            $type->setText((string)$attributes->text);
        }
        if (isset($children->text)) {
            $type->setText(FHIRString::xmlUnserialize($children->text));
        }
        if (isset($children->use)) {
            $type->setUse(FHIRAddressUse::xmlUnserialize($children->use));
        }
        if (isset($attributes->zip)) {
            $type->setZip((string)$attributes->zip);
        }
        if (isset($children->zip)) {
            $type->setZip(FHIRString::xmlUnserialize($children->zip));
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
        if (null !== ($v = $this->getCity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCountry())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COUNTRY, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getLine())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LINE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getState())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getText())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TEXT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUse())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_USE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getZip())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ZIP, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCity())) {
            $a[self::FIELD_CITY] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_CITY_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getCountry())) {
            $a[self::FIELD_COUNTRY] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_COUNTRY_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getLine())) {
            $a[self::FIELD_LINE] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_LINE][] = $v->getValue();
                if ($v->_hasNonValueFieldsDefined()) {
                    if (!isset($a[self::FIELD_LINE_EXT])) {
                        $a[self::FIELD_LINE_EXT] = [];
                    }
                    $a[self::FIELD_LINE_EXT][] = $v;
                }
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = $v;
        }
        if (null !== ($v = $this->getState())) {
            $a[self::FIELD_STATE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_STATE_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getText())) {
            $a[self::FIELD_TEXT] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_TEXT_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getUse())) {
            $a[self::FIELD_USE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_USE_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getZip())) {
            $a[self::FIELD_ZIP] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_ZIP_EXT] = $v;
            }
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