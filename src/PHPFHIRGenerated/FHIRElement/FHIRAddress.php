<?php

namespace PHPFHIRGenerated\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
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
     * The name of the city, town, suburb, village or other community or delivery center.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $city = null;

    /**
     * Country - a nation as commonly understood or generally accepted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $country = null;

    /**
     * The name of the administrative area (county).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $district = null;

    /**
     * This component contains the house number, apartment number, street name, street direction,  P.O. Box number, delivery hints, and similar address information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $line = null;

    /**
     * Time period when address was/is in use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * A postal code designating a region defined by the postal service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $postalCode = null;

    /**
     * Sub-unit of a country with limited sovereignty in a federally organized country. A code may be used if codes are in common use (e.g. US 2 letter state codes).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $state = null;

    /**
     * Specifies the entire address as it should be displayed e.g. on a postal label. This may be provided instead of or as well as the specific parts.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $text = null;

    /**
     * Distinguishes between physical addresses (those you can visit) and mailing addresses (e.g. PO Boxes and care-of addresses). Most addresses are both.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddressType
     */
    public $type = null;

    /**
     * The purpose of this address.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddressUse
     */
    public $use = null;

    /**
     * FHIRAddress Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['city'])) {
                $this->setCity($data['city']);
            }
            if (isset($data['country'])) {
                $this->setCountry($data['country']);
            }
            if (isset($data['district'])) {
                $this->setDistrict($data['district']);
            }
            if (isset($data['line'])) {
                $this->setLine($data['line']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['postalCode'])) {
                $this->setPostalCode($data['postalCode']);
            }
            if (isset($data['state'])) {
                $this->setState($data['state']);
            }
            if (isset($data['text'])) {
                $this->setText($data['text']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['use'])) {
                $this->setUse($data['use']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRAddress::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The name of the city, town, suburb, village or other community or delivery center.
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
     * The name of the city, town, suburb, village or other community or delivery center.
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
    public function setLine($line)
    {
        if (null === $line) {
            return $this; 
        }
        if (is_scalar($line)) {
            $line = new FHIRString($line);
        }
        if (!($line instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAddress::setLine - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($line)
            ));
        }
        $this->line = $line;
        return $this;
    }

    /**
     * This component contains the house number, apartment number, street name, street direction,  P.O. Box number, delivery hints, and similar address information.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
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
     * Sub-unit of a country with limited sovereignty in a federally organized country. A code may be used if codes are in common use (e.g. US 2 letter state codes).
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
     * Sub-unit of a country with limited sovereignty in a federally organized country. A code may be used if codes are in common use (e.g. US 2 letter state codes).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getState()
    {
        return $this->state;
    }


    /**
     * Specifies the entire address as it should be displayed e.g. on a postal label. This may be provided instead of or as well as the specific parts.
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
     * Specifies the entire address as it should be displayed e.g. on a postal label. This may be provided instead of or as well as the specific parts.
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
        if (null !== ($v = $this->getLine())) {
            $a['line'] = $v;
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
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}