<?php

namespace PHPFHIRGenerated\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use PHPFHIRGenerated\FHIRElement;

/**
 * An address expressed using postal conventions (as opposed to GPS or other location definition formats).  This data type may be used to convey addresses for use in delivering mail as well as for visiting locations which might not be valid for mail delivery.  There are a variety of postal address formats defined around the world.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRAddress
 * @package PHPFHIRGenerated\FHIRElement
 */
class FHIRAddress extends FHIRElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Address';

    /**
     * The name of the city, town, village or other community or delivery center.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $city = null;

    /**
     * Country - a nation as commonly understood or generally accepted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $country = null;

    /**
     * The name of the administrative area (county).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $district = null;

    /**
     * This component contains the house number, apartment number, street name, street direction,  P.O. Box number, delivery hints, and similar address information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    private $line = [];

    /**
     * Time period when address was/is in use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $period = null;

    /**
     * A postal code designating a region defined by the postal service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $postalCode = null;

    /**
     * Sub-unit of a country with limited sovereignty in a federally organized country. A code may be used if codes are in common use (i.e. US 2 letter state codes).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $state = null;

    /**
     * A full text representation of the address.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $text = null;

    /**
     * Distinguishes between physical addresses (those you can visit) and mailing addresses (e.g. PO Boxes and care-of addresses). Most addresses are both.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddressType
     */
    private $type = null;

    /**
     * The purpose of this address.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddressUse
     */
    private $use = null;

    /**
     * FHIRAddress Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['city'])) {
                $value = $data['city'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRAddress::__construct - Property \"city\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setCity($value);
            }
            if (isset($data['country'])) {
                $value = $data['country'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRAddress::__construct - Property \"country\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setCountry($value);
            }
            if (isset($data['district'])) {
                $value = $data['district'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRAddress::__construct - Property \"district\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setDistrict($value);
            }
            if (isset($data['line'])) {
                $value = $data['line'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRString($v);
                        }  elseif (is_scalar($v)) {
                            $v = new FHIRString($v);
                        }
                        if (!($v instanceof FHIRString)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRAddress::__construct - Collection field \"line\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($v));
                        }
                        $this->addLine($v);
                    }
                }
            }
            if (isset($data['period'])) {
                $value = $data['period'];
                if (is_array($value)) {
                    $value = new FHIRPeriod($value);
                } 
                if (!($value instanceof FHIRPeriod)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRAddress::__construct - Property \"period\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPeriod or data to construct type, saw ".gettype($value));
                }
                $this->setPeriod($value);
            }
            if (isset($data['postalCode'])) {
                $value = $data['postalCode'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRAddress::__construct - Property \"postalCode\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setPostalCode($value);
            }
            if (isset($data['state'])) {
                $value = $data['state'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRAddress::__construct - Property \"state\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setState($value);
            }
            if (isset($data['text'])) {
                $value = $data['text'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRAddress::__construct - Property \"text\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setText($value);
            }
            if (isset($data['type'])) {
                $value = $data['type'];
                if (is_array($value)) {
                    $value = new FHIRAddressType($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRAddressType($value);
                }
                if (!($value instanceof FHIRAddressType)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRAddress::__construct - Property \"type\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAddressType or data to construct type, saw ".gettype($value));
                }
                $this->setType($value);
            }
            if (isset($data['use'])) {
                $value = $data['use'];
                if (is_array($value)) {
                    $value = new FHIRAddressUse($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRAddressUse($value);
                }
                if (!($value instanceof FHIRAddressUse)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRAddress::__construct - Property \"use\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAddressUse or data to construct type, saw ".gettype($value));
                }
                $this->setUse($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRAddress::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * The name of the city, town, village or other community or delivery center.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setCity($city)
    {
        if (null === $city) {
            return $this; 
        }
        if (is_scalar($city)) {
            $city = new FHIRString($city);
        }
        if (!($city instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAddress::setCity - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($city)
            ));
        }
        $this->city = $city;
        return $this;
    }

    /**
     * The name of the city, town, village or other community or delivery center.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Country - a nation as commonly understood or generally accepted.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setCountry($country)
    {
        if (null === $country) {
            return $this; 
        }
        if (is_scalar($country)) {
            $country = new FHIRString($country);
        }
        if (!($country instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAddress::setCountry - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($country)
            ));
        }
        $this->country = $country;
        return $this;
    }

    /**
     * Country - a nation as commonly understood or generally accepted.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * The name of the administrative area (county).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDistrict($district)
    {
        if (null === $district) {
            return $this; 
        }
        if (is_scalar($district)) {
            $district = new FHIRString($district);
        }
        if (!($district instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAddress::setDistrict - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($district)
            ));
        }
        $this->district = $district;
        return $this;
    }

    /**
     * The name of the administrative area (county).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * This component contains the house number, apartment number, street name, street direction,  P.O. Box number, delivery hints, and similar address information.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function addLine($line)
    {
        if (null === $line) {
            return $this; 
        }
        if (is_scalar($line)) {
            $line = new FHIRString($line);
        }
        if (!($line instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAddress::addLine - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($line)
            ));
        }
        $this->line[] = $line;
        return $this;
    }

    /**
     * This component contains the house number, apartment number, street name, street direction,  P.O. Box number, delivery hints, and similar address information.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Time period when address was/is in use.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        if (null === $period) {
            return $this; 
        }
        $this->period = $period;
        return $this;
    }

    /**
     * Time period when address was/is in use.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * A postal code designating a region defined by the postal service.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        if (null === $postalCode) {
            return $this; 
        }
        if (is_scalar($postalCode)) {
            $postalCode = new FHIRString($postalCode);
        }
        if (!($postalCode instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAddress::setPostalCode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($postalCode)
            ));
        }
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * A postal code designating a region defined by the postal service.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sub-unit of a country with limited sovereignty in a federally organized country. A code may be used if codes are in common use (i.e. US 2 letter state codes).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setState($state)
    {
        if (null === $state) {
            return $this; 
        }
        if (is_scalar($state)) {
            $state = new FHIRString($state);
        }
        if (!($state instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAddress::setState - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($state)
            ));
        }
        $this->state = $state;
        return $this;
    }

    /**
     * Sub-unit of a country with limited sovereignty in a federally organized country. A code may be used if codes are in common use (i.e. US 2 letter state codes).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * A full text representation of the address.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setText($text)
    {
        if (null === $text) {
            return $this; 
        }
        if (is_scalar($text)) {
            $text = new FHIRString($text);
        }
        if (!($text instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAddress::setText - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($text)
            ));
        }
        $this->text = $text;
        return $this;
    }

    /**
     * A full text representation of the address.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Distinguishes between physical addresses (those you can visit) and mailing addresses (e.g. PO Boxes and care-of addresses). Most addresses are both.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAddressType
     * @return $this
     */
    public function setType($type)
    {
        if (null === $type) {
            return $this; 
        }
        if (is_scalar($type)) {
            $type = new FHIRAddressType($type);
        }
        if (!($type instanceof FHIRAddressType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAddress::setType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRAddressType or appropriate scalar value, %s seen.',
                gettype($type)
            ));
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Distinguishes between physical addresses (those you can visit) and mailing addresses (e.g. PO Boxes and care-of addresses). Most addresses are both.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAddressType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The purpose of this address.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAddressUse
     * @return $this
     */
    public function setUse($use)
    {
        if (null === $use) {
            return $this; 
        }
        if (is_scalar($use)) {
            $use = new FHIRAddressUse($use);
        }
        if (!($use instanceof FHIRAddressUse)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAddress::setUse - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRAddressUse or appropriate scalar value, %s seen.',
                gettype($use)
            ));
        }
        $this->use = $use;
        return $this;
    }

    /**
     * The purpose of this address.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAddressUse
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCity())) {
            $a['city'] = $v;
        }
        if (null !== ($v = $this->getCountry())) {
            $a['country'] = $v;
        }
        if (null !== ($v = $this->getDistrict())) {
            $a['district'] = $v;
        }
        if (0 < count($values = $this->getLine())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['line'] = $vs;
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            $a['period'] = $v;
        }
        if (null !== ($v = $this->getPostalCode())) {
            $a['postalCode'] = $v;
        }
        if (null !== ($v = $this->getState())) {
            $a['state'] = $v;
        }
        if (null !== ($v = $this->getText())) {
            $a['text'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getUse())) {
            $a['use'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<Address xmlns="http://hl7.org/fhir"></Address>');
        }
        if (null !== ($v = $this->getCity())) {
            $v->xmlSerialize(true, $sxe->addChild('city'));
        }
        if (null !== ($v = $this->getCountry())) {
            $v->xmlSerialize(true, $sxe->addChild('country'));
        }
        if (null !== ($v = $this->getDistrict())) {
            $v->xmlSerialize(true, $sxe->addChild('district'));
        }
        if (0 < count($values = $this->getLine())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('line'));
                }
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize(true, $sxe->addChild('period'));
        }
        if (null !== ($v = $this->getPostalCode())) {
            $v->xmlSerialize(true, $sxe->addChild('postalCode'));
        }
        if (null !== ($v = $this->getState())) {
            $v->xmlSerialize(true, $sxe->addChild('state'));
        }
        if (null !== ($v = $this->getText())) {
            $v->xmlSerialize(true, $sxe->addChild('text'));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize(true, $sxe->addChild('type'));
        }
        if (null !== ($v = $this->getUse())) {
            $v->xmlSerialize(true, $sxe->addChild('use'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}