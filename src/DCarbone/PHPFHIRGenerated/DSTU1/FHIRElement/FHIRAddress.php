<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement;

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
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRAddress
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement
 */
class FHIRAddress extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ADDRESS;
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

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the city, town, village or other community or delivery center.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $city = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Country - a nation as commonly understood or generally accepted.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $country = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This component contains the house number, apartment number, street name, street
     * direction, P.O. Box number, delivery hints, and similar address information.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString[]
     */
    protected $line = [];

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Time period when address was/is in use.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    protected $period = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Sub-unit of a country with limited sovereignty in a federally organized country.
     * A code may be used if codes are in common use (i.e. US 2 letter state codes).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $state = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A full text representation of the address.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $text = null;

    /**
     * The use of an address
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The purpose of this address.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddressUse
     */
    protected $use = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A postal code designating a region defined by the postal service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $zip = null;

    /**
     * Validation map for fields in type Address
     * @var array
     */
    private static $_validationRules = [    ];

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
        if (isset($data[self::FIELD_CITY]) || isset($data[self::FIELD_CITY_EXT])) {
            if (isset($data[self::FIELD_CITY])) {
                $value = $data[self::FIELD_CITY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CITY_EXT]) && is_array($data[self::FIELD_CITY_EXT])) {
                $ext = $data[self::FIELD_CITY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCity($value);
                } else if (is_array($value)) {
                    $this->setCity(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCity(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCity(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_COUNTRY]) || isset($data[self::FIELD_COUNTRY_EXT])) {
            if (isset($data[self::FIELD_COUNTRY])) {
                $value = $data[self::FIELD_COUNTRY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_COUNTRY_EXT]) && is_array($data[self::FIELD_COUNTRY_EXT])) {
                $ext = $data[self::FIELD_COUNTRY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCountry($value);
                } else if (is_array($value)) {
                    $this->setCountry(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCountry(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCountry(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_LINE]) || isset($data[self::FIELD_LINE_EXT])) {
            if (isset($data[self::FIELD_LINE])) {
                $value = $data[self::FIELD_LINE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LINE_EXT]) && is_array($data[self::FIELD_LINE_EXT])) {
                $ext = $data[self::FIELD_LINE_EXT];
            } else {
                $ext = [];
            }
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
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addLine(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_PERIOD])) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_STATE]) || isset($data[self::FIELD_STATE_EXT])) {
            if (isset($data[self::FIELD_STATE])) {
                $value = $data[self::FIELD_STATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STATE_EXT]) && is_array($data[self::FIELD_STATE_EXT])) {
                $ext = $data[self::FIELD_STATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setState($value);
                } else if (is_array($value)) {
                    $this->setState(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setState(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setState(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_TEXT]) || isset($data[self::FIELD_TEXT_EXT])) {
            if (isset($data[self::FIELD_TEXT])) {
                $value = $data[self::FIELD_TEXT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TEXT_EXT]) && is_array($data[self::FIELD_TEXT_EXT])) {
                $ext = $data[self::FIELD_TEXT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setText($value);
                } else if (is_array($value)) {
                    $this->setText(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setText(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setText(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_USE]) || isset($data[self::FIELD_USE_EXT])) {
            if (isset($data[self::FIELD_USE])) {
                $value = $data[self::FIELD_USE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_USE_EXT]) && is_array($data[self::FIELD_USE_EXT])) {
                $ext = $data[self::FIELD_USE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRAddressUse) {
                    $this->setUse($value);
                } else if (is_array($value)) {
                    $this->setUse(new FHIRAddressUse(array_merge($ext, $value)));
                } else {
                    $this->setUse(new FHIRAddressUse([FHIRAddressUse::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setUse(new FHIRAddressUse($ext));
            }
        }
        if (isset($data[self::FIELD_ZIP]) || isset($data[self::FIELD_ZIP_EXT])) {
            if (isset($data[self::FIELD_ZIP])) {
                $value = $data[self::FIELD_ZIP];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ZIP_EXT]) && is_array($data[self::FIELD_ZIP_EXT])) {
                $ext = $data[self::FIELD_ZIP_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setZip($value);
                } else if (is_array($value)) {
                    $this->setZip(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setZip(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setZip(new FHIRString($ext));
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
        return "<Address{$xmlns}></Address>";
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the city, town, village or other community or delivery center.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $city
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Country - a nation as commonly understood or generally accepted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $country
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This component contains the house number, apartment number, street name, street
     * direction, P.O. Box number, delivery hints, and similar address information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $line
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This component contains the house number, apartment number, street name, street
     * direction, P.O. Box number, delivery hints, and similar address information.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString[] $line
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Time period when address was/is in use.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod $period
     * @return static
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        $this->period = $period;
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
    public function getState()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $state
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A full text representation of the address.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $text
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The purpose of this address.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddressUse $use
     * @return static
     */
    public function setUse(FHIRAddressUse $use = null)
    {
        $this->use = $use;
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
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A postal code designating a region defined by the postal service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $zip
     * @return static
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
        if (null !== ($v = $this->getCity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCountry())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COUNTRY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getLine())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LINE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getState())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getText())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEXT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUse())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_USE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getZip())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ZIP] = $fieldErrs;
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
        if (isset($children->city)) {
            $type->setCity(FHIRString::xmlUnserialize($children->city));
        }
        if (isset($attributes->city)) {
            $pt = $type->getCity();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->city);
            } else {
                $type->setCity((string)$attributes->city);
            }
        }
        if (isset($children->country)) {
            $type->setCountry(FHIRString::xmlUnserialize($children->country));
        }
        if (isset($attributes->country)) {
            $pt = $type->getCountry();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->country);
            } else {
                $type->setCountry((string)$attributes->country);
            }
        }
        if (isset($children->line)) {
            foreach($children->line as $child) {
                $type->addLine(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->period)) {
            $type->setPeriod(FHIRPeriod::xmlUnserialize($children->period));
        }
        if (isset($children->state)) {
            $type->setState(FHIRString::xmlUnserialize($children->state));
        }
        if (isset($attributes->state)) {
            $pt = $type->getState();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->state);
            } else {
                $type->setState((string)$attributes->state);
            }
        }
        if (isset($children->text)) {
            $type->setText(FHIRString::xmlUnserialize($children->text));
        }
        if (isset($attributes->text)) {
            $pt = $type->getText();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->text);
            } else {
                $type->setText((string)$attributes->text);
            }
        }
        if (isset($children->use)) {
            $type->setUse(FHIRAddressUse::xmlUnserialize($children->use));
        }
        if (isset($children->zip)) {
            $type->setZip(FHIRString::xmlUnserialize($children->zip));
        }
        if (isset($attributes->zip)) {
            $pt = $type->getZip();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->zip);
            } else {
                $type->setZip((string)$attributes->zip);
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
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_CITY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getCountry())) {
            $a[self::FIELD_COUNTRY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_COUNTRY_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getLine())) {
            $a[self::FIELD_LINE] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_LINE][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRString::FIELD_VALUE]) || array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRString::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_LINE_EXT] = $encs;
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = $v;
        }
        if (null !== ($v = $this->getState())) {
            $a[self::FIELD_STATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_STATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getText())) {
            $a[self::FIELD_TEXT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_TEXT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getUse())) {
            $a[self::FIELD_USE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRAddressUse::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRAddressUse::FIELD_VALUE]);
                $a[self::FIELD_USE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getZip())) {
            $a[self::FIELD_ZIP] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_ZIP_EXT] = $enc;
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