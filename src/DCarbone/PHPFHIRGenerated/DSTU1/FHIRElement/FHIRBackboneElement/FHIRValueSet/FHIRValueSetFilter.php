<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRValueSet;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 29th, 2019 23:10+0000
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
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRFilterOperator;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * A value set specifies a set of codes drawn from one or more code systems.
 *
 * Class FHIRValueSetFilter
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRValueSet
 */
class FHIRValueSetFilter extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_FILTER;
    const FIELD_OP = 'op';
    const FIELD_OP_EXT = '_op';
    const FIELD_PROPERTY = 'property';
    const FIELD_PROPERTY_EXT = '_property';
    const FIELD_VALUE = 'value';
    const FIELD_VALUE_EXT = '_value';

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    /**
     * The kind of operation to perform as a part of a property based filter
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The kind of operation to perform as a part of the filter criteria.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRFilterOperator
     */
    protected $op = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A code that identifies a property defined in the code system.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    protected $property = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The match value may be either a code defined by the system, or a string value
     * which is used a regex match on the literal string of the property value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    protected $value = null;

    /**
     * Validation map for fields in type ValueSet.Filter
     * @var array
     */
    private static $_fieldValidation = [    ];

    /**
     * FHIRValueSetFilter Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRValueSetFilter::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_OP])) {
            $ext = (isset($data[self::FIELD_OP_EXT]) && is_array($data[self::FIELD_OP_EXT]))
                ? $data[self::FIELD_OP_EXT]
                : null;
            if ($data[self::FIELD_OP] instanceof FHIRFilterOperator) {
                $this->setOp($data[self::FIELD_OP]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_OP])) {
                    $this->setOp(new FHIRFilterOperator([FHIRFilterOperator::FIELD_VALUE => $data[self::FIELD_OP]] + $ext));
                } else if (is_array($data[self::FIELD_OP])) {
                    $this->setOp(new FHIRFilterOperator(array_merge($ext, $data[self::FIELD_OP])));
                }
            } else {
                $this->setOp(new FHIRFilterOperator($data[self::FIELD_OP]));
            }
        }
        if (isset($data[self::FIELD_PROPERTY])) {
            $ext = (isset($data[self::FIELD_PROPERTY_EXT]) && is_array($data[self::FIELD_PROPERTY_EXT]))
                ? $data[self::FIELD_PROPERTY_EXT]
                : null;
            if ($data[self::FIELD_PROPERTY] instanceof FHIRCode) {
                $this->setProperty($data[self::FIELD_PROPERTY]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PROPERTY])) {
                    $this->setProperty(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_PROPERTY]] + $ext));
                } else if (is_array($data[self::FIELD_PROPERTY])) {
                    $this->setProperty(new FHIRCode(array_merge($ext, $data[self::FIELD_PROPERTY])));
                }
            } else {
                $this->setProperty(new FHIRCode($data[self::FIELD_PROPERTY]));
            }
        }
        if (isset($data[self::FIELD_VALUE])) {
            $ext = (isset($data[self::FIELD_VALUE_EXT]) && is_array($data[self::FIELD_VALUE_EXT]))
                ? $data[self::FIELD_VALUE_EXT]
                : null;
            if ($data[self::FIELD_VALUE] instanceof FHIRCode) {
                $this->setValue($data[self::FIELD_VALUE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_VALUE])) {
                    $this->setValue(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_VALUE]] + $ext));
                } else if (is_array($data[self::FIELD_VALUE])) {
                    $this->setValue(new FHIRCode(array_merge($ext, $data[self::FIELD_VALUE])));
                }
            } else {
                $this->setValue(new FHIRCode($data[self::FIELD_VALUE]));
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
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<ValueSetFilter{$xmlns}></ValueSetFilter>";
    }

    /**
     * The kind of operation to perform as a part of a property based filter
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The kind of operation to perform as a part of the filter criteria.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRFilterOperator
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * The kind of operation to perform as a part of a property based filter
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The kind of operation to perform as a part of the filter criteria.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRFilterOperator $op
     * @return static
     */
    public function setOp(FHIRFilterOperator $op = null)
    {
        $this->op = $op;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A code that identifies a property defined in the code system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A code that identifies a property defined in the code system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode $property
     * @return static
     */
    public function setProperty($property = null)
    {
        if (null === $property) {
            $this->property = null;
            return $this;
        }
        if ($property instanceof FHIRCode) {
            $this->property = $property;
            return $this;
        }
        $this->property = new FHIRCode($property);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The match value may be either a code defined by the system, or a string value
     * which is used a regex match on the literal string of the property value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The match value may be either a code defined by the system, or a string value
     * which is used a regex match on the literal string of the property value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode $value
     * @return static
     */
    public function setValue($value = null)
    {
        if (null === $value) {
            $this->value = null;
            return $this;
        }
        if ($value instanceof FHIRCode) {
            $this->value = $value;
            return $this;
        }
        $this->value = new FHIRCode($value);
        return $this;
    }

    /**
     * @return array
     */
    public function _validationErrors()
    {
        // TODO: implement validation
        return [];
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter
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
                throw new \DomainException(sprintf('FHIRValueSetFilter::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRValueSetFilter::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRValueSetFilter;
        } elseif (!is_object($type) || !($type instanceof FHIRValueSetFilter)) {
            throw new \RuntimeException(sprintf(
                'FHIRValueSetFilter::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter or null, %s seen.',
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
        if (isset($children->op)) {
            $type->setOp(FHIRFilterOperator::xmlUnserialize($children->op));
        }
        if (isset($attributes->property)) {
            $type->setProperty((string)$attributes->property);
        }
        if (isset($children->property)) {
            $type->setProperty(FHIRCode::xmlUnserialize($children->property));
        }
        if (isset($attributes->value)) {
            $type->setValue((string)$attributes->value);
        }
        if (isset($children->value)) {
            $type->setValue(FHIRCode::xmlUnserialize($children->value));
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

        if (null !== ($v = $this->getOp())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OP, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getProperty())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PROPERTY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValue())) {
            $sxe->addAttribute(self::FIELD_VALUE, (string)$v);
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getOp())) {
            $a[self::FIELD_OP] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_OP_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getProperty())) {
            $a[self::FIELD_PROPERTY] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_PROPERTY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValue())) {
            $a[self::FIELD_VALUE] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_VALUE_EXT] = $enc;
            }
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