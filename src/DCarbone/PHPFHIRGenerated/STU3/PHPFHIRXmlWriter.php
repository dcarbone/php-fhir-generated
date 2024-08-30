<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\STU3;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 30th, 2024 22:23+0000
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
 * Fhir Xml Writer
 *
 * Class PHPFHIRXmlWriter
 * @package \DCarbone\PHPFHIRGenerated\STU3
 */
class PHPFHIRXmlWriter extends \XMLWriter
{
    private const MEM = 'memory';

    /** @var bool */
    private bool $_docStarted = false;
    /** @var bool */
    private bool $_rootOpen = false;
    /** @var null|string */
    private null|string $_open = null;

    /**
     * @see https://www.php.net/manual/en/xmlwriter.openmemory.php
     *
     * @return bool
     */
    public function openMemory(): bool
    {
        $this->_open = self::MEM;
        return parent::openMemory();
    }

    /**
     * @see https://www.php.net/manual/en/xmlwriter.openuri.php
     *
     * @param string $uri
     * @return bool
     */
    public function openUri(string $uri): bool
    {
        $this->_open = $uri;
        return parent::openUri($uri);
    }

    /**
     * @return bool
     */
    public function isOpen(): bool
    {
        return null !== $this->_open;
    }

    /**
     * Returns the destination of writes made by this class.  Value will be "null" if not opened, "memory" if writing
     * opened with "openMemory()", or the $uri provided to "openUri()"
     *
     * @return null|string
     */
    public function getWriteDestination(): null|string
    {
        return $this->_open;
    }

    /**
     * Used to track whether the document has been started
     *
     * @return bool
     */
    public function isDocStarted(): bool
    {
        return $this->_docStarted;
    }

    /**
     * @see https://www.php.net/manual/en/xmlwriter.startdocument.php
     *
     * @param null|string $version
     * @param null|string $encoding
     * @param null|string $standalone
     * @return bool
     */
    public function startDocument(null|string $version = '1.0', null|string $encoding = 'UTF-8', null|string $standalone = 'yes'): bool
    {
        $this->_docStarted = true;
        return parent::startDocument($version, $encoding, $standalone);
    }

    /**
     * @see https://www.php.net/manual/en/xmlwriter.startattribute.php
     *
     * @param string $name Attribute name
     * @param string $value Attribute value
     * @return bool
     */
    public function writeAttribute(string $name, string $value): bool
    {
        return $this->startAttribute($name)
            && $this->text($value)
            && $this->endAttribute();
    }

    /**
     * Write a complete element with a text value
     *
     * @param string $name Element name
     * @param string $value Element text value
     * @return bool
     */
    public function writeSimpleElement(string $name, string $value): bool
    {
        return $this->startElement($name)
            && $this->text($value)
            && $this->endElement();
    }

    /**
     * @return bool
     */
    public function isRootOpen(): bool
    {
        return $this->_rootOpen;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config
     * @param string $name
     * @param string|null $sourceXmlns
     * @return bool
     */
    public function openRootNode(PHPFHIRConfig $config, string $name, null|string $sourceXmlns): bool
    {
        $ok = $this->startElement($name);
        if (!$ok) {
            return false;
        }
        if ($config->getOverrideSourceXmlns() || null === $sourceXmlns) {
            $ns = (string)$config->getRootXmlns();
        } else {
            $ns = $sourceXmlns;
        }
        if ('' !== $ns) {
            $ok = $this->writeAttribute('xmlns', $ns);
            if (!$ok) {
                return false;
            }
        }
        $this->_rootOpen = true;
        return true;
    }
}
