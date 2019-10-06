<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:04+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIROidPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * An OID represented as a URI
 * RFC 3001. See also ISO/IEC 8824:1990 €
 * If the element is present, it must have either a @value, an @id referenced from
 * the Narrative, or extensions
 *
 * Class FHIROid
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement
 */
class FHIROid extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_OID;

    const FIELD_VALUE = 'value';

    /**
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIROidPrimitive
     */
    private $value = null;

    /**
     * FHIROid Constructor
     * @param null|array|string|\DCarbone\PHPFHIRGenerated\STU3\FHIROidPrimitive $data
     */
    public function __construct($data = null)
    {
        if (null === $data) {
            return;
        }
        if ($data instanceof FHIROidPrimitive) {
            $this->setValue($data);
            return;
        }
        if (is_scalar($data)) {
            $this->setValue(new FHIROidPrimitive($data));
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                '$data must be null, string, instance of \DCarbone\PHPFHIRGenerated\STU3\FHIROidPrimitive, or array.  %s seen.',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_VALUE])) {
            $this->setValue($data[self::FIELD_VALUE]);
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIROidPrimitive
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIROidPrimitive $value
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid
     */
    public function setValue($value = null)
    {
        if (null === $value) {
            $this->value = null;
            return $this;
        }
        if ($value instanceof FHIROidPrimitive) {
            $this->value = $value;
            return $this;
        }
        $this->value = new FHIROidPrimitive($value);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid $type
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid
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
                throw new \DomainException(sprintf('FHIROid::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIROid::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRElement::xmlUnserialize($sxe, new FHIROid);
        } elseif (!is_object($type) || !($type instanceof FHIROid)) {
            throw new \RuntimeException(sprintf(
                'FHIROid::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid or null, %s seen.',
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
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<oid xmlns="http://hl7.org/fhir"></oid>');
        }
        parent::xmlSerialize($sxe);
        $sxe->addAttribute(self::FIELD_VALUE, (string)$this);
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getValue())) {
            $a[self::FIELD_VALUE] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->getValue();
    }
}