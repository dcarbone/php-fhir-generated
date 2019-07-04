<?php

namespace DCarbone\PHPFHIRGenerated;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 4th, 2019 21:57+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

/**
 * Class FHIRInstantPrimitive
 * @package \DCarbone\PHPFHIRGenerated
 */
class FHIRInstantPrimitive implements PHPFHIRTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_INSTANT_HYPHEN_PRIMITIVE;

    const FIELD_VALUE = 'value';

    /** @var null|string */
    private $value = null;

    /** @var null|\DateTime */
    private $dateTime = null;

    const VALUE_REGEX    = // language=RegExp
        '([0-9]([0-9]([0-9][1-9]|[1-9]0)|[1-9]00)|[1-9]000)-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])T([01][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)(\.[0-9]+)?(Z|(\+|-)((0[0-9]|1[0-3]):[0-5][0-9]|14:00))';
    const FORMAT_INSTANT = 'Y-m-d\\TH:i:s\\.uP';

    /**
     * FHIRInstantPrimitive Constructor
     * @param null| $value
     */
    public function __construct($value = null)
    {
        $this->setValue($value);
    }
    /**
     * @param null|string $value
     * @return \DCarbone\PHPFHIRGenerated\FHIRInstantPrimitive
     */
    public function setValue($value)
    {
        $this->dateTime = null;
        if (null === $value) {
            $this->value = null;
            return $this;
        }
        if (is_string($value)) {
            $this->value = $value;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf('Value must be null, string of proper format, or instance of \\DateTime, %s seen.', gettype($value)));
    }

    /**
     * @return null|\DateTime
     */
    public function getDateTime()
    {
        if (!isset($this->dateTime)) {
            $value = $this->getValue();
            if (null === $value) {
                return null;
            }
            if (!$this->isValid()) {
                throw new \DomainException(sprintf('Cannot convert "%s" to \\DateTime as it does not conform to "%s"', $value, self::VALUE_REGEX));
            }
            $parsed = \DateTime::createFromFormat(self::FORMAT_INSTANT, $value);
            if (false === $value) {
                throw new \DomainException(sprintf('Value "%s" could not be parsed as instant-primitive: %s', $value, implode(', ', \DateTime::getLastErrors())));
            }
            $this->dateTime = $parsed;
        }
        return $this->dateTime;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        $value = $this->getValue();
        return null === $value || preg_match('/' . self::VALUE_REGEX . '/', $value);
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return null|
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRInstantPrimitive $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRInstantPrimitive
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRInstantPrimitive::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRInstantPrimitive::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new static();
        } elseif (!is_object($type) || !($type instanceof FHIRInstantPrimitive)) {
            throw new \RuntimeException(sprintf(
                'FHIRInstantPrimitive::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRInstantPrimitive or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->value)) {
            return $type->setValue((string)$attributes->value);
        }
        if (isset($children->value)) {
            return $type->setValue((string)$children->value);
        }
        if ('' !== ($v = (string)$sxe)) {
            return $type->setValue($v);
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<instant_primitive xmlns="http://hl7.org/fhir"></instant_primitive>');
        }
        $sxe->addAttribute(self::FIELD_VALUE, (string)$this);
        return $sxe;
    }

    /**
     * @return null|string
     */
    public function jsonSerialize()
    {
        return $this->getValue();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->getValue();
    }
}