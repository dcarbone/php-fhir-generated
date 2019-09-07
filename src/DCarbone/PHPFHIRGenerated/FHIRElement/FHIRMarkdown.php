<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 7th, 2019 20:23+0000
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

use DCarbone\PHPFHIRGenerated\FHIRElement;
use DCarbone\PHPFHIRGenerated\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * A string that may contain Github Flavored Markdown syntax for optional
 * processing by a mark down presentation engine
 * Systems are not required to have markdown support, so the text should be
 * readable without markdown processing. The markdown syntax is GFM - see
 * https://github.github.com/gfm/
 * If the element is present, it must have either a @value, an @id referenced from
 * the Narrative, or extensions
 *
 * Class FHIRMarkdown
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement
 */
class FHIRMarkdown extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MARKDOWN;

    const FIELD_VALUE = 'value';

    /**
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRMarkdownPrimitive
     */
    private $value = null;

    /**
     * FHIRMarkdown Constructor
     * @param null|array|string|\DCarbone\PHPFHIRGenerated\FHIRMarkdownPrimitive $data
     */
    public function __construct($data = null)
    {
        if (null === $data) {
            return;
        }
        if ($data instanceof FHIRMarkdownPrimitive) {
            $this->setValue($data);
            return;
        }
        if (is_scalar($data)) {
            $this->setValue(new FHIRMarkdownPrimitive($data));
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                '$data must be null, string, instance of \DCarbone\PHPFHIRGenerated\FHIRMarkdownPrimitive, or array.  %s seen.',
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
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRMarkdownPrimitive
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRMarkdownPrimitive $value
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function setValue($value = null)
    {
        if (null === $value) {
            $this->value = null;
            return $this;
        }
        if ($value instanceof FHIRMarkdownPrimitive) {
            $this->value = $value;
            return $this;
        }
        $this->value = new FHIRMarkdownPrimitive($value);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
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
                throw new \DomainException(sprintf('FHIRMarkdown::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMarkdown::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRElement::xmlUnserialize($sxe, new FHIRMarkdown);
        } elseif (!is_object($type) || !($type instanceof FHIRMarkdown)) {
            throw new \RuntimeException(sprintf(
                'FHIRMarkdown::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown or null, %s seen.',
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
            $sxe = new \SimpleXMLElement('<markdown xmlns="http://hl7.org/fhir"></markdown>');
        }
        parent::xmlSerialize(true, $sxe);
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