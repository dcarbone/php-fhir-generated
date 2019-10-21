<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:04+0000
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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * A reference to a document.
 *
 * Class FHIRDocumentReferenceService
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference
 */
class FHIRDocumentReferenceService extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_SERVICE;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ADDRESS = 'address';
    const FIELD_ADDRESS_EXT = '_address';
    const FIELD_PARAMETER = 'parameter';
    const FIELD_PARAMETER_EXT = '_parameter';
    const FIELD_TYPE = 'type';

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Where the service end-point is located.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $address = null;
    /**
     * A reference to a document.
     *
     * A list of named parameters that is used in the service call.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceParameter[]
     */
    private $parameter = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of the service that can be used to access the documents.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;

    /**
     * FHIRDocumentReferenceService Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDocumentReferenceService::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ADDRESS])) {
            $ext = (isset($data[self::FIELD_ADDRESS_EXT]) && is_array($data[self::FIELD_ADDRESS_EXT]))
                ? $data[self::FIELD_ADDRESS_EXT]
                : null;
            if ($data[self::FIELD_ADDRESS] instanceof FHIRString) {
                $this->setAddress($data[self::FIELD_ADDRESS]);
            } elseif ($ext && is_scalar($data[self::FIELD_ADDRESS])) {
                $this->setAddress(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_ADDRESS]] + $ext));
            } else {
                $this->setAddress(new FHIRString($data[self::FIELD_ADDRESS]));
            }
        }
        if (isset($data[self::FIELD_PARAMETER])) {
            $ext = (isset($data[self::FIELD_PARAMETER_EXT]) && is_array($data[self::FIELD_PARAMETER_EXT]))
                ? $data[self::FIELD_PARAMETER_EXT]
                : null;
            if (is_array($data[self::FIELD_PARAMETER])) {
                foreach($data[self::FIELD_PARAMETER] as $i => $v) {
                    if ($v instanceof FHIRDocumentReferenceParameter) {
                        $this->addParameter($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addParameter(new FHIRDocumentReferenceParameter([FHIRDocumentReferenceParameter::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addParameter(new FHIRDocumentReferenceParameter($v));
                    }
                }
            } elseif ($data[self::FIELD_PARAMETER] instanceof FHIRDocumentReferenceParameter) {
                $this->addParameter($data[self::FIELD_PARAMETER]);
            } elseif ($ext && is_scalar($data[self::FIELD_PARAMETER])) {
                $this->addParameter(new FHIRDocumentReferenceParameter([FHIRDocumentReferenceParameter::FIELD_VALUE => $data[self::FIELD_PARAMETER]] + $ext));
            } else {
                $this->addParameter(new FHIRDocumentReferenceParameter($data[self::FIELD_PARAMETER]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceService
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
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
        return "<DocumentReferenceService{$xmlns}></DocumentReferenceService>";
    }


    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Where the service end-point is located.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Where the service end-point is located.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $address
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceService
     */
    public function setAddress($address = null)
    {
        if (null === $address) {
            $this->address = null;
            return $this;
        }
        if ($address instanceof FHIRString) {
            $this->address = $address;
            return $this;
        }
        $this->address = new FHIRString($address);
        return $this;
    }

    /**
     * A reference to a document.
     *
     * A list of named parameters that is used in the service call.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceParameter[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * A reference to a document.
     *
     * A list of named parameters that is used in the service call.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceParameter $parameter
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceService
     */
    public function addParameter(FHIRDocumentReferenceParameter $parameter = null)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * A reference to a document.
     *
     * A list of named parameters that is used in the service call.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceParameter[] $parameter
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceService
     */
    public function setParameter(array $parameter = [])
    {
        $this->parameter = [];
        if ([] === $parameter) {
            return $this;
        }
        foreach($parameter as $v) {
            if ($v instanceof FHIRDocumentReferenceParameter) {
                $this->addParameter($v);
            } else {
                $this->addParameter(new FHIRDocumentReferenceParameter($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of the service that can be used to access the documents.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of the service that can be used to access the documents.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $type
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceService
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceService $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceService
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
                throw new \DomainException(sprintf('FHIRDocumentReferenceService::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDocumentReferenceService::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRDocumentReferenceService;
        } elseif (!is_object($type) || !($type instanceof FHIRDocumentReferenceService)) {
            throw new \RuntimeException(sprintf(
                'FHIRDocumentReferenceService::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceService or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->address)) {
            $type->setAddress((string)$attributes->address);
        }
        if (isset($children->address)) {
            $type->setAddress(FHIRString::xmlUnserialize($children->address));
        }
        if (isset($children->parameter)) {
            foreach($children->parameter as $child) {
                $type->addParameter(FHIRDocumentReferenceParameter::xmlUnserialize($child));
            }
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
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
        if (null !== ($v = $this->getAddress())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ADDRESS, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getParameter())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PARAMETER, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAddress())) {
            $a[self::FIELD_ADDRESS] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_ADDRESS_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getParameter())) {
            $a[self::FIELD_PARAMETER] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PARAMETER][] = $v->getValue();
                if ($v->_hasNonValueFieldsDefined()) {
                    if (!isset($a[self::FIELD_PARAMETER_EXT])) {
                        $a[self::FIELD_PARAMETER_EXT] = [];
                    }
                    $a[self::FIELD_PARAMETER_EXT][] = $v;
                }
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
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