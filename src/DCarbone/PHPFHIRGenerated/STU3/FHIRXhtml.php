<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\STU3;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:25+0000
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

/**
 * XHTML type used in special cases
 *
 * Class FHIRXhtml
 * @package \DCarbone\PHPFHIRGenerated\STU3
 */
class FHIRXhtml implements PHPFHIRTypeInterface
{
    use PHPFHIRChangeTrackingTrait,
        PHPFHIRValidationAssertionsTrait,
        PHPFHIRSourceXmlNamespaceTrait;

    /** @var null|string */
    private null|string $_xhtml = null;

    /**
     * Xhtml Constructor
     * @param null|string|\DOMNode|\SimpleXMLElement $xhtml
     */
    public function __construct(null|string|\DOMNode|\SimpleXmlElement $xhtml = null)
    {
        $this->setXhtml($xhtml);
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return 'Xhtml';
    }

    /**
     * @return array
     */
    public function _getValidationRules(): array
    {
        return [];
    }

    /**
     * @return array
     */
    public function _getValidationErrors(): array
    {
        return [];
    }

    /**
     * @return null|string
     */
    public function getXhtml(): null|string
    {
        return $this->_xhtml;
    }

    /**
     * @param null|string|\DOMNode|\SimpleXmlElement $xhtml
     * @return static
     */
    public function setXhtml(null|string|\DOMNode|\SimpleXMLElement $xhtml): self
    {
        if (null === $xhtml) {
            $this->_trackValueSet($this->_xhtml, null);
            $this->_xhtml = null;
            return $this;
        }
        if ($xhtml instanceof \DOMDocument) {
            $xhtml = $xhtml->saveXML($xhtml->documentElement);
        } else if ($xhtml instanceof \DOMNode) {
            $xhtml = $xhtml->ownerDocument->saveXML($xhtml);
        } else if ($xhtml instanceof \SimpleXMLElement) {
            $xhtml = $xhtml->asXML();
        }
        $this->_trackValueSet($this->_xhtml, $xhtml);
        $this->_xhtml = $xhtml;
        return $this;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config
     * @return null|\SimpleXMLElement
     * @throws \Exception
     */
    public function getSimpleXMLElement(null|PHPFHIRConfig $config = null): null|\SimpleXMLElement
    {
        $xhtml = $this->getXhtml();
        if (null === $xhtml) {
            return null;
        }
        if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        return new \SimpleXMLElement($xhtml, $config->getLibxmlOpts());
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config
     * @return null|\DOMDocument
     */
    public function getDOMDocument(null|PHPFHIRConfig $config = null): null|\DOMDocument
    {
        $xhtml = $this->getXhtml();
        if (null === $xhtml) {
            return null;
        }
        if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        $dom = new \DOMDocument('1.0', 'UTF-8');
        $dom->loadXML($xhtml, $config->getLibxmlOpts());
        return $dom;
    }

    /**
     * Returns open \XMLReader instance with content read
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config
     * @return null|\XMLReader
     */
    public function getXMLReader(null|PHPFHIRConfig $config = null): null|\XMLReader
    {
        $xhtml = $this->getXhtml();
        if (null === $xhtml) {
            return null;
        }
        if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        $xr = \XMLReader::XML($xhtml, 'UTF-8', $config->getLibxmlOpts());
        $xr->read();
        return $xr;
    }

    /**
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRXhtml $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRXhtml
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
        } else if (!($type instanceof FHIRXhtml)) {
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
        $type->setXhtml($element);
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter
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
            $rootOpened = true;
            $xw->openRootNode($config, 'Xhtml', $this->_getSourceXmlns());
        }
        $xr = $this->getXMLReader($config);
        if (null === $xr) {
            return $xw;
        }
        while ($xr->moveToNextAttribute()) {
            $xw->writeAttribute($xr->name, $xr->value);
        }
        $xw->writeRaw($xr->readInnerXml());
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize(): mixed
    {
        $xhtml = $this->getXhtml();
        if (null === $xhtml) {
            return null;
        }
        return (string)$xhtml;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (string)$this->getXhtml();
    }
}