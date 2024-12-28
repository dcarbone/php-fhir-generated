<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:13+0000
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
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRRaw;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * A human-readable formatted text, including images.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRNarrative
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement
 */
class FHIRNarrative extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_NARRATIVE;
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_DIV = 'div';

    /** @var string */
    private $_xmlns = '';

    /**
     * The status of a resource narrative
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the narrative - whether it's entirely generated (from just the
     * defined data or the extensions too), or whether a human authored it and it may
     * contain additional data.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRNarrativeStatus
     */
    protected $status = null;

    /**
     * Raw type used in special cases
     *
     * The actual narrative content, a stripped down version of XHTML.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRRaw
     */
    protected $div = null;

    /**
     * Validation map for fields in type Narrative
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRNarrative Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRNarrative::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            $value = isset($data[self::FIELD_STATUS]) ? $data[self::FIELD_STATUS] : null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $ext = $data[self::FIELD_STATUS_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRNarrativeStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRNarrativeStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRNarrativeStatus([FHIRNarrativeStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRNarrativeStatus($ext));
            }
        }
        if (isset($data[self::FIELD_DIV])) {
            if ($data[self::FIELD_DIV] instanceof FHIRRaw) {
                $this->setDiv($data[self::FIELD_DIV]);
            } else {
                $this->setDiv(new FHIRRaw($data[self::FIELD_DIV]));
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
        if ('' !==  $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<Narrative{$xmlns}></Narrative>";
    }

    /**
     * The status of a resource narrative
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the narrative - whether it's entirely generated (from just the
     * defined data or the extensions too), or whether a human authored it and it may
     * contain additional data.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRNarrativeStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of a resource narrative
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the narrative - whether it's entirely generated (from just the
     * defined data or the extensions too), or whether a human authored it and it may
     * contain additional data.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRNarrativeStatus $status
     * @return static
     */
    public function setStatus(FHIRNarrativeStatus $status = null)
    {
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * Raw type used in special cases
     *
     * The actual narrative content, a stripped down version of XHTML.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRRaw
     */
    public function getDiv()
    {
        return $this->div;
    }

    /**
     * Raw type used in special cases
     *
     * The actual narrative content, a stripped down version of XHTML.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRRaw $div
     * @return static
     */
    public function setDiv(FHIRRaw $div = null)
    {
        $this->_trackValueSet($this->div, $div);
        $this->div = $div;
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
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDiv())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DIV] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NARRATIVE, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DIV])) {
            $v = $this->getDiv();
            foreach($validationRules[self::FIELD_DIV] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_NARRATIVE, self::FIELD_DIV, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DIV])) {
                        $errs[self::FIELD_DIV] = [];
                    }
                    $errs[self::FIELD_DIV][$rule] = $err;
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
     * @param null|string|\DOMElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRNarrative $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRNarrative
     */
    public static function xmlUnserialize($element = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            return null;
        }
        if (is_string($element)) {
            libxml_use_internal_errors(true);
            $dom = new \DOMDocument();
            $dom->loadXML($element, $libxmlOpts);
            if (false === $dom) {
                throw new \DomainException(sprintf('FHIRNarrative::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRNarrative::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRNarrative(null);
        } elseif (!is_object($type) || !($type instanceof FHIRNarrative)) {
            throw new \RuntimeException(sprintf(
                'FHIRNarrative::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRNarrative or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        if ('' === $type->_getFHIRXMLNamespace() && (null === $element->parentNode || $element->namespaceURI !== $element->parentNode->namespaceURI)) {
            $type->_setFHIRXMLNamespace($element->namespaceURI);
        }
        for($i = 0; $i < $element->childNodes->length; $i++) {
            $n = $element->childNodes->item($i);
            if (!($n instanceof \DOMElement)) {
                continue;
            }
            if (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIRNarrativeStatus::xmlUnserialize($n));
            } elseif (self::FIELD_DIV === $n->nodeName) {
                $type->setDiv(FHIRRaw::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ID);
        if (null !== $n) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setId($n->nodeValue);
            }
        }
        return $type;
    }

    /**
     * @param null|\DOMElement $element
     * @param null|int $libxmlOpts
     * @return \DOMElement
     */
    public function xmlSerialize(\DOMElement $element = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            $dom = new \DOMDocument();
            $dom->loadXML($this->_getFHIRXMLElementDefinition(), $libxmlOpts);
            $element = $dom->documentElement;
        } elseif (null === $element->namespaceURI && '' !== ($xmlns = $this->_getFHIRXMLNamespace())) {
            $element->setAttribute('xmlns', $xmlns);
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDiv())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DIV);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        return $element;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_STATUS] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRNarrativeStatus::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_STATUS_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getDiv())) {
            $a[self::FIELD_DIV] = $v;
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