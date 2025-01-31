<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 23:45+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 */


class FHIRXHTML implements \JsonSerializable
{
    /** @var string */
    private string $_xhtml;

    /**
     * FHIRXHTML Constructor
     * @param null|string|\DOMNode|\SimpleXMLElement $xhtml
     */
    public function __construct(null|string|\DOMNode|\SimpleXmlElement $xhtml = null)
    {
        $this->setXHTML($xhtml);
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return 'XHTML';
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
    public function getXHTML(): null|string
    {
        return $this->_xhtml ?? null;
    }

    /**
     * Set the full XHTML content of this element.
     *
     * @param null|string|\DOMNode|\SimpleXmlElement $xhtml
     * @return static
     */
    public function setXHTML(null|string|\DOMNode|\SimpleXMLElement $xhtml): self
    {
        if (null === $xhtml) {
            unset($this->_xhtml);
            return $this;
        }
        if ($xhtml instanceof \DOMDocument) {
            $xhtml = $xhtml->saveXML($xhtml->documentElement);
        } else if ($xhtml instanceof \DOMNode) {
            $xhtml = $xhtml->ownerDocument->saveXML($xhtml);
        } else if ($xhtml instanceof \SimpleXMLElement) {
            $xhtml = $xhtml->asXML();
        }
        $this->_xhtml = $xhtml;
        return $this;
    }

    /**
     * @param int $libxmlOpts libxml options mask
     * @return null|\SimpleXMLElement
     * @throws \Exception
     */
    public function getSimpleXMLElement(int $libxmlOpts): null|\SimpleXMLElement
    {
        if (!isset($this->_xhtml)) {
            return null;
        }
        return new \SimpleXMLElement($this->_xhtml, $libxmlOpts);
    }

    /**
     * @param int $libxmlOpts libxml options mask
     * @return null|\DOMDocument
     */
    public function getDOMDocument(int $libxmlOpts): null|\DOMDocument
    {
        if (!isset($this->_xhtml)) {
            return null;
        }
        $dom = new \DOMDocument('1.0', 'UTF-8');
        $dom->loadXML($this->_xhtml, $libxmlOpts);
        return $dom;
    }

    /**
     * @param int $libxmlOpts libxml options mask
     * @return null|\XMLReader
     */
    public function getXMLReader(int $libxmlOpts): null|\XMLReader
    {
        if (!isset($this->_xhtml)) {
            return null;
        }
        $xr = \XMLReader::XML($this->_xhtml, 'UTF-8', $libxmlOpts);
        $xr->read();
        return $xr;
    }

    /**
     * @return null|string
     */
    public function jsonSerialize(): null|string
    {
        if (!isset($this->_xhtml)) {
            return null;
        }
        return $this->_xhtml;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (string)$this->getXHTML();
    }
}
