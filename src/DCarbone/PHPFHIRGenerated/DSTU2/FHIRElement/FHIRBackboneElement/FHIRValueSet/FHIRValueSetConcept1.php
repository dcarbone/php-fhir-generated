<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 28th, 2019 20:54+0000
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * A value set specifies a set of codes drawn from one or more code systems.
 *
 * Class FHIRValueSetConcept1
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet
 */
class FHIRValueSetConcept1 extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_CONCEPT_1;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_CODE = 'code';
    const FIELD_CODE_EXT = '_code';
    const FIELD_DESIGNATION = 'designation';
    const FIELD_DESIGNATION_EXT = '_designation';
    const FIELD_DISPLAY = 'display';
    const FIELD_DISPLAY_EXT = '_display';

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a code for the concept to be included or excluded.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    protected $code = null;

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Additional representations for this concept when used in this value set - other
     * languages, aliases, specialized purposes, used for particular purposes, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDesignation[]
     */
    protected $designation = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The text to display to the user for this concept in the context of this
     * valueset. If no display is provided, then applications using the value set use
     * the display specified for the code by the system.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $display = null;

    /**
     * FHIRValueSetConcept1 Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRValueSetConcept1::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CODE])) {
            $ext = (isset($data[self::FIELD_CODE_EXT]) && is_array($data[self::FIELD_CODE_EXT]))
                ? $data[self::FIELD_CODE_EXT]
                : null;
            if ($data[self::FIELD_CODE] instanceof FHIRCode) {
                $this->setCode($data[self::FIELD_CODE]);
            } elseif ($ext && is_scalar($data[self::FIELD_CODE])) {
                $this->setCode(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_CODE]] + $ext));
            } else {
                $this->setCode(new FHIRCode($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_DESIGNATION])) {
            $ext = (isset($data[self::FIELD_DESIGNATION_EXT]) && is_array($data[self::FIELD_DESIGNATION_EXT]))
                ? $data[self::FIELD_DESIGNATION_EXT]
                : null;
            if (is_array($data[self::FIELD_DESIGNATION])) {
                foreach($data[self::FIELD_DESIGNATION] as $i => $v) {
                    if ($v instanceof FHIRValueSetDesignation) {
                        $this->addDesignation($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addDesignation(new FHIRValueSetDesignation([FHIRValueSetDesignation::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addDesignation(new FHIRValueSetDesignation($v));
                    }
                }
            } elseif ($data[self::FIELD_DESIGNATION] instanceof FHIRValueSetDesignation) {
                $this->addDesignation($data[self::FIELD_DESIGNATION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DESIGNATION])) {
                $this->addDesignation(new FHIRValueSetDesignation([FHIRValueSetDesignation::FIELD_VALUE => $data[self::FIELD_DESIGNATION]] + $ext));
            } else {
                $this->addDesignation(new FHIRValueSetDesignation($data[self::FIELD_DESIGNATION]));
            }
        }
        if (isset($data[self::FIELD_DISPLAY])) {
            $ext = (isset($data[self::FIELD_DISPLAY_EXT]) && is_array($data[self::FIELD_DISPLAY_EXT]))
                ? $data[self::FIELD_DISPLAY_EXT]
                : null;
            if ($data[self::FIELD_DISPLAY] instanceof FHIRString) {
                $this->setDisplay($data[self::FIELD_DISPLAY]);
            } elseif ($ext && is_scalar($data[self::FIELD_DISPLAY])) {
                $this->setDisplay(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DISPLAY]] + $ext));
            } else {
                $this->setDisplay(new FHIRString($data[self::FIELD_DISPLAY]));
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
     * @return static
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
        return "<ValueSetConcept1{$xmlns}></ValueSetConcept1>";
    }


    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a code for the concept to be included or excluded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a code for the concept to be included or excluded.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode $code
     * @return static
     */
    public function setCode($code = null)
    {
        if (null === $code) {
            $this->code = null;
            return $this;
        }
        if ($code instanceof FHIRCode) {
            $this->code = $code;
            return $this;
        }
        $this->code = new FHIRCode($code);
        return $this;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Additional representations for this concept when used in this value set - other
     * languages, aliases, specialized purposes, used for particular purposes, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDesignation[]
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Additional representations for this concept when used in this value set - other
     * languages, aliases, specialized purposes, used for particular purposes, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDesignation $designation
     * @return static
     */
    public function addDesignation(FHIRValueSetDesignation $designation = null)
    {
        $this->designation[] = $designation;
        return $this;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Additional representations for this concept when used in this value set - other
     * languages, aliases, specialized purposes, used for particular purposes, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDesignation[] $designation
     * @return static
     */
    public function setDesignation(array $designation = [])
    {
        $this->designation = [];
        if ([] === $designation) {
            return $this;
        }
        foreach($designation as $v) {
            if ($v instanceof FHIRValueSetDesignation) {
                $this->addDesignation($v);
            } else {
                $this->addDesignation(new FHIRValueSetDesignation($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The text to display to the user for this concept in the context of this
     * valueset. If no display is provided, then applications using the value set use
     * the display specified for the code by the system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The text to display to the user for this concept in the context of this
     * valueset. If no display is provided, then applications using the value set use
     * the display specified for the code by the system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $display
     * @return static
     */
    public function setDisplay($display = null)
    {
        if (null === $display) {
            $this->display = null;
            return $this;
        }
        if ($display instanceof FHIRString) {
            $this->display = $display;
            return $this;
        }
        $this->display = new FHIRString($display);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept1 $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept1
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
                throw new \DomainException(sprintf('FHIRValueSetConcept1::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRValueSetConcept1::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRValueSetConcept1;
        } elseif (!is_object($type) || !($type instanceof FHIRValueSetConcept1)) {
            throw new \RuntimeException(sprintf(
                'FHIRValueSetConcept1::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept1 or null, %s seen.',
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
        if (isset($attributes->code)) {
            $type->setCode((string)$attributes->code);
        }
        if (isset($children->code)) {
            $type->setCode(FHIRCode::xmlUnserialize($children->code));
        }
        if (isset($children->designation)) {
            foreach($children->designation as $child) {
                $type->addDesignation(FHIRValueSetDesignation::xmlUnserialize($child));
            }
        }
        if (isset($attributes->display)) {
            $type->setDisplay((string)$attributes->display);
        }
        if (isset($children->display)) {
            $type->setDisplay(FHIRString::xmlUnserialize($children->display));
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
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getDesignation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DESIGNATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDisplay())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DISPLAY, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v->getValue();
            $a[self::FIELD_CODE_EXT] = $v;
        }
        if ([] !== ($vs = $this->getDesignation())) {
            $a[self::FIELD_DESIGNATION] = $vs;
        }
        if (null !== ($v = $this->getDisplay())) {
            $a[self::FIELD_DISPLAY] = $v->getValue();
            $a[self::FIELD_DISPLAY_EXT] = $v;
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